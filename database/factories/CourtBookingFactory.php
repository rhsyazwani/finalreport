<?php

namespace Database\Factories;

use App\Models\CourtBooking;
use Illuminate\Database\Eloquent\Factories\Factory;

class CourtBookingFactory extends Factory
{
    protected $model = CourtBooking::class;

    public function definition()
    {
        return [
            'member_id' => $this->faker->numberBetween(1, 100),
            'court_no' => $this->faker->numberBetween(1, 10),
            'booking_date' => $this->faker->date(),
            'booking_time_start' => $this->faker->time(),
            'booking_time_end' => $this->faker->time(),
            'total_hours' => $this->faker->randomFloat(2, 0.5, 5),
            'status' => $this->faker->randomElement(['confirmed', 'pending', 'cancelled']),
        ];
    }
}
