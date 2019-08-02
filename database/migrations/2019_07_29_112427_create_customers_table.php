<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('natID', 191)->unique();

            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');

            $table->string('fName', 191)->nullable();
            $table->string('lName', 191)->nullable();
            $table->string('email', 191)->unique();
            $table->string('cust_type', 191);

            $table->string('hotel_name', 191)->nullable();
            $table->string('telNo', 191)->unique();           
            $table->string('gender', 191)->nullable();
            $table->date('dob')->nullable();
            $table->string('location', 191);
            $table->string('image', 191);
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
        Schema::dropIfExists('customers');
    }
}
