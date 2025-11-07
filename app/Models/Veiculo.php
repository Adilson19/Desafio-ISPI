<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Veiculo extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
        'id_veiculo',
        'modelo',
        'placa',
        'ano',
        'fabricacao',
    ];
}
