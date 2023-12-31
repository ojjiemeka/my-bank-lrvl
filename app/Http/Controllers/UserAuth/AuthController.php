<?php

namespace App\Http\Controllers\UserAuth;

use App\Http\Controllers\Controller;
use App\Models\Logins;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    use AuthenticatesUsers;

    protected $redirectTo = '/dashboard'; // Redirect after successful login

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function showLoginForm() {

        $menuBar = false;
        
        return view('userAuth.login', ['menuBar' => $menuBar]);
        // return "index works";
    }

    public function loginFunction(Request $request) {
        
      // Validate the request data
      $validatedData = $request->validate([
        'acc_userid' => 'required',
        'password' => 'required',
    ]);

    // Attempt to authenticate the user against the "logins" table
    $user = Logins::where('acc_userid', $validatedData['acc_userid'])->first();

    dd($user);

    if ($user && password_verify($validatedData['password'], $user->password)) {
        // Authentication successful
        Auth::login($user);
        return redirect()->intended($this->redirectTo); // Redirect to the intended page after login
    } else {
        // Authentication failed
        return back()->withErrors(['credentials' => 'Invalid login credentials'])->withInput();
    }

    }
}
