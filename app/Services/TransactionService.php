<?php


namespace App\Services;

use App\Models\Transaction;
use Illuminate\Http\Request;

use function PHPUnit\Framework\arrayHasKey;

class TransactionService
{

    public function check(Request $req)
    {
        $response = ['valid' => false];
        $book_id = $req->book_id;
        $borrwer_id = session('id');

        $transaction = Transaction::where([
            ['borrower_id', '=', $borrwer_id],
        ]);

        if ($transaction->count() >= 2) {
            $response['err'] = "You can only borrow up to 2 books.";
        } else
        if ($transaction->where('book_id', $book_id)->first()) {
            $response['err'] = "You already have borrowed this book.";
        }

        if(!array_key_exists('err',$response))$response['valid'] = true;
        return $response;
    }
}
