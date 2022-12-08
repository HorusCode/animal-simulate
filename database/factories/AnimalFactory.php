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
        $age = fake()->numberBetween(5,25);
        $size = fake()->numberBetween(1,50);
        return [
            'type' => fake()->name,
            'max_size' => $size,
            'max_age' => $age,
            'url' => fake()->imageUrl,
            'growth_factor' => $size / $age
        ];
    }
}
