<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use App\Models\Course;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function student_apply()
    {
        // dd(Course::query()->get());
        return view('student.index', [
            'courses' => Course::query()->get()
        ]);
    }
}
