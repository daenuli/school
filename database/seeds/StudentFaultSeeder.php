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
                'point' => 50,
                'description' => 'Jangan Di Ulangi !',
            ],
            [
                'student_id' => 2,
                'name' => 'Telat Shalat Jamaah',
                'type' => 1,
                'point' => 50,
                'description' => 'Jangan Di Ulangi !',
            ],
            [
                'student_id' => 3,
                'name' => 'Pacaran',
                'type' => 3,
                'point' => 50,
                'description' => 'Jangan Di Ulangi !',
            ],
            [
                'student_id' => 1,
                'name' => 'Telat Shalat Jamaah',
                'type' => 2,
                'point' => 50,
                'description' => 'Jangan Di Ulangi !',
            ],
            [
                'student_id' => 1,
                'name' => 'Pacaran',
                'type' => 3,
                'point' => 50,
                'description' => 'Jangan Di Ulangi !',
            ]
        ]);
    }
}
