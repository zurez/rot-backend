<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBearersTable extends Migration
{
    /**
     * Run the migrations.
     * OFFICE BEARERS
     * @return void
     */
    public function up()
    {
        Schema::create('bearers', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('title');
            $table->string('organisation');
            $table->string('responsibility');
            $table->string('quote');
            $table->string('description');
            $table->string('image_url');
            $table->string('url');
            $table->string('phone');
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
        Schema::drop('bearers');
    }
}
