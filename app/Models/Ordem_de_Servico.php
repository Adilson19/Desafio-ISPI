<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ordem_de_Servico extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
        'id_ordem_servico',
        'valor_total',
        'data_inicio',
        'observacao',
        'data_encerramento',
        'status_os',
    ];
}
