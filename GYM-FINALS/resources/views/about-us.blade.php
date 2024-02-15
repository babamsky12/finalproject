<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Gym Template">
    <meta name="keywords" content="Gym, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gym | Template</title>

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
                    <a href="{{ url('/index') }}">
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
                        <h2>About us</h2>
                        <div class="bt-option">
                        <a href="{{ url('/index') }}">Home</a>
                            <span>About</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->


    <!-- About US Section Begin -->
    <section class="aboutus-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 p-0">
                    <div class="about-video set-bg" data-setbg="img/about-us.jpg">
                        <a src="img\about-us.jpg"><i
                                class="fa fa-caret-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-6 p-0">
                    <div class="about-text">
                        <div class="section-title">
                            <span>About Us</span>
                            <h2>Who we are</h2>
                        </div>
                        <div class="at-desc">
                            <p>At Rework, we are more than a gym; we are a wellness 
                                sanctuary that redefines the fitness experience. With 
                                cutting-edge technology and ergonomic design, our state-of-the-art
                                 equipment empowers every workout, ensuring a seamless and invigorating 
                                 exercise session. Rooted in inclusivity and support, Rework is a community
                                  where individuals of all backgrounds thrive on their transformative 
                                  fitness journeys. Committed to your safety, we maintain a pristine 
                                  environment through rigorous sanitation and regular equipment maintenance.                       
                                  Rework is not just a fitness destination; it's a lifestyle redefined, where
                                   we actively participate in shaping and reworking the narratives of health and well-being.</p>
                        </div>                       
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About US Section End -->

    <!-- Banner Section Begin -->
    <section class="banner-section set-bg" data-setbg="img/banner-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="bs-text">
                        <h2>registration now to get more deals</h2>
                        <div class="bt-tips">Where health, beauty and fitness meet.</div>
                        <a href="{{ route('membership_registration') }}" class="primary-btn">BECOME A MEMBER</a>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Banner Section End -->

    <!-- Testimonial Section Begin -->
    <section class="testimonial-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <span>Testimonial</span>
                        <h2>Our cilent say</h2>
                    </div>
                </div>
            </div>
            <div class="ts_slider owl-carousel">
                <div class="ts_item">
                    <div class="row">
                        <div class="col-lg-12 text-center">
                            <div class="ti_pic">
                                <img src="img/testimonial/testimonial-1.jpg" alt="">
                            </div>
                            <div class="ti_text">
                                <p>Finger Lickin' Good!</p>
                                <h5>Jay Andrey Amulong</h5>
                                <div class="tt-rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ts_item">
                    <div class="row">
                        <div class="col-lg-12 text-center">
                            <div class="ti_pic">
                                <img src="img/testimonial/testimonial-2.jpg" alt="">
                            </div>
                            <div class="ti_text">
                                <p>Bida ang Saya!</p>
                                <h5>Leon Adriel Franco Agcaoili</h5>
                                <div class="tt-rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Testimonial Section End -->

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