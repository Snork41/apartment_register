<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Factory as FakerFactory;

class HouseFactory extends Factory
{
    public function definition(): array
    {
        $faker = FakerFactory::create('ru_RU');

        return [
            'address' => $faker->address,
            'number_of_storeys' => $faker->numberBetween(4, 10),
            'number_of_apartments' => $faker->numberBetween(20, 500),
            'year_of_construction' => $faker->numberBetween(1969, 2020),
            'number_of_elevators' => $faker->numberBetween(2, 10)
        ];
    }
}
