// ── Lucide icons ──────────────────────────────────────────────
(function () {
    if (typeof lucide !== 'undefined') {
        lucide.createIcons();
        return;
    }

    const lucideScript = document.querySelector('script[src*="lucide"]');
    if (lucideScript) {
        lucideScript.addEventListener('load', () => {
            if (typeof lucide !== 'undefined') lucide.createIcons();
        });
    }
})();
