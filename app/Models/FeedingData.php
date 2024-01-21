<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FeedingData extends Model
{
    use HasFactory;

    protected $fillable = [
        'device_no',
        'tank_no',
        'feeding_mode',
        'temperature'
    ];
}
