<?php

namespace App\Http\Controllers;

use App\Models\Accounts;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class AccountsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function getAll()
    {
        $data = Accounts::all();
        return $data;
    }

    public function index()
    {
        return view('admin.accounts.view', [
            "data" => $this->getAll()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.accounts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'fname' => 'required',
            'lname' => 'required',
            'email' => 'required',
            'phonenumber' => 'required',
            'dob' => 'required',
            'address' => 'required',
            'acc_number' => 'required',
            // Add validation rules for other fields
        ]);

        // dd($validatedData);

        // Create a new instance of your model and fill it with the validated data
        $model = new Accounts();
        $model->fill($validatedData);

        // echo $this->message;
        // dd($model);
        $store = $model->save();

        if (!$store) {
            Alert::error('Error', 'Something went wrong');

            return redirect()->route("accounts.create");
        }

        Alert::success('Success', 'Account has been created!!');
        return redirect()->route("accounts.create");
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
        return view('admin.accounts.update');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $resource = Accounts::find($id);

        // Validate the request data
        $validatedData = $request->validate([
            'fname' => 'required',
            'lname' => 'required',
            'email' => 'required',
            'phonenumber' => 'required',
            'dob' => 'required',
            'address' => 'required',
            'acc_number' => 'required',
            // Add validation rules for other fields
        ]);

        // dd($id, $validatedData);

        if (!$resource) {
            Alert::error('Error', 'Something went wrong');
    
            return redirect()->route('accounts.index');
        }
    
        // // Delete the resource
        $resource->update($validatedData);
         // Display a success message using toastr
        
        Alert::success('Success', 'Account has been updated!!');
        
        return view('admin.accounts.view', [
            "data" => $this->getAll()
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
         // Find the resource by ID
    $resource = Accounts::find($id);

    // dd($resource);

    // Check if the resource exists
    if (!$resource) {
        Alert::error('Error', 'Something went wrong');

        return redirect()->route('accounts.index');
    }

    // Delete the resource
    $resource->delete();
     // Display a success message using toastr
    
    Alert::success('Success', 'Account has been deleted!!');
    
    return view('admin.accounts.view', [
        "data" => $this->getAll()
    ]);
    }
}
