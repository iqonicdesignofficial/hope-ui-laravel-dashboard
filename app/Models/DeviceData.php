<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DeviceData extends Model
{
    use HasFactory;

    protected $fillable = [
        'device_code',
        'device_ip',
        'camera1_ip',
        'camera2_ip',
        'device_status'
    ];
}
