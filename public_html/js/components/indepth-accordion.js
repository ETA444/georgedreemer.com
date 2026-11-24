// ── In-depth Accordion ─────────────────────────────────────────────────
// This script handles the functionality of the accordion component, allowing users to expand and collapse sections of content. It ensures that only one section is open at a time, enhancing the user experience and accessibility.
document.querySelectorAll('.story-accordion').forEach(accordion => {
    const triggers = accordion.querySelectorAll('.story-accordion__trigger');

    triggers.forEach(btn => {
        btn.addEventListener('click', () => {
            const panelId = btn.getAttribute('aria-controls');
            const panel = panelId ? document.getElementById(panelId) : null;
            const isOpen = btn.getAttribute('aria-expanded') === 'true';

            triggers.forEach(otherBtn => {
                const otherPanelId = otherBtn.getAttribute('aria-controls');
                const otherPanel = otherPanelId ? document.getElementById(otherPanelId) : null;

                otherBtn.setAttribute('aria-expanded', 'false');
                if (otherPanel) otherPanel.setAttribute('aria-hidden', 'true');
            });

            if (!isOpen) {
                btn.setAttribute('aria-expanded', 'true');
                if (panel) panel.setAttribute('aria-hidden', 'false');
            }
        });
    });
});
