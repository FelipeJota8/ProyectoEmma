<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SensorHumedadRelativa extends Model
{
    use HasFactory;
    protected $fillable = [
        'val',
        'raspberry_id',
    ];
}
