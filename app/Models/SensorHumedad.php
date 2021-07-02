<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SensorHumedad extends Model
{
    use HasFactory;
    protected $fillable = [
        'val',
        'raspberry_id',
    ];
}
