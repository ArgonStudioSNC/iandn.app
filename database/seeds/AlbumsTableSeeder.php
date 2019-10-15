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
            ),
            array(
                'label'    => 'Groupes',
                'souper' => false,
                'cover_name' => 'default_cover.JPG'
            ),

            array(
                'label'    => 'Apéro',
                'souper' => false,
                'cover_name' => 'default_cover.JPG'
            ),

            array(
                'label'    => 'Soirée',
                'souper' => true,
                'cover_name' => 'default_cover.JPG'
            ),

            array(
                'label'    => 'Party',
                'souper' => true,
                'cover_name' => 'default_cover.JPG'
            ),
        ));
    }
}
