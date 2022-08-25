<?php

namespace Database\Factories;

use App\Models\teacher;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\homework>
 */
class HomeworkFactory extends Factory
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
            'title' => $this->faker->sentence(nbWords: 3),
            'description' => $this->faker->paragraph(4),
            'deadline' => $this->faker->dateTimeBetween( "now", "30 days"),
        ];
    }
}
