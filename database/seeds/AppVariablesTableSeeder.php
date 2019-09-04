<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AppVariablesTableSeeder extends Seeder
{
    /**
    * Run the database seeds.
    *
    * @return void
    */
    public function run()
    {
        DB::table('appvariables')->delete();
        DB::table('appvariables')->insert([
            'name'    => 'quizz_access',
            'value' => 0,
        ]);
    }
}
