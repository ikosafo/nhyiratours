<?php include '../includes/header.php'; ?>

<style>
/* ═══════════════════════════════════════════════════════
   LEISURE TOURS — tours/leisure.php
   Pier One Travel & Tour Services
════════════════════════════════════════════════════════ */

/* ── Hero ─────────────────────────────────────────── */
.tour-hero {
  position: relative;
  height: 100vh;
  min-height: 600px;
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
.tour-hero:hover .tour-hero__bg { transform: scale(1.03); }
.tour-hero__overlay {
  position: absolute;
  inset: 0;
  background:
    linear-gradient(to right, rgba(28,16,8,.9) 0%, rgba(28,16,8,.5) 50%, rgba(28,16,8,.15) 100%),
    linear-gradient(to top, rgba(28,16,8,.88) 0%, transparent 55%);
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
  padding: 4rem clamp(1rem,4vw,3rem);
}
.tour-hero__badge {
  display: inline-flex;
  align-items: center;
  gap: .5rem;
  background: rgba(200,145,58,.15);
  backdrop-filter: blur(8px);
  border: 1px solid rgba(200,145,58,.4);
  border-radius: 40px;
  padding: .35rem 1.1rem;
  color: var(--gold-light);
  font-size: .72rem;
  font-weight: 600;
  letter-spacing: .16em;
  text-transform: uppercase;
  margin-bottom: 1.25rem;
}
.tour-hero__title {
  font-family: 'Cormorant Garamond', serif;
  font-size: clamp(2.8rem, 7vw, 5.5rem);
  font-weight: 600;
  color: var(--white);
  line-height: 1.05;
  letter-spacing: -.015em;
  margin-bottom: 1.35rem;
  max-width: 17ch;
}
.tour-hero__title em { font-style: italic; color: var(--gold-light); }
.tour-hero__subtitle {
  font-size: clamp(.9rem, 1.6vw, 1.1rem);
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
  color: rgba(255,255,255,.6);
  font-size: .8rem;
  margin-bottom: 2.25rem;
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
  padding: 1.75rem 1.25rem;
  text-align: center;
  border-right: 1px solid var(--border);
}
.highlight-strip__item:last-child { border-right: none; }
.highlight-strip__icon { font-size: 1.8rem; margin-bottom: .6rem; }
.highlight-strip__label {
  font-family: 'Cormorant Garamond', serif;
  font-size: 1rem;
  font-weight: 600;
  color: var(--earth);
  margin-bottom: .25rem;
}
.highlight-strip__desc { font-size: .74rem; color: var(--text-soft); line-height: 1.55; }

/* ── Experience Categories — Tab Filter ───────────── */
.cat-tabs {
  display: flex;
  gap: .5rem;
  flex-wrap: wrap;
  margin-bottom: 2.5rem;
}
.cat-tab {
  display: inline-flex;
  align-items: center;
  gap: .4rem;
  padding: .6rem 1.25rem;
  border-radius: 40px;
  font-size: .8rem;
  font-weight: 500;
  border: 1.5px solid var(--border);
  color: var(--text-mid);
  background: var(--white);
  cursor: pointer;
  transition: all var(--trans-fast);
}
.cat-tab:hover, .cat-tab.active {
  background: var(--gold);
  border-color: var(--gold);
  color: var(--white);
  box-shadow: 0 4px 16px rgba(200,145,58,.35);
}

/* ── Featured Tour — Large Card ───────────────────── */
.featured-tour {
  border-radius: var(--radius-xl);
  overflow: hidden;
  background: var(--white);
  border: 1px solid var(--border-soft);
  display: grid;
  grid-template-columns: 1.2fr 1fr;
  gap: 0;
  box-shadow: var(--shadow-md);
  margin-bottom: 3rem;
  transition: box-shadow var(--trans);
}
.featured-tour:hover { box-shadow: var(--shadow-xl); }
.featured-tour__img {
  position: relative;
  overflow: hidden;
}
.featured-tour__img img {
  width: 100%;
  height: 100%;
  min-height: 480px;
  object-fit: cover;
  transition: transform var(--trans-slow);
}
.featured-tour:hover .featured-tour__img img { transform: scale(1.04); }
.featured-tour__badge {
  position: absolute;
  top: 1.25rem; left: 1.25rem;
  background: var(--gold);
  color: var(--white);
  font-size: .66rem;
  font-weight: 700;
  letter-spacing: .12em;
  text-transform: uppercase;
  padding: .3rem .9rem;
  border-radius: 40px;
}
.featured-tour__rating {
  position: absolute;
  bottom: 1.25rem; left: 1.25rem;
  background: rgba(28,16,8,.75);
  backdrop-filter: blur(8px);
  border: 1px solid rgba(200,145,58,.3);
  border-radius: 40px;
  padding: .35rem 1rem;
  color: var(--gold-light);
  font-size: .78rem;
  font-weight: 600;
  display: flex;
  align-items: center;
  gap: .4rem;
}
.featured-tour__body {
  padding: 3rem 2.5rem;
  display: flex;
  flex-direction: column;
  justify-content: center;
}
.featured-tour__region {
  font-size: .72rem;
  font-weight: 600;
  color: var(--gold);
  letter-spacing: .14em;
  text-transform: uppercase;
  margin-bottom: .5rem;
}
.featured-tour__title {
  font-family: 'Cormorant Garamond', serif;
  font-size: 2rem;
  font-weight: 600;
  color: var(--earth);
  line-height: 1.2;
  margin-bottom: .75rem;
}
.featured-tour__desc {
  font-size: .87rem;
  color: var(--text-soft);
  line-height: 1.8;
  margin-bottom: 1.75rem;
}
.featured-tour__highlights {
  display: flex;
  flex-direction: column;
  gap: .6rem;
  margin-bottom: 2rem;
}
.featured-tour__highlight {
  display: flex;
  align-items: center;
  gap: .7rem;
  font-size: .82rem;
  color: var(--text-mid);
}
.featured-tour__highlight::before {
  content: '';
  display: block;
  width: 7px; height: 7px;
  border-radius: 50%;
  background: var(--gold);
  flex-shrink: 0;
}
.featured-tour__meta {
  display: flex;
  gap: 1.5rem;
  flex-wrap: wrap;
  padding: 1.25rem 0;
  border-top: 1px solid var(--border-soft);
  border-bottom: 1px solid var(--border-soft);
  margin-bottom: 1.75rem;
}
.featured-tour__meta-item { display: flex; align-items: center; gap: .4rem; font-size: .78rem; color: var(--text-soft); }
.featured-tour__meta-item svg { width: 14px; height: 14px; color: var(--gold); }
.featured-tour__footer {
  display: flex;
  align-items: center;
  justify-content: space-between;
}
.featured-tour__price-label { font-size: .68rem; color: var(--text-muted); text-transform: uppercase; letter-spacing: .06em; }
.featured-tour__price-amount {
  font-family: 'Cormorant Garamond', serif;
  font-size: 2.2rem;
  font-weight: 700;
  color: var(--earth);
  letter-spacing: -.02em;
  line-height: 1;
}
.featured-tour__price-sub { font-size: .73rem; color: var(--text-soft); }

/* ── Tour Cards Grid ──────────────────────────────── */
.tours-grid {
  display: grid;
  grid-template-columns: repeat(3,1fr);
  gap: 1.5rem;
}
.tour-card {
  background: var(--white);
  border-radius: var(--radius-lg);
  overflow: hidden;
  border: 1px solid var(--border-soft);
  display: flex;
  flex-direction: column;
  transition: transform var(--trans), box-shadow var(--trans), border-color var(--trans-fast);
}
.tour-card:hover {
  transform: translateY(-6px);
  box-shadow: var(--shadow-lg);
  border-color: var(--gold);
}
.tour-card__img {
  aspect-ratio: 16/10;
  overflow: hidden;
  position: relative;
}
.tour-card__img img {
  width: 100%; height: 100%;
  object-fit: cover;
  transition: transform var(--trans-slow);
}
.tour-card:hover .tour-card__img img { transform: scale(1.07); }
.tour-card__badge {
  position: absolute;
  top: 1rem; left: 1rem;
  background: var(--gold);
  color: var(--white);
  font-size: .64rem;
  font-weight: 700;
  letter-spacing: .1em;
  text-transform: uppercase;
  padding: .25rem .75rem;
  border-radius: 40px;
}
.tour-card__wishlist {
  position: absolute;
  top: 1rem; right: 1rem;
  width: 36px; height: 36px;
  background: rgba(255,255,255,.9);
  backdrop-filter: blur(6px);
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 1rem;
  cursor: pointer;
  transition: transform var(--trans-fast), background var(--trans-fast);
}
.tour-card__wishlist:hover { transform: scale(1.15); background: var(--white); }
.tour-card__body {
  padding: 1.4rem 1.5rem 1.5rem;
  display: flex;
  flex-direction: column;
  flex: 1;
}
.tour-card__region {
  font-size: .68rem;
  font-weight: 600;
  color: var(--gold);
  letter-spacing: .12em;
  text-transform: uppercase;
  margin-bottom: .4rem;
}
.tour-card__title {
  font-family: 'Cormorant Garamond', serif;
  font-size: 1.25rem;
  font-weight: 600;
  color: var(--earth);
  line-height: 1.25;
  margin-bottom: .55rem;
}
.tour-card__desc {
  font-size: .81rem;
  color: var(--text-soft);
  line-height: 1.68;
  margin-bottom: 1rem;
  flex: 1;
}
.tour-card__tags {
  display: flex;
  gap: .35rem;
  flex-wrap: wrap;
  margin-bottom: 1.25rem;
}
.tour-card__tag {
  font-size: .66rem;
  font-weight: 500;
  background: var(--gold-pale);
  color: var(--gold-dark);
  border: 1px solid var(--border);
  border-radius: 40px;
  padding: .2rem .65rem;
}
.tour-card__meta {
  display: flex;
  gap: 1rem;
  padding: .9rem 0;
  border-top: 1px solid var(--border-soft);
  margin-bottom: 1rem;
}
.tour-card__meta-item { display: flex; align-items: center; gap: .3rem; font-size: .74rem; color: var(--text-soft); }
.tour-card__meta-item svg { width: 12px; height: 12px; color: var(--gold); }
.tour-card__footer {
  display: flex;
  align-items: center;
  justify-content: space-between;
}
.tour-card__price-label { font-size: .65rem; color: var(--text-muted); text-transform: uppercase; letter-spacing: .06em; }
.tour-card__price-amount {
  font-family: 'Cormorant Garamond', serif;
  font-size: 1.55rem;
  font-weight: 700;
  color: var(--earth);
  letter-spacing: -.02em;
  line-height: 1;
}

/* ── Experience Types ─────────────────────────────── */
.experience-types {
  display: grid;
  grid-template-columns: repeat(4,1fr);
  gap: 1rem;
}
.exp-type {
  position: relative;
  border-radius: var(--radius-lg);
  overflow: hidden;
  aspect-ratio: 3/4;
  cursor: pointer;
  display: block;
  transition: transform var(--trans);
}
.exp-type:hover { transform: translateY(-5px); }
.exp-type img {
  width: 100%; height: 100%;
  object-fit: cover;
  transition: transform var(--trans-slow);
}
.exp-type:hover img { transform: scale(1.06); }
.exp-type__overlay {
  position: absolute;
  inset: 0;
  background: linear-gradient(to top, rgba(28,16,8,.88) 0%, rgba(28,16,8,.2) 55%, transparent 100%);
}
.exp-type__body {
  position: absolute;
  bottom: 0; left: 0; right: 0;
  padding: 1.5rem;
}
.exp-type__icon { font-size: 1.6rem; margin-bottom: .5rem; }
.exp-type__name {
  font-family: 'Cormorant Garamond', serif;
  font-size: 1.3rem;
  font-weight: 600;
  color: var(--white);
  line-height: 1.2;
  margin-bottom: .3rem;
}
.exp-type__count { font-size: .73rem; color: rgba(255,255,255,.65); }
.exp-type__arrow {
  position: absolute;
  top: 1rem; right: 1rem;
  width: 38px; height: 38px;
  background: rgba(255,255,255,.12);
  backdrop-filter: blur(6px);
  border: 1px solid rgba(255,255,255,.2);
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  color: var(--white);
  opacity: 0;
  transform: translate(4px,-4px);
  transition: opacity var(--trans-fast), transform var(--trans-fast);
}
.exp-type:hover .exp-type__arrow { opacity: 1; transform: translate(0,0); }
.exp-type__arrow svg { width: 14px; height: 14px; }

/* ── Curated Packages ─────────────────────────────── */
.packages-split {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 3.5rem;
  align-items: center;
}
.packages-list {
  display: flex;
  flex-direction: column;
  gap: 1rem;
}
.package-row {
  display: flex;
  align-items: center;
  gap: 1.25rem;
  background: var(--white);
  border: 1px solid var(--border-soft);
  border-radius: var(--radius-lg);
  padding: 1.25rem;
  transition: border-color var(--trans-fast), box-shadow var(--trans-fast), transform var(--trans-fast);
  cursor: default;
}
.package-row:hover {
  border-color: var(--gold);
  box-shadow: var(--shadow-sm);
  transform: translateX(4px);
}
.package-row__img {
  width: 72px; height: 72px;
  border-radius: var(--radius);
  overflow: hidden;
  flex-shrink: 0;
}
.package-row__img img { width: 100%; height: 100%; object-fit: cover; }
.package-row__body { flex: 1; }
.package-row__region { font-size: .66rem; font-weight: 600; color: var(--gold); letter-spacing: .1em; text-transform: uppercase; margin-bottom: .2rem; }
.package-row__name { font-family: 'Cormorant Garamond', serif; font-size: 1.05rem; font-weight: 600; color: var(--earth); }
.package-row__meta { font-size: .74rem; color: var(--text-soft); margin-top: .15rem; }
.package-row__price {
  text-align: right;
  flex-shrink: 0;
}
.package-row__from { font-size: .65rem; color: var(--text-muted); text-transform: uppercase; letter-spacing: .05em; }
.package-row__amount {
  font-family: 'Cormorant Garamond', serif;
  font-size: 1.3rem;
  font-weight: 700;
  color: var(--gold-dark);
}
.packages-img-wrap {
  position: relative;
  border-radius: var(--radius-xl);
  overflow: hidden;
}
.packages-img-wrap img {
  width: 100%;
  aspect-ratio: 4/5;
  object-fit: cover;
  display: block;
}
.packages-img-wrap__badge {
  position: absolute;
  top: 2rem; left: -1.5rem;
  background: var(--white);
  border-radius: var(--radius-lg);
  padding: 1.25rem 1.5rem;
  box-shadow: var(--shadow-lg);
  min-width: 175px;
}
.packages-img-wrap__badge-num {
  font-family: 'Cormorant Garamond', serif;
  font-size: 2.2rem;
  font-weight: 700;
  color: var(--gold);
  line-height: 1;
}
.packages-img-wrap__badge-label { font-size: .75rem; color: var(--text-soft); margin-top: .25rem; }

/* ── Accommodation Tiers ──────────────────────────── */
.accom-grid {
  display: grid;
  grid-template-columns: repeat(3,1fr);
  gap: 1.5rem;
}
.accom-card {
  border-radius: var(--radius-lg);
  overflow: hidden;
  background: var(--white);
  border: 2px solid transparent;
  transition: transform var(--trans), box-shadow var(--trans), border-color var(--trans-fast);
  position: relative;
}
.accom-card:hover {
  transform: translateY(-5px);
  box-shadow: var(--shadow-lg);
  border-color: var(--gold);
}
.accom-card--featured { border-color: var(--gold); }
.accom-card__img { aspect-ratio: 3/2; overflow: hidden; }
.accom-card__img img { width: 100%; height: 100%; object-fit: cover; transition: transform var(--trans-slow); }
.accom-card:hover .accom-card__img img { transform: scale(1.05); }
.accom-card__tier {
  position: absolute;
  top: 1rem; right: 1rem;
  background: var(--earth);
  color: var(--gold-light);
  font-size: .64rem;
  font-weight: 700;
  letter-spacing: .1em;
  text-transform: uppercase;
  padding: .28rem .8rem;
  border-radius: 40px;
}
.accom-card--featured .accom-card__tier {
  background: var(--gold);
  color: var(--white);
}
.accom-card__body { padding: 1.5rem; }
.accom-card__stars { color: var(--gold); font-size: .85rem; margin-bottom: .5rem; }
.accom-card__name {
  font-family: 'Cormorant Garamond', serif;
  font-size: 1.2rem;
  font-weight: 600;
  color: var(--earth);
  margin-bottom: .35rem;
}
.accom-card__desc { font-size: .8rem; color: var(--text-soft); line-height: 1.65; margin-bottom: 1rem; }
.accom-card__perks { display: flex; flex-direction: column; gap: .4rem; }
.accom-card__perk { display: flex; align-items: center; gap: .5rem; font-size: .78rem; color: var(--text-mid); }
.accom-card__perk::before { content: '✓'; color: var(--gold); font-weight: 700; flex-shrink: 0; }

/* ── Testimonials — Leisure ───────────────────────── */
.leisure-quotes {
  display: grid;
  grid-template-columns: 1.4fr 1fr;
  gap: 1.5rem;
  align-items: start;
}
.lq-main {
  background: var(--earth);
  border-radius: var(--radius-xl);
  padding: 3rem;
  position: relative;
  overflow: hidden;
}
.lq-main::before {
  content: '"';
  font-family: 'Cormorant Garamond', serif;
  font-size: 14rem;
  color: rgba(200,145,58,.08);
  position: absolute;
  top: -2rem; left: .5rem;
  line-height: 1;
  font-style: italic;
  pointer-events: none;
}
.lq-main__stars { color: var(--gold); font-size: .9rem; margin-bottom: 1.5rem; }
.lq-main__text {
  font-family: 'Cormorant Garamond', serif;
  font-size: 1.45rem;
  font-style: italic;
  color: var(--cream);
  line-height: 1.65;
  margin-bottom: 2rem;
  position: relative; z-index: 1;
}
.lq-main__author { display: flex; align-items: center; gap: 1rem; position: relative; z-index: 1; }
.lq-main__avatar {
  width: 52px; height: 52px;
  border-radius: 50%;
  background: linear-gradient(135deg, var(--gold), var(--clay));
  display: flex; align-items: center; justify-content: center;
  font-size: 1.4rem;
  border: 2px solid rgba(200,145,58,.4);
}
.lq-main__name { font-size: .88rem; font-weight: 600; color: var(--cream); }
.lq-main__role { font-size: .75rem; color: rgba(242,232,213,.6); }
.lq-secondary {
  display: flex;
  flex-direction: column;
  gap: 1.25rem;
}
.lq-small {
  background: var(--white);
  border-radius: var(--radius-lg);
  border: 1px solid var(--border-soft);
  padding: 1.5rem;
  transition: box-shadow var(--trans);
}
.lq-small:hover { box-shadow: var(--shadow-md); }
.lq-small__stars { color: var(--gold); font-size: .75rem; margin-bottom: .5rem; }
.lq-small__text { font-size: .83rem; color: var(--text-mid); line-height: 1.75; margin-bottom: 1rem; }
.lq-small__author { display: flex; align-items: center; gap: .65rem; }
.lq-small__avatar {
  width: 38px; height: 38px;
  border-radius: 50%;
  background: var(--gold-pale);
  border: 2px solid var(--border);
  display: flex; align-items: center; justify-content: center;
  font-size: 1rem;
}
.lq-small__name { font-size: .8rem; font-weight: 600; color: var(--earth); }
.lq-small__role { font-size: .72rem; color: var(--text-muted); }

/* ── Why Pier One For Leisure ─────────────────────── */
.why-grid {
  display: grid;
  grid-template-columns: repeat(3,1fr);
  gap: 1.5rem;
}
.why-card {
  background: var(--white);
  border: 1px solid var(--border-soft);
  border-radius: var(--radius-lg);
  padding: 2rem;
  text-align: center;
  transition: transform var(--trans), box-shadow var(--trans), border-color var(--trans-fast);
}
.why-card:hover {
  transform: translateY(-5px);
  box-shadow: var(--shadow-md);
  border-color: var(--gold);
}
.why-card__icon {
  width: 64px; height: 64px;
  border-radius: 50%;
  background: linear-gradient(135deg, var(--gold-pale), var(--sand));
  border: 1px solid var(--border);
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 1.6rem;
  margin: 0 auto 1.25rem;
  transition: background var(--trans-fast);
}
.why-card:hover .why-card__icon { background: linear-gradient(135deg, var(--gold), var(--clay)); }
.why-card__title { font-family: 'Cormorant Garamond', serif; font-size: 1.1rem; font-weight: 600; color: var(--earth); margin-bottom: .4rem; }
.why-card__desc { font-size: .81rem; color: var(--text-soft); line-height: 1.7; }

/* ── Booking Form ─────────────────────────────────── */
.booking-layout {
  display: grid;
  grid-template-columns: 1fr 380px;
  gap: 3rem;
  align-items: start;
}
.booking-form-card {
  background: linear-gradient(145deg, var(--earth), #4A2E1E);
  border-radius: var(--radius-xl);
  padding: 2.75rem;
  position: sticky;
  top: calc(var(--topbar-h) + var(--nav-h) + 1.5rem);
}
.booking-form-card__title {
  font-family: 'Cormorant Garamond', serif;
  font-size: 1.6rem;
  font-weight: 600;
  color: var(--cream);
  margin-bottom: .4rem;
}
.booking-form-card__title em { font-style: italic; color: var(--gold-light); }
.booking-form-card__sub {
  font-size: .82rem;
  color: rgba(242,232,213,.6);
  line-height: 1.6;
  margin-bottom: 2rem;
}
.booking-field {
  display: flex;
  flex-direction: column;
  gap: .3rem;
  margin-bottom: 1rem;
}
.booking-label {
  font-size: .68rem;
  font-weight: 600;
  color: var(--gold);
  letter-spacing: .1em;
  text-transform: uppercase;
}
.booking-input,
.booking-select,
.booking-textarea {
  font-family: 'DM Sans', sans-serif;
  font-size: .85rem;
  padding: .8rem 1rem;
  border-radius: var(--radius);
  border: 1.5px solid rgba(200,145,58,.22);
  background: rgba(255,255,255,.07);
  color: var(--cream);
  outline: none;
  width: 100%;
  transition: border-color var(--trans-fast);
}
.booking-input::placeholder,
.booking-textarea::placeholder { color: rgba(242,232,213,.3); }
.booking-input:focus, .booking-select:focus, .booking-textarea:focus { border-color: var(--gold); }
.booking-select { -webkit-appearance: none; }
.booking-textarea { resize: vertical; min-height: 75px; }
.booking-row { display: grid; grid-template-columns: 1fr 1fr; gap: .75rem; }
.booking-note {
  font-size: .72rem;
  color: rgba(242,232,213,.45);
  text-align: center;
  margin-top: 1rem;
  line-height: 1.6;
}
.booking-note a { color: var(--gold-light); }

/* ── Travel Tips ─────────────────────────────────── */
.tips-grid {
  display: grid;
  grid-template-columns: repeat(2,1fr);
  gap: 1.5rem;
}
.tip-card {
  background: var(--white);
  border-radius: var(--radius-lg);
  border: 1px solid var(--border-soft);
  padding: 1.75rem;
}
.tip-card__title {
  display: flex;
  align-items: center;
  gap: .65rem;
  font-family: 'Cormorant Garamond', serif;
  font-size: 1.1rem;
  font-weight: 600;
  color: var(--earth);
  margin-bottom: 1rem;
}
.tip-card__title span { font-size: 1.4rem; }
.tip-card__list { display: flex; flex-direction: column; gap: .5rem; }
.tip-card__item {
  display: flex;
  align-items: flex-start;
  gap: .65rem;
  font-size: .82rem;
  color: var(--text-mid);
  line-height: 1.55;
}
.tip-card__item::before {
  content: '';
  display: block;
  width: 6px; height: 6px;
  border-radius: 50%;
  background: var(--gold);
  margin-top: 6px;
  flex-shrink: 0;
}

/* ── CTA Band ────────────────────────────────────── */
.cta-band {
  background: linear-gradient(135deg, var(--earth), #5C3D2E);
  border-radius: var(--radius-xl);
  padding: clamp(2.5rem,5vw,4.5rem);
  text-align: center;
  position: relative;
  overflow: hidden;
}
.cta-band::before {
  content: '';
  position: absolute;
  top: -80px; right: -80px;
  width: 320px; height: 320px;
  background: var(--gold);
  border-radius: 50%;
  opacity: .05;
}
.cta-band::after {
  content: '';
  position: absolute;
  bottom: -60px; left: -60px;
  width: 240px; height: 240px;
  background: var(--clay);
  border-radius: 50%;
  opacity: .06;
}
.cta-band__title {
  font-family: 'Cormorant Garamond', serif;
  font-size: clamp(1.8rem,4vw,3.2rem);
  font-weight: 600;
  color: var(--cream);
  margin-bottom: .75rem;
  position: relative; z-index: 1;
}
.cta-band__title em { font-style: italic; color: var(--gold-light); }
.cta-band__sub {
  font-size: .95rem;
  color: rgba(242,232,213,.68);
  max-width: 44ch;
  margin: 0 auto 2rem;
  line-height: 1.75;
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
  .highlight-strip { grid-template-columns: repeat(3,1fr); }
  .highlight-strip__item:last-child,
  .highlight-strip__item:nth-child(3) { border-right: none; }
  .tours-grid { grid-template-columns: 1fr 1fr; }
  .experience-types { grid-template-columns: repeat(2,1fr); }
  .accom-grid { grid-template-columns: 1fr 1fr; }
  .why-grid { grid-template-columns: 1fr 1fr; }
  .booking-layout { grid-template-columns: 1fr; }
  .booking-form-card { position: static; }
  .leisure-quotes { grid-template-columns: 1fr; }
  .packages-split { grid-template-columns: 1fr; }
  .packages-img-wrap { display: none; }
}
@media (max-width: 900px) {
  .featured-tour { grid-template-columns: 1fr; }
  .featured-tour__img img { min-height: 280px; }
  .highlight-strip { grid-template-columns: repeat(2,1fr); }
  .tips-grid { grid-template-columns: 1fr; }
}
@media (max-width: 640px) {
  .tours-grid { grid-template-columns: 1fr; }
  .experience-types { grid-template-columns: 1fr 1fr; }
  .accom-grid { grid-template-columns: 1fr; }
  .why-grid { grid-template-columns: 1fr; }
}
</style>

<!-- ════════════════════════════════════════════════
     HERO
═══════════════════════════════════════════════════ -->
<section class="tour-hero">
  <img class="tour-hero__bg"
    src="https://images.unsplash.com/photo-1516026672322-bc52d61a55d5?w=1920&q=80"
    alt="Luxury safari at sunset"
    loading="eager" />
  <div class="tour-hero__overlay"></div>
  <div class="tour-hero__kente"></div>
  <div class="tour-hero__content">
    <nav class="breadcrumb" style="margin-bottom:1rem;">
      <a href="<?= URLROOT ?>">Home</a>
      <span class="breadcrumb__sep">›</span>
      <a href="#">Tours</a>
      <span class="breadcrumb__sep">›</span>
      <span class="breadcrumb__current">Leisure Tours</span>
    </nav>
    <div class="tour-hero__badge">🌅 Leisure Tours</div>
    <h1 class="tour-hero__title">Surrender to Africa's <em>Extraordinary</em> Beauty.</h1>
    <p class="tour-hero__subtitle">From the golden savannahs of the Serengeti to Zanzibar's powder-white shores and Morocco's ancient medinas — Pier One crafts deeply personal African escapes for travellers who want more than a holiday.</p>
    <div class="tour-hero__meta">
      <span class="tour-hero__meta-item">
        <svg fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/></svg>
        200+ Curated Itineraries
      </span>
      <span class="tour-hero__meta-item">
        <svg fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
        Solo, Couples &amp; Groups
      </span>
      <span class="tour-hero__meta-item">
        <svg fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path stroke-linecap="round" d="M12 6v6l4 2"/></svg>
        4 – 21 Day Escapes
      </span>
      <span class="tour-hero__meta-item">
        <svg fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"/></svg>
        Luxury to Mid-Range
      </span>
    </div>
    <div style="display:flex;gap:1rem;flex-wrap:wrap;">
      <a href="#tours" class="btn btn-primary btn-lg">
        Browse Tours
        <svg class="arrow-icon" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
          <path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
        </svg>
      </a>
      <a href="#book" class="btn btn-secondary btn-lg">Plan My Trip</a>
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
        <div class="highlight-strip__icon">🦁</div>
        <div class="highlight-strip__label">Big Five Safari</div>
        <div class="highlight-strip__desc">Witness Africa's most iconic animals in their natural habitat</div>
      </div>
      <div class="highlight-strip__item reveal reveal-delay-1">
        <div class="highlight-strip__icon">🏝️</div>
        <div class="highlight-strip__label">Beach Escapes</div>
        <div class="highlight-strip__desc">Zanzibar, Seychelles, Mauritius &amp; Ghana's untouched coastlines</div>
      </div>
      <div class="highlight-strip__item reveal reveal-delay-2">
        <div class="highlight-strip__icon">🏛️</div>
        <div class="highlight-strip__label">Ancient Cities</div>
        <div class="highlight-strip__desc">Marrakech, Luxor, Fez, Lalibela &amp; Cape Town's historic quarters</div>
      </div>
      <div class="highlight-strip__item reveal reveal-delay-3">
        <div class="highlight-strip__icon">🍷</div>
        <div class="highlight-strip__label">Culinary &amp; Wine</div>
        <div class="highlight-strip__desc">Winelands of the Cape, spice markets of Zanzibar &amp; West African feasts</div>
      </div>
      <div class="highlight-strip__item reveal reveal-delay-4">
        <div class="highlight-strip__icon">🌄</div>
        <div class="highlight-strip__label">Exclusive Lodges</div>
        <div class="highlight-strip__desc">Handpicked luxury camps, boutique hotels &amp; treehouse retreats</div>
      </div>
    </div>
  </div>
</section>

<!-- ════════════════════════════════════════════════
     FEATURED TOUR — SERENGETI
═══════════════════════════════════════════════════ -->
<section class="section section--cream" id="tours">
  <div class="container">
    <div style="margin-bottom:2rem;">
      <span class="section-eyebrow reveal">Editor's Choice</span>
      <h2 class="section-title reveal reveal-delay-1">Our <em>Signature</em> Journey</h2>
    </div>
    <div class="featured-tour reveal">
      <div class="featured-tour__img">
        <img src="https://images.unsplash.com/photo-1516026672322-bc52d61a55d5?w=1000&q=80" alt="Serengeti Safari" loading="lazy" />
        <div class="featured-tour__badge">⭐ Most Booked 2024</div>
        <div class="featured-tour__rating">★ 4.9 &nbsp;·&nbsp; 847 reviews</div>
      </div>
      <div class="featured-tour__body">
        <div class="featured-tour__region">East Africa · Tanzania</div>
        <div class="featured-tour__title">Great Serengeti Wildlife Safari</div>
        <p class="featured-tour__desc">Witness the world's greatest wildlife spectacle — the annual Great Migration — as more than 1.5 million wildebeest thunder across the Serengeti's endless golden plains, pursued by lion, leopard, and crocodile. You'll stay in exclusive fly-camps and luxury tented lodges, with each day guided by expert Maasai-heritage rangers.</p>
        <div class="featured-tour__highlights">
          <div class="featured-tour__highlight">Ngorongoro Crater — the world's largest intact caldera, teeming with every East African species</div>
          <div class="featured-tour__highlight">Exclusive mobile tented camp during the Migration crossing — ultimate front-row seats</div>
          <div class="featured-tour__highlight">Optional Maasai village immersion and cultural evening</div>
          <div class="featured-tour__highlight">Zanzibar extension available — spice island &amp; beach recovery after the safari</div>
        </div>
        <div class="featured-tour__meta">
          <span class="featured-tour__meta-item">
            <svg fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path stroke-linecap="round" d="M12 6v6l4 2"/></svg> 10 Days
          </span>
          <span class="featured-tour__meta-item">
            <svg fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z"/></svg> Small Groups (max 12)
          </span>
          <span class="featured-tour__meta-item">
            <svg fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg> Jun – Oct (Peak Migration)
          </span>
        </div>
        <div class="featured-tour__footer">
          <div>
            <div class="featured-tour__price-label">Per person from</div>
            <div class="featured-tour__price-amount">$2,450</div>
            <div class="featured-tour__price-sub">flights excl. · full board included</div>
          </div>
          <div style="display:flex;gap:.75rem;align-items:center;">
            <a href="#book" class="btn btn-outline">Save to Wishlist</a>
            <a href="#book" class="btn btn-primary">
              Book This Tour
              <svg class="arrow-icon" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
              </svg>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ════════════════════════════════════════════════
     EXPERIENCE TYPES
═══════════════════════════════════════════════════ -->
<section class="section section--sand">
  <div class="container">
    <div style="text-align:center;max-width:520px;margin:0 auto 3rem;">
      <span class="section-eyebrow reveal">Experience Types</span>
      <h2 class="section-title reveal reveal-delay-1">What Kind of <em>Explorer</em><br>Are You?</h2>
    </div>
    <div class="experience-types">
      <a href="#tours" class="exp-type reveal">
        <img src="https://images.unsplash.com/photo-1516026672322-bc52d61a55d5?w=600&q=80" alt="Safari" loading="lazy" />
        <div class="exp-type__overlay"></div>
        <div class="exp-type__arrow"><svg fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M7 17L17 7M7 7h10v10"/></svg></div>
        <div class="exp-type__body">
          <div class="exp-type__icon">🦁</div>
          <div class="exp-type__name">Safari &amp; Wildlife</div>
          <div class="exp-type__count">48 tours available</div>
        </div>
      </a>
      <a href="#tours" class="exp-type reveal reveal-delay-1">
        <img src="https://images.unsplash.com/photo-1573843981267-be1999ff37cd?w=600&q=80" alt="Beach" loading="lazy" />
        <div class="exp-type__overlay"></div>
        <div class="exp-type__arrow"><svg fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M7 17L17 7M7 7h10v10"/></svg></div>
        <div class="exp-type__body">
          <div class="exp-type__icon">🏝️</div>
          <div class="exp-type__name">Beach &amp; Islands</div>
          <div class="exp-type__count">32 tours available</div>
        </div>
      </a>
      <a href="#tours" class="exp-type reveal reveal-delay-2">
        <img src="https://images.unsplash.com/photo-1539020140153-e479b8c22e70?w=600&q=80" alt="Culture" loading="lazy" />
        <div class="exp-type__overlay"></div>
        <div class="exp-type__arrow"><svg fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M7 17L17 7M7 7h10v10"/></svg></div>
        <div class="exp-type__body">
          <div class="exp-type__icon">🏛️</div>
          <div class="exp-type__name">Culture &amp; Heritage</div>
          <div class="exp-type__count">56 tours available</div>
        </div>
      </a>
      <a href="#tours" class="exp-type reveal reveal-delay-3">
        <img src="https://images.unsplash.com/photo-1510797215324-95aa89f43c33?w=600&q=80" alt="Adventure" loading="lazy" />
        <div class="exp-type__overlay"></div>
        <div class="exp-type__arrow"><svg fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M7 17L17 7M7 7h10v10"/></svg></div>
        <div class="exp-type__body">
          <div class="exp-type__icon">🏔️</div>
          <div class="exp-type__name">Adventure &amp; Trekking</div>
          <div class="exp-type__count">24 tours available</div>
        </div>
      </a>
    </div>
  </div>
</section>

<!-- ════════════════════════════════════════════════
     ALL TOURS GRID
═══════════════════════════════════════════════════ -->
<section class="section section--dark">
  <div class="container">
    <div style="display:flex;align-items:flex-end;justify-content:space-between;flex-wrap:wrap;gap:1rem;margin-bottom:2.5rem;">
      <div>
        <span class="section-eyebrow reveal" style="color:var(--gold);">Hand-picked For You</span>
        <h2 class="section-title section-title--light reveal reveal-delay-1">All Leisure <em>Journeys</em></h2>
      </div>
      <div class="cat-tabs reveal reveal-delay-2">
        <button class="cat-tab active" onclick="filterTours(this,'all')">All Tours</button>
        <button class="cat-tab" onclick="filterTours(this,'safari')">🦁 Safari</button>
        <button class="cat-tab" onclick="filterTours(this,'beach')">🏝️ Beach</button>
        <button class="cat-tab" onclick="filterTours(this,'culture')">🏛️ Culture</button>
        <button class="cat-tab" onclick="filterTours(this,'adventure')">🏔️ Adventure</button>
      </div>
    </div>

    <div class="tours-grid" id="toursGrid">

      <div class="tour-card reveal" data-cat="safari">
        <div class="tour-card__img">
          <img src="https://images.unsplash.com/photo-1516026672322-bc52d61a55d5?w=700&q=80" alt="Serengeti Safari" loading="lazy" />
          <div class="tour-card__badge">Most Popular</div>
          <div class="tour-card__wishlist">🤍</div>
        </div>
        <div class="tour-card__body">
          <div class="tour-card__region">East Africa · Tanzania</div>
          <div class="tour-card__title">Great Serengeti Wildlife Safari</div>
          <p class="tour-card__desc">Witness the Great Migration across Serengeti's endless golden plains. Luxury tented camps, expert rangers, and the Big Five.</p>
          <div class="tour-card__tags">
            <span class="tour-card__tag">Big Five</span>
            <span class="tour-card__tag">Migration</span>
            <span class="tour-card__tag">Luxury Camps</span>
          </div>
          <div class="tour-card__meta">
            <span class="tour-card__meta-item"><svg fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path stroke-linecap="round" d="M12 6v6l4 2"/></svg> 10 Days</span>
            <span class="tour-card__meta-item"><svg fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z"/></svg> Small Groups</span>
            <span class="tour-card__meta-item">★ 4.9</span>
          </div>
          <div class="tour-card__footer">
            <div>
              <div class="tour-card__price-label">From</div>
              <div class="tour-card__price-amount">$2,450</div>
            </div>
            <a href="#book" class="btn btn-primary btn-sm">Book Now</a>
          </div>
        </div>
      </div>

      <div class="tour-card reveal reveal-delay-1" data-cat="culture">
        <div class="tour-card__img">
          <img src="https://images.unsplash.com/photo-1526772662000-3f88f10405ff?w=700&q=80" alt="Cape Town" loading="lazy" />
          <div class="tour-card__wishlist">🤍</div>
        </div>
        <div class="tour-card__body">
          <div class="tour-card__region">Southern Africa · South Africa</div>
          <div class="tour-card__title">Cape Town &amp; the Garden Route</div>
          <p class="tour-card__desc">Table Mountain, Boulders Beach penguins, Cape Winelands, Hermanus whale watching, and the breathtaking Garden Route drive.</p>
          <div class="tour-card__tags">
            <span class="tour-card__tag">Winelands</span>
            <span class="tour-card__tag">Coastal Drive</span>
            <span class="tour-card__tag">City &amp; Nature</span>
          </div>
          <div class="tour-card__meta">
            <span class="tour-card__meta-item"><svg fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path stroke-linecap="round" d="M12 6v6l4 2"/></svg> 9 Days</span>
            <span class="tour-card__meta-item"><svg fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z"/></svg> Flexible</span>
            <span class="tour-card__meta-item">★ 4.8</span>
          </div>
          <div class="tour-card__footer">
            <div>
              <div class="tour-card__price-label">From</div>
              <div class="tour-card__price-amount">$1,890</div>
            </div>
            <a href="#book" class="btn btn-primary btn-sm">Book Now</a>
          </div>
        </div>
      </div>

      <div class="tour-card reveal reveal-delay-2" data-cat="culture">
        <div class="tour-card__img">
          <img src="https://images.unsplash.com/photo-1539020140153-e479b8c22e70?w=700&q=80" alt="Morocco" loading="lazy" />
          <div class="tour-card__wishlist">🤍</div>
        </div>
        <div class="tour-card__body">
          <div class="tour-card__region">North Africa · Morocco</div>
          <div class="tour-card__title">Imperial Cities of Morocco</div>
          <p class="tour-card__desc">Marrakech, Fez, Rabat and Meknes — a sensory odyssey through Morocco's four royal cities, souks, hammams, and Sahara dunes.</p>
          <div class="tour-card__tags">
            <span class="tour-card__tag">Medinas</span>
            <span class="tour-card__tag">Sahara Desert</span>
            <span class="tour-card__tag">Culinary</span>
          </div>
          <div class="tour-card__meta">
            <span class="tour-card__meta-item"><svg fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path stroke-linecap="round" d="M12 6v6l4 2"/></svg> 10 Days</span>
            <span class="tour-card__meta-item"><svg fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z"/></svg> Flexible</span>
            <span class="tour-card__meta-item">★ 4.8</span>
          </div>
          <div class="tour-card__footer">
            <div>
              <div class="tour-card__price-label">From</div>
              <div class="tour-card__price-amount">$1,650</div>
            </div>
            <a href="#book" class="btn btn-primary btn-sm">Book Now</a>
          </div>
        </div>
      </div>

      <div class="tour-card reveal" data-cat="beach">
        <div class="tour-card__img">
          <img src="https://images.unsplash.com/photo-1573843981267-be1999ff37cd?w=700&q=80" alt="Zanzibar" loading="lazy" />
          <div class="tour-card__badge">Romantic</div>
          <div class="tour-card__wishlist">🤍</div>
        </div>
        <div class="tour-card__body">
          <div class="tour-card__region">East Africa · Tanzania</div>
          <div class="tour-card__title">Zanzibar Spice Island Escape</div>
          <p class="tour-card__desc">Stone Town's UNESCO lanes, Nungwi's powder-white beaches, spice plantation tours, and dolphin-watching at Kizimkazi.</p>
          <div class="tour-card__tags">
            <span class="tour-card__tag">Beach</span>
            <span class="tour-card__tag">Diving</span>
            <span class="tour-card__tag">Romantic</span>
          </div>
          <div class="tour-card__meta">
            <span class="tour-card__meta-item"><svg fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path stroke-linecap="round" d="M12 6v6l4 2"/></svg> 7 Days</span>
            <span class="tour-card__meta-item"><svg fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z"/></svg> Couples</span>
            <span class="tour-card__meta-item">★ 4.9</span>
          </div>
          <div class="tour-card__footer">
            <div>
              <div class="tour-card__price-label">From</div>
              <div class="tour-card__price-amount">$1,350</div>
            </div>
            <a href="#book" class="btn btn-primary btn-sm">Book Now</a>
          </div>
        </div>
      </div>

      <div class="tour-card reveal reveal-delay-1" data-cat="safari">
        <div class="tour-card__img">
          <img src="https://images.unsplash.com/photo-1535941339077-2dd1c7963098?w=700&q=80" alt="Maasai Mara" loading="lazy" />
          <div class="tour-card__wishlist">🤍</div>
        </div>
        <div class="tour-card__body">
          <div class="tour-card__region">East Africa · Kenya</div>
          <div class="tour-card__title">Maasai Mara &amp; Amboseli Explorer</div>
          <p class="tour-card__desc">Balloon safaris over the Mara at sunrise, elephant herds beneath Kilimanjaro at Amboseli, and authentic Maasai cultural immersion.</p>
          <div class="tour-card__tags">
            <span class="tour-card__tag">Balloon Safari</span>
            <span class="tour-card__tag">Elephants</span>
            <span class="tour-card__tag">Maasai Culture</span>
          </div>
          <div class="tour-card__meta">
            <span class="tour-card__meta-item"><svg fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path stroke-linecap="round" d="M12 6v6l4 2"/></svg> 8 Days</span>
            <span class="tour-card__meta-item"><svg fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z"/></svg> Small Groups</span>
            <span class="tour-card__meta-item">★ 4.9</span>
          </div>
          <div class="tour-card__footer">
            <div>
              <div class="tour-card__price-label">From</div>
              <div class="tour-card__price-amount">$2,100</div>
            </div>
            <a href="#book" class="btn btn-primary btn-sm">Book Now</a>
          </div>
        </div>
      </div>

      <div class="tour-card reveal reveal-delay-2" data-cat="adventure">
        <div class="tour-card__img">
          <img src="https://images.unsplash.com/photo-1547471080-7cc2caa01a7e?w=700&q=80" alt="Gorilla Trekking" loading="lazy" />
          <div class="tour-card__badge">Bucket List</div>
          <div class="tour-card__wishlist">🤍</div>
        </div>
        <div class="tour-card__body">
          <div class="tour-card__region">East Africa · Rwanda &amp; Uganda</div>
          <div class="tour-card__title">Mountain Gorilla Trekking</div>
          <p class="tour-card__desc">A life-defining hour with mountain gorilla families in Bwindi or Volcanoes National Park — one of the most profound wildlife encounters on Earth.</p>
          <div class="tour-card__tags">
            <span class="tour-card__tag">Gorilla Permit</span>
            <span class="tour-card__tag">Trekking</span>
            <span class="tour-card__tag">Rare Wildlife</span>
          </div>
          <div class="tour-card__meta">
            <span class="tour-card__meta-item"><svg fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path stroke-linecap="round" d="M12 6v6l4 2"/></svg> 6 Days</span>
            <span class="tour-card__meta-item"><svg fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z"/></svg> Max 8</span>
            <span class="tour-card__meta-item">★ 5.0</span>
          </div>
          <div class="tour-card__footer">
            <div>
              <div class="tour-card__price-label">From</div>
              <div class="tour-card__price-amount">$3,200</div>
            </div>
            <a href="#book" class="btn btn-primary btn-sm">Book Now</a>
          </div>
        </div>
      </div>

      <div class="tour-card reveal" data-cat="culture">
        <div class="tour-card__img">
          <img src="https://images.unsplash.com/photo-1626197031507-c17099753214?w=700&q=80" alt="Ghana" loading="lazy" />
          <div class="tour-card__wishlist">🤍</div>
        </div>
        <div class="tour-card__body">
          <div class="tour-card__region">West Africa · Ghana</div>
          <div class="tour-card__title">Ghana: The Year of Return</div>
          <p class="tour-card__desc">Accra's vibrant arts scene, Kumasi's Ashanti Royal Palace, Cape Coast Castle, and the warm hospitality of a nation welcoming the diaspora home.</p>
          <div class="tour-card__tags">
            <span class="tour-card__tag">Diaspora Heritage</span>
            <span class="tour-card__tag">Ashanti Culture</span>
            <span class="tour-card__tag">Vibrant Cities</span>
          </div>
          <div class="tour-card__meta">
            <span class="tour-card__meta-item"><svg fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path stroke-linecap="round" d="M12 6v6l4 2"/></svg> 8 Days</span>
            <span class="tour-card__meta-item"><svg fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z"/></svg> All Groups</span>
            <span class="tour-card__meta-item">★ 4.8</span>
          </div>
          <div class="tour-card__footer">
            <div>
              <div class="tour-card__price-label">From</div>
              <div class="tour-card__price-amount">$1,200</div>
            </div>
            <a href="#book" class="btn btn-primary btn-sm">Book Now</a>
          </div>
        </div>
      </div>

      <div class="tour-card reveal reveal-delay-1" data-cat="beach">
        <div class="tour-card__img">
          <img src="https://images.unsplash.com/photo-1510797215324-95aa89f43c33?w=700&q=80" alt="Seychelles" loading="lazy" />
          <div class="tour-card__badge">Luxury</div>
          <div class="tour-card__wishlist">🤍</div>
        </div>
        <div class="tour-card__body">
          <div class="tour-card__region">Indian Ocean Islands · Seychelles</div>
          <div class="tour-card__title">Seychelles Island Hopper</div>
          <p class="tour-card__desc">Mahé, Praslin, and La Digue — granite boulders, turquoise lagoons, giant Aldabra tortoises, and world-class snorkelling at Anse Lazio.</p>
          <div class="tour-card__tags">
            <span class="tour-card__tag">Luxury Beach</span>
            <span class="tour-card__tag">Snorkelling</span>
            <span class="tour-card__tag">Honeymoon</span>
          </div>
          <div class="tour-card__meta">
            <span class="tour-card__meta-item"><svg fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path stroke-linecap="round" d="M12 6v6l4 2"/></svg> 9 Days</span>
            <span class="tour-card__meta-item"><svg fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z"/></svg> Couples / Solo</span>
            <span class="tour-card__meta-item">★ 4.9</span>
          </div>
          <div class="tour-card__footer">
            <div>
              <div class="tour-card__price-label">From</div>
              <div class="tour-card__price-amount">$3,500</div>
            </div>
            <a href="#book" class="btn btn-primary btn-sm">Book Now</a>
          </div>
        </div>
      </div>

      <div class="tour-card reveal reveal-delay-2" data-cat="adventure">
        <div class="tour-card__img">
          <img src="https://images.unsplash.com/photo-1529429617124-95b109e86bb8?w=700&q=80" alt="Kilimanjaro" loading="lazy" />
          <div class="tour-card__wishlist">🤍</div>
        </div>
        <div class="tour-card__body">
          <div class="tour-card__region">East Africa · Tanzania</div>
          <div class="tour-card__title">Kilimanjaro Summit Trek</div>
          <p class="tour-card__desc">Africa's highest peak and the world's tallest free-standing mountain. The Lemosho Route — 8 days of extraordinary scenery through five ecological zones.</p>
          <div class="tour-card__tags">
            <span class="tour-card__tag">Summit Trek</span>
            <span class="tour-card__tag">5,895m Peak</span>
            <span class="tour-card__tag">Achievement</span>
          </div>
          <div class="tour-card__meta">
            <span class="tour-card__meta-item"><svg fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path stroke-linecap="round" d="M12 6v6l4 2"/></svg> 10 Days</span>
            <span class="tour-card__meta-item"><svg fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z"/></svg> Max 12</span>
            <span class="tour-card__meta-item">★ 4.7</span>
          </div>
          <div class="tour-card__footer">
            <div>
              <div class="tour-card__price-label">From</div>
              <div class="tour-card__price-amount">$2,200</div>
            </div>
            <a href="#book" class="btn btn-primary btn-sm">Book Now</a>
          </div>
        </div>
      </div>

    </div><!-- /.tours-grid -->
  </div>
</section>

<!-- ════════════════════════════════════════════════
     CURATED PACKAGES — VALUE LIST
═══════════════════════════════════════════════════ -->
<section class="section section--cream">
  <div class="container">
    <div class="packages-split">
      <div>
        <span class="section-eyebrow reveal">Value Packages</span>
        <h2 class="section-title reveal reveal-delay-1">Best Value <em>Multi-Destination</em><br>Combinations</h2>
        <p class="section-subtitle reveal reveal-delay-2" style="margin-bottom:2.5rem;">Combine two or more destinations and save. Our most popular combination packages — curated by our travel designers to flow beautifully in terms of logistics, pace, and experience depth.</p>
        <div class="packages-list">
          <div class="package-row reveal reveal-delay-2">
            <div class="package-row__img"><img src="https://images.unsplash.com/photo-1516026672322-bc52d61a55d5?w=200&q=80" alt="Safari + Zanzibar" loading="lazy" /></div>
            <div class="package-row__body">
              <div class="package-row__region">Tanzania</div>
              <div class="package-row__name">Serengeti Safari + Zanzibar</div>
              <div class="package-row__meta">10 nights · Small groups · Most booked combo</div>
            </div>
            <div class="package-row__price">
              <div class="package-row__from">From</div>
              <div class="package-row__amount">$3,200</div>
            </div>
          </div>
          <div class="package-row reveal reveal-delay-3">
            <div class="package-row__img"><img src="https://images.unsplash.com/photo-1539020140153-e479b8c22e70?w=200&q=80" alt="Morocco + Canaries" loading="lazy" /></div>
            <div class="package-row__body">
              <div class="package-row__region">North Africa + Atlantic</div>
              <div class="package-row__name">Morocco Desert + Canary Islands</div>
              <div class="package-row__meta">12 nights · Couples favourite · Flexible departure</div>
            </div>
            <div class="package-row__price">
              <div class="package-row__from">From</div>
              <div class="package-row__amount">$2,850</div>
            </div>
          </div>
          <div class="package-row reveal reveal-delay-4">
            <div class="package-row__img"><img src="https://images.unsplash.com/photo-1626197031507-c17099753214?w=200&q=80" alt="West Africa Journey" loading="lazy" /></div>
            <div class="package-row__body">
              <div class="package-row__region">West Africa</div>
              <div class="package-row__name">Ghana + Senegal Cultural Journey</div>
              <div class="package-row__meta">11 nights · All group sizes · Year-round</div>
            </div>
            <div class="package-row__price">
              <div class="package-row__from">From</div>
              <div class="package-row__amount">$2,100</div>
            </div>
          </div>
          <div class="package-row reveal reveal-delay-5">
            <div class="package-row__img"><img src="https://images.unsplash.com/photo-1547471080-7cc2caa01a7e?w=200&q=80" alt="Gorilla + Rwanda" loading="lazy" /></div>
            <div class="package-row__body">
              <div class="package-row__region">East Africa</div>
              <div class="package-row__name">Gorilla Trek + Rwanda Kigali City</div>
              <div class="package-row__meta">7 nights · Limited permits · Book early</div>
            </div>
            <div class="package-row__price">
              <div class="package-row__from">From</div>
              <div class="package-row__amount">$3,800</div>
            </div>
          </div>
        </div>
      </div>
      <div class="packages-img-wrap reveal reveal-delay-3">
        <img src="https://images.unsplash.com/photo-1551632436-cbf8dd35adfa?w=900&q=80" alt="Pier One guide" loading="lazy" />
        <div class="packages-img-wrap__badge">
          <div class="packages-img-wrap__badge-num">200+</div>
          <div class="packages-img-wrap__badge-label">Curated itineraries<br>ready to book today</div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ════════════════════════════════════════════════
     ACCOMMODATION TIERS
═══════════════════════════════════════════════════ -->
<section class="section section--sand">
  <div class="container">
    <div style="text-align:center;max-width:520px;margin:0 auto 3rem;">
      <span class="section-eyebrow reveal">Where You Stay</span>
      <h2 class="section-title reveal reveal-delay-1">Every Budget,<br>Every <em>Dream</em></h2>
      <p class="section-subtitle reveal reveal-delay-2" style="margin:0 auto;">We handpick accommodation at every level — from mid-range boutique lodges to ultra-exclusive tented camps and five-star beach resorts.</p>
    </div>
    <div class="accom-grid">
      <div class="accom-card reveal">
        <div class="accom-card__img">
          <img src="https://images.unsplash.com/photo-1571896349842-33c89424de2d?w=700&q=80" alt="Boutique Lodge" loading="lazy" />
          <div class="accom-card__tier">Comfort</div>
        </div>
        <div class="accom-card__body">
          <div class="accom-card__stars">★★★</div>
          <div class="accom-card__name">Boutique &amp; Comfort Lodges</div>
          <p class="accom-card__desc">Well-located, characterful properties with warm service, local character, and excellent value. Ideal for budget-conscious travellers who don't compromise on experience.</p>
          <div class="accom-card__perks">
            <div class="accom-card__perk">En-suite rooms with local character</div>
            <div class="accom-card__perk">Breakfast and selected meals included</div>
            <div class="accom-card__perk">Pier One guest relations on-site</div>
          </div>
        </div>
      </div>
      <div class="accom-card accom-card--featured reveal reveal-delay-1">
        <div class="accom-card__img">
          <img src="https://images.unsplash.com/photo-1540541338287-41700207dee6?w=700&q=80" alt="Safari Lodge" loading="lazy" />
          <div class="accom-card__tier">⭐ Most Popular</div>
        </div>
        <div class="accom-card__body">
          <div class="accom-card__stars">★★★★</div>
          <div class="accom-card__name">Premium Safari Lodges</div>
          <p class="accom-card__desc">Our most-booked tier — handpicked lodges and camps blending luxury, location, and authentic African atmosphere. The sweet spot of price and experience.</p>
          <div class="accom-card__perks">
            <div class="accom-card__perk">Exclusive game drive vehicles</div>
            <div class="accom-card__perk">Full board including sundowner drinks</div>
            <div class="accom-card__perk">Expert bush ranger guiding</div>
            <div class="accom-card__perk">Swimming pool &amp; outdoor dining</div>
          </div>
        </div>
      </div>
      <div class="accom-card reveal reveal-delay-2">
        <div class="accom-card__img">
          <img src="https://images.unsplash.com/photo-1520250497591-112f2f40a3f4?w=700&q=80" alt="Luxury Camp" loading="lazy" />
          <div class="accom-card__tier">Ultra Luxury</div>
        </div>
        <div class="accom-card__body">
          <div class="accom-card__stars">★★★★★</div>
          <div class="accom-card__name">Ultra-Luxury Fly Camps &amp; Resorts</div>
          <p class="accom-card__desc">Africa's finest — private plunge pools, butler service, helicopter transfers, gourmet bush dining, and ultra-exclusive private concessions. For those who travel without compromise.</p>
          <div class="accom-card__perks">
            <div class="accom-card__perk">Private guide and vehicle</div>
            <div class="accom-card__perk">Helicopter and light aircraft transfers</div>
            <div class="accom-card__perk">Bespoke private dining experiences</div>
            <div class="accom-card__perk">All-inclusive including fine wines</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ════════════════════════════════════════════════
     WHY PIER ONE FOR LEISURE
═══════════════════════════════════════════════════ -->
<section class="section section--cream">
  <div class="container">
    <div style="text-align:center;max-width:520px;margin:0 auto 3rem;">
      <span class="section-eyebrow reveal">Why Pier One</span>
      <h2 class="section-title reveal reveal-delay-1">Your Comfort Is Our<br><em>Obsession</em></h2>
    </div>
    <div class="why-grid">
      <div class="why-card reveal">
        <div class="why-card__icon">🧭</div>
        <div class="why-card__title">Born-Local Expert Guides</div>
        <p class="why-card__desc">Our guides are born where you travel — not just trained there. They know the secret waterhole, the best sundowner spot, and which villager makes the finest Jollof rice in the Sahel.</p>
      </div>
      <div class="why-card reveal reveal-delay-1">
        <div class="why-card__icon">🎯</div>
        <div class="why-card__title">100% Bespoke Itineraries</div>
        <p class="why-card__desc">No two Pier One journeys are identical. We design each trip around your pace, passions, and priorities — not a cookie-cutter group itinerary.</p>
      </div>
      <div class="why-card reveal reveal-delay-2">
        <div class="why-card__icon">🛡️</div>
        <div class="why-card__title">End-to-End Peace of Mind</div>
        <p class="why-card__desc">Comprehensive travel insurance, 24/7 emergency support, airport transfers, visa assistance — every detail handled so you arrive and simply exhale.</p>
      </div>
      <div class="why-card reveal">
        <div class="why-card__icon">♻️</div>
        <div class="why-card__title">Responsible &amp; Ethical Tourism</div>
        <p class="why-card__desc">We invest in conservation, partner with community-owned lodges, and ensure the communities you visit benefit meaningfully from your travel spend.</p>
      </div>
      <div class="why-card reveal reveal-delay-1">
        <div class="why-card__icon">✈️</div>
        <div class="why-card__title">Flights &amp; Transfers Managed</div>
        <p class="why-card__desc">From your departure city to your first morning game drive — we can handle all flights, airport transfers, and internal domestic connections Africa-wide.</p>
      </div>
      <div class="why-card reveal reveal-delay-2">
        <div class="why-card__icon">💬</div>
        <div class="why-card__title">Dedicated Trip Designer</div>
        <p class="why-card__desc">From first enquiry through to your return home, you have one dedicated Pier One specialist who knows your trip inside out and is available to you throughout.</p>
      </div>
    </div>
  </div>
</section>

<!-- ════════════════════════════════════════════════
     TESTIMONIALS
═══════════════════════════════════════════════════ -->
<section class="section section--sand">
  <div class="container">
    <div style="text-align:center;max-width:520px;margin:0 auto 3rem;">
      <span class="section-eyebrow reveal">Real Stories</span>
      <h2 class="section-title reveal reveal-delay-1">Words from Our <em>Travellers</em></h2>
    </div>
    <div class="leisure-quotes">
      <div class="lq-main reveal">
        <div class="lq-main__stars">★★★★★</div>
        <p class="lq-main__text">"The Serengeti safari exceeded every expectation. Seamless logistics, a luxury tented camp right in the heart of the migration, and witnessing thousands of wildebeest cross the Mara River up close. Pier One is absolutely world-class."</p>
        <div class="lq-main__author">
          <div class="lq-main__avatar">🧑🏿</div>
          <div>
            <div class="lq-main__name">James Okafor</div>
            <div class="lq-main__role">Lagos, Nigeria · Serengeti Leisure Tour</div>
          </div>
        </div>
      </div>
      <div class="lq-secondary reveal reveal-delay-1">
        <div class="lq-small">
          <div class="lq-small__stars">★★★★★</div>
          <p class="lq-small__text">Zanzibar was pure paradise — and Pier One made every detail perfect. From the Stone Town riad they'd chosen to the private dhow sunset cruise, it felt tailor-made. Our honeymoon of a lifetime.</p>
          <div class="lq-small__author">
            <div class="lq-small__avatar">👩🏽</div>
            <div>
              <div class="lq-small__name">Afia &amp; Kwesi Asante</div>
              <div class="lq-small__role">Accra · Zanzibar Honeymoon Package</div>
            </div>
          </div>
        </div>
        <div class="lq-small">
          <div class="lq-small__stars">★★★★★</div>
          <p class="lq-small__text">Morocco was a feast for every sense. Our riad in Fez's medina, the Sahara overnight, the souks of Marrakech — and our local guide Youssef made it all come alive. Ten out of ten.</p>
          <div class="lq-small__author">
            <div class="lq-small__avatar">👩🏾‍🦱</div>
            <div>
              <div class="lq-small__name">Chioma Obi</div>
              <div class="lq-small__role">Abuja · Morocco Imperial Cities</div>
            </div>
          </div>
        </div>
        <div class="lq-small">
          <div class="lq-small__stars">★★★★★</div>
          <p class="lq-small__text">Standing on the Ngorongoro Crater rim at sunrise, watching elephants below — that image will never leave me. Pier One gave me the Africa I'd dreamed of my whole life.</p>
          <div class="lq-small__author">
            <div class="lq-small__avatar">👨🏾</div>
            <div>
              <div class="lq-small__name">Emmanuel Darko</div>
              <div class="lq-small__role">Kumasi · Tanzania &amp; Zanzibar Combo</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ════════════════════════════════════════════════
     TRAVEL TIPS + BOOKING FORM
═══════════════════════════════════════════════════ -->
<section class="section section--cream" id="book">
  <div class="container">
    <div class="booking-layout">

      <!-- Left: Travel Tips -->
      <div>
        <span class="section-eyebrow reveal">Before You Go</span>
        <h2 class="section-title reveal reveal-delay-1">Everything You Need<br>to Know Before <em>Departing</em></h2>
        <p class="section-subtitle reveal reveal-delay-2" style="margin-bottom:2.5rem;">Our travel advisors have answered the most common leisure traveller questions — so you arrive in Africa fully prepared and carefree.</p>
        <div class="tips-grid reveal reveal-delay-2">
          <div class="tip-card">
            <div class="tip-card__title"><span>✈️</span> Flights &amp; Transfers</div>
            <div class="tip-card__list">
              <div class="tip-card__item">Pier One can arrange all flights from your home city — ask us about Africa travel passes</div>
              <div class="tip-card__item">All airport, inter-lodge, and domestic transfers included in quoted price</div>
              <div class="tip-card__item">We recommend arriving a day early to acclimatise — we'll arrange the extra night</div>
            </div>
          </div>
          <div class="tip-card">
            <div class="tip-card__title"><span>🌡️</span> Best Time to Travel</div>
            <div class="tip-card__list">
              <div class="tip-card__item">East Africa safari peak: Jul–Oct (Great Migration &amp; dry season)</div>
              <div class="tip-card__item">West Africa: Nov–Apr for dry, comfortable weather throughout</div>
              <div class="tip-card__item">Indian Ocean islands: May–Oct for calmer seas and sunny beach conditions</div>
            </div>
          </div>
          <div class="tip-card">
            <div class="tip-card__title"><span>💉</span> Health &amp; Vaccinations</div>
            <div class="tip-card__list">
              <div class="tip-card__item">Yellow fever certificate required for many West and East African destinations</div>
              <div class="tip-card__item">Malaria prophylaxis strongly recommended — consult travel health clinic 6 weeks before</div>
              <div class="tip-card__item">We provide full health briefing documents for every destination</div>
            </div>
          </div>
          <div class="tip-card">
            <div class="tip-card__title"><span>💳</span> Currency &amp; Payments</div>
            <div class="tip-card__list">
              <div class="tip-card__item">USD cash is widely accepted across safari destinations as tips and extras</div>
              <div class="tip-card__item">Most lodges accept major cards — we advise on cash needs per destination</div>
              <div class="tip-card__item">Pier One pricing is in USD — we can quote GHS, NGN, EUR or GBP on request</div>
            </div>
          </div>
        </div>
      </div>

      <!-- Right: Booking Form -->
      <div class="booking-form-card reveal reveal-delay-3">
        <div class="booking-form-card__title">Plan Your <em>Journey</em></div>
        <p class="booking-form-card__sub">Tell us your dream — our leisure travel designers will craft a personalised itinerary and quote within 48 hours.</p>
        <form onsubmit="return false;">
          <div class="booking-field">
            <label class="booking-label">Your Full Name</label>
            <input class="booking-input" type="text" placeholder="Abena Mensah" />
          </div>
          <div class="booking-field">
            <label class="booking-label">Email Address</label>
            <input class="booking-input" type="email" placeholder="abena@email.com" />
          </div>
          <div class="booking-field">
            <label class="booking-label">Phone / WhatsApp</label>
            <input class="booking-input" type="tel" placeholder="+233 24 000 0000" />
          </div>
          <div class="booking-field">
            <label class="booking-label">Dream Destination</label>
            <select class="booking-select">
              <option value="">Choose a region…</option>
              <option>West Africa (Ghana, Senegal, Nigeria…)</option>
              <option>East Africa Safari (Kenya, Tanzania…)</option>
              <option>East Africa Gorillas (Rwanda, Uganda)</option>
              <option>North Africa (Morocco, Egypt…)</option>
              <option>Indian Ocean Islands (Zanzibar, Seychelles…)</option>
              <option>Southern Africa (South Africa, Botswana…)</option>
              <option>Surprise me — curate something for me</option>
            </select>
          </div>
          <div class="booking-field">
            <label class="booking-label">Experience Type</label>
            <select class="booking-select">
              <option>Safari &amp; Wildlife</option>
              <option>Beach &amp; Island Escape</option>
              <option>Culture &amp; Heritage</option>
              <option>Adventure &amp; Trekking</option>
              <option>Romantic / Honeymoon</option>
              <option>Family Holiday</option>
              <option>Mixed Adventure</option>
            </select>
          </div>
          <div class="booking-row">
            <div class="booking-field">
              <label class="booking-label">Travellers</label>
              <select class="booking-select">
                <option>Solo (1)</option>
                <option>Couple (2)</option>
                <option>Small Group (3–8)</option>
                <option>Large Group (9+)</option>
              </select>
            </div>
            <div class="booking-field">
              <label class="booking-label">Budget per Person</label>
              <select class="booking-select">
                <option>$800 – $1,500</option>
                <option>$1,500 – $3,000</option>
                <option>$3,000 – $6,000</option>
                <option>$6,000+</option>
              </select>
            </div>
          </div>
          <div class="booking-field">
            <label class="booking-label">Preferred Travel Month</label>
            <select class="booking-select">
              <option>Jan – Feb 2026</option>
              <option>Mar – Apr 2026</option>
              <option>May – Jun 2026</option>
              <option>Jul – Aug 2026</option>
              <option>Sep – Oct 2026</option>
              <option>Nov – Dec 2026</option>
              <option>2027 (flexible)</option>
            </select>
          </div>
          <div class="booking-field">
            <label class="booking-label">Anything Special? (optional)</label>
            <textarea class="booking-textarea" placeholder="Anniversary trip, dietary requirements, must-see experiences…"></textarea>
          </div>
          <button type="submit" class="btn btn-primary" style="width:100%;justify-content:center;font-size:.9rem;">
            Send My Trip Request
            <svg class="arrow-icon" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
              <path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
            </svg>
          </button>
          <p class="booking-note">Free to enquire · No commitment · Reply within 48hrs<br><a href="#">Privacy Policy</a> · Your data is never shared.</p>
        </form>
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
      <h2 class="cta-band__title">Africa Is Calling.<br><em>Will You Answer?</em></h2>
      <p class="cta-band__sub">There is no journey quite like an African journey. Let Pier One open the continent to you — authentically, luxuriously, and unforgettably.</p>
      <div class="cta-band__actions">
        <a href="#book" class="btn btn-primary btn-lg">
          Plan My African Escape
          <svg class="arrow-icon" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
          </svg>
        </a>
        <a href="tel:+233302000000" class="btn btn-secondary btn-lg">Call Us Now</a>
      </div>
    </div>
  </div>
</section>

<script>
/* Tour Filter */
function filterTours(btn, cat) {
  document.querySelectorAll('.cat-tab').forEach(b => b.classList.remove('active'));
  btn.classList.add('active');
  const cards = document.querySelectorAll('#toursGrid .tour-card');
  cards.forEach(card => {
    if (cat === 'all' || card.dataset.cat === cat) {
      card.style.display = '';
    } else {
      card.style.display = 'none';
    }
  });
}

/* Wishlist toggle */
document.querySelectorAll('.tour-card__wishlist').forEach(btn => {
  btn.addEventListener('click', function(e) {
    e.preventDefault();
    this.textContent = this.textContent === '🤍' ? '❤️' : '🤍';
  });
});
</script>

<?php include '../includes/footer.php'; ?>