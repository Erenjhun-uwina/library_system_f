<?php

namespace App\Http\Controllers;

use App\Actions\Is_loged;
use App\Models\Admin;
use App\Models\Borrower;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function login_page(Request $req,Is_loged $is_loged)
    {
        $acc_type = trim($req->acc_type) ?: 'borrower';

        # if the user is already logged in redirect to home
        if($is_loged->handle($req))return redirect("home");

        return view('login', compact('acc_type'));
    }

    // post requests
    public function logout()
    {   
        $acc_type = session('acc_type');
        session()->forget(['id', 'acc_type']);
        return redirect("login/$acc_type");
    }

    public function login(Request $req)
    {

        $acc_type = $req->acc_type;
        
        $validator = Validator::make($req->all(), [
            'uname' => 'required',
            'pass' => 'required'
        ], [
            'uname' => 'username is required',
            'pass' => 'password cannot be blank'
        ]);

        if ($validator->fails()) {
            return redirect("login/$acc_type")->withErrors($validator)->withInput();
        }

        $model = $acc_type == 'admin' ? Admin::class : Borrower::class;
        $validated = $validator->valid();

        $acc = self::auth($validated, $model);
        if (!$acc) return redirect("login/$acc_type")->withErrors("invalid credentials");

        session([
            'id' => $acc->id,
            'acc_type' => $acc_type
        ]);

        return redirect('home');
    }

    public static function auth($inputs, $model)
    {
        $uname = $inputs['uname'];
        $pass = $inputs['pass'];

        $acc = $model::firstWhere([
            ['uname', '=', $uname],
            ['pass', '=', $pass]
        ]);

        return ($acc);
    }
}
