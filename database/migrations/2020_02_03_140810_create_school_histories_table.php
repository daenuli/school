<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSchoolHistoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('school_histories', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('student_id');
            $table->string('name');
            $table->year('graduate'); // tahun lulus
            $table->integer('nasional_exam_number'); // Nomor ujian nasional
            $table->integer('npsn');
            $table->string('provinsi_id',2)->nullable();
            $table->string('kabupaten_id',4)->nullable();
            $table->string('kecamatan_id',7)->nullable();
            $table->string('street')->nullable();
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
        Schema::dropIfExists('school_histories');
    }
}
