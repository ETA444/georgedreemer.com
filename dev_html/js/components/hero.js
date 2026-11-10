// Hero x header choreography (desktop only).
// Merged: header fades into the black hero. Solid: once the hero's torn
// edge has passed behind the header, the header takes over the boundary.
// Never intercepts scrolling; it only reads position and sets one attribute.

const hero = document.querySelector('.hero');

if (hero) {
    const root = document.documentElement;
    const edge = hero.querySelector('.hero__edge');
    const desktop = window.matchMedia('(min-width: 60rem)');
    let frame = 0;

    const update = () => {
        frame = 0;

        const header = document.getElementById('gd-header');
        let state = 'merged';

        if (header && desktop.matches) {
            const headerBottom = header.getBoundingClientRect().bottom;
            const heroBottom = hero.getBoundingClientRect().bottom;
            const edgeHeight = edge ? edge.offsetHeight : 0;

            if (heroBottom + edgeHeight <= headerBottom) state = 'solid';
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

    if ('ResizeObserver' in window) {
        const header = document.getElementById('gd-header');
        if (header) new ResizeObserver(schedule).observe(header);
    }
}
