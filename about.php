<!-- about.php -->
<?php include 'includes/header.php'; ?>

<!-- ════════════════════════════════════════════════
     HERO — About Us
═══════════════════════════════════════════════════ -->
<section class="hero">
  <div class="hero__video-wrap">
    <video class="hero__video" autoplay muted loop playsinline
      poster="https://images.unsplash.com/photo-1547471080-7cc2caa01a7e?w=1920&q=80">
      <source src="https://videos.pexels.com/video-files/3571264/3571264-uhd_2560_1440_25fps.mp4" type="video/mp4" />
      <source src="https://videos.pexels.com/video-files/2098827/2098827-uhd_2560_1440_25fps.mp4" type="video/mp4" />
    </video>
  </div>
  <div class="hero__overlay-gradient"></div>
  <div class="hero__kente"></div>

  <div class="hero__content">
    <p class="hero__eyebrow">
      <span class="hero__eyebrow-line"></span>
      Our Story
    </p>
    <h1 class="hero__title">
      We Are <em>Pier One</em>
    </h1>
    <p class="hero__subtitle">
      Born from a passion for Africa and a commitment to authentic travel. For nearly two decades, we've connected curious souls with the continent's most breathtaking landscapes, cultures, and communities.
    </p>
    <div class="hero__actions">
      <a href="#our-journey" class="btn btn-primary btn-lg">
        Discover Our Journey
        <svg class="arrow-icon" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
          <path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
        </svg>
      </a>
      <!-- <a href="#team" class="btn btn-secondary btn-lg">Meet the Team</a> -->
    </div>
  </div>

  <div class="hero__scroll">
    <div class="hero__scroll-line"></div>
    Scroll
  </div>
</section>

<!-- ════════════════════════════════════════════════
     STATS — consistent with index
═══════════════════════════════════════════════════ -->
<section class="section--sand" style="padding:0;">
  <div class="container">
    <div class="stats-bar">
      <div class="stat-item reveal">
        <div class="stat-item__number" data-count="54" data-suffix="+">0+</div>
        <div class="stat-item__label">African Countries Covered</div>
      </div>
      <div class="stat-item reveal reveal-delay-1">
        <div class="stat-item__number" data-count="12000" data-suffix="+">0+</div>
        <div class="stat-item__label">Happy Travellers</div>
      </div>
      <div class="stat-item reveal reveal-delay-2">
        <div class="stat-item__number" data-count="18" data-suffix=" Yrs">0 Yrs</div>
        <div class="stat-item__label">Years of Experience</div>
      </div>
      <div class="stat-item reveal reveal-delay-3">
        <div class="stat-item__number" data-count="200" data-suffix="+">0+</div>
        <div class="stat-item__label">Curated Itineraries</div>
      </div>
    </div>
  </div>
</section>

<!-- ════════════════════════════════════════════════
     OUR STORY — split layout
═══════════════════════════════════════════════════ -->
<section class="section section--cream" id="our-journey">
  <div class="container">
    <div class="feature-split">
      <div class="feature-split__img reveal">
        <img src="https://images.unsplash.com/photo-1523805009345-7448845a9e53?w=900&q=80" alt="Pier One founders in Africa" loading="lazy" />
        <div class="feature-split__badge">
          <div class="feature-split__badge-num">2006</div>
          <div class="feature-split__badge-label">Year we<br>began</div>
        </div>
      </div>
      <div>
        <span class="section-eyebrow reveal">The Pier One Journey</span>
        <h2 class="section-title reveal reveal-delay-1">From a Dream to Africa's <em>Most Trusted</em> Tour Operator</h2>
        <p class="section-subtitle reveal reveal-delay-2" style="margin-bottom:1.5rem;">
          Pier One Travel & Tours Services was founded in Accra, Ghana, by a small team of passionate travellers who believed that Africa deserved to be explored beyond the postcard. What began as a local ground handler has grown into a pan‑African travel company with deep roots in every region we serve.
        </p>
        <p class="reveal reveal-delay-3" style="margin-bottom:2rem; color: var(--text-light);">
          Today, we are a fully bonded and insured operator with offices in West, East, and Southern Africa. Our team of over 80 dedicated professionals — from safari guides to cultural ambassadors — works tirelessly to ensure every journey is seamless, safe, and soul‑stirring.
        </p>
        <div class="reveal reveal-delay-4">
          <a href="#values" class="btn btn-primary">
            Our Values
            <svg class="arrow-icon" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
              <path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
            </svg>
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ════════════════════════════════════════════════
     KENTE DIVIDER
═══════════════════════════════════════════════════ -->
<div class="kente-bar"></div>

<!-- ════════════════════════════════════════════════
     MISSION, VISION, VALUES — cards
═══════════════════════════════════════════════════ -->
<section class="section section--sand" id="values">
  <div class="container">
    <div style="text-align:center;max-width:600px;margin:0 auto 3rem;">
      <span class="section-eyebrow reveal">What Guides Us</span>
      <h2 class="section-title reveal reveal-delay-1">Our <em>Promise</em> to You</h2>
    </div>
    <div class="grid-auto">
      <div class="tour-type-card reveal">
        <div class="tour-type-card__icon">🎯</div>
        <div class="tour-type-card__name">Our Mission</div>
        <div class="tour-type-card__desc">To curate life‑enriching African journeys that foster genuine connections, celebrate cultural diversity, and protect the continent's natural heritage.</div>
      </div>
      <div class="tour-type-card reveal reveal-delay-1">
        <div class="tour-type-card__icon">🔭</div>
        <div class="tour-type-card__name">Our Vision</div>
        <div class="tour-type-card__desc">To be the most respected and recommended African travel partner globally — known for integrity, local expertise, and transformative experiences.</div>
      </div>
      <div class="tour-type-card reveal reveal-delay-2">
        <div class="tour-type-card__icon">🤲</div>
        <div class="tour-type-card__name">Authenticity</div>
        <div class="tour-type-card__desc">We keep it real. No staged encounters — just genuine interactions with people, places, and wildlife.</div>
      </div>
      <div class="tour-type-card reveal reveal-delay-3">
        <div class="tour-type-card__icon">🌍</div>
        <div class="tour-type-card__name">Sustainability</div>
        <div class="tour-type-card__desc">We reinvest in local communities, support conservation projects, and operate with a light footprint.</div>
      </div>
      <div class="tour-type-card reveal reveal-delay-4">
        <div class="tour-type-card__icon">🛡️</div>
        <div class="tour-type-card__name">Safety & Trust</div>
        <div class="tour-type-card__desc">Your well‑being is our priority. Fully licensed, insured, and backed by 24/7 on‑ground support.</div>
      </div>
      <div class="tour-type-card reveal reveal-delay-5">
        <div class="tour-type-card__icon">❤️</div>
        <div class="tour-type-card__name">Passion for Africa</div>
        <div class="tour-type-card__desc">We are African at heart. Every itinerary is crafted with love and deep local knowledge.</div>
      </div>
    </div>
  </div>
</section>

<!-- ════════════════════════════════════════════════
     TIMELINE / MILESTONES — optional but nice
═══════════════════════════════════════════════════ -->
<!-- <section class="section section--cream">
  <div class="container">
    <div style="text-align:center;max-width:600px;margin:0 auto 3rem;">
      <span class="section-eyebrow reveal">Our Footprints</span>
      <h2 class="section-title reveal reveal-delay-1">Nearly Two Decades of <em>Excellence</em></h2>
    </div>
    <div class="timeline">
      <div class="timeline-item reveal">
        <div class="timeline-item__year">2006</div>
        <div class="timeline-item__desc">Founded in Accra, Ghana — first tours to Cape Coast and Mole National Park.</div>
      </div>
      <div class="timeline-item reveal reveal-delay-1">
        <div class="timeline-item__year">2010</div>
        <div class="timeline-item__desc">Expanded to East Africa, opening Nairobi office and launching safari circuits.</div>
      </div>
      <div class="timeline-item reveal reveal-delay-2">
        <div class="timeline-item__year">2015</div>
        <div class="timeline-item__desc">Introduced Academic & Volunteer Mission Tours, partnering with universities and NGOs.</div>
      </div>
      <div class="timeline-item reveal reveal-delay-3">
        <div class="timeline-item__year">2018</div>
        <div class="timeline-item__desc">Launched North Africa operations (Morocco, Egypt) and Indian Ocean Islands.</div>
      </div>
      <div class="timeline-item reveal reveal-delay-4">
        <div class="timeline-item__year">2022</div>
        <div class="timeline-item__desc">Celebrated 12,000+ travellers served; recognised as Africa's Leading Tour Operator.</div>
      </div>
      <div class="timeline-item reveal reveal-delay-5">
        <div class="timeline-item__year">2024</div>
        <div class="timeline-item__desc">Expanded corporate MICE services across 15 African cities.</div>
      </div>
    </div>
  </div>
</section> -->

<!-- ════════════════════════════════════════════════
     TEAM — leadership
═══════════════════════════════════════════════════ -->
<!-- <section class="section section--sand" id="team">
  <div class="container">
    <div style="text-align:center;max-width:600px;margin:0 auto 2.5rem;">
      <span class="section-eyebrow reveal">The People Behind the Magic</span>
      <h2 class="section-title reveal reveal-delay-1">Meet Our <em>Leadership</em></h2>
      <p class="section-subtitle reveal reveal-delay-2" style="margin:0 auto;">A passionate team of African travel specialists, united by a love for the continent.</p>
    </div>
    <div class="team-grid">
      <div class="team-card reveal">
        <img src="https://images.unsplash.com/photo-1506277886164-e25aa3f4ef7f?w=400&h=400&fit=crop&q=80" alt="Kwame Asante" class="team-card__img" loading="lazy" />
        <div class="team-card__name">Kwame Asante</div>
        <div class="team-card__title">Founder & CEO</div>
        <div class="team-card__bio">Ghanaian‑born, Kwame has spent over 20 years exploring every corner of Africa. He founded Pier One to share the continent's untold stories.</div>
      </div>
      <div class="team-card reveal reveal-delay-1">
        <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?w=400&h=400&fit=crop&q=80" alt="Nia Osei" class="team-card__img" loading="lazy" />
        <div class="team-card__name">Nia Osei</div>
        <div class="team-card__title">Head of Operations — West Africa</div>
        <div class="team-card__bio">Based in Accra, Nia ensures every detail of your West African journey is flawless. She's a cultural encyclopedia and logistics wizard.</div>
      </div>
      <div class="team-card reveal reveal-delay-2">
        <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=400&h=400&fit=crop&q=80" alt="David Mwangi" class="team-card__img" loading="lazy" />
        <div class="team-card__name">David Mwangi</div>
        <div class="team-card__title">Head of Safaris — East Africa</div>
        <div class="team-card__bio">A certified Gold‑Level Safari Guide, David has an almost supernatural ability to spot wildlife and share its secrets.</div>
      </div>
      <div class="team-card reveal reveal-delay-3">
        <img src="https://images.unsplash.com/photo-1580489944761-15a19d654956?w=400&h=400&fit=crop&q=80" alt="Layla Benali" class="team-card__img" loading="lazy" />
        <div class="team-card__name">Layla Benali</div>
        <div class="team-card__title">North Africa & Middle East Director</div>
        <div class="team-card__bio">Moroccan‑born and multilingual, Layla designs immersive cultural experiences across the Maghreb and beyond.</div>
      </div>
    </div>
    <div style="text-align:center;margin-top:2.5rem;" class="reveal reveal-delay-4">
      <a href="contact" class="btn btn-outline">Join Our Team →</a>
    </div>
  </div>
</section> -->

<!-- ════════════════════════════════════════════════
     TESTIMONIALS — same as index (reused)
═══════════════════════════════════════════════════ -->
<!-- <section class="section section--cream">
  <div class="container">
    <div style="text-align:center;max-width:520px;margin:0 auto 2.5rem;">
      <span class="section-eyebrow reveal">Real Stories</span>
      <h2 class="section-title reveal reveal-delay-1">Words from Our <em>Travellers</em></h2>
    </div>

    <div class="testimonials-outer reveal">
      <button class="testimonials-btn testimonials-btn--prev" id="tPrev" aria-label="Previous testimonials">
        <svg fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
          <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7"/>
        </svg>
      </button>

      <div class="testimonials-wrap">
        <div class="testimonials-track" id="tTrack">
          <div class="testimonial-card">
            <div class="testimonial-card__quote">"</div>
            <div class="testimonial-card__stars">★★★★★</div>
            <div class="testimonial-card__text">Pier One transformed our university group's trip to Ghana into a life-changing academic experience. The local guides were exceptional — knowledgeable, passionate, and incredibly warm.</div>
            <div class="testimonial-card__author">
              <div>
                <div class="testimonial-card__name">Adwoa Mensah</div>
                <div class="testimonial-card__role">UG · Academic Tour</div>
              </div>
            </div>
          </div>
          <div class="testimonial-card">
            <div class="testimonial-card__quote">"</div>
            <div class="testimonial-card__stars">★★★★★</div>
            <div class="testimonial-card__text">The Serengeti safari exceeded every expectation. Seamless logistics, luxury camps, and witnessing the Great Migration up close — absolutely unforgettable.</div>
            <div class="testimonial-card__author">
              <div>
                <div class="testimonial-card__name">James Okafor</div>
                <div class="testimonial-card__role">Lagos · Leisure</div>
              </div>
            </div>
          </div>
          <div class="testimonial-card">
            <div class="testimonial-card__quote">"</div>
            <div class="testimonial-card__stars">★★★★★</div>
            <div class="testimonial-card__text">Our church group's religious tour to the Holy Land was handled flawlessly. Every detail was perfect — accommodation, transport, spiritual programme. Highly recommended!</div>
            <div class="testimonial-card__author">
              <div>
                <div class="testimonial-card__name">Bishop Charles Darko</div>
                <div class="testimonial-card__role">Accra · Religious</div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <button class="testimonials-btn testimonials-btn--next" id="tNext" aria-label="Next testimonials">
        <svg fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
          <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/>
        </svg>
      </button>

      <div class="testimonials-dots" id="tDots"></div>
    </div>
  </div>
</section>
 -->
<!-- ════════════════════════════════════════════════
     NEWSLETTER — consistent
═══════════════════════════════════════════════════ -->
<section class="section section--cream" id="contact">
  <div class="container">
    <div class="newsletter reveal">
      <div>
        <h3 class="newsletter__title">Stay Inspired by Africa</h3>
        <p class="newsletter__subtitle">Get curated travel ideas, exclusive deals, and insider stories delivered to your inbox.</p>
      </div>
      <form class="newsletter__form" onsubmit="return false;">
        <input class="newsletter__input" type="email" placeholder="Your email address" required />
        <button type="submit" class="btn btn-primary">Subscribe</button>
      </form>
    </div>
  </div>
</section>

<?php include 'includes/footer.php'; ?>