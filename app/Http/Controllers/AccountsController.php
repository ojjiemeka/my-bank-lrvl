<?php

namespace App\Http\Controllers;

use App\Models\Accounts;
use App\Models\User;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class AccountsController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    //  public function __construct()
    //  {
    //      $this->middleware('auth');
    //  }
     
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
            'acc_userid' => 'required',
            'password' => 'required|min:8|confirmed',
            // 'status' => 'required',
            // Add validation rules for other fields
        ]);

        // dd($validatedData);

        // Check if the information already exists
    $existingRecord = Accounts::where('email', $validatedData['email'])->first() && User::where('email', $validatedData['email'])->first();

    if ($existingRecord) {
        // Information already exists, you can handle it as per your requirements
        Alert::error('Error', 'Account information already exists');
        return redirect()->route('accounts.create');
    }

        // Create a new instance of your model and fill it with the validated data
        $model = new Accounts();
        $model->fill($validatedData);

        $user = new User();

        $user->name = 'user';
        $user->is_admin = false;
        $user->email = $request->input('email');
        $user->acc_userid = $request->input('acc_userid');
        $user->password = bcrypt($request->input('password'));

        // echo $this->message;
        // dd($model, $user);
        
        $store = [$model->save() , $user->save()];

        if (!$store) {
            Alert::error('Error', 'Something went wrong');

            return redirect()->route("accounts.create");
        }

        Alert::success('Success', 'Account has been created!!');
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
    $mail = $resource->email;

    $login = User::where('email', $mail)->first();

    // dd($mail);
    // dd($login);

    // Check if the resource exists
    if (!$resource && $login) {
        Alert::error('Error', 'Something went wrong');

        return redirect()->route('accounts.index');
    }

    // // Delete the resource
    $resource->delete();
    $login->delete();
    //  // Display a success message using toastr
    
    Alert::success('Success', 'Account has been deleted!!');
    
    return view('admin.accounts.view', [
        "data" => $this->getAll()
    ]);

    }
}
