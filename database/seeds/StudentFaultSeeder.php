<?php

use App\Models\StudentFault;
use Illuminate\Database\Seeder;

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
        StudentFault::insert([
            [
            	'student_id' => 1,
                'name' => 'Merokok',
                'type' => 1,
                'description' => '',
            ],
            [
                'student_id' => 2,
                'name' => 'Telat Shalat Jamaah',
                'type' => 1,
                'description' => '',
            ],
            [
                'student_id' => 3,
                'name' => 'Pacaran',
                'type' => 3,
                'description' => '',
            ],
            [
                'student_id' => 1,
                'name' => 'Telat Shalat Jamaah',
                'type' => 2,
                'description' => '',
            ],
            [
                'student_id' => 1,
                'name' => 'Pacaran',
                'type' => 3,
                'description' => '',
            ]
        ]);
    }
}
