<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Automovels extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'brand',
        'model',
        'color',
        'cylinder',
        'numberSeats',
        'yearManufacture',
        'dailyValue',
        'availability'
    ];

    protected $dates = ['deleted_at'];
}
