<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;
   // protected $table = 'cities'; // dilakukan jika nama model dan tabel berbeda

    protected $fillable = ['name', 'photo']; //fillable adalah kolom tabel yang boleh diisi
    protected $guarded = ['id']; // guarded adalah kolom tabel yang tidak boleh diisi

    public function houtel()
    {
        return $this->hasMany(Houtel::class,'cities_id', 'id');
    }
}
