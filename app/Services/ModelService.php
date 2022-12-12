<?php

namespace App\Services;

/**
 *  provides methods for model actions
 */
class ModelService
{

    public static function get_acc_model(string $acc_type)
    {
        return $acc_type == 'admin' ? Admin::class : Borrower::class;
    }

    public static function exist($model,string $field,string $val)
    {
        return $model::firstWhere($field, $val);
    }
}
