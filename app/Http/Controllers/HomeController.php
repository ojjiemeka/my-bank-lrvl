<?php

namespace App\Http\Controllers;

use App\Models\Accounts;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // return view('home');
        $data = Accounts::all();
        return view('admin.accounts.view', [
            'data' => $data
        ]);
         
    }

    public function accounts() {
        return view('admin.accounts.view');
        // return "index works";
    }

    public function addAccounts() {
        return view('admin.accounts.create');
        // return "index works";
    }
}
