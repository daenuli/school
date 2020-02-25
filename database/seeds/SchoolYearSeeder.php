<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SchoolYearSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $data     = [
          'start_year'       => '2021',
          'end_year'          => '2022',
          'status'            => 1
      ];
      DB::table('school_years')->truncate();
      DB::table('school_years')->insert($data);
    }
}
