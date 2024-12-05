<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $fillable = [
        'address', 'address_ru', 'address_en',
        'email', 'phone', 'phone2',
        'facebook', 'instagram', 'telegram', 'youtube',
    ];
}
