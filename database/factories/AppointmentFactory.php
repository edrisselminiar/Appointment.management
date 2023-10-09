<?php

namespace Database\Factories;
use App\Models\Appointment;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Appointment>
 */
class AppointmentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name,
            'prenom' => $this->faker->firstName,
            'téléphone' => $this->faker->phoneNumber,
            'cin' => 'HH' . $this->faker->randomNumber(4),

            // 'cin' => $this->faker->numerify('##########'),
            'email' => $this->faker->email,
            'appointment_day' => $this->faker->date,
            // 'appointment_day' => $this->faker->dateTimeBetween('-1 year', '+1 year')->format('Y-m-d'),
            // 'appointment_day' => $this->faker->date('Y-m-d', 'now'),
            // 'appointment_day' => '2023-06-06',

            // 'appointment_hour' => $this->faker->time,
            'appointment_hour' => $this->faker->time('H:i'),

        ];
    }
}


