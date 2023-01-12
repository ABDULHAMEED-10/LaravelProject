<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    protected $fillable = [
        'email',
        'condition',
        'model',
        'fuel',
        'gear',
        'speed',
        'price',
    ];
}
