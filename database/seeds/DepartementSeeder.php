<?php

use Illuminate\Database\Seeder;
use App\Models\Departement;

class DepartementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Departement::truncate();
        Departement::insert([
            [
                'name' => 'Mudir Am',
            ],
            [
                'name' => 'Mudir Akademik',
            ],
            [
                'name' => 'Kepala Sekolah SMA/SMP',
            ],
            [
                'name' => 'Logistik',
            ],
            [
                'name' => 'Guru Dayah/Maintenance',
            ],
            [
                'name' => 'Bendahara',
            ],
            [
                'name' => 'Ka TU',
            ],
            [
                'name' => 'Ka Kesantrian Putra',
            ],
            [
                'name' => 'Kesantrian Putra',
            ],
            [
                'name' => 'Kesantrian Putri',
            ],
            [
                'name' => 'Anggota Kesantrian',
            ],

            [
                'name' => 'Ka Perpustakaan',
            ],
            [
                'name' => 'Guru Tahfidh',
            ],
            [
                'name' => 'Guru Tahfidh',
            ],
            [
                'name' => 'Guru Dayah',
            ],
            [
                'name' => 'Guru Sekolah',
            ],
            [
                'name' => 'Kepala Sekolah PAUD/SD',
            ],
            [
                'name' => 'Guru PAUD',
            ],
            [
                'name' => 'Guru TPA',
            ],
            [
                'name' => 'Guru SD/TPA',
            ],
            [
                'name' => 'Driver',
            ],
            [
                'name' => 'Juru Masak',
            ],
            [
                'name' => 'Humas',
            ],
            [
                'name' => 'Security',
            ],
        ]);
    }
}
