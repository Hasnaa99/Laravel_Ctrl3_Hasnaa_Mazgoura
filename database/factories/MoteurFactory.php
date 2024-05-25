<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Moteur>
 */
class MoteurFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'puissance' => fake()->numberBetween(100, 400),
            'model' => fake()->word(), 
            'voiture_id' => fake()->numberBetween(1, 10),
        ];
    }
}
