<?php include '../includes/header.php'; ?>

<style>
/* ═══════════════════════════════════════════════════════
   RELIGIOUS TOURS — tours/religious.php
════════════════════════════════════════════════════════ */

.tour-hero {
  position: relative; height: 85vh; min-height: 580px;
  display: flex; align-items: flex-end; overflow: hidden;
}
.tour-hero__bg {
  position: absolute; inset: 0; width: 100%; height: 100%;
  object-fit: cover; transition: transform 10s ease;
}
.tour-hero:hover .tour-hero__bg { transform: scale(1.03); }
.tour-hero__overlay {
  position: absolute; inset: 0;
  background:
    linear-gradient(to right, rgba(28,16,8,.92) 0%, rgba(28,16,8,.55) 55%, rgba(28,16,8,.18) 100%),
    linear-gradient(to top, rgba(28,16,8,.88) 0%, transparent 55%);
}
.tour-hero__kente {
  position: absolute; bottom: 0; left: 0; right: 0; height: 5px;
  background: repeating-linear-gradient(90deg,#C8913A 0,#C8913A 40px,#3D2B1F 40px,#3D2B1F 80px,#C4784A 80px,#C4784A 120px,#2D4A3E 120px,#2D4A3E 160px,#8B6020 160px,#8B6020 200px);
  z-index: 3;
}
.tour-hero__content {
  position: relative; z-index: 2; max-width: 1400px; width: 100%;
  margin: 0 auto; padding: 3.5rem clamp(1rem,4vw,3rem);
}
.tour-hero__badge {
  display: inline-flex; align-items: center; gap: .5rem;
  background: rgba(200,145,58,.15); backdrop-filter: blur(8px);
  border: 1px solid rgba(200,145,58,.4); border-radius: 40px;
  padding: .35rem 1.1rem; color: var(--gold-light);
  font-size: .72rem; font-weight: 600; letter-spacing: .16em;
  text-transform: uppercase; margin-bottom: 1.25rem;
}
.tour-hero__title {
  font-family: 'Cormorant Garamond', serif;
  font-size: clamp(1.6rem, 6.5vw, 4.2rem); font-weight: 600;
  color: var(--white); line-height: 1.06; letter-spacing: -.015em;
  margin-bottom: 1.25rem; max-width: 15ch;
}
.tour-hero__title em { font-style: italic; color: var(--gold-light); }
.tour-hero__subtitle {
  font-size: clamp(.9rem, 1.6vw, 1.05rem); color: rgba(255,255,255,.72);
  line-height: 1.78; max-width: 46ch; margin-bottom: 2.25rem;
}
.tour-hero__meta {
  display: flex; align-items: center; gap: 2rem; flex-wrap: wrap;
  color: rgba(255,255,255,.62); font-size: .8rem; margin-bottom: 2rem;
}
.tour-hero__meta-item { display: flex; align-items: center; gap: .4rem; }
.tour-hero__meta-item svg { width: 14px; height: 14px; color: var(--gold); }

/* ── Highlight Strip ─────────────────────────────── */
.highlight-strip {
  display: grid; grid-template-columns: repeat(5,1fr); gap: 0;
  border: 1px solid var(--border); border-radius: var(--radius-lg); overflow: hidden;
}
.highlight-strip__item {
  padding: 1.9rem 1.25rem; text-align: center;
  border-right: 1px solid var(--border);
}
.highlight-strip__item:last-child { border-right: none; }
.highlight-strip__icon { font-size: 1.9rem; margin-bottom: .65rem; }
.highlight-strip__label {
  font-family: 'Cormorant Garamond', serif; font-size: 1rem;
  font-weight: 600; color: var(--earth); margin-bottom: .25rem;
}
.highlight-strip__desc { font-size: .74rem; color: var(--text-soft); line-height: 1.55; }

/* ── Faith Intro Split ───────────────────────────── */
.faith-split {
  display: grid; grid-template-columns: 1fr 1fr; gap: 4rem; align-items: center;
}
.faith-split__img { position: relative; border-radius: var(--radius-xl); overflow: hidden; }
.faith-split__img img { width: 100%; aspect-ratio: 4/5; object-fit: cover; display: block; }
.faith-split__img-badge {
  position: absolute; bottom: 2rem; right: -1.5rem;
  background: var(--white); border-radius: var(--radius-lg);
  padding: 1.4rem 1.75rem; box-shadow: var(--shadow-lg); min-width: 195px;
}
.faith-split__img-badge-num {
  font-family: 'Cormorant Garamond', serif; font-size: 2.6rem;
  font-weight: 700; color: var(--gold); line-height: 1;
}
.faith-split__img-badge-label { font-size: .78rem; color: var(--text-soft); margin-top: .28rem; line-height: 1.4; }
.faith-pillars { display: flex; flex-direction: column; gap: 1.5rem; margin-top: 2.5rem; }
.faith-pillar { display: flex; gap: 1.25rem; align-items: flex-start; }
.faith-pillar__icon {
  width: 50px; height: 50px;
  background: linear-gradient(135deg, var(--gold-pale), var(--sand));
  border-radius: var(--radius); display: flex; align-items: center;
  justify-content: center; font-size: 1.35rem; flex-shrink: 0; border: 1px solid var(--border);
}
.faith-pillar__title {
  font-family: 'Cormorant Garamond', serif; font-size: 1.05rem;
  font-weight: 600; color: var(--earth); margin-bottom: .3rem;
}
.faith-pillar__desc { font-size: .82rem; color: var(--text-soft); line-height: 1.7; }

/* ── Faith Traditions Tabs ───────────────────────── */
.faith-tabs {
  display: flex; gap: .5rem; flex-wrap: wrap; margin-bottom: 2.5rem; justify-content: center;
}
.faith-tab {
  display: inline-flex; align-items: center; gap: .4rem;
  padding: .65rem 1.4rem; border-radius: 40px;
  font-size: .82rem; font-weight: 500;
  border: 1.5px solid var(--border); color: var(--text-mid);
  background: var(--white); cursor: pointer; transition: all var(--trans-fast);
}
.faith-tab:hover, .faith-tab.active {
  background: var(--gold); border-color: var(--gold);
  color: var(--white); box-shadow: 0 4px 16px rgba(200,145,58,.35);
}

/* ── Pilgrimage Cards ────────────────────────────── */
.pilgrim-grid { display: grid; grid-template-columns: repeat(3,1fr); gap: 1.5rem; }
.pilgrim-card {
  background: var(--white); border-radius: var(--radius-lg);
  border: 1px solid var(--border-soft); overflow: hidden;
  display: flex; flex-direction: column;
  transition: transform var(--trans), box-shadow var(--trans), border-color var(--trans-fast);
}
.pilgrim-card:hover { transform: translateY(-6px); box-shadow: var(--shadow-lg); border-color: var(--gold); }
.pilgrim-card__img { aspect-ratio: 16/9; overflow: hidden; position: relative; }
.pilgrim-card__img img { width: 100%; height: 100%; object-fit: cover; transition: transform var(--trans-slow); }
.pilgrim-card:hover .pilgrim-card__img img { transform: scale(1.06); }
.pilgrim-card__faith {
  position: absolute; top: 1rem; left: 1rem;
  background: rgba(28,16,8,.75); backdrop-filter: blur(8px);
  border: 1px solid rgba(200,145,58,.35); border-radius: 40px;
  color: var(--gold-light); font-size: .66rem; font-weight: 600;
  letter-spacing: .1em; text-transform: uppercase; padding: .28rem .85rem;
}
.pilgrim-card__body { padding: 1.5rem; display: flex; flex-direction: column; flex: 1; }
.pilgrim-card__region {
  font-size: .68rem; font-weight: 600; color: var(--gold);
  letter-spacing: .12em; text-transform: uppercase; margin-bottom: .4rem;
}
.pilgrim-card__title {
  font-family: 'Cormorant Garamond', serif; font-size: 1.25rem;
  font-weight: 600; color: var(--earth); line-height: 1.25; margin-bottom: .55rem;
}
.pilgrim-card__desc {
  font-size: .81rem; color: var(--text-soft); line-height: 1.7; margin-bottom: 1.1rem; flex: 1;
}
.pilgrim-card__sites {
  display: flex; flex-wrap: wrap; gap: .35rem; margin-bottom: 1.25rem;
}
.pilgrim-card__site {
  font-size: .67rem; font-weight: 500; background: var(--gold-pale);
  color: var(--gold-dark); border: 1px solid var(--border);
  border-radius: 40px; padding: .2rem .7rem;
}
.pilgrim-card__footer {
  display: flex; align-items: center; justify-content: space-between;
  border-top: 1px solid var(--border-soft); padding-top: 1.1rem;
}
.pilgrim-card__meta { display: flex; flex-direction: column; gap: .15rem; }
.pilgrim-card__meta-label { font-size: .64rem; color: var(--text-muted); text-transform: uppercase; letter-spacing: .06em; }
.pilgrim-card__meta-val {
  font-family: 'Cormorant Garamond', serif; font-size: 1.35rem;
  font-weight: 700; color: var(--earth);
}

/* ── Sacred Sites Map Strip ──────────────────────── */
.sacred-sites { display: grid; grid-template-columns: repeat(4,1fr); gap: 1rem; }
.sacred-site {
  border-radius: var(--radius-lg); overflow: hidden;
  position: relative; aspect-ratio: 3/4; display: block;
  transition: transform var(--trans);
}
.sacred-site:hover { transform: translateY(-5px); }
.sacred-site img { width: 100%; height: 100%; object-fit: cover; transition: transform var(--trans-slow); }
.sacred-site:hover img { transform: scale(1.06); }
.sacred-site__overlay {
  position: absolute; inset: 0;
  background: linear-gradient(to top, rgba(28,16,8,.88) 0%, rgba(28,16,8,.2) 55%, transparent 100%);
}
.sacred-site__body { position: absolute; bottom: 0; left: 0; right: 0; padding: 1.4rem; }
.sacred-site__faith {
  font-size: .65rem; font-weight: 600; color: var(--gold-light);
  letter-spacing: .12em; text-transform: uppercase; margin-bottom: .3rem;
}
.sacred-site__name {
  font-family: 'Cormorant Garamond', serif; font-size: 1.2rem;
  font-weight: 600; color: var(--white); line-height: 1.2; margin-bottom: .25rem;
}
.sacred-site__country { font-size: .73rem; color: rgba(255,255,255,.6); }

/* ── Group Leader Section ────────────────────────── */
.leader-grid { display: grid; grid-template-columns: repeat(3,1fr); gap: 1.5rem; }
.leader-card {
  background: var(--white); border: 1px solid var(--border-soft);
  border-radius: var(--radius-lg); padding: 2rem; text-align: center;
  transition: transform var(--trans), box-shadow var(--trans), border-color var(--trans-fast);
}
.leader-card:hover { transform: translateY(-5px); box-shadow: var(--shadow-md); border-color: var(--gold); }
.leader-card__icon {
  width: 64px; height: 64px; border-radius: 50%;
  background: linear-gradient(135deg, var(--gold-pale), var(--sand));
  border: 1px solid var(--border); display: flex; align-items: center;
  justify-content: center; font-size: 1.6rem; margin: 0 auto 1.25rem;
}
.leader-card__title {
  font-family: 'Cormorant Garamond', serif; font-size: 1.1rem;
  font-weight: 600; color: var(--earth); margin-bottom: .4rem;
}
.leader-card__desc { font-size: .81rem; color: var(--text-soft); line-height: 1.7; }

/* ── Testimonials ────────────────────────────────── */
.relig-testimonials { display: grid; grid-template-columns: repeat(3,1fr); gap: 1.5rem; }
.relig-quote {
  background: var(--white); border-radius: var(--radius-lg);
  border: 1px solid var(--border-soft); padding: 2rem;
  transition: box-shadow var(--trans);
}
.relig-quote:hover { box-shadow: var(--shadow-md); }
.relig-quote__stars { color: var(--gold); font-size: .85rem; margin-bottom: .75rem; }
.relig-quote__mark {
  font-family: 'Cormorant Garamond', serif; font-size: 3.2rem;
  color: var(--gold); line-height: .8; margin-bottom: .5rem; font-style: italic;
}
.relig-quote__text { font-size: .86rem; color: var(--text-mid); line-height: 1.8; margin-bottom: 1.5rem; }
.relig-quote__author { display: flex; align-items: center; gap: .75rem; }
.relig-quote__avatar {
  width: 44px; height: 44px; border-radius: 50%;
  background: var(--gold-pale); border: 2px solid var(--border);
  display: flex; align-items: center; justify-content: center; font-size: 1.2rem;
}
.relig-quote__name { font-weight: 600; font-size: .84rem; color: var(--earth); }
.relig-quote__role { font-size: .74rem; color: var(--text-muted); }

/* ── Enquiry Layout ──────────────────────────────── */
.enquiry-layout {
  display: grid; grid-template-columns: 1fr 380px; gap: 3rem; align-items: start;
}
.enquiry-box {
  background: linear-gradient(145deg, var(--earth), #5C3D2E);
  border-radius: var(--radius-xl); padding: 2.6rem;
  position: sticky; top: calc(var(--topbar-h) + var(--nav-h) + 1.5rem);
}
.enquiry-box__title {
  font-family: 'Cormorant Garamond', serif; font-size: 1.55rem;
  font-weight: 600; color: var(--cream); margin-bottom: .4rem;
}
.enquiry-box__sub { font-size: .82rem; color: rgba(242,232,213,.62); line-height: 1.65; margin-bottom: 2rem; }
.enquiry-box__field { display: flex; flex-direction: column; gap: .3rem; margin-bottom: 1rem; }
.enquiry-box__label { font-size: .68rem; font-weight: 600; color: var(--gold); letter-spacing: .1em; text-transform: uppercase; }
.enquiry-box__input, .enquiry-box__select, .enquiry-box__textarea {
  font-family: 'DM Sans', sans-serif; font-size: .85rem; padding: .8rem 1rem;
  border-radius: var(--radius); border: 1.5px solid rgba(200,145,58,.22);
  background: rgba(255,255,255,.07); color: var(--cream); outline: none; width: 100%;
  transition: border-color var(--trans-fast);
}
.enquiry-box__input::placeholder, .enquiry-box__textarea::placeholder { color: rgba(242,232,213,.32); }
.enquiry-box__input:focus, .enquiry-box__select:focus, .enquiry-box__textarea:focus { border-color: var(--gold); }
.enquiry-box__select { -webkit-appearance: none; }
.enquiry-box__textarea { resize: vertical; min-height: 80px; }
.enquiry-row { display: grid; grid-template-columns: 1fr 1fr; gap: .75rem; }
.enquiry-box__note { font-size: .72rem; color: rgba(242,232,213,.45); text-align: center; margin-top: 1rem; line-height: 1.6; }
.enquiry-box__note a { color: var(--gold-light); }

/* ── FAQ ─────────────────────────────────────────── */
.faq-list { display: flex; flex-direction: column; }
.faq-item { border-bottom: 1px solid var(--border-soft); }
.faq-item:first-child { border-top: 1px solid var(--border-soft); }
.faq-btn {
  width: 100%; padding: 1.2rem 0; display: flex; align-items: center;
  justify-content: space-between; gap: 1rem; background: none; border: none;
  font-family: 'DM Sans', sans-serif; font-size: .9rem; font-weight: 500;
  color: var(--earth); text-align: left; cursor: pointer; transition: color var(--trans-fast);
}
.faq-btn:hover, .faq-btn.open { color: var(--gold); }
.faq-icon {
  width: 22px; height: 22px; border: 1.5px solid var(--border); border-radius: 50%;
  display: flex; align-items: center; justify-content: center;
  font-size: .75rem; color: var(--text-soft); flex-shrink: 0;
  transition: transform var(--trans-fast), background var(--trans-fast), border-color var(--trans-fast), color var(--trans-fast);
}
.faq-btn.open .faq-icon { transform: rotate(45deg); background: var(--gold); border-color: var(--gold); color: var(--white); }
.faq-body { max-height: 0; overflow: hidden; transition: max-height .45s cubic-bezier(.4,0,.2,1); }
.faq-body.open { max-height: 400px; }
.faq-content { padding: 0 0 1.2rem; font-size: .85rem; color: var(--text-soft); line-height: 1.8; }

/* ── CTA Band ────────────────────────────────────── */
.cta-band {
  background: linear-gradient(135deg, var(--earth), #5C3D2E);
  border-radius: var(--radius-xl); padding: clamp(2.5rem,5vw,4.5rem);
  text-align: center; position: relative; overflow: hidden;
}
.cta-band::before {
  content: ''; position: absolute; top: -80px; right: -80px;
  width: 300px; height: 300px; background: var(--gold); border-radius: 50%; opacity: .05;
}
.cta-band__title {
  font-family: 'Cormorant Garamond', serif; font-size: clamp(1.8rem,4vw,3rem);
  font-weight: 600; color: var(--cream); margin-bottom: .75rem; position: relative; z-index: 1;
}
.cta-band__title em { font-style: italic; color: var(--gold-light); }
.cta-band__sub {
  font-size: .95rem; color: rgba(242,232,213,.68); max-width: 44ch;
  margin: 0 auto 2rem; line-height: 1.75; position: relative; z-index: 1;
}
.cta-band__actions { display: flex; gap: 1rem; justify-content: center; flex-wrap: wrap; position: relative; z-index: 1; }

/* ── Responsive ──────────────────────────────────── */
@media (max-width: 1100px) {
  .pilgrim-grid { grid-template-columns: 1fr 1fr; }
  .sacred-sites { grid-template-columns: repeat(2,1fr); }
  .enquiry-layout { grid-template-columns: 1fr; }
  .enquiry-box { position: static; }
  .leader-grid { grid-template-columns: 1fr 1fr; }
  .relig-testimonials { grid-template-columns: 1fr 1fr; }
  .highlight-strip { grid-template-columns: repeat(3,1fr); }
  .highlight-strip__item:last-child, .highlight-strip__item:nth-child(3) { border-right: none; }
}
@media (max-width: 900px) {
  .faith-split { grid-template-columns: 1fr; gap: 2rem; }
  .faith-split__img-badge { right: 1rem; }
  .relig-testimonials { grid-template-columns: 1fr; }
}
@media (max-width: 640px) {
  .pilgrim-grid { grid-template-columns: 1fr; }
  .sacred-sites { grid-template-columns: 1fr 1fr; }
  .leader-grid { grid-template-columns: 1fr; }
  .highlight-strip { grid-template-columns: repeat(2,1fr); }
}
</style>

<!-- HERO -->
<section class="tour-hero">
  <img class="tour-hero__bg"
    src="https://images.unsplash.com/photo-1544967082-d9d25d867d66?w=1920&q=80"
    alt="Jerusalem at golden hour" loading="eager" />
  <div class="tour-hero__overlay"></div>
  <div class="tour-hero__kente"></div>
  <div class="tour-hero__content">
    <nav class="breadcrumb" style="margin-bottom:1rem;">
      <a href="<?= URLROOT ?>">Home</a><span class="breadcrumb__sep">›</span>
      <a href="#">Tours</a><span class="breadcrumb__sep">›</span>
      <span class="breadcrumb__current">Religious Tours</span>
    </nav>
    <div class="tour-hero__badge">🕊️ Religious Tours</div>
    <h1 class="tour-hero__title">Journeys That<br>Nourish the <em>Soul</em></h1>
    <p class="tour-hero__subtitle">Pier One designs spiritually enriching pilgrimages and faith-based travel to the world's most sacred sites — from the Holy Land and Mecca's surroundings to Ethiopia's ancient churches, the Vatican, and West Africa's sacred groves. </p>
    <div class="tour-hero__meta">
      <span class="tour-hero__meta-item">
        <svg fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/></svg>
        Holy Land · Vatican · Mecca Region · Ethiopia &amp; Beyond
      </span>
      <span class="tour-hero__meta-item">
        <svg fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
        All Faith Traditions · All Group Sizes
      </span>
      <span class="tour-hero__meta-item">
        <svg fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path stroke-linecap="round" d="M12 6v6l4 2"/></svg>
        7 – 21 Day Pilgrimages
      </span>
    </div>
    <div style="display:flex;gap:1rem;flex-wrap:wrap;">
      <a href="#pilgrimages" class="btn btn-primary btn-lg">
        Explore Pilgrimages
        <svg class="arrow-icon" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
      </a>
      <a href="#enquiry" class="btn btn-secondary btn-lg">Plan With Us</a>
    </div>
  </div>
</section>

<!-- HIGHLIGHT STRIP -->
<section class="section--sand" style="padding:0;">
  <div class="container">
    <div class="highlight-strip">
      <div class="highlight-strip__item reveal"><div class="highlight-strip__icon">⛪</div><div class="highlight-strip__label">All Faith Traditions</div><div class="highlight-strip__desc">Christian, Muslim, Jewish &amp; traditional African spiritual tours</div></div>
      <div class="highlight-strip__item reveal reveal-delay-1"><div class="highlight-strip__icon">🧑‍🤝‍🧑</div><div class="highlight-strip__label">Church Group Specialists</div><div class="highlight-strip__desc">We've moved thousands of congregants safely and spiritually</div></div>
      <div class="highlight-strip__item reveal reveal-delay-2"><div class="highlight-strip__icon">📿</div><div class="highlight-strip__label">Spiritually Curated</div><div class="highlight-strip__desc">Devotional programmes, prayer schedules &amp; clergy-led reflections</div></div>
      <div class="highlight-strip__item reveal reveal-delay-3"><div class="highlight-strip__icon">🛡️</div><div class="highlight-strip__label">Full Duty of Care</div><div class="highlight-strip__desc">Visas, insurance, health, and 24/7 emergency support all handled</div></div>
      <div class="highlight-strip__item reveal reveal-delay-4"><div class="highlight-strip__icon">✈️</div><div class="highlight-strip__label">End-to-End Logistics</div><div class="highlight-strip__desc">Flights, hotels near holy sites, coaches &amp; airport transfers included</div></div>
    </div>
  </div>
</section>

<!-- INTRO SPLIT -->
<section class="section section--cream">
  <div class="container">
    <div class="faith-split">
      <div class="faith-split__img reveal">
        <img src="https://images.unsplash.com/photo-1548013146-72479768bada?w=900&q=80" alt="Pilgrims at sacred site" loading="lazy" />
        <div class="faith-split__img-badge">
          <div class="faith-split__img-badge-num">3,500+</div>
          <div class="faith-split__img-badge-label">Pilgrims journeyed<br>safely with Pier One</div>
        </div>
      </div>
      <div>
        <span class="section-eyebrow reveal">Our Approach</span>
        <h2 class="section-title reveal reveal-delay-1">Faith Is at the<br>Heart of Every<br><em>Journey We Plan</em></h2>
        <p class="section-subtitle reveal reveal-delay-2" style="margin-bottom:0;">A pilgrimage is unlike any other journey. It demands a level of care, reverence, and logistical precision that ordinary tour operators cannot provide. Pier One has spent 18 years earning the trust of churches, mosques, fellowships, and faith communities across West Africa — because we understand what is sacred.</p>
        <div class="faith-pillars">
          <div class="faith-pillar reveal reveal-delay-2">
            <div class="faith-pillar__icon">🤲</div>
            <div>
              <div class="faith-pillar__title">Clergy &amp; Faith Leader Coordination</div>
              <div class="faith-pillar__desc">We work hand-in-hand with your pastor, imam, bishop, or rabbi to build a programme that integrates your devotional schedule, worship requirements, and spiritual goals.</div>
            </div>
          </div>
          <div class="faith-pillar reveal reveal-delay-3">
            <div class="faith-pillar__icon">🏨</div>
            <div>
              <div class="faith-pillar__title">Accommodation Near Sacred Sites</div>
              <div class="faith-pillar__desc">We prioritise hotels within walking distance of pilgrimage sites — so your group arrives at morning prayers rested and close to the places that matter most.</div>
            </div>
          </div>
          <div class="faith-pillar reveal reveal-delay-4">
            <div class="faith-pillar__icon">🌍</div>
            <div>
              <div class="faith-pillar__title">Multi-Faith &amp; Interfaith Experience</div>
              <div class="faith-pillar__desc">Whether your group is Pentecostal, Catholic, Anglican, Methodist, Muslim, or Jewish — we design every detail around the specific practices and priorities of your tradition.</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- PILGRIMAGE PROGRAMMES -->
<section class="section section--sand" id="pilgrimages">
  <div class="container">
    <div style="text-align:center;max-width:560px;margin:0 auto 2.5rem;">
      <span class="section-eyebrow reveal">Our Programmes</span>
      <h2 class="section-title reveal reveal-delay-1">Pilgrimages for Every<br><em>Faith &amp; Tradition</em></h2>
      <p class="section-subtitle reveal reveal-delay-2" style="margin:0 auto;">Each programme is spiritually anchored, expertly organised, and thoughtfully paced so your group arrives at each holy site with presence — not exhaustion.</p>
    </div>

    <div class="faith-tabs reveal reveal-delay-2">
      <button class="faith-tab active" onclick="filterPilgrim(this,'all')">All Traditions</button>
      <button class="faith-tab" onclick="filterPilgrim(this,'christian')">✝️ Christian</button>
      <button class="faith-tab" onclick="filterPilgrim(this,'muslim')">☪️ Muslim</button>
      <button class="faith-tab" onclick="filterPilgrim(this,'multiF')">🕊️ Interfaith</button>
    </div>

    <div class="pilgrim-grid" id="pilgrimGrid">

      <!-- 1: Holy Land -->
      <div class="pilgrim-card reveal" data-faith="christian">
        <div class="pilgrim-card__img">
          <img src="https://images.unsplash.com/photo-1544967082-d9d25d867d66?w=700&q=80" alt="Jerusalem" loading="lazy" />
          <div class="pilgrim-card__faith">✝️ Christian</div>
        </div>
        <div class="pilgrim-card__body">
          <div class="pilgrim-card__region">Middle East · Israel &amp; Palestine</div>
          <div class="pilgrim-card__title">The Holy Land Pilgrimage</div>
          <p class="pilgrim-card__desc">Walk where Jesus walked — the Sea of Galilee, Mount of Beatitudes, Bethlehem's Nativity Church, Jerusalem's Via Dolorosa, the Church of the Holy Sepulchre, and the Garden of Gethsemane. A spiritually complete New Testament journey curated for African Christian groups.</p>
          <div class="pilgrim-card__sites">
            <span class="pilgrim-card__site">Jerusalem</span>
            <span class="pilgrim-card__site">Bethlehem</span>
            <span class="pilgrim-card__site">Galilee</span>
            <span class="pilgrim-card__site">Nazareth</span>
            <span class="pilgrim-card__site">Dead Sea</span>
          </div>
          <div class="pilgrim-card__footer">
            <div class="pilgrim-card__meta"><span class="pilgrim-card__meta-label">Duration</span><span class="pilgrim-card__meta-val">10 Days</span></div>
            <div class="pilgrim-card__meta" style="text-align:right;"><span class="pilgrim-card__meta-label">From</span><span class="pilgrim-card__meta-val">$2,800</span></div>
            <a href="#enquiry" class="btn btn-primary btn-sm">Enquire</a>
          </div>
        </div>
      </div>

      <!-- 2: Rome & Vatican -->
      <div class="pilgrim-card reveal reveal-delay-1" data-faith="christian">
        <div class="pilgrim-card__img">
          <img src="https://images.unsplash.com/photo-1555992336-03a23c7b20ee?w=700&q=80" alt="Vatican Rome" loading="lazy" />
          <div class="pilgrim-card__faith">✝️ Catholic</div>
        </div>
        <div class="pilgrim-card__body">
          <div class="pilgrim-card__region">Europe · Italy</div>
          <div class="pilgrim-card__title">Rome, Vatican &amp; the Eternal City</div>
          <p class="pilgrim-card__desc">Papal audience at St Peter's Square, the Sistine Chapel, the Catacombs of Rome, Assisi's Basilica of St Francis, and the Basilica of Our Lady of Loreto. Ideal for Catholic parishes seeking a deep encounter with the heart of the Universal Church.</p>
          <div class="pilgrim-card__sites">
            <span class="pilgrim-card__site">Vatican City</span>
            <span class="pilgrim-card__site">Assisi</span>
            <span class="pilgrim-card__site">Loreto</span>
            <span class="pilgrim-card__site">Catacombs</span>
            <span class="pilgrim-card__site">Papal Audience</span>
          </div>
          <div class="pilgrim-card__footer">
            <div class="pilgrim-card__meta"><span class="pilgrim-card__meta-label">Duration</span><span class="pilgrim-card__meta-val">9 Days</span></div>
            <div class="pilgrim-card__meta" style="text-align:right;"><span class="pilgrim-card__meta-label">From</span><span class="pilgrim-card__meta-val">$2,400</span></div>
            <a href="#enquiry" class="btn btn-primary btn-sm">Enquire</a>
          </div>
        </div>
      </div>

      <!-- 3: Turkey -->
      <div class="pilgrim-card reveal reveal-delay-2" data-faith="christian">
        <div class="pilgrim-card__img">
          <img src="https://images.unsplash.com/photo-1524231757912-21f4fe3a7200?w=700&q=80" alt="Turkey Ephesus" loading="lazy" />
          <div class="pilgrim-card__faith">✝️ Biblical Heritage</div>
        </div>
        <div class="pilgrim-card__body">
          <div class="pilgrim-card__region">Europe / Asia · Turkey</div>
          <div class="pilgrim-card__title">Footsteps of Paul — Turkey &amp; Greece</div>
          <p class="pilgrim-card__desc">Follow the Apostle Paul's missionary journeys through Ephesus, Antioch, Corinth, Athens, and Philippi. A richly academic and devotional programme for mature Christian groups and church leadership teams.</p>
          <div class="pilgrim-card__sites">
            <span class="pilgrim-card__site">Ephesus</span>
            <span class="pilgrim-card__site">Antioch</span>
            <span class="pilgrim-card__site">Corinth</span>
            <span class="pilgrim-card__site">Athens</span>
            <span class="pilgrim-card__site">Philippi</span>
          </div>
          <div class="pilgrim-card__footer">
            <div class="pilgrim-card__meta"><span class="pilgrim-card__meta-label">Duration</span><span class="pilgrim-card__meta-val">12 Days</span></div>
            <div class="pilgrim-card__meta" style="text-align:right;"><span class="pilgrim-card__meta-label">From</span><span class="pilgrim-card__meta-val">$2,650</span></div>
            <a href="#enquiry" class="btn btn-primary btn-sm">Enquire</a>
          </div>
        </div>
      </div>

      <!-- 4: Umrah / Saudi -->
      <div class="pilgrim-card reveal" data-faith="muslim">
        <div class="pilgrim-card__img">
          <img src="https://images.unsplash.com/photo-1591604129939-f1efa4d9f7fa?w=700&q=80" alt="Mecca Madinah" loading="lazy" />
          <div class="pilgrim-card__faith">☪️ Muslim</div>
        </div>
        <div class="pilgrim-card__body">
          <div class="pilgrim-card__region">Middle East · Saudi Arabia</div>
          <div class="pilgrim-card__title">Umrah — Makkah &amp; Madinah Package</div>
          <p class="pilgrim-card__desc">Pier One's Umrah package manages every dimension of this blessed journey — visa processing, approved Umrah operator coordination, hotel within 200m of Masjid al-Haram, Madinah's Prophet's Mosque, and all Ziyarat (site visits) in both holy cities.</p>
          <div class="pilgrim-card__sites">
            <span class="pilgrim-card__site">Masjid al-Haram</span>
            <span class="pilgrim-card__site">Prophet's Mosque</span>
            <span class="pilgrim-card__site">Mount Arafat</span>
            <span class="pilgrim-card__site">Cave of Hira</span>
            <span class="pilgrim-card__site">Quba Mosque</span>
          </div>
          <div class="pilgrim-card__footer">
            <div class="pilgrim-card__meta"><span class="pilgrim-card__meta-label">Duration</span><span class="pilgrim-card__meta-val">10 Days</span></div>
            <div class="pilgrim-card__meta" style="text-align:right;"><span class="pilgrim-card__meta-label">From</span><span class="pilgrim-card__meta-val">$2,200</span></div>
            <a href="#enquiry" class="btn btn-primary btn-sm">Enquire</a>
          </div>
        </div>
      </div>

      <!-- 5: Ethiopia Orthodox -->
      <div class="pilgrim-card reveal reveal-delay-1" data-faith="christian">
        <div class="pilgrim-card__img">
          <img src="https://images.unsplash.com/photo-1529429617124-95b109e86bb8?w=700&q=80" alt="Lalibela Ethiopia" loading="lazy" />
          <div class="pilgrim-card__faith">✝️ Orthodox</div>
        </div>
        <div class="pilgrim-card__body">
          <div class="pilgrim-card__region">East Africa · Ethiopia</div>
          <div class="pilgrim-card__title">Ethiopia — Land of the Ark &amp; Lalibela's Wonders</div>
          <p class="pilgrim-card__desc">Lalibela's eleven monolithic rock-hewn churches — a UNESCO wonder carved in the 12th century. Axum's St Mary of Zion, believed to house the Ark of the Covenant. Gondar's Royal Enclosure. A profound journey for Ethiopian Orthodox and Anglican church groups.</p>
          <div class="pilgrim-card__sites">
            <span class="pilgrim-card__site">Lalibela</span>
            <span class="pilgrim-card__site">Axum</span>
            <span class="pilgrim-card__site">Gondar</span>
            <span class="pilgrim-card__site">Lake Tana Monasteries</span>
          </div>
          <div class="pilgrim-card__footer">
            <div class="pilgrim-card__meta"><span class="pilgrim-card__meta-label">Duration</span><span class="pilgrim-card__meta-val">10 Days</span></div>
            <div class="pilgrim-card__meta" style="text-align:right;"><span class="pilgrim-card__meta-label">From</span><span class="pilgrim-card__meta-val">$1,950</span></div>
            <a href="#enquiry" class="btn btn-primary btn-sm">Enquire</a>
          </div>
        </div>
      </div>

      <!-- 6: Interfaith -->
      <div class="pilgrim-card reveal reveal-delay-2" data-faith="multiF">
        <div class="pilgrim-card__img">
          <img src="https://images.unsplash.com/photo-1539020140153-e479b8c22e70?w=700&q=80" alt="Morocco Faith" loading="lazy" />
          <div class="pilgrim-card__faith">🕊️ Interfaith</div>
        </div>
        <div class="pilgrim-card__body">
          <div class="pilgrim-card__region">North Africa · Morocco</div>
          <div class="pilgrim-card__title">Abrahamic Roots — Morocco Interfaith Journey</div>
          <p class="pilgrim-card__desc">Fez's Al-Qarawiyyin, the Mellah's historic synagogues, the great mosques of Marrakech and Casablanca's Hassan II — Morocco is one of the world's finest examples of centuries-long Christian, Muslim, and Jewish coexistence. An ideal journey for interfaith groups and social leaders.</p>
          <div class="pilgrim-card__sites">
            <span class="pilgrim-card__site">Al-Qarawiyyin</span>
            <span class="pilgrim-card__site">Mellah Jewish Quarter</span>
            <span class="pilgrim-card__site">Hassan II Mosque</span>
            <span class="pilgrim-card__site">Fez Medina</span>
          </div>
          <div class="pilgrim-card__footer">
            <div class="pilgrim-card__meta"><span class="pilgrim-card__meta-label">Duration</span><span class="pilgrim-card__meta-val">9 Days</span></div>
            <div class="pilgrim-card__meta" style="text-align:right;"><span class="pilgrim-card__meta-label">From</span><span class="pilgrim-card__meta-val">$1,700</span></div>
            <a href="#enquiry" class="btn btn-primary btn-sm">Enquire</a>
          </div>
        </div>
      </div>

    </div><!-- /.pilgrim-grid -->
  </div>
</section>

<!-- SACRED SITES VISUAL GRID -->
<section class="section section--dark">
  <div class="container">
    <div style="text-align:center;max-width:520px;margin:0 auto 3rem;">
      <span class="section-eyebrow reveal" style="color:var(--gold);">Sacred Destinations</span>
      <h2 class="section-title section-title--light reveal reveal-delay-1">Holy Ground, <em>Every Corner</em><br>of the World</h2>
    </div>
    <div class="sacred-sites">
      <a href="#pilgrimages" class="sacred-site reveal">
        <img src="https://images.unsplash.com/photo-1544967082-d9d25d867d66?w=600&q=80" alt="Jerusalem" loading="lazy" />
        <div class="sacred-site__overlay"></div>
        <div class="sacred-site__body"><div class="sacred-site__faith">✝️ ✡️ Christian &amp; Jewish</div><div class="sacred-site__name">Jerusalem, Israel</div><div class="sacred-site__country">Middle East</div></div>
      </a>
      <a href="#pilgrimages" class="sacred-site reveal reveal-delay-1">
        <img src="https://images.unsplash.com/photo-1591604129939-f1efa4d9f7fa?w=600&q=80" alt="Makkah" loading="lazy" />
        <div class="sacred-site__overlay"></div>
        <div class="sacred-site__body"><div class="sacred-site__faith">☪️ Muslim</div><div class="sacred-site__name">Makkah &amp; Madinah</div><div class="sacred-site__country">Saudi Arabia</div></div>
      </a>
      <a href="#pilgrimages" class="sacred-site reveal reveal-delay-2">
        <img src="https://images.unsplash.com/photo-1555992336-03a23c7b20ee?w=600&q=80" alt="Vatican" loading="lazy" />
        <div class="sacred-site__overlay"></div>
        <div class="sacred-site__body"><div class="sacred-site__faith">✝️ Catholic</div><div class="sacred-site__name">Vatican City, Rome</div><div class="sacred-site__country">Italy</div></div>
      </a>
      <a href="#pilgrimages" class="sacred-site reveal reveal-delay-3">
        <img src="https://images.unsplash.com/photo-1529429617124-95b109e86bb8?w=600&q=80" alt="Lalibela" loading="lazy" />
        <div class="sacred-site__overlay"></div>
        <div class="sacred-site__body"><div class="sacred-site__faith">✝️ Orthodox</div><div class="sacred-site__name">Lalibela</div><div class="sacred-site__country">Ethiopia</div></div>
      </a>
    </div>
  </div>
</section>

<!-- FOR GROUP LEADERS -->
<section class="section section--cream">
  <div class="container">
    <div style="text-align:center;max-width:520px;margin:0 auto 3rem;">
      <span class="section-eyebrow reveal">For Group Leaders</span>
      <h2 class="section-title reveal reveal-delay-1">Everything We Do<br>for Your <em>Congregation</em></h2>
    </div>
    <div class="leader-grid">
      <div class="leader-card reveal">
        <div class="leader-card__icon">📋</div>
        <div class="leader-card__title">Pre-Departure Spiritual Preparation</div>
        <p class="leader-card__desc">We provide pre-departure reading packs, scriptural devotionals, and background materials so your group arrives spiritually prepared and contextually informed.</p>
      </div>
      <div class="leader-card reveal reveal-delay-1">
        <div class="leader-card__icon">✈️</div>
        <div class="leader-card__title">Group Flights &amp; Check-in Management</div>
        <p class="leader-card__desc">We coordinate group check-in, seat allocation, meal preferences, and baggage — so your church leader can focus on people, not paperwork, at the airport.</p>
      </div>
      <div class="leader-card reveal reveal-delay-2">
        <div class="leader-card__icon">🏨</div>
        <div class="leader-card__title">Faith-Appropriate Accommodation</div>
        <p class="leader-card__desc">Hotels and guesthouses that respect your group's faith practices — halal catering available, Sabbath-observant options, chapels for morning devotions, and communal prayer spaces.</p>
      </div>
      <div class="leader-card reveal reveal-delay-3">
        <div class="leader-card__icon">🧑‍💼</div>
        <div class="leader-card__title">On-Site Faith Guide &amp; Liaison</div>
        <p class="leader-card__desc">A dedicated local Christian, Muslim, or interfaith guide accompanies your group at every site — providing deep spiritual and historical context unavailable in any guidebook.</p>
      </div>
      <div class="leader-card reveal reveal-delay-4">
        <div class="leader-card__icon">🛂</div>
        <div class="leader-card__title">Visa &amp; Documentation Support</div>
        <p class="leader-card__desc">We manage group visa applications, Umrah operator coordination, letter of invitation requirements, and all travel documentation — especially for complex destinations.</p>
      </div>
      <div class="leader-card reveal reveal-delay-5">
        <div class="leader-card__icon">🤝</div>
        <div class="leader-card__title">Flexible Devotional Scheduling</div>
        <p class="leader-card__desc">Your daily prayer, worship, and reflection times are built into the itinerary — not an afterthought. We design the day around your spiritual programme, not the other way around.</p>
      </div>
    </div>
  </div>
</section>

<!-- TESTIMONIALS -->
<section class="section section--sand">
  <div class="container">
    <div style="text-align:center;max-width:520px;margin:0 auto 3rem;">
      <span class="section-eyebrow reveal">From the Faithful</span>
      <h2 class="section-title reveal reveal-delay-1">Words from Our <em>Pilgrims</em></h2>
    </div>
    <div class="relig-testimonials">
      <div class="relig-quote reveal">
        <div class="relig-quote__stars">★★★★★</div>
        <div class="relig-quote__mark">"</div>
        <p class="relig-quote__text">Our church group's religious tour to the Holy Land was handled flawlessly. Every detail was perfect — accommodation walking distance from the Church of the Holy Sepulchre, transport, and the spiritual programme. Pier One understands what a pilgrimage truly means.</p>
        <div class="relig-quote__author">
          <!-- <div class="relig-quote__avatar">👨🏿‍💼</div> -->
          <div><div class="relig-quote__name">Bishop Charles Darko</div><div class="relig-quote__role">Accra, Ghana · Holy Land Pilgrimage</div></div>
        </div>
      </div>
      <div class="relig-quote reveal reveal-delay-1">
        <div class="relig-quote__stars">★★★★★</div>
        <div class="relig-quote__mark">"</div>
        <p class="relig-quote__text">Pier One managed our entire Umrah group — 46 members from our mosque. From the visa applications to our rooms 150 metres from Masjid al-Haram, everything was beyond expectation. We will use them for Hajj applications next year.</p>
        <div class="relig-quote__author">
          <!-- <div class="relig-quote__avatar">👳🏿</div> -->
          <div><div class="relig-quote__name">Sheikh Abdulai Ibrahim</div><div class="relig-quote__role">Tamale, Ghana · Umrah Package</div></div>
        </div>
      </div>
      <div class="relig-quote reveal reveal-delay-2">
        <div class="relig-quote__stars">★★★★★</div>
        <div class="relig-quote__mark">"</div>
        <p class="relig-quote__text">Standing at the Chapel of the Ascension on the Mount of Olives with my congregation — that moment alone was worth the entire journey. Pier One gave us access to spaces and moments that no independent tour could have arranged.</p>
        <div class="relig-quote__author">
          <!-- <div class="relig-quote__avatar">👩🏾‍💼</div> -->
          <div><div class="relig-quote__name">Rev. Esther Boateng</div><div class="relig-quote__role">Kumasi · Holy Land &amp; Turkey Programme</div></div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- FAQ + ENQUIRY -->
<section class="section section--cream" id="enquiry">
  <div class="container">
    <div class="enquiry-layout">
      <div>
        <span class="section-eyebrow reveal">Common Questions</span>
        <h2 class="section-title reveal reveal-delay-1">Frequently Asked<br><em>Questions</em></h2>
        <p class="section-subtitle reveal reveal-delay-2" style="margin-bottom:2.5rem;">Answers to the questions most asked by pastors, imams, group coordinators, and church treasurers.</p>
        <div class="faq-list reveal reveal-delay-2">
          <div class="faq-item">
            <button class="faq-btn" onclick="toggleFaq(this)">What is the minimum group size for a religious tour?<div class="faq-icon">+</div></button>
            <div class="faq-body"><div class="faq-content">We work with groups as small as 10 and as large as 300+. Smaller pilgrimage groups (10–25) typically access more intimate site experiences and flexible devotional schedules. Larger groups are managed in coordinated sub-groups with multiple guides and coaches.</div></div>
          </div>
          <div class="faq-item">
            <button class="faq-btn" onclick="toggleFaq(this)">Do you handle Umrah visa applications?<div class="faq-icon">+</div></button>
            <div class="faq-body"><div class="faq-content">Yes — we coordinate with an approved Saudi Umrah operator to process group Umrah visas. We manage all documentation, the mahram (male guardian) declaration requirements, and vaccination certification. We advise groups to begin this process at least 8–10 weeks in advance.</div></div>
          </div>
          <div class="faq-item">
            <button class="faq-btn" onclick="toggleFaq(this)">Can we have daily devotions and prayer times on the programme?<div class="faq-icon">+</div></button>
            <div class="faq-body"><div class="faq-content">Absolutely — this is central to how we design religious tours. Your morning devotions, prayer times, worship sessions, and evening reflections are written into the daily schedule. We coordinate venues for group prayer and ensure hotel dining and room arrangements support your spiritual rhythm.</div></div>
          </div>
          <div class="faq-item">
            <button class="faq-btn" onclick="toggleFaq(this)">Do you offer halal or special dietary catering?<div class="faq-icon">+</div></button>
            <div class="faq-body"><div class="faq-content">Yes. We accommodate halal, kosher, vegetarian, and other dietary requirements in full. For Muslim groups, we only select hotels and restaurants certified halal in the destination. Please indicate your dietary requirements at booking — this is never an afterthought for us.</div></div>
          </div>
          <div class="faq-item">
            <button class="faq-btn" onclick="toggleFaq(this)">Can the tour be split into payment instalments for congregants?<div class="faq-icon">+</div></button>
            <div class="faq-body"><div class="faq-content">Yes — we offer group instalment payment structures that allow individual congregants to pay over 6–12 months through your church or mosque treasury. We work with your financial secretary to design a payment plan that fits your congregation's rhythm and deadlines.</div></div>
          </div>
          <div class="faq-item">
            <button class="faq-btn" onclick="toggleFaq(this)">What happens if a pilgrim falls ill during the journey?<div class="faq-icon">+</div></button>
            <div class="faq-body"><div class="faq-content">All our religious tours include comprehensive group travel insurance with medical cover. Our on-ground Pier One representative handles all medical emergencies — liaising with local hospitals, managing insurance claims, and communicating with next-of-kin. We never leave a pilgrim behind.</div></div>
          </div>
        </div>
      </div>
      <div class="enquiry-box reveal reveal-delay-3">
        <div class="enquiry-box__title">Request Your Pilgrimage</div>
        <p class="enquiry-box__sub">Tell us about your faith community and we'll send you a tailored pilgrimage proposal within 48 hours.</p>
        <form onsubmit="return false;">
          <div class="enquiry-box__field">
            <label class="enquiry-box__label">Church / Mosque / Organisation</label>
            <input class="enquiry-box__input" type="text" placeholder="Living Faith Assemblies, Accra" />
          </div>
          <div class="enquiry-box__field">
            <label class="enquiry-box__label">Your Name &amp; Role</label>
            <input class="enquiry-box__input" type="text" placeholder="Rev. Adjoa Ankomah — Travel Coordinator" />
          </div>
          <div class="enquiry-box__field">
            <label class="enquiry-box__label">Email Address</label>
            <input class="enquiry-box__input" type="email" placeholder="travel@livingfaith.org.gh" />
          </div>
          <div class="enquiry-box__field">
            <label class="enquiry-box__label">Faith Tradition</label>
            <select class="enquiry-box__select">
              <option>Christian — Protestant / Pentecostal</option>
              <option>Christian — Catholic</option>
              <option>Christian — Anglican / Methodist</option>
              <option>Christian — Orthodox</option>
              <option>Muslim (Umrah / Ziyarat)</option>
              <option>Interfaith Group</option>
              <option>Other / Traditional</option>
            </select>
          </div>
          <div class="enquiry-box__field">
            <label class="enquiry-box__label">Destination of Interest</label>
            <select class="enquiry-box__select">
              <option>The Holy Land (Israel &amp; Palestine)</option>
              <option>Rome &amp; Vatican City</option>
              <option>Footsteps of Paul (Turkey &amp; Greece)</option>
              <option>Umrah — Makkah &amp; Madinah</option>
              <option>Ethiopia — Lalibela &amp; Axum</option>
              <option>Morocco — Interfaith Journey</option>
              <option>Not sure — please advise</option>
            </select>
          </div>
          <div class="enquiry-row">
            <div class="enquiry-box__field">
              <label class="enquiry-box__label">Group Size</label>
              <select class="enquiry-box__select">
                <option>10 – 25</option><option>26 – 50</option>
                <option>51 – 100</option><option>100+</option>
              </select>
            </div>
            <div class="enquiry-box__field">
              <label class="enquiry-box__label">Preferred Year</label>
              <select class="enquiry-box__select">
                <option>2026</option><option>2027</option><option>Flexible</option>
              </select>
            </div>
          </div>
          <div class="enquiry-box__field">
            <label class="enquiry-box__label">Special Requirements</label>
            <textarea class="enquiry-box__textarea" placeholder="Halal meals, elderly members, wheelchair access, morning devotion venue…"></textarea>
          </div>
          <button type="submit" class="btn btn-primary" style="width:100%;justify-content:center;">
            Submit Pilgrimage Request
            <svg class="arrow-icon" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
          </button>
          <p class="enquiry-box__note">We respond within 48 hours. <a href="#">Privacy Policy</a></p>
        </form>
      </div>
    </div>
  </div>
</section>

<!-- CTA BAND -->
<section class="section section--sand">
  <div class="container">
    <div class="cta-band reveal">
      <h2 class="cta-band__title">Let Your Faith<br><em>Journey Begin</em></h2>
      <p class="cta-band__sub">Your congregation deserves a pilgrimage that moves hearts, deepens faith, and creates memories that will be shared for generations. Let Pier One plan every step.</p>
      <div class="cta-band__actions">
        <a href="#enquiry" class="btn btn-primary btn-lg">Plan Our Pilgrimage <svg class="arrow-icon" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg></a>
        <a href="mailto:info@pieronetours.com" class="btn btn-secondary btn-lg">Email a Specialist</a>
      </div>
    </div>
  </div>
</section>

<script>
function filterPilgrim(btn, cat) {
  document.querySelectorAll('.faith-tab').forEach(b => b.classList.remove('active'));
  btn.classList.add('active');
  document.querySelectorAll('#pilgrimGrid .pilgrim-card').forEach(card => {
    card.style.display = (cat === 'all' || card.dataset.faith === cat) ? '' : 'none';
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