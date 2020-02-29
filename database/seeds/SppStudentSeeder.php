<?php

use Illuminate\Database\Seeder;
use App\Models\SppStudent;
use Faker\Factory as Faker;

class SppStudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SppStudent::truncate();
        $faker = Faker::create('id_ID');

        for($i = 1; $i <= 12; $i++){

    		DB::table('spp_students')->insert([
    			'student_id' => 1,
    			'spp_id' => 1,
    			'user_id' => 1,
    			'status' => $faker->randomElement([0, 1]),
                'created_at' => $faker->date($format = 'Y-m-d', $max = 'now'),
    		]);
    	}
    }
}
