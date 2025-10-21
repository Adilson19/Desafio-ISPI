<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Models\Car_owners;
class Car extends Model
{
    use HasFactory;
    protected $fillable = [
        'color',
        'mark',
        'model',
        'year',
        'price',
        'mileage',
        'engine'
    ];
    public function car(): BelongsTo
    {
        return $this->belongsTo(Car_owners::class, 'car_id');
    }
}
