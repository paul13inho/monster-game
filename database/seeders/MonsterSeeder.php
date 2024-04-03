<?php

namespace Database\Seeders;

use App\Models\Monster;
use App\Models\Move;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MonsterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Monster::factory()->count(10)->create()->each(function ($monster) {
            // Define level ranges and corresponding move counts
            $levelRanges = [
                [1, 5, 1],
                [6, 10, 2],
                [11, 15, 3],
                [16, 20, 4],
            ];

            // Determine the move count based on the monster's level
            $moveCount = 0;
            foreach ($levelRanges as $range) {
                if ($monster->level >= $range[0] && $monster->level <= $range[1]) {
                    $moveCount = $range[2];
                    break;
                }
            }

            // Get all moves of the same type as the monster
            $moves = Move::where('type', $monster->type)->get();

            // Ensure there are moves available
            if ($moves->count() > 0) {
                // Randomly select moves based on the determined move count
                $selectedMoves = $moves->random($moveCount);

                // Associate selected moves with the monster
                foreach ($selectedMoves as $move) {
                    $monster->moves()->attach($move->id);
                }
            }
        });
    }
}
