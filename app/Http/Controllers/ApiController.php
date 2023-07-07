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
    public function create(Request $request)
    {
        // change mode to manual
        Setting::where('key', 'mode')->update(['value' => $request->mode]);

        return response()->json([
            'status'    => true,
            'message'   => 'Mode changed to manual',
        ], 201);
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

        // check mode in settings
        $mode = Setting::where('key', 'mode')->first()->value;

        // check ldr min value
        $ldr_min = Setting::where('key', 'ldr_min')->first()->value;

        // automatic mode
        if($mode == '1') {
            // check ldr value
            if($request->ldr_value <= $ldr_min) {
                // turn on relay
                $relay_1 = '1';
                $relay_2 = '1';
            } else {
                // turn off relay
                $relay_1 = '0';
                $relay_2 = '0';
            }
        }else{
            // manual mode
            $relay_1 = Setting::where('key', 'relay_1')->first()->value;
            $relay_2 = Setting::where('key', 'relay_2')->first()->value;
        }

        // create data
        $data = Data::create([
            'timestamp' => now(), // current timestamp
            'ldr_value' => $request->ldr_value,
            'mode'      => $mode,
            'relay_1'   => $relay_1,
            'relay_2'   => $relay_2,
        ]);

        // return response
        return response()->json([
            'status'    => 'success',
            'relay_1'   => $relay_1,
            'relay_2'   => $relay_2,
            'message'   => 'Data created successfully',
            'data'      => $data,
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id, Request $request)
    {
        // change relay_1 value
        Setting::where('key', $request->relay)->update(['value' => $request->value]);

        // return response
        return response()->json([
            'status'    => true,
            'message'   => $request->relay.' changed to '.$request->value,
        ], 201);
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
