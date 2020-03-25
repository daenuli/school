<?php

use Illuminate\Database\Seeder;
use App\Models\StudentGrade;
use Faker\Factory as Faker;

class StudentGradeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        StudentGrade::truncate();
        $faker = Faker::create('id_ID');

        for($i = 1; $i <= 145; $i++){

    		DB::table('student_grades')->insert([
    			'school_year_id' => 1,
    			'grade_id' => $faker->numberBetween(1,6),
    			'student_id' => $faker->unique()->numberBetween(1,145),
    			'status' => $faker->randomElement([0, 1]),
                'created_at' => $faker->date($format = 'Y-m-d', $max = 'now'),
                'updated_at' => $faker->date($format = 'Y-m-d', $max = 'now'),
    		]);
    	}
    }
}
