@extends('dashboard.layouts.main')

@section('title', 'Chart.JS')

@push('style')
    <!-- CSS Libraries -->
@endpush

@section('body')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Report</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                    <div class="breadcrumb-item">Home</div>
                </div>
            </div>

            <div class="section-body">
                <h2 class="section-title">Laporan Keuangan</h2>
                <p class="section-lead">
                    Berikut adalah laporan penjualan
                </p>

                <div class="row">
                    <div class="col-12 col-md-6 col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h4>Total Penjualan Perbulan</h4>
                            </div>
                            <div class="card-body">
                                <canvas id="myChart2"></canvas>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h4>Produk Terlaris</h4>
                            </div>
                            <div class="card-body">
                                <canvas id="myChart4"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

@push('scripts')
    <!-- JS Libraies -->
    <script src="{{ asset('assets/library/chart.js/dist/Chart.min.js') }}"></script>

    <!-- Page Specific JS File -->
    <script src="{{ asset('assets/js/page/modules-chartjs.js') }}"></script>
@endpush
