<?php

namespace App\Http\Controllers\UserAuth;

use App\Http\Controllers\Controller;
use App\Models\Logins;
use App\Models\User;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    use AuthenticatesUsers;

    protected $redirectTo = '/dashboard'; // Redirect after successful login

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function showLoginForm()
    {

        $menuBar = false;

        return view('userAuth.login', ['menuBar' => $menuBar]);
        // return "index works";
    }

    public function loginFunction(Request $request)
    {

        // Validate the request data
        $validatedData = $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $email = $request->input('email');
        $pass = $request->input('password');

        $credentials = $request->only('email', 'password');

        // dd($credentials);

        if(Auth::attempt($credentials)){
            if(Auth::check() && Auth::user()->is_admin === 1){
                 Session::flash('success', 'Welcome Admin');
                Session::flash('alert-class', 'alert-success');
                return redirect('/home')->withErrors([
                    'isSuccess' => true,
                    'message' => "Welcome Admin"
                ], 200);
            // return ('it works');
            }
            else{
                return redirect('/dashboard')->withErrors([
                    'isSuccess' => true,
                    'message' => "Welcome Admin"
                ], 200);
            }
            
        }else{
            Session::flash('error', 'Invalid Credentials!!! Check Username Or Password');
                Session::flash('alert-class', 'alert-danger');
                return redirect('/login')->withErrors([
                    'isSuccess' => true,
                    'message' => "Invalid Credentials!!! Check Username Or Password"
                ], 200);
            // return ('error 2');

        }

        // if (Auth::attempt(['email' => $validatedData['email'], 'password' => $validatedData['password']])) {
        //     // Authentication passed
        //     // The user is now logged in

        //     // You can access the authenticated user using Auth::user()
        //     $user = Auth::user();
        //     if (!$user->is_admin) {
        //         $user = Auth::user();

        //         // $user = Auth::login($user);
        //         dd($user);
        //         return redirect()->intended($this->redirectTo);
        //     } else {
        //         return redirect('/home'); // Redirect to admin dashboard
        //     }
        //     // Your logic after successful login


        // } else {
        //     // Authentication failed
        //     // Invalid email or password

        //     // Your logic after failed login
        //     return back()->withInput()->withErrors(['credentials' => 'Invalid login credentials'])->withInput();
        // }
    }
}
