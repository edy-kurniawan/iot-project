<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Data;
use App\Models\Setting;

class ApiController extends Controller
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
        // required fields
        $request->validate([
            'ldr_value' => 'required|numeric',
        ]);

        // create data
        $data = Data::create([
            'timestamp' => now(), // current timestamp
            'ldr_value' => $request->ldr_value,
        ]);

        // check mode in settings
        $mode = Setting::where('key', 'mode')->first()->value;

        // return response
        return response()->json([
            'status'    => 'success',
            'message'   => 'Data created successfully',
            'data'      => $data,
            'mode'      => $mode,
        ], 201);
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