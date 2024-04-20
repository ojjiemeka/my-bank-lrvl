@extends('layouts.user')

@section('content')
<div class="app-header st1">
    <div class="tf-container">
        <div class="tf-topbar d-flex justify-content-center align-items-center">
           <a href="#" class="back-btn"><i class="icon-left white_color"></i></a> 
            <h3 class="white_color">Top Up</h3>
        </div>
    </div>
</div>
<div class="card-secton topup-content">
    <div class="tf-container">
        <div class="tf-balance-box">
            <div class="d-flex justify-content-between align-items-center">
                <p>Your Balance:</p>
                <h3>${{ number_format($balance['main_balance'], 2) }}</h3>
            </div>
            <div class="tf-spacing-16"></div>
            <div class="tf-form">
                <div class="group-input input-field input-money">
                    <label for="">Amout Of Money</label>
                    <input type="text" value="200" required class="search-field value_input st1" type="text">
                    <span class="icon-clear"></span>
                </div>
            </div>
           
        </div>
       
    </div>
    <div class="bottom-navigation-bar">
        <div class="tf-container">
            <a href="#" id="btn-popup-up" class="tf-btn accent large">Continue</a>
        </div>
    </div>
</div>

<div class="amount-money mt-5">
    <div class="tf-container">
        <h3>Amount Money</h3>
        <ul class="money list-money">
            <li><a class="tag-money" href="#">$50</a> </li>
            <li><a class="tag-money" href="#">$100</a> </li>
            <li><a class="tag-money" href="#">$200</a> </li>
            <li><a class="tag-money" href="#">$500</a> </li>
            <li><a class="tag-money" href="#">$1000</a> </li>
            <li><a class="tag-money" href="#">$2000</a> </li>
         </ul>
    </div>
</div>


<div class="tf-panel up">
    <div class="panel_overlay"></div>
      <div class="panel-box panel-up wrap-content-panel">
        <div class="heading">
            <div class="tf-container">
                <div class="d-flex align-items-center position-relative justify-content-center">
                    <i class="icon-close1 clear-panel"></i>
                    <h3>Confirm Top Up</h3>
                </div>
            </div>
        </div>
        <div class="main-topup">
            <div class="tf-container">
                <h3>Choose Source</h3>
                <div class="tf-card-block d-flex align-items-center justify-content-between">
                    <div class="inner d-flex align-items-center">
                        <div class="logo-img">
                            <img src="bank2.0/images/logo-banks/card-visa3.png" alt="image">
                        </div>
                        <div class="content">
                        <h4><a href="#" class="fw_6">Mastercard</a></h4>
                        <p>****  ****  ****   7576</p>
                        </div>
                    </div>
                    <i class="icon-right"></i>
                </div>
                <ul class="info">
                    <li><h4 class="secondary_color fw_4 d-flex justify-content-between align-items-center">Amout <a href="#" class="on_surface_color fw_7">$ 200</a></h4></li>
                    <li><h4 class="secondary_color fw_4 d-flex justify-content-between align-items-center">Fee <a href="#" class="success_color fw_7">Free</a></h4></li>
                </ul>
                <div class="d-flex justify-content-between align-items-center">
                    <div class="total">
                        <h4 class="secondary_color fw_4">Total</h4>
                        <h2>$ 200</h2>
                    </div>
                    <a href="{{route('enterPin')}}" class="tf-btn accent large"><i class="icon-secure1"></i> Recharge</a>

                </div>
            </div>
            
        </div>
        
        

        
      </div>
      
</div>

@endsection

    
