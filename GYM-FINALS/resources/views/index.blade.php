<!DOCTYPE html>
<!-- <html lang="zxx"> -->
<html>
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
<style>
    
</style>


</head>

<body>
@if(session('success'))
    <div class="alert alert-success" id="success-alert">
        {{ session('success') }}
    </div>
@endif

@if(session('error'))
    <div class="alert alert-danger" id="error-alert">
        {{ session('error') }}
    </div>
@endif

<script>
    // Set a timeout function to hide the success alert after 5 seconds
    setTimeout(function(){
        document.getElementById('success-alert').style.display = 'none';
    }, 5000);

    // Set a timeout function to hide the error alert after 5 seconds
    setTimeout(function(){
        document.getElementById('error-alert').style.display = 'none';
    }, 5000);
</script>

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

    <!-- Header End -->

    <!-- Hero Section Begin -->
    <section class="hero-section">
        <div class="hs-slider owl-carousel">
            <div class="hs-item set-bg" data-setbg="img/hero/hero-1.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 offset-lg-6">
                        <div class="hi-text">
    <span>Shape your body</span>
    <h1>Be <strong>strong</strong> training hard</h1> 
@guest
    <!-- Show login and register links for guests -->
    <a href="{{ route('login') }}" class="primary-btn">LOGIN</a>
    <!-- @if (Route::has('register'))
        <a href="{{ route('register') }}" class="primary-btn">REGISTER</a>
    @endif -->
    <a href="{{ route('membership_registration') }}" class="primary-btn">BECOME A MEMBER</a>
    
@else
    <!-- Show My Account link after authentication -->
    @if(auth()->user()->is_admin==1)
    <a href="{{ route('admin.dashboard') }}" class="primary-btn">ADMIN DASHBOARD</a>

        
    @else
        <a href="{{ route('account.index') }}" class="primary-btn">MY ACCOUNT</a>
        
        
        
    @endif
    <a href="{{ route('logout') }}" class="primary-btn" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">LOGOUT</a>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>
@endguest

    <!-- Show logout link after authentication -->
   



</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hs-item set-bg" data-setbg="img/hero/hero-2.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 offset-lg-6">
                            <div class="hi-text">
                                <span>Shape your body</span>
                                <h1>Be <strong>strong</strong> traning hard</h1>
                               
                                @guest
    <!-- Show login and register links for guests -->
    <a href="{{ route('login') }}" class="primary-btn">LOGIN</a>
    @if (Route::has('register'))
        <a href="{{ route('register') }}" class="primary-btn">REGISTER</a>
    @endif
    <a href="{{ route('membership_registration') }}" class="primary-btn">BECOME A MEMBER</a>
@else
    <!-- Show My Account link after authentication -->
    @if(auth()->user()->is_admin)
        <a href="{{ route('admin.dashboard') }}" class="primary-btn">ADMIN ACCOUNT</a>
    @else
        <a href="{{ route('account.index') }}" class="primary-btn">MY ACCOUNT</a>
    @endif

    <!-- Show logout link after authentication -->
    <a href="{{ route('logout') }}" class="primary-btn" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">LOGOUT</a>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>
@endif


                                
                                

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- ChoseUs Section Begin -->
    <section class="choseus-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <span>Why chose us?</span>
                        <h2>PUSH YOUR LIMITS FORWARD</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="cs-item">
                        <span class="flaticon-034-stationary-bike"></span>
                        <h4>Modern equipment</h4>
                        <p>
                            At Rework, embark on a fitness revolution with our state-of-the-art
                             modern equipment. Here, every workout is empowered by cutting-edge
                            technology and ergonomic design, ensuring a seamless and invigorating
                            exercise experience.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="cs-item">
                        <span class="flaticon-044-no-smoking"></span>
                        <h4>Clean and Safe Environment</h4>
                        <p>
                            At Rework, we prioritize your safety 
                            and well-being. Our commitment to a clean environment 
                            is unwavering, with rigorous sanitation measures and 
                            regular equipment maintenance. Feel confident in your fitness 
                            journey knowing that we provide a safe and hygienic space for 
                            you to achieve your goals.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="cs-item">
                        <span class="flaticon-037-medal"></span>
                        <h4>Friendly Staffs</h4>
                        <p>
                            At Rework, our friendly staff is committed to making 
                            your fitness journey enjoyable and stress-free. From warm greetings
                            to helpful assistance, our team creates a welcoming atmosphere where 
                            everyone feels valued. Experience the support of a community-driven 
                            environment as you pursue your fitness goals with us.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="cs-item">
                        <span class="flaticon-014-heart-beat"></span>
                        <h4>Unique to your needs</h4>
                        <p> At Rework, our modern equipment is tailored to your unique needs, 
                            offering a versatile and personalized fitness experience to help you achieve 
                            your wellness goals efficiently.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ChoseUs Section End -->

 
    

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
                        @auth
        <!-- User is authenticated, hide the button -->
    @else
        <!-- User is a guest, show the button -->
        <a href="{{ route('membership_registration') }}" class="primary-btn">ENROLL NOW</a>
    @endauth
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
                        @auth
        <!-- User is authenticated, hide the button -->
    @else
        <!-- User is a guest, show the button -->
        <a href="{{ route('membership_registration') }}" class="primary-btn">ENROLL NOW</a>
    @endauth
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
                        @auth
        <!-- User is authenticated, hide the button -->
    @else
        <!-- User is a guest, show the button -->
        <a href="{{ route('membership_registration') }}" class="primary-btn">ENROLL NOW</a>
    @endauth
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
                        
                        <li><a href="{{ route('membership_registration') }}">Become a Member</a></li>
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
        <!-- resources/views/index.blade.php or your home view file -->


<!-- The rest of your home page content goes here -->

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