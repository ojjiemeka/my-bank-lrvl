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

                    <form action="{{ route('accounts.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="basic-form">
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
                                        <input type="email" name="email" class="form-control" placeholder="Email">
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
                                        <input id="result" type="text" name="acc_number" maxlength="12"
                                            class="form-control" placeholder="">
                                    </div>
                                    <div class="align-items-sm-end col-md-6 d-flex mb-3">
                                        <button type="button" class="btn btn-secondary light btn-sm"
                                            onclick="generateRandomNumbers()">Generate Acc# </button>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="mb-5 text-center">
                            <button type="submit" class="btn btn-default">Create</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        function generateRandomNumbers() {
            // Generate a random 12-digit number
            const randomNumber = Math.floor(Math.random() * 1e12).toString().padStart(12, '0');

            // Display the number in the input field
            document.getElementById('result').value = randomNumber;
        }
    </script>
@endsection
