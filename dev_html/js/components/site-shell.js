/* Shared portfolio shell. No external JavaScript dependencies. */
(() => {
    "use strict";

    const ownScript = document.currentScript;
    const localRoot = ownScript?.src
        ? new URL("../../", ownScript.src)
        : new URL("./", location.href);

    function init() {
        const root = document.documentElement;
        const header = document.getElementById("gd-header");
        const footer = document.getElementById("gd-directory");
        const dialog = document.getElementById("gd-sheet");
        const main = document.querySelector("main");

        if (!header || !footer || !dialog || !main || root.hasAttribute("data-gd-ready")) {
            return;
        }

        const $ = (selector, context = document) => context.querySelector(selector);
        const $$ = (selector, context = document) => [...context.querySelectorAll(selector)];
        const desktop = matchMedia("(min-width: 60rem)");
        const reducedMotion = matchMedia("(prefers-reduced-motion: reduce)");
        const systemDark = matchMedia("(prefers-color-scheme: dark)");

        const dock = $(".gd-dock");
        const reader = $(".gd-reader");
        const title = $("#gd-sheet-title");
        const subtitle = $("#gd-sheet-description");
        const content = $("[data-gd-sheet-content]");
        const notice = $("[data-gd-notice]");
        const manualCopy = $("[data-gd-manual-copy]");
        const manualInput = $("#gd-copy-value");
        const announcer = $("[data-gd-announcement]");

        const canEnhance = typeof dialog.showModal === "function";
        const session = `${Date.now()}-${Math.random().toString(36).slice(2)}`;
        const historyKey = "__gdShell";

        let sections = [];
        let activeSection = 0;
        let sectionMotion = null;
        let sectionMotionFrame = 0;
        let sectionScrollStyle = null;
        let currentKind = "";
        let opener = null;
        let lockSnapshot = null;
        let closing = false;
        let waitingForBack = false;
        let afterClose = null;
        let scrollFrame = 0;

        /* Small inline outline icons: no icon-loader dependency. */
        const paths = {
            work: '<rect x="3" y="7" width="18" height="14" rx="2"/><path d="M8 7V5a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2M3 12h18M10 12v3h4v-3"/>',
            education: '<path d="m2 9 10-5 10 5-10 5L2 9Zm4 2v6c3 3 9 3 12 0v-6M22 9v7"/>',
            page: '<rect x="4" y="3" width="16" height="18" rx="2"/><path d="M8 8h8M8 12h8M8 16h5"/>',
            contact: '<rect x="3" y="5" width="18" height="14" rx="2"/><path d="m3 6 9 7 9-7"/>',
            menu: '<path d="M4 6h16M4 12h16M4 18h16"/>',
            close: '<path d="m6 6 12 12M18 6 6 18"/>',
            "chevron-down": '<path d="m6 9 6 6 6-6"/>',
            "chevron-up": '<path d="m6 15 6-6 6 6"/>',
            "chevron-left": '<path d="m15 6-6 6 6 6"/>',
            "chevron-right": '<path d="m9 6 6 6-6 6"/>',
            sun: '<circle cx="12" cy="12" r="4"/><path d="M12 2v2M12 20v2M2 12h2M20 12h2M5 5l1.5 1.5M17.5 17.5 19 19M5 19l1.5-1.5M17.5 6.5 19 5"/>',
            moon: '<path d="M20.5 13A8.5 8.5 0 0 1 11 3.5 8.5 8.5 0 1 0 20.5 13Z"/>'
        };

        function icon(name) {
            return `<svg xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 24 24" width="20" height="20"
                fill="none" stroke="currentColor" stroke-width="1.7"
                stroke-linecap="round" stroke-linejoin="round"
                aria-hidden="true">${paths[name] || paths.page}</svg>`;
        }

        $$("[data-gd-icon]").forEach((node) => {
            node.innerHTML = icon(node.dataset.gdIcon);
        });

        /* The footer is the manifest. Production hrefs remain in HTML. */
        const mode = header.dataset.gdMode || "auto";
        const isLocal = mode === "local" || (
            mode !== "live" && (
                location.protocol === "file:" ||
                ["localhost", "127.0.0.1", "[::1]"].includes(location.hostname) ||
                location.pathname.includes("/dev_html/")
            )
        );

        const routes = new Map();

        $$("[data-gd-route]", footer).forEach((anchor) => {
            const liveURL = new URL(anchor.getAttribute("href"), "https://www.georgedreemer.com");
            let href = anchor.getAttribute("href");

            if (isLocal) {
                href = anchor.dataset.gdLocal
                    ? new URL(anchor.dataset.gdLocal, localRoot).href
                    : liveURL.href;
            }

            anchor.href = href;

            routes.set(anchor.dataset.gdRoute, {
                id: anchor.dataset.gdRoute,
                label: anchor.textContent.trim(),
                href: anchor.href,
                liveURL,
                description: anchor.dataset.gdDescription || "",
                group: anchor.closest("[data-gd-group]")?.dataset.gdGroup || "general"
            });
        });

        $$("[data-gd-link]").forEach((anchor) => {
            const route = routes.get(anchor.dataset.gdLink);
            if (route) anchor.href = route.href;
        });

        const normalPath = (pathname) => {
            const value = pathname.replace(/\/+$/, "").replace(/\.(html|php)$/i, "");
            return value || "/";
        };

        const inferredPage = [...routes.values()].find((route) => {
            const localFile = route.id === "masters" || route.id === "bachelors" ||
                route.id === "education"
                ? `/education-pages/${route.id}.html`
                : `/experience-pages/${route.id}.html`;

            return normalPath(location.pathname) === normalPath(route.liveURL.pathname) ||
                location.pathname.endsWith(localFile);
        });

        const currentID = header.dataset.gdCurrent || inferredPage?.id || "";
        const current = routes.get(currentID);

        $$("[data-gd-route]", footer).forEach((anchor) => {
            if (anchor.dataset.gdRoute === currentID) {
                anchor.setAttribute("aria-current", "page");
            }
        });

        const primaryGroup = current?.group === "general"
            ? (currentID === "home" ? "" : "explore")
            : current?.group;

        $$("[data-gd-primary]").forEach((node) => {
            if (node.dataset.gdPrimary === primaryGroup) {
                node.setAttribute("data-gd-active", "");
                if (currentID === "education" && node.dataset.gdLink === "education") {
                    node.setAttribute("aria-current", "page");
                }
            }
        });

        /* Optional email: only enabled when supplied by the site owner. */
        const email = (header.dataset.gdEmail || "").trim();
        const hasEmail = /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email);

        if (hasEmail) {
            $$("[data-gd-email-link]").forEach((anchor) => {
                anchor.href = `mailto:${email}`;
                anchor.textContent = email;
            });
            $$("[data-gd-email-row]").forEach((row) => { row.hidden = false; });
        }

        $$("[data-gd-year]").forEach((node) => {
            node.textContent = String(new Date().getFullYear());
        });

        /* Native skip link, retaining an existing main ID when present. */
        if (!main.id) {
            let id = "page-content";
            let suffix = 1;
            while (document.getElementById(id)) id = `page-content-${suffix++}`;
            main.id = id;
        }
        $("#gd-skip").href = `#${encodeURIComponent(main.id)}`;

        function focusElement(node) {
            if (!node) return;

            const needsTabindex = !node.hasAttribute("tabindex") &&
                !node.matches("a[href], button, input, select, textarea");

            if (needsTabindex) {
                node.setAttribute("tabindex", "-1");
                node.addEventListener("blur", () => node.removeAttribute("tabindex"), {
                    once: true
                });
            }

            node.focus({ preventScroll: true });
        }

        $("#gd-skip").addEventListener("click", () => focusElement(main));

        /* Breadcrumbs are structural links, not fake browser Back buttons. */
        if (current && currentID !== "home") {
            const list = $("[data-gd-breadcrumb]");
            const items = [{ label: "Home", href: routes.get("home")?.href || "/" }];

            if (current.group === "work") {
                items.push({ label: "Work", href: "#gd-work-directory" });
            } else if (current.group === "education" && currentID !== "education") {
                items.push({
                    label: "Education",
                    href: routes.get("education")?.href || "/education"
                });
            }

            items.push({ label: current.label });

            items.forEach((item) => {
                const li = document.createElement("li");
                const node = document.createElement(item.href ? "a" : "span");
                node.textContent = item.label;

                if (item.href) node.href = item.href;
                else node.setAttribute("aria-current", "page");

                li.append(node);
                list.append(li);
            });

            $(".gd-breadcrumb").hidden = false;
        }

        /* Contextual links: editorial relationships, not random suggestions. */
        const relationships = {
            masters: [
                ["datasafari", "Continue into the data-science library case study."],
                ["bachelors", "See the earlier business and entrepreneurial foundation."],
                ["education", "Return to the complete education overview."]
            ],
            thoughtbubble: [
                ["skipschoolmakemoney", "Explore the other venture connecting product, brand, and audience."],
                ["bachelors", "See the academic context surrounding this period."],
                ["dreemcorp", "Continue into the creative-production work."]
            ],
            bachelors: [
                ["skipschoolmakemoney", "See the apparel venture behind the brand and commerce work."],
                ["thoughtbubble", "Explore the social product behind the development and product work."],
                ["masters", "Continue into the later analytical and research work."]
            ]
        };

        const relatedItems = relationships[currentID] || [];
        const relatedList = $("[data-gd-related-list]");

        relatedItems.forEach(([id, description]) => {
            const route = routes.get(id);
            if (!route || id === currentID) return;

            const li = document.createElement("li");
            const anchor = document.createElement("a");
            const name = document.createElement("span");
            const detail = document.createElement("span");
            const arrow = document.createElement("span");

            anchor.href = route.href;
            name.className = "gd-related__name";
            name.textContent = route.label;
            detail.className = "gd-related__description";
            detail.textContent = description || route.description;
            arrow.className = "gd-related__arrow";
            arrow.textContent = "↗";
            arrow.setAttribute("aria-hidden", "true");

            anchor.append(name, detail, arrow);
            li.append(anchor);
            relatedList.append(li);
        });

        if (relatedList.children.length) {
            $("[data-gd-related]").hidden = false;
        }

        /* Shell theme: no storage access, no page-component overrides. */
        let explicitTheme = root.getAttribute("data-gd-theme");

        function applyTheme() {
            const theme = explicitTheme === "light" || explicitTheme === "dark"
                ? explicitTheme
                : (systemDark.matches ? "dark" : "light");

            root.setAttribute("data-gd-theme", theme);

            $$("[data-gd-theme-toggle]").forEach((button) => {
                button.hidden = false;
                button.setAttribute(
                    "aria-label",
                    `Switch navigation to ${theme === "dark" ? "light" : "dark"} mode`
                );
                button.title = button.getAttribute("aria-label");
                $("[data-gd-theme-icon]", button).innerHTML =
                    icon(theme === "dark" ? "sun" : "moon");
            });

            document.dispatchEvent(new CustomEvent("gd:theme", {
                detail: { theme }
            }));
        }

        $$("[data-gd-theme-toggle]").forEach((button) => {
            button.addEventListener("click", () => {
                explicitTheme = root.dataset.gdTheme === "dark" ? "light" : "dark";
                applyTheme();
            });
        });

        systemDark.addEventListener("change", applyTheme);
        applyTheme();

        /* Escape potentially restrictive Sitebuilder component ancestors.
           The footer stays in document flow; fixed controls/dialog become
           direct body children. No generated elements are deleted. */
        document.body.prepend($("#gd-skip"), header);
        [dock, reader, dialog].forEach((node) => {
            if (node) document.body.append(node);
        });

        function measureChrome() {
            root.style.setProperty(
                "--gd-header-height",
                `${desktop.matches ? Math.ceil(header.getBoundingClientRect().height) : 0}px`
            );

            root.style.setProperty(
                "--gd-anchor-offset",
                desktop.matches
                    ? "calc(var(--gd-header-height) + 1rem)"
                    : "1rem"
            );

            root.style.setProperty(
                "--gd-bottom-space",
                !canEnhance
                    ? "0px"
                    : desktop.matches
                        ? (sections.length > 1 ? "5rem" : "0px")
                        : `${Math.ceil(dock.getBoundingClientRect().height) + 16}px`
            );
        }

        /* In browsers without native modal dialog support, retain the
           ordinary header/footer links rather than showing dead controls. */
        if (!canEnhance) {
            root.setAttribute("data-gd-ready", "");
            measureChrome();
            return;
        }

        dock.hidden = false;
        $$("[data-gd-open][hidden]", header).forEach((node) => { node.hidden = false; });

        /* Sheet rendering: clone the manifest, not a second hard-coded menu. */
        function cloneGroup(source) {
            const clone = source.cloneNode(true);
            clone.removeAttribute("id");
            $$("[id]", clone).forEach((node) => node.removeAttribute("id"));
            clone.classList.remove("gd-network");
            clone.classList.add("gd-menu-group");
            return clone;
        }

        function setExpanded() {
            $$("[data-gd-open]").forEach((node) => {
                node.setAttribute("aria-controls", "gd-sheet");
                node.setAttribute("aria-haspopup", "dialog");
                node.setAttribute(
                    "aria-expanded",
                    String(dialog.open && node.dataset.gdOpen === currentKind)
                );
            });
        }

        function renderDirectory(kind) {
            const grid = document.createElement("nav");
            grid.className = "gd-menu-grid";
            grid.setAttribute("aria-label", kind === "site" ? "Site index" : `${kind} links`);

            const groups = $$(".gd-directory-group", footer).filter((group) =>
                kind === "site" || group.dataset.gdGroup === kind
            );

            groups.forEach((group) => grid.append(cloneGroup(group)));

            if (kind === "site") {
                const search = document.createElement("div");
                search.className = "gd-search";

                const label = document.createElement("label");
                label.htmlFor = "gd-site-search";
                label.textContent = "Find a destination";

                const input = document.createElement("input");
                input.type = "search";
                input.id = "gd-site-search";
                input.placeholder = "Work, degrees, creative interests…";
                input.autocomplete = "off";
                input.setAttribute("aria-controls", "gd-site-results");

                const empty = document.createElement("p");
                empty.className = "gd-notice";
                empty.textContent = "No matching destinations. Try another word.";
                empty.hidden = true;
                empty.setAttribute("role", "status");

                grid.id = "gd-site-results";

                input.addEventListener("input", () => {
                    const query = input.value.trim().toLocaleLowerCase();
                    let visible = 0;

                    $$(".gd-menu-group", grid).forEach((group) => {
                        const groupLabel = group.dataset.gdGroupLabel.toLocaleLowerCase();

                        $$("li", group).forEach((li) => {
                            li.hidden = Boolean(query) &&
                                !`${groupLabel} ${li.textContent}`.toLocaleLowerCase().includes(query);
                        });

                        const matches = $$("li", group).filter((li) => !li.hidden).length;
                        group.hidden = matches === 0;
                        visible += matches;
                    });

                    empty.hidden = visible > 0;
                });

                search.append(label, input);
                content.append(search, grid, empty);
            } else {
                content.append(grid);
            }
        }

        function renderPageList() {
            const nav = document.createElement("nav");
            nav.setAttribute("aria-label", "On this page");
            const list = document.createElement("ol");
            list.className = "gd-page-list";

            sections.forEach((section, index) => {
                const li = document.createElement("li");
                const anchor = document.createElement("a");
                const number = document.createElement("span");
                const label = document.createElement("span");

                anchor.href = `#${encodeURIComponent(section.id)}`;
                anchor.dataset.gdSectionIndex = String(index);

                if (index === activeSection) {
                    anchor.setAttribute("aria-current", "location");
                }

                number.className = "gd-page-list__number";
                number.textContent = String(index + 1).padStart(2, "0");
                number.setAttribute("aria-hidden", "true");
                label.textContent = section.dataset.nav || section.id;

                anchor.append(number, label);
                li.append(anchor);
                list.append(li);
            });

            nav.append(list);
            content.append(nav);

            const actions = document.createElement("div");
            actions.className = "gd-sheet-actions";

            const copy = document.createElement("button");
            copy.type = "button";
            copy.dataset.gdCopySection = "";
            copy.textContent = "Copy link to current section";

            actions.append(copy);
            content.append(actions);
        }

        function renderSheet(kind) {
            currentKind = kind;
            dialog.dataset.kind = kind;
            content.replaceChildren();
            notice.textContent = "";
            manualCopy.hidden = true;

            const labels = {
                site: ["Explore the site", "Work, education, interests, and elsewhere."],
                work: ["Work", "Explore the individual case studies."],
                education: ["Education", "Degrees and the wider academic background."],
                page: ["On this page", current?.label || $("h1", main)?.textContent.trim() || "Page sections"],
                contact: ["Get in touch", "Choose the route that works for you."]
            };

            const [heading, description] = labels[kind] || labels.site;
            title.textContent = heading;
            subtitle.textContent = description;

            if (kind === "page") {
                renderPageList();
            } else {
                renderDirectory(kind);
            }

            if (kind === "contact" && hasEmail) {
                const actions = document.createElement("div");
                actions.className = "gd-sheet-actions";
                const button = document.createElement("button");
                button.type = "button";
                button.dataset.gdCopyEmail = "";
                button.textContent = "Copy email address";
                actions.append(button);
                content.append(actions);
            }
        }

        /* Preserve exactly the inline properties changed for scroll lock. */
        const lockedProperties = ["position", "top", "left", "right", "width", "overflow"];

        function lockScroll() {
            const body = document.body;
            lockSnapshot = {
                x: window.scrollX,
                y: window.scrollY,
                properties: lockedProperties.map((property) => ({
                    property,
                    value: body.style.getPropertyValue(property),
                    priority: body.style.getPropertyPriority(property)
                }))
            };

            body.style.setProperty("position", "fixed");
            body.style.setProperty("top", `-${lockSnapshot.y}px`);
            body.style.setProperty("left", `-${lockSnapshot.x}px`);
            body.style.setProperty("right", "0");
            body.style.setProperty("width", "100%");
            body.style.setProperty("overflow", "hidden");
        }

        function unlockScroll() {
            if (!lockSnapshot) return;
            const snapshot = lockSnapshot;
            lockSnapshot = null;

            snapshot.properties.forEach(({ property, value, priority }) => {
                if (value) document.body.style.setProperty(property, value, priority);
                else document.body.style.removeProperty(property);
            });

            const oldValue = root.style.getPropertyValue("scroll-behavior");
            const oldPriority = root.style.getPropertyPriority("scroll-behavior");
            root.style.setProperty("scroll-behavior", "auto", "important");
            window.scrollTo(snapshot.x, snapshot.y);

            if (oldValue) root.style.setProperty("scroll-behavior", oldValue, oldPriority);
            else root.style.removeProperty("scroll-behavior");
        }

        function mergedHistoryState(marker) {
            const existing = history.state;
            const state = existing && typeof existing === "object" && !Array.isArray(existing)
                ? { ...existing }
                : {};

            if (marker) state[historyKey] = marker;
            else delete state[historyKey];

            return state;
        }

        function ownsHistoryEntry() {
            return history.state?.[historyKey]?.session === session;
        }

        function showSheet(kind, trigger, recordHistory = true) {
            if (closing || waitingForBack) return;
            if (kind === "page" && sections.length < 2) return;

            const wasOpen = dialog.open;

            if (!wasOpen) {
                opener = trigger || document.activeElement;
                lockScroll();
            }

            renderSheet(kind);

            if (!wasOpen) dialog.showModal();

            if (recordHistory) {
                const marker = { session, kind };
                const state = mergedHistoryState(marker);

                try {
                    if (wasOpen && ownsHistoryEntry()) history.replaceState(state, "", location.href);
                    else history.pushState(state, "", location.href);
                } catch {
                    /* Modal still works if History API is restricted. */
                }
            }

            setExpanded();
            title.focus({ preventScroll: true });
        }

        function closeVisual() {
            if (!dialog.open || closing) return Promise.resolve();
            closing = true;
            dialog.setAttribute("data-closing", "");

            return new Promise((resolve) => {
                window.setTimeout(() => {
                    dialog.close();
                    dialog.removeAttribute("data-closing");
                    unlockScroll();
                    currentKind = "";
                    closing = false;
                    setExpanded();

                    if (opener?.isConnected && opener.getClientRects().length) {
                        opener.focus({ preventScroll: true });
                    }

                    measureChrome();
                    resolve();
                }, reducedMotion.matches ? 0 : 130);
            });
        }

        async function settleClose() {
            waitingForBack = false;
            const action = afterClose;
            afterClose = null;
            await closeVisual();
            if (action) action();
        }

        function requestClose(action = null) {
            if (waitingForBack || closing) return;
            afterClose = action;

            if (ownsHistoryEntry()) {
                waitingForBack = true;
                history.back();
            } else {
                void settleClose();
            }
        }

        window.addEventListener("popstate", (event) => {
            const marker = event.state?.[historyKey];

            if (marker?.session === session) {
                waitingForBack = false;
                afterClose = null;
                showSheet(marker.kind, null, false);
            } else if (dialog.open) {
                void settleClose();
            }
        });

        dialog.addEventListener("cancel", (event) => {
            event.preventDefault();
            requestClose();
        });

        /* Only a genuine backdrop press dismisses the sheet. */
        let backdropPress = false;

        dialog.addEventListener("pointerdown", (event) => {
            const box = dialog.getBoundingClientRect();
            backdropPress = event.target === dialog && (
                event.clientX < box.left || event.clientX > box.right ||
                event.clientY < box.top || event.clientY > box.bottom
            );
        });

        dialog.addEventListener("click", (event) => {
            if (event.target === dialog && backdropPress) requestClose();
            backdropPress = false;
        });

        $("[data-gd-close]").addEventListener("click", () => requestClose());

        /* ------------------------------------------------------------
        * Section navigation:
        * - Logical destination updates immediately.
        * - Rapid clicks advance from that destination, not an old scroll position.
        * - A new request replaces the animation already running.
        * - User scrolling can interrupt the animation.
        * ---------------------------------------------------------- */

        function sectionInset() {
            return (
                desktop.matches
                    ? Math.max(0, header.getBoundingClientRect().bottom)
                    : 0
            ) + 24;
        }

        function sectionDestination(index) {
            const section = sections[index];
            if (!section) return window.scrollY;

            const desired =
                window.scrollY +
                section.getBoundingClientRect().top -
                sectionInset();

            const maximum = Math.max(
                0,
                document.documentElement.scrollHeight - window.innerHeight
            );

            return Math.max(0, Math.min(desired, maximum));
        }

        function paintSectionControls(index) {
            if (!sections.length) return;

            activeSection = Math.max(0, Math.min(index, sections.length - 1));

            const label =
                sections[activeSection].dataset.nav ||
                sections[activeSection].id;

            const count = $("[data-gd-count]");
            const sectionLabel = $("[data-gd-section-label]");

            if (count) {
                count.textContent = `${activeSection + 1} / ${sections.length}`;
            }

            if (sectionLabel) {
                sectionLabel.textContent = label;
            }

            $$("[data-gd-step]").forEach((button) => {
                const destination =
                    activeSection + Number(button.dataset.gdStep);

                button.disabled =
                    destination < 0 ||
                    destination >= sections.length;
            });

            $$("[data-gd-page-control]").forEach((button) => {
                button.setAttribute(
                    "aria-label",
                    `Sections — ${label}, ${activeSection + 1} of ${sections.length}`
                );
            });

            $$("[data-gd-section-index]", dialog).forEach((anchor) => {
                if (Number(anchor.dataset.gdSectionIndex) === activeSection) {
                    anchor.setAttribute("aria-current", "location");
                } else {
                    anchor.removeAttribute("aria-current");
                }
            });
        }

        function restoreSectionScrollStyle() {
            if (!sectionScrollStyle) return;

            const { value, priority } = sectionScrollStyle;

            if (value) {
                root.style.setProperty("scroll-behavior", value, priority);
            } else {
                root.style.removeProperty("scroll-behavior");
            }

            sectionScrollStyle = null;
        }

        function stopSectionMotion() {
            if (sectionMotionFrame) {
                cancelAnimationFrame(sectionMotionFrame);
            }

            sectionMotionFrame = 0;
            sectionMotion = null;
            restoreSectionScrollStyle();
        }

        function jumpTo(index) {
            if (
                dialog.open ||
                index < 0 ||
                index >= sections.length
            ) {
                return;
            }

            const replacingMotion = Boolean(sectionMotion);

            stopSectionMotion();

            /* Update first: the next click now advances from this destination. */
            paintSectionControls(index);

            const section = sections[index];
            const url = new URL(location.href);
            url.hash = section.id;

            if (url.href !== location.href) {
                try {
                    /*
                    * Coalesce a burst of rapid clicks into one navigation action.
                    * A later, separate navigation still creates a history entry.
                    */
                    if (replacingMotion) {
                        history.replaceState(
                            mergedHistoryState(null),
                            "",
                            url.href
                        );
                    } else {
                        history.pushState(
                            mergedHistoryState(null),
                            "",
                            url.href
                        );
                    }
                } catch {
                    /* Scrolling still works where History API access is restricted. */
                }
            }

            focusElement(section);

            sectionScrollStyle = {
                value: root.style.getPropertyValue("scroll-behavior"),
                priority: root.style.getPropertyPriority("scroll-behavior")
            };

            /*
            * Disable CSS smooth scrolling while the animation controls the position.
            * Otherwise two scrolling mechanisms can compete.
            */
            root.style.setProperty("scroll-behavior", "auto", "important");

            const startY = window.scrollY;
            const destination = sectionDestination(index);
            const distance = destination - startY;

            if (reducedMotion.matches || Math.abs(distance) < 2) {
                window.scrollTo(window.scrollX, destination);
                restoreSectionScrollStyle();
                return;
            }

            const motion = {
                index,
                startY,
                startedAt: performance.now(),
                duration: Math.min(
                    460,
                    Math.max(220, Math.abs(distance) * 0.16)
                )
            };

            sectionMotion = motion;

            function animate(now) {
                if (sectionMotion !== motion) return;

                const progress = Math.min(
                    1,
                    (now - motion.startedAt) / motion.duration
                );

                const eased = 1 - Math.pow(1 - progress, 3);

                /*
                * Recalculate the destination in case an image or disclosure changes
                * layout while the animation is running.
                */
                const targetY = sectionDestination(motion.index);

                window.scrollTo(
                    window.scrollX,
                    motion.startY + (targetY - motion.startY) * eased
                );

                if (progress < 1) {
                    sectionMotionFrame = requestAnimationFrame(animate);
                    return;
                }

                window.scrollTo(window.scrollX, targetY);

                sectionMotion = null;
                sectionMotionFrame = 0;

                restoreSectionScrollStyle();
                paintSectionControls(motion.index);
            }

            sectionMotionFrame = requestAnimationFrame(animate);
        }

        function interruptSectionMotion() {
            if (!sectionMotion) return;

            stopSectionMotion();
            syncActiveSection();
        }

        async function copyValue(value, success) {
            try {
                if (!navigator.clipboard?.writeText) throw new Error("Clipboard unavailable");
                await navigator.clipboard.writeText(value);
                notice.textContent = success;
                announcer.textContent = success;
            } catch {
                notice.textContent = "Automatic copying is unavailable here. Select and copy the value below.";
                manualCopy.hidden = false;
                manualInput.value = value;
                manualInput.focus();
                manualInput.select();
            }
        }

        /* Delegated controls continue working for cloned directory links. */
        document.addEventListener("click", (event) => {
            if (!(event.target instanceof Element)) return;

            const open = event.target.closest("[data-gd-open]");

            if (open && !event.metaKey && !event.ctrlKey && !event.shiftKey && !event.altKey) {
                event.preventDefault();
                showSheet(open.dataset.gdOpen, open);
                return;
            }

            const step = event.target.closest("[data-gd-step]");

            if (step && !step.disabled) {
                jumpTo(activeSection + Number(step.dataset.gdStep));
                return;
            }

            const sectionLink = event.target.closest("[data-gd-section-index]");

            if (sectionLink && !event.metaKey && !event.ctrlKey && !event.shiftKey && !event.altKey) {
                event.preventDefault();
                requestClose(() => jumpTo(Number(sectionLink.dataset.gdSectionIndex)));
                return;
            }

            if (event.target.closest("[data-gd-copy-section]")) {
                const section = sections[activeSection];
                if (!section) return;
                const url = new URL(location.href);
                url.hash = section.id;
                void copyValue(url.href, "Section link copied.");
                return;
            }

            if (event.target.closest("[data-gd-copy-email]") && hasEmail) {
                void copyValue(email, "Email address copied.");
                return;
            }

            /* A regular same-tab link inside a sheet first removes the
               temporary modal history entry. Modified/new-tab clicks keep
               their native browser behaviour. */
            const anchor = event.target.closest("a[href]");

            if (
                dialog.open && anchor && dialog.contains(anchor) &&
                anchor.target !== "_blank" && !anchor.hasAttribute("download") &&
                !event.metaKey && !event.ctrlKey && !event.shiftKey && !event.altKey
            ) {
                event.preventDefault();
                const href = anchor.href;
                requestClose(() => { window.location.href = href; });
            }
        });

        /* Page-section tracking. */
        function syncActiveSection() {
            if (!sections.length || dialog.open) return;

            const offset = desktop.matches ? header.getBoundingClientRect().height + 24 : 24;
            let index = 0;

            sections.forEach((section, i) => {
                if (section.getBoundingClientRect().top <= offset) index = i;
            });

            activeSection = index;

            $("[data-gd-count]").textContent = `${index + 1} / ${sections.length}`;
            $("[data-gd-section-label]").textContent =
                sections[index].dataset.nav || sections[index].id;

            $$("[data-gd-step]").forEach((button) => {
                const next = index + Number(button.dataset.gdStep);
                button.disabled = next < 0 || next >= sections.length;
            });
        }

        function scheduleSectionUpdate() {
            if (scrollFrame) return;
            scrollFrame = requestAnimationFrame(() => {
                scrollFrame = 0;
                syncActiveSection();
            });
        }

        function refreshSections() {
            sections = $$("section[id][data-nav]", main).filter((section) =>
                section.getClientRects().length && !section.hidden
            );

            const enabled = sections.length > 1;
            reader.hidden = !enabled;
            $$("[data-gd-page-control]").forEach((node) => { node.hidden = !enabled; });

            syncActiveSection();
            measureChrome();

            if (dialog.open && currentKind === "page") {
                if (enabled) renderSheet("page");
                else requestClose();
            }
        }

        window.addEventListener("scroll", scheduleSectionUpdate, { passive: true });
        window.addEventListener("resize", () => {
            measureChrome();
            scheduleSectionUpdate();
        }, { passive: true });

        desktop.addEventListener("change", () => {
            measureChrome();
            scheduleSectionUpdate();
        });

        if ("ResizeObserver" in window) {
            new ResizeObserver(() => {
                measureChrome();
                scheduleSectionUpdate();
            }).observe(header);
        }

        /* Keyboard heuristic: hide the dock while editing on a small screen.
           Pinch zoom alone does not trigger it. */
        function checkKeyboard() {
            const viewport = window.visualViewport;
            const editable = document.activeElement?.matches(
                'input, textarea, select, [contenteditable="true"]'
            );

            const open = !desktop.matches && editable && viewport &&
                viewport.scale === 1 &&
                window.innerHeight - viewport.height > 140;

            root.classList.toggle("gd-keyboard-open", Boolean(open));
        }

        window.visualViewport?.addEventListener("resize", checkKeyboard);
        document.addEventListener("focusin", checkKeyboard);
        document.addEventListener("focusout", () => setTimeout(checkKeyboard, 0));

        /* Avoid a locked page being stored in the browser's back-forward cache. */
        window.addEventListener("pagehide", () => {
            if (dialog.open) {
                dialog.close();
                unlockScroll();
                currentKind = "";
                closing = false;
            }
        });

        window.addEventListener("pageshow", (event) => {
            if (!event.persisted) return;
            waitingForBack = false;
            afterClose = null;

            if (history.state?.[historyKey]) {
                history.replaceState(mergedHistoryState(null), "", location.href);
            }

            setExpanded();
            refreshSections();
        });

        /* A reload should not revive a stale overlay entry. */
        if (history.state?.[historyKey]) {
            history.replaceState(mergedHistoryState(null), "", location.href);
        }

        root.setAttribute("data-gd-ready", "");
        refreshSections();
        window.addEventListener("load", refreshSections, { once: true });

        /* Small public integration surface for future page enhancements. */
        window.GDShell = Object.freeze({
            refresh: refreshSections,
            open: (kind = "site") => {
                if (["site", "work", "education", "page", "contact"].includes(kind)) {
                    showSheet(kind, document.activeElement);
                }
            },
            close: () => requestClose()
        });
    }

    if (document.readyState === "loading") {
        document.addEventListener("DOMContentLoaded", init, { once: true });
    } else {
        init();
    }
})();
