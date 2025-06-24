@extends('layouts.main')

@section('body')
@include('cart.modal.checkout')
{{--@include('payment.testing.midtrans')--}}

    <style>/* Popup Modal */
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
    </style>
    <main>
        <div class="breadcrumb-bg pt-150 pb-150" data-background="{{ asset('img/all-bg/papyrus.png') }}">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="page-title text-center">
                            <h2 class="breadcrumb-title">Shopping Cart</h2>
                            <div class="breadcrumb-menu mt-20">
                                <ul class="trail-items">
                                    <li class="trail-item trail-begin"><a href="{{ route('home') }}">Home</a></li>
                                    <li class="trail-item trail-end"><span>Cart</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <section class="cart-area pt-100 pb-100">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <form action="{{ route('cart.checkout') }}" method="POST">
                            @csrf
                            <div class="table-content table-responsive">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th class="product-thumbnail">Images</th>
                                        <th class="cart-product-name">Product</th>
                                        <th class="cart-product-name">Size</th>
                                        <th class="product-price">Unit Price</th>
                                        <th class="product-quantity">Quantity</th>
                                        <th class="product-subtotal">Total</th>
                                        <th class="product-remove">Remove</th>
                                    </tr>
                                    </thead>
                                    @if(session('cart'))
                                        <tbody>
                                        @foreach(session('cart') as $id => $details)
                                            <tr class="cart-item" data-id="{{ $id }}">
                                                <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
                                                <td class="product-thumbnail"><a href="#"><img src="{{ asset($details['image']) }}" alt="{{ $details['name'] }}"></a></td>
                                                <td class="product-name"><a href="#">{{ $details['name'] }}</a></td>
                                                <td class="product-size">
                                                    <select class="size-select" data-id="{{ $id }}">
                                                        @foreach([39, 40, 41, 42, 43] as $size)
                                                            <option value="{{ $size }}" @if($details['size'] == $size) selected @endif>{{ $size }}</option>
                                                        @endforeach
                                                    </select>
                                                </td>
                                                <td>
                                                    <span class="amount price" data-price="{{ $details['price'] }}">Rp {{ number_format($details['price']) }}</span>
                                                </td>
                                                <td>
                                                    <div class="quantity-input-wrapper" style="display: inline-flex; align-items: center; border: 1px solid #ccc; border-radius: 5px; overflow: hidden;">
                                                        <button type="button" class="quantity-btn quantity-minus" data-id="{{ $id }}" style="padding: 5px 10px; border: none; background: none; cursor: pointer;">-</button>
                                                        <input type="number" class="quantity-input" data-id="{{ $id }}" value="{{ $details['quantity'] }}" min="1" style="width: 40px; text-align: center; border: none;">
                                                        <button type="button" class="quantity-btn quantity-plus" data-id="{{ $id }}" style="padding: 5px 10px; border: none; background: none; cursor: pointer;">+</button>
                                                    </div>
                                                </td>
                                                <td>
                                                    <span class="amount subtotal" data-subtotal="{{ $details['price'] * $details['quantity'] }}">Rp {{ number_format($details['price'] * $details['quantity']) }}</span>
                                                </td>
                                                <td><a href="{{ route('cart.remove', $id) }}"><i class="fa fa-times"></i></a></td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    @else
                                        <tbody>
                                        <tr><td colspan="7" class="text-center">Your cart is empty.</td></tr>
                                        </tbody>
                                    @endif
                                </table>
                            </div>

{{--                            <div class="row">--}}
{{--                                <div class="col-12">--}}
{{--                                    <div class="coupon-all">--}}
{{--                                        <div class="coupon">--}}
{{--                                            <input id="coupon_code" class="input-text" name="coupon_code" value="" placeholder="Coupon code" type="text">--}}
{{--                                            <button class="bt-btn theme-btn-2" name="apply_coupon" type="submit">Apply coupon</button>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}

                            <div class="row">
                                <div class="col-md-5 ml-auto">
                                    <div class="cart-page-total">
                                        <h2>Cart totals</h2>
                                        <ul class="mb-20">
                                            <li class="order-total">Total <span class="total-amount">Rp 0</span></li>
                                        </ul>
                                        <button type="submit" class="bt-btn theme-btn">Checkout</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>


<script>
    document.addEventListener('DOMContentLoaded', function () {
        const totalAmountElement = document.querySelector('.total-amount');

        function formatRupiah(number) {
            return 'Rp ' + new Intl.NumberFormat('id-ID').format(number);
        }

        function updateSubtotal(itemId) {
            const itemRow = document.querySelector(`.cart-item[data-id="${itemId}"]`);
            const priceElement = itemRow.querySelector('.price');
            const quantityInput = itemRow.querySelector('.quantity-input');
            const subtotalElement = itemRow.querySelector('.subtotal');
            const price = parseFloat(priceElement.dataset.price);
            const quantity = parseInt(quantityInput.value);
            const subtotal = price * quantity;
            subtotalElement.textContent = formatRupiah(subtotal);
            subtotalElement.dataset.subtotal = subtotal;
            updateTotal();
            // Also send current size
            const sizeSelect = itemRow.querySelector('.size-select');
            const size = sizeSelect ? sizeSelect.value : undefined;
            updateCartSession(itemId, quantity, size);
        }

        function updateTotal() {
            let total = 0;
            document.querySelectorAll('.subtotal').forEach(el => {
                total += parseFloat(el.dataset.subtotal);
            });
            totalAmountElement.textContent = formatRupiah(total);
        }

        function updateCartSession(itemId, quantity, size) {
            fetch('/cart/updateQuantity', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}',
                },
                body: JSON.stringify({ id: itemId, quantity: quantity, size: size })
            });
        }

        // Plus button
        document.querySelectorAll('.quantity-plus').forEach(button => {
            button.addEventListener('click', function () {
                const id = this.dataset.id;
                const input = document.querySelector(`.quantity-input[data-id="${id}"]`);
                input.value = parseInt(input.value) + 1;
                updateSubtotal(id);
            });
        });

        // Minus button
        document.querySelectorAll('.quantity-minus').forEach(button => {
            button.addEventListener('click', function () {
                const id = this.dataset.id;
                const input = document.querySelector(`.quantity-input[data-id="${id}"]`);
                if (parseInt(input.value) > 1) {
                    input.value = parseInt(input.value) - 1;
                    updateSubtotal(id);
                }
            });
        });

        // Manual input
        document.querySelectorAll('.quantity-input').forEach(input => {
            input.addEventListener('change', function () {
                const id = this.dataset.id;
                if (parseInt(this.value) < 1) this.value = 1;
                updateSubtotal(id);
            });
        });

        // Size select
        document.querySelectorAll('.size-select').forEach(select => {
            select.addEventListener('change', function () {
                const id = this.dataset.id;
                const size = this.value;
                const quantity = document.querySelector(`.quantity-input[data-id="${id}"]`).value;
                updateCartSession(id, quantity, size);
            });
        });

        // Init on load
        updateTotal();
    });
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


@if(request('snapToken'))
    <button id="pay-button" style="display:none;"></button>
    <script type="text/javascript"
            src="https://app.sandbox.midtrans.com/snap/snap.js"
            data-client-key="{{env('MIDTRANS_CLIENT_KEY')}}"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            window.snap.pay('{{ request('snapToken') }}', {
                onSuccess: function(result){
                    // Check transaction_status from Midtrans response
                    if (result.transaction_status === 'cancel' || result.transaction_status === 'failure' || result.transaction_status === 'deny') {
                        Swal.fire('Payment Cancelled', 'You closed or cancelled the payment.', 'warning')
                            .then(() => window.location.href = '/user/orders');
                    } else if (result.transaction_status === 'pending') {
                        Swal.fire('Payment Pending', 'Please complete your payment.', 'info')
                            .then(() => window.location.href = '/user/orders');
                    } else if (result.transaction_status === 'settlement' || result.transaction_status === 'capture' || result.transaction_status === 'success') {
                        Swal.fire('Payment Success!', 'Your payment was successful.', 'success')
                            .then(() => window.location.href = '/user/orders');
                    } else {
                        Swal.fire('Payment Info', 'Payment status: ' + result.transaction_status, 'info')
                            .then(() => window.location.href = '/user/orders');
                    }
                },
                onPending: function(result){
                    Swal.fire('Payment Pending', 'Please complete your payment.', 'info')
                        .then(() => window.location.href = '/user/orders');;
                },
                onError: function(result){
                    Swal.fire('Payment Failed', 'There was an error processing your payment.', 'error')
                        .then(() => window.location.href = '/user/orders');;
                },
                onClose: function(){
                    Swal.fire('Payment Cancelled', 'You closed the payment popup.', 'warning')
                        .then(() => window.location.href = '/user/orders');
                }
            });
        });
    </script>
@endif


@endsection


