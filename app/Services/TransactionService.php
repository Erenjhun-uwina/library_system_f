<?php


namespace App\Services;

use App\Models\Transaction;
use Closure;
use Illuminate\Http\Request;

use function PHPUnit\Framework\arrayHasKey;

class TransactionService
{

    public function check(Request $req)
    {
        $response = ['valid' => false];
        $book_id = $req->book_id;
        $borrwer_id = session('id');

        $transaction = Transaction::where('borrower_id', $borrwer_id)
        ->whereIn('status',['pending','approved']);

        

        if ($transaction->count() >= 2) {
            $response['err'] = "You can only borrow up to 2 books.";
        } else
        if ($transaction->where('book_id', $book_id)->first()) {
            $response['err'] = "You already have borrowed this book.";
        }

        if (!array_key_exists('err', $response)) $response['valid'] = true;
        return $response;
    }

    public function get(Request $req)
    {
        $book_id = $req->book_id;
        $borrower_id = session('id');

        return Transaction::firstWhere([
            ['book_id', '=', $book_id],
            ['borrower_id', '=', $borrower_id]
        ]);
    }

    public function update_status(Request $req, string $status, Closure $cb = null)
    {
        $transaction = Transaction::find($req->transaction_id);

       

        if ($cb) $cb($transaction);
        $transaction->status = $status;
        
        $transaction->save();

    }
}
