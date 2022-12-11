<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(Request $request)
    {   
        $acc_type = session("acc_type");
        return view('home',compact('acc_type'));
    }
}
