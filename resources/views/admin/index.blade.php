@extends('admin.app', ['title' => 'Dashboard'])
@section('content')
<div class="content-header row">
    <div class="content-header-left col-md-9 col-12 mb-2">
        <div class="row breadcrumbs-top">
            <div class="col-12">
                <h4 class="content-header-title mb-0">Dashboard Gudang Penyimpanan</h4>
            </div>
        </div>
    </div>
</div>
<div class="row match-height">
    <!-- Statistics Card -->
    <div class="col-xl-12 col-md-12 col-12">
        <div class="card card-statistics px-0">
            <div class="card-header d-block px-2">
                <h4 class="card-title">Selamat Datang, {{ Auth::user()->username ?? '' }}</h4>
                <span class="card-subtitle text-gray">Informasi Dashboard</span>
            </div>
            <div class="card-body statistics-body">
                <div class="row justify-content-center">
                    <div class="col-xl-2 col-sm-6 col-12 mb-3">
                        <div class="d-flex flex-row">
                            <div class="avatar bg-light-primary me-2">
                                <div class="avatar-content">
                                    <i data-feather="droplet" class="avatar-icon"></i>
                                </div>
                            </div>
                            <div class="my-auto">
                                <h4 class="fw-bolder mb-0 loader" id="liquidItemTotal">1.123</h4>
                                <p class="card-text font-small-3 mb-0">Barang Cair</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-sm-6 col-12 mb-3">
                        <div class="d-flex flex-row">
                            <div class="avatar bg-light-primary me-2">
                                <div class="avatar-content">
                                    <i data-feather="briefcase" class="avatar-icon"></i>
                                </div>
                            </div>
                            <div class="my-auto">
                                <h4 class="fw-bolder mb-0 loader" id="solidItemTotal">763</h4>
                                <p class="card-text font-small-3 mb-0">Barang Padat</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-sm-6 col-12 mb-3">
                        <div class="d-flex flex-row">
                            <div class="avatar bg-light-primary me-2">
                                <div class="avatar-content">
                                    <i data-feather="users" class="avatar-icon"></i>
                                </div>
                            </div>
                            <div class="my-auto">
                                <h4 class="fw-bolder mb-0 loader" id="memberTotal">1.259</h4>
                                <p class="card-text font-small-3 mb-0">Member Aktif</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-sm-6 col-12 mb-3">
                        <div class="d-flex flex-row">
                            <div class="avatar bg-light-primary me-2">
                                <div class="avatar-content">
                                    <i data-feather="home" class="avatar-icon"></i>
                                </div>
                            </div>
                            <div class="my-auto">
                                <h4 class="fw-bolder mb-0 loader" id="storeTotal">23</h4>
                                <p class="card-text font-small-3 mb-0">Toko Aktif</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-sm-6 col-12 mb-3">
                        <div class="d-flex flex-row">
                            <div class="avatar bg-light-primary me-2">
                                <div class="avatar-content">
                                    <i data-feather="shopping-cart" class="avatar-icon"></i>
                                </div>
                            </div>
                            <div class="my-auto">
                                <h4 class="fw-bolder mb-0 loader" id="orderTotal">57</h4>
                                <p class="card-text font-small-3 mb-0">Pemesanan</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-sm-6 col-12 mb-3">
                        <div class="d-flex flex-row">
                            <div class="avatar bg-light-primary me-2">
                                <div class="avatar-content">
                                    <i data-feather="folder-plus" class="avatar-icon"></i>
                                </div>
                            </div>
                            <div class="my-auto">
                                <h4 class="fw-bolder mb-0 loader" id="stockOrderTotal">23</h4>
                                <p class="card-text font-small-3 mb-0">Permintaan</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 col-12 mb-0">
                        <div class="d-flex flex-row">
                            <div class="avatar bg-light-primary me-2">
                                <div class="avatar-content">
                                    <i data-feather="shopping-bag" class="avatar-icon"></i>
                                </div>
                            </div>
                            <div class="my-auto">
                                <h4 class="fw-bolder mb-0 loader" id="storeTransactionTotal">720.821</h4>
                                <p class="card-text font-small-3 mb-0">Transaksi Toko</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 col-12 mb-0">
                        <div class="d-flex flex-row">
                            <div class="avatar bg-light-primary me-2">
                                <div class="avatar-content">
                                    <i data-feather="truck" class="avatar-icon"></i>
                                </div>
                            </div>
                            <div class="my-auto">
                                <h4 class="fw-bolder mb-0 loader" id="bookingTransactionTotal">230.821</h4>
                                <p class="card-text font-small-3 mb-0">Transaksi Booking</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 col-12 mb-0">
                        <div class="d-flex flex-row">
                            <div class="avatar bg-light-primary me-2">
                                <div class="avatar-content">
                                    <i data-feather="smartphone" class="avatar-icon"></i>
                                </div>
                            </div>
                            <div class="my-auto">
                                <h4 class="fw-bolder mb-0 loader" id="onlineTransactionTotal">332.982</h4>
                                <p class="card-text font-small-3 mb-0">Transaksi Online</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ Statistics Card -->
</div>
<div class="content-body">
    <!-- Basic table -->
    <section id="">
        <div class="row">
            <div class="col-12">
                <div class="card" id="monthIncomesCard">
                    <div class="card-header d-block">
                        <h4 class="card-title">Pendapatan Perbulan (2022)</h4>
                        <span class="card-subtitle text-gray">Grafik Total Pendapatan Perbulan</span>
                    </div>
                    <div class="card-body">
                        <div id="chartPendapatanPerbulan"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-4">
                <div class="card" id="todayIncomesCard">
                    <div class="card-header d-block">
                        <h4 class="card-title">Pendapatan Perhari ({{ date('d-m-Y') }})</h4>
                        <span class="card-subtitle text-gray">Grafik Total Pendapatan Perhari</span>
                    </div>
                    <div class="card-body">
                        <h3>Rp. <span id="totalTodayIncomes">0</span>,-</h3>
                        <div id="chartPendapatanPerhari"></div>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card" id="storeIncomesCard">
                    <div class="card-header d-block">
                        <h4 class="card-title">Toko Pendapatan Tertinggi</h4>
                        <span class="card-subtitle text-gray">Total Pendapatan Toko Tertinggi</span>
                        <div class="row justify-content-between">
                            <div class="col-sm-7">
                                <input type="text" class="form-control flatpickr-basic mt-2" id="dateStoreIncomes" placeholder="00-00-0000" value="{{ date('d-m-Y') }}"/>
                            </div>
                            <div class="col-sm-5 align-self-center mt-2">
                                <button type="button" class="btn btn-primary" id="filterStoreIncomes"><i data-feather="filter"></i> Filter</button>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table table-responsive table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>Toko</th>
                                    <th>Jumlah</th>
                                </tr>
                            </thead>
                            <tbody id="storeIncomes"></tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card" id="bestSellingPerfumesCard">
                    <div class="card-header d-block">
                        <h4 class="card-title">Perfume Terlaris</h4>
                        <span class="card-subtitle text-gray">Jumlah Perfume Terlaris (ML)</span>
                        <div class="row justify-content-between">
                            <div class="col-sm-7">
                                <input type="text" class="form-control flatpickr-basic mt-2" id="dateBestSellingPerfumes" placeholder="00-00-0000" value="{{ date('d-m-Y') }}"/>
                            </div>
                            <div class="col-sm-5 align-self-center mt-2">
                                <button type="submit" class="btn btn-primary" id="filterBestSellingPerfumes"><i data-feather="filter"></i> Filter</button>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table table-responsive table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>Perfume</th>
                                    <th>Jumlah</th>
                                </tr>
                            </thead>
                            <tbody id="bestSellingPerfumes"></tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/ Basic table -->
</div>
@endsection
@section('scripts')
<script>

</script>
@endsection
