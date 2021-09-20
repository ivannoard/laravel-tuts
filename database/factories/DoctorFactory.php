<?php

namespace Database\Factories;

use App\Models\Doctor;
use Illuminate\Database\Eloquent\Factories\Factory;

class DoctorFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Doctor::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'patient_id' => mt_rand(1, 10),
            'specialist' => $this->faker->randomElement(['Bedah Jantung', 'Ginjal', 'Hati', 'Saraf']),
            'work_hour' => $this->faker->randomElement(['10.30-15.00', '13.00-17.00', '07.00-12.00']),
            'phone_number' => $this->faker->phoneNumber(),
            'address' => $this->faker->address()
        ];
    }
}
