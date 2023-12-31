@extends('layouts.user')

@section('content')
    <div class="card bg-5 card-fixed">
       <form action="{{route('loginFunction')}}" method="post">
        @csrf
        <div class="card-center mx-3 px-4 py-4 bg-white rounded-m">
            <h1 class="font-30 font-800 mb-0">HSBC Investment Banking</h1>
            <p class="mt-2">Login to your Account.</p>
            <div class="form-custom form-label form-border form-icon mb-3 bg-transparent">
                <i class="bi bi-person-circle font-13"></i>
                <input type="text" name="acc_userid" class="form-control rounded-xs" id="c1" placeholder="Username" />
                <label for="c1" class="color-theme">Username</label>
                <span>(required)</span>
            </div>
            <div class="form-custom form-label form-border form-icon mb-4 bg-transparent">
                <i class="bi bi-asterisk font-13"></i>
                <input type="password" name="password" class="form-control rounded-xs" id="c2" placeholder="Password" />
                <label for="c2" class="color-theme">Password</label>
                <span>(required)</span>
            </div>
            <div class="form-check form-check-custom">
                <input class="form-check-input" type="checkbox" name="type" value id="c2a">
                <label class="form-check-label font-12" for="c2a">Remember this account</label>
                <i class="is-checked color-highlight font-13 bi bi-check-circle-fill"></i>
                <i class="is-unchecked color-highlight font-13 bi bi-circle"></i>
            </div>
            <button type="submit" class="btn btn-full gradient-highlight shadow-bg shadow-bg-s mt-4">SIGN IN</button>
            <div class="row">
                <div class="col-6 text-start">
                    <a href="page-forgot-1.html" class="font-11 color-theme opacity-40 pt-4 d-block">Forgot Password?</a>
                </div>
                {{-- <div class="col-6 text-end">
                    <a href="page-signup-1.html" class="font-11 color-theme opacity-40 pt-4 d-block">Create Account</a>
                </div> --}}
            </div>
        </div>
       </form>
        <div class="card-overlay rounded-0 m-0 bg-black opacity-70"></div>
    </div>
@endsection
