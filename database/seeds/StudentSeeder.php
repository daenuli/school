<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Student;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Student::truncate();
    	$faker = Faker::create('id_ID');

        for($i = 1; $i <= 100; $i++){

    		DB::table('students')->insert([
    			'nis' => $faker->unique()->numberBetween(0001,9999),
                'nisn' => '000'.$faker->unique()->numberBetween(3111111,5888888),
                'name' => $faker->name,
                'birth_place' => $faker->city,
                'birth_date' => $faker->dateTimeBetween($startDate = '-25 years', $endDate = '-5 years', $timezone = null)->format('Y-m-d'),
                'email' =>  $faker->email,
                'phone' =>  $faker->phoneNumber,
                'gender' => $faker->randomElement([0, 1]),
                'status' => 1,
                // 'registration_date' => $faker->dateTimeThisYear()->format('Y-m-d'),
                // 'father_name' => $faker->name($gender = 'male'),
                // 'mother_name' => $faker->name($gender = 'female'),
                'created_at' => now(),
                'updated_at' => now(),
    		]);
    	}
    }
}
