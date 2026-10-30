// ── Item Counter for Credential Sections ────────────────
// This script serves as an item counter in the education hub / education.html in order to force "Show More" button after 3 items are present in a .stack-group--credentials section
document.addEventListener('DOMContentLoaded', function () {
    const groups = document.querySelectorAll('.stack-group--credentials');

    groups.forEach((group, index) => {
        if (group.closest('.stack-group--skills')) return;

        const items = group.querySelector('.stack-group__items--credentials');
        if (!items) return;

        const cards = Array.from(items.querySelectorAll(':scope > .credential-card'));
        if (cards.length <= 2) return;

        if (!items.id) {
            items.id = `stack-group-credentials-${index + 1}`;
        }

        const button = document.createElement('button');
        button.type = 'button';
        button.className = 'stack-group__toggle';
        button.setAttribute('aria-expanded', 'false');
        button.setAttribute('aria-controls', items.id);

        let expanded = false;

        const getVisibleCount = () => {
            const styles = window.getComputedStyle(items);
            const columns = styles.gridTemplateColumns.split(' ').length;
            return columns <= 2 ? 2 : 3;
        };

        const updateGroup = () => {
            const visibleCount = getVisibleCount();
            const hiddenCount = cards.length - visibleCount;

            if (hiddenCount <= 0) {
                button.hidden = true;
                cards.forEach(card => card.classList.remove('is-collapsed'));
                group.classList.remove('is-expanded');
                return;
            }

            button.hidden = false;

            cards.forEach((card, i) => {
                const shouldHide = !expanded && i >= visibleCount;
                card.classList.toggle('is-collapsed', shouldHide);
            });

            group.classList.toggle('is-expanded', expanded);
            button.setAttribute('aria-expanded', String(expanded));
            button.innerHTML = expanded
                ? '<span class="stack-group__toggle-label">Show fewer</span><span class="stack-group__toggle-icon" aria-hidden="true"></span>'
                : `<span class="stack-group__toggle-label">Show ${hiddenCount} more</span><span class="stack-group__toggle-icon" aria-hidden="true"></span>`;
        };

        button.addEventListener('click', function () {
            expanded = !expanded;
            updateGroup();
        });

        group.appendChild(button);
        updateGroup();

        window.addEventListener('resize', updateGroup);
    });
});
