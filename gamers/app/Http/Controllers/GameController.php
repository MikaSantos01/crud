<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Game;

class GameController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $games = Game::all();
        return view('games.index', compact('games')); 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('games.create');    
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $jogo = Game::create($request->only(['name', 'release_date']));

        return redirect()->route('games.show', $jogo);

    }

    /**
     * Display the specified resource.
     */
    public function show(Game $game)
    {
        return view('games.show', compact('game'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $game = Game::findOrFail($id);
         return view('games.edit', compact('game'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,Game $game)
    {
    
        // Pega todos os dados do formulário
        $data = $request->all();

        // Atualiza o jogo
        $game->update($data);

        return redirect()->route('games.show', $game);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $game = Game::findOrFail($id);
        $game->delete();
        return redirect()->route('games.index');
    }
}
