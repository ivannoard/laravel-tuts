<?php

namespace Database\Factories;

use App\Models\Patient;
use Illuminate\Database\Eloquent\Factories\Factory;

class PatientFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Patient::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'doctor_id' => mt_rand(1, 5),
            'room_id' => mt_rand(1, 3),
            'disease' => $this->faker->randomElement(['Jantung', 'Stroke', 'Gagal Ginjal']),
            'phone_number' => $this->faker->phoneNumber(),
            'address' => $this->faker->address()
        ];
    }
}
