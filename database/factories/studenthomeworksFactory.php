<?php

namespace Database\Factories;

use App\Models\homework;
use App\Models\students;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\studenthomework>
 */
class studenthomeworksFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'homework_id' => homework::factory(),
            'student_id' => students::factory(),
        ];
    }
}
