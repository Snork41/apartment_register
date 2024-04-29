<?php

namespace Database\Factories;

use App\Models\House;
use Illuminate\Database\Eloquent\Factories\Factory;

class ApartmentFactory extends Factory
{
    public function definition(): array
    {
        return [
            'house_id' => House::inRandomOrder()->first()->id ?? House::factory(),
            'number' => fake()->numberBetween(1, 1000),
            'floor' => fake()->numberBetween(1, 16),
            'square' => fake()->randomFloat(1, 0, 999.9),
            'number_of_rooms' => fake()->numberBetween(1, 6)
        ];
    }
}
