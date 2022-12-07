<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class property_images extends Model
{
    use HasFactory;
    protected $fillable = [
        'property_id',
        'property_room_id',
        'property_image',
    ];
}
