@extends('layouts.main')
@section('body')
    @include('sweetalert::alert')

    <main>
    <!-- hero-area start -->
{{--    <section class="hero-area position-relative ">--}}
{{--        <div class="hero-slider-two">--}}
{{--            <div class="slider-active slider-active-one">--}}
{{--                <div class="single-slider slider-height-two d-flex align-items-end " data-background="{{asset('images/k1.jpg')}}">--}}
{{--                    <div class="container">--}}
{{--                        <div class="row">--}}
{{--                            <div class="col-lg-12">--}}
{{--                                <div class="hero-caption-two mb-85">--}}
{{--                                    <span class="text-white" data-animation="fadeInUp" data-delay=".2s">Latest Collection 2025</span>--}}
{{--                                    <h2 class="text-white" data-animation="fadeInUp" data-delay=".4s">Sepatu Kulit Pria</h2>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="single-slider slider-height-two d-flex align-items-end " data-background="{{asset('images/k2.jpg')}}">--}}
{{--                    <div class="container">--}}
{{--                        <div class="row">--}}
{{--                            <div class="col-lg-12">--}}
{{--                                <div class="hero-caption-two mb-85">--}}
{{--                                    <span class="text-white" data-animation="fadeInUp" data-delay=".2s">Latest Collection 2025</span>--}}
{{--                                    <h2 class="text-white" data-animation="fadeInUp" data-delay=".4s">Sepatu Kulit Wanit</h2>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}

{{--        <section class="hero-area position-relative ">--}}
{{--            <div class="hero-slider-two">--}}
{{--                <div class="slider-active slider-active-one">--}}
{{--                    <div class="single-slider slider-height-two d-flex align-items-end" data-background="images/k1.jpg">--}}
{{--                        <div class="container">--}}
{{--                            <div class="row">--}}
{{--                                <div class="col-lg-12">--}}
{{--                                    <div class="hero-caption-two mb-85">--}}
{{--                                        <span class="text-white" data-animation="fadeInUp" data-delay=".2s">Latest Collection 2025</span>--}}
{{--                                        <h2 class="text-white" data-animation="fadeInUp" data-delay=".4s">Sepatu Kulit Pria</h2>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="single-slider slider-height-two d-flex align-items-end" data-background="images/k2.jpg">--}}
{{--                        <div class="container">--}}
{{--                            <div class="row">--}}
{{--                                <div class="col-lg-12">--}}
{{--                                    <div class="hero-caption-two mb-85">--}}
{{--                                        <span class="text-white" data-animation="fadeInUp" data-delay=".2s">Latest Collection 2025</span>--}}
{{--                                        <h2 class="text-white" data-animation="fadeInUp" data-delay=".4s">Sepatu Kulit Wanita</h2>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </section>--}}

        <section class="hero-area">
            <div class="hero-slider-slick">
                <div class="single-slider-slick slider-height-two d-flex align-items-end" data-background="images/k1.jpg">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="hero-caption-two mb-85">
                                    <span class="text-white" data-animation="fadeInUp" data-delay=".2s">Latest Collection 2025</span>
                                    <h2 class="text-white" data-animation="fadeInUp" data-delay=".4s">Sepatu Kulit Pria</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-slider-slick slider-height-two d-flex align-items-end" data-background="images/k2.jpg">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="hero-caption-two mb-85">
                                    <span class="text-white" data-animation="fadeInUp" data-delay=".2s">Latest Collection 2025</span>
                                    <h2 class="text-white" data-animation="fadeInUp" data-delay=".4s">Sepatu Kulit Wanita</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- hero-area end -->

    <!-- discover-area start -->
    <section class="shop-area pt-100 pb-70">
        <div class="container">
            <div class="row align-items-center custom-row">
                <div class="col-md-4 custom-col">
                    <div class="shop-text mb-30">
                        <h4>Our Store</h4>
                        <p>Jl. Arief Rahman Hakim No.206C, Sukaramai I, Kec. Medan Area, Kota Medan, Sumatera Utara 20216</p>
                        <a href="https://maps.app.goo.gl/s5nW6ubZrgFut7Wu9" target="_blank" class="sm-btn text-uppercase">Visit Now</a>
                    </div>
                </div>
                <div class="col-md-4 custom-col">
                    <div class="shop-img mb-30">
                        <img src="{{asset('images/toko.jpeg')}}" class="img-fluid" alt="">
                    </div>
                </div>
                <div class="col-md-4 custom-col">
                    <div class="shop-img mb-30">
                        <img src="{{asset('images/etalase.png')}}" class="img-fluid" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- discover-area end -->

    <!-- brand-area start -->
{{--    <div class="brand-area pt-100 pb-100 gray-bg">--}}
{{--        <div class="container">--}}
{{--            <div class="row brand-active">--}}
{{--                <div class="col-12">--}}
{{--                    <div class="bt-brand">--}}
{{--                        <a href="#"><img src="img/brand/brand-01.png" alt=""></a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-12">--}}
{{--                    <div class="bt-brand">--}}
{{--                        <a href="#"><img src="img/brand/brand-02.png" alt=""></a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-12">--}}
{{--                    <div class="bt-brand">--}}
{{--                        <a href="#"><img src="img/brand/brand-03.png" alt=""></a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-12">--}}
{{--                    <div class="bt-brand">--}}
{{--                        <a href="#"><img src="img/brand/brand-04.png" alt=""></a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-12">--}}
{{--                    <div class="bt-brand">--}}
{{--                        <a href="#"><img src="img/brand/brand-05.png" alt=""></a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-12">--}}
{{--                    <div class="bt-brand">--}}
{{--                        <a href="#"><img src="img/brand/brand-02.png" alt=""></a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-12">--}}
{{--                    <div class="bt-brand">--}}
{{--                        <a href="#"><img src="img/brand/brand-04.png" alt=""></a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
    <!-- brand-area end -->

    <!-- banner-area start -->
        <br>
        <section class="banner-area">
            <div class="container-fluid">
                <div class="section-title text-center pb-45">
                    <h4>Most Sold Products</h4>
                    <span>Dibawah ini adalah produk kami yang paling banyak terjual.</span>
                </div>
                <div class="row custom-row-5">
                    @if($mostSoldProducts->first() == null)
                        <div class="col-12">
                            <div class="alert alert-info text-center">
                                <i><b>Not Found.</b></i>
                            </div>
                        </div>
                    @endif
                        @foreach($mostSoldProducts as $product)
                    <div class="col-md-6 custom-col-5">
                            <div class="product-banner mb-30 text-center">
                                <a href="{{route('products.detail', ['product' => $product->product->id])}}">
                                    <img src="{{asset($product->product->image)}}" class="img-fluid banner-product-img" alt="">
                                </a>
                                <div class="banner-text">
                                    <h3><a href="{{route('products.detail', ['product' => $product->product->id])}}">{{$product->product->name}}</a></h3>
                                </div>
                            </div>
                    </div>
                        @endforeach
                </div>
            </div>
        </section>
    <!-- banner-area end -->

    <!-- product-area start -->
    <section class="product-h-two pt-60 pb-60">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="section-title text-center pb-45">
                        <h4>Latest Products</h4>
                        <span>Dibawah ini adalah produk produk terbaru kami.</span>
                    </div>
                </div>
            </div>
            <div class="row custom-row-10">
                @foreach($products as $product)
                <div class="col-lg-3 col-sm-6 custom-col-10">
                    <div class="product-wrapper mb-40">
                        <div class="pro-img mb-20">
                            <a href="{{route('products.detail', ['product' => $product->id])}}"><img src="{{asset($product->image)}}" class="img-fluid" alt=""></a>
                        </div>
                        <div class="pro-text">
                            <div class="pro-title">
                                <h6>
                                    <a href="{{route('products.detail', ['product' => $product->id])}}">{{$product->name}}</a>
                                    <p>({{$product->category->name}})</p>
                                </h6>
                                <h5 class="pro-price">Rp {{number_format($product->price)}}</h5>
                            </div>
{{--                            <div class="cart-icon">--}}
{{--                                <a href="cart.html"><i class="fal fa-heart"></i></a>--}}
{{--                            </div>--}}
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- product-area end -->

    <!-- newsletter area start -->
{{--    <section class="newsletter-area primary-bg pt-90 pb-90">--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <div class="col-sm-12">--}}
{{--                    <div class="news-wrapper news-wrapper-2 text-center">--}}
{{--                        <h4>40% Flate On Subscription</h4>--}}
{{--                        <p>Lorem Ipsum is simply dummy texting of the printing and typesettingig amet industry</p>--}}
{{--                        <div class="news-form-wrapper news-form-wrapper-2 mt-40 mb-10">--}}
{{--                            <form action="#">--}}
{{--                                <input type="email" placeholder="Email Address">--}}
{{--                                <button type="submit">Subscribe</button>--}}
{{--                            </form>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}
    <!-- newsletter area end -->

    <!-- banner-area start -->
{{--    <section class="banner-area mt-10">--}}
{{--        <div class="container-fluid">--}}
{{--            <div class="row custom-row-5">--}}
{{--                <div class="col-md-6 custom-col-5">--}}
{{--                    <div class="product-banner text-center mb-30">--}}
{{--                        <a href="shop.html"><img src="img/banner/banner-img-6.jpg" class="img-fluid" alt=""></a>--}}
{{--                        <div class="banner-text">--}}
{{--                            <span class="f-300">For New Customer Only</span>--}}
{{--                            <h3><a href="shop.html">Free Shipping - Earphone</a></h3>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-md-6 custom-col-5">--}}
{{--                    <div class="product-banner text-center mb-30">--}}
{{--                        <a href="shop.html"><img src="img/banner/banner-img-7.jpg" class="img-fluid" alt=""></a>--}}
{{--                        <div class="banner-text">--}}
{{--                            <span class="f-300">For New Customer Only</span>--}}
{{--                            <h3><a href="shop.html">Buy 1 Get 1 Free - Laptop</a></h3>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}
    <!-- banner-area end -->



</main>

    <style>
        .banner-product-img {
            width: 945px;
            height: 645px;
            object-fit: cover;
            display: block;
            margin-left: auto;
            margin-right: auto;
        }
    </style>

    <style>
        /* --- Hero Slider Styling --- */
        .hero-area {
            position: relative;
            width: 100%;
            overflow: hidden;
        }
        .hero-slider-slick {
            position: relative;
        }
        .single-slider-slick {
            min-height: 600px;
            display: flex !important;
            align-items: flex-end;
            background-size: cover;
            background-position: center;
            position: relative;
        }
        .single-slider-slick::before {
            content: '';
            position: absolute;
            inset: 0;
            background: rgba(0,0,0,0.4);
            z-index: 1;
        }
        .slider-caption {
            position: relative;
            z-index: 2;
            color: #fff;
            margin: 0 0 85px 60px;
        }
        .slider-caption span {
            font-size: 20px;
            font-weight: 400;
            display: block;
            margin-bottom: 10px;
        }
        .slider-caption h2 {
            font-size: 64px;
            font-weight: 800;
            margin-bottom: 0;
        }
        /* Responsive */
        @media (max-width: 768px) {
            .single-slider-slick {
                min-height: 350px;
            }
            .slider-caption {
                margin: 0 0 40px 20px;
            }
            .slider-caption h2 {
                font-size: 32px;
            }
            .slider-caption span {
                font-size: 14px;
            }
        }
        /* Slick dots position */
        .slick-dots {
            bottom: 30px;
        }

        .single-slider {
            display: none;
            height: 600px;
            background-size: cover;
            background-position: center;
            position: relative;
            transition: opacity 0.5s;
        }
        .single-slider.active,
        .single-slider.slick-active,
        .single-slider.slick-current {
            display: block;
        }
        .single-slider::before {
            content: '';
            position: absolute;
            inset: 0;
            background: rgba(0,0,0,0.4);
            z-index: 1;
        }
        .hero-caption-two {
            position: relative;
            z-index: 2;
        }

    </style>
    <!-- jQuery & Slick JS -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script>
        $(document).ready(function(){
            // Set background-image from data-bg attribute
            $('.single-slider-slick').each(function(){
                var bg = $(this).attr('data-bg');
                if(bg) $(this).css('background-image', 'url(' + bg + ')');
            });

            // Initialize Slick
            $('.hero-slider-slick').slick({
                slidesToShow: 1,
                slidesToScroll: 1,
                arrows: false,         // Set true jika ingin tombol panah
                dots: false,            // Show pagination dots
                autoplay: true,
                autoplaySpeed: 3500,
                fade: true,
                speed: 900,
                pauseOnHover: false,
            });
        });
    </script>









@endsection
