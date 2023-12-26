<?php

namespace App\Http\Controllers\UserAuth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function signIn() {

        $menuBar = false;
        
        return view('userAuth.login', ['menuBar' => $menuBar]);
        // return "index works";
    }

    // public function signUp() {
        
    //     $menuBar = false;
        
    //     return view('userAuth.register', ['menuBar' => $menuBar]);
    //     return "index works";
    // }
}
