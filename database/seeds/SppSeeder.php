<?php

use Illuminate\Database\Seeder;
use App\Models\Spp;

class SppSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Spp::truncate();
        Spp::insert([
            [
                'name' => 'Mampu',
                'total' => 2000000,
                'users_id' => 1
            ],
            [
                'name' => 'Tidak Mampu',
                'total' => 1500000,
                'users_id' => 1
            ]
        ]);
    }
}
