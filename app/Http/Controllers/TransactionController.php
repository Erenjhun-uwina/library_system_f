<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use App\Services\TransactionService;
use DateTime;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function borrow(Request $req,TransactionService $transactionService)
    {
        $book_id = $req->book_id;
        $borrwer_id = session('id');

        $response = $transactionService->check($req);
     
        if(!$response['valid'])return redirect('book_preview/' . $book_id)->withErrors($response['err']);
        
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
