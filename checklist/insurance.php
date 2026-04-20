<?php include '../includes/header.php'; ?>

<style>
/* ═══════════════════════════════════════════════════════
   TRAVEL INSURANCE — checklist/insurance.php
   Pier One Travel & Tour Services
════════════════════════════════════════════════════════ */

/* ── Hero ─────────────────────────────────────────── */
.ins-hero {
  position: relative;
  height: 66vh;
  min-height: 460px;
  display: flex;
  align-items: flex-end;
  overflow: hidden;
}
.ins-hero__bg {
  position: absolute; inset: 0;
  width: 100%; height: 100%;
  object-fit: cover;
  transition: transform 12s ease;
}
.ins-hero:hover .ins-hero__bg { transform: scale(1.04); }
.ins-hero__overlay {
  position: absolute; inset: 0;
  background:
    linear-gradient(to right, rgba(28,16,8,.96) 0%, rgba(28,16,8,.65) 55%, rgba(28,16,8,.22) 100%),
    linear-gradient(to top, rgba(28,16,8,.95) 0%, transparent 58%);
}
.ins-hero__kente {
  position: absolute; bottom: 0; left: 0; right: 0;
  height: 5px;
  background: repeating-linear-gradient(90deg,#C8913A 0,#C8913A 40px,#3D2B1F 40px,#3D2B1F 80px,#C4784A 80px,#C4784A 120px,#2D4A3E 120px,#2D4A3E 160px,#8B6020 160px,#8B6020 200px);
  z-index: 3;
}
.ins-hero__content {
  position: relative; z-index: 2;
  max-width: 1400px; width: 100%; margin: 0 auto;
  padding: 3.5rem clamp(1rem,4vw,3rem);
}
.ins-hero__badge {
  display: inline-flex; align-items: center; gap: .5rem;
  background: rgba(200,145,58,.18); backdrop-filter: blur(8px);
  border: 1px solid rgba(200,145,58,.4); border-radius: 40px;
  padding: .35rem 1.1rem; color: var(--gold-light);
  font-size: .72rem; font-weight: 600; letter-spacing: .16em; text-transform: uppercase;
  margin-bottom: 1.1rem;
}
.ins-hero__title { font-family: 'Cormorant Garamond', serif; font-size: clamp(1.8rem,5.5vw,4rem); font-weight: 600; color: var(--white); line-height: 1.08; letter-spacing: -.015em; margin-bottom: 1.1rem; }
.ins-hero__title em { font-style: italic; color: var(--gold-light); }
.ins-hero__subtitle { font-size: clamp(.88rem,1.5vw,1.03rem); color: rgba(255,255,255,.72); line-height: 1.78; max-width: 52ch; margin-bottom: 1.75rem; }
.ins-hero__meta { display: flex; align-items: center; gap: 2rem; flex-wrap: wrap; color: rgba(255,255,255,.62); font-size: .8rem; }
.ins-hero__meta-item { display: flex; align-items: center; gap: .4rem; }
.ins-hero__meta-item svg { width: 14px; height: 14px; color: var(--gold); }

/* ── Warning Banner ───────────────────────────────── */
.warning-banner {
  background: linear-gradient(135deg, #7A3A2A, #5C2A1E);
  border-radius: var(--radius-lg);
  padding: 1.5rem 2rem;
  display: flex;
  align-items: center;
  gap: 1.25rem;
  margin-bottom: 3rem;
  border: 1px solid rgba(200,145,58,.3);
}
.warning-banner__icon { font-size: 2rem; flex-shrink: 0; }
.warning-banner__title { font-family: 'Cormorant Garamond', serif; font-size: 1.1rem; font-weight: 600; color: var(--cream); margin-bottom: .2rem; }
.warning-banner__text { font-size: .82rem; color: rgba(242,232,213,.72); line-height: 1.6; }

/* ── Two-Column Layout ────────────────────────────── */
.ins-layout {
  display: grid;
  grid-template-columns: 1fr 340px;
  gap: 3rem;
  align-items: start;
}
.ins-sidebar {
  position: sticky;
  top: 1.5rem;
  display: flex;
  flex-direction: column;
  gap: 1.25rem;
}

/* ── Coverage Cards ───────────────────────────────── */
.coverage-section { margin-bottom: 2.5rem; }
.coverage-section__title {
  font-family: 'Cormorant Garamond', serif;
  font-size: 1.5rem;
  font-weight: 600;
  color: var(--earth);
  margin-bottom: 1.25rem;
  display: flex;
  align-items: center;
  gap: .7rem;
}
.coverage-grid {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 1rem;
}
.coverage-card {
  background: var(--white);
  border: 1px solid var(--border-soft);
  border-radius: var(--radius-lg);
  padding: 1.5rem;
  position: relative;
  transition: border-color var(--trans-fast), box-shadow var(--trans-fast);
}
.coverage-card:hover { border-color: var(--gold); box-shadow: var(--shadow-sm); }
.coverage-card--required { border-left: 3px solid var(--gold); }
.coverage-card--important { border-left: 3px solid #2D4A3E; }
.coverage-card--optional { border-left: 3px solid var(--border); }
.coverage-card__icon { font-size: 1.75rem; margin-bottom: .75rem; }
.coverage-card__badge {
  position: absolute; top: 1.25rem; right: 1.25rem;
  font-size: .6rem; font-weight: 700;
  padding: .2rem .65rem;
  border-radius: 40px;
  text-transform: uppercase; letter-spacing: .08em;
}
.badge--must { background: rgba(200,145,58,.15); color: var(--gold-dark); border: 1px solid rgba(200,145,58,.3); }
.badge--should { background: rgba(45,74,62,.1); color: #2D4A3E; border: 1px solid rgba(45,74,62,.25); }
.badge--consider { background: var(--gold-pale); color: var(--text-mid); border: 1px solid var(--border); }
.coverage-card__title { font-family: 'Cormorant Garamond', serif; font-size: 1.08rem; font-weight: 600; color: var(--earth); margin-bottom: .4rem; }
.coverage-card__desc { font-size: .8rem; color: var(--text-soft); line-height: 1.7; margin-bottom: .75rem; }
.coverage-card__min { font-size: .72rem; font-weight: 600; color: var(--gold); }

/* ── Africa-Specific Risks ────────────────────────── */
.risk-strip {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 1rem;
  margin-bottom: 2.5rem;
}
.risk-item {
  background: var(--white);
  border: 1px solid var(--border-soft);
  border-radius: var(--radius-lg);
  padding: 1.5rem;
  text-align: center;
  transition: transform var(--trans-fast), box-shadow var(--trans-fast);
}
.risk-item:hover { transform: translateY(-3px); box-shadow: var(--shadow-sm); }
.risk-item__icon { font-size: 1.8rem; margin-bottom: .7rem; }
.risk-item__title { font-family: 'Cormorant Garamond', serif; font-size: 1rem; font-weight: 600; color: var(--earth); margin-bottom: .35rem; }
.risk-item__desc { font-size: .77rem; color: var(--text-soft); line-height: 1.65; }

/* ── Comparison Table ─────────────────────────────── */
.compare-table {
  width: 100%;
  border-collapse: collapse;
  border-radius: var(--radius-lg);
  overflow: hidden;
  font-size: .83rem;
  margin-bottom: 2.5rem;
  border: 1px solid var(--border-soft);
}
.compare-table thead th {
  background: var(--earth);
  color: var(--cream);
  font-family: 'Cormorant Garamond', serif;
  font-size: 1rem;
  font-weight: 600;
  padding: 1rem 1.25rem;
  text-align: left;
}
.compare-table thead th:first-child { font-size: .85rem; font-family: 'DM Sans', sans-serif; font-weight: 500; color: rgba(242,232,213,.7); }
.compare-table tbody tr { border-bottom: 1px solid var(--border-soft); transition: background var(--trans-fast); }
.compare-table tbody tr:last-child { border-bottom: none; }
.compare-table tbody tr:hover { background: rgba(200,145,58,.04); }
.compare-table tbody td { padding: .85rem 1.25rem; color: var(--text-mid); vertical-align: top; }
.compare-table tbody td:first-child { font-weight: 500; color: var(--earth); }
.compare-icon--yes { color: #2D4A3E; font-weight: 700; }
.compare-icon--no { color: #C0392B; }
.compare-icon--partial { color: var(--gold-dark); font-style: italic; font-size: .76rem; }

/* ── What's NOT Covered ───────────────────────────── */
.exclusions-grid {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 1rem;
  margin-bottom: 2.5rem;
}
.exclusion-item {
  display: flex;
  gap: .8rem;
  align-items: flex-start;
  padding: 1.1rem 1.25rem;
  background: var(--white);
  border: 1px solid var(--border-soft);
  border-radius: var(--radius-lg);
  font-size: .8rem;
  color: var(--text-mid);
  line-height: 1.65;
}
.exclusion-item__icon { font-size: 1.1rem; flex-shrink: 0; }
.exclusion-item strong { display: block; color: var(--earth); font-size: .85rem; margin-bottom: .15rem; }

/* ── Africa Tips Section ──────────────────────────── */
.africa-tips { display: grid; grid-template-columns: 1fr 1fr; gap: 1.25rem; margin-bottom: 2.5rem; }
.africa-tip {
  display: flex;
  gap: 1rem;
  align-items: flex-start;
  background: var(--white);
  border: 1px solid var(--border-soft);
  border-radius: var(--radius-lg);
  padding: 1.25rem;
  transition: border-color var(--trans-fast);
}
.africa-tip:hover { border-color: var(--gold); }
.africa-tip__icon { font-size: 1.5rem; flex-shrink: 0; }
.africa-tip__title { font-family: 'Cormorant Garamond', serif; font-size: 1rem; font-weight: 600; color: var(--earth); margin-bottom: .2rem; }
.africa-tip__desc { font-size: .78rem; color: var(--text-soft); line-height: 1.65; }

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

/* ── Sidebar Widgets ──────────────────────────────── */
.ins-quick-check {
  background: linear-gradient(145deg, var(--earth), #5C3D2E);
  border-radius: var(--radius-xl);
  padding: 1.75rem;
}
.ins-quick-check__title { font-family: 'Cormorant Garamond', serif; font-size: 1.2rem; font-weight: 600; color: var(--cream); margin-bottom: .35rem; }
.ins-quick-check__sub { font-size: .76rem; color: rgba(242,232,213,.6); line-height: 1.6; margin-bottom: 1.5rem; }
.ins-checklist { list-style: none; padding: 0; margin: 0; display: flex; flex-direction: column; gap: .6rem; }
.ins-checklist__item { display: flex; align-items: flex-start; gap: .65rem; font-size: .78rem; color: rgba(242,232,213,.8); line-height: 1.55; }
.ins-checklist__item::before { content: '✓'; color: var(--gold); font-weight: 700; font-size: .75rem; flex-shrink: 0; margin-top: 1px; }

.ins-tip-widget {
  background: var(--white);
  border: 1px solid var(--border-soft);
  border-radius: var(--radius-xl);
  padding: 1.5rem;
}
.ins-tip-widget__title { font-family: 'Cormorant Garamond', serif; font-size: 1.05rem; font-weight: 600; color: var(--earth); margin-bottom: 1rem; }
.ins-tip { display: flex; gap: .7rem; align-items: flex-start; margin-bottom: .8rem; font-size: .77rem; color: var(--text-soft); line-height: 1.65; }
.ins-tip:last-child { margin-bottom: 0; }
.ins-tip__icon { font-size: .95rem; flex-shrink: 0; }

.ins-cta-widget {
  background: var(--gold-pale);
  border: 1px solid var(--border);
  border-radius: var(--radius-xl);
  padding: 1.5rem;
  text-align: center;
}
.ins-cta-widget__title { font-family: 'Cormorant Garamond', serif; font-size: 1.08rem; font-weight: 600; color: var(--earth); margin-bottom: .4rem; }
.ins-cta-widget__sub { font-size: .76rem; color: var(--text-soft); line-height: 1.6; margin-bottom: 1.25rem; }
.ins-contact-widget { background: var(--white); border: 1px solid var(--border-soft); border-radius: var(--radius-xl); padding: 1.5rem; }

/* ── Section Dividers ─────────────────────────────── */
.content-block { background: var(--white); border: 1px solid var(--border-soft); border-radius: var(--radius-xl); padding: 2rem; margin-bottom: 2rem; }
.content-block__title { font-family: 'Cormorant Garamond', serif; font-size: 1.4rem; font-weight: 600; color: var(--earth); margin-bottom: .5rem; display: flex; align-items: center; gap: .6rem; }
.content-block__intro { font-size: .84rem; color: var(--text-soft); line-height: 1.75; margin-bottom: 1.5rem; }

/* ── CTA Band ─────────────────────────────────────── */
.cta-band { background: linear-gradient(135deg, var(--earth), #5C3D2E); border-radius: var(--radius-xl); padding: clamp(2.5rem,5vw,4rem); text-align: center; position: relative; overflow: hidden; }
.cta-band::before { content: ''; position: absolute; top: -80px; right: -80px; width: 300px; height: 300px; background: var(--gold); border-radius: 50%; opacity: .05; }
.cta-band__title { font-family: 'Cormorant Garamond', serif; font-size: clamp(1.8rem,4vw,3rem); font-weight: 600; color: var(--cream); margin-bottom: .75rem; position: relative; z-index: 1; }
.cta-band__title em { font-style: italic; color: var(--gold-light); }
.cta-band__sub { font-size: .95rem; color: rgba(242,232,213,.68); max-width: 44ch; margin: 0 auto 2rem; line-height: 1.75; position: relative; z-index: 1; }
.cta-band__actions { display: flex; gap: 1rem; justify-content: center; flex-wrap: wrap; position: relative; z-index: 1; }

/* ── Responsive ──────────────────────────────────── */
@media (max-width: 1100px) {
  .ins-layout { grid-template-columns: 1fr; }
  .ins-sidebar { position: static; }
  .coverage-grid { grid-template-columns: 1fr; }
  .risk-strip { grid-template-columns: 1fr 1fr; }
  .africa-tips { grid-template-columns: 1fr; }
  .exclusions-grid { grid-template-columns: 1fr; }
}
@media (max-width: 640px) {
  .risk-strip { grid-template-columns: 1fr; }
  .compare-table { font-size: .76rem; }
  .compare-table thead th, .compare-table tbody td { padding: .7rem .85rem; }
}
</style>

<!-- ════════════════════════════════════════════════
     HERO
═══════════════════════════════════════════════════ -->
<section class="ins-hero">
  <img class="ins-hero__bg"
    src="https://images.unsplash.com/photo-1559027615-cd4628902d4a?w=1920&q=80"
    alt="Travel insurance Africa"
    loading="eager" />
  <div class="ins-hero__overlay"></div>
  <div class="ins-hero__kente"></div>
  <div class="ins-hero__content">
    <nav class="breadcrumb" style="margin-bottom:1rem;">
      <a href="<?= URLROOT ?>">Home</a>
      <span class="breadcrumb__sep">›</span>
      <a href="#">Resources</a>
      <span class="breadcrumb__sep">›</span>
      <a href="<?= URLROOT ?>/checklist/plan">Plan Your Trip</a>
      <span class="breadcrumb__sep">›</span>
      <span class="breadcrumb__current">Travel Insurance</span>
    </nav>
    <div class="ins-hero__badge">🛡️ Travel Insurance Guide</div>
    <h1 class="ins-hero__title">Travel Africa <em>Protected.</em><br>Arrive in Peace.</h1>
    <p class="ins-hero__subtitle">The right insurance isn't an afterthought — it's the foundation of a confident Africa journey. Understand exactly what cover you need, what to avoid, and what Africa-specific risks to address before you fly.</p>
    <div class="ins-hero__meta">
      <span class="ins-hero__meta-item"><svg fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>Africa-Specific Guidance</span>
      <span class="ins-hero__meta-item"><svg fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>Medical Evacuation Cover</span>
      <span class="ins-hero__meta-item"><svg fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z"/></svg>Individuals, Families &amp; Groups</span>
    </div>
  </div>
</section>

<!-- ════════════════════════════════════════════════
     MAIN CONTENT
═══════════════════════════════════════════════════ -->
<section class="section section--sand">
  <div class="container">

    <div class="warning-banner reveal">
      <div class="warning-banner__icon">⚠️</div>
      <div>
        <div class="warning-banner__title">Travel insurance is not optional for Africa. It is essential.</div>
        <div class="warning-banner__text">Medical evacuation from a remote African location to a facility capable of treating serious illness can cost $50,000–$200,000+. Without insurance, this cost falls entirely to you or your next of kin. Pier One requires all participants to hold valid comprehensive travel insurance before departure.</div>
      </div>
    </div>

    <div class="ins-layout">
      <!-- ─── Main Content ─── -->
      <div>

        <!-- Essential Cover -->
        <div class="content-block reveal">
          <div class="content-block__title">🛡️ Essential Cover — What You Must Have</div>
          <div class="content-block__intro">For travel across Africa, your policy must include each of the following categories as a non-negotiable minimum. Standard holiday insurance policies often exclude these — read the policy wording carefully before purchase.</div>
          <div class="coverage-grid">
            <div class="coverage-card coverage-card--required">
              <div class="coverage-card__icon">🚁</div>
              <span class="coverage-card__badge badge--must">Must Have</span>
              <div class="coverage-card__title">Emergency Medical Evacuation</div>
              <div class="coverage-card__desc">Covers air ambulance or medically-equipped evacuation to the nearest appropriate medical facility — or repatriation to your home country for treatment.</div>
              <div class="coverage-card__min">Minimum: $500,000 · Recommended: Unlimited</div>
            </div>
            <div class="coverage-card coverage-card--required">
              <div class="coverage-card__icon">🏥</div>
              <span class="coverage-card__badge badge--must">Must Have</span>
              <div class="coverage-card__title">Emergency Medical &amp; Hospital Expenses</div>
              <div class="coverage-card__desc">Covers inpatient and outpatient treatment, surgery, diagnostic tests, and emergency dental. Essential for any destination with limited public healthcare infrastructure.</div>
              <div class="coverage-card__min">Minimum: $100,000 · Recommended: $500,000+</div>
            </div>
            <div class="coverage-card coverage-card--required">
              <div class="coverage-card__icon">🦠</div>
              <span class="coverage-card__badge badge--must">Must Have</span>
              <div class="coverage-card__title">Infectious Disease Cover</div>
              <div class="coverage-card__desc">Explicitly covers treatment for tropical diseases including malaria, typhoid, dengue fever, and other vector-borne illnesses. Many standard policies exclude these — verify in writing.</div>
              <div class="coverage-card__min">Confirm cover is explicit — not assumed</div>
            </div>
            <div class="coverage-card coverage-card--required">
              <div class="coverage-card__icon">✈️</div>
              <span class="coverage-card__badge badge--must">Must Have</span>
              <div class="coverage-card__title">Trip Cancellation &amp; Curtailment</div>
              <div class="coverage-card__desc">Reimburses pre-paid tour costs, flights, and accommodation if you must cancel before departure or cut your trip short due to illness, bereavement, or other covered events.</div>
              <div class="coverage-card__min">Cover should match total trip cost</div>
            </div>
            <div class="coverage-card coverage-card--required">
              <div class="coverage-card__icon">💀</div>
              <span class="coverage-card__badge badge--must">Must Have</span>
              <div class="coverage-card__title">Repatriation of Remains</div>
              <div class="coverage-card__desc">Covers the cost of returning the deceased to their home country in the event of death abroad. Cost without insurance can exceed $20,000–$40,000 from remote African locations.</div>
              <div class="coverage-card__min">Minimum: Full repatriation cost covered</div>
            </div>
            <div class="coverage-card coverage-card--required">
              <div class="coverage-card__icon">🆘</div>
              <span class="coverage-card__badge badge--must">Must Have</span>
              <div class="coverage-card__title">24/7 Emergency Assistance Helpline</div>
              <div class="coverage-card__desc">A direct emergency telephone line — not a chat bot — staffed 24 hours for medical referrals, evacuation coordination, and crisis support from anywhere in Africa.</div>
              <div class="coverage-card__min">Must be accessible 24/7 internationally</div>
            </div>
          </div>
        </div>

        <!-- Recommended Cover -->
        <div class="content-block reveal">
          <div class="content-block__title">⭐ Highly Recommended Cover</div>
          <div class="content-block__intro">In addition to the essentials above, Pier One strongly recommends the following cover categories for African travel, particularly for adventure activities, wildlife experiences, and longer journeys.</div>
          <div class="coverage-grid">
            <div class="coverage-card coverage-card--important">
              <div class="coverage-card__icon">🦁</div>
              <span class="coverage-card__badge badge--should">Recommended</span>
              <div class="coverage-card__title">Adventure &amp; Activity Cover</div>
              <div class="coverage-card__desc">Covers safari game walks, white-water rafting, mountain trekking (Kilimanjaro, Rwenzori), scuba diving, and other adventure activities. Often excluded from standard policies as "hazardous activities".</div>
              <div class="coverage-card__min">Specify all planned activities to your insurer</div>
            </div>
            <div class="coverage-card coverage-card--important">
              <div class="coverage-card__icon">💼</div>
              <span class="coverage-card__badge badge--should">Recommended</span>
              <div class="coverage-card__title">Lost, Stolen or Delayed Baggage</div>
              <div class="coverage-card__desc">Replaces essential items if luggage is lost or significantly delayed — particularly important on multi-leg African itineraries where connecting flights increase baggage risk.</div>
              <div class="coverage-card__min">Minimum: $1,500 baggage cover</div>
            </div>
            <div class="coverage-card coverage-card--important">
              <div class="coverage-card__icon">🛂</div>
              <span class="coverage-card__badge badge--should">Recommended</span>
              <div class="coverage-card__title">Flight Delay &amp; Missed Connection</div>
              <div class="coverage-card__desc">Compensates for additional accommodation and meals if flights are significantly delayed. African regional airports occasionally experience multi-hour delays affecting connecting itineraries.</div>
              <div class="coverage-card__min">Typically from 6–12 hour delays</div>
            </div>
            <div class="coverage-card coverage-card--important">
              <div class="coverage-card__icon">🏔️</div>
              <span class="coverage-card__badge badge--should">Recommended</span>
              <div class="coverage-card__title">High-Altitude Cover</div>
              <div class="coverage-card__desc">If trekking Kilimanjaro (5,895m), Mount Kenya, or the Simien Mountains, confirm your policy explicitly covers altitude-related illness and high-altitude evacuation — many don't.</div>
              <div class="coverage-card__min">Must state altitude limit — aim for 6,000m+</div>
            </div>
          </div>
        </div>

        <!-- Africa-Specific Risks -->
        <div class="content-block reveal">
          <div class="content-block__title">🌍 Africa-Specific Risks to Address</div>
          <div class="content-block__intro">Africa presents travel risks that differ from European or Caribbean destinations. Ensure your policy explicitly covers or addresses each of the following.</div>
          <div class="risk-strip">
            <div class="risk-item">
              <div class="risk-item__icon">🦟</div>
              <div class="risk-item__title">Malaria &amp; Tropical Disease</div>
              <div class="risk-item__desc">Many budget policies exclude tropical diseases by name. Demand written confirmation that malaria, typhoid, and dengue are covered.</div>
            </div>
            <div class="risk-item">
              <div class="risk-item__icon">🏚️</div>
              <div class="risk-item__title">Limited Medical Infrastructure</div>
              <div class="risk-item__desc">Outside major cities, hospital quality varies enormously. Evacuation cover is critical — not optional — for rural and wilderness travel.</div>
            </div>
            <div class="risk-item">
              <div class="risk-item__icon">🛣️</div>
              <div class="risk-item__title">Road Traffic Accident</div>
              <div class="risk-item__desc">Road accidents are a leading cause of injury for travellers in Africa. Confirm medical cover applies to injuries sustained as a vehicle passenger.</div>
            </div>
            <div class="risk-item">
              <div class="risk-item__icon">⚡</div>
              <div class="risk-item__title">Political Instability &amp; Civil Unrest</div>
              <div class="risk-item__desc">Political risk cover (evacuation due to civil unrest or political instability) is available from specialist providers — worth considering for certain destinations.</div>
            </div>
            <div class="risk-item">
              <div class="risk-item__icon">🌊</div>
              <div class="risk-item__title">Water-Based Activity Risk</div>
              <div class="risk-item__desc">Boat safaris, island ferries, snorkelling, and diving all carry water-based risk. Confirm cover applies to both leisure water activities and transit by water.</div>
            </div>
            <div class="risk-item">
              <div class="risk-item__icon">🔒</div>
              <div class="risk-item__title">Valuables &amp; Electronic Theft</div>
              <div class="risk-item__desc">Petty theft targets cameras, phones, and laptops in city markets and public transport. Ensure "valuables" cover is sufficient and items are listed individually if high-value.</div>
            </div>
          </div>
        </div>

        <!-- Policy Types Comparison -->
        <div class="content-block reveal">
          <div class="content-block__title">📊 Comparing Policy Types for Africa</div>
          <div class="content-block__intro">Not all travel insurance products are equal. This comparison helps you identify the right type of policy for your Pier One trip.</div>
          <table class="compare-table">
            <thead>
              <tr>
                <th>Cover Feature</th>
                <th>Budget / Basic</th>
                <th>Standard Holiday</th>
                <th>Specialist Africa Policy</th>
              </tr>
            </thead>
            <tbody>
              <tr><td>Emergency Medical (£/$ amount)</td><td class="compare-icon--partial">Low — $20,000–50k</td><td class="compare-icon--partial">Medium — $50k–100k</td><td class="compare-icon--yes">High — $500k–Unlimited</td></tr>
              <tr><td>Medical Evacuation / Repatriation</td><td class="compare-icon--no">✕ Often excluded</td><td class="compare-icon--partial">Partial — varies</td><td class="compare-icon--yes">✓ Always included</td></tr>
              <tr><td>Malaria &amp; Tropical Disease</td><td class="compare-icon--no">✕ Typically excluded</td><td class="compare-icon--no">✕ Often excluded</td><td class="compare-icon--yes">✓ Explicitly included</td></tr>
              <tr><td>Adventure / Safari Activities</td><td class="compare-icon--no">✕ Excluded</td><td class="compare-icon--no">✕ Excluded</td><td class="compare-icon--yes">✓ Included or add-on</td></tr>
              <tr><td>24/7 Emergency Assistance</td><td class="compare-icon--partial">Basic</td><td class="compare-icon--partial">Standard hours</td><td class="compare-icon--yes">✓ True 24/7</td></tr>
              <tr><td>High-Altitude Cover</td><td class="compare-icon--no">✕ Excluded</td><td class="compare-icon--no">✕ Excluded</td><td class="compare-icon--yes">✓ To 6,000m+</td></tr>
              <tr><td>Political Evacuation</td><td class="compare-icon--no">✕ Excluded</td><td class="compare-icon--no">✕ Excluded</td><td class="compare-icon--partial">Available as add-on</td></tr>
              <tr><td>Suitable for Africa?</td><td style="color:#C0392B;font-weight:700;">Not Recommended</td><td style="color:var(--gold-dark);font-weight:700;">With Caution</td><td style="color:#2D4A3E;font-weight:700;">✓ Recommended</td></tr>
            </tbody>
          </table>
        </div>

        <!-- What's NOT Covered -->
        <div class="content-block reveal">
          <div class="content-block__title">🚫 Common Policy Exclusions to Watch For</div>
          <div class="content-block__intro">Read your policy wording carefully for the following exclusions — they are frequently the difference between a claim being paid and being rejected.</div>
          <div class="exclusions-grid">
            <div class="exclusion-item"><div class="exclusion-item__icon">❌</div><div><strong>Pre-existing medical conditions</strong>Many policies exclude claims arising from conditions you had before the policy start date. Always declare all conditions — failure to do so can void your entire policy.</div></div>
            <div class="exclusion-item"><div class="exclusion-item__icon">❌</div><div><strong>Alcohol or drug-related incidents</strong>Injuries or medical emergencies judged to be connected to alcohol or drug use are routinely excluded. This includes traffic accidents if impairment is suspected.</div></div>
            <div class="exclusion-item"><div class="exclusion-item__icon">❌</div><div><strong>Travelling against government advice</strong>If your government has issued a "do not travel" or "advise against all travel" warning for a destination and you travel anyway, most policies will not pay out.</div></div>
            <div class="exclusion-item"><div class="exclusion-item__icon">❌</div><div><strong>Unattended valuables</strong>Claims for theft of items left unattended — even briefly in a vehicle or on a beach — are frequently rejected. Keep valuables on your person.</div></div>
            <div class="exclusion-item"><div class="exclusion-item__icon">❌</div><div><strong>Unlicensed vehicle or driver</strong>Incidents involving unlicensed drivers (motorbike taxis in particular) may be excluded. Always use Pier One's vetted transport partners.</div></div>
            <div class="exclusion-item"><div class="exclusion-item__icon">❌</div><div><strong>Activities not declared at purchase</strong>If you plan to dive, trek, or take part in adventure activities and don't declare them when buying the policy, any related claim may be rejected.</div></div>
          </div>
        </div>

        <!-- Practical Africa Tips -->
        <div class="content-block reveal">
          <div class="content-block__title">💡 Practical Insurance Tips for Africa Travel</div>
          <div class="africa-tips">
            <div class="africa-tip">
              <div class="africa-tip__icon">📱</div>
              <div>
                <div class="africa-tip__title">Save your insurer's emergency number offline</div>
                <div class="africa-tip__desc">Screenshot your policy number and the 24/7 emergency line in your phone's notes app — accessible without data. Give a copy to your Pier One host on arrival.</div>
              </div>
            </div>
            <div class="africa-tip">
              <div class="africa-tip__icon">🧾</div>
              <div>
                <div class="africa-tip__title">Keep all receipts for any medical expense</div>
                <div class="africa-tip__desc">No receipt = no claim. Even for small pharmacy purchases, collect a written receipt. Insurers require documentation for every expense.</div>
              </div>
            </div>
            <div class="africa-tip">
              <div class="africa-tip__icon">📞</div>
              <div>
                <div class="africa-tip__title">Call your insurer before major medical treatment</div>
                <div class="africa-tip__desc">In non-emergency situations, always call your insurer's assistance line before agreeing to treatment — they can pre-approve costs and recommend vetted facilities.</div>
              </div>
            </div>
            <div class="africa-tip">
              <div class="africa-tip__icon">🚓</div>
              <div>
                <div class="africa-tip__title">Get a police report for theft or loss within 24 hours</div>
                <div class="africa-tip__desc">Claims for stolen or lost property almost always require a local police report. Pier One can assist you in locating the correct authority and making a report.</div>
              </div>
            </div>
            <div class="africa-tip">
              <div class="africa-tip__icon">👨‍👩‍👧‍👦</div>
              <div>
                <div class="africa-tip__title">Group and family policies can reduce premiums</div>
                <div class="africa-tip__desc">If travelling as a family or corporate group, a group policy can significantly reduce the per-person cost while ensuring everyone has equivalent cover.</div>
              </div>
            </div>
            <div class="africa-tip">
              <div class="africa-tip__icon">🗓️</div>
              <div>
                <div class="africa-tip__title">Buy insurance the same day you book your tour</div>
                <div class="africa-tip__desc">Cancellation cover only applies from the policy purchase date. If you fall ill or have a family emergency after booking but before purchasing insurance, you won't be covered.</div>
              </div>
            </div>
          </div>
        </div>

        <!-- FAQ -->
        <div class="content-block reveal">
          <div class="content-block__title">❓ Frequently Asked Insurance Questions</div>
          <div class="faq-list">
            <div class="faq-item">
              <button class="faq-btn" onclick="toggleFaq(this)">Can Pier One arrange insurance for me?<div class="faq-icon">+</div></button>
              <div class="faq-body"><div class="faq-content">Pier One does not sell insurance directly, but we have partnerships with specialist Africa travel insurance providers and can recommend products suited to your specific itinerary, activity profile, and health needs. Contact our coordinator and we'll connect you with the right options.</div></div>
            </div>
            <div class="faq-item">
              <button class="faq-btn" onclick="toggleFaq(this)">My credit card provides travel insurance — is that sufficient?<div class="faq-icon">+</div></button>
              <div class="faq-body"><div class="faq-content">Almost always no — for Africa. Credit card travel insurance typically provides very low medical cover ($20,000–$50,000), excludes medical evacuation, excludes tropical diseases, and does not cover adventure activities. Always read the policy wording carefully. For African travel, we strongly recommend a dedicated specialist policy in addition to or in replacement of any card-linked cover.</div></div>
            </div>
            <div class="faq-item">
              <button class="faq-btn" onclick="toggleFaq(this)">What if I have a pre-existing medical condition?<div class="faq-icon">+</div></button>
              <div class="faq-body"><div class="faq-content">Always declare all pre-existing conditions when purchasing your policy. Many specialist insurers will cover pre-existing conditions — sometimes at a small additional premium. Failure to declare a condition that is later relevant to a claim can invalidate your entire policy, not just the related claim.</div></div>
            </div>
            <div class="faq-item">
              <button class="faq-btn" onclick="toggleFaq(this)">Do I need insurance if I'm only volunteering, not on safari?<div class="faq-icon">+</div></button>
              <div class="faq-body"><div class="faq-content">Absolutely — in fact, volunteer mission travel can involve greater health risks than leisure travel, due to exposure to communities, physical project work, and remote locations. Pier One's volunteer programme requires all participants to hold valid comprehensive insurance including medical evacuation cover as a condition of participation.</div></div>
            </div>
            <div class="faq-item">
              <button class="faq-btn" onclick="toggleFaq(this)">What is the minimum insurance cover Pier One accepts?<div class="faq-icon">+</div></button>
              <div class="faq-body"><div class="faq-content">Pier One requires a minimum of $100,000 emergency medical cover, $500,000 medical evacuation cover, full trip cancellation to the value of your booking, and 24/7 emergency assistance. We strongly recommend higher limits, particularly for medical cover, and require documented cover confirmation before departure.</div></div>
            </div>
            <div class="faq-item">
              <button class="faq-btn" onclick="toggleFaq(this)">When should I buy travel insurance?<div class="faq-icon">+</div></button>
              <div class="faq-body"><div class="faq-content">The same day you book your Pier One tour or pay any non-refundable deposit. This ensures cancellation cover applies from the earliest possible point. Waiting until a week before departure leaves you exposed to any cancellation events that occur in the months before travel.</div></div>
            </div>
          </div>
        </div>

      </div><!-- /.main -->

      <!-- ─── Sidebar ─── -->
      <div class="ins-sidebar">

        <!-- Quick Insurance Checklist -->
        <div class="ins-quick-check reveal reveal-delay-1">
          <div class="ins-quick-check__title">Policy Verification Checklist</div>
          <div class="ins-quick-check__sub">Before you purchase, confirm your policy includes all of the following:</div>
          <ul class="ins-checklist">
            <li class="ins-checklist__item">Emergency medical cover $100,000+</li>
            <li class="ins-checklist__item">Medical evacuation / air ambulance — ideally unlimited</li>
            <li class="ins-checklist__item">Malaria &amp; tropical disease explicitly covered</li>
            <li class="ins-checklist__item">Repatriation of remains</li>
            <li class="ins-checklist__item">Trip cancellation to full trip value</li>
            <li class="ins-checklist__item">Adventure activities declared and covered</li>
            <li class="ins-checklist__item">24/7 emergency assistance line (not chat bot)</li>
            <li class="ins-checklist__item">Pre-existing conditions declared and accepted</li>
            <li class="ins-checklist__item">Applicable to all planned destinations</li>
            <li class="ins-checklist__item">Policy valid for entire trip duration</li>
          </ul>
        </div>

        <!-- Costs Breakdown -->
        <div class="ins-tip-widget reveal reveal-delay-2">
          <div class="ins-tip-widget__title">💰 Realistic Cost Estimates</div>
          <div class="ins-tip"><div class="ins-tip__icon">👤</div><div><strong style="color:var(--earth)">Solo traveller, 2 weeks:</strong> $80–$200 for a comprehensive Africa-specialist policy — roughly 3–5% of total trip cost.</div></div>
          <div class="ins-tip"><div class="ins-tip__icon">👨‍👩‍👧</div><div><strong style="color:var(--earth)">Family of 4, 3 weeks:</strong> $280–$550 for full family cover with adventure activities and evacuation included.</div></div>
          <div class="ins-tip"><div class="ins-tip__icon">🏢</div><div><strong style="color:var(--earth)">Corporate group, 10+ people:</strong> Group policies reduce per-person cost significantly. Contact us for a referral to a group insurer.</div></div>
          <div class="ins-tip"><div class="ins-tip__icon">⚠️</div><div>Without insurance, a single medical evacuation can cost more than your entire annual salary. The premium is trivial by comparison.</div></div>
        </div>

        <!-- Plan Trip CTA -->
        <div class="ins-cta-widget reveal reveal-delay-3">
          <div class="ins-cta-widget__title">📋 Back to Trip Planner</div>
          <div class="ins-cta-widget__sub">Continue working through your complete pre-departure checklist for a stress-free Africa journey.</div>
          <a href="<?= URLROOT ?>/checklist/plan" class="btn btn-primary" style="width:100%;justify-content:center;">
            Trip Planning Checklist <svg class="arrow-icon" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
          </a>
        </div>

        <!-- Contact -->
        <div class="ins-contact-widget reveal reveal-delay-4">
          <div style="font-family:'Cormorant Garamond',serif;font-size:1.05rem;font-weight:600;color:var(--earth);margin-bottom:.35rem;">💬 Insurance Questions?</div>
          <div style="font-size:.77rem;color:var(--text-soft);line-height:1.65;margin-bottom:1rem;">Our coordinators can recommend the right policy for your specific itinerary and activity profile.</div>
          <a href="mailto:info@pieronetours.com" class="btn btn-secondary" style="width:100%;justify-content:center;font-size:.8rem;">Email a Coordinator</a>
          <div style="text-align:center;margin-top:.75rem;font-size:.72rem;color:var(--text-muted);">We respond within 24 hours, Mon–Sat</div>
        </div>

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
      <h2 class="cta-band__title">Covered. Confident.<br><em>Ready for Africa.</em></h2>
      <p class="cta-band__sub">Sort your insurance, complete your checklist, and let Pier One take care of the rest. Your journey of a lifetime awaits.</p>
      <div class="cta-band__actions">
        <a href="<?= URLROOT ?>/checklist/plan" class="btn btn-primary btn-lg">Complete Trip Checklist<svg class="arrow-icon" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg></a>
        <a href="<?= URLROOT ?>/tours" class="btn btn-secondary btn-lg">Browse Our Tours</a>
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
  if (!isOpen) { btn.classList.add('open'); body.classList.add('open'); }
}
</script>

<?php include '../includes/footer.php'; ?>