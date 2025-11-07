<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fl_parcela extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
        'id_parcela',
        'valor',
        'num_parcela',
        'data_pagamento',
        'data_processamento',
        'data_hora_criacao',
        'bandeira',
        'num_cartao',
        'forma_pagamento'
    ];
}
