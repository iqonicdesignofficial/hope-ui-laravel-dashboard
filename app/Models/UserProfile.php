<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserProfile extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'company_name',
        'street_addr_1',
        'street_addr_2',
        'phone_number',
        'alt_phone_number',
        'country',
        'state',
        'city',
        'pin_code',
        'facebook_url',
        'twitter_url',
        'linkedin_url',
        'instagram_url',
    ];
}
