<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{   

    public function register_page(Request $req)
    {   

        $acc_type = $req->acc_type?:'borrower';
        return view('registration',compact('acc_type'));
    }

    // posts
    public function register(Request $req)
    {      
        $acc_type = $req->acc_type();

        $admin_rules = [''];
        $validator = Validator::make($req->all(),);
        return back();
    }
}
