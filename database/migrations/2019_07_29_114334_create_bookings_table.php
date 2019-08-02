<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
           $table->bigIncrements('id');

          
            $table->unsignedBigInteger('chef_id');
            $table->foreign('chef_id')->references('id')->on('chefs');

             $table->unsignedBigInteger('cust_id');
            $table->foreign('cust_id')->references('id')->on('customers');
            
            $table->date('date');
            $table->time('time');
            $table->string('location', 191);
            $table->string('description', 191);
            $table->boolean('accepted');
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
        Schema::dropIfExists('bookings');
    }
}
