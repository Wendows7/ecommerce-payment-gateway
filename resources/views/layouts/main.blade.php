<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset("images/logo.jpeg")}}">
    <!-- All CSS -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset("css/fontawesome.min.css")}}">
    <link rel="stylesheet" href="{{asset("css/magnific-popup.css")}}">
    <link rel="stylesheet" href="{{asset("css/slick.css")}}">
    <link rel="stylesheet" href="{{asset("css/animate.min.css")}}">
    <link rel="stylesheet" href="{{asset("css/metisMenu.css")}}">
    <link rel="stylesheet" href="{{asset("css/theme-default.css")}}">
    <link rel="stylesheet" href="{{asset("css/jquery.mb.YTPlayer.min.css")}}">
    <link rel="stylesheet" href="{{asset("css/main.css")}}">
    <link rel="stylesheet" href="{{asset("css/responsive.css")}}">
    <link rel="stylesheet" href="{{asset("css/nice-select.css")}}">
    <link rel="stylesheet" href="{{asset("css/ui-range-slider.css")}}">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>


    <style>
        .logo img {
            max-width: 100px;
            height: auto;
            display: block;

        }
        .footer-logo img {
            max-width: 100px;
            height: auto;
            display: block;

        }

        .footer-payment img {
            width: 70px;
            height: 40px;
            object-fit: contain;
            margin-right: 8px;
            vertical-align: middle;
        }

        .footer-widget i {
            font-size: 40px;
        }

        .footer-area {
            border-top: 2px solid #e0e0e0;
            margin-top: 40px;
        }

        /*.main-menu ul li a {*/
        /*    font-size: 20px;*/
        /*    padding: 16px 32px;*/
        /*    display: inline-block;*/
        /*}*/
        /*.main-menu ul {*/
        /*    gap: 10px;*/
        /*    display: flex;*/
        /*    justify-content: center;*/
        /*    align-items: center;*/
        /*}*/

        /* Mobile Menu Styles */
        .mobile-divider {
            height: 1px;
            background-color: rgba(255, 255, 255, 0.1);
            margin: 10px 0;
            list-style: none;
        }

        .mobile-logout-form {
            width: 100%;
            margin: 0;
            padding: 0;
        }

        .mobile-logout-btn {
            display: flex;
            align-items: center;
            width: 100%;
            text-align: left;
            background: none;
            border: none;
            color: inherit;
            font-size: inherit;
            padding: 10px 20px;
            cursor: pointer;
        }

        #mobile-menu-active i {
            margin-right: 10px;
            min-width: 20px;
            text-align: center;
        }

        .side-mobile-menu li a {
            display: flex;
            align-items: center;
        }

        /* Fix existing header icon issues */
        .header-left-icon a i {
            font-size: 15px;
        }

        .header-left-icon a i:after {
            content: "";
            margin-left: 5px;
        }

        .auth-links {
            display: flex;
            align-items: center;
        }

        .auth-links a, .header-logout-btn {
            display: flex;
            align-items: center;
            margin-left: 10px;
            font-size: 15px;
            color: black;
        }

        .header-logout-btn {
            background: none;
            border: none;
            cursor: pointer;
            padding: 0;
        }

        .auth-links i {
            margin-right: 5px;
            font-size: 15px;
        }

        /* Fix style error in the original code */
        .auth-links a span, .header-logout-btn span {
            font-size: 15px;
        }

        @media (max-width: 1199px) {
            .auth-links a span, .header-logout-btn span {
                display: none;
            }

            .auth-links i {
                font-size: 18px;
                margin-right: 0;
            }
        }
        .mobile-logout-item {
            margin-top: 300px;
        }

        .mobile-divider {
            height: 1px;
            background-color: rgba(255, 255, 255, 0.1);
            margin: 10px 0;
            list-style: none;
        }

        .mt-3 {
            margin-top: 15px;
        }

        .mb-3 {
            margin-bottom: 15px;
        }

        .mobile-logout-btn {
            color: #ff5252;
            font-weight: 500;
        }

        .mobile-logout-btn i {
            color: #ff5252;
        }
    </style>


    <title>Kotama</title>
</head>

<body>

<!-- preloader -->
{{--<div id="preloader">--}}
{{--    <div class="preloader">--}}
{{--        <span></span>--}}
{{--        <span></span>--}}
{{--    </div>--}}

{{--</div>--}}
<!-- preloader end  -->
<!-- header begin -->
<header class="header-h-two">
    <!-- menu-area -->
    <div class="header-menu-two">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-2 col-lg-2 col-md-4 col-4">
                    <div class="logo">
                        <a href="{{route('home')}}"><img src="{{asset("images/logo.jpeg")}}" alt=""></a>
                    </div>
                </div>
                <div class="col-xl-8 col-lg-8 col-md-12 d-none d-lg-block">
                    <div class="main-menu text-center">
                        <nav id="mobile-menu">
                            <ul>
                                <li><a style="font-size: 15px;" href="{{route('home')}}">Home</a></li>
                                <li class="mega-menu">
                                    <a style="font-size: 15px;" href="{{route('products.index')}}">Products</a>
                                </li>
                                <li><a style="font-size: 15px;" href="{{route('about')}}">About</a></li>
                                <li>
                                    <a style="font-size: 15px;" href="{{route('contact')}}">Contact</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-7 col-6">
                    <div class="header-left-icon d-flex align-items-center f-right">
                        <a href="#" id="search-btn" class="search-btn nav-search search-trigger">
                            <i class="fas fa-search"></i>
                        </a>

                        <!-- Hide these on mobile with d-none d-lg-block -->
                        <div class="auth-links d-none d-lg-flex">
                            @if(auth()->check())
                                <a href="{{route('user.profile')}}"><i class="fas fa-user"></i><span>Profile</span></a>
                                <a href="{{route('cart.index')}}"><i class="fas fa-cart-arrow-down"></i><span>Cart</span></a>
                                <a href="{{route('user.orders')}}"><i class="fas fa-receipt"></i><span>Orders</span></a>
                                <form action="{{ route('logout') }}" method="POST" style="margin: 0;">
                                    @csrf
                                    <button type="submit" class="header-logout-btn">
                                        <i class="fas fa-sign-out-alt"></i><span>Logout</span>
                                    </button>
                                </form>
                            @else
                                <a href="{{route('auth.login')}}"><i class="fas fa-sign-in-alt"></i><span>Login</span></a>
                                <a href="{{route('register')}}"><i class="fas fa-user-plus"></i><span>Register</span></a>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="col-2 col-md-1 d-block d-lg-none">
                    <div class="hamburger-menu text-right">
                        <a href="javascript:void(0);">
                            <i class="fal fa-bars"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- header end -->

<!-- slide-bar start -->
<aside class="slide-bar">
    <div class="close-mobile-menu">
        <a href="javascript:void(0);"><i class="fas fa-times"></i></a>
    </div>
    <!-- side-mobile-menu start -->
    <!-- side-mobile-menu start -->
    <nav class="side-mobile-menu">
        <ul id="mobile-menu-active">
            <li><a href="{{route('home')}}"><i class="fas fa-home"></i> Home</a></li>
            <li><a href="{{route('products.index')}}"><i class="fas fa-box"></i> Products</a></li>
            <li><a href="{{route('about')}}"><i class="fas fa-info-circle"></i> About</a></li>
            <li><a href="{{route('contact')}}"><i class="fas fa-envelope"></i> Contact</a></li>

            <!-- User actions -->
            @if(auth()->check())
                <li><a href="{{route('user.profile')}}"><i class="fas fa-user"></i> Profile</a></li>
                <li><a href="{{route('cart.index')}}"><i class="fas fa-cart-arrow-down"></i> Cart</a></li>
                <li><a href="{{route('user.orders')}}"><i class="fas fa-receipt"></i> Orders</a></li>

                <!-- Divider before logout -->
                <li class="mobile-divider mt-3 mb-3"></li>

                <!-- Logout button at the bottom -->
                <li class="mobile-logout-item">
                    <form action="{{ route('logout') }}" method="POST" class="mobile-logout-form">
                        @csrf
                        <button type="submit" class="mobile-logout-btn">
                            <i class="fas fa-sign-out-alt"></i> Logout
                        </button>
                    </form>
                </li>
            @else
                <li class="mobile-divider mt-3 mb-3"></li>
                <li><a href="{{route('auth.login')}}"><i class="fas fa-sign-in-alt"></i> Login</a></li>
                <li><a href="{{route('register')}}"><i class="fas fa-user-plus"></i> Register</a></li>
            @endif
        </ul>
    </nav>
    <!-- side-mobile-menu end -->
    <!-- side-mobile-menu end -->
</aside>
<div class="body-overlay"></div>
<!-- slide-bar end -->
<!-- Fullscreen search -->
<div class="search-wrap">
    <div class="search-inner">
        <i class="fal fa-times search-close" id="search-close"></i>
        <div class="search-cell">
            <form method="GET" action="{{ route('products.search') }}">
                <div class="search-field-holder">
                    <input
                        type="search"
                        name="slug"
                    class="main-search-input"
                    placeholder="Search Entire Store..."
                    required
                    >
                </div>
                <button type="submit" style="display:none;">Submit</button>
            </form>
        </div>
    </div>
</div>
<!-- end fullscreen search -->
@include('sweetalert::alert')
@yield('body')

<!-- Footer  -->
<footer>
    <div class="footer-area pt-60 pb-55">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="footer-widget mb-30">
                        <div class="footer-logo">
{{--                            <a href="index.html"><img src="{{asset("images/logo.jpeg")}}" class="img-fluid" alt=""></a>--}}
                            <h5>Bantuan</h5>
                        </div>
                        <div class="footer-text mt-45">
                            <li><a href="{{route('contact')}}">Hubungi Kami</a></li>
                            <li><a href="#">Garansi Produk <b>(3 Bulan Pemakaian)</b></a></li>
                            <li><a href="">Another</a></li>
                        </div>
                        <div class="footer-payment mt-40">
                            <span>Metode Pembayaran:</span>
                            <img src="{{ asset('images/BCA.webp') }}" alt="BCA" style="height:50px; margin-right:8px;">
                            <img src="{{ asset('images/mandiri.png') }}" alt="Mandiri" style="height:50px; margin-right:8px;">
                            <img src="{{ asset('images/BNI.png') }}" alt="BNI" style="height:50px; margin-right:8px;">
                            <img src="{{ asset('images/BRI.png') }}" alt="BRI" style="height:50px; margin-right:8px;">
                            <br>
                            <img src="{{ asset('images/GOPAY.png') }}" alt="GOPAY" style="height:50px; margin-right:8px;">
                            <img src="{{ asset('images/dana.png') }}" alt="dana" style="height:50px; margin-right:8px;">
                            <img src="{{ asset('images/shoopepay.png') }}" alt="shoope" style="height:50px; margin-right:8px;">
                            <img src="{{ asset('images/qris.png') }}" alt="qris" style="height:50px; margin-right:8px;">

                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6">
                    <div class="footer-widget mb-30">
                        <h5>Kotama</h5>
                        <ul class="links">
                            <li><a href="{{route('products.index')}}">Products</a></li>
                            <li><a href="{{route('about')}}">About</a></li>
                            <li><a href="{{route('contact')}}">Contact</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="footer-widget mb-30 ml-50">
                        <h5>Popular Categories</h5>
                        <ul class="links">
                            @foreach($totalProductByCategory as $value)
                            <li><a href="shop.html">{{$value['name']}} ({{$value['total']}})</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="footer-widget mb-30">
                            <h5>Follow Us On:</h5>
                            <a href="https://www.instagram.com/kotama_official" target="_blank"><i class="fab fa-instagram-square"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright-two copyright-border">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-12">
                    <div class="copyright-text">
                        <span>
                            &copy; {{ date('Y') }} Kotama. All Rights Reserved.
                        </span>
                    </div>
                </div>
{{--                <div class="col-md-6 col-12">--}}
{{--                    <div class="copyright-text text-right">--}}
{{--                        <span>All Right Reserved By Basictheme.</span>--}}
{{--                    </div>--}}
{{--                </div>--}}
            </div>
        </div>
    </div>
</footer>
<!-- Footer  -->



<!-- All Js Files -->
<script src="{{asset("js/jquery-1.12.4.min.js")}}"></script>
<script src="{{asset("js/popper.min.js")}}"></script>
<script src="{{asset("js/bootstrap.min.js")}}"></script>
<script src="{{asset("js/jquery.magnific-popup.min.js")}}"></script>
<script src="{{asset("js/slick.min.js")}}"></script>
<script src="{{asset("js/isotope.pkgd.min.js")}}"></script>
<script src="{{asset("js/imagesloaded.pkgd.min.js")}}"></script>
<script src="{{asset("js/jquery.scrollUp.min.js")}}"></script>
<script src="{{asset("js/metisMenu.min.js")}}"></script>
<script src="{{asset("js/jquery.countdown.min.js")}}"></script>
<script src="{{asset("js/jquery-ui-slider-range.js")}}"></script>
<script src="{{asset("js/jquery.nice-select.min.js")}}"></script>
<script src="{{asset("js/ajax-form.js")}}"></script>
<script src="{{asset("js/jquery.mb.YTPlayer.min.js")}}"></script>
<script src="{{asset("js/wow.min.js")}}"></script>
<script src="{{asset("js/main.js")}}"></script>


</body>

</html>
