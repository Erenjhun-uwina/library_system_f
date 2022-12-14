<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use App\Services\TransactionService;
use DateTime;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function transaction_page(Request $req)
    {
        return view('transaction');
    }

    public function borrow(Request $req,TransactionService $transactionService)
    {
        $book_id = $req->book_id;
        $borrower_id = session('id');

        $response = $transactionService->check($req);
     
        if(!$response['valid'])return redirect('book_preview/' . $book_id)->withErrors($response['err']);
        
        Transaction::create([
            'borrower_id'=> $borrower_id,
            'book_id'=>$book_id,
            'status'=>'pending',
            'due_date' => 'null',
            'date_requested' => now()
        ]);
        return redirect('book_preview/' . $book_id)->with('msg', 'success');
    }

    public function cancel(Request $req,TransactionService $transactionService)
    {
        $transaction = $transactionService->update_status($req,'cancelled');
    }

    public function reject(Request $req,TransactionService $transactionService)
    {
        $transaction = $transactionService->update_status($req,'rejected');
    }

    public function release(Request $req,TransactionService $transactionService)
    {
        $transaction = $transactionService->update_status($req,'released',function($transaction){
            $transaction->date_released = now();
            $transaction->due_date = date_add(new DateTime() ,date_interval_create_from_date_string('7 days'));
        });
    }

    public function return_(Request $req,TransactionService $transactionService)
    {
        $transaction = $transactionService->update_status($req,'released',function($transaction){
            $transaction->date_returned= now();
        });

        return redirect('')->with('msg','success');
    }
}
