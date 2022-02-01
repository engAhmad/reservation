<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    use HasFactory;

    /**
     * Get the reservation that owns the Package.
     */
    public function reservation()
    {
        return $this->hasMany(Reservation::class);
    }
}
