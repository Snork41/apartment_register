<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('apartments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('house_id')->constrained('houses')->cascadeOnDelete();

            $table->unsignedInteger('number');
            $table->smallInteger('floor');
            $table->decimal('square', total: 5, places: 1)->unsigned();
            $table->unsignedInteger('number_of_rooms');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('apartments');
    }
};
