<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersSeeder::class);
        $this->call(ProvinsiSeeder::class);
        $this->call(KabupatenSeeder::class);
        $this->call(KecamatanSeeder::class);
        $this->call(StudentSeeder::class);
        $this->call(SurahSeeder::class);
        $this->call(DepartementSeeder::class);
        $this->call(TeacherSeeder::class);
        $this->call(GradeSeeder::class);
    }
}
