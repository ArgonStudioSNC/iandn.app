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
            $table->unsignedInteger('randomizer');
        });

        $existing_guests = Guest::get();
        foreach($existing_guests as $guest)
        {
            $guest->randomizer = rand();
            $guest->save();
        }

        Schema::table('guests', function (Blueprint $table) {
            $table->unique('randomizer');
        });
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
