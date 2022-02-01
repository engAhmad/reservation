<?php

namespace App\Http\Controllers;

use App\Models\Reservation;

class CalculateController extends Controller
{
      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function calculate($id)
    {
        $reservation = Reservation::find($id);
        $number_of_days = $reservation->package->number_of_days;
        $car_cost = $reservation->car->price_per_day;
        $mini_house_cost = $reservation->mini_house->price_per_day;
        $total = $car_cost*$number_of_days + $mini_house_cost*$number_of_days;
        return response()->json(["data" => $total , "code" => "200"], 200);
    }
}
