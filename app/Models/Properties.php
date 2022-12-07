<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Properties extends Model
{
    use HasFactory;
    protected $table = 'properties';
    protected $fillable =[
        'property_description',
        'property_name',
        'property_location',
    ];
    public function getPropertyDocuments() {
        return  $this->hasMany(PrImage::class,'property_id', 'id');
       }
       public function getRoomfiles() {
          return  $this->hasMany(PropertyRooms::class,'property_room_id', 'id');
       }
}
