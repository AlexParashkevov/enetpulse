<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class MatchSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('matches')->insert([
            ['season_id' => 1, 'team1_id' => 1, 'team2_id' => 2, 'match_date' => now()],
            ['season_id' => 1, 'team1_id' => 3, 'team2_id' => 4, 'match_date' => now()],
            ['season_id' => 1, 'team1_id' => 1, 'team2_id' => 3, 'match_date' => now()],
            ['season_id' => 1, 'team1_id' => 2, 'team2_id' => 4, 'match_date' => now()],
            ['season_id' => 1, 'team1_id' => 1, 'team2_id' => 4, 'match_date' => now()],
            
            ['season_id' => 2, 'team1_id' => 1, 'team2_id' => 3, 'match_date' => now()],
            ['season_id' => 2, 'team1_id' => 2, 'team2_id' => 4, 'match_date' => now()],
            ['season_id' => 2, 'team1_id' => 1, 'team2_id' => 4, 'match_date' => now()],
            ['season_id' => 2, 'team1_id' => 3, 'team2_id' => 2, 'match_date' => now()],
            ['season_id' => 2, 'team1_id' => 4, 'team2_id' => 1, 'match_date' => now()],
        ]);
    }
}
