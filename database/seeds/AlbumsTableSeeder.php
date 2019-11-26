<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AlbumsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('albums')->delete();
        DB::table('albums')->insert(array(
            array(
                'label'    => 'Isabel & Nathan',
                'cover_name' => 'cover_IN.JPG',
                'zip_name' => 'iejeAdcg6FShpot7azkLtMydABxB.zip',
            ),
            array(
                'label'    => 'Cérémonie',
                'cover_name' => 'cover_ceremonie.JPG',
                'zip_name' => 'rn35XTPksyn468t9ArN9eEgNPRnK.zip',
            ),

            array(
                'label'    => 'Sortie',
                'cover_name' => 'cover_sortie.JPG',
                'zip_name' => 'Q48eYCo5XgBChgtpxgFRMqn75sRx.zip',
            ),

            array(
                'label'    => 'Rotonde',
                'cover_name' => 'cover_rotonde.JPG',
                'zip_name' => 'qePd9E3iKCPmTsf6hQeA6eHH6oLN.zip',
            ),
        ));
    }
}
