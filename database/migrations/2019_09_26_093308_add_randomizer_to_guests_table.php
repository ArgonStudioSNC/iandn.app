<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\Guest;

class AddRandomizerToGuestsTable extends Migration
{
    /**
    * Run the migrations.
    *
    * @return void
    */
    public function up()
    {
        Schema::table('guests', function (Blueprint $table) {
            $table->unsignedInteger('randomizer')->unique();
        });
        $existing_guests = Guest::where('randomizer', '')->get();
        foreach($existing_guests as $guest)
        {
            while(true) {
                try{
                    $guest->randomizer = rand();
                    $guest->save();
                    break;
                }
                catch(Exception $e){
                    // Could not save, try again
                }
            }
        }
    }

    /**
    * Reverse the migrations.
    *
    * @return void
    */
    public function down()
    {
        Schema::table('guests', function (Blueprint $table) {
            $table->dropColumn('randomizer');
        });
    }
}
