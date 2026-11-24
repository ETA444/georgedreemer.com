// ── Instagram scroller nav ──────────────────────────────────
// This script manages the navigation functionality for Instagram scroller components. It enables users to scroll through Instagram posts by clicking on previous and next buttons, providing a smooth scrolling experience.
document.querySelectorAll('[data-ig-track]').forEach(track => {
    const section = track.closest('.ig-scroller');
    const prevBtn = section.querySelector('[data-ig-prev]');
    const nextBtn = section.querySelector('[data-ig-next]');
    const scrollAmount = () => track.querySelector('.ig-scroller__item')?.offsetWidth + 16 || 360;

    prevBtn?.addEventListener('click', () => {
        track.scrollBy({ left: -scrollAmount(), behavior: 'smooth' });
    });
    nextBtn?.addEventListener('click', () => {
        track.scrollBy({ left: scrollAmount(), behavior: 'smooth' });
    });
});
