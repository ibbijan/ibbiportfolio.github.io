<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePortfolioProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('portfolio_projects', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('portfolio_category_id');
            $table->foreign('portfolio_category_id')->references('id')->on('portfolio_categories')->onDelete('cascade');

            $table->string('project_image');
            $table->string('client_name');
            $table->string('project_date');
            $table->string('project_url');
            $table->string('project_heading');
            $table->text('project_description');

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
        Schema::dropIfExists('portfolio_projects');
    }
}
