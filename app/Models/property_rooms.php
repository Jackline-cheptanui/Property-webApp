<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class property_rooms extends Model
{
    use HasFactory;
    protected $fillable = [
        'room_type_id',
        'room_name',
        'room_description',
        //'room_price'
    ];
    public function getRoomfiles() {
        return  $this->hasMany(property_images::class,'property_room_id', 'id');
     }
}
