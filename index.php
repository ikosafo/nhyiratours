<?php include 'includes/header.php'; ?>


<section class="hero">
  <div class="hero__video-wrap">
    <video class="hero__video" autoplay muted loop playsinline
      poster="https://images.unsplash.com/photo-1516026672322-bc52d61a55d5?w=1920&q=80">
      <source src="https://videos.pexels.com/video-files/3571264/3571264-uhd_2560_1440_25fps.mp4" type="video/mp4" />
      <source src="https://videos.pexels.com/video-files/2098827/2098827-uhd_2560_1440_25fps.mp4" type="video/mp4" />
    </video>
  </div>
  <div class="hero__overlay-gradient"></div>
  <div class="hero__kente"></div>

  <div class="hero__content">
    <p class="hero__eyebrow">
      <span class="hero__eyebrow-line"></span>
      Africa's Premier Tour Operator
    </p>
    <h1 class="hero__title">
      Discover the <em>Soul</em> of Africa
    </h1>
    <p class="hero__subtitle">
      From the golden savannahs of East Africa to the ancient kingdoms of West Africa — Pier One curates extraordinary journeys that connect you to the continent's heartbeat.
    </p>
    <div class="hero__actions">
      <a href="#destinations" class="btn btn-primary btn-lg">
        Explore Destinations
        <svg class="arrow-icon" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
          <path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
        </svg>
      </a>
      <a href="#tours" class="btn btn-secondary btn-lg">View Our Tours</a>
    </div>
  </div>

  <div class="hero__scroll">
    <div class="hero__scroll-line"></div>
    Scroll
  </div>
</section>

<!-- ════════════════════════════════════════════════
     STATS
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
     DESTINATIONS SHOWCASE — fixed grid, no overlap
═══════════════════════════════════════════════════ -->
<section class="section section--cream" id="destinations">
  <div class="container">
    <div style="display:flex;align-items:flex-end;justify-content:space-between;flex-wrap:wrap;gap:1rem;margin-bottom:2.5rem;">
      <div>
        <span class="section-eyebrow reveal">Our Regions</span>
        <h2 class="section-title reveal reveal-delay-1">Six <em>Extraordinary</em><br>African Regions</h2>
      </div>
      <a href="#destinations" class="btn btn-outline reveal reveal-delay-2">View All Regions</a>
    </div>

    <div class="dest-grid">
      <a href="destinations/westafrica" class="dest-card reveal">
        <img src="https://images.unsplash.com/photo-1626197031507-c17099753214?w=800&q=80" alt="West Africa — coastal villages" loading="lazy" />
        <div class="dest-card__overlay"></div>
        <div class="dest-card__arrow">
          <svg fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M7 17L17 7M7 7h10v10"/>
          </svg>
        </div>
        <div class="dest-card__body">
          <div class="dest-card__region">West Africa</div>
          <div class="dest-card__name">Ghana · Senegal<br>Nigeria &amp; More</div>
          <div class="dest-card__count">14 destinations</div>
        </div>
      </a>

      <a href="destinations/eastafrica" class="dest-card reveal reveal-delay-1">
        <img src="https://images.unsplash.com/photo-1516026672322-bc52d61a55d5?w=800&q=80" alt="East Africa — savannah" loading="lazy" />
        <div class="dest-card__overlay"></div>
        <div class="dest-card__arrow">
          <svg fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M7 17L17 7M7 7h10v10"/>
          </svg>
        </div>
        <div class="dest-card__body">
          <div class="dest-card__region">East Africa</div>
          <div class="dest-card__name">Kenya · Tanzania<br>Uganda &amp; Rwanda</div>
          <div class="dest-card__count">12 destinations</div>
        </div>
      </a>

      <a href="destinations/northafrica" class="dest-card reveal reveal-delay-2">
        <img src="https://images.unsplash.com/photo-1539020140153-e479b8c22e70?w=800&q=80" alt="North Africa — Morocco" loading="lazy" />
        <div class="dest-card__overlay"></div>
        <div class="dest-card__arrow">
          <svg fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M7 17L17 7M7 7h10v10"/>
          </svg>
        </div>
        <div class="dest-card__body">
          <div class="dest-card__region">North Africa</div>
          <div class="dest-card__name">Morocco · Egypt<br>Tunisia &amp; Algeria</div>
          <div class="dest-card__count">8 destinations</div>
        </div>
      </a>

      <a href="destinations/centralafrica" class="dest-card reveal reveal-delay-3">
        <img src="https://images.unsplash.com/photo-1528543606781-2f6e6857f318?w=800&q=80" alt="Central Africa — rainforest" loading="lazy" />
        <div class="dest-card__overlay"></div>
        <div class="dest-card__arrow">
          <svg fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M7 17L17 7M7 7h10v10"/>
          </svg>
        </div>
        <div class="dest-card__body">
          <div class="dest-card__region">Central Africa</div>
          <div class="dest-card__name">Congo · Cameroon<br>Gabon &amp; Rwanda</div>
          <div class="dest-card__count">7 destinations</div>
        </div>
      </a>

      <a href="destinations/southernafrica" class="dest-card reveal reveal-delay-4">
        <img src="https://images.unsplash.com/photo-1510797215324-95aa89f43c33?w=800&q=80" alt="Southern Africa" loading="lazy" />
        <div class="dest-card__overlay"></div>
        <div class="dest-card__arrow">
          <svg fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M7 17L17 7M7 7h10v10"/>
          </svg>
        </div>
        <div class="dest-card__body">
          <div class="dest-card__region">Southern Africa</div>
          <div class="dest-card__name">South Africa<br>Botswana · Zambia</div>
          <div class="dest-card__count">10 destinations</div>
        </div>
      </a>

      <a href="destinations/indianocean" class="dest-card reveal reveal-delay-5">
        <img src="https://images.unsplash.com/photo-1573843981267-be1999ff37cd?w=800&q=80" alt="Indian Ocean Islands" loading="lazy" />
        <div class="dest-card__overlay"></div>
        <div class="dest-card__arrow">
          <svg fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M7 17L17 7M7 7h10v10"/>
          </svg>
        </div>
        <div class="dest-card__body">
          <div class="dest-card__region">Indian Ocean Islands</div>
          <div class="dest-card__name">Mauritius · Seychelles<br>Zanzibar · Réunion</div>
          <div class="dest-card__count">6 destinations</div>
        </div>
      </a>
    </div>
  </div>
</section>

<!-- ════════════════════════════════════════════════
     KENTE DIVIDER
═══════════════════════════════════════════════════ -->
<div class="kente-bar"></div>

<!-- ════════════════════════════════════════════════
     WHY CHOOSE US
═══════════════════════════════════════════════════ -->
<section class="section section--sand" id="about-preview">
  <div class="container">
    <div class="feature-split">
      <div class="feature-split__img reveal">
        <img src="https://images.unsplash.com/photo-1551632436-cbf8dd35adfa?w=900&q=80" alt="Local guide leading a safari" loading="lazy" />
        <div class="feature-split__badge">
          <div class="feature-split__badge-num">18+</div>
          <div class="feature-split__badge-label">Years shaping<br>African journeys</div>
        </div>
      </div>
      <div>
        <span class="section-eyebrow reveal">Why Pier One Travel & Tours Services</span>
        <h2 class="section-title reveal reveal-delay-1">Africa Is Our Home.<br>Your <em>Journey</em>, Our Passion.</h2>
        <p class="section-subtitle reveal reveal-delay-2" style="margin-bottom:2.5rem;">
          We are born of Africa — our team of seasoned local experts, guides, and cultural ambassadors craft journeys that go beyond the tourist trail, giving you authentic access to communities, wildlife, heritage, and landscapes.
        </p>
        <div class="feature-list">
          <div class="feature-item reveal reveal-delay-2">
            <div class="feature-icon">🧭</div>
            <div class="feature-text">
              <div class="feature-text__title">Local Expert Guides</div>
              <div class="feature-text__desc">Our guides are born where you travel. Every itinerary is shaped by people who call these destinations home.</div>
            </div>
          </div>
          <div class="feature-item reveal reveal-delay-3">
            <div class="feature-icon">🛡️</div>
            <div class="feature-text">
              <div class="feature-text__title">Fully Insured &amp; Bonded</div>
              <div class="feature-text__desc">Comprehensive travel protection, 24/7 on-ground support, and emergency evacuation coverage.</div>
            </div>
          </div>
          <div class="feature-item reveal reveal-delay-4">
            <div class="feature-icon">✈️</div>
            <div class="feature-text">
              <div class="feature-text__title">End-to-End Service</div>
              <div class="feature-text__desc">Flights, accommodation, transfers, visas, and experiences — we handle every detail of your African adventure.</div>
            </div>
          </div>
          <div class="feature-item reveal reveal-delay-5">
            <div class="feature-icon">🌱</div>
            <div class="feature-text">
              <div class="feature-text__title">Responsible Tourism</div>
              <div class="feature-text__desc">We partner with local communities, invest in conservation, and ensure your travel creates positive impact.</div>
            </div>
          </div>
        </div>
        <div style="margin-top:2rem;" class="reveal reveal-delay-5">
          <a href="about" class="btn btn-primary">
            Our Story
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
     TOUR TYPES
═══════════════════════════════════════════════════ -->
<section class="section section--cream" id="tours">
  <div class="container">
    <div style="text-align:center;max-width:600px;margin:0 auto 3rem;">
      <span class="section-eyebrow reveal">What We Offer</span>
      <h2 class="section-title reveal reveal-delay-1">Tours Crafted for<br>Every <em>Purpose</em></h2>
      <p class="section-subtitle reveal reveal-delay-2" style="margin:0 auto;">Whether you're here to learn, worship, serve, or simply wander — we have a journey for you.</p>
    </div>
    <div class="grid-auto">
      <div class="tour-type-card reveal">
        <div class="tour-type-card__icon">🎓</div>
        <div class="tour-type-card__name">Academic Tours</div>
        <div class="tour-type-card__desc">Educational expeditions for students, researchers, and institutions exploring African history, ecology, and culture.</div>
        <a href="tours/academic" class="tour-type-card__link">
          Explore 
          <svg fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
            <path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
          </svg>
        </a>
      </div>
      <div class="tour-type-card reveal reveal-delay-1">
        <div class="tour-type-card__icon">🌅</div>
        <div class="tour-type-card__name">Leisure Tours</div>
        <div class="tour-type-card__desc">Relaxed, luxurious, and immersive holiday experiences from beach escapes to wildlife safaris and city explorations.</div>
        <a href="tours/leisure" class="tour-type-card__link">
          Explore 
          <svg fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
            <path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
          </svg>
        </a>
      </div>
      <div class="tour-type-card reveal reveal-delay-2">
        <div class="tour-type-card__icon">🕊️</div>
        <div class="tour-type-card__name">Religious Tours</div>
        <div class="tour-type-card__desc">Spiritually enriching pilgrimages and faith-based travel to sacred sites across the African continent and beyond.</div>
        <a href="tours/religious" class="tour-type-card__link">
          Explore 
          <svg fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
            <path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
          </svg>
        </a>
      </div>
      <div class="tour-type-card reveal reveal-delay-3">
        <div class="tour-type-card__icon">🤝</div>
        <div class="tour-type-card__name">Volunteer Mission Tours</div>
        <div class="tour-type-card__desc">Give back while you travel — community-development missions that create lasting positive change in host communities.</div>
        <a href="tours/volunteer" class="tour-type-card__link">
          Explore 
          <svg fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
            <path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
          </svg>
        </a>
      </div>
      <div class="tour-type-card reveal reveal-delay-4">
        <div class="tour-type-card__icon">💼</div>
        <div class="tour-type-card__name">Corporate (MICE)</div>
        <div class="tour-type-card__desc">Meetings, Incentives, Conferences &amp; Events — world-class African venues, logistics, and team-building experiences.</div>
        <a href="tours/corporate" class="tour-type-card__link">
          Explore 
          <svg fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
            <path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
          </svg>
        </a>
      </div>
    </div>
  </div>
</section>

<!-- ════════════════════════════════════════════════
     FEATURED TOURS
═══════════════════════════════════════════════════ -->
<section class="section section--dark">
  <div class="container">
    <div style="display:flex;align-items:flex-end;justify-content:space-between;flex-wrap:wrap;gap:1rem;margin-bottom:2.5rem;">
      <div>
        <span class="section-eyebrow reveal" style="color:var(--gold);">Hand-picked for you</span>
        <h2 class="section-title section-title--light reveal reveal-delay-1">Featured <em>Journeys</em></h2>
      </div>
      <a href="tours/leisure" class="btn btn-outline reveal reveal-delay-2" style="color:var(--gold-light);border-color:rgba(200,145,58,0.5);">All Tours</a>
    </div>
    <div class="tours-grid">
      <div class="card reveal">
        <div class="card__img-wrap">
          <img src="https://images.unsplash.com/photo-1516026672322-bc52d61a55d5?w=800&q=80" alt="Serengeti Safari" loading="lazy" />
          <div class="card__badge">Most Popular</div>
        </div>
        <div class="card__body">
          <div class="card__region">East Africa · Tanzania</div>
          <div class="card__title">Great Serengeti Wildlife Safari</div>
          <div class="card__desc">Witness the world's greatest wildlife spectacle — the annual Great Migration — across Serengeti's endless golden plains.</div>
          <div class="card__meta">
            <span class="card__meta-item">
              <svg fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <circle cx="12" cy="12" r="10"/>
                <path stroke-linecap="round" d="M12 6v6l4 2"/>
              </svg> 10 Days
            </span>
            <span class="card__meta-item">
              <svg fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z"/>
              </svg> Small Groups
            </span>
            <span class="card__meta-item">
              <svg fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"/>
              </svg> 4.9 Rating
            </span>
          </div>
          <div class="card__footer">
            <div class="card__price">
              <span class="card__price-from">From</span>
              <span class="card__price-amount">$2,450</span>
            </div>
            <a href="tours/leisure" class="btn btn-primary btn-sm">View Tour</a>
          </div>
        </div>
      </div>
      
      <div class="card reveal reveal-delay-1">
        <div class="card__img-wrap">
          <img src="https://images.unsplash.com/photo-1526772662000-3f88f10405ff?w=800&q=80" alt="Cape Town" loading="lazy" />
        </div>
        <div class="card__body">
          <div class="card__region">Southern Africa · South Africa</div>
          <div class="card__title">Cape Town &amp; Garden Route</div>
          <div class="card__desc">Table Mountain, Cape Peninsula, Winelands and the scenic Garden Route — South Africa's finest.</div>
          <div class="card__footer">
            <div class="card__price">
              <span class="card__price-from">From</span>
              <span class="card__price-amount">$1,890</span>
            </div>
            <a href="tours/leisure" class="btn btn-primary btn-sm">View</a>
          </div>
        </div>
      </div>
      
      <div class="card reveal reveal-delay-2">
        <div class="card__img-wrap">
          <img src="https://images.unsplash.com/photo-1539020140153-e479b8c22e70?w=800&q=80" alt="Marrakech" loading="lazy" />
        </div>
        <div class="card__body">
          <div class="card__region">North Africa · Morocco</div>
          <div class="card__title">Imperial Cities of Morocco</div>
          <div class="card__desc">Marrakech, Fez, Rabat and Meknes — a sensory journey through Morocco's four royal cities.</div>
          <div class="card__footer">
            <div class="card__price">
              <span class="card__price-from">From</span>
              <span class="card__price-amount">$1,650</span>
            </div>
            <a href="tours/leisure" class="btn btn-primary btn-sm">View</a>
          </div>
        </div>
      </div>
      
      <div class="card reveal reveal-delay-3">
        <div class="card__img-wrap">
          <img src="https://images.unsplash.com/photo-1626197031507-c17099753214?w=800&q=80" alt="Ghana Heritage" loading="lazy" />
          <div class="card__badge">Academic</div>
        </div>
        <div class="card__body">
          <div class="card__region">West Africa · Ghana</div>
          <div class="card__title">Ghana Heritage &amp; Slave Route</div>
          <div class="card__desc">A powerful educational journey through Cape Coast, Elmina Castle, and the Ashanti Kingdom.</div>
          <div class="card__footer">
            <div class="card__price">
              <span class="card__price-from">From</span>
              <span class="card__price-amount">$1,200</span>
            </div>
            <a href="tours/academic" class="btn btn-primary btn-sm">View</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ════════════════════════════════════════════════
     TESTIMONIALS — with visible prev/next arrows
═══════════════════════════════════════════════════ -->
<section class="section section--cream">
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
              <!-- <img src="https://i.pravatar.cc/88?img=12" alt="Prof. Adwoa Mensah" class="testimonial-card__avatar" loading="lazy" /> -->
              <div>
                <div class="testimonial-card__name">Adwoa Mensah</div>
                <div class="testimonial-card__role">UG · Academic Tour</div>
              </div>
            </div>
          </div>

          <div class="testimonial-card">
            <div class="testimonial-card__quote">"</div>
            <div class="testimonial-card__stars">★★★★★</div>
            <div class="testimonial-card__text">The Serengeti safari exceeded every expectation. Seamless logistics, luxury camps, and witnessing the Great Migration up close — absolutely unforgettable. Pier One is world-class.</div>
            <div class="testimonial-card__author">
              <!-- <img src="https://i.pravatar.cc/88?img=25" alt="James Okafor" class="testimonial-card__avatar" loading="lazy" /> -->
              <div>
                <div class="testimonial-card__name">James Okafor</div>
                <div class="testimonial-card__role">Lagos, Nigeria · Leisure Tour</div>
              </div>
            </div>
          </div>

          <div class="testimonial-card">
            <div class="testimonial-card__quote">"</div>
            <div class="testimonial-card__stars">★★★★★</div>
            <div class="testimonial-card__text">Our church group's religious tour to the Holy Land was handled flawlessly. Every detail was perfect — accommodation, transport, and the spiritual programme. Highly recommended!</div>
            <div class="testimonial-card__author">
              <!-- <img src="https://i.pravatar.cc/88?img=47" alt="Bishop Charles Darko" class="testimonial-card__avatar" loading="lazy" /> -->
              <div>
                <div class="testimonial-card__name">Bishop Charles Darko</div>
                <div class="testimonial-card__role">Accra, Ghana · Religious Tour</div>
              </div>
            </div>
          </div>

          <div class="testimonial-card">
            <div class="testimonial-card__quote">"</div>
            <div class="testimonial-card__stars">★★★★★</div>
            <div class="testimonial-card__text">The MICE package for our annual conference in Cape Town was impeccably organised. From venue sourcing to team excursions, Pier One delivered beyond our expectations every step of the way.</div>
            <div class="testimonial-card__author">
              <!-- <img src="https://i.pravatar.cc/88?img=32" alt="Amara Diallo" class="testimonial-card__avatar" loading="lazy" /> -->
              <div>
                <div class="testimonial-card__name">Amara Diallo</div>
                <div class="testimonial-card__role">Dakar, Senegal · Corporate MICE</div>
              </div>
            </div>
          </div>

          <div class="testimonial-card">
            <div class="testimonial-card__quote">"</div>
            <div class="testimonial-card__stars">★★★★★</div>
            <div class="testimonial-card__text">I went on a volunteer mission tour to rural Uganda and it changed my life completely. Pier One made it safe, meaningful, and deeply human. I'll be back next year without a doubt.</div>
            <div class="testimonial-card__author">
              <!-- <img src="https://i.pravatar.cc/88?img=55" alt="Chidinma Eze" class="testimonial-card__avatar" loading="lazy" /> -->
              <div>
                <div class="testimonial-card__name">Chidinma Eze</div>
                <div class="testimonial-card__role">Enugu, Nigeria · Volunteer Tour</div>
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

<!-- ════════════════════════════════════════════════
     NEWSLETTER
═══════════════════════════════════════════════════ -->
<section class="section section--sand" id="contact">
  <div class="container">
    <div class="newsletter reveal">
      <div>
        <h3 class="newsletter__title">Stay Inspired by Africa</h3>
        <p class="newsletter__subtitle">Get curated travel ideas, exclusive deals, and insider stories delivered to your inbox. No spam — just Africa's best.</p>
      </div>
      <form class="newsletter__form" onsubmit="return false;">
        <input class="newsletter__input" type="email" placeholder="Your email address" required />
        <button type="submit" class="btn btn-primary">Subscribe</button>
      </form>
    </div>
  </div>
</section>

<?php include 'includes/footer.php'; ?>