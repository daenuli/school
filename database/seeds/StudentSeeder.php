<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$faker = Faker::create();

    	for($i = 1; $i <= 100; $i++){

    		DB::table('students')->insert([
    			'nis' => $faker->numberBetween(111111000000110001,111555999999990999),
    			'name' => $faker->name,
    			'birth_place' => $faker->city,
    			'birth_date' => $faker->dateTimeBetween($startDate = '-25 years', $endDate = '-5 years', $timezone = null)->format('Y-m-d'),
    			'registration_date' => $faker->dateTimeThisYear()->format('Y-m-d'),
    			'created_at' => now(),
				'updated_at' => now(),
    		]);
    	}
    }
}
