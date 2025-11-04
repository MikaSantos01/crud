<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;


class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $courses = Course::all();
        return view('courses.index', compact('courses'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
         return view('courses.create'); 
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $courses = Course::create($request->only(['name', 'description']));

        return redirect()->route('courses.show', $courses);
    }

    /**
     * Display the specified resource.
     */
    public function show(Course $course)
    {

        return view('courses.show', compact('course'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $courses = Course::findOrFail($id);
        return view('courses.edit', compact('courses'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Course $course)
    {

         // Pega todos os dados do formulário
        $data = $request->all();

        // Atualiza o jogo
        $course->update($data);

        return redirect()->route('courses.show', $course);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $courses = Course::findOrFail($id);
        $courses->delete();
        return redirect()->route('courses.index');
    }
}
