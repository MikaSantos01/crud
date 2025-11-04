<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Course;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students = Student::all();
        return view('students.index', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $courses = Course::all();
        return view('students.create',compact('courses'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $students = Student::create($request->only(['name', 'email','course_id']));

        return redirect()->route('students.show', $students);
    }

    /**
     * Display the specified resource.
     */
    public function show(Student $student)
    {
         return view('students.show', compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $student = Student::findOrFail($id);
        $courses = Course::all(); // pega todos os cursos
        return view('students.edit', compact('student', 'courses'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Student $student)
    {
        
         // Pega todos os dados do formulário
        $data = $request->all();

        // Atualiza o jogo
        $student->update($data);

        return redirect()->route('students.show', $student);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $students = Student::findOrFail($id);
        $students->delete();
        return redirect()->route('students.index');
    }
}
