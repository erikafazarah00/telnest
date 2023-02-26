<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;
    protected $fillable = ['houtel_id', 'type', 'price', 'description', 'photo'];

    public function houtel()
    {
        return $this->belongsTo(Houtel::class, 'houtel_id', 'id');
    }
    public function order()
    {
        return $this->hasMany(Order::class, 'room_id', 'id');
    }
}
