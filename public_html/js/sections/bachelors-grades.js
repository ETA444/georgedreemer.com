// ── Grades Badges ────────────────
(function () {
    /* ── Grades: single source of truth ─────────────────────
        number  → shown as a numeric mini-badge
        string  → shown as a text badge, e.g. "A", "B+"
        null    → no badge rendered (use until you fill it in)  */
    const GRADES = {
        'social-entrepreneurship': 'A',
        'leading-growth': 'A',
        'enterprise-practicum': 'A',
        'intro-economics': 'A',
        'financial-accounting': 'B-',
        'marketing-research': 'A',
        'internet-marketing': 'C+',
        'international-marketing': 'B+',
        'advertising-promo': 'A-',
        'text-mining': 'B',
        'business-law': 'A',
        'negotiation-theory': 'A',
        'interpersonal-skills': 'A',
        'oral-communication': 'A',
        'public-speaking': 'A',
        'social-psychology': 'A',
        'streetwear-study': 'A',
        'persuasion-negotiation': 'A',
        'adobe-suite': 'A'
    };

    /* ── Render mini grade badges next to course titles ───── */
    document.querySelectorAll('[data-course]').forEach(function (el) {
        const g = GRADES[el.dataset.course];
        if (g === null || g === undefined || g === '') return;

        const badge = document.createElement('span');
        const numeric = typeof g === 'number' && Number.isFinite(g);
        badge.className = 'grade-badge grade-badge--mini' + (numeric ? '' : ' grade-badge--text');
        badge.textContent = String(g);

        const label = numeric ? 'Grade: ' + g + ' out of 10' : 'Grade: ' + g;
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
