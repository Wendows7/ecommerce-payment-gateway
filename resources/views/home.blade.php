@extends('layouts.main')
@section('body')
    @include('sweetalert::alert')

    <main>
    <!-- hero-area start -->
    <section class="hero-area position-relative ">
        <div class="hero-slider-two">
            <div class="slider-active slider-active-one">
                <div class="single-slider slider-height-two d-flex align-items-end " data-background="{{asset('images/k1.jpg')}}">
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
                <div class="single-slider slider-height-two d-flex align-items-end " data-background="{{asset('images/k2.jpg')}}">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="hero-caption-two mb-85">
                                    <span class="text-white" data-animation="fadeInUp" data-delay=".2s">Latest Collection 2025</span>
                                    <h2 class="text-white" data-animation="fadeInUp" data-delay=".4s">Sepatu Kulit Wanit</h2>
                                </div>
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
                        <h4>Shop Under $399</h4>
                        <p>Lorem Ipsum is simply dummy texting of the printing
                            and typesettingi amet industry. Simply Dummy contrasting
                            of the printing and typesetting industry.</p>
                        <a href="#" class="sm-btn text-uppercase">Shop Now</a>
                    </div>
                </div>
                <div class="col-md-4 custom-col">
                    <div class="shop-img mb-30">
                        <a href="shop.html"><img src="img/shop/shop-img-2.jpg" class="img-fluid" alt=""></a>
                    </div>
                </div>
                <div class="col-md-4 custom-col">
                    <div class="shop-img mb-30">
                        <a href="shop.html"><img src="img/shop/shop-img-1.jpg" class="img-fluid" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- discover-area end -->

    <!-- brand-area start -->
    <div class="brand-area pt-100 pb-100 gray-bg">
        <div class="container">
            <div class="row brand-active">
                <div class="col-12">
                    <div class="bt-brand">
                        <a href="#"><img src="img/brand/brand-01.png" alt=""></a>
                    </div>
                </div>
                <div class="col-12">
                    <div class="bt-brand">
                        <a href="#"><img src="img/brand/brand-02.png" alt=""></a>
                    </div>
                </div>
                <div class="col-12">
                    <div class="bt-brand">
                        <a href="#"><img src="img/brand/brand-03.png" alt=""></a>
                    </div>
                </div>
                <div class="col-12">
                    <div class="bt-brand">
                        <a href="#"><img src="img/brand/brand-04.png" alt=""></a>
                    </div>
                </div>
                <div class="col-12">
                    <div class="bt-brand">
                        <a href="#"><img src="img/brand/brand-05.png" alt=""></a>
                    </div>
                </div>
                <div class="col-12">
                    <div class="bt-brand">
                        <a href="#"><img src="img/brand/brand-02.png" alt=""></a>
                    </div>
                </div>
                <div class="col-12">
                    <div class="bt-brand">
                        <a href="#"><img src="img/brand/brand-04.png" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- brand-area end -->

    <!-- banner-area start -->
    <section class="banner-area">
        <div class="container-fluid">
            <div class="row custom-row-5">
                <div class="col-md-6 custom-col-5">
                    <div class="product-banner mb-30 text-center">
                        <a href="shop.html"><img src="img/banner/banner-img-4.jpg" class="img-fluid" alt=""></a>
                        <div class="banner-text">
                            <span class="f-300">For New Customer Only</span>
                            <h3><a href="shop.html">50% Flate - Mobile</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 custom-col-5">
                    <div class="product-banner mb-30 text-center">
                        <a href="shop.html"><img src="img/banner/banner-img-5.jpg" class="img-fluid" alt=""></a>
                        <div class="banner-text">
                            <span class="f-300">For New Customer Only</span>
                            <h3><a href="shop.html">70% Flate - Television</a></h3>
                        </div>
                    </div>
                </div>
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
                            <div class="product-action text-center">
                                <a href="#" data-toggle="tooltip" data-placement="top" title="Shoppingb Cart">
                                    <i class="fal fa-cart-arrow-down"></i>
                                </a>
                                <a href="#" data-toggle="tooltip" data-placement="top" title="Quick View">
                                    <i class="fal fa-eye"></i>
                                </a>
                                <a href="#" data-toggle="tooltip" data-placement="top" title="Compare">
                                    <i class="fal fa-exchange"></i>
                                </a>
                            </div>
                        </div>
                        <div class="pro-text">
                            <div class="pro-title">
                                <h6>
                                    <a href="{{route('products.detail', ['product' => $product->id])}}">{{$product->name}}</a>
                                </h6>
                                <h5 class="pro-price">Rp {{number_format($product->price)}}</h5>
                            </div>
                            <div class="cart-icon">
                                <a href="cart.html"><i class="fal fa-heart"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- product-area end -->

    <!-- newsletter area start -->
    <section class="newsletter-area primary-bg pt-90 pb-90">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="news-wrapper news-wrapper-2 text-center">
                        <h4>40% Flate On Subscription</h4>
                        <p>Lorem Ipsum is simply dummy texting of the printing and typesettingig amet industry</p>
                        <div class="news-form-wrapper news-form-wrapper-2 mt-40 mb-10">
                            <form action="#">
                                <input type="email" placeholder="Email Address">
                                <button type="submit">Subscribe</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- newsletter area end -->

    <!-- banner-area start -->
    <section class="banner-area mt-10">
        <div class="container-fluid">
            <div class="row custom-row-5">
                <div class="col-md-6 custom-col-5">
                    <div class="product-banner text-center mb-30">
                        <a href="shop.html"><img src="img/banner/banner-img-6.jpg" class="img-fluid" alt=""></a>
                        <div class="banner-text">
                            <span class="f-300">For New Customer Only</span>
                            <h3><a href="shop.html">Free Shipping - Earphone</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 custom-col-5">
                    <div class="product-banner text-center mb-30">
                        <a href="shop.html"><img src="img/banner/banner-img-7.jpg" class="img-fluid" alt=""></a>
                        <div class="banner-text">
                            <span class="f-300">For New Customer Only</span>
                            <h3><a href="shop.html">Buy 1 Get 1 Free - Laptop</a></h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- banner-area end -->

</main>

@endsection
