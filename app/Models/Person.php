<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Person extends Model
{
    use HasFactory;

    protected $table = 'persons';

    public $timestamps = false;
    
    protected $fillable = [
        'last_name',
        'first_name',
        'middle_name',
        'date_of_birth',
        'number_of_pasport'
    ];

    protected $casts = [
        'date_of_birth' => 'date:Y-m-d',
    ];

    public function owner(): BelongsTo
    {
        return $this->belongsTo(Owner::class);
    }
}
