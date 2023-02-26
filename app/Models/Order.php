<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = ['houtel_id', 'room_id', 'check_in', 'check_out', 'bank_id', 'name', 'phone', 'email'];

    public function houtel()
    {
        return $this->belongsTo(Houtel::class, 'houtel_id', 'id');
    }

    public function room()
    {
        return $this->belongsTo(Room::class, 'room_id', 'id');
    }

    public function bank()
    {
        return $this->belongsTo(Bank::class, 'bank_id', 'id');
    }
}
