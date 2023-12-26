<!DOCTYPE HTML>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="viewport"
        content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover" />
    <title>PayApp - Finance, Banking, Wallet, Crypto Mobile PWA</title>
    <link rel="stylesheet" type="text/css" href="{{asset('user/styles/bootstrap.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('user/fonts/bootstrap-icons.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('user/styles/style.css')}}">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@500;600;700&family=Roboto:wght@400;500;700&display=swap"
        rel="stylesheet">
    <link rel="manifest" href="_manifest.json">
    <meta id="theme-check" name="theme-color" content="#FFFFFF">
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('user/app/icons/icon-192x192.png')}}">
</head>

<body class="theme-light">

    <div id="preloader">
        <div class="spinner-border color-highlight" role="status"></div>
    </div>

    <!-- Page Wrapper-->
    <div id="page">

        <!-- Footer Bar -->
        @if ($menuBar)
        @include('layouts.components.user.footer-bar')
        @endif

        <!-- Page Content - Only Page Elements Here-->
        <div class="page-content footer-clear">

            @yield('content')


        </div>
        <!-- End of Page Content-->

        <!-- Off Canvas and Menu Elements-->
        <!-- Always outside the Page Content-->

        <!-- Main Sidebar Menu -->
        @include('layouts.components.user.menu-sidebar')

        <!-- Card Menu More -->
        @include('layouts.components.user.menu-card-settings')

        <!-- Transfer Button Menu -->
            @include('layouts.components.user.menu-transfer')

        <!-- Transfer Friends Menu -->
            @include('layouts.components.user.menu-friends-transfer')
            @include('layouts.components.user.menu-friends-transfer')

        <!-- Request Button Menu -->
            @include('layouts.components.user.menu-request')

        <!-- Exchange Button Menu -->
            @include('layouts.components.user.menu-exchange')

        <!-- Notifications Bell -->
            @include('layouts.components.user.menu-notifications')

        <!-- Highlights Menu -->
            @include('layouts.components.user.menu-highlights')

        <div class="offcanvas offcanvas-bottom rounded-m offcanvas-detached" id="menu-install-pwa-ios">
            <div class="content">
                <img src="app/icons/icon-128x128.png" alt="img" width="80" class="rounded-m mx-auto my-4">
                <h1 class="text-center">Install PayApp</h1>
                <p class="boxed-text-xl">
                    Install PayApp on your home screen, and access it just like a regular app. Open your Safari menu and
                    tap "Add to Home Screen".
                </p>
                <a href="#"
                    class="pwa-dismiss close-menu color-theme text-uppercase font-900 opacity-50 font-11 text-center d-block mt-n2"
                    data-bs-dismiss="offcanvas">Maybe Later</a>
            </div>
        </div>

        <div class="offcanvas offcanvas-bottom rounded-m offcanvas-detached" id="menu-install-pwa-android">
            <div class="content">
                <img src="app/icons/icon-128x128.png" alt="img" width="80" class="rounded-m mx-auto my-4">
                <h1 class="text-center">Install PayApp</h1>
                <p class="boxed-text-l">
                    Install PayApp to your Home Screen to enjoy a unique and native experience.
                </p>
                <a href="#"
                    class="pwa-install btn btn-m rounded-s text-uppercase font-900 gradient-highlight shadow-bg shadow-bg-s btn-full">Add
                    to Home Screen</a><br>
                <a href="#" data-bs-dismiss="offcanvas"
                    class="pwa-dismiss close-menu color-theme text-uppercase font-900 opacity-60 font-11 text-center d-block mt-n1">Maybe
                    later</a>
            </div>
        </div>

    </div>
    <!-- End of Page ID-->

    <script src="{{asset('user/scripts/bootstrap.min.js')}}"></script>
    <script src="{{asset('user/scripts/custom.js')}}"></script>
    <script src="{{asset('user/plugins/apex/apex-call.js')}}"></script>
</body>
