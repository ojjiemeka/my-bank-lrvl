@extends('layouts.user')

@section('content')
<div class="header is-fixed">
    <div class="tf-container">
        <div class="tf-statusbar d-flex justify-content-center align-items-center">
            <a href="#" class="back-btn"> <i class="icon-left"></i> </a>
            <h3>Card info</h3>
        </div>
    </div>
</div>
<div id="app-wrap">
    <div class="wrap-card-detail mt-3">
    <div class="tf-container">
        <div class="tf-atm-card">
            <div class="heading">
                <a><i class="icon-visa"></i></a>
                <a id="btn-popup-up"><i class="icon-recycle-bin"></i></a>
            </div>
            <h3 class="fw_6"><a href="#" class="white_color">****  ****  ****   7576</a></h3>
            <div class="bottom d-flex justify-content-between">
                <div class="inner-left">
                    <span class="fw_6 secondary2_color">Exp Date</span>
                    <p><a href="#">09/24</a></p>
                </div>
                <div class="inner-right">
                    <span class="fw_6 secondary2_color">CVV Num</span>
                    <p class="text-end"><a href="#">657</a></p>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div class="box-card-service mt-5">
    <div class="tf-container">
        <h3 class="fw_6">Card service</h3>
        <div class="tf-spacing-12"></div>
        <ul class="list-card-info">
            <li>Recharge minimum <span>10$</span> </li>
            <li>Recharge limit <span>2000$</span> </li>
            <li>Payment limit <span>2000$</span> </li>
            <li>Withdrawal minimum <span>10$</span> </li>
            <li>Withdrawal limit <span>2000$</span> </li>
        </ul>
    </div>
    </div>
    <div class="box-card-advanced mt-5">
    <div class="tf-container">
        <h3 class="fw_6">Advanced Utilities</h3>
        <div class="tf-spacing-12"></div>
        <ul class="list-card-info">
            <li>Limit increase <i class="icon-right"></i></li>
            <li>Manage recharge <i class="icon-right"></i></li>
        </ul>
    </div>
    </div>
</div>






<div class="tf-panel up">
    <div class="panel_overlay"></div>
      <div class="panel-box panel-up wrap-panel-clear">
        <div class="heading">
            <p>Are you sure you want to delete this card?</p>
            <a href="#" class="critical_color">Delete</a>
        </div>
        <div class="bottom">
            <a class="clear-panel" href="#">Cancel</a>
        </div>
      </div>
</div>

@endsection

    
