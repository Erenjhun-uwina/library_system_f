<?php

namespace App\Actions;
use App\Models\Admin;
use App\Models\Borrower;

class Get_Model{
   public static function type(string $acc_type){
        return $acc_type=='admin'?Admin::class:Borrower::class;
   }
}