<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Teacher;

class TeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Teacher::truncate();
        $faker = Faker::create('id_ID');

        for ($i=1; $i <= 30; $i++) {
            DB::table('teachers')->insert([
              'nik' => $faker->numberBetween(2100000000000000,9999999999999999),
              'name' => $faker->name,
              'gender' => $faker->randomElement([0, 1]),
              'department_id' => $faker->numberBetween(1,24),
              'phone' => $faker->phoneNumber,
              'created_at' => now(),
              'updated_at' => now(),
            ]);
        }
    }
}
