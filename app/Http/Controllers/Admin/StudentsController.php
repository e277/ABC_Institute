<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentsController extends Controller
{
    public function students()
    {
        $students = Student::paginate(5);
        return view('admin.students.index', compact('students'));
    }

    
}
