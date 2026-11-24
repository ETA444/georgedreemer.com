// ── Stat counter animation ────────────────────────────────────
// Animates the stat counter numbers when they come into view
(function () {
    const prefersReduced = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

    function easeOut(t) {
        return 1 - Math.pow(1 - t, 3);
    }

    function animateCounter(item) {
        const numberEl = item.querySelector('.stat-counter__number');
        const target = parseInt(item.dataset.target, 10);
        const prefix = item.dataset.prefix || '';
        const suffix = item.dataset.suffix || '';
        const duration = 1200;
        const start = performance.now();

        if (!numberEl || Number.isNaN(target)) return;

        if (prefersReduced) {
            numberEl.textContent = prefix + target + suffix;
            return;
        }

        function tick(now) {
            const elapsed = now - start;
            const progress = Math.min(elapsed / duration, 1);
            const value = Math.round(easeOut(progress) * target);
            numberEl.textContent = prefix + value + suffix;

            if (progress < 1) {
                requestAnimationFrame(tick);
            }
        }

        requestAnimationFrame(tick);
    }

    const items = document.querySelectorAll('.stat-counter__item');
    if (!items.length) return;

    if (!('IntersectionObserver' in window)) {
        items.forEach(item => {
            item.classList.add('is-visible');
            animateCounter(item);
        });
        return;
    }

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (!entry.isIntersecting) return;

            const item = entry.target;
            item.classList.add('is-visible');
            animateCounter(item);
            observer.unobserve(item);
        });
    }, { threshold: 0.3 });

    items.forEach(item => observer.observe(item));
})();
