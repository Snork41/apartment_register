<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Apartment extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'house_id',
        'number',
        'floor',
        'square',
        'number_of_rooms'
    ];

    protected $casts = [
        'square' => 'float'
    ];

    public function house(): BelongsTo
    {
        return $this->belongsTo(House::class);
    }

    public function owners(): HasMany
    {
        return $this->hasMany(Owner::class);
    }
}
