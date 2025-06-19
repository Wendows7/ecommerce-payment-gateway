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
                                <li><a style="font-size: 20px;" href="{{route('home')}}">Home</a></li>
                                <li class="mega-menu">
                                    <a style="font-size: 20px;" href="{{route('products.index')}}">Products</a>
                                </li>
                                <li><a style="font-size: 20px;" href="{{route('about')}}">About</a></li>
                                <li>
                                    <a style="font-size: 20px;" href="{{route('contact')}}">Contact</a>
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


                        @if(auth()->check())
                        <a href="{{route('user.profile')}}"><i style="font-size: 20px;" class="fas fa-user">Profile</i></a>
                        <a href="{{route('cart.index')}}"><i style="font-size: 20px;" class="fas fa-cart-arrow-down">Cart</i></a>
                        <a href="{{route('user.orders')}}"><i style="font-size: 20px;" class="fas fa-receipt">Orders</i></a>
                            <form action="{{ route('logout') }}" method="POST" style="margin: 0;">
                                @csrf
                                <button type="submit" style="
                                    font-size: 20px;
                                    color: black;
                                    background: none;
                                    border: none;
                                    cursor: pointer;
                                    padding: 30px;">
                                    <i class="fas fa-sign-out-alt">Logout</i>
                                </button>
                            </form>
                        @else
                            <a href="{{route('auth.login')}}"><b><i style="font-size: 20px;">Login</i></b></a>
                            <a href="{{route('register')}}"><b><i style="font-size: 20px;">Register</i></b></a>
                        @endif
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
    <nav class="side-mobile-menu">
        <ul id="mobile-menu-active">
            <li><a href="{{route('home')}}">Home</a>
            </li>
            <li>
                <a href="{{route('products.index')}}">Products</a>
            <li>
            <li><a href="{{route('about')}}">About</a></li>
             <li>   <a href="{{route('contact')}}">Contact</a>
            </li>
        </ul>
    </nav>
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
