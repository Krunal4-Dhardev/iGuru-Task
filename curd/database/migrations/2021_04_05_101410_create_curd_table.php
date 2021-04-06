<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCurdTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('curds', function (Blueprint $table) {
            $table->id();
            $table->string('username');
            $table->string('email');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('gender');
            $table->string('mobile');
            $table->string('portfolio');
            $table->date('dob');
            $table->date('start_date');
            $table->date('end_date');
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
        Schema::dropIfExists('curd');
    }
}
