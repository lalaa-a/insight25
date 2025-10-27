<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DetailController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
        //
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
    public function edit()
    {
        $detail = auth()->user()->detail;
        return inertia('Detail/Edit', [
            'detail' => $detail,
            'status' => session('status'),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $request->validate([
            'describes' => 'required|string',
            'institute' => 'required|string|max:255',
            'isAiesecer' => 'nullable|boolean',
            'expectations' => 'required|string|max:255',
            'interest' => 'required|integer|min:0|max:5',
            'interestedField' => 'required|string|max:255',
            'jobPreference' => 'nullable|string|max:255',
            'whatsapp_number' => 'required|string|max:255',
            'cv' => 'nullable|file|mimes:pdf|max:10240',
        ]);

        $data = $request->all();

        if ($request->hasFile('cv')) {
            $cvPath = $request->file('cv')->store('cvs');
            $data['cv'] = $cvPath;
        }

//        $updatedDetails = auth()->user()->detail;

        auth()->user()->detail->update($data);
        return redirect()->back()->with('status', 'Details updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
