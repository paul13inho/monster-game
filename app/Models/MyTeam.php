<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MyTeam extends Model
{
    use HasFactory;

    public function monster()
    {
        return $this->belongsTo(Monster::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}


