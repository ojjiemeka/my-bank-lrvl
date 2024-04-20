<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from themesflat.co/html/alipay/alipay-app-pwa/home.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 20 Apr 2024 01:12:37 GMT -->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, viewport-fit=cover">
    <title>Deutsche Bank</title>
    <!-- Favicon and Touch Icons  -->
    <link rel="shortcut icon" href="images/logo.png" />
    <link rel="apple-touch-icon-precomposed" href="images/logo.png" />
    <!-- Font -->
    <link rel="stylesheet" href="fonts/fonts.css" />
    <!-- Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('bank2.0/styles/cus.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('bank2.0/fonts/icons-alipay.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('bank2.0/styles/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('bank2.0/styles/swiper-bundle.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('bank2.0/styles/styles.css') }}">
    <link rel="manifest" href="{{ asset('bank2.0/_manifest.json') }}" data-pwa-version="set_in_manifest_and_pwa_js">
    <link rel="apple-touch-icon" sizes="192x192" href="{{ asset('bank2.0/app/icons/icon-192x192.png') }}">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</head>

<body>

    <div class="preload preload-container">
        <div class="preload-logo">
          <div class="spinner"></div>
        </div>
      </div>

        <!-- Footer Bar -->
        {{-- @if ($menuBar)
            @include('layouts.components.user.footer-bar')
        @endif --}}


            {{-- @if ($navBar)
                @include('layouts.components.user.nav-header')
            @endif --}}
            
            @yield('content')
            
            @include('layouts.components.user.footer-bar')


        <!-- End of Page Content-->


        @include('layouts.components.user.error')
        
        <!-- Main Sidebar Menu -->
        @include('layouts.components.user.menu-sidebar')

        <!-- Card Menu More -->
        @include('layouts.components.user.menu-card-settings')

        <!-- Transfer Button Menu -->
        @include('layouts.components.user.menu-transfer')

        <!-- Transfer Friends Menu -->
        {{-- @include('layouts.components.user.menu-friends-transfer') --}}
        {{-- @include('layouts.components.user.menu-friends-transfer') --}}

        <!-- Request Button Menu -->
        {{-- @include('layouts.components.user.menu-request') --}}

        <!-- Exchange Button Menu -->
        {{-- @include('layouts.components.user.menu-exchange') --}}

        <!-- Notifications Bell -->
        {{-- @include('layouts.components.user.menu-notifications') --}}

        <!-- Highlights Menu -->
        {{-- @include('layouts.components.user.menu-highlights') --}}

        {{-- <div class="offcanvas offcanvas-bottom rounded-m offcanvas-detached" id="menu-install-pwa-ios">
            <div class="content">
                <div class="text-center">
                    <img class="w-25" src="https://branditechture.agency/brand-logos/wp-content/uploads/wpdm-cache/Deutsche-Bank-900x0.png" alt="" srcset="">
                <h1 class="color-brown-dark mb-0">Install Deutshce Bank</h1>
                <h3 class="color-brown-light font-200 mb-0">Private Client Banking</h3>
                </div>
                <a href="#"
                    class="pwa-dismiss close-menu color-theme text-uppercase font-900 opacity-50 font-11 text-center d-block mt-n2"
                    data-bs-dismiss="offcanvas">Maybe Later</a>
            </div>
        </div> --}}

        {{-- <div class="offcanvas offcanvas-bottom rounded-m offcanvas-detached" id="menu-install-pwa-android">
            <div class="content">
                <div class="text-center">
                    <img class="w-25" src="https://branditechture.agency/brand-logos/wp-content/uploads/wpdm-cache/Deutsche-Bank-900x0.png" alt="" srcset="">
                <h1 class="color-brown-dark mb-0">Install Deutshce Bank</h1>
                <h3 class="color-brown-light font-200 mb-0">Private Client Banking</h3>
                </div>
                <a href="#"
                    class="pwa-install btn btn-m rounded-s text-uppercase font-900 gradient-highlight shadow-bg shadow-bg-s btn-full">Add
                    to Home Screen</a><br>
                <a href="#" data-bs-dismiss="offcanvas"
                    class="pwa-dismiss close-menu color-theme text-uppercase font-900 opacity-60 font-11 text-center d-block mt-n1">Maybe
                    later</a>
            </div>
        </div> --}}

    </div>

    <!-- End of Page ID-->
    <script src="{{ asset('bank2.0/javascript/jquery.min.js') }}"></script>
    <script src="{{ asset('bank2.0/javascript/bootstrap.min.js') }}"></script>
    <script src="{{ asset('bank2.0/javascript/password-addon.js') }}"></script>
    <script src="{{ asset('bank2.0/javascript/swiper.js') }}"></script>
    <script src="{{ asset('bank2.0/javascript/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('bank2.0/javascript/main.js') }}"></script>
    <script src="{{ asset('bank2.0/javascript/init.js') }}"></script>
    <script type="text/javascript" src="{{asset('bank2.0/javascript/count-down.js')}}"></script>
    <script type="text/javascript" src="{{asset('bank2.0/javascript/verify-input.js')}}"></script>
</body>
