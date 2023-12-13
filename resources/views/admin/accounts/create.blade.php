@extends('layouts.main')

@section('content')
@extends('layouts.main')

@section('content')
    <div class="content-body">
        <!-- row -->
        <div class="container-fluid">
            <div class="col-xl-12 col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Add account info</h4>
                    </div>
                    <div class="card-body">
                        <div class="basic-form">
                            <form action="{{ route('accounts.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf

                                <div class="row">
                                    <div class="mb-3 col-md-6">
                                        <label class="form-label">First Name</label>
                                        <input type="text" name="fname" class="form-control" placeholder="">
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label class="form-label">Last Name</label>
                                        <input type="text" name="lname" class="form-control" placeholder="">
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label class="form-label">Email</label>
                                        <input type="email" class="form-control" placeholder="Email">
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label class="form-label">Phone number</label>
                                        <input type="text" name="phonenumber" class="form-control" placeholder="">
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label class="form-label">Date of birth</label>
                                        <input type="date" name="dob" class="form-control" placeholder="">
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label class="form-label">Address</label>
                                        <input type="text" name="address" class="form-control" placeholder="">
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label class="form-label">Account Number</label>
                                        <input type="text" name="address" class="form-control" placeholder="">
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox">
                                        <label class="form-check-label">
                                            Check me out
                                        </label>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-default">Create</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@endsection
