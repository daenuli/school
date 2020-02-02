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
            $table->string('nis', 4)->unique();
            $table->string('nisn', 10)->unique();
            $table->string('name');
            $table->string('birth_place');
            $table->date('birth_date');
            $table->string('avatar', 200)->nullable();
            $table->string('email', 100)->unique();
            $table->string('phone')->nullable();
            $table->boolean('gender'); //1 = Laki Laki, 0 = Perempuan
            $table->boolean('status'); //1 = Aktif, 0 = Tidak Aktif
            $table->date('registration_date');
            $table->string('provinsi_id',2)->nullable();
            $table->string('kabupaten_id',4)->nullable();
            $table->string('kecamatan_id',7)->nullable();
            $table->string('father_name');
            $table->string('mother_name');
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
