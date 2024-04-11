<?php

namespace App\Http\Controllers;

use App\Models\Monster;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CaptureController extends Controller
{
    public function captureMonster(){
        $user = Auth::user();

        $randomMonsters = Monster::inRandomOrder()->limit(6)->get();

        return view('capture', ['user' => $user, 'monsters' => $randomMonsters]);
    }
}
