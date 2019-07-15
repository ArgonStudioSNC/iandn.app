<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RenamePostsPictureColumn extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
      Schema::table('posts', function(Blueprint $table) {
        $table->renameColumn('picture_id', 'picture_name');
      });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
      Schema::table('posts', function(Blueprint $table) {
        $table->renameColumn('picture_name', 'picture_id');
      });
  }
}
