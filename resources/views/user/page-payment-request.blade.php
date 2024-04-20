@extends('layouts.user')

@section('content')

<div class="header-transfer">
    <div class="tf-container">
        <div class="tf-statusbar d-flex justify-content-center align-items-center">
            <a href="#" class="back-btn"><i class="icon-left on_surface_color"></i></a>
            <h3 class="">Transfer</h3>
        </div>
    </div>
</div>
<div class="wrap-transfer-friends mt-3">
   <div class="tf-container">
        <div class="wrap-fixed fixed-container">
            <div class="input-field">
                <span class="icon-search"></span>
                <input required class="search-field value_input" placeholder="Search" type="text" value="Andy Cody">
                <span class="icon-clear"></span>
            </div>
        </div>
        
        <div class="tf-tab">
            <ul class="menu-tabs">
                <li class="nav-tab active">Phone</li>
                <li class="nav-tab">Bank Account</li>
            </ul>
            <div class="content-tab">
                <ul class="tabs-list-item">
                    
                </ul>
                <ul class="tabs-list-item">
                    
            </div>     
        </div>
        
   </div>    
</div>


@endsection


    

   