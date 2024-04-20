@extends('layouts.user')

@section('content')
<div class="header">
    <div class="tf-container">
        <div class="tf-statusbar d-flex justify-content-center align-items-center">
            <a href="#" class="back-btn"> <i class="icon-left"></i> </a>
            <h3>Enter your PIN</h3>
        </div>
        <div class="tf-spacing-20"></div>
    </div>
</div>

<div class="wrap-transfer">
        <form class="tf-form-verify" action="{{route('done')}}">
                <div class="d-flex group-input-verify">
                    <input type="tel" maxlength="1" pattern="[0-9]" class="input-verify" value="">
                    <input type="tel" maxlength="1" pattern="[0-9]" class="input-verify" value="">
                    <input type="tel" maxlength="1" pattern="[0-9]" class="input-verify" value="">
                    <input type="tel" maxlength="1" pattern="[0-9]" class="input-verify" value="">
                </div>
                <div class="text-send-code">
                    <p class="fw_4">Enter  your PIN to proceed</p>
                </div>
            <div class="bottom-navigation-bar">
                <div class="tf-container">
                    <button type="submit" class="tf-btn accent">Continue</button>
                </div>
            </div>
        </form>

</div>
@endsection

    
