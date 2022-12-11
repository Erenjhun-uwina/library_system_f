<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function borrower(){
        return $this->hasOne(Borrower::class,'id');
    }

    public function book(){
        return $this->hasOne(Book::class,'id');
    }

}
