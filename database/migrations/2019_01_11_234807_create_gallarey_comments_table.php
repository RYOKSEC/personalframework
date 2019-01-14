<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGallareyCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gallarey_comments', function (Blueprint $table) {
          $table->increments('id');
          $table->integer('work_id')->unsigned();
          $table->foreign('work_id')->references('id')->on('works')->onDelete('cascade');
          $table->text('body');
          $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('gallarey_comments');
    }
}
