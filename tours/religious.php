<?php include '../includes/header.php'; ?>

<style>
/* ═══════════════════════════════════════════════════════
   RELIGIOUS TOURS — tours/religious.php
   Pier One Travel & Tour Services
════════════════════════════════════════════════════════ */

/* ── Hero ─────────────────────────────────────────── */
.tour-hero {
  position: relative;
  height: 85vh;
  min-height: 580px;
  display: flex;
  align-items: flex-end;
  overflow: hidden;
}
.tour-hero__bg {
  position: absolute;
  inset: 0;
  width: 100%;
  height: 100%;
  object-fit: cover;
  transition: transform 10s ease;
}
.tour-hero:hover .tour-hero__bg { transform: scale(1.04); }
.tour-hero__overlay {
  position: absolute;
  inset: 0;
  background:
    linear-gradient(to right, rgba(28,16,8,.92) 0%, rgba(28,16,8,.55) 55%, rgba(28,16,8,.2) 100%),
    linear-gradient(to top, rgba(28,16,8,.85) 0%, transparent 55%);
}
.tour-hero__kente {
  position: absolute;
  bottom: 0; left: 0; right: 0;
  height: 5px;
  background: repeating-linear-gradient(
    90deg,
    #C8913A 0,#C8913A 40px,
    #3D2B1F 40px,#3D2B1F 80px,
    #C4784A 80px,#C4784A 120px,
    #2D4A3E 120px,#2D4A3E 160px,
    #8B6020 160px,#8B6020 200px
  );
  z-index: 3;
}
.tour-hero__content {
  position: relative;
  z-index: 2;
  max-width: 1400px;
  width: 100%;
  margin: 0 auto;
  padding: 3rem clamp(1rem,4vw,3rem);
}
.tour-hero__badge {
  display: inline-flex;
  align-items: center;
  gap: .5rem;
  background: rgba(200,145,58,.18);
  backdrop-filter: blur(8px);
  border: 1px solid rgba(200,145,58,.4);
  border-radius: 40px;
  padding: .35rem 1.1rem;
  color: var(--gold-light);
  font-size: .72rem;
  font-weight: 600;
  letter-spacing: .16em;
  text-transform: uppercase;
  margin-bottom: 1.1rem;
}
.tour-hero__title {
  font-family: 'Cormorant Garamond', serif;
  font-size: clamp(2.2rem, 6vw, 4.2rem);
  font-weight: 600;
  color: var(--white);
  line-height: 1.08;
  letter-spacing: -.015em;
  margin-bottom: 1.25rem;
  max-width: 23ch;
}
.tour-hero__title em { font-style: italic; color: var(--gold-light); }
.tour-hero__subtitle {
  font-size: clamp(.9rem, 1.6vw, 1.05rem);
  color: rgba(255,255,255,.72);
  line-height: 1.75;
  max-width: 46ch;
  margin-bottom: 2.25rem;
}
.tour-hero__meta {
  display: flex;
  align-items: center;
  gap: 2rem;
  flex-wrap: wrap;
  color: rgba(255,255,255,.65);
  font-size: .8rem;
  margin-bottom: 2rem;
}
.tour-hero__meta-item { display: flex; align-items: center; gap: .4rem; }
.tour-hero__meta-item svg { width: 14px; height: 14px; color: var(--gold); }

/* ── Intro Panel ──────────────────────────────────── */
.intro-panel {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 4rem;
  align-items: center;
}
.intro-panel__img-wrap {
  position: relative;
  border-radius: var(--radius-xl);
  overflow: hidden;
}
.intro-panel__img-wrap img {
  width: 100%;
  aspect-ratio: 4/5;
  object-fit: cover;
  display: block;
}
.intro-panel__badge {
  position: absolute;
  bottom: 2rem;
  right: -1.5rem;
  background: var(--white);
  border-radius: var(--radius-lg);
  padding: 1.4rem 1.75rem;
  box-shadow: var(--shadow-lg);
  min-width: 200px;
}
.intro-panel__badge-num {
  font-family: 'Cormorant Garamond', serif;
  font-size: 2.8rem;
  font-weight: 700;
  color: var(--gold);
  line-height: 1;
}
.intro-panel__badge-label {
  font-size: .78rem;
  color: var(--text-soft);
  margin-top: .3rem;
  line-height: 1.4;
}
.intro-pillar-list {
  display: flex;
  flex-direction: column;
  gap: 1.5rem;
  margin-top: 2.5rem;
}
.intro-pillar {
  display: flex;
  gap: 1.25rem;
  align-items: flex-start;
}
.intro-pillar__icon {
  width: 50px; height: 50px;
  background: linear-gradient(135deg, var(--gold-pale), var(--sand));
  border-radius: var(--radius);
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 1.35rem;
  flex-shrink: 0;
  border: 1px solid var(--border);
}
.intro-pillar__title {
  font-family: 'Cormorant Garamond', serif;
  font-size: 1.05rem;
  font-weight: 600;
  color: var(--earth);
  margin-bottom: .3rem;
}
.intro-pillar__desc {
  font-size: .82rem;
  color: var(--text-soft);
  line-height: 1.7;
}

/* ── Highlight Strip ──────────────────────────────── */
.highlight-strip {
  display: grid;
  grid-template-columns: repeat(4,1fr);
  gap: 0;
  border: 1px solid var(--border);
  border-radius: var(--radius-lg);
  overflow: hidden;
}
.highlight-strip__item {
  padding: 2rem 1.5rem;
  text-align: center;
  border-right: 1px solid var(--border);
}
.highlight-strip__item:last-child { border-right: none; }
.highlight-strip__icon { font-size: 2rem; margin-bottom: .75rem; }
.highlight-strip__label {
  font-family: 'Cormorant Garamond', serif;
  font-size: 1.1rem;
  font-weight: 600;
  color: var(--earth);
  margin-bottom: .3rem;
}
.highlight-strip__desc { font-size: .78rem; color: var(--text-soft); line-height: 1.6; }

/* ── Pilgrimage Grid ──────────────────────────────── */
.pilgrimage-grid {
  display: grid;
  grid-template-columns: repeat(3,1fr);
  gap: 1.5rem;
}
.pil-card {
  background: var(--white);
  border-radius: var(--radius-lg);
  border: 1px solid var(--border-soft);
  overflow: hidden;
  transition: transform var(--trans), box-shadow var(--trans), border-color var(--trans-fast);
  display: flex;
  flex-direction: column;
}
.pil-card:hover {
  transform: translateY(-6px);
  box-shadow: var(--shadow-lg);
  border-color: var(--gold);
}
.pil-card__img {
  aspect-ratio: 16/9;
  overflow: hidden;
  position: relative;
}
.pil-card__img img {
  width: 100%; height: 100%;
  object-fit: cover;
  transition: transform var(--trans-slow);
}
.pil-card:hover .pil-card__img img { transform: scale(1.06); }
.pil-card__badge {
  position: absolute;
  top: 1rem; left: 1rem;
  background: var(--earth);
  color: var(--gold-light);
  font-size: .66rem;
  font-weight: 700;
  letter-spacing: .1em;
  text-transform: uppercase;
  padding: .28rem .75rem;
  border-radius: 40px;
}
.pil-card__body {
  padding: 1.5rem;
  display: flex;
  flex-direction: column;
  flex: 1;
}
.pil-card__region {
  font-size: .7rem;
  font-weight: 600;
  color: var(--gold);
  letter-spacing: .12em;
  text-transform: uppercase;
  margin-bottom: .4rem;
}
.pil-card__title {
  font-family: 'Cormorant Garamond', serif;
  font-size: 1.3rem;
  font-weight: 600;
  color: var(--earth);
  line-height: 1.25;
  margin-bottom: .6rem;
}
.pil-card__desc {
  font-size: .82rem;
  color: var(--text-soft);
  line-height: 1.68;
  margin-bottom: 1.2rem;
  flex: 1;
}
.pil-card__meta {
  display: flex;
  flex-wrap: wrap;
  gap: .4rem;
  margin-bottom: 1.25rem;
}
.pil-card__tag {
  font-size: .68rem;
  font-weight: 500;
  background: var(--gold-pale);
  color: var(--gold-dark);
  border: 1px solid var(--border);
  border-radius: 40px;
  padding: .2rem .7rem;
}
.pil-card__footer {
  display: flex;
  align-items: center;
  justify-content: space-between;
  border-top: 1px solid var(--border-soft);
  padding-top: 1.1rem;
}
.pil-card__price-label { font-size: .65rem; color: var(--text-muted); text-transform: uppercase; letter-spacing: .06em; }
.pil-card__price-amount {
  font-family: 'Cormorant Garamond', serif;
  font-size: 1.3rem;
  font-weight: 700;
  color: var(--earth);
}

/* ── Sidebar CTA / Info Box ──────────────────────── */
.enquiry-layout {
  display: grid;
  grid-template-columns: 1fr 360px;
  gap: 3rem;
  align-items: start;
}
.enquiry-box {
  background: linear-gradient(145deg, var(--earth), #5C3D2E);
  border-radius: var(--radius-xl);
  padding: 2.5rem;
  position: sticky;
  top: calc(var(--topbar-h) + var(--nav-h) + 1.5rem);
}
.enquiry-box__title {
  font-family: 'Cormorant Garamond', serif;
  font-size: 1.5rem;
  font-weight: 600;
  color: var(--cream);
  margin-bottom: .5rem;
}
.enquiry-box__sub {
  font-size: .82rem;
  color: rgba(242,232,213,.65);
  line-height: 1.65;
  margin-bottom: 2rem;
}
.enquiry-box__field {
  display: flex;
  flex-direction: column;
  gap: .3rem;
  margin-bottom: 1rem;
}
.enquiry-box__label {
  font-size: .68rem;
  font-weight: 600;
  color: var(--gold);
  letter-spacing: .1em;
  text-transform: uppercase;
}
.enquiry-box__input,
.enquiry-box__select,
.enquiry-box__textarea {
  font-family: 'DM Sans', sans-serif;
  font-size: .85rem;
  padding: .8rem 1rem;
  border-radius: var(--radius);
  border: 1.5px solid rgba(200,145,58,.25);
  background: rgba(255,255,255,.07);
  color: var(--cream);
  outline: none;
  transition: border-color var(--trans-fast);
  width: 100%;
}
.enquiry-box__input::placeholder,
.enquiry-box__textarea::placeholder { color: rgba(242,232,213,.35); }
.enquiry-box__input:focus,
.enquiry-box__select:focus,
.enquiry-box__textarea:focus { border-color: var(--gold); }
.enquiry-box__select { -webkit-appearance: none; }
.enquiry-box__textarea { resize: vertical; min-height: 80px; }
.enquiry-box__note {
  font-size: .73rem;
  color: rgba(242,232,213,.5);
  text-align: center;
  margin-top: 1rem;
  line-height: 1.6;
}
.enquiry-box__note a { color: var(--gold-light); }

/* ── FAQ ─────────────────────────────────────────── */
.faq-list { display: flex; flex-direction: column; gap: 0; }
.faq-item {
  border-bottom: 1px solid var(--border-soft);
}
.faq-item:first-child { border-top: 1px solid var(--border-soft); }
.faq-btn {
  width: 100%;
  padding: 1.25rem 0;
  display: flex;
  align-items: center;
  justify-content: space-between;
  gap: 1rem;
  background: none;
  border: none;
  font-family: 'DM Sans', sans-serif;
  font-size: .9rem;
  font-weight: 500;
  color: var(--earth);
  text-align: left;
  cursor: pointer;
  transition: color var(--trans-fast);
}
.faq-btn:hover { color: var(--gold); }
.faq-btn.open { color: var(--gold); }
.faq-icon {
  width: 22px; height: 22px;
  border: 1.5px solid var(--border);
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  flex-shrink: 0;
  font-size: .75rem;
  color: var(--text-soft);
  transition: transform var(--trans-fast), background var(--trans-fast), border-color var(--trans-fast), color var(--trans-fast);
}
.faq-btn.open .faq-icon {
  transform: rotate(45deg);
  background: var(--gold);
  border-color: var(--gold);
  color: var(--white);
}
.faq-body {
  max-height: 0;
  overflow: hidden;
  transition: max-height .45s cubic-bezier(.4,0,.2,1);
}
.faq-body.open { max-height: 400px; }
.faq-content {
  padding: 0 0 1.25rem;
  font-size: .85rem;
  color: var(--text-soft);
  line-height: 1.8;
}

/* ── CTA Band ────────────────────────────────────── */
.cta-band {
  background: linear-gradient(135deg, var(--earth), #5C3D2E);
  border-radius: var(--radius-xl);
  padding: clamp(2.5rem,5vw,4rem);
  text-align: center;
  position: relative;
  overflow: hidden;
}
.cta-band::before {
  content: '';
  position: absolute;
  top: -80px; right: -80px;
  width: 300px; height: 300px;
  background: var(--gold);
  border-radius: 50%;
  opacity: .05;
}
.cta-band__title {
  font-family: 'Cormorant Garamond', serif;
  font-size: clamp(1.8rem,4vw,3rem);
  font-weight: 600;
  color: var(--cream);
  margin-bottom: .75rem;
  position: relative; z-index: 1;
}
.cta-band__title em { font-style: italic; color: var(--gold-light); }
.cta-band__sub {
  font-size: .95rem;
  color: rgba(242,232,213,.7);
  max-width: 44ch;
  margin: 0 auto 2rem;
  line-height: 1.7;
  position: relative; z-index: 1;
}
.cta-band__actions {
  display: flex;
  gap: 1rem;
  justify-content: center;
  flex-wrap: wrap;
  position: relative; z-index: 1;
}

/* ── Responsive ──────────────────────────────────── */
@media (max-width: 1100px) {
  .pilgrimage-grid { grid-template-columns: 1fr 1fr; }
  .enquiry-layout { grid-template-columns: 1fr; }
  .enquiry-box { position: static; }
}
@media (max-width: 900px) {
  .intro-panel { grid-template-columns: 1fr; gap: 2rem; }
  .intro-panel__badge { right: 1rem; }
  .highlight-strip { grid-template-columns: repeat(2,1fr); }
}
@media (max-width: 640px) {
  .pilgrimage-grid { grid-template-columns: 1fr; }
}
</style>

<!-- ════════════════════════════════════════════════
     HERO
═══════════════════════════════════════════════════ -->
<section class="tour-hero">
  <img class="tour-hero__bg"
    src="https://images.unsplash.com/photo-1580418827493-f2b22c0a76cd?w=1920&q=80"
    alt="Lalibela Rock Churches Pilgrimage"
    loading="eager" />
  <div class="tour-hero__overlay"></div>
  <div class="tour-hero__kente"></div>
  <div class="tour-hero__content">
    <nav class="breadcrumb" style="margin-bottom:1rem;">
      <a href="<?= URLROOT ?>">Home</a>
      <span class="breadcrumb__sep">›</span>
      <a href="#">Tours</a>
      <span class="breadcrumb__sep">›</span>
      <span class="breadcrumb__current">Religious Tours</span>
    </nav>
    <div class="tour-hero__badge">🙏 Pilgrimages &amp; Faith Journeys</div>
    <h1 class="tour-hero__title">Walk Where Saints Walked.</em><br>Pray Where Nations <em>Pivoted.</em></h1>
    <p class="tour-hero__subtitle">From the rock-hewn churches of Lalibela to the historic cathedrals of Accra and the great mosques of North Africa — Pier One designs spiritually enriching journeys for churches, dioceses, and faith groups across denominations.</p>
    <div class="tour-hero__meta">
      <span class="tour-hero__meta-item">
        <svg fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/></svg>
        12+ Holy Sites
      </span>
      <span class="tour-hero__meta-item">
        <svg fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
        Church &amp; Mosque Groups
      </span>
      <span class="tour-hero__meta-item">
        <svg fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path stroke-linecap="round" d="M12 6v6l4 2"/></svg>
        7–14 Day Pilgrimages
      </span>
      <span class="tour-hero__meta-item">
        <svg fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
        Interfaith &amp; Ecumenical
      </span>
    </div>
    <div style="display:flex;gap:1rem;flex-wrap:wrap;">
      <a href="#pilgrimages" class="btn btn-primary btn-lg">
        View Pilgrimages
        <svg class="arrow-icon" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
          <path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
        </svg>
      </a>
      <a href="#enquiry" class="btn btn-secondary btn-lg">Request Group Quote</a>
    </div>
  </div>
</section>

<!-- ════════════════════════════════════════════════
     HIGHLIGHT STRIP
═══════════════════════════════════════════════════ -->
<section class="section--sand" style="padding:0;">
  <div class="container">
    <div class="highlight-strip">
      <div class="highlight-strip__item reveal">
        <div class="highlight-strip__icon">⛪</div>
        <div class="highlight-strip__label">Christian Pilgrimages</div>
        <div class="highlight-strip__desc">Lalibela, Axum Tsion, Coptic Cairo, Accra Wesley Cathedral &amp; more</div>
      </div>
      <div class="highlight-strip__item reveal reveal-delay-1">
        <div class="highlight-strip__icon">🕌</div>
        <div class="highlight-strip__label">Islamic Heritage</div>
        <div class="highlight-strip__desc">Fez, Kairouan, Larabanga Mosque, Timbuktu manuscripts</div>
      </div>
      <div class="highlight-strip__item reveal reveal-delay-2">
        <div class="highlight-strip__icon">✝️</div>
        <div class="highlight-strip__label">Pastoral Care</div>
        <div class="highlight-strip__desc">Priests &amp; pastors travel free with groups of 20+ pilgrims</div>
      </div>
      <div class="highlight-strip__item reveal reveal-delay-3">
        <div class="highlight-strip__icon">🎵</div>
        <div class="highlight-strip__label">Gospel &amp; Choir Tours</div>
        <div class="highlight-strip__desc">Sing in historic venues &amp; join local worship communities</div>
      </div>
    </div>
  </div>
</section>

<!-- ════════════════════════════════════════════════
     INTRO — WHY RELIGIOUS TOURS
═══════════════════════════════════════════════════ -->
<section class="section section--cream">
  <div class="container">
    <div class="intro-panel">
      <div class="intro-panel__img-wrap reveal">
        <img src="https://images.unsplash.com/photo-1588702547919-26089e690ecc?w=900&q=80" alt="Pilgrims in Lalibela" loading="lazy" />
        <div class="intro-panel__badge">
          <div class="intro-panel__badge-num">150+</div>
          <div class="intro-panel__badge-label">Faith groups guided<br>across Africa since 2006</div>
        </div>
      </div>
      <div>
        <span class="section-eyebrow reveal">Our Approach to Faith Travel</span>
        <h2 class="section-title reveal reveal-delay-1">Deepen Your Faith<br>in Africa's <em>Sacred</em><br>Landscapes.</h2>
        <p class="section-subtitle reveal reveal-delay-2" style="margin-bottom:0;">Africa is not just a destination for wildlife; it is home to some of Christianity's oldest roots (Ethiopian Orthodox), Islam's greatest centres of learning (Timbuktu, Fez), and vibrant contemporary worship communities. Pier One handles all logistics so you can focus on the spiritual journey.</p>
        <div class="intro-pillar-list">
          <div class="intro-pillar reveal reveal-delay-2">
            <div class="intro-pillar__icon">📖</div>
            <div>
              <div class="intro-pillar__title">Theologically Informed Guides</div>
              <div class="intro-pillar__desc">We partner with local clergy, theologians, and historians — not just tour guides — to provide depth and context to every site.</div>
            </div>
          </div>
          <div class="intro-pillar reveal reveal-delay-3">
            <div class="intro-pillar__icon">🤲</div>
            <div>
              <div class="intro-pillar__title">Liturgy &amp; Worship Space</div>
              <div class="intro-pillar__desc">We arrange private chapel access, meeting spaces for daily prayers, and opportunities to worship with local congregations.</div>
            </div>
          </div>
          <div class="intro-pillar reveal reveal-delay-4">
            <div class="intro-pillar__icon">🛡️</div>
            <div>
              <div class="intro-pillar__title">Duty of Care for Pilgrims</div>
              <div class="intro-pillar__desc">Comprehensive travel insurance, 24/7 support, and special assistance for senior pilgrims or those with mobility needs.</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ════════════════════════════════════════════════
     PILGRIMAGE GRID
═══════════════════════════════════════════════════ -->
<section class="section section--sand" id="pilgrimages">
  <div class="container">
    <div style="text-align:center;max-width:560px;margin:0 auto 3rem;">
      <span class="section-eyebrow reveal">Sacred Journeys</span>
      <h2 class="section-title reveal reveal-delay-1">Pilgrimages for the<br><em>Faithful Traveller</em></h2>
      <p class="section-subtitle reveal reveal-delay-2" style="margin:0 auto;">Each itinerary is designed in consultation with your pastor, imam, or group leader to ensure spiritual goals are met.</p>
    </div>

    <div class="pilgrimage-grid">

      <!-- Pilgrimage 1 -->
      <div class="pil-card reveal">
        <div class="pil-card__img">
          <img src="https://images.unsplash.com/photo-1580418827493-f2b22c0a76cd?w=700&q=80" alt="Lalibela Pilgrimage" loading="lazy" />
          <div class="pil-card__badge">Christian Pilgrimage</div>
        </div>
        <div class="pil-card__body">
          <div class="pil-card__region">Ethiopia · Orthodox Heritage</div>
          <div class="pil-card__title">Lalibela &amp; the Ark of the Covenant Route</div>
          <div class="pil-card__desc">Stand before the 12th-century rock-hewn churches of Lalibela, visit Axum — where the Ark of the Covenant is said to rest — and attend an ancient Orthodox mass. A profound journey into the roots of African Christianity.</div>
          <div class="pil-card__meta">
            <span class="pil-card__tag">Lalibela Churches</span>
            <span class="pil-card__tag">Axum Tsion</span>
            <span class="pil-card__tag">Lake Tana Monasteries</span>
            <span class="pil-card__tag">Gondar Castles</span>
          </div>
          <div class="pil-card__footer">
            <div>
              <div class="pil-card__price-label">12 Days from</div>
              <div class="pil-card__price-amount">$2,450</div>
            </div>
            <a href="#enquiry" class="btn btn-primary btn-sm">Request Info</a>
          </div>
        </div>
      </div>

      <!-- Pilgrimage 2 -->
      <div class="pil-card reveal reveal-delay-1">
        <div class="pil-card__img">
          <img src="https://images.unsplash.com/photo-1539020140153-e479b8c22e70?w=700&q=80" alt="Morocco Islamic Tour" loading="lazy" />
          <div class="pil-card__badge">Islamic Heritage</div>
        </div>
        <div class="pil-card__body">
          <div class="pil-card__region">Morocco · Islamic Civilisation</div>
          <div class="pil-card__title">Morocco: Mosques, Madrasas &amp; Mystics</div>
          <div class="pil-card__desc">Visit the University of Al-Qarawiyyin (the world's oldest operating university), the great mosques of Casablanca and Fez, and engage with scholars of Sufi traditions. A journey through the golden age of Islamic learning.</div>
          <div class="pil-card__meta">
            <span class="pil-card__tag">Al-Qarawiyyin</span>
            <span class="pil-card__tag">Hassan II Mosque</span>
            <span class="pil-card__tag">Sufi Music</span>
            <span class="pil-card__tag">Andalusian Gardens</span>
          </div>
          <div class="pil-card__footer">
            <div>
              <div class="pil-card__price-label">10 Days from</div>
              <div class="pil-card__price-amount">$1,950</div>
            </div>
            <a href="#enquiry" class="btn btn-primary btn-sm">Request Info</a>
          </div>
        </div>
      </div>

      <!-- Pilgrimage 3 -->
      <div class="pil-card reveal reveal-delay-2">
        <div class="pil-card__img">
          <img src="https://images.unsplash.com/photo-1580060839134-75a5edca2e99?w=700&q=80" alt="Ghana Christian Heritage" loading="lazy" />
          <div class="pil-card__badge">Christian Heritage &amp; Worship</div>
        </div>
        <div class="pil-card__body">
          <div class="pil-card__region">Ghana · West African Faith</div>
          <div class="pil-card__title">Ghana: Wesley's Legacy &amp; Charismatic Worship</div>
          <div class="pil-card__desc">Trace the footsteps of Methodist and Presbyterian missionaries in Accra and Cape Coast, visit historic chapels, and experience the electric energy of a Ghanaian Sunday service with a local congregation.</div>
          <div class="pil-card__meta">
            <span class="pil-card__tag">Wesley Cathedral</span>
            <span class="pil-card__tag">Presbyterian Basel Mission</span>
            <span class="pil-card__tag">Gospel Worship</span>
            <span class="pil-card__tag">Cape Coast Castle</span>
          </div>
          <div class="pil-card__footer">
            <div>
              <div class="pil-card__price-label">8 Days from</div>
              <div class="pil-card__price-amount">$1,350</div>
            </div>
            <a href="#enquiry" class="btn btn-primary btn-sm">Request Info</a>
          </div>
        </div>
      </div>

      <!-- Pilgrimage 4 -->
      <div class="pil-card reveal">
        <div class="pil-card__img">
          <img src="https://images.unsplash.com/photo-1575101261474-5cb5653bbcaa?w=700&q=80" alt="Egypt Coptic Tour" loading="lazy" />
          <div class="pil-card__badge">Coptic &amp; Biblical</div>
        </div>
        <div class="pil-card__body">
          <div class="pil-card__region">Egypt · Holy Family Route</div>
          <div class="pil-card__title">Egypt: In the Footsteps of the Holy Family</div>
          <div class="pil-card__desc">Follow the traditional route of Mary, Joseph, and the infant Jesus through Egypt. Visit the Hanging Church in Coptic Cairo, the monasteries of Wadi Natrun, and Mount Sinai (St. Catherine's Monastery).</div>
          <div class="pil-card__meta">
            <span class="pil-card__tag">Coptic Cairo</span>
            <span class="pil-card__tag">Wadi Natrun</span>
            <span class="pil-card__tag">St. Catherine's</span>
            <span class="pil-card__tag">Mount Sinai</span>
          </div>
          <div class="pil-card__footer">
            <div>
              <div class="pil-card__price-label">11 Days from</div>
              <div class="pil-card__price-amount">$2,100</div>
            </div>
            <a href="#enquiry" class="btn btn-primary btn-sm">Request Info</a>
          </div>
        </div>
      </div>

      <!-- Pilgrimage 5 -->
      <div class="pil-card reveal reveal-delay-1">
        <div class="pil-card__img">
          <img src="https://images.unsplash.com/photo-1576483355431-9a16cb5dae54?w=700&q=80" alt="Senegal Sufi Tour" loading="lazy" />
          <div class="pil-card__badge">Sufi &amp; Spiritual</div>
        </div>
        <div class="pil-card__body">
          <div class="pil-card__region">Senegal · Mouride &amp; Tijaniyya</div>
          <div class="pil-card__title">Senegal: The Great Mosques &amp; Sufi Brotherhoods</div>
          <div class="pil-card__desc">Witness the spiritual heart of West African Islam. Visit the Great Mosque of Touba (Mouride), the holy city of Tivaouane (Tijaniyya), and Dakar's historic mosques. Deepen understanding of West Africa's unique Islamic traditions.</div>
          <div class="pil-card__meta">
            <span class="pil-card__tag">Touba Mosque</span>
            <span class="pil-card__tag">Mouride Teachings</span>
            <span class="pil-card__tag">Tivaouane</span>
            <span class="pil-card__tag">Gorée Island Reflection</span>
          </div>
          <div class="pil-card__footer">
            <div>
              <div class="pil-card__price-label">9 Days from</div>
              <div class="pil-card__price-amount">$1,650</div>
            </div>
            <a href="#enquiry" class="btn btn-primary btn-sm">Request Info</a>
          </div>
        </div>
      </div>

      <!-- Pilgrimage 6 -->
      <div class="pil-card reveal reveal-delay-2">
        <div class="pil-card__img">
          <img src="https://images.unsplash.com/photo-1551632436-cbf8dd35adfa?w=700&q=80" alt="Rwanda Healing" loading="lazy" />
          <div class="pil-card__badge">Reconciliation &amp; Hope</div>
        </div>
        <div class="pil-card__body">
          <div class="pil-card__region">Rwanda · Healing Pilgrimage</div>
          <div class="pil-card__title">Rwanda: A Pilgrimage of Reconciliation</div>
          <div class="pil-card__desc">For faith groups seeking to understand forgiveness and reconciliation. Visit the Kigali Genocide Memorial, hear testimonies from survivors and perpetrators who have reconciled, and worship with vibrant local church communities leading Rwanda's healing.</div>
          <div class="pil-card__meta">
            <span class="pil-card__tag">Kigali Memorial</span>
            <span class="pil-card__tag">Reconciliation Villages</span>
            <span class="pil-card__tag">Local Church Partners</span>
            <span class="pil-card__tag">Peace-Building</span>
          </div>
          <div class="pil-card__footer">
            <div>
              <div class="pil-card__price-label">8 Days from</div>
              <div class="pil-card__price-amount">$1,800</div>
            </div>
            <a href="#enquiry" class="btn btn-primary btn-sm">Request Info</a>
          </div>
        </div>
      </div>

    </div><!-- /.pilgrimage-grid -->
  </div>
</section>

<!-- ════════════════════════════════════════════════
     ENQUIRY + FAQ
═══════════════════════════════════════════════════ -->
<section class="section section--cream" id="enquiry">
  <div class="container">
    <div class="enquiry-layout">

      <!-- Left: FAQ -->
      <div>
        <span class="section-eyebrow reveal">Common Questions</span>
        <h2 class="section-title reveal reveal-delay-1">Faith Travel<br><em>FAQs</em></h2>
        <p class="section-subtitle reveal reveal-delay-2" style="margin-bottom:2.5rem;">Everything churches, mosques, and faith group leaders need to know.</p>
        <div class="faq-list reveal reveal-delay-2">
          <div class="faq-item">
            <button class="faq-btn" onclick="toggleFaq(this)">
              Do pastors/imams travel free?
              <div class="faq-icon">+</div>
            </button>
            <div class="faq-body">
              <div class="faq-content">Yes. We offer one complimentary land package for a spiritual leader (pastor, priest, or imam) for every 20 paying pilgrims in the group.</div>
            </div>
          </div>
          <div class="faq-item">
            <button class="faq-btn" onclick="toggleFaq(this)">
              Can we arrange daily prayers or mass?
              <div class="faq-icon">+</div>
            </button>
            <div class="faq-body">
              <div class="faq-content">Absolutely. We pre-book private chapels, mosque prayer spaces, or meeting rooms for daily worship according to your tradition's schedule.</div>
            </div>
          </div>
          <div class="faq-item">
            <button class="faq-btn" onclick="toggleFaq(this)">
              Is the trip open to all denominations?
              <div class="faq-icon">+</div>
            </button>
            <div class="faq-body">
              <div class="faq-content">Yes. We design itineraries for Catholic, Protestant, Orthodox, Evangelical, and Islamic groups. Interfaith and ecumenical journeys are also a specialty.</div>
            </div>
          </div>
          <div class="faq-item">
            <button class="faq-btn" onclick="toggleFaq(this)">
              How do you handle elderly pilgrims?
              <div class="faq-icon">+</div>
            </button>
            <div class="faq-body">
              <div class="faq-content">We offer "gentle pilgrimage" options with reduced walking, wheelchair-accessible vehicles, and accommodations on ground floors. Medical support is available on request.</div>
            </div>
          </div>
        </div>
      </div>

      <!-- Right: Enquiry Form -->
      <div class="enquiry-box reveal reveal-delay-3">
        <div class="enquiry-box__title">Request Pilgrimage Info</div>
        <p class="enquiry-box__sub">Tell us about your faith community and we'll send a tailored proposal for your spiritual journey.</p>
        <form onsubmit="return false;">
          <div class="enquiry-box__field">
            <label class="enquiry-box__label">Church / Mosque / Organization</label>
            <input class="enquiry-box__input" type="text" placeholder="e.g., St. Mark's Parish, Accra Central Mosque" />
          </div>
          <div class="enquiry-box__field">
            <label class="enquiry-box__label">Contact Person &amp; Title</label>
            <input class="enquiry-box__input" type="text" placeholder="Rev. / Pastor / Imam Full Name" />
          </div>
          <div class="enquiry-box__field">
            <label class="enquiry-box__label">Email Address</label>
            <input class="enquiry-box__input" type="email" placeholder="pastor@diocese.org" />
          </div>
          <div class="enquiry-box__field">
            <label class="enquiry-box__label">Pilgrimage Interest</label>
            <select class="enquiry-box__select">
              <option value="">Select a journey…</option>
              <option>Ethiopia Orthodox Pilgrimage</option>
              <option>Ghana Christian Heritage</option>
              <option>Egypt Holy Family Route</option>
              <option>Morocco Islamic Heritage</option>
              <option>Senegal Sufi Tour</option>
              <option>Rwanda Reconciliation Pilgrimage</option>
              <option>Custom / Not sure</option>
            </select>
          </div>
          <div style="display:grid;grid-template-columns:1fr 1fr;gap:.75rem;">
            <div class="enquiry-box__field">
              <label class="enquiry-box__label">Group Size</label>
              <select class="enquiry-box__select">
                <option>10 – 25</option>
                <option>26 – 50</option>
                <option>51 – 100</option>
                <option>100+</option>
              </select>
            </div>
            <div class="enquiry-box__field">
              <label class="enquiry-box__label">Preferred Year</label>
              <select class="enquiry-box__select">
                <option>2026</option>
                <option>2027</option>
                <option>Flexible</option>
              </select>
            </div>
          </div>
          <div class="enquiry-box__field">
            <label class="enquiry-box__label">Special Notes</label>
            <textarea class="enquiry-box__textarea" placeholder="e.g., We would like to celebrate a special mass at a specific site…"></textarea>
          </div>
          <button type="submit" class="btn btn-primary" style="width:100%;justify-content:center;">
            Send Enquiry
            <svg class="arrow-icon" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
              <path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
            </svg>
          </button>
          <p class="enquiry-box__note">We respond within 48 hours. <a href="#">Privacy Policy</a>.</p>
        </form>
      </div>

    </div>
  </div>
</section>

<!-- ════════════════════════════════════════════════
     CTA BAND
═══════════════════════════════════════════════════ -->
<section class="section section--sand">
  <div class="container">
    <div class="cta-band reveal">
      <h2 class="cta-band__title">Lead Your Flock to<br><em>Africa's Sacred Sites</em>.</h2>
      <p class="cta-band__sub">Whether it's a parish retreat, an interfaith dialogue trip, or a deeply personal pilgrimage — let Pier One handle the details. You handle the ministry.</p>
      <div class="cta-band__actions">
        <a href="#enquiry" class="btn btn-primary btn-lg">
          Plan a Pilgrimage
          <svg class="arrow-icon" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
          </svg>
        </a>
        <a href="mailto:faith@pieronetours.com" class="btn btn-secondary btn-lg">Email Faith Travel Desk</a>
      </div>
    </div>
  </div>
</section>

<script>
function toggleFaq(btn) {
  const item = btn.closest('.faq-item');
  const body = item.querySelector('.faq-body');
  const isOpen = btn.classList.contains('open');
  document.querySelectorAll('.faq-btn.open').forEach(b => {
    b.classList.remove('open');
    b.closest('.faq-item').querySelector('.faq-body').classList.remove('open');
  });
  if (!isOpen) {
    btn.classList.add('open');
    body.classList.add('open');
  }
}
</script>

<?php include '../includes/footer.php'; ?>