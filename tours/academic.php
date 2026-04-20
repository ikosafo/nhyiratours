<?php include '../includes/header.php'; ?>

<style>
/* ═══════════════════════════════════════════════════════
   ACADEMIC TOURS — tours/academic.php
   Pier One Travel & Tour Services
════════════════════════════════════════════════════════ */

/* ── Hero ─────────────────────────────────────────── */
.tour-hero {
  position: relative;
  height: 80vh;
  min-height: 560px;
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
  font-size: clamp(1.4rem, 6vw, 3rem);
  font-weight: 600;
  color: var(--white);
  line-height: 1.08;
  letter-spacing: -.015em;
  margin-bottom: 1.25rem;
  max-width: 21ch;
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
.tour-hero__meta-item {
  display: flex;
  align-items: center;
  gap: .4rem;
}
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
.intro-panel__text { }
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

/* ── Tour Programme Cards ─────────────────────────── */
.programmes-grid {
  display: grid;
  grid-template-columns: repeat(3,1fr);
  gap: 1.5rem;
}
.prog-card {
  background: var(--white);
  border-radius: var(--radius-lg);
  border: 1px solid var(--border-soft);
  overflow: hidden;
  transition: transform var(--trans), box-shadow var(--trans), border-color var(--trans-fast);
  display: flex;
  flex-direction: column;
}
.prog-card:hover {
  transform: translateY(-6px);
  box-shadow: var(--shadow-lg);
  border-color: var(--gold);
}
.prog-card__img {
  aspect-ratio: 16/9;
  overflow: hidden;
  position: relative;
}
.prog-card__img img {
  width: 100%; height: 100%;
  object-fit: cover;
  transition: transform var(--trans-slow);
}
.prog-card:hover .prog-card__img img { transform: scale(1.06); }
.prog-card__badge {
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
.prog-card__body {
  padding: 1.5rem;
  display: flex;
  flex-direction: column;
  flex: 1;
}
.prog-card__region {
  font-size: .7rem;
  font-weight: 600;
  color: var(--gold);
  letter-spacing: .12em;
  text-transform: uppercase;
  margin-bottom: .4rem;
}
.prog-card__title {
  font-family: 'Cormorant Garamond', serif;
  font-size: 1.3rem;
  font-weight: 600;
  color: var(--earth);
  line-height: 1.25;
  margin-bottom: .6rem;
}
.prog-card__desc {
  font-size: .82rem;
  color: var(--text-soft);
  line-height: 1.68;
  margin-bottom: 1.2rem;
  flex: 1;
}
.prog-card__modules {
  display: flex;
  flex-wrap: wrap;
  gap: .4rem;
  margin-bottom: 1.25rem;
}
.prog-card__module {
  font-size: .68rem;
  font-weight: 500;
  background: var(--gold-pale);
  color: var(--gold-dark);
  border: 1px solid var(--border);
  border-radius: 40px;
  padding: .2rem .7rem;
}
.prog-card__footer {
  display: flex;
  align-items: center;
  justify-content: space-between;
  border-top: 1px solid var(--border-soft);
  padding-top: 1.1rem;
}
.prog-card__meta {
  display: flex;
  flex-direction: column;
  gap: .2rem;
}
.prog-card__meta-label { font-size: .65rem; color: var(--text-muted); text-transform: uppercase; letter-spacing: .06em; }
.prog-card__meta-val {
  font-family: 'Cormorant Garamond', serif;
  font-size: 1.3rem;
  font-weight: 700;
  color: var(--earth);
}

/* ── Process Steps ────────────────────────────────── */
.process-steps {
  display: grid;
  grid-template-columns: repeat(5,1fr);
  gap: 0;
  position: relative;
}
.process-steps::before {
  content: '';
  position: absolute;
  top: 28px;
  left: 10%;
  right: 10%;
  height: 1px;
  background: linear-gradient(90deg, transparent, var(--gold), var(--gold), transparent);
  z-index: 0;
}
.process-step {
  display: flex;
  flex-direction: column;
  align-items: center;
  text-align: center;
  padding: 0 1rem;
  position: relative;
  z-index: 1;
}
.process-step__num {
  width: 56px; height: 56px;
  border-radius: 50%;
  background: var(--white);
  border: 2px solid var(--gold);
  display: flex;
  align-items: center;
  justify-content: center;
  font-family: 'Cormorant Garamond', serif;
  font-size: 1.3rem;
  font-weight: 700;
  color: var(--gold);
  margin-bottom: 1.25rem;
  transition: background var(--trans-fast), color var(--trans-fast);
}
.process-step:hover .process-step__num {
  background: var(--gold);
  color: var(--white);
}
.process-step__icon { font-size: 1.3rem; margin-bottom: .6rem; }
.process-step__title {
  font-family: 'Cormorant Garamond', serif;
  font-size: 1rem;
  font-weight: 600;
  color: var(--earth);
  margin-bottom: .35rem;
}
.process-step__desc { font-size: .75rem; color: var(--text-soft); line-height: 1.65; }

/* ── Disciplines Grid ─────────────────────────────── */
.disciplines-grid {
  display: grid;
  grid-template-columns: repeat(4,1fr);
  gap: 1rem;
}
.discipline-card {
  background: var(--white);
  border: 1px solid var(--border-soft);
  border-radius: var(--radius-lg);
  padding: 1.75rem 1.5rem;
  text-align: center;
  transition: transform var(--trans), box-shadow var(--trans), border-color var(--trans-fast);
  cursor: default;
}
.discipline-card:hover {
  transform: translateY(-4px);
  box-shadow: var(--shadow-md);
  border-color: var(--gold);
}
.discipline-card__icon { font-size: 2rem; margin-bottom: .9rem; }
.discipline-card__name {
  font-family: 'Cormorant Garamond', serif;
  font-size: 1.05rem;
  font-weight: 600;
  color: var(--earth);
  margin-bottom: .35rem;
}
.discipline-card__desc { font-size: .78rem; color: var(--text-soft); line-height: 1.6; }

/* ── Testimonial — Academic ───────────────────────── */
.acad-testimonials {
  display: grid;
  grid-template-columns: repeat(3,1fr);
  gap: 1.5rem;
}
.acad-quote {
  background: var(--white);
  border-radius: var(--radius-lg);
  border: 1px solid var(--border-soft);
  padding: 2rem;
  transition: box-shadow var(--trans);
}
.acad-quote:hover { box-shadow: var(--shadow-md); }
.acad-quote__stars { color: var(--gold); font-size: .85rem; margin-bottom: .75rem; }
.acad-quote__mark {
  font-family: 'Cormorant Garamond', serif;
  font-size: 3rem;
  color: var(--gold);
  line-height: .8;
  margin-bottom: .5rem;
  font-style: italic;
}
.acad-quote__text {
  font-size: .87rem;
  color: var(--text-mid);
  line-height: 1.8;
  margin-bottom: 1.5rem;
}
.acad-quote__author { display: flex; align-items: center; gap: .75rem; }
.acad-quote__avatar {
  width: 44px; height: 44px;
  border-radius: 50%;
  background: linear-gradient(135deg, var(--gold-pale), var(--sand));
  border: 2px solid var(--gold-pale);
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 1.2rem;
}
.acad-quote__name { font-weight: 600; font-size: .84rem; color: var(--earth); }
.acad-quote__role { font-size: .74rem; color: var(--text-muted); }

/* ── Partner Logos ────────────────────────────────── */
.partners-row {
  display: flex;
  align-items: center;
  justify-content: center;
  gap: 3rem;
  flex-wrap: wrap;
}
.partner-pill {
  display: flex;
  align-items: center;
  gap: .6rem;
  padding: .65rem 1.4rem;
  border: 1px solid var(--border);
  border-radius: 40px;
  font-size: .8rem;
  font-weight: 500;
  color: var(--text-mid);
  background: var(--white);
  transition: border-color var(--trans-fast), color var(--trans-fast), background var(--trans-fast);
}
.partner-pill:hover {
  border-color: var(--gold);
  color: var(--gold-dark);
  background: var(--gold-pale);
}
.partner-pill .flag { font-size: 1.1rem; }

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
.enquiry-box__select option {
  color: #1C1008 !important; /* or var(--earth) — dark brown/black */
  background: #fff; /* white background for contrast */
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
  .programmes-grid { grid-template-columns: 1fr 1fr; }
  .disciplines-grid { grid-template-columns: repeat(2,1fr); }
  .enquiry-layout { grid-template-columns: 1fr; }
  .enquiry-box { position: static; }
  .process-steps { grid-template-columns: repeat(3,1fr); gap: 2rem; }
  .process-steps::before { display: none; }
  .acad-testimonials { grid-template-columns: 1fr 1fr; }
}
@media (max-width: 900px) {
  .intro-panel { grid-template-columns: 1fr; gap: 2rem; }
  .intro-panel__badge { right: 1rem; }
  .highlight-strip { grid-template-columns: repeat(2,1fr); }
  .acad-testimonials { grid-template-columns: 1fr; }
}
@media (max-width: 640px) {
  .programmes-grid { grid-template-columns: 1fr; }
  .disciplines-grid { grid-template-columns: 1fr 1fr; }
  .process-steps { grid-template-columns: 1fr 1fr; }
}
</style>

<!-- ════════════════════════════════════════════════
     HERO
═══════════════════════════════════════════════════ -->
<section class="tour-hero">
  <img class="tour-hero__bg"
    src="https://images.unsplash.com/photo-1607748862156-7c548e7e98f4?w=1920&q=80"
    alt="Students on academic tour in Africa"
    loading="eager" />
  <div class="tour-hero__overlay"></div>
  <div class="tour-hero__kente"></div>
  <div class="tour-hero__content">
    <nav class="breadcrumb" style="margin-bottom:1rem;">
      <a href="<?= URLROOT ?>">Home</a>
      <span class="breadcrumb__sep">›</span>
      <a href="#">Tours</a>
      <span class="breadcrumb__sep">›</span>
      <span class="breadcrumb__current">Academic Tours</span>
    </nav>
    <div class="tour-hero__badge">🎓 Academic Tours</div>
    <h1 class="tour-hero__title">Where Knowledge Meets the <em>Living</em> Classroom</h1>
    <p class="tour-hero__subtitle">Pier One designs transformative educational expeditions across Africa — connecting students, researchers, and institutions to the continent's history, ecology, culture, and living communities.</p>
    <div class="tour-hero__meta">
      <span class="tour-hero__meta-item">
        <svg fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/></svg>
        54+ African Countries
      </span>
      <span class="tour-hero__meta-item">
        <svg fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
        Groups of 10–300+
      </span>
      <span class="tour-hero__meta-item">
        <svg fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path stroke-linecap="round" d="M12 6v6l4 2"/></svg>
        5–21 Day Programmes
      </span>
      <span class="tour-hero__meta-item">
        <svg fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
        Accredited Field Learning
      </span>
    </div>
    <div style="display:flex;gap:1rem;flex-wrap:wrap;">
      <a href="#programmes" class="btn btn-primary btn-lg">
        Browse Programmes
        <svg class="arrow-icon" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
          <path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
        </svg>
      </a>
      <a href="#enquiry" class="btn btn-secondary btn-lg">Request a Quote</a>
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
        <div class="highlight-strip__icon">🏫</div>
        <div class="highlight-strip__label">200+ Institutions Served</div>
        <div class="highlight-strip__desc">Universities, schools & research bodies across Africa and the diaspora</div>
      </div>
      <div class="highlight-strip__item reveal reveal-delay-1">
        <div class="highlight-strip__icon">🔬</div>
        <div class="highlight-strip__label">Field Research Support</div>
        <div class="highlight-strip__desc">Embedded local scholars, lab partnerships & data-collection logistics</div>
      </div>
      <div class="highlight-strip__item reveal reveal-delay-2">
        <div class="highlight-strip__icon">📜</div>
        <div class="highlight-strip__label">CPD Credit Hours</div>
        <div class="highlight-strip__desc">Programmes aligned with recognised academic frameworks & credit structures</div>
      </div>
      <div class="highlight-strip__item reveal reveal-delay-3">
        <div class="highlight-strip__icon">🌍</div>
        <div class="highlight-strip__label">18 Years of Excellence</div>
        <div class="highlight-strip__desc">A decade-and-a-half of designing academic programmes Africans can be proud of</div>
      </div>
    </div>
  </div>
</section>

<!-- ════════════════════════════════════════════════
     INTRO — WHY ACADEMIC TOURS
═══════════════════════════════════════════════════ -->
<section class="section section--cream">
  <div class="container">
    <div class="intro-panel">
      <div class="intro-panel__img-wrap reveal">
        <img src="https://images.unsplash.com/photo-1571019613454-1cb2f99b2d8b?w=900&q=80" alt="Students with local guide in Ghana" loading="lazy" />
        <div class="intro-panel__badge">
          <div class="intro-panel__badge-num">12,000+</div>
          <div class="intro-panel__badge-label">Students transformed<br>through our programmes</div>
        </div>
      </div>
      <div>
        <span class="section-eyebrow reveal">Our Approach</span>
        <h2 class="section-title reveal reveal-delay-1">Africa Is the<br><em>Greatest Classroom</em><br>on Earth.</h2>
        <p class="section-subtitle reveal reveal-delay-2" style="margin-bottom:0;">No textbook can replicate the experience of standing at Elmina Castle's Door of No Return, measuring soil pH in a Rwandan hillside farm, or interviewing a griot in Dakar. Pier One turns these encounters into structured, curriculum-aligned, deeply meaningful learning.</p>
        <div class="intro-pillar-list">
          <div class="intro-pillar reveal reveal-delay-2">
            <div class="intro-pillar__icon">🧭</div>
            <div>
              <div class="intro-pillar__title">Expert Academic Facilitators</div>
              <div class="intro-pillar__desc">Every programme is co-designed with local scholars, professors, and field experts — not just guides. Your group engages with the people who live and research these topics.</div>
            </div>
          </div>
          <div class="intro-pillar reveal reveal-delay-3">
            <div class="intro-pillar__icon">📋</div>
            <div>
              <div class="intro-pillar__title">Curriculum-Aligned Itineraries</div>
              <div class="intro-pillar__desc">We work with your institution's academic coordinators to design itineraries that directly support your curriculum, learning outcomes, and assessment frameworks.</div>
            </div>
          </div>
          <div class="intro-pillar reveal reveal-delay-4">
            <div class="intro-pillar__icon">🛡️</div>
            <div>
              <div class="intro-pillar__title">Full Risk Management</div>
              <div class="intro-pillar__desc">Comprehensive duty-of-care protocols, travel insurance, 24/7 emergency support, medical briefings, and risk assessments submitted to your institution before departure.</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ════════════════════════════════════════════════
     PROGRAMMES GRID
═══════════════════════════════════════════════════ -->
<section class="section section--sand" id="programmes">
  <div class="container">
    <div style="text-align:center;max-width:560px;margin:0 auto 3rem;">
      <span class="section-eyebrow reveal">Featured Programmes</span>
      <h2 class="section-title reveal reveal-delay-1">Journeys Built for<br><em>Curious Minds</em></h2>
      <p class="section-subtitle reveal reveal-delay-2" style="margin:0 auto;">Each programme is a full academic experience — lectures, field visits, community encounters, reflection sessions, and cultural immersion woven into every day.</p>
    </div>

    <div class="programmes-grid">

      <!-- Programme 1 -->
      <div class="prog-card reveal">
        <div class="prog-card__img">
          <img src="https://images.unsplash.com/photo-1626197031507-c17099753214?w=700&q=80" alt="Ghana Slave Route" loading="lazy" />
          <div class="prog-card__badge">History &amp; Heritage</div>
        </div>
        <div class="prog-card__body">
          <div class="prog-card__region">West Africa · Ghana</div>
          <div class="prog-card__title">Ghana Heritage &amp; the Transatlantic Slave Route</div>
          <div class="prog-card__desc">A deeply moving and academically rigorous journey from Accra to Kumasi to Cape Coast — tracing the Ashanti Kingdom, visiting Elmina and Cape Coast Castles, and engaging with historians at the W.E.B. Du Bois Centre. Designed for history, African studies, and diaspora students.</div>
          <div class="prog-card__modules">
            <span class="prog-card__module">Colonial History</span>
            <span class="prog-card__module">African Kingdoms</span>
            <span class="prog-card__module">Diaspora Studies</span>
            <span class="prog-card__module">Community Visits</span>
          </div>
          <div class="prog-card__footer">
            <div class="prog-card__meta">
              <span class="prog-card__meta-label">Duration</span>
              <span class="prog-card__meta-val">10 Days</span>
            </div>
            <div class="prog-card__meta" style="text-align:right;">
              <span class="prog-card__meta-label">From</span>
              <span class="prog-card__meta-val">$1,200</span>
            </div>
            <a href="#enquiry" class="btn btn-primary btn-sm">Enquire</a>
          </div>
        </div>
      </div>

      <!-- Programme 2 -->
      <div class="prog-card reveal reveal-delay-1">
        <div class="prog-card__img">
          <img src="https://images.unsplash.com/photo-1516026672322-bc52d61a55d5?w=700&q=80" alt="Serengeti Ecology" loading="lazy" />
          <div class="prog-card__badge">Ecology &amp; Conservation</div>
        </div>
        <div class="prog-card__body">
          <div class="prog-card__region">East Africa · Kenya &amp; Tanzania</div>
          <div class="prog-card__title">East African Ecology &amp; Wildlife Conservation</div>
          <div class="prog-card__desc">An immersive field programme in the Serengeti–Mara ecosystem, Ngorongoro Crater, and Amboseli. Students work alongside KWS rangers, track wildlife data, and engage with Maasai conservation communities. Ideal for biology, ecology, and environmental science groups.</div>
          <div class="prog-card__modules">
            <span class="prog-card__module">Field Research</span>
            <span class="prog-card__module">Wildlife Census</span>
            <span class="prog-card__module">Ecosystem Studies</span>
            <span class="prog-card__module">Ethnobotany</span>
          </div>
          <div class="prog-card__footer">
            <div class="prog-card__meta">
              <span class="prog-card__meta-label">Duration</span>
              <span class="prog-card__meta-val">14 Days</span>
            </div>
            <div class="prog-card__meta" style="text-align:right;">
              <span class="prog-card__meta-label">From</span>
              <span class="prog-card__meta-val">$2,800</span>
            </div>
            <a href="#enquiry" class="btn btn-primary btn-sm">Enquire</a>
          </div>
        </div>
      </div>

      <!-- Programme 3 -->
      <div class="prog-card reveal reveal-delay-2">
        <div class="prog-card__img">
          <img src="https://images.unsplash.com/photo-1529429617124-95b109e86bb8?w=700&q=80" alt="Ethiopia Ancient History" loading="lazy" />
          <div class="prog-card__badge">Archaeology &amp; Anthropology</div>
        </div>
        <div class="prog-card__body">
          <div class="prog-card__region">East Africa · Ethiopia</div>
          <div class="prog-card__title">Ethiopia: Cradle of Humankind</div>
          <div class="prog-card__desc">From Lucy at the National Museum to the obelisks of Axum, Lalibela's rock-hewn churches, and the Omo Valley's indigenous peoples — Ethiopia is a living laboratory for archaeology, anthropology, and religious studies students.</div>
          <div class="prog-card__modules">
            <span class="prog-card__module">Paleoanthropology</span>
            <span class="prog-card__module">Ancient Civilisations</span>
            <span class="prog-card__module">Living Cultures</span>
            <span class="prog-card__module">Orthodox Christianity</span>
          </div>
          <div class="prog-card__footer">
            <div class="prog-card__meta">
              <span class="prog-card__meta-label">Duration</span>
              <span class="prog-card__meta-val">12 Days</span>
            </div>
            <div class="prog-card__meta" style="text-align:right;">
              <span class="prog-card__meta-label">From</span>
              <span class="prog-card__meta-val">$2,100</span>
            </div>
            <a href="#enquiry" class="btn btn-primary btn-sm">Enquire</a>
          </div>
        </div>
      </div>

      <!-- Programme 4 -->
      <div class="prog-card reveal">
        <div class="prog-card__img">
          <img src="https://images.unsplash.com/photo-1551632436-cbf8dd35adfa?w=700&q=80" alt="Rwanda Genocide Memorial" loading="lazy" />
          <div class="prog-card__badge">Peace &amp; Development</div>
        </div>
        <div class="prog-card__body">
          <div class="prog-card__region">East Africa · Rwanda</div>
          <div class="prog-card__title">Rwanda: Reconciliation &amp; Reconstruction</div>
          <div class="prog-card__desc">A powerful programme for international relations, political science, and social work students — visiting the Kigali Genocide Memorial, community healing initiatives, Rwanda's rebuilt institutions, and the innovative Gacaca community justice model.</div>
          <div class="prog-card__modules">
            <span class="prog-card__module">Transitional Justice</span>
            <span class="prog-card__module">Post-Conflict Development</span>
            <span class="prog-card__module">Community Healing</span>
            <span class="prog-card__module">Governance</span>
          </div>
          <div class="prog-card__footer">
            <div class="prog-card__meta">
              <span class="prog-card__meta-label">Duration</span>
              <span class="prog-card__meta-val">8 Days</span>
            </div>
            <div class="prog-card__meta" style="text-align:right;">
              <span class="prog-card__meta-label">From</span>
              <span class="prog-card__meta-val">$1,650</span>
            </div>
            <a href="#enquiry" class="btn btn-primary btn-sm">Enquire</a>
          </div>
        </div>
      </div>

      <!-- Programme 5 -->
      <div class="prog-card reveal reveal-delay-1">
        <div class="prog-card__img">
          <img src="https://images.unsplash.com/photo-1539020140153-e479b8c22e70?w=700&q=80" alt="Morocco Islamic Architecture" loading="lazy" />
          <div class="prog-card__badge">Islamic Studies &amp; Architecture</div>
        </div>
        <div class="prog-card__body">
          <div class="prog-card__region">North Africa · Morocco</div>
          <div class="prog-card__title">Morocco: Imperial Cities &amp; Islamic Civilisation</div>
          <div class="prog-card__desc">From Fez's ninth-century Qarawiyyin — the world's oldest university — to the madrasas of Marrakech and Meknes' historic medinas. An unparalleled programme for architecture, Islamic studies, and art history students.</div>
          <div class="prog-card__modules">
            <span class="prog-card__module">Islamic Architecture</span>
            <span class="prog-card__module">Medieval Scholarship</span>
            <span class="prog-card__module">Arabic Heritage</span>
            <span class="prog-card__module">Artisan Crafts</span>
          </div>
          <div class="prog-card__footer">
            <div class="prog-card__meta">
              <span class="prog-card__meta-label">Duration</span>
              <span class="prog-card__meta-val">10 Days</span>
            </div>
            <div class="prog-card__meta" style="text-align:right;">
              <span class="prog-card__meta-label">From</span>
              <span class="prog-card__meta-val">$1,750</span>
            </div>
            <a href="#enquiry" class="btn btn-primary btn-sm">Enquire</a>
          </div>
        </div>
      </div>

      <!-- Programme 6 -->
      <div class="prog-card reveal reveal-delay-2">
        <div class="prog-card__img">
          <img src="https://images.unsplash.com/photo-1510797215324-95aa89f43c33?w=700&q=80" alt="South Africa Economic Inequality" loading="lazy" />
          <div class="prog-card__badge">Urban Studies &amp; Economics</div>
        </div>
        <div class="prog-card__body">
          <div class="prog-card__region">Southern Africa · South Africa</div>
          <div class="prog-card__title">South Africa: Inequality, Identity &amp; Democracy</div>
          <div class="prog-card__desc">Cape Town and Johannesburg serve as living case studies for post-apartheid urban transformation, economic inequality, land reform, and democratic consolidation. A must for sociology, economics, law, and urban planning students.</div>
          <div class="prog-card__modules">
            <span class="prog-card__module">Post-Apartheid Studies</span>
            <span class="prog-card__module">Urban Inequality</span>
            <span class="prog-card__module">Constitutional Law</span>
            <span class="prog-card__module">Land Economics</span>
          </div>
          <div class="prog-card__footer">
            <div class="prog-card__meta">
              <span class="prog-card__meta-label">Duration</span>
              <span class="prog-card__meta-val">10 Days</span>
            </div>
            <div class="prog-card__meta" style="text-align:right;">
              <span class="prog-card__meta-label">From</span>
              <span class="prog-card__meta-val">$2,000</span>
            </div>
            <a href="#enquiry" class="btn btn-primary btn-sm">Enquire</a>
          </div>
        </div>
      </div>

    </div><!-- /.programmes-grid -->
  </div>
</section>

<!-- ════════════════════════════════════════════════
     HOW WE WORK — PROCESS
═══════════════════════════════════════════════════ -->
<section class="section section--dark">
  <div class="container">
    <div style="text-align:center;max-width:520px;margin:0 auto 3.5rem;">
      <span class="section-eyebrow reveal" style="color:var(--gold);">Our Process</span>
      <h2 class="section-title section-title--light reveal reveal-delay-1">From First Enquiry<br>to <em>Lasting Impact</em></h2>
    </div>
    <div class="process-steps">
      <div class="process-step reveal">
        <div class="process-step__num">01</div>
        <div class="process-step__icon">💬</div>
        <div class="process-step__title">Discovery Call</div>
        <div class="process-step__desc" style="color:rgba(242,232,213,.65);">We learn your institution's learning objectives, group profile, dates, and budget.</div>
      </div>
      <div class="process-step reveal reveal-delay-1">
        <div class="process-step__num">02</div>
        <div class="process-step__icon">✏️</div>
        <div class="process-step__title">Custom Design</div>
        <div class="process-step__desc" style="color:rgba(242,232,213,.65);">Our academic team drafts a bespoke itinerary aligned to your curriculum outcomes.</div>
      </div>
      <div class="process-step reveal reveal-delay-2">
        <div class="process-step__num">03</div>
        <div class="process-step__icon">🔄</div>
        <div class="process-step__title">Review &amp; Refine</div>
        <div class="process-step__desc" style="color:rgba(242,232,213,.65);">We collaborate with your faculty to refine the programme until it's exactly right.</div>
      </div>
      <div class="process-step reveal reveal-delay-3">
        <div class="process-step__num">04</div>
        <div class="process-step__icon">🛂</div>
        <div class="process-step__title">Logistics &amp; Prep</div>
        <div class="process-step__desc" style="color:rgba(242,232,213,.65);">Visas, insurance, risk assessments, pre-departure briefings, and reading lists handled.</div>
      </div>
      <div class="process-step reveal reveal-delay-4">
        <div class="process-step__num">05</div>
        <div class="process-step__icon">🌍</div>
        <div class="process-step__title">Transformative Journey</div>
        <div class="process-step__desc" style="color:rgba(242,232,213,.65);">Your group departs. We manage every detail on the ground so you can focus on learning.</div>
      </div>
    </div>
  </div>
</section>

<!-- ════════════════════════════════════════════════
     DISCIPLINES WE SERVE
═══════════════════════════════════════════════════ -->
<section class="section section--cream">
  <div class="container">
    <div style="text-align:center;max-width:520px;margin:0 auto 3rem;">
      <span class="section-eyebrow reveal">Disciplines</span>
      <h2 class="section-title reveal reveal-delay-1">We Design Tours for<br>Every <em>Field of Study</em></h2>
    </div>
    <div class="disciplines-grid">
      <div class="discipline-card reveal">
        <div class="discipline-card__icon">🏛️</div>
        <div class="discipline-card__name">History &amp; African Studies</div>
        <div class="discipline-card__desc">Pre-colonial kingdoms, colonial history, independence movements, and diaspora studies.</div>
      </div>
      <div class="discipline-card reveal reveal-delay-1">
        <div class="discipline-card__icon">🌿</div>
        <div class="discipline-card__name">Ecology &amp; Conservation</div>
        <div class="discipline-card__desc">Wildlife surveys, ecosystem studies, conservation policy, and climate impact research.</div>
      </div>
      <div class="discipline-card reveal reveal-delay-2">
        <div class="discipline-card__icon">🤝</div>
        <div class="discipline-card__name">International Development</div>
        <div class="discipline-card__desc">Aid effectiveness, SDG implementation, grassroots NGOs, and community development models.</div>
      </div>
      <div class="discipline-card reveal reveal-delay-3">
        <div class="discipline-card__icon">⚖️</div>
        <div class="discipline-card__name">Law &amp; Human Rights</div>
        <div class="discipline-card__desc">Constitutional courts, traditional justice systems, land rights, and transitional justice.</div>
      </div>
      <div class="discipline-card reveal reveal-delay-4">
        <div class="discipline-card__icon">🎨</div>
        <div class="discipline-card__name">Art, Architecture &amp; Design</div>
        <div class="discipline-card__desc">African aesthetic traditions, Islamic architecture, contemporary African art, and vernacular design.</div>
      </div>
      <div class="discipline-card reveal reveal-delay-5">
        <div class="discipline-card__icon">💰</div>
        <div class="discipline-card__name">Economics &amp; Business</div>
        <div class="discipline-card__desc">African markets, fintech innovation, informal economies, and trade corridor development.</div>
      </div>
      <div class="discipline-card reveal">
        <div class="discipline-card__icon">🏥</div>
        <div class="discipline-card__name">Public Health &amp; Medicine</div>
        <div class="discipline-card__desc">Community health systems, disease burden, maternal health, and rural healthcare delivery.</div>
      </div>
      <div class="discipline-card reveal reveal-delay-1">
        <div class="discipline-card__icon">📰</div>
        <div class="discipline-card__name">Journalism &amp; Media</div>
        <div class="discipline-card__desc">African press freedom, media landscape analysis, documentary field reporting, and digital journalism.</div>
      </div>
    </div>
  </div>
</section>

<!-- ════════════════════════════════════════════════
     ENQUIRY + FAQ
═══════════════════════════════════════════════════ -->
<section class="section section--sand" id="enquiry">
  <div class="container">
    <div class="enquiry-layout">

      <!-- Left: FAQ -->
      <div>
        <span class="section-eyebrow reveal">Common Questions</span>
        <h2 class="section-title reveal reveal-delay-1">Frequently Asked<br><em>Questions</em></h2>
        <p class="section-subtitle reveal reveal-delay-2" style="margin-bottom:2.5rem;">Everything institutions and group leaders need to know about booking an academic tour with Pier One.</p>
        <div class="faq-list reveal reveal-delay-2">
          <div class="faq-item">
            <button class="faq-btn" onclick="toggleFaq(this)">
              What is the minimum group size for an academic tour?
              <div class="faq-icon">+</div>
            </button>
            <div class="faq-body">
              <div class="faq-content">We accommodate academic groups from as few as 10 participants up to 300+. Smaller groups (10–25) benefit from more intimate, bespoke itineraries, while larger groups are managed through a carefully coordinated sub-group model with multiple facilitators.</div>
            </div>
          </div>
          <div class="faq-item">
            <button class="faq-btn" onclick="toggleFaq(this)">
              How far in advance should we start planning?
              <div class="faq-icon">+</div>
            </button>
            <div class="faq-body">
              <div class="faq-content">We recommend beginning planning at least 4–6 months before your intended departure date. This allows sufficient time for itinerary co-design, institutional approval processes, visa applications, risk assessments, and student preparation materials. Some destinations require earlier booking.</div>
            </div>
          </div>
          <div class="faq-item">
            <button class="faq-btn" onclick="toggleFaq(this)">
              Can the programme earn students academic credit?
              <div class="faq-icon">+</div>
            </button>
            <div class="faq-body">
              <div class="faq-content">Yes — we design programmes to meet the requirements of field-learning credit frameworks at your institution. We provide full documentation including learning objectives, contact hours, field activities, and assessment criteria. Credit recognition is determined by your institution's academic board.</div>
            </div>
          </div>
          <div class="faq-item">
            <button class="faq-btn" onclick="toggleFaq(this)">
              What does the price include?
              <div class="faq-icon">+</div>
            </button>
            <div class="faq-body">
              <div class="faq-content">All group ground transport, accommodation (twin-share), meals per itinerary, entrance fees, academic facilitator fees, local expert guides, pre-departure briefing materials, and 24/7 on-ground emergency support. International flights and personal travel insurance are quoted separately.</div>
            </div>
          </div>
          <div class="faq-item">
            <button class="faq-btn" onclick="toggleFaq(this)">
              How do you handle safety and duty of care?
              <div class="faq-icon">+</div>
            </button>
            <div class="faq-body">
              <div class="faq-content">We take safety extremely seriously. Every programme includes a comprehensive risk assessment submitted to your institution, destination-specific health and safety briefings, emergency response protocols, 24/7 on-ground support contacts, medical first-aiders on long programmes, and comprehensive group travel insurance options.</div>
            </div>
          </div>
          <div class="faq-item">
            <button class="faq-btn" onclick="toggleFaq(this)">
              Can we combine multiple countries in one programme?
              <div class="faq-icon">+</div>
            </button>
            <div class="faq-body">
              <div class="faq-content">Absolutely. Multi-country programmes are some of our most popular — for example, a West Africa comparison programme covering Ghana and Senegal, or an East Africa conservation tour spanning Kenya, Tanzania, and Rwanda. We handle all cross-border logistics, visas, and transfers seamlessly.</div>
            </div>
          </div>
        </div>
      </div>

      <!-- Right: Enquiry Form -->
      <div class="enquiry-box reveal reveal-delay-3">
        <div class="enquiry-box__title">Request a Programme</div>
        <p class="enquiry-box__sub">Tell us about your institution and we'll have an academic tour specialist reach out within 48 hours with a tailored proposal.</p>
        <form onsubmit="return false;">
          <div class="enquiry-box__field">
            <label class="enquiry-box__label">Institution Name</label>
            <input class="enquiry-box__input" type="text" placeholder="University / School / Organisation" />
          </div>
          <div class="enquiry-box__field">
            <label class="enquiry-box__label">Your Name &amp; Role</label>
            <input class="enquiry-box__input" type="text" placeholder="Dr. Jane Adu — Dept. Coordinator" />
          </div>
          <div class="enquiry-box__field">
            <label class="enquiry-box__label">Email Address</label>
            <input class="enquiry-box__input" type="email" placeholder="your@university.edu.gh" />
          </div>
          <div class="enquiry-box__field">
            <label class="enquiry-box__label">Destination / Region of Interest</label>
            <select class="enquiry-box__select">
              <option value="">Select region…</option>
              <option>West Africa (Ghana, Senegal, Nigeria…)</option>
              <option>East Africa (Kenya, Tanzania, Rwanda…)</option>
              <option>North Africa (Morocco, Egypt…)</option>
              <option>Central Africa (Congo, Cameroon…)</option>
              <option>Southern Africa (South Africa, Zambia…)</option>
              <option>Multi-Region</option>
              <option>Not sure — advise me</option>
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
            <label class="enquiry-box__label">Academic Focus / Notes</label>
            <textarea class="enquiry-box__textarea" placeholder="e.g. History of colonialism, ecology field work, business in Africa…"></textarea>
          </div>
          <button type="submit" class="btn btn-primary" style="width:100%;justify-content:center;">
            Submit Enquiry
            <svg class="arrow-icon" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
              <path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
            </svg>
          </button>
          <p class="enquiry-box__note">We respond within 48 hours. Your data is never shared. <a href="#">Privacy Policy</a>.</p>
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
      <h2 class="cta-band__title">Ready to Design Your<br><em>Academic Expedition</em>?</h2>
      <p class="cta-band__sub">Let Africa's greatest living classroom become your institution's most powerful teaching resource. Our academic specialists are standing by.</p>
      <div class="cta-band__actions">
        <a href="#enquiry" class="btn btn-primary btn-lg">
          Start Planning
          <svg class="arrow-icon" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
          </svg>
        </a>
        <a href="mailto:info@pieronetours.com" class="btn btn-secondary btn-lg">Email a Specialist</a>
      </div>
    </div>
  </div>
</section>

<script>
function toggleFaq(btn) {
  const item = btn.closest('.faq-item');
  const body = item.querySelector('.faq-body');
  const isOpen = btn.classList.contains('open');
  // Close all
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