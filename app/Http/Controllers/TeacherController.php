<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function index()
    {
        $teachers = Teacher::paginate(5); // Fetch all teachers
        return view('teachers.index', compact('teachers')); // Pass teachers to the view
    }
}

