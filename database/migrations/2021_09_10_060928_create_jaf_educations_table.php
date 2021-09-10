<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJafEducationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jaf_educations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('jaf_id');
            $table->string('education');
            $table->string('name_of_board');
            $table->year('passing_year');
            $table->decimal('percentage', 4, 2);
            $table->foreign('jaf_id')->references('id')->on('jafs')->onDelete('cascade');
            $table->index(['name_of_board', 'passing_year', 'percentage']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jaf_educations');
    }
}
