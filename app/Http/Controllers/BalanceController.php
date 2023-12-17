<?php

namespace App\Http\Controllers;

use App\Models\Accounts;
use App\Models\Balance;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class BalanceController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function getAll()
    {
        $result = Accounts::join('balance', 'accounts.id', '=', 'balance.acc_id')
        ->select('accounts.*', 'balance.*')
        ->get();

    if ($result->isEmpty()) {
        return response()->json(['message' => 'No matching records found.']);
    }

    return $result;
    }

    public function getAccounts(){
        $result = Accounts::all();
        return $result;

    }

    // public function join(){
    //     $result = Accounts::join('balance', 'accounts.id', '=', 'balance.acc_id')
    //         ->select('accounts.*', 'balance.*')
    //         ->get();

    //     if ($result->isEmpty()) {
    //         return response()->json(['message' => 'No matching records found.']);
    //     }

    //     return $result;

    // }



     
    public function index()
    {
        // dd($this->join());

        return view('admin.balance.view', [
            "data" => $this->getAll(),
            "accounts" => $this->getAccounts()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'acc_id' => 'required',
            'wallet_balance' => 'required',
            'main_balance' => 'required',
            'card_1' => 'required',
            'card_2' => 'required',
            'card_3' => 'required',
            'card_4' => 'required',
            // Add validation rules for other fields
        ]);

        // Create a new instance of your model and fill it with the validated data
    $model = new Balance();
    $model->fill($validatedData);

    // echo $this->message;
    // dd($model);
    $store = $model->save();

    if(!$store){
        Alert::error('Error', 'Something went wrong');

        return redirect()->route('balances.index');
    }

    Alert::success('Success', 'Balance has been created!!');
    return redirect()->route('balances.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
