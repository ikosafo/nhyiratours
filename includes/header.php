<?php
    $currentUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    include ('./config.php');
?>
<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nhyiraba Travel & Tour Services</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <link href="<?php echo URLROOT ?>assets/img/logos/ntts.png" rel="shortcut icon" type="image/png">
    <link href="<?php echo URLROOT ?>assets/css/theme-1.min.css" rel="stylesheet">
    <link href="<?php echo URLROOT ?>assets/css/theme-2.min.css" rel="stylesheet">
    <link href="<?php echo URLROOT ?>assets/css/theme-3.min.css" rel="stylesheet">
    <link href="<?php echo URLROOT ?>assets/css/preloader.css" rel="stylesheet">
</head>
<!-- /Head -->

<body>

    <div class="preloader" id="preloader">
        <img src="<?php echo URLROOT ?>assets/img/logos/ntts.png" alt="NTTS">
    </div>

    <!-- Preloader -->
    <!-- <div id="preloader">
        <div class="spinner-border text-primary" role="status">
            <span class="visually-hidden">Loading...</span>
        </div>
    </div> -->
    <!-- /Preloader -->

    <!-- Header -->
    <header id="header">

    <!-- Header Topbar -->
    <div class="header-topbar">
        <div class="container">
            <div class="row g-0">
                <div class="col-6 col-xl-7 col-md-8">
                    <div class="d-flex align-items-center">
                        <a href="tel:+233303955227">
                            <i class="hicon hicon-telephone me-1"></i>
                            <span>030-3955227</span>
                        </a>
                        <span class="vr bg-white d-none d-md-inline ms-3 me-3"></span>
                        <a href="mailto:info@nhyiratours.com" class="d-none d-md-inline">
                            <i class="hicon hicon-email-envelope me-1"></i>
                            <span>info@nhyiratours.com</span>
                        </a>
                    </div>
                </div>
                <div class="col-6 col-xl-5 col-md-4">
                    <div class="text-end">
                        <a class="d-inline-flex align-items-center me-3" data-bs-toggle="modal" href="#mdlLanguage">
                            <img src="<?php echo URLROOT ?>assets/img/flags/en.svg" height="14" class="me-1" alt="">
                            <span class="me-1">English</span>
                            <i class="hicon hicon-thin-arrow-down hicon-bold hicon-60"></i>
                        </a>
                        <a class="d-inline-flex align-items-center" data-bs-toggle="modal" href="#mdlCurrency">
                            <span class="me-1">USD</span>
                            <i class="hicon hicon-thin-arrow-down hicon-bold hicon-60"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Header Topbar -->

    <!-- Header Navbar -->
    <div class="header-navbar">
        <nav class="navbar navbar-expand-xl">
            <div class="container">
                <button class="navbar-toggler me-3" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                    <i class="hicon hicon-bold hicon-hamburger-menu"></i>
                </button>
                <a class="navbar-brand" href="/">
                    <img src="<?php echo URLROOT ?>assets/img/logos/ntts.png" style="width: 75px;"
                    srcset="<?php echo URLROOT ?>assets/img/logos/ntts.png 2x" alt="">
                </a>
                <div class="offcanvas offcanvas-navbar offcanvas-start border-end-0" tabindex="-1" id="offcanvasNavbar">
                    <div class="offcanvas-header border-bottom p-4 p-xl-0">
                        <a href="/" class="d-inline-block">
                            <img  src="<?php echo URLROOT ?>assets/img/logos/ntts.png" style="width: 75px;" srcset="./assets/img/logos/menu-logo@2x.png 2x" alt="">
                        </a>
                        <button type="button" class="btn-close shadow-none" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body p-4 p-xl-0">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link <?php echo (str_replace(['http://', 'https://'], '', $currentUrl) == str_replace(['http://', 'https://'], '', URLROOT) || str_replace(['http://', 'https://'], '', $currentUrl) == str_replace(['http://', 'https://'], '', URLROOT . '/')) ? 'active' : ''; ?>" href="/" data-bs-display="static">
                                    <span>Home</span>
                                </a>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle-hover <?php echo (strpos($currentUrl, 'about') !== false) || (strpos($currentUrl, 'whyChoose') !== false) || (strpos($currentUrl, 'missionValues') !== false) ? 'active' : ''; ?>" href="#" data-bs-display="static">
                                    <span>About Us</span>
                                    <i class="hicon hicon-thin-arrow-down hicon-bold dropdown-toggle-icon"></i>
                                </a>
                                <ul class="dropdown-menu slideIn" data-bs-popper="static">
                                    <li>
                                        <a class="dropdown-item <?php echo (strpos($currentUrl, 'about') !== false) ? 'active' : ''; ?>" href="about">Our Story</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item <?php echo (strpos($currentUrl, 'whyChoose') !== false) ? 'active' : ''; ?>" href="whyChoose">Why Choose Us</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item <?php echo (strpos($currentUrl, 'missionValues') !== false) ? 'active' : ''; ?>" href="missionValues">Mission & Values</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link <?php echo (strpos($currentUrl, 'destinations') !== false) ? 'active' : ''; ?>" href="destinations" data-bs-display="static">
                                    <span>Destinations</span>
                                </a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle-hover <?php echo (strpos($currentUrl, 'flightBookings') !== false) || (strpos($currentUrl, 'hotelReservations') !== false) || (strpos($currentUrl, 'travelInsurance') !== false) || (strpos($currentUrl, 'visaAssistance') !== false) ? 'active' : ''; ?>" href="#" data-bs-display="static">
                                    <span>Tours & Packages</span>
                                    <i class="hicon hicon-thin-arrow-down hicon-bold dropdown-toggle-icon"></i>
                                </a>
                                <ul class="dropdown-menu slideIn" data-bs-popper="static">
                                    <li>
                                        <a class="dropdown-item <?php echo (strpos($currentUrl, 'flightBookings') !== false) ? 'active' : ''; ?>" href="flightBookings">Flight Bookings</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item <?php echo (strpos($currentUrl, 'hotelReservations') !== false) ? 'active' : ''; ?>" href="hotelReservations">Hotel Reservations</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item <?php echo (strpos($currentUrl, 'travelInsurance') !== false) ? 'active' : ''; ?>" href="travelInsurance">Travel Insurance</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item <?php echo (strpos($currentUrl, 'visaAssistance') !== false) ? 'active' : ''; ?>" href="visaAssistance">Visa Assistance</a>
                                    </li>
                                </ul>
                            </li>
                            <!-- <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle-hover" href="#" data-bs-display="static">
                                    <span>Resources</span>
                                    <i class="hicon hicon-thin-arrow-down hicon-bold dropdown-toggle-icon"></i>
                                </a>
                                <div class="dropdown-menu slideIn" data-bs-popper="static">
                                    <div class="mega-menu">
                                        <div class="mega-menu-item">
                                            <div class="mega-menu-title">
                                                <span>FAQs</span>
                                            </div>
                                            <ul class="nav flex-column ms-6 ms-xl-0">
                                                <li>
                                                    <a class="dropdown-item" href="#">Booking FAQs</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="#">Cancellation & Refund Policy</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="#">Travel Requirements</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="#">Payment Options</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="mega-menu-item">
                                            <div class="mega-menu-title">
                                                <span>Gallery</span>
                                            </div>
                                            <ul class="nav flex-column ms-6 ms-xl-0">
                                                <li>
                                                    <a class="dropdown-item" href="#">Photo Gallery</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="#">Video Highlights</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="#">Virtual Tours</a>
                                                </li>
                                            </ul>
                                            
                                        </div>
                                    </div>
                                </div>
                            </li> -->
                            <li class="nav-item">
                                <a class="nav-link <?php echo (strpos($currentUrl, 'contact') !== false) ? 'active' : ''; ?>" href="contact" data-bs-display="static">
                                    <span>Contact Us</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="dropdown user-menu ms-xl-auto">
                    <button class="circle-icon circle-icon-link circle-icon-link-hover" data-bs-toggle="dropdown" data-bs-display="static">
                        <i class="hicon hicon-mmb-account"></i>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end animate slideIn" data-bs-popper="static">
                        <li>
                            <a class="dropdown-item" href="#">
                                <i class="hicon hicon-edit me-1"></i>
                                <span>Register</span>
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#">
                                <i class="hicon hicon-aps-lock me-1"></i>
                                <span>Login</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <!-- /Header Navbar -->

    <!-- Language -->
    <div class="modal fade" id="mdlLanguage" tabindex="-1" aria-labelledby="h3Language" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content border-0 shadow-lg">
                <div class="modal-header">
                    <span class="fs-3 modal-title text-body-emphasis fw-medium" id="h3Language">Select language</span>
                    <button type="button" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <ul class="list-unstyled row mb-0">
                        <li class="col-6 col-lg-4">
                            <a href="/?lang=en" class="link-dark link-hover">
                                <span class="d-flex align-items-center pt-2 pb-2">
                                    <img src="<?php echo URLROOT ?>assets/img/flags/en.svg" height="16" alt="">
                                    <span class="ms-2">English</span>
                                </span>
                            </a>
                        </li>
                        <li class="col-6 col-lg-4">
                            <a href="/?lang=en" class="link-dark link-hover">
                                <span class="d-flex align-items-center pt-2 pb-2">
                                    <img src="<?php echo URLROOT ?>assets/img/flags/fr.svg" height="16" alt="">
                                    <span class="ms-2">Français</span>
                                </span>
                            </a>
                        </li>
                        <li class="col-6 col-lg-4">
                            <a href="/?lang=en" class="link-dark link-hover">
                                <span class="d-flex align-items-center pt-2 pb-2">
                                    <img src="<?php echo URLROOT ?>assets/img/flags/es.svg" height="16" alt="">
                                    <span class="ms-2">Español</span>
                                </span>
                            </a>
                        </li>
                        <li class="col-6 col-lg-4">
                            <a href="/?lang=en" class="link-dark link-hover">
                                <span class="d-flex align-items-center pt-2 pb-2">
                                    <img src="<?php echo URLROOT ?>assets/img/flags/de.svg" height="16" alt="">
                                    <span class="ms-2">Deutsch</span>
                                </span>
                            </a>
                        </li>
                        <li class="col-6 col-lg-4">
                            <a href="/?lang=en" class="link-dark link-hover">
                                <span class="d-flex align-items-center pt-2 pb-2">
                                    <img src="<?php echo URLROOT ?>assets/img/flags/it.svg" height="16" alt="">
                                    <span class="ms-2">Italiano</span>
                                </span>
                            </a>
                        </li>
                        <li class="col-6 col-lg-4">
                            <a href="/?lang=en" class="link-dark link-hover">
                                <span class="d-flex align-items-center pt-2 pb-2">
                                    <img src="<?php echo URLROOT ?>assets/img/flags/nl.svg" height="16" alt="">
                                    <span class="ms-2">Nederlands</span>
                                </span>
                            </a>
                        </li>
                        <li class="col-6 col-lg-4">
                            <a href="/?lang=en" class="link-dark link-hover">
                                <span class="d-flex align-items-center pt-2 pb-2">
                                    <img src="<?php echo URLROOT ?>assets/img/flags/pt.svg" height="16" alt="">
                                    <span class="ms-2">Português</span>
                                </span>
                            </a>
                        </li>
                        <li class="col-6 col-lg-4">
                            <a href="/?lang=en" class="link-dark link-hover">
                                <span class="d-flex align-items-center pt-2 pb-2">
                                    <img src="<?php echo URLROOT ?>assets/img/flags/ru.svg" height="16" alt="">
                                    <span class="ms-2">Русский</span>
                                </span>
                            </a>
                        </li>
                        <li class="col-6 col-lg-4">
                            <a href="/?lang=en" class="link-dark link-hover">
                                <span class="d-flex align-items-center pt-2 pb-2">
                                    <img src="<?php echo URLROOT ?>assets/img/flags/cn.svg" height="16" alt="">
                                    <span class="ms-2">日本語</span>
                                </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- /Language -->

    <!-- Currency -->
    <div class="modal fade" id="mdlCurrency" tabindex="-1" aria-labelledby="h3Currency" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content border-0 shadow-lg">
                <div class="modal-header">
                    <span class="fs-3 modal-title text-body-emphasis fw-medium" id="h3Currency">Select currency</span>
                    <button type="button" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <ul class="list-unstyled row mb-0">
                        <li class="col-12 col-lg-6">
                            <a href="/?currency=usd" class="link-dark link-hover">
                                <span class="d-block pt-2 pb-2"><strong>USD</strong> (United States Dollar)</span>
                            </a>
                        </li>
                        <li class="col-12 col-lg-6">
                            <a href="/?currency=eur" class="link-dark link-hover">
                                <span class="d-block pt-2 pb-2"><strong>EUR</strong> (Euro)</span>
                            </a>
                        </li>
                        <li class="col-12 col-lg-6">
                            <a href="/?currency=gbp" class="link-dark link-hover">
                                <span class="d-block pt-2 pb-2"><strong>GBP</strong> (Pound Sterling)</span>
                            </a>
                        </li>
                        <li class="col-12 col-lg-6">
                            <a href="/?currency=aud" class="link-dark link-hover">
                                <span class="d-block pt-2 pb-2"><strong>AUD</strong> (Australian Dollar)</span>
                            </a>
                        </li>
                        <li class="col-12 col-lg-6">
                            <a href="/?currency=nzd" class="link-dark link-hover">
                                <span class="d-block pt-2 pb-2"><strong>NZD</strong> (New Zealand Dollar)</span>
                            </a>
                        </li>
                        <li class="col-12 col-lg-6">
                            <a href="/?currency=cad" class="link-dark link-hover">
                                <span class="d-block pt-2 pb-2"><strong>CAD</strong> (Canadian Dollar)</span>
                            </a>
                        </li>
                        <li class="col-12 col-lg-6">
                            <a href="/?currency=jpy" class="link-dark link-hover">
                                <span class="d-block pt-2 pb-2"><strong>JPY</strong> (Japanese Yen)</span>
                            </a>
                        </li>
                        <li class="col-12 col-lg-6">
                            <a href="/?currency=cny" class="link-dark link-hover">
                                <span class="d-block pt-2 pb-2"><strong>CNY</strong> (Chinese Yuan)</span>
                            </a>
                        </li>
                        <li class="col-12 col-lg-6">
                            <a href="/?currency=vnd" class="link-dark link-hover">
                                <span class="d-block pt-2 pb-2"><strong>VND</strong> (Vietnam Dong)</span>
                            </a>
                        </li>
                        <li class="col-12 col-lg-6">
                            <a href="/?currency=sgd" class="link-dark link-hover">
                                <span class="d-block pt-2 pb-2"><strong>SGD</strong> (Singapore Dollar)</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- /Currency -->

</header>
<!-- /Header -->
