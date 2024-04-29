<?php

namespace Database\Factories;

use App\Models\Apartment;
use App\Models\Person;
use Illuminate\Database\Eloquent\Factories\Factory;

class OwnerFactory extends Factory
{
    public function definition(): array
    {
        return [
            'apartment_id' => Apartment::inRandomOrder()->first()->id ?? Apartment::factory(),
            'person_id' => Person::inRandomOrder()->first()->id ?? Person::factory(),
            'number_document' => fake()->numberBetween(1, 100),
            'share' => fake()->randomNumber(3, true),
        ];
    }
}
