<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(Request $req)
    {   
        $acc_type = session("acc_type");
        return view('home',compact('acc_type'));
    }

    public function dashboard(Request $req)
    {   
        $transactions = Transaction::with(['borrowers','books']);
        return view('admin_dashboard',compact('transactions'));
    }
}
