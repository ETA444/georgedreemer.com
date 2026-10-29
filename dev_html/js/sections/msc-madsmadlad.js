// ── MADS Madlad ──
// This script is used in the MADS Madlad section to allow the user to scroll through a shelf of documents using previous and next buttons, as well as keyboard navigation. It also handles the display of the MM monogram if the remote avatar is unavailable.
(function () {
    'use strict';

    function initialiseMadladShelf() {
        document.querySelectorAll('[data-mm-library]').forEach(function (library) {
            if (library.dataset.mmReady === 'true') return;

            const rail = library.querySelector('[data-mm-rail]');
            const controls = library.querySelector('[data-mm-controls]');
            const previous = library.querySelector('[data-mm-prev]');
            const next = library.querySelector('[data-mm-next]');

            if (!rail || !controls || !previous || !next) return;

            library.dataset.mmReady = 'true';

            const reducedMotion = window.matchMedia(
                '(prefers-reduced-motion: reduce)'
            );

            function behaviour() {
                return reducedMotion.matches ? 'auto' : 'smooth';
            }

            function cardStep() {
                const cards = rail.querySelectorAll('.mm-doc');

                if (cards.length > 1) {
                    return Math.abs(
                        cards[1].getBoundingClientRect().left -
                        cards[0].getBoundingClientRect().left
                    );
                }

                return rail.clientWidth;
            }

            function updateControls() {
                const maximum = Math.max(
                    0,
                    rail.scrollWidth - rail.clientWidth
                );

                const position = Math.max(
                    0,
                    Math.min(maximum, rail.scrollLeft)
                );

                controls.hidden = maximum <= 2;
                previous.disabled = position <= 2;
                next.disabled = position >= maximum - 2;
            }

            function move(direction) {
                rail.scrollBy({
                    left: direction * cardStep(),
                    behavior: behaviour()
                });
            }

            previous.addEventListener('click', function () {
                move(-1);
            });

            next.addEventListener('click', function () {
                move(1);
            });

            rail.addEventListener('keydown', function (event) {
                // Leave links, buttons, and embedded documents alone.
                if (event.target !== rail) return;

                if (
                    event.altKey ||
                    event.ctrlKey ||
                    event.metaKey ||
                    event.shiftKey
                ) return;

                switch (event.key) {
                    case 'ArrowLeft':
                        event.preventDefault();
                        move(-1);
                        break;

                    case 'ArrowRight':
                        event.preventDefault();
                        move(1);
                        break;

                    case 'Home':
                        event.preventDefault();
                        rail.scrollTo({
                            left: 0,
                            behavior: behaviour()
                        });
                        break;

                    case 'End':
                        event.preventDefault();
                        rail.scrollTo({
                            left: rail.scrollWidth,
                            behavior: behaviour()
                        });
                        break;
                }
            });

            let pendingFrame = false;

            rail.addEventListener('scroll', function () {
                if (pendingFrame) return;

                pendingFrame = true;

                window.requestAnimationFrame(function () {
                    updateControls();
                    pendingFrame = false;
                });
            }, { passive: true });

            if ('ResizeObserver' in window) {
                const observer = new ResizeObserver(updateControls);
                observer.observe(rail);
            } else {
                window.addEventListener('resize', updateControls, {
                    passive: true
                });
            }

            updateControls();
        });

        // Preserve the MM monogram if the remote avatar is unavailable.
        document.querySelectorAll('.mm-section .mm-avatar img')
            .forEach(function (image) {
                function showMonogram() {
                    image.hidden = true;
                }

                image.addEventListener('error', showMonogram, {
                    once: true
                });

                if (image.complete && image.naturalWidth === 0) {
                    showMonogram();
                }
            });
    }

    if (document.readyState === 'loading') {
        document.addEventListener(
            'DOMContentLoaded',
            initialiseMadladShelf,
            { once: true }
        );
    } else {
        initialiseMadladShelf();
    }
})();
