<?php

namespace Database\Seeders;

use App\Models\Apartment;
use App\Models\House;
use App\Models\Owner;
use App\Models\Person;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        House::factory(50)->create();
        Person::factory(100)->create();
        Apartment::factory(100)->create();
        Owner::factory(30)->create();
    }
}
