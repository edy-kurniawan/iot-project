<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Data;
use App\Models\Setting;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mode       = Setting::where('key', 'mode')->first()->value;
        $relay_1    = Setting::where('key', 'relay_1')->first()->value;
        $relay_2    = Setting::where('key', 'relay_2')->first()->value;
        $ldr_min    = Setting::where('key', 'ldr_min')->first()->value;

        return view('websocket',[
            'mode'      => $mode,
            'relay_1'   => $relay_1,
            'relay_2'   => $relay_2,
            'ldr_min'   => $ldr_min,
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
