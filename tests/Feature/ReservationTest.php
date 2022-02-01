<?php

namespace Tests\Feature;

use App\Models\Reservation;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;

use Tests\TestCase;

class ReservationTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_reservation_create()
    {
        $this->json('POST', 'api/v1/reservation', [
        'user_id'=>1,
        'car_id'=>2,
        'mini_house_id'=>3,
        'package_id'=>1], ['Accept' => 'application/json'])->assertStatus(201);
    }
}