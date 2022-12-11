<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Borrower;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    public function login_page(Request $req)
    {   
        $acc_type = $req->acc_type;
        return view('login',compact('acc_type'));
    }

    public function login(Request $req)
    {
        $validator = Validator::make($req->all(),[
            'uname'=>'required',
            'pass'=>'required'
        ],[
            'uname'=>'username is required',
            'pass'=>'password cannot be blank'
        ]);

        if($validator->fails()){
            // dd('lmao');
            return back()->withErrors($validator)->withInput();
        }
        $acc_type = $req->acc_type;

        $model = $acc_type == 'admin'?Admin::class:Borrower::class;

        

        $acc = $model::firstWhere('uname',$req->uname);
    }



    private function auth()
    {
        
    }
}
