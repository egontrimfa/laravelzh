<?php

use Illuminate\Database\Seeder;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('books')->insert([
            'author_id'=> 1,
            'title'    => 'Az arany ember',
            'year'     => 1872,
        ]); 

        DB::table('books')->insert([
            'author_id'=> 1,
            'title'    => 'Szegény gazdagok',
            'year'     => 1860,
        ]); 

        DB::table('books')->insert([
            'author_id'=> 1,
            'title'    => 'A kőszívű ember fiai',
            'year'     => 1869,
        ]);     

        DB::table('books')->insert([
            'author_id'=> 2,
            'title'    => 'Egri csillagok',
            'year'     => 1901,
        ]);  
        DB::table('books')->insert([
            'author_id'=> 2,
            'title'    => 'A láthatatlan ember',
            'year'     => 1902,
        ]);      
        DB::table('books')->insert([
            'author_id'=> 2,
            'title'    => 'Isten rabjai',
            'year'     => 1908,
        ]);  
        DB::table('books')->insert([
            'author_id'=> 3,
            'title'    => 'Beszterce ostroma',
            'year'     => 1895,
        ]);     
        DB::table('books')->insert([
            'author_id'=> 3,
            'title'    => 'Különös házasság',
            'year'     => 1900,
        ]);  
    }
}
