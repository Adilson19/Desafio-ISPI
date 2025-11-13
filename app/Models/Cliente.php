<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
        'id_cliente',
        'telefone',
        'nome',
        'endereco',
    ];


}
