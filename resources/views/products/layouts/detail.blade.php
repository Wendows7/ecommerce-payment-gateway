@extends('layouts.main')
@section('body')
    @include('products.layouts.modal.checkout')
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
        .size-selector label:hover span {
            background-color: #f0f0f0;
            color: #000;
        }
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

        .popup-modal {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0,0,0,0.5);
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 999;
        }

        /* Hidden class to toggle visibility */
        .popup-modal.hidden {
            display: none;
        }

        /* Content Box */
        .popup-content {
            background-color: #fff;
            padding: 30px;
            border-radius: 8px;
            max-width: 350px;
            width: 90%;
            box-shadow: 0 0 10px rgba(0,0,0,0.2);
            position: relative;
        }

        /* Close Button */
        .close-btn {
            position: absolute;
            top: 12px;
            right: 18px;
            font-size: 22px;
            cursor: pointer;
        }

        /* Form Styling */
        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            display: block;
            font-weight: 600;
            margin-bottom: 6px;
        }

        .form-control {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .btn {
            padding: 8px 16px;
            border-radius: 5px;
            border: none;
            cursor: pointer;
        }

        .btn-primary {
            background-color: #007bff;
            color: white;
        }

        .btn-success {
            background-color: #28a745;
            color: white;
        }

        .out-of-stock {
            filter: blur(1px);
            opacity: 0.5;
            color: #999;
            text-decoration: line-through;
            pointer-events: none;
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
                                <li class="nav-item">
                                    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#size" role="tab" aria-controls="contact" aria-selected="false">
                                        <img src="{{asset('images/uk.jpg')}}" class="img-fluid" alt="">
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
                                <div class="tab-pane fade" id="size" role="tabpanel" aria-labelledby="contact-tab">
                                    <img src="{{asset('images/uk.jpg')}}" class="img-fluid" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="pro-details-content mt-15">
                            <h4>{{$product->name}}</h4>
                            <span class="details-pro-price mb-40">Rp {{number_format($product->price)}}</span>
                            <p>{!! $product->description !!}</p>
                            <div class="size-wrapper mb-35">
                                <div class="size-selector">
                                    <span><strong>Select Size :</strong></span>
                                    @foreach($product->stockProduct as $stock)
                                        <label>
                                            @if($stock->stock == 0)
                                            <input type="radio" class="size-radio" name="size_radio" value="{{ $stock->size }}" disabled>
                                            <span class="out-of-stock">{{ $stock->size }}</span>
                                            @else
                                            <input type="radio" class="size-radio" name="size_radio" value="{{ $stock->size }}" {{ $loop->first ? 'checked' : '' }}>
                                            <span>{{ $stock->size }}</span>
                                            @endif
                                        </label>
                                    @endforeach
{{--                                    <label>--}}
{{--                                        <input type="radio" class="size-radio" name="size_radio" value="39">--}}
{{--                                        <span>39</span>--}}
{{--                                    </label>--}}
{{--                                    <label>--}}
{{--                                        <input type="radio" class="size-radio" name="size_radio" value="40">--}}
{{--                                        <span>40</span>--}}
{{--                                    </label>--}}
{{--                                    <label>--}}
{{--                                        <input type="radio" class="size-radio" name="size_radio" value="41">--}}
{{--                                        <span>41</span>--}}
{{--                                    </label>--}}
{{--                                    <label>--}}
{{--                                        <input type="radio" class="size-radio" name="size_radio" value="42">--}}
{{--                                        <span>42</span>--}}
{{--                                    </label>--}}
{{--                                    <label>--}}
{{--                                        <input type="radio" class="size-radio" name="size_radio" value="43">--}}
{{--                                        <span>43</span>--}}
{{--                                    </label>--}}
                                </div>
                            </div>
                            <div class="pro-quan-area mb-55">
                                <div class="product-quantity">
                                    <div class="cart-plus-minus">
                                        <input type="text" class="quantity-input" value="1" name="quantity_input" min="1"/>
                                    </div>
                                </div>
                                <div class="pro-cart-btn ml-20" style="display:flex;gap:10px;">
                                    <!-- Add to Cart Form -->
                                    <form id="addToCartForm" action="{{ route('cart.addToCart') }}" method="POST" style="display:inline;">
                                        @csrf
                                        <input type="hidden" name="product_id" value="{{ $product->id }}">
                                        <input type="hidden" name="size" id="addToCartSize" value="">
                                        <input type="hidden" name="quantity" id="addToCartQuantity" value="1">
                                        <button type="submit"
                                                class="action-icon btn-black"
                                                data-toggle="tooltip"
                                                data-placement="top"
                                                title="Add to Cart">
                                            <i class="fal fa-cart-arrow-down"></i> Add to cart
                                        </button>
                                    </form>
                                    <!-- Buy Now Form -->
                                    <form id="buyNowForm" action="{{route('product.buy')}}" method="POST" style="display:inline;">
                                        @csrf
                                        <input type="hidden" name="product_id" value="{{ $product->id }}">
                                        <input type="hidden" name="size" id="buyNowSize" value="">
                                        <input type="hidden" name="quantity" id="buyNowQuantity" value="1">
                                        <input type="hidden" name="price" value="{{$product->price}}">
                                        @if(auth()->check())
                                        <input type="hidden" name="user_id" value="{{auth()->user()->id}}">
                                        @endif
                                        <button type="submit"
                                                class="action-icon btn-black"
                                                data-toggle="tooltip"
                                                data-placement="top"
                                                title="Add to Cart">
                                            <i class="fal fa-badge-dollar"></i> Buy Now
                                        </button>
                                    </form>
                                </div>
                            </div>
                            <div class="stock-update">
                                <div class="stock-list">
                                    <ul>
                                        <li><span>Stock :</span> <span class="s-text red">{{$totalStock}}</span></li>
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
                                            <p>({{$product->category->name}})</p>
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

    <script>
        // Size radio toggle (uncheck on second click)
        let lastChecked = null;
        document.querySelectorAll('.size-radio').forEach(function(radio) {
            radio.addEventListener('mousedown', function(e) {
                if (this === lastChecked) {
                    this.checked = false;
                    lastChecked = null;
                    e.preventDefault();
                } else {
                    lastChecked = this;
                }
            });
        });

        // Update hidden fields for both forms
        function updateForms() {
            const selectedSize = document.querySelector('.size-radio:checked');
            const sizeValue = selectedSize ? selectedSize.value : '';
            const quantityValue = document.querySelector('.quantity-input').value;


            document.getElementById('addToCartSize').value = sizeValue;
            document.getElementById('buyNowSize').value = sizeValue;
            document.getElementById('addToCartQuantity').value = quantityValue;
            document.getElementById('buyNowQuantity').value = quantityValue;

        }

        // Listen for changes
        document.querySelectorAll('.size-radio').forEach(function(radio) {
            radio.addEventListener('change', updateForms);
        });
        document.querySelector('.quantity-input').addEventListener('input', updateForms);

        // Prevent submit if size not selected
        document.getElementById('addToCartForm').addEventListener('submit', function(e) {
            if (!document.querySelector('.size-radio:checked')) {
                alert('Please select a size.');
                e.preventDefault();
            }
        });
        document.getElementById('buyNowForm').addEventListener('submit', function(e) {
            if (!document.querySelector('.size-radio:checked')) {
                alert('Please select a size.');
                e.preventDefault();
            }
        });

        // Quantity increment/decrement
        document.querySelector('.cart-plus-minus').addEventListener('click', function(e) {
            const input = this.querySelector('.quantity-input');
            let value = parseInt(input.value) || 1;
            if (e.target.classList.contains('plus')) {
                value++;
            } else if (e.target.classList.contains('minus')) {
                value = Math.max(1, value - 1);
            }
            input.value = value;
            updateForms();
        });

        // Initialize hidden fields on page load
        updateForms();
    </script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @if(session('open_modal'))
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                // Tampilkan SweetAlert setelah checkout berhasil
                Swal.fire({
                    icon: 'success',
                    title: 'Checkout Berhasil',
                    text: 'Pesanan sudah berhasil di buat. Silakan isi data diri untuk melanjutkan ke proses pembayaran.',
                    confirmButtonText: 'OK'
                }).then(function() {
                    // Setelah user klik OK, tampilkan modal form
                    document.getElementById('popupForm').classList.remove('hidden');
                });
                // Pastikan tombol close tetap menutup modal dan menampilkan info payment
                var closeBtn = document.querySelector('#popupForm .close-btn');
                if (closeBtn) {
                    closeBtn.addEventListener('click', function() {
                        document.getElementById('popupForm').classList.add('hidden');
                        Swal.fire({
                            icon: 'info',
                            title: 'Info',
                            text: 'Proses pembayaran bisa dilakukan di halaman Order History.',
                            confirmButtonText: 'OK'
                        }).then(() => window.location.href = '/user/orders');
                    });
                }
            });
        </script>
    @endif

    @if(session('snapToken'))
        <script type="text/javascript"
                src="https://app.sandbox.midtrans.com/snap/snap.js"
                data-client-key="{{env('MIDTRANS_CLIENT_KEY')}}"></script>
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                window.snap.pay('{{ session('snapToken') }}', {
                    onSuccess: function(result){
                        // Check transaction_status from Midtrans response
                        if (result.transaction_status === 'cancel' || result.transaction_status === 'failure' || result.transaction_status === 'deny') {
                            Swal.fire('Payment Cancelled', 'You closed or cancelled the payment.', 'warning');
                        } else if (result.transaction_status === 'pending') {
                            Swal.fire('Payment Pending', 'Please complete your payment.', 'info');
                        } else if (result.transaction_status === 'settlement' || result.transaction_status === 'capture' || result.transaction_status === 'success') {
                            Swal.fire('Payment Success!', 'Your payment was successful.', 'success');
                        } else {
                            Swal.fire('Payment Info', 'Payment status: ' + result.transaction_status, 'info');
                        }
                    },
                    onPending: function(result){
                        Swal.fire('Payment Pending', 'Please complete your payment.', 'info');
                    },
                    onError: function(result){
                        console.log(result);
                        Swal.fire('Payment Failed', 'There was an error processing your payment.', 'error');
                    },
                    onClose: function(){
                        Swal.fire('Payment Cancelled', 'You closed the payment popup.', 'warning');
                    }
                });
            });
        </script>
    @endif

@endsection
