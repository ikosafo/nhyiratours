<?php include 'includes/header.php'; ?>

<style>
/* ═══════════════════════════════════════════════════════
   LOCAL EXPERTS — experts.php
   Pier One Travel & Tour Services
════════════════════════════════════════════════════════ */

/* ── Hero ─────────────────────────────────────────── */
.experts-hero {
  position: relative;
  height: 78vh;
  min-height: 540px;
  display: flex;
  align-items: flex-end;
  overflow: hidden;
}
.experts-hero__bg {
  position: absolute; inset: 0;
  width: 100%; height: 100%;
  object-fit: cover;
  transition: transform 12s ease;
}
.experts-hero:hover .experts-hero__bg { transform: scale(1.04); }
.experts-hero__overlay {
  position: absolute; inset: 0;
  background:
    linear-gradient(to right, rgba(28,16,8,.95) 0%, rgba(28,16,8,.65) 55%, rgba(28,16,8,.2) 100%),
    linear-gradient(to top, rgba(28,16,8,.9) 0%, transparent 55%);
}
.experts-hero__kente {
  position: absolute; bottom: 0; left: 0; right: 0;
  height: 5px;
  background: repeating-linear-gradient(90deg,#C8913A 0,#C8913A 40px,#3D2B1F 40px,#3D2B1F 80px,#C4784A 80px,#C4784A 120px,#2D4A3E 120px,#2D4A3E 160px,#8B6020 160px,#8B6020 200px);
  z-index: 3;
}
.experts-hero__content {
  position: relative; z-index: 2;
  max-width: 1400px; width: 100%; margin: 0 auto;
  padding: 3.5rem clamp(1rem,4vw,3rem);
}
.experts-hero__badge {
  display: inline-flex; align-items: center; gap: .5rem;
  background: rgba(200,145,58,.18); backdrop-filter: blur(8px);
  border: 1px solid rgba(200,145,58,.4); border-radius: 40px;
  padding: .35rem 1.1rem; color: var(--gold-light);
  font-size: .72rem; font-weight: 600; letter-spacing: .16em; text-transform: uppercase;
  margin-bottom: 1.1rem;
}
.experts-hero__title {
  font-family: 'Cormorant Garamond', serif;
  font-size: clamp(2rem,6vw,4.6rem);
  font-weight: 600; color: var(--white);
  line-height: 1.06; letter-spacing: -.015em;
  margin-bottom: 1.1rem;
}
.experts-hero__title em { font-style: italic; color: var(--gold-light); }
.experts-hero__subtitle {
  font-size: clamp(.88rem,1.6vw,1.05rem);
  color: rgba(255,255,255,.72);
  line-height: 1.78; max-width: 52ch; margin-bottom: 2rem;
}
.experts-hero__meta {
  display: flex; align-items: center; gap: 2rem; flex-wrap: wrap;
  color: rgba(255,255,255,.62); font-size: .8rem;
}
.experts-hero__meta-item { display: flex; align-items: center; gap: .4rem; }
.experts-hero__meta-item svg { width: 14px; height: 14px; color: var(--gold); }

/* ── Philosophy Split ─────────────────────────────── */
.philosophy-split {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 5rem;
  align-items: center;
}
.philosophy-img {
  position: relative;
}
.philosophy-img img {
  width: 100%; border-radius: var(--radius-xl);
  aspect-ratio: 4/5; object-fit: cover;
  display: block;
}
.philosophy-img__accent {
  position: absolute;
  bottom: -1.5rem; right: -1.5rem;
  width: 55%;
  border-radius: var(--radius-lg);
  border: 4px solid var(--cream);
  overflow: hidden;
  box-shadow: var(--shadow-lg);
}
.philosophy-img__accent img {
  width: 100%; display: block;
  aspect-ratio: 4/3; object-fit: cover;
}
.philosophy-img__badge {
  position: absolute;
  top: 2rem; left: -1.5rem;
  background: var(--gold);
  color: var(--white);
  border-radius: var(--radius-lg);
  padding: 1rem 1.25rem;
  text-align: center;
  box-shadow: var(--shadow-lg);
  z-index: 2;
}
.philosophy-img__badge-num {
  font-family: 'Cormorant Garamond', serif;
  font-size: 2rem; font-weight: 700; line-height: 1;
}
.philosophy-img__badge-label {
  font-size: .65rem; font-weight: 600; letter-spacing: .08em;
  text-transform: uppercase; opacity: .9; margin-top: .2rem;
}

/* ── Region Tabs ──────────────────────────────────── */
.region-tabs {
  display: flex;
  gap: .5rem;
  flex-wrap: wrap;
  margin-bottom: 2.5rem;
  border-bottom: 1px solid var(--border-soft);
  padding-bottom: .5rem;
}
.region-tab {
  padding: .55rem 1.25rem;
  border-radius: 40px;
  font-size: .78rem; font-weight: 600;
  cursor: pointer;
  border: 1.5px solid var(--border);
  background: transparent;
  color: var(--text-mid);
  font-family: inherit;
  transition: all var(--trans-fast);
}
.region-tab:hover { border-color: var(--gold); color: var(--gold); }
.region-tab.active {
  background: var(--gold);
  border-color: var(--gold);
  color: var(--white);
}

/* ── Expert Cards Grid ────────────────────────────── */
.experts-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 1.75rem;
}
.expert-card {
  background: var(--white);
  border: 1px solid var(--border-soft);
  border-radius: var(--radius-xl);
  overflow: hidden;
  transition: transform var(--trans), box-shadow var(--trans);
}
.expert-card:hover {
  transform: translateY(-6px);
  box-shadow: var(--shadow-lg);
}
.expert-card__img-wrap {
  position: relative;
  aspect-ratio: 4/3;
  overflow: hidden;
}
.expert-card__img-wrap img {
  width: 100%; height: 100%;
  object-fit: cover;
  transition: transform var(--trans-slow);
}
.expert-card:hover .expert-card__img-wrap img { transform: scale(1.06); }
.expert-card__region-tag {
  position: absolute; top: 1rem; left: 1rem;
  background: rgba(28,16,8,.72); backdrop-filter: blur(6px);
  color: var(--gold-light);
  font-size: .65rem; font-weight: 700; letter-spacing: .12em; text-transform: uppercase;
  padding: .3rem .85rem; border-radius: 40px;
  border: 1px solid rgba(200,145,58,.4);
}
.expert-card__specialty {
  position: absolute; bottom: 1rem; right: 1rem;
  background: var(--gold);
  color: var(--white);
  font-size: .68rem; font-weight: 700;
  padding: .3rem .75rem; border-radius: 40px;
}
.expert-card__body { padding: 1.5rem; }
.expert-card__name {
  font-family: 'Cormorant Garamond', serif;
  font-size: 1.3rem; font-weight: 600; color: var(--earth);
  margin-bottom: .15rem;
}
.expert-card__title {
  font-size: .72rem; font-weight: 600; color: var(--gold);
  letter-spacing: .1em; text-transform: uppercase;
  margin-bottom: .75rem;
}
.expert-card__bio {
  font-size: .82rem; color: var(--text-soft);
  line-height: 1.7; margin-bottom: 1rem;
}
.expert-card__tags {
  display: flex; gap: .4rem; flex-wrap: wrap;
  margin-bottom: 1rem;
}
.expert-card__tag {
  font-size: .65rem; font-weight: 500;
  background: var(--gold-pale); color: var(--gold-dark);
  border: 1px solid var(--border); border-radius: 40px;
  padding: .2rem .65rem;
}
.expert-card__langs {
  display: flex; align-items: center; gap: .5rem;
  font-size: .74rem; color: var(--text-muted);
  padding-top: .85rem;
  border-top: 1px solid var(--border-soft);
}
.expert-card__langs svg { width: 13px; height: 13px; color: var(--gold); }

/* ── Process Strip ────────────────────────────────── */
.process-strip {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: 0;
  border: 1px solid var(--border-soft);
  border-radius: var(--radius-xl);
  overflow: hidden;
  background: var(--white);
}
.process-item {
  padding: 2.25rem 1.75rem;
  border-right: 1px solid var(--border-soft);
  position: relative;
}
.process-item:last-child { border-right: none; }
.process-item::after {
  content: '→';
  position: absolute; right: -10px; top: 50%; transform: translateY(-50%);
  font-size: 1rem; color: var(--gold); z-index: 1;
}
.process-item:last-child::after { display: none; }
.process-item__step {
  font-family: 'Cormorant Garamond', serif;
  font-size: 2.8rem; font-weight: 700; color: var(--gold-pale);
  line-height: 1; margin-bottom: .75rem;
  -webkit-text-stroke: 1.5px var(--gold);
}
.process-item__title {
  font-family: 'Cormorant Garamond', serif;
  font-size: 1.1rem; font-weight: 600; color: var(--earth);
  margin-bottom: .4rem;
}
.process-item__desc {
  font-size: .78rem; color: var(--text-soft); line-height: 1.65;
}

/* ── Certifications Bar ───────────────────────────── */
.cert-bar {
  display: grid;
  grid-template-columns: repeat(5, 1fr);
  gap: 1.5rem;
  align-items: center;
  padding: 2.5rem 3rem;
  background: var(--white);
  border: 1px solid var(--border-soft);
  border-radius: var(--radius-xl);
}
.cert-item {
  text-align: center;
}
.cert-item__icon { font-size: 2rem; margin-bottom: .5rem; }
.cert-item__label {
  font-size: .72rem; font-weight: 600; color: var(--earth);
  line-height: 1.4;
}
.cert-item__sub {
  font-size: .65rem; color: var(--text-muted); margin-top: .15rem;
}

/* ── Featured Expert ──────────────────────────────── */
.featured-expert {
  display: grid;
  grid-template-columns: 360px 1fr;
  gap: 3.5rem;
  background: linear-gradient(135deg, var(--earth), #5C3D2E);
  border-radius: var(--radius-xl);
  overflow: hidden;
  padding: 3rem 3rem 3rem 0;
}
.featured-expert__img {
  margin: -3rem 0 -3rem 0;
  overflow: hidden;
}
.featured-expert__img img {
  width: 100%; height: 100%;
  object-fit: cover; display: block;
}
.featured-expert__body { padding-right: 1rem; }
.featured-expert__eyebrow {
  font-size: .68rem; font-weight: 700; letter-spacing: .16em;
  text-transform: uppercase; color: var(--gold);
  margin-bottom: .75rem; display: block;
}
.featured-expert__name {
  font-family: 'Cormorant Garamond', serif;
  font-size: clamp(1.8rem,3.5vw,2.8rem);
  font-weight: 600; color: var(--cream);
  line-height: 1.1; margin-bottom: .3rem;
}
.featured-expert__title {
  font-size: .82rem; color: var(--gold-light);
  font-weight: 500; margin-bottom: 1.5rem;
}
.featured-expert__quote {
  font-family: 'Cormorant Garamond', serif;
  font-size: 1.15rem; font-style: italic;
  color: rgba(242,232,213,.82);
  line-height: 1.7; margin-bottom: 1.5rem;
  padding-left: 1.25rem;
  border-left: 2px solid var(--gold);
}
.featured-expert__stats {
  display: flex; gap: 2rem; flex-wrap: wrap;
  margin-bottom: 2rem;
}
.featured-expert__stat { }
.featured-expert__stat-num {
  font-family: 'Cormorant Garamond', serif;
  font-size: 1.8rem; font-weight: 700; color: var(--gold-light);
  line-height: 1;
}
.featured-expert__stat-label {
  font-size: .72rem; color: rgba(242,232,213,.6); margin-top: .15rem;
}

/* ── CTA Band ─────────────────────────────────────── */
.cta-band { background: linear-gradient(135deg, var(--earth), #5C3D2E); border-radius: var(--radius-xl); padding: clamp(2.5rem,5vw,4rem); text-align: center; position: relative; overflow: hidden; }
.cta-band::before { content: ''; position: absolute; top: -80px; right: -80px; width: 300px; height: 300px; background: var(--gold); border-radius: 50%; opacity: .05; }
.cta-band__title { font-family: 'Cormorant Garamond', serif; font-size: clamp(1.8rem,4vw,3rem); font-weight: 600; color: var(--cream); margin-bottom: .75rem; position: relative; z-index: 1; }
.cta-band__title em { font-style: italic; color: var(--gold-light); }
.cta-band__sub { font-size: .95rem; color: rgba(242,232,213,.68); max-width: 44ch; margin: 0 auto 2rem; line-height: 1.75; position: relative; z-index: 1; }
.cta-band__actions { display: flex; gap: 1rem; justify-content: center; flex-wrap: wrap; position: relative; z-index: 1; }

/* ── Responsive ──────────────────────────────────── */
@media (max-width: 1100px) {
  .experts-grid { grid-template-columns: 1fr 1fr; }
  .process-strip { grid-template-columns: 1fr 1fr; }
  .process-item:nth-child(2) { border-right: none; }
  .process-item:nth-child(2)::after { display: none; }
  .process-item:nth-child(1), .process-item:nth-child(2) { border-bottom: 1px solid var(--border-soft); }
  .philosophy-split { grid-template-columns: 1fr; gap: 3rem; }
  .philosophy-img__badge { left: 1rem; }
  .cert-bar { grid-template-columns: repeat(3,1fr); }
  .featured-expert { grid-template-columns: 1fr; padding: 0; }
  .featured-expert__img { margin: 0; height: 300px; }
  .featured-expert__body { padding: 2rem; }
}
@media (max-width: 700px) {
  .experts-grid { grid-template-columns: 1fr; }
  .cert-bar { grid-template-columns: 1fr 1fr; }
  .process-strip { grid-template-columns: 1fr; }
  .process-item { border-right: none; border-bottom: 1px solid var(--border-soft); }
  .process-item:last-child { border-bottom: none; }
  .process-item::after { content: '↓'; right: auto; left: 1.75rem; top: auto; bottom: -12px; transform: none; }
}
</style>

<!-- ════════════════════════════════════════════════
     HERO
═══════════════════════════════════════════════════ -->
<section class="experts-hero">
  <img class="experts-hero__bg"
    src="https://images.unsplash.com/photo-1506277886164-e25aa3f4ef7f?w=1920&q=80"
    alt="Pier One local expert guide in the field"
    loading="eager" />
  <div class="experts-hero__overlay"></div>
  <div class="experts-hero__kente"></div>
  <div class="experts-hero__content">
    <nav class="breadcrumb" style="margin-bottom:1rem;">
      <a href="<?= URLROOT ?>">Home</a>
      <span class="breadcrumb__sep">›</span>
      <a href="<?= URLROOT ?>/about">About Us</a>
      <span class="breadcrumb__sep">›</span>
      <span class="breadcrumb__current">Local Experts</span>
    </nav>
    <div class="experts-hero__badge">🧭 The People Behind Your Journey</div>
    <h1 class="experts-hero__title">
      Born Here.<br><em>Expert</em> in Every Corner.
    </h1>
    <p class="experts-hero__subtitle">
      Our guides are not tour operators — they are storytellers, cultural keepers, and passionate ambassadors of the lands they call home. Meet the people who make every Pier One journey extraordinary.
    </p>
    <div class="experts-hero__meta">
      <span class="experts-hero__meta-item">
        <svg fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
        80+ Expert Guides
      </span>
      <span class="experts-hero__meta-item">
        <svg fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M3 21v-4m0 0V5a2 2 0 012-2h6.5l1 1H21l-3 6 3 6h-8.5l-1-1H5a2 2 0 00-2 2zm9-13.5V9"/></svg>
        6 African Regions
      </span>
      <span class="experts-hero__meta-item">
        <svg fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M3 5h12M9 3v2m1.048 9.5A18.022 18.022 0 016.412 9m6.088 9h7M11 21l5-10 5 10M12.751 5C11.783 10.77 8.07 15.61 3 18.129"/></svg>
        30+ Languages Spoken
      </span>
      <span class="experts-hero__meta-item">
        <svg fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"/></svg>
        4.9 Average Rating
      </span>
    </div>
  </div>
</section>

<!-- ════════════════════════════════════════════════
     STATS
═══════════════════════════════════════════════════ -->
<section class="section--sand" style="padding:0;">
  <div class="container">
    <div class="stats-bar">
      <div class="stat-item reveal">
        <div class="stat-item__number" data-count="80" data-suffix="+">0+</div>
        <div class="stat-item__label">Expert Guides</div>
      </div>
      <div class="stat-item reveal reveal-delay-1">
        <div class="stat-item__number" data-count="30" data-suffix="+">0+</div>
        <div class="stat-item__label">Languages Spoken</div>
      </div>
      <div class="stat-item reveal reveal-delay-2">
        <div class="stat-item__number" data-count="18" data-suffix=" Yrs">0 Yrs</div>
        <div class="stat-item__label">Average Guide Experience</div>
      </div>
      <div class="stat-item reveal reveal-delay-3">
        <div class="stat-item__number" data-count="54" data-suffix="+">0+</div>
        <div class="stat-item__label">Countries Guided</div>
      </div>
    </div>
  </div>
</section>

<!-- ════════════════════════════════════════════════
     PHILOSOPHY SPLIT
═══════════════════════════════════════════════════ -->
<section class="section section--cream">
  <div class="container">
    <div class="philosophy-split">
      <div class="philosophy-img reveal">
        <img src="https://images.unsplash.com/photo-1551632436-cbf8dd35adfa?w=900&q=80" alt="Guide sharing local knowledge" loading="lazy" />
        <div class="philosophy-img__badge">
          <div class="philosophy-img__badge-num">Local</div>
          <div class="philosophy-img__badge-label">Born &amp;<br>raised here</div>
        </div>
        <div class="philosophy-img__accent">
          <img src="https://images.unsplash.com/photo-1523805009345-7448845a9e53?w=500&q=80" alt="Guide with guests" loading="lazy" />
        </div>
      </div>
      <div>
        <span class="section-eyebrow reveal">Our Philosophy</span>
        <h2 class="section-title reveal reveal-delay-1">Africa Is Best Understood<br>by Those Who <em>Live It.</em></h2>
        <p class="section-subtitle reveal reveal-delay-2" style="margin-bottom:1.5rem;">
          We believe the best Africa experiences are unlocked by people with roots in the soil. Every Pier One expert is selected for three things: deep local knowledge, a gift for storytelling, and an unshakeable warmth for the people they guide.
        </p>
        <p class="reveal reveal-delay-3" style="color:var(--text-light);line-height:1.8;margin-bottom:2rem;">
          Our guides don't recite facts — they share personal histories, introduce you to their cousins who run the family farm, take you to the unmarked viewpoint that tourists never find, and translate not just language but meaning. That is what separates a Pier One journey from everything else.
        </p>
        <div class="feature-list reveal reveal-delay-4">
          <div class="feature-item">
            <div class="feature-icon">🌍</div>
            <div class="feature-text">
              <div class="feature-text__title">Born in the Destination</div>
              <div class="feature-text__desc">Every guide is native to — or has lived for years in — the region they cover. No outsiders giving secondhand accounts.</div>
            </div>
          </div>
          <div class="feature-item" style="margin-top:1rem;">
            <div class="feature-icon">📜</div>
            <div class="feature-text">
              <div class="feature-text__title">Certified &amp; Continuously Trained</div>
              <div class="feature-text__desc">All guides hold national or internationally recognised guide certifications and attend regular Pier One training programmes.</div>
            </div>
          </div>
          <div class="feature-item" style="margin-top:1rem;">
            <div class="feature-icon">⭐</div>
            <div class="feature-text">
              <div class="feature-text__title">Rated by Real Travellers</div>
              <div class="feature-text__desc">Every guide is rated after every tour. Our minimum threshold for active guides is 4.7 stars. No exceptions.</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ════════════════════════════════════════════════
     KENTE DIVIDER
═══════════════════════════════════════════════════ -->
<div class="kente-bar"></div>

<!-- ════════════════════════════════════════════════
     FEATURED EXPERT
═══════════════════════════════════════════════════ -->
<!-- <section class="section section--sand">
  <div class="container">
    <div style="text-align:center;max-width:560px;margin:0 auto 2.5rem;">
      <span class="section-eyebrow reveal">Guide Spotlight</span>
      <h2 class="section-title reveal reveal-delay-1">Meet One of Our <em>Finest</em></h2>
    </div>
    <div class="featured-expert reveal">
      <div class="featured-expert__img">
        <img src="https://images.unsplash.com/photo-1531123897727-8f129e1688ce?w=720&q=80" alt="Akosua Mensah — West Africa Expert" loading="lazy" />
      </div>
      <div class="featured-expert__body">
        <span class="featured-expert__eyebrow">🌿 Senior Guide · West Africa</span>
        <div class="featured-expert__name">Akosua Mensah</div>
        <div class="featured-expert__title">Certified Cultural Heritage Guide · Accra, Ghana</div>
        <blockquote class="featured-expert__quote">
          "I don't just show people Ghana — I show them what it feels like to belong here. Every baobab tree, every drumbeat, every handshake with an elder has a story I've been given the honour of passing on."
        </blockquote>
        <div class="featured-expert__stats">
          <div class="featured-expert__stat">
            <div class="featured-expert__stat-num">14</div>
            <div class="featured-expert__stat-label">Years guiding</div>
          </div>
          <div class="featured-expert__stat">
            <div class="featured-expert__stat-num">1,200+</div>
            <div class="featured-expert__stat-label">Travellers guided</div>
          </div>
          <div class="featured-expert__stat">
            <div class="featured-expert__stat-num">4.98</div>
            <div class="featured-expert__stat-label">Average rating</div>
          </div>
          <div class="featured-expert__stat">
            <div class="featured-expert__stat-num">5</div>
            <div class="featured-expert__stat-label">Languages spoken</div>
          </div>
        </div>
        <a href="mailto:info@pieronetours.com" class="btn btn-primary">
          Request Akosua
          <svg class="arrow-icon" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
          </svg>
        </a>
      </div>
    </div>
  </div>
</section> -->

<!-- ════════════════════════════════════════════════
     EXPERT PROFILES GRID
═══════════════════════════════════════════════════ -->
<!-- <section class="section section--cream" id="meet-the-experts">
  <div class="container">
    <div style="display:flex;align-items:flex-end;justify-content:space-between;flex-wrap:wrap;gap:1rem;margin-bottom:2rem;">
      <div>
        <span class="section-eyebrow reveal">Our Team</span>
        <h2 class="section-title reveal reveal-delay-1">Expert Guides Across <em>Every Region</em></h2>
      </div>
    </div>

    <div class="region-tabs reveal reveal-delay-2" id="regionTabs">
      <button class="region-tab active" data-region="all">All Regions</button>
      <button class="region-tab" data-region="west">West Africa</button>
      <button class="region-tab" data-region="east">East Africa</button>
      <button class="region-tab" data-region="north">North Africa</button>
      <button class="region-tab" data-region="south">Southern Africa</button>
      <button class="region-tab" data-region="central">Central Africa</button>
      <button class="region-tab" data-region="ocean">Indian Ocean</button>
    </div>

    <div class="experts-grid" id="expertsGrid">

      <div class="expert-card reveal" data-region="west">
        <div class="expert-card__img-wrap">
          <img src="https://images.unsplash.com/photo-1506277886164-e25aa3f4ef7f?w=700&q=80" alt="Kofi Agyeman" loading="lazy" />
          <div class="expert-card__region-tag">West Africa</div>
          <div class="expert-card__specialty">🎓 Academic</div>
        </div>
        <div class="expert-card__body">
          <div class="expert-card__name">Kofi Agyeman</div>
          <div class="expert-card__title">Heritage &amp; History Expert · Ghana</div>
          <div class="expert-card__bio">A historian by training, Kofi brings Cape Coast, Elmina, and the Ashanti Kingdom to vivid life. His academic tours are legendary among university groups.</div>
          <div class="expert-card__tags">
            <span class="expert-card__tag">Slave Routes</span>
            <span class="expert-card__tag">Ashanti Culture</span>
            <span class="expert-card__tag">Accra City</span>
          </div>
          <div class="expert-card__langs">
            <svg fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M3 5h12M9 3v2m1.048 9.5A18.022 18.022 0 016.412 9m6.088 9h7M11 21l5-10 5 10M12.751 5C11.783 10.77 8.07 15.61 3 18.129"/></svg>
            English · Twi · French
          </div>
        </div>
      </div>

      <div class="expert-card reveal reveal-delay-1" data-region="west">
        <div class="expert-card__img-wrap">
          <img src="https://images.unsplash.com/photo-1556157382-97eda2f9e2bf?w=700&q=80" alt="Fatou Diallo" loading="lazy" />
          <div class="expert-card__region-tag">West Africa</div>
          <div class="expert-card__specialty">🕊️ Cultural</div>
        </div>
        <div class="expert-card__body">
          <div class="expert-card__name">Fatou Diallo</div>
          <div class="expert-card__title">Cultural Ambassador · Senegal &amp; The Gambia</div>
          <div class="expert-card__bio">Born in Dakar, Fatou weaves music, cuisine, and community visits into unforgettable West African cultural immersions. Her Wolof storytelling is spellbinding.</div>
          <div class="expert-card__tags">
            <span class="expert-card__tag">Gorée Island</span>
            <span class="expert-card__tag">Music &amp; Arts</span>
            <span class="expert-card__tag">Community</span>
          </div>
          <div class="expert-card__langs">
            <svg fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M3 5h12M9 3v2m1.048 9.5A18.022 18.022 0 016.412 9m6.088 9h7M11 21l5-10 5 10M12.751 5C11.783 10.77 8.07 15.61 3 18.129"/></svg>
            French · Wolof · English
          </div>
        </div>
      </div>

      <div class="expert-card reveal reveal-delay-2" data-region="east">
        <div class="expert-card__img-wrap">
          <img src="https://images.unsplash.com/photo-1492562080023-ab3db95bfbce?w=700&q=80" alt="David Mwangi" loading="lazy" />
          <div class="expert-card__region-tag">East Africa</div>
          <div class="expert-card__specialty">🦁 Safari</div>
        </div>
        <div class="expert-card__body">
          <div class="expert-card__name">David Mwangi</div>
          <div class="expert-card__title">Gold-Level Safari Guide · Kenya &amp; Tanzania</div>
          <div class="expert-card__bio">David holds the coveted Kenya Professional Safari Guides Gold Level certification. His ability to track the Big Five through Masai Mara is near-mythical among guests.</div>
          <div class="expert-card__tags">
            <span class="expert-card__tag">Big Five</span>
            <span class="expert-card__tag">Great Migration</span>
            <span class="expert-card__tag">Bird Watching</span>
          </div>
          <div class="expert-card__langs">
            <svg fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M3 5h12M9 3v2m1.048 9.5A18.022 18.022 0 016.412 9m6.088 9h7M11 21l5-10 5 10M12.751 5C11.783 10.77 8.07 15.61 3 18.129"/></svg>
            Swahili · English · Kikuyu
          </div>
        </div>
      </div>

      <div class="expert-card reveal reveal-delay-3" data-region="north">
        <div class="expert-card__img-wrap">
          <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=700&q=80" alt="Youssef El Fassi" loading="lazy" />
          <div class="expert-card__region-tag">North Africa</div>
          <div class="expert-card__specialty">🏛️ Heritage</div>
        </div>
        <div class="expert-card__body">
          <div class="expert-card__name">Youssef El Fassi</div>
          <div class="expert-card__title">Imperial Cities Expert · Morocco &amp; Egypt</div>
          <div class="expert-card__bio">A Fez medina native, Youssef navigates the labyrinthine old cities of Morocco and Egypt with effortless grace. He has guided archaeologists, royalty, and curious wanderers alike.</div>
          <div class="expert-card__tags">
            <span class="expert-card__tag">Medinas</span>
            <span class="expert-card__tag">Sahara</span>
            <span class="expert-card__tag">Archaeology</span>
          </div>
          <div class="expert-card__langs">
            <svg fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M3 5h12M9 3v2m1.048 9.5A18.022 18.022 0 016.412 9m6.088 9h7M11 21l5-10 5 10M12.751 5C11.783 10.77 8.07 15.61 3 18.129"/></svg>
            Arabic · French · English · Tamazight
          </div>
        </div>
      </div>

      <div class="expert-card reveal reveal-delay-4" data-region="south">
        <div class="expert-card__img-wrap">
          <img src="https://images.unsplash.com/photo-1568602471122-7832951cc4c5?w=700&q=80" alt="Sipho Dlamini" loading="lazy" />
          <div class="expert-card__region-tag">Southern Africa</div>
          <div class="expert-card__specialty">🏔️ Adventure</div>
        </div>
        <div class="expert-card__body">
          <div class="expert-card__name">Sipho Dlamini</div>
          <div class="expert-card__title">Adventure &amp; Wildlife Guide · South Africa &amp; Botswana</div>
          <div class="expert-card__bio">Cape Town–born Sipho has led expeditions from Table Mountain to the Okavango Delta. A qualified FGASA Field Guide, he is equally at home on foot, in a boat, or tracking elephants.</div>
          <div class="expert-card__tags">
            <span class="expert-card__tag">Cape Town</span>
            <span class="expert-card__tag">Okavango</span>
            <span class="expert-card__tag">Hiking</span>
          </div>
          <div class="expert-card__langs">
            <svg fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M3 5h12M9 3v2m1.048 9.5A18.022 18.022 0 016.412 9m6.088 9h7M11 21l5-10 5 10M12.751 5C11.783 10.77 8.07 15.61 3 18.129"/></svg>
            Zulu · English · Afrikaans
          </div>
        </div>
      </div>

      <div class="expert-card reveal reveal-delay-5" data-region="east">
        <div class="expert-card__img-wrap">
          <img src="https://images.unsplash.com/photo-1580489944761-15a19d654956?w=700&q=80" alt="Amara Nakabira" loading="lazy" />
          <div class="expert-card__region-tag">East Africa</div>
          <div class="expert-card__specialty">🦍 Primates</div>
        </div>
        <div class="expert-card__body">
          <div class="expert-card__name">Amara Nakabira</div>
          <div class="expert-card__title">Gorilla Trekking Specialist · Uganda &amp; Rwanda</div>
          <div class="expert-card__bio">Amara has spent 11 years tracking mountain gorillas in Bwindi and Volcanoes National Park. Her knowledge of primate behaviour makes gorilla trekking with her a truly transformative encounter.</div>
          <div class="expert-card__tags">
            <span class="expert-card__tag">Gorilla Trekking</span>
            <span class="expert-card__tag">Chimpanzees</span>
            <span class="expert-card__tag">Rainforest</span>
          </div>
          <div class="expert-card__langs">
            <svg fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M3 5h12M9 3v2m1.048 9.5A18.022 18.022 0 016.412 9m6.088 9h7M11 21l5-10 5 10M12.751 5C11.783 10.77 8.07 15.61 3 18.129"/></svg>
            Luganda · English · Kinyarwanda
          </div>
        </div>
      </div>

    </div>
  </div>
</section> -->

<!-- ════════════════════════════════════════════════
     HOW WE SELECT OUR GUIDES
═══════════════════════════════════════════════════ -->
<section class="section section--dark">
  <div class="container">
    <div style="text-align:center;max-width:540px;margin:0 auto 2.5rem;">
      <span class="section-eyebrow reveal" style="color:var(--gold);">Our Standard</span>
      <h2 class="section-title section-title--light reveal reveal-delay-1">How We <em>Select</em> Our Experts</h2>
      <p class="section-subtitle reveal reveal-delay-2" style="margin:0 auto;color:rgba(242,232,213,.65);">Every guide passes through a rigorous multi-stage assessment before leading any Pier One journey.</p>
    </div>
    <div class="process-strip reveal reveal-delay-2">
      <div class="process-item">
        <div class="process-item__step">01</div>
        <div class="process-item__title">Application &amp; Credentials</div>
        <div class="process-item__desc">We review national certification, local knowledge depth, and community standing. Minimum 5 years of active guiding required.</div>
      </div>
      <div class="process-item">
        <div class="process-item__step">02</div>
        <div class="process-item__title">Field Assessment</div>
        <div class="process-item__desc">Senior Pier One staff conduct an in-destination field evaluation across navigation, wildlife knowledge, cultural accuracy, and safety protocols.</div>
      </div>
      <div class="process-item">
        <div class="process-item__step">03</div>
        <div class="process-item__title">Language &amp; Hospitality Training</div>
        <div class="process-item__desc">All guides complete our hospitality excellence programme covering communication styles, cultural sensitivity, and emergency response.</div>
      </div>
      <div class="process-item">
        <div class="process-item__step">04</div>
        <div class="process-item__title">Ongoing Review</div>
        <div class="process-item__desc">Guest ratings after every tour feed into our continuous quality programme. Active guides must maintain a 4.7+ rating to remain on the roster.</div>
      </div>
    </div>
  </div>
</section>

<!-- ════════════════════════════════════════════════
     CERTIFICATIONS
═══════════════════════════════════════════════════ -->
<section class="section section--sand">
  <div class="container">
    <div style="text-align:center;max-width:500px;margin:0 auto 2.5rem;">
      <span class="section-eyebrow reveal">Credentials &amp; Accreditations</span>
      <h2 class="section-title reveal reveal-delay-1">Recognised <em>Standards</em></h2>
    </div>
    <div class="cert-bar reveal reveal-delay-2">
      <div class="cert-item">
        <div class="cert-item__icon">🏅</div>
        <div class="cert-item__label">Kenya Professional Safari Guides</div>
        <div class="cert-item__sub">Gold &amp; Silver Level Certified</div>
      </div>
      <div class="cert-item">
        <div class="cert-item__icon">🎖️</div>
        <div class="cert-item__label">FGASA</div>
        <div class="cert-item__sub">Field Guides Association of Southern Africa</div>
      </div>
      <div class="cert-item">
        <div class="cert-item__icon">📋</div>
        <div class="cert-item__label">Ghana Tourism Authority</div>
        <div class="cert-item__sub">Licensed Tour Operators &amp; Guides</div>
      </div>
      <div class="cert-item">
        <div class="cert-item__icon">🌍</div>
        <div class="cert-item__label">UNWTO</div>
        <div class="cert-item__sub">Sustainable Tourism Practices</div>
      </div>
      <div class="cert-item">
        <div class="cert-item__icon">🛡️</div>
        <div class="cert-item__label">Wilderness First Aid</div>
        <div class="cert-item__sub">All remote &amp; safari guides certified</div>
      </div>
    </div>
  </div>
</section>

<!-- ════════════════════════════════════════════════
     CTA BAND
═══════════════════════════════════════════════════ -->
<section class="section section--cream">
  <div class="container">
    <div class="cta-band reveal">
      <h2 class="cta-band__title">Ready to Journey with an <em>Expert?</em></h2>
      <p class="cta-band__sub">Tell us your destination and interests — we'll match you with the perfect Pier One guide for an experience that goes far beyond the ordinary.</p>
      <div class="cta-band__actions">
        <a href="<?= URLROOT ?>/tours/leisure" class="btn btn-primary btn-lg">
          Browse Tours
          <svg class="arrow-icon" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
          </svg>
        </a>
        <a href="mailto:info@pieronetours.com" class="btn btn-secondary btn-lg">Request a Specific Guide</a>
      </div>
    </div>
  </div>
</section>

<script>
// ── Region Filter ─────────────────────────────────
const tabs = document.querySelectorAll('.region-tab');
const cards = document.querySelectorAll('.expert-card[data-region]');

tabs.forEach(tab => {
  tab.addEventListener('click', () => {
    tabs.forEach(t => t.classList.remove('active'));
    tab.classList.add('active');
    const region = tab.dataset.region;
    cards.forEach(card => {
      if (region === 'all' || card.dataset.region === region) {
        card.style.display = '';
      } else {
        card.style.display = 'none';
      }
    });
  });
});
</script>

<?php include 'includes/footer.php'; ?>