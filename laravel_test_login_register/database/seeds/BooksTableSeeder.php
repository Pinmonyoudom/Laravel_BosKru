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
        DB::table('books')->insert(['title'=>'Computer Fundamental',
        	'author'=>'Pradeep',
        	"description"=>'Testing',
        	"isbn"=>'1234567890',
        	'year'=>'1990',
        	'quantity'=>5,
        	'price'=>'100'
    ]);
    }
}
