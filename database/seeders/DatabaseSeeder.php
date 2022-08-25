<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\homework;
use App\Models\studenthomeworks;
use App\Models\students;
use App\Models\teacher;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $teacher = teacher::factory()->create(
            ['name' => 'Hadi Hoteit']
        );

        $studentOne = students::factory()->create([
            'class' => $teacher->classroomName,
            'password' => '1234567'
        ]);

        $studentTwo = students::factory()->create([
            'class' => $teacher->classroomName,
            'password' => '1234567'
        ]);

        $homeworkOne = homework::factory()->create([
            'class' => $teacher->classroomName,
        ]);

        $homeworkTwo = homework::factory()->create([
            'class' => $teacher->classroomName,
        ]);

        $homeworkThree = homework::factory()->create([
            'class' => $teacher->classroomName,
        ]);

        $homeworkFour = homework::factory()->create([
            'class' => $teacher->classroomName,
        ]);

        studenthomeworks::factory()->create([
            'homework_id' => $homeworkOne->id,
            'student_id' => $studentOne->id,
        ]);

        studenthomeworks::factory()->create([
            'homework_id' => $homeworkTwo->id,
            'student_id' => $studentOne->id,
        ]);

        studenthomeworks::factory()->create([
            'homework_id' => $homeworkThree->id,
            'student_id' => $studentOne->id,
        ]);

        studenthomeworks::factory()->create([
            'homework_id' => $homeworkFour->id,
            'student_id' => $studentOne->id,
        ]);

        studenthomeworks::factory()->create([
            'homework_id' => $homeworkOne->id,
            'student_id' => $studentTwo->id,
        ]);

        studenthomeworks::factory()->create([
            'homework_id' => $homeworkTwo->id,
            'student_id' => $studentTwo->id,
        ]);

        studenthomeworks::factory()->create([
            'homework_id' => $homeworkThree->id,
            'student_id' => $studentTwo->id,
        ]);

        studenthomeworks::factory()->create([
            'homework_id' => $homeworkFour->id,
            'student_id' => $studentTwo->id,
        ]);

        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
