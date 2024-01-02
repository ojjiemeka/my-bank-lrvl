@extends('layouts.user')

@section('content')

    <!-- Page Content - Only Page Elements Here-->
        
        <div class="card card-style">
            <div class="content mb-0">
                <div class="tabs tabs-pill" id="tab-group-2">
                    <div class="tab-controls rounded-m p-1 overflow-visible">
                        <a class="font-13 rounded-s py-1 shadow-bg shadow-bg-s" data-bs-toggle="collapse" href="#tab-4" aria-expanded="true">Bills List</a>
                        <a class="font-13 rounded-s py-1 shadow-bg shadow-bg-s" data-bs-toggle="collapse" href="#tab-5" aria-expanded="false">Make a Payment</a>
                    </div>
                    <div class="mt-3"></div>
                    <!-- Tab Bills List -->
                    <div class="collapse show" id="tab-4" data-bs-parent="#tab-group-2">
                        <a href="#" class="d-flex py-1 mb-2">
                            <div class="align-self-center">
                                <h5 class="pt-1 mb-n1">Water Bill</h5>
                                <p class="mb-0 font-11 opacity-70">Overdue by 3 Days</p>
                            </div>
                            <div class="align-self-center ms-auto text-end">
                                <h4 class="pt-1 mb-n1">$450.35</h4>
                                <p class="mb-0 font-11 color-red-light">Bill Unpaid</p>
                            </div>
                        </a>
                        <a href="#" class="d-flex py-1 mb-2">
                            <div class="align-self-center">
                                <h5 class="pt-1 mb-n1">Telephone Bill</h5>
                                <p class="mb-0 font-11 opacity-70">Due in 14 Days</p>
                            </div>
                            <div class="align-self-center ms-auto text-end">
                                <h4 class="pt-1 mb-n1">$310.41</h4>
                                <p class="mb-0 font-11 color-red-light">Bill Unpaid</p>
                            </div>
                        </a>
                        <a href="#" class="d-flex py-1 mb-2">
                            <div class="align-self-center">
                                <h5 class="pt-1 mb-n1">Cloud Storage</h5>
                                <p class="mb-0 font-11 opacity-70">Due in 16 Days</p>
                            </div>
                            <div class="align-self-center ms-auto text-end">
                                <h4 class="pt-1 mb-n1">$30.21</h4>
                                <p class="mb-0 font-11 color-yellow-dark">Pending</p>
                            </div>
                        </a>
                        <a href="#" class="d-flex py-1 mb-2">
                            <div class="align-self-center">
                                <h5 class="pt-1 mb-n1">Spotify Music</h5>
                                <p class="mb-0 font-11 opacity-70">Paid via Main Account</p>
                            </div>
                            <div class="align-self-center ms-auto text-end">
                                <h4 class="pt-1 mb-n1">$19.21</h4>
                                <p class="mb-0 font-11 color-green-dark">Approved</p>
                            </div>
                        </a>
                    </div>
                    
                    <!-- Tab Custom Payments-->
                    <div class="collapse" id="tab-5" data-bs-parent="#tab-group-2">
                        <div class="pt-3"></div>
                        <div class="form-custom form-label form-icon">
                            <i class="bi bi-bank font-13"></i>
                            <select class="form-select rounded-xs" id="c6">
                                <option value="0" disabled selected>Select Account</option>
                                <option value="0">Main Account</option>
                                <option value="1">Savings Account</option>
                                <option value="2">Company Account</option>
                            </select>
                            <label for="c6" class="color-highlight">Select Paying Account</label>
                        </div>
                        <div class="pb-2"></div>
                        <div class="form-custom form-label form-icon">
                            <i class="bi bi-building font-13"></i>
                            <select class="form-select rounded-xs" id="c61">
                                <option value="0" disabled selected>Select Provider</option>
                                <option value="0">Water Company</option>
                                <option value="1">Electric Company</option>
                                <option value="2">Company Account</option>
                                <option value="3">Custom - IBAN</option>
                            </select>
                            <label for="c61" class="color-highlight form-label-always-">Select Provider</label>
                        </div>
                        <div class="pb-2"></div>
                        <div class="form-custom form-label form-icon">
                            <i class="bi bi-code font-14"></i>
                            <input type="text" class="form-control rounded-xs" id="c31" placeholder="Bill Serial Number"/>
                            <label for="c31" class="color-highlight form-label-always-">Bill Serial Number</label>
                            <span>(required)</span>
                        </div>
                        <div class="pb-2"></div>
                        <div class="form-custom form-label form-icon">
                            <i class="bi bi-currency-dollar font-14"></i>
                            <input type="number" class="form-control rounded-xs" id="c32" placeholder="Bill Amount"/>
                            <label for="c32" class="color-highlight form-label-always-">Bill Amount</label>
                            <span>(required)</span>
                        </div>
                        <div class="pb-2"></div>
                        <div class="form-custom form-label form-icon">
                            <i class="bi bi-at font-16"></i>
                            <input type="email" class="form-control rounded-xs" id="c2" placeholder="Email Invoice To" pattern="[A-Za-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required />
                            <label for="c2" class="color-highlight form-label-always-">Email Invoice To</label>
                            <span>(required)</span>
                        </div>
                        <div class="pb-3"></div>
                        <a href="#" class="btn btn-full gradient-night rounded-s shadow-bg shadow-bg-s mb-4">Pay Bill Now</a>
                    </div>
                </div>
            </div>
        </div>
        
        <!--Account Activity Notification-->
        <div class="card card-style gradient-red w-25 rounded-s shadow-bg shadow-bg-xs mb-3">
            <div class="content my-2">
                <a href="#" class="d-flex">
                    <div class="align-self-center">
                        <h1 class="mb-0 font-14"><i class="bi bi-droplet color-white pe-3"></i></h1>
                    </div>
                    <div class="align-self-center">
                        <h5 class="color-white font-600 mb-0 mt-0 font-14 line-height-s">
                            Utilities Bill Overdue.
                        </h5>
                    </div>
                    <div class="align-self-center ms-auto">
                        <h5 class="color-white font-600 mb-0 mt-0 font-14 line-height-s">
                            Tap to Pay
                        </h5>
                    </div>
                </a>
            </div>
        </div>
        <div class="card card-style gradient-blue w-25 rounded-s shadow-bg shadow-bg-xs">
            <div class="content my-2">
                <a href="#" class="d-flex">
                    <div class="align-self-center">
                        <h1 class="mb-0 font-14"><i class="bi bi-wallet color-white pe-3"></i></h1>
                    </div>
                    <div class="align-self-center">
                        <h5 class="color-white font-600 mb-0 mt-0 font-14 line-height-s">
                            Salary due next week.
                        </h5>
                    </div>
                    <div class="align-self-center ms-auto">
                        <h5 class="color-white font-600 mb-0 mt-0 font-14 line-height-s">
                            5 Days Left
                        </h5>
                    </div>
                </a>
            </div>
        </div>
        

 
    <!-- End of Page Content-->

    <!-- Off Canvas and Menu Elements-->
    <!-- Always outside the Page Content-->
    
    <!-- Bill Button Menu -->
    <div id="menu-bill"
        class="offcanvas offcanvas-bottom offcanvas-detached rounded-m">
        <!-- menu-size will be the dimension of your menu. If you set it to smaller than your content it will scroll-->
        <div class="menu-size" style="height:350px;">
            <div class="d-flex mx-3 mt-3 py-1">
                <div class="align-self-center">
                    <h1 class="mb-0">Pay a Bill</h1>
                </div>
                <div class="align-self-center ms-auto">
                    <a href="#" class="ps-4 shadow-0 me-n2" data-bs-dismiss="offcanvas">
                        <i class="bi bi-x color-red-dark font-26 line-height-xl"></i>
                    </a>
                </div>
            </div>
            <div class="divider divider-margins mt-3 mb-2"></div>
            <div class="content mt-0">
                <div class="d-flex">
                    <h5 class="mb-0 font-600 font-14">From</h5>
                    <h5 class="mb-0 ms-auto font-600 font-14">Cool-Co LTD</h5>
                </div>
                <div class="divider my-2"></div>
                <div class="d-flex">
                    <h5 class="mb-0 font-600 font-14">Period</h5>
                    <h5 class="mb-0 ms-auto font-600 font-14">1st to 30th June</h5>
                </div>
                <div class="divider my-2"></div>
                <div class="d-flex">
                    <h5 class="mb-0 font-600 font-14">Invoice</h5>
                    <h5 class="mb-0 ms-auto font-600 font-14">ID-315613</h5>
                </div>
                <div class="divider my-2"></div>
                <div class="d-flex">
                    <h5 class="mb-0 font-600 font-14">Amount</h5>
                    <h5 class="mb-0 ms-auto font-700 font-14 color-blue-dark">$145 USD</h5>
                </div>
                <div class="divider my-2"></div>
                <div class="d-flex">
                    <h5 class="mb-0 font-600 font-14">Bill Status</h5>
                    <h5 class="mb-0 ms-auto font-700 font-14 color-red-dark">Overdue</h5>
                </div>
                <div class="divider my-2"></div>
            </div>
            <a href="#" data-bs-dismiss="offcanvas" class="mx-3 btn btn-full gradient-blue shadow-bg shadow-bg-s">Tap to Pay -  145 USD</a>
        </div>
    </div>
    
    <!-- Bill Button Menu -->
    <div id="menu-bill-paid"
        class="offcanvas offcanvas-bottom offcanvas-detached rounded-m">
        <!-- menu-size will be the dimension of your menu. If you set it to smaller than your content it will scroll-->
        <div class="menu-size" style="height:350px;">
            <div class="d-flex mx-3 mt-3 py-1">
                <div class="align-self-center">
                    <h1 class="mb-0">Pay a Bill</h1>
                </div>
                <div class="align-self-center ms-auto">
                    <a href="#" class="ps-4 shadow-0 me-n2" data-bs-dismiss="offcanvas">
                        <i class="bi bi-x color-red-dark font-26 line-height-xl"></i>
                    </a>
                </div>
            </div>
            <div class="divider divider-margins mt-3 mb-2"></div>
            <div class="content mt-0">
                <div class="d-flex">
                    <h5 class="mb-0 font-600 font-14">From</h5>
                    <h5 class="mb-0 ms-auto font-600 font-14">Cool-Co LTD</h5>
                </div>
                <div class="divider my-2"></div>
                <div class="d-flex">
                    <h5 class="mb-0 font-600 font-14">Period</h5>
                    <h5 class="mb-0 ms-auto font-600 font-14">1st to 30th June</h5>
                </div>
                <div class="divider my-2"></div>
                <div class="d-flex">
                    <h5 class="mb-0 font-600 font-14">Invoice</h5>
                    <h5 class="mb-0 ms-auto font-600 font-14">ID-315613</h5>
                </div>
                <div class="divider my-2"></div>
                <div class="d-flex">
                    <h5 class="mb-0 font-600 font-14">Amount</h5>
                    <h5 class="mb-0 ms-auto font-600 font-14">$145 USD</h5>
                </div>
                <div class="divider my-2"></div>
                <div class="d-flex">
                    <h5 class="mb-0 font-600 font-14">Bill Status</h5>
                    <h5 class="mb-0 ms-auto font-600 font-14 color-green-dark">Paid & Approved</h5>
                </div>
                <div class="divider my-2"></div>
            </div>
            <a href="#" data-bs-dismiss="offcanvas" class="mx-3 btn btn-full gradient-green shadow-bg shadow-bg-s">Paid - Thank you</a>
        </div>
    </div>

@endsection
