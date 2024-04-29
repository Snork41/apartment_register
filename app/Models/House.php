<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class House extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'address',
        'number_of_storeys',
        'number_of_apartments',
        'year_of_construction',
        'number_of_elevators'
    ];

    public function apartments(): HasMany
    {
        return $this->hasMany(Apartment::class);
    }
}
