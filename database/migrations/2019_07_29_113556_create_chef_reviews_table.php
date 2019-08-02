<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChefReviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chef_reviews', function (Blueprint $table) {
              $table->bigIncrements('id');
              
            $table->unsignedBigInteger('cust_id');
            $table->foreign('cust_id')->references('id')->on('customers');

            $table->unsignedBigInteger('chef_id');
            $table->foreign('chef_id')->references('id')->on('chefs');

            $table->string('rating', 191);
            $table->string('review', 191);
            $table->boolean('review_approved');
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
        Schema::dropIfExists('chef_reviews');
    }
}
