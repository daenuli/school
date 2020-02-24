<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDonatursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('donaturs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nik');
            $table->string('name');
            $table->date('date_birth');
            $table->string('email')->unique();
            $table->string('provinsi_id', 2);
            $table->string('kabupaten_id', 4);
            $table->string('kecamatan_id', 7);
            $table->text('street');
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
        Schema::dropIfExists('donaturs');
    }
}
