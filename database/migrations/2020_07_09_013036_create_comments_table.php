<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('judul');
            $table->timestamps();
            $table->unsignedBigInteger('answers_id')->nullable();
            $table->unsignedBigInteger('questions_id')->nullable();
            $table->foreign('answers_id')->references('id')->on('answers')->onDelete('cascade');
            $table->foreign('questions_id')->references('id')->on('questions')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comments');
    }
}
