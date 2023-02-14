<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMultiImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('multi_images', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('portfolio_project_id');
            $table->foreign('portfolio_project_id')->references('id')->on('portfolio_projects')->onDelete('cascade');

            $table->string('multiImage');

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
        Schema::dropIfExists('multi_images');
    }
}
