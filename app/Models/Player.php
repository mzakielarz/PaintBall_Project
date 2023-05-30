<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    use HasFactory;

    protected $fillable = [
        'firstname',
        'lastname',
        'team',
        'user_id',
        'weapon_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function weapon()
    {
        return $this->belongsTo(Weapon::class, 'weapon_id');
    }
}
