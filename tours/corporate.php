<?php include '../includes/header.php'; ?>

<style>
/* ═══════════════════════════════════════════════════════
   CORPORATE (MICE) TOURS — tours/corporate.php
   Pier One Travel & Tour Services
════════════════════════════════════════════════════════ */

/* ── Hero ─────────────────────────────────────────── */
.tour-hero {
  position: relative;
  height: 90vh;
  min-height: 600px;
  display: flex;
  align-items: flex-end;
  overflow: hidden;
}
.tour-hero__bg {
  position: absolute; inset: 0;
  width: 100%; height: 100%;
  object-fit: cover;
  transition: transform 12s ease;
}
.tour-hero:hover .tour-hero__bg { transform: scale(1.03); }
.tour-hero__overlay {
  position: absolute; inset: 0;
  background:
    linear-gradient(to right, rgba(28,16,8,.92) 0%, rgba(28,16,8,.55) 55%, rgba(28,16,8,.18) 100%),
    linear-gradient(to top, rgba(28,16,8,.88) 0%, transparent 55%);
}
.tour-hero__kente {
  position: absolute; bottom: 0; left: 0; right: 0;
  height: 5px;
  background: repeating-linear-gradient(90deg,#C8913A 0,#C8913A 40px,#3D2B1F 40px,#3D2B1F 80px,#C4784A 80px,#C4784A 120px,#2D4A3E 120px,#2D4A3E 160px,#8B6020 160px,#8B6020 200px);
  z-index: 3;
}
.tour-hero__content {
  position: relative; z-index: 2;
  max-width: 1400px; width: 100%; margin: 0 auto;
  padding: 4rem clamp(1rem,4vw,3rem);
}
.tour-hero__badge {
  display: inline-flex; align-items: center; gap: .5rem;
  background: rgba(200,145,58,.15); backdrop-filter: blur(8px);
  border: 1px solid rgba(200,145,58,.4); border-radius: 40px;
  padding: .35rem 1.1rem; color: var(--gold-light);
  font-size: .72rem; font-weight: 600; letter-spacing: .16em; text-transform: uppercase;
  margin-bottom: 1.25rem;
}
.tour-hero__title {
  font-family: 'Cormorant Garamond', serif;
  font-size: clamp(1.6rem, 6.5vw, 3.8rem);
  font-weight: 600; color: var(--white);
  line-height: 1.06; letter-spacing: -.015em;
  margin-bottom: 1.3rem; max-width: 21ch;
}
.tour-hero__title em { font-style: italic; color: var(--gold-light); }
.tour-hero__subtitle {
  font-size: clamp(.9rem,1.6vw,1.08rem);
  color: rgba(255,255,255,.72); line-height: 1.78;
  max-width: 48ch; margin-bottom: 2.25rem;
}
.tour-hero__meta {
  display: flex; align-items: center; gap: 2rem; flex-wrap: wrap;
  color: rgba(255,255,255,.62); font-size: .8rem; margin-bottom: 2.25rem;
}
.tour-hero__meta-item { display: flex; align-items: center; gap: .4rem; }
.tour-hero__meta-item svg { width: 14px; height: 14px; color: var(--gold); }

/* ── Highlight Strip ──────────────────────────────── */
.highlight-strip {
  display: grid;
  grid-template-columns: repeat(5,1fr);
  gap: 0;
  border: 1px solid var(--border);
  border-radius: var(--radius-lg);
  overflow: hidden;
}
.highlight-strip__item {
  padding: 1.9rem 1.25rem;
  text-align: center;
  border-right: 1px solid var(--border);
}
.highlight-strip__item:last-child { border-right: none; }
.highlight-strip__icon { font-size: 2rem; margin-bottom: .65rem; }
.highlight-strip__label {
  font-family: 'Cormorant Garamond', serif;
  font-size: 1rem; font-weight: 600;
  color: var(--earth); margin-bottom: .25rem;
}
.highlight-strip__desc {
  font-size: .74rem; color: var(--text-soft);
  line-height: 1.55;
}

/* ── Intro Panel ──────────────────────────────────── */
.intro-panel {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 4.5rem;
  align-items: center;
}
.intro-panel__img-wrap {
  position: relative;
  border-radius: var(--radius-xl);
  overflow: hidden;
}
.intro-panel__img-wrap img {
  width: 100%; aspect-ratio: 4/5;
  object-fit: cover; display: block;
}
.intro-panel__badge {
  position: absolute; bottom: 2rem; right: -1.5rem;
  background: var(--white); border-radius: var(--radius-lg);
  padding: 1.4rem 1.75rem; box-shadow: var(--shadow-lg);
  min-width: 200px;
}
.intro-panel__badge-num {
  font-family: 'Cormorant Garamond', serif;
  font-size: 2.8rem; font-weight: 700;
  color: var(--gold); line-height: 1;
}
.intro-panel__badge-label {
  font-size: .78rem; color: var(--text-soft);
  margin-top: .3rem; line-height: 1.4;
}
.intro-pillar-list {
  display: flex; flex-direction: column;
  gap: 1.5rem; margin-top: 2.5rem;
}
.intro-pillar {
  display: flex; gap: 1.25rem; align-items: flex-start;
}
.intro-pillar__icon {
  width: 50px; height: 50px;
  background: linear-gradient(135deg, var(--gold-pale), var(--sand));
  border-radius: var(--radius);
  display: flex; align-items: center; justify-content: center;
  font-size: 1.35rem; flex-shrink: 0;
  border: 1px solid var(--border);
}
.intro-pillar__title {
  font-family: 'Cormorant Garamond', serif;
  font-size: 1.05rem; font-weight: 600;
  color: var(--earth); margin-bottom: .3rem;
}
.intro-pillar__desc {
  font-size: .82rem; color: var(--text-soft);
  line-height: 1.7;
}

/* ── Service Tabs ─────────────────────────────────── */
.service-tabs {
  display: flex; gap: .5rem; flex-wrap: wrap;
  margin-bottom: 2.5rem; justify-content: center;
}
.service-tab {
  display: inline-flex; align-items: center; gap: .45rem;
  padding: .6rem 1.35rem; border-radius: 40px;
  font-size: .82rem; font-weight: 500;
  border: 1.5px solid var(--border); color: var(--text-mid);
  background: var(--white); cursor: pointer;
  transition: all var(--trans-fast);
}
.service-tab:hover, .service-tab.active {
  background: var(--gold); border-color: var(--gold);
  color: var(--white); box-shadow: 0 4px 16px rgba(200,145,58,.35);
}

/* ── MICE Packages Grid ───────────────────────────── */
.mice-grid {
  display: grid;
  grid-template-columns: repeat(3,1fr);
  gap: 1.5rem;
}
.mice-card {
  background: var(--white);
  border-radius: var(--radius-lg);
  border: 1px solid var(--border-soft);
  overflow: hidden;
  display: flex; flex-direction: column;
  transition: transform var(--trans), box-shadow var(--trans), border-color var(--trans-fast);
}
.mice-card:hover {
  transform: translateY(-6px);
  box-shadow: var(--shadow-lg);
  border-color: var(--gold);
}
.mice-card__img {
  aspect-ratio: 16/9; overflow: hidden; position: relative;
}
.mice-card__img img {
  width: 100%; height: 100%; object-fit: cover;
  transition: transform var(--trans-slow);
}
.mice-card:hover .mice-card__img img { transform: scale(1.06); }
.mice-card__category {
  position: absolute; top: 1rem; left: 1rem;
  background: var(--earth); color: var(--gold-light);
  font-size: .65rem; font-weight: 700;
  letter-spacing: .1em; text-transform: uppercase;
  padding: .28rem .8rem; border-radius: 40px;
}
.mice-card__body {
  padding: 1.5rem; display: flex;
  flex-direction: column; flex: 1;
}
.mice-card__region {
  font-size: .7rem; font-weight: 600;
  color: var(--gold); letter-spacing: .12em;
  text-transform: uppercase; margin-bottom: .4rem;
}
.mice-card__title {
  font-family: 'Cormorant Garamond', serif;
  font-size: 1.28rem; font-weight: 600;
  color: var(--earth); line-height: 1.25;
  margin-bottom: .55rem;
}
.mice-card__desc {
  font-size: .82rem; color: var(--text-soft);
  line-height: 1.68; margin-bottom: 1.1rem; flex: 1;
}
.mice-card__features {
  display: flex; flex-wrap: wrap; gap: .4rem;
  margin-bottom: 1.2rem;
}
.mice-card__feature {
  font-size: .68rem; font-weight: 500;
  background: var(--gold-pale); color: var(--gold-dark);
  border: 1px solid var(--border);
  border-radius: 40px; padding: .2rem .7rem;
}
.mice-card__footer {
  display: flex; align-items: center; justify-content: space-between;
  border-top: 1px solid var(--border-soft); padding-top: 1.1rem;
}
.mice-card__meta {
  display: flex; flex-direction: column; gap: .2rem;
}
.mice-card__meta-label {
  font-size: .65rem; color: var(--text-muted);
  text-transform: uppercase; letter-spacing: .06em;
}
.mice-card__meta-val {
  font-family: 'Cormorant Garamond', serif;
  font-size: 1.28rem; font-weight: 700; color: var(--earth);
}

/* ── Venues Showcase ──────────────────────────────── */
.venues-grid {
  display: grid;
  grid-template-columns: repeat(4,1fr);
  gap: 1rem;
}
.venue-card {
  border-radius: var(--radius-lg);
  overflow: hidden;
  position: relative;
  aspect-ratio: 3/4;
  display: block;
  transition: transform var(--trans);
}
.venue-card:hover { transform: translateY(-5px); }
.venue-card img {
  width: 100%; height: 100%;
  object-fit: cover;
  transition: transform var(--trans-slow);
}
.venue-card:hover img { transform: scale(1.06); }
.venue-card__overlay {
  position: absolute; inset: 0;
  background: linear-gradient(to top, rgba(28,16,8,.88) 0%, rgba(28,16,8,.2) 55%, transparent 100%);
}
.venue-card__body {
  position: absolute; bottom: 0; left: 0; right: 0;
  padding: 1.4rem;
}
.venue-card__type {
  font-size: .65rem; font-weight: 600;
  color: var(--gold-light); letter-spacing: .12em;
  text-transform: uppercase; margin-bottom: .3rem;
}
.venue-card__name {
  font-family: 'Cormorant Garamond', serif;
  font-size: 1.2rem; font-weight: 600;
  color: var(--white); line-height: 1.2;
  margin-bottom: .2rem;
}
.venue-card__capacity {
  font-size: .73rem; color: rgba(255,255,255,.6);
}

/* ── Stats Grid ───────────────────────────────────── */
.stats-grid {
  display: grid;
  grid-template-columns: repeat(4,1fr);
  gap: 0;
  border: 1px solid rgba(200,145,58,.2);
  border-radius: var(--radius-lg);
  overflow: hidden;
}
.stat-item {
  padding: 2.5rem 2rem; text-align: center;
  border-right: 1px solid rgba(200,145,58,.2);
}
.stat-item:last-child { border-right: none; }
.stat-item__num {
  font-family: 'Cormorant Garamond', serif;
  font-size: 3rem; font-weight: 700;
  color: var(--gold-light); letter-spacing: -.02em;
  line-height: 1; margin-bottom: .4rem;
}
.stat-item__label {
  font-size: .78rem; font-weight: 500;
  color: rgba(242,232,213,.65);
}

/* ── Client Logos ─────────────────────────────────── */
.clients-grid {
  display: flex; align-items: center; justify-content: center;
  gap: 2.5rem; flex-wrap: wrap;
}
.client-logo {
  padding: 1rem 1.75rem;
  background: var(--white);
  border: 1px solid var(--border-soft);
  border-radius: 60px;
  font-size: .85rem; font-weight: 500;
  color: var(--text-mid);
  transition: border-color var(--trans-fast), box-shadow var(--trans-fast);
}
.client-logo:hover {
  border-color: var(--gold);
  box-shadow: var(--shadow-sm);
}

/* ── Process Steps ────────────────────────────────── */
.process-steps {
  display: grid;
  grid-template-columns: repeat(5,1fr);
  gap: 0; position: relative;
}
.process-steps::before {
  content: ''; position: absolute;
  top: 28px; left: 10%; right: 10%;
  height: 1px;
  background: linear-gradient(90deg, transparent, var(--gold), var(--gold), transparent);
  z-index: 0;
}
.process-step {
  display: flex; flex-direction: column; align-items: center;
  text-align: center; padding: 0 1rem;
  position: relative; z-index: 1;
}
.process-step__num {
  width: 56px; height: 56px; border-radius: 50%;
  background: var(--white); border: 2px solid var(--gold);
  display: flex; align-items: center; justify-content: center;
  font-family: 'Cormorant Garamond', serif;
  font-size: 1.3rem; font-weight: 700;
  color: var(--gold); margin-bottom: 1.25rem;
  transition: background var(--trans-fast), color var(--trans-fast);
}
.process-step:hover .process-step__num {
  background: var(--gold); color: var(--white);
}
.process-step__icon { font-size: 1.3rem; margin-bottom: .6rem; }
.process-step__title {
  font-family: 'Cormorant Garamond', serif;
  font-size: 1rem; font-weight: 600;
  color: var(--earth); margin-bottom: .35rem;
}
.process-step__desc {
  font-size: .75rem; color: var(--text-soft);
  line-height: 1.65;
}

/* ── Testimonials ─────────────────────────────────── */
.testimonial-grid {
  display: grid;
  grid-template-columns: repeat(3,1fr);
  gap: 1.5rem;
}
.testimonial-card {
  background: var(--white);
  border-radius: var(--radius-lg);
  border: 1px solid var(--border-soft);
  padding: 2rem;
  transition: box-shadow var(--trans);
}
.testimonial-card:hover { box-shadow: var(--shadow-md); }
.testimonial-card__stars {
  color: var(--gold); font-size: .85rem;
  margin-bottom: .75rem;
}
.testimonial-card__quote {
  font-size: .86rem; color: var(--text-mid);
  line-height: 1.8; margin-bottom: 1.5rem;
}
.testimonial-card__author {
  display: flex; align-items: center; gap: .75rem;
}
.testimonial-card__avatar {
  width: 44px; height: 44px; border-radius: 50%;
  background: var(--gold-pale);
  border: 2px solid var(--border);
  display: flex; align-items: center; justify-content: center;
  font-size: 1.2rem;
}
.testimonial-card__name {
  font-weight: 600; font-size: .84rem;
  color: var(--earth);
}
.testimonial-card__role {
  font-size: .74rem; color: var(--text-muted);
}

/* ── Enquiry + FAQ ────────────────────────────────── */
.enquiry-layout {
  display: grid;
  grid-template-columns: 1fr 380px;
  gap: 3rem; align-items: start;
}
.enquiry-box {
  background: linear-gradient(145deg, var(--earth), #5C3D2E);
  border-radius: var(--radius-xl); padding: 2.5rem;
  position: sticky;
  top: calc(var(--topbar-h) + var(--nav-h) + 1.5rem);
}
.enquiry-box__title {
  font-family: 'Cormorant Garamond', serif;
  font-size: 1.5rem; font-weight: 600;
  color: var(--cream); margin-bottom: .5rem;
}
.enquiry-box__sub {
  font-size: .82rem; color: rgba(242,232,213,.65);
  line-height: 1.65; margin-bottom: 2rem;
}
.enquiry-box__field {
  display: flex; flex-direction: column;
  gap: .3rem; margin-bottom: 1rem;
}
.enquiry-box__label {
  font-size: .68rem; font-weight: 600;
  color: var(--gold); letter-spacing: .1em;
  text-transform: uppercase;
}
.enquiry-box__input,
.enquiry-box__select,
.enquiry-box__textarea {
  font-family: 'DM Sans', sans-serif;
  font-size: .85rem; padding: .8rem 1rem;
  border-radius: var(--radius);
  border: 1.5px solid rgba(200,145,58,.25);
  background: rgba(255,255,255,.07);
  color: var(--cream); outline: none;
  transition: border-color var(--trans-fast);
  width: 100%;
}
.enquiry-box__select option {
  color: #1C1008 !important;
  background: #fff;
}
.enquiry-box__input::placeholder,
.enquiry-box__textarea::placeholder {
  color: rgba(242,232,213,.35);
}
.enquiry-box__input:focus,
.enquiry-box__select:focus,
.enquiry-box__textarea:focus {
  border-color: var(--gold);
}
.enquiry-box__select { -webkit-appearance: none; }
.enquiry-box__textarea { resize: vertical; min-height: 80px; }
.enquiry-box__note {
  font-size: .73rem; color: rgba(242,232,213,.5);
  text-align: center; margin-top: 1rem; line-height: 1.6;
}
.enquiry-box__note a { color: var(--gold-light); }

/* ── FAQ ─────────────────────────────────────────── */
.faq-list {
  display: flex; flex-direction: column; gap: 0;
}
.faq-item {
  border-bottom: 1px solid var(--border-soft);
}
.faq-item:first-child {
  border-top: 1px solid var(--border-soft);
}
.faq-btn {
  width: 100%; padding: 1.25rem 0;
  display: flex; align-items: center; justify-content: space-between;
  gap: 1rem; background: none; border: none;
  font-family: 'DM Sans', sans-serif; font-size: .9rem;
  font-weight: 500; color: var(--earth);
  text-align: left; cursor: pointer;
  transition: color var(--trans-fast);
}
.faq-btn:hover { color: var(--gold); }
.faq-btn.open { color: var(--gold); }
.faq-icon {
  width: 22px; height: 22px;
  border: 1.5px solid var(--border); border-radius: 50%;
  display: flex; align-items: center; justify-content: center;
  flex-shrink: 0; font-size: .75rem;
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
  max-height: 0; overflow: hidden;
  transition: max-height .45s cubic-bezier(.4,0,.2,1);
}
.faq-body.open { max-height: 400px; }
.faq-content {
  padding: 0 0 1.25rem;
  font-size: .85rem; color: var(--text-soft);
  line-height: 1.8;
}

/* ── CTA Band ────────────────────────────────────── */
.cta-band {
  background: linear-gradient(135deg, var(--earth), #5C3D2E);
  border-radius: var(--radius-xl);
  padding: clamp(2.5rem,5vw,4rem);
  text-align: center; position: relative;
  overflow: hidden;
}
.cta-band::before {
  content: ''; position: absolute;
  top: -80px; right: -80px;
  width: 300px; height: 300px;
  background: var(--gold); border-radius: 50%;
  opacity: .05;
}
.cta-band__title {
  font-family: 'Cormorant Garamond', serif;
  font-size: clamp(1.8rem,4vw,3rem);
  font-weight: 600; color: var(--cream);
  margin-bottom: .75rem; position: relative; z-index: 1;
}
.cta-band__title em {
  font-style: italic; color: var(--gold-light);
}
.cta-band__sub {
  font-size: .95rem; color: rgba(242,232,213,.68);
  max-width: 44ch; margin: 0 auto 2rem;
  line-height: 1.75; position: relative; z-index: 1;
}
.cta-band__actions {
  display: flex; gap: 1rem; justify-content: center;
  flex-wrap: wrap; position: relative; z-index: 1;
}

/* ── Responsive ──────────────────────────────────── */
@media (max-width: 1100px) {
  .mice-grid { grid-template-columns: 1fr 1fr; }
  .venues-grid { grid-template-columns: repeat(2,1fr); }
  .stats-grid { grid-template-columns: repeat(2,1fr); }
  .enquiry-layout { grid-template-columns: 1fr; }
  .enquiry-box { position: static; }
  .process-steps { grid-template-columns: repeat(3,1fr); gap: 2rem; }
  .process-steps::before { display: none; }
  .testimonial-grid { grid-template-columns: 1fr 1fr; }
  .highlight-strip { grid-template-columns: repeat(3,1fr); }
}
@media (max-width: 900px) {
  .intro-panel { grid-template-columns: 1fr; gap: 2rem; }
  .intro-panel__badge { right: 1rem; }
  .testimonial-grid { grid-template-columns: 1fr; }
}
@media (max-width: 640px) {
  .mice-grid { grid-template-columns: 1fr; }
  .venues-grid { grid-template-columns: 1fr 1fr; }
  .process-steps { grid-template-columns: 1fr 1fr; }
  .highlight-strip { grid-template-columns: repeat(2,1fr); }
}
</style>

<!-- ════════════════════════════════════════════════
     HERO
═══════════════════════════════════════════════════ -->
<section class="tour-hero">
  <img class="tour-hero__bg"
    src="https://images.unsplash.com/photo-1511578314322-379afb476865?w=1920&q=80"
    alt="Corporate conference in luxury African venue"
    loading="eager" />
  <div class="tour-hero__overlay"></div>
  <div class="tour-hero__kente"></div>
  <div class="tour-hero__content">
    <nav class="breadcrumb" style="margin-bottom:1rem;">
      <a href="<?= URLROOT ?>">Home</a>
      <span class="breadcrumb__sep">›</span>
      <a href="#">Tours</a>
      <span class="breadcrumb__sep">›</span>
      <span class="breadcrumb__current">Corporate (MICE)</span>
    </nav>
    <div class="tour-hero__badge">💼 Corporate &amp; MICE</div>
    <h1 class="tour-hero__title">Where Business Meets the <em>Extraordinary</em></h1>
    <p class="tour-hero__subtitle">Pier One delivers world-class corporate travel, incentive programmes, conferences, and executive retreats across Africa — combining seamless logistics with unforgettable experiences that inspire, reward, and connect your people.</p>
    <div class="tour-hero__meta">
      <span class="tour-hero__meta-item">
        <svg fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/></svg>
        25+ African Destinations
      </span>
      <span class="tour-hero__meta-item">
        <svg fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
        10 – 1,000+ Delegates
      </span>
      <span class="tour-hero__meta-item">
        <svg fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path stroke-linecap="round" d="M12 6v6l4 2"/></svg>
        Full-Service Event Management
      </span>
      <span class="tour-hero__meta-item">
        <svg fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
        Trusted by 150+ Corporations
      </span>
    </div>
    <div style="display:flex;gap:1rem;flex-wrap:wrap;">
      <a href="#packages" class="btn btn-primary btn-lg">
        Explore MICE Packages
        <svg class="arrow-icon" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
          <path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
        </svg>
      </a>
      <a href="#enquiry" class="btn btn-secondary btn-lg">Request Proposal</a>
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
        <div class="highlight-strip__icon">🏢</div>
        <div class="highlight-strip__label">Conferences</div>
        <div class="highlight-strip__desc">Full-service event planning, AV, translation &amp; delegate management</div>
      </div>
      <div class="highlight-strip__item reveal reveal-delay-1">
        <div class="highlight-strip__icon">🎯</div>
        <div class="highlight-strip__label">Incentive Travel</div>
        <div class="highlight-strip__desc">Reward top performers with unforgettable African experiences</div>
      </div>
      <div class="highlight-strip__item reveal reveal-delay-2">
        <div class="highlight-strip__icon">🤝</div>
        <div class="highlight-strip__label">Executive Retreats</div>
        <div class="highlight-strip__desc">Strategic off-sites in exclusive, inspiring locations</div>
      </div>
      <div class="highlight-strip__item reveal reveal-delay-3">
        <div class="highlight-strip__icon">🌍</div>
        <div class="highlight-strip__label">Exhibitions</div>
        <div class="highlight-strip__desc">Trade show logistics, stand design &amp; delegate hosting</div>
      </div>
      <div class="highlight-strip__item reveal reveal-delay-4">
        <div class="highlight-strip__icon">✈️</div>
        <div class="highlight-strip__label">Corporate Travel</div>
        <div class="highlight-strip__desc">End-to-end business travel management across Africa</div>
      </div>
    </div>
  </div>
</section>

<!-- ════════════════════════════════════════════════
     INTRO — WHY PIER ONE FOR MICE
═══════════════════════════════════════════════════ -->
<section class="section section--cream">
  <div class="container">
    <div class="intro-panel">
      <div class="intro-panel__img-wrap reveal">
        <img src="https://images.unsplash.com/photo-1540575467063-178a50c2df87?w=900&q=80" alt="Corporate event in Africa" loading="lazy" />
        <div class="intro-panel__badge">
          <div class="intro-panel__badge-num">150+</div>
          <div class="intro-panel__badge-label">Corporate clients<br>trust Pier One</div>
        </div>
      </div>
      <div>
        <span class="section-eyebrow reveal">Why Pier One</span>
        <h2 class="section-title reveal reveal-delay-1">Africa's Premier<br><em>MICE Partner</em></h2>
        <p class="section-subtitle reveal reveal-delay-2" style="margin-bottom:0;">When your organisation brings people to Africa — whether for a board retreat of 12 or a continental sales conference of 1,200 — you need a partner who understands both corporate precision and African hospitality. Pier One delivers both, without compromise.</p>
        <div class="intro-pillar-list">
          <div class="intro-pillar reveal reveal-delay-2">
            <div class="intro-pillar__icon">📋</div>
            <div>
              <div class="intro-pillar__title">Single Point of Accountability</div>
              <div class="intro-pillar__desc">One dedicated Pier One project manager handles everything — venue sourcing, AV, transfers, gala dinners, activities, and on-site troubleshooting.</div>
            </div>
          </div>
          <div class="intro-pillar reveal reveal-delay-3">
            <div class="intro-pillar__icon">🏨</div>
            <div>
              <div class="intro-pillar__title">Venue Relationships Across Africa</div>
              <div class="intro-pillar__desc">We have preferential rates and priority access at Africa's leading conference hotels, safari lodges, and exclusive-use retreat properties.</div>
            </div>
          </div>
          <div class="intro-pillar reveal reveal-delay-4">
            <div class="intro-pillar__icon">🛡️</div>
            <div>
              <div class="intro-pillar__title">Corporate-Grade Risk Management</div>
              <div class="intro-pillar__desc">Full duty-of-care protocols, comprehensive insurance, 24/7 emergency response, and security briefings that meet global corporate standards.</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ════════════════════════════════════════════════
     MICE PACKAGES
═══════════════════════════════════════════════════ -->
<section class="section section--sand" id="packages">
  <div class="container">
    <div style="text-align:center;max-width:600px;margin:0 auto 2.5rem;">
      <span class="section-eyebrow reveal">MICE Services</span>
      <h2 class="section-title reveal reveal-delay-1">Corporate Solutions, <em>African Flair</em></h2>
      <p class="section-subtitle reveal reveal-delay-2" style="margin:0 auto;">Filter by service type to explore our MICE capabilities.</p>
    </div>
    <div class="service-tabs reveal reveal-delay-2">
      <button class="service-tab active" onclick="filterMice(this,'all')">All Services</button>
      <button class="service-tab" onclick="filterMice(this,'conference')">🏢 Conferences</button>
      <button class="service-tab" onclick="filterMice(this,'incentive')">🎯 Incentives</button>
      <button class="service-tab" onclick="filterMice(this,'retreat')">🤝 Retreats</button>
      <button class="service-tab" onclick="filterMice(this,'exhibition')">🌍 Exhibitions</button>
    </div>

    <div class="mice-grid" id="miceGrid">

      <!-- 1. Accra Conference -->
      <div class="mice-card reveal" data-service="conference">
        <div class="mice-card__img">
          <img src="https://images.unsplash.com/photo-1511578314322-379afb476865?w=700&q=80" alt="Accra Conference" loading="lazy" />
          <div class="mice-card__category">🏢 Conference</div>
        </div>
        <div class="mice-card__body">
          <div class="mice-card__region">West Africa · Ghana</div>
          <div class="mice-card__title">Accra International Conference Package</div>
          <p class="mice-card__desc">Full-service conference management at Accra's premier venues — Accra International Conference Centre, Kempinski, Mövenpick, or Labadi Beach Hotel. For 50–2,000+ delegates.</p>
          <div class="mice-card__features">
            <span class="mice-card__feature">Plenary &amp; Breakouts</span>
            <span class="mice-card__feature">AV &amp; Translation</span>
            <span class="mice-card__feature">Gala Dinners</span>
            <span class="mice-card__feature">Delegate Transfers</span>
          </div>
          <div class="mice-card__footer">
            <div class="mice-card__meta">
              <span class="mice-card__meta-label">Duration</span>
              <span class="mice-card__meta-val">3–5 Days</span>
            </div>
            <a href="#enquiry" class="btn btn-primary btn-sm">Request Quote</a>
          </div>
        </div>
      </div>

      <!-- 2. Kenya Incentive -->
      <div class="mice-card reveal reveal-delay-1" data-service="incentive">
        <div class="mice-card__img">
          <img src="https://images.unsplash.com/photo-1516026672322-bc52d61a55d5?w=700&q=80" alt="Kenya Incentive Safari" loading="lazy" />
          <div class="mice-card__category">🎯 Incentive</div>
        </div>
        <div class="mice-card__body">
          <div class="mice-card__region">East Africa · Kenya</div>
          <div class="mice-card__title">Maasai Mara Executive Incentive Safari</div>
          <p class="mice-card__desc">Reward top performers with an unforgettable safari in the Maasai Mara. Private game drives, sundowner cocktails, bush dinners under the stars, and luxury tented camps. The ultimate incentive experience.</p>
          <div class="mice-card__features">
            <span class="mice-card__feature">Luxury Tented Camps</span>
            <span class="mice-card__feature">Private Game Drives</span>
            <span class="mice-card__feature">Bush Dinners</span>
            <span class="mice-card__feature">Balloon Safaris</span>
          </div>
          <div class="mice-card__footer">
            <div class="mice-card__meta">
              <span class="mice-card__meta-label">Duration</span>
              <span class="mice-card__meta-val">4–7 Days</span>
            </div>
            <a href="#enquiry" class="btn btn-primary btn-sm">Request Quote</a>
          </div>
        </div>
      </div>

      <!-- 3. Cape Town Retreat -->
      <div class="mice-card reveal reveal-delay-2" data-service="retreat">
        <div class="mice-card__img">
          <img src="https://images.unsplash.com/photo-1526772662000-3f88f10405ff?w=700&q=80" alt="Cape Town Retreat" loading="lazy" />
          <div class="mice-card__category">🤝 Retreat</div>
        </div>
        <div class="mice-card__body">
          <div class="mice-card__region">Southern Africa · South Africa</div>
          <div class="mice-card__title">Cape Town Executive Board Retreat</div>
          <p class="mice-card__desc">Strategic off-site in one of the world's most beautiful cities. Exclusive-use villas in Constantia, boardrooms with Table Mountain views, Winelands dinners, and team-building at the Cape of Good Hope.</p>
          <div class="mice-card__features">
            <span class="mice-card__feature">Private Villas</span>
            <span class="mice-card__feature">Wine Estate Dinners</span>
            <span class="mice-card__feature">Team Building</span>
            <span class="mice-card__feature">Helicopter Transfers</span>
          </div>
          <div class="mice-card__footer">
            <div class="mice-card__meta">
              <span class="mice-card__meta-label">Duration</span>
              <span class="mice-card__meta-val">3–5 Days</span>
            </div>
            <a href="#enquiry" class="btn btn-primary btn-sm">Request Quote</a>
          </div>
        </div>
      </div>

      <!-- 4. Rwanda Conference -->
      <div class="mice-card reveal" data-service="conference">
        <div class="mice-card__img">
          <img src="https://images.unsplash.com/photo-1551632436-cbf8dd35adfa?w=700&q=80" alt="Kigali Conference" loading="lazy" />
          <div class="mice-card__category">🏢 Conference</div>
        </div>
        <div class="mice-card__body">
          <div class="mice-card__region">East Africa · Rwanda</div>
          <div class="mice-card__title">Kigali Convention Centre Package</div>
          <p class="mice-card__desc">Host your continental or global conference in Kigali — Africa's cleanest, safest capital city. The state-of-the-art Kigali Convention Centre accommodates up to 5,000 delegates, with world-class hotels within walking distance.</p>
          <div class="mice-card__features">
            <span class="mice-card__feature">5,000+ Capacity</span>
            <span class="mice-card__feature">Simultaneous Translation</span>
            <span class="mice-card__feature">Exhibition Halls</span>
            <span class="mice-card__feature">VIP Protocol</span>
          </div>
          <div class="mice-card__footer">
            <div class="mice-card__meta">
              <span class="mice-card__meta-label">Duration</span>
              <span class="mice-card__meta-val">3–7 Days</span>
            </div>
            <a href="#enquiry" class="btn btn-primary btn-sm">Request Quote</a>
          </div>
        </div>
      </div>

      <!-- 5. Zanzibar Incentive -->
      <div class="mice-card reveal reveal-delay-1" data-service="incentive">
        <div class="mice-card__img">
          <img src="https://images.unsplash.com/photo-1573843981267-be1999ff37cd?w=700&q=80" alt="Zanzibar Incentive" loading="lazy" />
          <div class="mice-card__category">🎯 Incentive</div>
        </div>
        <div class="mice-card__body">
          <div class="mice-card__region">Indian Ocean · Zanzibar</div>
          <div class="mice-card__title">Zanzibar President's Club Incentive</div>
          <p class="mice-card__desc">The ultimate reward for your elite performers. Private beach resorts, Spice Island excursions, dhow sunset cruises, and dinners in Stone Town's historic rooftops. Pure paradise, professionally delivered.</p>
          <div class="mice-card__features">
            <span class="mice-card__feature">5★ Beach Resorts</span>
            <span class="mice-card__feature">Private Dhow Cruises</span>
            <span class="mice-card__feature">Spice Tours</span>
            <span class="mice-card__feature">Gala Beach Dinners</span>
          </div>
          <div class="mice-card__footer">
            <div class="mice-card__meta">
              <span class="mice-card__meta-label">Duration</span>
              <span class="mice-card__meta-val">5–7 Days</span>
            </div>
            <a href="#enquiry" class="btn btn-primary btn-sm">Request Quote</a>
          </div>
        </div>
      </div>

      <!-- 6. Morocco Exhibition -->
      <div class="mice-card reveal reveal-delay-2" data-service="exhibition">
        <div class="mice-card__img">
          <img src="https://images.unsplash.com/photo-1539020140153-e479b8c22e70?w=700&q=80" alt="Casablanca Exhibition" loading="lazy" />
          <div class="mice-card__category">🌍 Exhibition</div>
        </div>
        <div class="mice-card__body">
          <div class="mice-card__region">North Africa · Morocco</div>
          <div class="mice-card__title">Casablanca Trade Show &amp; Exhibition Package</div>
          <p class="mice-card__desc">Full exhibition management at Casablanca's Office des Foires et Expositions. Stand design and construction, delegate hosting, B2B meeting coordination, and gala event management for exhibitors and buyers.</p>
          <div class="mice-card__features">
            <span class="mice-card__feature">Stand Design &amp; Build</span>
            <span class="mice-card__feature">Delegate Hosting</span>
            <span class="mice-card__feature">B2B Matchmaking</span>
            <span class="mice-card__feature">Gala Events</span>
          </div>
          <div class="mice-card__footer">
            <div class="mice-card__meta">
              <span class="mice-card__meta-label">Duration</span>
              <span class="mice-card__meta-val">3–5 Days</span>
            </div>
            <a href="#enquiry" class="btn btn-primary btn-sm">Request Quote</a>
          </div>
        </div>
      </div>

      <!-- 7. Lagos Corporate Travel -->
      <div class="mice-card reveal" data-service="conference">
        <div class="mice-card__img">
          <img src="https://images.unsplash.com/photo-1598488035139-bdbb2231ce04?w=700&q=80" alt="Lagos Corporate" loading="lazy" />
          <div class="mice-card__category">🏢 Corporate Travel</div>
        </div>
        <div class="mice-card__body">
          <div class="mice-card__region">West Africa · Nigeria</div>
          <div class="mice-card__title">Lagos Corporate Travel &amp; Event Management</div>
          <p class="mice-card__desc">Seamless business travel and corporate event management in Africa's largest economy. VIP airport protocol, secure executive transport, and event production at Eko Hotel, Landmark Centre, or Oriental Hotel.</p>
          <div class="mice-card__features">
            <span class="mice-card__feature">VIP Airport Protocol</span>
            <span class="mice-card__feature">Secure Transport</span>
            <span class="mice-card__feature">Event Production</span>
            <span class="mice-card__feature">Executive Concierge</span>
          </div>
          <div class="mice-card__footer">
            <div class="mice-card__meta">
              <span class="mice-card__meta-label">Duration</span>
              <span class="mice-card__meta-val">Flexible</span>
            </div>
            <a href="#enquiry" class="btn btn-primary btn-sm">Request Quote</a>
          </div>
        </div>
      </div>

      <!-- 8. Seychelles Retreat -->
      <div class="mice-card reveal reveal-delay-1" data-service="retreat">
        <div class="mice-card__img">
          <img src="https://images.unsplash.com/photo-1510797215324-95aa89f43c33?w=700&q=80" alt="Seychelles Retreat" loading="lazy" />
          <div class="mice-card__category">🤝 Retreat</div>
        </div>
        <div class="mice-card__body">
          <div class="mice-card__region">Indian Ocean · Seychelles</div>
          <div class="mice-card__title">Seychelles Executive Strategy Retreat</div>
          <p class="mice-card__desc">Total privacy for your most important strategic conversations. Exclusive-use island resorts, private boardrooms overlooking the Indian Ocean, and team experiences that reset and realign your leadership team.</p>
          <div class="mice-card__features">
            <span class="mice-card__feature">Private Island Resorts</span>
            <span class="mice-card__feature">Ocean-View Boardrooms</span>
            <span class="mice-card__feature">Sailing &amp; Snorkelling</span>
            <span class="mice-card__feature">Wellness Programmes</span>
          </div>
          <div class="mice-card__footer">
            <div class="mice-card__meta">
              <span class="mice-card__meta-label">Duration</span>
              <span class="mice-card__meta-val">4–6 Days</span>
            </div>
            <a href="#enquiry" class="btn btn-primary btn-sm">Request Quote</a>
          </div>
        </div>
      </div>

      <!-- 9. Addis Conference -->
      <div class="mice-card reveal reveal-delay-2" data-service="conference">
        <div class="mice-card__img">
          <img src="https://images.unsplash.com/photo-1529429617124-95b109e86bb8?w=700&q=80" alt="Addis Conference" loading="lazy" />
          <div class="mice-card__category">🏢 Conference</div>
        </div>
        <div class="mice-card__body">
          <div class="mice-card__region">East Africa · Ethiopia</div>
          <div class="mice-card__title">Addis Ababa AU-UN Conference Package</div>
          <p class="mice-card__desc">Host your event in Africa's diplomatic capital. The African Union Headquarters and UNECA Conference Centre offer world-class facilities. We handle all protocol, security, and delegate logistics for high-level events.</p>
          <div class="mice-card__features">
            <span class="mice-card__feature">AU/UN Venues</span>
            <span class="mice-card__feature">Diplomatic Protocol</span>
            <span class="mice-card__feature">Security Management</span>
            <span class="mice-card__feature">VIP Delegations</span>
          </div>
          <div class="mice-card__footer">
            <div class="mice-card__meta">
              <span class="mice-card__meta-label">Duration</span>
              <span class="mice-card__meta-val">3–7 Days</span>
            </div>
            <a href="#enquiry" class="btn btn-primary btn-sm">Request Quote</a>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- ════════════════════════════════════════════════
     VENUES SHOWCASE
═══════════════════════════════════════════════════ -->
<section class="section section--dark">
  <div class="container">
    <div style="text-align:center;max-width:520px;margin:0 auto 3rem;">
      <span class="section-eyebrow reveal" style="color:var(--gold);">Premium Venues</span>
      <h2 class="section-title section-title--light reveal reveal-delay-1">Africa's Finest <em>Event Spaces</em></h2>
      <p class="section-subtitle reveal reveal-delay-2" style="margin:0 auto;color:rgba(242,232,213,.65);">From convention centres to exclusive safari lodges — we have preferred access to the continent's most sought-after venues.</p>
    </div>
    <div class="venues-grid">
      <div class="venue-card reveal">
        <img src="https://images.unsplash.com/photo-1511578314322-379afb476865?w=600&q=80" alt="Kigali Convention Centre" loading="lazy" />
        <div class="venue-card__overlay"></div>
        <div class="venue-card__body">
          <div class="venue-card__type">🏛️ Convention Centre</div>
          <div class="venue-card__name">Kigali Convention Centre</div>
          <div class="venue-card__capacity">Capacity: 5,000+ delegates</div>
        </div>
      </div>
      <div class="venue-card reveal reveal-delay-1">
        <img src="https://images.unsplash.com/photo-1540541338287-41700207dee6?w=600&q=80" alt="Safari Lodge" loading="lazy" />
        <div class="venue-card__overlay"></div>
        <div class="venue-card__body">
          <div class="venue-card__type">🦁 Safari Lodge</div>
          <div class="venue-card__name">&Beyond Bateleur Camp</div>
          <div class="venue-card__capacity">Exclusive Use: 40 guests</div>
        </div>
      </div>
      <div class="venue-card reveal reveal-delay-2">
        <img src="https://images.unsplash.com/photo-1520250497591-112f2f40a3f4?w=600&q=80" alt="Beach Resort" loading="lazy" />
        <div class="venue-card__overlay"></div>
        <div class="venue-card__body">
          <div class="venue-card__type">🏝️ Beach Resort</div>
          <div class="venue-card__name">Zuri Zanzibar</div>
          <div class="venue-card__capacity">Conference: 200 delegates</div>
        </div>
      </div>
      <div class="venue-card reveal reveal-delay-3">
        <img src="https://images.unsplash.com/photo-1551632436-cbf8dd35adfa?w=600&q=80" alt="City Hotel" loading="lazy" />
        <div class="venue-card__overlay"></div>
        <div class="venue-card__body">
          <div class="venue-card__type">🏨 City Hotel</div>
          <div class="venue-card__name">Kempinski Gold Coast City</div>
          <div class="venue-card__capacity">Ballroom: 1,200 guests</div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ════════════════════════════════════════════════
     STATS
═══════════════════════════════════════════════════ -->
<section class="section section--dark">
  <div class="container">
    <div class="stats-grid">
      <div class="stat-item reveal">
        <div class="stat-item__num">150+</div>
        <div class="stat-item__label">Corporate clients served</div>
      </div>
      <div class="stat-item reveal reveal-delay-1">
        <div class="stat-item__num">320+</div>
        <div class="stat-item__label">Events delivered since 2006</div>
      </div>
      <div class="stat-item reveal reveal-delay-2">
        <div class="stat-item__num">45,000+</div>
        <div class="stat-item__label">Delegates managed</div>
      </div>
      <div class="stat-item reveal reveal-delay-3">
        <div class="stat-item__num">98%</div>
        <div class="stat-item__label">Client retention rate</div>
      </div>
    </div>
  </div>
</section>

<!-- ════════════════════════════════════════════════
     CLIENTS
═══════════════════════════════════════════════════ -->
<!-- <section class="section section--sand">
  <div class="container">
    <div style="text-align:center;max-width:520px;margin:0 auto 2.5rem;">
      <span class="section-eyebrow reveal">Trusted By</span>
      <h2 class="section-title reveal reveal-delay-1">Leading <em>Organisations</em></h2>
    </div>
    <div class="clients-grid reveal reveal-delay-2">
      <span class="client-logo">MTN Group</span>
      <span class="client-logo">Ecobank</span>
      <span class="client-logo">African Union</span>
      <span class="client-logo">Dangote Group</span>
      <span class="client-logo">UNECA</span>
      <span class="client-logo">Standard Bank</span>
      <span class="client-logo">Afreximbank</span>
      <span class="client-logo">Nestlé CWA</span>
      <span class="client-logo">TotalEnergies</span>
      <span class="client-logo">PwC Africa</span>
    </div>
  </div>
</section> -->

<!-- ════════════════════════════════════════════════
     HOW WE WORK
═══════════════════════════════════════════════════ -->
<section class="section section--cream">
  <div class="container">
    <div style="text-align:center;max-width:520px;margin:0 auto 3.5rem;">
      <span class="section-eyebrow reveal">Our Process</span>
      <h2 class="section-title reveal reveal-delay-1">Seamless <em>Execution</em>,<br>Every Time</h2>
    </div>
    <div class="process-steps">
      <div class="process-step reveal">
        <div class="process-step__num">01</div>
        <div class="process-step__icon">📞</div>
        <div class="process-step__title">Discovery &amp; Briefing</div>
        <div class="process-step__desc">We understand your objectives, budget, delegate profile, and success metrics.</div>
      </div>
      <div class="process-step reveal reveal-delay-1">
        <div class="process-step__num">02</div>
        <div class="process-step__icon">📋</div>
        <div class="process-step__title">Proposal &amp; Sourcing</div>
        <div class="process-step__desc">We present venue options, draft programme, and detailed budget within 5 working days.</div>
      </div>
      <div class="process-step reveal reveal-delay-2">
        <div class="process-step__num">03</div>
        <div class="process-step__icon">🔧</div>
        <div class="process-step__title">Detailed Planning</div>
        <div class="process-step__desc">AV, catering, transport, activities, branding, and delegate communications all coordinated.</div>
      </div>
      <div class="process-step reveal reveal-delay-3">
        <div class="process-step__num">04</div>
        <div class="process-step__icon">🎯</div>
        <div class="process-step__title">On-Site Delivery</div>
        <div class="process-step__desc">Your dedicated Pier One project manager is on-site throughout — troubleshooting everything.</div>
      </div>
      <div class="process-step reveal reveal-delay-4">
        <div class="process-step__num">05</div>
        <div class="process-step__icon">📊</div>
        <div class="process-step__title">Post-Event Report</div>
        <div class="process-step__desc">Full reconciliation, delegate feedback summary, and recommendations for next time.</div>
      </div>
    </div>
  </div>
</section>

<!-- ════════════════════════════════════════════════
     TESTIMONIALS
═══════════════════════════════════════════════════ -->
<!-- <section class="section section--sand">
  <div class="container">
    <div style="text-align:center;max-width:520px;margin:0 auto 3rem;">
      <span class="section-eyebrow reveal">Client Feedback</span>
      <h2 class="section-title reveal reveal-delay-1">What Our <em>Clients</em> Say</h2>
    </div>
    <div class="testimonial-grid">
      <div class="testimonial-card reveal">
        <div class="testimonial-card__stars">★★★★★</div>
        <p class="testimonial-card__quote">"Pier One managed our Africa Leadership Conference for 600 delegates from 22 countries. Flawless logistics, outstanding venue selection, and a team that anticipated every need before we even articulated it. We've already booked them for next year."</p>
        <div class="testimonial-card__author">
          <div class="testimonial-card__avatar">👩🏾‍💼</div>
          <div>
            <div class="testimonial-card__name">Nana Ama Asante</div>
            <div class="testimonial-card__role">Head of Events, MTN Group</div>
          </div>
        </div>
      </div>
      <div class="testimonial-card reveal reveal-delay-1">
        <div class="testimonial-card__stars">★★★★★</div>
        <p class="testimonial-card__quote">"Our President's Club incentive to Kenya was nothing short of spectacular. Pier One understood exactly what we wanted — to make our top performers feel like royalty. The Mara safari, the bush dinners, the attention to detail — world-class."</p>
        <div class="testimonial-card__author">
          <div class="testimonial-card__avatar">👨🏾‍💼</div>
          <div>
            <div class="testimonial-card__name">Femi Adeyemi</div>
            <div class="testimonial-card__role">Sales Director, Dangote Industries</div>
          </div>
        </div>
      </div>
      <div class="testimonial-card reveal reveal-delay-2">
        <div class="testimonial-card__stars">★★★★★</div>
        <p class="testimonial-card__quote">"Hosting an AU side event with 45 African ministers is high-stakes. Pier One handled the protocol, security, and logistics with absolute professionalism. Their relationships across Addis Ababa made everything seamless. We couldn't have done it without them."</p>
        <div class="testimonial-card__author">
          <div class="testimonial-card__avatar">👩🏽‍💼</div>
          <div>
            <div class="testimonial-card__name">Dr. Esi Sutherland</div>
            <div class="testimonial-card__role">Programme Director, UNECA</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section> -->

<!-- ════════════════════════════════════════════════
     ENQUIRY + FAQ
═══════════════════════════════════════════════════ -->
<section class="section  section--sand" id="enquiry">
  <div class="container">
    <div class="enquiry-layout">
      <div>
        <span class="section-eyebrow reveal">Common Questions</span>
        <h2 class="section-title reveal reveal-delay-1">Frequently Asked<br><em>Questions</em></h2>
        <p class="section-subtitle reveal reveal-delay-2" style="margin-bottom:2.5rem;">Everything corporate event planners and executive assistants need to know.</p>
        <div class="faq-list reveal reveal-delay-2">
          <div class="faq-item">
            <button class="faq-btn" onclick="toggleFaq(this)">What MICE services do you provide?<div class="faq-icon">+</div></button>
            <div class="faq-body"><div class="faq-content">We provide full-service MICE solutions: Meetings (board meetings, AGMs, shareholder meetings), Incentives (reward travel for top performers), Conferences (continental and global events of all sizes), and Exhibitions (trade show management, stand design, delegate hosting). We also manage corporate travel, executive retreats, and VIP protocol services.</div></div>
          </div>
          <div class="faq-item">
            <button class="faq-btn" onclick="toggleFaq(this)">How far in advance should we start planning?<div class="faq-icon">+</div></button>
            <div class="faq-body"><div class="faq-content">For large conferences (500+ delegates), we recommend 9–12 months lead time to secure preferred venues and negotiate optimal rates. For executive retreats and incentive programmes, 4–6 months is typical. However, we have successfully delivered complex events with as little as 6 weeks' notice — contact us to discuss your timeline.</div></div>
          </div>
          <div class="faq-item">
            <button class="faq-btn" onclick="toggleFaq(this)">Do you handle visa and travel logistics?<div class="faq-icon">+</div></button>
            <div class="faq-body"><div class="faq-content">Yes — this is one of our core strengths. We manage group visa applications, invitation letters, flight bookings (including group allocations), airport VIP meet-and-greet, and all ground transportation. For multi-country African events, we handle the complex logistics of different visa regimes and internal flight connections.</div></div>
          </div>
          <div class="faq-item">
            <button class="faq-btn" onclick="toggleFaq(this)">Can you provide references from previous corporate clients?<div class="faq-icon">+</div></button>
            <div class="faq-body"><div class="faq-content">Absolutely. We are proud of our long-term relationships with multinational corporations, banks, development organisations, and government agencies. Upon request, we can provide relevant case studies and facilitate reference calls with clients who have hosted similar events to yours.</div></div>
          </div>
          <div class="faq-item">
            <button class="faq-btn" onclick="toggleFaq(this)">What are your payment terms for corporate events?<div class="faq-icon">+</div></button>
            <div class="faq-body"><div class="faq-content">Our standard corporate payment schedule is: 30% deposit upon contract signing to secure venues and suppliers, 40% at 90 days pre-event, and 30% final balance 30 days pre-event. We can accommodate corporate procurement processes and offer invoicing in USD, EUR, GBP, GHS, or NGN as required.</div></div>
          </li>
          </div>
          <div class="faq-item">
            <button class="faq-btn" onclick="toggleFaq(this)">Do you offer hybrid and virtual event support?<div class="faq-icon">+</div></button>
            <div class="faq-body"><div class="faq-content">Yes. We partner with leading AV and production companies across Africa to deliver seamless hybrid events — combining in-person delegate experiences with high-quality streaming, virtual participation tools, and real-time translation for global audiences.</div></div>
          </div>
        </div>
      </div>
      <div class="enquiry-box reveal reveal-delay-3">
        <div class="enquiry-box__title">Request a Proposal</div>
        <p class="enquiry-box__sub">Tell us about your event and a Pier One MICE specialist will respond with a tailored proposal within 48 hours.</p>
        <form onsubmit="return false;">
          <div class="enquiry-box__field">
            <label class="enquiry-box__label">Organisation</label>
            <input class="enquiry-box__input" type="text" placeholder="Company / Institution Name" />
          </div>
          <div class="enquiry-box__field">
            <label class="enquiry-box__label">Your Name &amp; Role</label>
            <input class="enquiry-box__input" type="text" placeholder="Jane Doe — Head of Events" />
          </div>
          <div class="enquiry-box__field">
            <label class="enquiry-box__label">Email Address</label>
            <input class="enquiry-box__input" type="email" placeholder="jane.doe@company.com" />
          </div>
          <div class="enquiry-box__field">
            <label class="enquiry-box__label">Event Type</label>
            <select class="enquiry-box__select">
              <option>Conference (100+ delegates)</option>
              <option>Incentive Travel Programme</option>
              <option>Executive Board Retreat</option>
              <option>Exhibition / Trade Show</option>
              <option>Corporate Travel Management</option>
              <option>Gala Dinner / Awards Ceremony</option>
              <option>Other — please specify in notes</option>
            </select>
          </div>
          <div class="enquiry-box__field">
            <label class="enquiry-box__label">Preferred Destination</label>
            <select class="enquiry-box__select">
              <option>West Africa (Ghana, Nigeria, Senegal…)</option>
              <option>East Africa (Kenya, Tanzania, Rwanda…)</option>
              <option>North Africa (Morocco, Egypt…)</option>
              <option>Southern Africa (South Africa, Botswana…)</option>
              <option>Indian Ocean Islands (Zanzibar, Seychelles…)</option>
              <option>Multiple Destinations</option>
              <option>Open to recommendations</option>
            </select>
          </div>
          <div style="display:grid;grid-template-columns:1fr 1fr;gap:.75rem;">
            <div class="enquiry-box__field">
              <label class="enquiry-box__label">Delegates</label>
              <select class="enquiry-box__select">
                <option>10 – 50</option>
                <option>51 – 150</option>
                <option>151 – 500</option>
                <option>500 – 1,000</option>
                <option>1,000+</option>
              </select>
            </div>
            <div class="enquiry-box__field">
              <label class="enquiry-box__label">Target Date</label>
              <select class="enquiry-box__select">
                <option>Q1 2026</option>
                <option>Q2 2026</option>
                <option>Q3 2026</option>
                <option>Q4 2026</option>
                <option>2027</option>
                <option>Flexible / TBC</option>
              </select>
            </div>
          </div>
          <div class="enquiry-box__field">
            <label class="enquiry-box__label">Additional Notes</label>
            <textarea class="enquiry-box__textarea" placeholder="Budget range, special requirements, previous events…"></textarea>
          </div>
          <button type="submit" class="btn btn-primary" style="width:100%;justify-content:center;">
            Submit RFP
            <svg class="arrow-icon" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
              <path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
            </svg>
          </button>
          <p class="enquiry-box__note">Response within 48 hours. <a href="#">Privacy Policy</a></p>
        </form>
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
      <h2 class="cta-band__title">Your Next Corporate Event<br>Deserves <em>Africa</em></h2>
      <p class="cta-band__sub">Let Pier One deliver an event your delegates will talk about for years. Professional. Seamless. Unforgettable.</p>
      <div class="cta-band__actions">
        <a href="#enquiry" class="btn btn-primary btn-lg">
          Request a Proposal
          <svg class="arrow-icon" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
          </svg>
        </a>
        <a href="mailto:mice@pieronetours.com" class="btn btn-secondary btn-lg">Email MICE Team</a>
      </div>
    </div>
  </div>
</section>

<script>
function filterMice(btn, service) {
  document.querySelectorAll('.service-tab').forEach(b => b.classList.remove('active'));
  btn.classList.add('active');
  document.querySelectorAll('#miceGrid .mice-card').forEach(card => {
    card.style.display = (service === 'all' || card.dataset.service === service) ? '' : 'none';
  });
}

function toggleFaq(btn) {
  const item = btn.closest('.faq-item');
  const body = item.querySelector('.faq-body');
  const isOpen = btn.classList.contains('open');
  document.querySelectorAll('.faq-btn.open').forEach(b => {
    b.classList.remove('open');
    b.closest('.faq-item').querySelector('.faq-body').classList.remove('open');
  });
  if (!isOpen) { btn.classList.add('open'); body.classList.add('open'); }
}
</script>

<?php include '../includes/footer.php'; ?>