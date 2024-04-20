@extends('layouts.user')

@section('content')
    <div class="header bg_white_color is-fixed">
        <div class="tf-container">
            <div class="tf-statusbar d-flex justify-content-center align-items-center">
                <a href="{{url()->previous()}}" class="back-btn"> <i class="icon-left"></i> </a>
                <h3>Transfer</h3>
            </div>
        </div>
    </div>
    
    <div id="app-wrap">
        <div class="wrap-banks mt-3">
            <div class="tf-container">
                <h3 class="fw_6">Popular Bank</h3>
                <div class="tf-spacing-12"></div>
                <ul class="bank-box">
                    <li>
                        <a class="bank-list" href="{{route('bankTransfer')}}" data-target-section="sec-2">
                            <img class="logo-bank" src="{{asset('bank2.0/images/logo-banks/bank1.png')}}" alt="image">
                            Global card
                        </a>
                    </li>
                    <li>
                        <a class="bank-list" href="{{route('bankTransfer')}}" data-target-section="sec-2">
                            <img class="logo-bank" src="{{asset('bank2.0/images/logo-banks/bank2.png')}}" alt="image">
                            Techcombank
                        </a>
                    </li>
                    <li>
                        <a class="bank-list" href="{{route('bankTransfer')}}" data-target-section="sec-2">
                            <img class="logo-bank" src="{{asset('bank2.0/images/logo-banks/bank3.png')}}" alt="image">
                            ACB
                        </a>
                    </li>
                    <li>
                        <a class="bank-list" href="{{route('bankTransfer')}}" data-target-section="sec-2">
                            <img class="logo-bank" src="{{asset('bank2.0/images/logo-banks/bank4.png')}}" alt="image">
                            Five star bank
                        </a>
                    </li>
                    <li>
                        <a class="bank-list" href="{{route('bankTransfer')}}" data-target-section="sec-2">
                            <img class="logo-bank" src="{{asset('bank2.0/images/logo-banks/bank5.png')}}" alt="image">
                            Citibank
                        </a>
                    </li>
                    <li>
                        <a class="bank-list" href="{{route('bankTransfer')}}" data-target-section="sec-2">
                            <img class="logo-bank" src="{{asset('bank2.0/images/logo-banks/bank6.png')}}" alt="image">
                            ICBCbank
                        </a>
                    </li>
                    <li>
                        <a class="bank-list" href="{{route('bankTransfer')}}" data-target-section="sec-2">
                            <img class="logo-bank" src="{{asset('bank2.0/images/logo-banks/bank7.png')}}" alt="image">
                            Chasebank
                        </a>
                    </li>
                    <li>
                        <a class="bank-list" href="{{route('bankTransfer')}}" data-target-section="sec-2">
                            <img class="logo-bank" src="{{asset('bank2.0/images/logo-banks/bank8.png')}}" alt="image">
                            Vietinbank
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="wrap-banks mt-5 mb-5">
            <div class="tf-container">
                <h3 class="fw_6">All bank (40)</h3>
                <div class="tf-spacing-12"></div>
                <ul class="bank-list-transfer">
                    <li><a href="{{route('bankTransfer')}}" data-target-section="sec-2"><img src="{{asset('bank2.0/images/logo-banks/bank1.png')}}" alt="image">Global card </a>
                    </li>
                    <li><a href="{{route('bankTransfer')}}" data-target-section="sec-2"><img src="{{asset('bank2.0/images/logo-banks/bank2.png')}}" alt="image">Techcombank </a>
                    </li>
                    <li><a href="{{route('bankTransfer')}}" data-target-section="sec-2"><img src="{{asset('bank2.0/images/logo-banks/bank3.png')}}" alt="image">ACB </a></li>
                    <li><a href="{{route('bankTransfer')}}" data-target-section="sec-2"><img src="{{asset('bank2.0/images/logo-banks/bank4.png')}}" alt="image">Five star bank
                        </a></li>
                    <li><a href="{{route('bankTransfer')}}" data-target-section="sec-2"><img src="{{asset('bank2.0/images/logo-banks/bank5.png')}}" alt="image">Citibank </a>
                    </li>
                    <li><a href="{{route('bankTransfer')}}" data-target-section="sec-2"><img src="{{asset('bank2.0/images/logo-banks/bank6.png')}}" alt="image">ICBCbank </a>
                    </li>
                    <li><a href="{{route('bankTransfer')}}" data-target-section="sec-2"><img src="{{asset('bank2.0/images/logo-banks/bank7.png')}}" alt="image">Chasebank </a>
                    </li>
                    <li><a href="{{route('bankTransfer')}}" data-target-section="sec-2"><img src="{{asset('bank2.0/images/logo-banks/bank8.png')}}" alt="image">Vietinbank </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

@endsection

    
