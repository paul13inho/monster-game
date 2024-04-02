<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MonsterController extends Controller
{
    public function monsterIndex(){

        $user = Auth::user();

        return view('create-monster', ['user' => $user]);
    }
}
