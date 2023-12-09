@extends('layouts.main')

@section('content')
<div class="content-body">
    <div class="container-fluid">
        <div class="row page-titles">
            <ol class="breadcrumb">
               <h3>Wire Transfer Form</h3>
            </ol>
        </div>
        <!-- row -->
        <div class="row">
            <div class="col-xl-12 col-xxl-12"> 
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Add a reciepient</h4>
                    </div>
                    <div class="card-body">
                        <div id="smartwizard" class="form-wizard order-create">
                            <ul class="nav nav-wizard">
                                <li><a class="nav-link" href="#wizard_Service"> 
                                    <span>1</span> 
                                </a></li>
                                <li><a class="nav-link" href="#wizard_Time">
                                    <span>2</span>
                                </a></li>
                                <li><a class="nav-link" href="#wizard_Details">
                                    <span>3</span>
                                </a></li>
                                <li><a class="nav-link" href="#wizard_Payment">
                                    <span>4</span>
                                </a></li>
                            </ul>
                            <div class="tab-content">
                                <div id="wizard_Service" class="tab-pane" role="tabpanel">
                                    <div class="row">
                                        <div class="col-lg-6 mb-2">
                                            <div class="mb-3">
                                                <label class="text-label form-label">First Name*</label>
                                                <input type="text" name="firstName" class="form-control" placeholder="Parsley" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 mb-2">
                                            <div class="mb-3">
                                                <label class="text-label form-label">Last Name*</label>
                                                <input type="text" name="lastName" class="form-control" placeholder="Montana" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 mb-2">
                                            <div class="mb-3">
                                                <label class="text-label form-label">Email Address*</label>
                                                <input type="email" class="form-control" id="inputGroupPrepend2" aria-describedby="inputGroupPrepend2" placeholder="example@example.com.com" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 mb-2">
                                            <div class="mb-3">
                                                <label class="text-label form-label">Phone Number*</label>
                                                <input type="text" name="phoneNumber" class="form-control" placeholder="(+1)408-657-9007" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 mb-3">
                                            <div class="card">
                                                <div class="card-header">
                                                    <h4 class="card-title">Wire from:</h4>
                                                </div>
                                                <div class="card-body">
                                                    <div class="basic-form">
                                                        <form>
                                                            <div class="mb-3">
                                                                <label class="form-label">Select account:</label>
                                                                <select class="default-select  form-control wide" >
                                                                    <option>1</option>
                                                                    <option>2</option>
                                                                    <option>3</option>
                                                                    <option>4</option>
                                                                </select>
                                                            </div>
                                                            
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="wizard_Time" class="tab-pane" role="tabpanel">
                                    <div class="row">
                                        <div class="col-lg-6 mb-2">
                                            <div class="mb-3">
                                                <label class="text-label form-label">Routing Number*</label>
                                                <input type="text" name="routing_number" class="form-control" placeholder="Cellophane Square" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 mb-2">
                                            <div class="mb-3">
                                                <label class="text-label form-label">Account Number*</label>
                                                <input type="text" name="account_number" class="form-control" id="emial1" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 mb-2">
                                            <div class="mb-3">
                                                <label class="text-label form-label">Account Name*</label>
                                                <input type="text" name="account_name" class="form-control" id="emial1" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 mb-2">
                                            <div class="mb-3">
                                                <label class="text-label form-label">SWIFT/BIC*</label>
                                                <input type="text" name="swift_code" class="form-control" placeholder="" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 mb-2">
                                            <div class="mb-3">
                                                <label class="text-label form-label">Amount (USD)*</label>
                                                <input type="text" name="amount" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 mb-2">
                                            <div class="mb-3">
                                                <label class="text-label form-label">Wire date*</label>
                                                <input type="date" name="wire_date" class="form-control" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="wizard_Details" class="tab-pane" role="tabpanel">
                                    <div class="row">
                                        <div class="col-lg-6 mb-2">
                                            <div class="mb-3">
                                                <label class="text-label form-label">Message to Reciepient Bank*</label>
                                                <input type="text" name="routing_number" class="form-control" placeholder="Cellophane Square" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 mb-2">
                                            <div class="mb-3">
                                                <label class="text-label form-label">Message to reciepient*</label>
                                                <input type="text" name="account_number" class="form-control" id="emial1" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 mb-2">
                                            <div class="mb-3">
                                                <label class="text-label form-label">Memo*</label>
                                                <input type="text" name="account_name" class="form-control" id="emial1" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="wizard_Payment" class="tab-pane" role="tabpanel">
                                    

                                    <div class="row">
                                        <div class="col-12">
                                            <div class="skip-email text-center">
                                                <p class="fs-4">Feauture Diasbled please contact bank.</p>
                                                <a href="javascript:void(0)">Close</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--**********************************
            Footer start
        ***********************************-->
        @include('layouts.components.footer')
        <!--**********************************
            Footer end
        ***********************************-->
    </div>
    
</div>
@endsection