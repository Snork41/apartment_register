<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Factory as FakerFactory;

class PersonFactory extends Factory
{
    public function definition(): array
    {
        $faker = FakerFactory::create('ru_RU');

        return [
            'last_name' => $faker->lastName(),
            'first_name' => $faker->firstName(),
            'middle_name' => 'Отчество',
            'date_of_birth' =>$faker->date(),
            'number_of_pasport' => $faker->unique()->numerify('####-######')
        ];
    }
}
