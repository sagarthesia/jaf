<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJafsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jafs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email')->unique();
            $table->unsignedBigInteger('phone');
            $table->tinyInteger('gender')->default('1')->comment('1 = male , 2 = female');;
            $table->string('designation')->nullable();
            $table->longText('address_line1')->nullable();
            $table->longText('address_line2')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('zip_code')->nullable();
            $table->string('relationship_status')->nullable();
            $table->string('ref_name')->nullable();
            $table->string('ref_contact_number')->nullable();
            $table->string('ref_relation')->nullable();
            $table->integer('notice_period')->nullable();
            $table->integer('expected_ctc')->nullable();
            $table->integer('current_ctc')->nullable();
            $table->string('department')->nullable();
            $table->json('prefered_location')->nullable();
            $table->date('dob')->nullable();
            $table->softDeletes($column = 'deleted_at', $precision = 0);
            $table->timestamps();
            $table->index(['first_name', 'last_name', 'email', 'phone']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jafs');
    }
}
