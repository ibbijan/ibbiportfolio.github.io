<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAboutsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('abouts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('home_id');

            $table->foreign('home_id')->references('id')->on('homes')->onDelete('cascade');

            $table->text('description')->nullable();

            $table->string('birthday')->nullable();
            $table->string('website')->nullable();
            $table->string('phone')->nullable();
            $table->string('city')->nullable();
            $table->string('degree')->nullable();
            $table->string('email')->nullable();
            $table->string('heading')->nullable();
            $table->text('desrcription2')->nullable();

            $table->string('freelance')->nullable();




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
        Schema::dropIfExists('abouts');
    }
}
