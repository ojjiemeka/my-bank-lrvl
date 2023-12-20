<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }
    
    public function index() {
        
        return view('user.dashboard');
        // return "index works";
    }

    public function cardControl() {
        return view('user.cardControl');
        // return "index works";
    }

    public function activity() {
        return view('user.activity');
        // return "index works";
    }

    public function payments() {
        return view('user.page-payments');
        // return "index works";
    }

    public function paymentBill() {
        return view('user.page-payment-bill');
        // return "index works";
    }
    
    public function paymentRequest() {
        return view('user.page-payment-request');
        // return "index works";
    }

    public function paymentTransfer() {
        return view('user.page-payment-transfer');
        // return "index works";
    }

    public function paymentExchange() {
        return view('user.page-payment-exchange');
        // return "index works";
    }

    public function reports() {
        return view('user.page-reports');
        // return "index works";
    }


}
