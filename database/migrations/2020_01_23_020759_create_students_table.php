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
            $table->string('nis', 6)->unique();
            $table->string('name', 30);
            $table->string('birth_place', 20);
            $table->date('birth_date', 10);
            $table->string('avatar', 200)->nullable();
            $table->string('email', 100)->unique();
            $table->string('phone', 15);
            $table->boolean('gender'); //1 = Laki Laki, 2 = Perempuan
            $table->boolean('status'); //1 = Aktif, 2 = Tidak Aktif
            $table->date('registration_date');
            $table->unsigned('provinsi_id');
            $table->unsigned('kabupaten_id');
            $table->unsigned('kecamatan_id');
            $table->string('father_name');
            $table->string('mother_name');
            $table->timestamps();

            $table->foreign('provinsi_id')->references('id')->on('provinsi')->onDelete('cascade');
            $table->foreign('kabupaten_id')->references('id')->on('kabupaten')->onDelete('cascade');
            $table->foreign('kecamatan_id')->references('id')->on('kecamatan')->onDelete('cascade');
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
