<?php
// Detect environment for URL paths
$host = $_SERVER['HTTP_HOST'] ?? 'localhost';

if ($host === 'nhyiratours.local' || $host === 'localhost') {
    define('URLROOT', 'http://' . $host);
} else {
    define('URLROOT', 'https://pieronetours.com');
}

// Determine active page for navigation highlighting
$current_page = basename($_SERVER['PHP_SELF']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="Pier One Travel & Tour Services — Africa's premier tour operator. Discover authentic African experiences across West Africa, East Africa, and beyond." />
  <title>Pier One Travel & Tour Services | Africa's Premier Tour Operator</title>
  
  <!-- Styles -->
  <link rel="stylesheet" href="<?= URLROOT ?>/css/styles.css" />
  
  <!-- Favicon -->
  <link rel="icon" type="image/svg+xml" href="<?= URLROOT ?>/images/logo.webp" />
  
  <!-- Preload critical assets -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  
  <style>
    /* Critical above-the-fold styles */
    .hero {
      position: relative;
      height: 100vh;
      min-height: 600px;
      display: flex;
      align-items: center;
      overflow: hidden;
    }
    .hero__video-wrap {
      position: absolute;
      inset: 0;
      z-index: 0;
    }
    .hero__video {
      width: 100%;
      height: 100%;
      object-fit: cover;
    }
    .hero__overlay-gradient {
      position: absolute;
      inset: 0;
      background:
        linear-gradient(to right, rgba(28,16,8,0.88) 0%, rgba(28,16,8,0.45) 55%, rgba(28,16,8,0.15) 100%),
        linear-gradient(to top, rgba(28,16,8,0.75) 0%, transparent 50%);
      z-index: 1;
    }
    .hero__kente {
      position: absolute;
      bottom: 0;
      left: 0;
      right: 0;
      height: 5px;
      background: repeating-linear-gradient(
        90deg,
        #C8913A 0px, #C8913A 40px,
        #3D2B1F 40px, #3D2B1F 80px,
        #C4784A 80px, #C4784A 120px,
        #2D4A3E 120px, #2D4A3E 160px,
        #8B6020 160px, #8B6020 200px
      );
      z-index: 3;
    }
    .hero__content {
      position: relative;
      z-index: 2;
      max-width: 1400px;
      width: 100%;
      margin: 0 auto;
      padding: 0 clamp(1rem, 4vw, 3rem);
    }
    .hero__eyebrow {
      display: inline-flex;
      align-items: center;
      gap: 0.65rem;
      font-size: 0.7rem;
      font-weight: 600;
      color: var(--gold-light, #E8B96A);
      letter-spacing: 0.2em;
      text-transform: uppercase;
      margin-bottom: 1.2rem;
      opacity: 0;
      animation: fadeUp 0.7s 0.3s ease forwards;
    }
    .hero__eyebrow-line {
      display: block;
      width: 36px;
      height: 1.5px;
      background: var(--gold, #C8913A);
    }
    .hero__title {
      font-family: 'Cormorant Garamond', serif;
      font-size: clamp(2.6rem, 7vw, 5.5rem);
      font-weight: 600;
      color: var(--white, #FFFFFF);
      line-height: 1.06;
      letter-spacing: -0.01em;
      margin-bottom: 1.4rem;
      max-width: 14ch;
      opacity: 0;
      animation: fadeUp 0.8s 0.5s ease forwards;
    }
    .hero__title em {
      font-style: italic;
      color: var(--gold-light, #E8B96A);
    }
    .hero__subtitle {
      font-size: clamp(0.95rem, 1.8vw, 1.1rem);
      color: rgba(255,255,255,0.75);
      line-height: 1.75;
      max-width: 42ch;
      margin-bottom: 2.25rem;
      opacity: 0;
      animation: fadeUp 0.8s 0.7s ease forwards;
    }
    .hero__actions {
      display: flex;
      align-items: center;
      gap: 1rem;
      flex-wrap: wrap;
      opacity: 0;
      animation: fadeUp 0.8s 0.9s ease forwards;
    }
    .hero__scroll {
      position: absolute;
      bottom: 3rem;
      right: clamp(1rem, 4vw, 3rem);
      z-index: 3;
      display: flex;
      flex-direction: column;
      align-items: center;
      gap: 0.5rem;
      color: rgba(255,255,255,0.5);
      font-size: 0.65rem;
      letter-spacing: 0.16em;
      text-transform: uppercase;
      writing-mode: vertical-rl;
      opacity: 0;
      animation: fadeIn 1s 1.5s ease forwards;
    }
    .hero__scroll-line {
      width: 1px;
      height: 48px;
      background: linear-gradient(to bottom, rgba(255,255,255,0.4), rgba(255,255,255,0));
      animation: scrollPulse 2s infinite;
    }
    @keyframes scrollPulse {
      0%, 100% { opacity: 1; transform: scaleY(1); }
      50% { opacity: 0.4; transform: scaleY(0.6); }
    }
    @keyframes fadeUp {
      from { opacity: 0; transform: translateY(24px); }
      to   { opacity: 1; transform: translateY(0); }
    }
    @keyframes fadeIn {
      from { opacity: 0; }
      to   { opacity: 1; }
    }
    .dest-grid {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 1rem;
    }
    .dest-card {
      aspect-ratio: 3/4;
    }
    .feature-split {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 4rem;
      align-items: center;
    }
    .feature-split__img {
      position: relative;
      border-radius: var(--radius-xl, 32px);
      overflow: hidden;
    }
    .feature-split__img img {
      width: 100%;
      aspect-ratio: 4/5;
      object-fit: cover;
    }
    .feature-split__badge {
      position: absolute;
      bottom: 2rem;
      right: -1.5rem;
      background: var(--white, #FFFFFF);
      border-radius: var(--radius-lg, 20px);
      padding: 1.25rem 1.5rem;
      box-shadow: var(--shadow-lg, 0 20px 60px rgba(61,43,31,0.22));
      min-width: 180px;
    }
    .feature-split__badge-num {
      font-family: 'Cormorant Garamond', serif;
      font-size: 2.6rem;
      font-weight: 700;
      color: var(--gold, #C8913A);
      line-height: 1;
    }
    .feature-split__badge-label {
      font-size: 0.78rem;
      color: var(--text-soft, #8A6858);
      margin-top: 0.25rem;
    }
    .feature-list {
      display: flex;
      flex-direction: column;
      gap: 1.75rem;
    }
    .tours-grid {
      display: grid;
      grid-template-columns: 1.2fr 1fr 1fr;
      gap: 1.5rem;
    }
    .tours-grid .card:first-child {
      grid-row: 1 / 3;
    }
    .tours-grid .card:first-child .card__img-wrap {
      aspect-ratio: 3/4;
    }
    .testimonials-outer {
      position: relative;
    }
    .testimonials-wrap {
      overflow: hidden;
    }
    .testimonials-track {
      display: flex;
      gap: 1.5rem;
      transition: transform 0.6s cubic-bezier(0.4,0,0.2,1);
    }
    .testimonials-track .testimonial-card {
      flex: 0 0 calc(33.333% - 1rem);
      min-width: 280px;
    }
    .testimonials-btn {
      position: absolute;
      top: 50%;
      transform: translateY(-50%);
      width: 48px;
      height: 48px;
      border-radius: 50%;
      background: var(--white, #FFFFFF);
      border: 1.5px solid var(--border, rgba(200,145,58,0.25));
      box-shadow: var(--shadow-md, 0 8px 32px rgba(61,43,31,0.14));
      display: flex;
      align-items: center;
      justify-content: center;
      color: var(--earth, #3D2B1F);
      cursor: pointer;
      z-index: 10;
      transition: background var(--trans-fast, 0.18s), border-color var(--trans-fast, 0.18s), color var(--trans-fast, 0.18s), transform var(--trans-fast, 0.18s), box-shadow var(--trans-fast, 0.18s);
    }
    .testimonials-btn:hover {
      background: var(--gold, #C8913A);
      border-color: var(--gold, #C8913A);
      color: var(--white, #FFFFFF);
      box-shadow: 0 6px 24px rgba(200,145,58,0.4);
      transform: translateY(-50%) scale(1.08);
    }
    .testimonials-btn svg { width: 20px; height: 20px; }
    .testimonials-btn--prev { left: -24px; }
    .testimonials-btn--next { right: -24px; }
    .testimonials-dots {
      display: flex;
      justify-content: center;
      gap: 0.5rem;
      margin-top: 2rem;
    }
    .testimonials-dot {
      width: 8px;
      height: 8px;
      border-radius: 50%;
      background: var(--border, rgba(200,145,58,0.25));
      cursor: pointer;
      transition: background var(--trans-fast, 0.18s), transform var(--trans-fast, 0.18s);
    }
    .testimonials-dot.active {
      background: var(--gold, #C8913A);
      transform: scale(1.3);
    }
    @media (max-width: 900px) {
      .dest-grid { grid-template-columns: 1fr 1fr; }
      .feature-split { grid-template-columns: 1fr; gap: 2rem; }
      .feature-split__badge { right: 1rem; }
      .tours-grid { grid-template-columns: 1fr 1fr; }
      .tours-grid .card:first-child { grid-row: auto; }
      .tours-grid .card:first-child .card__img-wrap { aspect-ratio: 4/3; }
      .testimonials-track .testimonial-card { flex: 0 0 90%; }
      .testimonials-btn--prev { left: -12px; }
      .testimonials-btn--next { right: -12px; }
    }
    @media (max-width: 600px) {
      .dest-grid { grid-template-columns: 1fr; }
      .tours-grid { grid-template-columns: 1fr; }
    }
  </style>
</head>
<body>

<!-- Preloader -->
<div class="preloader" id="preloader">
  <div class="preloader__logo">Pier One Travel & Tour Services</div>
  <div class="preloader__bar"><div class="preloader__fill"></div></div>
</div>

<!-- Custom Cursor -->
<div class="cursor-dot"></div>
<div class="cursor-ring"></div>

<!-- Scroll to Top -->
<button class="scroll-top" aria-label="Back to top">
  <svg fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
    <path stroke-linecap="round" stroke-linejoin="round" d="M5 15l7-7 7 7"/>
  </svg>
</button>

<!-- ── TOP BAR ─────────────────────────────────────────────── -->
<div class="topbar">
  <div class="topbar__inner">
    <div class="topbar__contacts">
      <a href="tel:+017670812809" class="topbar__item">
        <svg fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
          <path stroke-linecap="round" stroke-linejoin="round" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
        </svg>
        <!-- +233 (0) 302 000 000 --> 017670812809
      </a>
      <a href="mailto:info@pieronetours.com" class="topbar__item">
        <svg fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
          <path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
        </svg>
        info@pieronetours.com
      </a>
      <span class="topbar__item">
        <svg fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
          <path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
          <path stroke-linecap="round" stroke-linejoin="round" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
        </svg>
        Accra, Ghana · Munich, Germany
      </span>
    </div>
    <div class="topbar__socials">
      <a href="#" class="topbar__social" aria-label="Facebook">
        <svg fill="currentColor" viewBox="0 0 24 24"><path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"/></svg>
      </a>
      <a href="#" class="topbar__social" aria-label="Instagram">
        <svg fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
          <rect x="2" y="2" width="20" height="20" rx="5" ry="5"/>
          <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37z"/>
          <line x1="17.5" y1="6.5" x2="17.51" y2="6.5"/>
        </svg>
      </a>
      <a href="#" class="topbar__social" aria-label="X / Twitter">
        <svg fill="currentColor" viewBox="0 0 24 24"><path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/></svg>
      </a>
      <a href="#" class="topbar__social" aria-label="YouTube">
        <svg fill="currentColor" viewBox="0 0 24 24">
          <path d="M22.54 6.42a2.78 2.78 0 00-1.95-1.96C18.88 4 12 4 12 4s-6.88 0-8.59.46a2.78 2.78 0 00-1.95 1.96A29 29 0 001 12a29 29 0 00.46 5.58A2.78 2.78 0 003.41 19.6C5.12 20 12 20 12 20s6.88 0 8.59-.46a2.78 2.78 0 001.95-1.95A29 29 0 0023 12a29 29 0 00-.46-5.58z"/>
          <polygon fill="white" points="9.75 15.02 15.5 12 9.75 8.98 9.75 15.02"/>
        </svg>
      </a>
      <a href="#" class="topbar__social" aria-label="WhatsApp">
        <svg fill="currentColor" viewBox="0 0 24 24">
          <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/>
        </svg>
      </a>
    </div>
  </div>
</div>

<!-- ── NAVIGATION ──────────────────────────────────────────── -->
<nav class="nav" role="navigation">
  <div class="nav__inner">
    <!-- Logo -->
    <a href="<?= URLROOT ?>" class="nav__logo">
      <div class="nav__logo-mark">
        <img src="<?= URLROOT ?>/images/logo.webp" alt="Pier One Logo" />
      </div>
      <div class="nav__logo-text">
        <span class="nav__logo-name">Pier One</span>
        <span class="nav__logo-tagline">Travel &amp; Tour Services</span>
      </div>
    </a>

    <!-- Desktop Menu -->
    <ul class="nav__menu" role="list">
      <li class="nav__item">
        <a href="<?= URLROOT ?>" class="nav__link <?= $current_page == 'index.php' ? 'active' : '' ?>">Home</a>
      </li>

      <li class="nav__item">
        <a href="#" class="nav__link">
          Destinations
          <svg class="chevron" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
            <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/>
          </svg>
        </a>
        <div class="nav__dropdown">
          <div class="nav__drop-label">Explore by Region</div>
          <a href="<?= URLROOT ?>/destinations/westafrica" class="nav__drop-item"><span class="flag">🌍</span> West Africa</a>
          <a href="<?= URLROOT ?>/destinations/centralafrica" class="nav__drop-item"><span class="flag">🌿</span> Central Africa</a>
          <a href="<?= URLROOT ?>/destinations/eastafrica" class="nav__drop-item"><span class="flag">🦁</span> East Africa</a>
          <a href="<?= URLROOT ?>/destinations/indianocean" class="nav__drop-item"><span class="flag">🏝️</span> Indian Ocean Islands</a>
          <a href="<?= URLROOT ?>/destinations/southernafrica" class="nav__drop-item"><span class="flag">🐘</span> Southern Africa</a>
          <a href="<?= URLROOT ?>/destinations/northafrica" class="nav__drop-item"><span class="flag">🏛️</span> North Africa</a>
        </div>
      </li>

      <li class="nav__item">
        <a href="#" class="nav__link">
          Tours
          <svg class="chevron" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
            <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/>
          </svg>
        </a>
        <div class="nav__dropdown">
          <div class="nav__drop-label">Tour Types</div>
          <a href="<?= URLROOT ?>/tours/academic" class="nav__drop-item">🎓 Academic Tours</a>
          <a href="<?= URLROOT ?>/tours/leisure" class="nav__drop-item">🌅 Leisure Tours</a>
          <a href="<?= URLROOT ?>/tours/religious" class="nav__drop-item">🕊️ Religious Tours</a>
          <a href="<?= URLROOT ?>/tours/volunteer" class="nav__drop-item">🤝 Volunteer Mission Tours</a>
          <a href="<?= URLROOT ?>/tours/corporate" class="nav__drop-item">💼 Corporate (MICE)</a>
        </div>
      </li>

      <li class="nav__item">
        <a href="#" class="nav__link">
          Travel Checklist
          <svg class="chevron" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
            <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/>
          </svg>
        </a>
        <div class="nav__dropdown">
          <div class="nav__drop-label">Plan &amp; Protect</div>
          <a href="<?= URLROOT ?>/checklist/plan" class="nav__drop-item">📋 Plan Your Trip</a>
          <a href="<?= URLROOT ?>/checklist/insurance" class="nav__drop-item">🛡️ Travel Insurance</a>
        </div>
      </li>

      <li class="nav__item">
        <a href="<?= URLROOT ?>/about" class="nav__link <?= $current_page == 'about.php' ? 'active' : '' ?>">About Us</a>
      </li>

      <li class="nav__item">
        <a href="#" class="nav__link">
          More
          <svg class="chevron" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
            <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/>
          </svg>
        </a>
        <div class="nav__dropdown">
          <div class="nav__drop-label">More from Pier One</div>
          <a href="<?= URLROOT ?>/local-experts" class="nav__drop-item">🧭 Local Experts</a>
          <a href="<?= URLROOT ?>/testimonials" class="nav__drop-item">⭐ Testimonials</a>
          <a href="<?= URLROOT ?>/faqs" class="nav__drop-item">❓ FAQs</a>
          <a href="<?= URLROOT ?>/careers" class="nav__drop-item">💼 Careers</a>
        </div>
      </li>
    </ul>

    <div class="nav__cta">
      <a href="<?= URLROOT ?>/login" class="btn-login">
        <svg fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
          <path stroke-linecap="round" stroke-linejoin="round" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
        </svg>
        Login
      </a>
      <a href="#contact" class="btn btn-primary btn-sm">Book Now</a>
    </div>

    <!-- Mobile Burger -->
    <button class="nav__burger" aria-label="Toggle menu" aria-expanded="false">
      <span></span><span></span><span></span>
    </button>
  </div>
</nav>

<!-- Mobile Menu -->
<div class="nav__mobile" role="dialog" aria-label="Mobile navigation">
  <div class="nav__mobile-section">
    <div class="nav__mobile-section-title">Main</div>
    <a href="<?= URLROOT ?>" class="nav__mobile-link">🏠 Home</a>
    <a href="<?= URLROOT ?>/about" class="nav__mobile-link">🌐 About Us</a>
  </div>
  <div class="nav__mobile-section">
    <div class="nav__mobile-section-title">Destinations</div>
    <a href="<?= URLROOT ?>/destinations/westafrica" class="nav__mobile-link">🌍 West Africa</a>
    <a href="<?= URLROOT ?>/destinations/centralafrica" class="nav__mobile-link">🌿 Central Africa</a>
    <a href="<?= URLROOT ?>/destinations/eastafrica" class="nav__mobile-link">🦁 East Africa</a>
    <a href="<?= URLROOT ?>/destinations/indianocean" class="nav__mobile-link">🏝️ Indian Ocean Islands</a>
    <a href="<?= URLROOT ?>/destinations/southernafrica" class="nav__mobile-link">🐘 Southern Africa</a>
    <a href="<?= URLROOT ?>/destinations/northafrica" class="nav__mobile-link">🏛️ North Africa</a>
  </div>
  <div class="nav__mobile-section">
    <div class="nav__mobile-section-title">Tours</div>
    <a href="<?= URLROOT ?>/tours/academic" class="nav__mobile-link">🎓 Academic Tours</a>
    <a href="<?= URLROOT ?>/tours/leisure" class="nav__mobile-link">🌅 Leisure Tours</a>
    <a href="<?= URLROOT ?>/tours/religious" class="nav__mobile-link">🕊️ Religious Tours</a>
    <a href="<?= URLROOT ?>/tours/volunteer" class="nav__mobile-link">🤝 Volunteer Mission Tours</a>
    <a href="<?= URLROOT ?>/tours/corporate" class="nav__mobile-link">💼 Corporate (MICE)</a>
  </div>
  <div class="nav__mobile-section">
    <div class="nav__mobile-section-title">Travel Checklist</div>
    <a href="<?= URLROOT ?>/checklist/plan" class="nav__mobile-link">📋 Plan Your Trip</a>
    <a href="<?= URLROOT ?>/checklist/insurance" class="nav__mobile-link">🛡️ Travel Insurance</a>
  </div>
  <div class="nav__mobile-section">
    <div class="nav__mobile-section-title">More</div>
    <a href="<?= URLROOT ?>/local-experts" class="nav__mobile-link">🧭 Local Experts</a>
    <a href="<?= URLROOT ?>/testimonials" class="nav__mobile-link">⭐ Testimonials</a>
    <a href="<?= URLROOT ?>/faqs" class="nav__mobile-link">❓ FAQs</a>
    <a href="<?= URLROOT ?>/careers" class="nav__mobile-link">💼 Careers</a>
  </div>
  <div style="padding:1rem 0.5rem; display:flex; gap:0.75rem; flex-wrap:wrap;">
    <a href="<?= URLROOT ?>/login" class="btn btn-outline btn-sm">Login</a>
    <a href="#contact" class="btn btn-primary btn-sm">Book Now</a>
  </div>
</div>