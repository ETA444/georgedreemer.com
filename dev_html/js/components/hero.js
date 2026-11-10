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
