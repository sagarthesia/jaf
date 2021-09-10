<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJafTechnologiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jaf_technologies', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('jaf_id');
            $table->string('technology');
            $table->string('status');
            $table->foreign('jaf_id')->references('id')->on('jafs')->onDelete('cascade');
            $table->index('technology');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jaf_technologies');
    }
}
