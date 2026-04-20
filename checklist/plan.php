<?php include '../includes/header.php'; ?>

<style>
/* ═══════════════════════════════════════════════════════
   PLAN YOUR TRIP — checklist/plan.php
   Pier One Travel & Tour Services
════════════════════════════════════════════════════════ */

/* ── Hero ─────────────────────────────────────────── */
.plan-hero {
  position: relative;
  height: 72vh;
  min-height: 500px;
  display: flex;
  align-items: flex-end;
  overflow: hidden;
}
.plan-hero__bg {
  position: absolute; inset: 0;
  width: 100%; height: 100%;
  object-fit: cover;
  transition: transform 12s ease;
}
.plan-hero:hover .plan-hero__bg { transform: scale(1.04); }
.plan-hero__overlay {
  position: absolute; inset: 0;
  background:
    linear-gradient(to right, rgba(28,16,8,.94) 0%, rgba(28,16,8,.6) 55%, rgba(28,16,8,.2) 100%),
    linear-gradient(to top, rgba(28,16,8,.92) 0%, transparent 60%);
}
.plan-hero__kente {
  position: absolute; bottom: 0; left: 0; right: 0;
  height: 5px;
  background: repeating-linear-gradient(90deg,#C8913A 0,#C8913A 40px,#3D2B1F 40px,#3D2B1F 80px,#C4784A 80px,#C4784A 120px,#2D4A3E 120px,#2D4A3E 160px,#8B6020 160px,#8B6020 200px);
  z-index: 3;
}
.plan-hero__content {
  position: relative; z-index: 2;
  max-width: 1400px; width: 100%; margin: 0 auto;
  padding: 3.5rem clamp(1rem,4vw,3rem);
}
.plan-hero__badge {
  display: inline-flex; align-items: center; gap: .5rem;
  background: rgba(200,145,58,.18); backdrop-filter: blur(8px);
  border: 1px solid rgba(200,145,58,.4); border-radius: 40px;
  padding: .35rem 1.1rem; color: var(--gold-light);
  font-size: .72rem; font-weight: 600; letter-spacing: .16em; text-transform: uppercase;
  margin-bottom: 1.1rem;
}
.plan-hero__title { font-family: 'Cormorant Garamond', serif; font-size: clamp(1.8rem,6vw,4.2rem); font-weight: 600; color: var(--white); line-height: 1.06; letter-spacing: -.015em; margin-bottom: 1.1rem; }
.plan-hero__title em { font-style: italic; color: var(--gold-light); }
.plan-hero__subtitle { font-size: clamp(.9rem,1.6vw,1.05rem); color: rgba(255,255,255,.72); line-height: 1.78; max-width: 52ch; margin-bottom: 2rem; }
.plan-hero__meta { display: flex; align-items: center; gap: 2rem; flex-wrap: wrap; color: rgba(255,255,255,.62); font-size: .8rem; }
.plan-hero__meta-item { display: flex; align-items: center; gap: .4rem; }
.plan-hero__meta-item svg { width: 14px; height: 14px; color: var(--gold); }

/* ── Progress Bar ─────────────────────────────────── */
.progress-strip {
  background: var(--white);
  border-bottom: 1px solid var(--border-soft);
  position: sticky;
  top: 0;
  z-index: 50;
  box-shadow: 0 2px 20px rgba(28,16,8,.07);
}
.progress-strip__inner {
  max-width: 1400px; margin: 0 auto;
  padding: 0 clamp(1rem,4vw,3rem);
  display: flex;
  align-items: center;
  gap: 0;
  overflow-x: auto;
  scrollbar-width: none;
}
.progress-strip__inner::-webkit-scrollbar { display: none; }
.progress-step {
  display: flex; align-items: center; gap: .6rem;
  padding: 1.1rem 1.5rem;
  border-bottom: 2px solid transparent;
  white-space: nowrap;
  cursor: pointer;
  transition: all var(--trans-fast);
  color: var(--text-muted);
  font-size: .78rem;
  font-weight: 500;
  text-decoration: none;
}
.progress-step:hover { color: var(--earth); border-bottom-color: var(--border); }
.progress-step.active { color: var(--gold); border-bottom-color: var(--gold); font-weight: 600; }
.progress-step__dot {
  width: 22px; height: 22px; border-radius: 50%;
  background: var(--gold-pale); border: 1.5px solid var(--border);
  display: flex; align-items: center; justify-content: center;
  font-size: .65rem; font-weight: 700; color: var(--text-muted);
  flex-shrink: 0;
  transition: all var(--trans-fast);
}
.progress-step.active .progress-step__dot { background: var(--gold); border-color: var(--gold); color: var(--white); }
.progress-step.done .progress-step__dot { background: #2D4A3E; border-color: #2D4A3E; color: var(--white); }
.progress-step.done { color: var(--text-mid); }

/* ── Two-Column Layout ────────────────────────────── */
.plan-layout {
  display: grid;
  grid-template-columns: 1fr 340px;
  gap: 3rem;
  align-items: start;
}
.plan-sidebar {
  position: sticky;
  top: calc(57px + 1.5rem);
  display: flex;
  flex-direction: column;
  gap: 1.25rem;
}

/* ── Phase Blocks ─────────────────────────────────── */
.phase-block {
  background: var(--white);
  border: 1px solid var(--border-soft);
  border-radius: var(--radius-xl);
  overflow: hidden;
  margin-bottom: 2rem;
}
.phase-block__header {
  display: flex; align-items: center; gap: 1.25rem;
  padding: 2rem 2rem 1.5rem;
  border-bottom: 1px solid var(--border-soft);
}
.phase-block__icon {
  width: 56px; height: 56px;
  background: linear-gradient(135deg, var(--gold-pale), var(--sand));
  border-radius: var(--radius-lg);
  border: 1px solid var(--border);
  display: flex; align-items: center; justify-content: center;
  font-size: 1.5rem;
  flex-shrink: 0;
}
.phase-block__label { font-size: .68rem; font-weight: 700; color: var(--gold); letter-spacing: .14em; text-transform: uppercase; margin-bottom: .2rem; }
.phase-block__title { font-family: 'Cormorant Garamond', serif; font-size: 1.35rem; font-weight: 600; color: var(--earth); line-height: 1.2; }
.phase-block__timing {
  margin-left: auto;
  background: var(--gold-pale);
  border: 1px solid var(--border);
  border-radius: 40px;
  padding: .3rem .9rem;
  font-size: .72rem;
  font-weight: 600;
  color: var(--gold-dark);
  white-space: nowrap;
  flex-shrink: 0;
}
.phase-block__body { padding: 0; }

/* ── Checklist Items ──────────────────────────────── */
.checklist-category {
  padding: 1.25rem 2rem .75rem;
  font-size: .68rem; font-weight: 700; color: var(--text-muted);
  letter-spacing: .12em; text-transform: uppercase;
  border-bottom: 1px solid var(--border-soft);
  background: rgba(245,238,225,.35);
}
.checklist-item {
  display: flex; align-items: flex-start; gap: 1rem;
  padding: 1rem 2rem;
  border-bottom: 1px solid var(--border-soft);
  cursor: pointer;
  transition: background var(--trans-fast);
}
.checklist-item:last-child { border-bottom: none; }
.checklist-item:hover { background: rgba(200,145,58,.04); }
.checklist-item.checked { background: rgba(45,74,62,.03); }
.checklist-item__box {
  width: 20px; height: 20px;
  border: 1.5px solid var(--border);
  border-radius: 5px;
  display: flex; align-items: center; justify-content: center;
  flex-shrink: 0;
  margin-top: 1px;
  transition: all var(--trans-fast);
  background: var(--white);
}
.checklist-item.checked .checklist-item__box {
  background: #2D4A3E;
  border-color: #2D4A3E;
}
.checklist-item__check {
  color: var(--white);
  font-size: .7rem;
  opacity: 0;
  transition: opacity var(--trans-fast);
}
.checklist-item.checked .checklist-item__check { opacity: 1; }
.checklist-item__content { flex: 1; }
.checklist-item__title {
  font-size: .88rem; font-weight: 500; color: var(--earth);
  line-height: 1.4; margin-bottom: .15rem;
  transition: color var(--trans-fast);
}
.checklist-item.checked .checklist-item__title { color: var(--text-muted); text-decoration: line-through; }
.checklist-item__desc { font-size: .75rem; color: var(--text-soft); line-height: 1.6; }
.checklist-item__badge {
  font-size: .62rem; font-weight: 700;
  padding: .18rem .6rem;
  border-radius: 40px;
  flex-shrink: 0;
  margin-top: 2px;
  white-space: nowrap;
}
.badge--required { background: rgba(200,145,58,.15); color: var(--gold-dark); border: 1px solid rgba(200,145,58,.3); }
.badge--recommended { background: rgba(45,74,62,.1); color: #2D4A3E; border: 1px solid rgba(45,74,62,.25); }
.badge--optional { background: var(--gold-pale); color: var(--text-mid); border: 1px solid var(--border); }

/* ── Sidebar Widgets ──────────────────────────────── */
.progress-widget {
  background: linear-gradient(145deg, var(--earth), #5C3D2E);
  border-radius: var(--radius-xl);
  padding: 1.75rem;
}
.progress-widget__title { font-family: 'Cormorant Garamond', serif; font-size: 1.15rem; font-weight: 600; color: var(--cream); margin-bottom: .3rem; }
.progress-widget__sub { font-size: .76rem; color: rgba(242,232,213,.6); margin-bottom: 1.25rem; }
.progress-widget__bar-wrap { background: rgba(255,255,255,.1); border-radius: 40px; height: 8px; margin-bottom: .6rem; overflow: hidden; }
.progress-widget__bar { height: 100%; background: linear-gradient(90deg, var(--gold), #E8A84A); border-radius: 40px; transition: width .8s cubic-bezier(.4,0,.2,1); }
.progress-widget__count { font-size: .75rem; color: var(--gold-light); font-weight: 600; }
.progress-widget__reset { display: block; text-align: center; margin-top: 1rem; font-size: .72rem; color: rgba(242,232,213,.45); cursor: pointer; text-decoration: underline; border: none; background: none; font-family: inherit; }
.progress-widget__reset:hover { color: var(--gold-light); }

.tip-widget {
  background: var(--white);
  border: 1px solid var(--border-soft);
  border-radius: var(--radius-xl);
  padding: 1.5rem;
}
.tip-widget__title { font-family: 'Cormorant Garamond', serif; font-size: 1.05rem; font-weight: 600; color: var(--earth); margin-bottom: 1rem; display: flex; align-items: center; gap: .5rem; }
.tip-item { display: flex; gap: .75rem; align-items: flex-start; margin-bottom: .85rem; font-size: .78rem; color: var(--text-soft); line-height: 1.6; }
.tip-item:last-child { margin-bottom: 0; }
.tip-item__icon { font-size: 1rem; flex-shrink: 0; margin-top: 1px; }

.cta-widget {
  background: var(--gold-pale);
  border: 1px solid var(--border);
  border-radius: var(--radius-xl);
  padding: 1.5rem;
  text-align: center;
}
.cta-widget__title { font-family: 'Cormorant Garamond', serif; font-size: 1.05rem; font-weight: 600; color: var(--earth); margin-bottom: .4rem; }
.cta-widget__sub { font-size: .76rem; color: var(--text-soft); line-height: 1.6; margin-bottom: 1.25rem; }

/* ── Timeline Bar ─────────────────────────────────── */
.timeline-intro {
  display: grid;
  grid-template-columns: repeat(5, 1fr);
  gap: 0;
  border: 1px solid var(--border-soft);
  border-radius: var(--radius-lg);
  overflow: hidden;
  margin-bottom: 2.5rem;
}
.timeline-intro__item {
  padding: 1.25rem 1rem;
  text-align: center;
  border-right: 1px solid var(--border-soft);
  background: var(--white);
  position: relative;
}
.timeline-intro__item:last-child { border-right: none; }
.timeline-intro__time {
  font-family: 'Cormorant Garamond', serif;
  font-size: 1rem;
  font-weight: 700;
  color: var(--gold);
  margin-bottom: .2rem;
}
.timeline-intro__label {
  font-size: .7rem;
  color: var(--text-muted);
  line-height: 1.4;
}

/* ── Print Button ─────────────────────────────────── */
.print-bar {
  display: flex;
  align-items: center;
  justify-content: space-between;
  flex-wrap: wrap;
  gap: 1rem;
  margin-bottom: 2rem;
  padding: 1.25rem 1.5rem;
  background: var(--white);
  border: 1px solid var(--border-soft);
  border-radius: var(--radius-lg);
}
.print-bar__title { font-family: 'Cormorant Garamond', serif; font-size: 1.05rem; font-weight: 600; color: var(--earth); }
.print-bar__sub { font-size: .76rem; color: var(--text-soft); }

/* ── CTA Band ─────────────────────────────────────── */
.cta-band { background: linear-gradient(135deg, var(--earth), #5C3D2E); border-radius: var(--radius-xl); padding: clamp(2.5rem,5vw,4rem); text-align: center; position: relative; overflow: hidden; }
.cta-band::before { content: ''; position: absolute; top: -80px; right: -80px; width: 300px; height: 300px; background: var(--gold); border-radius: 50%; opacity: .05; }
.cta-band__title { font-family: 'Cormorant Garamond', serif; font-size: clamp(1.8rem,4vw,3rem); font-weight: 600; color: var(--cream); margin-bottom: .75rem; position: relative; z-index: 1; }
.cta-band__title em { font-style: italic; color: var(--gold-light); }
.cta-band__sub { font-size: .95rem; color: rgba(242,232,213,.68); max-width: 44ch; margin: 0 auto 2rem; line-height: 1.75; position: relative; z-index: 1; }
.cta-band__actions { display: flex; gap: 1rem; justify-content: center; flex-wrap: wrap; position: relative; z-index: 1; }

/* ── Responsive ──────────────────────────────────── */
@media (max-width: 1100px) {
  .plan-layout { grid-template-columns: 1fr; }
  .plan-sidebar { position: static; }
  .timeline-intro { grid-template-columns: repeat(3, 1fr); }
}
@media (max-width: 640px) {
  .timeline-intro { grid-template-columns: 1fr 1fr; }
  .phase-block__header { flex-wrap: wrap; }
  .phase-block__timing { margin-left: 0; }
  .checklist-item { padding: .85rem 1.25rem; }
  .checklist-category { padding: 1rem 1.25rem .6rem; }
}
@media print {
  .progress-strip, .plan-sidebar, .cta-band, nav, footer { display: none !important; }
  .plan-layout { grid-template-columns: 1fr !important; }
}
</style>

<!-- ════════════════════════════════════════════════
     HERO
═══════════════════════════════════════════════════ -->
<section class="plan-hero">
  <img class="plan-hero__bg"
    src="https://images.unsplash.com/photo-1476514525535-07fb3b4ae5f1?w=1920&q=80"
    alt="Travel planning for Africa"
    loading="eager" />
  <div class="plan-hero__overlay"></div>
  <div class="plan-hero__kente"></div>
  <div class="plan-hero__content">
    <nav class="breadcrumb" style="margin-bottom:1rem;">
      <a href="<?= URLROOT ?>">Home</a>
      <span class="breadcrumb__sep">›</span>
      <a href="#">Resources</a>
      <span class="breadcrumb__sep">›</span>
      <span class="breadcrumb__current">Plan Your Trip</span>
    </nav>
    <div class="plan-hero__badge">🗺️ Trip Planning Checklist</div>
    <h1 class="plan-hero__title">Plan Your Africa<br>Trip with <em>Confidence.</em></h1>
    <p class="plan-hero__subtitle">Everything you need to organise — from the moment you decide to travel to the day you return home. Work through each phase and arrive fully prepared for the journey of a lifetime.</p>
    <div class="plan-hero__meta">
      <span class="plan-hero__meta-item"><svg fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>Interactive Checklist</span>
      <span class="plan-hero__meta-item"><svg fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/></svg>All African Destinations</span>
      <span class="plan-hero__meta-item"><svg fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M17 17h2a2 2 0 002-2v-4a2 2 0 00-2-2H5a2 2 0 00-2 2v4a2 2 0 002 2h2m2 4h6a2 2 0 002-2v-4a2 2 0 00-2-2H9a2 2 0 00-2 2v4a2 2 0 002 2zm8-12V5a2 2 0 00-2-2H9a2 2 0 00-2 2v4h10z"/></svg>Printable Version</span>
    </div>
  </div>
</section>

<!-- ════════════════════════════════════════════════
     STICKY PROGRESS NAV
═══════════════════════════════════════════════════ -->
<div class="progress-strip" id="progressStrip">
  <div class="progress-strip__inner">
    <a class="progress-step active" href="#phase1" onclick="setActive(this)"><div class="progress-step__dot" id="dot1">1</div>3–6 Months</a>
    <a class="progress-step" href="#phase2" onclick="setActive(this)"><div class="progress-step__dot" id="dot2">2</div>2–3 Months</a>
    <a class="progress-step" href="#phase3" onclick="setActive(this)"><div class="progress-step__dot" id="dot3">3</div>4–6 Weeks</a>
    <a class="progress-step" href="#phase4" onclick="setActive(this)"><div class="progress-step__dot" id="dot4">4</div>Final Week</a>
    <a class="progress-step" href="#phase5" onclick="setActive(this)"><div class="progress-step__dot" id="dot5">5</div>Day of Departure</a>
    <a class="progress-step" href="#phase6" onclick="setActive(this)"><div class="progress-step__dot" id="dot6">6</div>On Return</a>
  </div>
</div>

<!-- ════════════════════════════════════════════════
     MAIN CONTENT
═══════════════════════════════════════════════════ -->
<section class="section section--sand">
  <div class="container">

    <!-- Timeline Overview -->
    <div style="text-align:center;max-width:560px;margin:0 auto 2rem;">
      <span class="section-eyebrow reveal">Your Timeline</span>
      <h2 class="section-title reveal reveal-delay-1">Six Phases to a<br><em>Perfect</em> Africa Trip</h2>
      <p class="section-subtitle reveal reveal-delay-2" style="margin:0 auto;">Tick each item as you complete it. Your progress is saved automatically.</p>
    </div>
    <div class="timeline-intro reveal reveal-delay-2">
      <div class="timeline-intro__item"><div class="timeline-intro__time">6 mo</div><div class="timeline-intro__label">Book &amp; Plan</div></div>
      <div class="timeline-intro__item"><div class="timeline-intro__time">3 mo</div><div class="timeline-intro__label">Documents &amp; Health</div></div>
      <div class="timeline-intro__item"><div class="timeline-intro__time">6 wk</div><div class="timeline-intro__label">Logistics &amp; Prep</div></div>
      <div class="timeline-intro__item"><div class="timeline-intro__time">1 wk</div><div class="timeline-intro__label">Final Checks</div></div>
      <div class="timeline-intro__item"><div class="timeline-intro__time">Day 0</div><div class="timeline-intro__label">Departure</div></div>
    </div>

    <div class="plan-layout">
      <!-- ─── Main Checklist ─── -->
      <div>
        <div class="print-bar reveal">
          <div><div class="print-bar__title">🖨️ Print Your Checklist</div><div class="print-bar__sub">Save a paper copy for easy reference while travelling</div></div>
          <button onclick="window.print()" class="btn btn-secondary">Print Checklist</button>
        </div>

        <!-- PHASE 1 -->
        <div class="phase-block reveal" id="phase1">
          <div class="phase-block__header">
            <div class="phase-block__icon">🎯</div>
            <div>
              <div class="phase-block__label">Phase 1</div>
              <div class="phase-block__title">Book Early &amp; Set the Foundation</div>
            </div>
            <div class="phase-block__timing">3–6 Months Before</div>
          </div>
          <div class="phase-block__body">
            <div class="checklist-category">Booking &amp; Itinerary</div>
            <div class="checklist-item" onclick="toggleCheck(this)">
              <div class="checklist-item__box"><span class="checklist-item__check">✓</span></div>
              <div class="checklist-item__content">
                <div class="checklist-item__title">Choose your destination(s) and travel dates</div>
                <div class="checklist-item__desc">Research which African countries or regions match your interests — wildlife, culture, beaches, history, or a combination.</div>
              </div>
              <span class="checklist-item__badge badge--required">Required</span>
            </div>
            <div class="checklist-item" onclick="toggleCheck(this)">
              <div class="checklist-item__box"><span class="checklist-item__check">✓</span></div>
              <div class="checklist-item__content">
                <div class="checklist-item__title">Book your tour or itinerary with Pier One</div>
                <div class="checklist-item__desc">Confirm your programme, payment schedule, accommodation type, and group arrangements with your Pier One coordinator.</div>
              </div>
              <span class="checklist-item__badge badge--required">Required</span>
            </div>
            <div class="checklist-item" onclick="toggleCheck(this)">
              <div class="checklist-item__box"><span class="checklist-item__check">✓</span></div>
              <div class="checklist-item__content">
                <div class="checklist-item__title">Book international flights</div>
                <div class="checklist-item__desc">Book early for the best fares — especially for peak season (Nov–Mar) and major hubs like Accra, Lagos, Nairobi, and Cape Town.</div>
              </div>
              <span class="checklist-item__badge badge--required">Required</span>
            </div>
            <div class="checklist-item" onclick="toggleCheck(this)">
              <div class="checklist-item__box"><span class="checklist-item__check">✓</span></div>
              <div class="checklist-item__content">
                <div class="checklist-item__title">Purchase comprehensive travel insurance</div>
                <div class="checklist-item__desc">Ensure cover includes medical evacuation, trip cancellation, and all planned activities. <a href="<?= URLROOT ?>/checklist/insurance" style="color:var(--gold);">See our Insurance Guide →</a></div>
              </div>
              <span class="checklist-item__badge badge--required">Required</span>
            </div>
            <div class="checklist-category">Budget &amp; Finance</div>
            <div class="checklist-item" onclick="toggleCheck(this)">
              <div class="checklist-item__box"><span class="checklist-item__check">✓</span></div>
              <div class="checklist-item__content">
                <div class="checklist-item__title">Set your total travel budget</div>
                <div class="checklist-item__desc">Include tour fee, flights, insurance, visas, vaccinations, kit &amp; equipment, personal spending, and emergency funds.</div>
              </div>
              <span class="checklist-item__badge badge--required">Required</span>
            </div>
            <div class="checklist-item" onclick="toggleCheck(this)">
              <div class="checklist-item__box"><span class="checklist-item__check">✓</span></div>
              <div class="checklist-item__content">
                <div class="checklist-item__title">Notify your bank of travel dates and destinations</div>
                <div class="checklist-item__desc">Prevents cards being blocked abroad. Confirm daily withdrawal limits and any international transaction fees.</div>
              </div>
              <span class="checklist-item__badge badge--recommended">Recommended</span>
            </div>
          </div>
        </div>

        <!-- PHASE 2 -->
        <div class="phase-block reveal" id="phase2">
          <div class="phase-block__header">
            <div class="phase-block__icon">📋</div>
            <div>
              <div class="phase-block__label">Phase 2</div>
              <div class="phase-block__title">Documents, Visas &amp; Health</div>
            </div>
            <div class="phase-block__timing">2–3 Months Before</div>
          </div>
          <div class="phase-block__body">
            <div class="checklist-category">Passports &amp; Visas</div>
            <div class="checklist-item" onclick="toggleCheck(this)">
              <div class="checklist-item__box"><span class="checklist-item__check">✓</span></div>
              <div class="checklist-item__content">
                <div class="checklist-item__title">Check passport validity — minimum 6 months from return date</div>
                <div class="checklist-item__desc">Most African countries require at least 6 months validity beyond your planned departure. Renew early to avoid delays.</div>
              </div>
              <span class="checklist-item__badge badge--required">Required</span>
            </div>
            <div class="checklist-item" onclick="toggleCheck(this)">
              <div class="checklist-item__box"><span class="checklist-item__check">✓</span></div>
              <div class="checklist-item__content">
                <div class="checklist-item__title">Apply for all required visas</div>
                <div class="checklist-item__desc">Ghana (e-Visa), Nigeria (on arrival or sticker), Kenya (e-Visa), Rwanda (on arrival), South Africa (visa-free for many nationalities). Check country-specific requirements.</div>
              </div>
              <span class="checklist-item__badge badge--required">Required</span>
            </div>
            <div class="checklist-item" onclick="toggleCheck(this)">
              <div class="checklist-item__box"><span class="checklist-item__check">✓</span></div>
              <div class="checklist-item__content">
                <div class="checklist-item__title">Make 2 certified copies of passport and visa pages</div>
                <div class="checklist-item__desc">Keep one copy at home with a trusted person, and pack one separately from your passport.</div>
              </div>
              <span class="checklist-item__badge badge--recommended">Recommended</span>
            </div>
            <div class="checklist-category">Vaccinations &amp; Health</div>
            <div class="checklist-item" onclick="toggleCheck(this)">
              <div class="checklist-item__box"><span class="checklist-item__check">✓</span></div>
              <div class="checklist-item__content">
                <div class="checklist-item__title">Yellow Fever vaccination — mandatory for most African countries</div>
                <div class="checklist-item__desc">Obtain International Certificate of Vaccination (Yellow Card). Required at many border crossings and airports.</div>
              </div>
              <span class="checklist-item__badge badge--required">Required</span>
            </div>
            <div class="checklist-item" onclick="toggleCheck(this)">
              <div class="checklist-item__box"><span class="checklist-item__check">✓</span></div>
              <div class="checklist-item__content">
                <div class="checklist-item__title">Begin anti-malarial medication course</div>
                <div class="checklist-item__desc">Options include Malarone, Doxycycline, or Lariam — consult your GP or travel clinic. Some courses start 1–2 weeks before travel.</div>
              </div>
              <span class="checklist-item__badge badge--required">Required</span>
            </div>
            <div class="checklist-item" onclick="toggleCheck(this)">
              <div class="checklist-item__box"><span class="checklist-item__check">✓</span></div>
              <div class="checklist-item__content">
                <div class="checklist-item__title">Check and update routine vaccinations</div>
                <div class="checklist-item__desc">Hepatitis A &amp; B, Typhoid, Tetanus, Meningitis, Rabies (if going to remote areas or working with animals).</div>
              </div>
              <span class="checklist-item__badge badge--recommended">Recommended</span>
            </div>
            <div class="checklist-item" onclick="toggleCheck(this)">
              <div class="checklist-item__box"><span class="checklist-item__check">✓</span></div>
              <div class="checklist-item__content">
                <div class="checklist-item__title">Visit a registered travel health clinic</div>
                <div class="checklist-item__desc">Book at least 6–8 weeks before departure to allow time for multi-dose vaccines and medical advice tailored to your destinations.</div>
              </div>
              <span class="checklist-item__badge badge--recommended">Recommended</span>
            </div>
            <div class="checklist-item" onclick="toggleCheck(this)">
              <div class="checklist-item__box"><span class="checklist-item__check">✓</span></div>
              <div class="checklist-item__content">
                <div class="checklist-item__title">Arrange prescription medications for full duration of trip</div>
                <div class="checklist-item__desc">Request a doctor's letter confirming all prescribed medications. Pack 2x the required amount split across hand luggage and hold.</div>
              </div>
              <span class="checklist-item__badge badge--required">Required</span>
            </div>
          </div>
        </div>

        <!-- PHASE 3 -->
        <div class="phase-block reveal" id="phase3">
          <div class="phase-block__header">
            <div class="phase-block__icon">🎒</div>
            <div>
              <div class="phase-block__label">Phase 3</div>
              <div class="phase-block__title">Logistics, Kit &amp; Preparation</div>
            </div>
            <div class="phase-block__timing">4–6 Weeks Before</div>
          </div>
          <div class="phase-block__body">
            <div class="checklist-category">Communications</div>
            <div class="checklist-item" onclick="toggleCheck(this)">
              <div class="checklist-item__box"><span class="checklist-item__check">✓</span></div>
              <div class="checklist-item__content">
                <div class="checklist-item__title">Arrange international roaming or a local SIM card</div>
                <div class="checklist-item__desc">Local SIMs (MTN, Vodafone, Airtel, Safaricom) are widely available and far cheaper for calls and data than roaming plans.</div>
              </div>
              <span class="checklist-item__badge badge--recommended">Recommended</span>
            </div>
            <div class="checklist-item" onclick="toggleCheck(this)">
              <div class="checklist-item__box"><span class="checklist-item__check">✓</span></div>
              <div class="checklist-item__content">
                <div class="checklist-item__title">Download offline maps (Google Maps / Maps.me)</div>
                <div class="checklist-item__desc">Download your destination regions before departure. Useful in areas with intermittent data coverage.</div>
              </div>
              <span class="checklist-item__badge badge--recommended">Recommended</span>
            </div>
            <div class="checklist-item" onclick="toggleCheck(this)">
              <div class="checklist-item__box"><span class="checklist-item__check">✓</span></div>
              <div class="checklist-item__content">
                <div class="checklist-item__title">Share detailed itinerary with a trusted contact at home</div>
                <div class="checklist-item__desc">Include accommodation names, Pier One emergency contact, and your travel insurance policy number.</div>
              </div>
              <span class="checklist-item__badge badge--required">Required</span>
            </div>
            <div class="checklist-category">Packing — Clothing &amp; Essentials</div>
            <div class="checklist-item" onclick="toggleCheck(this)">
              <div class="checklist-item__box"><span class="checklist-item__check">✓</span></div>
              <div class="checklist-item__content">
                <div class="checklist-item__title">Light, breathable clothing (neutral colours for safari)</div>
                <div class="checklist-item__desc">Pack layers — mornings can be cool in highlands. Avoid dark navy/black for safari (attracts tsetse flies).</div>
              </div>
              <span class="checklist-item__badge badge--required">Required</span>
            </div>
            <div class="checklist-item" onclick="toggleCheck(this)">
              <div class="checklist-item__box"><span class="checklist-item__check">✓</span></div>
              <div class="checklist-item__content">
                <div class="checklist-item__title">Conservative dress for cultural and religious sites</div>
                <div class="checklist-item__desc">Long trousers/skirt, shoulder cover. Essential for mosques, traditional palaces, and certain community areas across West and East Africa.</div>
              </div>
              <span class="checklist-item__badge badge--recommended">Recommended</span>
            </div>
            <div class="checklist-item" onclick="toggleCheck(this)">
              <div class="checklist-item__box"><span class="checklist-item__check">✓</span></div>
              <div class="checklist-item__content">
                <div class="checklist-item__title">Sturdy, worn-in walking shoes and sandals</div>
                <div class="checklist-item__desc">New boots cause blisters on long game walks. Break in footwear at least 3–4 weeks before departure.</div>
              </div>
              <span class="checklist-item__badge badge--required">Required</span>
            </div>
            <div class="checklist-category">Packing — Health &amp; Safety</div>
            <div class="checklist-item" onclick="toggleCheck(this)">
              <div class="checklist-item__box"><span class="checklist-item__check">✓</span></div>
              <div class="checklist-item__content">
                <div class="checklist-item__title">High-factor sunscreen (SPF 50+) and UV-protective sunglasses</div>
                <div class="checklist-item__desc">The equatorial sun is intense — even on overcast days. Reef-safe sunscreen for marine conservation missions.</div>
              </div>
              <span class="checklist-item__badge badge--required">Required</span>
            </div>
            <div class="checklist-item" onclick="toggleCheck(this)">
              <div class="checklist-item__box"><span class="checklist-item__check">✓</span></div>
              <div class="checklist-item__content">
                <div class="checklist-item__title">DEET insect repellent (50% concentration or higher)</div>
                <div class="checklist-item__desc">Apply every 4–6 hours in malaria zones, especially at dawn and dusk. Permethrin-treated clothing adds extra protection.</div>
              </div>
              <span class="checklist-item__badge badge--required">Required</span>
            </div>
            <div class="checklist-item" onclick="toggleCheck(this)">
              <div class="checklist-item__box"><span class="checklist-item__check">✓</span></div>
              <div class="checklist-item__content">
                <div class="checklist-item__title">First aid kit and personal medical supplies</div>
                <div class="checklist-item__desc">Imodium, oral rehydration salts, plasters, antiseptic wipes, blister treatment, antihistamine, paracetamol, ibuprofen.</div>
              </div>
              <span class="checklist-item__badge badge--required">Required</span>
            </div>
            <div class="checklist-item" onclick="toggleCheck(this)">
              <div class="checklist-item__box"><span class="checklist-item__check">✓</span></div>
              <div class="checklist-item__content">
                <div class="checklist-item__title">Water purification tablets or filter</div>
                <div class="checklist-item__desc">For remote areas or if bottled water is unavailable. Lifestraw or Sawyer Squeeze filters are compact and reliable.</div>
              </div>
              <span class="checklist-item__badge badge--recommended">Recommended</span>
            </div>
            <div class="checklist-category">Packing — Tech &amp; Equipment</div>
            <div class="checklist-item" onclick="toggleCheck(this)">
              <div class="checklist-item__box"><span class="checklist-item__check">✓</span></div>
              <div class="checklist-item__content">
                <div class="checklist-item__title">Universal power adapter (Type G, D, or C depending on region)</div>
                <div class="checklist-item__desc">West Africa: Type G (Ghana) or D. East/Southern Africa: Type G or M. Confirm with your destination list.</div>
              </div>
              <span class="checklist-item__badge badge--required">Required</span>
            </div>
            <div class="checklist-item" onclick="toggleCheck(this)">
              <div class="checklist-item__box"><span class="checklist-item__check">✓</span></div>
              <div class="checklist-item__content">
                <div class="checklist-item__title">Portable power bank (20,000mAh+)</div>
                <div class="checklist-item__desc">Power outages are common in some areas. A large power bank keeps all devices charged during long travel days.</div>
              </div>
              <span class="checklist-item__badge badge--recommended">Recommended</span>
            </div>
            <div class="checklist-item" onclick="toggleCheck(this)">
              <div class="checklist-item__box"><span class="checklist-item__check">✓</span></div>
              <div class="checklist-item__content">
                <div class="checklist-item__title">Camera, binoculars, and dust-proof storage bags</div>
                <div class="checklist-item__desc">For wildlife destinations, 8x42 binoculars are ideal. Dry bags protect electronics during boat trips and rain.</div>
              </div>
              <span class="checklist-item__badge badge--optional">Optional</span>
            </div>
          </div>
        </div>

        <!-- PHASE 4 -->
        <div class="phase-block reveal" id="phase4">
          <div class="phase-block__header">
            <div class="phase-block__icon">✅</div>
            <div>
              <div class="phase-block__label">Phase 4</div>
              <div class="phase-block__title">Final Week Checks</div>
            </div>
            <div class="phase-block__timing">5–7 Days Before</div>
          </div>
          <div class="phase-block__body">
            <div class="checklist-category">Documents &amp; Confirmations</div>
            <div class="checklist-item" onclick="toggleCheck(this)">
              <div class="checklist-item__box"><span class="checklist-item__check">✓</span></div>
              <div class="checklist-item__content">
                <div class="checklist-item__title">Print all travel documents — flights, hotel confirmations, tour itinerary</div>
                <div class="checklist-item__desc">Many African airports and immigration desks still prefer paper copies. Don't rely on your phone battery.</div>
              </div>
              <span class="checklist-item__badge badge--required">Required</span>
            </div>
            <div class="checklist-item" onclick="toggleCheck(this)">
              <div class="checklist-item__box"><span class="checklist-item__check">✓</span></div>
              <div class="checklist-item__content">
                <div class="checklist-item__title">Confirm airport transfers and pick-up arrangements with Pier One</div>
                <div class="checklist-item__desc">Share your flight number and ETA with your Pier One coordinator for smooth arrival.</div>
              </div>
              <span class="checklist-item__badge badge--required">Required</span>
            </div>
            <div class="checklist-item" onclick="toggleCheck(this)">
              <div class="checklist-item__box"><span class="checklist-item__check">✓</span></div>
              <div class="checklist-item__content">
                <div class="checklist-item__title">Check-in online for all flights (if available)</div>
                <div class="checklist-item__desc">Select seats and save your boarding pass digitally and as a screenshot in case of connectivity issues.</div>
              </div>
              <span class="checklist-item__badge badge--recommended">Recommended</span>
            </div>
            <div class="checklist-item" onclick="toggleCheck(this)">
              <div class="checklist-item__box"><span class="checklist-item__check">✓</span></div>
              <div class="checklist-item__content">
                <div class="checklist-item__title">Withdraw an appropriate amount of local or USD cash</div>
                <div class="checklist-item__desc">USD is widely accepted as a backup currency across Africa. Bring crisp, clean notes — worn or torn notes may be refused.</div>
              </div>
              <span class="checklist-item__badge badge--required">Required</span>
            </div>
            <div class="checklist-category">Home &amp; Personal</div>
            <div class="checklist-item" onclick="toggleCheck(this)">
              <div class="checklist-item__box"><span class="checklist-item__check">✓</span></div>
              <div class="checklist-item__content">
                <div class="checklist-item__title">Arrange care for pets, plants, and home security</div>
                <div class="checklist-item__desc">Ask a trusted neighbour or family member to check in regularly.</div>
              </div>
              <span class="checklist-item__badge badge--optional">Optional</span>
            </div>
            <div class="checklist-item" onclick="toggleCheck(this)">
              <div class="checklist-item__box"><span class="checklist-item__check">✓</span></div>
              <div class="checklist-item__content">
                <div class="checklist-item__title">Set email and voicemail out-of-office messages</div>
                <div class="checklist-item__desc">Include your return date and an emergency contact for urgent matters.</div>
              </div>
              <span class="checklist-item__badge badge--optional">Optional</span>
            </div>
          </div>
        </div>

        <!-- PHASE 5 -->
        <div class="phase-block reveal" id="phase5">
          <div class="phase-block__header">
            <div class="phase-block__icon">✈️</div>
            <div>
              <div class="phase-block__label">Phase 5</div>
              <div class="phase-block__title">Day of Departure</div>
            </div>
            <div class="phase-block__timing">Departure Day</div>
          </div>
          <div class="phase-block__body">
            <div class="checklist-item" onclick="toggleCheck(this)">
              <div class="checklist-item__box"><span class="checklist-item__check">✓</span></div>
              <div class="checklist-item__content">
                <div class="checklist-item__title">Passport, Yellow Card, and visa printouts in hand luggage</div>
                <div class="checklist-item__desc">Keep all critical documents on your person — not in hold luggage that could be delayed or lost.</div>
              </div>
              <span class="checklist-item__badge badge--required">Required</span>
            </div>
            <div class="checklist-item" onclick="toggleCheck(this)">
              <div class="checklist-item__box"><span class="checklist-item__check">✓</span></div>
              <div class="checklist-item__content">
                <div class="checklist-item__title">Anti-malarials, medications, and first aid in carry-on</div>
                <div class="checklist-item__desc">Never put medications in hold luggage. Airlines permit clearly labelled prescription medicines in carry-on.</div>
              </div>
              <span class="checklist-item__badge badge--required">Required</span>
            </div>
            <div class="checklist-item" onclick="toggleCheck(this)">
              <div class="checklist-item__box"><span class="checklist-item__check">✓</span></div>
              <div class="checklist-item__content">
                <div class="checklist-item__title">Save Pier One emergency number offline on your phone</div>
                <div class="checklist-item__desc">Screenshot or note our 24/7 on-ground contact in your phone notes — accessible without data.</div>
              </div>
              <span class="checklist-item__badge badge--required">Required</span>
            </div>
            <div class="checklist-item" onclick="toggleCheck(this)">
              <div class="checklist-item__box"><span class="checklist-item__check">✓</span></div>
              <div class="checklist-item__content">
                <div class="checklist-item__title">Arrive at airport minimum 3 hours before international departure</div>
                <div class="checklist-item__desc">African international airports can have lengthy check-in and security queues — especially during peak season.</div>
              </div>
              <span class="checklist-item__badge badge--required">Required</span>
            </div>
          </div>
        </div>

        <!-- PHASE 6 -->
        <div class="phase-block reveal" id="phase6">
          <div class="phase-block__header">
            <div class="phase-block__icon">🏠</div>
            <div>
              <div class="phase-block__label">Phase 6</div>
              <div class="phase-block__title">On Your Return</div>
            </div>
            <div class="phase-block__timing">After Your Trip</div>
          </div>
          <div class="phase-block__body">
            <div class="checklist-item" onclick="toggleCheck(this)">
              <div class="checklist-item__box"><span class="checklist-item__check">✓</span></div>
              <div class="checklist-item__content">
                <div class="checklist-item__title">Complete your malaria prophylaxis course</div>
                <div class="checklist-item__desc">Most anti-malarials must be continued for 7–28 days after leaving a malaria zone. Do not stop early.</div>
              </div>
              <span class="checklist-item__badge badge--required">Required</span>
            </div>
            <div class="checklist-item" onclick="toggleCheck(this)">
              <div class="checklist-item__box"><span class="checklist-item__check">✓</span></div>
              <div class="checklist-item__content">
                <div class="checklist-item__title">See a doctor if you develop fever within 3 months of return</div>
                <div class="checklist-item__desc">Mention your travel history immediately. Malaria symptoms can appear weeks after exposure and mimic flu.</div>
              </div>
              <span class="checklist-item__badge badge--required">Required</span>
            </div>
            <div class="checklist-item" onclick="toggleCheck(this)">
              <div class="checklist-item__box"><span class="checklist-item__check">✓</span></div>
              <div class="checklist-item__content">
                <div class="checklist-item__title">Submit your Pier One post-trip review</div>
                <div class="checklist-item__desc">Your feedback helps us improve every journey for future travellers and benefits the communities we serve.</div>
              </div>
              <span class="checklist-item__badge badge--recommended">Recommended</span>
            </div>
            <div class="checklist-item" onclick="toggleCheck(this)">
              <div class="checklist-item__box"><span class="checklist-item__check">✓</span></div>
              <div class="checklist-item__content">
                <div class="checklist-item__title">Consider supporting your host community long-term</div>
                <div class="checklist-item__desc">Ask your Pier One coordinator how you can continue to contribute — through fundraising, advocacy, or a return visit.</div>
              </div>
              <span class="checklist-item__badge badge--optional">Optional</span>
            </div>
          </div>
        </div>
      </div><!-- /.main -->

      <!-- ─── Sidebar ─── -->
      <div class="plan-sidebar">
        <!-- Progress Widget -->
        <div class="progress-widget reveal reveal-delay-1">
          <div class="progress-widget__title">Your Progress</div>
          <div class="progress-widget__sub">Keep going — you're building a great trip</div>
          <div class="progress-widget__bar-wrap">
            <div class="progress-widget__bar" id="progressBar" style="width:0%"></div>
          </div>
          <div class="progress-widget__count" id="progressCount">0 of 35 items complete</div>
          <button class="progress-widget__reset" onclick="resetAll()">Reset all items</button>
        </div>

        <!-- Quick Tips -->
        <div class="tip-widget reveal reveal-delay-2">
          <div class="tip-widget__title">🌍 Pier One Pro Tips</div>
          <div class="tip-item"><div class="tip-item__icon">💧</div><div>Always drink bottled or purified water — even in capital cities. Ice cubes in restaurants can be a risk in some destinations.</div></div>
          <div class="tip-item"><div class="tip-item__icon">📵</div><div>Respect local photography rules — always ask before photographing people, markets, or sacred sites.</div></div>
          <div class="tip-item"><div class="tip-item__icon">💵</div><div>Bargaining is expected at markets but done with warmth, not aggression — and always with a smile.</div></div>
          <div class="tip-item"><div class="tip-item__icon">🦟</div><div>Apply repellent before sunset — not just at night. Malaria-carrying mosquitoes are active at dusk.</div></div>
          <div class="tip-item"><div class="tip-item__icon">🏥</div><div>Register with your home country's embassy or high commission in-country for emergency support.</div></div>
        </div>

        <!-- Insurance Prompt -->
        <div class="cta-widget reveal reveal-delay-3">
          <div class="cta-widget__title">🛡️ Need Travel Insurance?</div>
          <div class="cta-widget__sub">Our insurance guide covers what to look for, what Africa-specific risks to cover, and our trusted provider partners.</div>
          <a href="<?= URLROOT ?>/checklist/insurance" class="btn btn-primary" style="width:100%;justify-content:center;">
            Insurance Guide <svg class="arrow-icon" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
          </a>
        </div>

        <!-- Talk to us -->
        <div class="tip-widget reveal reveal-delay-4">
          <div class="tip-widget__title">💬 Have a Question?</div>
          <div class="tip-item"><div class="tip-item__icon">📞</div><div>Our travel specialists are available Mon–Sat, 8am–6pm GMT to answer any planning queries.</div></div>
          <div style="margin-top:1rem;">
            <a href="mailto:info@pieronetours.com" class="btn btn-secondary" style="width:100%;justify-content:center;font-size:.8rem;">Email a Specialist</a>
          </div>
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
      <h2 class="cta-band__title">Ready to Make Your<br><em>Africa Dream a Reality?</em></h2>
      <p class="cta-band__sub">Our team handles the complexity so you can focus on the experience. Browse tours or speak to a specialist today.</p>
      <div class="cta-band__actions">
        <a href="<?= URLROOT ?>/tours/leisure" class="btn btn-primary btn-lg">Browse Tours<svg class="arrow-icon" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg></a>
        <a href="mailto:info@pieronetours.com" class="btn btn-secondary btn-lg">Speak to a Specialist</a>
      </div>
    </div>
  </div>
</section>

<script>
// ── Checklist State ──────────────────────────────
const STORAGE_KEY = 'pierOne_planChecklist';
const totalItems = document.querySelectorAll('.checklist-item').length;
let checkedCount = 0;

function loadState() {
  try {
    const saved = JSON.parse(localStorage.getItem(STORAGE_KEY)) || {};
    document.querySelectorAll('.checklist-item').forEach((item, i) => {
      if (saved[i]) { item.classList.add('checked'); }
    });
  } catch(e) {}
  updateProgress();
}

function saveState() {
  const state = {};
  document.querySelectorAll('.checklist-item').forEach((item, i) => {
    state[i] = item.classList.contains('checked');
  });
  try { localStorage.setItem(STORAGE_KEY, JSON.stringify(state)); } catch(e) {}
}

function toggleCheck(item) {
  item.classList.toggle('checked');
  updateProgress();
  saveState();
}

function updateProgress() {
  checkedCount = document.querySelectorAll('.checklist-item.checked').length;
  const pct = Math.round((checkedCount / totalItems) * 100);
  document.getElementById('progressBar').style.width = pct + '%';
  document.getElementById('progressCount').textContent = checkedCount + ' of ' + totalItems + ' items complete';
}

function resetAll() {
  if (!confirm('Reset all checklist items?')) return;
  document.querySelectorAll('.checklist-item').forEach(item => item.classList.remove('checked'));
  try { localStorage.removeItem(STORAGE_KEY); } catch(e) {}
  updateProgress();
}

// ── Nav Tab Active ───────────────────────────────
function setActive(el) {
  document.querySelectorAll('.progress-step').forEach(s => s.classList.remove('active'));
  el.classList.add('active');
}

// ── Scroll-spy for nav ───────────────────────────
const phases = ['phase1','phase2','phase3','phase4','phase5','phase6'];
const observer = new IntersectionObserver((entries) => {
  entries.forEach(e => {
    if (e.isIntersecting) {
      const idx = phases.indexOf(e.target.id) + 1;
      document.querySelectorAll('.progress-step').forEach((s, i) => {
        s.classList.toggle('active', i + 1 === idx);
      });
    }
  });
}, { rootMargin: '-30% 0px -60% 0px' });
phases.forEach(id => { const el = document.getElementById(id); if(el) observer.observe(el); });

loadState();
</script>

<?php include '../includes/footer.php'; ?>