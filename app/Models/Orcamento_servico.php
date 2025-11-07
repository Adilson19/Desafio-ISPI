<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orcamento_servico extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
        'id_orcamento_servico',
        'qtd',
        'vl_unitario',
        'vl_total'
    ];
}
