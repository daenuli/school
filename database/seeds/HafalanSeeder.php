<?php

use Illuminate\Database\Seeder;
use App\Models\Hafalan;
use Faker\Factory as Faker;

class HafalanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Hafalan::truncate();
        $faker = Faker::create('id_ID');

        for($i = 1; $i <= 12; $i++){

    		DB::table('hafalans')->insert([
    			'user_id' => 2,
    			'student_id' => 1,
    			'surah_id' => 2,
    			'juz' => 1,
    			'ayat_start' => $faker->unique()->numberBetween(1,30),
    			'ayat_end' => $faker->unique()->numberBetween(30,100),
    			'note' => 'no coment',
                'created_at' => now(),
                'updated_at' => now(),
    		]);
    	}
    }
}
