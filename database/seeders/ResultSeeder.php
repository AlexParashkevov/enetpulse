<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ResultSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('results')->insert([
            ['match_id' => 1, 'team_id' => 1, 'score' => 2],
            ['match_id' => 1, 'team_id' => 2, 'score' => 1],
            ['match_id' => 2, 'team_id' => 3, 'score' => 3],
            ['match_id' => 2, 'team_id' => 4, 'score' => 1],
            ['match_id' => 3, 'team_id' => 1, 'score' => 1],
            ['match_id' => 3, 'team_id' => 3, 'score' => 2],
            ['match_id' => 4, 'team_id' => 2, 'score' => 0],
            ['match_id' => 4, 'team_id' => 4, 'score' => 3],
            ['match_id' => 5, 'team_id' => 1, 'score' => 4],
            ['match_id' => 5, 'team_id' => 4, 'score' => 2],
        ]);

        DB::table('results')->insert([
            ['match_id' => 6, 'team_id' => 1, 'score' => 3],
            ['match_id' => 6, 'team_id' => 3, 'score' => 1],
            ['match_id' => 7, 'team_id' => 2, 'score' => 2],
            ['match_id' => 7, 'team_id' => 4, 'score' => 0],
            ['match_id' => 8, 'team_id' => 1, 'score' => 1],
            ['match_id' => 8, 'team_id' => 4, 'score' => 1],
            ['match_id' => 9, 'team_id' => 3, 'score' => 0],
            ['match_id' => 9, 'team_id' => 2, 'score' => 2],
            ['match_id' => 10, 'team_id' => 4, 'score' => 3],
            ['match_id' => 10, 'team_id' => 1, 'score' => 1],
        ]);
    }
}
