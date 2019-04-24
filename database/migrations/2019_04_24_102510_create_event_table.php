<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('event', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->integer('max_volunteer')->default(10);
            $table->enum('status',['active','pending','deleted'])->default('active');
            $table->enum('type',['participation','view'])->default('participation');
            $table->string('description');
            $table->string('address');
            $table->string('organiser');
            $table->integer('user_id');
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
        Schema::drop('event');
    }
}
