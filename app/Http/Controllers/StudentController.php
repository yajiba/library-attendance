<?php

namespace App\Http\Controllers;
use Inertia\Inertia;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function list () {
        $students = Student::with('department')->paginate(10);
        return Inertia::render('Student/List',[
            'students' =>$students,
        ]);
    }
}
