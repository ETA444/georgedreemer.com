// ── YouTube Content Archive: click-to-load + nav ────────────────
// This script enables users to click on a thumbnail to load the corresponding YouTube video in an embedded iframe, allowing for seamless video playback without leaving the page.
document.querySelectorAll('[data-yt-thumb]').forEach(btn => {
    btn.addEventListener('click', () => {
        const embed = btn.closest('.yt-scroller__embed');
        const videoId = btn.dataset.ytId;
        const title = btn.dataset.ytTitle || 'YouTube video';
        const iframe = document.createElement('iframe');
        iframe.src = `https://www.youtube.com/embed/${videoId}?autoplay=1&rel=0&modestbranding=1&playsinline=1`;
        iframe.title = title;
        iframe.setAttribute('aria-label', title);
        iframe.setAttribute('allow', 'accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share');
        iframe.setAttribute('referrerpolicy', 'strict-origin-when-cross-origin');
        iframe.setAttribute('allowfullscreen', '');
        embed.innerHTML = '';
        embed.appendChild(iframe);
    });
});
