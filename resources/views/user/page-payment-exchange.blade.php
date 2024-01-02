@extends('layouts.user')

@section('content')

    <!-- Page Content - Only Page Elements Here-->


        <!-- Page Title-->
       

        <div class="card card-style bg-5 shadow-card shadow-card-m" style="height:190px">
            <div class="card-center">
                <div class="bg-theme px-3 py-2 rounded-end d-inline-block">
                    <h1 class="font-24">
                        <span class="font-14 d-block mb-n2 opacity-60 font-400">Your Balance</span>
                        ${{ number_format($balance['main_balance'], 2) }}
                    </h1>
                </div>
            </div>
            <strong class="card-top no-click font-12 p-3 color-white font-monospace">TIAA Plantinum</strong>
            <strong class="card-bottom no-click p-3 text-start color-white font-monospace">4233 5622 8363 93763</strong>
            <strong class="card-bottom no-click p-3 text-end color-white font-monospace">04 / 2026</strong>
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
                        <h4 class="mb-n1 pt-2">$53,522.13</h4>
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
                        <h4 class="mb-n1 pt-2 fs-6">$12,754.13</h4>
                        <h6 class="mb-0 color-red-dark text-end">-1.583%</h6>
                    </div>
                </a>
            </div>
            <div class="content my-2">
                <a href="#" class="d-flex">
                    <div class="align-self-center w-25">
                        <h4 class="pt-1 mb-n1 font-16">Usdt</h4>
                        <h6 class="mb-0 opacity-50">USDT - crypto</h6>
                    </div>
                    <div class="align-self-center m-auto">
                        <div id="chart-eur" class="chart mt-n5 pt-4 ms-n3"><!-- plugins/apex/apex-call.js --></div>
                    </div>
                    <div class="ms-auto">
                        <h4 class="mb-n1 pt-2">$144,231</h4>
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

    <!-- End of Page Content-->

    <!-- Off Canvas and Menu Elements-->
    <!-- Always outside the Page Content-->

    <!-- Exchange Button Menu -->
    @include('layouts.components.user.menu-exchange')
    
<!-- End of Page ID-->
@endsection
