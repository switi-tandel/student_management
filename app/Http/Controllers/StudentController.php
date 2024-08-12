<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Teacher;
use App\Mail\StudentCreated;
use Illuminate\Support\Facades\Mail;

class StudentController extends Controller
{
    // get all student
    public function index()
    {
        // Get the search input from the request
    $search = request('search');

        // Query with search functionality
        $students = Student::withTrashed()
            ->with('teacher')
            ->when($search, function ($query, $search) {
                // Search by student name or teacher name
                return $query->where(function ($query) use ($search) {
                    $query->where('student_name', 'like', "%{$search}%")
                        ->orWhereHas('teacher', function ($query) use ($search) {
                            $query->where('teacher_name', 'like', "%{$search}%");
                        });
                });
            })
            ->latest()
            ->paginate(10);
            // Check if there are no results and return a message
        if ($students->isEmpty()) {
            $message = "No students found matching your search criteria.";
        } else {
            $message = null; // or handle accordingly
        }
            return view('students.index', compact('students'));
        }

    // create student
    public function create()
    {
        $teachers = Teacher::all();
        return view('students.create', compact('teachers'));
    }


    public function store(Request $request)
    {
        $validated = $request->validate([
            'student_name' => 'required|string|max:255',
            'email' => 'required|email|unique:students,email',
            'class_teacher_id' => 'required|exists:teachers,id',
            'class' => 'required|string|max:255',
            'admission_date' => 'required|date',
            'yearly_fees' => 'required|numeric|min:0',
        ]);

        $student=Student::create($validated);
        // Send email
        Mail::to($student->email)->send(new StudentCreated($student));
        return redirect()->route('students.index')->with('success', 'Student created successfully.');
    }

    // edit student
    public function edit($id)
    {
        $student = Student::findOrFail($id);
        $teachers = Teacher::all();
        return view('students.edit', compact('student', 'teachers'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'student_name' => 'required|string|max:255',
            'class_teacher_id' => 'required|exists:teachers,id',
            'class' => 'required|string|max:255',
            'admission_date' => 'required|date',
            'yearly_fees' => 'required|numeric|min:0',
        ]);

        $student = Student::findOrFail($id);
        $student->update($validated);
        return redirect()->route('students.index')->with('success', 'Student updated successfully.');
  }

// delete student
  public function destroy($id)
  {
      $student = Student::findOrFail($id);
      $student->delete();
      return redirect()->route('students.index')->with('success', 'Student deleted successfully.');
  }

  // restore data
  public function restore($id)
    {
        $student = Student::withTrashed()->findOrFail($id);
        $student->restore();

        return redirect()->route('students.index')->with('success', 'Student restored successfully.');
    }

    
  

}
