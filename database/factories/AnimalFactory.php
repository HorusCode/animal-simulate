<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Animal>
 */
class AnimalFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'type' => fake()->name,
            'max_size' => fake()->numberBetween(5,25),
            'max_age' => fake()->numberBetween(1,15),
            'url' => fake()->imageUrl,
            'growth_factor' => fake()->randomFloat(1,0,3)
        ];
    }
}
