<?php

use Illuminate\Database\Seeder;
use App\Models\Donatur;

class DonaturSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Donatur::truncate();
        Donatur::insert([
          [
            'nik' => '1234567890123456',
            'name' => 'Hamba Allah',
            'date_birth' => '1987-09-25',
            'email' => 'hamba@sholeh.com',
            'provinsi_id' => '34',
            'kabupaten_id' => '3404',
            'kecamatan_id' => '3404110',
            'street' => 'Jl. Raya Krapyak'
          ]
        ]);
    }
}
