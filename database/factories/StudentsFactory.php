<?php

namespace Database\Factories;

use App\Models\teacher;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\students>
 */
class StudentsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'class' => teacher::factory(),
            'firstName' => $this->faker->firstName(),
            'lastName' => $this->faker->lastName(),
            'email' => $this->faker->safeEmail(),
            'password' => $this->faker->password(minLength: 6, maxLength: 28),
            'gender' => $this->faker->randomElement(['male', 'female']),
        ];
    }
}
