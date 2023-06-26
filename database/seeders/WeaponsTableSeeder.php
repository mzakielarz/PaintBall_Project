<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Weapon;

class WeaponsTableSeeder extends Seeder
{
    public function run()
    {
        $weapons = [
            ['brand' => 'Smith & Wesson', 'model' => 'M&P 9', 'type' => 'Pistol'],
            ['brand' => 'Glock', 'model' => '17 Gen 5', 'type' => 'Pistol'],
            ['brand' => 'Remington', 'model' => '700', 'type' => 'Rifle'],
            ['brand' => 'Sig Sauer', 'model' => 'P226', 'type' => 'Pistol'],
            ['brand' => 'Colt', 'model' => 'AR-15', 'type' => 'Rifle'],
            ['brand' => 'Mossberg', 'model' => '500', 'type' => 'Shotgun'],
            ['brand' => 'FN Herstal', 'model' => 'SCAR 17', 'type' => 'Rifle'],
            ['brand' => 'Beretta', 'model' => '92FS', 'type' => 'Pistol'],
            ['brand' => 'Ruger', 'model' => 'SR9', 'type' => 'Pistol'],
            ['brand' => 'Springfield Armory', 'model' => 'XD-M', 'type' => 'Pistol'],
        ];

        foreach ($weapons as $weapon) {
            Weapon::create($weapon);
        }
    }
}
