<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJafLanguagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jaf_languages', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('jaf_id');
            $table->string('language');
            $table->string('read')->nullable();
            $table->string('write')->nullable();
            $table->string('speak')->nullable();
            $table->foreign('jaf_id')->references('id')->on('jafs')->onDelete('cascade');
            $table->index('language');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jaf_languages');
    }
}
