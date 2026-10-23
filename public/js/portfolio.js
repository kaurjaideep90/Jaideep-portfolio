// Plain ES2015 — no build step, no dependencies.
(function () {
    'use strict';

    var nav = document.querySelector('.nav');
    var toggle = document.querySelector('.nav__toggle');
    var menu = document.getElementById('nav-menu');

    // Solid nav background once the page is scrolled.
    function onScroll() {
        nav.classList.toggle('is-scrolled', window.scrollY > 20);
    }
    onScroll();
    window.addEventListener('scroll', onScroll, { passive: true });

    // Mobile menu.
    function setMenu(open) {
        nav.classList.toggle('is-open', open);
        toggle.setAttribute('aria-expanded', String(open));
    }
    toggle.addEventListener('click', function () {
        setMenu(!nav.classList.contains('is-open'));
    });
    menu.addEventListener('click', function (e) {
        if (e.target.closest('a')) setMenu(false);
    });
    document.addEventListener('keydown', function (e) {
        if (e.key === 'Escape') setMenu(false);
    });

    if (!('IntersectionObserver' in window)) {
        document.querySelectorAll('.reveal').forEach(function (el) { el.classList.add('is-visible'); });
        return;
    }

    // Fade sections in as they scroll into view.
    var revealer = new IntersectionObserver(function (entries) {
        entries.forEach(function (entry) {
            if (entry.isIntersecting) {
                entry.target.classList.add('is-visible');
                revealer.unobserve(entry.target);
            }
        });
    }, { rootMargin: '0px 0px -8% 0px', threshold: 0.08 });

    document.querySelectorAll('.reveal').forEach(function (el, i) {
        el.style.transitionDelay = (i % 4) * 70 + 'ms';
        revealer.observe(el);
    });

    // Highlight the nav link for the section currently on screen.
    var links = {};
    menu.querySelectorAll('a[href^="#"]:not(.btn)').forEach(function (a) {
        links[a.getAttribute('href').slice(1)] = a;
    });

    var spy = new IntersectionObserver(function (entries) {
        entries.forEach(function (entry) {
            var link = links[entry.target.id];
            if (link && entry.isIntersecting) {
                Object.keys(links).forEach(function (k) { links[k].classList.remove('is-active'); });
                link.classList.add('is-active');
            }
        });
    }, { rootMargin: '-45% 0px -50% 0px' });

    Object.keys(links).forEach(function (id) {
        var section = document.getElementById(id);
        if (section) spy.observe(section);
    });
})();
