<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class RegisterController extends Controller
{   

    public function register_page(Request $req)
    {   
        $acc_type = $req->acc_type?:'borrower';
        return view('registration',compact('acc_type'));
    }

    // posts
    public function store(Request $req)
    {
        // todo
        Log::info($req);
        return back();
    }
}
