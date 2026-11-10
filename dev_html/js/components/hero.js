// Hero x header choreography (desktop only).
// Merged: the header fades into the black hero. Solid: once the hero's
// torn edge has passed behind the header, the header takes over the boundary.
// Never intercepts scrolling; it only reads position and sets one attribute.

const hero = document.querySelector('.hero');

if (hero) {
    const root = document.documentElement;
    const desktop = window.matchMedia('(min-width: 60rem)');
    let frame = 0;

    // Shift the takeover moment in px. Positive = earlier, negative = later.
    // Later gives a longer fade but nav text may sit over page content.
    const TAKEOVER_OFFSET = 0;

    // Total reach of the torn edge below the hero (14px mask + 1px outline offset)
    const edgeReach = () =>
        (parseFloat(getComputedStyle(hero).getPropertyValue('--gd-edge-h')) || 14) + 1;

    const update = () => {
        frame = 0;

        // The shell locks the page (body fixed) while a dialog is open.
        // Positions are meaningless then, so keep the current state.
        if (document.body.style.position === 'fixed') return;

        const header = document.getElementById('gd-header');
        let state = 'merged';

        if (header && desktop.matches) {
            const headerBottom = header.getBoundingClientRect().bottom;
            const heroBottom = hero.getBoundingClientRect().bottom;

            if (heroBottom + edgeReach() + TAKEOVER_OFFSET <= headerBottom) {
                state = 'solid';
            }
        }

        if (root.dataset.heroHeader !== state) {
            root.dataset.heroHeader = state;
        }
    };

    const schedule = () => {
        if (!frame) frame = requestAnimationFrame(update);
    };

    update();

    // Enable CSS transitions only after the first state is in place.
    requestAnimationFrame(() => {
        requestAnimationFrame(() => root.setAttribute('data-hero-ready', ''));
    });

    window.addEventListener('scroll', schedule, { passive: true });
    window.addEventListener('resize', schedule, { passive: true });
    window.addEventListener('load', schedule, { once: true });
    desktop.addEventListener('change', schedule);

    const header = document.getElementById('gd-header');
    if (header && 'ResizeObserver' in window) {
        new ResizeObserver(schedule).observe(header);
    }
}

// Hero motto: console-style typewriter with a looping sequence.
// Type line 1, type line 2, hold, erase, repeat. The full text is always
// laid out (untyped part is transparent), so nothing reflows while typing.
// Pauses when the hero is off-screen or the tab is hidden.

const motto = hero?.querySelector('[data-hero-motto]');

if (motto) {
    const lines = [...motto.querySelectorAll('.hero__line')].map((el) => {
        const done = el.querySelector('.hero__done');
        const rest = el.querySelector('.hero__rest');
        const full = (done.textContent + rest.textContent).trim();
        return { el, done, rest, full };
    });

    const reduced = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

    const setText = (line, n) => {
        line.done.textContent = line.full.slice(0, n);
        line.rest.textContent = line.full.slice(n);
    };

    const focusLine = (active, idle = false) => {
        lines.forEach((line) => {
            line.el.classList.toggle('is-active', line === active);
            line.el.classList.toggle('is-idle', line === active && idle);
        });
    };

    if (reduced) {
        // Static: full text, no cursor, no loop.
        lines.forEach((line) => setText(line, line.full.length));
        focusLine(null);
        hero.classList.add('is-live');
    } else {
        lines.forEach((line) => setText(line, 0));
        focusLine(lines[0], true);          // blinking prompt before typing starts
        hero.classList.add('is-live');

        // ---- Pause control ------------------------------------------
        let inView = true;
        let tabVisible = document.visibilityState === 'visible';
        let resume = null;

        const active = () => inView && tabVisible;
        const wake = () => { if (active() && resume) { resume(); resume = null; } };

        new IntersectionObserver(([entry]) => {
            inView = entry.isIntersecting;
            wake();
        }, { threshold: 0.05 }).observe(hero);

        document.addEventListener('visibilitychange', () => {
            tabVisible = document.visibilityState === 'visible';
            wake();
        });

        const sleep = async (ms) => {
            await new Promise((r) => setTimeout(r, ms));
            while (!active()) await new Promise((r) => { resume = r; });
        };

        // ---- Timing --------------------------------------------------
        const typeDelay = (char) => {
            let ms = 52 + Math.random() * 46;           // 52-98ms
            if (char === ' ') ms += 45;
            if (char === '.') ms += 120;
            if (Math.random() < 0.05) ms += 140;         // occasional hesitation
            return ms;
        };

        const typeLine = async (line) => {
            focusLine(line);
            for (let i = 1; i <= line.full.length; i += 1) {
                setText(line, i);
                await sleep(typeDelay(line.full[i - 1]));
            }
        };

        const eraseLine = async (line) => {
            focusLine(line);
            for (let i = line.full.length - 1; i >= 0; i -= 1) {
                setText(line, i);
                // accelerate: slow start, fast finish
                await sleep(Math.max(8, 34 - (line.full.length - i) * 1.4));
            }
        };

        const run = async () => {
            await sleep(650);
            for (;;) {
                for (let i = 0; i < lines.length; i += 1) {
                    await typeLine(lines[i]);
                    if (i < lines.length - 1) {
                        focusLine(lines[i], true);
                        await sleep(420);
                    }
                }

                focusLine(lines[lines.length - 1], true);
                await sleep(3800);                        // hold the finished motto

                for (let i = lines.length - 1; i >= 0; i -= 1) {
                    await eraseLine(lines[i]);
                }

                focusLine(lines[0], true);
                await sleep(900);
            }
        };

        run();
    }
}
