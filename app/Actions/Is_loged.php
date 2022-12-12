<?php


namespace App\Actions;
use Illuminate\Http\Request;

class Is_loged{
    
    public function handle(Request $req):bool
    {   
        return session('id') and (session('acc_type')==$req->acc_type);
    }
}