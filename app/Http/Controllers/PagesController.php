<?php

namespace App\Http\Controllers;

use App\Models\Accounts;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PagesController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('checkRole');
    // }
    private $menuBar = true;
    private $navBar = true;


    public function getAll()
    {
        $user = Auth::user();

        $userWithAccountsAndBalance = User::with(['accounts.balance'])
        ->where('email', $user->email)
        // ->first(['users.*', 'accounts.*', 'balance.*']);

        // return $usersWithAccounts;
        ->first();

        // dd($userWithAccountsAndBalance);


        return $userWithAccountsAndBalance;
    }

    public function index()
    {

        $data = $this->getAll();
        
        // dd($data);
        $user = $data;
        $accountData = $data->accounts[0]->toArray();
        $balance = $data->accounts[0]->balance;

        // dd($accountData);

        return view('user.dashboard', [
            'menuBar' => $this->menuBar,
            'navBar' => $this->navBar,
            'user' => $user,
            'balance' => $balance,
            'accountData' => $accountData,
        ]);
        // return "index works";
    }

    public function cardControl()
    {
        $title = 'Card Management';

        $data = $this->getAll();

        // $dt =$data->first()->fname;
        $accountData = $data->accounts[0]->toArray();

        $balance = $data->accounts[0]->balance;


        return view('user.cardControl', [
            'menuBar' => ($this->menuBar),
            'navBar' => $this->navBar,
            'title' => $title,
            'balance' => $balance,
            'accountData' => $accountData,

        ]);
        // return "index works";
    }

    public function activity()
    {
        $title = 'Activity';

        $data = $this->getAll();

        $accountData = $data->accounts[0]->toArray();

        return view('user.activity', [
            'menuBar' => $this->menuBar,
            'navBar' => $this->navBar,
            'title' => $title,
            'accountData' => $accountData,

        ]);
        // return "index works";
    }

    public function payments()
    {
        $title = "Payments";

        $data = $this->getAll();

        $accountData = $data->accounts[0]->toArray();

        return view('user.page-payments', [
            'menuBar' => $this->menuBar,
            'navBar' => $this->navBar,
            'title' => $title,
            'accountData' => $accountData,

        ]);
        // return "index works";
    }

    public function paymentBill()
    {
        $title = "Bills";
        $data = $this->getAll();

        $accountData = $data->accounts[0]->toArray();

        return view('user.page-payment-bill', [
            'menuBar' => $this->menuBar,
            'navBar' => $this->navBar,
            'title' => $title,
            'accountData' => $accountData,

        ]);
        // return "index works";
    }

    public function paymentRequest()
    {
        $title = "Payment Requests";
        $data = $this->getAll();

        $accountData = $data->accounts[0]->toArray();

        return view('user.page-payment-request', [
            'menuBar' => $this->menuBar,
            'navBar' => $this->navBar,
            'title' => $title,
            'accountData' => $accountData,

        ]);
        // return "index works";
    }

    public function paymentTransfer()
    {
        $title = "Send Money";
        $data = $this->getAll();

        $accountData = $data->accounts[0]->toArray();

        return view('user.page-payment-transfer', [
            'menuBar' => $this->menuBar,
            'navBar' => $this->navBar,
            'title' => $title,
            'accountData' => $accountData,
        ]);
        // return "index works";
    }

    public function paymentExchange()
    {
        $title = "Exchange";
        $data = $this->getAll();

        // $dt =$data->first()->fname;
        $balance = $data->accounts[0]->balance;
        $accountData = $data->accounts[0]->toArray();

        return view('user.page-payment-exchange', [
            'menuBar' => $this->menuBar,
            'navBar' => $this->navBar,
            'title' => $title,
            'balance' => $balance,
            'accountData' => $accountData,

        ]);
        // return "index works";
    }

    public function reports()
    {
        $title = "Reports";

        $data = $this->getAll();

        $accountData = $data->accounts[0]->toArray();

        return view('user.page-reports', [
            'menuBar' => $this->menuBar,
            'navBar' => $this->navBar,
            'title' => $title,
            'accountData' => $accountData,

        ]);
        // return "index works";
    }

    public function accountProfile()
    {
        $title = "Settings";
        $data = $this->getAll();
        $user = $data;
        // $dt =$data->first()->fname;
        $accountData = $data->accounts[0]->toArray();
        $balance = $data->accounts[0]->balance;

        return view('user.page-profile', [
            'menuBar' => $this->menuBar,
            'navBar' => $this->navBar,
            'title' => $title,
            'user' => $user,
            'balance' => $balance,
            'accountData' => $accountData,
        ]);
    }

    public function support()
    {
        $menuBar = false;
        $navBar = true;
        $title = "Support";
        $data = $this->getAll();
        $user = $data;

        // $dt =$data->first()->fname;
        $accountData = $data->accounts[0]->toArray();

        return view('user.support', [
            'menuBar' => $menuBar,
            'navBar' => $navBar,
            'title' => $title,
            'user' => $user,
            'accountData' => $accountData,

        ]);
    }
}
