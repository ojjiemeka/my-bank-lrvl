@extends('layouts.user')

@section('content')
<div class="wrap-success">
        
            
    <div class="success_box">
        <div class="icon-1 ani3">
            <span class="circle-box bg-danger lg bg-circle check-icon"></span>
        </div>
        <div class="icon-2 ani5">
            <span class="circle-box bg-danger md bg-circle"></span>
        </div>
        <div class="icon-3 ani8">
            <span class="circle-box bg-danger md bg-circle"></span>
        </div>
        <div class="icon-4 ani2">
            <span class="circle-box bg-danger sm bg-circle"></span>
        </div>
        

        <div class="content">
                <div class="top">
                    <h2>Error!</h2>
                    <p>Something went wrong</p>
                </div>
                <div class="tf-spacing-16"></div>
                <div class="inner">
                    <p class="secondary_color mb-5 fw_6">Your account is temporarily locked!</p>
                    <p class="fw-bold text-danger">Contact Support</p>
                </div>
                
                
        </div>
        <a href="{{route('dashboard')}}" class="tf-btn accent large">Done</a>
        
    </div>

    <span class="line-through through-1"></span>
    <span class="line-through through-2"></span>
    <span class="line-through through-3"></span>
    <span class="line-through through-4"></span>
    <span class="line-through through-5"></span>
    <span class="line-through through-6"></span>

</div>
@endsection

    
