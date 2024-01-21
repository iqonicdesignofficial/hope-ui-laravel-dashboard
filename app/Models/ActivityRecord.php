<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ActivityRecord extends Model
{
    use HasFactory;

    protected $fillable = [
        'ativity',
        'device_no',
        'tank_no'
    ];
}
