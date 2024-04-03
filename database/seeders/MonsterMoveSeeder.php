<?php

namespace Database\Seeders;

use App\Models\Monster;
use App\Models\Move;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MonsterMoveSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Monster::all()->each(function ($monster) {
            $moves = Move::where('type', $monster->type)->get()->random(rand(1, 3));

            foreach ($moves as $move) {

                $monster->moves()->attach($move->id);
            }
        });
    }
}
