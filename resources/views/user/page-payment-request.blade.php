@extends('layouts.user')

@section('content')

<!-- Page Content - Only Page Elements Here-->
        <!-- Page Title-->
       
        <div class="tabs tabs-links" id="tab-group-6">
            <div class="tab-controls bg-transparent mx-3 mb-3">
                <a class="font-13 rounded-s" data-bs-toggle="collapse" href="#tab-16" aria-expanded="true">From Contacts</a>
            </div>
            <div class="card card-style">
                <div class="content my-1">
                    <div class="collapse show" id="tab-16" data-bs-parent="#tab-group-6">
                        <div class="list-group list-custom list-group-m list-group-flush rounded-xs">
                            <a href="#" data-bs-toggle="offcanvas" data-bs-target="#menu-request" class="list-group-item">
                                <div><h5 class="font-15 mb-0">Hien Thi Tran</h5><span>Requested 6 weeks ago</span></div>
                                <span class="badge rounded-xl">REQUEST</span>
                            </a>
                            <a href="#" data-bs-toggle="offcanvas" data-bs-target="#menu-request" class="list-group-item">
                                <div><h5 class="font-15 mb-0">Lisa .A Smith</h5><span>Never Requested</span></div>
                                <span class="badge rounded-xl">REQUEST</span>
                            </a>
                            <a href="#" data-bs-toggle="offcanvas" data-bs-target="#menu-request" class="list-group-item">
                                <div><h5 class="font-15 mb-0">Artist Growth LTD</h5><span>Never Requested</span></div>
                                <span class="badge rounded-xl">REQUEST</span>
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

    <!-- End of Page Content-->

    <!-- Off Canvas and Menu Elements-->
    <!-- Always outside the Page Content-->


@endsection


    

   