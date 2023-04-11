<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Game;

class GamesController extends Controller
{
    public function index(Request $request)
    {
        // $games = DB::select('SELECT nome FROM games'); //inserir no db de forma manual
        // $games = Game::all(); // utilizar model
        $games = Game::query()->orderBy('nome')->get(); //query builder pra consultar tabela
        // dd($games); // debug
        return view('games.index')->with('games', $games);
    }

    public function create()
    {
        return view('games.adicionar');
    }

    public function store(Request $request)
    {
        $nomeGame = $request->input('nome');
        $game = new Game();
        $game->nome = $nomeGame;
        $game->save();
        // DB::insert('INSERT INTO games (nome) VALUES (?)',[$nomeGame]); //inserir no db de forma manual
        return redirect('/games');
    }
}
