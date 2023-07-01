<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Log;

class AuthController extends Controller
{
    public function index()
    {
        // add log
        Log::create([
            'timestamp'     => now(),
            'ip'            => request()->ip(),
            'user_agent'    => request()->userAgent(),
        ]);

        // redirect to dashboard
        return redirect()->route('dashboard.index');
    }
}
