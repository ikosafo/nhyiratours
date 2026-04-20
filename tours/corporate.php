<?php include '../includes/header.php'; ?>

<style>
/* ═══════════════════════════════════════════════════════
   CORPORATE & MICE TOURS — tours/corporate-mice.php
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
  max-width: 22ch;
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

/* ── MICE Grid ───────────────────────────────────── */
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
  transition: transform var(--trans), box-shadow var(--trans), border-color var(--trans-fast);
}
.mice-card:hover {
  transform: translateY(-6px);
  box-shadow: var(--shadow-lg);
  border-color: var(--gold);
}
.mice-card__img {
  aspect-ratio: 16/9;
  overflow: hidden;
}
.mice-card__img img {
  width: 100%; height: 100%;
  object-fit: cover;
  transition: transform var(--trans-slow);
}
.mice-card:hover .mice-card__img img { transform: scale(1.06); }
.mice-card__body {
  padding: 1.5rem;
  display: flex;
  flex-direction: column;
  flex: 1;
}
.mice-card__title {
  font-family: 'Cormorant Garamond', serif;
  font-size: 1.3rem;
  font-weight: 600;
  color: var(--earth);
  line-height: 1.25;
  margin-bottom: .6rem;
}
.mice-card__desc {
  font-size: .82rem;
  color: var(--text-soft);
  line-height: 1.68;
  margin-bottom: 1.2rem;
  flex: 1;
}
.mice-card__tags {
  display: flex;
  flex-wrap: wrap;
  gap: .4rem;
  margin-bottom: 1.25rem;
}
.mice-card__tag {
  font-size: .68rem;
  font-weight: 500;
  background: var(--gold-pale);
  color: var(--gold-dark);
  border: 1px solid var(--border);
  border-radius: 40px;
  padding: .2rem .7rem;
}

/* ── Sidebar Form ────────────────────────────────── */
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
  width: 100%;
}
.enquiry-box__input::placeholder,
.enquiry-box__textarea::placeholder { color: rgba(242,232,213,.35); }
.enquiry-box__input:focus,
.enquiry-box__select:focus,
.enquiry-box__textarea:focus { border-color: var(--gold); }

/* ── CTA Band ────────────────────────────────────── */
.cta-band {
  background: linear-gradient(135deg, var(--earth), #5C3D2E);
  border-radius: var(--radius-xl);
  padding: clamp(2.5rem,5vw,4rem);
  text-align: center;
  position: relative;
  overflow: hidden;
}
.cta-band__title {
  font-family: 'Cormorant Garamond', serif;
  font-size: clamp(1.8rem,4vw,3rem);
  font-weight: 600;
  color: var(--cream);
  margin-bottom: .75rem;
}
.cta-band__title em { font-style: italic; color: var(--gold-light); }
.cta-band__sub {
  font-size: .95rem;
  color: rgba(242,232,213,.7);
  max-width: 44ch;
  margin: 0 auto 2rem;
}

/* ── Responsive ──────────────────────────────────── */
@media (max-width: 1100px) {
  .mice-grid { grid-template-columns: 1fr 1fr; }
  .enquiry-layout { grid-template-columns: 1fr; }
  .enquiry-box { position: static; }
}
@media (max-width: 640px) {
  .mice-grid { grid-template-columns: 1fr; }
}
</style>

<!-- ════════════════════════════════════════════════
     HERO
═══════════════════════════════════════════════════ -->
<section class="tour-hero">
  <img class="tour-hero__bg"
    src="https://images.unsplash.com/photo-1511578314322-37af7841f085?w=1920&q=80"
    alt="Corporate event in Cape Town"
    loading="eager" />
  <div class="tour-hero__overlay"></div>
  <div class="tour-hero__kente"></div>
  <div class="tour-hero__content">
    <nav class="breadcrumb" style="margin-bottom:1rem;">
      <a href="<?= URLROOT ?>">Home</a>
      <span class="breadcrumb__sep">›</span>
      <a href="#">Tours</a>
      <span class="breadcrumb__sep">›</span>
      <span class="breadcrumb__current">Corporate &amp; MICE</span>
    </nav>
    <div class="tour-hero__badge">💼 Corporate &amp; MICE Travel</div>
    <h1 class="tour-hero__title">Meetings That <em>Inspire.</em><br>Incentives That <em>Reward.</em></h1>
    <p class="tour-hero__subtitle">Pier One delivers flawless corporate events, incentive trips, and business travel logistics across Africa. From Cape Town boardrooms to Serengeti team-building safaris — we handle the details so you can focus on the business.</p>
    <div class="tour-hero__meta">
      <span class="tour-hero__meta-item">
        <svg fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
        Groups of 20–500+
      </span>
      <span class="tour-hero__meta-item">
        <svg fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"/></svg>
        Full-Service Event Management
      </span>
      <span class="tour-hero__meta-item">
        <svg fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/></svg>
        Pan-African Coverage
      </span>
    </div>
    <div style="display:flex;gap:1rem;flex-wrap:wrap;">
      <a href="#mice-packages" class="btn btn-primary btn-lg">
        View MICE Packages
        <svg class="arrow-icon" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
          <path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
        </svg>
      </a>
      <a href="#enquiry" class="btn btn-secondary btn-lg">Request Proposal</a>
    </div>
  </div>
</section>

<!-- ════════════════════════════════════════════════
     MICE GRID
═══════════════════════════════════════════════════ -->
<section class="section section--cream" id="mice-packages">
  <div class="container">
    <div style="text-align:center;max-width:560px;margin:0 auto 3rem;">
      <span class="section-eyebrow reveal">MICE Services</span>
      <h2 class="section-title reveal reveal-delay-1">Corporate Travel &amp;<br><em>Event Solutions</em></h2>
      <p class="section-subtitle reveal reveal-delay-2" style="margin:0 auto;">From exclusive board retreats to large-scale conferences, we manage every component with precision and African hospitality.</p>
    </div>

    <div class="mice-grid">

      <!-- MICE 1 -->
      <div class="mice-card reveal">
        <div class="mice-card__img">
          <img src="https://images.unsplash.com/photo-1511578314322-37af7841f085?w=700&q=80" alt="Conferences" loading="lazy" />
        </div>
        <div class="mice-card__body">
          <div class="mice-card__title">Conferences &amp; Congresses</div>
          <div class="mice-card__desc">Venue sourcing, AV production, delegate registration, accommodation blocks, and airport transfers for events from 50 to 5,000+ delegates.</div>
          <div class="mice-card__tags">
            <span class="mice-card__tag">Venue Sourcing</span>
            <span class="mice-card__tag">AV &amp; Tech</span>
            <span class="mice-card__tag">Delegate Management</span>
            <span class="mice-card__tag">Gala Dinners</span>
          </div>
          <a href="#enquiry" class="btn btn-outline btn-sm" style="width:100%;">Request Proposal</a>
        </div>
      </div>

      <!-- MICE 2 -->
      <div class="mice-card reveal reveal-delay-1">
        <div class="mice-card__img">
          <img src="https://images.unsplash.com/photo-1516026672322-bc52d61a55d5?w=700&q=80" alt="Incentive Travel" loading="lazy" />
        </div>
        <div class="mice-card__body">
          <div class="mice-card__title">Incentive Travel &amp; Rewards</div>
          <div class="mice-card__desc">Motivate top performers with once-in-a-lifetime African experiences. Private safari dinners, helicopter transfers, and luxury lodge buyouts — designed to wow.</div>
          <div class="mice-card__tags">
            <span class="mice-card__tag">Luxury Safaris</span>
            <span class="mice-card__tag">Exclusive Venues</span>
            <span class="mice-card__tag">Branded Experiences</span>
            <span class="mice-card__tag">VIP Handling</span>
          </div>
          <a href="#enquiry" class="btn btn-outline btn-sm" style="width:100%;">Request Proposal</a>
        </div>
      </div>

      <!-- MICE 3 -->
      <div class="mice-card reveal reveal-delay-2">
        <div class="mice-card__img">
          <img src="https://images.unsplash.com/photo-1540575467063-178a50c2df87?w=700&q=80" alt="Team Building" loading="lazy" />
        </div>
        <div class="mice-card__body">
          <div class="mice-card__title">Executive Retreats &amp; Team Building</div>
          <div class="mice-card__desc">Bespoke corporate retreats that blend strategic planning sessions with transformative team-building activities — from building a classroom in a local village to tracking wildlife on foot.</div>
          <div class="mice-card__tags">
            <span class="mice-card__tag">CSR Integration</span>
            <span class="mice-card__tag">Strategy Facilitation</span>
            <span class="mice-card__tag">Bush Boardrooms</span>
            <span class="mice-card__tag">Wellness</span>
          </div>
          <a href="#enquiry" class="btn btn-outline btn-sm" style="width:100%;">Request Proposal</a>
        </div>
      </div>

      <!-- MICE 4 -->
      <div class="mice-card reveal">
        <div class="mice-card__img">
          <img src="https://images.unsplash.com/photo-1568992687947-868a62f9f521?w=700&q=80" alt="Business Travel" loading="lazy" />
        </div>
        <div class="mice-card__body">
          <div class="mice-card__title">Business Travel Management</div>
          <div class="mice-card__desc">Corporate travel desk services for organisations with frequent travel to, from, and within Africa. Consolidated invoicing, duty of care tracking, and 24/7 traveler support.</div>
          <div class="mice-card__tags">
            <span class="mice-card__tag">Flight Booking</span>
            <span class="mice-card__tag">Corporate Rates</span>
            <span class="mice-card__tag">Visa Assistance</span>
            <span class="mice-card__tag">Travel Policy Compliance</span>
          </div>
          <a href="#enquiry" class="btn btn-outline btn-sm" style="width:100%;">Request Proposal</a>
        </div>
      </div>

      <!-- MICE 5 -->
      <div class="mice-card reveal reveal-delay-1">
        <div class="mice-card__img">
          <img src="https://images.unsplash.com/photo-1517457373958-b7bdd4587205?w=700&q=80" alt="Product Launches" loading="lazy" />
        </div>
        <div class="mice-card__body">
          <div class="mice-card__title">Product Launches &amp; Activations</div>
          <div class="mice-card__desc">Make a splash in the African market. We handle venue styling, local influencer coordination, press management, and full event production for brand activations across the continent.</div>
          <div class="mice-card__tags">
            <span class="mice-card__tag">Event Production</span>
            <span class="mice-card__tag">PR &amp; Media</span>
            <span class="mice-card__tag">Influencer Coordination</span>
            <span class="mice-card__tag">Theming</span>
          </div>
          <a href="#enquiry" class="btn btn-outline btn-sm" style="width:100%;">Request Proposal</a>
        </div>
      </div>

      <!-- MICE 6 -->
      <div class="mice-card reveal reveal-delay-2">
        <div class="mice-card__img">
          <img src="https://images.unsplash.com/photo-1539020140153-e479b8c22e70?w=700&q=80" alt="Board Meeting" loading="lazy" />
        </div>
        <div class="mice-card__body">
          <div class="mice-card__title">Board Meetings &amp; AGMs</div>
          <div class="mice-card__desc">High-touch, discreet service for annual general meetings and board retreats. Private air charters, secure meeting spaces, and flawless executive concierge service throughout.</div>
          <div class="mice-card__tags">
            <span class="mice-card__tag">Private Jets</span>
            <span class="mice-card__tag">Executive Concierge</span>
            <span class="mice-card__tag">Secure Venues</span>
            <span class="mice-card__tag">Spousal Programmes</span>
          </div>
          <a href="#enquiry" class="btn btn-outline btn-sm" style="width:100%;">Request Proposal</a>
        </div>
      </div>

    </div><!-- /.mice-grid -->
  </div>
</section>

<!-- ════════════════════════════════════════════════
     ENQUIRY FORM
═══════════════════════════════════════════════════ -->
<section class="section section--sand" id="enquiry">
  <div class="container">
    <div class="enquiry-layout">
      <!-- Left: Why Pier One MICE -->
      <div>
        <span class="section-eyebrow reveal">Why Pier One MICE</span>
        <h2 class="section-title reveal reveal-delay-1">Corporate Events,<br><em>Done Right.</em></h2>
        <div class="intro-pillar-list">
          <div class="intro-pillar reveal reveal-delay-2">
            <div class="intro-pillar__icon">🌍</div>
            <div>
              <div class="intro-pillar__title">Pan-African Footprint</div>
              <div class="intro-pillar__desc">We have offices and trusted DMC partners in 12+ African countries — one contract, one invoice, continent-wide execution.</div>
            </div>
          </div>
          <div class="intro-pillar reveal reveal-delay-3">
            <div class="intro-pillar__icon">🎯</div>
            <div>
              <div class="intro-pillar__title">Single Point of Contact</div>
              <div class="intro-pillar__desc">You work with one dedicated MICE Project Manager who owns your event from first RFP to final departure.</div>
            </div>
          </div>
          <div class="intro-pillar reveal reveal-delay-4">
            <div class="intro-pillar__icon">📊</div>
            <div>
              <div class="intro-pillar__title">Transparent Reporting</div>
              <div class="intro-pillar__desc">Real-time dashboards for delegate registration, rooming lists, and budget tracking.</div>
            </div>
          </div>
        </div>
      </div>

      <!-- Right: RFP Form -->
      <div class="enquiry-box reveal reveal-delay-3">
        <div class="enquiry-box__title">Submit an RFP</div>
        <p class="enquiry-box__sub">Tell us about your event or corporate travel needs. We'll respond with a preliminary proposal within 24 hours.</p>
        <form onsubmit="return false;">
          <div class="enquiry-box__field">
            <label class="enquiry-box__label">Company / Organization</label>
            <input class="enquiry-box__input" type="text" placeholder="Company Name" />
          </div>
          <div class="enquiry-box__field">
            <label class="enquiry-box__label">Contact Person &amp; Title</label>
            <input class="enquiry-box__input" type="text" placeholder="Full Name, Job Title" />
          </div>
          <div class="enquiry-box__field">
            <label class="enquiry-box__label">Email Address</label>
            <input class="enquiry-box__input" type="email" placeholder="you@company.com" />
          </div>
          <div class="enquiry-box__field">
            <label class="enquiry-box__label">Type of Service</label>
            <select class="enquiry-box__select">
              <option>Conference / Congress</option>
              <option>Incentive Travel / Reward Trip</option>
              <option>Executive Retreat / Team Building</option>
              <option>Product Launch / Activation</option>
              <option>Business Travel Management</option>
              <option>Board Meeting / AGM</option>
            </select>
          </div>
          <div style="display:grid;grid-template-columns:1fr 1fr;gap:.75rem;">
            <div class="enquiry-box__field">
              <label class="enquiry-box__label">Expected Delegates</label>
              <select class="enquiry-box__select">
                <option>20 – 50</option>
                <option>51 – 150</option>
                <option>151 – 500</option>
                <option>500+</option>
              </select>
            </div>
            <div class="enquiry-box__field">
              <label class="enquiry-box__label">Event Date</label>
              <select class="enquiry-box__select">
                <option>Q1 2026</option>
                <option>Q2 2026</option>
                <option>Q3 2026</option>
                <option>Q4 2026</option>
                <option>2027</option>
                <option>Flexible / TBD</option>
              </select>
            </div>
          </div>
          <div class="enquiry-box__field">
            <label class="enquiry-box__label">Preferred Destination(s)</label>
            <input class="enquiry-box__input" type="text" placeholder="e.g., Cape Town, Accra, Nairobi, or open to suggestions" />
          </div>
          <button type="submit" class="btn btn-primary" style="width:100%;justify-content:center;">
            Send RFP
            <svg class="arrow-icon" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
              <path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
            </svg>
          </button>
          <p class="enquiry-box__note">We treat RFPs with strict confidentiality. <a href="#">Privacy Policy</a>.</p>
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
      <h2 class="cta-band__title">Let's Make <em>Business</em><br>An Adventure.</h2>
      <p class="cta-band__sub">From the boardroom to the bush, Pier One delivers corporate travel that exceeds expectations.</p>
      <div class="cta-band__actions">
        <a href="#enquiry" class="btn btn-primary btn-lg">
          Contact MICE Desk
          <svg class="arrow-icon" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
          </svg>
        </a>
        <a href="mailto:mice@pieronetours.com" class="btn btn-secondary btn-lg">mice@pieronetours.com</a>
      </div>
    </div>
  </div>
</section>

<?php include '../includes/footer.php'; ?>