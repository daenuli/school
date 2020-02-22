<?php

use App\Models\Grade;
use Illuminate\Database\Seeder;

class GradeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Grade::truncate();
        Grade::insert([
            [
                'name' => 'IX A',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'IX B',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'X A',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'X B',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'XI A',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'XI B',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
