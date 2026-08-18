/* ============================================================
   KRISHICHAKRA FOODS — PREMIUM JS
   Lenis Smooth Scroll + GSAP Animations + Navbar + Micro-interactions
   ============================================================ */

(function () {
  'use strict';

  /* ========================
     LENIS SMOOTH SCROLL
     ======================== */
  let lenis;

  function initLenis() {
    if (typeof Lenis === 'undefined') return;
    lenis = new Lenis({
      duration: 1.3,
      easing: (t) => Math.min(1, 1.001 - Math.pow(2, -10 * t)),
      direction: 'vertical',
      smooth: true,
      smoothTouch: false,
      touchMultiplier: 2,
    });

    function raf(time) {
      lenis.raf(time);
      requestAnimationFrame(raf);
    }
    requestAnimationFrame(raf);

    // Connect GSAP ScrollTrigger with Lenis
    if (typeof gsap !== 'undefined' && typeof ScrollTrigger !== 'undefined') {
      lenis.on('scroll', ScrollTrigger.update);
      gsap.ticker.add((time) => { lenis.raf(time * 1000); });
      gsap.ticker.lagSmoothing(0);
    }
  }

  /* ========================
     PRELOADER
     ======================== */
  function initPreloader() {
    const preloader = document.getElementById('kc-preloader');
    if (!preloader) return;

    window.addEventListener('load', function () {
      setTimeout(() => {
        preloader.classList.add('hidden');
        document.body.style.overflow = '';
        initHeroAnimations();
      }, 800);
    });
    document.body.style.overflow = 'hidden';
  }

  /* ========================
     NAVBAR SCROLL
     ======================== */
  function initNavbar() {
    const navbar = document.getElementById('kc-navbar');
    if (!navbar) return;

    let lastScroll = 0;
    const scrollHandler = () => {
      const scrollY = window.scrollY;

      if (scrollY > 60) {
        navbar.classList.add('scrolled');
      } else {
        navbar.classList.remove('scrolled');
      }

      // Hide on scroll down, show on scroll up
      if (scrollY > 200) {
        if (scrollY > lastScroll + 5) {
          navbar.style.transform = 'translateY(-100%)';
        } else if (scrollY < lastScroll - 5) {
          navbar.style.transform = 'translateY(0)';
        }
      } else {
        navbar.style.transform = 'translateY(0)';
      }
      lastScroll = scrollY;
    };

    window.addEventListener('scroll', scrollHandler, { passive: true });
    scrollHandler();
  }

  /* ========================
     MOBILE MENU
     ======================== */
  function initMobileMenu() {
    const hamburger = document.getElementById('kc-hamburger');
    const mobileMenu = document.getElementById('kc-mobile-menu');
    if (!hamburger || !mobileMenu) return;

    hamburger.addEventListener('click', () => {
      const isOpen = hamburger.classList.toggle('open');
      mobileMenu.classList.toggle('open', isOpen);
      document.body.style.overflow = isOpen ? 'hidden' : '';
    });

    // Sub-menu toggles
    const toggles = mobileMenu.querySelectorAll('.kc-mobile-toggle');
    toggles.forEach(toggle => {
      toggle.addEventListener('click', () => {
        const sub = toggle.nextElementSibling;
        if (!sub) return;
        toggle.classList.toggle('open');
        sub.classList.toggle('open');
      });
    });

    // Close on link click
    mobileMenu.querySelectorAll('a:not(.kc-mobile-toggle)').forEach(a => {
      a.addEventListener('click', () => {
        hamburger.classList.remove('open');
        mobileMenu.classList.remove('open');
        document.body.style.overflow = '';
      });
    });
  }

  /* ========================
     HERO ANIMATIONS
     ======================== */
  function initHeroAnimations() {
    if (typeof gsap === 'undefined') {
      // Fallback: just show elements
      document.querySelectorAll('.kc-hero-badge, .kc-hero-headline, .kc-hero-sub, .kc-hero-actions, .kc-hero-visual').forEach(el => {
        el.style.opacity = '1';
        el.style.transform = 'none';
      });
      return;
    }

    const tl = gsap.timeline({ defaults: { ease: 'power3.out' } });

    const badge = document.querySelector('.kc-hero-badge');
    const headline = document.querySelector('.kc-hero-headline');
    const sub = document.querySelector('.kc-hero-sub');
    const actions = document.querySelector('.kc-hero-actions');
    const visual = document.querySelector('.kc-hero-visual');

    if (badge) tl.to(badge, { opacity: 1, y: 0, duration: 0.8 }, 0);
    if (headline) tl.to(headline, { opacity: 1, y: 0, duration: 0.9 }, 0.15);
    if (sub) tl.to(sub, { opacity: 1, y: 0, duration: 0.8 }, 0.3);
    if (actions) tl.to(actions, { opacity: 1, y: 0, duration: 0.8 }, 0.45);
    if (visual) tl.to(visual, { opacity: 1, y: 0, scale: 1, duration: 1.1, ease: 'power2.out' }, 0.3);
  }

  /* ========================
     SCROLL REVEAL (IntersectionObserver)
     ======================== */
  function initScrollReveal() {
    const options = {
      threshold: 0.12,
      rootMargin: '0px 0px -40px 0px'
    };

    // Regular reveal
    const revealObserver = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add('visible');
          revealObserver.unobserve(entry.target);
        }
      });
    }, options);

    document.querySelectorAll('.kc-reveal, .kc-reveal-left, .kc-reveal-right').forEach(el => {
      revealObserver.observe(el);
    });

    // Stagger groups
    const staggerObserver = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add('visible');
          staggerObserver.unobserve(entry.target);
        }
      });
    }, { threshold: 0.08, rootMargin: '0px 0px -20px 0px' });

    document.querySelectorAll('.kc-stagger').forEach(el => {
      staggerObserver.observe(el);
    });

    // Product info blocks
    const blockObserver = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add('visible');
          blockObserver.unobserve(entry.target);
        }
      });
    }, { threshold: 0.1 });

    document.querySelectorAll('.kc-product-info-block').forEach(el => {
      blockObserver.observe(el);
    });
  }

  /* ========================
     COUNTER ANIMATION (Stats)
     ======================== */
  function initCounters() {
    const counters = document.querySelectorAll('.kc-count-num');
    if (!counters.length) return;

    const observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (!entry.isIntersecting) return;
        const el = entry.target;
        const target = parseFloat(el.dataset.target || 0);
        if (isNaN(target)) return;
        
        const suffix = el.dataset.suffix || '';
        const prefix = el.dataset.prefix || '';
        const duration = 2200; // 2.2 seconds smooth ease-out
        const start = performance.now();

        function update(now) {
          const elapsed = now - start;
          const progress = Math.min(elapsed / duration, 1);
          // Ultra-smooth cubic ease out
          const eased = 1 - Math.pow(1 - progress, 3.5);
          const current = Math.round(eased * target);
          
          // Format with commas if target >= 1000
          const formatted = current.toLocaleString('en-US');
          el.textContent = prefix + formatted + suffix;

          if (progress < 1) {
            requestAnimationFrame(update);
          } else {
            el.textContent = prefix + target.toLocaleString('en-US') + suffix;
          }
        }
        requestAnimationFrame(update);
        observer.unobserve(el);
      });
    }, { threshold: 0.3 });

    counters.forEach(el => observer.observe(el));
  }

  /* ========================
     PARALLAX (Simple CSS-based)
     ======================== */
  function initParallax() {
    const parallaxEls = document.querySelectorAll('[data-parallax]');
    if (!parallaxEls.length) return;

    function updateParallax() {
      parallaxEls.forEach(el => {
        const speed = parseFloat(el.dataset.parallax || 0.2);
        const rect = el.getBoundingClientRect();
        const center = rect.top + rect.height / 2 - window.innerHeight / 2;
        el.style.transform = `translateY(${center * speed}px)`;
      });
    }
    window.addEventListener('scroll', updateParallax, { passive: true });
    updateParallax();
  }

  /* ========================
     BACK TO TOP
     ======================== */
  function initBackToTop() {
    const btn = document.querySelector('.kc-back-top');
    if (!btn) return;

    window.addEventListener('scroll', () => {
      btn.classList.toggle('visible', window.scrollY > 400);
    }, { passive: true });

    btn.addEventListener('click', () => {
      if (lenis) {
        lenis.scrollTo(0, { duration: 1.2 });
      } else {
        window.scrollTo({ top: 0, behavior: 'smooth' });
      }
    });
  }

  /* ========================
     PRODUCT CARD INTERACTIONS
     ======================== */
  function initProductCards() {
    const cards = document.querySelectorAll('.kc-product-card');
    cards.forEach(card => {
      card.addEventListener('mouseenter', (e) => {
        if (window.innerWidth < 768) return;
        const rect = card.getBoundingClientRect();
        const x = ((e.clientX - rect.left) / rect.width - 0.5) * 8;
        const y = ((e.clientY - rect.top) / rect.height - 0.5) * -8;
        card.style.transform = `translateY(-8px) rotateX(${y}deg) rotateY(${x}deg)`;
        card.style.transformStyle = 'preserve-3d';
        card.style.perspective = '800px';
      });

      card.addEventListener('mousemove', (e) => {
        if (window.innerWidth < 768) return;
        const rect = card.getBoundingClientRect();
        const x = ((e.clientX - rect.left) / rect.width - 0.5) * 6;
        const y = ((e.clientY - rect.top) / rect.height - 0.5) * -6;
        card.style.transform = `translateY(-8px) rotateX(${y}deg) rotateY(${x}deg)`;
      });

      card.addEventListener('mouseleave', () => {
        card.style.transform = '';
        card.style.transformStyle = '';
      });
    });
  }

  /* ========================
     CERTIFICATION CARD HOVER GLOW
     ======================== */
  function initCertCards() {
    const cards = document.querySelectorAll('.kc-cert-card, .kc-cert-full-card');
    cards.forEach(card => {
      card.addEventListener('mousemove', (e) => {
        const rect = card.getBoundingClientRect();
        const x = ((e.clientX - rect.left) / rect.width) * 100;
        const y = ((e.clientY - rect.top) / rect.height) * 100;
        card.style.setProperty('--glow-x', x + '%');
        card.style.setProperty('--glow-y', y + '%');
      });
    });
  }

  /* ========================
     CONTACT FORM — CAPTCHA
     ======================== */
  function initCaptcha() {
    const form = document.getElementById('kc-contact-form');
    if (!form) return;

    let captchaAnswer = 0;
    const sumEl = form.querySelector('.kc-captcha-sum');
    const inputEl = form.querySelector('.kc-captcha-input');
    const refreshEl = form.querySelector('.kc-captcha-refresh');

    function generateCaptcha() {
      const a = Math.ceil(Math.random() * 10);
      const b = Math.ceil(Math.random() * 10);
      captchaAnswer = a + b;
      if (sumEl) sumEl.textContent = `${a} + ${b} = ?`;
    }

    generateCaptcha();
    if (refreshEl) refreshEl.addEventListener('click', generateCaptcha);

    form.addEventListener('submit', (e) => {
      if (inputEl && parseInt(inputEl.value) !== captchaAnswer) {
        e.preventDefault();
        inputEl.style.borderColor = '#e53935';
        inputEl.focus();
        setTimeout(() => { inputEl.style.borderColor = ''; }, 2000);
        return false;
      }
    });
  }

  /* ========================
     PRODUCT THUMBNAIL SWITCHER
     ======================== */
  function initProductThumbs() {
    const mainImg = document.querySelector('.kc-product-main-img img');
    const thumbs = document.querySelectorAll('.kc-product-thumb');

    if (!mainImg || !thumbs.length) return;

    thumbs.forEach(thumb => {
      thumb.addEventListener('click', () => {
        const src = thumb.dataset.src;
        if (!src) return;

        mainImg.style.opacity = '0';
        mainImg.style.transform = 'scale(0.97)';
        setTimeout(() => {
          mainImg.src = src;
          mainImg.style.opacity = '1';
          mainImg.style.transform = '';
        }, 200);

        thumbs.forEach(t => t.classList.remove('active'));
        thumb.classList.add('active');
      });
    });
  }

  /* ========================
     MOBILE SUB MENU TOGGLE
     ======================== */
  function initMobileSubMenus() {
    // Already handled in initMobileMenu, but handle extra clicks here
  }

  /* ========================
     CURSOR GLOW (Desktop only)
     ======================== */
  function initCursorGlow() {
    if (window.innerWidth < 1024 || window.matchMedia('(hover: none)').matches) return;

    const glow = document.createElement('div');
    glow.className = 'kc-cursor-glow';
    glow.style.cssText = `
      position: fixed; pointer-events: none; z-index: 9998;
      width: 300px; height: 300px; border-radius: 50%;
      background: radial-gradient(circle, rgba(45,80,22,0.06) 0%, transparent 70%);
      transform: translate(-50%, -50%);
      transition: transform 0.1s linear;
      will-change: left, top;
    `;
    document.body.appendChild(glow);

    let mouseX = 0, mouseY = 0;
    document.addEventListener('mousemove', (e) => {
      mouseX = e.clientX;
      mouseY = e.clientY;
      glow.style.left = mouseX + 'px';
      glow.style.top = mouseY + 'px';
    });
  }

  /* ========================
     HERO IMAGE SHUFFLER
     ======================== */
  function initHeroImageShuffler() {
    const heroImg = document.querySelector('.kc-hero-product-img');
    if (!heroImg) return;

    const images = [
      { src: 'assets/img/product/dehydrated-banana.jpg', alt: 'Dehydrated Banana' },
      { src: 'assets/img/product/dehydrated-papaya.jpg', alt: 'Dehydrated Papaya' },
      { src: 'assets/img/product/dehydrated-beetroot.jpg', alt: 'Dehydrated Beetroot' },
      { src: 'assets/img/product/dehydrated-garlic.jpg', alt: 'Dehydrated Garlic' },
      { src: 'assets/img/product/dehydrated-onion.jpg', alt: 'Dehydrated Onion' },
      { src: 'assets/img/product/dehydrated-ginger.jpg', alt: 'Dehydrated Ginger' },
      { src: 'assets/img/product/dehydrated-green-chilli.jpg', alt: 'Dehydrated Green Chilli' },
      { src: 'assets/img/product/dehydrated-capsicum.jpg', alt: 'Dehydrated Capsicum' }
    ];

    let currentIndex = 0;

    heroImg.style.transition = 'opacity 0.6s cubic-bezier(0.4, 0, 0.2, 1), transform 0.6s cubic-bezier(0.4, 0, 0.2, 1)';

    setInterval(() => {
      currentIndex = (currentIndex + 1) % images.length;
      
      heroImg.style.opacity = '0';
      heroImg.style.transform = 'scale(0.94) translateY(10px)';

      setTimeout(() => {
        heroImg.src = images[currentIndex].src;
        heroImg.alt = images[currentIndex].alt;
        heroImg.style.opacity = '1';
        heroImg.style.transform = 'scale(1) translateY(0)';
      }, 600);
    }, 3200);
  }

  /* ========================
     INIT ALL
     ======================== */
  function init() {
    initPreloader();
    initNavbar();
    initMobileMenu();
    initHeroImageShuffler();
    initScrollReveal();
    initCounters();
    initParallax();
    initBackToTop();
    initProductCards();
    initCertCards();
    initCaptcha();
    initProductThumbs();
    initCursorGlow();

    // Init Lenis last
    if (typeof Lenis !== 'undefined') {
      initLenis();
    } else {
      // If Lenis fails to load, still run hero animations
      initHeroAnimations();
    }
  }

  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', init);
  } else {
    init();
  }

})();
