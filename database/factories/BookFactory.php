<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class BookFactory extends Factory
{
    // id	title	author	date_release	category	cover	quantity

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {

        $quantity  = rand(1, 10);

        return [
            'title' => fake('en_Us')->sentence(rand(3,6)),
            'author' => fake()->name(),
            'date_release' => fake()->date('m-d-Y'),
            'category' => 'test',
            'cover' => 'book.png',
            'quantity' => $quantity,
            'avail_quantity' => $quantity
        ];
    }
}
