@extends('layouts.user')

@section('content')
    <div class="card bg-13 card-fixed">
        <form method="POST" action="{{ route('loginFunction') }}">
            @csrf
            <div class="card-center mx-3 px-4 py-4 bg-white rounded-m">
                <div class="text-center">
                    <img class="w-25" src="https://branditechture.agency/brand-logos/wp-content/uploads/wpdm-cache/Deutsche-Bank-900x0.png" alt="" srcset="">
                <h1 class="color-brown-dark mb-0">Deutshce Bank</h1>
                <h3 class="color-brown-light font-200 mb-0">Private Client Banking</h3>
                </div>
                <p class="mb-3 mt-3">Login to your Account.</p>
                <div class="form-custom form-label form-border form-icon mb-3 bg-transparent">
                    <i class="bi bi-person-circle font-13"></i>
                    <input type="text" name="email" class="form-control rounded-xs" id="c1"
                        placeholder="Username" />
                    <label for="c1" class="color-theme">Username</label>
                    <span>(required)</span>
                </div>
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                <div class="form-custom form-label form-border form-icon mb-4 bg-transparent">
                    <i class="bi bi-asterisk font-13"></i>
                    <input type="password" name="password" class="form-control rounded-xs" id="password"
                        placeholder="Password" />
                    <label for="c2" class="color-theme">Password</label>
                    <span>(required)</span>
                </div>
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                <div class="col-12 mb-3">
                    <input type="checkbox" onclick="togglePasswords()"> Show Password
                </div>
                <div class="form-check form-check-custom">
                    <input class="form-check-input" type="checkbox" name="type" value id="c2a">
                    <label class="form-check-label font-12" for="c2a">Remember this account</label>
                    <i class="is-checked color-highlight font-13 bi bi-check-circle-fill"></i>
                    <i class="is-unchecked color-highlight font-13 bi bi-circle"></i>
                </div>
                <div class="align-items-center d-flex justify-content-center">
                <button type="submit" class="btn btn-full d-bank shadow-bg shadow-bg-s mt-4">SIGN IN</button>

                </div>
                <div class="row">
                    <div class="col-6 text-start">
                        <a data-bs-toggle="offcanvas" data-bs-target="#unauthrized-access" class="font-11 color-theme opacity-40 pt-4 d-block">Forgot
                            Password?</a>
                    </div>
                    {{-- <div class="col-6 text-end">
                    <a href="page-signup-1.html" class="font-11 color-theme opacity-40 pt-4 d-block">Create Account</a>
                </div> --}}
                </div>
            </div>
        </form>
        <div class="card-overlay rounded-0 m-0 bg-black opacity-70"></div>
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
@endsection
