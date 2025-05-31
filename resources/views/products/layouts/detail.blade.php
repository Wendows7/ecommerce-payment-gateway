@extends('layouts.main')
@section('body')
<style>
    .size-selector {
        display: flex;
        align-items: center;
        gap: 20px;
        font-family: Arial, sans-serif;
    }

    .size-selector label {
        cursor: pointer;
        font-size: 18px;
        color: #444;
        transition: all 0.2s ease;
    }

    .size-selector input[type="radio"] {
        display: none;
    }

    .size-selector span {
        display: inline-block;
        padding: 4px 8px;
        border-radius: 4px;
        transition: all 0.2s ease;
    }

    /* Hover effect */
    .size-selector label:hover span {
        background-color: #f0f0f0;
        color: #000;
    }

    /* Checked effect */
    .size-selector input[type="radio"]:checked + span {
        font-weight: bold;
        color: #000;
        border-bottom: 2px solid #000;
    }
    .swiper-button-next,
    .swiper-button-prev,
    .slick-prev,
    .slick-next {
        display: none !important;
    }

    .btn-black {
        background-color: #000 !important;
        color: #fff !important;
        border: none;
        padding: 18px 25px;
        border-radius: 4px;
        transition: background 0.2s;
    }
    .btn-black:hover {
        background-color: #222 !important;
        color: #fff !important;
    }
</style>

<main>

    <div class="breadcrumb-bg pt-150 pb-150" data-background="{{asset("img/all-bg/papyrus.png")}}" >
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="page-title text-center">
                        <h2 class="breadcrumb-title">Product Details</h2>
                        <div class="breadcrumb-menu mt-20">
                            <ul class="trail-items">
                                <li class="trail-item trail-begin"><a href="{{route('home')}}">Home</a></li>
                                <li class="trail-item trail-end"><span>Product</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- product details area start -->
    <section class="product-details-area pt-120 pb-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="pro-details-tab">
                        <ul class="nav custom-tab" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">
                                    <img src="{{asset($product->image)}}" class="img-fluid" alt="">
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">
                                    <img src="{{asset($product->image_2)}}" class="img-fluid" alt="">
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">
                                    <img src="{{asset($product->image_3)}}" class="img-fluid" alt="">
                                </a>
                            </li>
                        </ul>
                        <div class="tab-content custom-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <img src="{{asset($product->image)}}" class="img-fluid" alt="">
                            </div>
                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                <img src="{{asset($product->image_2)}}" class="img-fluid" alt="">
                            </div>
                            <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                                <img src="{{asset($product->image_3)}}" class="img-fluid" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="pro-details-content mt-15">
                        <h4>{{$product->name}}</h4>
                        <span class="details-pro-price mb-40">Rp {{number_format($product->price)}}</span>
                        <p>{{$product->description}}</p>
                        <div class="size-wrapper mb-35">
                            <div class="size-selector">
                                <span><strong>Select Size :</strong></span>

                                <label>
                                    <input type="radio" name="shoe_size" value="38" required>
                                    <span>38</span>
                                </label>

                                <label>
                                    <input type="radio" name="shoe_size" value="40">
                                    <span>40</span>
                                </label>

                                <label>
                                    <input type="radio" name="shoe_size" value="42">
                                    <span>42</span>
                                </label>

                                <label>
                                    <input type="radio" name="shoe_size" value="44">
                                    <span>44</span>
                                </label>

                                <label>
                                    <input type="radio" name="shoe_size" value="46">
                                    <span>46</span>
                                </label>
                            </div>
                        </div>
                        <div class="pro-quan-area mb-55">
                            <form action="{{ route('cart.addToCart') }}" method="POST" style="display:inline;">
                                @csrf
                            <div class="product-quantity">
                                <div class="cart-plus-minus"><input type="text" class="quantity-input" value="1" name="quantity"/></div>
                            </div>
                            <div class="pro-cart-btn ml-20">
                                    <input type="hidden" name="product_id" value="{{ $product->id }}">
                                    <button type="submit"
                                            class="action-icon btn-black"
                                            data-toggle="tooltip"
                                            data-placement="top"
                                            title="Add to Cart">
                                        <i class="fal fa-cart-arrow-down"></i> Add to cart
                                    </button>
                                </form>
                            </div>
                        </div>
                        <div class="stock-update">
                            <div class="stock-list">
                                <ul>
                                    <li><span>Stock :</span> <span class="s-text red">{{$product->stock}}</span></li>
                                    <li><span>Category :</span> <span class="s-text"> {{$product->category->name}}</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- product details area end -->

    <!-- product-area start -->
    <section class="product-h-two pt-90 pb-30">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="section-title text-center pb-45">
                        <h4>Related Products</h4>
                    </div>
                </div>
            </div>
            <div class="row product-active common-arrows">
                @foreach($products as $value)
                <div class="col-lg-3 col-sm-6">
                    <div class="product-wrapper mb-40 pb-30">
                        <div class="pro-img mb-10">
                            <a href="{{route('products.detail', ['product' => $value->id])}}"><img src="{{asset($value->image)}}" class="img-fluid" alt=""></a>
                        </div>
                        <div class="pro-text">
                            <div class="pro-title">
                                <h6>
                                    <a href="{{route('products.detail', ['product' => $value->id])}}">{{$value->name}}</a>
                                </h6>
                                <div class="common-price-hover">
                                    <h5 class="pro-price">Rp {{ number_format($value->price)}}</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- product-area end -->
</main>
@endsection
