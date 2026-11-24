// ── Grades Badges ────────────────
(function () {
    /* ── Grades: single source of truth ─────────────────────
        number  → shown as a numeric mini-badge (Dutch 1–10 scale)
        string  → shown as a text badge, e.g. "Pass"
        null    → no badge rendered (use until you fill it in)  */
    const GRADES = {
        'data-engineering': 7,
        'data-science-methods': 9,
        'business-research-methods': 8,
        'marketing-research': 8,
        'research-paper': 8,
        'statistical-learning': 8,
        'companies-brands-consumers': 8,
        'digital-marketing-intelligence': 8,
        'digital-marketing-analytics': 8,
        'market-models': 8,
        'behavioural-decision-making': 7,
        'organization-theory': 7,
        'contemporary-theories': 6,
        'strategic-management': 8,
        'hrm': 8,
        'business-ethics': 8,
        'retail-omnichannel': 8
    };

    /* ── Render mini grade badges next to course titles ───── */
    document.querySelectorAll('[data-course]').forEach(function (el) {
        const g = GRADES[el.dataset.course];
        if (g === null || g === undefined || g === '') return;

        const badge = document.createElement('span');
        const numeric = typeof g === 'number' && Number.isFinite(g);
        badge.className = 'grade-badge grade-badge--mini' + (numeric ? '' : ' grade-badge--text');
        badge.textContent = String(g);

        const label = numeric ? 'Grade: ' + g + ' out of 10' : 'Result: ' + g;
        badge.setAttribute('aria-label', label);
        badge.title = label;
        el.appendChild(badge);
    });

    /* ── Lens toggle (generic: works for any grid on the site) ── */
    document.querySelectorAll('[data-lens-toggle]').forEach(function (btn) {
        const target = document.getElementById(btn.getAttribute('aria-controls'));
        const note = btn.dataset.lensNote ? document.getElementById(btn.dataset.lensNote) : null;
        if (!target) return;

        btn.addEventListener('click', function () {
            const on = btn.getAttribute('aria-checked') !== 'true';
            btn.setAttribute('aria-checked', String(on));
            target.classList.toggle('is-lens-courses', on);
            if (note) note.hidden = !on;
        });
    });
})();
