<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Rules;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
class RestrictionController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    //  public function __construct()
    //  {
    //      $this->middleware('auth');
    //  }

    public $message = "Data has been stored successfully!";

    public function getAll(){
       $data = Rules::all();
       return $data;
    }

    public function index()
    {
        return view('admin.restrictions.view', [
            "rules" => $this->getAll()
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
            'name' => 'required',
            'desc' => 'required',
            // Add validation rules for other fields
        ]);

        // Create a new instance of your model and fill it with the validated data
    $model = new Rules();
    $model->fill($validatedData);

    // echo $this->message;
    // dd($model);
    $store = $model->save();

    if(!$store){
        Alert::error('Error', 'Something went wrong');

        return redirect()->route('restrictions.index');
    }

    Alert::success('Success', 'Rule has been created!!');
    return redirect()->route('restrictions.index');

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
    $resource = Rules::find($id);
        // dd($resource);

        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'desc' => 'required',
            // Add other fields as needed
        ]);

        if (!$resource) {
            Alert::error('Error', 'Something went wrong');
    
            return redirect()->route('restrictions.index');
        }
    
        // // Delete the resource
        $resource->update($validatedData);
         // Display a success message using toastr
        
        Alert::success('Success', 'Rule has been updated!!');
        
        return view('admin.restrictions.view', [
            "rules" => $this->getAll()
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, string $id)
    {
        // Find the resource by ID
    $resource = Rules::find($id);

    // Check if the resource exists
    if (!$resource) {
        Alert::error('Error', 'Something went wrong');

        return redirect()->route('restrictions.index');
    }

    // // Delete the resource
    $resource->delete();
     // Display a success message using toastr
    
    Alert::success('Success', 'Rule has been deleted!!');
    
    return view('admin.restrictions.view', [
        "rules" => $this->getAll()
    ]);
    }
}
