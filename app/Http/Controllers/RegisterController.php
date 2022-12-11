<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{   
    private $rules = [
        'pass'=>'required',
        'confirm_pass'=>'required'
    ];

    public function register_page(Request $req)
    {   

        $acc_type = $req->acc_type?:'borrower';
        return view('registration',compact('acc_type'));
    }

    // posts
    public function register(Request $req)
    {      
        $acc_type = $req->acc_type();

        $admin_rules = ['uname'=>'required'];
        $validator = Validator::make($req->all(),);
        return back();
    }
}
