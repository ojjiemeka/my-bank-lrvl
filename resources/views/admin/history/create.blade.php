@extends('layouts.main')

@section('content')
    <div class="content-body">
        <!-- row -->
        <div class="container-fluid">
            <div class="col-xl-12 col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Add History</h4>
                    </div>

                    <form action="{{ route('history.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="basic-form">
                                <div class="row">

                                    <div class="mb-3 col-md-6">
                                        <label class="form-label">Date</label>
                                        <input type="date" name="date" class="form-control" placeholder="">
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label class="form-label">Description</label>
                                        <input type="text" name="desc" class="form-control" placeholder="">
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label class="form-label">Transaction Type</label>
                                        <select class="form-select" aria-label="Default select example" name="type">
                                            <option selected>Open this select menu</option>
                                            <option value="ACH Employee Payment">ACH Payment</option>
                                            <option value="Deposit">Deposit</option>
                                            <option value="Returned deposit">Returned deposit</option>
                                            <option value="Tax Payment">Tax Payment</option>
                                            <option value="ACH Credit">ACH Credit</option>
                                            <option value="ATM Transaction">ATM Transaction</option>
                                            <option value="Outgoing Wire Transfer ">Outgoing Wire Transfer </option>
                                            <option value="ACH Vendor Payment">ACH Vendor Payment</option>
                                            <option value="Check">Check</option>
                                          </select>
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label class="form-label">Amount</label>
                                        <input type="text" name="amount" class="form-control" placeholder="">
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
        function togglePasswords() {
        var passwordInput = document.getElementById('password');
        var confirmationInput = document.getElementById('password_confirmation');
        var checkbox = document.querySelector('input[type="checkbox"]');

        if (checkbox.checked) {
            passwordInput.type = "text";
            confirmationInput.type = "text";
        } else {
            passwordInput.type = "password";
            confirmationInput.type = "password";
        }
    }
    </script>

    <script>
        function generateRandomNumbers() {
            // Generate a random 12-digit number
            const randomNumber = Math.floor(Math.random() * 1e12).toString().padStart(12, '0');

            // Display the number in the input field
            document.getElementById('result').value = randomNumber;
        }
    </script>
@endsection
