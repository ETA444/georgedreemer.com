// ── Sound toggle (YouTube iframes) ─────────────────────────
// This script enables users to toggle the sound on YouTube iframes embedded within the page. It listens for click events on buttons with the data-sound-toggle attribute and updates the iframe's source URL to mute or unmute the video accordingly. Additionally, it updates the button's SVG icon to reflect the current sound state.
document.querySelectorAll('[data-sound-toggle]').forEach(btn => {
    let muted = true;
    const iframe = btn.closest('.evidence-card__video')?.querySelector('iframe');
    if (!iframe) return;

    btn.addEventListener('click', () => {
        muted = !muted;
        const src = iframe.src;
        iframe.src = muted
            ? src.replace('&mute=0', '&mute=1')
            : src.replace('&mute=1', '&mute=0');

        const svg = btn.querySelector('svg');
        if (!svg) return;

        svg.innerHTML = muted
            ? `<polygon points="11 5 6 9 2 9 2 15 6 15 11 19 11 5"/><line x1="23" y1="9" x2="17" y2="15" class="mute-line"/><line x1="17" y1="9" x2="23" y2="15" class="mute-line"/>`
            : `<polygon points="11 5 6 9 2 9 2 15 6 15 11 19 11 5"/><path d="M19.07 4.93a10 10 0 0 1 0 14.14M15.54 8.46a5 5 0 0 1 0 7.07"/>`;
    });
});
