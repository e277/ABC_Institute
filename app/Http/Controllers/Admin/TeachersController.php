<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Teacher;
use Illuminate\Http\Request;

class TeachersController extends Controller
{
    public function teachers()
    {
        $teachers = Teacher::paginate(5);
        return view('admin.students.index', compact('teachers'));
    }
}
