<?php include ('./includes/header.php'); ?>

    <!-- Main -->
    <main>

        <!-- Hero -->
        <section class="hero">
            <h1 class="d-none">Nhyiraba Travel and Tours Services</h1>
            <!-- Carousel -->
            <div id="heroCarousel" class="hero-carousel carousel slide carousel-fade" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <!-- Carousel item -->
                    <div class="hero-item carousel-item active">
                        <div class="hero-bg">
                            <img src="<?php echo URLROOT ?>assets/img/dwl/02.jpg" srcset="<?php echo URLROOT ?>assets/img/dwl/02.jpg 2x" alt="">
                        </div>
                        <div class="hero-caption text-sm-start">
                            <div class="container">
                                <div class="row">
                                    <div class="col-12 col-xxl-6 col-xl-7 col-md-10">
                                        <div class="hero-sub-title">
                                            <span>Explore the World with Unforgettable Journeys</span>
                                        </div>
                                        <h2 class="display-3 hero-title">
                                            Discover unique destinations and tours.
                                        </h2>
                                        <div class="hero-action">
                                            <a href="destinations" class="btn btn-outline-light btn-uppercase mnw-180 me-4">
                                                <span>Explore</span>
                                                <i class="hicon hicon-flights-one-ways"></i>
                                            </a>
                                            <a class="btn-video-play btn-video-play-sm media-glightbox" href="<?php echo URLROOT ?>assets/img/dwl/vid.mp4"><span></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Carousel item -->
                    <!-- Carousel item -->
                    <div class="hero-item carousel-item">
                        <div class="hero-bg">
                            <img src="<?php echo URLROOT ?>assets/img/dwl/01.jpg" srcset="<?php echo URLROOT ?>assets/img/dwl/01.jpg 2x" alt="">
                        </div>
                        <div class="hero-caption text-sm-start">
                            <div class="container">
                                <div class="row">
                                    <div class="col-12 col-xxl-6 col-xl-7 col-md-10">
                                        <div class="hero-sub-title">
                                            <span>Tailor-Made Adventures for Every Traveler</span>
                                        </div>
                                        <h2 class="display-3 hero-title">
                                            Create your custom vacation today!
                                        </h2>
                                        <div class="hero-action">
                                            <a href="destinations" class="btn btn-outline-light btn-uppercase mnw-180 me-4">
                                                <span>Explore</span>
                                                <i class="hicon hicon-flights-one-ways"></i>
                                            </a>
                                            <a class="btn-video-play btn-video-play-sm media-glightbox" href="<?php echo URLROOT ?>assets/img/dwl/vid.mp4"><span></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Carousel item -->
                    <!-- Carousel item -->
                    <div class="hero-item carousel-item">
                        <div class="hero-bg">
                            <img src="<?php echo URLROOT ?>assets/img/dwl/12.jpg" srcset="<?php echo URLROOT ?>assets/img/dwl/12.jpg 2x" alt="">
                        </div>
                        <div class="hero-caption text-sm-start">
                            <div class="container">
                                <div class="row">
                                    <div class="col-12 col-xxl-6 col-xl-7 col-md-10">
                                        <div class="hero-sub-title">
                                            <span>Unbeatable Travel Offers</span>
                                        </div>
                                        <h2 class="display-3 hero-title">
                                            Limited-time discounts on select tours.
                                        </h2>
                                        <div class="hero-action">
                                            <a href="destinations" class="btn btn-outline-light btn-uppercase mnw-180 me-4">
                                                <span>Explore</span>
                                                <i class="hicon hicon-flights-one-ways"></i>
                                            </a>
                                            <a class="btn-video-play btn-video-play-sm media-glightbox" href="<?php echo URLROOT ?>assets/img/dwl/vid.mp4"><span></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Carousel item -->
                </div>
                <div class="carousel-control">
                    <button class="carousel-control-next prev-custom" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-prev next-custom" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
                <div class="carousel-indicators hero-indicators-right">
                    <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
            </div>
            <!-- Carousel -->
            <!-- Check tour -->
            <div class="container">
                <div class="row justify-content-end">
                    <div class="col-12 col-xl-6">
                        <div class="search-tours search-hero search-hero-half">
                            <form class="search-tour-form" method="post">
                                <div class="search-tour-input">
                                    <div class="row g-3 g-xl-2">
                                        <div class="col-12 col-md-6">
                                            <div class="input-icon-group">
                                                <label for="txtKeyword" class="input-icon hicon hicon-flights-pin"></label>
                                                <input id="txtKeyword" type="text" class="form-control shadow-sm" placeholder="Where are you going?">
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <div class="input-icon-group tour-date">
                                                <label class="input-icon hicon hicon-menu-calendar hicon-bold" for="txtCheckDate2"></label>
                                                <input id="txtCheckDate2" type="text" class="form-select shadow-sm" placeholder="Tour date" data-input readonly>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <div class="input-icon-group">
                                                <label class="input-icon hicon hicon-menu-calendar hicon-bold" for="txtCheckDate2"></label>
                                                <select class="form-select dropdown-select shadow-sm" id="selAdults">
                                                    <option selected="">All categories</option>
                                                    <option value="1">Ecotourism &amp; Resort</option>
                                                    <option value="2">Cultural &amp; Foods</option>
                                                    <option value="3">Explorer &amp; Adventure</option>
                                                    <option value="4">Festival &amp; Events</option>
                                                    <option value="5">Museums &amp; Exhibitions</option>
                                                    <option value="6">Hiking &amp; Trekking</option>
                                                    <option value="7">Motor &amp; Bicycles</option>
                                                    <option value="8">Ships &amp; boats</option>
                                                    <option value="9">Family Activities</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <button type="button" class="btn btn-primary btn-uppercase w-100">
                                                <i class="hicon hicon-bold hicon-search-box"></i>
                                                <span>Search</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Check tour -->
        </section>
        <!-- /Hero -->

        <!-- Featured -->
        <section class="pt-5 pb-4">
            <div class="container">
                <ul class="stats-list row g-0">
                    <li class="col-6 col-xl-3">
                        <div class="stats-item">
                            <h3 class="h1 stats-number">+300</h3>
                            <p class="stats-desc">
                                Happy Travelers
                            </p>
                        </div>
                    </li>
                    <li class="col-6 col-xl-3">
                        <div class="stats-item">
                            <h3 class="h1 stats-number">+97%</h3>
                            <p class="stats-desc">
                                Client Satisfaction<br> Rate
                            </p>
                        </div>
                    </li>
                    <li class="col-6 col-xl-3">
                        <div class="stats-item">
                            <h3 class="h1 stats-number">+80%</h3>
                            <p class="stats-desc">
                                Repeat Customers
                            </p>
                        </div>
                    </li>
                    <li class="col-6 col-xl-3">
                        <div class="stats-item">
                            <h3 class="h1 stats-number">+10</h3>
                            <p class="stats-desc">
                                Years of Experience in Tour Operations
                            </p>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
        <!-- /Featured -->

        <!-- About -->
        <section class="p-top-90 p-bottom-90 bg-gray-gradient">
            <div class="container">
                <div class="row g-0">
                    <div class="col-12 col-xl-6 order-1 order-xl-0">
                        <!-- Image -->
                        <div class="pe-xl-5">
                            <div class="image-info image-info-right image-info-vertical">
                                <div class="image-center">
                                    <img src="<?php echo URLROOT ?>assets/img/dwl/06.jpg" srcset="<?php echo URLROOT ?>assets/img/dwl/06.jpg 2x" style="height: 450px;" class="rounded w-100" alt="">
                                </div>
                                <div class="info-top-right">
                                    <div class="vertical-award rounded shadow-sm">
                                        <div class="award-content">
                                            <img src="<?php echo URLROOT ?>assets/img/logos/ntts.png" srcset="<?php echo URLROOT ?>assets/img/logos/ntts.png 2x" class="w-100" alt="">
                                        </div>
                                        <div class="award-footer">
                                            <small>Nhyiraba Tours</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Image -->
                    </div>
                    <div class="col-12 col-xl-6 order-0 order-xl-1">
                        <!-- Content -->
                        <div class="mb-5 mb-xl-0">
                            <div class="block-title">
                                <small class="sub-title">About us</small>
                                <h2 class="h1 title">Nhyiraba Travel & Tour Services</h2>
                            </div>
                            <p>
                                At Nhyiraba Travel & Tour Services, we don't just plan trips—we create unforgettable journeys 
                                that ignite curiosity, foster inspiration, and create lasting connections. With over a decade 
                                of expertise, we've curated more than 350 exceptional tours, thoughtfully designed for adventurers, 
                                explorers, culture seekers, and those pursuing educational and employment opportunities abroad. 
                                <!-- Our passionate team of experienced guides ensures each journey is more than a destination—it's a 
                                meaningful experience. Whether you're in search of adventure, cultural discovery, or new horizons, 
                                Nhyiraba Travel & Tour Services invites you to explore the world with us and make every trip a 
                                lasting memory. -->
                            </p>
                            <ul class="strength-list row g-0 pt-2">
                                <li class="col-12 col-md-6">
                                    <div class="strength-item">
                                        <span class="strength-icon">
                                            <i class="hicon hicon-150 hicon-confirmation-instant"></i>
                                        </span>
                                        <strong class="strength-title">Unmatched Travel Experiences</strong>
                                    </div>
                                </li>
                                <li class="col-12 col-md-6">
                                    <div class="strength-item">
                                        <span class="strength-icon">
                                            <i class="hicon hicon-150 hicon-menu-price-display"></i>
                                        </span>
                                        <strong class="strength-title">Affordable & Competitive Pricing</strong>
                                    </div>
                                </li>
                                <li class="col-12 col-md-6">
                                    <div class="strength-item">
                                        <span class="strength-icon">
                                            <i class="hicon hicon-150 hicon-pay-on-checkin"></i>
                                        </span>
                                        <strong class="strength-title">Tailor-Made Itineraries</strong>
                                    </div>
                                </li>
                                <li class="col-12 col-md-6">
                                    <div class="strength-item">
                                        <span class="strength-icon">
                                            <i class="hicon hicon-150 hicon-agoda-price-guarante"></i>
                                        </span>
                                        <strong class="strength-title">Expert Local Guides</strong>
                                    </div>
                                </li>
                            </ul>
                            <div class="pt-3">
                                <a href="about" class="btn btn-primary btn-uppercase mnw-180">
                                    <span>Read more</span>
                                    <i class="hicon hicon-flights-one-ways"></i>
                                </a>
                            </div>
                        </div>
                        <!-- /Content -->
                    </div>
                </div>
            </div>
        </section>
        <!-- /About -->

        <!-- Destintions -->
        <section class="p-top-90 p-bottom-90 bg-gray-gradient">
            <div class="container">
                <div class="destination-slider splide__pagination__start splide">
                    <!-- Title -->
                    <div class="d-xl-flex align-items-xl-center mb-3">
                        <div class="block-title me-auto">
                            <small class="sub-title">Many tourists visit</small>
                            <h2 class="h1 title">Top destinations</h2>
                        </div>
                        <div class="d-lg-flex align-items-lg mt-3">
                            <div class="extra-info me-5">
                                <strong>+25</strong>
                                <span>Attractive destinations</span>
                            </div>
                            <div class="splide__arrows splide__arrows__right">
                                <button class="splide__arrow splide__arrow--prev me-2">
                                    <i class="hicon hicon-edge-arrow-left"></i>
                                </button>
                                <button class="splide__arrow splide__arrow--next">
                                    <i class="hicon hicon-edge-arrow-right"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <!-- T/itle -->
                    <!-- Destinations -->
                    <div class="splide__track pt-2">
                        <ul class="splide__list">
                            <li class="splide__slide">
                                <a href="<?php echo URLROOT ?>assets/img/dwl/netherlands.jpg" class="destination bottom-overlay hover-effect rounded glightbox"  data-glightbox="title:SCHENGEN" data-gallery="tour-photos">
                                    <figure class="image-hover image-hover-overlay">
                                        <img src="<?php echo URLROOT ?>assets/img/dwl/netherlands.jpg" style="height:395px" srcset="<?php echo URLROOT ?>assets/img/dwl/netherlands.jpg 2x" alt="">
                                        <i class="hicon hicon-plus-thin image-hover-icon"></i>
                                    </figure>
                                    <div class="bottom-overlay-content">
                                        <div class="destination-content">
                                            <div class="destination-info">
                                                <h3 class="destination-title">SCHENGEN</h3>
                                            </div>
                                            <span class="circle-icon circle-icon-link">
                                                <i class="hicon hicon-flights-pin"></i>
                                            </span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="splide__slide">
                                <a href="<?php echo URLROOT ?>assets/img/dwl/canada.jpg" class="destination bottom-overlay hover-effect rounded glightbox" data-glightbox="title:CANADA" data-gallery="tour-photos">
                                    <figure class="image-hover image-hover-overlay">
                                        <img src="<?php echo URLROOT ?>assets/img/dwl/canada.jpg" style="height:395px" srcset="<?php echo URLROOT ?>assets/img/dwl/canada.jpg 2x" alt="">
                                        <i class="hicon hicon-plus-thin image-hover-icon"></i>
                                    </figure>
                                    <div class="bottom-overlay-content">
                                        <div class="destination-content">
                                            <div class="destination-info">
                                                <h3 class="destination-title">CANADA</h3>
                                            </div>
                                            <span class="circle-icon circle-icon-link">
                                                <i class="hicon hicon-flights-pin"></i>
                                            </span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="splide__slide">
                                <a href="<?php echo URLROOT ?>assets/img/dwl/usa.jpg" class="destination bottom-overlay hover-effect rounded glightbox" data-glightbox="title:USA" data-gallery="tour-photos">
                                    <figure class="image-hover image-hover-overlay">
                                        <img src="<?php echo URLROOT ?>assets/img/dwl/usa.jpg" style="height:395px" srcset="<?php echo URLROOT ?>assets/img/dwl/usa.jpg 2x" alt="">
                                        <i class="hicon hicon-plus-thin image-hover-icon"></i>
                                    </figure>
                                    <div class="bottom-overlay-content">
                                        <div class="destination-content">
                                            <div class="destination-info">
                                                <h3 class="destination-title">USA</h3>
                                            </div>
                                            <span class="circle-icon circle-icon-link">
                                                <i class="hicon hicon-flights-pin"></i>
                                            </span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="splide__slide">
                                <a href="<?php echo URLROOT ?>assets/img/dwl/china.jpg" class="destination bottom-overlay hover-effect rounded glightbox" data-glightbox="title:CHINA" data-gallery="tour-photos">
                                    <figure class="image-hover image-hover-overlay">
                                        <img src="<?php echo URLROOT ?>assets/img/dwl/china.jpg" style="height:395px" srcset="<?php echo URLROOT ?>assets/img/dwl/china.jpg 2x" alt="">
                                        <i class="hicon hicon-plus-thin image-hover-icon"></i>
                                    </figure>
                                    <div class="bottom-overlay-content">
                                        <div class="destination-content">
                                            <div class="destination-info">
                                                <h3 class="destination-title">CHINA</h3>
                                            </div>
                                            <span class="circle-icon circle-icon-link">
                                                <i class="hicon hicon-flights-pin"></i>
                                            </span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="splide__slide">
                                <a href="<?php echo URLROOT ?>assets/img/dwl/uk.jpg" class="destination bottom-overlay hover-effect rounded glightbox" data-glightbox="title:UK" data-gallery="tour-photos">
                                    <figure class="image-hover image-hover-overlay">
                                        <img src="<?php echo URLROOT ?>assets/img/dwl/uk.jpg" style="height:395px" srcset="<?php echo URLROOT ?>assets/img/dwl/uk.jpg 2x" alt="">
                                        <i class="hicon hicon-plus-thin image-hover-icon"></i>
                                    </figure>
                                    <div class="bottom-overlay-content">
                                        <div class="destination-content">
                                            <div class="destination-info">
                                                <h3 class="destination-title">UK</h3>
                                            </div>
                                            <span class="circle-icon circle-icon-link">
                                                <i class="hicon hicon-flights-pin"></i>
                                            </span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="splide__slide">
                                <a href="<?php echo URLROOT ?>assets/img/dwl/australia.jpg" class="destination bottom-overlay hover-effect rounded glightbox" data-glightbox="title:AUSTRALIA" data-gallery="tour-photos">
                                    <figure class="image-hover image-hover-overlay">
                                        <img src="<?php echo URLROOT ?>assets/img/dwl/australia.jpg" style="height:395px" srcset="<?php echo URLROOT ?>assets/img/dwl/australia.jpg 2x" alt="">
                                        <i class="hicon hicon-plus-thin image-hover-icon"></i>
                                    </figure>
                                    <div class="bottom-overlay-content">
                                        <div class="destination-content">
                                            <div class="destination-info">
                                                <h3 class="destination-title">AUSTRALIA</h3>
                                            </div>
                                            <span class="circle-icon circle-icon-link">
                                                <i class="hicon hicon-flights-pin"></i>
                                            </span>
                                        </div>
                                    </div>
                                </a>
                            </li>

                        </ul>
                    </div>
                    <!-- /Destinations -->
                </div>
                <p class="fw-normal text-secondary text-md-end mb-0 pt-4 mt-5 mt-md-0">
                    <a href="destinations" class="fw-medium">
                        <span>View all destinations</span>
                        <i class="hicon hicon-flights-one-ways"></i>
                    </a>
                </p>
            </div>
        </section>
        <!-- /Destintions -->

        <!-- Why -->
        <?php include ('includes/whyChoose.php'); ?>
        <!-- /Why -->


        <!-- Videos-->
        <?php include ('includes/video.php'); ?>
        <!-- /Videos -->

        <!-- Categories -->
        <section class="p-top-90 p-bottom-90 bg-gray-gradient">
            <div class="container">
                <!-- Title -->
                <div class="d-xl-flex align-items-xl-center pb-4">
                    <div class="block-title me-auto">
                        <small class="sub-title">Tour categories</small>
                        <h2 class="h1 title">Adventure types</h2>
                    </div>
                    <div class="fw-normal text-secondary mt-3">
                        <a href="#"><abbr title="Go to contact page" class="fw-semibold">Get help</abbr></a> now!
                    </div>
                </div>
                <!-- /Title -->
                <!-- Category list -->
                <div class="row g-3">
                    <div class="col-12 col-xxl-3 col-xl-4 col-md-6">
                        <a class="mini-card card-hover hover-effect shadow-sm rounded">
                            <span class="card-icon">
                                <i class="hicon hicon-regular-valley"></i>
                            </span>
                            <div class="card-content">
                                <h3 class="h5 card-title">VISA Application</h3>
                            </div>
                        </a>
                    </div>
                    <div class="col-12 col-xxl-3 col-xl-4 col-md-6">
                        <a class="mini-card card-hover hover-effect shadow-sm rounded">
                            <div class="d-flex align-items-center">
                                <span class="card-icon">
                                    <i class="hicon hicon-regular-meal"></i>
                                </span>
                                <div class="card-content">
                                    <h3 class="h5 card-title">Scholarship Abroad</h3>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-12 col-xxl-3 col-xl-4 col-md-6">
                        <a class="mini-card card-hover hover-effect shadow-sm rounded">
                            <div class="d-flex align-items-center">
                                <span class="card-icon">
                                    <i class="hicon hicon-culture"></i>
                                </span>
                                <div class="card-content">
                                    <h3 class="h5 card-title">Work Abroad & Tourism</h3>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-12 col-xxl-3 col-xl-4 col-md-6">
                        <a class="mini-card card-hover hover-effect shadow-sm rounded">
                            <div class="d-flex align-items-center">
                                <span class="card-icon">
                                    <i class="hicon hicon-mountain-view"></i>
                                </span>
                                <div class="card-content">
                                    <h3 class="h5 card-title">Flight Booking</h3>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-12 col-xxl-3 col-xl-4 col-md-6">
                        <a class="mini-card card-hover hover-effect shadow-sm rounded">
                            <div class="d-flex align-items-center">
                                <span class="card-icon">
                                    <i class="hicon hicon-china-only"></i>
                                </span>
                                <div class="card-content">
                                    <h3 class="h5 card-title">Hotel Reservation</h3>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-12 col-xxl-3 col-xl-4 col-md-6">
                        <a class="mini-card card-hover hover-effect shadow-sm rounded">
                            <div class="d-flex align-items-center">
                                <span class="card-icon">
                                    <i class="hicon hicon-regular-mountain-view"></i>
                                </span>
                                <div class="card-content">
                                    <h3 class="h5 card-title">COVID-19 Testing</h3>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-12 col-xxl-3 col-xl-4 col-md-6">
                        <a class="mini-card card-hover hover-effect shadow-sm rounded">
                            <div class="d-flex align-items-center">
                                <span class="card-icon">
                                    <i class="hicon hicon-regular-hiking"></i>
                                </span>
                                <div class="card-content">
                                    <h3 class="h5 card-title">General Traveling Consultation</h3>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <!-- /Category list -->
            </div>
        </section>
        <!-- /Categories -->

        <!-- Booking -->
        <?php include ('includes/booking.php'); ?>
        <!-- /Booking -->

        <!-- Testimonials -->
        <?php include ('includes/testimonials.php') ?>
        <!-- /testimonials -->

    </main>
    <!-- /Main -->

<?php include ('./includes/footer.php'); ?>