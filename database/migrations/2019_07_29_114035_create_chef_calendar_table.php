<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChefCalendarTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chef_calendar', function (Blueprint $table) {
            $table->bigIncrements('id');
          
             $table->unsignedBigInteger('chef_id');
            $table->foreign('chef_id')->references('id')->on('chefs');

            $table->date('date');
            $table->boolean('available');
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
        Schema::dropIfExists('chef_calendar');
    }
}
