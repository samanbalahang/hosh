<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sliders extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'price',
        'adress',
        'propic',
    ];
   
}
