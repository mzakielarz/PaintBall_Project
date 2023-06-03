<?php

namespace App\Http\Controllers;

use App\Models\Player;
use Illuminate\Http\Request;

class PlayerController extends Controller
{
    /**
     * Store a newly created player in the database.
     *
     * @param  Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Walidacja danych wejściowych
        $validatedData = $request->validate([
            'firstname' => 'required|max:64',
            'lastname' => 'required|max:64',
            'team' => 'required|max:32',
            'user_id' => 'required|exists:users,id',
            'weapon_id' => 'required|exists:weapons,id',
        ]);

        // Utworzenie nowego gracza na podstawie przesłanych danych
        $player = new Player();
        $player->firstname = $validatedData['firstname'];
        $player->lastname = $validatedData['lastname'];
        $player->team = $validatedData['team'];
        $player->user_id = $validatedData['user_id'];
        $player->weapon_id = $validatedData['weapon_id'];
        $player->save();

        // Przekierowanie użytkownika lub zwrócenie odpowiedzi w zależności od potrzeb
        return redirect()->back()->with('success', 'Player has been added successfully.');
    }
}
