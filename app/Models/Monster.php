<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Monster extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'type',
        'level',
        'life'
    ];

    public function moves()
    {
        return $this->belongsToMany(Move::class, 'monster_move');
    }


}
