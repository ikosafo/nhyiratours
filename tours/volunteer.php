<?php include '../includes/header.php'; ?>

<style>
/* ═══════════════════════════════════════════════════════
   VOLUNTEER MISSION TOURS — tours/volunteer.php
   Pier One Travel & Tour Services
════════════════════════════════════════════════════════ */

/* ── Hero ─────────────────────────────────────────── */
.tour-hero {
  position: relative;
  height: 88vh;
  min-height: 560px;
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
.tour-hero:hover .tour-hero__bg { transform: scale(1.04); }
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
  padding: 3.5rem clamp(1rem,4vw,3rem);
}
.tour-hero__badge {
  display: inline-flex; align-items: center; gap: .5rem;
  background: rgba(200,145,58,.18); backdrop-filter: blur(8px);
  border: 1px solid rgba(200,145,58,.4); border-radius: 40px;
  padding: .35rem 1.1rem; color: var(--gold-light);
  font-size: .72rem; font-weight: 600; letter-spacing: .16em; text-transform: uppercase;
  margin-bottom: 1.1rem;
}
.tour-hero__title { font-family: 'Cormorant Garamond', serif; font-size: clamp(1.4rem,6.5vw,4rem); font-weight: 600; color: var(--white); line-height: 1.06; letter-spacing: -.015em; margin-bottom: 1.3rem; max-width: 17ch; }
.tour-hero__title em { font-style: italic; color: var(--gold-light); }
.tour-hero__subtitle { font-size: clamp(.9rem,1.6vw,1.08rem); color: rgba(255,255,255,.72); line-height: 1.78; max-width: 48ch; margin-bottom: 2.25rem; }
.tour-hero__meta { display: flex; align-items: center; gap: 2rem; flex-wrap: wrap; color: rgba(255,255,255,.62); font-size: .8rem; margin-bottom: 2.25rem; }
.tour-hero__meta-item { display: flex; align-items: center; gap: .4rem; }
.tour-hero__meta-item svg { width: 14px; height: 14px; color: var(--gold); }

/* ── Highlight Strip ──────────────────────────────── */
.highlight-strip { display: grid; grid-template-columns: repeat(4,1fr); gap: 0; border: 1px solid var(--border); border-radius: var(--radius-lg); overflow: hidden; }
.highlight-strip__item { padding: 2rem 1.5rem; text-align: center; border-right: 1px solid var(--border); }
.highlight-strip__item:last-child { border-right: none; }
.highlight-strip__icon { font-size: 2rem; margin-bottom: .75rem; }
.highlight-strip__label { font-family: 'Cormorant Garamond', serif; font-size: 1.08rem; font-weight: 600; color: var(--earth); margin-bottom: .3rem; }
.highlight-strip__desc { font-size: .78rem; color: var(--text-soft); line-height: 1.58; }

/* ── Intro Panel ──────────────────────────────────── */
.intro-panel { display: grid; grid-template-columns: 1fr 1fr; gap: 4.5rem; align-items: center; }
.intro-panel__img-wrap { position: relative; border-radius: var(--radius-xl); overflow: hidden; }
.intro-panel__img-wrap img { width: 100%; aspect-ratio: 4/5; object-fit: cover; display: block; }
.intro-panel__badge { position: absolute; bottom: 2rem; right: -1.5rem; background: var(--white); border-radius: var(--radius-lg); padding: 1.4rem 1.75rem; box-shadow: var(--shadow-lg); min-width: 200px; }
.intro-panel__badge-num { font-family: 'Cormorant Garamond', serif; font-size: 2.8rem; font-weight: 700; color: var(--gold); line-height: 1; }
.intro-panel__badge-label { font-size: .78rem; color: var(--text-soft); margin-top: .3rem; line-height: 1.4; }
.intro-pillar-list { display: flex; flex-direction: column; gap: 1.5rem; margin-top: 2.5rem; }
.intro-pillar { display: flex; gap: 1.25rem; align-items: flex-start; }
.intro-pillar__icon { width: 50px; height: 50px; background: linear-gradient(135deg, var(--gold-pale), var(--sand)); border-radius: var(--radius); display: flex; align-items: center; justify-content: center; font-size: 1.35rem; flex-shrink: 0; border: 1px solid var(--border); }
.intro-pillar__title { font-family: 'Cormorant Garamond', serif; font-size: 1.05rem; font-weight: 600; color: var(--earth); margin-bottom: .3rem; }
.intro-pillar__desc { font-size: .82rem; color: var(--text-soft); line-height: 1.7; }

/* ── Mission Sector Filter ────────────────────────── */
.sector-tabs { display: flex; gap: .5rem; flex-wrap: wrap; margin-bottom: 2.5rem; justify-content: center; }
.sector-tab { display: inline-flex; align-items: center; gap: .45rem; padding: .6rem 1.35rem; border-radius: 40px; font-size: .82rem; font-weight: 500; border: 1.5px solid var(--border); color: var(--text-mid); background: var(--white); cursor: pointer; transition: all var(--trans-fast); }
.sector-tab:hover, .sector-tab.active { background: var(--gold); border-color: var(--gold); color: var(--white); box-shadow: 0 4px 16px rgba(200,145,58,.35); }

/* ── Mission Cards ────────────────────────────────── */
.mission-grid { display: grid; grid-template-columns: repeat(3,1fr); gap: 1.5rem; }
.mission-card {
  background: var(--white); border-radius: var(--radius-lg); border: 1px solid var(--border-soft); overflow: hidden;
  display: flex; flex-direction: column;
  transition: transform var(--trans), box-shadow var(--trans), border-color var(--trans-fast);
}
.mission-card:hover { transform: translateY(-6px); box-shadow: var(--shadow-lg); border-color: var(--gold); }
.mission-card__img { aspect-ratio: 16/9; overflow: hidden; position: relative; }
.mission-card__img img { width: 100%; height: 100%; object-fit: cover; transition: transform var(--trans-slow); }
.mission-card:hover .mission-card__img img { transform: scale(1.06); }
.mission-card__sector { position: absolute; top: 1rem; left: 1rem; background: var(--earth); color: var(--gold-light); font-size: .65rem; font-weight: 700; letter-spacing: .1em; text-transform: uppercase; padding: .28rem .8rem; border-radius: 40px; }
.mission-card__body { padding: 1.5rem; display: flex; flex-direction: column; flex: 1; }
.mission-card__region { font-size: .7rem; font-weight: 600; color: var(--gold); letter-spacing: .12em; text-transform: uppercase; margin-bottom: .4rem; }
.mission-card__title { font-family: 'Cormorant Garamond', serif; font-size: 1.28rem; font-weight: 600; color: var(--earth); line-height: 1.25; margin-bottom: .55rem; }
.mission-card__desc { font-size: .82rem; color: var(--text-soft); line-height: 1.68; margin-bottom: 1.1rem; flex: 1; }
.mission-card__activities { display: flex; flex-wrap: wrap; gap: .4rem; margin-bottom: 1.2rem; }
.mission-card__activity { font-size: .68rem; font-weight: 500; background: var(--gold-pale); color: var(--gold-dark); border: 1px solid var(--border); border-radius: 40px; padding: .2rem .7rem; }
.mission-card__footer { display: flex; align-items: center; justify-content: space-between; border-top: 1px solid var(--border-soft); padding-top: 1.1rem; }
.mission-card__meta { display: flex; flex-direction: column; gap: .2rem; }
.mission-card__meta-label { font-size: .65rem; color: var(--text-muted); text-transform: uppercase; letter-spacing: .06em; }
.mission-card__meta-val { font-family: 'Cormorant Garamond', serif; font-size: 1.28rem; font-weight: 700; color: var(--earth); }

/* ── Impact Stats ─────────────────────────────────── */
.impact-grid {
  display: grid;
  grid-template-columns: repeat(4,1fr);
  gap: 0;
  border: 1px solid rgba(200,145,58,.2);
  border-radius: var(--radius-lg);
  overflow: hidden;
}
.impact-stat {
  padding: 2.5rem 2rem;
  text-align: center;
  border-right: 1px solid rgba(200,145,58,.2);
}
.impact-stat:last-child { border-right: none; }
.impact-stat__num { font-family: 'Cormorant Garamond', serif; font-size: 3rem; font-weight: 700; color: var(--gold-light); letter-spacing: -.02em; line-height: 1; margin-bottom: .4rem; }
.impact-stat__label { font-size: .78rem; font-weight: 500; color: rgba(242,232,213,.65); }

/* ── Volunteer Experience Split ───────────────────── */
.vol-split { display: grid; grid-template-columns: 1fr 1fr; gap: 4rem; align-items: center; }
.vol-checklist { display: flex; flex-direction: column; gap: 1rem; margin-top: 2rem; }
.vol-check-item { display: flex; gap: 1.1rem; align-items: flex-start; padding: 1.25rem; background: var(--white); border: 1px solid var(--border-soft); border-radius: var(--radius-lg); transition: border-color var(--trans-fast), box-shadow var(--trans-fast); }
.vol-check-item:hover { border-color: var(--gold); box-shadow: var(--shadow-sm); }
.vol-check-item__icon { font-size: 1.5rem; flex-shrink: 0; }
.vol-check-item__title { font-family: 'Cormorant Garamond', serif; font-size: 1rem; font-weight: 600; color: var(--earth); margin-bottom: .2rem; }
.vol-check-item__desc { font-size: .8rem; color: var(--text-soft); line-height: 1.6; }
.vol-img-wrap { position: relative; border-radius: var(--radius-xl); overflow: hidden; }
.vol-img-wrap img { width: 100%; aspect-ratio: 4/5; object-fit: cover; display: block; }
.vol-img-wrap__badge { position: absolute; top: 2rem; right: -1.5rem; background: var(--white); border-radius: var(--radius-lg); padding: 1.25rem 1.5rem; box-shadow: var(--shadow-lg); min-width: 180px; }
.vol-img-wrap__badge-num { font-family: 'Cormorant Garamond', serif; font-size: 2.4rem; font-weight: 700; color: var(--gold); line-height: 1; }
.vol-img-wrap__badge-label { font-size: .75rem; color: var(--text-soft); margin-top: .25rem; }

/* ── Sectors We Serve ─────────────────────────────── */
.sectors-grid { display: grid; grid-template-columns: repeat(4,1fr); gap: 1rem; }
.sector-card { background: var(--white); border: 1px solid var(--border-soft); border-radius: var(--radius-lg); padding: 1.75rem 1.5rem; text-align: center; transition: transform var(--trans), box-shadow var(--trans), border-color var(--trans-fast); cursor: default; }
.sector-card:hover { transform: translateY(-4px); box-shadow: var(--shadow-md); border-color: var(--gold); }
.sector-card__icon { font-size: 2rem; margin-bottom: .9rem; }
.sector-card__name { font-family: 'Cormorant Garamond', serif; font-size: 1.05rem; font-weight: 600; color: var(--earth); margin-bottom: .35rem; }
.sector-card__desc { font-size: .78rem; color: var(--text-soft); line-height: 1.6; }

/* ── Process Steps ────────────────────────────────── */
.process-steps { display: grid; grid-template-columns: repeat(5,1fr); gap: 0; position: relative; }
.process-steps::before { content: ''; position: absolute; top: 28px; left: 10%; right: 10%; height: 1px; background: linear-gradient(90deg, transparent, var(--gold), var(--gold), transparent); z-index: 0; }
.process-step { display: flex; flex-direction: column; align-items: center; text-align: center; padding: 0 1rem; position: relative; z-index: 1; }
.process-step__num { width: 56px; height: 56px; border-radius: 50%; background: var(--white); border: 2px solid var(--gold); display: flex; align-items: center; justify-content: center; font-family: 'Cormorant Garamond', serif; font-size: 1.3rem; font-weight: 700; color: var(--gold); margin-bottom: 1.25rem; transition: background var(--trans-fast), color var(--trans-fast); }
.process-step:hover .process-step__num { background: var(--gold); color: var(--white); }
.process-step__icon { font-size: 1.3rem; margin-bottom: .6rem; }
.process-step__title { font-family: 'Cormorant Garamond', serif; font-size: 1rem; font-weight: 600; color: var(--earth); margin-bottom: .35rem; }
.process-step__desc { font-size: .75rem; color: var(--text-soft); line-height: 1.65; }

/* ── Testimonials ─────────────────────────────────── */
.vol-quotes { display: grid; grid-template-columns: 1.4fr 1fr; gap: 1.5rem; align-items: start; }
.vq-main { background: var(--earth); border-radius: var(--radius-xl); padding: 3rem; position: relative; overflow: hidden; }
.vq-main::before { content: '"'; font-family: 'Cormorant Garamond', serif; font-size: 14rem; color: rgba(200,145,58,.07); position: absolute; top: -2rem; left: .5rem; line-height: 1; font-style: italic; pointer-events: none; }
.vq-main__stars { color: var(--gold); font-size: .9rem; margin-bottom: 1.5rem; }
.vq-main__text { font-family: 'Cormorant Garamond', serif; font-size: 1.42rem; font-style: italic; color: var(--cream); line-height: 1.68; margin-bottom: 2rem; position: relative; z-index: 1; }
.vq-main__author { display: flex; align-items: center; gap: 1rem; position: relative; z-index: 1; }
.vq-main__avatar { width: 52px; height: 52px; border-radius: 50%; background: linear-gradient(135deg, var(--gold), var(--clay)); display: flex; align-items: center; justify-content: center; font-size: 1.4rem; border: 2px solid rgba(200,145,58,.4); }
.vq-main__name { font-size: .88rem; font-weight: 600; color: var(--cream); }
.vq-main__role { font-size: .75rem; color: rgba(242,232,213,.6); }
.vq-secondary { display: flex; flex-direction: column; gap: 1.25rem; }
.vq-small { background: var(--white); border-radius: var(--radius-lg); border: 1px solid var(--border-soft); padding: 1.5rem; transition: box-shadow var(--trans); }
.vq-small:hover { box-shadow: var(--shadow-md); }
.vq-small__stars { color: var(--gold); font-size: .75rem; margin-bottom: .5rem; }
.vq-small__text { font-size: .83rem; color: var(--text-mid); line-height: 1.75; margin-bottom: 1rem; }
.vq-small__author { display: flex; align-items: center; gap: .65rem; }
.vq-small__avatar { width: 38px; height: 38px; border-radius: 50%; background: var(--gold-pale); border: 2px solid var(--border); display: flex; align-items: center; justify-content: center; font-size: 1rem; }
.vq-small__name { font-size: .8rem; font-weight: 600; color: var(--earth); }
.vq-small__role { font-size: .72rem; color: var(--text-muted); }

/* ── Enquiry + FAQ ────────────────────────────────── */
.enquiry-layout { display: grid; grid-template-columns: 1fr 360px; gap: 3rem; align-items: start; }
.enquiry-box { background: linear-gradient(145deg, var(--earth), #5C3D2E); border-radius: var(--radius-xl); padding: 2.5rem; position: sticky; top: calc(var(--topbar-h) + var(--nav-h) + 1.5rem); }
.enquiry-box__title { font-family: 'Cormorant Garamond', serif; font-size: 1.5rem; font-weight: 600; color: var(--cream); margin-bottom: .5rem; }
.enquiry-box__sub { font-size: .82rem; color: rgba(242,232,213,.65); line-height: 1.65; margin-bottom: 2rem; }
.enquiry-box__field { display: flex; flex-direction: column; gap: .3rem; margin-bottom: 1rem; }
.enquiry-box__label { font-size: .68rem; font-weight: 600; color: var(--gold); letter-spacing: .1em; text-transform: uppercase; }
.enquiry-box__input, .enquiry-box__select, .enquiry-box__textarea { font-family: 'DM Sans', sans-serif; font-size: .85rem; padding: .8rem 1rem; border-radius: var(--radius); border: 1.5px solid rgba(200,145,58,.25); background: rgba(255,255,255,.07); color: var(--cream); outline: none; transition: border-color var(--trans-fast); width: 100%; }
.enquiry-box__select option { color: #1C1008 !important; background: #fff; }
.enquiry-box__input::placeholder, .enquiry-box__textarea::placeholder { color: rgba(242,232,213,.35); }
.enquiry-box__input:focus, .enquiry-box__select:focus, .enquiry-box__textarea:focus { border-color: var(--gold); }
.enquiry-box__select { -webkit-appearance: none; }
.enquiry-box__textarea { resize: vertical; min-height: 80px; }
.enquiry-box__note { font-size: .73rem; color: rgba(242,232,213,.5); text-align: center; margin-top: 1rem; line-height: 1.6; }
.enquiry-box__note a { color: var(--gold-light); }

/* ── FAQ ─────────────────────────────────────────── */
.faq-list { display: flex; flex-direction: column; gap: 0; }
.faq-item { border-bottom: 1px solid var(--border-soft); }
.faq-item:first-child { border-top: 1px solid var(--border-soft); }
.faq-btn { width: 100%; padding: 1.25rem 0; display: flex; align-items: center; justify-content: space-between; gap: 1rem; background: none; border: none; font-family: 'DM Sans', sans-serif; font-size: .9rem; font-weight: 500; color: var(--earth); text-align: left; cursor: pointer; transition: color var(--trans-fast); }
.faq-btn:hover { color: var(--gold); }
.faq-btn.open { color: var(--gold); }
.faq-icon { width: 22px; height: 22px; border: 1.5px solid var(--border); border-radius: 50%; display: flex; align-items: center; justify-content: center; flex-shrink: 0; font-size: .75rem; color: var(--text-soft); transition: transform var(--trans-fast), background var(--trans-fast), border-color var(--trans-fast), color var(--trans-fast); }
.faq-btn.open .faq-icon { transform: rotate(45deg); background: var(--gold); border-color: var(--gold); color: var(--white); }
.faq-body { max-height: 0; overflow: hidden; transition: max-height .45s cubic-bezier(.4,0,.2,1); }
.faq-body.open { max-height: 400px; }
.faq-content { padding: 0 0 1.25rem; font-size: .85rem; color: var(--text-soft); line-height: 1.8; }

/* ── CTA Band ────────────────────────────────────── */
.cta-band { background: linear-gradient(135deg, var(--earth), #5C3D2E); border-radius: var(--radius-xl); padding: clamp(2.5rem,5vw,4rem); text-align: center; position: relative; overflow: hidden; }
.cta-band::before { content: ''; position: absolute; top: -80px; right: -80px; width: 300px; height: 300px; background: var(--gold); border-radius: 50%; opacity: .05; }
.cta-band__title { font-family: 'Cormorant Garamond', serif; font-size: clamp(1.8rem,4vw,3rem); font-weight: 600; color: var(--cream); margin-bottom: .75rem; position: relative; z-index: 1; }
.cta-band__title em { font-style: italic; color: var(--gold-light); }
.cta-band__sub { font-size: .95rem; color: rgba(242,232,213,.68); max-width: 44ch; margin: 0 auto 2rem; line-height: 1.75; position: relative; z-index: 1; }
.cta-band__actions { display: flex; gap: 1rem; justify-content: center; flex-wrap: wrap; position: relative; z-index: 1; }

/* ── Responsive ──────────────────────────────────── */
@media (max-width: 1100px) {
  .mission-grid { grid-template-columns: 1fr 1fr; }
  .sectors-grid { grid-template-columns: repeat(2,1fr); }
  .impact-grid { grid-template-columns: repeat(2,1fr); }
  .enquiry-layout { grid-template-columns: 1fr; }
  .enquiry-box { position: static; }
  .process-steps { grid-template-columns: repeat(3,1fr); gap: 2rem; }
  .process-steps::before { display: none; }
  .vol-quotes { grid-template-columns: 1fr; }
  .vol-split { grid-template-columns: 1fr; gap: 2.5rem; }
}
@media (max-width: 900px) {
  .intro-panel { grid-template-columns: 1fr; gap: 2rem; }
  .intro-panel__badge { right: 1rem; }
  .highlight-strip { grid-template-columns: repeat(2,1fr); }
}
@media (max-width: 640px) {
  .mission-grid { grid-template-columns: 1fr; }
  .sectors-grid { grid-template-columns: 1fr 1fr; }
  .process-steps { grid-template-columns: 1fr 1fr; }
}
</style>

<!-- ════════════════════════════════════════════════
     HERO
═══════════════════════════════════════════════════ -->
<section class="tour-hero">
  <img class="tour-hero__bg"
    src="https://images.unsplash.com/photo-1488521787991-ed7bbaae773c?w=1920&q=80"
    alt="Volunteers working in an African community"
    loading="eager" />
  <div class="tour-hero__overlay"></div>
  <div class="tour-hero__kente"></div>
  <div class="tour-hero__content">
    <nav class="breadcrumb" style="margin-bottom:1rem;">
      <a href="<?= URLROOT ?>">Home</a>
      <span class="breadcrumb__sep">›</span>
      <a href="#">Tours</a>
      <span class="breadcrumb__sep">›</span>
      <span class="breadcrumb__current">Volunteer Mission Tours</span>
    </nav>
    <div class="tour-hero__badge">🤝 Volunteer Mission Tours</div>
    <h1 class="tour-hero__title">Travel with <em>Purpose.</em><br>Leave a Legacy.</h1>
    <p class="tour-hero__subtitle">Pier One designs volunteer mission tours that go far beyond good intentions — structured, impactful programmes where your skills, time, and presence create real, lasting change in African communities. </p>
    <div class="tour-hero__meta">
      <span class="tour-hero__meta-item"><svg fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/></svg>12 African Countries</span>
      <span class="tour-hero__meta-item"><svg fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z"/></svg>Individuals, Families &amp; Groups</span>
      <span class="tour-hero__meta-item"><svg fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path stroke-linecap="round" d="M12 6v6l4 2"/></svg>7 – 21 Day Missions</span>
      <span class="tour-hero__meta-item"><svg fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>Verified Community Partners</span>
    </div>
    <div style="display:flex;gap:1rem;flex-wrap:wrap;">
      <a href="#missions" class="btn btn-primary btn-lg">Browse Missions<svg class="arrow-icon" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg></a>
      <a href="#enquiry" class="btn btn-secondary btn-lg">Apply to Volunteer</a>
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
        <div class="highlight-strip__icon">🏗️</div>
        <div class="highlight-strip__label">Build &amp; Construct</div>
        <div class="highlight-strip__desc">Schools, clinics, wells, sanitation, and community infrastructure projects</div>
      </div>
      <div class="highlight-strip__item reveal reveal-delay-1">
        <div class="highlight-strip__icon">🏥</div>
        <div class="highlight-strip__label">Medical Outreach</div>
        <div class="highlight-strip__desc">Doctors, nurses &amp; healthcare professionals delivering care in underserved communities</div>
      </div>
      <div class="highlight-strip__item reveal reveal-delay-2">
        <div class="highlight-strip__icon">📚</div>
        <div class="highlight-strip__label">Education &amp; Teaching</div>
        <div class="highlight-strip__desc">Literacy, numeracy, STEM, and vocational skills for children and adults alike</div>
      </div>
      <div class="highlight-strip__item reveal reveal-delay-3">
        <div class="highlight-strip__icon">🌱</div>
        <div class="highlight-strip__label">Conservation Work</div>
        <div class="highlight-strip__desc">Reforestation, marine conservation, wildlife protection, and sustainable agriculture</div>
      </div>
    </div>
  </div>
</section>

<!-- ════════════════════════════════════════════════
     INTRO — OUR APPROACH
═══════════════════════════════════════════════════ -->
<section class="section section--cream">
  <div class="container">
    <div class="intro-panel">
      <div class="intro-panel__img-wrap reveal">
        <img src="https://images.unsplash.com/photo-1593113598332-cd288d649433?w=900&q=80" alt="Volunteers with children in Africa" loading="lazy" />
        <div class="intro-panel__badge">
          <div class="intro-panel__badge-num">80+</div>
          <div class="intro-panel__badge-label">Verified community<br>partner organisations</div>
        </div>
      </div>
      <div>
        <span class="section-eyebrow reveal">Responsible Volunteering</span>
        <h2 class="section-title reveal reveal-delay-1">We Believe Aid<br>Should <em>Empower,</em><br>Not Depend.</h2>
        <p class="section-subtitle reveal reveal-delay-2" style="margin-bottom:0;">At Pier One, we reject the "white saviour" model of voluntourism. Every mission we design is community-led — the host organisation sets the priorities, defines the skills needed, and ensures the work is sustainable long after volunteers return home. You come to serve the community's vision, not to impose your own.</p>
        <div class="intro-pillar-list">
          <div class="intro-pillar reveal reveal-delay-2">
            <div class="intro-pillar__icon">🤝</div>
            <div>
              <div class="intro-pillar__title">Community-Led Partnerships</div>
              <div class="intro-pillar__desc">Every project is initiated and directed by the host community. We vet all partner NGOs, co-operatives, and community organisations for credibility, financial transparency, and genuine local need — before any volunteer travels with us.</div>
            </div>
          </div>
          <div class="intro-pillar reveal reveal-delay-3">
            <div class="intro-pillar__icon">🎯</div>
            <div>
              <div class="intro-pillar__title">Skills-Matched Placements</div>
              <div class="intro-pillar__desc">We match volunteers to placements where their professional skills — medicine, engineering, teaching, construction, IT — are genuinely needed. Unskilled labour is directed to supervised projects with local tradespeople as leads.</div>
            </div>
          </div>
          <div class="intro-pillar reveal reveal-delay-4">
            <div class="intro-pillar__icon">📊</div>
            <div>
              <div class="intro-pillar__title">Measurable Impact Reporting</div>
              <div class="intro-pillar__desc">We provide every volunteer group with a post-mission Impact Report — documenting outputs, beneficiary numbers, project completion status, and how their contribution connects to the community's longer-term development plan.</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ════════════════════════════════════════════════
     MISSIONS GRID
═══════════════════════════════════════════════════ -->
<section class="section section--sand" id="missions">
  <div class="container">
    <div style="text-align:center;max-width:600px;margin:0 auto 2.5rem;">
      <span class="section-eyebrow reveal">Our Missions</span>
      <h2 class="section-title reveal reveal-delay-1">Choose Your <em>Mission.</em><br>Make Your Mark.</h2>
      <p class="section-subtitle reveal reveal-delay-2" style="margin:0 auto;">Filter by sector to find a mission that matches your skills and passion.</p>
    </div>
    <div class="sector-tabs reveal reveal-delay-2">
      <button class="sector-tab active" onclick="filterMission(this,'all')">All Missions</button>
      <button class="sector-tab" onclick="filterMission(this,'education')">📚 Education</button>
      <button class="sector-tab" onclick="filterMission(this,'medical')">🏥 Medical</button>
      <button class="sector-tab" onclick="filterMission(this,'construction')">🏗️ Construction</button>
      <button class="sector-tab" onclick="filterMission(this,'conservation')">🌱 Conservation</button>
    </div>

    <div class="mission-grid" id="missionGrid">

      <!-- 1 -->
      <div class="mission-card reveal" data-sector="education">
        <div class="mission-card__img">
          <img src="https://images.unsplash.com/photo-1488521787991-ed7bbaae773c?w=700&q=80" alt="Teaching in Ghana" loading="lazy" />
          <div class="mission-card__sector">📚 Education</div>
        </div>
        <div class="mission-card__body">
          <div class="mission-card__region">West Africa · Ghana</div>
          <div class="mission-card__title">Ghana Rural Schools Teaching Mission</div>
          <div class="mission-card__desc">Work alongside Ghanaian teachers in underserved rural primary and JHS schools in the Brong-Ahafo, Upper West, and Northern regions. Support literacy, numeracy, science, and English language learning — while gaining an incomparable understanding of West African life and culture.</div>
          <div class="mission-card__activities">
            <span class="mission-card__activity">Classroom Teaching</span>
            <span class="mission-card__activity">Library Development</span>
            <span class="mission-card__activity">STEM Workshops</span>
            <span class="mission-card__activity">Sports &amp; Arts</span>
          </div>
          <div class="mission-card__footer">
            <div class="mission-card__meta"><span class="mission-card__meta-label">Duration</span><span class="mission-card__meta-val">2–4 Weeks</span></div>
            <div class="mission-card__meta" style="text-align:right;"><span class="mission-card__meta-label">From</span><span class="mission-card__meta-val">$950</span></div>
            <a href="#enquiry" class="btn btn-primary btn-sm">Apply</a>
          </div>
        </div>
      </div>

      <!-- 2 -->
      <div class="mission-card reveal reveal-delay-1" data-sector="medical">
        <div class="mission-card__img">
          <img src="https://images.unsplash.com/photo-1551601651-2a8555f1a136?w=700&q=80" alt="Medical outreach Uganda" loading="lazy" />
          <div class="mission-card__sector">🏥 Medical</div>
        </div>
        <div class="mission-card__body">
          <div class="mission-card__region">East Africa · Uganda</div>
          <div class="mission-card__title">Uganda Rural Medical Outreach</div>
          <div class="mission-card__desc">Partner with Ugandan healthcare professionals to deliver primary care, dental, optical, maternal health, and health education in remote communities of Gulu, Mbale, and Kasese districts. Open to licensed doctors, nurses, midwives, dentists, and optometrists — as well as medical students under supervision.</div>
          <div class="mission-card__activities">
            <span class="mission-card__activity">Primary Care Clinics</span>
            <span class="mission-card__activity">Maternal Health</span>
            <span class="mission-card__activity">Dental Outreach</span>
            <span class="mission-card__activity">Health Education</span>
          </div>
          <div class="mission-card__footer">
            <div class="mission-card__meta"><span class="mission-card__meta-label">Duration</span><span class="mission-card__meta-val">1–3 Weeks</span></div>
            <div class="mission-card__meta" style="text-align:right;"><span class="mission-card__meta-label">From</span><span class="mission-card__meta-val">$1,100</span></div>
            <a href="#enquiry" class="btn btn-primary btn-sm">Apply</a>
          </div>
        </div>
      </div>

      <!-- 3 -->
      <div class="mission-card reveal reveal-delay-2" data-sector="construction">
        <div class="mission-card__img">
          <img src="https://images.unsplash.com/photo-1574169208507-84376144848b?w=700&q=80" alt="Building school Rwanda" loading="lazy" />
          <div class="mission-card__sector">🏗️ Construction</div>
        </div>
        <div class="mission-card__body">
          <div class="mission-card__region">East Africa · Rwanda</div>
          <div class="mission-card__title">Rwanda School &amp; Clinic Construction</div>
          <div class="mission-card__desc">Join Rwandan construction teams to build and refurbish primary school classrooms, latrine blocks, and community health posts in Nyamata, Bugesera, and Musanze districts. Work is led by local construction supervisors — volunteers provide additional labour, funding leverage, and cross-cultural exchange.</div>
          <div class="mission-card__activities">
            <span class="mission-card__activity">Bricklaying</span>
            <span class="mission-card__activity">Plumbing &amp; Sanitation</span>
            <span class="mission-card__activity">Painting &amp; Finishing</span>
            <span class="mission-card__activity">Materials Logistics</span>
          </div>
          <div class="mission-card__footer">
            <div class="mission-card__meta"><span class="mission-card__meta-label">Duration</span><span class="mission-card__meta-val">2–3 Weeks</span></div>
            <div class="mission-card__meta" style="text-align:right;"><span class="mission-card__meta-label">From</span><span class="mission-card__meta-val">$1,250</span></div>
            <a href="#enquiry" class="btn btn-primary btn-sm">Apply</a>
          </div>
        </div>
      </div>

      <!-- 4 -->
      <div class="mission-card reveal" data-sector="conservation">
        <div class="mission-card__img">
          <img src="https://images.unsplash.com/photo-1516026672322-bc52d61a55d5?w=700&q=80" alt="Wildlife conservation Kenya" loading="lazy" />
          <div class="mission-card__sector">🌱 Conservation</div>
        </div>
        <div class="mission-card__body">
          <div class="mission-card__region">East Africa · Kenya</div>
          <div class="mission-card__title">Kenyan Wildlife Conservation &amp; Anti-Poaching</div>
          <div class="mission-card__desc">Work alongside Kenya Wildlife Service rangers and conservation NGOs in Tsavo, Laikipia, and the Maasai Mara ecosystem. Assist with wildlife census data collection, habitat restoration, community conservation education, and anti-poaching patrol support. Open to all — no specialist skills required for most placements.</div>
          <div class="mission-card__activities">
            <span class="mission-card__activity">Wildlife Monitoring</span>
            <span class="mission-card__activity">Habitat Restoration</span>
            <span class="mission-card__activity">Community Education</span>
            <span class="mission-card__activity">Data Collection</span>
          </div>
          <div class="mission-card__footer">
            <div class="mission-card__meta"><span class="mission-card__meta-label">Duration</span><span class="mission-card__meta-val">2–4 Weeks</span></div>
            <div class="mission-card__meta" style="text-align:right;"><span class="mission-card__meta-label">From</span><span class="mission-card__meta-val">$1,400</span></div>
            <a href="#enquiry" class="btn btn-primary btn-sm">Apply</a>
          </div>
        </div>
      </div>

      <!-- 5 -->
      <div class="mission-card reveal reveal-delay-1" data-sector="education">
        <div class="mission-card__img">
          <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?w=700&q=80" alt="Vocational Training Tanzania" loading="lazy" />
          <div class="mission-card__sector">📚 Education</div>
        </div>
        <div class="mission-card__body">
          <div class="mission-card__region">East Africa · Tanzania</div>
          <div class="mission-card__title">Tanzania Vocational Skills &amp; Women's Empowerment</div>
          <div class="mission-card__desc">Partner with a Tanzanian women's cooperative to deliver business skills training, financial literacy, ICT, tailoring, and entrepreneurship workshops to young women in Dodoma and Mwanza regions. Ideal for business professionals, ICT specialists, and anyone passionate about economic empowerment through practical skills.</div>
          <div class="mission-card__activities">
            <span class="mission-card__activity">Business Training</span>
            <span class="mission-card__activity">ICT Literacy</span>
            <span class="mission-card__activity">Entrepreneurship</span>
            <span class="mission-card__activity">Financial Skills</span>
          </div>
          <div class="mission-card__footer">
            <div class="mission-card__meta"><span class="mission-card__meta-label">Duration</span><span class="mission-card__meta-val">2–3 Weeks</span></div>
            <div class="mission-card__meta" style="text-align:right;"><span class="mission-card__meta-label">From</span><span class="mission-card__meta-val">$1,050</span></div>
            <a href="#enquiry" class="btn btn-primary btn-sm">Apply</a>
          </div>
        </div>
      </div>

      <!-- 6 -->
      <div class="mission-card reveal reveal-delay-2" data-sector="conservation">
        <div class="mission-card__img">
          <img src="https://images.unsplash.com/photo-1573843981267-be1999ff37cd?w=700&q=80" alt="Marine Conservation Zanzibar" loading="lazy" />
          <div class="mission-card__sector">🌱 Conservation</div>
        </div>
        <div class="mission-card__body">
          <div class="mission-card__region">Indian Ocean · Zanzibar &amp; Pemba</div>
          <div class="mission-card__title">Zanzibar Marine Conservation &amp; Coral Restoration</div>
          <div class="mission-card__desc">Dive or snorkel alongside marine biologists to survey coral reef health, remove invasive species, transplant coral fragments onto restoration frames, and monitor sea turtle nesting sites on Pemba Island. One of Africa's most unique and beautiful volunteer experiences — certification in PADI open water can be arranged on request.</div>
          <div class="mission-card__activities">
            <span class="mission-card__activity">Reef Surveys</span>
            <span class="mission-card__activity">Coral Transplanting</span>
            <span class="mission-card__activity">Turtle Monitoring</span>
            <span class="mission-card__activity">Plastic Clean-Ups</span>
          </div>
          <div class="mission-card__footer">
            <div class="mission-card__meta"><span class="mission-card__meta-label">Duration</span><span class="mission-card__meta-val">2–4 Weeks</span></div>
            <div class="mission-card__meta" style="text-align:right;"><span class="mission-card__meta-label">From</span><span class="mission-card__meta-val">$1,600</span></div>
            <a href="#enquiry" class="btn btn-primary btn-sm">Apply</a>
          </div>
        </div>
      </div>

      <!-- 7 -->
      <div class="mission-card reveal" data-sector="medical">
        <div class="mission-card__img">
          <img src="https://images.unsplash.com/photo-1526772662000-3f88f10405ff?w=700&q=80" alt="Mental Health South Africa" loading="lazy" />
          <div class="mission-card__sector">🏥 Medical</div>
        </div>
        <div class="mission-card__body">
          <div class="mission-card__region">Southern Africa · South Africa</div>
          <div class="mission-card__title">Cape Town Mental Health &amp; Social Work Mission</div>
          <div class="mission-card__desc">Partner with Cape Town NGOs working in the Cape Flats to deliver psychosocial support, addiction counselling, trauma therapy, and social services to communities affected by gang violence, poverty, and historical displacement. Open to qualified psychologists, social workers, counsellors, and final-year students under supervision.</div>
          <div class="mission-card__activities">
            <span class="mission-card__activity">Psychosocial Support</span>
            <span class="mission-card__activity">Group Therapy</span>
            <span class="mission-card__activity">Youth Mentoring</span>
            <span class="mission-card__activity">Case Management</span>
          </div>
          <div class="mission-card__footer">
            <div class="mission-card__meta"><span class="mission-card__meta-label">Duration</span><span class="mission-card__meta-val">2–3 Weeks</span></div>
            <div class="mission-card__meta" style="text-align:right;"><span class="mission-card__meta-label">From</span><span class="mission-card__meta-val">$1,200</span></div>
            <a href="#enquiry" class="btn btn-primary btn-sm">Apply</a>
          </div>
        </div>
      </div>

      <!-- 8 -->
      <div class="mission-card reveal reveal-delay-1" data-sector="construction">
        <div class="mission-card__img">
          <img src="https://images.unsplash.com/photo-1626197031507-c17099753214?w=700&q=80" alt="Water Project Ghana" loading="lazy" />
          <div class="mission-card__sector">🏗️ Construction</div>
        </div>
        <div class="mission-card__body">
          <div class="mission-card__region">West Africa · Ghana</div>
          <div class="mission-card__title">Ghana Clean Water &amp; Sanitation Projects</div>
          <div class="mission-card__desc">Work alongside Ghanaian engineers and local community teams to drill boreholes, install hand pumps, construct rainwater harvesting systems, and build improved sanitation facilities in communities across the Northern, Savannah, and Upper East regions — where clean water remains a daily challenge for thousands of people.</div>
          <div class="mission-card__activities">
            <span class="mission-card__activity">Borehole Installation</span>
            <span class="mission-card__activity">Latrine Construction</span>
            <span class="mission-card__activity">WASH Education</span>
            <span class="mission-card__activity">Community Mobilisation</span>
          </div>
          <div class="mission-card__footer">
            <div class="mission-card__meta"><span class="mission-card__meta-label">Duration</span><span class="mission-card__meta-val">2–3 Weeks</span></div>
            <div class="mission-card__meta" style="text-align:right;"><span class="mission-card__meta-label">From</span><span class="mission-card__meta-val">$1,100</span></div>
            <a href="#enquiry" class="btn btn-primary btn-sm">Apply</a>
          </div>
        </div>
      </div>

      <!-- 9 -->
      <div class="mission-card reveal reveal-delay-2" data-sector="education">
        <div class="mission-card__img">
          <img src="https://images.unsplash.com/photo-1510797215324-95aa89f43c33?w=700&q=80" alt="Youth Leadership Botswana" loading="lazy" />
          <div class="mission-card__sector">📚 Education</div>
        </div>
        <div class="mission-card__body">
          <div class="mission-card__region">Southern Africa · Botswana</div>
          <div class="mission-card__title">Botswana Youth Leadership &amp; Sports Development</div>
          <div class="mission-card__desc">Use the power of sport to develop leadership, teamwork, discipline, and aspiration in young people aged 10–18 in Maun, Francistown, and Gaborone peri-urban communities. Coaches, PE teachers, sports therapists, and mentors are especially welcome — but passion and commitment are the primary requirements.</div>
          <div class="mission-card__activities">
            <span class="mission-card__activity">Football Coaching</span>
            <span class="mission-card__activity">Life Skills Workshops</span>
            <span class="mission-card__activity">Mentoring Sessions</span>
            <span class="mission-card__activity">Tournament Organisation</span>
          </div>
          <div class="mission-card__footer">
            <div class="mission-card__meta"><span class="mission-card__meta-label">Duration</span><span class="mission-card__meta-val">2–3 Weeks</span></div>
            <div class="mission-card__meta" style="text-align:right;"><span class="mission-card__meta-label">From</span><span class="mission-card__meta-val">$1,000</span></div>
            <a href="#enquiry" class="btn btn-primary btn-sm">Apply</a>
          </div>
        </div>
      </div>

    </div><!-- /.mission-grid -->
  </div>
</section>

<!-- ════════════════════════════════════════════════
     IMPACT STATS
═══════════════════════════════════════════════════ -->
<section class="section section--dark">
  <div class="container">
    <div style="text-align:center;max-width:520px;margin:0 auto 3rem;">
      <span class="section-eyebrow reveal" style="color:var(--gold);">Our Collective Impact</span>
      <h2 class="section-title section-title--light reveal reveal-delay-1">The Numbers Behind<br>the <em>Change</em></h2>
    </div>
    <div class="impact-grid">
      <div class="impact-stat reveal">
        <div class="impact-stat__num" data-count="4200" data-suffix="+">4,200+</div>
        <div class="impact-stat__label">Volunteers placed since 2006</div>
      </div>
      <div class="impact-stat reveal reveal-delay-1">
        <div class="impact-stat__num" data-count="320" data-suffix="+">320+</div>
        <div class="impact-stat__label">Community projects completed</div>
      </div>
      <div class="impact-stat reveal reveal-delay-2">
        <div class="impact-stat__num" data-count="180000" data-suffix="+">180,000+</div>
        <div class="impact-stat__label">Beneficiaries reached directly</div>
      </div>
      <div class="impact-stat reveal reveal-delay-3">
        <div class="impact-stat__num" data-count="80" data-suffix="+">80+</div>
        <div class="impact-stat__label">Verified community partners</div>
      </div>
    </div>
  </div>
</section>

<!-- ════════════════════════════════════════════════
     THE VOLUNTEER EXPERIENCE
═══════════════════════════════════════════════════ -->
<section class="section section--cream">
  <div class="container">
    <div class="vol-split">
      <div>
        <span class="section-eyebrow reveal">Your Experience</span>
        <h2 class="section-title reveal reveal-delay-1">More Than Volunteering.<br>A <em>Life-Changing</em> Journey.</h2>
        <p class="section-subtitle reveal reveal-delay-2" style="margin-bottom:0;">Pier One volunteer missions are not just about the work — they are immersive, culturally rich experiences that will reshape how you see the world and yourself.</p>
        <div class="vol-checklist">
          <div class="vol-check-item reveal reveal-delay-2">
            <div class="vol-check-item__icon">🏡</div>
            <div><div class="vol-check-item__title">Homestay &amp; Community Living</div><div class="vol-check-item__desc">Where available, volunteers are housed with local host families — the fastest route to genuine cultural immersion and human connection.</div></div>
          </div>
          <div class="vol-check-item reveal reveal-delay-3">
            <div class="vol-check-item__icon">🌍</div>
            <div><div class="vol-check-item__title">Weekend Cultural Experiences</div><div class="vol-check-item__desc">Weekends are yours to explore — Pier One arranges optional safari day trips, market visits, language lessons, and cultural excursions.</div></div>
          </div>
          <div class="vol-check-item reveal reveal-delay-4">
            <div class="vol-check-item__icon">👩‍🏫</div>
            <div><div class="vol-check-item__title">Orientation &amp; Ongoing Support</div><div class="vol-check-item__desc">Full pre-departure briefing, a structured in-country orientation on arrival, a dedicated Pier One host throughout, and a debrief session before departure.</div></div>
          </div>
          <div class="vol-check-item reveal reveal-delay-5">
            <div class="vol-check-item__icon">📄</div>
            <div><div class="vol-check-item__title">Verified Certificate of Service</div><div class="vol-check-item__desc">All volunteers receive a Pier One Certificate of Service documenting their contribution — accepted by universities, employers, and professional bodies internationally.</div></div>
          </div>
        </div>
      </div>
      <div class="vol-img-wrap reveal reveal-delay-3">
        <img src="https://images.unsplash.com/photo-1551632436-cbf8dd35adfa?w=900&q=80" alt="Volunteer experience" loading="lazy" />
        <div class="vol-img-wrap__badge">
          <div class="vol-img-wrap__badge-num">98%</div>
          <div class="vol-img-wrap__badge-label">Would recommend Pier One volunteering to others</div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ════════════════════════════════════════════════
     SECTORS
═══════════════════════════════════════════════════ -->
<section class="section section--sand">
  <div class="container">
    <div style="text-align:center;max-width:520px;margin:0 auto 3rem;">
      <span class="section-eyebrow reveal">Mission Sectors</span>
      <h2 class="section-title reveal reveal-delay-1">Where Will Your<br><em>Skills</em> Create Impact?</h2>
    </div>
    <div class="sectors-grid">
      <div class="sector-card reveal"><div class="sector-card__icon">🏥</div><div class="sector-card__name">Healthcare &amp; Medicine</div><div class="sector-card__desc">Doctors, nurses, midwives, dentists, optometrists, and mental health professionals serving rural and peri-urban communities.</div></div>
      <div class="sector-card reveal reveal-delay-1"><div class="sector-card__icon">📚</div><div class="sector-card__name">Education &amp; Teaching</div><div class="sector-card__desc">Primary, secondary, vocational, and adult literacy — all levels and subjects, including STEM, arts, sports, and life skills.</div></div>
      <div class="sector-card reveal reveal-delay-2"><div class="sector-card__icon">🏗️</div><div class="sector-card__name">Construction &amp; Engineering</div><div class="sector-card__desc">Schools, clinics, bridges, water systems, and sanitation infrastructure built alongside local professional tradespeople.</div></div>
      <div class="sector-card reveal reveal-delay-3"><div class="sector-card__icon">🌱</div><div class="sector-card__name">Environment &amp; Conservation</div><div class="sector-card__desc">Wildlife monitoring, marine conservation, reforestation, sustainable agriculture, and climate adaptation projects.</div></div>
      <div class="sector-card reveal reveal-delay-4"><div class="sector-card__icon">💻</div><div class="sector-card__name">Technology &amp; ICT</div><div class="sector-card__desc">Digital literacy, coding bootcamps, software training, IT infrastructure setup, and tech entrepreneurship mentoring.</div></div>
      <div class="sector-card reveal reveal-delay-5"><div class="sector-card__icon">💰</div><div class="sector-card__name">Business &amp; Enterprise</div><div class="sector-card__desc">Business development, accounting, marketing, microfinance, and co-operative governance training for SMEs and entrepreneurs.</div></div>
      <div class="sector-card reveal"><div class="sector-card__icon">🎨</div><div class="sector-card__name">Arts, Culture &amp; Media</div><div class="sector-card__desc">Creative arts therapy, community film-making, music, photography, journalism training, and cultural preservation projects.</div></div>
      <div class="sector-card reveal reveal-delay-1"><div class="sector-card__icon">🤱</div><div class="sector-card__name">Child &amp; Family Welfare</div><div class="sector-card__desc">Orphan and vulnerable child support, early childhood development, parenting skills, and social protection programmes.</div></div>
    </div>
  </div>
</section>

<!-- ════════════════════════════════════════════════
     HOW IT WORKS
═══════════════════════════════════════════════════ -->
<section class="section section--dark">
  <div class="container">
    <div style="text-align:center;max-width:520px;margin:0 auto 3.5rem;">
      <span class="section-eyebrow reveal" style="color:var(--gold);">How It Works</span>
      <h2 class="section-title section-title--light reveal reveal-delay-1">From Application to<br><em>Mission Complete</em></h2>
    </div>
    <div class="process-steps">
      <div class="process-step reveal">
        <div class="process-step__num">01</div>
        <div class="process-step__icon">📝</div>
        <div class="process-step__title">Apply Online</div>
        <div class="process-step__desc" style="color:rgba(242,232,213,.65);">Submit your skills, availability, and mission preference. We match you to the best-fit placement.</div>
      </div>
      <div class="process-step reveal reveal-delay-1">
        <div class="process-step__num">02</div>
        <div class="process-step__icon">📞</div>
        <div class="process-step__title">Placement Call</div>
        <div class="process-step__desc" style="color:rgba(242,232,213,.65);">A Pier One mission coordinator contacts you to discuss your placement, expectations, and logistics.</div>
      </div>
      <div class="process-step reveal reveal-delay-2">
        <div class="process-step__num">03</div>
        <div class="process-step__icon">📋</div>
        <div class="process-step__title">Pre-Departure Prep</div>
        <div class="process-step__desc" style="color:rgba(242,232,213,.65);">Visa, vaccinations, insurance, pre-reading pack, and a virtual orientation with your host NGO team.</div>
      </div>
      <div class="process-step reveal reveal-delay-3">
        <div class="process-step__num">04</div>
        <div class="process-step__icon">✈️</div>
        <div class="process-step__title">Arrive &amp; Serve</div>
        <div class="process-step__desc" style="color:rgba(242,232,213,.65);">Full in-country orientation, community welcome, and your mission begins. Pier One supports you daily throughout.</div>
      </div>
      <div class="process-step reveal reveal-delay-4">
        <div class="process-step__num">05</div>
        <div class="process-step__icon">🏆</div>
        <div class="process-step__title">Impact &amp; Return</div>
        <div class="process-step__desc" style="color:rgba(242,232,213,.65);">Debrief, certificate, and your personal impact report. Most volunteers return for a second mission within 18 months.</div>
      </div>
    </div>
  </div>
</section>

<!-- ════════════════════════════════════════════════
     TESTIMONIALS
═══════════════════════════════════════════════════ -->
<section class="section section--cream">
  <div class="container">
    <div style="text-align:center;max-width:520px;margin:0 auto 3rem;">
      <span class="section-eyebrow reveal">Volunteer Stories</span>
      <h2 class="section-title reveal reveal-delay-1">Changed by Africa,<br><em>One Mission</em> at a Time</h2>
    </div>
    <div class="vol-quotes">
      <div class="vq-main reveal">
        <div class="vq-main__stars">★★★★★</div>
        <p class="vq-main__text">"I went to Uganda as a doctor expecting to give. What I didn't expect was how much I would receive — in perspective, in humility, in joy. The communities I served had so little materially and so much spiritually. Pier One made the entire experience seamless, safe, and deeply meaningful. I will go back."</p>
        <div class="vq-main__author">
          <!-- <div class="vq-main__avatar">👩🏾‍⚕️</div> -->
          <div>
            <div class="vq-main__name">Dr. Chidinma Eze</div>
            <div class="vq-main__role">Consultant Physician, Enugu · Uganda Medical Mission</div>
          </div>
        </div>
      </div>
      <div class="vq-secondary reveal reveal-delay-1">
        <div class="vq-small">
          <div class="vq-small__stars">★★★★★</div>
          <p class="vq-small__text">Teaching in rural Ghana was the hardest and most rewarding thing I've ever done. The children's hunger to learn left me speechless. Pier One's logistics were perfect — I arrived, settled straight in, and started teaching the next morning.</p>
          <div class="vq-small__author">
            <!-- <div class="vq-small__avatar">👨🏿‍🏫</div> -->
            <div><div class="vq-small__name">Kwame Boateng</div><div class="vq-small__role">Teacher, Accra · Ghana Teaching Mission</div></div>
          </div>
        </div>
        <div class="vq-small">
          <div class="vq-small__stars">★★★★★</div>
          <p class="vq-small__text">Watching the coral restoration frames we planted fill with new growth was extraordinary. The Zanzibar marine mission is unlike anything else — you volunteer in paradise, but the work is serious and the impact is real.</p>
          <div class="vq-small__author">
            <!-- <div class="vq-small__avatar">🤿</div> -->
            <div><div class="vq-small__name">Amara Diallo</div><div class="vq-small__role">Marine Biologist, Dakar · Zanzibar Conservation</div></div>
          </div>
        </div>
        <div class="vq-small">
          <div class="vq-small__stars">★★★★★</div>
          <p class="vq-small__text">Our entire church youth group volunteered on the Rwanda school construction project. The young people came back as adults. They worked, they learned, they cried, they laughed. The transformation was complete.</p>
          <div class="vq-small__author">
            <!-- <div class="vq-small__avatar">👨🏿‍💼</div> -->
            <div><div class="vq-small__name">Deacon Emmanuel Sarfo</div><div class="vq-small__role">Kumasi · Rwanda Construction Mission</div></div>
          </div>
        </div>
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
      <div>
        <span class="section-eyebrow reveal">Common Questions</span>
        <h2 class="section-title reveal reveal-delay-1">Frequently Asked<br><em>Questions</em></h2>
        <p class="section-subtitle reveal reveal-delay-2" style="margin-bottom:2.5rem;">Everything individuals, groups, and organisations need to know before embarking on a Pier One volunteer mission.</p>
        <div class="faq-list reveal reveal-delay-2">
          <div class="faq-item">
            <button class="faq-btn" onclick="toggleFaq(this)">Do I need professional skills to volunteer?<div class="faq-icon">+</div></button>
            <div class="faq-body"><div class="faq-content">Not necessarily. Many of our education, construction, conservation, and youth development missions welcome motivated individuals without formal qualifications. However, medical missions require verified professional credentials, and engineering projects require relevant technical competence. When you apply, we assess your skills honestly and place you where you'll make the most genuine contribution.</div></div>
          </div>
          <div class="faq-item">
            <button class="faq-btn" onclick="toggleFaq(this)">Is volunteer tourism ethical? How do I know my impact is real?<div class="faq-icon">+</div></button>
            <div class="faq-body"><div class="faq-content">We take this question very seriously. Every Pier One partner organisation is community-led and community-vetted. The host community defines the need and the scope of work — volunteers respond to that need. We do not send volunteers to projects that displace local workers. After your mission, you receive a full Impact Report documenting the concrete outputs of your placement. We are committed to responsible, dignified, and sustainable voluntourism.</div></div>
          </div>
          <div class="faq-item">
            <button class="faq-btn" onclick="toggleFaq(this)">Can families and young people (under 18) volunteer?<div class="faq-icon">+</div></button>
            <div class="faq-body"><div class="faq-content">Yes — we have family-friendly missions designed for parents and children aged 14 and above to serve together. Volunteers aged 16–17 are accepted on certain programmes with written parental consent and must be accompanied by a responsible adult. Under-16 participation is assessed case by case. Contact us to discuss family placement options.</div></div>
          </div>
          <div class="faq-item">
            <button class="faq-btn" onclick="toggleFaq(this)">What does the programme fee cover?<div class="faq-icon">+</div></button>
            <div class="faq-body"><div class="faq-content">Programme fees cover: all in-country accommodation (homestay or volunteer house), three meals daily, airport transfers, orientation and training, Pier One host support throughout, project materials contribution, Certificate of Service, and post-mission Impact Report. International flights and personal travel insurance are quoted separately. A portion of every fee goes directly to the host community organisation.</div></div>
          </div>
          <div class="faq-item">
            <button class="faq-btn" onclick="toggleFaq(this)">Can corporate groups volunteer as a team?<div class="faq-icon">+</div></button>
            <div class="faq-body"><div class="faq-content">Absolutely — corporate group missions are one of our fastest-growing programmes. Companies send teams of 10–100+ employees on structured mission trips that combine genuine community impact with powerful team-building, cultural intelligence development, and CSR reporting outputs. We tailor the mission to align with your company's ESG priorities and provide full post-mission documentation for CSR reports and stakeholder communication.</div></div>
          </div>
          <div class="faq-item">
            <button class="faq-btn" onclick="toggleFaq(this)">Is it safe to volunteer in Africa?<div class="faq-icon">+</div></button>
            <div class="faq-body"><div class="faq-content">All Pier One volunteer destinations are carefully selected for safety and security. We monitor conditions continuously and have rigorous protocols in place. Every volunteer receives a full security briefing, 24/7 emergency contact support, comprehensive travel insurance, and the reassurance of a Pier One host on the ground throughout the mission. We have an unblemished 18-year safety record across all volunteer programmes.</div></div>
          </div>
        </div>
      </div>
      <div class="enquiry-box reveal reveal-delay-3">
        <div class="enquiry-box__title">Apply for a Mission</div>
        <p class="enquiry-box__sub">Tell us about yourself and we'll match you with the right mission. A Pier One coordinator will respond within 48 hours.</p>
        <form onsubmit="return false;">
          <div class="enquiry-box__field">
            <label class="enquiry-box__label">Full Name</label>
            <input class="enquiry-box__input" type="text" placeholder="Your full name" />
          </div>
          <div class="enquiry-box__field">
            <label class="enquiry-box__label">Email Address</label>
            <input class="enquiry-box__input" type="email" placeholder="your@email.com" />
          </div>
          <div class="enquiry-box__field">
            <label class="enquiry-box__label">Phone / WhatsApp</label>
            <input class="enquiry-box__input" type="tel" placeholder="+233 24 000 0000" />
          </div>
          <div class="enquiry-box__field">
            <label class="enquiry-box__label">Professional Background</label>
            <select class="enquiry-box__select">
              <option value="">Your primary skill set…</option>
              <option>Medical / Healthcare Professional</option>
              <option>Teacher / Educator</option>
              <option>Engineer / Construction</option>
              <option>Business / Finance Professional</option>
              <option>IT / Technology</option>
              <option>Environmental / Conservation Science</option>
              <option>Social Worker / Counsellor</option>
              <option>Arts, Media &amp; Communications</option>
              <option>Student / Gap Year</option>
              <option>Other / General Volunteer</option>
            </select>
          </div>
          <div class="enquiry-box__field">
            <label class="enquiry-box__label">Preferred Mission Sector</label>
            <select class="enquiry-box__select">
              <option value="">Select a sector…</option>
              <option>Education &amp; Teaching</option>
              <option>Medical Outreach</option>
              <option>Construction &amp; Engineering</option>
              <option>Conservation &amp; Environment</option>
              <option>Business &amp; Enterprise Training</option>
              <option>Child &amp; Family Welfare</option>
              <option>Advise me based on my skills</option>
            </select>
          </div>
          <div style="display:grid;grid-template-columns:1fr 1fr;gap:.75rem;">
            <div class="enquiry-box__field">
              <label class="enquiry-box__label">Group Type</label>
              <select class="enquiry-box__select">
                <option>Individual</option>
                <option>Couple / Friends</option>
                <option>Family</option>
                <option>Church / Faith Group</option>
                <option>Corporate Team</option>
                <option>University Group</option>
              </select>
            </div>
            <div class="enquiry-box__field">
              <label class="enquiry-box__label">Availability</label>
              <select class="enquiry-box__select">
                <option>1 Week</option>
                <option>2 Weeks</option>
                <option>3 Weeks</option>
                <option>4 Weeks</option>
                <option>Flexible</option>
              </select>
            </div>
          </div>
          <div class="enquiry-box__field">
            <label class="enquiry-box__label">Tell Us About Yourself</label>
            <textarea class="enquiry-box__textarea" placeholder="Your experience, motivation, any specific communities or countries you'd like to serve in…"></textarea>
          </div>
          <button type="submit" class="btn btn-primary" style="width:100%;justify-content:center;">
            Submit Application
            <svg class="arrow-icon" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
          </button>
          <p class="enquiry-box__note">Free to apply · No commitment · We respond within 48hrs<br><a href="#">Privacy Policy</a> · Your data is never shared.</p>
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
      <h2 class="cta-band__title">Africa Needs Your<br><em>Skills, Not Just Your Sympathy.</em></h2>
      <p class="cta-band__sub">Stop scrolling. Start serving. Your mission is waiting — and the community that will host you is already preparing for your arrival.</p>
      <div class="cta-band__actions">
        <a href="#enquiry" class="btn btn-primary btn-lg">Apply Now<svg class="arrow-icon" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg></a>
        <a href="mailto:info@pieronetours.com" class="btn btn-secondary btn-lg">Email a Coordinator</a>
      </div>
    </div>
  </div>
</section>

<script>
function filterMission(btn, sector) {
  document.querySelectorAll('.sector-tab').forEach(b => b.classList.remove('active'));
  btn.classList.add('active');
  document.querySelectorAll('#missionGrid .mission-card').forEach(card => {
    card.style.display = (sector === 'all' || card.dataset.sector === sector) ? '' : 'none';
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