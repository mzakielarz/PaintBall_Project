<?php

namespace App\Http\Controllers;

use App\Models\Player;
use App\Models\Weapon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class PlayerController extends Controller
{
    public function playerController()
    {
        $players = Player::all();
        $weapons = Weapon::all();
        return view('playersPanel', compact('players', 'weapons'));
    }

    public function addPlayer(Request $request)
    {
        $user = Auth::user();

        $validatedData = $request->validate([
            'firstName' => 'required',
            'lastName' => 'required',
            'weapon' => 'required',
            'team' => 'required',
        ]);

        $player = new Player;
        $player->firstname = $request->input('firstName');
        $player->lastname = $request->input('lastName');
        $player->user_id = $user->id;
        $player->weapon_id = $request->input('weapon');
        $player->team = $request->input('team');
        $player->save();

        return redirect()->route('playersPanel');
    }

    public function edit(string $id)
    {
        $player = Player::findOrFail($id);
        $weapons = Weapon::all();
        return view('playersEdit', compact('player', 'weapons'));
    }

    public function update(Request $request, string $id)
    {
        $player = Player::findOrFail($id);
        $player->firstname = $request->input('firstName');
        $player->lastname = $request->input('lastName');
        $player->weapon_id = $request->input('weapon');
        $player->team = $request->input('team');
        $player->save();
        return redirect()->route('playersPanel');
    }

    public function destroy(string $id)
    {
        $player = Player::findOrFail($id);
        $player->delete();
        return redirect()->route('playersPanel');
    }

    public function showPlayers()
    {
        $players = Player::all();
        $weapons = Weapon::all();
        return view('players', compact('players', 'weapons'));

    }

}
