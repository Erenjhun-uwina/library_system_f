<?php

namespace Database\Factories;

use DateInterval;
use DateTime;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\transaction>
 */
class TransactionFactory extends Factory
{
    // borrower	book	status	date_requested	date_borrowed	date_returned

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'borrower_id'=>rand(1,15),
            'book_id'=>rand(1,50),
           'status'=>'pending',
           'due_date'=> date_add(date_create(),date_interval_create_from_date_string('8 days'))
        ];
    }
}
