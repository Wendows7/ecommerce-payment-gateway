@extends('layouts.main')
@section('body')
    @include('customer.modal.order-view')
    @include('customer.modal.checkout')
    <style>
        .order-table-container {
            background: #fff;
            border-radius: 12px;
            box-shadow: 0 2px 16px rgba(0,0,0,0.07);
            padding: 24px;
            margin-top: 32px;
        }
        .table thead th {
            background: #f8f9fa;
            font-weight: 700;
            border-bottom: 2px solid #dee2e6;
        }
        .badge-status {
            padding: 6px 14px;
            border-radius: 12px;
            font-size: 0.95em;
        }
        .badge-status.pending { background: #ffe082; color: #856404; }
        .badge-status.success { background: #c8e6c9; color: #256029; }
        .badge-status.cancel { background: #ffcdd2; color: #b71c1c; }
        .badge-status.other { background: #e3e3e3; color: #333; }

        .order-table-container {
            background: #fff;
            border-radius: 12px;
            box-shadow: 0 2px 16px rgba(0,0,0,0.07);
            padding: 24px;
            margin-top: 32px;
            margin-bottom: 150px; /* Add this for spacing below the table */
        }
    </style>

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
            width: 400px;
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
                            <h2 class="breadcrumb-title">Order History</h2>
                            <div class="breadcrumb-menu mt-20">
                                <ul class="trail-items">
                                    <li class="trail-item trail-begin"><a href="{{ route('home') }}">Home</a></li>
                                    <li class="trail-item trail-end"><span>order History</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="order-table-container mx-auto" style="max-width: 1500px;">
        <div class="table-responsive">
            <table class="table table-bordered table-striped table-hover align-middle mb-0">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Order Code</th>
                    <th>Date</th>
                    <th>Price</th>
                    <th>Payment Method</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @forelse($orders as $index => $order)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $order['order_code'] ?? '-' }}</td>
                        <td>{{ $order['created_at'] ? $order['created_at']->timezone('Asia/Jakarta')->format('d M Y H:i') : '-' }}</td>
                        <td>Rp {{number_format($order['total_price']) }}</td>
                        @if(empty($order['payment'][0]))
                            <td>-</td>
                        @else
                        <td>{{$order['payment'][0]->name }}</td>
                        @endif
                        <td>
                            @php
                                $status = strtolower($order['status'] ?? 'other');
                                $badgeClass = match($status) {
                                    'pending' => 'pending',
                                    'success', 'settlement', 'paid' => 'success',
                                    'cancel', 'failed', 'deny' => 'cancel',
                                    default => 'other'
                                };
                            @endphp
                            <span class="badge badge-status {{ $badgeClass }}">
                            {{ ucfirst($order['status'] ?? '-') }}
                        </span>
                        </td>
                        <td>
                            <div style="display: flex; gap: 8px; align-items: center;">
                                <button class="btn btn-sm btn-primary" data-toggle="modal" data-target="#detailModal{{ $order['order_code'] }}">Detail</button>
                                @if($order['status'] == 'pending')
                                    <button type="button"
                                            class="btn btn-sm btn-success pay-button"
                                            data-target="#popupForm{{ $order['order_code'] }}"
                                            data-order-code="{{ $order['order_code'] }}">
                                        Payment
                                    </button>
                                    <form method="post" action="{{route('user.cancelOrderByOrderCode', ["orderCode" => $order['order_code']])}}" style="margin: 0;">
                                        @csrf
                                        <button type="submit"
                                                class="btn btn-sm btn-danger show_confirm mt-1">
                                            Cancel
                                        </button>
                                    </form>
                                @endif
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="text-center">No order history found.</td>
                    </tr>
                @endforelse
                </tbody>
            </table>
            {{$orders->links('layouts.pagination')}}
        </div>
    </div>
    </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Open the correct modal on Payment button click
            document.querySelectorAll('.pay-button').forEach(function(button) {
                button.addEventListener('click', function () {
                    var target = this.getAttribute('data-target');
                    var modal = document.querySelector(target);
                    if (modal) modal.classList.remove('hidden');
                });
            });

            // Close modal on close button click
            document.querySelectorAll('.close-btn').forEach(function(btn) {
                btn.addEventListener('click', function () {
                    var modal = btn.closest('.popup-modal');
                    if (modal) modal.classList.add('hidden');
                });
            });
        });

    </script>
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

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            document.querySelectorAll('.show_confirm').forEach(function(button) {
                button.addEventListener('click', function(e) {
                    e.preventDefault();
                    const form = this.closest('form');
                    Swal.fire({
                        title: 'Are you sure?',
                        text: "Do you want to cancel this order?",
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#d33',
                        cancelButtonColor: '#3085d6',
                        confirmButtonText: 'Yes, cancel it!',
                        cancelButtonText: 'No'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            form.submit();
                        }
                    });
                });
            });
        });
    </script>


@endsection
