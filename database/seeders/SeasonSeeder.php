<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class SeasonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('seasons')->insert([
            ['tournament_id' => 1, 'year' => '2023'],
            ['tournament_id' => 2, 'year' => '2024']
        ]);
    }
}
