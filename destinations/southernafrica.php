<?php include '../includes/header.php'; ?>

<style>
    .dest-hero{position:relative;height:70vh;min-height:500px;display:flex;align-items:flex-end;overflow:hidden}.dest-hero__bg{position:absolute;inset:0;width:100%;height:100%;object-fit:cover;transition:transform 8s ease}.dest-hero:hover .dest-hero__bg{transform:scale(1.04)}.dest-hero__overlay{position:absolute;inset:0;background:linear-gradient(to top,rgba(28,16,8,.92) 0%,rgba(28,16,8,.4) 55%,rgba(28,16,8,.15) 100%)}.dest-hero__content{position:relative;z-index:2;max-width:1400px;width:100%;margin:0 auto;padding:3rem clamp(1rem,4vw,3rem)}.dest-hero__kente{position:absolute;bottom:0;left:0;right:0;height:5px;background:repeating-linear-gradient(90deg,#C8913A 0,#C8913A 40px,#3D2B1F 40px,#3D2B1F 80px,#C4784A 80px,#C4784A 120px,#2D4A3E 120px,#2D4A3E 160px,#8B6020 160px,#8B6020 200px);z-index:3}.dest-hero__region-badge{display:inline-flex;align-items:center;gap:.5rem;background:rgba(200,145,58,.2);backdrop-filter:blur(8px);border:1px solid rgba(200,145,58,.4);border-radius:40px;padding:.35rem 1rem;color:var(--gold-light);font-size:.72rem;font-weight:600;letter-spacing:.14em;text-transform:uppercase;margin-bottom:1rem}.dest-hero__title{font-family:'Cormorant Garamond',serif;font-size:clamp(2.4rem,6vw,5rem);font-weight:600;color:var(--white);line-height:1.08;letter-spacing:-.01em;margin-bottom:1rem}.dest-hero__title em{font-style:italic;color:var(--gold-light)}.dest-hero__meta{display:flex;align-items:center;gap:2rem;flex-wrap:wrap;color:rgba(255,255,255,.7);font-size:.82rem;margin-bottom:1.5rem}.dest-hero__meta-item{display:flex;align-items:center;gap:.4rem}.dest-hero__meta-item svg{width:15px;height:15px;color:var(--gold)}.countries-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:1.5rem}.country-card{border-radius:var(--radius-lg);overflow:hidden;background:var(--white);border:1px solid var(--border-soft);transition:transform var(--trans),box-shadow var(--trans);display:block}.country-card:hover{transform:translateY(-6px);box-shadow:var(--shadow-lg)}.country-card__img{aspect-ratio:16/10;overflow:hidden;position:relative}.country-card__img img{width:100%;height:100%;object-fit:cover;transition:transform var(--trans-slow)}.country-card:hover .country-card__img img{transform:scale(1.06)}.country-card__flag{position:absolute;top:1rem;left:1rem;font-size:1.8rem;line-height:1;filter:drop-shadow(0 2px 8px rgba(0,0,0,.4))}.country-card__body{padding:1.25rem 1.5rem 1.5rem}.country-card__name{font-family:'Cormorant Garamond',serif;font-size:1.3rem;font-weight:600;color:var(--earth);margin-bottom:.35rem}.country-card__tagline{font-size:.78rem;color:var(--gold);font-weight:500;text-transform:uppercase;letter-spacing:.08em;margin-bottom:.6rem}.country-card__desc{font-size:.82rem;color:var(--text-soft);line-height:1.65;margin-bottom:1rem}.country-card__tags{display:flex;gap:.4rem;flex-wrap:wrap}.country-card__tag{font-size:.68rem;font-weight:500;background:var(--gold-pale);color:var(--gold-dark);border:1px solid var(--border);border-radius:40px;padding:.2rem .65rem}.highlight-strip{display:grid;grid-template-columns:repeat(4,1fr);gap:0;border:1px solid var(--border);border-radius:var(--radius-lg);overflow:hidden}.highlight-strip__item{padding:2rem 1.5rem;text-align:center;border-right:1px solid var(--border)}.highlight-strip__item:last-child{border-right:none}.highlight-strip__icon{font-size:2rem;margin-bottom:.75rem}.highlight-strip__label{font-family:'Cormorant Garamond',serif;font-size:1.1rem;font-weight:600;color:var(--earth);margin-bottom:.3rem}.highlight-strip__desc{font-size:.78rem;color:var(--text-soft);line-height:1.6}.region-tours{display:grid;grid-template-columns:repeat(3,1fr);gap:1.5rem}.practical-grid{display:grid;grid-template-columns:repeat(2,1fr);gap:1.5rem}.practical-card{background:var(--white);border-radius:var(--radius-lg);border:1px solid var(--border-soft);padding:1.75rem}.practical-card__title{display:flex;align-items:center;gap:.6rem;font-family:'Cormorant Garamond',serif;font-size:1.1rem;font-weight:600;color:var(--earth);margin-bottom:1rem}.practical-card__title span{font-size:1.4rem}.practical-card__list{display:flex;flex-direction:column;gap:.5rem}.practical-card__item{display:flex;align-items:flex-start;gap:.6rem;font-size:.83rem;color:var(--text-mid);line-height:1.55}.practical-card__item::before{content:'';display:block;width:6px;height:6px;border-radius:50%;background:var(--gold);margin-top:6px;flex-shrink:0}.cta-band{background:linear-gradient(135deg,var(--earth),#5C3D2E);border-radius:var(--radius-xl);padding:clamp(2.5rem,5vw,4rem);text-align:center;position:relative;overflow:hidden}.cta-band::before{content:'';position:absolute;top:-80px;right:-80px;width:300px;height:300px;background:var(--gold);border-radius:50%;opacity:.05}.cta-band__title{font-family:'Cormorant Garamond',serif;font-size:clamp(1.8rem,4vw,3rem);font-weight:600;color:var(--cream);margin-bottom:.75rem;position:relative;z-index:1}.cta-band__title em{font-style:italic;color:var(--gold-light)}.cta-band__sub{font-size:.95rem;color:rgba(242,232,213,.7);max-width:42ch;margin:0 auto 2rem;line-height:1.7;position:relative;z-index:1}.cta-band__actions{display:flex;gap:1rem;justify-content:center;flex-wrap:wrap;position:relative;z-index:1}
    @media(max-width:900px){.countries-grid{grid-template-columns:1fr 1fr}.highlight-strip{grid-template-columns:repeat(2,1fr)}.region-tours{grid-template-columns:1fr 1fr}.practical-grid{grid-template-columns:1fr}}
    @media(max-width:600px){.countries-grid{grid-template-columns:1fr}.region-tours{grid-template-columns:1fr}}
</style>

<!-- HERO -->
<section class="dest-hero">
  <img class="dest-hero__bg" src="https://images.pexels.com/photos/4666851/pexels-photo-4666851.jpeg?w=1920&q=80" alt="Southern Africa desert and savannah" loading="eager" />
  <div class="dest-hero__overlay"></div>
  <div class="dest-hero__kente"></div>
  <div class="dest-hero__content">
    <nav class="breadcrumb" style="margin-bottom:1rem;">
      <a href="<?= URLROOT ?>/index.php">Home</a>
      <span class="breadcrumb__sep">›</span>
      <a href="#">Destinations</a>
      <span class="breadcrumb__sep">›</span>
      <span class="breadcrumb__current">Southern Africa</span>
    </nav>
    <div class="dest-hero__region-badge">🦓 Southern Africa</div>
    <h1 class="dest-hero__title"><em>Wilderness, Deltas</em><br>&amp; Desert Skies</h1>
    <div class="dest-hero__meta">
      <span class="dest-hero__meta-item">
        <svg fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
          <path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
        </svg> 8 Destinations
      </span>
      <span class="dest-hero__meta-item">
        <svg fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
          <path stroke-linecap="round" stroke-linejoin="round" d="M3 21v-4m0 0V5a2 2 0 012-2h6.5l1 1H21l-3 6 3 6h-8.5l-1-1H5a2 2 0 00-2 2zm9-13.5V9"/>
        </svg> South Africa · Botswana · Namibia · Zambia · Zimbabwe · Mozambique
      </span>
      <span class="dest-hero__meta-item">
        <svg fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
          <circle cx="12" cy="12" r="10"/>
          <path stroke-linecap="round" d="M12 6v6l4 2"/>
        </svg> Best May – Oct
      </span>
    </div>
    <div style="display:flex;gap:1rem;flex-wrap:wrap;">
      <a href="#countries" class="btn btn-primary">
        Explore Countries 
        <svg class="arrow-icon" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
          <path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
        </svg>
      </a>
      <a href="#tours" class="btn btn-secondary">View Tours</a>
    </div>
  </div>
</section>

<!-- HIGHLIGHT STRIP -->
<section class="section--sand" style="padding:0;">
  <div class="container">
    <div class="highlight-strip">
      <div class="highlight-strip__item reveal">
        <div class="highlight-strip__icon">🐘</div>
        <div class="highlight-strip__label">Okavango Delta</div>
        <div class="highlight-strip__desc">Botswana's pristine wetland — Africa's most exclusive safari destination</div>
      </div>
      <div class="highlight-strip__item reveal reveal-delay-1">
        <div class="highlight-strip__icon">🏜️</div>
        <div class="highlight-strip__label">Namib Desert</div>
        <div class="highlight-strip__desc">The world's oldest desert with the tallest sand dunes on earth</div>
      </div>
      <div class="highlight-strip__item reveal reveal-delay-2">
        <div class="highlight-strip__icon">💧</div>
        <div class="highlight-strip__label">Victoria Falls</div>
        <div class="highlight-strip__desc">"The Smoke that Thunders" — one of the Seven Natural Wonders</div>
      </div>
      <div class="highlight-strip__item reveal reveal-delay-3">
        <div class="highlight-strip__icon">🐧</div>
        <div class="highlight-strip__label">Cape Peninsula</div>
        <div class="highlight-strip__desc">Table Mountain, penguin colonies & the world's most scenic coastline</div>
      </div>
    </div>
  </div>
</section>

<!-- COUNTRIES GRID -->
<section class="section section--cream" id="countries">
  <div class="container">
    <div style="display:flex;align-items:flex-end;justify-content:space-between;flex-wrap:wrap;gap:1rem;margin-bottom:2.5rem;">
      <div>
        <span class="section-eyebrow reveal">Explore</span>
        <h2 class="section-title reveal reveal-delay-1">Countries We <em>Cover</em></h2>
      </div>
    </div>
    <div class="countries-grid">
      
      <!-- South Africa -->
      <a href="#" class="country-card reveal">
        <div class="country-card__img">
          <img src="https://images.pexels.com/photos/1285625/pexels-photo-1285625.jpeg?w=700&q=80" alt="South Africa" loading="lazy" />
          <div class="country-card__flag">🇿🇦</div>
        </div>
        <div class="country-card__body">
          <div class="country-card__tagline">Rainbow Nation</div>
          <div class="country-card__name">South Africa</div>
          <div class="country-card__desc">Cape Town's Table Mountain, Kruger National Park's Big Five, the Garden Route's coastal beauty, and Stellenbosch's world-class wine estates — South Africa has it all.</div>
          <div class="country-card__tags">
            <span class="country-card__tag">Safari</span>
            <span class="country-card__tag">Wine</span>
            <span class="country-card__tag">Mountains</span>
            <span class="country-card__tag">Beaches</span>
          </div>
        </div>
      </a>
      
      <!-- Botswana -->
      <a href="#" class="country-card reveal reveal-delay-1">
        <div class="country-card__img">
          <img src="https://images.pexels.com/photos/4681663/pexels-photo-4681663.jpeg?w=700&q=80" alt="Botswana" loading="lazy" />
          <div class="country-card__flag">🇧🇼</div>
        </div>
        <div class="country-card__body">
          <div class="country-card__tagline">Africa's Premier Safari</div>
          <div class="country-card__name">Botswana</div>
          <div class="country-card__desc">The Okavango Delta's crystal-clear waterways, Chobe's massive elephant herds, and the vast salt pans of Makgadikgadi — Botswana is safari perfection.</div>
          <div class="country-card__tags">
            <span class="country-card__tag">Okavango</span>
            <span class="country-card__tag">Elephants</span>
            <span class="country-card__tag">Luxury Safari</span>
          </div>
        </div>
      </a>
      
      <!-- Namibia -->
      <a href="#" class="country-card reveal reveal-delay-2">
        <div class="country-card__img">
          <img src="https://images.pexels.com/photos/4666851/pexels-photo-4666851.jpeg?w=700&q=80" alt="Namibia" loading="lazy" />
          <div class="country-card__flag">🇳🇦</div>
        </div>
        <div class="country-card__body">
          <div class="country-card__tagline">Land of Extremes</div>
          <div class="country-card__name">Namibia</div>
          <div class="country-card__desc">Sossusvlei's towering red dunes, Etosha's waterhole wildlife, the Skeleton Coast's haunting beauty, and the desert-adapted elephants of Damaraland.</div>
          <div class="country-card__tags">
            <span class="country-card__tag">Dunes</span>
            <span class="country-card__tag">Desert</span>
            <span class="country-card__tag">Etosha</span>
          </div>
        </div>
      </a>
      
      <!-- Zambia -->
      <a href="#" class="country-card reveal reveal-delay-3">
        <div class="country-card__img">
          <img src="https://images.pexels.com/photos/1320377/pexels-photo-1320377.jpeg?w=700&q=80" alt="Zambia" loading="lazy" />
          <div class="country-card__flag">🇿🇲</div>
        </div>
        <div class="country-card__body">
          <div class="country-card__tagline">Walking Safari Capital</div>
          <div class="country-card__name">Zambia</div>
          <div class="country-card__desc">Victoria Falls' thunderous majesty, South Luangwa's walking safaris, Lower Zambezi's canoe adventures, and some of Africa's most authentic wildlife experiences.</div>
          <div class="country-card__tags">
            <span class="country-card__tag">Victoria Falls</span>
            <span class="country-card__tag">Walking Safari</span>
            <span class="country-card__tag">Zambezi</span>
          </div>
        </div>
      </a>
      
      <!-- Zimbabwe -->
      <a href="#" class="country-card reveal reveal-delay-4">
        <div class="country-card__img">
          <img src="https://images.pexels.com/photos/3611039/pexels-photo-3611039.jpeg?w=700&q=80" alt="Zimbabwe" loading="lazy" />
          <div class="country-card__flag">🇿🇼</div>
        </div>
        <div class="country-card__body">
          <div class="country-card__tagline">Warm Heart of Africa</div>
          <div class="country-card__name">Zimbabwe</div>
          <div class="country-card__desc">Victoria Falls from the Zimbabwean side, Hwange's vast elephant population, Mana Pools' wilderness canoeing, and the Great Zimbabwe Ruins.</div>
          <div class="country-card__tags">
            <span class="country-card__tag">Victoria Falls</span>
            <span class="country-card__tag">Elephants</span>
            <span class="country-card__tag">Ancient Ruins</span>
          </div>
        </div>
      </a>
      
      <!-- Mozambique -->
      <a href="#" class="country-card reveal reveal-delay-5">
        <div class="country-card__img">
          <img src="https://images.pexels.com/photos/2589458/pexels-photo-2589458.jpeg?w=700&q=80" alt="Mozambique" loading="lazy" />
          <div class="country-card__flag">🇲🇿</div>
        </div>
        <div class="country-card__body">
          <div class="country-card__tagline">Indian Ocean Paradise</div>
          <div class="country-card__name">Mozambique</div>
          <div class="country-card__desc">The Bazaruto Archipelago's pristine coral reefs, Quirimbas' deserted beaches, and fresh seafood served on white sands — Mozambique is Africa's best-kept beach secret.</div>
          <div class="country-card__tags">
            <span class="country-card__tag">Beaches</span>
            <span class="country-card__tag">Diving</span>
            <span class="country-card__tag">Islands</span>
          </div>
        </div>
      </a>
    </div>
  </div>
</section>

<!-- TOURS SECTION -->
<section class="section section--dark" id="tours">
  <div class="container">
    <div style="display:flex;align-items:flex-end;justify-content:space-between;flex-wrap:wrap;gap:1rem;margin-bottom:2.5rem;">
      <div>
        <span class="section-eyebrow reveal" style="color:var(--gold);">Southern Africa Tours</span>
        <h2 class="section-title section-title--light reveal reveal-delay-1">Featured <em>Journeys</em></h2>
      </div>
      <a href="<?php echo URLROOT ?>/tours/leisure" class="btn btn-outline reveal reveal-delay-2" style="color:var(--gold-light);border-color:rgba(200,145,58,.5);">All Tours</a>
    </div>
    <div class="region-tours">
      
      <!-- Tour 1: Botswana Safari -->
      <div class="card reveal">
        <div class="card__img-wrap">
          <img src="https://images.pexels.com/photos/4681663/pexels-photo-4681663.jpeg?w=700&q=80" alt="Okavango Delta" loading="lazy" />
          <div class="card__badge">Most Popular</div>
        </div>
        <div class="card__body">
          <div class="card__region">Southern Africa · Botswana</div>
          <div class="card__title">Okavango Delta Luxury Safari</div>
          <div class="card__desc">Explore the world's largest inland delta by mokoro canoe, track big game on guided walks, and stay in award-winning eco-lodges.</div>
          <div class="card__footer">
            <div class="card__price">
              <span class="card__price-from">From</span>
              <span class="card__price-amount">$3,950</span>
            </div>
            <a href="<?php echo URLROOT ?>/tours/leisure" class="btn btn-primary btn-sm">View Tour</a>
          </div>
        </div>
      </div>
      
      <!-- Tour 2: Namibia Desert & Wildlife -->
      <div class="card reveal reveal-delay-1">
        <div class="card__img-wrap">
          <img src="https://images.pexels.com/photos/4666851/pexels-photo-4666851.jpeg?w=700&q=80" alt="Namib Desert" loading="lazy" />
          <div class="card__badge">Bucket List</div>
        </div>
        <div class="card__body">
          <div class="card__region">Southern Africa · Namibia</div>
          <div class="card__title">Namibian Desert &amp; Safari Odyssey</div>
          <div class="card__desc">Sossusvlei's red dunes, Skeleton Coast shipwrecks, Etosha's waterhole wildlife, and desert-adapted elephants.</div>
          <div class="card__footer">
            <div class="card__price">
              <span class="card__price-from">From</span>
              <span class="card__price-amount">$2,800</span>
            </div>
            <a href="<?php echo URLROOT ?>/tours/leisure" class="btn btn-primary btn-sm">View</a>
          </div>
        </div>
      </div>
      
      <!-- Tour 3: South Africa Cape & Kruger -->
      <div class="card reveal reveal-delay-2">
        <div class="card__img-wrap">
          <img src="https://images.pexels.com/photos/1285625/pexels-photo-1285625.jpeg?w=700&q=80" alt="Cape Town" loading="lazy" />
          <div class="card__badge">Best Value</div>
        </div>
        <div class="card__body">
          <div class="card__region">Southern Africa · South Africa</div>
          <div class="card__title">Cape Town &amp; Kruger Safari</div>
          <div class="card__desc">Table Mountain cableway, Cape Peninsula penguins, Stellenbosch wine tasting, and Big Five game drives in Kruger.</div>
          <div class="card__footer">
            <div class="card__price">
              <span class="card__price-from">From</span>
              <span class="card__price-amount">$1,950</span>
            </div>
            <a href="<?php echo URLROOT ?>/tours/leisure" class="btn btn-primary btn-sm">View</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- PRACTICAL INFORMATION -->
<section class="section section--cream">
  <div class="container">
    <div style="text-align:center;max-width:540px;margin:0 auto 3rem;">
      <span class="section-eyebrow reveal">Travel Essentials</span>
      <h2 class="section-title reveal reveal-delay-1">Know Before <em>You Go</em></h2>
    </div>
    <div class="practical-grid">
      
      <div class="practical-card reveal">
        <div class="practical-card__title"><span>✈️</span> Getting There</div>
        <div class="practical-card__list">
          <div class="practical-card__item">Major hubs: Johannesburg (JNB), Cape Town (CPT), Windhoek (WDH), Maun (MUB)</div>
          <div class="practical-card__item">Direct flights from Europe, US, and major African cities</div>
          <div class="practical-card__item">Pier One arranges all inter-camp flights and charter transfers</div>
        </div>
      </div>
      
      <div class="practical-card reveal reveal-delay-1">
        <div class="practical-card__title"><span>🌡️</span> Best Time to Visit</div>
        <div class="practical-card__list">
          <div class="practical-card__item">May – October (dry season): peak wildlife viewing across all countries</div>
          <div class="personal-card__item">November – April (green season): birdwatching, lower prices, lush landscapes</div>
          <div class="practical-card__item">Victoria Falls highest water flow: February – May</div>
        </div>
      </div>
      
      <div class="practical-card reveal reveal-delay-2">
        <div class="practical-card__title"><span>💉</span> Health &amp; Visas</div>
        <div class="practical-card__list">
          <div class="practical-card__item">No yellow fever required for most Southern African countries (except if transiting through risk zones)</div>
          <div class="practical-card__item">South Africa, Namibia, Botswana, Zambia, Zimbabwe all offer e-visas or visa-free for many nationalities</div>
          <div class="practical-card__item">Malaria prophylaxis recommended for northern regions (Kruger, Okavango, Zambezi Valley)</div>
        </div>
      </div>
      
      <div class="practical-card reveal reveal-delay-3">
        <div class="practical-card__title"><span>🦺</span> Safari Safety</div>
        <div class="practical-card__list">
          <div class="practical-card__item">All Pier One safaris use experienced, licensed guides with first-aid training</div>
          <div class="practical-card__item">Comprehensive travel insurance with medical evacuation included</div>
          <div class="practical-card__item">24/7 on-ground support throughout your Southern African itinerary</div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- CTA BANNER -->
<section class="section section--sand" id="contact">
  <div class="container">
    <div class="cta-band reveal">
      <h2 class="cta-band__title">Discover the Wild <em>Heart of the South</em></h2>
      <p class="cta-band__sub">From the Okavango's crystal waters to the Namib's ancient dunes, Southern Africa awaits. Let Pier One craft your perfect journey.</p>
      <div class="cta-band__actions">
        <a href="<?php echo URLROOT ?>/tours/leisure" class="btn btn-primary btn-lg">
          Browse Southern Africa Tours 
          <svg class="arrow-icon" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
          </svg>
        </a>
        <a href="mailto:info@pieronetours.com" class="btn btn-secondary btn-lg">Speak to a Specialist</a>
      </div>
    </div>
  </div>
</section>

<?php include '../includes/footer.php'; ?>