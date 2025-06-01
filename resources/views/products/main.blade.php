@extends('layouts.main')
@section('body')
    <style>
        .action-icon {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 45px;
            height: 45px;
            border-radius: 50%;
            background-color: white;
            color: black;
            font-size: 20px;
            transition: all 0.3s ease;
            border: none;
            cursor: pointer;
            margin: 0 5px;
            text-decoration: none;
        }

        .action-icon:hover {
            background-color: black;
            color: white;
        }
        .action-icon-2 {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 45px;
            height: 45px;
            border-radius: 50%;
            background-color: black;
            color: white;
            font-size: 20px;
            transition: all 0.3s ease;
            border: none;
            cursor: pointer;
            margin: 0 5px;
            text-decoration: none;
        }

        .action-icon-2:hover {
            background-color: mediumseagreen;
            color: white;
        }
    </style>
    <main>
        <div class="breadcrumb-bg pt-150 pb-150" data-background="{{asset("img/all-bg/papyrus.png")}}">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="page-title text-center">
                            <h2 class="breadcrumb-title">List Products</h2>
                            <div class="breadcrumb-menu mt-20">
                                <ul class="trail-items">
                                    <li class="trail-item trail-begin"><a href="/">Home</a></li>
                                    <li class="trail-item trail-end"><span>Products</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- shop sidebar start -->
        <section class="shop-sidebar pt-75">
            <div class="container">
                <div class="shop-content-area">
                    <div class="content-header mb-55">
                        <div class="ch-left">
                            <ul class="nav shop-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true"><i class="fas fa-th"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false"><i class="fas fa-list-ul"></i></a>
                                </li>
                            </ul>
                        </div>
                        <div class="ch-right">
                            <div class="show-text">
                                <span>Showing 1-{{$products->count()}} of {{$totalProduct}} results</span>
                            </div>
                            <div class="sort-wrapper">
                                <select id="sortBySelect" onchange="if(this.value) window.location.href=this.value;">
                                    <option value="/products" selected>None</option>
                                    <option value="{{ route('products.shortBy', ['shortBy' => 'price']) }}">Price</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="tab-content shop-tabs-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <div class="row custom-row-10">
                                @foreach($products as $product)
                                    <div class="col-lg-3 col-sm-6 custom-col-10">
                                        <div class="product-wrapper mb-40">
                                            <div class="pro-img mb-20">
                                                @if(empty($product->image))
                                                    <a href="{{route('products.detail', ['product' => $product->id])}}"><img src="{{asset("img/product/product-9.jpg")}}" class="img-fluid" alt=""></a>
                                                @else
                                                    <a href="{{route('products.detail', ['product' => $product->id])}}"><img src="{{asset($product->image)}}" class="img-fluid" alt=""></a>
                                                @endif
                                                <div class="product-action text-center">
                                                    <form action="{{ route('cart.addToCart') }}" method="POST" style="display:inline;">
                                                        @csrf
                                                        <input type="hidden" name="product_id" value="{{ $product->id }}">
                                                        <input type="hidden" name="quantity" value="1">
                                                        <input type="hidden" name="size" value="39">

                                                        <button type="submit"
                                                                class="action-icon"
                                                                data-toggle="tooltip"
                                                                data-placement="top"
                                                                title="Add to Cart">
                                                            <i class="fal fa-cart-arrow-down"></i>
                                                        </button>
                                                    </form>

                                                    <a href="{{ route('products.detail', ['product' => $product->id]) }}">
                                                        <i class="fal fa-eye"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="pro-text">
                                                <div class="pro-title">
                                                    <h6>
                                                        <a href="product-details.html">{{$product->name}}</a>
                                                        <p>({{$product->category->name}})</p>
                                                    </h6>
                                                    <h5 class="pro-price">Rp.{{number_format($product->price)}}</h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            @foreach($products as $product)
                                <div class="row mb-20">
                                    <div class="col-lg-4 col-sm-6 custom-col-10">
                                        <div class="product-wrapper mb-30">
                                            <div class="pro-img mb-20">
                                                @if(empty($product->image))
                                                    <a href="{{route('products.detail', ['product' => $product->id])}}"><img src="{{asset("img/product/product-9.jpg")}}" class="img-fluid" alt=""></a>
                                                @else
                                                    <a href="{{route('products.detail', ['product' => $product->id])}}"><img src="{{asset($product->image)}}" class="img-fluid" alt=""></a>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-8 col-sm-6 custom-col-10">
                                        <div class="product-wrapper pro-list-content mb-40">
                                            <div class="pro-text">
                                                <div class="pro-title">
                                                    <h6>
                                                        <a href="{{route('products.detail', ['product' => $product->id])}}">{{$product->name}}</a>
                                                    </h6>
                                                    <h5 class="pro-price">Rp.{{number_format($product->price)}}</h5>
                                                </div>
                                                <p>{{$product->description}}
                                                </p>
                                                <div class="product-action">
                                                    <form action="{{ route('cart.addToCart') }}" method="POST" style="display:inline;">
                                                        @csrf
                                                        <input type="hidden" name="product_id" value="{{ $product->id }}">
                                                        <input type="hidden" name="quantity" value="1">

                                                        <button type="submit"
                                                                class="action-icon-2"
                                                                data-toggle="tooltip"
                                                                data-placement="top"
                                                                title="Add to Cart">
                                                            <i class="fal fa-cart-arrow-down"></i>
                                                        </button>
                                                    </form>
                                                    <a href="{{route('products.detail', ['product' => $product->id])}}">
                                                        <i class="fal fa-eye"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                {{$products->links('layouts.pagination')}}
            </div>
        </section>
        <!-- shop sidebar end -->

    </main>


@endsection
