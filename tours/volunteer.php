<?php include '../includes/header.php'; ?>

<style>
/* ═══════════════════════════════════════════════════════
   VOLUNTEER & MISSION TOURS — tours/volunteer-mission.php
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
  max-width: 18ch;
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

/* ── Mission Grid ─────────────────────────────────── */
.mission-grid {
  display: grid;
  grid-template-columns: repeat(3,1fr);
  gap: 1.5rem;
}
.mission-card {
  background: var(--white);
  border-radius: var(--radius-lg);
  border: 1px solid var(--border-soft);
  overflow: hidden;
  transition: transform var(--trans), box-shadow var(--trans), border-color var(--trans-fast);
  display: flex;
  flex-direction: column;
}
.mission-card:hover {
  transform: translateY(-6px);
  box-shadow: var(--shadow-lg);
  border-color: var(--gold);
}
.mission-card__img {
  aspect-ratio: 16/9;
  overflow: hidden;
  position: relative;
}
.mission-card__img img {
  width: 100%; height: 100%;
  object-fit: cover;
  transition: transform var(--trans-slow);
}
.mission-card:hover .mission-card__img img { transform: scale(1.06); }
.mission-card__badge {
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
.mission-card__body {
  padding: 1.5rem;
  display: flex;
  flex-direction: column;
  flex: 1;
}
.mission-card__region {
  font-size: .7rem;
  font-weight: 600;
  color: var(--gold);
  letter-spacing: .12em;
  text-transform: uppercase;
  margin-bottom: .4rem;
}
.mission-card__title {
  font-family: 'Cormorant Garamond', serif;
  font-size: 1.3rem;
  font-weight: 600;
  color: var(--earth);
  line-height: 1.25;
  margin-bottom: .6rem;
}
.mission-card__desc {
  font-size: .82rem;
  color: var(--text-soft);
  line-height: 1.68;
  margin-bottom: 1.2rem;
  flex: 1;
}
.mission-card__tags {
  display: flex;
  flex-wrap: wrap;
  gap: .4rem;
  margin-bottom: 1.25rem;
}
.mission-card__tag {
  font-size: .68rem;
  font-weight: 500;
  background: var(--gold-pale);
  color: var(--gold-dark);
  border: 1px solid var(--border);
  border-radius: 40px;
  padding: .2rem .7rem;
}
.mission-card__footer {
  display: flex;
  align-items: center;
  justify-content: space-between;
  border-top: 1px solid var(--border-soft);
  padding-top: 1.1rem;
}
.mission-card__meta-val {
  font-family: 'Cormorant Garamond', serif;
  font-size: 1.3rem;
  font-weight: 700;
  color: var(--earth);
}
.mission-card__meta-label { font-size: .65rem; color: var(--text-muted); text-transform: uppercase; }

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
  .mission-grid { grid-template-columns: 1fr 1fr; }
  .enquiry-layout { grid-template-columns: 1fr; }
  .enquiry-box { position: static; }
}
@media (max-width: 900px) {
  .highlight-strip { grid-template-columns: repeat(2,1fr); }
}
@media (max-width: 640px) {
  .mission-grid { grid-template-columns: 1fr; }
}
</style>

<!-- ════════════════════════════════════════════════
     HERO
═══════════════════════════════════════════════════ -->
<section class="tour-hero">
  <img class="tour-hero__bg"
    src="https://images.unsplash.com/photo-1542810634-71277d95dcbb?w=1920&q=80"
    alt="Volunteers building in Africa"
    loading="eager" />
  <div class="tour-hero__overlay"></div>
  <div class="tour-hero__kente"></div>
  <div class="tour-hero__content">
    <nav class="breadcrumb" style="margin-bottom:1rem;">
      <a href="<?= URLROOT ?>">Home</a>
      <span class="breadcrumb__sep">›</span>
      <a href="#">Tours</a>
      <span class="breadcrumb__sep">›</span>
      <span class="breadcrumb__current">Volunteer &amp; Mission</span>
    </nav>
    <div class="tour-hero__badge">🤝 Volunteer &amp; Mission Tours</div>
    <h1 class="tour-hero__title">Travel with <em>Purpose.</em><br>Leave with <em>Changed Hearts.</em></h1>
    <p class="tour-hero__subtitle">Pier One partners with vetted, community-led NGOs, clinics, and schools across Africa to create safe, ethical, and high-impact volunteer and mission experiences for groups and individuals.</p>
    <div class="tour-hero__meta">
      <span class="tour-hero__meta-item">
        <svg fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/></svg>
        Community-Vetted Partners
      </span>
      <span class="tour-hero__meta-item">
        <svg fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
        Groups of 5–50+
      </span>
      <span class="tour-hero__meta-item">
        <svg fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path stroke-linecap="round" d="M12 6v6l4 2"/></svg>
        1–4 Week Placements
      </span>
    </div>
    <div style="display:flex;gap:1rem;flex-wrap:wrap;">
      <a href="#missions" class="btn btn-primary btn-lg">
        Explore Placements
        <svg class="arrow-icon" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
          <path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
        </svg>
      </a>
      <a href="#enquiry" class="btn btn-secondary btn-lg">Group Enquiry</a>
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
        <div class="highlight-strip__icon">📚</div>
        <div class="highlight-strip__label">Teaching &amp; Education</div>
        <div class="highlight-strip__desc">Support local teachers in under-resourced schools</div>
      </div>
      <div class="highlight-strip__item reveal reveal-delay-1">
        <div class="highlight-strip__icon">🏥</div>
        <div class="highlight-strip__label">Medical &amp; Public Health</div>
        <div class="highlight-strip__desc">Shadow clinicians &amp; support rural health outreach</div>
      </div>
      <div class="highlight-strip__item reveal reveal-delay-2">
        <div class="highlight-strip__icon">🏗️</div>
        <div class="highlight-strip__label">Construction &amp; Infrastructure</div>
        <div class="highlight-strip__desc">Build classrooms, clinics, and clean water projects</div>
      </div>
      <div class="highlight-strip__item reveal reveal-delay-3">
        <div class="highlight-strip__icon">🙏</div>
        <div class="highlight-strip__label">Faith-Based Mission</div>
        <div class="highlight-strip__desc">Evangelism, pastoral support &amp; church planting</div>
      </div>
    </div>
  </div>
</section>

<!-- ════════════════════════════════════════════════
     MISSION GRID
═══════════════════════════════════════════════════ -->
<section class="section section--cream" id="missions">
  <div class="container">
    <div style="text-align:center;max-width:560px;margin:0 auto 3rem;">
      <span class="section-eyebrow reveal">Our Placements</span>
      <h2 class="section-title reveal reveal-delay-1">Serve Where You're<br><em>Needed Most</em></h2>
      <p class="section-subtitle reveal reveal-delay-2" style="margin:0 auto;">We do the vetting and logistics. You focus on the work and the relationships. Every placement is ethical, community-directed, and includes 24/7 in-country support.</p>
    </div>

    <div class="mission-grid">

      <!-- Mission 1 -->
      <div class="mission-card reveal">
        <div class="mission-card__img">
          <img src="https://images.unsplash.com/photo-1580582932707-520aed937b7b?w=700&q=80" alt="Teaching in Ghana" loading="lazy" />
          <div class="mission-card__badge">Education</div>
        </div>
        <div class="mission-card__body">
          <div class="mission-card__region">Ghana · Volta Region</div>
          <div class="mission-card__title">Rural School Teaching Assistant</div>
          <div class="mission-card__desc">Support local teachers in understaffed primary and JHS classrooms. Assist with English, Math, and creative arts. Includes cultural immersion with a host family in the village.</div>
          <div class="mission-card__tags">
            <span class="mission-card__tag">Teaching</span>
            <span class="mission-card__tag">Child Education</span>
            <span class="mission-card__tag">Homestay</span>
          </div>
          <div class="mission-card__footer">
            <div>
              <span class="mission-card__meta-label">From 2 weeks</span>
              <div class="mission-card__meta-val">$850</div>
            </div>
            <a href="#enquiry" class="btn btn-primary btn-sm">Apply</a>
          </div>
        </div>
      </div>

      <!-- Mission 2 -->
      <div class="mission-card reveal reveal-delay-1">
        <div class="mission-card__img">
          <img src="https://images.unsplash.com/photo-1579684385127-1ef15d508118?w=700&q=80" alt="Medical Mission" loading="lazy" />
          <div class="mission-card__badge">Medical / Health</div>
        </div>
        <div class="mission-card__body">
          <div class="mission-card__region">Kenya · Rift Valley</div>
          <div class="mission-card__title">Community Health Outreach</div>
          <div class="mission-card__desc">Join a mobile health clinic serving remote Maasai communities. Shadow nurses, assist with basic triage, health education, and maternal health awareness campaigns.</div>
          <div class="mission-card__tags">
            <span class="mission-card__tag">Nursing</span>
            <span class="mission-card__tag">Public Health</span>
            <span class="mission-card__tag">Rural Outreach</span>
          </div>
          <div class="mission-card__footer">
            <div>
              <span class="mission-card__meta-label">From 2 weeks</span>
              <div class="mission-card__meta-val">$1,250</div>
            </div>
            <a href="#enquiry" class="btn btn-primary btn-sm">Apply</a>
          </div>
        </div>
      </div>

      <!-- Mission 3 -->
      <div class="mission-card reveal reveal-delay-2">
        <div class="mission-card__img">
          <img src="https://images.unsplash.com/photo-1593113646773-028c64a8f1b8?w=700&q=80" alt="Construction Volunteer" loading="lazy" />
          <div class="mission-card__badge">Construction</div>
        </div>
        <div class="mission-card__body">
          <div class="mission-card__region">Rwanda · Eastern Province</div>
          <div class="mission-card__title">School Building &amp; Renovation</div>
          <div class="mission-card__desc">Work alongside local masons and community members to build or renovate classrooms. No experience needed — just willingness to get your hands dirty and work as a team.</div>
          <div class="mission-card__tags">
            <span class="mission-card__tag">Building</span>
            <span class="mission-card__tag">Community-Led</span>
            <span class="mission-card__tag">Physical Work</span>
          </div>
          <div class="mission-card__footer">
            <div>
              <span class="mission-card__meta-label">From 1 week</span>
              <div class="mission-card__meta-val">$720</div>
            </div>
            <a href="#enquiry" class="btn btn-primary btn-sm">Apply</a>
          </div>
        </div>
      </div>

      <!-- Mission 4 -->
      <div class="mission-card reveal">
        <div class="mission-card__img">
          <img src="https://images.unsplash.com/photo-1542810634-71277d95dcbb?w=700&q=80" alt="Faith Mission" loading="lazy" />
          <div class="mission-card__badge">Faith Mission</div>
        </div>
        <div class="mission-card__body">
          <div class="mission-card__region">Tanzania · Arusha</div>
          <div class="mission-card__title">Church Planting &amp; Pastoral Support</div>
          <div class="mission-card__desc">Support a local Tanzanian church plant through children's ministry, evangelism training, or pastoral encouragement. Includes Swahili worship and Bible study with locals.</div>
          <div class="mission-card__tags">
            <span class="mission-card__tag">Evangelism</span>
            <span class="mission-card__tag">Discipleship</span>
            <span class="mission-card__tag">Cross-Cultural</span>
          </div>
          <div class="mission-card__footer">
            <div>
              <span class="mission-card__meta-label">From 10 days</span>
              <div class="mission-card__meta-val">$980</div>
            </div>
            <a href="#enquiry" class="btn btn-primary btn-sm">Apply</a>
          </div>
        </div>
      </div>

      <!-- Mission 5 -->
      <div class="mission-card reveal reveal-delay-1">
        <div class="mission-card__img">
          <img src="https://images.unsplash.com/photo-1488521787991-ed7bbaae773c?w=700&q=80" alt="Youth Work" loading="lazy" />
          <div class="mission-card__badge">Youth &amp; Sports</div>
        </div>
        <div class="mission-card__body">
          <div class="mission-card__region">South Africa · Cape Town</div>
          <div class="mission-card__title">Township Sports &amp; Youth Development</div>
          <div class="mission-card__desc">Coach football, netball, or athletics in after-school programmes in Cape Town's townships. Be a positive role model and mentor for at-risk youth.</div>
          <div class="mission-card__tags">
            <span class="mission-card__tag">Coaching</span>
            <span class="mission-card__tag">Mentoring</span>
            <span class="mission-card__tag">Youth Work</span>
          </div>
          <div class="mission-card__footer">
            <div>
              <span class="mission-card__meta-label">From 2 weeks</span>
              <div class="mission-card__meta-val">$1,100</div>
            </div>
            <a href="#enquiry" class="btn btn-primary btn-sm">Apply</a>
          </div>
        </div>
      </div>

      <!-- Mission 6 -->
      <div class="mission-card reveal reveal-delay-2">
        <div class="mission-card__img">
          <img src="https://images.unsplash.com/photo-1593113598332-cd59a0c3a9a4?w=700&q=80" alt="Conservation Volunteer" loading="lazy" />
          <div class="mission-card__badge">Conservation</div>
        </div>
        <div class="mission-card__body">
          <div class="mission-card__region">Uganda · Queen Elizabeth NP</div>
          <div class="mission-card__title">Wildlife Conservation &amp; Community</div>
          <div class="mission-card__desc">Assist with conservation research, tree planting, and human-wildlife conflict mitigation projects on the edge of Queen Elizabeth National Park.</div>
          <div class="mission-card__tags">
            <span class="mission-card__tag">Conservation</span>
            <span class="mission-card__tag">Environment</span>
            <span class="mission-card__tag">Research</span>
          </div>
          <div class="mission-card__footer">
            <div>
              <span class="mission-card__meta-label">From 2 weeks</span>
              <div class="mission-card__meta-val">$1,300</div>
            </div>
            <a href="#enquiry" class="btn btn-primary btn-sm">Apply</a>
          </div>
        </div>
      </div>

    </div><!-- /.mission-grid -->
  </div>
</section>

<!-- ════════════════════════════════════════════════
     ENQUIRY + FAQ (Simplified)
═══════════════════════════════════════════════════ -->
<section class="section section--sand" id="enquiry">
  <div class="container">
    <div class="enquiry-layout">

      <!-- Left: Info -->
      <div>
        <span class="section-eyebrow reveal">Before You Apply</span>
        <h2 class="section-title reveal reveal-delay-1">Ethical Volunteering<br><em>Guaranteed</em></h2>
        <p class="section-subtitle reveal reveal-delay-2" style="margin-bottom:2rem;">Pier One is a member of the Global Sustainable Tourism Council. We do not support orphanage tourism or placements that displace local workers. Every partner is vetted for community impact.</p>
        <div class="intro-pillar-list">
          <div class="intro-pillar reveal reveal-delay-2">
            <div class="intro-pillar__icon">✅</div>
            <div>
              <div class="intro-pillar__title">Pre-Departure Training</div>
              <div class="intro-pillar__desc">Comprehensive cultural orientation, language basics, and health/safety briefing before you leave home.</div>
            </div>
          </div>
          <div class="intro-pillar reveal reveal-delay-3">
            <div class="intro-pillar__icon">🛡️</div>
            <div>
              <div class="intro-pillar__title">24/7 In-Country Support</div>
              <div class="intro-pillar__desc">A Pier One coordinator is based in the destination country and available to you around the clock.</div>
            </div>
          </div>
        </div>
      </div>

      <!-- Right: Enquiry Form -->
      <div class="enquiry-box reveal reveal-delay-3">
        <div class="enquiry-box__title">Apply for Placement</div>
        <p class="enquiry-box__sub">For individuals or group leaders. We'll send placement options within 72 hours.</p>
        <form onsubmit="return false;">
          <div class="enquiry-box__field">
            <label class="enquiry-box__label">Full Name</label>
            <input class="enquiry-box__input" type="text" placeholder="Your name" />
          </div>
          <div class="enquiry-box__field">
            <label class="enquiry-box__label">Email Address</label>
            <input class="enquiry-box__input" type="email" placeholder="you@email.com" />
          </div>
          <div class="enquiry-box__field">
            <label class="enquiry-box__label">Type of Placement</label>
            <select class="enquiry-box__select">
              <option>Teaching / Education</option>
              <option>Medical / Public Health</option>
              <option>Construction</option>
              <option>Faith Mission</option>
              <option>Youth / Sports</option>
              <option>Conservation</option>
              <option>Not sure — advise me</option>
            </select>
          </div>
          <div class="enquiry-box__field">
            <label class="enquiry-box__label">Preferred Destination</label>
            <select class="enquiry-box__select">
              <option>Ghana</option>
              <option>Kenya</option>
              <option>Rwanda</option>
              <option>Tanzania</option>
              <option>South Africa</option>
              <option>Uganda</option>
              <option>Open to suggestion</option>
            </select>
          </div>
          <div style="display:grid;grid-template-columns:1fr 1fr;gap:.75rem;">
            <div class="enquiry-box__field">
              <label class="enquiry-box__label">Group Size</label>
              <select class="enquiry-box__select">
                <option>Solo (1)</option>
                <option>Small Team (2–5)</option>
                <option>Group (6–15)</option>
                <option>Large Group (15+)</option>
              </select>
            </div>
            <div class="enquiry-box__field">
              <label class="enquiry-box__label">Duration</label>
              <select class="enquiry-box__select">
                <option>1–2 Weeks</option>
                <option>3–4 Weeks</option>
                <option>1–3 Months</option>
                <option>Flexible</option>
              </select>
            </div>
          </div>
          <button type="submit" class="btn btn-primary" style="width:100%;justify-content:center;">
            Send Application
            <svg class="arrow-icon" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
              <path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
            </svg>
          </button>
          <p class="enquiry-box__note">Free to apply. Placement fees support local projects.</p>
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
      <h2 class="cta-band__title">Go. Serve. <em>Grow.</em></h2>
      <p class="cta-band__sub">A trip that changes your life and the lives of others. Join a Pier One volunteer mission and see Africa through the eyes of its people.</p>
      <div class="cta-band__actions">
        <a href="#enquiry" class="btn btn-primary btn-lg">
          Find Your Mission
          <svg class="arrow-icon" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
          </svg>
        </a>
        <a href="mailto:volunteer@pieronetours.com" class="btn btn-secondary btn-lg">Contact Volunteer Desk</a>
      </div>
    </div>
  </div>
</section>

<?php include '../includes/footer.php'; ?>