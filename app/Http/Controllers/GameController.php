<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Game;
use App\Models\Result;

class GameController extends Controller
{
    public function startGame(Request $request)
    {
        $randomNumber = rand(0, 99);
        $chances = 5;
        $playerName = $request->input('player_name'); 
    
        $game = new Game();
        $game->player_name = $playerName; 
        $game->random_number = $randomNumber;
        $game->save();
    
        return view('game')->with(compact('randomNumber', 'chances', 'playerName', 'game'));
    }

    public function playGame(Request $request)
    {
        $playerName = $request->input('player_name');
        $guessedNumber = $request->input('guessed_number');
        $gameId = $request->input('game_id');
        $chances = $request->input('chances');
    
        $game = Game::find($gameId);
    
        $randomNumber = $game->random_number;
        $result = '';
    
        if ($chances > 0) {
            if ($guessedNumber == $randomNumber) {
                $result = 'Bravo!';
            } elseif ($guessedNumber < $randomNumber) {
                $result = 'Up';
            } else {
                $result = 'Down';
            }
    
            Result::create([
                'game_id' => $gameId,
                'guessed_number' => $guessedNumber,
                'result' => $result,
            ]);
    
            $chances--;
    
       
            return view('game', compact('result', 'chances', 'playerName', 'gameId', 'game'));
        } else {
           
            return view('welcome');
        }
    }
    
}
