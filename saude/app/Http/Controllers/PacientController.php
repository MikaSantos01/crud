<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Models\Pacient;

use Illuminate\Http\Request;

class PacientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pacients = Pacient::all();
        return view('pacients.index', compact('pacients'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $doctors = Doctor::all();
        return view('pacients.create',compact('doctors')); 
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $pacients = Pacient::create($request->only(['name', 'birth_date','email','address','doctor_id']));

        return redirect()->route('pacients.show', $pacients);
    }

    /**
     * Display the specified resource.
     */
    public function show(Pacient $pacient)
    {
         return view('pacients.show', compact('pacient'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $pacient = Pacient::findOrFail($id);
        $doctors = Doctor::all(); // pega todos os cursos
        return view('pacients.edit', compact('pacient', 'doctors'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,Pacient $pacient)
    {
        // Pega todos os dados do formulário
        $data = $request->all();

        // Atualiza o jogo
        $pacient->update($data);

        return redirect()->route('pacients.show', $pacient);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $pacients = Pacient::findOrFail($id);
        $pacients->delete();
        return redirect()->route('pacients.index');
    }
}
