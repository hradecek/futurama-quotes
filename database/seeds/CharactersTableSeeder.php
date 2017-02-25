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
            ['id' => 1, 'nick' => 'leela', 'name' => 'Turanga Leela'],
            ['id' => 2, 'nick' => 'fry', 'name' =>'Philip J. Fry'],
            ['id' => 3, 'nick' => 'bender', 'name' => 'Bender Bending Rodriguez'],
            ['id' => 4, 'nick' => 'professor', 'name' => 'Professor Hubert J. Farnsworth'],
            ['id' => 5, 'nick' => 'amy', 'name' => 'Amy Wong'],
            ['id' => 6, 'nick' => 'hermes', 'name' => 'Hermes Condrad'],
            ['id' => 7, 'nick' => 'zoidberg', 'name' => 'Doctor John Zoidberg'],
            ['id' => 8, 'nick' => 'nibbler', 'name' => 'Lord Nibbler'],
            ['id' => 9, 'nick' => 'zapp', 'name' => 'Zapp Brannigan'],
            ['id' => 10, 'nick' => 'kif', 'name' => 'Kif Kroker'],
        ]);
    }
}
