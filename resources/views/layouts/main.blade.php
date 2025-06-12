<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset("img/logo/favicon.png")}}">
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
    <style>.logo img {
            max-width: 100px;
            height: auto;
            display: block;

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
                        <a href="{{route('auth.login')}}"><i style="font-size: 20px;" class="fas fa-user">Profile</i></a>
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
                            <a href="index.html"><img src="{{asset("img/footer/footer-logo.png")}}" class="img-fluid" alt=""></a>
                        </div>
                        <div class="footer-text mt-45">
                            <h6>Phone:<span> +4.509.120.6705</span></h6>
                            <h6>Address:<span> 1418 Riverwood Drive, Suite 3245</span></h6>
                            <span>Cottonwood, CA 96052, United States</span>
                        </div>
                        <div class="footer-payment mt-40">
                            <span>We Accepts:</span>
                            <a href="#"><img src="{{asset("img/footer/payment.png")}}" class="img-fluid" alt=""></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6">
                    <div class="footer-widget mb-30">
                        <h5>Quick Links</h5>
                        <ul class="links">
                            <li><a href="{{route('products.index')}}">Products</a></li>
                            <li><a href="#">About</a></li>
                            <li><a href="#">Contact</a></li>
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
                        <h5>Subscription Offer</h5>
                        <div class="subscription">
                            <form action="#" class="mb-20">
                                <input type="email" placeholder="Enter Email ID">
                                <button type="submit">SEND</button>
                            </form>
                            <p>Sign up to receive updates, promotions, and sneak peaks of upcoming products.</p>
                            <div class="social-icon pt-15">
                                <span>Follow Us On:</span>
                                <a href="#"><i class="fab fa-facebook-square"></i></a>
                                <a href="#"><i class="fab fa-twitter-square"></i></a>
                                <a href="#"><i class="fab fa-linkedin"></i></a>
                                <a href="#"><i class="fab fa-pinterest-square"></i></a>
                                <a href="#"><i class="fab fa-youtube-square"></i></a>
                                <a href="#"><i class="fab fa-behance-square"></i></a>
                            </div>
                        </div>
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
                        <span>© 2020, Retro Theme. Made with passion by Basictheme.</span>
                    </div>
                </div>
                <div class="col-md-6 col-12">
                    <div class="copyright-text text-right">
                        <span>All Right Reserved By Basictheme.</span>
                    </div>
                </div>
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
