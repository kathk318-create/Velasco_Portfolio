/**
 * Kathleen Velasco Portfolio — Animations & Interactions
 *
 * Particles, scroll reveal, navigation, and mobile menu.
 * All animations respect prefers-reduced-motion.
 */

/* ─── HELPERS ─── */
const prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

/* ═══════════════════════════════════════════════════════
   PARTICLE CANVAS
   ═══════════════════════════════════════════════════════ */
function initParticles() {
    if (prefersReducedMotion) return;

    const canvas = document.getElementById('particles-canvas');
    if (!canvas) return;

    const ctx = canvas.getContext('2d');
    if (!ctx) return;

    let width  = canvas.width  = window.innerWidth;
    let height = canvas.height = window.innerHeight;

    const PARTICLE_COUNT = 48;
    const particles = [];

    class Particle {
        constructor() {
            this.reset();
        }

        reset() {
            this.x  = Math.random() * width;
            this.y  = Math.random() * height;
            this.r  = Math.random() * 1.8 + 0.4;
            this.dx = (Math.random() - 0.5) * 0.35;
            this.dy = (Math.random() - 0.5) * 0.25 - 0.08;
            this.alpha    = Math.random() * 0.4 + 0.1;
            this.fadeDir  = Math.random() > 0.5 ? 1 : -1;
            this.fadeRate = Math.random() * 0.003 + 0.001;
        }

        update() {
            this.x += this.dx;
            this.y += this.dy;
            this.alpha += this.fadeDir * this.fadeRate;

            if (this.alpha <= 0.05 || this.alpha >= 0.45) {
                this.fadeDir *= -1;
            }

            if (this.x < -10 || this.x > width + 10 || this.y < -10 || this.y > height + 10) {
                this.reset();
            }
        }

        draw() {
            ctx.beginPath();
            ctx.arc(this.x, this.y, this.r, 0, Math.PI * 2);
            ctx.fillStyle = `rgba(168, 85, 247, ${this.alpha})`;
            ctx.fill();
        }
    }

    for (let i = 0; i < PARTICLE_COUNT; i++) {
        particles.push(new Particle());
    }

    function loop() {
        ctx.clearRect(0, 0, width, height);
        particles.forEach(p => { p.update(); p.draw(); });
        requestAnimationFrame(loop);
    }

    loop();

    let resizeTimer;
    window.addEventListener('resize', () => {
        clearTimeout(resizeTimer);
        resizeTimer = setTimeout(() => {
            width  = canvas.width  = window.innerWidth;
            height = canvas.height = window.innerHeight;
        }, 150);
    });
}

/* ═══════════════════════════════════════════════════════
   SCROLL REVEAL  (IntersectionObserver)
   ═══════════════════════════════════════════════════════ */
function initScrollReveal() {
    const targets = document.querySelectorAll('.reveal-on-scroll');
    if (!targets.length) return;

    if (prefersReducedMotion) {
        targets.forEach(el => el.classList.add('is-visible'));
        return;
    }

    const observer = new IntersectionObserver(
        (entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('is-visible');
                    observer.unobserve(entry.target);
                }
            });
        },
        { threshold: 0.12, rootMargin: '0px 0px -40px 0px' }
    );

    targets.forEach(el => observer.observe(el));
}

/* ═══════════════════════════════════════════════════════
   NAVIGATION — sticky + blur
   ═══════════════════════════════════════════════════════ */
function initNavigation() {
    const nav = document.getElementById('site-nav');
    if (!nav) return;

    let lastScroll = 0;

    function onScroll() {
        const y = window.scrollY;
        nav.classList.toggle('scrolled', y > 60);
        lastScroll = y;
    }

    window.addEventListener('scroll', onScroll, { passive: true });
    onScroll();

    // Active link highlight
    const sections = document.querySelectorAll('section[id]');
    const links    = document.querySelectorAll('.nav-link');

    const activeObserver = new IntersectionObserver(
        (entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const id = entry.target.id;
                    links.forEach(link => {
                        link.classList.toggle('active', link.getAttribute('href') === `#${id}`);
                    });
                }
            });
        },
        { threshold: 0.3, rootMargin: '-80px 0px -50% 0px' }
    );

    sections.forEach(section => activeObserver.observe(section));
}

/* ═══════════════════════════════════════════════════════
   MOBILE NAV TOGGLE
   ═══════════════════════════════════════════════════════ */
function initMobileNav() {
    const toggle = document.getElementById('nav-toggle');
    const menu   = document.getElementById('nav-menu');
    if (!toggle || !menu) return;

    function close() {
        toggle.setAttribute('aria-expanded', 'false');
        menu.classList.remove('is-open');
        document.body.style.overflow = '';
    }

    function open() {
        toggle.setAttribute('aria-expanded', 'true');
        menu.classList.add('is-open');
        document.body.style.overflow = 'hidden';
    }

    toggle.addEventListener('click', () => {
        const isOpen = toggle.getAttribute('aria-expanded') === 'true';
        isOpen ? close() : open();
    });

    menu.querySelectorAll('a').forEach(link => {
        link.addEventListener('click', close);
    });

    document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape') close();
    });
}

/* ═══════════════════════════════════════════════════════
   SMOOTH SCROLL (enhanced for anchor links)
   ═══════════════════════════════════════════════════════ */
function initSmoothScroll() {
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', (e) => {
            const id = anchor.getAttribute('href');
            if (!id || id === '#') return;

            const target = document.querySelector(id);
            if (!target) return;

            e.preventDefault();
            target.scrollIntoView({
                behavior: prefersReducedMotion ? 'auto' : 'smooth',
                block: 'start',
            });

            if (history.pushState) {
                history.pushState(null, '', id);
            }
        });
    });
}

/* ═══════════════════════════════════════════════════════
   INIT
   ═══════════════════════════════════════════════════════ */
document.addEventListener('DOMContentLoaded', () => {
    initParticles();
    initScrollReveal();
    initNavigation();
    initMobileNav();
    initSmoothScroll();
});