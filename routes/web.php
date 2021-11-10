<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\CoursesController;
use App\Http\Controllers\Admin\StudentsController;
use App\Http\Controllers\Admin\TeachersController;
use App\Http\Controllers\Teacher\TeacherController;
use App\Http\Controllers\Student\StudentController;

// use App\Http\Controllers\Student\StudentController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';


// Admin Controllers
Route::middleware(['auth', 'isAdmin'])->group(function () {

    Route::view('dashboard/admin-home', 'admin.dashboard')->name('admin-home');

    // Courses Controller
    Route::get('dashboard/admin-course', [CoursesController::class, 'courses'])->name('admin-courses.index');
    Route::get('dashboard/admin-course/create', [CoursesController::class, 'create_course'])->name('admin-courses.create');
    Route::post('dashboard/admin-course', [CoursesController::class, 'add_course'])->name('admin-courses.store');

    // Student Controller
    Route::get('dashboard/admin-student', [StudentsController::class, 'students'])->name('admin-students.index');

    // Teacher Controller
    Route::get('dashboard/admin-teacher', [TeachersController::class, 'teachers'])->name('admin-teachers.index');
});

// Student Controllers
Route::middleware(['auth', 'isStudent'])->group(function () {
    Route::get('dashboard/student', [StudentController::class, 'student_apply'])->name('students.index');
});

// Teacher Controllers
Route::middleware(['auth', 'isTeacher'])->group(function () {
    Route::get('dashboard/teacher', [TeacherController::class, 'teacher'])->name('teachers.index');
});

