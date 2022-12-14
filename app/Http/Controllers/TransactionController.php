<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use DateTime;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function borrow(Request $req)
    {
        $book_id = $req->book_id;
        $borrwer_id = session('id');

        $transaction = Transaction::firstWhere([
            ['borrower_id','=',$borrwer_id],
            ['book_id','=',$book_id]
        ]);

        if($transaction)return redirect('book_preview/' . $book_id)->withErrors('You already have borrowed this book');
        
        Transaction::create([
            'borrower_id'=> $borrwer_id,
            'book_id'=>$book_id,
            'status'=>'pending',
            'due_date' => date_add(new DateTime() ,date_interval_create_from_date_string('7 days')),
            'date_requested' => now()
        ]);
        return redirect('book_preview/' . $book_id)->with('msg', 'success');
    }
}
