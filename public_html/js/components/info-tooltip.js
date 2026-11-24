// ── Tooltip Mobile Tap Functionality ────────────────
// This script enables the mobile tap functionality for tooltips. It allows users to tap on a tooltip button to open or close the tooltip panel. If a user taps outside of an open tooltip, it will close all open tooltips. Additionally, pressing the Escape key will also close any open tooltips.
(function () {
    const closeAll = (except) => document.querySelectorAll('.tip-host.is-open').forEach(h => {
        if (h !== except) { h.classList.remove('is-open'); h.querySelector('.info-tip')?.setAttribute('aria-expanded', 'false'); }
    });
    document.addEventListener('click', (e) => {
        const btn = e.target.closest('.info-tip');
        if (!btn) { if (!e.target.closest('.info-tip__panel')) closeAll(); return; }
        const host = btn.closest('.tip-host');
        closeAll(host);
        const open = host.classList.toggle('is-open');
        btn.setAttribute('aria-expanded', String(open));
    });
    document.addEventListener('keydown', (e) => { if (e.key === 'Escape') closeAll(); });
})();
