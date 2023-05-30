<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Weapon extends Model
{
    use HasFactory;

    protected $fillable = [
        'brand',
        'model',
        'type',

    ];

    // public function Players()
    // {
    //     return $this->hasMany(Weapons::class, 'weapon_id');
    // }

  /*  public function weapon()
    {
        return $this->belongsTo(Weapon::class);
    }*/
}
