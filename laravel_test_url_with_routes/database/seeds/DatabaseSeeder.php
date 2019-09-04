<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        DB:table('samples')->insert([
            'fsname'=>'Mrr',
            'lsname'=>'Dom',
            'age'=> '12',
            'gender'=>'M',
            'email'=>'oudom92@gmail.com'
            ]);
    }
}
