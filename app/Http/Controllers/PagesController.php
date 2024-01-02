<?php

namespace App\Http\Controllers;

use App\Models\Accounts;
use Illuminate\Http\Request;

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
        // $result = Accounts::join('users', 'accounts.email', '=', 'users.email')
        // ->join('balance', 'accounts.id', '=', 'balance.acc_id')
        // ->select('accounts.*', 'users.*', 'balance.*')
        // ->get();

        $result = Accounts::with('user', 'balance')->get();

        foreach ($result as $account) {
            // Access user data
            $user = $account->user;

            // Access balance data
            $balance = $account->balance;

            // Access other account data
            $accountData = $account->toArray();
        }

        // dd($result);

        return $result;
    }

    public function index()
    {

        $data = $this->getAll();

        // $dt =$data->first()->fname;
        foreach ($data as $account) {
            // Access user data
            $user = $account->user;

            // Access balance data
            $balance = $account->balance;

            // Access other account data
            $accountData = $account->toArray();
        }

        // dd($balance);


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
        foreach ($data as $account) {
            // Access user data

            // Access balance data
            $balance = $account->balance;
            $accountData = $account->toArray();

            // Access other account data
        }

        return view('user.cardControl', [
            'menuBar' => $this->menuBar,
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

        foreach ($data as $account) {
            // Access user data

            // Access balance data
            $balance = $account->balance;
            $accountData = $account->toArray();

            // Access other account data
        }
        $accountData = $account->toArray();

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

        foreach ($data as $account) {
            // Access user data

            // Access balance data
            $accountData = $account->toArray();

            // Access other account data
        }

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

        foreach ($data as $account) {
            // Access user data

            // Access balance data
            $accountData = $account->toArray();

            // Access other account data
        }

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

        foreach ($data as $account) {
            // Access user data

            // Access balance data
            $accountData = $account->toArray();

            // Access other account data
        }

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

        foreach ($data as $account) {
            // Access user data

            // Access balance data
            $accountData = $account->toArray();

            // Access other account data
        }

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
        foreach ($data as $account) {
            // Access user data
            // $user = $account->user;

            // Access balance data
            $balance = $account->balance;

            // Access other account data
            $accountData = $account->toArray();
        }

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

        // $dt =$data->first()->fname;
        foreach ($data as $account) {
            // Access user data
            // $user = $account->user;

            // Access balance data
            // $balance = $account->balance;

            // Access other account data
            $accountData = $account->toArray();
        }
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

        // $dt =$data->first()->fname;
        foreach ($data as $account) {
            // Access user data
            $user = $account->user;

            // Access balance data
            $balance = $account->balance;

            // Access other account data
            $accountData = $account->toArray();
        }

        return view('user.page-profile', [
            'menuBar' => $this->menuBar,
            'navBar' => $this->navBar,
            'title' => $title,
            'user' => $user,
            'balance' => $balance,
            'accountData' => $accountData,
        ]);
    }
}
