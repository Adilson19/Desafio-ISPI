<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orcamento_produto extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
        'id_orcamento_produto',
        'qtd',
        'vl_unitario',
        'vl_total',
    ];
}
