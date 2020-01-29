<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSppsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('spps', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('users_id');
            $table->integer('students_id');
            $table->integer('total');
            $table->boolean('status'); // False. Belum Lunas, True. Lunas
            $table->timestamps();
            //
            // $table->foreign('users_id')->references('id')->on('users')->onDelete('cascade');
            // $table->foreign('students_id')->references('id')->on('students')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('spps');
    }
}
