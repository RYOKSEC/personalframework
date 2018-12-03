<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCVsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('c_vs', function (Blueprint $table) {
          $table->increments('id');
          $table->string('name');
          $table->string('nationality')->nullable();
          $table->string('Socialstatus')->nullable();
          $table->string('birthplace')->nullable();
          $table->date('birthdate')->nullable();
          $table->string('address')->nullable();
          $table->string('email')->unique();
          $table->integer('phone');
          $table->mediumText('qualifications');
          $table->mediumText('Workexperience');
          $table->string('Interests');
          $table->boolean('created');
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
        Schema::dropIfExists('c_vs');
    }
}
