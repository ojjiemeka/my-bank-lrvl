@extends('layouts.user')

@section('content')
    <!-- Page Content - Only Page Elements Here-->
    <div class="page-content footer-clear">

        <!-- Page Title-->
        <div class="pt-3">
            <div class="page-title d-flex">
                <div class="align-self-center me-auto">
                    <p class="color-highlight">Hello Enabled</p>
                    <h1 class="color-theme">Reports</h1>
                </div>
                <div class="align-self-center ms-auto">
                    <a href="#"
                    data-bs-toggle="offcanvas"
                    data-bs-target="#menu-notifications"
                    class="icon gradient-blue color-white shadow-bg shadow-bg-xs rounded-m">
                        <i class="bi bi-bell-fill font-17"></i>
                        <em class="badge bg-red-dark color-white scale-box">3</em>
                    </a>
                    <a href="#"
                    data-bs-toggle="dropdown"
                    class="icon gradient-blue shadow-bg shadow-bg-s rounded-m">
                        <img src="images/pictures/25s.jpg" width="45" class="rounded-m" alt="img">
                    </a>
                    <!-- Page Title Dropdown Menu-->
                    <div class="dropdown-menu">
                        <div class="card card-style shadow-m mt-1 me-1">
                            <div class="list-group list-custom list-group-s list-group-flush rounded-xs px-3 py-1">
                                <a href="page-wallet.html" class="list-group-item">
                                    <i class="has-bg gradient-green shadow-bg shadow-bg-xs color-white rounded-xs bi bi-credit-card"></i>
                                    <strong class="font-13">Wallet</strong>
                                </a>
                                <a href="page-activity.html" class="list-group-item">
                                    <i class="has-bg gradient-blue shadow-bg shadow-bg-xs color-white rounded-xs bi bi-graph-up"></i>
                                    <strong class="font-13">Activity</strong>
                                </a>
                                <a href="page-profile.html" class="list-group-item">
                                    <i class="has-bg gradient-yellow shadow-bg shadow-bg-xs color-white rounded-xs bi bi-person-circle"></i>
                                    <strong class="font-13">Account</strong>
                                </a>
                                <a href="page-signin-1.html" class="list-group-item">
                                    <i class="has-bg gradient-red shadow-bg shadow-bg-xs color-white rounded-xs bi bi-power"></i>
                                    <strong class="font-13">Log Out</strong>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
        <div class="card card-style px-0">
            <div class="form-custom form-label form-border form-icon px-3 pt-1">
                <i class="bi bi-calendar font-13"></i>
                <select class="form-select rounded-xs" id="c6a">
                    <option value="0" selected>Current Month</option>
                    <option value="01">January</option>
                    <option value="02">February</option>
                    <option value="03">March</option>
                    <option value="04">April</option>
                    <option value="05">May</option>
                    <option value="06">June</option>
                    <option value="07">July</option>
                    <option value="08">August</option>
                    <option value="09">September</option>
                    <option value="10">Octomber</option>
                    <option value="11">November</option>
                    <option value="12">December</option>
                </select>
            </div>
            <div class="position-relative">
                <div class="position-absolute w-100" style="height:320px"><!-- same height as chart in plugins/apex/apex-call.js-->
                    <div class="card-center">
                        <h1 class="pb-5 mb-5 text-center">
                            <span class="font-25 d-block pt-4 mt-1">$25.315</span>
                            <span class="font-12 font-400 opacity-50 d-block mt-n2">Spent this Month</span>
                        </h1>
                    </div>
                </div>
                <div class="mx-auto" style="width:320px"><!-- same height as chart in plugins/apex/apex-call.js-->
                    <div class="chart mx-auto no-click" id="chart-activity"></div>
                </div>
            </div>
            <h6 class="text-center opacity-30 pb-3">Tap an Item below for More Details</h6>
                 
            <div class="content mt-0 mb-0">
                <a data-bs-toggle="offcanvas" data-bs-target="#menu-activity" href="#" class="d-flex pb-3">
                    <div class="align-self-center">
                        <span class="icon rounded-s me-2 gradient-red shadow-bg shadow-bg-xs"><i class="bi bi-droplet font-18 color-white"></i></span>
                    </div>
                    <div class="align-self-center ps-1">
                        <h5 class="pt-1 mb-n1">Utilities</h5>
                        <p class="mb-0 font-11 opacity-50">12 Transactions</p>
                    </div>
                    <div class="align-self-center ms-auto text-end">
                        <h4 class="pt-1 mb-n1 color-red-dark">$1530.41</h4>
                        <p class="mb-0 font-12 opacity-50">24.53%</p>
                    </div>
                </a>
                <a data-bs-toggle="offcanvas" data-bs-target="#menu-activity" href="#" class="d-flex pb-3">
                    <div class="align-self-center">
                        <span class="icon rounded-s me-2 gradient-green shadow-bg shadow-bg-xs"><i class="bi bi-wallet font-18 color-white"></i></span>
                    </div>
                    <div class="align-self-center ps-1">
                        <h5 class="pt-1 mb-n1">Income</h5>
                        <p class="mb-0 font-11 opacity-50">15 Transactions</p>
                    </div>
                    <div class="align-self-center ms-auto text-end">
                        <h4 class="pt-1 mb-n1 color-green-dark">$4530.55</h4>
                        <p class="mb-0 font-12 opacity-50">41.27%</p>
                    </div>
                </a>
                <a data-bs-toggle="offcanvas" data-bs-target="#menu-activity" href="#" class="d-flex pb-3">
                    <div class="align-self-center">
                        <span class="icon rounded-s me-2 gradient-blue shadow-bg shadow-bg-xs"><i class="bi bi-arrow-repeat font-20 color-white"></i></span>
                    </div>
                    <div class="align-self-center ps-1">
                        <h5 class="pt-1 mb-n1">Subscriptions</h5>
                        <p class="mb-0 font-11 opacity-50">23 Transactions</p>
                    </div>
                    <div class="align-self-center ms-auto text-end">
                        <h4 class="pt-1 mb-n1 color-red-dark">$340.31</h4>
                        <p class="mb-0 font-12 opacity-50">21.27%</p>
                    </div>
                </a>
                <a data-bs-toggle="offcanvas" data-bs-target="#menu-activity" href="#" class="d-flex pb-3">
                    <div class="align-self-center">
                        <span class="icon rounded-s me-2 gradient-mint shadow-bg shadow-bg-xs"><i class="bi bi-plus font-24 color-white"></i></span>
                    </div>
                    <div class="align-self-center ps-1">
                        <h5 class="pt-1 mb-n1">Medical</h5>
                        <p class="mb-0 font-11 opacity-50">3 Transactions</p>
                    </div>
                    <div class="align-self-center ms-auto text-end">
                        <h4 class="pt-1 mb-n1 color-red-dark">$270.31</h4>
                        <p class="mb-0 font-12 opacity-50">14.43%</p>
                    </div>
                </a>
                <a data-bs-toggle="offcanvas" data-bs-target="#menu-activity" href="#" class="d-flex pb-3">
                    <div class="align-self-center">
                        <span class="icon rounded-s me-2 gradient-magenta shadow-bg shadow-bg-xs"><i class="bi bi-heart font-16 color-white"></i></span>
                    </div>
                    <div class="align-self-center ps-1">
                        <h5 class="pt-1 mb-n1">Random</h5>
                        <p class="mb-0 font-11 opacity-50">3 Transactions</p>
                    </div>
                    <div class="align-self-center ms-auto text-end">
                        <h4 class="pt-1 mb-n1 color-red-dark">$480.31</h4>
                        <p class="mb-0 font-12 opacity-50">12.31%</p>
                    </div>
                </a>
                
            </div>
        </div>
    </div>
    <!-- End of Page Content-->

    <!-- Off Canvas and Menu Elements-->
    <!-- Always outside the Page Content-->
    
    <!-- Activity Sidebar Menu -->
    <div id="menu-activity" class="offcanvas offcanvas-start">
        <!-- menu-size will be the dimension of your menu. If you set it to smaller than your content it will scroll-->
        <div class="menu-size" style="width:100vw;"><!-- 100 Viewport Width = 100% -->
            <div class="d-flex mx-3 mt-3 py-1">
                <div class="align-self-center">
                    <span class="icon icon-l gradient-red shadow-bg shadow-bg-xs me-3"><i class="bi bi-droplet color-white"></i></span>
                </div>
                <div class="align-self-center">
                    <h1 class="font-24 mb-0">Utilities</h1>
                    <h2 class="mt-n1 mb-0 font-13 opacity-50 font-500">$1530.41 - 24.53%</h2>
                </div>
                <div class="align-self-center ms-auto">
                    <a href="#" class="ps-4 shadow-0 me-n2" data-bs-dismiss="offcanvas">
                        <i class="bi bi-x color-red-dark font-26 line-height-xl"></i>
                    </a>
                </div>
            </div>
            <div class="divider divider-margins my-3"></div>
            <div class="content">
                <a href="#" data-bs-toggle="offcanvas" data-bs-target="#menu-activity-single" class="d-flex py-1 mb-2">
                    <div class="align-self-center">
                        <h5 class="pt-1 mb-n1">Water Bill</h5>
                        <p class="mb-0 font-11 opacity-70">15th June <span class="copyright-year"></span></p>
                    </div>
                    <div class="align-self-center ms-auto text-end">
                        <h4 class="pt-1 mb-n1">$15.35</h4>
                        <p class="mb-0 font-11 color-blue-dark opacity-70">Download</p>
                    </div>
                </a>
                <a href="#" data-bs-toggle="offcanvas" data-bs-target="#menu-activity-single" class="d-flex py-1 mb-2">
                    <div class="align-self-center">
                        <h5 class="pt-1 mb-n1">Telephone Bill</h5>
                        <p class="mb-0 font-11 opacity-70">15th June <span class="copyright-year"></span></p>
                    </div>
                    <div class="align-self-center ms-auto text-end">
                        <h4 class="pt-1 mb-n1">$31.41</h4>
                        <p class="mb-0 font-11 color-blue-dark opacity-70">Download</p>
                    </div>
                </a>
                <a href="#" data-bs-toggle="offcanvas" data-bs-target="#menu-activity-single" class="d-flex py-1 mb-2">
                    <div class="align-self-center">
                        <h5 class="pt-1 mb-n1">Cloud Storage</h5>
                        <p class="mb-0 font-11 opacity-70">15th June <span class="copyright-year"></span></p>
                    </div>
                    <div class="align-self-center ms-auto text-end">
                        <h4 class="pt-1 mb-n1">$43.21</h4>
                        <p class="mb-0 font-11 color-blue-dark opacity-70">Download</p>
                    </div>
                </a>
                <a href="#" data-bs-toggle="offcanvas" data-bs-target="#menu-activity-single" class="d-flex py-1 mb-2">
                    <div class="align-self-center">
                        <h5 class="pt-1 mb-n1">Spotify Music</h5>
                        <p class="mb-0 font-11 opacity-70">15th June <span class="copyright-year"></span></p>
                    </div>
                    <div class="align-self-center ms-auto text-end">
                        <h4 class="pt-1 mb-n1">$19.21</h4>
                        <p class="mb-0 font-11 color-blue-dark opacity-70">Download</p>
                    </div>
                </a>
            </div>
            <a href="#" data-bs-dismiss="offcanvas" class="mx-3 btn btn-full gradient-highlight shadow-bg shadow-bg-s">Back to Activity View</a>
        </div>
    </div>    
    
    <!-- Activity Sidebar Menu -->
    <div id="menu-activity-single" class="offcanvas offcanvas-bottom offcanvas-detached rounded-m">
        <!-- menu-size will be the dimension of your menu. If you set it to smaller than your content it will scroll-->
        <div class="menu-size" style="height:350px;">
            
            <div class="content">
                <div class="row">
                    <strong class="col-5 color-theme">Company</strong>
                    <strong class="col-7 text-end">Water Company Inc</strong>
                    <div class="col-12 mt-2 mb-2"><div class="divider my-0"></div></div>
                    <strong class="col-5 color-theme">Invoice Number</strong>
                    <strong class="col-7 text-end">#INV-123-5166</strong>
                    <div class="col-12 mt-2 mb-2"><div class="divider my-0"></div></div>
                    <strong class="col-5 color-theme">Billing Period</strong>
                    <strong class="col-7 text-end">June <span class="copyright-year"></span></strong>
                    <div class="col-12 mt-2 mb-2"><div class="divider my-0"></div></div>
                    <strong class="col-5 color-theme">Invoice Amount</strong>
                    <strong class="col-7 text-end color-blue-dark">$315.31</strong>
                    <div class="col-12 mt-2 mb-2"><div class="divider my-0"></div></div>
                    <strong class="col-5 color-theme">Payment Date</strong>
                    <strong class="col-7 text-end">15th August</strong>
                    <div class="col-12 mt-2 mb-2"><div class="divider my-0"></div></div>
                    <strong class="col-5 color-theme">Payment Via</strong>
                    <strong class="col-7 text-end">Credit Card</strong>
                    <div class="col-12 mt-2 mb-2"><div class="divider my-0"></div></div>
                </div>
            </div>

            <a href="#" data-bs-toggle="offcanvas" data-bs-target="#menu-activity" class="mx-3 btn btn-full gradient-highlight shadow-bg shadow-bg-s">Back to Category</a>
        </div>
    </div>


@endsection