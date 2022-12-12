<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Borrower;
use App\Models\Transaction;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(Request $req)
    {   
        $acc_type = session("acc_type");
        if($acc_type == 'admin')return redirect('/dashboard');
        return view('home',compact('acc_type'));
    }

    public function dashboard(Request $req)
    {   
        $transactions = Transaction::with(['book','borrower'])->simplePaginate(20,['borrower_id','book_id'],'records');
        $borrowers = Borrower::Paginate(20,['*'],'borrowers');
        $books = Book::simplePaginate(20);
        return view('admin_dashboard',compact('transactions','borrowers'));
    }
}
