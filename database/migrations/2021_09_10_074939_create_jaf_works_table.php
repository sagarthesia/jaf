<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJafWorksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jaf_works', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('jaf_id');
            $table->string('company_name')->nullable();
            $table->string('designation')->nullable();
            $table->date('from')->nullable();
            $table->date('to')->nullable();
            $table->foreign('jaf_id')->references('id')->on('jafs')->onDelete('cascade');
            $table->index(['company_name', 'designation']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jaf_works');
    }
}
