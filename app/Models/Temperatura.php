<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Temperatura extends Model
{
    use HasFactory;
    protected $fillable = [
        'temperatura',
        'raspberry_id',
    ];
}
