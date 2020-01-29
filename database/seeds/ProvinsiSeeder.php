<?php

use App\Models\Provinsi;
use Illuminate\Database\Seeder;

class ProvinsiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Provinsi::truncate();
        Provinsi::insert([
        	[
               'id' => '1',
               'nama' => 'Nanggroe Aceh Darussalam'
            ],
            [
               'id' => '2',
               'nama' => 'Sumatera Utara'
            ],
            [
               'id' => '3',
               'nama' => 'Sumatera Barat'
            ],
            [
               'id' => '4',
               'nama' => 'Riau'
            ],
            [
               'id' => '5',
               'nama' => 'Kepulauan Riau'
            ],
            [
               'id' => '6',
               'nama' => 'Jambi'
            ],
            [
               'id' => '7',
               'nama' => 'Bengkulu'
            ],
            [
               'id' => '8',
               'nama' => 'Sumatera Selatan'
            ],
            [
               'id' => '9',
               'nama' => 'Kepulauan Bangka Belitung'
            ],
            [
               'id' => '10',
               'nama' => 'Lampung'
            ],
            [
               'id' => '11',
               'nama' => 'Banten'
            ],
            [
               'id' => '12',
               'nama' => 'DKI Jakarta'
            ],
            [
               'id' => '13',
               'nama' => 'Jawa Barat'
            ],
            [
               'id' => '14',
               'nama' => 'Jawa Tengah'
            ],
            [
               'id' => '15',
               'nama' => 'DI Yogyakarta'
            ],
            [
               'id' => '16',
               'nama' => 'Jawa Timur'
            ],
            [
               'id' => '17',
               'nama' => 'Bali'
            ],
            [
               'id' => '18',
               'nama' => 'Nusa Tenggara Barat'
            ],
            [
               'id' => '19',
               'nama' => 'Nusa Tenggara Timur'
            ],
            [
               'id' => '20',
               'nama' => 'Kalimantan Barat'
            ],
            [
               'id' => '21',
               'nama' => 'Kalimantan Selatan'
            ],
            [
               'id' => '22',
               'nama' => 'Kalimantan Tengah'
            ],
            [
               'id' => '23',
               'nama' => 'Kalimantan Timur'
            ],
            [
               'id' => '24',
               'nama' => 'Kalimantan Utara'
            ],
            [
               'id' => '25',
               'nama' => 'Gorontalo'
            ],
            [
               'id' => '26',
               'nama' => 'Sulawesi Barat'
            ],
            [
               'id' => '27',
               'nama' => 'Sulawesi Selatan'
            ],
            [
               'id' => '28',
               'nama' => 'Sulawesi Tenggara'
            ],
            [
               'id' => '29',
               'nama' => 'Sulawesi Tengah'
            ],
            [
               'id' => '30',
               'nama' => 'Sulawesi Utara'
            ],
            [
               'id' => '31',
               'nama' => 'Maluku'
            ],
            [
               'id' => '32',
               'nama' => 'Maluku Utara'
            ],
            [
               'id' => '33',
               'nama' => 'Papua'
            ],
            [
               'id' => '34',
               'nama' => 'Papua Barat'
            ],
        ]);
    }
}
