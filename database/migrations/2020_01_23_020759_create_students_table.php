<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nis')->unique();
            $table->string('name');
            $table->string('birth_place');
            $table->date('birth_date');
            $table->string('avatar')->nullable();
            $table->string('email')->unique();
            $table->string('phone');
            $table->boolean('gender'); //1 = Laki Laki, 2 = Perempuan
            $table->boolean('status'); //1 = Aktif, 2 = Tidak Aktif
            
            $table->date('registration_date');
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
        Schema::dropIfExists('students');
    }
}
