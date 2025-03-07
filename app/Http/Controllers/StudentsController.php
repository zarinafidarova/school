<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Students;
use Illuminate\Http\Request;

class StudentsController extends Controller
{
    public function index()
    {
        $students = Students::all();
        return view('student.index', compact('students'));
    }
}
