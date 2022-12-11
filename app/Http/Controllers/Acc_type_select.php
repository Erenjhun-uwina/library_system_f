<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Acc_type_select extends Controller
{
    public function index(Request $req)
    {
        return view('account_type');
    }
}
