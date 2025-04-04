<?php

namespace App\Http\Controllers;

use App\Actions\Search;
use App\Models\Book;
use App\Models\Borrower;
use App\Models\Transaction;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(Request $req,Search $search)
    {
        $acc_type = session("acc_type");
        
    
        if ($acc_type == 'admin') {
            $transactions = Transaction::with(['book', 'borrower'])->simplePaginate(20, ['borrower_id', 'book_id'], 'records');
            $borrowers = Borrower::all();
            $books = Book::all();
            $transactions = Transaction::all();

            return view('admin_home', compact('transactions', 'borrowers','books','transactions'));
        }
        
        $title = $req->title?:"";
        $borrower = Borrower::find(session('id'));

        $books = $search->handle($title)->paginate(14);
        return view('home', compact('acc_type','books','borrower'));
    }
    
    public function book_preview(Request $req)
    {       
        $book_id = $req->book_id;
        $book = Book::find($book_id);

        return view('book_preview',compact('book'));
    }

    public function book_shelf(Request $req)
    {
        $borrower = Borrower::find(session('id'));
        return view ('book_shelf',compact('borrower'));
    }

    public function search(Request $req)
    {   
        $search = $req->search?:'%x%invalid%x%';

        return redirect("search/$search");
    }
}
