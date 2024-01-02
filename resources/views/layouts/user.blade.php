<!DOCTYPE HTML>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="viewport"
        content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover" />
        <meta name="theme-color" content="#2196F3"/>
        <title>Investing, Advice, Retirement and Banking | TIAA</title>
        
        <meta name="description" content="TIIAA&#39;s mission is to help you achieve financial well-being throughout your lifetime. From expert financial advice to retirement planning, learn more about TIAA today."/>
        <meta name="template" content="page-homepage"/>
        
    <link rel="stylesheet" type="text/css" href="{{ asset('user/styles/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('user/fonts/bootstrap-icons.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('user/styles/style.css') }}">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@500;600;700&family=Roboto:wght@400;500;700&display=swap"
        rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://kit.fontawesome.com/fbc2836f9d.js" crossorigin="anonymous"></script>
    <link rel="manifest" href="_manifest.json">
    
    <link href="{{asset('images/tiaa04016404.ico')}}" rel="shortcut icon"/>
    <link href="/content/dam/tiaa/global/logo/tiaa_apple_icon_57.png" id="apple_icon" sizes="57x57" rel="apple-touch-icon"/>
    <link href="/content/dam/tiaa/global/logo/tiaa_apple_icon_72.png" sizes="72x72" rel="apple-touch-icon"/>
    <link href="/content/dam/tiaa/global/logo/tiaa_apple_icon_76.png" sizes="76x76" rel="apple-touch-icon"/>
    <link href="/content/dam/tiaa/global/logo/tiaa_apple_icon_120.png" sizes="120x120" rel="apple-touch-icon"/>
    <link href="/content/dam/tiaa/global/logo/tiaa_apple_icon_152.png" sizes="152x152" rel="apple-touch-icon"/> 
	<link href="/content/dam/tiaa/global/logo/tiaa_apple_icon_167.png" sizes="167x167" rel="apple-touch-icon"/> 
	<link href="/content/dam/tiaa/global/logo/tiaa_apple_icon_180.png" sizes="180x180" rel="apple-touch-icon"/>	
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

            @if ($navBar)
                @include('layouts.components.user.nav-header')
            @endif
            
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
    <script src="{{ asset('user/scripts/bootstrap.min.js') }}"></script>
    <script src="{{ asset('user/scripts/custom.js') }}"></script>
    <script src="{{ asset('user/plugins/apex/apex-call.js') }}"></script>
</body>
