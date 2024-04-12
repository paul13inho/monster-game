<?php

namespace App\Http\Controllers;

use App\Models\Move;
use App\Models\MyTeam;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MonsterController extends Controller
{
    public function monsterIndex(){

        $user = Auth::user();

        return view('create-monster', ['user' => $user]);
    }

    public function typeIndex(){
        $user = Auth::user();

        return view('create-type', ['user' => $user]);
    }

    public function moveIndex(){
        $user = Auth::user();

        return view('create-move', ['user' => $user]);
    }

    public function moveCreate(Request $request){

        $name = $request->input('name');
        $level = $request->input('lvl');
        $type = $request->input('type');
        $attack = $request->input('attack');

        Move::create([
            'name' => $name,
            'level' => $level,
            'type' => $type,
            'attack' => $attack
        ]);

        $user = Auth::user();

        return redirect()->back()->with('user', $user);
    }

    public function capture(Request $request)
    {
        dd($request);


        $user = Auth::user();

        $monsterId = $request->monster_id;

        MyTeam::create([
            'user_id' => $userId,
            'monster_id' => $monsterId,
        ]);

        return back()->with('success', 'Monster captured successfully!');
    }














}
