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
                'label'    => 'Cérémonie civile',
                'souper' => false,
                'cover_name' => 'default_cover.JPG'
                'zip_name' => 'iejeAdcg6FShpot7azkLtMydABxB.zip'
            ),
            array(
                'label'    => 'Groupes',
                'souper' => false,
                'cover_name' => 'default_cover.JPG'
                'zip_name' => 'rn35XTPksyn468t9ArN9eEgNPRnK.zip'
            ),

            array(
                'label'    => 'Apéro',
                'souper' => false,
                'cover_name' => 'default_cover.JPG'
                'zip_name' => 'Q48eYCo5XgBChgtpxgFRMqn75sRx.zip'
            ),

            array(
                'label'    => 'Soirée',
                'souper' => true,
                'cover_name' => 'default_cover.JPG'
                'zip_name' => ' 	qePd9E3iKCPmTsf6hQeA6eHH6oLN.zip'
            ),

            array(
                'label'    => 'Party',
                'souper' => true,
                'cover_name' => 'default_cover.JPG'
                'zip_name' => 'erMST346rY5qHSXJxhc4YNeKK9nQ.zip'
            ),
        ));
    }
}
