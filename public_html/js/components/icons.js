// ── Lucide icons ──────────────────────────────────────────────
// This script ensures that Lucide icons are created when the page loads, even if the Lucide library is loaded asynchronously. It checks if the `lucide` object is defined, and if so, it calls `lucide.createIcons()`. If not, it adds an event listener to the Lucide script tag to call `createIcons()` once the script has loaded.
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
