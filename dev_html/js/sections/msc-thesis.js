// ── MSc thesis: illustrative context explorer ─────────────────
// This script is used in the MSc thesis to allow the user to explore the context of the research by selecting different values for the attributes of the context. The selected values are then displayed in a summary below the form.
(function () {
    'use strict';

    function initialiseContextExplorers() {
        document.querySelectorAll('[data-context-explorer]')
            .forEach(function (explorer) {
                if (explorer.dataset.contextReady === 'true') return;

                const form = explorer.querySelector('form');
                const status = explorer.querySelector(
                    '[data-context-status]'
                );

                if (!form) return;

                explorer.dataset.contextReady = 'true';

                const keys = [
                    'collector',
                    'recipient',
                    'purpose',
                    'consent',
                    'review'
                ];

                const fields = keys.map(function (key) {
                    return {
                        key: key,
                        select: form.querySelector(
                            'select[name="' + key + '"]'
                        ),
                        output: explorer.querySelector(
                            '[data-context-value="' + key + '"]'
                        )
                    };
                }).filter(function (field) {
                    return field.select && field.output;
                });

                function renderContext(changedSelect, isReset) {
                    fields.forEach(function (field) {
                        const option = field.select.selectedOptions[0];

                        if (!option) return;

                        field.output.textContent =
                            option.textContent.trim();
                    });

                    if (!status) return;

                    if (isReset) {
                        status.textContent =
                            'Illustrative context reset to its starting values.';
                        return;
                    }

                    if (changedSelect) {
                        const label = Array.from(
                            form.querySelectorAll('label')
                        ).find(function (candidate) {
                            return candidate.htmlFor === changedSelect.id;
                        });

                        const option = changedSelect.selectedOptions[0];

                        status.textContent =
                            (label ? label.textContent.trim() : 'Attribute') +
                            ' updated to ' +
                            (option ? option.textContent.trim() : '') +
                            '. Context summary updated.';
                    }
                }

                form.addEventListener('change', function (event) {
                    const select = event.target;

                    if (!(select instanceof HTMLSelectElement)) return;

                    renderContext(select, false);
                });

                form.addEventListener('reset', function () {
                    // The native reset completes after the reset event.
                    window.requestAnimationFrame(function () {
                        renderContext(null, true);
                    });
                });

                // Do not allow an accidental form submission to navigate.
                form.addEventListener('submit', function (event) {
                    event.preventDefault();
                });

                renderContext(null, false);
            });
    }

    if (document.readyState === 'loading') {
        document.addEventListener(
            'DOMContentLoaded',
            initialiseContextExplorers,
            { once: true }
        );
    } else {
        initialiseContextExplorers();
    }
})();

// ── MSc thesis: two-group comparison ──────────────────────────
(function () {
    'use strict';

    function initGroupCompare() {
        document.querySelectorAll('[data-group-compare]').forEach(function (root) {
            if (root.dataset.ready === 'true') return;

            const picker = root.querySelector('[data-group-picker]');
            const panels = Array.from(root.querySelectorAll('[data-group-panel]'));
            const status = root.querySelector('[data-group-status]');
            if (!picker || !panels.length) return;

            root.dataset.ready = 'true';
            picker.hidden = false;

            function show(value, announce) {
                panels.forEach(function (panel) {
                    panel.hidden = panel.dataset.groupPanel !== value;
                });
                if (!announce || !status) return;
                const active = panels.find(function (panel) {
                    return panel.dataset.groupPanel === value;
                });
                const heading = active && active.querySelector('h5');
                status.textContent = heading ? 'Showing ' + heading.textContent.trim() + '.' : '';
            }

            picker.addEventListener('change', function (event) {
                const target = event.target;
                if (target instanceof HTMLInputElement && target.type === 'radio') {
                    show(target.value, true);
                }
            });

            const checked = picker.querySelector('input:checked') || picker.querySelector('input');
            if (checked) {
                checked.checked = true;
                show(checked.value, false);
            }
        });
    }

    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', initGroupCompare, { once: true });
    } else {
        initGroupCompare();
    }
})();

// ── Defence slides: load the embed on first open ─────────────
(function () {
    'use strict';

    document.querySelectorAll('[data-defence-slides]').forEach(function (panel) {
        panel.addEventListener('toggle', function () {
            if (!panel.open) return;

            const frame = panel.querySelector('iframe[data-src]');
            if (!frame) return;

            frame.src = frame.dataset.src;
            frame.removeAttribute('data-src');
        });
    });
})();

// ── Thesis figures: graceful fallback if an image fails to load ──
(function () {
    'use strict';
    document.querySelectorAll('.thesis-expose__figure-media img').forEach(function (img) {
        img.addEventListener('error', function () {
            const media = img.closest('.thesis-expose__figure-media');
            if (!media) return;
            const msg = document.createElement('p');
            msg.className = 'thesis-expose__figure-error';
            msg.textContent =
                'This figure could not be loaded. Use the link below to open it directly.';
            media.replaceChildren(msg);
        }, { once: true });
    });
})();
