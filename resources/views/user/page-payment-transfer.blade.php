@extends('layouts.user')

@section('content')

<!-- Page Content - Only Page Elements Here-->

    
        <div class="tabs tabs-links" id="tab-group-6">
            <div class="tab-controls bg-transparent mx-3 mb-3">
                <a class="font-12 rounded-s" data-bs-toggle="collapse" href="#tab-16" aria-expanded="true">To Friends</a>
                <a class="font-12 rounded-s" data-bs-toggle="collapse" href="#tab-17" aria-expanded="false">Custom Transfer</a>
                <a class="font-12 rounded-s" data-bs-toggle="collapse" href="#tab-18" aria-expanded="false">Between Accounts</a>
            </div>
            <div class="card card-style">
                <div class="content my-1">
                    <div class="collapse show" id="tab-16" data-bs-parent="#tab-group-6">
                        <div class="list-group list-custom list-group-m list-group-flush rounded-xs">
                            <a href="#" data-bs-toggle="offcanvas" data-bs-target="#menu-transfer" class="list-group-item">
                                
                                <div><h5 class="font-15 mb-0">Master Card (..9733)</h5><span>Card</span></div>
                                <span class="badge rounded-xl">TRANSFER</span>
                            </a>
                            <a href="#" data-bs-toggle="offcanvas" data-bs-target="#menu-transfer" class="list-group-item">
                                
                                <div><h5 class="font-15 mb-0">Hien Thi Tran</h5><span>Contact</span></div>
                                <span class="badge rounded-xl ">TRANSFER</span>
                            </a>
                            <a href="#" data-bs-toggle="offcanvas" data-bs-target="#menu-transfer" class="list-group-item">
                                
                                <div><h5 class="font-15 mb-0">Lisa .A Smith</h5><span>Contact</span></div>
                                <span class="badge  rounded-xl">TRANSFER</span>
                            </a>
                            <a href="#" data-bs-toggle="offcanvas" data-bs-target="#menu-transfer" class="list-group-item">
                                
                                <div><h5 class="font-15 mb-0">Artist Growth LTD</h5><span>Contact</span></div>
                                <span class="badge rounded-xl">TRANSFER</span>
                            </a>
                            <a href="#" data-bs-toggle="offcanvas" data-bs-target="#menu-transfer" class="list-group-item">
                                
                                <div><h5 class="font-15 mb-0">Jack (Dancer)</h5><span>Contact</span></div>
                                <span class="badge rounded-xl">TRANSFER</span>
                            </a>
                        </div>
                    </div>
                    <div class="collapse" id="tab-17" data-bs-parent="#tab-group-6">
                        <div class="form-custom form-label form-icon mt-3">
                            <i class="bi bi-at font-16"></i>
                            <input type="email" class="form-control rounded-xs" id="c2" placeholder="transfered From"/>
                            <label for="c2" class="color-highlight">transfered From</label>
                            <span>(required)</span>
                        </div>
                        <div class="pb-2"></div>
                        <div class="form-custom form-label form-icon">
                            <i class="bi bi-currency-dollar font-14"></i>
                            <input type="number" class="form-control rounded-xs" id="c32" placeholder="transfered Amount"/>
                            <label for="c32" class="color-highlight">transfered Amount</label>
                            <span>(required)</span>
                        </div>
                        <div class="pb-2"></div>
                        <div class="form-custom form-label form-icon mb-3">
                            <i class="bi bi-pencil-fill font-12"></i>
                            <textarea class="form-control rounded-xs" placeholder="transfered Details" id="c7"></textarea>
                            <label for="c7" class="color-highlight font-11">transfered Details</label>
                        </div>
                        <div class="form-check form-check-custom">
                            <input class="form-check-input" type="checkbox" name="type" value="" id="c2a">
                            <label class="form-check-label" for="c2a">I accept the Transfer <a href="#">Terms of Service</a></label>
                            <i class="is-checked color-blue-dark font-14 bi bi-check-circle-fill"></i>
                            <i class="is-unchecked color-blue-dark font-14 bi bi-circle"></i>
                        </div>
                        <a href="#" class="btn btn-full gradient-highlight rounded-s shadow-bg shadow-bg-xs mt-3 mb-3">Send Payment transfer</a>
                    </div>
                    <div class="collapse" id="tab-18" data-bs-parent="#tab-group-6">
                        <div class="pt-3"></div>
                        <div class="form-custom form-label form-icon">
                            <i class="bi bi-bank font-13"></i>
                            <select class="form-select rounded-xs" id="c6a">
                                <option value="0" disabled selected>Transfer From</option>
                                <option value="0">Main Account</option>
                                <option value="1">Savings Account</option>
                                <option value="2">Company Account</option>
                            </select>
                            <label for="c6a" class="color-highlight">Transfer From</label>
                        </div>
                        <div class="pt-2"></div>
                        <div class="form-custom form-label form-icon">
                            <i class="bi bi-bank font-13"></i>
                            <select class="form-select rounded-xs" id="c6b">
                                <option value="0" disabled selected>Transfer To</option>
                                <option value="0">Main Account</option>
                                <option value="1">Savings Account</option>
                                <option value="2">Company Account</option>
                            </select>
                            <label for="c6b" class="color-highlight">Transfer To</label>
                        </div>
                        <div class="mt-3"></div>
                        <div class="form-custom form-label form-icon">
                            <i class="bi bi-currency-dollar font-14"></i>
                            <input type="number" class="form-control rounded-xs" id="c321" placeholder="Enter Amount"/>
                            <label for="c321" class="color-highlight">Enter Amount</label>
                            <span>(required)</span>
                        </div>
                        <div class="pb-2"></div>
                        <div class="form-check form-check-custom">
                            <input class="form-check-input" type="checkbox" name="type" value="" id="c2ab">
                            <label class="form-check-label" for="c2ab">I accept the Transfer <a href="#">Terms of Service</a></label>
                            <i class="is-checked color-blue-dark font-14 bi bi-check-circle-fill"></i>
                            <i class="is-unchecked color-blue-dark font-14 bi bi-circle"></i>
                        </div>
                        <a href="#" class="btn btn-full gradient-highlight rounded-s shadow-bg shadow-bg-xs mt-3 mb-3">Transfer Between Accounts</a>
                    </div>
                </div>
            </div>
        </div>

    <!-- End of Page Content-->

    <!-- Off Canvas and Menu Elements-->
    <!-- Always outside the Page Content-->

    <div id="menu-transfer"  class="offcanvas offcanvas-bottom offcanvas-detached rounded-m">
        <!-- menu-size will be the dimension of your menu. If you set it to smaller than your content it will scroll-->
        <div class="menu-size" style="min-height:290px;">
            <div class="d-flex mx-3 mt-3 py-1">
                <div class="align-self-center">
                    <img src="images/pictures/5s.jpg" alt="img" width="40" class="rounded-s me-2 pe-1">
                </div>
                <div class="align-self-center">
                    <h3 class="mb-n1">Jane Doe</h3>
                    <p class="mb-0 font-11">You've never transfered funds from Jane</p>
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
                    <textarea class="form-control rounded-xs" placeholder="Transfer Details" style="height:50px!important;" id="c71"></textarea>
                    <label for="c7" class="color-highlight font-11">Transfer Details</label>
                </div>
                <div class="form-check form-check-custom">
                    <input class="form-check-input" type="checkbox" name="type" value="" id="c2a1">
                    <label class="form-check-label" for="c2a1">I accept the Transfer <a href="#">Terms of Service</a></label>
                    <i class="is-checked color-blue-dark font-14 bi bi-check-circle-fill"></i>
                    <i class="is-unchecked color-blue-dark font-14 bi bi-circle"></i>
                </div>
            </div>
            <a href="#" data-bs-dismiss="offcanvas" class="mx-3 btn btn-full gradient-green shadow-bg shadow-bg-s mb-4">Transfer Funds</a>
        </div>
    </div>

@endsection

    
