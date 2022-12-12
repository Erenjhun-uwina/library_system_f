<?php

namespace App\Http\Controllers;

use App\Actions\Get_Model;
use App\Services\ModelService;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class RegisterController extends Controller
{
    private $rules = [
        'fn' => 'required',
        'ln' => 'required',
        'pass' => 'required',
        'confirm_pass' => 'required'
    ];
    private  $admin_rules = ['uname' => 'required'];
    private $borrower_rules = [
        'contact_no' => 'required',
        'email' => "required",
        "id_no"=>'regex:/([0-9]{2})-([0-9]{4,5})/u',
    ];


    public function register_page(Request $req)
    {

        $acc_type = $req->acc_type ?: 'borrower';
        return view('registration', compact('acc_type'));
    }

    // posts
    public function register(Request $req, ModelService $modelService)
    {
        $acc_type = $req->acc_type;

        $rules = array_merge([$this->rules, ($acc_type == 'admin') ? $this->admin_rules : $this->borrower_rules]);

        $validator = Validator::make($req->all(), $this->rules);

        if ($validator->fails()) {
            return redirect('register/' . $acc_type)->withErrors($validator);
        }

        $inputs = $validator->valid();


        $model = $modelService->get_acc_model($acc_type);
        $acc = $modelService->exist($model, 'uname', $inputs['uname']);

        if ($acc) return redirect('register/' . $acc_type)->withErrors('this user is already regitered');
        return back();
    }

    private function check_admin()
    {
    }
}
