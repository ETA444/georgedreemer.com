// ── YouTube Content Archive: click-to-load + nav ────────────────
// This script provides navigation buttons to scroll through the list of video thumbnails, enhancing the user experience and accessibility.
document.querySelectorAll('[data-yt-track]').forEach(track => {
    const channel = track.closest('.content-archive__channel');
    const prevBtn = channel.querySelector('[data-yt-prev]');
    const nextBtn = channel.querySelector('[data-yt-next]');
    const scrollAmount = () => track.querySelector('.yt-scroller__item')?.offsetWidth + 16 || 320;

    prevBtn?.addEventListener('click', () => {
        track.scrollBy({ left: -scrollAmount(), behavior: 'smooth' });
    });
    nextBtn?.addEventListener('click', () => {
        track.scrollBy({ left: scrollAmount(), behavior: 'smooth' });
    });
});
