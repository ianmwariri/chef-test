<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCuisinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cuisines', function (Blueprint $table) {
            $table->bigIncrements('id');

             $table->unsignedBigInteger('chef_id');
            $table->foreign('chef_id')->references('id')->on('chefs');

            
            $table->string('image', 191);
            $table->string('description', 191);
            $table->string('cost', 191);
            $table->string('recipe', 191);
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
        Schema::dropIfExists('cuisines');
    }
}
