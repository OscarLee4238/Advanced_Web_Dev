<?php

namespace App\Http\Controllers;

use App\Models\Phone;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PhoneController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $phones = Phone::all();
        return view('phone.index', compact('phones'));
    }

    

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('phone.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request=validate([
            'title' => 'required',
            'description' => 'required|max:500',
            'release_year' => 'required|integer',
            'photo' => 'required|image|mimes:jpg,png,jpg,gif|max:2048'
        ]);

        if ($request->hasFile('photo')) {
            $imageName = time().'.'.$request->photo->extension();
            $request->photo->move(public_path('images/phones'), $imageName);
        }

        Phone::create([
            'model' => $request->model,
            'description' => $request->description,
            'release_year'=> $request->$release_year,
            'photo' => $photoName,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        return to_route('book.index')->with('success', 'Book created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Phone $phone)
    {
        return view('phone.show')->with('phone', $phone);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Phone $phone)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Phone $phone)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Phone $phone)
    {
        //
    }
}
