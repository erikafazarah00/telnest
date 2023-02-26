<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Houtel extends Model
{
    use HasFactory;
    protected $fillable =['cities_id', 'address', 'about', 'facility', 'photo', 'recommendation'];

    public function city()
    {
        return $this->belongTo(City::class, 'cities_id', 'id');
    }

    public function room()
    {
        return $this->hasMany(Room::class, 'houtel_id', 'id');
    }

    public function order()
    {
        return $this->hasMany(Order::class, 'houtel_id', 'id');
    }
}
