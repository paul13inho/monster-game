<?php

namespace Database\Seeders;

use App\Models\Move;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MoveSeeder extends Seeder
{
    public function run()
    {
        Move::factory()->count(50)->create();
    }
}
