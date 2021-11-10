<?php

namespace Database\Seeders;

use App\Models\Course;
use App\Models\Teacher;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Course::create([
            'course_nm' => 'Mathrmatics',
            'teacher_id' => Teacher::all()->random()->id,
            'teacher_nm' => 'Jane Doe'
        ]);
        
        Course::create([
            'course_nm' => 'Information Technolgy',
            'teacher_id' => Teacher::all()->random()->id,
            'teacher_nm' => 'Dabz James'
        ]);

        Course::create([
            'course_nm' => 'English',
            'teacher_id' => Teacher::all()->random()->id,
            'teacher_nm' => 'Polar Bear'
        ]);
    }
}
