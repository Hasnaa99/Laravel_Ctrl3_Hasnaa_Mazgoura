<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Livre>
 */
class LivreFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'titre' => fake()->sentence(), 
            'datePublication' => fake()->date(), 
            'prix' => fake()->randomFloat(2, 5, 100),
            'auteur_id' => fake()->numberBetween(1,10)
        ];
    }
}
