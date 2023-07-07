<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Data;
use App\Models\Setting;
use Yajra\Datatables\Datatables;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        // pengaturan
        $mode       = Setting::where('key', 'mode')->first()->value;
        $relay_1    = Setting::where('key', 'relay_1')->first()->value;
        $relay_2    = Setting::where('key', 'relay_2')->first()->value;
        $ldr_min    = Setting::where('key', 'ldr_min')->first()->value;

        // card header
        $average   = Data::whereDate('timestamp', today())->avg('ldr_value');
        $max       = Data::whereDate('timestamp', today())->max('ldr_value');
        $min       = Data::whereDate('timestamp', today())->min('ldr_value');

        $ip_address = $request->ip();

        return view('layouts.template',[
            'mode'      => $mode,
            'relay_1'   => $relay_1,
            'relay_2'   => $relay_2,
            'ldr_min'   => $ldr_min,
            'ip_address'=> $ip_address,
            'average'   => $average,
            'max'       => $max,
            'min'       => $min,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // if (request()->ajax()) {
            $query = Data::orderBy('timestamp', 'desc')->get();

            return Datatables::of($query)
                ->addIndexColumn()
                ->addColumn('tanggal', function ($data) {
                    return date('d/m/Y', strtotime($data->timestamp));
                })
                ->addColumn('waktu', function ($data) {
                    return date('H:i:s', strtotime($data->timestamp));
                })
                ->addColumn('intensitas', function ($data) {
                    return number_format($data->ldr_value);
                })
                ->addColumn('mode', function ($data) {
                    if ($data->mode == 1) {
                        return '<button type="button" class="btn btn-sm btn-primary waves-effect btn-label waves-light"><i class="bx bx-toggle-left label-icon"></i> Otomatis</button>';
                    } else {
                        return '<button type="button" class="btn btn-sm btn-success waves-effect btn-label waves-light"><i class="bx bx-toggle-right label-icon"></i> Manual</button>';
                    }
                })
                ->addColumn('relay_1', function ($data) {
                    if ($data->relay_1 == 1) {
                        return '<button type="button" class="btn btn-sm btn-warning waves-effect btn-label waves-light"><i class="bx bx-check label-icon " disabled></i> On</button>';
                    } else {
                        return '<button type="button" class="btn btn-sm btn-danger waves-effect btn-label waves-light"><i class="bx bx-x label-icon " disabled></i> Off</button>';
                    }
                })
                ->addColumn('relay_2', function ($data) {
                    if ($data->relay_2 == 1) {
                        return '<button type="button" class="btn btn-sm btn-warning waves-effect btn-label waves-light"><i class="bx bx-check label-icon "></i> On</button>';
                    } else {
                        return '<button type="button" class="btn btn-sm btn-danger waves-effect btn-label waves-light"><i class="bx bx-x label-icon "></i> Off</button>';
                    }
                })
                ->rawColumns(['mode', 'relay_1', 'relay_2'])
                ->make(true);
        // }
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
