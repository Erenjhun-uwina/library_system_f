<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use App\Services\TransactionService;
use DateTime;
use Error;
use Exception;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function transaction(Request $req)
    {
        $transaction = Transaction::find($req->transaction_id);

        return view('transaction', compact('transaction'));
    }

    public function resolve(Request $req, TransactionService $transactionService)
    {
        $action = $req->action;

     
        $this->$action($req, $transactionService);

        return back()->with('msg', "$action success!!");
    }

    public function borrow(Request $req, TransactionService $transactionService)
    {
        $book_id = $req->book_id;
        $borrower_id = session('id');

        $response = $transactionService->check($req);

        if (!$response['valid']) return redirect('book_preview/' . $book_id)->withErrors($response['err']);

        Transaction::create([
            'borrower_id' => $borrower_id,
            'book_id' => $book_id,
            'status' => 'pending',
            'due_date' => 'null',
            'date_requested' => now()
        ]);
        return redirect('book_preview/' . $book_id)->with('msg', 'success');
    }

    public function cancel(Request $req, TransactionService $transactionService)
    {
        $transactionService->update_status($req, 'cancelled');
    }

    private function reject(Request $req, TransactionService $transactionService)
    {
        $transactionService->update_status($req, 'rejected', function ($transaction) {
            $transaction->date_rejected = now();
        });
    }

    private function approve(Request $req, TransactionService $transactionService)
    {   
        $transactionService->update_status($req, 'approved', function ($transaction) {
            $transaction->date_borrowed = now();
            $transaction->due_date = date_add(new DateTime(), date_interval_create_from_date_string('7 days'));
        });
    }

    public function return(Request $req, TransactionService $transactionService)
    {
        $transactionService->update_status($req, 'returned', function ($transaction) {
            $transaction->date_returned = now();
        });
    }
}
