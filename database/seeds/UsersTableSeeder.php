<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
    * Run the database seeds.
    *
    * @return void
    */
    public function run()
    {
        DB::table('users')->delete();
        DB::table('users')->insert([
            'email'    => 'loic@argonstudio.ch',
            'password' => bcrypt('root'),
        ]);
    }
}
