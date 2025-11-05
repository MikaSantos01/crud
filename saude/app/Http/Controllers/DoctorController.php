<?php

namespace App\Http\Controllers;
use App\Models\Doctor;

use Illuminate\Http\Request;

class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $doctors = Doctor::all();
        return view('doctors.index', compact('doctors'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
          return view('doctors.create'); 
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $doctors = Doctor::create($request->only(['name', 'specialty','email']));

        return redirect()->route('doctors.show', $doctors);
    }

    /**
     * Display the specified resource.
     */
    public function show(Doctor $doctor)
    {
        return view('doctors.show', compact('doctor'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $doctors = Doctor::findOrFail($id);
        return view('doctors.edit', compact('doctors'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Doctor $doctor)
    {
          // Pega todos os dados do formulário
        $data = $request->all();

        // Atualiza o jogo
        $doctor->update($data);

        return redirect()->route('doctors.show', $doctor);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $doctors = Doctor::findOrFail($id);
        $doctors->delete();
        return redirect()->route('doctors.index');
    }
}
