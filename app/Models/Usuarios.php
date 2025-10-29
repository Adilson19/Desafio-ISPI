<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuarios extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'id',
        'adress',
        'numberFone',
        'email',
        'date',
        'password'
    ];

    protected $dates = ['deleted_at'];
}
