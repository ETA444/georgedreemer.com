// ── Slideshow ──────────────────────────────────────────────
// Used in the Evidence cards to show multiple images in a single card. The slideshow is controlled by the dots below the images, and automatically cycles through the slides every 4 seconds. Hovering over the slideshow stops the automatic cycling.
document.querySelectorAll('.evidence-card__slides').forEach(slider => {
    const slides = slider.querySelectorAll('.evidence-card__slide');
    const dots = slider.querySelectorAll('.evidence-card__slide-dot');
    if (!slides.length || !dots.length) return;

    let current = 0;
    let timer;

    function goTo(n) {
        slides[current].classList.remove('is-active');
        dots[current].classList.remove('is-active');
        current = (n + slides.length) % slides.length;
        slides[current].classList.add('is-active');
        dots[current].classList.add('is-active');
    }

    function start() {
        if (slides.length > 1) timer = setInterval(() => goTo(current + 1), 4000);
    }

    function stop() {
        clearInterval(timer);
    }

    dots.forEach((dot, i) => {
        dot.addEventListener('click', () => {
            stop();
            goTo(i);
            start();
        });
    });

    slider.addEventListener('mouseenter', stop);
    slider.addEventListener('mouseleave', start);
    start();
});
