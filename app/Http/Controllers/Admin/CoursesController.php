<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Course;
use Illuminate\Http\Request;

class CoursesController extends Controller
{
    public function courses()
    {
        $courses = Course::paginate(5);
        return view('admin.courses.index', compact('courses'));
    }

    public function create_course()
    {
        return view('admin.courses.create');
    }

    public function add_course(Request $request)
    {
        $request->validate([

        ]);
        

    }

    public function edit_course(Course $course)
    {
        return view('admin');
    }
}
