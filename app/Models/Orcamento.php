<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orcamento extends Model
{
    use HasFactory, SoftDeletes;
    
    protected $fillable = [
        'id_orcamento',
        'valor_total',
        'status'
    ];
}
