<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservas extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'date',
        'name'
    ];

    protected $dates = ['deleted_at'];
}
