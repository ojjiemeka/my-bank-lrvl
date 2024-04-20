<?php

namespace App\Http\Controllers;

use App\Models\History;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class HistoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function getAll()
    {
        $data = History::all();
        return $data;
    }

    public function generateRandomString($length = 12)
    {
        $numChars = (int) ceil($length * 0.7); // 70% of length for numbers
        $letterChars = $length - $numChars; // Rest for letters
        $numbers = '0123456789';
        $letters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $randomString = '';

        // Add numbers to the string
        for ($i = 0; $i < $numChars; $i++) {
            $randomString .= $numbers[rand(0, strlen($numbers) - 1)];
        }

        // Add letters to the string
        for ($i = 0; $i < $letterChars; $i++) {
            $randomString .= $letters[rand(0, strlen($letters) - 1)];
        }

        // Shuffle the string to mix numbers and letters
        $randomString = str_shuffle($randomString);

        return $randomString;
    }

    public function index()
    {
        $historyInfo = $this->getAll();

        // dd($historyInfo);
        return view('admin.history.view', [
            'history' => $historyInfo
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
        $validatedData = $request->validate([
            'date' => 'required',
            'desc' => 'required',
            'type' => 'required',
            'amount' => 'required',
        ]);

        $ref = $this->generateRandomString();
        $validatedData['ref'] = $ref;

        // dd($validatedData);

        $model = new History();
        $model->fill($validatedData);

        $store = $model->save();

        if (!$store) {
            Alert::error('Error', 'Something went wrong');

            return redirect()->route("history.index");
        }

        Alert::success('Success', 'Datils has been added!!');
        return redirect()->route('history.index');


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
        $history = History::find($id);

        $validatedData = $request->validate([
            'date' => 'required',
            'desc' => 'required',
            'type' => 'required',
            'amount' => 'required',
        ]);

        // dd($validatedData);

        if (!$history) {
            Alert::error('Error', 'Something went wrong');
    
            return redirect()->route('accounts.index');
        }
    
        // // Delete the resource
        $history->update($validatedData);
         // Display a success message using toastr
        
        Alert::success('Success', 'History has been updated!!');
        
        return view('admin.history.view', [
            "history" => $this->getAll()
        ]);
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
