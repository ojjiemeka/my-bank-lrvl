<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from dolab.dexignzone.com/xhtml/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 09 Dec 2023 14:32:35 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <meta name="robots" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Dolab : Dolab Personal Banking Admin Bootstrap 5 Template">
    <meta property="og:title" content="Dolab : Dolab Personal Banking Admin Bootstrap 5 Template">
    <meta property="og:description" content="Dolab : Dolab Personal Banking Admin Bootstrap 5 Template">
    <meta property="og:image" content="social-image.png">
    <meta name="format-detection" content="telephone=no">

    <!-- PAGE TITLE HERE -->
    <title>Chase Investment Banking</title>

    <!-- FAVICONS ICON -->
    <link rel="shortcut icon" type="image/png" href="images/favicon.png">
    <link href="{{ asset('vendor/jquery-nice-select/css/nice-select.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/jquery-autocomplete/jquery-ui.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('vendor/bootstrap-touchspin/css/jquery.bootstrap-touchspin.min.css') }}">
    <link href="{{ asset('vendor/jquery-smartwizard/dist/css/smart_wizard.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/jquery-nice-select/css/nice-select.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/toastr@2.1.4/build/toastr.min.css">
    <!-- Style css -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <!-- or -->
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- Scripts -->
    {{-- @vite(['resources/sass/app.scss', 'resources/js/app.js']) --}}

</head>

<body>

    @include('layouts.components.preloader')


    <div id="main-wrapper">
        @include('layouts.components.circles-animation')

        <!--**********************************
        Nav header start
    ***********************************-->
        @include('layouts.components.nav-header')
        <!--**********************************
        Nav header end
    ***********************************-->

        <!--**********************************
        Header start
    ***********************************-->
        @include('layouts.components.header')
        <!--**********************************
        Header end ti-comment-alt
    ***********************************-->


        <!--**********************************
    Sidebar start
    ***********************************-->
        @include('layouts.components.sidebar')

        <!--**********************************
            Sidebar end
        ***********************************-->

		@include('sweetalert::alert')
		
        @yield('content')
    </div>
    <!-- Required vendors -->
    <script src="https://cdn.jsdelivr.net/npm/toastr@2.1.4/toastr.min.js"></script>
    <script src="{{ asset('vendor/global/global.min.js') }}"></script>
    <script src="{{ asset('vendor/chart.js/Chart.bundle.min.js') }}"></script>
    <script src="{{ asset('vendor/jquery-nice-select/js/jquery.nice-select.min.js') }}"></script>
    <!-- Apex Chart -->
    <script src="{{ asset('vendor/apexchart/apexchart.js') }}"></script>
    <!-- Chart piety plugin files -->
    <script src="{{ asset('vendor/peity/jquery.peity.min.js') }}"></script>
    <!-- Chartist -->
    <script src="{{ asset('vendor/chartist/js/chartist.min.js') }}"></script>
    <script src="{{ asset('vendor/jquery-autocomplete/jquery-ui.js') }}"></script>
    <!-- <script src="./js/dashboard/dashboard-2.js"></script> -->

    <script src="{{ asset('vendor/jquery-steps/build/jquery.steps.min.js') }}"></script>
    <script src="{{ asset('vendor/jquery-validation/jquery.validate.min.js') }}"></script>
    <!-- bootstrap-touchspin -->
    <script src="{{ asset('vendor/bootstrap-touchspin/js/jquery.bootstrap-touchspin.min.js') }}"></script>
    <!-- Form validate init -->
    <script src="{{ asset('js/plugins-init/jquery.validate-init.js') }}"></script>

    <!-- Form Steps -->
    <script src="{{ asset('vendor/jquery-smartwizard/dist/js/jquery.smartWizard.js') }}"></script>
    <script src="{{ asset('vendor/jquery-nice-select/js/jquery.nice-select.min.js') }}"></script>
    <!-- Datatable -->
    <script src="{{ asset('vendor/datatables/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('js/plugins-init/datatables.init.js') }}"></script>
    <!-- Dashboard 1 -->
    <script src="{{ asset('js/dashboard/dashboard-1.js') }}"></script>
    <script src="{{ asset('js/custom.min.js') }}"></script>
    <script src="{{ asset('js/dlabnav-init.js') }}"></script>
    <script src="{{ asset('js/demo.js') }}"></script>
    <script src="{{ asset('js/styleSwitcher.js') }}"></script>

    <script>
        $(document).ready(function() {
            // SmartWizard initialize
            $('#smartwizard').smartWizard();
        });
    </script>

    <script>
        var handleBootstrapTouchSpin = function() {
            jQuery("input[name='input']").TouchSpin({
                verticalbuttons: true,
                verticalupclass: 'ti-plus',
                verticaldownclass: 'ti-minus'
            });
        }
        handleBootstrapTouchSpin();
    </script>
</body>

<!-- Mirrored from dolab.dexignzone.com/xhtml/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 09 Dec 2023 14:32:35 GMT -->

</html>
