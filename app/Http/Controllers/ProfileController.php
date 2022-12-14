<?php

namespace App\Http\Controllers;

use App\Models\Borrower;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function profile(Request $req)
    {   
        $borrower_id = $req->borrower_id;   
        $borrower = Borrower::find($borrower_id);

        return view('user_profile',compact('borrower'));
    }
}
