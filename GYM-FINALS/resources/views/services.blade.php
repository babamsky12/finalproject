<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Gym Template">
    <meta name="keywords" content="Gym, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Rework Fitness Gym</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Oswald:300,400,500,600,700&display=swap" rel="stylesheet">

<!-- Css Styles -->
<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}" type="text/css">
<link rel="stylesheet" href="{{ asset('css/flaticon.css') }}" type="text/css">
<link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}" type="text/css">
<link rel="stylesheet" href="{{ asset('css/barfiller.css') }}" type="text/css">
<link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}" type="text/css">
<link rel="stylesheet" href="{{ asset('css/slicknav.min.css') }}">
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Offcanvas Menu Section Begin -->
    <div class="offcanvas-menu-overlay"></div>
    <div class="offcanvas-menu-wrapper">
        <div class="canvas-close">
            <i class="fa fa-close"></i>
        </div>
        <div class="canvas-search search-switch">
            <i class="fa fa-search"></i>
        </div>
        <nav class="canvas-menu mobile-menu">
        <ul>
        <li><a href="{{ url('/index') }}">Home</a></li>
        <li><a href="{{ url('/about-us') }}">About Us</a></li>
        <li><a href="{{ url('/services') }}">Services</a></li>
        <li><a href="#">Pages</a>
            <ul class="dropdown">
                <li><a href="{{ url('/bmi-calculator') }}">Bmi calculator</a></li>
                <li><a href="{{ url('/gallery') }}">Gallery</a></li>
            </ul>
        </li>
        <li><a href="{{ url('/contact') }}">Contact</a></li>
    </ul>
        </nav>
        <div id="mobile-menu-wrap"></div>
        <div class="canvas-social">
            <a href="https://www.facebook.com/babamsky1/"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-youtube-play"></i></a>
            <a href="#"><i class="fa fa-instagram"></i></a>
        </div>
    </div>
    <!-- Offcanvas Menu Section End -->

    <!-- Header Section Begin -->
    <header class="header-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3">
                    <div class="logo">
                    <a href="{{ url('/') }}">
                            <img src="img/logo1.png" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <nav class="nav-menu">
                    <ul>
        <li><a href="{{ url('/') }}">Home</a></li>
        <li><a href="{{ url('/about-us') }}">About Us</a></li>
        <li><a href="{{ url('/services') }}">Services</a></li>
        <li><a href="#">Pages</a>
            <ul class="dropdown">
                <li><a href="{{ url('/bmi-calculator') }}">Bmi calculator</a></li>
                <li><a href="{{ url('/gallery') }}">Gallery</a></li>
            </ul>
        </li>
        <li><a href="{{ url('/contact') }}">Contact</a></li>
    </ul>
                    </nav>
                </div>
                <div class="col-lg-3">
                    <div class="top-option">
                        <div class="to-social">
                            <a href="https://www.facebook.com/babamsky1/"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-youtube-play"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="canvas-open">
                <i class="fa fa-bars"></i>
            </div>
        </div>
    </header>
    <!-- Header End -->

    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="img/breadcrumb-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb-text">
                        <h2>Services</h2>
                        <div class="bt-option">
                        <a href="{{ url('/') }}">Home</a>
                            <span>Services</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Services Section Begin -->
    <section class="services-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <span>What we do?</span>
                        <h2>PUSH LIMITS FURTHER, BECOME LIMITLESS</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 order-lg-1 col-md-6 p-0">
                    <div class="ss-pic">
                        <img src="img/services/services-1.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-3 order-lg-2 col-md-6 p-0">
                    <div class="ss-text">
                        <h4>Personal training</h4>
                        <p>At Rework, experience fitness tailored to your unique goals.
                             Our personal trainers create customized workout plans, 
                             ensuring every session is effective and enjoyable. Your journey
                              is personal, and so is our approach.</p>

                    </div>
                </div>
                <div class="col-lg-3 order-lg-3 col-md-6 p-0">
                    <div class="ss-pic">
                        <img src="img/services/services-2.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-3 order-lg-4 col-md-6 p-0">
                    <div class="ss-text">
                        <h4>Communicating Members</h4>
                        <p>At Rework, we prioritize clear communication for your
                             fitness journey. In addressing
                              concerns, our commitment to open dialogue creates a supportive environment.</p>
                    </div>
                </div>
                <div class="col-lg-3 order-lg-8 col-md-6 p-0">
                    <div class="ss-pic">
                        <img src="img/services/services-4.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-3 order-lg-7 col-md-6 p-0">
                    <div class="ss-text second-row">
                        <h4>Body building</h4>
                        <p>Sculpt your physique with Rework's bodybuilding programs.
                            Our trainers specialize in muscle development, offering 
                            personalized journeys for targeted growth and overall transformation.
                            </p>
                    </div>
                </div>
                <div class="col-lg-3 order-lg-6 col-md-6 p-0">
                    <div class="ss-pic">
                        <img src="img/services/services-3.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-3 order-lg-5 col-md-6 p-0">
                    <div class="ss-text second-row">
                        <h4>Strength training</h4>
                        <p>Unlock your strength potential with Rework's expertise. 
                           Our trainers tailor programs for all levels, ensuring a solid
                           foundation or advanced gains through a focused strength approach.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Services Section End -->

    <!-- Banner Section Begin -->
    <section class="banner-section set-bg" data-setbg="img/banner-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="bs-text service-banner">
                        <h2>Exercise until the body obeys.</h2>
                        <div class="bt-tips">Where health, beauty and fitness meet.</div>
                        <a href="https://www.youtube.com/watch?v=fvFQU6NvJo8" class="play-btn video-popup"><i
                                class="fa fa-caret-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Banner Section End -->

    <!-- Pricing Section Begin -->
    <section class="pricing-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <span>Our Plan</span>
                        <h2>Choose your pricing plan</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-8">
                    <div class="ps-item">
                        <h3>3 Months Membership</h3>
                        <div class="pi-price">
                            <h2>₱ 3,499</h2>
                        </div>
                        <ul>
                            <li>Full access to the gym facilities</li>
                            <li>Complimentary fitness assessment</li>
                            <li>No time restriction</li>
                            <li>Access to all gym ammenities</li>
                        </ul>
                        <a href="{{ route('membership_registration') }}" class="primary-btn">Enroll Now</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-8">
                    <div class="ps-item">
                        <h3>6 Months Membership</h3>
                        <div class="pi-price">
                            <h2>₱ 6,499</h2>
                            <span>Up to ₱ 500.00 less!</span>
                        </div>
                        <ul>
                            <li>Full access to the gym facilities</li>
                            <li>Complimentary fitness assessment</li>
                            <li>No time restriction</li>
                            <li>Access to all gym ammenities</li>
                            <li>Additional access to specialized workout areas</li>

                        </ul>
                        <a href="{{ route('membership_registration') }}" class="primary-btn">Enroll Now</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-8">
                    <div class="ps-item">
                        <h3>12 Months Membership</h3>
                        <div class="pi-price">
                            <h2>₱ 11,999</h2>
                            <span>Up to ₱ 2,000 less!</span>
                        </div>
                        <ul>
                            <li>Full access to the gym facilities</li>
                            <li>Complimentary fitness assessment</li>
                            <li>No time restriction</li>
                            <li>Access to all gym ammenities</li>
                            <li>Additional access to specialized workout areas</li>
                            <li>Exclusive early access to new gym features</li>
                        </ul>
                        <a href="{{ route('membership_registration') }}" class="primary-btn">Enroll Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Pricing Section End -->

    <!-- Get In Touch Section Begin -->
    <div class="gettouch-section">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="gt-text">
                        <i class="fa fa-map-marker"></i>
                        <p>Anonas, Santa Mesa, Maynila, 1015 Kalakhang Maynila</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="gt-text">
                        <i class="fa fa-mobile"></i>
                        <ul>
                            <li>(+63 2) 713 6009</li>
                            <li>(+63 2) 716 6273</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="gt-text email">
                        <i class="fa fa-envelope"></i>
                        <p>reworkfitness@gmail.com</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Get In Touch Section End -->

    <!-- Footer Section Begin -->
    <section class="footer-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="fs-about">
                        <div class="fa-logo">
                            <a href="#"><img src="img/logo1.png" alt=""></a>
                        </div>
                        <p>
                            "Experience a redefined fitness journey at Rework Gym,
                             where cutting-edge facilities, personalized workouts, 
                             and a vibrant community come together to elevate your 
                             fitness goals to new heights."</p>
                        <div class="fa-social">
                            <a href="https://www.facebook.com/babamsky1/"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-youtube-play"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa  fa-envelope-o"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6">
                    <div class="fs-widget">
                        <h4>Useful links</h4>
                        <ul>
                        <li><a href="{{ url('/bmi-calculator') }}">Bmi calculator</a></li>
                <li><a href="{{ url('/gallery') }}">Gallery</a></li>
                        </ul>
                    </div>
                </div>
                @guest
                <div class="col-lg-2 col-md-3 col-sm-6">
                    <div class="fs-widget">
                        <h4>Support</h4>
                        <ul>
                        <li><a href="{{ route('login') }}">Login</a></li>
                            
                        <li><a href="{{ route('membership_registration') }}" >Become a Member</a></li>
                        <li><a href="{{ url('/contact') }}">Contact</a></li>
                        </ul>
                    </div>
                </div>
                @endguest
                <div class="col-lg-4 col-md-6">
                    <div class="fs-widget">
                        <h4>Tips & Guides</h4>
                        <div class="fw-recent">
                            <h6><a href="https://www.betterhealth.vic.gov.au/health/conditionsandtreatments/depression-and-exercise#:~:text=Regular%20exercise%20leads%20to%20improved,a%20lesser%20degree%20than%20depression.">Physical fitness may help prevent depression, anxiety</a></h6>
                        </div>
                        <div class="fw-recent">
                            <h6><a href="https://www.webmd.com/fitness-exercise/top-exercises-belly-fat">Fitness: The best exercise to lose belly fat and tone up...</a></h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="copyright-text">
                        <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Made by A.A</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Footer Section End -->

   <!-- Js Plugins -->
<script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('js/masonry.pkgd.min.js') }}"></script>
<script src="{{ asset('js/jquery.barfiller.js') }}"></script>
<script src="{{ asset('js/jquery.slicknav.js') }}"></script>
<script src="{{ asset('js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('js/main.js') }}"></script>




</body>

</html>