@extends('layouts.user')

@section('content')
    <!-- Page Content - Only Page Elements Here-->
        
    <svg id="header-deco" viewBox="0 0 1440 600" xmlns="http://www.w3.org/2000/svg"
    class="transition duration-300 ease-in-out delay-150">
    <path id="header-deco-1"
        d="M 0,600 C 0,600 0,120 0,120 C 92.36363636363635,133.79904306220095 184.7272727272727,147.59808612440193 287,148 C 389.2727272727273,148.40191387559807 501.4545454545455,135.40669856459328 592,129 C 682.5454545454545,122.5933014354067 751.4545454545455,122.77511961722489 848,115 C 944.5454545454545,107.22488038277511 1068.7272727272727,91.49282296650718 1172,91 C 1275.2727272727273,90.50717703349282 1357.6363636363635,105.25358851674642 1440,120 C 1440,120 1440,600 1440,600 Z">
    </path>
    <path id="header-deco-2"
        d="M 0,600 C 0,600 0,240 0,240 C 98.97607655502392,258.2105263157895 197.95215311004785,276.4210526315789 278,282 C 358.04784688995215,287.5789473684211 419.16746411483257,280.5263157894737 524,265 C 628.8325358851674,249.4736842105263 777.377990430622,225.47368421052633 888,211 C 998.622009569378,196.52631578947367 1071.3205741626793,191.57894736842107 1157,198 C 1242.6794258373207,204.42105263157893 1341.3397129186603,222.21052631578948 1440,240 C 1440,240 1440,600 1440,600 Z">
    </path>
    <path id="header-deco-3"
        d="M 0,600 C 0,600 0,360 0,360 C 65.43540669856458,339.55023923444975 130.87081339712915,319.1004784688995 245,321 C 359.12918660287085,322.8995215311005 521.9521531100479,347.1483253588517 616,352 C 710.0478468899521,356.8516746411483 735.3205741626795,342.3062200956938 822,333 C 908.6794258373205,323.6937799043062 1056.7655502392345,319.62679425837325 1170,325 C 1283.2344497607655,330.37320574162675 1361.6172248803828,345.1866028708134 1440,360 C 1440,360 1440,600 1440,600 Z">
    </path>
    <path id="header-deco-4"
        d="M 0,600 C 0,600 0,480 0,480 C 70.90909090909093,494.91866028708137 141.81818181818187,509.8373205741627 239,499 C 336.18181818181813,488.1626794258373 459.6363636363636,451.5693779904306 567,446 C 674.3636363636364,440.4306220095694 765.6363636363636,465.88516746411483 862,465 C 958.3636363636364,464.11483253588517 1059.8181818181818,436.8899521531101 1157,435 C 1254.1818181818182,433.1100478468899 1347.090909090909,456.555023923445 1440,480 C 1440,480 1440,600 1440,600 Z">
    </path>
    </svg>
        
        <div class="card card-style">
            <div class="content">
                <div class="tabs tabs-pill" id="tab-group-2">
                    <div class="tab-controls rounded-m p-1 overflow-visible">
                        <a class="font-13 rounded-m shadow-bg shadow-bg-s" data-bs-toggle="collapse" href="#tab-4" aria-expanded="true">Recent</a>
                        <a class="font-13 rounded-m shadow-bg shadow-bg-s" data-bs-toggle="collapse" href="#tab-5" aria-expanded="false">Transfers</a>
                        <a class="font-13 rounded-m shadow-bg shadow-bg-s" data-bs-toggle="collapse" href="#tab-6" aria-expanded="false">Payments</a>
                    </div>
                    <div class="mt-3"></div>
                    <!-- Tab Group 1 -->
                    <div class="collapse show" id="tab-4" data-bs-parent="#tab-group-2">
                        <a href="#" class="d-flex py-1" data-bs-toggle="offcanvas" data-bs-target="#menu-activity-1">
                            <div class="align-self-center">
                                <span class="icon me-2 shadow-bg shadow-bg-s rounded-s">
                                    <img src="https://media.istockphoto.com/id/900917898/vector/fast-cash-icon.jpg?s=612x612&w=0&k=20&c=tS57_xmm-Yf0aZfG0aBSiGdGbA_rNwYnUMwMOa7KXr0=" width="45" class="rounded-s" alt="img">
                                </span>
                            </div>
                            <div class="align-self-center ps-1">
                                <h5 class="pt-1 mb-n1">Steve Perkins</h5>
                                <p class="mb-0 font-11 opacity-70">28th December <span class="copyright-year"></span></p>
                            </div>
                            <div class="align-self-center ms-auto text-end">
                                <h4 class="pt-1 mb-n1 color-green-dark">$1,500.55</h4>
                                <p class="mb-0 font-11"> Received</p>
                            </div>
                        </a>
                        <div class="divider my-2 opacity-50"></div>
                        <a href="#" class="d-flex py-1" data-bs-toggle="offcanvas" data-bs-target="#menu-activity-2">
                            <div class="align-self-center">
                                <span class="icon rounded-s me-2  shadow-bg shadow-bg-xs">
                                    <img src="https://cdn-icons-png.flaticon.com/512/2385/2385270.png" width="45" class="rounded-s" alt="img">
                                </span>
                            </div>
                            <div class="align-self-center ps-1">
                                <h5 class="pt-1 mb-n1">Withdrawal</h5>
                                <p class="mb-0 font-11 opacity-70">28th December <span class="copyright-year"></span></p>
                            </div>
                            <div class="align-self-center ms-auto text-end">
                                <h4 class="pt-1 mb-n1 color-blue-dark">$3,450.31</h4>
                                <p class="mb-0 font-11">Main Account</p>
                            </div>
                        </a>
                        <div class="divider my-2 opacity-50"></div>
                        <a href="#" class="d-flex py-1" data-bs-toggle="offcanvas" data-bs-target="#menu-activity-3">
                            <div class="align-self-center">
                                <span class="icon rounded-s me-2 gradient-orange shadow-bg shadow-bg-xs"><i class="bi bi-google color-white"></i></span>
                            </div>
                            <div class="align-self-center ps-1">
                                <h5 class="pt-1 mb-n1">Google Ads</h5>
                                <p class="mb-0 font-11 opacity-70">24th December <span class="copyright-year"></span></p>
                            </div>
                            <div class="align-self-center ms-auto text-end">
                                <h4 class="pt-1 mb-n1 color-red-dark">$3,240.55</h4>
                                <p class="mb-0 font-11">Bill Payment</p>
                            </div>
                        </a>
                        <div class="divider my-2 opacity-50"></div>
                        <a href="#" class="d-flex py-1" data-bs-toggle="offcanvas" data-bs-target="#menu-activity-4">
                            <div class="align-self-center">
                                <span class="icon me-2 shadow-bg shadow-bg-s rounded-s">
                                    <img src="https://media.istockphoto.com/id/900917898/vector/fast-cash-icon.jpg?s=612x612&w=0&k=20&c=tS57_xmm-Yf0aZfG0aBSiGdGbA_rNwYnUMwMOa7KXr0=" width="45" class="rounded-s" alt="img">
                                </span>
                            </div>
                            <div class="align-self-center ps-1">
                                <h5 class="pt-1 mb-n1"> Artist Growth LTD</h5>
                                <p class="mb-0 font-11 opacity-70">Awaiting Approval</p>
                            </div>
                            <div class="align-self-center ms-auto text-end">
                                <span class="btn btn-xxs gradient-green shadow-bg shadow-bg-xs">Details</span>
                            </div>
                        </a>
                        <div class="divider my-2 opacity-50"></div>
                    </div>
                    <!-- Tab Group 2 -->
                    <div class="collapse" id="tab-5" data-bs-parent="#tab-group-2">
                        <a href="#" class="d-flex py-1" data-bs-toggle="offcanvas" data-bs-target="">
                            <div class="align-self-center">
                                <span class="icon me-2 shadow-bg shadow-bg-s rounded-s">
                                    <img src="https://media.istockphoto.com/id/900917898/vector/fast-cash-icon.jpg?s=612x612&w=0&k=20&c=tS57_xmm-Yf0aZfG0aBSiGdGbA_rNwYnUMwMOa7KXr0=" width="45" class="rounded-s" alt="img">
                                </span>
                            </div>
                            <div class="align-self-center ps-1">
                                <h5 class="pt-1 mb-n1">Whole Foods Market</h5>
                                <p class="mb-0 font-11 opacity-70">29th December <span class="copyright-year"></span></p>
                            </div>
                            <div class="align-self-center ms-auto text-end">
                                <h4 class="pt-1 mb-n1 color-red-dark">$250.00</h4>
                                <p class="mb-0 font-11">Transfered</p>
                            </div>
                        </a>
                        <div class="divider my-2 opacity-50"></div>
                        <a href="#" class="d-flex py-1" data-bs-toggle="offcanvas" data-bs-target="">
                            <div class="align-self-center">
                                <span class="icon rounded-s me-2  shadow-bg shadow-bg-xs">
                                    <img src="https://cdn-icons-png.flaticon.com/512/2385/2385270.png" width="45" class="rounded-s" alt="img">
                                </span>
                            </div>
                            <div class="align-self-center ps-1">
                                <h5 class="pt-1 mb-n1">Withdrawal</h5>
                                <p class="mb-0 font-11 opacity-70">28th December <span class="copyright-year"></span></p>
                            </div>
                            <div class="align-self-center ms-auto text-end">
                                <h4 class="pt-1 mb-n1 color-blue-dark">$3,450.31</h4>
                                <p class="mb-0 font-11">Main Account</p>
                            </div>
                        </a>
                        <div class="divider my-2 opacity-50"></div>
                        <a href="#" class="d-flex py-1" >
                            <div class="align-self-center">
                                <span class="icon me-2 shadow-bg shadow-bg-s rounded-s">
                                    <img src="https://media.istockphoto.com/id/900917898/vector/fast-cash-icon.jpg?s=612x612&w=0&k=20&c=tS57_xmm-Yf0aZfG0aBSiGdGbA_rNwYnUMwMOa7KXr0=" width="45" class="rounded-s" alt="img">
                                </span>
                            </div>
                            <div class="align-self-center ps-1">
                                <h5 class="pt-1 mb-n1">Chase E-Pay</h5>
                                <p class="mb-0 font-11 opacity-70">Awaiting Approval</p>
                            </div>
                            <div class="align-self-center ms-auto text-end">
                                <span class="btn btn-xxs bg-green-dark shadow-bg shadow-bg-xs">Details</span>
                            </div>
                        </a>
                        <div class="divider my-2 opacity-50"></div>
                        <a href="#" class="d-flex py-1" data-bs-toggle="offcanvas" data-bs-target="">
                            <div class="align-self-center">
                                <span class="icon me-2 shadow-bg shadow-bg-s rounded-s">
                                    <img src="https://media.istockphoto.com/id/900917898/vector/fast-cash-icon.jpg?s=612x612&w=0&k=20&c=tS57_xmm-Yf0aZfG0aBSiGdGbA_rNwYnUMwMOa7KXr0=" width="45" class="rounded-s" alt="img">
                                </span>
                            </div>
                            <div class="align-self-center ps-1">
                                <h5 class="pt-1 mb-n1">Online Transfer(...3896)</h5>
                                <p class="mb-0 font-11 opacity-70">10th December <span class="copyright-year"></span></p>
                            </div>
                            <div class="align-self-center ms-auto text-end">
                                <h4 class="pt-1 mb-n1 color-green-dark">$190,000.00</h4>
                                <p class="mb-0 font-11"> Received</p>
                            </div>
                        </a>
                    </div>
                    <!-- Tab Group 3 -->
                    <div class="collapse" id="tab-6" data-bs-parent="#tab-group-2">
                        <a href="#" class="d-flex py-1" data-bs-toggle="offcanvas" data-bs-target="">
                            <div class="align-self-center">
                                <span class="icon rounded-s me-2 gradient-orange shadow-bg shadow-bg-xs"><i class="bi bi-google color-white"></i></span>
                            </div>
                            <div class="align-self-center ps-1">
                                <h5 class="pt-1 mb-n1">Google Ads</h5>
                                <p class="mb-0 font-11 opacity-70">24th December <span class="copyright-year"></span></p>
                            </div>
                            <div class="align-self-center ms-auto text-end">
                                <h4 class="pt-1 mb-n1 color-red-dark">$3240.55</h4>
                                <p class="mb-0 font-11">Bill Payment</p>
                            </div>
                        </a>
                        <div class="divider my-2 opacity-50"></div>
                        <a href="#" class="d-flex py-1" data-bs-toggle="offcanvas" data-bs-target="">
                            <div class="align-self-center">
                                <span class="icon rounded-s me-2 gradient-green shadow-bg shadow-bg-xs"><i class="bi bi-caret-up-fill color-white"></i></span>
                            </div>
                            <div class="align-self-center ps-1">
                                <h5 class="pt-1 mb-n1">Bitcoin</h5>
                                <p class="mb-0 font-11 opacity-70">23rd December <span class="copyright-year"></span></p>
                            </div>
                            <div class="align-self-center ms-auto text-end">
                                <h4 class="pt-1 mb-n1 color-blue-dark">+0.315%</h4>
                                <p class="mb-0 font-11">Stock Update</p>
                            </div>
                        </a>
                        <div class="divider my-2 opacity-50"></div>
                        <a href="#" class="d-flex py-1" data-bs-toggle="offcanvas" data-bs-target="">
                            <div class="align-self-center">
                                <span class="icon rounded-s me-2 gradient-yellow shadow-bg shadow-bg-xs"><i class="bi bi-pie-chart-fill color-white"></i></span>
                            </div>
                            <div class="align-self-center ps-1">
                                <h5 class="pt-1 mb-n1">Dividends</h5>
                                <p class="mb-0 font-11 opacity-70">23rd December <span class="copyright-year"></span></p>
                            </div>
                            <div class="align-self-center ms-auto text-end">
                                <h4 class="pt-1 mb-n1 color-green-dark">$9,500.00</h4>
                                <p class="mb-0 font-11">Wire Transfer</p>
                            </div>
                        </a>
                        <div class="divider my-2 opacity-50"></div>
                    </div>
                </div>
            </div>
        </div>
    <!-- End of Page Content-->

    
    <!-- Transaction Action Sheet -->
    <div id="menu-activity-1" class="offcanvas offcanvas-bottom offcanvas-detached rounded-m">
        <!-- menu-size will be the dimension of your menu. If you set it to smaller than your content it will scroll-->
        <div class="menu-size" style="height:385px;">
            <div class="content">
                <a href="#" class="d-flex py-1 pb-4">
                    <div class="align-self-center">
                        <span class="icon gradient-red me-2 shadow-bg shadow-bg-s rounded-s">
                            <img src="images/pictures/6s.jpg" width="45" class="rounded-s" alt="img"></span>
                    </div>
                    <div class="align-self-center ps-1">
                        <h5 class="pt-1 mb-n1">Steve Perkins</h5>
                        <p class="mb-0 font-11 opacity-70">28th December <span class="copyright-year"></span></p>
                    </div>
                    <div class="align-self-center ms-auto text-end">
                        <h4 class="pt-1 font-14 mb-n1 color-green-dark">APPROVED</h4>
                        <p class="mb-0 font-11"> ID-315-6123</p>
                    </div>
                </a>
                <div class="row">
                    <strong class="col-5 color-theme">Type</strong>
                    <strong class="col-7 text-end">Incoming</strong>
                    <div class="col-12 mt-2 mb-2"><div class="divider my-0"></div></div>
                    <strong class="col-5 color-theme">Date</strong>
                    <strong class="col-7 text-end">28th Dec</strong>
                    <div class="col-12 mt-2 mb-2"><div class="divider my-0"></div></div>
                    <strong class="col-5 color-theme">Amount</strong>
                    <strong class="col-7 text-end color-highlight">$1,500.55</strong>
                    <div class="col-12 mt-2 mb-2"><div class="divider my-0"></div></div>
                    <strong class="col-5 color-theme">Sent Via</strong>
                    <strong class="col-7 text-end">Credit Card</strong>
                    <div class="col-12 mt-2 mb-2"><div class="divider my-0"></div></div>
                    <strong class="col-5 color-theme">Added To</strong>
                    <strong class="col-7 text-end">Main Account</strong>
                    <div class="col-12 mt-2 mb-2"><div class="divider my-0"></div></div>
                </div>
            </div>
            <a href="#" data-bs-dismiss="offcanvas" class="mx-3 btn btn-full gradient-highlight shadow-bg shadow-bg-s">Back to Activity</a>
        </div>
    </div>
    
    <!-- Transaction Action Sheet -->
    <div id="menu-activity-2" class="offcanvas offcanvas-bottom offcanvas-detached rounded-m">
        <!-- menu-size will be the dimension of your menu. If you set it to smaller than your content it will scroll-->
        <div class="menu-size" style="height:385px;">
            <div class="content">
                <a href="#" class="d-flex py-1 pb-4">
                    <div class="align-self-center">
                        <span class="icon rounded-s me-2 gradient-brown shadow-bg shadow-bg-xs"><i class="bi bi-wallet color-white"></i></span>
                    </div>
                    <div class="align-self-center ps-1">
                        <h5 class="pt-1 mb-n1">Withdrawal</h5>
                        <p class="mb-0 font-11 opacity-70">28th December <span class="copyright-year"></span></p>
                    </div>
                    <div class="align-self-center ms-auto text-end">
                        <h4 class="pt-1 font-14 mb-n1 color-green-dark">APPROVED</h4>
                        <p class="mb-0 font-11"> ID-315-6123</p>
                    </div>
                </a>
                <div class="row">
                    <strong class="col-5 color-theme">Type</strong>
                    <strong class="col-7 text-end">Withdrawal</strong>
                    <div class="col-12 mt-2 mb-2"><div class="divider my-0"></div></div>
                    <strong class="col-5 color-theme">Date</strong>
                    <strong class="col-7 text-end">28th December</strong>
                    <div class="col-12 mt-2 mb-2"><div class="divider my-0"></div></div>
                    <strong class="col-5 color-theme">Amount</strong>
                    <strong class="col-7 text-end color-highlight">$345.31</strong>
                    <div class="col-12 mt-2 mb-2"><div class="divider my-0"></div></div>
                    <strong class="col-5 color-theme">Withdrawn To</strong>
                    <strong class="col-7 text-end">Credit Card</strong>
                    <div class="col-12 mt-2 mb-2"><div class="divider my-0"></div></div>
                    <strong class="col-5 color-theme">Withdraw From</strong>
                    <strong class="col-7 text-end">Main Account</strong>
                    <div class="col-12 mt-2 mb-2"><div class="divider my-0"></div></div>
                </div>
            </div>
            <a href="#" data-bs-dismiss="offcanvas" class="mx-3 btn btn-full gradient-highlight shadow-bg shadow-bg-s">Back to Activity</a>
        </div>
    </div>
    
    <!-- Transaction Action Sheet -->
    <div id="menu-activity-3" class="offcanvas offcanvas-bottom offcanvas-detached rounded-m">
        <!-- menu-size will be the dimension of your menu. If you set it to smaller than your content it will scroll-->
        <div class="menu-size" style="height:385px;">
            <div class="content">
                <a href="#" class="d-flex py-1 pb-4">
                    <div class="align-self-center">
                        <span class="icon rounded-s me-2 gradient-orange shadow-bg shadow-bg-xs"><i class="bi bi-google color-white"></i></span>
                    </div>
                    <div class="align-self-center ps-1">
                        <h5 class="pt-1 mb-n1">Google Ads</h5>
                        <p class="mb-0 font-11 opacity-70">24th December <span class="copyright-year"></span></p>
                    </div>
                    <div class="align-self-center ms-auto text-end">
                        <h4 class="pt-1 font-14 mb-n1 color-red-dark">RECEIVED</h4>
                        <p class="mb-0 font-11"> ID-315-6123</p>
                    </div>
                </a>
                <div class="row">
                    <strong class="col-5 color-theme">Type</strong>
                    <strong class="col-7 text-end">Payment</strong>
                    <div class="col-12 mt-2 mb-2"><div class="divider my-0"></div></div>
                    <strong class="col-5 color-theme">Paid To</strong>
                    <strong class="col-7 text-end">GOOGLE LLC LTD</strong>
                    <div class="col-12 mt-2 mb-2"><div class="divider my-0"></div></div>
                    <strong class="col-5 color-theme">Date</strong>
                    <strong class="col-7 text-end">24th December</strong>
                    <div class="col-12 mt-2 mb-2"><div class="divider my-0"></div></div>
                    <strong class="col-5 color-theme">Amount</strong>
                    <strong class="col-7 text-end color-highlight">$324.55</strong>
                    <div class="col-12 mt-2 mb-2"><div class="divider my-0"></div></div>
                    <strong class="col-5 color-theme">Paid From</strong>
                    <strong class="col-7 text-end">Credit Card</strong>
                    <div class="col-12 mt-2 mb-2"><div class="divider my-0"></div></div>
                </div>
            </div>
            <a href="#" data-bs-dismiss="offcanvas" class="mx-3 btn btn-full gradient-highlight shadow-bg shadow-bg-s">Back to Activity</a>
        </div>
    </div>
    
     <!-- Transaction Action Sheet -->
    <div id="menu-activity-4" class="offcanvas offcanvas-bottom offcanvas-detached rounded-m">
        <!-- menu-size will be the dimension of your menu. If you set it to smaller than your content it will scroll-->
        <div class="menu-size" style="height:380px;">
            <div class="content">
                <a href="#" class="d-flex py-1 pb-4">
                    <div class="align-self-center">
                        <span class="icon me-2 shadow-bg shadow-bg-s rounded-s">
                            <img src="https://media.istockphoto.com/id/900917898/vector/fast-cash-icon.jpg?s=612x612&w=0&k=20&c=tS57_xmm-Yf0aZfG0aBSiGdGbA_rNwYnUMwMOa7KXr0=" width="45" class="rounded-s" alt="img">
                        </span>
                    </div>
                    <div class="align-self-center ps-1">
                        <h5 class="pt-1 mb-n1">Artist Growth LTD</h5>
                        <p class="mb-0 font-11 opacity-70">Awaiting Approval</p>
                    </div>
                    <div class="align-self-center ms-auto text-end">
                        <h4 class="pt-1 font-14 mb-n1 color-yellow-dark">PENDING</h4>
                        <p class="mb-0 font-11"> ID-315-6123</p>
                    </div>
                </a>
                <div class="row">
                    <strong class="col-5 color-theme">Type</strong>
                    <strong class="col-7 text-end">Transfer</strong>
                    <div class="col-12 mt-2 mb-2"><div class="divider my-0"></div></div>
                    <strong class="col-5 color-theme">Paid To</strong>
                    <strong class="col-7 text-end">Artist Growth LTD</strong>
                    <div class="col-12 mt-2 mb-2"><div class="divider my-0"></div></div>
                    <strong class="col-5 color-theme">Date</strong>
                    <strong class="col-7 text-end">26th December</strong>
                    <div class="col-12 mt-2 mb-2"><div class="divider my-0"></div></div>
                    <strong class="col-5 color-theme">Amount</strong>
                    <strong class="col-7 text-end color-highlight">$32,400.55</strong>
                    <div class="col-12 mt-2 mb-2"><div class="divider my-0"></div></div>
                    <strong class="col-5 color-theme">Paid From</strong>
                    <strong class="col-7 text-end">Debit Card</strong>
                    <div class="col-12 mt-2 mb-4"><div class="divider my-0"></div></div>
                    <div class="col-6">
                        <a href="#" data-bs-dismiss="offcanvas" class="btn btn-s btn-full gradient-green shadow-bg shadow-bg-xs">Approve</a>
                    </div>
                    <div class="col-6">
                        <a href="#" data-bs-dismiss="offcanvas" class="btn btn-s btn-full gradient-red shadow-bg shadow-bg-xs">Reject</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection