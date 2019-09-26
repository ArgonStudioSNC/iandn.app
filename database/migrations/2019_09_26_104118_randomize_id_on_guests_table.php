<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\Guest;

class RandomizeIdOnGuestsTable extends Migration
{
    /**
    * Run the migrations.
    *
    * @return void
    */
    public function up()
    {
        $existing_guests = Guest::get();
        foreach($existing_guests as $guest)
        {
            while(true) {
                try {
                    $guest->id = rand(0,1000);
                    $guest->save();
                    break;
                }
                catch (Exception $e){
                    // Can't save. Try again
                }
            }
        }
    }
}
