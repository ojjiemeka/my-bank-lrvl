@extends('layouts.user')

@section('content')
<div class="header">
    <div class="tf-container">
        <div class="tf-statusbar d-flex justify-content-center align-items-center">
            <a href="#" class="back-btn"> <i class="icon-left"></i> </a>
            <h3>Setting</h3>
        </div>
    </div>
</div>
<div class="mt-1 box-settings-profile style1">
    <a class="list-setting-profile" data-bs-toggle="modal" data-bs-target="#errorModal">
        <div class="inner-left">
            <h4 class="fw_6">Change Password</h4>
        </div>
        <span class="inner-right"><i class="icon-right"></i></span>

    </a>
    <a class="list-setting-profile" data-bs-toggle="modal" data-bs-target="#errorModal">
        <div class="inner-left">
            <h4 class="fw_6">Security Center</h4>
        </div>
        <span class="inner-right"><i class="icon-right"></i></span>

    </a>
    <div class="list-setting-profile">
        <div class="inner-left">
            <h4 class="fw_6">Biometric Authentication</h4>
            <p>Fingerprint, Face ID</p>
        </div>
        <a href="#" class="inner-right">
            <input class="tf-switch-check" type="checkbox" value="checkbox" name="check" checked>
        </a>
    </div>
    <div class="list-setting-profile">
        <div class="inner-left">
            <h4 class="fw_6">Dark/Light Mode</h4>
        </div>
        <a href="#" class="inner-right">
            <input class="tf-switch-check" id="toggle-theme" type="checkbox" value="checkbox" name="check">
        </a>
    </div>
    <a class="list-setting-profile" data-bs-toggle="modal" data-bs-target="#errorModal">
        <div class="inner-left">
            <h4 class="fw_6">Setting Notification</h4>
        </div>
        <span class="inner-right"><i class="icon-right"></i></span>
    </a>
    <a class="list-setting-profile" href="#" id="btn-lock">
        <div class="inner-left">
            <h4 class="fw_6">Automatically Lock Apps</h4>
            <p>Better account security, avoid unintended problems</p>
        </div>
        <span class="inner-right">
            <i class="icon-right"></i>
        </span>
    </a>
</div>
<a class="mt-1 list-setting-profile style1" href="#" id="btn-popup-up">
    <h4 class="fw_6">Language</h4>
    <span class="inner-right">English <i class="icon-right"></i> </span>
</a>
<a class="mt-1 list-setting-profile style1" href="#" id="btn-logout">
    <h4 class="fw_6 critical_color">Log Out</h4>
    <span class="inner-right"> <i class="icon-right"></i> </span>
</a>

<div class="tf-panel logout">
    <div class="panel_overlay"></div>
      <div class="panel-box panel-center panel-logout">
            <div class="heading">
                <h2 class="text-center">Do you really want to sign out of your account?</h2>
            </div>
            <div class="bottom">
                <a class="clear-panel" href="#">Cancel</a>
                <a class="clear-panel critical_color" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                 <i class="has-bg gradient-red shadow-bg shadow-bg-xs color-white rounded-xs bi bi-power"></i>
                 <strong class="font-13">Log Out</strong>
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
            </div>
        
      </div>
</div>
<div class="tf-panel lock-app">
    <div class="panel_overlay"></div>
    <div class="panel-box panel-up panel-st-app">
        <div class="d-flex justify-content-center">
            <span class="line"></span>
        </div>
        <h3 class="panel-title fw_6 text-center">Automatically lock the following app</h3>
        <ul class="panel-content mt-3">
            <li class="item clear-panel"><a href="#">30 seconds <i class="icon-checkmark"></i></a></li>
            <li class="item clear-panel"><a href="#">1 minute <i class="icon-checkmark"></i></a></li>
            <li class="item clear-panel"><a href="#">2 minute <i class="icon-checkmark"></i></a></li>
            <li class="item clear-panel"><a href="#">5 minute <i class="icon-checkmark"></i></a></li>
            <li class="item clear-panel"><a href="#" class="active">No auto-lock <i class="icon-checkmark"></i></a></li>
        </ul>

        
    </div>
</div>
<div class="tf-panel up">
    <div class="panel_overlay"></div>
    <div class="panel-box panel-up panel-st-app">
        <div class="d-flex justify-content-center">
            <span class="line"></span>
        </div>
        <h3 class="panel-title fw_6 text-center">Language</h3>
        <ul class="panel-content mt-3">
            <li class="item clear-panel"><a href="#" class="active">English<i class="icon-checkmark"></i></a></li>
            <li class="item clear-panel"><a href="#">VietNam <i class="icon-checkmark"></i></a></li>
            <li class="item clear-panel"><a href="#">Portugal <i class="icon-checkmark"></i></a></li>
            <li class="item clear-panel"><a href="#">Germany <i class="icon-checkmark"></i></a></li>
            <li class="item clear-panel"><a href="#">China <i class="icon-checkmark"></i></a></li>
            <li class="item clear-panel"><a href="#">Switzerland <i class="icon-checkmark"></i></a></li>
            <li class="item clear-panel"><a href="#">France <i class="icon-checkmark"></i></a></li>
        </ul>

        
    </div>
</div>
@endsection
