<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('houses', function (Blueprint $table) {
            $table->id();

            $table->string('address')->unique();
            $table->unsignedInteger('number_of_storeys');
            $table->unsignedInteger('number_of_apartments');
            $table->year('year_of_construction');
            $table->unsignedInteger('number_of_elevators');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('houses');
    }
};
