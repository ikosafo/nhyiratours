<?php include ('./includes/header.php'); ?>


    <main>
        <!-- Hero area S t a r t-->
        <section class="hero-padding-for-three video-overlay position-relative">
            <!-- Video -->
            <div class="hero-bg-video">
                <video class="hero-slider-video video-cover" 
                    poster="assets/images/hero/hero-three-banner.png" loop autoplay muted>
                    <source src="assets/images/videos/travel2.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </div>
            <div class="container">
                <div class="row align-items-center justify-content-between g-4">
                    <div class="col-xl-12">
                        <div class="hero-caption-three position-relative z-3">
                            <h4 class="title wow fadeInUp" data-wow-delay="0.0s">
                                EXPERIENCE YOU CAN TRUST
                            </h4>
                            <p class="pera wow fadeInUp" data-wow-delay="0.1s">
                                No one knows West Africa better than our team of experienced Africa 
                                travel experts strategically located throughout the region
                            </p>
                        </div>
                        <!-- <div class="hero-footer position-relative z-3 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="all-user">
                                <div class="happy-user">
                                    <img src="assets/images/hero/user-1.jpeg" alt="travello">
                                </div>
                                <div class="happy-user">
                                    <img src="assets/images/hero/user-2.png" alt="travello">
                                </div>
                                <div class="happy-user">
                                    <img src="assets/images/hero/user-3.png" alt="travello">
                                </div>
                                <div class="happy-user">
                                    <img src="assets/images/hero/user-4.jpeg" alt="travello">
                                </div>
                                <div class="happy-user-count">
                                    <p class="user-count">5k+</p>
                                </div>
                                <p class="pera">Happy Customer</p>
                                <span class="wave-emoji">
                                    <img src="assets/images/icon/hand.png" alt="travello">
                                </span>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
        </section>
        <!--/ End-of Hero-->

        <!-- Plan area S t a r t -->
        <section class="plan-area-three">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="plan-section-three plan-shadow">
                            <div class="choose-plan-nav">
                                <!-- Buttons Type Select -->
                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="plan-link active" id="tour-tab" data-bs-toggle="tab" data-bs-target="#tour" type="button" role="tab" aria-controls="tour" aria-selected="true">
                                            <i class="ri-flight-takeoff-fill"></i> Tour
                                        </button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="plan-link" id="book-hotel" data-bs-toggle="tab" data-bs-target="#hotel-tap" type="button" role="tab" aria-controls="hotel-tap" aria-selected="false">
                                            <i class="ri-hotel-bed-line"></i> Hotel
                                        </button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="plan-link" id="book-transport" data-bs-toggle="tab" data-bs-target="#transport-tap" type="button" role="tab" aria-controls="transport-tap" aria-selected="false">
                                            <i class="ri-car-line"></i> Cars Rental
                                        </button>
                                    </li>
                                </ul>
                                <!-- / End-of Buttons -->

                                <!-- Tab Search Contents -->
                                <div class="tab-content" id="tourTab">
                                    <div class="tab-pane fade show active" id="tour" role="tabpanel" aria-labelledby="tour-tab">
                                        <div class="d-flex gap-16 flex-wrap mb-26">
                                            <label class="one-way-label">
                                                <input class="one-way-input" type="radio" name="radio">
                                                <span class="circle"></span>
                                                <span class="radio-text">One Way</span>
                                            </label>
                                            <label class="round-trip-label">
                                                <input class="round-trip-input" type="radio" name="radio">
                                                <span class="circle"></span>
                                                <span class="radio-text">Round Trip</span>
                                            </label>
                                        </div>
                                        <div class="row g-4 justify-content-end">
                                            <div class="col-xl-5 col-lg-12">
                                                <div class="destination-flex">
                                                    <div class="select-dropdown-section">
                                                        <div class="d-flex gap-10 align-items-center">
                                                            <div class="destination-dropdown-two"></div>
                                                        </div>
                                                        <div class="destination-result line-clamp-1">
                                                            Select location...
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-5 col-lg-12">
                                                <div class="destination-flex">
                                                    <div class="dropdown-section">
                                                        <div class="d-flex gap-10 align-items-center">
                                                            <div class="custom-date-three">
                                                                <h4 class="month-title month-result">Select month</h4>
                                                                <div class="year-title year-result">
                                                                    Select date
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="dropdown-section">
                                                        <div class="d-flex gap-10 align-items-center">
                                                            <div class="custom-date-three">
                                                                <h4 class="month-title text-right month-result-two">
                                                                    Select month
                                                                </h4>
                                                                <div class="year-title text-right year-result-two">
                                                                    Select check-out date
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="swap-icon">
                                                        <i class="ri-calendar-2-line"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-2 col-lg-3">
                                                <div class="sign-btn text-right">
                                                    <a href="tour-list.html" class="btn-secondary-lg w-100 text-center">
                                                        <i class="ri-search-line mr-10 font-20"></i> Search Plan
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="hotel-tap" role="tabpanel" aria-labelledby="book-hotel">
                                        <div class="d-flex gap-16 flex-wrap mb-26">
                                            <label class="one-way-label">
                                                <input class="one-way-input" type="radio" name="radio">
                                                <span class="circle"></span>
                                                <span class="radio-text">One Way</span>
                                            </label>
                                            <label class="round-trip-label">
                                                <input class="round-trip-input" type="radio" name="radio">
                                                <span class="circle"></span>
                                                <span class="radio-text">Round Trip</span>
                                            </label>
                                        </div>
                                        <div class="row g-4 justify-content-end">
                                            <div class="col-xl-3 col-lg-12">
                                                <div class="destination-flex">
                                                    <div class="select-dropdown-section">
                                                        <div class="d-flex gap-10 align-items-center">
                                                            <div class="destination-dropdown-two"></div>
                                                        </div>
                                                        <div class="destination-result line-clamp-1">
                                                            Select location...
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-5 col-lg-12">
                                                <div class="destination-flex">
                                                    <div class="dropdown-section">
                                                        <div class="d-flex gap-10 align-items-center">
                                                            <div class="custom-date-three">
                                                                <h4 class="month-title month-result">Select month</h4>
                                                                <div class="year-title year-result">
                                                                    Select check-in date
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="dropdown-section">
                                                        <div class="d-flex gap-10 align-items-center">
                                                            <div class="custom-date-three">
                                                                <h4 class="month-title text-right month-result-two">
                                                                    Select month
                                                                </h4>
                                                                <div class="year-title text-right year-result-two">
                                                                    Select check-out date
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="swap-icon">
                                                        <i class="ri-calendar-2-line"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-2 col-lg-12">
                                                <div class="destination-flex">
                                                    <div class="select-dropdown-section">
                                                        <div class="d-flex gap-10 align-items-center">
                                                            <div class="destination-dropdown-three"></div>
                                                        </div>
                                                        <div class="destination-result-three line-clamp-1">
                                                            Select number of guests...
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-2 col-lg-3">
                                                <div class="sign-btn">
                                                    <a href="tour-list.html" class="btn-secondary-lg w-100 text-center">
                                                        <i class="ri-search-line mr-10 font-20"></i> Search Plan
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="transport-tap" role="tabpanel" aria-labelledby="book-transport">
                                        <div class="d-flex gap-16 flex-wrap mb-26">
                                            <label class="one-way-label">
                                                <input class="one-way-input" type="radio" name="radio">
                                                <span class="circle"></span>
                                                <span class="radio-text">One Way</span>
                                            </label>
                                            <label class="round-trip-label">
                                                <input class="round-trip-input" type="radio" name="radio">
                                                <span class="circle"></span>
                                                <span class="radio-text">Round Trip</span>
                                            </label>
                                        </div>
                                        <div class="row g-4 justify-content-end">
                                            <div class="col-xl-5 col-lg-12">
                                                <div class="destination-flex">
                                                    <div class="select-dropdown-section">
                                                        <div class="d-flex gap-10 align-items-center">
                                                            <div class="destination-dropdown-two"></div>
                                                        </div>
                                                        <div class="destination-result line-clamp-1">
                                                            Select pick-up location...
                                                        </div>
                                                    </div>
                                                    <div class="select-dropdown-section">
                                                        <div class="d-flex gap-10 align-items-center">
                                                            <div class="destination-dropdown-three"></div>
                                                        </div>
                                                        <div class="destination-result-three line-clamp-1">
                                                            Select drop-off location...
                                                        </div>
                                                    </div>
                                                    <div class="swap-icon">
                                                        <i class="ri-arrow-left-right-line"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-5 col-lg-12">
                                                <div class="destination-flex">
                                                    <div class="dropdown-section">
                                                        <div class="d-flex gap-10 align-items-center">
                                                            <div class="custom-date-three">
                                                                <h4 class="month-title month-result">Select month</h4>
                                                                <div class="year-title year-result">
                                                                    Select pick-up date
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="dropdown-section">
                                                        <div class="d-flex gap-10 align-items-center">
                                                            <div class="custom-date-three">
                                                                <h4 class="month-title text-right month-result-two">
                                                                    Select month
                                                                </h4>
                                                                <div class="year-title text-right year-result-two">
                                                                    Select drop-off date
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="swap-icon">
                                                        <i class="ri-calendar-2-line"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-2 col-lg-3">
                                                <div class="sign-btn">
                                                    <a href="tour-list.html" class="btn-secondary-lg w-100 text-center">
                                                        <i class="ri-search-line mr-10 font-20"></i> Search Plan
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- / End-of Search Contents -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--/ End-of Plan-->

        <!-- Packages S t a r t -->
        
        <!--/ End of Packages -->

        <!-- Special area S t a r t -->
        <section class="special-area bottom-padding">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-7 col-lg-7">
                        <div class="section-title mx-430 mx-auto text-center">
                            <span class="highlights fancy-font font-400"></span>
                            <h4 class="title"></h4>
                        </div>
                    </div>
                </div>
                <div class="row g-4">
                    <div class="col-lg-6 col-md-6">
                        <a href="tour-list.html" class="offer-banner imgEffect4 wow fadeInLeft" data-wow-delay="0.0s">
                            <img src="assets/images/gallery/1-discover.jpg" alt="travello">
                            <div class="offer-content">
                                <p class="highlights-text">Experience</p>
                                <h4 class="title">Kenya & Ghana</h4>
                                <p class="pera">Your journey starts here</p>
                                <div class="btn-secondary-sm radius-30"> Booking Now </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <a href="tour-list.html" class="offer-banner imgEffect4 wow fadeInRight" data-wow-delay="0.0s">
                            <img src="assets/images/gallery/2-discover.jpg" alt="travello">
                            <div class="offer-content-two">
                                <h6 class="title">Africa’s Vibrant Spirit</h6>
                                <p class="pera">Immerse yourself in the rich cultures</p>
                                <div class="btn-secondary-sm radius-30"> Explore Now </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <!--/ End-of special-->

        <!-- Trip area S t a r t -->
        
        <!--/ End-of trip-->

        <!-- About Us area S t a r t -->
        
        <!--/ End-of About US-->

        <!-- Feature S t a r t -->
       
        <!--/ End of Feature -->

        <!-- Destination area S t a r t -->
        <section class="destination-area destination-bg-before">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-7 col-lg-7">
                        <div class="section-title text-center mx-464 mx-auto position-relative">
                            <span class="highlights">Destination List</span>
                            <h4 class="title">
                                Top African Destinations For Your Next Trip
                            </h4>
                        </div>
                    </div>
                </div>
                <div class="row g-4">
                    <div class="col-xl-4 col-lg-7 col-md-7">
                        <a href="details-with-gallery.html" class="destination-banner">
                            <img src="assets/images/destination/destination-01.png" alt="travello">
                            <div class="destination-content">
                                <div class="destination-info">
                                    <div class="destination-name">
                                        <p class="pera">Kenya</p>
                                        <div class="location">
                                            <p class="name">35 Hotels</p>
                                            <p class="name">20 Tours</p>
                                        </div>
                                    </div>
                                    <div class="button-section">
                                        <div class="arrow-btn">
                                            <i class="ri-arrow-right-line"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-xl-4 col-lg-7 col-md-7">
                        <a href="details-with-gallery.html" class="destination-banner">
                            <img src="assets/images/destination/sa.png" alt="nhyira" style="height:264px; object-fit:cover;">
                            <div class="destination-content">
                                <div class="destination-info">
                                    <div class="destination-name">
                                        <p class="pera">South Africa</p>
                                        <div class="location">
                                            <p class="name">50 Hotels</p>
                                            <p class="name">25 Tours</p>
                                        </div>
                                    </div>
                                    <div class="button-section">
                                        <div class="arrow-btn">
                                            <i class="ri-arrow-right-line"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-xl-4 col-lg-7 col-md-7">
                        <a href="details-with-gallery.html" class="destination-banner">
                            <img src="assets/images/destination/morocco.png" alt="nhyira" style="height:264px; object-fit:cover;">
                            <div class="destination-content">
                                <div class="destination-info">
                                    <div class="destination-name">
                                        <p class="pera">Morocco</p>
                                        <div class="location">
                                            <p class="name">40 Hotels</p>
                                            <p class="name">15 Tours</p>
                                        </div>
                                    </div>
                                    <div class="button-section">
                                        <div class="arrow-btn">
                                            <i class="ri-arrow-right-line"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-xl-4 col-lg-7 col-md-7">
                        <a href="details-with-gallery.html" class="destination-banner">
                            <img src="assets/images/destination/egypt.png" alt="nhyira" style="height:264px; object-fit:cover;">
                            <div class="destination-content">
                                <div class="destination-info">
                                    <div class="destination-name">
                                        <p class="pera">Egypt</p>
                                        <div class="location">
                                            <p class="name">45 Hotels</p>
                                            <p class="name">30 Tours</p>
                                        </div>
                                    </div>
                                    <div class="button-section">
                                        <div class="arrow-btn">
                                            <i class="ri-arrow-right-line"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-xl-4 col-lg-7 col-md-7">
                        <a href="details-with-gallery.html" class="destination-banner">
                            <img src="assets/images/destination/ghana.png" alt="nhyira" style="height:264px; object-fit:cover;">
                            <div class="destination-content">
                                <div class="destination-info">
                                    <div class="destination-name">
                                        <p class="pera">Ghana</p>
                                        <div class="location">
                                            <p class="name">28 Hotels</p>
                                            <p class="name">12 Tours</p>
                                        </div>
                                    </div>
                                    <div class="button-section">
                                        <div class="arrow-btn">
                                            <i class="ri-arrow-right-line"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-xl-4 col-lg-7 col-md-7">
                        <a href="details-with-gallery.html" class="destination-banner">
                            <img src="assets/images/destination/ethiopia.jpg" alt="nhyira" style="height:264px; object-fit:cover;">
                            <div class="destination-content">
                                <div class="destination-info">
                                    <div class="destination-name">
                                        <p class="pera">Ethiopia</p>
                                        <div class="location">
                                            <p class="name">24 Hotels</p>
                                            <p class="name">15 Tours</p>
                                        </div>
                                    </div>
                                    <div class="button-section">
                                        <div class="arrow-btn">
                                            <i class="ri-arrow-right-line"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    
                </div>
            </div>
            <!-- shape -->
            <div class="shape">
                <img src="assets/images/icon/shape.png" alt="travello">
            </div>
        </section>
        <!--/ End-of Destination -->
        
        <!-- Explore S t a r t -->
        <section class="explore-area section-padding2">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-7 col-lg-7">
                        <div class="section-title text-center mx-430 mx-auto position-relative mb-60">
                            <span class="highlights">Explore The Word</span>
                            <h4 class="title">
                                Our Best Offer Package For You
                            </h4>
                        </div>
                    </div>
                </div>
                <div class="row g-4">
                    <div class="col-xl-5 col-lg-5 col-md-6">
                        <div class="all-explore" id="v-pills-tab-three" role="tablist" aria-orientation="vertical">
                            <div class="explore-btn active" id="pills-explore-one-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-explore-one" role="tab" aria-controls="pills-explore-one"
                                aria-selected="true">
                                <div class="d-flex gap-16 align-items-center">
                                    <!-- <div class="explore-icon">
                                        <img src="assets/images/icon/explore-1.svg" alt="travello">
                                    </div> -->
                                    <h4 class="name">Tours</h4>
                                </div>
                            </div>
                            <div class="explore-btn" id="pills-explore-two-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-explore-two" role="tab" aria-controls="pills-explore-two"
                                aria-selected="true">
                                <div class="d-flex gap-16 align-items-center">
                                    <!-- <div class="explore-icon">
                                        <img src="assets/images/icon/explore-2.svg" alt="travello">
                                    </div> -->
                                    <h4 class="name">Car Rental</h4>
                                </div>
                            </div>
                            <div class="explore-btn" id="pills-explore-three-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-explore-three" role="tab" aria-controls="pills-explore-three"
                                aria-selected="true">
                                <div class="d-flex gap-16 align-items-center">
                                    <!-- <div class="explore-icon">
                                        <img src="assets/images/icon/explore-3.svg" alt="travello">
                                    </div> -->
                                    <h4 class="name">Ticketing</h4>
                                </div>
                            </div>
                            <div class="explore-btn" id="pills-explore-four-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-explore-four" role="tab" aria-controls="pills-explore-four"
                                aria-selected="true">
                                <div class="d-flex gap-16 align-items-center">
                                    <!-- <div class="explore-icon">
                                        <img src="assets/images/icon/explore-4.svg" alt="travello">
                                    </div> -->
                                    <h4 class="name">MICE</h4>
                                </div>
                            </div>
                            <div class="explore-btn" id="pills-explore-five-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-explore-five" role="tab" aria-controls="pills-explore-five"
                                aria-selected="true">
                                <div class="d-flex gap-16 align-items-center">
                                    <!-- <div class="explore-icon">
                                        <img src="assets/images/icon/explore-5.svg" alt="travello">
                                    </div> -->
                                    <h4 class="name">Hotel Reservations</h4>
                                </div>
                            </div>
                            <div class="explore-btn" id="pills-explore-six-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-explore-six" role="tab" aria-controls="pills-explore-six"
                                aria-selected="true">
                                <div class="d-flex gap-16 align-items-center">
                                    <!-- <div class="explore-icon">
                                        <img src="assets/images/icon/explore-1.svg" alt="travello">
                                    </div> -->
                                    <h4 class="name">Visa Assistance</h4>
                                </div>
                            </div>
                            <div class="explore-btn" id="pills-explore-seven-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-explore-seven" role="tab" aria-controls="pills-explore-seven"
                                aria-selected="true">
                                <div class="d-flex gap-16 align-items-center">
                                    <!-- <div class="explore-icon">
                                        <img src="assets/images/icon/explore-2.svg" alt="travello">
                                    </div> -->
                                    <h4 class="name">Protocol Service</h4>
                                </div>
                            </div>
                            <div class="explore-btn" id="pills-explore-eight-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-explore-eight" role="tab" aria-controls="pills-explore-eight"
                                aria-selected="true">
                                <div class="d-flex gap-16 align-items-center">
                                    <!-- <div class="explore-icon">
                                        <img src="assets/images/icon/explore-1.svg" alt="travello">
                                    </div> -->
                                    <h4 class="name">Photography</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-7 col-lg-7 col-md-6">
                        <div class="tab-content" id="v-pills-tabContent-three">
                            <!-- Tours -->
                            <div class="tab-pane fade show active" id="pills-explore-one" role="tabpanel" aria-labelledby="pills-explore-one">
                                <div class="explore-conntent">
                                    <h4 class="title">Tours</h4>
                                    <p class="pera">
                                        Embark on unforgettable journeys across West Africa with our expertly curated tours. From the vibrant markets of Accra to the breathtaking savannas of Kenya, our tours offer immersive experiences that showcase the region’s rich cultures, history, and natural beauty.
                                    </p>
                                    <ul class="expect-list">
                                        <li class="list">
                                            Guided tours led by local experts who share authentic stories and insights.
                                        </li>
                                        <li class="list">
                                            Customizable itineraries to suit your travel style, from adventure to cultural exploration.
                                        </li>
                                    </ul>
                                </div>
                                <div class="explore-banner">
                                    <img src="assets/images/gallery/tours.jpg" alt="West African Tours">
                                </div>
                            </div>
                            <!-- Car Rental -->
                            <div class="tab-pane fade" id="pills-explore-two" role="tabpanel" aria-labelledby="pills-explore-two">
                                <div class="explore-conntent">
                                    <h4 class="title">Car Rental</h4>
                                    <p class="pera">
                                        Explore Africa at your own pace with our reliable car rental services. Whether you need a rugged 4x4 for a safari adventure or a comfortable sedan for city travel, we provide a wide range of vehicles to suit your needs, ensuring flexibility and convenience.
                                    </p>
                                    <ul class="expect-list">
                                        <li class="list">
                                            Access to well-maintained vehicles with options for GPS and driver services.
                                        </li>
                                        <li class="list">
                                            Flexible rental durations and competitive rates for stress-free travel.
                                        </li>
                                    </ul>
                                </div>
                                <div class="explore-banner">
                                    <img src="assets/images/gallery/car-rental.jpg" alt="Car Rental">
                                </div>
                            </div>
                            <!-- Ticketing -->
                            <div class="tab-pane fade" id="pills-explore-three" role="tabpanel" aria-labelledby="pills-explore-three">
                                <div class="explore-conntent">
                                    <h4 class="title">Ticketing</h4>
                                    <p class="pera">
                                        Simplify your travel planning with our seamless ticketing services. We offer competitive fares for domestic and international flights, ensuring you get the best deals to destinations across Africa and beyond, with hassle-free booking processes.
                                    </p>
                                    <ul class="expect-list">
                                        <li class="list">
                                            Access to a wide range of airlines with flexible booking and cancellation policies.
                                        </li>
                                        <li class="list">
                                            Dedicated support to find the most convenient and cost-effective flight options.
                                        </li>
                                    </ul>
                                </div>
                                <div class="explore-banner">
                                    <img src="assets/images/gallery/ticketing.jpg" alt="Flight Ticketing">
                                </div>
                            </div>
                            <!-- MICE -->
                            <div class="tab-pane fade" id="pills-explore-four" role="tabpanel" aria-labelledby="pills-explore-four">
                                <div class="explore-conntent">
                                    <h4 class="title">MICE</h4>
                                    <p class="pera">
                                        Organize successful Meetings, Incentives, Conferences, and Exhibitions (MICE) with our professional event planning services. We handle everything from venue selection to logistics, ensuring your corporate events in Africa are executed flawlessly.
                                    </p>
                                    <ul class="expect-list">
                                        <li class="list">
                                            Tailored event planning with access to top venues across West Africa.
                                        </li>
                                        <li class="list">
                                            Comprehensive support, including catering, AV equipment, and transportation.
                                        </li>
                                    </ul>
                                </div>
                                <div class="explore-banner">
                                    <img src="assets/images/gallery/mice.jpg" alt="MICE Events">
                                </div>
                            </div>
                            <!-- Hotel Reservations -->
                            <div class="tab-pane fade" id="pills-explore-five" role="tabpanel" aria-labelledby="pills-explore-five">
                                <div class="explore-conntent">
                                    <h4 class="title">Hotel Reservations</h4>
                                    <p class="pera">
                                        Find the perfect accommodation for your African adventure with our hotel reservation services. From luxury resorts to budget-friendly lodges, we partner with top hotels to offer comfortable stays tailored to your preferences.
                                    </p>
                                    <ul class="expect-list">
                                        <li class="list">
                                            Exclusive deals with trusted hotels across major African destinations.
                                        </li>
                                        <li class="list">
                                            Personalized recommendations to match your budget and travel needs.
                                        </li>
                                    </ul>
                                </div>
                                <div class="explore-banner">
                                    <img src="assets/images/gallery/hotel-reservations.jpg" alt="Hotel Reservations">
                                </div>
                            </div>
                            <!-- Visa Assistance -->
                            <div class="tab-pane fade" id="pills-explore-six" role="tabpanel" aria-labelledby="pills-explore-six">
                                <div class="explore-conntent">
                                    <h4 class="title">Visa Assistance</h4>
                                    <p class="pera">
                                        Navigate the complexities of international travel with our expert visa assistance services. We guide you through the application process for African countries, ensuring timely approvals and a stress-free experience.
                                    </p>
                                    <ul class="expect-list">
                                        <li class="list">
                                            Step-by-step guidance on visa requirements and application processes.
                                        </li>
                                        <li class="list">
                                            Support for multiple African countries, including Ghana, Nigeria, and Kenya.
                                        </li>
                                    </ul>
                                </div>
                                <div class="explore-banner">
                                    <img src="assets/images/gallery/visa-assistance.jpg" alt="Visa Assistance">
                                </div>
                            </div>
                            <!-- Protocol Service -->
                            <div class="tab-pane fade" id="pills-explore-seven" role="tabpanel" aria-labelledby="pills-explore-seven">
                                <div class="explore-conntent">
                                    <h4 class="title">Protocol Service</h4>
                                    <p class="pera">
                                        Experience VIP treatment with our protocol services, designed for seamless airport transfers and travel logistics. We provide personalized assistance, including fast-track immigration and dedicated support for a smooth journey.
                                    </p>
                                    <ul class="expect-list">
                                        <li class="list">
                                            Priority airport services, including meet-and-greet and baggage handling.
                                        </li>
                                        <li class="list">
                                            Tailored support for high-profile travelers and corporate groups.
                                        </li>
                                    </ul>
                                </div>
                                <div class="explore-banner">
                                    <img src="assets/images/gallery/protocol-service.jpg" alt="Protocol Service">
                                </div>
                            </div>
                            <!-- Photography -->
                            <div class="tab-pane fade" id="pills-explore-eight" role="tabpanel" aria-labelledby="pills-explore-eight">
                                <div class="explore-conntent">
                                    <h4 class="title">Photography</h4>
                                    <p class="pera">
                                        Capture the magic of your African adventure with our professional photography services. Whether it’s a safari, cultural tour, or special event, our skilled photographers ensure your memories are preserved in stunning detail.
                                    </p>
                                    <ul class="expect-list">
                                        <li class="list">
                                            Professional photo sessions tailored to your travel itinerary.
                                        </li>
                                        <li class="list">
                                            High-quality images delivered in digital and print formats.
                                        </li>
                                    </ul>
                                </div>
                                <div class="explore-banner">
                                    <img src="assets/images/gallery/photography.jpg" alt="Photography Services">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--/ End of Explore -->


        <!-- Testimonial S t a r t -->
        <section class="testimonial-area-three position-relative section-bg-before-two top-padding">
            <div class="container">
                <div class="row justify-content-center position-relative">
                    <div class="col-xl-7 col-lg-7">
                        <div class="section-title mx-430 mx-auto text-center">
                            <span class="highlights fancy-font font-400">Testimonial</span>
                            <h4 class="title">
                                What People Have Said About Our Service
                            </h4>
                        </div>
                    </div>
                </div>
                <div class="row g-4 align-items-center">
                    <div class="col-xl-6 col-lg-6 col-md-6">
                        <div class="swiper testimonialThree-active">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide testimonial-card">
                                    <div class="testimonial-header">
                                        <div class="user-img">
                                            <img src="assets/images/testimonial/testimonial-1.jpeg" alt="travello">
                                        </div>
                                        <div class="user-info">
                                            <p class="name">Yaw</p>
                                            <p class="designation">London, UK</p>
                                        </div>
                                    </div>
                                    <div class="rattings">
                                        <i class="ri-star-fill"></i><i class="ri-star-fill"></i><i
                                            class="ri-star-fill"></i><i class="ri-star-fill"></i><i
                                            class="ri-star-fill"></i>
                                    </div>
                                    <div class="testimonial-body">
                                        <p class="pera line-clamp-3">
                                            Lorem ipsum dolor sit amet consectetur. Et amet nulla in
                                            adipiscing. Donec tincidunt dui vel adipiscing sit
                                            turpis neque at cursus. Dignissim scelerisque mattis
                                            ultricies vitae.
                                        </p>
                                    </div>
                                    <div class="testimonial-footer">
                                        <div class="logo">
                                            <img src="assets/images/logo/logo.png" alt="travello" class="changeLogo">
                                        </div>
                                        <p class="date">Jan 20, 2025</p>
                                    </div>
                                </div>
                                <div class="swiper-slide testimonial-card">
                                    <div class="testimonial-header">
                                        <div class="user-img">
                                            <img src="assets/images/testimonial/testimonial-1.jpeg" alt="travello">
                                        </div>
                                        <div class="user-info">
                                            <p class="name">David Malan</p>
                                            <p class="designation">Traveler</p>
                                        </div>
                                    </div>
                                    <div class="rattings">
                                        <i class="ri-star-fill"></i><i class="ri-star-fill"></i><i
                                            class="ri-star-fill"></i><i class="ri-star-fill"></i><i
                                            class="ri-star-fill"></i>
                                    </div>
                                    <div class="testimonial-body">
                                        <p class="pera line-clamp-3">
                                            Lorem ipsum dolor sit amet consectetur. Et amet nulla in
                                            adipiscing. Donec tincidunt dui vel adipiscing sit
                                            turpis neque at cursus. Dignissim scelerisque mattis
                                            ultricies vitae.
                                        </p>
                                    </div>
                                    <div class="testimonial-footer">
                                        <div class="logo">
                                            <img src="assets/images/logo/logo.png" alt="travello" class="changeLogo">
                                        </div>
                                        <p class="date">Jan 20, 2025</p>
                                    </div>
                                </div>
                                <div class="swiper-slide testimonial-card">
                                    <div class="testimonial-header">
                                        <div class="user-img">
                                            <img src="assets/images/testimonial/testimonial-1.jpeg" alt="travello">
                                        </div>
                                        <div class="user-info">
                                            <p class="name">David Malan</p>
                                            <p class="designation">Traveler</p>
                                        </div>
                                    </div>
                                    <div class="rattings">
                                        <i class="ri-star-fill"></i><i class="ri-star-fill"></i><i
                                            class="ri-star-fill"></i><i class="ri-star-fill"></i><i
                                            class="ri-star-fill"></i>
                                    </div>
                                    <div class="testimonial-body">
                                        <p class="pera line-clamp-3">
                                            Lorem ipsum dolor sit amet consectetur. Et amet nulla in
                                            adipiscing. Donec tincidunt dui vel adipiscing sit
                                            turpis neque at cursus. Dignissim scelerisque mattis
                                            ultricies vitae.
                                        </p>
                                    </div>
                                    <div class="testimonial-footer">
                                        <div class="logo">
                                            <img src="assets/images/logo/logo.png" alt="travello" class="changeLogo">
                                        </div>
                                        <p class="date">Jan 20, 2025</p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6">
                        <div class="hero-banner imgEffect2 o-hidden radius-20">
                            <img src="assets/images/hero/testimonial-three-banner.png" alt="travello">
                            <!-- shape 01 -->
                            <div class="shape">
                                <img src="assets/images/icon/feature-shape.png" alt="travello">
                            </div>
                            <a href="https://www.youtube.com/watch?v=Cn4G2lZ_g2I" data-fancybox="video-gallery" class="wow bounceIn" data-wow-delay=".2s">
                                <div class="video-player">
                                    <i class="ri-play-fill"></i>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!-- / End Slider -->
                </div>
            </div>
            <div class="shape-testimonial">
                <img src="assets/images/icon/graphic.png" alt="travello">
            </div>
        </section>
        <!--/ End of Testimonial -->

        <!-- Brand S t a r t -->
        <div class="brand-area">
            <div class="container">
                <div class="swiper brandSwiper-active">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="assets/images/brand/brand-1.jpeg" alt="travello">
                        </div>
                        <div class="swiper-slide">
                            <img src="assets/images/brand/brand-2.jpg" alt="travello">
                        </div>
                        <div class="swiper-slide">
                            <img src="assets/images/brand/brand-3.jpg" alt="travello">
                        </div>
                        <div class="swiper-slide">
                            <img src="assets/images/brand/brand-4.png" alt="travello">
                        </div>
                        <div class="swiper-slide">
                            <img src="assets/images/brand/brand-5.png" alt="travello">
                        </div>
                        <div class="swiper-slide">
                            <img src="assets/images/brand/brand-1.jpeg" alt="travello">
                        </div>
                        <div class="swiper-slide">
                            <img src="assets/images/brand/brand-2.jpg" alt="travello">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/ End of Brand -->

        <section class="news-area section-padding2">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-7 col-lg-7">
                <div class="section-title text-center mx-605 mx-auto position-relative mb-60">
                    <span class="highlights">News & Article</span>
                    <h4 class="title">
                        STORIES, TIPS AND GUIDES
                    </h4>
                </div>
            </div>
        </div>
        <div class="row g-4">
            <div class="col-xl-4 col-lg-4 col-sm-6">
                <article class="news-card-two" onclick="openModal('stevie-wonder')">
                    <figure class="news-banner-two imgEffect">
                        <img src="assets/images/news/news-4.png" alt="Stevie Wonder">
                    </figure>
                    <div class="news-content">
                        <div class="heading">
                            <span class="heading-pera">Blog</span>
                        </div>
                        <h4 class="title">
                            Stevie Wonder Finds a New Home: Musician Receives Ghanaian Citizenship
                        </h4>
                    </div>
                </article>
            </div>
            <div class="col-xl-4 col-lg-4 col-sm-6">
                <article class="news-card-two" onclick="openModal('basilica-yamoussoukro')">
                    <figure class="news-banner-two imgEffect">
                        <img src="assets/images/news/news-5.png" alt="Basilica">
                    </figure>
                    <div class="news-content">
                        <div class="heading">
                            <span class="heading-pera">Blog</span>
                        </div>
                        <h4 class="title">
                            A cultural and religious enthusiast’s guide to Ivory Coast Basilica of Our Lady of Peace
                        </h4>
                    </div>
                </article>
            </div>
            <div class="col-xl-4 col-lg-4 col-sm-6">
                <article class="news-card-two" onclick="openModal('tapestry-ghana')">
                    <figure class="news-banner-two imgEffect">
                        <img src="assets/images/news/news-6.png" alt="Tapestry">
                    </figure>
                    <div class="news-content">
                        <div class="heading">
                            <span class="heading-pera">Blog</span>
                        </div>
                        <h4 class="title">
                            Tapestry experience in Ghana
                        </h4>
                       
                    </div>
                </article>
            </div>
            <div class="col-xl-4 col-lg-4 col-sm-6">
                <article class="news-card-two" onclick="openModal('african-renaissance')">
                    <figure class="news-banner-two imgEffect">
                        <img src="assets/images/news/news-7.png" alt="African Renaissance">
                    </figure>
                    <div class="news-content">
                        <div class="heading">
                            <span class="heading-pera">Blog</span>
                        </div>
                        <h4 class="title">
                            Africa’s Tallest Statue
                        </h4>
                    </div>
                </article>
            </div>
        </div>
        <div class="col-12 text-center">
            <div class="section-button d-inline-block">
                <a href="news.html">
                    <div class="btn-primary-icon-sm">
                        <p class="pera">View All News</p>
                        <i class="ri-arrow-right-up-line"></i>
                    </div>
                </a>
            </div>
        </div>
    </div>

    <!-- Modal Structure -->
    <div id="newsModal" class="modal">
        <div class="modal-content">
            <span class="close-button" onclick="closeModal()">&times;</span>
            <h2 id="modalTitle"></h2>
            <img id="modalImage" src="" alt="Article Image" class="modal-image">
            <p id="modalText"></p>
        </div>
    </div>
</section>

<style>
    /* Modal Styling */
    .modal {
        display: none;
        position: fixed;
        z-index: 1000;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        overflow: auto;
        background-color: rgba(0, 0, 0, 0.5);
        justify-content: center;
        align-items: center;
    }

    .modal-content {
        background-color: #fff;
        margin: 5% auto;
        padding: 20px;
        border-radius: 8px;
        width: 80%;
        max-width: 800px;
        position: relative;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    }

    .close-button {
        position: absolute;
        right: 20px;
        top: 20px;
        font-size: 24px;
        cursor: pointer;
        color: #333;
    }

    .modal-image {
        width: 100%;
        height: auto;
        border-radius: 8px;
        margin-bottom: 20px;
    }

    .modal-content h2 {
        font-size: 24px;
        margin-bottom: 15px;
        color: #333;
    }

    .modal-content p {
        font-size: 16px;
        line-height: 1.6;
        color: #555;
    }

    .news-card-two {
        cursor: pointer;
        transition: transform 0.3s;
    }

    .news-card-two:hover {
        transform: translateY(-5px);
    }
</style>

<script>
    // Articles data
    const articles = {
        'stevie-wonder': {
            title: 'Stevie Wonder Finds a New Home: Musician Receives Ghanaian Citizenship',
            image: 'assets/images/news/news-4.png',
            text: 'Music legend Stevie Wonder’s connection to Ghana goes beyond rhythm and melody. In a heartwarming ceremony on May 13, 2024, coinciding with his 74th birthday, the music legend officially became a Ghanaian citizen, marking a significant chapter in his life and a testament to the enduring passion of a cultural connection. This was not just a legal formality but a celebration of a lifelong affinity for African heritage, rooted in his music and activism.'
        },
        'basilica-yamoussoukro': {
            title: 'A cultural and religious enthusiast’s guide to Ivory Coast Basilica of Our Lady of Peace',
            image: 'assets/images/news/news-5.png',
            text: 'Nestled in the heart of Yamoussoukro, the political capital of Ivory Coast, stands an extraordinary testament to both faith and architecture—the Basilica of Our Lady of Peace. This remarkable structure not only symbolizes unwavering devotion but also serves as a profound reflection of the nation’s rich history and an architectural masterpiece that captivates pilgrims and visitors alike.'
        },
        'tapestry-ghana': {
            title: 'Tapestry experience in Ghana',
            image: 'assets/images/news/news-6.png',
            text: 'Ghana is a country full of wonders, from its bustling cities to its tranquil beaches. For those looking for a truly unique and authentic experience, nothing beats a tapestry experience in Ghana. Tapestry weaving has been practiced in Ghana for centuries and has been passed down from generation to generation. The intricate designs and vibrant colors tell stories of culture, history, and community.'
        },
        'african-renaissance': {
            title: 'Africa’s Tallest Statue',
            image: 'assets/images/news/news-7.png',
            text: 'The Tallest statue in Africa, located in the capital city of Dakar, is the Senegal Renaissance Monument. This towering symbol celebrates African heritage and resilience, standing as a beacon of cultural pride. The monument’s design and grandeur make it a must-visit landmark for anyone exploring Senegal’s vibrant history.'
        }
    };

    // Open modal function
    function openModal(articleId) {
        const article = articles[articleId];
        if (article) {
            document.getElementById('modalTitle').textContent = article.title;
            document.getElementById('modalImage').src = article.image;
            document.getElementById('modalText').textContent = article.text;
            document.getElementById('newsModal').style.display = 'flex';
        }
    }

    // Close modal function
    function closeModal() {
        document.getElementById('newsModal').style.display = 'none';
    }

    // Close modal when clicking outside
    window.onclick = function(event) {
        const modal = document.getElementById('newsModal');
        if (event.target === modal) {
            closeModal();
        }
    }
</script>

        
    </main>

    <!-- Footer S t a r t -->
    <footer>
        <div class="footer-wrapper footer-bg">
            <div class="container">
                <div class="footer-area">
                    <div class="row g-4">
                        <div class="col-xl-3 col-lg-4 col-sm-6">
                            <div class="single-footer-caption">
                                <div class="footer-tittle">
                                    <h4 class="title">Company</h4>
                                    <ul class="listing">
                                        <li class="single-lsit">
                                            <a href="about.html">About Us</a>
                                        </li>
                                        <li class="single-lsit">
                                            <a href="news.html">News</a>
                                        </li>
                                        <li class="single-lsit"><a href="faq.html">Faq</a></li>
                                        <li class="single-lsit">
                                            <a href="contact.html">Contact</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-sm-6">
                            <div class="single-footer-caption">
                                <div class="footer-tittle">
                                    <h4 class="title">Explore</h4>
                                    <ul class="listing">
                                        <li class="single-lsit"><a href="faq.html">Faq</a></li>
                                        <li class="single-lsit">
                                            <a href="tour-list.html">Tour Listings</a>
                                        </li>
                                        <li class="single-lsit">
                                            <a href="destination.html">Destination</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-sm-6">
                            <div class="single-footer-caption">
                                <div class="footer-tittle">
                                    <h4 class="title">Quick Links</h4>
                                    <ul class="listing">
                                        <li class="single-lsit"><a href="index.html">Home</a></li>
                                        <li class="single-lsit">
                                            <a href="about.html">About Us</a>
                                        </li>
                                        <li class="single-lsit">
                                            <a href="contact.html">Contact Us</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-sm-6">
                            <div class="single-footer-caption">
                                <div class="footer-tittle">
                                    <h4 class="title">Contact</h4>
                                    <ul class="listing">
                                        <li class="single-lsit">
                                            <a href="#" class="mb-20 d-block">70/A Floor Divo Tower Melbourne,
                                                Australia</a>
                                        </li>
                                        <li class="single-lsit">
                                            <a href="#">
                                                <div class="d-flex gap-12">
                                                    <i class="ri-phone-line"></i> (00) +888 123456 789
                                                </div>
                                            </a>
                                        </li>
                                        <li class="single-lsit">
                                            <a href="#">
                                                <div class="d-flex gap-12">
                                                    <i class="ri-mail-line"></i> example@gmail.com
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-middle-area">
                    <div class="footer-body">
                        <div class="footer-content">
                            <div class="d-flex flex-column gap-20">
                                <div class="logo">
                                    <img src="assets/images/logo/logo.png" alt="travello" class="changeLogo">
                                </div>
                                <p class="pera">
                                    Travel is a transformative and enriching experience that
                                    allows individuals to explore new destinations, cultures,
                                    and landscapes.
                                </p>
                            </div>
                            <div class="footer-right">
                                <h4 class="title">Subscribe Our Newsletter</h4>
                                <div class="subscribe-wraper">
                                    <input class="footer-search" type="search" name="footer"
                                        placeholder="Enter Your Email">
                                    <button class="subscribe-btn">Subscribe</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="footer-bottom">
                        <ul class="listing">
                            <li class="single-list">
                                <a href="terms-condition.html" class="single">Terms of usa</a>
                            </li>
                            <li class="single-list">
                                <a href="privacy-policy.html" class="single">Privacy and Cookies Statement</a>
                            </li>
                            <li class="single-list">
                                <a href="contact.html" class="single">How the site works</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- footer-bottom area -->
            <div class="footer-bottom-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="d-flex justify-content-between gap-14 flex-wrap">
                                <p class="pera">
                                    © <span class="current-year">2025</span> initTheme. All rights
                                    reserved
                                </p>
                                <p class="pera">Powered by @Travello</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--/ End-of Footer -->

    <!-- Scroll Up  -->
    <div class="progressParent" id="back-top">
        <svg class="backCircle svg-inner" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>
    <!-- Add an search-overlay element -->
    <!-- <div class="search-overlay"></div> -->
    <!-- jquery-->
    <script src="assets/js/jquery-3.7.1.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap-5.3.0.min.js"></script>
    <!-- Plugin -->
    <script src="assets/js/plugin.js"></script>
    <!-- Main js-->
    <script src="assets/js/main.js"></script>
</body>

</html>