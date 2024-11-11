<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('teams')->insert([
            ['name' => 'Levski'],
            ['name' => 'CSKA'],
            ['name' => 'Ludogorets'],
            ['name' => 'Lokomotiv'],
        ]);
    }
}
