/*
 * Section navigation
 * ------------------
 * Enhances pages that contain multiple marked sections (`[data-nav]`).
 *
 * What it does:
 * - Builds a floating "you are here" toolbar with previous/next controls,
 *   the current section name, a progress bar, and an expandable section list.
 * - Gives each section a stable, URL-friendly id when one is missing.
 * - Adds a copy-link button to each section heading.
 * - Optionally builds a table of contents inside `[data-sn-toc]`.
 * - Updates the URL hash as the reader moves through the page.
 * - Handles #section links, including reopening parent <details> elements
 *   and re-aligning after lazy content changes the page height.
 *
 * How to use it:
 * - Add `data-nav` to each major section wrapper.
 * - Add `data-nav="Custom label"` to override the section name.
 * - Add an element with `data-sn-toc` to render a contents list.
 *
 * Accessibility:
 * - The toolbar is a labelled <nav> with keyboard-focusable controls.
 * - The section list closes on Escape or outside click.
 * - Smooth scrolling is disabled when the user prefers reduced motion.
 *
 * Configuration:
 * - Adjust `CONFIG` below to change the header offset, scroll threshold,
 *   URL behaviour, copy links, and post-load re-alignment timing.
 */
(function () {
    'use strict';

    const CONFIG = {
        selector: '[data-nav]',
        offset: 72,        // px of fixed header to clear when jumping
        showAfter: 240,    // px scrolled before the toolbar appears
        updateUrl: true,  // true: address bar follows the scroll position
        copyLinks: true,   // copy-link icon in each .section-label
        restoreAt: [0, 400, 1200, 2500] // ms: re-align to #hash as content loads
    };

    const nodes = Array.from(document.querySelectorAll(CONFIG.selector))
        .filter(function (el) { return el.getClientRects().length > 0; });

    if (nodes.length < 2) return;

    const root = document.documentElement;
    root.style.setProperty('--sn-offset', CONFIG.offset + 'px');

    const reduced = function () {
        return window.matchMedia('(prefers-reduced-motion: reduce)').matches;
    };

    const ICON_LINK =
        '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M10 13a5 5 0 0 0 7.07 0l3-3a5 5 0 0 0-7.07-7.07l-1.5 1.5"/><path d="M14 11a5 5 0 0 0-7.07 0l-3 3a5 5 0 0 0 7.07 7.07l1.5-1.5"/></svg>';
    const ICON_PREV =
        '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M15 18l-6-6 6-6"/></svg>';
    const ICON_NEXT =
        '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M9 18l6-6-6-6"/></svg>';

    // ── Sections: label + stable id ──────────────────────────
    const usedIds = new Set(
        Array.from(document.querySelectorAll('[id]')).map(function (e) { return e.id; })
    );

    function slug(text) {
        return text.toLowerCase()
            .normalize('NFKD').replace(/[\u0300-\u036f]/g, '')
            .replace(/&/g, ' and ')
            .replace(/[^a-z0-9]+/g, '-')
            .replace(/^-+|-+$/g, '') || 'section';
    }

    const sections = nodes.map(function (el, i) {
        const heading = el.querySelector('.section-label__text');
        const label = (
            el.dataset.nav ||
            (heading && heading.textContent) ||
            el.getAttribute('aria-label') ||
            ''
        ).trim() || 'Section ' + (i + 1);

        if (!el.id) {
            const base = slug(label);
            let id = base;
            let n = 2;
            while (usedIds.has(id)) id = base + '-' + n++;
            el.id = id;
            usedIds.add(id);
        }

        return { el: el, id: el.id, label: label };
    });

    // ── Toast + clipboard ────────────────────────────────────
    const toast = document.createElement('div');
    toast.className = 'sn-toast';
    toast.setAttribute('role', 'status');
    toast.setAttribute('aria-live', 'polite');
    document.body.appendChild(toast);

    let toastTimer;
    function say(message) {
        toast.textContent = message;
        toast.classList.add('is-on');
        clearTimeout(toastTimer);
        toastTimer = setTimeout(function () {
            toast.classList.remove('is-on');
        }, 1800);
    }

    function copyText(text) {
        if (navigator.clipboard && window.isSecureContext) {
            return navigator.clipboard.writeText(text);
        }
        return new Promise(function (resolve, reject) {
            const field = document.createElement('textarea');
            field.value = text;
            field.setAttribute('readonly', '');
            field.style.cssText = 'position:fixed;top:0;left:0;opacity:0';
            document.body.appendChild(field);
            field.select();
            let ok = false;
            try { ok = document.execCommand('copy'); } catch (e) { ok = false; }
            field.remove();
            ok ? resolve() : reject(new Error('copy failed'));
        });
    }

    // ── Copy-link icons ──────────────────────────────────────
    if (CONFIG.copyLinks) {
        sections.forEach(function (s) {
            const head = s.el.querySelector('.section-label');
            if (!head) return;

            const a = document.createElement('a');
            a.className = 'sn-anchor';
            a.href = '#' + s.id;
            a.title = 'Copy link to this section';
            a.setAttribute('aria-label', 'Copy link to ' + s.label);
            a.innerHTML = ICON_LINK;

            a.addEventListener('click', function (event) {
                event.preventDefault();
                const url = location.href.split('#')[0] + '#' + s.id;

                copyText(url).then(
                    function () { say('Link copied: ' + s.label); },
                    function () {
                        // Clipboard blocked: put it in the address bar instead.
                        history.replaceState(null, '', '#' + s.id);
                        say('Link is in the address bar');
                    }
                );
            });

            head.appendChild(a);
        });
    }

    // ── Optional contents chips ──────────────────────────────
    document.querySelectorAll('[data-sn-toc]').forEach(function (box) {
        const ul = document.createElement('ul');
        ul.className = 'sn-toc';
        sections.forEach(function (s) {
            const li = document.createElement('li');
            const a = document.createElement('a');
            a.href = '#' + s.id;
            a.textContent = s.label;
            li.appendChild(a);
            ul.appendChild(li);
        });
        box.appendChild(ul);
    });

    // ── Toolbar ──────────────────────────────────────────────
    const nav = document.createElement('nav');
    nav.className = 'sn';
    nav.setAttribute('aria-label', 'Page sections');
    nav.innerHTML =
        '<ol class="sn__list" id="sn-list" hidden></ol>' +
        '<div class="sn__bar">' +
        '<button type="button" class="sn__step" data-sn-prev aria-label="Previous section">' + ICON_PREV + '</button>' +
        '<button type="button" class="sn__current" aria-expanded="false" aria-controls="sn-list">' +
        '<span class="sn__count" aria-hidden="true"></span>' +
        '<span class="sn__label"></span>' +
        '</button>' +
        '<button type="button" class="sn__step" data-sn-next aria-label="Next section">' + ICON_NEXT + '</button>' +
        '<span class="sn__progress" aria-hidden="true"><span></span></span>' +
        '</div>';
    document.body.appendChild(nav);

    const list = nav.querySelector('.sn__list');
    const toggle = nav.querySelector('.sn__current');
    const labelEl = nav.querySelector('.sn__label');
    const countEl = nav.querySelector('.sn__count');
    const prevBtn = nav.querySelector('[data-sn-prev]');
    const nextBtn = nav.querySelector('[data-sn-next]');
    const bar = nav.querySelector('.sn__progress > span');

    function setOpen(open) {
        list.hidden = !open;
        toggle.setAttribute('aria-expanded', String(open));
        if (open) {
            const current = list.querySelector('[aria-current]');
            if (current) current.scrollIntoView({ block: 'nearest' });
        }
    }

    const links = sections.map(function (s, i) {
        const li = document.createElement('li');
        const a = document.createElement('a');
        const num = document.createElement('span');
        const text = document.createElement('span');

        a.href = '#' + s.id;
        num.className = 'sn__num';
        num.textContent = String(i + 1).padStart(2, '0');
        text.textContent = s.label;
        a.append(num, text);
        li.appendChild(a);
        list.appendChild(li);

        a.addEventListener('click', function () { setOpen(false); });
        return a;
    });

    toggle.addEventListener('click', function () { setOpen(list.hidden); });

    document.addEventListener('click', function (event) {
        if (!list.hidden && !nav.contains(event.target)) setOpen(false);
    });

    document.addEventListener('keydown', function (event) {
        if (event.key === 'Escape' && !list.hidden) {
            setOpen(false);
            toggle.focus();
        }
    });

    // ── Scroll position → active section ─────────────────────
    function activeIndex() {
        const atBottom =
            window.innerHeight + window.scrollY >= root.scrollHeight - 2;
        if (atBottom) return sections.length - 1;

        const line = window.innerHeight * 0.35;
        let index = -1;
        for (let i = 0; i < sections.length; i++) {
            if (sections[i].el.getBoundingClientRect().top <= line) index = i;
            else break;
        }
        return index;
    }

    function goTo(i) {
        const s = sections[i];
        if (!s) return;
        s.el.scrollIntoView({
            behavior: reduced() ? 'auto' : 'smooth',
            block: 'start'
        });
        if (CONFIG.updateUrl) history.replaceState(null, '', '#' + s.id);
    }

    function step(direction) {
        const index = activeIndex();

        // Partway down a section, "previous" returns to its start first.
        if (
            direction < 0 && index >= 0 &&
            sections[index].el.getBoundingClientRect().top < -(CONFIG.offset + 24)
        ) {
            goTo(index);
            return;
        }

        goTo(Math.min(Math.max(index + direction, 0), sections.length - 1));
    }

    prevBtn.addEventListener('click', function () { step(-1); });
    nextBtn.addEventListener('click', function () { step(1); });

    let shown = -1;
    let urlTimer;
    let interacted = false;

    function syncUrl(index) {
        if (!CONFIG.updateUrl || !interacted) return;
        clearTimeout(urlTimer);
        urlTimer = setTimeout(function () {
            const want = index >= 0 ? '#' + sections[index].id : '';
            if (location.hash === want) return;
            history.replaceState(null, '', location.pathname + location.search + want);
        }, 200);
    }

    function update() {
        const index = activeIndex();
        const current = Math.max(index, 0);
        const y = window.scrollY || root.scrollTop;

        nav.classList.toggle('is-visible', y > CONFIG.showAfter);

        if (current !== shown) {
            shown = current;
            labelEl.textContent = sections[current].label;
            countEl.textContent = (current + 1) + ' / ' + sections.length;
            links.forEach(function (a, i) {
                if (i === current) a.setAttribute('aria-current', 'location');
                else a.removeAttribute('aria-current');
            });
        }

        const max = root.scrollHeight - window.innerHeight;
        bar.style.transform = 'scaleX(' + (max > 0 ? Math.min(1, y / max) : 0) + ')';

        prevBtn.disabled = current <= 0 && index <= 0;
        nextBtn.disabled = current >= sections.length - 1;

        syncUrl(index);
    }

    let ticking = false;
    function onScroll() {
        if (ticking) return;
        ticking = true;
        window.requestAnimationFrame(function () {
            ticking = false;
            update();
        });
    }

    window.addEventListener('scroll', onScroll, { passive: true });
    window.addEventListener('resize', onScroll);

    // ── Arriving via a #link ─────────────────────────────────
    ['wheel', 'touchstart', 'keydown', 'mousedown'].forEach(function (type) {
        window.addEventListener(type, function () { interacted = true; }, {
            passive: true,
            once: true
        });
    });

    function hashTarget() {
        if (location.hash.length < 2) return null;
        try {
            return document.getElementById(decodeURIComponent(location.hash.slice(1)));
        } catch (e) {
            return null;
        }
    }

    // Open any collapsed <details> that contain the target.
    function reveal(el) {
        for (
            let d = el.closest('details');
            d;
            d = d.parentElement && d.parentElement.closest('details')
        ) {
            d.open = true;
        }
    }

    // Instant re-alignment: lazy iframes and images shift layout after load.
    function realign() {
        const el = hashTarget();
        if (!el) return;
        reveal(el);

        const before = root.style.scrollBehavior;
        root.style.scrollBehavior = 'auto';
        el.scrollIntoView({ block: 'start' });
        root.style.scrollBehavior = before;
    }

    CONFIG.restoreAt.forEach(function (ms) {
        setTimeout(function () { if (!interacted) realign(); }, ms);
    });

    window.addEventListener('load', function () {
        if (!interacted) realign();
    });

    window.addEventListener('hashchange', function () {
        const el = hashTarget();
        if (!el) return;
        reveal(el);
        window.requestAnimationFrame(function () {
            el.scrollIntoView({ block: 'start' });
        });
    });

    update();
})();
