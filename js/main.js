/* ============================================================
   PIER ONE TRAVEL & TOUR SERVICES — main.js
   Handles: cursor, nav, preloader, scroll reveal, accordion,
            mobile menu, back-to-top, counters
   ============================================================ */

(function () {
  'use strict';

  /* ── Preloader ─────────────────────────────────────────────── */
  window.addEventListener('load', () => {
    setTimeout(() => {
      const pre = document.querySelector('.preloader');
      if (pre) pre.classList.add('hidden');
    }, 1800);
  });

  /* ── Custom Cursor ─────────────────────────────────────────── */
  const dot  = document.querySelector('.cursor-dot');
  const ring = document.querySelector('.cursor-ring');

  if (dot && ring && window.innerWidth > 768) {
    let mx = 0, my = 0, rx = 0, ry = 0;

    document.addEventListener('mousemove', e => {
      mx = e.clientX; my = e.clientY;
      dot.style.left  = mx + 'px';
      dot.style.top   = my + 'px';
    });

    (function animRing() {
      rx += (mx - rx) * 0.12;
      ry += (my - ry) * 0.12;
      ring.style.left = rx + 'px';
      ring.style.top  = ry + 'px';
      requestAnimationFrame(animRing);
    })();

    const interactable = 'a, button, .card, .dest-card, .tour-type-card, .blog-card, input, select, label, .accordion-btn, .tag, .testimonials-btn';
    document.querySelectorAll(interactable).forEach(el => {
      el.addEventListener('mouseenter', () => ring.classList.add('hovered'));
      el.addEventListener('mouseleave', () => ring.classList.remove('hovered'));
    });
  }

  /* ── Navigation: Sticky scroll class ──────────────────────── */
  const nav = document.querySelector('.nav');
  if (nav) {
    window.addEventListener('scroll', () => {
      nav.classList.toggle('scrolled', window.scrollY > 60);
    }, { passive: true });
  }

  /* ── Mobile Menu ───────────────────────────────────────────── */
  const burger = document.querySelector('.nav__burger');
  const mobileMenu = document.querySelector('.nav__mobile');

  if (burger && mobileMenu) {
    burger.addEventListener('click', () => {
      burger.classList.toggle('open');
      mobileMenu.classList.toggle('open');
      document.body.style.overflow = mobileMenu.classList.contains('open') ? 'hidden' : '';
    });
    mobileMenu.querySelectorAll('a').forEach(link => {
      link.addEventListener('click', () => {
        burger.classList.remove('open');
        mobileMenu.classList.remove('open');
        document.body.style.overflow = '';
      });
    });
  }

  /* ── Active nav link ───────────────────────────────────────── */
  const currentPath = window.location.pathname.split('/').pop() || 'index.html';
  document.querySelectorAll('.nav__link, .nav__drop-item').forEach(link => {
    const href = link.getAttribute('href') || '';
    if (href === currentPath || (currentPath === '' && href === 'index.html')) {
      link.classList.add('active');
    }
  });

  /* ── Scroll Reveal ─────────────────────────────────────────── */
  const reveals = document.querySelectorAll('.reveal');
  if ('IntersectionObserver' in window && reveals.length) {
    const observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add('in-view');
          observer.unobserve(entry.target);
        }
      });
    }, { threshold: 0.12, rootMargin: '0px 0px -40px 0px' });
    reveals.forEach(el => observer.observe(el));
  }

  /* ── Scroll-to-Top ─────────────────────────────────────────── */
  const scrollTopBtn = document.querySelector('.scroll-top');
  if (scrollTopBtn) {
    window.addEventListener('scroll', () => {
      scrollTopBtn.classList.toggle('visible', window.scrollY > 400);
    }, { passive: true });
    scrollTopBtn.addEventListener('click', () => {
      window.scrollTo({ top: 0, behavior: 'smooth' });
    });
  }

  /* ── Accordion ─────────────────────────────────────────────── */
  document.querySelectorAll('.accordion-btn').forEach(btn => {
    btn.addEventListener('click', () => {
      const item   = btn.closest('.accordion-item');
      const body   = item.querySelector('.accordion-body');
      const isOpen = btn.classList.contains('open');

      const accordion = btn.closest('.accordion');
      accordion.querySelectorAll('.accordion-btn').forEach(b => {
        b.classList.remove('open');
        b.closest('.accordion-item').querySelector('.accordion-body').classList.remove('open');
      });

      if (!isOpen) {
        btn.classList.add('open');
        body.classList.add('open');
      }
    });
  });

  /* ── Hero Video Fallback ───────────────────────────────────── */
  const heroVideo = document.querySelector('.hero__video');
  if (heroVideo) {
    heroVideo.addEventListener('error', () => {
      const heroSection = heroVideo.closest('.hero');
      if (heroSection) {
        heroSection.style.backgroundImage = 'url("https://images.unsplash.com/photo-1516026672322-bc52d61a55d5?w=1920")';
        heroSection.style.backgroundSize  = 'cover';
        heroSection.style.backgroundPosition = 'center';
        heroVideo.style.display = 'none';
      }
    });
  }

  /* ── Smooth parallax on hero bg (desktop only) ─────────────── */
  if (window.innerWidth > 768) {
    window.addEventListener('scroll', () => {
      const videoEl = document.querySelector('.hero__video');
      if (videoEl) {
        videoEl.style.transform = `translateY(${window.scrollY * 0.3}px)`;
      }
    }, { passive: true });
  }

  /* ── Destination Cards: Hover image zoom ───────────────────── */
  document.querySelectorAll('.dest-card').forEach(card => {
    const img = card.querySelector('img');
    card.addEventListener('mouseenter', () => { if (img) img.style.transform = 'scale(1.06)'; });
    card.addEventListener('mouseleave', () => { if (img) img.style.transform = 'scale(1)'; });
  });

  /* ── Staggered entrance delays for cards ───────────────────── */
  document.querySelectorAll('.card, .tour-type-card, .dest-card').forEach((card, i) => {
    card.style.transitionDelay = `${(i % 4) * 0.08}s`;
  });

  /* ── Number Counter Animation ──────────────────────────────── */
  function animateCounter(el, target, duration = 1800) {
    const startTime = performance.now();
    function update(currentTime) {
      const elapsed  = currentTime - startTime;
      const progress = Math.min(elapsed / duration, 1);
      const ease     = 1 - Math.pow(1 - progress, 3);
      el.textContent = Math.round(target * ease).toLocaleString() + (el.dataset.suffix || '');
      if (progress < 1) requestAnimationFrame(update);
    }
    requestAnimationFrame(update);
  }

  const counterEls = document.querySelectorAll('.stat-item__number[data-count]');
  if (counterEls.length && 'IntersectionObserver' in window) {
    const counterObserver = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          animateCounter(entry.target, parseInt(entry.target.dataset.count, 10));
          counterObserver.unobserve(entry.target);
        }
      });
    }, { threshold: 0.5 });
    counterEls.forEach(el => counterObserver.observe(el));
  }

  /* ── Tab Switcher ──────────────────────────────────────────── */
  document.querySelectorAll('.tab-btn').forEach(btn => {
    btn.addEventListener('click', () => {
      const group = btn.closest('[data-tabs]') || btn.closest('.tabs-container');
      if (!group) return;
      const target = btn.dataset.tab;
      group.querySelectorAll('.tab-btn').forEach(b => b.classList.remove('active'));
      group.querySelectorAll('.tab-panel').forEach(p => p.classList.remove('active'));
      btn.classList.add('active');
      const panel = group.querySelector(`[data-panel="${target}"]`);
      if (panel) panel.classList.add('active');
    });
  });

  /* ── Filter Tags ───────────────────────────────────────────── */
  document.querySelectorAll('.filter-tags .tag').forEach(tag => {
    tag.addEventListener('click', () => {
      const group = tag.closest('.filter-tags');
      if (group) group.querySelectorAll('.tag').forEach(t => t.classList.remove('active'));
      tag.classList.add('active');
    });
  });

  /* ── Gallery / Lightbox stub ───────────────────────────────── */
  document.querySelectorAll('[data-lightbox]').forEach(img => {
    img.addEventListener('click', () => {
      console.log('Lightbox:', img.src || img.querySelector('img')?.src);
    });
  });

  /* ── Tooltip ───────────────────────────────────────────────── */
  document.querySelectorAll('[title]').forEach(el => {
    el.addEventListener('mouseenter', function () {
      const tip = document.createElement('div');
      tip.className = 'tooltip';
      tip.textContent = this.getAttribute('title');
      tip.style.cssText = `
        position:fixed;background:var(--earth);color:var(--cream);
        font-size:0.72rem;padding:0.4rem 0.75rem;border-radius:6px;
        pointer-events:none;z-index:9999;white-space:nowrap;
        box-shadow:0 4px 16px rgba(0,0,0,0.2);
      `;
      document.body.appendChild(tip);
      this._tooltip = tip;
      this.removeAttribute('title');
    });
    el.addEventListener('mousemove', function (e) {
      if (this._tooltip) {
        this._tooltip.style.left = (e.clientX + 12) + 'px';
        this._tooltip.style.top  = (e.clientY - 28) + 'px';
      }
    });
    el.addEventListener('mouseleave', function () {
      if (this._tooltip) { this._tooltip.remove(); delete this._tooltip; }
    });
  });

})();