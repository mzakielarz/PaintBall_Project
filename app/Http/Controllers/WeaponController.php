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
    public function index()
    {
        $weapons = Weapon::all();
        return view('weaponsPanel',['weapons'=>$weapons]);

    }
    public function destroy(Weapon $weapon)
    {
        $weapon->delete();
        return redirect()->back();
    }

    /**
     * Store a newly created weapon in the database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
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
        return redirect('/usersMenu/weaponsPanel');
    }
}
