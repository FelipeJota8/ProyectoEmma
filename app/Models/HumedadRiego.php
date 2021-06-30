<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HumedadRiego extends Model
{
    use HasFactory;
    protected $fillable = [
        'humedad_riego',
        'raspberry_id',
    ];
}
