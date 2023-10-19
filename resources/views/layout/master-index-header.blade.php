<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>@yield("title")</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{url('/storage/logo/fav-icon.png')}}" rel="icon">
    <link href="{{url('/storage/apple-touch-icon.png')}}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->

    <link href="{{url('/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{url('/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
    <link href="{{url('/assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
    <link href="{{url('/assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
    <link href="{{url('/assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">

    <link href="{{url('/assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">
    <link href="{{url('/assets/vendor/css/aos.min.css')}}" rel="stylesheet" />



    <!-- Template Main CSS File -->
    <link href="{{url('/assets/vendor/css/index.style.css')}}" rel="stylesheet">
    <link href="{{url('/assets/vendor/css/cust.index.style.css')}}" rel="stylesheet">
    <link href="{{url('/assets/vendor/css/index.login.css')}}" rel="stylesheet" />

    <!-- =======================================================
  * Template Name: Albotbn - v4.7.1
  * Template URL: https://bootstrapmade.com/Albotbn-free-bootstrap-html-template-corporate/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top  nav-bg">
        <div class="container d-flex align-items-center">

            <h1 class="logo me-auto">
                <a href="/">
                    <img src="{{url('/storage/logo/albotbn155X33.png')}}" />
                </a>
            </h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html" class="logo me-auto"><img src="{{url('/storage/logo.png')}}" alt="" class="img-fluid"></a>-->

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="/">Home</a></li>
                    <li><a class="nav-link scrollto" href="#about">About</a></li>
                    <li><a class="nav-link scrollto" href="#services">Services</a></li>
                    <li><a class="nav-link   scrollto"
                            href="{{action('App\Http\Controllers\pagesController@tutorial')}}">Tutorial</a></li>
                    <li><a class="nav-link scrollto"
                            href="{{action('App\Http\Controllers\pagesController@post')}}">Post</a>
                    </li>
                    <li class="dropdown"><a href="#"><span>Exam</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li class="dropdown">
                                <a href="#">
                                    <span>Courses</span>
                                    <i class="bi bi-chevron-right"></i>
                                </a>
                                <ul>
                                    @foreach($examCourse as $row)
                                    <li>
                                        <a
                                            href="{{action('App\Http\Controllers\pagesController@exam',$row->course_name)}}">
                                            {{$row->course_name}}</a>
                                    </li>
                                    @endforeach
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown"><a href="#">
                            <span>
                                @if(session('profile'))
                                <img src="{{url(session('profile'))}}" class="avater rounded-circle" alt="user" />
                                @else
                                <img src="{{url('/storage/user/avater.png')}}" class="avater rounded-circle"
                                    alt="user" />
                                @endif
                            </span>
                            <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            @if(session("user"))
                            <li><a href="{{url('/logout')}}">Logout</a></li>
                            @else
                            <li><a href="{{action('App\Http\Controllers\usersController@userLogin')}}">Login</a></li>
                            <li><a href="{{action('App\Http\Controllers\usersController@userRegister')}}">Register</a>
                            </li>
                            @endif
                            <li><a href="{{action('App\Http\Controllers\usersController@profile')}}">Profile</a></li>
                        </ul>
                    </li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->
    <main class="main-container">
        @yield("content")
    </main>
    <!--=======Footer=======-->
    <footer id="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-md-6 footer-contact text-white">
                        <h3 class="text-white">Albotbn</h3>
                        <p>
                            <strong>Phone:</strong> 01845541829<br>
                            <strong>Email:</strong> alemren3@gmail.com<br>
                        </p>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4 class="text-white">Useful Links</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="/">Home</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="{{url('/about')}}">About us</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="{{url('/post')}}">Post</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4 class="text-white">Our Services</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="{{url('/tutorial')}}">Tutorial</a></li>

                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4 class="text-white">Our Social Networks</h4>
                        <div class="social-links mt-3">
                            <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                            <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                            <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                            <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                            <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="container footer-bottom clearfix">
            <div class="copyright">
                &copy; Copyright <strong><span> Albotbn</span>.com</strong> All Rights Reserved
                2022
            </div>
            <div class="credits">

            </div>
        </div>
    </footer><!-- End Footer -->

    <!-- <div id="preloader"></div> -->
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center">
        <i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{url('/assets/vendor/js/jquery.min.js')}}"></script>
    <script src="{{url('/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}">
    </script>
    <script src="{{url('/assets/vendor/glightbox/js/glightbox.min.js')}}">
    </script>
    <script src="{{url('/assets/vendor/isotope-layout/isotope.pkgd.min.js')}}">
    </script>
    <script src="{{url('/assets/vendor/swiper/swiper-bundle.min.js')}}">
    </script>
    <script src="{{url('/assets/vendor/waypoints/noframework.waypoints.js')}}">
    </script>
    <script src="{{url('/assets/vendor/php-email-form/validate.js')}}">
    </script>
    <script src="{{url('/assets/vendor/js/aos.min.js')}}"></script>
    <script src="{{url('/assets/vendor/js/font.js')}}"></script>
    <!-- Template Main JS File -->
    <script src="{{url('/assets/vendor/js/index.main.js')}}"></script>
    <script src="{{url('/assets/vendor/js/cust.index.js')}}"></script>
    <script>
    var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'))
    var popoverList = popoverTriggerList.map(function(popoverTriggerEl) {
        return new bootstrap.Popover(popoverTriggerEl)
    })
    </script>
</body>

</html>
</body>

</html>