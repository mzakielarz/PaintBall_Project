<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
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
        $weapons = Weapon::all();
        return view('weaponsPanel', ['weapons' => $weapons]);
    }
    public function destroy(string $id)
    {
        $weapon = Weapon::findOrFail($id);
        $weapon->delete();
        return redirect()->route('weaponsPanel');
    }

    /**
     * Store a newly created weapon in the database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function addWeapon(Request $request)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'brand' => 'required|max:64',
            'model' => 'required|max:64',
            'type' => 'required|max:32',
        ]);

        // Create a new weapon instance
        $weapon = new Weapon();
        $weapon->brand = $validatedData['brand'];
        $weapon->model = $validatedData['model'];
        $weapon->type = $validatedData['type'];
        $weapon->save();

        // Redirect back with success message
        return redirect()->route('weaponsPanel');
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
        return redirect()->route('weaponsPanel')->with('flash_message', 'Weapon Updated!');
    }
    public function showWeapons()
    {
        $weapon = Weapon::all();
        return view('weapons', ['weapon' => $weapon]);
    }
}
