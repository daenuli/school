<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parents', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('student_id');
            $table->string('name');
            $table->date('birth_date');
            $table->boolean('gender'); // 0. Perempuan, 1. Laki
            $table->enum('last_education', ['sd', 'smp', 'sma', 'sarjana']);
            $table->string('job');
            $table->integer('salary');
            $table->string('phone');
            $table->enum('role', [1, 2, 3]); // 1. Ayah, 2. Ibu, 3. Wali
            $table->boolean('is_guardian'); // Apakah sebagai wali? 0. No, 1. Yes
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
        Schema::dropIfExists('parents');
    }
}
