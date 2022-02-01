<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

     /**
     * Get the reservation that owns the Car.
     */
    public function reservation()
    {
        return $this->belongsTo(Reservation::class);
    }
}
