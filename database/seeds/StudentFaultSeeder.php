<?php

use App\Models\StudentFault;
use App\Models\Student;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class StudentFaultSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        StudentFault::truncate();
        $faker = Faker::create('id_ID');

        $student = Student::orderBy('id')->get();
        $pelanggaran = ['Merokok', 'Telat Shalat Jamaah', 'Pacaran', 'Telat Shalat Jamaah', 'Pacaran'];
        foreach ($student as $key => $value) {
            for ($i=1; $i <= rand(0, 3) ; $i++) {
                $data[] = [
                    'student_id' => $value->id,
                    'name' => $faker->randomElement($pelanggaran),
                    'type' => rand(1, 3),
                    'point' => rand(30, 50),
                    'description' => 'Jangan Di Ulangi !'
                ];
            }
        }
        StudentFault::insert($data);
    }
}
