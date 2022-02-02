<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use App\Http\Requests\UpdateReservationRequest as UpdateRequest;
use App\Http\Requests\StoreReservationRequest as StoreRequest;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reservation = Reservation::all();
        return response()->json(["data" => $reservation, "code" => "200"], 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRequest $request)
    {
        $values = array_map('trim', $request->except('_method'));
        $reservation = Reservation::create($values);
        return response()->json(['message' => "reservation correctly added", 'code' => "201"], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $reservation = Reservation::find($id);
        if (!$reservation) {
            return response()->json(["message" => "reservation not found!", "code" => "404"], 404);
        }
        return response()->json(["data" => $reservation, "code" => "200"], 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRequest $request, $id)
    {
        $reservation = Reservation::find($id);
        if (!$reservation) {
            return response()->json(["message" => "reservation not found!", "code" => "404"], 404);
        }

        $values = array_map('trim', $request->except('_method'));
        foreach ($values as $field => $value) {
            $reservation->$field = $value;
        }
        $reservation->save();
        return response()->json(['message' => 'The reservation has been updated', 'code' => "200"], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $reservation = Reservation::find($id);
        if (!$reservation) {
            return response()->json(["message" => "reservation not found!", "code" => "404"], 404);
        }
        $reservation->delete();
        return response()->json(["message" => "reservation deleted", "code" => "200"], 200);
    }
}
