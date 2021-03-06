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
        $this->call(SchoolYearSeeder::class);
        $this->call(UsersSeeder::class);
        $this->call(ProvinsiSeeder::class);
        $this->call(KabupatenSeeder::class);
        $this->call(KecamatanSeeder::class);
        $this->call(StudentSeeder::class);
        $this->call(SurahSeeder::class);
        $this->call(DepartementSeeder::class);
        $this->call(TeacherSeeder::class);
        $this->call(GradeSeeder::class);
        $this->call(SppSeeder::class);
        $this->call(DonaturSeeder::class);
        $this->call(SppStudentSeeder::class);
        $this->call(HafalanSeeder::class);
        $this->call(DonaturStudentSeeder::class);
        $this->call(StudentFaultSeeder::class);
        $this->call(SppPaymentSeeder::class);
        $this->call(StudentGradeSeeder::class);
    }
}
