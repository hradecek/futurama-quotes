<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CharactersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('characters')->insert([
            ['id' => 1, 'nick' => 'leela', 'name' => 'Leela Turange'],
            ['id' => 2, 'nick' => 'fry', 'Fry'],
            ['id' => 3, 'nick' => 'bender', 'Bender'],
            ['id' => 4, 'nick' => 'professor', 'Professor Hubert Farnsworth'],
            ['id' => 5, 'nick' => 'amy', 'Amy Lee Wong'],
            ['id' => 6, 'nick' => 'hermes', 'Hermes Condrad'],
        ]);
    }
}
