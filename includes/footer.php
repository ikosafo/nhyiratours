<!-- ════════════════════════════════════════════════
     FOOTER — properly structured menus
═══════════════════════════════════════════════════ -->
<footer class="footer" id="footer">
  <div class="kente-bar" style="margin-bottom:3rem;"></div>
  <div class="footer__grid">

    <!-- Brand column -->
    <div class="footer__col footer__col--brand">
      <div class="footer__logo">
        <div class="footer__logo-mark">P</div>
        <div>
          <div class="footer__brand-name">Pier One Travel &amp; Tour Services</div>
          <div class="footer__brand-tagline">Africa's Premier Tour Operator</div>
        </div>
      </div>
      <p class="footer__brand-desc">
        Africa's premier tour operator, connecting travellers to the continent's most extraordinary destinations since 2006. We craft journeys that inspire, educate, and transform.
      </p>
      <div class="footer__socials">
        <a href="#" class="footer__social" aria-label="Facebook">
          <svg fill="currentColor" viewBox="0 0 24 24"><path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"/></svg>
        </a>
        <a href="#" class="footer__social" aria-label="Instagram">
          <svg fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            <rect x="2" y="2" width="20" height="20" rx="5" ry="5"/>
            <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37z"/>
            <line x1="17.5" y1="6.5" x2="17.51" y2="6.5"/>
          </svg>
        </a>
        <a href="#" class="footer__social" aria-label="X">
          <svg fill="currentColor" viewBox="0 0 24 24"><path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/></svg>
        </a>
        <a href="#" class="footer__social" aria-label="YouTube">
          <svg fill="currentColor" viewBox="0 0 24 24">
            <path d="M22.54 6.42a2.78 2.78 0 00-1.95-1.96C18.88 4 12 4 12 4s-6.88 0-8.59.46a2.78 2.78 0 00-1.95 1.96A29 29 0 001 12a29 29 0 00.46 5.58A2.78 2.78 0 003.41 19.6C5.12 20 12 20 12 20s6.88 0 8.59-.46a2.78 2.78 0 001.95-1.95A29 29 0 0023 12a29 29 0 00-.46-5.58z"/>
            <polygon fill="white" points="9.75 15.02 15.5 12 9.75 8.98 9.75 15.02"/>
          </svg>
        </a>
        <a href="#" class="footer__social" aria-label="WhatsApp">
          <svg fill="currentColor" viewBox="0 0 24 24">
            <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/>
          </svg>
        </a>
      </div>
    </div>

    <!-- Destinations column -->
    <div class="footer__col">
      <div class="footer__col-title">Destinations</div>
      <div class="footer__links">
        <a href="<?= URLROOT ?>/destinations/westafrica" class="footer__link">🌍 West Africa</a>
        <a href="<?= URLROOT ?>/destinations/centralafrica" class="footer__link">🌿 Central Africa</a>
        <a href="<?= URLROOT ?>/destinations/eastafrica" class="footer__link">🦁 East Africa</a>
        <a href="<?= URLROOT ?>/destinations/indianocean" class="footer__link">🏝️ Indian Ocean Islands</a>
        <a href="<?= URLROOT ?>/destinations/southernafrica" class="footer__link">🐘 Southern Africa</a>
        <a href="<?= URLROOT ?>/destinations/northafrica" class="footer__link">🏛️ North Africa</a>
      </div>
    </div>

    <!-- Tours & Services column -->
    <div class="footer__col">
      <div class="footer__col-title">Tours &amp; Services</div>
      <div class="footer__links">
        <a href="<?= URLROOT ?>/tours/academic" class="footer__link">🎓 Academic Tours</a>
        <a href="<?= URLROOT ?>/tours/leisure" class="footer__link">🌅 Leisure Tours</a>
        <a href="<?= URLROOT ?>/tours/religious" class="footer__link">🕊️ Religious Tours</a>
        <a href="<?= URLROOT ?>/tours/volunteer" class="footer__link">🤝 Volunteer Mission Tours</a>
        <a href="<?= URLROOT ?>/tours/corporate" class="footer__link">💼 Corporate (MICE)</a>
        <a href="<?= URLROOT ?>/checklist/plan" class="footer__link">📋 Plan Your Trip</a>
        <a href="<?= URLROOT ?>/checklist/insurance" class="footer__link">🛡️ Travel Insurance</a>
      </div>
    </div>

    <!-- Company column -->
    <div class="footer__col">
      <!-- <div class="footer__col-title">Company</div>
      <div class="footer__links" style="margin-bottom:1.5rem;">
        <a href="<?= URLROOT ?>/about" class="footer__link">🌐 About Us</a>
        <a href="<?= URLROOT ?>/local-experts" class="footer__link">🧭 Local Experts</a>
        <a href="<?= URLROOT ?>/testimonials" class="footer__link">⭐ Testimonials</a>
        <a href="<?= URLROOT ?>/faqs" class="footer__link">❓ FAQs</a>
        <a href="<?= URLROOT ?>/careers" class="footer__link">💼 Careers</a>
      </div> -->

      <div class="footer__col-title">Contact Us</div>
      <div class="footer__contact-item">
        <svg fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
          <path stroke-linecap="round" stroke-linejoin="round" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
        </svg>
        <span>+233 (0) 302 000 000<br/>+234 (0) 800 000 000</span>
      </div>
      <div class="footer__contact-item">
        <svg fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
          <path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
        </svg>
        <span>info@pieronetours.com<br/>bookings@pieronetours.com</span>
      </div>
      <div class="footer__contact-item">
        <svg fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
          <path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
          <path stroke-linecap="round" stroke-linejoin="round" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
        </svg>
        <span>Independence Ave, Accra, Ghana<br/>Munich, Germany</span>
      </div>
    </div>

  </div><!-- /.footer__grid -->

  <div class="footer__bottom">
    <span class="footer__copy">© <?= date('Y') ?> Pier One Travel &amp; Tour Services. All rights reserved.</span>
    <div class="footer__bottom-links">
      <a href="#" class="footer__bottom-link">Privacy Policy</a>
      <a href="#" class="footer__bottom-link">Terms of Service</a>
      <a href="#" class="footer__bottom-link">Cookie Policy</a>
    </div>
  </div>
</footer>

<script src="<?= URLROOT ?>/js/main.js"></script>

<!-- Testimonials carousel script -->
<script>
  (function() {
    const track  = document.getElementById('tTrack');
    const prevBtn = document.getElementById('tPrev');
    const nextBtn = document.getElementById('tNext');
    const dotsEl  = document.getElementById('tDots');
    if (!track) return;

    const cards = track.querySelectorAll('.testimonial-card');
    let current = 0;
    let autoTimer;

    function visibleCount() {
      if (window.innerWidth >= 900) return 3;
      if (window.innerWidth >= 600) return 2;
      return 1;
    }

    function totalPages() {
      return Math.ceil(cards.length / visibleCount());
    }

    function buildDots() {
      if (!dotsEl) return;
      dotsEl.innerHTML = '';
      for (let i = 0; i < totalPages(); i++) {
        const dot = document.createElement('button');
        dot.className = 'testimonials-dot' + (i === current ? ' active' : '');
        dot.setAttribute('aria-label', 'Go to page ' + (i + 1));
        dot.addEventListener('click', () => goTo(i));
        dotsEl.appendChild(dot);
      }
    }

    function goTo(index) {
      const pages = totalPages();
      current = ((index % pages) + pages) % pages;
      const cardW = cards[0]?.offsetWidth + 24 || 304;
      track.style.transform = `translateX(-${current * visibleCount() * cardW}px)`;
      if (dotsEl) {
        dotsEl.querySelectorAll('.testimonials-dot').forEach((d, i) => {
          d.classList.toggle('active', i === current);
        });
      }
    }

    function next() { goTo(current + 1); }
    function prev() { goTo(current - 1); }

    if (prevBtn) {
      prevBtn.addEventListener('click', () => { 
        clearInterval(autoTimer); 
        prev(); 
        startAuto(); 
      });
    }
    if (nextBtn) {
      nextBtn.addEventListener('click', () => { 
        clearInterval(autoTimer); 
        next(); 
        startAuto(); 
      });
    }

    function startAuto() {
      autoTimer = setInterval(next, 5000);
    }

    buildDots();
    startAuto();
    window.addEventListener('resize', () => { buildDots(); goTo(0); });
  })();
</script>

</body>
</html>