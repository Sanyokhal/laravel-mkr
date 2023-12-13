<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Student_success;


//переглянути всіх студентів
//переглянути всіх студентів де курс == вказаному
//валідація введених данних
class StudentsController extends Controller
{
    protected $students;
    protected $marks;

    public function __construct()
    {
        $this->students = Student::all();
        $this->marks = Student_success::all();
    }


    public function index()
    {
        return view('students.index', ['students' => $this->students, 'course' => 'всі']);
    }

    public function show($id)
    {
        $student = Student::findOrFail($id);
        $marks = Student_success::where('student_id', $id)->get();
        return view('students.show', ['student' => $student, 'marks' => $marks]);
    }

    public function delete($id)
    {
        $mark = Student_success::findOrFail($id);
        $mark->delete();
        return redirect('/student')->with('success', 'Deleted successfully!');
    }


}

