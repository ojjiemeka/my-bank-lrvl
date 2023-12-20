@extends('layouts.user')

@section('content')

<!-- Page Content - Only Page Elements Here-->
    <div class="page-content footer-clear">

        <!-- Page Title-->
        <div class="pt-3">
            <div class="page-title d-flex">
                <div class="align-self-center me-auto">
                    <p class="color-highlight">Hello Enabled</p>
                    <h1 class="color-theme">Request</h1>
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


        <div class="tabs tabs-links" id="tab-group-6">
            <div class="tab-controls bg-transparent mx-3 mb-3">
                <a class="font-13 rounded-s" data-bs-toggle="collapse" href="#tab-16" aria-expanded="true">From Contacts</a>
                <a class="font-13 rounded-s" data-bs-toggle="collapse" href="#tab-17" aria-expanded="false">Send Custom Request</a>
            </div>
            <div class="card card-style">
                <div class="content my-1">
                    <div class="collapse show" id="tab-16" data-bs-parent="#tab-group-6">
                        <div class="list-group list-custom list-group-m list-group-flush rounded-xs">
                            <a href="#" data-bs-toggle="offcanvas" data-bs-target="#menu-request" class="list-group-item">
                                <img src="images/pictures/1s.jpg" width="33" class="me-3 rounded-xs" alt="img">
                                <div><h5 class="font-15 mb-0">John Doe</h5><span>Requested 3 weeks ago</span></div>
                                <span class="badge rounded-xl">REQUEST</span>
                            </a>
                            <a href="#" data-bs-toggle="offcanvas" data-bs-target="#menu-request" class="list-group-item">
                                <img src="images/pictures/8s.jpg" width="33" class="me-3 rounded-xs" alt="img">
                                <div><h5 class="font-15 mb-0">Dana Rose</h5><span>Never Requested</span></div>
                                <span class="badge rounded-xl">REQUEST</span>
                            </a>
                            <a href="#" data-bs-toggle="offcanvas" data-bs-target="#menu-request" class="list-group-item">
                                <img src="images/pictures/16s.jpg" width="33" class="me-3 rounded-xs" alt="img">
                                <div><h5 class="font-15 mb-0">Jack Dancer</h5><span>Never Requested</span></div>
                                <span class="badge rounded-xl">REQUEST</span>
                            </a>
                            <a href="#" data-bs-toggle="offcanvas" data-bs-target="#menu-request" class="list-group-item">
                                <img src="images/pictures/20s.jpg" width="33" class="me-3 rounded-xs" alt="img">
                                <div><h5 class="font-15 mb-0">Dan Singer</h5><span>Never Requested</span></div>
                                <span class="badge rounded-xl">REQUEST</span>
                            </a>
                            <a href="#" data-bs-toggle="offcanvas" data-bs-target="#menu-request" class="list-group-item">
                                <img src="images/pictures/25s.jpg" width="33" class="me-3 rounded-xs" alt="img">
                                <div><h5 class="font-15 mb-0">Jane Red</h5><span>Requested $1,200.00</span></div>
                                <span class="badge rounded-xl bg-green-dark">PENDING</span>
                            </a>
                            <a href="#" data-bs-toggle="offcanvas" data-bs-target="#menu-request" class="list-group-item">
                                <img src="images/pictures/6s.jpg" width="33" class="me-3 rounded-xs" alt="img">
                                <div><h5 class="font-15 mb-0">Lisa Smith</h5><span>Cannot send Requests</span></div>
                                <span class="badge bg-red-dark rounded-xl">UNAVAILABLE</span>
                            </a>
                        </div>
                    </div>
                    <div class="collapse" id="tab-17" data-bs-parent="#tab-group-6">
                        <div class="form-custom form-label form-icon mt-3">
                            <i class="bi bi-at font-16"></i>
                            <input type="email" class="form-control rounded-xs" id="c2" placeholder="Requested From"/>
                            <label for="c2" class="color-highlight">Requested From</label>
                            <span>(required)</span>
                        </div>
                        <div class="pb-2"></div>
                        <div class="form-custom form-label form-icon">
                            <i class="bi bi-currency-dollar font-14"></i>
                            <input type="number" class="form-control rounded-xs" id="c32" placeholder="Requested Amount"/>
                            <label for="c32" class="color-highlight">Requested Amount</label>
                            <span>(required)</span>
                        </div>
                        <div class="pb-2"></div>
                        <div class="form-custom form-label form-icon mb-3">
                            <i class="bi bi-pencil-fill font-12"></i>
                            <textarea class="form-control rounded-xs" placeholder="Requested Details" id="c7"></textarea>
                            <label for="c7" class="color-highlight font-11">Requested Details</label>
                        </div>
                        <div class="form-check form-check-custom">
                            <input class="form-check-input" type="checkbox" name="type" value="" id="c2a">
                            <label class="form-check-label" for="c2a">I accept the Transfer <a href="#">Terms of Service</a></label>
                            <i class="is-checked color-blue-dark font-14 bi bi-check-circle-fill"></i>
                            <i class="is-unchecked color-blue-dark font-14 bi bi-circle"></i>
                        </div>
                        <a href="#" class="btn btn-full gradient-highlight rounded-s shadow-bg shadow-bg-xs mt-3 mb-3">Send Payment Request</a>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- End of Page Content-->

    <!-- Off Canvas and Menu Elements-->
    <!-- Always outside the Page Content-->

    <div id="menu-request"  class="offcanvas offcanvas-bottom offcanvas-detached rounded-m">
        <!-- menu-size will be the dimension of your menu. If you set it to smaller than your content it will scroll-->
        <div class="menu-size" style="min-height:290px;">
            <div class="d-flex mx-3 mt-3 py-1">
                <div class="align-self-center">
                    <img src="images/pictures/5s.jpg" alt="img" width="40" class="rounded-s me-2 pe-1">
                </div>
                <div class="align-self-center">
                    <h3 class="mb-n1">Jane Doe</h3>
                    <p class="mb-0 font-11">You've never requested funds from Jane</p>
                </div>
                <div class="align-self-center ms-auto">
                    <a href="#" class="ps-4 shadow-0 me-n2" data-bs-dismiss="offcanvas">
                        <i class="bi bi-x color-red-dark font-26 line-height-xl"></i>
                    </a>
                </div>
            </div>
            <div class="divider divider-margins mt-2 mb-2"></div>
            <div class="content mt-0">
                <div class="pb-3"></div>
                <div class="form-custom form-label form-icon">
                    <i class="bi bi-code-square font-14"></i>
                    <input type="number" class="form-control rounded-xs" id="c43" placeholder="150.00"/>
                    <label for="c43" class="form-label-always-active color-highlight font-11">Amount</label>
                    <span class="font-10">( Currency: USD )</span>
                </div>
                <div class="pb-2"></div>
                <div class="form-custom form-label form-icon mb-3">
                    <i class="bi bi-pencil-fill font-12"></i>
                    <textarea class="form-control rounded-xs" placeholder="Requested Details" style="height:50px!important;" id="c71"></textarea>
                    <label for="c7" class="color-highlight font-11">Requested Details</label>
                </div>
                <div class="form-check form-check-custom">
                    <input class="form-check-input" type="checkbox" name="type" value="" id="c2a1">
                    <label class="form-check-label" for="c2a1">I accept the Request <a href="#">Terms of Service</a></label>
                    <i class="is-checked color-blue-dark font-14 bi bi-check-circle-fill"></i>
                    <i class="is-unchecked color-blue-dark font-14 bi bi-circle"></i>
                </div>
            </div>
            <a href="#" data-bs-dismiss="offcanvas" class="mx-3 btn btn-full gradient-blue shadow-bg shadow-bg-s mb-4">Request Funds</a>
        </div>
    </div>

@endsection


    

   