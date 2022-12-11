<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    private $allowed_acc_types = ['admin','borrower'];

    protected function is_valid_acc_type(string $acc_type)
    {
        return in_array($acc_type,$this->allowed_acc_types);
    }
}
