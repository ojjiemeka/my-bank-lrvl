@extends('layouts.user')

@section('content')

    <!-- Page Content - Only Page Elements Here-->
    <div class="page-content footer-clear">

        <!-- Page Title-->
        <div class="pt-3">
            <div class="page-title d-flex">
                <div class="align-self-center me-auto">
                    <p class="color-highlight">Hello Enabled</p>
                    <h1 class="color-theme">Exchange</h1>
                </div>
                <div class="align-self-center ms-auto">
                    <a href="#"
                    data-bs-toggle="offcanvas"
                    data-bs-target="#menu-notifications"
                    class="icon gradient-blue color-white shadow-bg shadow-bg-xs rounded-m">
                        <i class="bi bi-bell-fill font-17"></i>
                        <em class="badge bg-red-dark color-white scale-box">3</em>
                    </a>
                    <a href="#"
                    data-bs-toggle="dropdown"
                    class="icon gradient-blue shadow-bg shadow-bg-s rounded-m">
                        <img src="images/pictures/25s.jpg" width="45" class="rounded-m" alt="img">
                    </a>
                    <!-- Page Title Dropdown Menu-->
                    <div class="dropdown-menu">
                        <div class="card card-style shadow-m mt-1 me-1">
                            <div class="list-group list-custom list-group-s list-group-flush rounded-xs px-3 py-1">
                                <a href="page-wallet.html" class="list-group-item">
                                    <i class="has-bg gradient-green shadow-bg shadow-bg-xs color-white rounded-xs bi bi-credit-card"></i>
                                    <strong class="font-13">Wallet</strong>
                                </a>
                                <a href="page-activity.html" class="list-group-item">
                                    <i class="has-bg gradient-blue shadow-bg shadow-bg-xs color-white rounded-xs bi bi-graph-up"></i>
                                    <strong class="font-13">Activity</strong>
                                </a>
                                <a href="page-profile.html" class="list-group-item">
                                    <i class="has-bg gradient-yellow shadow-bg shadow-bg-xs color-white rounded-xs bi bi-person-circle"></i>
                                    <strong class="font-13">Account</strong>
                                </a>
                                <a href="page-signin-1.html" class="list-group-item">
                                    <i class="has-bg gradient-red shadow-bg shadow-bg-xs color-white rounded-xs bi bi-power"></i>
                                    <strong class="font-13">Log Out</strong>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card card-style bg-17 shadow-card shadow-card-m" style="height:190px">
            <div class="card-center">
                <div class="bg-theme px-3 py-2 rounded-end d-inline-block">
                    <h1 class="font-24">
                        <span class="font-14 d-block mb-n2 opacity-60 font-400">Your Balance</span>
                        $26,315
                    </h1>
                </div>
            </div>
            <strong class="card-top no-click font-12 p-3 color-white font-monospace">Main Account</strong>
            <strong class="card-bottom no-click p-3 text-start color-white font-monospace">1234 5678 1234 5661</strong>
            <strong class="card-bottom no-click p-3 text-end color-white font-monospace">08 / 2025</strong>
            <div class="card-overlay bg-black opacity-50"></div>
        </div>

        <div class="content my-0 mt-n2 px-1">
            <div class="d-flex">
                <div class="align-self-center">
                    <h3 class="font-16 mb-2">Watchlist</h3>
                </div>
                <div class="align-self-center ms-auto">
                    <a href="#" class="font-12 pt-1">View All</a>
                </div>
            </div>
        </div>
        <div class="card card-style">
            <div class="content my-2">
                <a href="#" class="d-flex">
                    <div class="align-self-center w-25">
                        <h4 class="pt-1 mb-n1 font-16">Bitcoin</h4>
                        <h6 class="mb-0 opacity-50">BTC - Crypto</h6>
                    </div>
                    <div class="align-self-center m-auto">
                        <div id="chart-btc" class="chart mt-n5 pt-4 ms-n3"><!-- plugins/apex/apex-call.js --></div>
                    </div>
                    <div class="ms-auto">
                        <h4 class="mb-n1 pt-2">$53.513</h4>
                        <h6 class="mb-0 color-green-dark text-end">+1.583%</h6>
                    </div>
                </a>
            </div>
            <div class="content my-2">
                <a href="#" class="d-flex">
                    <div class="align-self-center w-25">
                        <h4 class="pt-1 mb-n1 font-16">Ethereum</h4>
                        <h6 class="mb-0 opacity-50">ETH - Crypto</h6>
                    </div>
                    <div class="align-self-center m-auto">
                        <div id="chart-eth" class="chart mt-n5 pt-4 ms-n3"><!-- plugins/apex/apex-call.js --></div>
                    </div>
                    <div class="ms-auto">
                        <h4 class="mb-n1 pt-2">$12.113</h4>
                        <h6 class="mb-0 color-red-dark text-end">-1.583%</h6>
                    </div>
                </a>
            </div>
            <div class="content my-2">
                <a href="#" class="d-flex">
                    <div class="align-self-center w-25">
                        <h4 class="pt-1 mb-n1 font-16">Euro</h4>
                        <h6 class="mb-0 opacity-50">EUR - Cash</h6>
                    </div>
                    <div class="align-self-center m-auto">
                        <div id="chart-eur" class="chart mt-n5 pt-4 ms-n3"><!-- plugins/apex/apex-call.js --></div>
                    </div>
                    <div class="ms-auto">
                        <h4 class="mb-n1 pt-2">$1,231</h4>
                        <h6 class="mb-0 color-blue-dark text-end">0.00%</h6>
                    </div>
                </a>
            </div>
        </div>

        <div class="content">
            <div class="row">
                <div class="col-6">
                    <a href="#" data-bs-toggle="offcanvas" data-bs-target="#menu-exchange" class="btn btn-full gradient-highlight rounded-s shadow-bg shadow-bg-s">Buy</a>
                </div>
                <div class="col-6">
                    <a href="#" data-bs-toggle="offcanvas" data-bs-target="#menu-exchange" class="btn btn-full gradient-green rounded-s shadow-bg shadow-bg-s">Sell</a>
                </div>
            </div>
        </div>
    </div>
    <!-- End of Page Content-->

    <!-- Off Canvas and Menu Elements-->
    <!-- Always outside the Page Content-->

    <!-- Exchange Button Menu -->
    @include('layouts.components.user.menu-exchange')
    
<!-- End of Page ID-->
@endsection
