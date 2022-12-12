<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class BorrowerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {


        return [
            'fn' => fake()->firstName(),
            'ln' => fake()->lastName(),
            'uname' => fake()->userName(),
            'pass' => 'pass',
            'id_no'=>fake()->numerify('22-####'),
            'email'=>fake()->email(),
            'contact_no'=>fake()->numerify('09#########')
        ];
    }
}
