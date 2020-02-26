<?php

use Illuminate\Database\Seeder;
use App\Models\DonaturStudent;

class DonaturStudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DonaturStudent::truncate();
        DonaturStudent::insert([
            [
            'donatur_id' => 1,
            'student_id' => 1
            ],
            [
            'donatur_id' => 1,
            'student_id' => 2
            ],
            [
            'donatur_id' => 1,
            'student_id' => 3
            ]
        ]);
    }
}
