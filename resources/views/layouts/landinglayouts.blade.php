<!DOCTYPE html>

<!--
 // WEBSITE: https://themefisher.com
 // TWITTER: https://twitter.com/themefisher
 // FACEBOOK: https://www.facebook.com/themefisher
 // GITHUB: https://github.com/themefisher/
-->

<html lang="en">

<head>

    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <title>@yield('title')</title>

    <!-- Mobile Specific Metas
    ================================================== -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Event and Conference Html5 Template">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
    <meta name="author" content="Themefisher">
    <meta name="generator" content="Themefisher Eventre HTML Template v1.0">

    <!-- PLUGINS CSS STYLE -->
    <!-- Bootstrap -->
    <link href="{{ asset('Landingpage/plugins/bootstrap/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{ asset('Landingpage/plugins/font-awsome/css/font-awesome.min.css') }}" rel="stylesheet">
    <!-- Magnific Popup -->
    <link href="{{ asset('Landingpage/plugins/magnific-popup/magnific-popup.css') }}" rel="stylesheet">
    <!-- Slick Carousel -->
    <link href="{{ asset('Landingpage/plugins/slick/slick.css') }}" rel="stylesheet">
    <link href="{{ asset('Landingpage/plugins/slick/slick-theme.css') }}" rel="stylesheet">
    <!-- CUSTOM CSS -->
    <link href="{{ asset('Landingpage/css/style.css') }}" rel="stylesheet">

    <!-- FAVICON -->
    <link href="{{ asset('Landingpage/images/favicon.png') }}" rel="shortcut icon">

</head>

<body class="body-wrapper">


<!--========================================
=            Navigation Section            =
=========================================-->
<nav class=" navbar main-nav border-less fixed-top navbar-expand-lg p-0">
    <div class="container-fluid p-0">
        <!-- logo -->
        <a class="navbar-brand" href="#">
            <img class="w-100" src="{{ asset('Landingpage/images/logo1.png') }}" alt="logo">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="fa fa-bars"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item dropdown active">
                    <a class="nav-link" href={{ url('/') }}>Solution</a>
                    {{-- <span>/</span> --}}
                    {{-- </a> --}}
                    {{-- <a class="nav-link" href="#!" data-toggle="dropdown">Solution<i class="fa fa-angle-down"></i> --}}
                    {{-- <span>/</span> --}}
                    {{-- </a> --}}
                    <!-- Dropdown list -->
                    <ul class="dropdown-menu menu">
                        <li><a class="dropdown-item text-center" href="#">eCommerce Merchants</a>
                            <ul class="submenu2">
                                <li class="dropdown-item "><a href=" {{ url('overview') }} " class="text-dark">Overview</a></li>
                                <li class="dropdown-item"><a href="{{ url('dashbord') }}" class="text-dark"> Shipping Dashboard</a></li>
                                <li class="dropdown-item"><a href="" class="text-dark"> Integration</a></li>
                                <li class="dropdown-item"><a href="" class="text-dark">Global Fulfillment</a></li>
                            </ul>

                        </li>

                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#features">Features
                        {{-- <span>/</span> --}}
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#">Subscription
                        {{-- <span>/</span> --}}
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#">Pricing
                        {{-- <span>/</span> --}}
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link" href="#!" data-toggle="dropdown"> <i class="fa fa-angle-down"></i></a>
                    <!-- Dropdown list -->
                {{-- <ul class="dropdown-menu"> --}}
                {{-- <li><a class="dropdown-item" href="about-us.html">About Us</a></li> --}}
                {{-- <li><a class="dropdown-item" href="single-speaker.html">Single Speaker</a></li> --}}
                {{-- <li><a class="dropdown-item" href="gallery.html">Gallery</a></li> --}}
                {{-- <li><a class="dropdown-item" href="gallery-two.html">Gallery-02</a></li> --}}
                {{-- <li><a class="dropdown-item" href="testimonial.html">Testimonial</a></li> --}}
                {{-- <li><a class="dropdown-item" href="pricing.html">Pricing</a></li> --}}
                {{-- <li><a class="dropdown-item" href="FAQ.html">FAQ</a></li> --}}
                {{-- <li><a class="dropdown-item" href="404.html">404</a></li> --}}

                {{-- <li class="dropdown dropdown-submenu dropright"> --}}
                {{-- <a class="dropdown-item dropdown-toggle" href="#!" id="dropdown0301" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Sub Menu</a> --}}

                {{-- <ul class="dropdown-menu" aria-labelledby="dropdown0301"> --}}
                {{-- <li><a class="dropdown-item" href="index.html">Submenu 01</a></li> --}}
                {{-- <li><a class="dropdown-item" href="index.html">Submenu 02</a></li> --}}
                {{-- </ul> --}}
                {{-- </li> --}}
                {{-- </ul> --}}
                {{-- </li> --}}
                {{-- <li class="nav-item"> --}}
                {{-- <a class="nav-link" href="schedule.html">Schedule</a> --}}
                {{-- </li> --}}
                {{-- <li class="nav-item"> --}}
                {{-- <a class="nav-link" href="sponsors.html">Sponsors</a> --}}
                {{-- </li> --}}
                {{-- <li class="nav-item dropdown"> --}}
                {{-- <a class="nav-link" href="#!" data-toggle="dropdown">News <i class="fa fa-angle-down"></i> --}}
                {{-- </a> --}}
                {{-- <!-- Dropdown list --> --}}
                {{-- <ul class="dropdown-menu"> --}}
                {{-- <li><a class="dropdown-item" href="news.html">News without sidebar</a></li> --}}
                {{-- <li><a class="dropdown-item" href="news-right-sidebar.html">News with right sidebar</a></li> --}}
                {{-- <li><a class="dropdown-item" href="news-left-sidebar.html">News with left sidebar</a></li> --}}
                {{-- <li><a class="dropdown-item" href="news-single.html">News Single</a></li> --}}

                {{-- <li class="dropdown dropdown-submenu dropleft"> --}}
                {{-- <a class="dropdown-item dropdown-toggle" href="#!" id="dropdown0501" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Sub Menu</a> --}}

                {{-- <ul class="dropdown-menu" aria-labelledby="dropdown0501"> --}}
                {{-- <li><a class="dropdown-item" href="index.html">Submenu 01</a></li> --}}
                {{-- <li><a class="dropdown-item" href="index.html">Submenu 02</a></li> --}}
                {{-- </ul> --}}
                {{-- </li> --}}
                {{-- </ul> --}}
                {{-- </li> --}}
                {{-- <li class="nav-item"> --}}
                {{-- <a class="nav-link" href="#">Contact</a> --}}
                {{-- </li> --}}
            </ul>
            <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center  sm:pt-0">
                @if (Route::has('login'))
                    <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                        @auth
                            <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline"  id="signing">Home</a>
                        @else
                            <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline" id="signing">Sign In</a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline"  id="signup">Sign Up</a>
                            @endif
                        @endauth
                    </div>
                @endif


            </div>

            {{-- <button class="  mr-2 " id="signing" type="button">Sign In</button>
            <button class=" " id="signup">Sign Up</button> --}}
            {{-- <a href="contact.html" class="ticket"> --}}
            {{-- <img src="{{asset('Landingpageimages/images/icon/ticket.png')}}" alt="ticket"> --}}
            {{-- <span>Sign up</span> --}}
            {{-- </a> --}}
        </div>
    </div>
</nav>

{{-- <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
    @if (Route::has('login'))
        <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
            @auth
                <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
            @else
                <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                @endif
            @endauth
        </div>
    @endif


</div> --}}


@yield('landingpage_content')
@yield('overview_content')
@yield('dashbord_content')
@yield('Login_content')


<!--====  End of Google Map  ====-->

<!--============================
=            Footer            =
=============================-->

<footer class="footer-main h-auto">
    <div class="bg-img ">
        <div class="container">
            <div class="row">
                <div class="col-md-12 mt-5">



                    <section>
                        <div class="row mb-5 ">
                            <div class="col-lg-4 col-md-4 col-10 my-4 mx-auto ">
                                <h5 class="text-primary">SHIP</h5>
                                <p class="text-dark mt-2">Ship a Packege</p>
                                <p class="text-dark mt-2">Generate Shipping Labels</p>
                                <p class="text-dark mt-2">Track & Marge Your Orders</p>
                                <p class="text-dark mt-2">Access Exclusive Carrier Rates</p>
                                <p class="text-dark mt-2">Ship Globally</p>
                                <p class="text-dark mt-2">Explore Our Open API</p>
                            </div>
                            <div class="col-lg-4 col-md-4 col-10   ">
                                {{--                                <img class="w-75" src=" {{ asset('Landingpage/images/logo.png') }} "--}}
                                {{--                                     alt="">--}}
                                <div class="m-auto">
                                    <p class="text-white mt-4">Simplify and save with our all in
                                        one shipping software
                                    </p>
                                    <div class="d-flex align-items-center  mt-2   ">
                                        <input type="search"
                                               class="form-control m-auto bg-white rounded-pill"placeholder="Subscribe For Update...">
                                        <Button type="submit" class="btn text-white  "
                                                style="background-color: rgb(10, 204, 10); height:40px; width:80px; margin-left: 6px;">GO</Button>
                                    </div>
                                    <p class="text-white mt-2">
                                        Terms of Service | Privacy Policy
                                    </p>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-4 col-10 my-4 ">
                                <h5 class="text-success">COMPANY</h5>
                                <ul class="">
                                    <li class="mb-3" style="list-style-type: none">
                                        <a class="text-white " href="#">About Us</i></a>
                                    </li>
                                    <li class="mb-3" style="list-style-type: none">
                                        <a class="text-white" href="#">What's New</i></a>
                                    </li>

                                    <li class="mb-3" style="list-style-type: none">
                                        <a class="text-white" href="#">Careers</i></a>
                                    </li>
                                    <li class="mb-3" style="list-style-type: none">
                                        <a class="text-white" href="#">Become An Affiliate</i></a>
                                    </li>
                                    <li class="mb-3" style="list-style-type: none">
                                        <a class="text-white" href="#">Contact Us</i></a>
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </section>





                </div>
            </div>
        </div>
        <div class="row min-vw-100 mt-5 px-4 pb-2">
            <div class="col-lg-4 col-md-4 col-10 ">
                <div class="d-flex">
                    <select class=" border-0 text-white bg-transparent">
                        <option selected>Language</option>
                        <option class="text-dark" value="1">One</option>
                        <option class="text-dark" value="2">Two</option>
                        <option class="text-dark" value="3">Three</option>
                    </select>

                    <select class=" border-0 text-white bg-transparent mx-4">
                        <option selected>Country</option>
                        <option class="text-dark" value="1">One</option>
                        <option class="text-dark" value="2">Two</option>
                        <option class="text-dark" value="3">Three</option>
                    </select>

                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-10 ">
                <div class="copyright-text ">
                    <p><a class="text-white" href="#">Aggregat</a> <span class="text-white">&copy; 2022,
                                Designed &amp; Developed by</span> <a class="text-white" href="#">Edesh
                            TechTeam</a></p>
                </div>
            </div>

            <div class="col-lg-4 col-md-4 col-10 ">
                <div class="block text-center">
                    <ul class="social-links-footer list-inline">
                        <li class="list-inline-item">
                            <a class="rounded bg-transparent border border-white" href="#"><i
                                    class="fa fa-facebook"></i></a>
                        </li>
                        <li class="list-inline-item ">
                            <a class="rounded bg-transparent border border-white" href="#"><i
                                    class="fa fa-twitter "></i></a>
                        </li>
                        <li class="list-inline-item">
                            <a class="rounded bg-transparent border border-white" href="#"><i
                                    class="fa fa-instagram"></i></a>
                        </li>
                        <li class="list-inline-item">
                            <a class="rounded bg-transparent border border-white" href="#"><i
                                    class="fa fa-rss"></i></a>
                        </li>
                        <li class="list-inline-item">
                            <a class="rounded bg-transparent border border-white" href="#"><i
                                    class="fa fa-vimeo"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>


</footer>
<!-- Subfooter -->
<footer class="subfooter">
    <div class="container">
        <div class="row">
            <div class="col-md-6 align-self-center">
                <div class="copyright-text">
                    <p><a href="#">Aggregat</a> &copy; 2022, Designed &amp; Developed by <a
                            href="#">Edesh TechTeam</a></p>
                </div>
            </div>
            <div class="col-md-6">
                <a href="#" class="to-top"><i class="fa fa-angle-up"></i></a>
            </div>
        </div>
    </div>
</footer>




<!-- JAVASCRIPTS -->
<!-- jQuey -->
<script src="{{ asset('Landingpage/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('Landingpage/plugins/bootstrap/bootstrap.min.js') }}"></script>
<!-- Shuffle -->
<script src="{{ asset('Landingpage/plugins/shuffle/shuffle.min.js') }}"></script>
<!-- Magnific Popup -->
<script src="{{ asset('Landingpage/plugins/magnific-popup/jquery.magnific-popup.min.js') }}"></script>
<!-- Slick Carousel -->
<script src="{{ asset('Landingpage/plugins/slick/slick.min.js') }}"></script>
<!-- SyoTimer -->
<script src="{{ asset('Landingpage/plugins/syotimer/jquery.syotimer.min.js') }}"></script>
<!-- Google Mapl -->
<script
    src="{{ asset('Landingpage/https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU') }}">
</script>
<script src="{{ asset('Landingpage/plugins/google-map/gmap.js') }}"></script>
<!-- Custom Script -->
<script src="{{ asset('Landingpage/js/script.js') }}"></script>
</body>

</html>


