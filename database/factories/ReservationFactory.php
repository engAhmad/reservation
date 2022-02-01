<?php

namespace Database\Factories;

use App\Models\Reservation;

use Illuminate\Database\Eloquent\Factories\Factory;

class ReservationFactory extends Factory
{

    protected $model = Reservation::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => $this->faker->randomDigit(),
            'car_id' => $this->faker->randomDigit(),
            'mini_house_id' => $this->faker->randomDigit(),
            'package_id' => $this->faker->randomDigit(),
        ];
    }
}