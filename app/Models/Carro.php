<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carro extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
        'id_carro',
        'modelo',
        'placa',
        'fabricacao',
        'ano',
    ];
}
