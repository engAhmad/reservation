<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;
  /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'user_id',
        'car_id',
        'mini_house_id',
        'package_id'
    ];
    /**
     * Get the package associated with the Reservation.
     */
    public function package()
    {
        return $this->belongsTo(Package::class);
    }

    /**
     * Get the user associated with the Reservation.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the Car associated with the Reservation.
     */
    public function car()
    {
        return $this->hasOne(Car::class, 'id', 'car_id');
    }

    /**
     * Get the MiniHouse associated with the Reservation.
     */
    public function mini_house()
    {
        return $this->hasOne(MiniHouse::class, 'id', 'mini_house_id');
    }
}
