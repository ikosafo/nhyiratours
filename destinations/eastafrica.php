<?php include '../includes/header.php'; ?>

<style>
    .dest-hero{position:relative;height:70vh;min-height:500px;display:flex;align-items:flex-end;overflow:hidden}.dest-hero__bg{position:absolute;inset:0;width:100%;height:100%;object-fit:cover;transition:transform 8s ease}.dest-hero:hover .dest-hero__bg{transform:scale(1.04)}.dest-hero__overlay{position:absolute;inset:0;background:linear-gradient(to top,rgba(28,16,8,.92) 0%,rgba(28,16,8,.4) 55%,rgba(28,16,8,.15) 100%)}.dest-hero__content{position:relative;z-index:2;max-width:1400px;width:100%;margin:0 auto;padding:3rem clamp(1rem,4vw,3rem)}.dest-hero__kente{position:absolute;bottom:0;left:0;right:0;height:5px;background:repeating-linear-gradient(90deg,#C8913A 0,#C8913A 40px,#3D2B1F 40px,#3D2B1F 80px,#C4784A 80px,#C4784A 120px,#2D4A3E 120px,#2D4A3E 160px,#8B6020 160px,#8B6020 200px);z-index:3}.dest-hero__region-badge{display:inline-flex;align-items:center;gap:.5rem;background:rgba(200,145,58,.2);backdrop-filter:blur(8px);border:1px solid rgba(200,145,58,.4);border-radius:40px;padding:.35rem 1rem;color:var(--gold-light);font-size:.72rem;font-weight:600;letter-spacing:.14em;text-transform:uppercase;margin-bottom:1rem}.dest-hero__title{font-family:'Cormorant Garamond',serif;font-size:clamp(2.4rem,6vw,5rem);font-weight:600;color:var(--white);line-height:1.08;letter-spacing:-.01em;margin-bottom:1rem}.dest-hero__title em{font-style:italic;color:var(--gold-light)}.dest-hero__meta{display:flex;align-items:center;gap:2rem;flex-wrap:wrap;color:rgba(255,255,255,.7);font-size:.82rem;margin-bottom:1.5rem}.dest-hero__meta-item{display:flex;align-items:center;gap:.4rem}.dest-hero__meta-item svg{width:15px;height:15px;color:var(--gold)}.countries-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:1.5rem}.country-card{border-radius:var(--radius-lg);overflow:hidden;background:var(--white);border:1px solid var(--border-soft);transition:transform var(--trans),box-shadow var(--trans);display:block}.country-card:hover{transform:translateY(-6px);box-shadow:var(--shadow-lg)}.country-card__img{aspect-ratio:16/10;overflow:hidden;position:relative}.country-card__img img{width:100%;height:100%;object-fit:cover;transition:transform var(--trans-slow)}.country-card:hover .country-card__img img{transform:scale(1.06)}.country-card__flag{position:absolute;top:1rem;left:1rem;font-size:1.8rem;line-height:1;filter:drop-shadow(0 2px 8px rgba(0,0,0,.4))}.country-card__body{padding:1.25rem 1.5rem 1.5rem}.country-card__name{font-family:'Cormorant Garamond',serif;font-size:1.3rem;font-weight:600;color:var(--earth);margin-bottom:.35rem}.country-card__tagline{font-size:.78rem;color:var(--gold);font-weight:500;text-transform:uppercase;letter-spacing:.08em;margin-bottom:.6rem}.country-card__desc{font-size:.82rem;color:var(--text-soft);line-height:1.65;margin-bottom:1rem}.country-card__tags{display:flex;gap:.4rem;flex-wrap:wrap}.country-card__tag{font-size:.68rem;font-weight:500;background:var(--gold-pale);color:var(--gold-dark);border:1px solid var(--border);border-radius:40px;padding:.2rem .65rem}.highlight-strip{display:grid;grid-template-columns:repeat(4,1fr);gap:0;border:1px solid var(--border);border-radius:var(--radius-lg);overflow:hidden}.highlight-strip__item{padding:2rem 1.5rem;text-align:center;border-right:1px solid var(--border)}.highlight-strip__item:last-child{border-right:none}.highlight-strip__icon{font-size:2rem;margin-bottom:.75rem}.highlight-strip__label{font-family:'Cormorant Garamond',serif;font-size:1.1rem;font-weight:600;color:var(--earth);margin-bottom:.3rem}.highlight-strip__desc{font-size:.78rem;color:var(--text-soft);line-height:1.6}.region-tours{display:grid;grid-template-columns:repeat(3,1fr);gap:1.5rem}.practical-grid{display:grid;grid-template-columns:repeat(2,1fr);gap:1.5rem}.practical-card{background:var(--white);border-radius:var(--radius-lg);border:1px solid var(--border-soft);padding:1.75rem}.practical-card__title{display:flex;align-items:center;gap:.6rem;font-family:'Cormorant Garamond',serif;font-size:1.1rem;font-weight:600;color:var(--earth);margin-bottom:1rem}.practical-card__title span{font-size:1.4rem}.practical-card__list{display:flex;flex-direction:column;gap:.5rem}.practical-card__item{display:flex;align-items:flex-start;gap:.6rem;font-size:.83rem;color:var(--text-mid);line-height:1.55}.practical-card__item::before{content:'';display:block;width:6px;height:6px;border-radius:50%;background:var(--gold);margin-top:6px;flex-shrink:0}.cta-band{background:linear-gradient(135deg,var(--earth),#5C3D2E);border-radius:var(--radius-xl);padding:clamp(2.5rem,5vw,4rem);text-align:center;position:relative;overflow:hidden}.cta-band::before{content:'';position:absolute;top:-80px;right:-80px;width:300px;height:300px;background:var(--gold);border-radius:50%;opacity:.05}.cta-band__title{font-family:'Cormorant Garamond',serif;font-size:clamp(1.8rem,4vw,3rem);font-weight:600;color:var(--cream);margin-bottom:.75rem;position:relative;z-index:1}.cta-band__title em{font-style:italic;color:var(--gold-light)}.cta-band__sub{font-size:.95rem;color:rgba(242,232,213,.7);max-width:42ch;margin:0 auto 2rem;line-height:1.7;position:relative;z-index:1}.cta-band__actions{display:flex;gap:1rem;justify-content:center;flex-wrap:wrap;position:relative;z-index:1}
    @media(max-width:900px){.countries-grid{grid-template-columns:1fr 1fr}.highlight-strip{grid-template-columns:repeat(2,1fr)}.region-tours{grid-template-columns:1fr 1fr}.practical-grid{grid-template-columns:1fr}}
    @media(max-width:600px){.countries-grid{grid-template-columns:1fr}.region-tours{grid-template-columns:1fr}}
</style>

<!-- HERO -->
<section class="dest-hero">
  <img class="dest-hero__bg" src="https://images.unsplash.com/photo-1516026672322-bc52d61a55d5?w=1920&q=80" alt="East Africa savannah" loading="eager" />
  <div class="dest-hero__overlay"></div>
  <div class="dest-hero__kente"></div>
  <div class="dest-hero__content">
    <nav class="breadcrumb" style="margin-bottom:1rem;">
      <a href="<?= URLROOT ?>/index.php">Home</a>
      <span class="breadcrumb__sep">›</span>
      <a href="#">Destinations</a>
      <span class="breadcrumb__sep">›</span>
      <span class="breadcrumb__current">East Africa</span>
    </nav>
    <div class="dest-hero__region-badge">🦁 East Africa</div>
    <h1 class="dest-hero__title">The <em>Great Wilderness</em><br>of the East</h1>
    <div class="dest-hero__meta">
      <span class="dest-hero__meta-item">
        <svg fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
          <path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
        </svg> 12 Destinations
      </span>
      <span class="dest-hero__meta-item">
        <svg fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
          <path stroke-linecap="round" stroke-linejoin="round" d="M3 21v-4m0 0V5a2 2 0 012-2h6.5l1 1H21l-3 6 3 6h-8.5l-1-1H5a2 2 0 00-2 2zm9-13.5V9"/>
        </svg> Kenya · Tanzania · Uganda · Rwanda · Ethiopia
      </span>
      <span class="dest-hero__meta-item">
        <svg fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
          <circle cx="12" cy="12" r="10"/>
          <path stroke-linecap="round" d="M12 6v6l4 2"/>
        </svg> Best Jun – Oct
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

<!-- STRIP -->
<section class="section--sand" style="padding:0;">
  <div class="container">
    <div class="highlight-strip">
      <div class="highlight-strip__item reveal">
        <div class="highlight-strip__icon">🦁</div>
        <div class="highlight-strip__label">Big Five Safari</div>
        <div class="highlight-strip__desc">Lion, leopard, elephant, buffalo & rhino in their natural habitat</div>
      </div>
      <div class="highlight-strip__item reveal reveal-delay-1">
        <div class="highlight-strip__icon">🦍</div>
        <div class="highlight-strip__label">Mountain Gorillas</div>
        <div class="highlight-strip__desc">Rwanda & Uganda's Bwindi Forest — a once-in-a-lifetime encounter</div>
      </div>
      <div class="highlight-strip__item reveal reveal-delay-2">
        <div class="highlight-strip__icon">🏔️</div>
        <div class="highlight-strip__label">Kilimanjaro</div>
        <div class="highlight-strip__desc">Africa's highest peak and the world's tallest free-standing mountain</div>
      </div>
      <div class="highlight-strip__item reveal reveal-delay-3">
        <div class="highlight-strip__icon">🌊</div>
        <div class="highlight-strip__label">Zanzibar Beaches</div>
        <div class="highlight-strip__desc">Turquoise Indian Ocean waters & spice island heritage</div>
      </div>
    </div>
  </div>
</section>

<!-- COUNTRIES -->
<section class="section section--cream" id="countries">
  <div class="container">
    <div style="display:flex;align-items:flex-end;justify-content:space-between;flex-wrap:wrap;gap:1rem;margin-bottom:2.5rem;">
      <div>
        <span class="section-eyebrow reveal">Explore</span>
        <h2 class="section-title reveal reveal-delay-1">Countries We <em>Cover</em></h2>
      </div>
    </div>
    <div class="countries-grid">
      <a href="#" class="country-card reveal">
        <div class="country-card__img">
          <img src="https://images.unsplash.com/photo-1535941339077-2dd1c7963098?w=700&q=80" alt="Kenya" loading="lazy" />
          <div class="country-card__flag">🇰🇪</div>
        </div>
        <div class="country-card__body">
          <div class="country-card__tagline">Safari Capital of the World</div>
          <div class="country-card__name">Kenya</div>
          <div class="country-card__desc">Maasai Mara's wildebeest migration, Amboseli's elephant herds against Kilimanjaro, and the flamingo-pink shores of Lake Nakuru — Kenya is East Africa's crown jewel.</div>
          <div class="country-card__tags">
            <span class="country-card__tag">Safari</span>
            <span class="country-card__tag">Wildlife</span>
            <span class="country-card__tag">Maasai Culture</span>
            <span class="country-card__tag">Beaches</span>
          </div>
        </div>
      </a>
      
      <a href="#" class="country-card reveal reveal-delay-1">
        <div class="country-card__img">
          <img src="https://images.unsplash.com/photo-1516026672322-bc52d61a55d5?w=700&q=80" alt="Tanzania" loading="lazy" />
          <div class="country-card__flag">🇹🇿</div>
        </div>
        <div class="country-card__body">
          <div class="country-card__tagline">Serengeti · Ngorongoro · Zanzibar</div>
          <div class="country-card__name">Tanzania</div>
          <div class="country-card__desc">The Serengeti's endless plains, the Ngorongoro Crater's teeming wildlife, Mount Kilimanjaro, and spice-scented Zanzibar — Tanzania delivers Africa's ultimate wildlife and cultural experience.</div>
          <div class="country-card__tags">
            <span class="country-card__tag">Great Migration</span>
            <span class="country-card__tag">Climbing</span>
            <span class="country-card__tag">Spice Islands</span>
          </div>
        </div>
      </a>
      
      <a href="#" class="country-card reveal reveal-delay-2">
        <div class="country-card__img">
          <img src="https://images.unsplash.com/photo-1547471080-7cc2caa01a7e?w=700&q=80" alt="Uganda" loading="lazy" />
          <div class="country-card__flag">🇺🇬</div>
        </div>
        <div class="country-card__body">
          <div class="country-card__tagline">Pearl of Africa</div>
          <div class="country-card__name">Uganda</div>
          <div class="country-card__desc">Mountain gorilla trekking in Bwindi, chimpanzee encounters in Kibale, and the vast wildlife of Queen Elizabeth National Park — Uganda is Africa's most intimate wildlife destination.</div>
          <div class="country-card__tags">
            <span class="country-card__tag">Gorilla Trekking</span>
            <span class="country-card__tag">Primates</span>
            <span class="country-card__tag">Source of the Nile</span>
          </div>
        </div>
      </a>
      
      <a href="#" class="country-card reveal reveal-delay-3">
        <div class="country-card__img">
          <img src="https://images.unsplash.com/photo-1528543606781-2f6e6857f318?w=700&q=80" alt="Rwanda" loading="lazy" />
          <div class="country-card__flag">🇷🇼</div>
        </div>
        <div class="country-card__body">
          <div class="country-card__tagline">Land of a Thousand Hills</div>
          <div class="country-card__name">Rwanda</div>
          <div class="country-card__desc">Volcanoes National Park's gorilla families, Kigali's remarkable urban renewal, and Akagera's big game plains — Rwanda is Africa's most inspiring story of transformation.</div>
          <div class="country-card__tags">
            <span class="country-card__tag">Gorillas</span>
            <span class="country-card__tag">History</span>
            <span class="country-card__tag">Conservation</span>
          </div>
        </div>
      </a>
      
      <a href="#" class="country-card reveal reveal-delay-4">
        <div class="country-card__img">
          <img src="https://images.unsplash.com/photo-1529429617124-95b109e86bb8?w=700&q=80" alt="Ethiopia" loading="lazy" />
          <div class="country-card__flag">🇪🇹</div>
        </div>
        <div class="country-card__body">
          <div class="country-card__tagline">Cradle of Humanity</div>
          <div class="country-card__name">Ethiopia</div>
          <div class="country-card__desc">Lalibela's rock-hewn churches, the Danakil Depression's alien landscape, Simien Mountains trekking, and Addis Ababa's vibrant coffee ceremony culture.</div>
          <div class="country-card__tags">
            <span class="country-card__tag">Ancient Churches</span>
            <span class="country-card__tag">Trekking</span>
            <span class="country-card__tag">Coffee Origin</span>
          </div>
        </div>
      </a>
      
      <a href="#" class="country-card reveal reveal-delay-5">
        <div class="country-card__img">
          <img src="https://images.unsplash.com/photo-1573843981267-be1999ff37cd?w=700&q=80" alt="Zanzibar Tanzania" loading="lazy" />
          <div class="country-card__flag">🇹🇿</div>
        </div>
        <div class="country-card__body">
          <div class="country-card__tagline">Spice Island Paradise</div>
          <div class="country-card__name">Zanzibar</div>
          <div class="country-card__desc">Stone Town's labyrinthine alleys, pristine white-sand beaches, Indian Ocean snorkelling, and a spice heritage that once made this island the world's most coveted prize.</div>
          <div class="country-card__tags">
            <span class="country-card__tag">Beach</span>
            <span class="country-card__tag">Diving</span>
            <span class="country-card__tag">Swahili Culture</span>
          </div>
        </div>
      </a>
    </div>
  </div>
</section>

<!-- TOURS -->
<section class="section section--dark" id="tours">
  <div class="container">
    <div style="display:flex;align-items:flex-end;justify-content:space-between;flex-wrap:wrap;gap:1rem;margin-bottom:2.5rem;">
      <div>
        <span class="section-eyebrow reveal" style="color:var(--gold);">East Africa Tours</span>
        <h2 class="section-title section-title--light reveal reveal-delay-1">Featured <em>Journeys</em></h2>
      </div>
      <a href="<?php echo URLROOT ?>/tours/leisure" class="btn btn-outline reveal reveal-delay-2" style="color:var(--gold-light);border-color:rgba(200,145,58,.5);">All Tours</a>
    </div>
    <div class="region-tours">
      <div class="card reveal">
        <div class="card__img-wrap">
          <img src="https://images.unsplash.com/photo-1516026672322-bc52d61a55d5?w=700&q=80" alt="Serengeti" loading="lazy" />
          <div class="card__badge">Most Popular</div>
        </div>
        <div class="card__body">
          <div class="card__region">East Africa · Tanzania</div>
          <div class="card__title">Great Serengeti Wildlife Safari</div>
          <div class="card__desc">Witness the world's greatest wildlife spectacle — the Great Migration — across the Serengeti's endless golden plains.</div>
          <div class="card__footer">
            <div class="card__price">
              <span class="card__price-from">From</span>
              <span class="card__price-amount">$2,450</span>
            </div>
            <a href="<?php echo URLROOT ?>/tours/leisure" class="btn btn-primary btn-sm">View Tour</a>
          </div>
        </div>
      </div>
      
      <div class="card reveal reveal-delay-1">
        <div class="card__img-wrap">
          <img src="https://images.unsplash.com/photo-1547471080-7cc2caa01a7e?w=700&q=80" alt="Gorilla Trekking" loading="lazy" />
        </div>
        <div class="card__body">
          <div class="card__region">East Africa · Uganda &amp; Rwanda</div>
          <div class="card__title">Gorilla Trekking Experience</div>
          <div class="card__desc">A life-defining hour with mountain gorillas in Bwindi or Volcanoes National Park — Africa's most profound encounter.</div>
          <div class="card__footer">
            <div class="card__price">
              <span class="card__price-from">From</span>
              <span class="card__price-amount">$3,200</span>
            </div>
            <a href="<?php echo URLROOT ?>/tours/leisure" class="btn btn-primary btn-sm">View</a>
          </div>
        </div>
      </div>
      
      <div class="card reveal reveal-delay-2">
        <div class="card__img-wrap">
          <img src="https://images.unsplash.com/photo-1564760055775-d63b17a55c44?w=700&q=80" alt="Ethiopia Lalibela" loading="lazy" />
          <div class="card__badge">Academic</div>
        </div>
        <div class="card__body">
          <div class="card__region">East Africa · Ethiopia</div>
          <div class="card__title">Lalibela &amp; Ancient Ethiopia</div>
          <div class="card__desc">Rock-hewn churches, obelisks of Axum, the Omo Valley tribes, and Lucy — humanity's oldest story, still being written.</div>
          <div class="card__footer">
            <div class="card__price">
              <span class="card__price-from">From</span>
              <span class="card__price-amount">$1,980</span>
            </div>
            <a href="<?php echo URLROOT ?>/tours/academic" class="btn btn-primary btn-sm">View</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- PRACTICAL -->
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
          <div class="practical-card__item">Major hubs: Nairobi (NBO), Dar es Salaam (DAR), Entebbe (EBB), Kigali (KGL), Addis Ababa (ADD)</div>
          <div class="practical-card__item">Ethiopian Airlines, Kenya Airways & RwandAir offer extensive African connectivity</div>
          <div class="practical-card__item">Pier One handles all inter-regional safari transfers and bush flights</div>
        </div>
      </div>
      <div class="practical-card reveal reveal-delay-1">
        <div class="practical-card__title"><span>🌡️</span> Best Time to Visit</div>
        <div class="practical-card__list">
          <div class="practical-card__item">Great Migration peak: Jul – Oct in the Maasai Mara / Serengeti</div>
          <div class="practical-card__item">Gorilla trekking: year-round, best in Jun–Sep & Dec–Feb dry seasons</div>
          <div class="practical-card__item">Kilimanjaro summit: Jan–Feb & Aug–Sep for clearest conditions</div>
        </div>
      </div>
      <div class="practical-card reveal reveal-delay-2">
        <div class="practical-card__title"><span>💉</span> Health &amp; Visas</div>
        <div class="practical-card__list">
          <div class="practical-card__item">Yellow fever certificate required for Uganda and Tanzania entry</div>
          <div class="practical-card__item">Kenya, Rwanda & Ethiopia offer e-visas — Pier One assists with applications</div>
          <div class="practical-card__item">Malaria prophylaxis recommended for all East African destinations</div>
        </div>
      </div>
      <div class="practical-card reveal reveal-delay-3">
        <div class="practical-card__title"><span>🦺</span> Safari Safety</div>
        <div class="practical-card__list">
          <div class="practical-card__item">All Pier One safaris use experienced, licensed local ranger-guides</div>
          <div class="practical-card__item">Comprehensive safari insurance with emergency evacuation cover included</div>
          <div class="practical-card__item">24/7 on-ground support throughout your East African itinerary</div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- CTA -->
<section class="section section--sand" id="contact">
  <div class="container">
    <div class="cta-band reveal">
      <h2 class="cta-band__title">Ready to Experience <em>East Africa</em>?</h2>
      <p class="cta-band__sub">Our East Africa safari specialists are ready to craft your perfect wildlife journey. Contact us for a bespoke itinerary.</p>
      <div class="cta-band__actions">
        <a href="<?php echo URLROOT ?>/tours/leisure" class="btn btn-primary btn-lg">
          Browse East Africa Tours 
          <svg class="arrow-icon" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
          </svg>
        </a>
        <a href="mailto:info@pieronetours.com" class="btn btn-secondary btn-lg">Get a Free Quote</a>
      </div>
    </div>
  </div>
</section>

<?php include '../includes/footer.php'; ?>