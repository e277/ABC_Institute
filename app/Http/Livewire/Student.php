<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;

class Student extends Component
{
    use WithPagination;

    public $studentSearch;

    public function render()
    {
        $students = Student::where('student_id', auth()->user()->id)
                    ->when($this->studentSearch, function($query) {
                        return $query->name('student_nm', 'like', '%'.$this->studentSearch.'%');
                            // ->orWhere()
                    })
                    ->latest('id');
        $students = $students->paginate(5);
        return view('livewire.student', [
            'students' => $students
        ]);
    }
}
