<?php

namespace Database\Seeders;

use App\Models\Reservation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReservationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $reservation = new Reservation();
        $reservation->room_number=254;
        $reservation->room_type="Suite";
        $reservation->cost=2500.00;
        $reservation->number_of_guest=3;
        $reservation->save();

        $reservation = new Reservation();
        $reservation->room_number=311;
        $reservation->room_type="Regular";
        $reservation->cost=1100.00;
        $reservation->number_of_guest=2;
        $reservation->save();
    }
}
