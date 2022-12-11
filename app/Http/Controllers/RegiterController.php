<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class RegiterController extends Controller
{
    public function store(Request $req)
    {
        // todo
        Log::info($req);
        return back();
    }
}
