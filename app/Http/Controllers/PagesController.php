<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index() {
        return view('user.dashboard');
        // return "index works";
    }

    public function cardControl() {
        return view('user.cardControl');
        // return "index works";
    }

    public function wireTransfer() {
        return view('user.wire-transfer');
        // return "index works";
    }
}
