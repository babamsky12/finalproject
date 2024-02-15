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
                <li><a href="{{ url('/about-us') }}">About us</a></li>
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
                        <a href="./index.html">
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
                            <li><a href="./contact.html">Contact</a></li>
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
                        <h2>BMI calculator</h2>
                        <div class="bt-option">
                            <a href="./index.html">Home</a>
                            <a href="#">Pages</a>
                            <span>BMI calculator</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- BMI Calculator Section Begin -->
    <section class="bmi-calculator-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-title chart-title">
                        <span>check your body</span>
                        <h2>BMI CALCULATOR CHART</h2>
                    </div>
                    <div class="chart-table">
                        <table>
                            <thead>
                                <tr>
                                    <th>Bmi</th>
                                    <th>WEIGHT STATUS</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="point">Below 18.5</td>
                                    <td>Underweight</td>
                                </tr>
                                <tr>
                                    <td class="point">18.5 - 24.9</td>
                                    <td>Normal Weight</td>
                                </tr>
                                <tr>
                                    <td class="point">25.0 - 29.9</td>
                                    <td>Overweight</td>
                                </tr>
                                <tr>
                                    <td class="point">30.0 - and Above</td>
                                    <td>Obese</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="section-title chart-calculate-title">
                        <span>check your body</span>
                        <h2>CALCULATE YOUR BMI</h2>
                    </div>
                    <div class="chart-calculate-form">
                        <p>
                            Rework's BMI calculator provides a quick and accurate assessment
                             of your Body Mass Index. Enter your height and weight to receive
                              instant results and learn about your BMI status—Underweight,
                               Normal Weight, Overweight, or Obese. Gain valuable insights 
                               for your health and fitness journey at the touch of a button with Rework.</p>
                        <form action="#" onsubmit="calculateBMI(event)">
                            <div class="row">
                                <div class="col-sm-6">
                                    <input type="text" id="height" placeholder="Height / cm">
                                </div>
                                <div class="col-sm-6">
                                    <input type="text" id="weight" placeholder="Weight / kg">
                                </div>
                                <div class="col-sm-6">
                                    <input type="text" id="age" placeholder="Age">
                                </div>
                                <div class="col-sm-6">
                                    <input type="text" id="sex" placeholder="Sex">
                                </div>
                                <div class="col-lg-12">
                                    <button type="submit">Calculate</button>
                                </div>
                                <div class="col-lg-12">
                                    <p id="bmiResult"></p>
                                    <p id="bmiStatus"></p>
                                </div>
                            </div>
                        </form>
                    </div>
                    
                    <script>
                        function calculateBMI(event) {
                            event.preventDefault();
                    
                            // Get input values
                            const height = parseFloat(document.getElementById('height').value);
                            const weight = parseFloat(document.getElementById('weight').value);
                    
                            // Check if height and weight are valid numbers
                            if (isNaN(height) || isNaN(weight) || height <= 0 || weight <= 0) {
                                alert('Please enter valid height and weight values.');
                                return;
                            }
                    
                            // Calculate BMI
                            const bmi = weight / ((height / 100) * (height / 100));
                    
                            // Determine BMI status
                            let bmiStatus;
                            if (bmi < 18.5) {
                                bmiStatus = 'Underweight';
                            } else if (bmi >= 18.5 && bmi < 25) {
                                bmiStatus = 'Normal Weight';
                            } else if (bmi >= 25 && bmi < 30) {
                                bmiStatus = 'Overweight';
                            } else {
                                bmiStatus = 'Obese';
                            }
                    
                            // Display BMI and status
                            document.getElementById('bmiResult').innerText = 'Your BMI is: ' + bmi.toFixed(2);
                            document.getElementById('bmiStatus').innerText = 'BMI Status: ' + bmiStatus;
                        }
                    </script>
                    
                    
                    


                </div>
            </div>
        </div>
    </section>
    <!-- BMI Calculator Section End -->

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
                            <a href="#"><i class="fa fa-facebook"></i></a>
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