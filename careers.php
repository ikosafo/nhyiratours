<?php include 'includes/header.php'; ?>

<style>
/* ═══════════════════════════════════════════════════════
   CAREERS — careers.php
   Pier One Travel & Tour Services
════════════════════════════════════════════════════════ */

/* ── Hero ─────────────────────────────────────────── */
.careers-hero {
  position: relative;
  height: 78vh;
  min-height: 540px;
  display: flex;
  align-items: flex-end;
  overflow: hidden;
}
.careers-hero__bg {
  position: absolute; inset: 0;
  width: 100%; height: 100%;
  object-fit: cover;
  transition: transform 12s ease;
}
.careers-hero:hover .careers-hero__bg { transform: scale(1.04); }
.careers-hero__overlay {
  position: absolute; inset: 0;
  background:
    linear-gradient(to right, rgba(28,16,8,.96) 0%, rgba(28,16,8,.65) 55%, rgba(28,16,8,.2) 100%),
    linear-gradient(to top, rgba(28,16,8,.9) 0%, transparent 55%);
}
.careers-hero__kente {
  position: absolute; bottom: 0; left: 0; right: 0;
  height: 5px;
  background: repeating-linear-gradient(90deg,#C8913A 0,#C8913A 40px,#3D2B1F 40px,#3D2B1F 80px,#C4784A 80px,#C4784A 120px,#2D4A3E 120px,#2D4A3E 160px,#8B6020 160px,#8B6020 200px);
  z-index: 3;
}
.careers-hero__content {
  position: relative; z-index: 2;
  max-width: 1400px; width: 100%; margin: 0 auto;
  padding: 3.5rem clamp(1rem,4vw,3rem);
}
.careers-hero__badge {
  display: inline-flex; align-items: center; gap: .5rem;
  background: rgba(200,145,58,.18); backdrop-filter: blur(8px);
  border: 1px solid rgba(200,145,58,.4); border-radius: 40px;
  padding: .35rem 1.1rem; color: var(--gold-light);
  font-size: .72rem; font-weight: 600; letter-spacing: .16em; text-transform: uppercase;
  margin-bottom: 1.1rem;
}
.careers-hero__title {
  font-family: 'Cormorant Garamond', serif;
  font-size: clamp(2rem,6vw,4.6rem);
  font-weight: 600; color: var(--white);
  line-height: 1.06; letter-spacing: -.015em;
  margin-bottom: 1.1rem;
}
.careers-hero__title em { font-style: italic; color: var(--gold-light); }
.careers-hero__subtitle {
  font-size: clamp(.88rem,1.6vw,1.05rem);
  color: rgba(255,255,255,.72); line-height: 1.78;
  max-width: 50ch; margin-bottom: 2rem;
}

/* ── Why Join Us ─────────────────────────────────── */
.perks-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 1.5rem;
}
.perk-card {
  background: var(--white);
  border: 1px solid var(--border-soft);
  border-radius: var(--radius-xl);
  padding: 2rem;
  transition: transform var(--trans), box-shadow var(--trans);
}
.perk-card:hover {
  transform: translateY(-5px);
  box-shadow: var(--shadow-lg);
}
.perk-card__icon {
  font-size: 2.2rem;
  margin-bottom: 1rem;
  display: block;
}
.perk-card__title {
  font-family: 'Cormorant Garamond', serif;
  font-size: 1.2rem; font-weight: 600; color: var(--earth);
  margin-bottom: .5rem;
}
.perk-card__desc {
  font-size: .82rem; color: var(--text-soft); line-height: 1.7;
}

/* ── Values Band ─────────────────────────────────── */
.values-band {
  background: linear-gradient(135deg, var(--earth), #4A2E20);
  border-radius: var(--radius-xl);
  padding: 3.5rem;
  display: grid;
  grid-template-columns: 1fr 2fr;
  gap: 4rem;
  align-items: center;
}
.values-band__intro-title {
  font-family: 'Cormorant Garamond', serif;
  font-size: clamp(1.6rem,3vw,2.4rem);
  font-weight: 600; color: var(--cream);
  line-height: 1.15; margin-bottom: .75rem;
}
.values-band__intro-title em { font-style: italic; color: var(--gold-light); }
.values-band__intro-sub {
  font-size: .85rem; color: rgba(242,232,213,.62); line-height: 1.75;
}
.values-list {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 1.25rem;
}
.values-list__item {
  display: flex; gap: 1rem; align-items: flex-start;
}
.values-list__item-icon {
  font-size: 1.4rem; flex-shrink: 0; margin-top: 2px;
}
.values-list__item-title {
  font-family: 'Cormorant Garamond', serif;
  font-size: 1rem; font-weight: 600; color: var(--gold-light);
  margin-bottom: .2rem;
}
.values-list__item-desc {
  font-size: .76rem; color: rgba(242,232,213,.6); line-height: 1.65;
}

/* ── Job Listings ─────────────────────────────────── */
.jobs-filter {
  display: flex; gap: .5rem; flex-wrap: wrap; margin-bottom: 2rem;
}
.jobs-filter__btn {
  padding: .5rem 1.25rem;
  border-radius: 40px;
  font-size: .78rem; font-weight: 600;
  cursor: pointer;
  border: 1.5px solid var(--border);
  background: transparent;
  color: var(--text-mid); font-family: inherit;
  transition: all var(--trans-fast);
}
.jobs-filter__btn:hover { border-color: var(--gold); color: var(--gold); }
.jobs-filter__btn.active { background: var(--gold); border-color: var(--gold); color: var(--white); }

.job-listing {
  background: var(--white);
  border: 1px solid var(--border-soft);
  border-radius: var(--radius-xl);
  margin-bottom: 1rem;
  overflow: hidden;
  transition: box-shadow var(--trans-fast);
}
.job-listing:hover { box-shadow: 0 6px 30px rgba(28,16,8,.08); }
.job-listing__header {
  display: flex; align-items: center; gap: 1.5rem;
  padding: 1.75rem 2rem;
  cursor: pointer;
  transition: background var(--trans-fast);
}
.job-listing__header:hover { background: rgba(200,145,58,.03); }
.job-listing__icon {
  width: 52px; height: 52px;
  background: var(--gold-pale); border: 1px solid var(--border);
  border-radius: var(--radius-lg);
  display: flex; align-items: center; justify-content: center;
  font-size: 1.4rem; flex-shrink: 0;
}
.job-listing__info { flex: 1; }
.job-listing__title {
  font-family: 'Cormorant Garamond', serif;
  font-size: 1.2rem; font-weight: 600; color: var(--earth);
  margin-bottom: .25rem;
}
.job-listing__meta {
  display: flex; align-items: center; gap: 1rem; flex-wrap: wrap;
  font-size: .75rem; color: var(--text-muted);
}
.job-listing__meta-item { display: flex; align-items: center; gap: .3rem; }
.job-listing__meta-item svg { width: 12px; height: 12px; color: var(--gold); }
.job-listing__badges { display: flex; gap: .5rem; flex-shrink: 0; }
.job-badge {
  font-size: .65rem; font-weight: 700; padding: .25rem .7rem;
  border-radius: 40px; white-space: nowrap;
}
.job-badge--dept { background: rgba(200,145,58,.12); color: var(--gold-dark); border: 1px solid rgba(200,145,58,.3); }
.job-badge--type { background: rgba(45,74,62,.1); color: #2D4A3E; border: 1px solid rgba(45,74,62,.25); }
.job-badge--new { background: #2D4A3E; color: var(--white); }
.job-listing__chevron {
  width: 20px; height: 20px; color: var(--text-muted); flex-shrink: 0;
  transition: transform var(--trans-fast);
}
.job-listing.open .job-listing__chevron { transform: rotate(180deg); }

.job-listing__body {
  display: none;
  padding: 0 2rem 2rem;
  border-top: 1px solid var(--border-soft);
}
.job-listing.open .job-listing__body { display: block; }
.job-listing__desc {
  font-size: .85rem; color: var(--text-soft);
  line-height: 1.78; margin: 1.5rem 0 1.25rem;
}
.job-listing__section-title {
  font-size: .72rem; font-weight: 700; color: var(--earth);
  letter-spacing: .1em; text-transform: uppercase;
  margin-bottom: .75rem; margin-top: 1.5rem;
}
.job-listing__list {
  list-style: none; padding: 0; margin: 0;
  display: flex; flex-direction: column; gap: .45rem;
}
.job-listing__list li {
  display: flex; gap: .6rem; align-items: flex-start;
  font-size: .82rem; color: var(--text-mid); line-height: 1.6;
}
.job-listing__list li::before {
  content: '';
  display: block; width: 5px; height: 5px;
  border-radius: 50%; background: var(--gold);
  margin-top: 7px; flex-shrink: 0;
}
.job-listing__footer {
  display: flex; align-items: center; justify-content: space-between;
  flex-wrap: wrap; gap: 1rem;
  margin-top: 2rem; padding-top: 1.5rem;
  border-top: 1px solid var(--border-soft);
}
.job-listing__salary {
  font-family: 'Cormorant Garamond', serif;
  font-size: 1.05rem; font-weight: 600; color: var(--earth);
}
.job-listing__salary span { font-size: .76rem; font-weight: 400; color: var(--text-muted); font-family: inherit; }

/* ── Application Process ──────────────────────────── */
.apply-steps {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: 0;
  border: 1px solid var(--border-soft);
  border-radius: var(--radius-xl);
  overflow: hidden;
  background: var(--white);
}
.apply-step {
  padding: 2rem 1.5rem 2.25rem;
  border-right: 1px solid var(--border-soft);
  text-align: center;
  position: relative;
}
.apply-step:last-child { border-right: none; }
.apply-step__num {
  width: 44px; height: 44px;
  border-radius: 50%;
  background: linear-gradient(135deg, var(--gold), #E8A84A);
  color: var(--white);
  font-family: 'Cormorant Garamond', serif;
  font-size: 1.25rem; font-weight: 700;
  display: flex; align-items: center; justify-content: center;
  margin: 0 auto 1rem;
  box-shadow: 0 4px 15px rgba(200,145,58,.35);
}
.apply-step__arrow {
  position: absolute; right: -10px; top: 2.2rem;
  font-size: .9rem; color: var(--gold); z-index: 1;
}
.apply-step:last-child .apply-step__arrow { display: none; }
.apply-step__title {
  font-family: 'Cormorant Garamond', serif;
  font-size: 1.05rem; font-weight: 600; color: var(--earth);
  margin-bottom: .4rem;
}
.apply-step__desc {
  font-size: .76rem; color: var(--text-soft); line-height: 1.65;
}

/* ── Open roles count ─────────────────────────────── */
.open-roles-bar {
  display: flex; align-items: center; justify-content: space-between;
  flex-wrap: wrap; gap: 1rem;
  margin-bottom: 2rem;
  padding: 1.25rem 1.75rem;
  background: var(--gold-pale);
  border: 1px solid var(--border);
  border-radius: var(--radius-lg);
}
.open-roles-bar__count {
  font-family: 'Cormorant Garamond', serif;
  font-size: 1.3rem; font-weight: 600; color: var(--earth);
}
.open-roles-bar__count span { color: var(--gold); }
.open-roles-bar__sub { font-size: .78rem; color: var(--text-soft); margin-top: .1rem; }

/* ── Life at Pier One ─────────────────────────────── */
.life-grid {
  display: grid;
  grid-template-columns: 2fr 1fr 1fr;
  grid-template-rows: auto auto;
  gap: 1rem;
}
.life-img {
  border-radius: var(--radius-lg);
  overflow: hidden;
  position: relative;
}
.life-img img { width: 100%; height: 100%; object-fit: cover; display: block; transition: transform var(--trans-slow); }
.life-img:hover img { transform: scale(1.04); }
.life-img--tall { grid-row: 1 / 3; aspect-ratio: auto; }
.life-img--sq { aspect-ratio: 1; }
.life-img__caption {
  position: absolute; bottom: 0; left: 0; right: 0;
  padding: 1rem 1.25rem;
  background: linear-gradient(to top, rgba(28,16,8,.72), transparent);
  font-size: .72rem; font-weight: 600; color: var(--white);
  letter-spacing: .06em;
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
  .perks-grid { grid-template-columns: 1fr 1fr; }
  .values-band { grid-template-columns: 1fr; gap: 2rem; padding: 2.5rem; }
  .apply-steps { grid-template-columns: 1fr 1fr; }
  .apply-step:nth-child(2) { border-right: none; }
  .apply-step:nth-child(2) .apply-step__arrow { display: none; }
  .apply-step:nth-child(1), .apply-step:nth-child(2) { border-bottom: 1px solid var(--border-soft); }
  .life-grid { grid-template-columns: 1fr 1fr; grid-template-rows: auto; }
  .life-img--tall { grid-row: auto; aspect-ratio: 16/9; }
}
@media (max-width: 700px) {
  .perks-grid { grid-template-columns: 1fr; }
  .values-list { grid-template-columns: 1fr; }
  .apply-steps { grid-template-columns: 1fr; }
  .apply-step { border-right: none; border-bottom: 1px solid var(--border-soft); }
  .apply-step:last-child { border-bottom: none; }
  .apply-step__arrow { content: '↓'; right: auto; bottom: -12px; top: auto; left: 50%; transform: translateX(-50%); }
  .job-listing__header { flex-wrap: wrap; gap: 1rem; }
  .job-listing__badges { order: 3; }
  .life-grid { grid-template-columns: 1fr; }
}
</style>

<!-- ════════════════════════════════════════════════
     HERO
═══════════════════════════════════════════════════ -->
<section class="careers-hero">
  <img class="careers-hero__bg"
    src="https://images.unsplash.com/photo-1523805009345-7448845a9e53?w=1920&q=80"
    alt="Pier One team in the field"
    loading="eager" />
  <div class="careers-hero__overlay"></div>
  <div class="careers-hero__kente"></div>
  <div class="careers-hero__content">
    <nav class="breadcrumb" style="margin-bottom:1rem;">
      <a href="<?= URLROOT ?>">Home</a>
      <span class="breadcrumb__sep">›</span>
      <a href="<?= URLROOT ?>/about">About Us</a>
      <span class="breadcrumb__sep">›</span>
      <span class="breadcrumb__current">Careers</span>
    </nav>
    <div class="careers-hero__badge">💼 We're Hiring</div>
    <h1 class="careers-hero__title">
      Shape Africa's Story.<br>Build Your <em>Career.</em>
    </h1>
    <p class="careers-hero__subtitle">
      Join a team of passionate, purpose-driven people who believe that travel has the power to change lives — for travellers and the communities we serve. If Africa moves you, you belong here.
    </p>
    <div style="display:flex;gap:1rem;flex-wrap:wrap;">
      <a href="#open-roles" class="btn btn-primary btn-lg">
        See Open Roles
        <svg class="arrow-icon" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
          <path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
        </svg>
      </a>
      <a href="#life-at-pier-one" class="btn btn-secondary btn-lg">Life at Pier One</a>
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
        <div class="stat-item__label">Team Members</div>
      </div>
      <div class="stat-item reveal reveal-delay-1">
        <div class="stat-item__number" data-count="12" data-suffix="">0</div>
        <div class="stat-item__label">Open Positions</div>
      </div>
      <div class="stat-item reveal reveal-delay-2">
        <div class="stat-item__number" data-count="6" data-suffix="">0</div>
        <div class="stat-item__label">African Regions</div>
      </div>
      <div class="stat-item reveal reveal-delay-3">
        <div class="stat-item__number" data-count="18" data-suffix=" Yrs">0 Yrs</div>
        <div class="stat-item__label">In Business</div>
      </div>
    </div>
  </div>
</section>

<!-- ════════════════════════════════════════════════
     WHY JOIN US
═══════════════════════════════════════════════════ -->
<section class="section section--cream" id="why-pier-one">
  <div class="container">
    <div style="text-align:center;max-width:560px;margin:0 auto 3rem;">
      <span class="section-eyebrow reveal">Why Join Us</span>
      <h2 class="section-title reveal reveal-delay-1">More Than a Job.<br>A <em>Mission.</em></h2>
      <p class="section-subtitle reveal reveal-delay-2" style="margin:0 auto;">
        At Pier One, your work connects people to the soul of Africa. Here's what that looks like day to day.
      </p>
    </div>
    <div class="perks-grid">
      <div class="perk-card reveal">
        <span class="perk-card__icon">🌍</span>
        <div class="perk-card__title">Work Across Africa</div>
        <div class="perk-card__desc">Whether based in Accra, Nairobi, Cape Town, or Casablanca — our roles span the continent. Many positions involve regular field travel.</div>
      </div>
      <div class="perk-card reveal reveal-delay-1">
        <span class="perk-card__icon">📈</span>
        <div class="perk-card__title">Real Growth, Real Fast</div>
        <div class="perk-card__desc">We are a growing company. Talented people rise quickly here. Over 70% of our senior leadership started in junior roles within Pier One.</div>
      </div>
      <div class="perk-card reveal reveal-delay-2">
        <span class="perk-card__icon">✈️</span>
        <div class="perk-card__title">Familiarisation Travel</div>
        <div class="perk-card__desc">All permanent staff receive annual familiarisation ("fam") trips to our destinations — fully covered. You cannot sell Africa unless you know Africa.</div>
      </div>
      <div class="perk-card reveal reveal-delay-3">
        <span class="perk-card__icon">🎓</span>
        <div class="perk-card__title">Learning &amp; Development</div>
        <div class="perk-card__desc">Annual L&D budget for every employee. Certifications, conferences, language learning, and cultural immersion programmes fully supported.</div>
      </div>
      <div class="perk-card reveal reveal-delay-4">
        <span class="perk-card__icon">🤝</span>
        <div class="perk-card__title">Community Impact</div>
        <div class="perk-card__desc">Take up to 5 paid volunteering days per year with our partner community organisations. Your work has meaning beyond the office.</div>
      </div>
      <div class="perk-card reveal reveal-delay-5">
        <span class="perk-card__icon">❤️</span>
        <div class="perk-card__title">Comprehensive Benefits</div>
        <div class="perk-card__desc">Competitive salary, health cover, pension contributions, 25+ days leave, and discounted travel for immediate family members.</div>
      </div>
    </div>
  </div>
</section>

<!-- ════════════════════════════════════════════════
     KENTE DIVIDER
═══════════════════════════════════════════════════ -->
<div class="kente-bar"></div>

<!-- ════════════════════════════════════════════════
     OUR VALUES
═══════════════════════════════════════════════════ -->
<section class="section section--sand">
  <div class="container">
    <div class="values-band reveal">
      <div>
        <h2 class="values-band__intro-title">What We <em>Stand For</em></h2>
        <p class="values-band__intro-sub">Our values aren't wall art — they're how we make decisions, hire, and hold each other accountable every single day.</p>
      </div>
      <div class="values-list">
        <div class="values-list__item">
          <span class="values-list__item-icon">🌱</span>
          <div>
            <div class="values-list__item-title">Responsibility</div>
            <div class="values-list__item-desc">We take ownership of our decisions, our impact on the planet, and our duty to the communities we enter.</div>
          </div>
        </div>
        <div class="values-list__item">
          <span class="values-list__item-icon">🤲</span>
          <div>
            <div class="values-list__item-title">Authenticity</div>
            <div class="values-list__item-desc">We are genuine with our clients, our partners, and each other. No performance — just real, honest Africa.</div>
          </div>
        </div>
        <div class="values-list__item">
          <span class="values-list__item-icon">🚀</span>
          <div>
            <div class="values-list__item-title">Excellence</div>
            <div class="values-list__item-desc">Good enough is never good enough. We push every itinerary, every email, and every interaction to its highest standard.</div>
          </div>
        </div>
        <div class="values-list__item">
          <span class="values-list__item-icon">🤗</span>
          <div>
            <div class="values-list__item-title">Ubuntu</div>
            <div class="values-list__item-desc">"I am because we are." We support each other fiercely — colleagues, clients, guides, and communities alike.</div>
          </div>
        </div>
        <div class="values-list__item">
          <span class="values-list__item-icon">💡</span>
          <div>
            <div class="values-list__item-title">Curiosity</div>
            <div class="values-list__item-desc">The best travel professionals are learners first. We reward asking questions and reward it again for finding bold answers.</div>
          </div>
        </div>
        <div class="values-list__item">
          <span class="values-list__item-icon">🏛️</span>
          <div>
            <div class="values-list__item-title">Integrity</div>
            <div class="values-list__item-desc">We are transparent about what we can and cannot do. Our word is our bond — with clients, suppliers, and each other.</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ════════════════════════════════════════════════
     LIFE AT PIER ONE — photo grid
═══════════════════════════════════════════════════ -->
<section class="section section--cream" id="life-at-pier-one">
  <div class="container">
    <div style="display:flex;align-items:flex-end;justify-content:space-between;flex-wrap:wrap;gap:1rem;margin-bottom:2.5rem;">
      <div>
        <span class="section-eyebrow reveal">Behind the Scenes</span>
        <h2 class="section-title reveal reveal-delay-1">Life at <em>Pier One</em></h2>
      </div>
    </div>
    <div class="life-grid reveal reveal-delay-1">
      <div class="life-img life-img--tall">
        <img src="https://images.unsplash.com/photo-1551632436-cbf8dd35adfa?w=800&q=80" alt="Team on a familiarisation safari" loading="lazy" />
        <div class="life-img__caption">Team Fam Trip — Masai Mara, Kenya</div>
      </div>
      <div class="life-img life-img--sq">
        <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?w=600&q=80" alt="Team workshop" loading="lazy" />
        <div class="life-img__caption">Annual Strategy Workshop</div>
      </div>
      <div class="life-img life-img--sq">
        <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?w=600&q=80" alt="Staff at a community project" loading="lazy" />
        <div class="life-img__caption">Volunteer Day — Accra</div>
      </div>
      <div class="life-img life-img--sq">
        <img src="https://images.unsplash.com/photo-1516026672322-bc52d61a55d5?w=600&q=80" alt="Field training" loading="lazy" />
        <div class="life-img__caption">Guide Field Training — Serengeti</div>
      </div>
      <div class="life-img life-img--sq">
        <img src="https://images.unsplash.com/photo-1476514525535-07fb3b4ae5f1?w=600&q=80" alt="Team celebration" loading="lazy" />
        <div class="life-img__caption">Year-End Celebration, 2024</div>
      </div>
    </div>
  </div>
</section>

<!-- ════════════════════════════════════════════════
     OPEN ROLES
═══════════════════════════════════════════════════ -->
<section class="section section--sand" id="open-roles">
  <div class="container">
    <div style="display:flex;align-items:flex-end;justify-content:space-between;flex-wrap:wrap;gap:1rem;margin-bottom:2rem;">
      <div>
        <span class="section-eyebrow reveal">Positions Available</span>
        <h2 class="section-title reveal reveal-delay-1">Open <em>Roles</em></h2>
      </div>
    </div>

    <div class="jobs-filter reveal reveal-delay-2" id="jobsFilter">
      <button class="jobs-filter__btn active" data-dept="all">All Departments</button>
      <button class="jobs-filter__btn" data-dept="operations">Operations</button>
      <button class="jobs-filter__btn" data-dept="sales">Sales &amp; Marketing</button>
      <button class="jobs-filter__btn" data-dept="guides">Guiding</button>
      <button class="jobs-filter__btn" data-dept="tech">Technology</button>
      <button class="jobs-filter__btn" data-dept="corporate">Corporate</button>
    </div>

    <div class="open-roles-bar reveal">
      <div>
        <div class="open-roles-bar__count"><span id="roleCount">12</span> open positions</div>
        <div class="open-roles-bar__sub">Across 6 departments · Remote &amp; on-site roles available</div>
      </div>
      <a href="mailto:careers@pieronetours.com" class="btn btn-outline">careers@pieronetours.com</a>
    </div>

    <div id="jobsList">

      <!-- OPERATIONS -->
      <div class="job-listing reveal" data-dept="operations">
        <div class="job-listing__header" onclick="toggleJob(this.parentElement)">
          <div class="job-listing__icon">🗺️</div>
          <div class="job-listing__info">
            <div class="job-listing__title">Senior Tour Operations Manager</div>
            <div class="job-listing__meta">
              <span class="job-listing__meta-item"><svg fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/></svg>Accra, Ghana</span>
              <span class="job-listing__meta-item"><svg fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path stroke-linecap="round" d="M12 6v6l4 2"/></svg>Full-Time</span>
              <span class="job-listing__meta-item">Posted 3 days ago</span>
            </div>
          </div>
          <div class="job-listing__badges">
            <span class="job-badge job-badge--dept">Operations</span>
            <span class="job-badge job-badge--new">New</span>
          </div>
          <svg class="job-listing__chevron" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/></svg>
        </div>
        <div class="job-listing__body">
          <div class="job-listing__desc">We are looking for an experienced operations professional to lead our West Africa touring portfolio. You will oversee ground logistics, supplier relationships, and quality assurance across all West African programmes, ensuring every Pier One journey is flawlessly executed.</div>
          <div class="job-listing__section-title">What You'll Do</div>
          <ul class="job-listing__list">
            <li>Manage end-to-end logistics for all West Africa group and bespoke tours</li>
            <li>Build and maintain relationships with hotels, lodges, transport providers, and local guides</li>
            <li>Lead a team of 6 operations coordinators across Ghana, Senegal, and Nigeria</li>
            <li>Drive quality control through post-tour analysis and continuous improvement processes</li>
            <li>Manage supplier contracting, rate negotiation, and capacity planning</li>
          </ul>
          <div class="job-listing__section-title">What We're Looking For</div>
          <ul class="job-listing__list">
            <li>5+ years in tour operations within Africa — ideally West Africa</li>
            <li>Proven team leadership and supplier negotiation experience</li>
            <li>Excellent written and spoken English; French a strong advantage</li>
            <li>Deep knowledge of the West African travel landscape</li>
            <li>Calm under pressure, highly organised, solutions-first mindset</li>
          </ul>
          <div class="job-listing__footer">
            <div class="job-listing__salary">GHS 8,500 – 11,000 / month <span>+ benefits + fam trips</span></div>
            <a href="mailto:careers@pieronetours.com?subject=Application: Senior Tour Operations Manager" class="btn btn-primary">Apply Now <svg class="arrow-icon" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg></a>
          </div>
        </div>
      </div>

      <!-- GUIDES -->
      <div class="job-listing reveal reveal-delay-1" data-dept="guides">
        <div class="job-listing__header" onclick="toggleJob(this.parentElement)">
          <div class="job-listing__icon">🦁</div>
          <div class="job-listing__info">
            <div class="job-listing__title">East Africa Safari Guide (Gold Level)</div>
            <div class="job-listing__meta">
              <span class="job-listing__meta-item"><svg fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/></svg>Nairobi, Kenya</span>
              <span class="job-listing__meta-item"><svg fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path stroke-linecap="round" d="M12 6v6l4 2"/></svg>Full-Time · Field-Based</span>
              <span class="job-listing__meta-item">Posted 1 week ago</span>
            </div>
          </div>
          <div class="job-listing__badges">
            <span class="job-badge job-badge--dept">Guiding</span>
            <span class="job-badge job-badge--type">Field</span>
          </div>
          <svg class="job-listing__chevron" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/></svg>
        </div>
        <div class="job-listing__body">
          <div class="job-listing__desc">An exciting opportunity for a Gold or Silver Level certified safari guide to join our East Africa guiding team. You will lead private and small-group safari experiences across Kenya and Tanzania, delivering the extraordinary wildlife encounters that Pier One is known for.</div>
          <div class="job-listing__section-title">What You'll Do</div>
          <ul class="job-listing__list">
            <li>Lead game drives, bush walks, and wildlife encounters for private and small-group guests</li>
            <li>Provide expert naturalist commentary on flora, fauna, and ecosystems</li>
            <li>Maintain vehicle safety standards and uphold all Pier One guest experience protocols</li>
            <li>Build genuine rapport with guests that generates repeat bookings and five-star reviews</li>
            <li>Mentor junior guides and contribute to training programmes</li>
          </ul>
          <div class="job-listing__section-title">What We're Looking For</div>
          <ul class="job-listing__list">
            <li>Kenya Professional Safari Guides (KPSGA) Gold or Silver Level certification — required</li>
            <li>Minimum 4 years of active guiding in Masai Mara, Amboseli, or Serengeti circuit</li>
            <li>Wilderness First Aid certified (or willing to certify before start date)</li>
            <li>Fluent English; additional languages (German, French, Spanish) a bonus</li>
            <li>Exceptional guest communication and cultural sensitivity</li>
          </ul>
          <div class="job-listing__footer">
            <div class="job-listing__salary">KES 95,000 – 130,000 / month <span>+ gratuity + accommodation</span></div>
            <a href="mailto:careers@pieronetours.com?subject=Application: East Africa Safari Guide" class="btn btn-primary">Apply Now <svg class="arrow-icon" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg></a>
          </div>
        </div>
      </div>

      <!-- SALES -->
      <div class="job-listing reveal reveal-delay-2" data-dept="sales">
        <div class="job-listing__header" onclick="toggleJob(this.parentElement)">
          <div class="job-listing__icon">📣</div>
          <div class="job-listing__info">
            <div class="job-listing__title">Digital Marketing Manager</div>
            <div class="job-listing__meta">
              <span class="job-listing__meta-item"><svg fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/></svg>Accra / Remote</span>
              <span class="job-listing__meta-item"><svg fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path stroke-linecap="round" d="M12 6v6l4 2"/></svg>Full-Time</span>
              <span class="job-listing__meta-item">Posted 2 weeks ago</span>
            </div>
          </div>
          <div class="job-listing__badges">
            <span class="job-badge job-badge--dept">Sales &amp; Marketing</span>
          </div>
          <svg class="job-listing__chevron" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/></svg>
        </div>
        <div class="job-listing__body">
          <div class="job-listing__desc">We are seeking a creative and data-driven Digital Marketing Manager to own and grow our online presence across all channels. You will work closely with our editorial team to tell Africa's most compelling travel stories and convert that audience into bookings.</div>
          <div class="job-listing__section-title">What You'll Do</div>
          <ul class="job-listing__list">
            <li>Own SEO, paid media (Google Ads, Meta), email marketing, and social media strategy</li>
            <li>Commission and edit destination content, itinerary write-ups, and travel guides</li>
            <li>Manage campaign performance tracking and monthly reporting to leadership</li>
            <li>Lead influencer and media partnership strategy across African and international markets</li>
            <li>Collaborate with our web team on conversion rate optimisation and landing page improvements</li>
          </ul>
          <div class="job-listing__section-title">What We're Looking For</div>
          <ul class="job-listing__list">
            <li>4+ years in digital marketing — travel, hospitality or lifestyle brand experience preferred</li>
            <li>Hands-on experience with Google Ads, Meta Ads Manager, and email platforms</li>
            <li>Excellent copywriting skills and a genuine love for travel storytelling</li>
            <li>Analytical mindset — comfortable reading data and optimising from it</li>
            <li>Passion for Africa is non-negotiable</li>
          </ul>
          <div class="job-listing__footer">
            <div class="job-listing__salary">GHS 7,000 – 9,500 / month <span>+ bonus + benefits</span></div>
            <a href="mailto:careers@pieronetours.com?subject=Application: Digital Marketing Manager" class="btn btn-primary">Apply Now <svg class="arrow-icon" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg></a>
          </div>
        </div>
      </div>

      <!-- SALES 2 -->
      <div class="job-listing reveal reveal-delay-3" data-dept="sales">
        <div class="job-listing__header" onclick="toggleJob(this.parentElement)">
          <div class="job-listing__icon">📞</div>
          <div class="job-listing__info">
            <div class="job-listing__title">Travel Sales Consultant</div>
            <div class="job-listing__meta">
              <span class="job-listing__meta-item"><svg fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/></svg>Accra, Ghana</span>
              <span class="job-listing__meta-item"><svg fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path stroke-linecap="round" d="M12 6v6l4 2"/></svg>Full-Time</span>
              <span class="job-listing__meta-item">Posted 3 weeks ago</span>
            </div>
          </div>
          <div class="job-listing__badges">
            <span class="job-badge job-badge--dept">Sales &amp; Marketing</span>
            <span class="job-badge job-badge--new">2 Roles</span>
          </div>
          <svg class="job-listing__chevron" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/></svg>
        </div>
        <div class="job-listing__body">
          <div class="job-listing__desc">We need two consultants to join our busy sales team — handling inbound enquiries, building customised itineraries, and guiding clients through the booking journey with warmth and expertise.</div>
          <div class="job-listing__section-title">What You'll Do</div>
          <ul class="job-listing__list">
            <li>Respond to inbound travel enquiries via phone, email, and WhatsApp</li>
            <li>Build tailored itineraries using our booking platform and destination knowledge</li>
            <li>Convert qualified leads into confirmed bookings, hitting monthly revenue targets</li>
            <li>Maintain post-booking client communication through to departure</li>
          </ul>
          <div class="job-listing__section-title">What We're Looking For</div>
          <ul class="job-listing__list">
            <li>2+ years in a client-facing travel sales or consultancy role</li>
            <li>First-hand knowledge of at least two major African destinations</li>
            <li>Confident communicator with excellent written English</li>
            <li>Organised, target-driven, and genuinely people-passionate</li>
          </ul>
          <div class="job-listing__footer">
            <div class="job-listing__salary">GHS 5,500 – 7,000 / month <span>+ sales commission</span></div>
            <a href="mailto:careers@pieronetours.com?subject=Application: Travel Sales Consultant" class="btn btn-primary">Apply Now <svg class="arrow-icon" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg></a>
          </div>
        </div>
      </div>

      <!-- TECH -->
      <div class="job-listing reveal reveal-delay-4" data-dept="tech">
        <div class="job-listing__header" onclick="toggleJob(this.parentElement)">
          <div class="job-listing__icon">💻</div>
          <div class="job-listing__info">
            <div class="job-listing__title">Full-Stack Web Developer (PHP / Laravel)</div>
            <div class="job-listing__meta">
              <span class="job-listing__meta-item"><svg fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/></svg>Accra / Remote</span>
              <span class="job-listing__meta-item"><svg fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path stroke-linecap="round" d="M12 6v6l4 2"/></svg>Full-Time</span>
              <span class="job-listing__meta-item">Posted 1 week ago</span>
            </div>
          </div>
          <div class="job-listing__badges">
            <span class="job-badge job-badge--dept">Technology</span>
            <span class="job-badge job-badge--new">New</span>
          </div>
          <svg class="job-listing__chevron" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/></svg>
        </div>
        <div class="job-listing__body">
          <div class="job-listing__desc">We are building out our internal systems and booking platform and need a skilled full-stack developer to join our small but mighty tech team. You'll work on features that directly improve the experience of our travellers and the productivity of our operations team.</div>
          <div class="job-listing__section-title">What You'll Do</div>
          <ul class="job-listing__list">
            <li>Develop and maintain our PHP/Laravel-based web platform and booking systems</li>
            <li>Build responsive, accessible front-end features using modern HTML, CSS, and JavaScript</li>
            <li>Collaborate with operations and sales to identify and solve workflow problems with technology</li>
            <li>Manage integrations with payment gateways, CRM systems, and travel APIs</li>
          </ul>
          <div class="job-listing__section-title">What We're Looking For</div>
          <ul class="job-listing__list">
            <li>3+ years of PHP development, ideally with Laravel framework experience</li>
            <li>Strong front-end skills — HTML5, CSS3, vanilla JavaScript or Vue.js</li>
            <li>Experience with MySQL and RESTful API design</li>
            <li>Detail-oriented, self-managing, and able to work across a fast-moving product</li>
          </ul>
          <div class="job-listing__footer">
            <div class="job-listing__salary">GHS 9,000 – 13,000 / month <span>+ benefits</span></div>
            <a href="mailto:careers@pieronetours.com?subject=Application: Full-Stack Web Developer" class="btn btn-primary">Apply Now <svg class="arrow-icon" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg></a>
          </div>
        </div>
      </div>

      <!-- CORPORATE -->
      <div class="job-listing reveal reveal-delay-5" data-dept="corporate">
        <div class="job-listing__header" onclick="toggleJob(this.parentElement)">
          <div class="job-listing__icon">💼</div>
          <div class="job-listing__info">
            <div class="job-listing__title">MICE &amp; Corporate Events Coordinator</div>
            <div class="job-listing__meta">
              <span class="job-listing__meta-item"><svg fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/></svg>Accra, Ghana</span>
              <span class="job-listing__meta-item"><svg fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path stroke-linecap="round" d="M12 6v6l4 2"/></svg>Full-Time</span>
              <span class="job-listing__meta-item">Posted 5 days ago</span>
            </div>
          </div>
          <div class="job-listing__badges">
            <span class="job-badge job-badge--dept">Corporate</span>
          </div>
          <svg class="job-listing__chevron" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/></svg>
        </div>
        <div class="job-listing__body">
          <div class="job-listing__desc">As our MICE business grows across the continent, we need a skilled corporate events coordinator to manage the logistics of meetings, incentives, conferences, and events for our growing list of corporate clients.</div>
          <div class="job-listing__section-title">What You'll Do</div>
          <ul class="job-listing__list">
            <li>Coordinate end-to-end logistics for corporate groups — from venue sourcing to post-event wrap-up</li>
            <li>Develop proposals and presentations for corporate clients across West and Southern Africa</li>
            <li>Build supplier relationships with convention centres, hotels, and event production companies</li>
            <li>Manage budgets, timelines, and on-site event execution</li>
          </ul>
          <div class="job-listing__section-title">What We're Looking For</div>
          <ul class="job-listing__list">
            <li>3+ years in events, MICE, or corporate travel coordination</li>
            <li>Outstanding organisational and project management skills</li>
            <li>Confidence presenting to and managing relationships with senior clients</li>
            <li>Experience working across multiple African markets a strong advantage</li>
          </ul>
          <div class="job-listing__footer">
            <div class="job-listing__salary">GHS 6,500 – 8,500 / month <span>+ event bonuses + benefits</span></div>
            <a href="mailto:careers@pieronetours.com?subject=Application: MICE Coordinator" class="btn btn-primary">Apply Now <svg class="arrow-icon" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg></a>
          </div>
        </div>
      </div>

    </div><!-- /#jobsList -->

  </div>
</section>

<!-- ════════════════════════════════════════════════
     APPLICATION PROCESS
═══════════════════════════════════════════════════ -->
<section class="section section--cream">
  <div class="container">
    <div style="text-align:center;max-width:520px;margin:0 auto 2.5rem;">
      <span class="section-eyebrow reveal">How to Apply</span>
      <h2 class="section-title reveal reveal-delay-1">Our <em>Process</em></h2>
      <p class="section-subtitle reveal reveal-delay-2" style="margin:0 auto;">We aim to make our process respectful of your time — transparent, efficient, and human.</p>
    </div>
    <div class="apply-steps reveal reveal-delay-2">
      <div class="apply-step">
        <div class="apply-step__num">1</div>
        <div class="apply-step__arrow">→</div>
        <div class="apply-step__title">Apply Online</div>
        <div class="apply-step__desc">Send your CV and a brief cover note telling us what excites you about this role — and about Africa — to careers@pieronetours.com.</div>
      </div>
      <div class="apply-step">
        <div class="apply-step__num">2</div>
        <div class="apply-step__arrow">→</div>
        <div class="apply-step__title">Initial Screen</div>
        <div class="apply-step__desc">Our HR team reviews every application personally. If there's a fit, we'll reach out within 5 working days for a short introductory call.</div>
      </div>
      <div class="apply-step">
        <div class="apply-step__num">3</div>
        <div class="apply-step__arrow">→</div>
        <div class="apply-step__title">Interview &amp; Task</div>
        <div class="apply-step__desc">One or two structured interviews with the hiring manager and team lead. Some roles include a short practical task that reflects the actual work.</div>
      </div>
      <div class="apply-step">
        <div class="apply-step__num">4</div>
        <div class="apply-step__title">Offer &amp; Onboarding</div>
        <div class="apply-step__desc">We move fast. If you're the right person, we say so and get you started with a thoughtful onboarding programme — including your first fam trip planning.</div>
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
      <h2 class="cta-band__title">Don't See the Right Role <em>Yet?</em></h2>
      <p class="cta-band__sub">We're always interested in hearing from talented people who love Africa. Send us your CV and tell us how you'd make Pier One even better.</p>
      <div class="cta-band__actions">
        <a href="mailto:careers@pieronetours.com?subject=Open Application — Pier One" class="btn btn-primary btn-lg">
          Send an Open Application
          <svg class="arrow-icon" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
          </svg>
        </a>
        <a href="<?= URLROOT ?>/about" class="btn btn-secondary btn-lg">Learn More About Us</a>
      </div>
    </div>
  </div>
</section>

<script>
// ── Job accordion ──────────────────────────────────
function toggleJob(listing) {
  const isOpen = listing.classList.contains('open');
  document.querySelectorAll('.job-listing.open').forEach(j => j.classList.remove('open'));
  if (!isOpen) listing.classList.add('open');
}

// ── Department Filter ──────────────────────────────
const filterBtns = document.querySelectorAll('.jobs-filter__btn');
const listings = document.querySelectorAll('.job-listing[data-dept]');
const roleCountEl = document.getElementById('roleCount');

filterBtns.forEach(btn => {
  btn.addEventListener('click', () => {
    filterBtns.forEach(b => b.classList.remove('active'));
    btn.classList.add('active');
    const dept = btn.dataset.dept;
    let visible = 0;
    listings.forEach(l => {
      const show = dept === 'all' || l.dataset.dept === dept;
      l.style.display = show ? '' : 'none';
      if (show) visible++;
    });
    roleCountEl.textContent = visible;
  });
});
</script>

<?php include 'includes/footer.php'; ?>