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
    
    public function index() {

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

    public function cardControl() {
        $title = 'Card Management';

        $data = $this->getAll();

        // $dt =$data->first()->fname;
        foreach ($data as $account) {
            // Access user data

            // Access balance data
            $balance = $account->balance;
    
            // Access other account data
        }

        return view('user.cardControl', [
            'menuBar' => $this->menuBar,
            'title' => $title,
            'balance' => $balance,
        ]);
        // return "index works";
    }

    public function activity() {
        $title = 'Activity';

        return view('user.activity', [
            'menuBar' => $this->menuBar,
            'title' => $title
        ]);
        // return "index works";
    }

    public function payments() {
        $title = "Payments";
        
        return view('user.page-payments', [
            'menuBar' => $this->menuBar,
            'title' => $title

        ]);
        // return "index works";
    }

    public function paymentBill() {
        $title = "Bills";

        return view('user.page-payment-bill', [
            'menuBar' => $this->menuBar,
            'title' => $title
        ]);
        // return "index works";
    }
    
    public function paymentRequest() {
        $title = "Payment Requests";

        return view('user.page-payment-request', [
            'menuBar' => $this->menuBar,
            'title' => $title
        ]);
        // return "index works";
    }

    public function paymentTransfer() {
        $title = "Send Money";

        return view('user.page-payment-transfer', [
            'menuBar' => $this->menuBar,
            'title' => $title
        ]);
        // return "index works";
    }

    public function paymentExchange() {
        $title = "Exchange";

        return view('user.page-payment-exchange', [
            'menuBar' => $this->menuBar,
            'title' => $title
        ]);
        // return "index works";
    }

    public function reports() {
        $title = "Reports";

        return view('user.page-reports', [
            'menuBar' => $this->menuBar,
            'title' => $title
        ]);
        // return "index works";
    }


}
