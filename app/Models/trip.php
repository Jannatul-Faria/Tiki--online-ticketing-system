<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trip extends Model {
    use HasFactory;

    protected $fillable = [
        'to',
        'from',
        'Journey_date',
        'seat_no',
    ];

    protected $casts = [
        'seat_no' => 'array',
    ];
}
