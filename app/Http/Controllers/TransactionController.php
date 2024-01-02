<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function fundsTransfer(Request $request)
    {
        $data = $request->validate([
            'acc_number' => 'required',
            'name' => 'required',
            'bank_name' => 'required',
            // Add validation rules for other fields
        ]);

        // dd($data);

        $errorMessage = "Transfer failed, contact customer support";

        // Example of setting the session variable
return redirect()->back()->with('transfer_error', 'Transfer failed, contact customer support')->withInput();


    }
}
