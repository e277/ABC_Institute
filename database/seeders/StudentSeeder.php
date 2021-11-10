<?php

namespace Database\Seeders;

use App\Models\Course;
use App\Models\Student;
use App\Models\Teacher;
use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Student::create([
            'teacher_id' => Teacher::all()->random()->id,
            'course_id' => Course::all()->random()->id,
            'first_nm' => 'Keneil',
            'last_nm' => 'Sangster',
        ]);

        Student::create([
            'teacher_id' => Teacher::all()->random()->id,
            'course_id' => Course::all()->random()->id,
            'first_nm' => 'Chantelle',
            'last_nm' => 'Campbell',
        ]);

        Student::create([
            'teacher_id' => Teacher::all()->random()->id,
            'course_id' => Course::all()->random()->id,
            'first_nm' => 'Jody-Ann',
            'last_nm' => 'Brown',
        ]);
    }
}
