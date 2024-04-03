<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Move extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'level', 'type', 'power'];

    public function monsters()
    {
        return $this->belongsToMany(Monster::class, 'monster_move');
    }

}
