<!DOCTYPE html>
<html lang="zxx" dir="ltr">

<head>
    <script>
        const setTheme = (theme) => {
            theme ??= localStorage.theme || "light";
            document.documentElement.dataset.theme = theme;
            localStorage.theme = theme;
        };
        setTheme();
    </script>
    <meta logo="assets/images/logo/pierone.png">
    <meta white-logo="assets/images/logo/logo-white.png">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Travello - Multipurpose travel and tour booking.These template is suitable for  travel agency , tour, travel website , tour operator , tourism , booking  trip or adventure website. ">
    <meta name="keywords" content="travel, trip booking,tour, hotel, tour guide, tourism, blog, flight, travel agency, tourism agency, accommodation, tour website">
    <meta name="author" content="inittheme">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Multipurpose travel and tour booking">
    <meta property="og:site_name" content="Travello">
    <meta property="og:url" content="https://inittheme.com">
    <meta property="og:image" content="https://inittheme.com/images/selfie.jpg">
    <meta property="og:description" content="Multipurpose travel and tour booking, multipurpose template">
    <meta name="twitter:title" content="Multipurpose travel and tour booking">
    <meta name="twitter:description" content="Multipurpose travel and tour booking, multipurpose template">
    <meta name="twitter:image" content="https://twitter.com/inittheme/photo">
    <meta name="twitter:card" content="summary">
    <!-- Google site verification -->
    <meta name="google-site-verification" content="...">
    <meta name="facebook-domain-verification" content="...">
    <meta name="csrf-token" content="...">
    <meta name="currency" content="$">
    <!-- Title -->
    <title>Multipurpose travel and tour booking</title>
    <link rel="icon" type="image/x-icon" sizes="20x20" href="assets/images/logo/pierone.png">
    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap-5.3.0.min.css">
    <!-- Fonts & icon -->
    <link rel="stylesheet" type="text/css" href="assets/css/remixicon.css">
    <link rel="stylesheet" type="text/css" href="assets/css/fonts-icon.css">
    <!-- Plugin -->
    <link rel="stylesheet" type="text/css" href="assets/css/plugin.css">
    <!-- Main CSS -->
    <link rel="stylesheet" type="text/css" href="assets/css/main-style.css">
    <!-- RTL CSS::When Need RTL Uncomments File -->
    <!-- <link rel="stylesheet" type="text/css" href="assets/css/rtl.css"> -->


    <style>
       /* Override styles for the header-top to make it thinner, full-width, blue background with white text, and remove bottom line */
        .header-top {
            background-color: #0a3e59; /* Blue background */
            color: #ffffff; /* White text */
            padding: 5px 0; /* Further reduced padding for thinner appearance */
            width: 100%; /* Full width */
            margin: 0; /* Remove margins */
            border-bottom: none; /* Remove any bottom border */
            box-shadow: none; /* Remove any shadow */
        }

        /* Ensure the container inside header-top is full-width */
        .header-top .container-fluid {
            width: 100%;
            max-width: none;
            padding-left: 15px;
            padding-right: 15px;
        }

        /* Adjust text styles for contact items */
        .top-menu-wrapper .contact-item .info p.pera,
        .top-menu-wrapper .contact-item .info h4.title,
        .top-menu-wrapper .contact-item .info h4.title a {
            color: #ffffff; /* White text for contact info */
            font-size: 13px; /* Smaller font size for thinner appearance */
            margin: 0; /* Remove extra margins */
        }

        /* Adjust spacing between icon and text */
        .top-menu-wrapper .contact-item {
            display: flex;
            align-items: center;
            gap: 12px; /* Increased space between icon and text */
        }

        /* Adjust social icons color */
        .top-menu-wrapper .social-icons .social-icon i {
            color: #ffffff; /* White icons */
        }

        /* Adjust button styles */
        .top-menu-wrapper .sign-btn a.btn-secondary-sm {
            background-color: #ffffff; /* White background for buttons */
            color: #007bff; /* Blue text for buttons */
            font-size: 13px; /* Smaller font size */
            padding: 4px 12px; /* Reduced padding for smaller buttons */
        }

        /* Adjust icon circles */
        .top-menu-wrapper .contact-item .circle-primary-sm {
            background-color: rgba(255, 255, 255, 0.2); /* Slightly transparent white for contrast */
        }

        .top-menu-wrapper .contact-item .circle-primary-sm i {
            color: #ffffff; /* White icons */
        }

        /* Ensure flex layout is compact */
        .top-menu-wrapper {
            gap: 8px; /* Further reduced gap for compact layout */
        }

        /* Responsive adjustments for smaller screens */
        @media (max-width: 768px) {
            .top-menu-wrapper {
                flex-direction: column; /* Stack items vertically on mobile */
                align-items: flex-start;
            }
            .top-header-left, .top-header-right {
                width: 100%; /* Full width for mobile */
            }
        }

        .header-area-three .top-menu-wrapper {
            padding-top: 5px !important;
            padding-bottom: 4px !important;
            border-bottom: 0 !important;
            position: relative;
        }
    </style>
</head>

<body>
    <header class="header-area-three">
        <div class="main-header">
            <!-- Top Bar -->
            <div class="header-top">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="top-menu-wrapper d-flex align-items-center justify-content-between">
                                <div class="top-header-left">
                                    <div class="contact-section d-flex align-items-center gap-20">
                                        <div class="contact-item d-flex align-items-center">
                                            <div class="circle-primary-sm">
                                                <i class="ri-phone-line"></i>
                                            </div>
                                            <div class="info">
                                                <p class="pera">Call Anytime</p>
                                                <h4 class="title">
                                                    <a href="tel:+1234567890">030-3955227</a>
                                                </h4>
                                            </div>
                                        </div>
                                        <div class="contact-item d-flex align-items-center">
                                            <div class="circle-primary-sm">
                                                <i class="ri-mail-line"></i>
                                            </div>
                                            <div class="info">
                                                <p class="pera">Email Us</p>
                                                <h4 class="title">
                                                    <a href="mailto:info@pieronetours.com">info@pieronetours.com</a>
                                                </h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="top-header-right d-flex align-items-center gap-20">
                                    <div class="social-icons">
                                        <a href="https://facebook.com" target="_blank" class="social-icon">
                                            <i class="ri-facebook-fill"></i>
                                        </a>
                                        <a href="https://twitter.com" target="_blank" class="social-icon">
                                            <i class="ri-twitter-fill"></i>
                                        </a>
                                        <a href="https://instagram.com" target="_blank" class="social-icon">
                                            <i class="ri-instagram-line"></i>
                                        </a>
                                    </div>
                                    <div class="sign-btn">
                                        <a href="login.html" class="btn-secondary-sm radius-30">Login</a>
                                    </div>
                                    <div class="sign-btn">
                                        <a href="register.html" class="btn-secondary-sm radius-30">Register</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Header Bottom -->
            <div class="header-bottom header-sticky">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="menu-wrapper d-flex align-items-center justify-content-between">
                                <!-- Logo -->
                                <div class="logo">
                                    <a href="/"><img src="assets/images/logo/pierone.png" alt="logo" style="width:100px;height:100px" class="changeLogo"></a>
                                </div>
                                <!-- Main-menu for desktop -->
                                <div class="main-menu d-none d-lg-block">
                                    <nav>
                                        <div class="d-flex align-items-center">
                                            <ul class="listing" id="navigation">
                                                <li class="single-list">
                                                    <a href="javascript:void(0)" class="single link-active">Home</a>
                                                </li>
                                                <li class="single-list">
                                                    <a href="javascript:void(0)" class="single">
                                                        African <br> Destinations <i class="ri-arrow-down-s-line"></i>
                                                    </a>
                                                    <ul class="submenu">
                                                        <li class="single-list">
                                                            <a href="#" class="single">West Africa<i class="ri-arrow-right-s-line"></i></a>
                                                            <ul class="submenu">
                                                                <li class="single-list"><a href="/destinations/benin/" class="single">Benin</a></li>
                                                                <li class="single-list"><a href="/destinations/burkina-faso/" class="single">Burkina Faso</a></li>
                                                                <li class="single-list"><a href="/destinations/cape-verde/" class="single">Cape Verde</a></li>
                                                                <li class="single-list"><a href="/destinations/cote-divoire/" class="single">Côte d'Ivoire</a></li>
                                                                <li class="single-list"><a href="/destinations/ghana/" class="single">Ghana</a></li>
                                                                <li class="single-list"><a href="/destinations/guinea/" class="single">Guinea</a></li>
                                                                <li class="single-list"><a href="/destinations/guinea-bissau/" class="single">Guinea-Bissau</a></li>
                                                                <li class="single-list"><a href="/destinations/liberia/" class="single">Liberia</a></li>
                                                                <li class="single-list"><a href="/destinations/mali/" class="single">Mali</a></li>
                                                                <li class="single-list"><a href="/destinations/mauritania/" class="single">Mauritania</a></li>
                                                                <li class="single-list"><a href="/destinations/niger/" class="single">Niger</a></li>
                                                                <li class="single-list"><a href="/destinations/nigeria/" class="single">Nigeria</a></li>
                                                                <li class="single-list"><a href="/destinations/senegal/" class="single">Senegal</a></li>
                                                                <li class="single-list"><a href="/destinations/sierra-leone/" class="single">Sierra Leone</a></li>
                                                                <li class="single-list"><a href="/destinations/gambia/" class="single">The Gambia</a></li>
                                                                <li class="single-list"><a href="/destinations/togo/" class="single">Togo</a></li>
                                                            </ul>
                                                        </li>
                                                        <li class="single-list">
                                                            <a href="#" class="single">Central Africa<i class="ri-arrow-right-s-line"></i></a>
                                                            <ul class="submenu">
                                                                <li class="single-list"><a href="/destinations/angola/" class="single">Angola</a></li>
                                                                <li class="single-list"><a href="/destinations/cameroon/" class="single">Cameroon</a></li>
                                                                <li class="single-list"><a href="/destinations/central-african-republic/" class="single">Central African Republic</a></li>
                                                                <li class="single-list"><a href="/destinations/chad/" class="single">Chad</a></li>
                                                                <li class="single-list"><a href="/destinations/congo-democratic-republic/" class="single">Democratic Republic of the Congo</a></li>
                                                                <li class="single-list"><a href="/destinations/congo-republic/" class="single">Republic of the Congo</a></li>
                                                                <li class="single-list"><a href="/destinations/equatorial-guinea/" class="single">Equatorial Guinea</a></li>
                                                                <li class="single-list"><a href="/destinations/gabon/" class="single">Gabon</a></li>
                                                                <li class="single-list"><a href="/destinations/sao-tome-principe/" class="single">São Tomé and Príncipe</a></li>
                                                            </ul>
                                                        </li>
                                                        <li class="single-list">
                                                            <a href="#" class="single">East Africa<i class="ri-arrow-right-s-line"></i></a>
                                                            <ul class="submenu">
                                                                <li class="single-list"><a href="/destinations/burundi/" class="single">Burundi</a></li>
                                                                <li class="single-list"><a href="/destinations/comoros/" class="single">Comoros</a></li>
                                                                <li class="single-list"><a href="/destinations/djibouti/" class="single">Djibouti</a></li>
                                                                <li class="single-list"><a href="/destinations/eritrea/" class="single">Eritrea</a></li>
                                                                <li class="single-list"><a href="/destinations/ethiopia/" class="single">Ethiopia</a></li>
                                                                <li class="single-list"><a href="/destinations/kenya/" class="single">Kenya</a></li>
                                                                <li class="single-list"><a href="/destinations/madagascar/" class="single">Madagascar</a></li>
                                                                <li class="single-list"><a href="/destinations/malawi/" class="single">Malawi</a></li>
                                                                <li class="single-list"><a href="/destinations/mauritius/" class="single">Mauritius</a></li>
                                                                <li class="single-list"><a href="/destinations/mozambique/" class="single">Mozambique</a></li>
                                                                <li class="single-list"><a href="/destinations/rwanda/" class="single">Rwanda</a></li>
                                                                <li class="single-list"><a href="/destinations/seychelles/" class="single">Seychelles</a></li>
                                                                <li class="single-list"><a href="/destinations/somalia/" class="single">Somalia</a></li>
                                                                <li class="single-list"><a href="/destinations/south-sudan/" class="single">South Sudan</a></li>
                                                                <li class="single-list"><a href="/destinations/tanzania/" class="single">Tanzania</a></li>
                                                                <li class="single-list"><a href="/destinations/uganda/" class="single">Uganda</a></li>
                                                                <li class="single-list"><a href="/destinations/zambia/" class="single">Zambia</a></li>
                                                                <li class="single-list"><a href="/destinations/zimbabwe/" class="single">Zimbabwe</a></li>
                                                            </ul>
                                                        </li>
                                                        <li class="single-list">
                                                            <a href="#" class="single">Indian Ocean Islands<i class="ri-arrow-right-s-line"></i></a>
                                                            <ul class="submenu">
                                                                <li class="single-list"><a href="/destinations/comoros/" class="single">Comoros</a></li>
                                                                <li class="single-list"><a href="/destinations/madagascar/" class="single">Madagascar</a></li>
                                                                <li class="single-list"><a href="/destinations/mauritius/" class="single">Mauritius</a></li>
                                                                <li class="single-list"><a href="/destinations/reunion/" class="single">Réunion</a></li>
                                                                <li class="single-list"><a href="/destinations/seychelles/" class="single">Seychelles</a></li>
                                                            </ul>
                                                        </li>
                                                        <li class="single-list">
                                                            <a href="#" class="single">Southern Africa<i class="ri-arrow-right-s-line"></i></a>
                                                            <ul class="submenu">
                                                                <li class="single-list"><a href="/destinations/botswana/" class="single">Botswana</a></li>
                                                                <li class="single-list"><a href="/destinations/eswatini/" class="single">Eswatini</a></li>
                                                                <li class="single-list"><a href="/destinations/lesotho/" class="single">Lesotho</a></li>
                                                                <li class="single-list"><a href="/destinations/namibia/" class="single">Namibia</a></li>
                                                                <li class="single-list"><a href="/destinations/south-africa/" class="single">South Africa</a></li>
                                                                <li class="single-list"><a href="/destinations/zambia/" class="single">Zambia</a></li>
                                                                <li class="single-list"><a href="/destinations/zimbabwe/" class="single">Zimbabwe</a></li>
                                                            </ul>
                                                        </li>
                                                        <li class="single-list">
                                                            <a href="#" class="single">North Africa<i class="ri-arrow-right-s-line"></i></a>
                                                            <ul class="submenu">
                                                                <li class="single-list"><a href="/destinations/algeria/" class="single">Algeria</a></li>
                                                                <li class="single-list"><a href="/destinations/egypt/" class="single">Egypt</a></li>
                                                                <li class="single-list"><a href="/destinations/libya/" class="single">Libya</a></li>
                                                                <li class="single-list"><a href="/destinations/mauritania/" class="single">Mauritania</a></li>
                                                                <li class="single-list"><a href="/destinations/morocco/" class="single">Morocco</a></li>
                                                                <li class="single-list"><a href="/destinations/sudan/" class="single">Sudan</a></li>
                                                                <li class="single-list"><a href="/destinations/tunisia/" class="single">Tunisia</a></li>
                                                                <li class="single-list"><a href="/destinations/western-sahara/" class="single">Western Sahara</a></li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="single-list">
                                                    <a href="javascript:void(0)" class="single">
                                                        Tours <i class="ri-arrow-down-s-line"></i>
                                                    </a>
                                                    <ul class="submenu">
                                                        <li class="single-list">
                                                            <a href="#" class="single">Other Destinations<i class="ri-arrow-right-s-line"></i></a>
                                                            <ul class="submenu">
                                                                <li class="single-list"><a href="/destinations/uae/" class="single">United Arab Emirates (UAE)</a></li>
                                                            </ul>
                                                        </li>
                                                        <li class="single-list">
                                                            <a href="#" class="single">Academic Tours</a>
                                                        </li>
                                                        <li class="single-list">
                                                            <a href="#" class="single">Leisure Tours</a>
                                                        </li>
                                                        <li class="single-list">
                                                            <a href="#" class="single">Religious Tours</a>
                                                        </li>
                                                        <li class="single-list">
                                                            <a href="#" class="single">Volunteer Mission Tours</a>
                                                        </li>
                                                        <li class="single-list">
                                                            <a href="#" class="single">Corporate (MICE)</a>
                                                        </li>
                                                        <li class="single-list">
                                                            <a href="#" class="single">Travel Advisor Familiarization Trip</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="single-list">
                                                    <a href="javascript:void(0)" class="single">
                                                        Travel <br> Checklist <i class="ri-arrow-down-s-line"></i>
                                                    </a>
                                                    <ul class="submenu">
                                                        <li class="single-list">
                                                            <a href="#" class="single">Plan Your Trip</a>
                                                        </li>
                                                        <li class="single-list">
                                                            <a href="#" class="single">Travel Insurance</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="single-list">
                                                    <a href="javascript:void(0)" class="single">
                                                        About Us <i class="ri-arrow-down-s-line"></i>
                                                    </a>
                                                    <ul class="submenu">
                                                        <li class="single-list">
                                                            <a href="#" class="single">Testimonials</a>
                                                        </li>
                                                        <li class="single-list">
                                                            <a href="#" class="single">Careers</a>
                                                        </li>
                                                        <li class="single-list">
                                                            <a href="#" class="single">FAQ</a>
                                                        </li>
                                                        <li class="single-list">
                                                            <a href="#" class="single">Local Experts</a>
                                                        </li>
                                                        <li class="single-list">
                                                            <a href="#" class="single">Contact</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <!-- <li class="single-list">
                                                    <a href="javascript:void(0)" class="single">
                                                        Contact 
                                                    </a>
                                                </li> -->
                                            </ul>
                                            <!-- Search Box -->
                                            <div class="search-box search-bar d-none d-lg-block">
                                                <div class="header-search">
                                                    <span class="pera">Search...</span>
                                                    <div class="search-icon">
                                                        <i class="ri-search-line"></i>
                                                    </div>
                                                </div>
                                            </div>
                                           
                                        </div>
                                    </nav>
                                </div>
                                <!-- Mobile Menu -->
                                <div class="mobile_menu d-block d-lg-none">
                                    <div class="d-flex align-items-center gap-15">
                                        <div class="search-bar">
                                            <a href="javascript:void(0)" class="rounded-btn">
                                                <i class="ri-search-line"></i>
                                            </a>
                                        </div>
                                        <button class="ToggleThemeButton change-theme-mode m-0 p-0 border-0">
                                            <i class="ri-sun-line"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       
    </header>
</body>

</html>