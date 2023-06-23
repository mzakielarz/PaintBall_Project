<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Player;
use App\Models\Weapon;
use Illuminate\Http\Request;


class WeaponController extends Controller
{
    /**
     * Show the form for creating a new weapon.
     *
     * @return \Illuminate\View\View
     */
    public function weaponController()
    {
        $weapons = Weapon::withTrashed()->paginate(5);
        return view('weaponsPanel', ['weapons' => $weapons]);
    }
    public function destroy(string $id)
    {
        $weapon = Weapon::findOrFail($id);
        $player = Player::where('weapon_id', $weapon->id)->exists();
        if ($player) {
            return redirect()->route('weaponsPanel')->with('assigned', 'Weapon assigned to player!');
        } else {
            $weapon->delete();
            return redirect()->route('weaponsPanel')->with('delete', 'Weapon Deleted!');
        }
    }

    public function restore(string $id)
    {
        $weapon = Weapon::withTrashed()->find($id);
        $weapon->restore();
        return redirect()->back()->with('restore', 'Weapon Restored!');
    }

    public function addWeapon(Request $request)
    {
        $validatedData = $request->validate([
            'brand' => 'required|max:64',
            'model' => 'required|max:64',
            'type' => 'required|max:32',
        ]);
        $weapon = new Weapon();
        $weapon->brand = $validatedData['brand'];
        $weapon->model = $validatedData['model'];
        $weapon->type = $validatedData['type'];
        $weapon->save();
        return redirect()->route('weaponsPanel')->with('add', 'Weapon Added!');
    }

    public function edit(string $id)
    {
        $weapon = Weapon::findOrFail($id);
        return view('weaponsEdit', compact('weapon'));
    }

    public function update(Request $request, string $id)
    {
        $weapon = Weapon::findOrFail($id);
        $input = $request->all();
        $weapon->update($input);
        return redirect()->route('weaponsPanel')->with('update', 'Weapon Updated!');
    }
    public function showWeapons()
    {
        $weapon = Weapon::all();
        return view('weapons', ['weapon' => $weapon]);
    }
}
