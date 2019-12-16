<?php

use Illuminate\Database\Seeder;

class AuthorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('authors')->insert([
            'name' => 'Jókai Mór',
            'address' => 'Budapest',
        ]); 

        DB::table('authors')->insert([
            'name' => 'Gárdonyi Géza',
            'address' => 'Eger',
        ]);     
        DB::table('authors')->insert([
            'name' => 'Mikszáth Kálmán',
            'address' => 'Budapest',
        ]);  
    }
}
