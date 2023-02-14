<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExperiencePointsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('experience_points', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('home_id');
            $table->foreign('home_id')->references('id')->on('homes')->onDelete('cascade');

            $table->unsignedBigInteger('experience_id');

            $table->text('p1')->nullable();
          


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
        Schema::dropIfExists('experience_points');
    }
}
