<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nom');
            $table->longText('content')->nullable();
            $table->string('duree');
            $table->string('datedebut');
            $table->unsignedInteger('society_id')->nullable();
            $table->unsignedInteger('category_id')->nullable();
            $table->foreign('society_id')->references('id')->on('societies')->onDelete('cascade');
            $table->timestamps();
            $table->foreign('category_id')->references('id')->on('categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('projects');
    }
}
