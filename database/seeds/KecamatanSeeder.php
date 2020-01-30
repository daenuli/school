<?php

use Illuminate\Database\Seeder;
use App\Models\Kecamatan;

class KecamatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Kecamatan::truncate();
        Kecamatan::insert([
            [
                'id' => '1101010',
                'kabupaten_id' => '1101',
                'nama' => 'Teupah Selatan'
            ],
            [
                'id' => '1101020',
                'kabupaten_id' => '1101',
                'nama' => 'Simeulue Timur'
            ],
            [
                'id' => '1101021',
                'kabupaten_id' => '1101',
                'nama' => 'Teupah Barat'
            ],
            [
                'id' => '1101022',
                'kabupaten_id' => '1101',
                'nama' => 'Teupah Tengah'
            ],
            [
                'id' => '1101030',
                'kabupaten_id' => '1101',
                'nama' => 'Simeulue Tengah'
            ],
            [
                'id' => '1101031',
                'kabupaten_id' => '1101',
                'nama' => 'Teluk Dalam'
            ],
            [
                'id' => '1101032',
                'kabupaten_id' => '1101',
                'nama' => 'Simeulue Cut'
            ],
            [
                'id' => '1101040',
                'kabupaten_id' => '1101',
                'nama' => 'Salang'
            ],
            [
                'id' => '1101050',
                'kabupaten_id' => '1101',
                'nama' => 'Simeulue Barat'
            ],
            [
                'id' => '1101051',
                'kabupaten_id' => '1101',
                'nama' => 'Alafan'
            ],
            [
                'id' => '1102010',
                'kabupaten_id' => '1102',
                'nama' => 'Pulau Banyak'
            ],
            [
                'id' => '1102011',
                'kabupaten_id' => '1102',
                'nama' => 'Pulau Banyak Barat'
            ],
            [
                'id' => '1102020',
                'kabupaten_id' => '1102',
                'nama' => 'Singkil'
            ],
            [
                'id' => '1102021',
                'kabupaten_id' => '1102',
                'nama' => 'Singkil Utara'
            ],
            [
                'id' => '1102022',
                'kabupaten_id' => '1102',
                'nama' => 'Kuala Baru'
            ],
            [
                'id' => '1102030',
                'kabupaten_id' => '1102',
                'nama' => 'Simpang Kanan'
            ],
            [
                'id' => '1102031',
                'kabupaten_id' => '1102',
                'nama' => 'Gunung Meriah'
            ],
            [
                'id' => '1102032',
                'kabupaten_id' => '1102',
                'nama' => 'Danau Paris'
            ],
            [
                'id' => '1102033',
                'kabupaten_id' => '1102',
                'nama' => 'Suro'
            ],
            [
                'id' => '1102042',
                'kabupaten_id' => '1102',
                'nama' => 'Singkohor'
            ],
            [
                'id' => '1102043',
                'kabupaten_id' => '1102',
                'nama' => 'Kota Baharu'
            ],
            [
                'id' => '1103010',
                'kabupaten_id' => '1103',
                'nama' => 'Trumon'
            ],
            [
                'id' => '1103011',
                'kabupaten_id' => '1103',
                'nama' => 'Trumon Timur'
            ],
            [
                'id' => '1103012',
                'kabupaten_id' => '1103',
                'nama' => 'Trumon Tengah'
            ],
            [
                'id' => '1103020',
                'kabupaten_id' => '1103',
                'nama' => 'Bakongan'
            ],
            [
                'id' => '1103021',
                'kabupaten_id' => '1103',
                'nama' => 'Bakongan Timur'
            ],
            [
                'id' => '1103022',
                'kabupaten_id' => '1103',
                'nama' => 'Kota Bahagia'
            ],
            [
                'id' => '1103030',
                'kabupaten_id' => '1103',
                'nama' => 'Kluet Selatan'
            ],
            [
                'id' => '1103031',
                'kabupaten_id' => '1103',
                'nama' => 'Kluet Timur'
            ],
            [
                'id' => '1103040',
                'kabupaten_id' => '1103',
                'nama' => 'Kluet Utara'
            ],
            [
                'id' => '1103041',
                'kabupaten_id' => '1103',
                'nama' => 'Pasie Raja'
            ],
            [
                'id' => '1103042',
                'kabupaten_id' => '1103',
                'nama' => 'Kluet Tengah'
            ],
            [
                'id' => '1103050',
                'kabupaten_id' => '1103',
                'nama' => 'Tapak Tuan'
            ],
            [
                'id' => '1103060',
                'kabupaten_id' => '1103',
                'nama' => 'Sama Dua'
            ],
            [
                'id' => '1103070',
                'kabupaten_id' => '1103',
                'nama' => 'Sawang'
            ],
            [
                'id' => '1103080',
                'kabupaten_id' => '1103',
                'nama' => 'Meukek'
            ],
            [
                'id' => '1103090',
                'kabupaten_id' => '1103',
                'nama' => 'Labuhan Haji'
            ],
            [
                'id' => '1103091',
                'kabupaten_id' => '1103',
                'nama' => 'Labuhan Haji Timur'
            ],
            [
                'id' => '1103092',
                'kabupaten_id' => '1103',
                'nama' => 'Labuhan Haji Barat'
            ],
            [
                'id' => '1104010',
                'kabupaten_id' => '1104',
                'nama' => 'Lawe Alas'
            ],
            [
                'id' => '1104011',
                'kabupaten_id' => '1104',
                'nama' => 'Babul Rahmad'
            ],
            [
                'id' => '1104012',
                'kabupaten_id' => '1104',
                'nama' => 'Tanoh Alas'
            ],
            [
                'id' => '1104020',
                'kabupaten_id' => '1104',
                'nama' => 'Lawe Sigala-gala'
            ],
            [
                'id' => '1104021',
                'kabupaten_id' => '1104',
                'nama' => 'Babul Makmur'
            ],
            [
                'id' => '1104022',
                'kabupaten_id' => '1104',
                'nama' => 'Semadam'
            ],
            [
                'id' => '1104023',
                'kabupaten_id' => '1104',
                'nama' => 'Lauser'
            ],
            [
                'id' => '1104030',
                'kabupaten_id' => '1104',
                'nama' => 'Bambel'
            ],
            [
                'id' => '1104031',
                'kabupaten_id' => '1104',
                'nama' => 'Bukit Tusam'
            ],
            [
                'id' => '1104032',
                'kabupaten_id' => '1104',
                'nama' => 'Lawe Sumur'
            ],
            [
                'id' => '1104040',
                'kabupaten_id' => '1104',
                'nama' => 'Babussalam'
            ],
            [
                'id' => '1104041',
                'kabupaten_id' => '1104',
                'nama' => 'Lawe Bulan'
            ],
            [
                'id' => '1104050',
                'kabupaten_id' => '1104',
                'nama' => 'Badar'
            ],
            [
                'id' => '1104051',
                'kabupaten_id' => '1104',
                'nama' => 'Darul Hasanah'
            ],
            [
                'id' => '1104052',
                'kabupaten_id' => '1104',
                'nama' => 'Ketambe'
            ],
            [
                'id' => '1104053',
                'kabupaten_id' => '1104',
                'nama' => 'Deleng Pokhkisen'
            ],
            [
                'id' => '1105080',
                'kabupaten_id' => '1105',
                'nama' => 'Serba Jadi'
            ],
            [
                'id' => '1105081',
                'kabupaten_id' => '1105',
                'nama' => 'Simpang Jernih'
            ],
            [
                'id' => '1105082',
                'kabupaten_id' => '1105',
                'nama' => 'Peunaron'
            ],
            [
                'id' => '1105090',
                'kabupaten_id' => '1105',
                'nama' => 'Birem Bayeun'
            ],
            [
                'id' => '1105100',
                'kabupaten_id' => '1105',
                'nama' => 'Rantau Selamat'
            ],
            [
                'id' => '1105101',
                'kabupaten_id' => '1105',
                'nama' => 'Sungai Raya'
            ],
            [
                'id' => '1105110',
                'kabupaten_id' => '1105',
                'nama' => 'Peureulak'
            ],
            [
                'id' => '1105111',
                'kabupaten_id' => '1105',
                'nama' => 'Peureulak Timur'
            ],
            [
                'id' => '1105112',
                'kabupaten_id' => '1105',
                'nama' => 'Peureulak Barat'
            ],
            [
                'id' => '1105120',
                'kabupaten_id' => '1105',
                'nama' => 'Ranto Peureulak'
            ],
            [
                'id' => '1105130',
                'kabupaten_id' => '1105',
                'nama' => 'Idi Rayeuk'
            ],
            [
                'id' => '1105131',
                'kabupaten_id' => '1105',
                'nama' => 'Peudawa'
            ],
            [
                'id' => '1105132',
                'kabupaten_id' => '1105',
                'nama' => 'Banda Alam'
            ],
            [
                'id' => '1105133',
                'kabupaten_id' => '1105',
                'nama' => 'Idi Tunong'
            ],
            [
                'id' => '1105134',
                'kabupaten_id' => '1105',
                'nama' => 'Darul Ihsan'
            ],
            [
                'id' => '1105135',
                'kabupaten_id' => '1105',
                'nama' => 'Idi Timur'
            ],
            [
                'id' => '1105140',
                'kabupaten_id' => '1105',
                'nama' => 'Darul Aman'
            ],
            [
                'id' => '1105150',
                'kabupaten_id' => '1105',
                'nama' => 'Nurussalam'
            ],
            [
                'id' => '1105151',
                'kabupaten_id' => '1105',
                'nama' => 'Darul Falah'
            ],
            [
                'id' => '1105160',
                'kabupaten_id' => '1105',
                'nama' => 'Julok'
            ],
            [
                'id' => '1105161',
                'kabupaten_id' => '1105',
                'nama' => 'Indra Makmur'
            ],
            [
                'id' => '1105170',
                'kabupaten_id' => '1105',
                'nama' => 'Pante Bidari'
            ],
            [
                'id' => '1105180',
                'kabupaten_id' => '1105',
                'nama' => 'Simpang Ulim'
            ],
            [
                'id' => '1105181',
                'kabupaten_id' => '1105',
                'nama' => 'Madat'
            ],
            [
                'id' => '1106010',
                'kabupaten_id' => '1106',
                'nama' => 'Linge'
            ],
            [
                'id' => '1106011',
                'kabupaten_id' => '1106',
                'nama' => 'Atu Lintang'
            ],
            [
                'id' => '1106012',
                'kabupaten_id' => '1106',
                'nama' => 'Jagong Jeget'
            ],
            [
                'id' => '1106020',
                'kabupaten_id' => '1106',
                'nama' => 'Bintang'
            ],
            [
                'id' => '1106031',
                'kabupaten_id' => '1106',
                'nama' => 'Lut Tawar'
            ],
            [
                'id' => '1106032',
                'kabupaten_id' => '1106',
                'nama' => 'Kebayakan'
            ],
            [
                'id' => '1106040',
                'kabupaten_id' => '1106',
                'nama' => 'Pegasing'
            ],
            [
                'id' => '1106041',
                'kabupaten_id' => '1106',
                'nama' => 'Bies'
            ],
            [
                'id' => '1106050',
                'kabupaten_id' => '1106',
                'nama' => 'Bebesen'
            ],
            [
                'id' => '1106051',
                'kabupaten_id' => '1106',
                'nama' => 'Kute Panang'
            ],
            [
                'id' => '1106060',
                'kabupaten_id' => '1106',
                'nama' => 'Silih Nara'
            ],
            [
                'id' => '1106061',
                'kabupaten_id' => '1106',
                'nama' => 'Ketol'
            ],
            [
                'id' => '1106062',
                'kabupaten_id' => '1106',
                'nama' => 'Celala'
            ],
            [
                'id' => '1106063',
                'kabupaten_id' => '1106',
                'nama' => 'Rusip Antara'
            ],
            [
                'id' => '1107050',
                'kabupaten_id' => '1107',
                'nama' => 'Johan Pahlawan'
            ],
            [
                'id' => '1107060',
                'kabupaten_id' => '1107',
                'nama' => 'Samatiga'
            ],
            [
                'id' => '1107061',
                'kabupaten_id' => '1107',
                'nama' => 'Bubon'
            ],
            [
                'id' => '1107062',
                'kabupaten_id' => '1107',
                'nama' => 'Arongan Lambalek'
            ],
            [
                'id' => '1107070',
                'kabupaten_id' => '1107',
                'nama' => 'Woyla'
            ],
            [
                'id' => '1107071',
                'kabupaten_id' => '1107',
                'nama' => 'Woyla Barat'
            ],
            [
                'id' => '1107072',
                'kabupaten_id' => '1107',
                'nama' => 'Woyla Timur'
            ],
            [
                'id' => '1107080',
                'kabupaten_id' => '1107',
                'nama' => 'Kaway Xvi'
            ],
            [
                'id' => '1107081',
                'kabupaten_id' => '1107',
                'nama' => 'Meureubo'
            ],
            [
                'id' => '1107082',
                'kabupaten_id' => '1107',
                'nama' => 'Pantai Ceuremen'
            ],
            [
                'id' => '1107083',
                'kabupaten_id' => '1107',
                'nama' => 'Panton Reu'
            ],
            [
                'id' => '1107090',
                'kabupaten_id' => '1107',
                'nama' => 'Sungai Mas'
            ],
            [
                'id' => '1108010',
                'kabupaten_id' => '1108',
                'nama' => 'Lhoong'
            ],
            [
                'id' => '1108020',
                'kabupaten_id' => '1108',
                'nama' => 'Lhoknga'
            ],
            [
                'id' => '1108021',
                'kabupaten_id' => '1108',
                'nama' => 'Leupung'
            ],
            [
                'id' => '1108030',
                'kabupaten_id' => '1108',
                'nama' => 'Indrapuri'
            ],
            [
                'id' => '1108031',
                'kabupaten_id' => '1108',
                'nama' => 'Kuta Cot Glie'
            ],
            [
                'id' => '1108040',
                'kabupaten_id' => '1108',
                'nama' => 'Seulimeum'
            ],
            [
                'id' => '1108041',
                'kabupaten_id' => '1108',
                'nama' => 'Kota Jantho'
            ],
            [
                'id' => '1108042',
                'kabupaten_id' => '1108',
                'nama' => 'Lembah Seulawah'
            ],
            [
                'id' => '1108050',
                'kabupaten_id' => '1108',
                'nama' => 'Mesjid Raya'
            ],
            [
                'id' => '1108060',
                'kabupaten_id' => '1108',
                'nama' => 'Darussalam'
            ],
            [
                'id' => '1108061',
                'kabupaten_id' => '1108',
                'nama' => 'Baitussalam'
            ],
            [
                'id' => '1108070',
                'kabupaten_id' => '1108',
                'nama' => 'Kuta Baro'
            ],
            [
                'id' => '1108080',
                'kabupaten_id' => '1108',
                'nama' => 'Montasik'
            ],
            [
                'id' => '1108081',
                'kabupaten_id' => '1108',
                'nama' => 'Blang Bintang'
            ],
            [
                'id' => '1108090',
                'kabupaten_id' => '1108',
                'nama' => 'Ingin Jaya'
            ],
            [
                'id' => '1108091',
                'kabupaten_id' => '1108',
                'nama' => 'Krueng Barona Jaya'
            ],
            [
                'id' => '1108100',
                'kabupaten_id' => '1108',
                'nama' => 'Suka Makmur'
            ],
            [
                'id' => '1108101',
                'kabupaten_id' => '1108',
                'nama' => 'Kuta Malaka'
            ],
            [
                'id' => '1108102',
                'kabupaten_id' => '1108',
                'nama' => 'Simpang Tiga'
            ],
            [
                'id' => '1108110',
                'kabupaten_id' => '1108',
                'nama' => 'Darul Imarah'
            ],
            [
                'id' => '1108111',
                'kabupaten_id' => '1108',
                'nama' => 'Darul Kamal'
            ],
            [
                'id' => '1108120',
                'kabupaten_id' => '1108',
                'nama' => 'Peukan Bada'
            ],
            [
                'id' => '1108130',
                'kabupaten_id' => '1108',
                'nama' => 'Pulo Aceh'
            ],
            [
                'id' => '1109010',
                'kabupaten_id' => '1109',
                'nama' => 'Geumpang'
            ],
            [
                'id' => '1109011',
                'kabupaten_id' => '1109',
                'nama' => 'Mane'
            ],
            [
                'id' => '1109070',
                'kabupaten_id' => '1109',
                'nama' => 'Glumpang Tiga'
            ],
            [
                'id' => '1109071',
                'kabupaten_id' => '1109',
                'nama' => 'Glumpang Baro'
            ],
            [
                'id' => '1109080',
                'kabupaten_id' => '1109',
                'nama' => 'Mutiara'
            ],
            [
                'id' => '1109081',
                'kabupaten_id' => '1109',
                'nama' => 'Mutiara Timur'
            ],
            [
                'id' => '1109090',
                'kabupaten_id' => '1109',
                'nama' => 'Tiro/truseb'
            ],
            [
                'id' => '1109100',
                'kabupaten_id' => '1109',
                'nama' => 'Tangse'
            ],
            [
                'id' => '1109111',
                'kabupaten_id' => '1109',
                'nama' => 'Keumala'
            ],
            [
                'id' => '1109112',
                'kabupaten_id' => '1109',
                'nama' => 'Titeue'
            ],
            [
                'id' => '1109120',
                'kabupaten_id' => '1109',
                'nama' => 'Sakti'
            ],
            [
                'id' => '1109130',
                'kabupaten_id' => '1109',
                'nama' => 'Mila'
            ],
            [
                'id' => '1109140',
                'kabupaten_id' => '1109',
                'nama' => 'Padang Tiji'
            ],
            [
                'id' => '1109150',
                'kabupaten_id' => '1109',
                'nama' => 'Delima'
            ],
            [
                'id' => '1109151',
                'kabupaten_id' => '1109',
                'nama' => 'Grong Grong'
            ],
            [
                'id' => '1109160',
                'kabupaten_id' => '1109',
                'nama' => 'Indrajaya'
            ],
            [
                'id' => '1109170',
                'kabupaten_id' => '1109',
                'nama' => 'Peukan Baro'
            ],
            [
                'id' => '1109180',
                'kabupaten_id' => '1109',
                'nama' => 'Kembang Tanjong'
            ],
            [
                'id' => '1109190',
                'kabupaten_id' => '1109',
                'nama' => 'Simpang Tiga'
            ],
            [
                'id' => '1109200',
                'kabupaten_id' => '1109',
                'nama' => 'Kota Sigli'
            ],
            [
                'id' => '1109210',
                'kabupaten_id' => '1109',
                'nama' => 'Pidie'
            ],
            [
                'id' => '1109220',
                'kabupaten_id' => '1109',
                'nama' => 'Batee'
            ],
            [
                'id' => '1109230',
                'kabupaten_id' => '1109',
                'nama' => 'Muara Tiga'
            ],
            [
                'id' => '1110010',
                'kabupaten_id' => '1110',
                'nama' => 'Samalanga'
            ],
            [
                'id' => '1110011',
                'kabupaten_id' => '1110',
                'nama' => 'Simpang Mamplam'
            ],
            [
                'id' => '1110020',
                'kabupaten_id' => '1110',
                'nama' => 'Pandrah'
            ],
            [
                'id' => '1110030',
                'kabupaten_id' => '1110',
                'nama' => 'Jeunieb'
            ],
            [
                'id' => '1110031',
                'kabupaten_id' => '1110',
                'nama' => 'Peulimbang'
            ],
            [
                'id' => '1110040',
                'kabupaten_id' => '1110',
                'nama' => 'Peudada'
            ],
            [
                'id' => '1110050',
                'kabupaten_id' => '1110',
                'nama' => 'Juli'
            ],
            [
                'id' => '1110060',
                'kabupaten_id' => '1110',
                'nama' => 'Jeumpa'
            ],
            [
                'id' => '1110061',
                'kabupaten_id' => '1110',
                'nama' => 'Kota Juang'
            ],
            [
                'id' => '1110062',
                'kabupaten_id' => '1110',
                'nama' => 'Kuala'
            ],
            [
                'id' => '1110070',
                'kabupaten_id' => '1110',
                'nama' => 'Jangka'
            ],
            [
                'id' => '1110080',
                'kabupaten_id' => '1110',
                'nama' => 'Peusangan'
            ],
            [
                'id' => '1110081',
                'kabupaten_id' => '1110',
                'nama' => 'Peusangan Selatan'
            ],
            [
                'id' => '1110082',
                'kabupaten_id' => '1110',
                'nama' => 'Peusangan Siblah Krueng'
            ],
            [
                'id' => '1110090',
                'kabupaten_id' => '1110',
                'nama' => 'Makmur'
            ],
            [
                'id' => '1110100',
                'kabupaten_id' => '1110',
                'nama' => 'Ganda Pura'
            ],
            [
                'id' => '1110101',
                'kabupaten_id' => '1110',
                'nama' => 'Kuta Blang'
            ],
            [
                'id' => '1111010',
                'kabupaten_id' => '1111',
                'nama' => 'Sawang'
            ],
            [
                'id' => '1111020',
                'kabupaten_id' => '1111',
                'nama' => 'Nisam'
            ],
            [
                'id' => '1111021',
                'kabupaten_id' => '1111',
                'nama' => 'Nisam Antara'
            ],
            [
                'id' => '1111022',
                'kabupaten_id' => '1111',
                'nama' => 'Banda Baro'
            ],
            [
                'id' => '1111030',
                'kabupaten_id' => '1111',
                'nama' => 'Kuta Makmur'
            ],
            [
                'id' => '1111031',
                'kabupaten_id' => '1111',
                'nama' => 'Simpang Keramat'
            ],
            [
                'id' => '1111040',
                'kabupaten_id' => '1111',
                'nama' => 'Syamtalira Bayu'
            ],
            [
                'id' => '1111041',
                'kabupaten_id' => '1111',
                'nama' => 'Geureudong Pase'
            ],
            [
                'id' => '1111050',
                'kabupaten_id' => '1111',
                'nama' => 'Meurah Mulia'
            ],
            [
                'id' => '1111060',
                'kabupaten_id' => '1111',
                'nama' => 'Matangkuli'
            ],
            [
                'id' => '1111061',
                'kabupaten_id' => '1111',
                'nama' => 'Paya Bakong'
            ],
            [
                'id' => '1111062',
                'kabupaten_id' => '1111',
                'nama' => 'Pirak Timu'
            ],
            [
                'id' => '1111070',
                'kabupaten_id' => '1111',
                'nama' => 'Cot Girek'
            ],
            [
                'id' => '1111080',
                'kabupaten_id' => '1111',
                'nama' => 'Tanah Jambo Aye'
            ],
            [
                'id' => '1111081',
                'kabupaten_id' => '1111',
                'nama' => 'Langkahan'
            ],
            [
                'id' => '1111090',
                'kabupaten_id' => '1111',
                'nama' => 'Seunudon'
            ],
            [
                'id' => '1111100',
                'kabupaten_id' => '1111',
                'nama' => 'Baktiya'
            ],
            [
                'id' => '1111101',
                'kabupaten_id' => '1111',
                'nama' => 'Baktiya Barat'
            ],
            [
                'id' => '1111110',
                'kabupaten_id' => '1111',
                'nama' => 'Lhoksukon'
            ],
            [
                'id' => '1111120',
                'kabupaten_id' => '1111',
                'nama' => 'Tanah Luas'
            ],
            [
                'id' => '1111121',
                'kabupaten_id' => '1111',
                'nama' => 'Nibong'
            ],
            [
                'id' => '1111130',
                'kabupaten_id' => '1111',
                'nama' => 'Samudera'
            ],
            [
                'id' => '1111140',
                'kabupaten_id' => '1111',
                'nama' => 'Syamtalira Aron'
            ],
            [
                'id' => '1111150',
                'kabupaten_id' => '1111',
                'nama' => 'Tanah Pasir'
            ],
            [
                'id' => '1111151',
                'kabupaten_id' => '1111',
                'nama' => 'Lapang'
            ],
            [
                'id' => '1111160',
                'kabupaten_id' => '1111',
                'nama' => 'Muara Batu'
            ],
            [
                'id' => '1111170',
                'kabupaten_id' => '1111',
                'nama' => 'Dewantara'
            ],
            [
                'id' => '1112010',
                'kabupaten_id' => '1112',
                'nama' => 'Manggeng'
            ],
            [
                'id' => '1112011',
                'kabupaten_id' => '1112',
                'nama' => 'Lembah Sabil'
            ],
            [
                'id' => '1112020',
                'kabupaten_id' => '1112',
                'nama' => 'Tangan-tangan'
            ],
            [
                'id' => '1112021',
                'kabupaten_id' => '1112',
                'nama' => 'Setia'
            ],
            [
                'id' => '1112030',
                'kabupaten_id' => '1112',
                'nama' => 'Blang Pidie'
            ],
            [
                'id' => '1112031',
                'kabupaten_id' => '1112',
                'nama' => 'Jeumpa'
            ],
            [
                'id' => '1112040',
                'kabupaten_id' => '1112',
                'nama' => 'Susoh'
            ],
            [
                'id' => '1112050',
                'kabupaten_id' => '1112',
                'nama' => 'Kuala Batee'
            ],
            [
                'id' => '1112060',
                'kabupaten_id' => '1112',
                'nama' => 'Babah Rot'
            ],
            [
                'id' => '1113010',
                'kabupaten_id' => '1113',
                'nama' => 'Kuta Panjang'
            ],
            [
                'id' => '1113011',
                'kabupaten_id' => '1113',
                'nama' => 'Blang Jerango'
            ],
            [
                'id' => '1113020',
                'kabupaten_id' => '1113',
                'nama' => 'Blangkejeren'
            ],
            [
                'id' => '1113021',
                'kabupaten_id' => '1113',
                'nama' => 'Putri Betung'
            ],
            [
                'id' => '1113022',
                'kabupaten_id' => '1113',
                'nama' => 'Dabun Gelang'
            ],
            [
                'id' => '1113023',
                'kabupaten_id' => '1113',
                'nama' => 'Blang Pegayon'
            ],
            [
                'id' => '1113030',
                'kabupaten_id' => '1113',
                'nama' => 'Pining'
            ],
            [
                'id' => '1113040',
                'kabupaten_id' => '1113',
                'nama' => 'Rikit Gaib'
            ],
            [
                'id' => '1113041',
                'kabupaten_id' => '1113',
                'nama' => 'Pantan Cuaca'
            ],
            [
                'id' => '1113050',
                'kabupaten_id' => '1113',
                'nama' => 'Terangun'
            ],
            [
                'id' => '1113051',
                'kabupaten_id' => '1113',
                'nama' => 'Tripe Jaya'
            ],
            [
                'id' => '1114010',
                'kabupaten_id' => '1114',
                'nama' => 'Tamiang Hulu'
            ],
            [
                'id' => '1114011',
                'kabupaten_id' => '1114',
                'nama' => 'Bandar Pusaka'
            ],
            [
                'id' => '1114020',
                'kabupaten_id' => '1114',
                'nama' => 'Kejuruan Muda'
            ],
            [
                'id' => '1114021',
                'kabupaten_id' => '1114',
                'nama' => 'Tenggulun'
            ],
            [
                'id' => '1114030',
                'kabupaten_id' => '1114',
                'nama' => 'Rantau'
            ],
            [
                'id' => '1114040',
                'kabupaten_id' => '1114',
                'nama' => 'Kota Kuala Simpang'
            ],
            [
                'id' => '1114050',
                'kabupaten_id' => '1114',
                'nama' => 'Seruway'
            ],
            [
                'id' => '1114060',
                'kabupaten_id' => '1114',
                'nama' => 'Bendahara'
            ],
            [
                'id' => '1114061',
                'kabupaten_id' => '1114',
                'nama' => 'Banda Mulia'
            ],
            [
                'id' => '1114070',
                'kabupaten_id' => '1114',
                'nama' => 'Karang Baru'
            ],
            [
                'id' => '1114071',
                'kabupaten_id' => '1114',
                'nama' => 'Sekerak'
            ],
            [
                'id' => '1114080',
                'kabupaten_id' => '1114',
                'nama' => 'Manyak Payed'
            ],
            [
                'id' => '1115010',
                'kabupaten_id' => '1115',
                'nama' => 'Darul Makmur'
            ],
            [
                'id' => '1115011',
                'kabupaten_id' => '1115',
                'nama' => 'Tripa Makmur'
            ],
            [
                'id' => '1115020',
                'kabupaten_id' => '1115',
                'nama' => 'Kuala'
            ],
            [
                'id' => '1115021',
                'kabupaten_id' => '1115',
                'nama' => 'Kuala Pesisir'
            ],
            [
                'id' => '1115022',
                'kabupaten_id' => '1115',
                'nama' => 'Tadu Raya'
            ],
            [
                'id' => '1115030',
                'kabupaten_id' => '1115',
                'nama' => 'Beutong'
            ],
            [
                'id' => '1115031',
                'kabupaten_id' => '1115',
                'nama' => 'Beutong Ateuh Banggalang'
            ],
            [
                'id' => '1115040',
                'kabupaten_id' => '1115',
                'nama' => 'Seunagan'
            ],
            [
                'id' => '1115041',
                'kabupaten_id' => '1115',
                'nama' => 'Suka Makmue'
            ],
            [
                'id' => '1115050',
                'kabupaten_id' => '1115',
                'nama' => 'Seunagan Timur'
            ],
            [
                'id' => '1116010',
                'kabupaten_id' => '1116',
                'nama' => 'Teunom'
            ],
            [
                'id' => '1116011',
                'kabupaten_id' => '1116',
                'nama' => 'Pasie Raya'
            ],
            [
                'id' => '1116020',
                'kabupaten_id' => '1116',
                'nama' => 'Panga'
            ],
            [
                'id' => '1116030',
                'kabupaten_id' => '1116',
                'nama' => 'Krueng Sabee'
            ],
            [
                'id' => '1116040',
                'kabupaten_id' => '1116',
                'nama' => 'Setia Bakti'
            ],
            [
                'id' => '1116050',
                'kabupaten_id' => '1116',
                'nama' => 'Sampoiniet'
            ],
            [
                'id' => '1116051',
                'kabupaten_id' => '1116',
                'nama' => 'Darul Hikmah'
            ],
            [
                'id' => '1116060',
                'kabupaten_id' => '1116',
                'nama' => 'Jaya'
            ],
            [
                'id' => '1116061',
                'kabupaten_id' => '1116',
                'nama' => 'Indra Jaya'
            ],
            [
                'id' => '1117010',
                'kabupaten_id' => '1117',
                'nama' => 'Timang Gajah'
            ],
            [
                'id' => '1117011',
                'kabupaten_id' => '1117',
                'nama' => 'Gajah Putih'
            ],
            [
                'id' => '1117020',
                'kabupaten_id' => '1117',
                'nama' => 'Pintu Rime Gayo'
            ],
            [
                'id' => '1117030',
                'kabupaten_id' => '1117',
                'nama' => 'Bukit'
            ],
            [
                'id' => '1117040',
                'kabupaten_id' => '1117',
                'nama' => 'Wih Pesam'
            ],
            [
                'id' => '1117050',
                'kabupaten_id' => '1117',
                'nama' => 'Bandar'
            ],
            [
                'id' => '1117051',
                'kabupaten_id' => '1117',
                'nama' => 'Bener Kelipah'
            ],
            [
                'id' => '1117060',
                'kabupaten_id' => '1117',
                'nama' => 'Syiah Utama'
            ],
            [
                'id' => '1117061',
                'kabupaten_id' => '1117',
                'nama' => 'Mesidah'
            ],
            [
                'id' => '1117070',
                'kabupaten_id' => '1117',
                'nama' => 'Permata'
            ],
            [
                'id' => '1118010',
                'kabupaten_id' => '1118',
                'nama' => 'Meureudu'
            ],
            [
                'id' => '1118020',
                'kabupaten_id' => '1118',
                'nama' => 'Meurah Dua'
            ],
            [
                'id' => '1118030',
                'kabupaten_id' => '1118',
                'nama' => 'Bandar Dua'
            ],
            [
                'id' => '1118040',
                'kabupaten_id' => '1118',
                'nama' => 'Jangka Buya'
            ],
            [
                'id' => '1118050',
                'kabupaten_id' => '1118',
                'nama' => 'Ulim'
            ],
            [
                'id' => '1118060',
                'kabupaten_id' => '1118',
                'nama' => 'Trienggadeng'
            ],
            [
                'id' => '1118070',
                'kabupaten_id' => '1118',
                'nama' => 'Panteraja'
            ],
            [
                'id' => '1118080',
                'kabupaten_id' => '1118',
                'nama' => 'Bandar Baru'
            ],
            [
                'id' => '1171010',
                'kabupaten_id' => '1171',
                'nama' => 'Meuraxa'
            ],
            [
                'id' => '1171011',
                'kabupaten_id' => '1171',
                'nama' => 'Jaya Baru'
            ],
            [
                'id' => '1171012',
                'kabupaten_id' => '1171',
                'nama' => 'Banda Raya'
            ],
            [
                'id' => '1171020',
                'kabupaten_id' => '1171',
                'nama' => 'Baiturrahman'
            ],
            [
                'id' => '1171021',
                'kabupaten_id' => '1171',
                'nama' => 'Lueng Bata'
            ],
            [
                'id' => '1171030',
                'kabupaten_id' => '1171',
                'nama' => 'Kuta Alam'
            ],
            [
                'id' => '1171031',
                'kabupaten_id' => '1171',
                'nama' => 'Kuta Raja'
            ],
            [
                'id' => '1171040',
                'kabupaten_id' => '1171',
                'nama' => 'Syiah Kuala'
            ],
            [
                'id' => '1171041',
                'kabupaten_id' => '1171',
                'nama' => 'Ulee Kareng'
            ],
            [
                'id' => '1172010',
                'kabupaten_id' => '1172',
                'nama' => 'Sukajaya'
            ],
            [
                'id' => '1172020',
                'kabupaten_id' => '1172',
                'nama' => 'Sukakarya'
            ],
            [
                'id' => '1173010',
                'kabupaten_id' => '1173',
                'nama' => 'Langsa Timur'
            ],
            [
                'id' => '1173011',
                'kabupaten_id' => '1173',
                'nama' => 'Langsa Lama'
            ],
            [
                'id' => '1173020',
                'kabupaten_id' => '1173',
                'nama' => 'Langsa Barat'
            ],
            [
                'id' => '1173021',
                'kabupaten_id' => '1173',
                'nama' => 'Langsa Baro'
            ],
            [
                'id' => '1173030',
                'kabupaten_id' => '1173',
                'nama' => 'Langsa Kota'
            ],
            [
                'id' => '1174010',
                'kabupaten_id' => '1174',
                'nama' => 'Blang Mangat'
            ],
            [
                'id' => '1174020',
                'kabupaten_id' => '1174',
                'nama' => 'Muara Dua'
            ],
            [
                'id' => '1174021',
                'kabupaten_id' => '1174',
                'nama' => 'Muara Satu'
            ],
            [
                'id' => '1174030',
                'kabupaten_id' => '1174',
                'nama' => 'Banda Sakti'
            ],
            [
                'id' => '1175010',
                'kabupaten_id' => '1175',
                'nama' => 'Simpang Kiri'
            ],
            [
                'id' => '1175020',
                'kabupaten_id' => '1175',
                'nama' => 'Penanggalan'
            ],
            [
                'id' => '1175030',
                'kabupaten_id' => '1175',
                'nama' => 'Rundeng'
            ],
            [
                'id' => '1175040',
                'kabupaten_id' => '1175',
                'nama' => 'Sultan Daulat'
            ],
            [
                'id' => '1175050',
                'kabupaten_id' => '1175',
                'nama' => 'Longkib'
            ],
            [
                'id' => '1201060',
                'kabupaten_id' => '1201',
                'nama' => 'Idano Gawo'
            ],
            [
                'id' => '1201061',
                'kabupaten_id' => '1201',
                'nama' => 'Bawolato'
            ],
            [
                'id' => '1201062',
                'kabupaten_id' => '1201',
                'nama' => 'Ulugawo'
            ],
            [
                'id' => '1201070',
                'kabupaten_id' => '1201',
                'nama' => 'Gido'
            ],
            [
                'id' => '1201081',
                'kabupaten_id' => '1201',
                'nama' => 'Ma U'
            ],
            [
                'id' => '1201082',
                'kabupaten_id' => '1201',
                'nama' => 'Somolo - Molo'
            ],
            [
                'id' => '1201130',
                'kabupaten_id' => '1201',
                'nama' => 'Hiliduho'
            ],
            [
                'id' => '1201131',
                'kabupaten_id' => '1201',
                'nama' => 'Hili Serangkai'
            ],
            [
                'id' => '1201132',
                'kabupaten_id' => '1201',
                'nama' => 'Botomuzoi'
            ],
            [
                'id' => '1202010',
                'kabupaten_id' => '1202',
                'nama' => 'Batahan'
            ],
            [
                'id' => '1202011',
                'kabupaten_id' => '1202',
                'nama' => 'Sinunukan'
            ],
            [
                'id' => '1202020',
                'kabupaten_id' => '1202',
                'nama' => 'Batang Natal'
            ],
            [
                'id' => '1202021',
                'kabupaten_id' => '1202',
                'nama' => 'Lingga Bayu'
            ],
            [
                'id' => '1202022',
                'kabupaten_id' => '1202',
                'nama' => 'Ranto Baek'
            ],
            [
                'id' => '1202030',
                'kabupaten_id' => '1202',
                'nama' => 'Kotanopan'
            ],
            [
                'id' => '1202031',
                'kabupaten_id' => '1202',
                'nama' => 'Ulu Pungkut'
            ],
            [
                'id' => '1202032',
                'kabupaten_id' => '1202',
                'nama' => 'Tambangan'
            ],
            [
                'id' => '1202033',
                'kabupaten_id' => '1202',
                'nama' => 'Lembah Sorik Marapi'
            ],
            [
                'id' => '1202034',
                'kabupaten_id' => '1202',
                'nama' => 'Puncak Sorik Marapi'
            ],
            [
                'id' => '1202040',
                'kabupaten_id' => '1202',
                'nama' => 'Muara Sipongi'
            ],
            [
                'id' => '1202041',
                'kabupaten_id' => '1202',
                'nama' => 'Pakantan'
            ],
            [
                'id' => '1202050',
                'kabupaten_id' => '1202',
                'nama' => 'Panyabungan'
            ],
            [
                'id' => '1202051',
                'kabupaten_id' => '1202',
                'nama' => 'Panyabungan Selatan'
            ],
            [
                'id' => '1202052',
                'kabupaten_id' => '1202',
                'nama' => 'Panyabungan Barat'
            ],
            [
                'id' => '1202053',
                'kabupaten_id' => '1202',
                'nama' => 'Panyabungan Utara'
            ],
            [
                'id' => '1202054',
                'kabupaten_id' => '1202',
                'nama' => 'Panyabungan Timur'
            ],
            [
                'id' => '1202055',
                'kabupaten_id' => '1202',
                'nama' => 'Huta Bargot'
            ],
            [
                'id' => '1202060',
                'kabupaten_id' => '1202',
                'nama' => 'Natal'
            ],
            [
                'id' => '1202070',
                'kabupaten_id' => '1202',
                'nama' => 'Muara Batang Gadis'
            ],
            [
                'id' => '1202080',
                'kabupaten_id' => '1202',
                'nama' => 'Siabu'
            ],
            [
                'id' => '1202081',
                'kabupaten_id' => '1202',
                'nama' => 'Bukit Malintang'
            ],
            [
                'id' => '1202082',
                'kabupaten_id' => '1202',
                'nama' => 'Naga Juang'
            ],
            [
                'id' => '1203010',
                'kabupaten_id' => '1203',
                'nama' => 'Batang Angkola'
            ],
            [
                'id' => '1203011',
                'kabupaten_id' => '1203',
                'nama' => 'Sayur Matinggi'
            ],
            [
                'id' => '1203012',
                'kabupaten_id' => '1203',
                'nama' => 'Tano Tombangan Angkola'
            ],
            [
                'id' => '1203070',
                'kabupaten_id' => '1203',
                'nama' => 'Angkola Timur'
            ],
            [
                'id' => '1203080',
                'kabupaten_id' => '1203',
                'nama' => 'Angkola Selatan'
            ],
            [
                'id' => '1203090',
                'kabupaten_id' => '1203',
                'nama' => 'Angkola  Barat'
            ],
            [
                'id' => '1203091',
                'kabupaten_id' => '1203',
                'nama' => 'Angkola Sangkunur'
            ],
            [
                'id' => '1203100',
                'kabupaten_id' => '1203',
                'nama' => 'Batang Toru'
            ],
            [
                'id' => '1203101',
                'kabupaten_id' => '1203',
                'nama' => 'Marancar'
            ],
            [
                'id' => '1203102',
                'kabupaten_id' => '1203',
                'nama' => 'Muara Batang Toru'
            ],
            [
                'id' => '1203110',
                'kabupaten_id' => '1203',
                'nama' => 'Sipirok'
            ],
            [
                'id' => '1203120',
                'kabupaten_id' => '1203',
                'nama' => 'Arse'
            ],
            [
                'id' => '1203160',
                'kabupaten_id' => '1203',
                'nama' => 'Saipar Dolok Hole'
            ],
            [
                'id' => '1203161',
                'kabupaten_id' => '1203',
                'nama' => 'Aek Bilah'
            ],
            [
                'id' => '1204010',
                'kabupaten_id' => '1204',
                'nama' => 'Pinang Sori'
            ],
            [
                'id' => '1204011',
                'kabupaten_id' => '1204',
                'nama' => 'Badiri'
            ],
            [
                'id' => '1204020',
                'kabupaten_id' => '1204',
                'nama' => 'Sibabangun'
            ],
            [
                'id' => '1204021',
                'kabupaten_id' => '1204',
                'nama' => 'Lumut'
            ],
            [
                'id' => '1204022',
                'kabupaten_id' => '1204',
                'nama' => 'Sukabangun'
            ],
            [
                'id' => '1204030',
                'kabupaten_id' => '1204',
                'nama' => 'Pandan'
            ],
            [
                'id' => '1204031',
                'kabupaten_id' => '1204',
                'nama' => 'Tukka'
            ],
            [
                'id' => '1204032',
                'kabupaten_id' => '1204',
                'nama' => 'Sarudik'
            ],
            [
                'id' => '1204040',
                'kabupaten_id' => '1204',
                'nama' => 'Tapian Nauli'
            ],
            [
                'id' => '1204041',
                'kabupaten_id' => '1204',
                'nama' => 'Sitahuis'
            ],
            [
                'id' => '1204050',
                'kabupaten_id' => '1204',
                'nama' => 'Kolang'
            ],
            [
                'id' => '1204060',
                'kabupaten_id' => '1204',
                'nama' => 'Sorkam'
            ],
            [
                'id' => '1204061',
                'kabupaten_id' => '1204',
                'nama' => 'Sorkam Barat'
            ],
            [
                'id' => '1204062',
                'kabupaten_id' => '1204',
                'nama' => 'Pasaribu Tobing'
            ],
            [
                'id' => '1204070',
                'kabupaten_id' => '1204',
                'nama' => 'Barus'
            ],
            [
                'id' => '1204071',
                'kabupaten_id' => '1204',
                'nama' => 'Sosor Gadong'
            ],
            [
                'id' => '1204072',
                'kabupaten_id' => '1204',
                'nama' => 'Andam Dewi'
            ],
            [
                'id' => '1204073',
                'kabupaten_id' => '1204',
                'nama' => 'Barus Utara'
            ],
            [
                'id' => '1204080',
                'kabupaten_id' => '1204',
                'nama' => 'Manduamas'
            ],
            [
                'id' => '1204081',
                'kabupaten_id' => '1204',
                'nama' => 'Sirandorung'
            ],
            [
                'id' => '1205030',
                'kabupaten_id' => '1205',
                'nama' => 'Parmonangan'
            ],
            [
                'id' => '1205040',
                'kabupaten_id' => '1205',
                'nama' => 'Adian Koting'
            ],
            [
                'id' => '1205050',
                'kabupaten_id' => '1205',
                'nama' => 'Sipoholon'
            ],
            [
                'id' => '1205060',
                'kabupaten_id' => '1205',
                'nama' => 'Tarutung'
            ],
            [
                'id' => '1205061',
                'kabupaten_id' => '1205',
                'nama' => 'Siatas Barita'
            ],
            [
                'id' => '1205070',
                'kabupaten_id' => '1205',
                'nama' => 'Pahae Julu'
            ],
            [
                'id' => '1205080',
                'kabupaten_id' => '1205',
                'nama' => 'Pahae Jae'
            ],
            [
                'id' => '1205081',
                'kabupaten_id' => '1205',
                'nama' => 'Purbatua'
            ],
            [
                'id' => '1205082',
                'kabupaten_id' => '1205',
                'nama' => 'Simangumban'
            ],
            [
                'id' => '1205090',
                'kabupaten_id' => '1205',
                'nama' => 'Pangaribuan'
            ],
            [
                'id' => '1205100',
                'kabupaten_id' => '1205',
                'nama' => 'Garoga'
            ],
            [
                'id' => '1205110',
                'kabupaten_id' => '1205',
                'nama' => 'Sipahutar'
            ],
            [
                'id' => '1205120',
                'kabupaten_id' => '1205',
                'nama' => 'Siborong-borong'
            ],
            [
                'id' => '1205130',
                'kabupaten_id' => '1205',
                'nama' => 'Pagaran'
            ],
            [
                'id' => '1205180',
                'kabupaten_id' => '1205',
                'nama' => 'Muara'
            ],
            [
                'id' => '1206030',
                'kabupaten_id' => '1206',
                'nama' => 'Balige'
            ],
            [
                'id' => '1206031',
                'kabupaten_id' => '1206',
                'nama' => 'Tampahan'
            ],
            [
                'id' => '1206040',
                'kabupaten_id' => '1206',
                'nama' => 'Laguboti'
            ],
            [
                'id' => '1206050',
                'kabupaten_id' => '1206',
                'nama' => 'Habinsaran'
            ],
            [
                'id' => '1206051',
                'kabupaten_id' => '1206',
                'nama' => 'Borbor'
            ],
            [
                'id' => '1206052',
                'kabupaten_id' => '1206',
                'nama' => 'Nassau'
            ],
            [
                'id' => '1206060',
                'kabupaten_id' => '1206',
                'nama' => 'Silaen'
            ],
            [
                'id' => '1206061',
                'kabupaten_id' => '1206',
                'nama' => 'Sigumpar'
            ],
            [
                'id' => '1206070',
                'kabupaten_id' => '1206',
                'nama' => 'Porsea'
            ],
            [
                'id' => '1206071',
                'kabupaten_id' => '1206',
                'nama' => 'Pintu Pohan Meranti'
            ],
            [
                'id' => '1206072',
                'kabupaten_id' => '1206',
                'nama' => 'Siantar Narumonda'
            ],
            [
                'id' => '1206073',
                'kabupaten_id' => '1206',
                'nama' => 'Parmaksian'
            ],
            [
                'id' => '1206080',
                'kabupaten_id' => '1206',
                'nama' => 'Lumban Julu'
            ],
            [
                'id' => '1206081',
                'kabupaten_id' => '1206',
                'nama' => 'Uluan'
            ],
            [
                'id' => '1206082',
                'kabupaten_id' => '1206',
                'nama' => 'Ajibata'
            ],
            [
                'id' => '1206083',
                'kabupaten_id' => '1206',
                'nama' => 'Bonatua Lunasi'
            ],
            [
                'id' => '1207050',
                'kabupaten_id' => '1207',
                'nama' => 'Bilah Hulu'
            ],
            [
                'id' => '1207070',
                'kabupaten_id' => '1207',
                'nama' => 'Pangkatan'
            ],
            [
                'id' => '1207080',
                'kabupaten_id' => '1207',
                'nama' => 'Bilah Barat'
            ],
            [
                'id' => '1207130',
                'kabupaten_id' => '1207',
                'nama' => 'Bilah Hilir'
            ],
            [
                'id' => '1207140',
                'kabupaten_id' => '1207',
                'nama' => 'Panai Hulu'
            ],
            [
                'id' => '1207150',
                'kabupaten_id' => '1207',
                'nama' => 'Panai Tengah'
            ],
            [
                'id' => '1207160',
                'kabupaten_id' => '1207',
                'nama' => 'Panai Hilir'
            ],
            [
                'id' => '1207210',
                'kabupaten_id' => '1207',
                'nama' => 'Rantau Selatan'
            ],
            [
                'id' => '1207220',
                'kabupaten_id' => '1207',
                'nama' => 'Rantau Utara'
            ],
            [
                'id' => '1208010',
                'kabupaten_id' => '1208',
                'nama' => 'Bandar Pasir Mandoge'
            ],
            [
                'id' => '1208020',
                'kabupaten_id' => '1208',
                'nama' => 'Bandar Pulau'
            ],
            [
                'id' => '1208021',
                'kabupaten_id' => '1208',
                'nama' => 'Aek Songsongan'
            ],
            [
                'id' => '1208022',
                'kabupaten_id' => '1208',
                'nama' => 'Rahuning'
            ],
            [
                'id' => '1208030',
                'kabupaten_id' => '1208',
                'nama' => 'Pulau Rakyat'
            ],
            [
                'id' => '1208031',
                'kabupaten_id' => '1208',
                'nama' => 'Aek Kuasan'
            ],
            [
                'id' => '1208032',
                'kabupaten_id' => '1208',
                'nama' => 'Aek Ledong'
            ],
            [
                'id' => '1208040',
                'kabupaten_id' => '1208',
                'nama' => 'Sei Kepayang'
            ],
            [
                'id' => '1208041',
                'kabupaten_id' => '1208',
                'nama' => 'Sei Kepayang Barat'
            ],
            [
                'id' => '1208042',
                'kabupaten_id' => '1208',
                'nama' => 'Sei Kepayang Timur'
            ],
            [
                'id' => '1208050',
                'kabupaten_id' => '1208',
                'nama' => 'Tanjung Balai'
            ],
            [
                'id' => '1208060',
                'kabupaten_id' => '1208',
                'nama' => 'Simpang Empat'
            ],
            [
                'id' => '1208061',
                'kabupaten_id' => '1208',
                'nama' => 'Teluk Dalam'
            ],
            [
                'id' => '1208070',
                'kabupaten_id' => '1208',
                'nama' => 'Air Batu'
            ],
            [
                'id' => '1208071',
                'kabupaten_id' => '1208',
                'nama' => 'Sei Dadap'
            ],
            [
                'id' => '1208080',
                'kabupaten_id' => '1208',
                'nama' => 'Buntu Pane'
            ],
            [
                'id' => '1208081',
                'kabupaten_id' => '1208',
                'nama' => 'Tinggi Raja'
            ],
            [
                'id' => '1208082',
                'kabupaten_id' => '1208',
                'nama' => 'Setia Janji'
            ],
            [
                'id' => '1208090',
                'kabupaten_id' => '1208',
                'nama' => 'Meranti'
            ],
            [
                'id' => '1208091',
                'kabupaten_id' => '1208',
                'nama' => 'Pulo Bandring'
            ],
            [
                'id' => '1208092',
                'kabupaten_id' => '1208',
                'nama' => 'Rawang Panca Arga'
            ],
            [
                'id' => '1208100',
                'kabupaten_id' => '1208',
                'nama' => 'Air Joman'
            ],
            [
                'id' => '1208101',
                'kabupaten_id' => '1208',
                'nama' => 'Silau Laut'
            ],
            [
                'id' => '1208160',
                'kabupaten_id' => '1208',
                'nama' => 'Kisaran Barat'
            ],
            [
                'id' => '1208170',
                'kabupaten_id' => '1208',
                'nama' => 'Kisaran Timur'
            ],
            [
                'id' => '1209010',
                'kabupaten_id' => '1209',
                'nama' => 'Silimakuta'
            ],
            [
                'id' => '1209011',
                'kabupaten_id' => '1209',
                'nama' => 'Pematang Silimahuta'
            ],
            [
                'id' => '1209020',
                'kabupaten_id' => '1209',
                'nama' => 'Purba'
            ],
            [
                'id' => '1209021',
                'kabupaten_id' => '1209',
                'nama' => 'Haranggaol Horison'
            ],
            [
                'id' => '1209030',
                'kabupaten_id' => '1209',
                'nama' => 'Dolok Pardamean'
            ],
            [
                'id' => '1209040',
                'kabupaten_id' => '1209',
                'nama' => 'Sidamanik'
            ],
            [
                'id' => '1209041',
                'kabupaten_id' => '1209',
                'nama' => 'Pematang Sidamanik'
            ],
            [
                'id' => '1209050',
                'kabupaten_id' => '1209',
                'nama' => 'Girsang Sipangan Bolon'
            ],
            [
                'id' => '1209060',
                'kabupaten_id' => '1209',
                'nama' => 'Tanah Jawa'
            ],
            [
                'id' => '1209061',
                'kabupaten_id' => '1209',
                'nama' => 'Hatonduhan'
            ],
            [
                'id' => '1209070',
                'kabupaten_id' => '1209',
                'nama' => 'Dolok Panribuan'
            ],
            [
                'id' => '1209080',
                'kabupaten_id' => '1209',
                'nama' => 'Jorlang Hataran'
            ],
            [
                'id' => '1209090',
                'kabupaten_id' => '1209',
                'nama' => 'Panei'
            ],
            [
                'id' => '1209091',
                'kabupaten_id' => '1209',
                'nama' => 'Panombean Panei'
            ],
            [
                'id' => '1209100',
                'kabupaten_id' => '1209',
                'nama' => 'Raya'
            ],
            [
                'id' => '1209110',
                'kabupaten_id' => '1209',
                'nama' => 'Dolok Silau'
            ],
            [
                'id' => '1209120',
                'kabupaten_id' => '1209',
                'nama' => 'Silau Kahean'
            ],
            [
                'id' => '1209130',
                'kabupaten_id' => '1209',
                'nama' => 'Raya Kahean'
            ],
            [
                'id' => '1209140',
                'kabupaten_id' => '1209',
                'nama' => 'Tapian Dolok'
            ],
            [
                'id' => '1209150',
                'kabupaten_id' => '1209',
                'nama' => 'Dolok Batu Nanggar'
            ],
            [
                'id' => '1209160',
                'kabupaten_id' => '1209',
                'nama' => 'Siantar'
            ],
            [
                'id' => '1209161',
                'kabupaten_id' => '1209',
                'nama' => 'Gunung Malela'
            ],
            [
                'id' => '1209162',
                'kabupaten_id' => '1209',
                'nama' => 'Gunung Maligas'
            ],
            [
                'id' => '1209170',
                'kabupaten_id' => '1209',
                'nama' => 'Hutabayu Raja'
            ],
            [
                'id' => '1209171',
                'kabupaten_id' => '1209',
                'nama' => 'Jawa Maraja Bah Jambi'
            ],
            [
                'id' => '1209180',
                'kabupaten_id' => '1209',
                'nama' => 'Pematang Bandar'
            ],
            [
                'id' => '1209181',
                'kabupaten_id' => '1209',
                'nama' => 'Bandar Huluan'
            ],
            [
                'id' => '1209190',
                'kabupaten_id' => '1209',
                'nama' => 'Bandar'
            ],
            [
                'id' => '1209191',
                'kabupaten_id' => '1209',
                'nama' => 'Bandar Masilam'
            ],
            [
                'id' => '1209200',
                'kabupaten_id' => '1209',
                'nama' => 'Bosar Maligas'
            ],
            [
                'id' => '1209210',
                'kabupaten_id' => '1209',
                'nama' => 'Ujung Padang'
            ],
            [
                'id' => '1210030',
                'kabupaten_id' => '1210',
                'nama' => 'Sidikalang'
            ],
            [
                'id' => '1210031',
                'kabupaten_id' => '1210',
                'nama' => 'Berampu'
            ],
            [
                'id' => '1210032',
                'kabupaten_id' => '1210',
                'nama' => 'Sitinjo'
            ],
            [
                'id' => '1210040',
                'kabupaten_id' => '1210',
                'nama' => 'Parbuluan'
            ],
            [
                'id' => '1210050',
                'kabupaten_id' => '1210',
                'nama' => 'Sumbul'
            ],
            [
                'id' => '1210051',
                'kabupaten_id' => '1210',
                'nama' => 'Silahi Sabungan'
            ],
            [
                'id' => '1210060',
                'kabupaten_id' => '1210',
                'nama' => 'Silima Pungga-pungga'
            ],
            [
                'id' => '1210061',
                'kabupaten_id' => '1210',
                'nama' => 'Lae Parira'
            ],
            [
                'id' => '1210070',
                'kabupaten_id' => '1210',
                'nama' => 'Siempat Nempu'
            ],
            [
                'id' => '1210080',
                'kabupaten_id' => '1210',
                'nama' => 'Siempat Nempu Hulu'
            ],
            [
                'id' => '1210090',
                'kabupaten_id' => '1210',
                'nama' => 'Siempat Nempu Hilir'
            ],
            [
                'id' => '1210100',
                'kabupaten_id' => '1210',
                'nama' => 'Tiga Lingga'
            ],
            [
                'id' => '1210101',
                'kabupaten_id' => '1210',
                'nama' => 'Gunung Sitember'
            ],
            [
                'id' => '1210110',
                'kabupaten_id' => '1210',
                'nama' => 'Pegagan Hilir'
            ],
            [
                'id' => '1210120',
                'kabupaten_id' => '1210',
                'nama' => 'Tanah Pinem'
            ],
            [
                'id' => '1211010',
                'kabupaten_id' => '1211',
                'nama' => 'Mardingding'
            ],
            [
                'id' => '1211020',
                'kabupaten_id' => '1211',
                'nama' => 'Laubaleng'
            ],
            [
                'id' => '1211030',
                'kabupaten_id' => '1211',
                'nama' => 'Tiga Binanga'
            ],
            [
                'id' => '1211040',
                'kabupaten_id' => '1211',
                'nama' => 'Juhar'
            ],
            [
                'id' => '1211050',
                'kabupaten_id' => '1211',
                'nama' => 'Munte'
            ],
            [
                'id' => '1211060',
                'kabupaten_id' => '1211',
                'nama' => 'Kuta Buluh'
            ],
            [
                'id' => '1211070',
                'kabupaten_id' => '1211',
                'nama' => 'Payung'
            ],
            [
                'id' => '1211071',
                'kabupaten_id' => '1211',
                'nama' => 'Tiganderket'
            ],
            [
                'id' => '1211080',
                'kabupaten_id' => '1211',
                'nama' => 'Simpang Empat'
            ],
            [
                'id' => '1211081',
                'kabupaten_id' => '1211',
                'nama' => 'Naman Teran'
            ],
            [
                'id' => '1211082',
                'kabupaten_id' => '1211',
                'nama' => 'Merdeka'
            ],
            [
                'id' => '1211090',
                'kabupaten_id' => '1211',
                'nama' => 'Kabanjahe'
            ],
            [
                'id' => '1211100',
                'kabupaten_id' => '1211',
                'nama' => 'Berastagi'
            ],
            [
                'id' => '1211110',
                'kabupaten_id' => '1211',
                'nama' => 'Tigapanah'
            ],
            [
                'id' => '1211111',
                'kabupaten_id' => '1211',
                'nama' => 'Dolat Rayat'
            ],
            [
                'id' => '1211120',
                'kabupaten_id' => '1211',
                'nama' => 'Merek'
            ],
            [
                'id' => '1211130',
                'kabupaten_id' => '1211',
                'nama' => 'Barusjahe'
            ],
            [
                'id' => '1212010',
                'kabupaten_id' => '1212',
                'nama' => 'Gunung Meriah'
            ],
            [
                'id' => '1212020',
                'kabupaten_id' => '1212',
                'nama' => 'Sinembah Tanjung Muda Hulu'
            ],
            [
                'id' => '1212030',
                'kabupaten_id' => '1212',
                'nama' => 'Sibolangit'
            ],
            [
                'id' => '1212040',
                'kabupaten_id' => '1212',
                'nama' => 'Kutalimbaru'
            ],
            [
                'id' => '1212050',
                'kabupaten_id' => '1212',
                'nama' => 'Pancur Batu'
            ],
            [
                'id' => '1212060',
                'kabupaten_id' => '1212',
                'nama' => 'Namo Rambe'
            ],
            [
                'id' => '1212070',
                'kabupaten_id' => '1212',
                'nama' => 'Biru-biru'
            ],
            [
                'id' => '1212080',
                'kabupaten_id' => '1212',
                'nama' => 'Sinembah Tanjung Muda Hilir'
            ],
            [
                'id' => '1212090',
                'kabupaten_id' => '1212',
                'nama' => 'Bangun Purba'
            ],
            [
                'id' => '1212190',
                'kabupaten_id' => '1212',
                'nama' => 'Galang'
            ],
            [
                'id' => '1212200',
                'kabupaten_id' => '1212',
                'nama' => 'Tanjung Morawa'
            ],
            [
                'id' => '1212210',
                'kabupaten_id' => '1212',
                'nama' => 'Patumbak'
            ],
            [
                'id' => '1212220',
                'kabupaten_id' => '1212',
                'nama' => 'Deli Tua'
            ],
            [
                'id' => '1212230',
                'kabupaten_id' => '1212',
                'nama' => 'Sunggal'
            ],
            [
                'id' => '1212240',
                'kabupaten_id' => '1212',
                'nama' => 'Hamparan Perak'
            ],
            [
                'id' => '1212250',
                'kabupaten_id' => '1212',
                'nama' => 'Labuhan Deli'
            ],
            [
                'id' => '1212260',
                'kabupaten_id' => '1212',
                'nama' => 'Percut Sei Tuan'
            ],
            [
                'id' => '1212270',
                'kabupaten_id' => '1212',
                'nama' => 'Batang Kuis'
            ],
            [
                'id' => '1212280',
                'kabupaten_id' => '1212',
                'nama' => 'Pantai Labu'
            ],
            [
                'id' => '1212290',
                'kabupaten_id' => '1212',
                'nama' => 'Beringin'
            ],
            [
                'id' => '1212300',
                'kabupaten_id' => '1212',
                'nama' => 'Lubuk Pakam'
            ],
            [
                'id' => '1212310',
                'kabupaten_id' => '1212',
                'nama' => 'Pagar Merbau'
            ],
            [
                'id' => '1213010',
                'kabupaten_id' => '1213',
                'nama' => 'Bohorok'
            ],
            [
                'id' => '1213011',
                'kabupaten_id' => '1213',
                'nama' => 'Sirapit'
            ],
            [
                'id' => '1213020',
                'kabupaten_id' => '1213',
                'nama' => 'Salapian'
            ],
            [
                'id' => '1213021',
                'kabupaten_id' => '1213',
                'nama' => 'Kutambaru'
            ],
            [
                'id' => '1213030',
                'kabupaten_id' => '1213',
                'nama' => 'Sei Bingai'
            ],
            [
                'id' => '1213040',
                'kabupaten_id' => '1213',
                'nama' => 'Kuala'
            ],
            [
                'id' => '1213050',
                'kabupaten_id' => '1213',
                'nama' => 'Selesai'
            ],
            [
                'id' => '1213060',
                'kabupaten_id' => '1213',
                'nama' => 'Binjai'
            ],
            [
                'id' => '1213070',
                'kabupaten_id' => '1213',
                'nama' => 'Stabat'
            ],
            [
                'id' => '1213080',
                'kabupaten_id' => '1213',
                'nama' => 'Wampu'
            ],
            [
                'id' => '1213090',
                'kabupaten_id' => '1213',
                'nama' => 'Batang Serangan'
            ],
            [
                'id' => '1213100',
                'kabupaten_id' => '1213',
                'nama' => 'Sawit Seberang'
            ],
            [
                'id' => '1213110',
                'kabupaten_id' => '1213',
                'nama' => 'Padang Tualang'
            ],
            [
                'id' => '1213120',
                'kabupaten_id' => '1213',
                'nama' => 'Hinai'
            ],
            [
                'id' => '1213130',
                'kabupaten_id' => '1213',
                'nama' => 'Secanggang'
            ],
            [
                'id' => '1213140',
                'kabupaten_id' => '1213',
                'nama' => 'Tanjung Pura'
            ],
            [
                'id' => '1213150',
                'kabupaten_id' => '1213',
                'nama' => 'Gebang'
            ],
            [
                'id' => '1213160',
                'kabupaten_id' => '1213',
                'nama' => 'Babalan'
            ],
            [
                'id' => '1213170',
                'kabupaten_id' => '1213',
                'nama' => 'Sei Lepan'
            ],
            [
                'id' => '1213180',
                'kabupaten_id' => '1213',
                'nama' => 'Brandan Barat'
            ],
            [
                'id' => '1213190',
                'kabupaten_id' => '1213',
                'nama' => 'Besitang'
            ],
            [
                'id' => '1213200',
                'kabupaten_id' => '1213',
                'nama' => 'Pangkalan Susu'
            ],
            [
                'id' => '1213201',
                'kabupaten_id' => '1213',
                'nama' => 'Pematang Jaya'
            ],
            [
                'id' => '1214010',
                'kabupaten_id' => '1214',
                'nama' => 'Hibala'
            ],
            [
                'id' => '1214020',
                'kabupaten_id' => '1214',
                'nama' => 'Pulau-pulau Batu'
            ],
            [
                'id' => '1214021',
                'kabupaten_id' => '1214',
                'nama' => 'Pulau-pulau Batu Timur'
            ],
            [
                'id' => '1214030',
                'kabupaten_id' => '1214',
                'nama' => 'Teluk Dalam'
            ],
            [
                'id' => '1214031',
                'kabupaten_id' => '1214',
                'nama' => 'Fanayama'
            ],
            [
                'id' => '1214032',
                'kabupaten_id' => '1214',
                'nama' => 'Toma'
            ],
            [
                'id' => '1214033',
                'kabupaten_id' => '1214',
                'nama' => 'Maniamolo'
            ],
            [
                'id' => '1214034',
                'kabupaten_id' => '1214',
                'nama' => 'Mazino'
            ],
            [
                'id' => '1214040',
                'kabupaten_id' => '1214',
                'nama' => 'Amandraya'
            ],
            [
                'id' => '1214041',
                'kabupaten_id' => '1214',
                'nama' => 'Aramo'
            ],
            [
                'id' => '1214050',
                'kabupaten_id' => '1214',
                'nama' => 'Lahusa'
            ],
            [
                'id' => '1214060',
                'kabupaten_id' => '1214',
                'nama' => 'Gomo'
            ],
            [
                'id' => '1214061',
                'kabupaten_id' => '1214',
                'nama' => 'Susua'
            ],
            [
                'id' => '1214062',
                'kabupaten_id' => '1214',
                'nama' => 'Mazo'
            ],
            [
                'id' => '1214063',
                'kabupaten_id' => '1214',
                'nama' => 'Umbunasi'
            ],
            [
                'id' => '1214070',
                'kabupaten_id' => '1214',
                'nama' => 'Lolomatua'
            ],
            [
                'id' => '1214080',
                'kabupaten_id' => '1214',
                'nama' => 'Lolowa\'u'
            ],
            [
                'id' => '1214081',
                'kabupaten_id' => '1214',
                'nama' => 'Hilimegai'
            ],
            [
                'id' => '1215010',
                'kabupaten_id' => '1215',
                'nama' => 'Pakkat'
            ],
            [
                'id' => '1215020',
                'kabupaten_id' => '1215',
                'nama' => 'Onan Ganjang'
            ],
            [
                'id' => '1215030',
                'kabupaten_id' => '1215',
                'nama' => 'Sijama Polang'
            ],
            [
                'id' => '1215040',
                'kabupaten_id' => '1215',
                'nama' => 'Dolok Sanggul'
            ],
            [
                'id' => '1215050',
                'kabupaten_id' => '1215',
                'nama' => 'Lintong Nihuta'
            ],
            [
                'id' => '1215060',
                'kabupaten_id' => '1215',
                'nama' => 'Paranginan'
            ],
            [
                'id' => '1215070',
                'kabupaten_id' => '1215',
                'nama' => 'Bakti Raja'
            ],
            [
                'id' => '1215080',
                'kabupaten_id' => '1215',
                'nama' => 'Pollung'
            ],
            [
                'id' => '1215090',
                'kabupaten_id' => '1215',
                'nama' => 'Parlilitan'
            ],
            [
                'id' => '1215100',
                'kabupaten_id' => '1215',
                'nama' => 'Tara Bintang'
            ],
            [
                'id' => '1216010',
                'kabupaten_id' => '1216',
                'nama' => 'Salak'
            ],
            [
                'id' => '1216011',
                'kabupaten_id' => '1216',
                'nama' => 'Sitellu Tali Urang Jehe'
            ],
            [
                'id' => '1216012',
                'kabupaten_id' => '1216',
                'nama' => 'Pagindar'
            ],
            [
                'id' => '1216013',
                'kabupaten_id' => '1216',
                'nama' => 'Sitellu Tali Urang Julu'
            ],
            [
                'id' => '1216014',
                'kabupaten_id' => '1216',
                'nama' => 'Pergetteng-getteng Sengkut'
            ],
            [
                'id' => '1216020',
                'kabupaten_id' => '1216',
                'nama' => 'Kerajaan'
            ],
            [
                'id' => '1216021',
                'kabupaten_id' => '1216',
                'nama' => 'Tinada'
            ],
            [
                'id' => '1216022',
                'kabupaten_id' => '1216',
                'nama' => 'Siempat Rube'
            ],
            [
                'id' => '1217010',
                'kabupaten_id' => '1217',
                'nama' => 'Sianjur Mula Mula'
            ],
            [
                'id' => '1217020',
                'kabupaten_id' => '1217',
                'nama' => 'Harian'
            ],
            [
                'id' => '1217030',
                'kabupaten_id' => '1217',
                'nama' => 'Sitio-tio'
            ],
            [
                'id' => '1217040',
                'kabupaten_id' => '1217',
                'nama' => 'Onan Runggu'
            ],
            [
                'id' => '1217050',
                'kabupaten_id' => '1217',
                'nama' => 'Nainggolan'
            ],
            [
                'id' => '1217060',
                'kabupaten_id' => '1217',
                'nama' => 'Palipi'
            ],
            [
                'id' => '1217070',
                'kabupaten_id' => '1217',
                'nama' => 'Ronggur Nihuta'
            ],
            [
                'id' => '1217080',
                'kabupaten_id' => '1217',
                'nama' => 'Pangururan'
            ],
            [
                'id' => '1217090',
                'kabupaten_id' => '1217',
                'nama' => 'Simanindo'
            ],
            [
                'id' => '1218010',
                'kabupaten_id' => '1218',
                'nama' => 'Kotarih'
            ],
            [
                'id' => '1218011',
                'kabupaten_id' => '1218',
                'nama' => 'Silinda'
            ],
            [
                'id' => '1218012',
                'kabupaten_id' => '1218',
                'nama' => 'Bintang Bayu'
            ],
            [
                'id' => '1218020',
                'kabupaten_id' => '1218',
                'nama' => 'Dolok Masihul'
            ],
            [
                'id' => '1218021',
                'kabupaten_id' => '1218',
                'nama' => 'Serbajadi'
            ],
            [
                'id' => '1218030',
                'kabupaten_id' => '1218',
                'nama' => 'Sipispis'
            ],
            [
                'id' => '1218040',
                'kabupaten_id' => '1218',
                'nama' => 'Dolok Merawan'
            ],
            [
                'id' => '1218050',
                'kabupaten_id' => '1218',
                'nama' => 'Tebingtinggi'
            ],
            [
                'id' => '1218051',
                'kabupaten_id' => '1218',
                'nama' => 'Tebing Syahbandar'
            ],
            [
                'id' => '1218060',
                'kabupaten_id' => '1218',
                'nama' => 'Bandar Khalipah'
            ],
            [
                'id' => '1218070',
                'kabupaten_id' => '1218',
                'nama' => 'Tanjung Beringin'
            ],
            [
                'id' => '1218080',
                'kabupaten_id' => '1218',
                'nama' => 'Sei Rampah'
            ],
            [
                'id' => '1218081',
                'kabupaten_id' => '1218',
                'nama' => 'Sei Bamban'
            ],
            [
                'id' => '1218090',
                'kabupaten_id' => '1218',
                'nama' => 'Teluk Mengkudu'
            ],
            [
                'id' => '1218100',
                'kabupaten_id' => '1218',
                'nama' => 'Perbaungan'
            ],
            [
                'id' => '1218101',
                'kabupaten_id' => '1218',
                'nama' => 'Pegajahan'
            ],
            [
                'id' => '1218110',
                'kabupaten_id' => '1218',
                'nama' => 'Pantai Cermin'
            ],
            [
                'id' => '1219010',
                'kabupaten_id' => '1219',
                'nama' => 'Sei Balai'
            ],
            [
                'id' => '1219020',
                'kabupaten_id' => '1219',
                'nama' => 'Tanjung Tiram'
            ],
            [
                'id' => '1219030',
                'kabupaten_id' => '1219',
                'nama' => 'Talawi'
            ],
            [
                'id' => '1219040',
                'kabupaten_id' => '1219',
                'nama' => 'Limapuluh'
            ],
            [
                'id' => '1219050',
                'kabupaten_id' => '1219',
                'nama' => 'Air Putih'
            ],
            [
                'id' => '1219060',
                'kabupaten_id' => '1219',
                'nama' => 'Sei Suka'
            ],
            [
                'id' => '1219070',
                'kabupaten_id' => '1219',
                'nama' => 'Medang Deras'
            ],
            [
                'id' => '1220010',
                'kabupaten_id' => '1220',
                'nama' => 'Batang Onang'
            ],
            [
                'id' => '1220020',
                'kabupaten_id' => '1220',
                'nama' => 'Padang Bolak Julu'
            ],
            [
                'id' => '1220030',
                'kabupaten_id' => '1220',
                'nama' => 'Portibi'
            ],
            [
                'id' => '1220040',
                'kabupaten_id' => '1220',
                'nama' => 'Padang Bolak'
            ],
            [
                'id' => '1220050',
                'kabupaten_id' => '1220',
                'nama' => 'Simangambat'
            ],
            [
                'id' => '1220060',
                'kabupaten_id' => '1220',
                'nama' => 'Halongonan'
            ],
            [
                'id' => '1220070',
                'kabupaten_id' => '1220',
                'nama' => 'Dolok'
            ],
            [
                'id' => '1220080',
                'kabupaten_id' => '1220',
                'nama' => 'Dolok Sigompulon'
            ],
            [
                'id' => '1220090',
                'kabupaten_id' => '1220',
                'nama' => 'Hulu Sihapas'
            ],
            [
                'id' => '1221010',
                'kabupaten_id' => '1221',
                'nama' => 'Sosopan'
            ],
            [
                'id' => '1221020',
                'kabupaten_id' => '1221',
                'nama' => 'Ulu Barumun'
            ],
            [
                'id' => '1221030',
                'kabupaten_id' => '1221',
                'nama' => 'Barumun'
            ],
            [
                'id' => '1221031',
                'kabupaten_id' => '1221',
                'nama' => 'Barumun Selatan'
            ],
            [
                'id' => '1221040',
                'kabupaten_id' => '1221',
                'nama' => 'Lubuk Barumun'
            ],
            [
                'id' => '1221050',
                'kabupaten_id' => '1221',
                'nama' => 'Sosa'
            ],
            [
                'id' => '1221060',
                'kabupaten_id' => '1221',
                'nama' => 'Batang Lubu Sutam'
            ],
            [
                'id' => '1221070',
                'kabupaten_id' => '1221',
                'nama' => 'Huta Raja Tinggi'
            ],
            [
                'id' => '1221080',
                'kabupaten_id' => '1221',
                'nama' => 'Huristak'
            ],
            [
                'id' => '1221090',
                'kabupaten_id' => '1221',
                'nama' => 'Barumun Tengah'
            ],
            [
                'id' => '1221091',
                'kabupaten_id' => '1221',
                'nama' => 'Aek Nabara Barumun'
            ],
            [
                'id' => '1221092',
                'kabupaten_id' => '1221',
                'nama' => 'Sihapas Barumun'
            ],
            [
                'id' => '1222010',
                'kabupaten_id' => '1222',
                'nama' => 'Sungai Kanan'
            ],
            [
                'id' => '1222020',
                'kabupaten_id' => '1222',
                'nama' => 'Torgamba'
            ],
            [
                'id' => '1222030',
                'kabupaten_id' => '1222',
                'nama' => 'Kota Pinang'
            ],
            [
                'id' => '1222040',
                'kabupaten_id' => '1222',
                'nama' => 'Silangkitang'
            ],
            [
                'id' => '1222050',
                'kabupaten_id' => '1222',
                'nama' => 'Kampung Rakyat'
            ],
            [
                'id' => '1223010',
                'kabupaten_id' => '1223',
                'nama' => 'Na Ix-x'
            ],
            [
                'id' => '1223020',
                'kabupaten_id' => '1223',
                'nama' => 'Marbau'
            ],
            [
                'id' => '1223030',
                'kabupaten_id' => '1223',
                'nama' => 'Aek Kuo'
            ],
            [
                'id' => '1223040',
                'kabupaten_id' => '1223',
                'nama' => 'Aek Natas'
            ],
            [
                'id' => '1223050',
                'kabupaten_id' => '1223',
                'nama' => 'Kualuh Selatan'
            ],
            [
                'id' => '1223060',
                'kabupaten_id' => '1223',
                'nama' => 'Kualuh Hilir'
            ],
            [
                'id' => '1223070',
                'kabupaten_id' => '1223',
                'nama' => 'Kualuh Hulu'
            ],
            [
                'id' => '1223080',
                'kabupaten_id' => '1223',
                'nama' => 'Kualuh Leidong'
            ],
            [
                'id' => '1224010',
                'kabupaten_id' => '1224',
                'nama' => 'Tugala Oyo'
            ],
            [
                'id' => '1224020',
                'kabupaten_id' => '1224',
                'nama' => 'Alasa'
            ],
            [
                'id' => '1224030',
                'kabupaten_id' => '1224',
                'nama' => 'Alasa Talu Muzoi'
            ],
            [
                'id' => '1224040',
                'kabupaten_id' => '1224',
                'nama' => 'Namohalu Esiwa'
            ],
            [
                'id' => '1224050',
                'kabupaten_id' => '1224',
                'nama' => 'Sitolu Ori'
            ],
            [
                'id' => '1224060',
                'kabupaten_id' => '1224',
                'nama' => 'Tuhemberua'
            ],
            [
                'id' => '1224070',
                'kabupaten_id' => '1224',
                'nama' => 'Sawo'
            ],
            [
                'id' => '1224080',
                'kabupaten_id' => '1224',
                'nama' => 'Lotu'
            ],
            [
                'id' => '1224090',
                'kabupaten_id' => '1224',
                'nama' => 'Lahewa Timur'
            ],
            [
                'id' => '1224100',
                'kabupaten_id' => '1224',
                'nama' => 'Afulu'
            ],
            [
                'id' => '1224110',
                'kabupaten_id' => '1224',
                'nama' => 'Lahewa'
            ],
            [
                'id' => '1225010',
                'kabupaten_id' => '1225',
                'nama' => 'Sirombu'
            ],
            [
                'id' => '1225020',
                'kabupaten_id' => '1225',
                'nama' => 'Lahomi'
            ],
            [
                'id' => '1225030',
                'kabupaten_id' => '1225',
                'nama' => 'Ulu Moro O'
            ],
            [
                'id' => '1225040',
                'kabupaten_id' => '1225',
                'nama' => 'Lolofitu Moi'
            ],
            [
                'id' => '1225050',
                'kabupaten_id' => '1225',
                'nama' => 'Mandrehe Utara'
            ],
            [
                'id' => '1225060',
                'kabupaten_id' => '1225',
                'nama' => 'Mandrehe'
            ],
            [
                'id' => '1225070',
                'kabupaten_id' => '1225',
                'nama' => 'Mandrehe Barat'
            ],
            [
                'id' => '1225080',
                'kabupaten_id' => '1225',
                'nama' => 'Moro O'
            ],
            [
                'id' => '1271010',
                'kabupaten_id' => '1271',
                'nama' => 'Sibolga Utara'
            ],
            [
                'id' => '1271020',
                'kabupaten_id' => '1271',
                'nama' => 'Sibolga Kota'
            ],
            [
                'id' => '1271030',
                'kabupaten_id' => '1271',
                'nama' => 'Sibolga Selatan'
            ],
            [
                'id' => '1271031',
                'kabupaten_id' => '1271',
                'nama' => 'Sibolga Sambas'
            ],
            [
                'id' => '1272010',
                'kabupaten_id' => '1272',
                'nama' => 'Datuk Bandar'
            ],
            [
                'id' => '1272011',
                'kabupaten_id' => '1272',
                'nama' => 'Datuk Bandar Timur'
            ],
            [
                'id' => '1272020',
                'kabupaten_id' => '1272',
                'nama' => 'Tanjung Balai Selatan'
            ],
            [
                'id' => '1272030',
                'kabupaten_id' => '1272',
                'nama' => 'Tanjung Balai Utara'
            ],
            [
                'id' => '1272040',
                'kabupaten_id' => '1272',
                'nama' => 'Sei Tualang Raso'
            ],
            [
                'id' => '1272050',
                'kabupaten_id' => '1272',
                'nama' => 'Teluk Nibung'
            ],
            [
                'id' => '1273010',
                'kabupaten_id' => '1273',
                'nama' => 'Siantar Marihat'
            ],
            [
                'id' => '1273011',
                'kabupaten_id' => '1273',
                'nama' => 'Siantar Marimbun'
            ],
            [
                'id' => '1273020',
                'kabupaten_id' => '1273',
                'nama' => 'Siantar Selatan'
            ],
            [
                'id' => '1273030',
                'kabupaten_id' => '1273',
                'nama' => 'Siantar Barat'
            ],
            [
                'id' => '1273040',
                'kabupaten_id' => '1273',
                'nama' => 'Siantar Utara'
            ],
            [
                'id' => '1273050',
                'kabupaten_id' => '1273',
                'nama' => 'Siantar Timur'
            ],
            [
                'id' => '1273060',
                'kabupaten_id' => '1273',
                'nama' => 'Siantar Martoba'
            ],
            [
                'id' => '1273061',
                'kabupaten_id' => '1273',
                'nama' => 'Siantar Sitalasari'
            ],
            [
                'id' => '1274010',
                'kabupaten_id' => '1274',
                'nama' => 'Padang Hulu'
            ],
            [
                'id' => '1274011',
                'kabupaten_id' => '1274',
                'nama' => 'Tebing Tinggi Kota'
            ],
            [
                'id' => '1274020',
                'kabupaten_id' => '1274',
                'nama' => 'Rambutan'
            ],
            [
                'id' => '1274021',
                'kabupaten_id' => '1274',
                'nama' => 'Bajenis'
            ],
            [
                'id' => '1274030',
                'kabupaten_id' => '1274',
                'nama' => 'Padang Hilir'
            ],
            [
                'id' => '1275010',
                'kabupaten_id' => '1275',
                'nama' => 'Medan Tuntungan'
            ],
            [
                'id' => '1275020',
                'kabupaten_id' => '1275',
                'nama' => 'Medan Johor'
            ],
            [
                'id' => '1275030',
                'kabupaten_id' => '1275',
                'nama' => 'Medan Amplas'
            ],
            [
                'id' => '1275040',
                'kabupaten_id' => '1275',
                'nama' => 'Medan Denai'
            ],
            [
                'id' => '1275050',
                'kabupaten_id' => '1275',
                'nama' => 'Medan Area'
            ],
            [
                'id' => '1275060',
                'kabupaten_id' => '1275',
                'nama' => 'Medan Kota'
            ],
            [
                'id' => '1275070',
                'kabupaten_id' => '1275',
                'nama' => 'Medan Maimun'
            ],
            [
                'id' => '1275080',
                'kabupaten_id' => '1275',
                'nama' => 'Medan Polonia'
            ],
            [
                'id' => '1275090',
                'kabupaten_id' => '1275',
                'nama' => 'Medan Baru'
            ],
            [
                'id' => '1275100',
                'kabupaten_id' => '1275',
                'nama' => 'Medan Selayang'
            ],
            [
                'id' => '1275110',
                'kabupaten_id' => '1275',
                'nama' => 'Medan Sunggal'
            ],
            [
                'id' => '1275120',
                'kabupaten_id' => '1275',
                'nama' => 'Medan Helvetia'
            ],
            [
                'id' => '1275130',
                'kabupaten_id' => '1275',
                'nama' => 'Medan Petisah'
            ],
            [
                'id' => '1275140',
                'kabupaten_id' => '1275',
                'nama' => 'Medan Barat'
            ],
            [
                'id' => '1275150',
                'kabupaten_id' => '1275',
                'nama' => 'Medan Timur'
            ],
            [
                'id' => '1275160',
                'kabupaten_id' => '1275',
                'nama' => 'Medan Perjuangan'
            ],
            [
                'id' => '1275170',
                'kabupaten_id' => '1275',
                'nama' => 'Medan Tembung'
            ],
            [
                'id' => '1275180',
                'kabupaten_id' => '1275',
                'nama' => 'Medan Deli'
            ],
            [
                'id' => '1275190',
                'kabupaten_id' => '1275',
                'nama' => 'Medan Labuhan'
            ],
            [
                'id' => '1275200',
                'kabupaten_id' => '1275',
                'nama' => 'Medan Marelan'
            ],
            [
                'id' => '1275210',
                'kabupaten_id' => '1275',
                'nama' => 'Medan Belawan'
            ],
            [
                'id' => '1276010',
                'kabupaten_id' => '1276',
                'nama' => 'Binjai Selatan'
            ],
            [
                'id' => '1276020',
                'kabupaten_id' => '1276',
                'nama' => 'Binjai Kota'
            ],
            [
                'id' => '1276030',
                'kabupaten_id' => '1276',
                'nama' => 'Binjai Timur'
            ],
            [
                'id' => '1276040',
                'kabupaten_id' => '1276',
                'nama' => 'Binjai Utara'
            ],
            [
                'id' => '1276050',
                'kabupaten_id' => '1276',
                'nama' => 'Binjai Barat'
            ],
            [
                'id' => '1277010',
                'kabupaten_id' => '1277',
                'nama' => 'Padangsidimpuan Tenggara'
            ],
            [
                'id' => '1277020',
                'kabupaten_id' => '1277',
                'nama' => 'Padangsidimpuan Selatan'
            ],
            [
                'id' => '1277030',
                'kabupaten_id' => '1277',
                'nama' => 'Padangsidimpuan Batunadua'
            ],
            [
                'id' => '1277040',
                'kabupaten_id' => '1277',
                'nama' => 'Padangsidimpuan Utara'
            ],
            [
                'id' => '1277050',
                'kabupaten_id' => '1277',
                'nama' => 'Padangsidimpuan Hutaimbaru'
            ],
            [
                'id' => '1277051',
                'kabupaten_id' => '1277',
                'nama' => 'Padangsidimpuan Angkola Julu'
            ],
            [
                'id' => '1278010',
                'kabupaten_id' => '1278',
                'nama' => 'Gunungsitoli Idanoi'
            ],
            [
                'id' => '1278020',
                'kabupaten_id' => '1278',
                'nama' => 'Gunungsitoli Selatan'
            ],
            [
                'id' => '1278030',
                'kabupaten_id' => '1278',
                'nama' => 'Gunungsitoli Barat'
            ],
            [
                'id' => '1278040',
                'kabupaten_id' => '1278',
                'nama' => 'Gunung Sitoli'
            ],
            [
                'id' => '1278050',
                'kabupaten_id' => '1278',
                'nama' => 'Gunungsitoli Alo Oa'
            ],
            [
                'id' => '1278060',
                'kabupaten_id' => '1278',
                'nama' => 'Gunungsitoli Utara'
            ],
            [
                'id' => '1301011',
                'kabupaten_id' => '1301',
                'nama' => 'Pagai Selatan'
            ],
            [
                'id' => '1301012',
                'kabupaten_id' => '1301',
                'nama' => 'Sikakap'
            ],
            [
                'id' => '1301013',
                'kabupaten_id' => '1301',
                'nama' => 'Pagai Utara'
            ],
            [
                'id' => '1301021',
                'kabupaten_id' => '1301',
                'nama' => 'Sipora Selatan'
            ],
            [
                'id' => '1301022',
                'kabupaten_id' => '1301',
                'nama' => 'Sipora Utara'
            ],
            [
                'id' => '1301030',
                'kabupaten_id' => '1301',
                'nama' => 'Siberut Selatan'
            ],
            [
                'id' => '1301031',
                'kabupaten_id' => '1301',
                'nama' => 'Seberut Barat Daya'
            ],
            [
                'id' => '1301032',
                'kabupaten_id' => '1301',
                'nama' => 'Siberut Tengah'
            ],
            [
                'id' => '1301040',
                'kabupaten_id' => '1301',
                'nama' => 'Siberut Utara'
            ],
            [
                'id' => '1301041',
                'kabupaten_id' => '1301',
                'nama' => 'Siberut Barat'
            ],
            [
                'id' => '1302010',
                'kabupaten_id' => '1302',
                'nama' => 'Lunang Silaut'
            ],
            [
                'id' => '1302020',
                'kabupaten_id' => '1302',
                'nama' => 'Basa Ampek Balai Tapan'
            ],
            [
                'id' => '1302030',
                'kabupaten_id' => '1302',
                'nama' => 'Pancung Soal'
            ],
            [
                'id' => '1302040',
                'kabupaten_id' => '1302',
                'nama' => 'Linggo Sari Baganti'
            ],
            [
                'id' => '1302050',
                'kabupaten_id' => '1302',
                'nama' => 'Ranah Pesisir'
            ],
            [
                'id' => '1302060',
                'kabupaten_id' => '1302',
                'nama' => 'Lengayang'
            ],
            [
                'id' => '1302070',
                'kabupaten_id' => '1302',
                'nama' => 'Sutera'
            ],
            [
                'id' => '1302080',
                'kabupaten_id' => '1302',
                'nama' => 'Batang Kapas'
            ],
            [
                'id' => '1302090',
                'kabupaten_id' => '1302',
                'nama' => 'Iv Jurai'
            ],
            [
                'id' => '1302100',
                'kabupaten_id' => '1302',
                'nama' => 'Bayang'
            ],
            [
                'id' => '1302101',
                'kabupaten_id' => '1302',
                'nama' => 'Iv  Nagari Bayang Utara'
            ],
            [
                'id' => '1302110',
                'kabupaten_id' => '1302',
                'nama' => 'Koto Xi Tarusan'
            ],
            [
                'id' => '1303040',
                'kabupaten_id' => '1303',
                'nama' => 'Pantai Cermin'
            ],
            [
                'id' => '1303050',
                'kabupaten_id' => '1303',
                'nama' => 'Lembah Gumanti'
            ],
            [
                'id' => '1303051',
                'kabupaten_id' => '1303',
                'nama' => 'Hiliran Gumanti'
            ],
            [
                'id' => '1303060',
                'kabupaten_id' => '1303',
                'nama' => 'Payung Sekaki'
            ],
            [
                'id' => '1303061',
                'kabupaten_id' => '1303',
                'nama' => 'Tigo Lurah'
            ],
            [
                'id' => '1303070',
                'kabupaten_id' => '1303',
                'nama' => 'Lembang Jaya'
            ],
            [
                'id' => '1303071',
                'kabupaten_id' => '1303',
                'nama' => 'Danau Kembar'
            ],
            [
                'id' => '1303080',
                'kabupaten_id' => '1303',
                'nama' => 'Gunung Talang'
            ],
            [
                'id' => '1303090',
                'kabupaten_id' => '1303',
                'nama' => 'Bukit Sundi'
            ],
            [
                'id' => '1303100',
                'kabupaten_id' => '1303',
                'nama' => 'Ix Koto Sungai Lasi'
            ],
            [
                'id' => '1303110',
                'kabupaten_id' => '1303',
                'nama' => 'Kubung'
            ],
            [
                'id' => '1303120',
                'kabupaten_id' => '1303',
                'nama' => 'X Koto Diatas'
            ],
            [
                'id' => '1303130',
                'kabupaten_id' => '1303',
                'nama' => 'X Koto Singkarak'
            ],
            [
                'id' => '1303140',
                'kabupaten_id' => '1303',
                'nama' => 'Junjung Sirih'
            ],
            [
                'id' => '1304050',
                'kabupaten_id' => '1304',
                'nama' => 'Kamang Baru'
            ],
            [
                'id' => '1304060',
                'kabupaten_id' => '1304',
                'nama' => 'Tanjung Gadang'
            ],
            [
                'id' => '1304070',
                'kabupaten_id' => '1304',
                'nama' => 'Sijunjung'
            ],
            [
                'id' => '1304071',
                'kabupaten_id' => '1304',
                'nama' => 'Lubuk Tarok'
            ],
            [
                'id' => '1304080',
                'kabupaten_id' => '1304',
                'nama' => 'Iv Nagari'
            ],
            [
                'id' => '1304090',
                'kabupaten_id' => '1304',
                'nama' => 'Kupitan'
            ],
            [
                'id' => '1304100',
                'kabupaten_id' => '1304',
                'nama' => 'Koto Tujuh'
            ],
            [
                'id' => '1304110',
                'kabupaten_id' => '1304',
                'nama' => 'Sumpur Kudus'
            ],
            [
                'id' => '1305010',
                'kabupaten_id' => '1305',
                'nama' => 'Sepuluh Koto'
            ],
            [
                'id' => '1305020',
                'kabupaten_id' => '1305',
                'nama' => 'Batipuh'
            ],
            [
                'id' => '1305021',
                'kabupaten_id' => '1305',
                'nama' => 'Batipuh Selatan'
            ],
            [
                'id' => '1305030',
                'kabupaten_id' => '1305',
                'nama' => 'Pariangan'
            ],
            [
                'id' => '1305040',
                'kabupaten_id' => '1305',
                'nama' => 'Rambatan'
            ],
            [
                'id' => '1305050',
                'kabupaten_id' => '1305',
                'nama' => 'Lima Kaum'
            ],
            [
                'id' => '1305060',
                'kabupaten_id' => '1305',
                'nama' => 'Tanjung Emas'
            ],
            [
                'id' => '1305070',
                'kabupaten_id' => '1305',
                'nama' => 'Padang Ganting'
            ],
            [
                'id' => '1305080',
                'kabupaten_id' => '1305',
                'nama' => 'Lintau Buo'
            ],
            [
                'id' => '1305081',
                'kabupaten_id' => '1305',
                'nama' => 'Lintau Buo Utara'
            ],
            [
                'id' => '1305090',
                'kabupaten_id' => '1305',
                'nama' => 'Sungayang'
            ],
            [
                'id' => '1305100',
                'kabupaten_id' => '1305',
                'nama' => 'Sungai Tarab'
            ],
            [
                'id' => '1305110',
                'kabupaten_id' => '1305',
                'nama' => 'Salimpaung'
            ],
            [
                'id' => '1305111',
                'kabupaten_id' => '1305',
                'nama' => 'Tanjung Baru'
            ],
            [
                'id' => '1306010',
                'kabupaten_id' => '1306',
                'nama' => 'Batang Anai'
            ],
            [
                'id' => '1306020',
                'kabupaten_id' => '1306',
                'nama' => 'Lubuk Alung'
            ],
            [
                'id' => '1306021',
                'kabupaten_id' => '1306',
                'nama' => 'Sintuk Toboh Gadang'
            ],
            [
                'id' => '1306030',
                'kabupaten_id' => '1306',
                'nama' => 'Ulakan Tapakis'
            ],
            [
                'id' => '1306040',
                'kabupaten_id' => '1306',
                'nama' => 'Nan Sabaris'
            ],
            [
                'id' => '1306050',
                'kabupaten_id' => '1306',
                'nama' => '2 X 11 Enam Lingkung'
            ],
            [
                'id' => '1306051',
                'kabupaten_id' => '1306',
                'nama' => 'Enam Lingkung'
            ],
            [
                'id' => '1306052',
                'kabupaten_id' => '1306',
                'nama' => '2 X 11 Kayu Tanam'
            ],
            [
                'id' => '1306060',
                'kabupaten_id' => '1306',
                'nama' => 'Vii Koto Sungai Sariak'
            ],
            [
                'id' => '1306061',
                'kabupaten_id' => '1306',
                'nama' => 'Patamuan'
            ],
            [
                'id' => '1306062',
                'kabupaten_id' => '1306',
                'nama' => 'Padang Sago'
            ],
            [
                'id' => '1306070',
                'kabupaten_id' => '1306',
                'nama' => 'V Koto Kp Dalam'
            ],
            [
                'id' => '1306071',
                'kabupaten_id' => '1306',
                'nama' => 'V Koto Timur'
            ],
            [
                'id' => '1306080',
                'kabupaten_id' => '1306',
                'nama' => 'Sungai Limau'
            ],
            [
                'id' => '1306081',
                'kabupaten_id' => '1306',
                'nama' => 'Batang Gasan'
            ],
            [
                'id' => '1306090',
                'kabupaten_id' => '1306',
                'nama' => 'Sungai Geringging'
            ],
            [
                'id' => '1306100',
                'kabupaten_id' => '1306',
                'nama' => 'Iv Koto Aur Malintang'
            ],
            [
                'id' => '1307010',
                'kabupaten_id' => '1307',
                'nama' => 'Tanjung Mutiara'
            ],
            [
                'id' => '1307020',
                'kabupaten_id' => '1307',
                'nama' => 'Lubuk Basung'
            ],
            [
                'id' => '1307021',
                'kabupaten_id' => '1307',
                'nama' => 'Ampek Nagari'
            ],
            [
                'id' => '1307030',
                'kabupaten_id' => '1307',
                'nama' => 'Tanjung Raya'
            ],
            [
                'id' => '1307040',
                'kabupaten_id' => '1307',
                'nama' => 'Matur'
            ],
            [
                'id' => '1307050',
                'kabupaten_id' => '1307',
                'nama' => 'Iv Koto'
            ],
            [
                'id' => '1307051',
                'kabupaten_id' => '1307',
                'nama' => 'Malalak'
            ],
            [
                'id' => '1307061',
                'kabupaten_id' => '1307',
                'nama' => 'Banuhampu'
            ],
            [
                'id' => '1307062',
                'kabupaten_id' => '1307',
                'nama' => 'Sungai Pua'
            ],
            [
                'id' => '1307070',
                'kabupaten_id' => '1307',
                'nama' => 'Ampek Angkek'
            ],
            [
                'id' => '1307071',
                'kabupaten_id' => '1307',
                'nama' => 'Canduang'
            ],
            [
                'id' => '1307080',
                'kabupaten_id' => '1307',
                'nama' => 'Baso'
            ],
            [
                'id' => '1307090',
                'kabupaten_id' => '1307',
                'nama' => 'Tilatang Kamang'
            ],
            [
                'id' => '1307091',
                'kabupaten_id' => '1307',
                'nama' => 'Kamang Magek'
            ],
            [
                'id' => '1307100',
                'kabupaten_id' => '1307',
                'nama' => 'Palembayan'
            ],
            [
                'id' => '1307110',
                'kabupaten_id' => '1307',
                'nama' => 'Palupuh'
            ],
            [
                'id' => '1308010',
                'kabupaten_id' => '1308',
                'nama' => 'Payakumbuh'
            ],
            [
                'id' => '1308011',
                'kabupaten_id' => '1308',
                'nama' => 'Akabiluru'
            ],
            [
                'id' => '1308020',
                'kabupaten_id' => '1308',
                'nama' => 'Luak'
            ],
            [
                'id' => '1308021',
                'kabupaten_id' => '1308',
                'nama' => 'Lareh Sago Halaban'
            ],
            [
                'id' => '1308022',
                'kabupaten_id' => '1308',
                'nama' => 'Situjuah Limo Nagari'
            ],
            [
                'id' => '1308030',
                'kabupaten_id' => '1308',
                'nama' => 'Harau'
            ],
            [
                'id' => '1308040',
                'kabupaten_id' => '1308',
                'nama' => 'Guguak'
            ],
            [
                'id' => '1308041',
                'kabupaten_id' => '1308',
                'nama' => 'Mungka'
            ],
            [
                'id' => '1308050',
                'kabupaten_id' => '1308',
                'nama' => 'Suliki'
            ],
            [
                'id' => '1308051',
                'kabupaten_id' => '1308',
                'nama' => 'Bukik Barisan'
            ],
            [
                'id' => '1308060',
                'kabupaten_id' => '1308',
                'nama' => 'Gunuang Omeh'
            ],
            [
                'id' => '1308070',
                'kabupaten_id' => '1308',
                'nama' => 'Kapur Ix'
            ],
            [
                'id' => '1308080',
                'kabupaten_id' => '1308',
                'nama' => 'Pangkalan Koto Baru'
            ],
            [
                'id' => '1309070',
                'kabupaten_id' => '1309',
                'nama' => 'Bonjol'
            ],
            [
                'id' => '1309071',
                'kabupaten_id' => '1309',
                'nama' => 'Tigo Nagari'
            ],
            [
                'id' => '1309072',
                'kabupaten_id' => '1309',
                'nama' => 'Simpang Alahan Mati'
            ],
            [
                'id' => '1309080',
                'kabupaten_id' => '1309',
                'nama' => 'Lubuk Sikaping'
            ],
            [
                'id' => '1309100',
                'kabupaten_id' => '1309',
                'nama' => 'Dua Koto'
            ],
            [
                'id' => '1309110',
                'kabupaten_id' => '1309',
                'nama' => 'Panti'
            ],
            [
                'id' => '1309111',
                'kabupaten_id' => '1309',
                'nama' => 'Padang Gelugur'
            ],
            [
                'id' => '1309121',
                'kabupaten_id' => '1309',
                'nama' => 'Rao'
            ],
            [
                'id' => '1309122',
                'kabupaten_id' => '1309',
                'nama' => 'Mapat Tunggul'
            ],
            [
                'id' => '1309123',
                'kabupaten_id' => '1309',
                'nama' => 'Mapat Tunggul Selatan'
            ],
            [
                'id' => '1309124',
                'kabupaten_id' => '1309',
                'nama' => 'Rao Selatan'
            ],
            [
                'id' => '1309125',
                'kabupaten_id' => '1309',
                'nama' => 'Rao Utara'
            ],
            [
                'id' => '1310010',
                'kabupaten_id' => '1310',
                'nama' => 'Sangir'
            ],
            [
                'id' => '1310020',
                'kabupaten_id' => '1310',
                'nama' => 'Sangir Jujuan'
            ],
            [
                'id' => '1310021',
                'kabupaten_id' => '1310',
                'nama' => 'Sangir Balai Janggo'
            ],
            [
                'id' => '1310030',
                'kabupaten_id' => '1310',
                'nama' => 'Sangir Batang Hari'
            ],
            [
                'id' => '1310040',
                'kabupaten_id' => '1310',
                'nama' => 'Sungai Pagu'
            ],
            [
                'id' => '1310041',
                'kabupaten_id' => '1310',
                'nama' => 'Pauah Duo'
            ],
            [
                'id' => '1310050',
                'kabupaten_id' => '1310',
                'nama' => 'Koto Parik Gadang Diateh'
            ],
            [
                'id' => '1311010',
                'kabupaten_id' => '1311',
                'nama' => 'Sungai Rumbai'
            ],
            [
                'id' => '1311011',
                'kabupaten_id' => '1311',
                'nama' => 'Koto Besar'
            ],
            [
                'id' => '1311012',
                'kabupaten_id' => '1311',
                'nama' => 'Asam Jujuhan'
            ],
            [
                'id' => '1311020',
                'kabupaten_id' => '1311',
                'nama' => 'Koto Baru'
            ],
            [
                'id' => '1311021',
                'kabupaten_id' => '1311',
                'nama' => 'Koto Salak'
            ],
            [
                'id' => '1311022',
                'kabupaten_id' => '1311',
                'nama' => 'Tiumang'
            ],
            [
                'id' => '1311023',
                'kabupaten_id' => '1311',
                'nama' => 'Padang Laweh'
            ],
            [
                'id' => '1311030',
                'kabupaten_id' => '1311',
                'nama' => 'Sitiung'
            ],
            [
                'id' => '1311031',
                'kabupaten_id' => '1311',
                'nama' => 'Timpeh'
            ],
            [
                'id' => '1311040',
                'kabupaten_id' => '1311',
                'nama' => 'Pulau Punjung'
            ],
            [
                'id' => '1311041',
                'kabupaten_id' => '1311',
                'nama' => 'Ix Koto'
            ],
            [
                'id' => '1312010',
                'kabupaten_id' => '1312',
                'nama' => 'Sungai Beremas'
            ],
            [
                'id' => '1312020',
                'kabupaten_id' => '1312',
                'nama' => 'Ranah Batahan'
            ],
            [
                'id' => '1312030',
                'kabupaten_id' => '1312',
                'nama' => 'Koto Balingka'
            ],
            [
                'id' => '1312040',
                'kabupaten_id' => '1312',
                'nama' => 'Sungai Aur'
            ],
            [
                'id' => '1312050',
                'kabupaten_id' => '1312',
                'nama' => 'Lembah Malintang'
            ],
            [
                'id' => '1312060',
                'kabupaten_id' => '1312',
                'nama' => 'Gunung Tuleh'
            ],
            [
                'id' => '1312070',
                'kabupaten_id' => '1312',
                'nama' => 'Talamau'
            ],
            [
                'id' => '1312080',
                'kabupaten_id' => '1312',
                'nama' => 'Pasaman'
            ],
            [
                'id' => '1312090',
                'kabupaten_id' => '1312',
                'nama' => 'Luhak Nan Duo'
            ],
            [
                'id' => '1312100',
                'kabupaten_id' => '1312',
                'nama' => 'Sasak Ranah Pasisie'
            ],
            [
                'id' => '1312110',
                'kabupaten_id' => '1312',
                'nama' => 'Kinali'
            ],
            [
                'id' => '1371010',
                'kabupaten_id' => '1371',
                'nama' => 'Bungus Teluk Kabung'
            ],
            [
                'id' => '1371020',
                'kabupaten_id' => '1371',
                'nama' => 'Lubuk Kilangan'
            ],
            [
                'id' => '1371030',
                'kabupaten_id' => '1371',
                'nama' => 'Lubuk Begalung'
            ],
            [
                'id' => '1371040',
                'kabupaten_id' => '1371',
                'nama' => 'Padang Selatan'
            ],
            [
                'id' => '1371050',
                'kabupaten_id' => '1371',
                'nama' => 'Padang Timur'
            ],
            [
                'id' => '1371060',
                'kabupaten_id' => '1371',
                'nama' => 'Padang Barat'
            ],
            [
                'id' => '1371070',
                'kabupaten_id' => '1371',
                'nama' => 'Padang Utara'
            ],
            [
                'id' => '1371080',
                'kabupaten_id' => '1371',
                'nama' => 'Nanggalo'
            ],
            [
                'id' => '1371090',
                'kabupaten_id' => '1371',
                'nama' => 'Kuranji'
            ],
            [
                'id' => '1371100',
                'kabupaten_id' => '1371',
                'nama' => 'Pauh'
            ],
            [
                'id' => '1371110',
                'kabupaten_id' => '1371',
                'nama' => 'Koto Tangah'
            ],
            [
                'id' => '1372010',
                'kabupaten_id' => '1372',
                'nama' => 'Lubuk Sikarah'
            ],
            [
                'id' => '1372020',
                'kabupaten_id' => '1372',
                'nama' => 'Tanjung Harapan'
            ],
            [
                'id' => '1373010',
                'kabupaten_id' => '1373',
                'nama' => 'Silungkang'
            ],
            [
                'id' => '1373020',
                'kabupaten_id' => '1373',
                'nama' => 'Lembah Segar'
            ],
            [
                'id' => '1373030',
                'kabupaten_id' => '1373',
                'nama' => 'Barangin'
            ],
            [
                'id' => '1373040',
                'kabupaten_id' => '1373',
                'nama' => 'Talawi'
            ],
            [
                'id' => '1374010',
                'kabupaten_id' => '1374',
                'nama' => 'Padang Panjang Barat'
            ],
            [
                'id' => '1374020',
                'kabupaten_id' => '1374',
                'nama' => 'Padang Panjang Timur'
            ],
            [
                'id' => '1375010',
                'kabupaten_id' => '1375',
                'nama' => 'Guguk Panjang'
            ],
            [
                'id' => '1375020',
                'kabupaten_id' => '1375',
                'nama' => 'Mandiangin Koto Selayan'
            ],
            [
                'id' => '1375030',
                'kabupaten_id' => '1375',
                'nama' => 'Aur Birugo Tigo Baleh'
            ],
            [
                'id' => '1376010',
                'kabupaten_id' => '1376',
                'nama' => 'Payakumbuh Barat'
            ],
            [
                'id' => '1376011',
                'kabupaten_id' => '1376',
                'nama' => 'Payakumbuh Selatan'
            ],
            [
                'id' => '1376020',
                'kabupaten_id' => '1376',
                'nama' => 'Payakumbuh Timur'
            ],
            [
                'id' => '1376030',
                'kabupaten_id' => '1376',
                'nama' => 'Payakumbuh Utara'
            ],
            [
                'id' => '1376031',
                'kabupaten_id' => '1376',
                'nama' => 'Lamposi Tigo Nagori'
            ],
            [
                'id' => '1377010',
                'kabupaten_id' => '1377',
                'nama' => 'Pariaman Selatan'
            ],
            [
                'id' => '1377020',
                'kabupaten_id' => '1377',
                'nama' => 'Pariaman Tengah'
            ],
            [
                'id' => '1377021',
                'kabupaten_id' => '1377',
                'nama' => 'Pariaman Timur'
            ],
            [
                'id' => '1377030',
                'kabupaten_id' => '1377',
                'nama' => 'Pariaman Utara'
            ],
            [
                'id' => '1401010',
                'kabupaten_id' => '1401',
                'nama' => 'Kuantan Mudik'
            ],
            [
                'id' => '1401011',
                'kabupaten_id' => '1401',
                'nama' => 'Hulu Kuantan'
            ],
            [
                'id' => '1401012',
                'kabupaten_id' => '1401',
                'nama' => 'Gunung Toar'
            ],
            [
                'id' => '1401013',
                'kabupaten_id' => '1401',
                'nama' => 'Pucuk Rantau'
            ],
            [
                'id' => '1401020',
                'kabupaten_id' => '1401',
                'nama' => 'Singingi'
            ],
            [
                'id' => '1401021',
                'kabupaten_id' => '1401',
                'nama' => 'Singingi Hilir'
            ],
            [
                'id' => '1401030',
                'kabupaten_id' => '1401',
                'nama' => 'Kuantan Tengah'
            ],
            [
                'id' => '1401031',
                'kabupaten_id' => '1401',
                'nama' => 'Sentajo Raya'
            ],
            [
                'id' => '1401040',
                'kabupaten_id' => '1401',
                'nama' => 'Benai'
            ],
            [
                'id' => '1401050',
                'kabupaten_id' => '1401',
                'nama' => 'Kuantan Hilir'
            ],
            [
                'id' => '1401051',
                'kabupaten_id' => '1401',
                'nama' => 'Pangean'
            ],
            [
                'id' => '1401052',
                'kabupaten_id' => '1401',
                'nama' => 'Logas Tanah Darat'
            ],
            [
                'id' => '1401053',
                'kabupaten_id' => '1401',
                'nama' => 'Kuantan Hilir Seberang'
            ],
            [
                'id' => '1401060',
                'kabupaten_id' => '1401',
                'nama' => 'Cerenti'
            ],
            [
                'id' => '1401061',
                'kabupaten_id' => '1401',
                'nama' => 'Inuman'
            ],
            [
                'id' => '1402010',
                'kabupaten_id' => '1402',
                'nama' => 'Peranap'
            ],
            [
                'id' => '1402011',
                'kabupaten_id' => '1402',
                'nama' => 'Batang Peranap'
            ],
            [
                'id' => '1402020',
                'kabupaten_id' => '1402',
                'nama' => 'Seberida'
            ],
            [
                'id' => '1402021',
                'kabupaten_id' => '1402',
                'nama' => 'Batang Cenaku'
            ],
            [
                'id' => '1402022',
                'kabupaten_id' => '1402',
                'nama' => 'Batang Gansal'
            ],
            [
                'id' => '1402030',
                'kabupaten_id' => '1402',
                'nama' => 'Kelayang'
            ],
            [
                'id' => '1402031',
                'kabupaten_id' => '1402',
                'nama' => 'Rakit Kulim'
            ],
            [
                'id' => '1402040',
                'kabupaten_id' => '1402',
                'nama' => 'Pasir Penyu'
            ],
            [
                'id' => '1402041',
                'kabupaten_id' => '1402',
                'nama' => 'Lirik'
            ],
            [
                'id' => '1402042',
                'kabupaten_id' => '1402',
                'nama' => 'Sungai Lala'
            ],
            [
                'id' => '1402043',
                'kabupaten_id' => '1402',
                'nama' => 'Lubuk Batu Jaya'
            ],
            [
                'id' => '1402050',
                'kabupaten_id' => '1402',
                'nama' => 'Rengat Barat'
            ],
            [
                'id' => '1402060',
                'kabupaten_id' => '1402',
                'nama' => 'Rengat'
            ],
            [
                'id' => '1402061',
                'kabupaten_id' => '1402',
                'nama' => 'Kuala Cenaku'
            ],
            [
                'id' => '1403010',
                'kabupaten_id' => '1403',
                'nama' => 'Keritang'
            ],
            [
                'id' => '1403011',
                'kabupaten_id' => '1403',
                'nama' => 'Kemuning'
            ],
            [
                'id' => '1403020',
                'kabupaten_id' => '1403',
                'nama' => 'Reteh'
            ],
            [
                'id' => '1403021',
                'kabupaten_id' => '1403',
                'nama' => 'Sungai Batang'
            ],
            [
                'id' => '1403030',
                'kabupaten_id' => '1403',
                'nama' => 'Enok'
            ],
            [
                'id' => '1403040',
                'kabupaten_id' => '1403',
                'nama' => 'Tanah Merah'
            ],
            [
                'id' => '1403050',
                'kabupaten_id' => '1403',
                'nama' => 'Kuala Indragiri'
            ],
            [
                'id' => '1403051',
                'kabupaten_id' => '1403',
                'nama' => 'Concong'
            ],
            [
                'id' => '1403060',
                'kabupaten_id' => '1403',
                'nama' => 'Tembilahan'
            ],
            [
                'id' => '1403061',
                'kabupaten_id' => '1403',
                'nama' => 'Tembilahan Hulu'
            ],
            [
                'id' => '1403070',
                'kabupaten_id' => '1403',
                'nama' => 'Tempuling'
            ],
            [
                'id' => '1403071',
                'kabupaten_id' => '1403',
                'nama' => 'Kempas'
            ],
            [
                'id' => '1403080',
                'kabupaten_id' => '1403',
                'nama' => 'Batang Tuaka'
            ],
            [
                'id' => '1403090',
                'kabupaten_id' => '1403',
                'nama' => 'Gaung Anak Serka'
            ],
            [
                'id' => '1403100',
                'kabupaten_id' => '1403',
                'nama' => 'Gaung'
            ],
            [
                'id' => '1403110',
                'kabupaten_id' => '1403',
                'nama' => 'Mandah'
            ],
            [
                'id' => '1403120',
                'kabupaten_id' => '1403',
                'nama' => 'Kateman'
            ],
            [
                'id' => '1403121',
                'kabupaten_id' => '1403',
                'nama' => 'Pelangiran'
            ],
            [
                'id' => '1403122',
                'kabupaten_id' => '1403',
                'nama' => 'Teluk Belengkong'
            ],
            [
                'id' => '1403123',
                'kabupaten_id' => '1403',
                'nama' => 'Pulau Burung'
            ],
            [
                'id' => '1404010',
                'kabupaten_id' => '1404',
                'nama' => 'Langgam'
            ],
            [
                'id' => '1404011',
                'kabupaten_id' => '1404',
                'nama' => 'Pangkalan Kerinci'
            ],
            [
                'id' => '1404012',
                'kabupaten_id' => '1404',
                'nama' => 'Bandar Seikijang'
            ],
            [
                'id' => '1404020',
                'kabupaten_id' => '1404',
                'nama' => 'Pangkalan Kuras'
            ],
            [
                'id' => '1404021',
                'kabupaten_id' => '1404',
                'nama' => 'Ukui'
            ],
            [
                'id' => '1404022',
                'kabupaten_id' => '1404',
                'nama' => 'Pangkalan Lesung'
            ],
            [
                'id' => '1404030',
                'kabupaten_id' => '1404',
                'nama' => 'Bunut'
            ],
            [
                'id' => '1404031',
                'kabupaten_id' => '1404',
                'nama' => 'Pelalawan'
            ],
            [
                'id' => '1404032',
                'kabupaten_id' => '1404',
                'nama' => 'Bandar Petalangan'
            ],
            [
                'id' => '1404040',
                'kabupaten_id' => '1404',
                'nama' => 'Kuala Kampar'
            ],
            [
                'id' => '1404041',
                'kabupaten_id' => '1404',
                'nama' => 'Kerumutan'
            ],
            [
                'id' => '1404042',
                'kabupaten_id' => '1404',
                'nama' => 'Teluk Meranti'
            ],
            [
                'id' => '1405010',
                'kabupaten_id' => '1405',
                'nama' => 'Minas'
            ],
            [
                'id' => '1405011',
                'kabupaten_id' => '1405',
                'nama' => 'Sungai Mandau'
            ],
            [
                'id' => '1405012',
                'kabupaten_id' => '1405',
                'nama' => 'Kandis'
            ],
            [
                'id' => '1405020',
                'kabupaten_id' => '1405',
                'nama' => 'Siak'
            ],
            [
                'id' => '1405021',
                'kabupaten_id' => '1405',
                'nama' => 'Kerinci Kanan'
            ],
            [
                'id' => '1405022',
                'kabupaten_id' => '1405',
                'nama' => 'Tualang'
            ],
            [
                'id' => '1405023',
                'kabupaten_id' => '1405',
                'nama' => 'Dayun'
            ],
            [
                'id' => '1405024',
                'kabupaten_id' => '1405',
                'nama' => 'Lubuk Dalam'
            ],
            [
                'id' => '1405025',
                'kabupaten_id' => '1405',
                'nama' => 'Koto Gasib'
            ],
            [
                'id' => '1405026',
                'kabupaten_id' => '1405',
                'nama' => 'Mempura'
            ],
            [
                'id' => '1405030',
                'kabupaten_id' => '1405',
                'nama' => 'Sungai Apit'
            ],
            [
                'id' => '1405031',
                'kabupaten_id' => '1405',
                'nama' => 'Bunga Raya'
            ],
            [
                'id' => '1405032',
                'kabupaten_id' => '1405',
                'nama' => 'Sabak Auh'
            ],
            [
                'id' => '1405033',
                'kabupaten_id' => '1405',
                'nama' => 'Pusako'
            ],
            [
                'id' => '1406010',
                'kabupaten_id' => '1406',
                'nama' => 'Kampar Kiri'
            ],
            [
                'id' => '1406011',
                'kabupaten_id' => '1406',
                'nama' => 'Kampar Kiri Hulu'
            ],
            [
                'id' => '1406012',
                'kabupaten_id' => '1406',
                'nama' => 'Kampar Kiri Hilir'
            ],
            [
                'id' => '1406013',
                'kabupaten_id' => '1406',
                'nama' => 'Gunung Sahilan'
            ],
            [
                'id' => '1406014',
                'kabupaten_id' => '1406',
                'nama' => 'Kampar Kiri Tengah'
            ],
            [
                'id' => '1406020',
                'kabupaten_id' => '1406',
                'nama' => 'Xiii Koto Kampar'
            ],
            [
                'id' => '1406021',
                'kabupaten_id' => '1406',
                'nama' => 'Koto Kampar Hulu'
            ],
            [
                'id' => '1406030',
                'kabupaten_id' => '1406',
                'nama' => 'Kuok'
            ],
            [
                'id' => '1406031',
                'kabupaten_id' => '1406',
                'nama' => 'Salo'
            ],
            [
                'id' => '1406040',
                'kabupaten_id' => '1406',
                'nama' => 'Tapung'
            ],
            [
                'id' => '1406041',
                'kabupaten_id' => '1406',
                'nama' => 'Tapung Hulu'
            ],
            [
                'id' => '1406042',
                'kabupaten_id' => '1406',
                'nama' => 'Tapung Hilir'
            ],
            [
                'id' => '1406050',
                'kabupaten_id' => '1406',
                'nama' => 'Bangkinang'
            ],
            [
                'id' => '1406051',
                'kabupaten_id' => '1406',
                'nama' => 'Bangkinang Seberang'
            ],
            [
                'id' => '1406060',
                'kabupaten_id' => '1406',
                'nama' => 'Kampar'
            ],
            [
                'id' => '1406061',
                'kabupaten_id' => '1406',
                'nama' => 'Kampar Timur'
            ],
            [
                'id' => '1406062',
                'kabupaten_id' => '1406',
                'nama' => 'Rumbio Jaya'
            ],
            [
                'id' => '1406063',
                'kabupaten_id' => '1406',
                'nama' => 'Kampar Utara'
            ],
            [
                'id' => '1406070',
                'kabupaten_id' => '1406',
                'nama' => 'Tambang'
            ],
            [
                'id' => '1406080',
                'kabupaten_id' => '1406',
                'nama' => 'Siak Hulu'
            ],
            [
                'id' => '1406081',
                'kabupaten_id' => '1406',
                'nama' => 'Perhentian Raja'
            ],
            [
                'id' => '1407010',
                'kabupaten_id' => '1407',
                'nama' => 'Rokan Iv Koto'
            ],
            [
                'id' => '1407011',
                'kabupaten_id' => '1407',
                'nama' => 'Pendalian Iv Koto'
            ],
            [
                'id' => '1407020',
                'kabupaten_id' => '1407',
                'nama' => 'Tandun'
            ],
            [
                'id' => '1407021',
                'kabupaten_id' => '1407',
                'nama' => 'Kabun'
            ],
            [
                'id' => '1407022',
                'kabupaten_id' => '1407',
                'nama' => 'Ujung Batu'
            ],
            [
                'id' => '1407030',
                'kabupaten_id' => '1407',
                'nama' => 'Rambah Samo'
            ],
            [
                'id' => '1407040',
                'kabupaten_id' => '1407',
                'nama' => 'Rambah'
            ],
            [
                'id' => '1407041',
                'kabupaten_id' => '1407',
                'nama' => 'Rambah Hilir'
            ],
            [
                'id' => '1407042',
                'kabupaten_id' => '1407',
                'nama' => 'Bangun Purba'
            ],
            [
                'id' => '1407050',
                'kabupaten_id' => '1407',
                'nama' => 'Tambusai'
            ],
            [
                'id' => '1407051',
                'kabupaten_id' => '1407',
                'nama' => 'Tambusai Utara'
            ],
            [
                'id' => '1407060',
                'kabupaten_id' => '1407',
                'nama' => 'Kepenuhan'
            ],
            [
                'id' => '1407061',
                'kabupaten_id' => '1407',
                'nama' => 'Kepenuhan Hulu'
            ],
            [
                'id' => '1407070',
                'kabupaten_id' => '1407',
                'nama' => 'Kunto Darussalam'
            ],
            [
                'id' => '1407071',
                'kabupaten_id' => '1407',
                'nama' => 'Pagaran Tapah Darussalam'
            ],
            [
                'id' => '1407072',
                'kabupaten_id' => '1407',
                'nama' => 'Bonai Darussalam'
            ],
            [
                'id' => '1408010',
                'kabupaten_id' => '1408',
                'nama' => 'Mandau'
            ],
            [
                'id' => '1408011',
                'kabupaten_id' => '1408',
                'nama' => 'Pinggir'
            ],
            [
                'id' => '1408020',
                'kabupaten_id' => '1408',
                'nama' => 'Bukit Batu'
            ],
            [
                'id' => '1408021',
                'kabupaten_id' => '1408',
                'nama' => 'Siak Kecil'
            ],
            [
                'id' => '1408030',
                'kabupaten_id' => '1408',
                'nama' => 'Rupat'
            ],
            [
                'id' => '1408031',
                'kabupaten_id' => '1408',
                'nama' => 'Rupat Utara'
            ],
            [
                'id' => '1408040',
                'kabupaten_id' => '1408',
                'nama' => 'Bengkalis'
            ],
            [
                'id' => '1408050',
                'kabupaten_id' => '1408',
                'nama' => 'Bantan'
            ],
            [
                'id' => '1409010',
                'kabupaten_id' => '1409',
                'nama' => 'Tanah Putih'
            ],
            [
                'id' => '1409011',
                'kabupaten_id' => '1409',
                'nama' => 'Pujud'
            ],
            [
                'id' => '1409012',
                'kabupaten_id' => '1409',
                'nama' => 'Tanah Putih Tanjung Melawan'
            ],
            [
                'id' => '1409013',
                'kabupaten_id' => '1409',
                'nama' => 'Rantau Kopar'
            ],
            [
                'id' => '1409020',
                'kabupaten_id' => '1409',
                'nama' => 'Bagan Sinembah'
            ],
            [
                'id' => '1409021',
                'kabupaten_id' => '1409',
                'nama' => 'Simpang Kanan'
            ],
            [
                'id' => '1409030',
                'kabupaten_id' => '1409',
                'nama' => 'Kubu'
            ],
            [
                'id' => '1409031',
                'kabupaten_id' => '1409',
                'nama' => 'Pasir Limau Kapas'
            ],
            [
                'id' => '1409032',
                'kabupaten_id' => '1409',
                'nama' => 'Kubu Babussalam'
            ],
            [
                'id' => '1409040',
                'kabupaten_id' => '1409',
                'nama' => 'Bangko'
            ],
            [
                'id' => '1409041',
                'kabupaten_id' => '1409',
                'nama' => 'Sinaboi'
            ],
            [
                'id' => '1409042',
                'kabupaten_id' => '1409',
                'nama' => 'Batu Hampar'
            ],
            [
                'id' => '1409043',
                'kabupaten_id' => '1409',
                'nama' => 'Pekaitan'
            ],
            [
                'id' => '1409050',
                'kabupaten_id' => '1409',
                'nama' => 'Rimba Melintang'
            ],
            [
                'id' => '1409051',
                'kabupaten_id' => '1409',
                'nama' => 'Bangko Pusako'
            ],
            [
                'id' => '1410010',
                'kabupaten_id' => '1410',
                'nama' => 'Tebing Tinggi Barat'
            ],
            [
                'id' => '1410020',
                'kabupaten_id' => '1410',
                'nama' => 'Tebing Tinggi'
            ],
            [
                'id' => '1410021',
                'kabupaten_id' => '1410',
                'nama' => 'Tebing Tinggi Timur'
            ],
            [
                'id' => '1410030',
                'kabupaten_id' => '1410',
                'nama' => 'Rangsang'
            ],
            [
                'id' => '1410031',
                'kabupaten_id' => '1410',
                'nama' => 'Rangsang Pesisir'
            ],
            [
                'id' => '1410040',
                'kabupaten_id' => '1410',
                'nama' => 'Rangsang Barat'
            ],
            [
                'id' => '1410050',
                'kabupaten_id' => '1410',
                'nama' => 'Merbau'
            ],
            [
                'id' => '1410051',
                'kabupaten_id' => '1410',
                'nama' => 'Pulau Merbau'
            ],
            [
                'id' => '1410052',
                'kabupaten_id' => '1410',
                'nama' => 'Putri Puyu'
            ],
            [
                'id' => '1471010',
                'kabupaten_id' => '1471',
                'nama' => 'Tampan'
            ],
            [
                'id' => '1471011',
                'kabupaten_id' => '1471',
                'nama' => 'Payung Sekaki'
            ],
            [
                'id' => '1471020',
                'kabupaten_id' => '1471',
                'nama' => 'Bukit Raya'
            ],
            [
                'id' => '1471021',
                'kabupaten_id' => '1471',
                'nama' => 'Marpoyan Damai'
            ],
            [
                'id' => '1471022',
                'kabupaten_id' => '1471',
                'nama' => 'Tenayan Raya'
            ],
            [
                'id' => '1471030',
                'kabupaten_id' => '1471',
                'nama' => 'Limapuluh'
            ],
            [
                'id' => '1471040',
                'kabupaten_id' => '1471',
                'nama' => 'Sail'
            ],
            [
                'id' => '1471050',
                'kabupaten_id' => '1471',
                'nama' => 'Pekanbaru Kota'
            ],
            [
                'id' => '1471060',
                'kabupaten_id' => '1471',
                'nama' => 'Sukajadi'
            ],
            [
                'id' => '1471070',
                'kabupaten_id' => '1471',
                'nama' => 'Senapelan'
            ],
            [
                'id' => '1471080',
                'kabupaten_id' => '1471',
                'nama' => 'Rumbai'
            ],
            [
                'id' => '1471081',
                'kabupaten_id' => '1471',
                'nama' => 'Rumbai Pesisir'
            ],
            [
                'id' => '1473010',
                'kabupaten_id' => '1473',
                'nama' => 'Bukit Kapur'
            ],
            [
                'id' => '1473011',
                'kabupaten_id' => '1473',
                'nama' => 'Medang Kampai'
            ],
            [
                'id' => '1473012',
                'kabupaten_id' => '1473',
                'nama' => 'Sungai Sembilan'
            ],
            [
                'id' => '1473020',
                'kabupaten_id' => '1473',
                'nama' => 'Dumai Barat'
            ],
            [
                'id' => '1473021',
                'kabupaten_id' => '1473',
                'nama' => 'Dumai Selatan'
            ],
            [
                'id' => '1473030',
                'kabupaten_id' => '1473',
                'nama' => 'Dumai Timur'
            ],
            [
                'id' => '1473031',
                'kabupaten_id' => '1473',
                'nama' => 'Dumai Kota'
            ],
            [
                'id' => '1501010',
                'kabupaten_id' => '1501',
                'nama' => 'Gunung Raya'
            ],
            [
                'id' => '1501011',
                'kabupaten_id' => '1501',
                'nama' => 'Bukit Kerman'
            ],
            [
                'id' => '1501020',
                'kabupaten_id' => '1501',
                'nama' => 'Batang Merangin'
            ],
            [
                'id' => '1501030',
                'kabupaten_id' => '1501',
                'nama' => 'Keliling Danau'
            ],
            [
                'id' => '1501040',
                'kabupaten_id' => '1501',
                'nama' => 'Danau Kerinci'
            ],
            [
                'id' => '1501050',
                'kabupaten_id' => '1501',
                'nama' => 'Sitinjau Laut'
            ],
            [
                'id' => '1501070',
                'kabupaten_id' => '1501',
                'nama' => 'Air Hangat'
            ],
            [
                'id' => '1501071',
                'kabupaten_id' => '1501',
                'nama' => 'Air Hangat Timur'
            ],
            [
                'id' => '1501072',
                'kabupaten_id' => '1501',
                'nama' => 'Depati Vii'
            ],
            [
                'id' => '1501073',
                'kabupaten_id' => '1501',
                'nama' => 'Air Hangat Barat'
            ],
            [
                'id' => '1501080',
                'kabupaten_id' => '1501',
                'nama' => 'Gunung Kerinci'
            ],
            [
                'id' => '1501081',
                'kabupaten_id' => '1501',
                'nama' => 'Siulak'
            ],
            [
                'id' => '1501082',
                'kabupaten_id' => '1501',
                'nama' => 'Siulak Mukai'
            ],
            [
                'id' => '1501090',
                'kabupaten_id' => '1501',
                'nama' => 'Kayu Aro'
            ],
            [
                'id' => '1501091',
                'kabupaten_id' => '1501',
                'nama' => 'Gunung Tujuh'
            ],
            [
                'id' => '1501092',
                'kabupaten_id' => '1501',
                'nama' => 'Kayu Aro Barat'
            ],
            [
                'id' => '1502010',
                'kabupaten_id' => '1502',
                'nama' => 'Jangkat'
            ],
            [
                'id' => '1502011',
                'kabupaten_id' => '1502',
                'nama' => 'Sungai Tenang'
            ],
            [
                'id' => '1502020',
                'kabupaten_id' => '1502',
                'nama' => 'Muara Siau'
            ],
            [
                'id' => '1502021',
                'kabupaten_id' => '1502',
                'nama' => 'Lembah Masurai'
            ],
            [
                'id' => '1502022',
                'kabupaten_id' => '1502',
                'nama' => 'Tiang Pumpung'
            ],
            [
                'id' => '1502030',
                'kabupaten_id' => '1502',
                'nama' => 'Pamenang'
            ],
            [
                'id' => '1502031',
                'kabupaten_id' => '1502',
                'nama' => 'Pamenang Barat'
            ],
            [
                'id' => '1502032',
                'kabupaten_id' => '1502',
                'nama' => 'Renah Pamenang'
            ],
            [
                'id' => '1502033',
                'kabupaten_id' => '1502',
                'nama' => 'Pamenang Selatan'
            ],
            [
                'id' => '1502040',
                'kabupaten_id' => '1502',
                'nama' => 'Bangko'
            ],
            [
                'id' => '1502041',
                'kabupaten_id' => '1502',
                'nama' => 'Bangko Barat'
            ],
            [
                'id' => '1502042',
                'kabupaten_id' => '1502',
                'nama' => 'Nalo Tantan'
            ],
            [
                'id' => '1502043',
                'kabupaten_id' => '1502',
                'nama' => 'Batang Masumai'
            ],
            [
                'id' => '1502050',
                'kabupaten_id' => '1502',
                'nama' => 'Sungai Manau'
            ],
            [
                'id' => '1502051',
                'kabupaten_id' => '1502',
                'nama' => 'Renah Pembarap'
            ],
            [
                'id' => '1502052',
                'kabupaten_id' => '1502',
                'nama' => 'Pangkalan Jambu'
            ],
            [
                'id' => '1502060',
                'kabupaten_id' => '1502',
                'nama' => 'Tabir'
            ],
            [
                'id' => '1502061',
                'kabupaten_id' => '1502',
                'nama' => 'Tabir Ulu'
            ],
            [
                'id' => '1502062',
                'kabupaten_id' => '1502',
                'nama' => 'Tabir Selatan'
            ],
            [
                'id' => '1502063',
                'kabupaten_id' => '1502',
                'nama' => 'Tabir Ilir'
            ],
            [
                'id' => '1502064',
                'kabupaten_id' => '1502',
                'nama' => 'Tabir Timur'
            ],
            [
                'id' => '1502065',
                'kabupaten_id' => '1502',
                'nama' => 'Tabir Lintas'
            ],
            [
                'id' => '1502066',
                'kabupaten_id' => '1502',
                'nama' => 'Margo Tabir'
            ],
            [
                'id' => '1502067',
                'kabupaten_id' => '1502',
                'nama' => 'Tabir Barat'
            ],
            [
                'id' => '1503010',
                'kabupaten_id' => '1503',
                'nama' => 'Batang Asai'
            ],
            [
                'id' => '1503020',
                'kabupaten_id' => '1503',
                'nama' => 'Limun'
            ],
            [
                'id' => '1503021',
                'kabupaten_id' => '1503',
                'nama' => 'Cermin Nan Gedang'
            ],
            [
                'id' => '1503030',
                'kabupaten_id' => '1503',
                'nama' => 'Pelawan'
            ],
            [
                'id' => '1503031',
                'kabupaten_id' => '1503',
                'nama' => 'Singkut'
            ],
            [
                'id' => '1503040',
                'kabupaten_id' => '1503',
                'nama' => 'Sarolangun'
            ],
            [
                'id' => '1503041',
                'kabupaten_id' => '1503',
                'nama' => 'Bathin Viii'
            ],
            [
                'id' => '1503050',
                'kabupaten_id' => '1503',
                'nama' => 'Pauh'
            ],
            [
                'id' => '1503051',
                'kabupaten_id' => '1503',
                'nama' => 'Air Hitam'
            ],
            [
                'id' => '1503060',
                'kabupaten_id' => '1503',
                'nama' => 'Mandiangin'
            ],
            [
                'id' => '1504010',
                'kabupaten_id' => '1504',
                'nama' => 'Mersam'
            ],
            [
                'id' => '1504011',
                'kabupaten_id' => '1504',
                'nama' => 'Maro Sebo Ulu'
            ],
            [
                'id' => '1504020',
                'kabupaten_id' => '1504',
                'nama' => 'Batin Xxiv'
            ],
            [
                'id' => '1504030',
                'kabupaten_id' => '1504',
                'nama' => 'Muara Tembesi'
            ],
            [
                'id' => '1504040',
                'kabupaten_id' => '1504',
                'nama' => 'Muara Bulian'
            ],
            [
                'id' => '1504041',
                'kabupaten_id' => '1504',
                'nama' => 'Bajubang'
            ],
            [
                'id' => '1504042',
                'kabupaten_id' => '1504',
                'nama' => 'Maro Sebo Ilir'
            ],
            [
                'id' => '1504050',
                'kabupaten_id' => '1504',
                'nama' => 'Pemayung'
            ],
            [
                'id' => '1505010',
                'kabupaten_id' => '1505',
                'nama' => 'Mestong'
            ],
            [
                'id' => '1505011',
                'kabupaten_id' => '1505',
                'nama' => 'Sungai Bahar'
            ],
            [
                'id' => '1505012',
                'kabupaten_id' => '1505',
                'nama' => 'Bahar Selatan'
            ],
            [
                'id' => '1505013',
                'kabupaten_id' => '1505',
                'nama' => 'Bahar Utara'
            ],
            [
                'id' => '1505020',
                'kabupaten_id' => '1505',
                'nama' => 'Kumpeh Ulu'
            ],
            [
                'id' => '1505021',
                'kabupaten_id' => '1505',
                'nama' => 'Sungai Gelam'
            ],
            [
                'id' => '1505030',
                'kabupaten_id' => '1505',
                'nama' => 'Kumpeh'
            ],
            [
                'id' => '1505040',
                'kabupaten_id' => '1505',
                'nama' => 'Maro Sebo'
            ],
            [
                'id' => '1505041',
                'kabupaten_id' => '1505',
                'nama' => 'Taman Rajo'
            ],
            [
                'id' => '1505050',
                'kabupaten_id' => '1505',
                'nama' => 'Jambi Luar Kota'
            ],
            [
                'id' => '1505060',
                'kabupaten_id' => '1505',
                'nama' => 'Sekernan'
            ],
            [
                'id' => '1506010',
                'kabupaten_id' => '1506',
                'nama' => 'Mendahara'
            ],
            [
                'id' => '1506011',
                'kabupaten_id' => '1506',
                'nama' => 'Mendahara Ulu'
            ],
            [
                'id' => '1506012',
                'kabupaten_id' => '1506',
                'nama' => 'Geragai'
            ],
            [
                'id' => '1506020',
                'kabupaten_id' => '1506',
                'nama' => 'Dendang'
            ],
            [
                'id' => '1506031',
                'kabupaten_id' => '1506',
                'nama' => 'Muara Sabak Barat'
            ],
            [
                'id' => '1506032',
                'kabupaten_id' => '1506',
                'nama' => 'Muara Sabak Timur'
            ],
            [
                'id' => '1506033',
                'kabupaten_id' => '1506',
                'nama' => 'Kuala Jambi'
            ],
            [
                'id' => '1506040',
                'kabupaten_id' => '1506',
                'nama' => 'Rantau Rasau'
            ],
            [
                'id' => '1506041',
                'kabupaten_id' => '1506',
                'nama' => 'Berbak'
            ],
            [
                'id' => '1506050',
                'kabupaten_id' => '1506',
                'nama' => 'Nipah Panjang'
            ],
            [
                'id' => '1506060',
                'kabupaten_id' => '1506',
                'nama' => 'Sadu'
            ],
            [
                'id' => '1507010',
                'kabupaten_id' => '1507',
                'nama' => 'Tungkal Ulu'
            ],
            [
                'id' => '1507011',
                'kabupaten_id' => '1507',
                'nama' => 'Merlung'
            ],
            [
                'id' => '1507012',
                'kabupaten_id' => '1507',
                'nama' => 'Batang Asam'
            ],
            [
                'id' => '1507013',
                'kabupaten_id' => '1507',
                'nama' => 'Tebing Tinggi'
            ],
            [
                'id' => '1507014',
                'kabupaten_id' => '1507',
                'nama' => 'Renah Mendaluh'
            ],
            [
                'id' => '1507015',
                'kabupaten_id' => '1507',
                'nama' => 'Muara Papalik'
            ],
            [
                'id' => '1507020',
                'kabupaten_id' => '1507',
                'nama' => 'Pengabuan'
            ],
            [
                'id' => '1507021',
                'kabupaten_id' => '1507',
                'nama' => 'Senyerang'
            ],
            [
                'id' => '1507030',
                'kabupaten_id' => '1507',
                'nama' => 'Tungkal Ilir'
            ],
            [
                'id' => '1507031',
                'kabupaten_id' => '1507',
                'nama' => 'Bram Itam'
            ],
            [
                'id' => '1507032',
                'kabupaten_id' => '1507',
                'nama' => 'Seberang Kota'
            ],
            [
                'id' => '1507040',
                'kabupaten_id' => '1507',
                'nama' => 'Betara'
            ],
            [
                'id' => '1507041',
                'kabupaten_id' => '1507',
                'nama' => 'Kuala Betara'
            ],
            [
                'id' => '1508010',
                'kabupaten_id' => '1508',
                'nama' => 'Tebo Ilir'
            ],
            [
                'id' => '1508011',
                'kabupaten_id' => '1508',
                'nama' => 'Muara Tabir'
            ],
            [
                'id' => '1508020',
                'kabupaten_id' => '1508',
                'nama' => 'Tebo Tengah'
            ],
            [
                'id' => '1508021',
                'kabupaten_id' => '1508',
                'nama' => 'Sumay'
            ],
            [
                'id' => '1508022',
                'kabupaten_id' => '1508',
                'nama' => 'Tengah Ilir'
            ],
            [
                'id' => '1508030',
                'kabupaten_id' => '1508',
                'nama' => 'Rimbo Bujang'
            ],
            [
                'id' => '1508031',
                'kabupaten_id' => '1508',
                'nama' => 'Rimbo Ulu'
            ],
            [
                'id' => '1508032',
                'kabupaten_id' => '1508',
                'nama' => 'Rimbo Ilir'
            ],
            [
                'id' => '1508040',
                'kabupaten_id' => '1508',
                'nama' => 'Tebo Ulu'
            ],
            [
                'id' => '1508041',
                'kabupaten_id' => '1508',
                'nama' => 'Vii Koto'
            ],
            [
                'id' => '1508042',
                'kabupaten_id' => '1508',
                'nama' => 'Serai Serumpun'
            ],
            [
                'id' => '1508043',
                'kabupaten_id' => '1508',
                'nama' => 'Vii Koto Ilir'
            ],
            [
                'id' => '1509010',
                'kabupaten_id' => '1509',
                'nama' => 'Pelepat'
            ],
            [
                'id' => '1509011',
                'kabupaten_id' => '1509',
                'nama' => 'Pelepat Ilir'
            ],
            [
                'id' => '1509021',
                'kabupaten_id' => '1509',
                'nama' => 'Bathin Ii Babeko'
            ],
            [
                'id' => '1509022',
                'kabupaten_id' => '1509',
                'nama' => 'Rimbo Tengah'
            ],
            [
                'id' => '1509023',
                'kabupaten_id' => '1509',
                'nama' => 'Bungo Dani'
            ],
            [
                'id' => '1509024',
                'kabupaten_id' => '1509',
                'nama' => 'Pasar Muara Bungo'
            ],
            [
                'id' => '1509025',
                'kabupaten_id' => '1509',
                'nama' => 'Bathin Iii'
            ],
            [
                'id' => '1509030',
                'kabupaten_id' => '1509',
                'nama' => 'Rantau Pandan'
            ],
            [
                'id' => '1509031',
                'kabupaten_id' => '1509',
                'nama' => 'Muko-muko Bathin Vii'
            ],
            [
                'id' => '1509032',
                'kabupaten_id' => '1509',
                'nama' => 'Bathin Iii Ulu'
            ],
            [
                'id' => '1509040',
                'kabupaten_id' => '1509',
                'nama' => 'Tanah Sepenggal'
            ],
            [
                'id' => '1509041',
                'kabupaten_id' => '1509',
                'nama' => 'Tanah Sepenggal Lintas'
            ],
            [
                'id' => '1509050',
                'kabupaten_id' => '1509',
                'nama' => 'Tanah Tumbuh'
            ],
            [
                'id' => '1509051',
                'kabupaten_id' => '1509',
                'nama' => 'Limbur Lubuk Mengkuang'
            ],
            [
                'id' => '1509052',
                'kabupaten_id' => '1509',
                'nama' => 'Bathin Ii Pelayang'
            ],
            [
                'id' => '1509060',
                'kabupaten_id' => '1509',
                'nama' => 'Jujuhan'
            ],
            [
                'id' => '1509061',
                'kabupaten_id' => '1509',
                'nama' => 'Jujuhan Ilir'
            ],
            [
                'id' => '1571010',
                'kabupaten_id' => '1571',
                'nama' => 'Kota Baru'
            ],
            [
                'id' => '1571020',
                'kabupaten_id' => '1571',
                'nama' => 'Jambi Selatan'
            ],
            [
                'id' => '1571030',
                'kabupaten_id' => '1571',
                'nama' => 'Jelutung'
            ],
            [
                'id' => '1571040',
                'kabupaten_id' => '1571',
                'nama' => 'Pasar Jambi'
            ],
            [
                'id' => '1571050',
                'kabupaten_id' => '1571',
                'nama' => 'Telanaipura'
            ],
            [
                'id' => '1571060',
                'kabupaten_id' => '1571',
                'nama' => 'Danau Teluk'
            ],
            [
                'id' => '1571070',
                'kabupaten_id' => '1571',
                'nama' => 'Pelayangan'
            ],
            [
                'id' => '1571080',
                'kabupaten_id' => '1571',
                'nama' => 'Jambi Timur'
            ],
            [
                'id' => '1572010',
                'kabupaten_id' => '1572',
                'nama' => 'Tanah Kampung'
            ],
            [
                'id' => '1572020',
                'kabupaten_id' => '1572',
                'nama' => 'Kumun Debai'
            ],
            [
                'id' => '1572030',
                'kabupaten_id' => '1572',
                'nama' => 'Sungai Penuh'
            ],
            [
                'id' => '1572031',
                'kabupaten_id' => '1572',
                'nama' => 'Pondok Tingggi'
            ],
            [
                'id' => '1572032',
                'kabupaten_id' => '1572',
                'nama' => 'Sungai Bungkal'
            ],
            [
                'id' => '1572040',
                'kabupaten_id' => '1572',
                'nama' => 'Hamparan Rawang'
            ],
            [
                'id' => '1572050',
                'kabupaten_id' => '1572',
                'nama' => 'Pesisir Bukit'
            ],
            [
                'id' => '1572051',
                'kabupaten_id' => '1572',
                'nama' => 'Koto Baru'
            ],
            [
                'id' => '1601052',
                'kabupaten_id' => '1601',
                'nama' => 'Lengkiti'
            ],
            [
                'id' => '1601070',
                'kabupaten_id' => '1601',
                'nama' => 'Sosoh Buay Rayap'
            ],
            [
                'id' => '1601080',
                'kabupaten_id' => '1601',
                'nama' => 'Pengandonan'
            ],
            [
                'id' => '1601081',
                'kabupaten_id' => '1601',
                'nama' => 'Semidang Aji'
            ],
            [
                'id' => '1601082',
                'kabupaten_id' => '1601',
                'nama' => 'Ulu Ogan'
            ],
            [
                'id' => '1601083',
                'kabupaten_id' => '1601',
                'nama' => 'Muara Jaya'
            ],
            [
                'id' => '1601090',
                'kabupaten_id' => '1601',
                'nama' => 'Peninjauan'
            ],
            [
                'id' => '1601091',
                'kabupaten_id' => '1601',
                'nama' => 'Lubuk Batang'
            ],
            [
                'id' => '1601092',
                'kabupaten_id' => '1601',
                'nama' => 'Sinar Peninjauan'
            ],
            [
                'id' => '1601130',
                'kabupaten_id' => '1601',
                'nama' => 'Batu Raja Timur'
            ],
            [
                'id' => '1601131',
                'kabupaten_id' => '1601',
                'nama' => 'Lubuk Raja'
            ],
            [
                'id' => '1601140',
                'kabupaten_id' => '1601',
                'nama' => 'Batu Raja Barat'
            ],
            [
                'id' => '1602010',
                'kabupaten_id' => '1602',
                'nama' => 'Lempuing'
            ],
            [
                'id' => '1602011',
                'kabupaten_id' => '1602',
                'nama' => 'Lempuing Jaya'
            ],
            [
                'id' => '1602020',
                'kabupaten_id' => '1602',
                'nama' => 'Mesuji'
            ],
            [
                'id' => '1602021',
                'kabupaten_id' => '1602',
                'nama' => 'Sungai Menang'
            ],
            [
                'id' => '1602022',
                'kabupaten_id' => '1602',
                'nama' => 'Mesuji Makmur'
            ],
            [
                'id' => '1602023',
                'kabupaten_id' => '1602',
                'nama' => 'Mesuji Raya'
            ],
            [
                'id' => '1602030',
                'kabupaten_id' => '1602',
                'nama' => 'Tulung Selapan'
            ],
            [
                'id' => '1602031',
                'kabupaten_id' => '1602',
                'nama' => 'Cengal'
            ],
            [
                'id' => '1602040',
                'kabupaten_id' => '1602',
                'nama' => 'Pedamaran'
            ],
            [
                'id' => '1602041',
                'kabupaten_id' => '1602',
                'nama' => 'Pedamaran Timur'
            ],
            [
                'id' => '1602050',
                'kabupaten_id' => '1602',
                'nama' => 'Tanjung Lubuk'
            ],
            [
                'id' => '1602051',
                'kabupaten_id' => '1602',
                'nama' => 'Teluk Gelam'
            ],
            [
                'id' => '1602060',
                'kabupaten_id' => '1602',
                'nama' => 'Kota Kayu Agung'
            ],
            [
                'id' => '1602120',
                'kabupaten_id' => '1602',
                'nama' => 'Sirah Pulau Padang'
            ],
            [
                'id' => '1602121',
                'kabupaten_id' => '1602',
                'nama' => 'Jejawi'
            ],
            [
                'id' => '1602130',
                'kabupaten_id' => '1602',
                'nama' => 'Pampangan'
            ],
            [
                'id' => '1602131',
                'kabupaten_id' => '1602',
                'nama' => 'Pangkalan Lapam'
            ],
            [
                'id' => '1602140',
                'kabupaten_id' => '1602',
                'nama' => 'Air Sugihan'
            ],
            [
                'id' => '1603010',
                'kabupaten_id' => '1603',
                'nama' => 'Semendo Darat Laut'
            ],
            [
                'id' => '1603011',
                'kabupaten_id' => '1603',
                'nama' => 'Semendo Darat Ulu'
            ],
            [
                'id' => '1603012',
                'kabupaten_id' => '1603',
                'nama' => 'Semendo Darat Tengah'
            ],
            [
                'id' => '1603020',
                'kabupaten_id' => '1603',
                'nama' => 'Tanjung Agung'
            ],
            [
                'id' => '1603031',
                'kabupaten_id' => '1603',
                'nama' => 'Rambang'
            ],
            [
                'id' => '1603032',
                'kabupaten_id' => '1603',
                'nama' => 'Lubai'
            ],
            [
                'id' => '1603040',
                'kabupaten_id' => '1603',
                'nama' => 'Lawang Kidul'
            ],
            [
                'id' => '1603050',
                'kabupaten_id' => '1603',
                'nama' => 'Muara Enim'
            ],
            [
                'id' => '1603051',
                'kabupaten_id' => '1603',
                'nama' => 'Ujan Mas'
            ],
            [
                'id' => '1603060',
                'kabupaten_id' => '1603',
                'nama' => 'Gunung Megang'
            ],
            [
                'id' => '1603061',
                'kabupaten_id' => '1603',
                'nama' => 'Benakat'
            ],
            [
                'id' => '1603062',
                'kabupaten_id' => '1603',
                'nama' => 'Belimbing'
            ],
            [
                'id' => '1603070',
                'kabupaten_id' => '1603',
                'nama' => 'Rambang Dangku'
            ],
            [
                'id' => '1603080',
                'kabupaten_id' => '1603',
                'nama' => 'Talang Ubi'
            ],
            [
                'id' => '1603081',
                'kabupaten_id' => '1603',
                'nama' => 'Penukal'
            ],
            [
                'id' => '1603082',
                'kabupaten_id' => '1603',
                'nama' => 'Tanah Abang'
            ],
            [
                'id' => '1603083',
                'kabupaten_id' => '1603',
                'nama' => 'Penukal Utara'
            ],
            [
                'id' => '1603084',
                'kabupaten_id' => '1603',
                'nama' => 'Abab'
            ],
            [
                'id' => '1603090',
                'kabupaten_id' => '1603',
                'nama' => 'Gelumbang'
            ],
            [
                'id' => '1603091',
                'kabupaten_id' => '1603',
                'nama' => 'Lembak'
            ],
            [
                'id' => '1603092',
                'kabupaten_id' => '1603',
                'nama' => 'Sungai Rotan'
            ],
            [
                'id' => '1603093',
                'kabupaten_id' => '1603',
                'nama' => 'Muara Belida'
            ],
            [
                'id' => '1603094',
                'kabupaten_id' => '1603',
                'nama' => 'Kelekar'
            ],
            [
                'id' => '1603095',
                'kabupaten_id' => '1603',
                'nama' => 'Belida Darat'
            ],
            [
                'id' => '1604011',
                'kabupaten_id' => '1604',
                'nama' => 'Tanjung Sakti Pumi'
            ],
            [
                'id' => '1604012',
                'kabupaten_id' => '1604',
                'nama' => 'Tanjung Sakti Pumu'
            ],
            [
                'id' => '1604040',
                'kabupaten_id' => '1604',
                'nama' => 'Kota Agung'
            ],
            [
                'id' => '1604041',
                'kabupaten_id' => '1604',
                'nama' => 'Mulak Ulu'
            ],
            [
                'id' => '1604042',
                'kabupaten_id' => '1604',
                'nama' => 'Tanjung Tebat'
            ],
            [
                'id' => '1604050',
                'kabupaten_id' => '1604',
                'nama' => 'Pulau Pinang'
            ],
            [
                'id' => '1604051',
                'kabupaten_id' => '1604',
                'nama' => 'Pagar Gunung'
            ],
            [
                'id' => '1604052',
                'kabupaten_id' => '1604',
                'nama' => 'Gumay Ulu'
            ],
            [
                'id' => '1604060',
                'kabupaten_id' => '1604',
                'nama' => 'Jarai'
            ],
            [
                'id' => '1604061',
                'kabupaten_id' => '1604',
                'nama' => 'Pajar Bulan'
            ],
            [
                'id' => '1604062',
                'kabupaten_id' => '1604',
                'nama' => 'Muara Payang'
            ],
            [
                'id' => '1604063',
                'kabupaten_id' => '1604',
                'nama' => 'Sukamerindu'
            ],
            [
                'id' => '1604111',
                'kabupaten_id' => '1604',
                'nama' => 'Kikim Barat'
            ],
            [
                'id' => '1604112',
                'kabupaten_id' => '1604',
                'nama' => 'Kikim Timur'
            ],
            [
                'id' => '1604113',
                'kabupaten_id' => '1604',
                'nama' => 'Kikim Selatan'
            ],
            [
                'id' => '1604114',
                'kabupaten_id' => '1604',
                'nama' => 'Kikim Tengah'
            ],
            [
                'id' => '1604120',
                'kabupaten_id' => '1604',
                'nama' => 'Lahat'
            ],
            [
                'id' => '1604121',
                'kabupaten_id' => '1604',
                'nama' => 'Gumay Talang'
            ],
            [
                'id' => '1604122',
                'kabupaten_id' => '1604',
                'nama' => 'Pseksu'
            ],
            [
                'id' => '1604131',
                'kabupaten_id' => '1604',
                'nama' => 'Merapi Barat'
            ],
            [
                'id' => '1604132',
                'kabupaten_id' => '1604',
                'nama' => 'Merapi Timur'
            ],
            [
                'id' => '1604133',
                'kabupaten_id' => '1604',
                'nama' => 'Merapi Selatan'
            ],
            [
                'id' => '1605010',
                'kabupaten_id' => '1605',
                'nama' => 'Rawas Ulu'
            ],
            [
                'id' => '1605011',
                'kabupaten_id' => '1605',
                'nama' => 'Ulu Rawas'
            ],
            [
                'id' => '1605020',
                'kabupaten_id' => '1605',
                'nama' => 'Rupit'
            ],
            [
                'id' => '1605021',
                'kabupaten_id' => '1605',
                'nama' => 'Karang Jaya'
            ],
            [
                'id' => '1605030',
                'kabupaten_id' => '1605',
                'nama' => 'Suku Tengah Lakitan Ulu'
            ],
            [
                'id' => '1605031',
                'kabupaten_id' => '1605',
                'nama' => 'Selangit'
            ],
            [
                'id' => '1605032',
                'kabupaten_id' => '1605',
                'nama' => 'Sumber Harta'
            ],
            [
                'id' => '1605040',
                'kabupaten_id' => '1605',
                'nama' => 'Tugumulyo'
            ],
            [
                'id' => '1605041',
                'kabupaten_id' => '1605',
                'nama' => 'Purwodadi'
            ],
            [
                'id' => '1605050',
                'kabupaten_id' => '1605',
                'nama' => 'Muara Beliti'
            ],
            [
                'id' => '1605051',
                'kabupaten_id' => '1605',
                'nama' => 'Tiang Pumpung Kepungut'
            ],
            [
                'id' => '1605060',
                'kabupaten_id' => '1605',
                'nama' => 'Jayaloka'
            ],
            [
                'id' => '1605061',
                'kabupaten_id' => '1605',
                'nama' => 'Suka Karya'
            ],
            [
                'id' => '1605070',
                'kabupaten_id' => '1605',
                'nama' => 'Muara Kelingi'
            ],
            [
                'id' => '1605071',
                'kabupaten_id' => '1605',
                'nama' => 'Bulang Tengah Suku Ulu'
            ],
            [
                'id' => '1605072',
                'kabupaten_id' => '1605',
                'nama' => 'Tuah Negeri'
            ],
            [
                'id' => '1605080',
                'kabupaten_id' => '1605',
                'nama' => 'Muara Lakitan'
            ],
            [
                'id' => '1605090',
                'kabupaten_id' => '1605',
                'nama' => 'Megang Sakti'
            ],
            [
                'id' => '1605100',
                'kabupaten_id' => '1605',
                'nama' => 'Rawas Ilir'
            ],
            [
                'id' => '1605101',
                'kabupaten_id' => '1605',
                'nama' => 'Karang Dapo'
            ],
            [
                'id' => '1605102',
                'kabupaten_id' => '1605',
                'nama' => 'Nibung'
            ],
            [
                'id' => '1606010',
                'kabupaten_id' => '1606',
                'nama' => 'Sanga Desa'
            ],
            [
                'id' => '1606020',
                'kabupaten_id' => '1606',
                'nama' => 'Babat Toman'
            ],
            [
                'id' => '1606021',
                'kabupaten_id' => '1606',
                'nama' => 'Batanghari Leko'
            ],
            [
                'id' => '1606022',
                'kabupaten_id' => '1606',
                'nama' => 'Plakat Tinggi'
            ],
            [
                'id' => '1606023',
                'kabupaten_id' => '1606',
                'nama' => 'Lawang Wetan'
            ],
            [
                'id' => '1606030',
                'kabupaten_id' => '1606',
                'nama' => 'Sungai Keruh'
            ],
            [
                'id' => '1606040',
                'kabupaten_id' => '1606',
                'nama' => 'Sekayu'
            ],
            [
                'id' => '1606041',
                'kabupaten_id' => '1606',
                'nama' => 'Lais'
            ],
            [
                'id' => '1606090',
                'kabupaten_id' => '1606',
                'nama' => 'Sungai Lilin'
            ],
            [
                'id' => '1606091',
                'kabupaten_id' => '1606',
                'nama' => 'Keluang'
            ],
            [
                'id' => '1606092',
                'kabupaten_id' => '1606',
                'nama' => 'Babat Supat'
            ],
            [
                'id' => '1606100',
                'kabupaten_id' => '1606',
                'nama' => 'Bayung Lencir'
            ],
            [
                'id' => '1606101',
                'kabupaten_id' => '1606',
                'nama' => 'Lalan'
            ],
            [
                'id' => '1606102',
                'kabupaten_id' => '1606',
                'nama' => 'Tungkal Jaya'
            ],
            [
                'id' => '1607010',
                'kabupaten_id' => '1607',
                'nama' => 'Rantau Bayur'
            ],
            [
                'id' => '1607020',
                'kabupaten_id' => '1607',
                'nama' => 'Betung'
            ],
            [
                'id' => '1607021',
                'kabupaten_id' => '1607',
                'nama' => 'Suak Tapeh'
            ],
            [
                'id' => '1607030',
                'kabupaten_id' => '1607',
                'nama' => 'Pulau Rimau'
            ],
            [
                'id' => '1607031',
                'kabupaten_id' => '1607',
                'nama' => 'Tungkal Ilir'
            ],
            [
                'id' => '1607040',
                'kabupaten_id' => '1607',
                'nama' => 'Banyuasin Iii'
            ],
            [
                'id' => '1607041',
                'kabupaten_id' => '1607',
                'nama' => 'Sembawa'
            ],
            [
                'id' => '1607050',
                'kabupaten_id' => '1607',
                'nama' => 'Talang Kelapa'
            ],
            [
                'id' => '1607051',
                'kabupaten_id' => '1607',
                'nama' => 'Tanjung Lago'
            ],
            [
                'id' => '1607060',
                'kabupaten_id' => '1607',
                'nama' => 'Banyuasin I'
            ],
            [
                'id' => '1607061',
                'kabupaten_id' => '1607',
                'nama' => 'Air Kumbang'
            ],
            [
                'id' => '1607070',
                'kabupaten_id' => '1607',
                'nama' => 'Rambutan'
            ],
            [
                'id' => '1607080',
                'kabupaten_id' => '1607',
                'nama' => 'Muara Padang'
            ],
            [
                'id' => '1607081',
                'kabupaten_id' => '1607',
                'nama' => 'Muara Sugihan'
            ],
            [
                'id' => '1607090',
                'kabupaten_id' => '1607',
                'nama' => 'Makarti Jaya'
            ],
            [
                'id' => '1607091',
                'kabupaten_id' => '1607',
                'nama' => 'Air Saleh'
            ],
            [
                'id' => '1607100',
                'kabupaten_id' => '1607',
                'nama' => 'Banyuasin Ii'
            ],
            [
                'id' => '1607110',
                'kabupaten_id' => '1607',
                'nama' => 'Muara Telang'
            ],
            [
                'id' => '1607111',
                'kabupaten_id' => '1607',
                'nama' => 'Sumber Marga Telang'
            ],
            [
                'id' => '1608010',
                'kabupaten_id' => '1608',
                'nama' => 'Mekakau Ilir'
            ],
            [
                'id' => '1608020',
                'kabupaten_id' => '1608',
                'nama' => 'Banding Agung'
            ],
            [
                'id' => '1608021',
                'kabupaten_id' => '1608',
                'nama' => 'Warkuk Ranau Selatan'
            ],
            [
                'id' => '1608030',
                'kabupaten_id' => '1608',
                'nama' => 'Buay Pemaca'
            ],
            [
                'id' => '1608040',
                'kabupaten_id' => '1608',
                'nama' => 'Simpang'
            ],
            [
                'id' => '1608041',
                'kabupaten_id' => '1608',
                'nama' => 'Buana Pemaca'
            ],
            [
                'id' => '1608050',
                'kabupaten_id' => '1608',
                'nama' => 'Muaradua'
            ],
            [
                'id' => '1608051',
                'kabupaten_id' => '1608',
                'nama' => 'Buay Rawan'
            ],
            [
                'id' => '1608060',
                'kabupaten_id' => '1608',
                'nama' => 'Buay Sandang Aji'
            ],
            [
                'id' => '1608061',
                'kabupaten_id' => '1608',
                'nama' => 'Tiga Dihaji'
            ],
            [
                'id' => '1608070',
                'kabupaten_id' => '1608',
                'nama' => 'Buay Runjung'
            ],
            [
                'id' => '1608071',
                'kabupaten_id' => '1608',
                'nama' => 'Runjung Agung'
            ],
            [
                'id' => '1608080',
                'kabupaten_id' => '1608',
                'nama' => 'Kisam Tinggi'
            ],
            [
                'id' => '1608090',
                'kabupaten_id' => '1608',
                'nama' => 'Muaradua Kisam'
            ],
            [
                'id' => '1608091',
                'kabupaten_id' => '1608',
                'nama' => 'Kisam Ilir'
            ],
            [
                'id' => '1608100',
                'kabupaten_id' => '1608',
                'nama' => 'Pulau Beringin'
            ],
            [
                'id' => '1608101',
                'kabupaten_id' => '1608',
                'nama' => 'Sindang Danau'
            ],
            [
                'id' => '1608102',
                'kabupaten_id' => '1608',
                'nama' => 'Sungai Are'
            ],
            [
                'id' => '1609010',
                'kabupaten_id' => '1609',
                'nama' => 'Martapura'
            ],
            [
                'id' => '1609011',
                'kabupaten_id' => '1609',
                'nama' => 'Bunga Mayang'
            ],
            [
                'id' => '1609012',
                'kabupaten_id' => '1609',
                'nama' => 'Jaya Pura'
            ],
            [
                'id' => '1609020',
                'kabupaten_id' => '1609',
                'nama' => 'Buay Pemuka Peliung'
            ],
            [
                'id' => '1609030',
                'kabupaten_id' => '1609',
                'nama' => 'Buay Madang'
            ],
            [
                'id' => '1609031',
                'kabupaten_id' => '1609',
                'nama' => 'Buay Madang Timur'
            ],
            [
                'id' => '1609032',
                'kabupaten_id' => '1609',
                'nama' => 'Buay Pemuka Bangsa Raja'
            ],
            [
                'id' => '1609040',
                'kabupaten_id' => '1609',
                'nama' => 'Madang Suku Ii'
            ],
            [
                'id' => '1609041',
                'kabupaten_id' => '1609',
                'nama' => 'Madang Suku Iii'
            ],
            [
                'id' => '1609050',
                'kabupaten_id' => '1609',
                'nama' => 'Madang Suku I'
            ],
            [
                'id' => '1609051',
                'kabupaten_id' => '1609',
                'nama' => 'Belitang Madang Raya'
            ],
            [
                'id' => '1609060',
                'kabupaten_id' => '1609',
                'nama' => 'Belitang'
            ],
            [
                'id' => '1609061',
                'kabupaten_id' => '1609',
                'nama' => 'Belitang Jaya'
            ],
            [
                'id' => '1609070',
                'kabupaten_id' => '1609',
                'nama' => 'Belitang Iii'
            ],
            [
                'id' => '1609080',
                'kabupaten_id' => '1609',
                'nama' => 'Belitang Ii'
            ],
            [
                'id' => '1609081',
                'kabupaten_id' => '1609',
                'nama' => 'Belitang Mulya'
            ],
            [
                'id' => '1609090',
                'kabupaten_id' => '1609',
                'nama' => 'Semendawai Suku Iii'
            ],
            [
                'id' => '1609091',
                'kabupaten_id' => '1609',
                'nama' => 'Semendawai Timur'
            ],
            [
                'id' => '1609100',
                'kabupaten_id' => '1609',
                'nama' => 'Cempaka'
            ],
            [
                'id' => '1609101',
                'kabupaten_id' => '1609',
                'nama' => 'Semendawai Barat'
            ],
            [
                'id' => '1610010',
                'kabupaten_id' => '1610',
                'nama' => 'Muara Kuang'
            ],
            [
                'id' => '1610011',
                'kabupaten_id' => '1610',
                'nama' => 'Rambang Kuang'
            ],
            [
                'id' => '1610012',
                'kabupaten_id' => '1610',
                'nama' => 'Lubuk Keliat'
            ],
            [
                'id' => '1610020',
                'kabupaten_id' => '1610',
                'nama' => 'Tanjung Batu'
            ],
            [
                'id' => '1610021',
                'kabupaten_id' => '1610',
                'nama' => 'Payaraman'
            ],
            [
                'id' => '1610030',
                'kabupaten_id' => '1610',
                'nama' => 'Rantau Alai'
            ],
            [
                'id' => '1610031',
                'kabupaten_id' => '1610',
                'nama' => 'Kandis'
            ],
            [
                'id' => '1610040',
                'kabupaten_id' => '1610',
                'nama' => 'Tanjung Raja'
            ],
            [
                'id' => '1610041',
                'kabupaten_id' => '1610',
                'nama' => 'Rantau Panjang'
            ],
            [
                'id' => '1610042',
                'kabupaten_id' => '1610',
                'nama' => 'Sungai Pinang'
            ],
            [
                'id' => '1610050',
                'kabupaten_id' => '1610',
                'nama' => 'Pemulutan'
            ],
            [
                'id' => '1610051',
                'kabupaten_id' => '1610',
                'nama' => 'Pemulutan Selatan'
            ],
            [
                'id' => '1610052',
                'kabupaten_id' => '1610',
                'nama' => 'Pemulutan Barat'
            ],
            [
                'id' => '1610060',
                'kabupaten_id' => '1610',
                'nama' => 'Indralaya'
            ],
            [
                'id' => '1610061',
                'kabupaten_id' => '1610',
                'nama' => 'Indralaya Utara'
            ],
            [
                'id' => '1610062',
                'kabupaten_id' => '1610',
                'nama' => 'Indralaya Selatan'
            ],
            [
                'id' => '1611010',
                'kabupaten_id' => '1611',
                'nama' => 'Muara Pinang'
            ],
            [
                'id' => '1611020',
                'kabupaten_id' => '1611',
                'nama' => 'Lintang Kanan'
            ],
            [
                'id' => '1611030',
                'kabupaten_id' => '1611',
                'nama' => 'Pendopo'
            ],
            [
                'id' => '1611031',
                'kabupaten_id' => '1611',
                'nama' => 'Pendopo Barat'
            ],
            [
                'id' => '1611040',
                'kabupaten_id' => '1611',
                'nama' => 'Pasemah Air Keruh'
            ],
            [
                'id' => '1611050',
                'kabupaten_id' => '1611',
                'nama' => 'Ulu Musi'
            ],
            [
                'id' => '1611051',
                'kabupaten_id' => '1611',
                'nama' => 'Sikap Dalam'
            ],
            [
                'id' => '1611060',
                'kabupaten_id' => '1611',
                'nama' => 'Talang Padang'
            ],
            [
                'id' => '1611070',
                'kabupaten_id' => '1611',
                'nama' => 'Tebing Tinggi'
            ],
            [
                'id' => '1611071',
                'kabupaten_id' => '1611',
                'nama' => 'Saling'
            ],
            [
                'id' => '1671010',
                'kabupaten_id' => '1671',
                'nama' => 'Ilir Barat Ii'
            ],
            [
                'id' => '1671011',
                'kabupaten_id' => '1671',
                'nama' => 'Gandus'
            ],
            [
                'id' => '1671020',
                'kabupaten_id' => '1671',
                'nama' => 'Seberang Ulu I'
            ],
            [
                'id' => '1671021',
                'kabupaten_id' => '1671',
                'nama' => 'Kertapati'
            ],
            [
                'id' => '1671030',
                'kabupaten_id' => '1671',
                'nama' => 'Seberang Ulu Ii'
            ],
            [
                'id' => '1671031',
                'kabupaten_id' => '1671',
                'nama' => 'Plaju'
            ],
            [
                'id' => '1671040',
                'kabupaten_id' => '1671',
                'nama' => 'Ilir Barat I'
            ],
            [
                'id' => '1671041',
                'kabupaten_id' => '1671',
                'nama' => 'Bukit Kecil'
            ],
            [
                'id' => '1671050',
                'kabupaten_id' => '1671',
                'nama' => 'Ilir Timur I'
            ],
            [
                'id' => '1671051',
                'kabupaten_id' => '1671',
                'nama' => 'Kemuning'
            ],
            [
                'id' => '1671060',
                'kabupaten_id' => '1671',
                'nama' => 'Ilir Timur Ii'
            ],
            [
                'id' => '1671061',
                'kabupaten_id' => '1671',
                'nama' => 'Kalidoni'
            ],
            [
                'id' => '1671070',
                'kabupaten_id' => '1671',
                'nama' => 'Sako'
            ],
            [
                'id' => '1671071',
                'kabupaten_id' => '1671',
                'nama' => 'Sematang Borang'
            ],
            [
                'id' => '1671080',
                'kabupaten_id' => '1671',
                'nama' => 'Sukarami'
            ],
            [
                'id' => '1671081',
                'kabupaten_id' => '1671',
                'nama' => 'Alang Alang Lebar'
            ],
            [
                'id' => '1672010',
                'kabupaten_id' => '1672',
                'nama' => 'Rambang Kapak Tengah'
            ],
            [
                'id' => '1672020',
                'kabupaten_id' => '1672',
                'nama' => 'Prabumulih Timur'
            ],
            [
                'id' => '1672021',
                'kabupaten_id' => '1672',
                'nama' => 'Prabumulih Selatan'
            ],
            [
                'id' => '1672030',
                'kabupaten_id' => '1672',
                'nama' => 'Prabumulih Barat'
            ],
            [
                'id' => '1672031',
                'kabupaten_id' => '1672',
                'nama' => 'Prabumulih Utara'
            ],
            [
                'id' => '1672040',
                'kabupaten_id' => '1672',
                'nama' => 'Cambai'
            ],
            [
                'id' => '1673010',
                'kabupaten_id' => '1673',
                'nama' => 'Dempo Selatan'
            ],
            [
                'id' => '1673011',
                'kabupaten_id' => '1673',
                'nama' => 'Dempo Tengah'
            ],
            [
                'id' => '1673020',
                'kabupaten_id' => '1673',
                'nama' => 'Dempo Utara'
            ],
            [
                'id' => '1673030',
                'kabupaten_id' => '1673',
                'nama' => 'Pagar Alam Selatan'
            ],
            [
                'id' => '1673040',
                'kabupaten_id' => '1673',
                'nama' => 'Pagar Alam Utara'
            ],
            [
                'id' => '1674011',
                'kabupaten_id' => '1674',
                'nama' => 'Lubuk Linggau Barat I'
            ],
            [
                'id' => '1674012',
                'kabupaten_id' => '1674',
                'nama' => 'Lubuk Linggau Barat Ii'
            ],
            [
                'id' => '1674021',
                'kabupaten_id' => '1674',
                'nama' => 'Lubuk Linggau Selatan I'
            ],
            [
                'id' => '1674022',
                'kabupaten_id' => '1674',
                'nama' => 'Lubuk Linggau Selatan Ii'
            ],
            [
                'id' => '1674031',
                'kabupaten_id' => '1674',
                'nama' => 'Lubuk Linggau Timur I'
            ],
            [
                'id' => '1674032',
                'kabupaten_id' => '1674',
                'nama' => 'Lubuk Linggau Timur Ii'
            ],
            [
                'id' => '1674041',
                'kabupaten_id' => '1674',
                'nama' => 'Lubuk Linggau Utara I'
            ],
            [
                'id' => '1674042',
                'kabupaten_id' => '1674',
                'nama' => 'Lubuk Linggau Utara Ii'
            ],
            [
                'id' => '1701040',
                'kabupaten_id' => '1701',
                'nama' => 'Manna'
            ],
            [
                'id' => '1701041',
                'kabupaten_id' => '1701',
                'nama' => 'Kota Manna'
            ],
            [
                'id' => '1701042',
                'kabupaten_id' => '1701',
                'nama' => 'Kedurang'
            ],
            [
                'id' => '1701043',
                'kabupaten_id' => '1701',
                'nama' => 'Bunga Mas'
            ],
            [
                'id' => '1701044',
                'kabupaten_id' => '1701',
                'nama' => 'Pasar Manna'
            ],
            [
                'id' => '1701045',
                'kabupaten_id' => '1701',
                'nama' => 'Kedurang Ilir'
            ],
            [
                'id' => '1701050',
                'kabupaten_id' => '1701',
                'nama' => 'Seginim'
            ],
            [
                'id' => '1701051',
                'kabupaten_id' => '1701',
                'nama' => 'Air Nipis'
            ],
            [
                'id' => '1701060',
                'kabupaten_id' => '1701',
                'nama' => 'Pino'
            ],
            [
                'id' => '1701061',
                'kabupaten_id' => '1701',
                'nama' => 'Pinoraya'
            ],
            [
                'id' => '1701062',
                'kabupaten_id' => '1701',
                'nama' => 'Ulu Manna'
            ],
            [
                'id' => '1702020',
                'kabupaten_id' => '1702',
                'nama' => 'Kota Padang'
            ],
            [
                'id' => '1702021',
                'kabupaten_id' => '1702',
                'nama' => 'Sindang Beliti Ilir'
            ],
            [
                'id' => '1702030',
                'kabupaten_id' => '1702',
                'nama' => 'Padang Ulak Tanding'
            ],
            [
                'id' => '1702031',
                'kabupaten_id' => '1702',
                'nama' => 'Sindang Kelingi'
            ],
            [
                'id' => '1702032',
                'kabupaten_id' => '1702',
                'nama' => 'Bindu Riang'
            ],
            [
                'id' => '1702033',
                'kabupaten_id' => '1702',
                'nama' => 'Sindang Beliti Ulu'
            ],
            [
                'id' => '1702034',
                'kabupaten_id' => '1702',
                'nama' => 'Sindang Dataran'
            ],
            [
                'id' => '1702040',
                'kabupaten_id' => '1702',
                'nama' => 'Curup'
            ],
            [
                'id' => '1702041',
                'kabupaten_id' => '1702',
                'nama' => 'Bermani Ulu'
            ],
            [
                'id' => '1702042',
                'kabupaten_id' => '1702',
                'nama' => 'Selupu Rejang'
            ],
            [
                'id' => '1702043',
                'kabupaten_id' => '1702',
                'nama' => 'Curup Selatan'
            ],
            [
                'id' => '1702044',
                'kabupaten_id' => '1702',
                'nama' => 'Curup Tengah'
            ],
            [
                'id' => '1702045',
                'kabupaten_id' => '1702',
                'nama' => 'Bermani Ulu Raya'
            ],
            [
                'id' => '1702046',
                'kabupaten_id' => '1702',
                'nama' => 'Curup Utara'
            ],
            [
                'id' => '1702047',
                'kabupaten_id' => '1702',
                'nama' => 'Curup Timur'
            ],
            [
                'id' => '1703010',
                'kabupaten_id' => '1703',
                'nama' => 'Enggano'
            ],
            [
                'id' => '1703050',
                'kabupaten_id' => '1703',
                'nama' => 'Kerkap'
            ],
            [
                'id' => '1703051',
                'kabupaten_id' => '1703',
                'nama' => 'Air Napal'
            ],
            [
                'id' => '1703052',
                'kabupaten_id' => '1703',
                'nama' => 'Air Besi'
            ],
            [
                'id' => '1703053',
                'kabupaten_id' => '1703',
                'nama' => 'Hulu Palik'
            ],
            [
                'id' => '1703054',
                'kabupaten_id' => '1703',
                'nama' => 'Tanjung Agung Palik'
            ],
            [
                'id' => '1703060',
                'kabupaten_id' => '1703',
                'nama' => 'Arga Makmur'
            ],
            [
                'id' => '1703061',
                'kabupaten_id' => '1703',
                'nama' => 'Arma Jaya'
            ],
            [
                'id' => '1703070',
                'kabupaten_id' => '1703',
                'nama' => 'Lais'
            ],
            [
                'id' => '1703071',
                'kabupaten_id' => '1703',
                'nama' => 'Batik Nau'
            ],
            [
                'id' => '1703072',
                'kabupaten_id' => '1703',
                'nama' => 'Giri Mulya'
            ],
            [
                'id' => '1703073',
                'kabupaten_id' => '1703',
                'nama' => 'Air Padang'
            ],
            [
                'id' => '1703080',
                'kabupaten_id' => '1703',
                'nama' => 'Padang Jaya'
            ],
            [
                'id' => '1703090',
                'kabupaten_id' => '1703',
                'nama' => 'Ketahun'
            ],
            [
                'id' => '1703091',
                'kabupaten_id' => '1703',
                'nama' => 'Napal Putih'
            ],
            [
                'id' => '1703092',
                'kabupaten_id' => '1703',
                'nama' => 'Ulok Kupai'
            ],
            [
                'id' => '1703100',
                'kabupaten_id' => '1703',
                'nama' => 'Putri Hijau'
            ],
            [
                'id' => '1704010',
                'kabupaten_id' => '1704',
                'nama' => 'Nasal'
            ],
            [
                'id' => '1704020',
                'kabupaten_id' => '1704',
                'nama' => 'Maje'
            ],
            [
                'id' => '1704030',
                'kabupaten_id' => '1704',
                'nama' => 'Kaur Selatan'
            ],
            [
                'id' => '1704031',
                'kabupaten_id' => '1704',
                'nama' => 'Tetap'
            ],
            [
                'id' => '1704040',
                'kabupaten_id' => '1704',
                'nama' => 'Kaur Tengah'
            ],
            [
                'id' => '1704041',
                'kabupaten_id' => '1704',
                'nama' => 'Luas'
            ],
            [
                'id' => '1704042',
                'kabupaten_id' => '1704',
                'nama' => 'Muara Sahung'
            ],
            [
                'id' => '1704050',
                'kabupaten_id' => '1704',
                'nama' => 'Kinal'
            ],
            [
                'id' => '1704051',
                'kabupaten_id' => '1704',
                'nama' => 'Semidang Gumay'
            ],
            [
                'id' => '1704060',
                'kabupaten_id' => '1704',
                'nama' => 'Tanjung Kemuning'
            ],
            [
                'id' => '1704061',
                'kabupaten_id' => '1704',
                'nama' => 'Kelam Tengah'
            ],
            [
                'id' => '1704070',
                'kabupaten_id' => '1704',
                'nama' => 'Kaur Utara'
            ],
            [
                'id' => '1704071',
                'kabupaten_id' => '1704',
                'nama' => 'Padang Guci Hilir'
            ],
            [
                'id' => '1704072',
                'kabupaten_id' => '1704',
                'nama' => 'Lungkang Kule'
            ],
            [
                'id' => '1704073',
                'kabupaten_id' => '1704',
                'nama' => 'Padang Guci Hulu'
            ],
            [
                'id' => '1705010',
                'kabupaten_id' => '1705',
                'nama' => 'Semidang Alas Maras'
            ],
            [
                'id' => '1705020',
                'kabupaten_id' => '1705',
                'nama' => 'Semidang Alas'
            ],
            [
                'id' => '1705030',
                'kabupaten_id' => '1705',
                'nama' => 'Talo'
            ],
            [
                'id' => '1705031',
                'kabupaten_id' => '1705',
                'nama' => 'Ilir Talo'
            ],
            [
                'id' => '1705032',
                'kabupaten_id' => '1705',
                'nama' => 'Talo Kecil'
            ],
            [
                'id' => '1705033',
                'kabupaten_id' => '1705',
                'nama' => 'Ulu Talo'
            ],
            [
                'id' => '1705040',
                'kabupaten_id' => '1705',
                'nama' => 'Seluma'
            ],
            [
                'id' => '1705041',
                'kabupaten_id' => '1705',
                'nama' => 'Seluma Selatan'
            ],
            [
                'id' => '1705042',
                'kabupaten_id' => '1705',
                'nama' => 'Seluma Barat'
            ],
            [
                'id' => '1705043',
                'kabupaten_id' => '1705',
                'nama' => 'Seluma Timur'
            ],
            [
                'id' => '1705044',
                'kabupaten_id' => '1705',
                'nama' => 'Seluma Utara'
            ],
            [
                'id' => '1705050',
                'kabupaten_id' => '1705',
                'nama' => 'Sukaraja'
            ],
            [
                'id' => '1705051',
                'kabupaten_id' => '1705',
                'nama' => 'Air Periukan'
            ],
            [
                'id' => '1705052',
                'kabupaten_id' => '1705',
                'nama' => 'Lubuk Sandi'
            ],
            [
                'id' => '1706010',
                'kabupaten_id' => '1706',
                'nama' => 'Ipuh'
            ],
            [
                'id' => '1706011',
                'kabupaten_id' => '1706',
                'nama' => 'Air Rami'
            ],
            [
                'id' => '1706012',
                'kabupaten_id' => '1706',
                'nama' => 'Malin Deman'
            ],
            [
                'id' => '1706020',
                'kabupaten_id' => '1706',
                'nama' => 'Pondok Suguh'
            ],
            [
                'id' => '1706021',
                'kabupaten_id' => '1706',
                'nama' => 'Sungai Rumbai'
            ],
            [
                'id' => '1706022',
                'kabupaten_id' => '1706',
                'nama' => 'Teramang Jaya'
            ],
            [
                'id' => '1706030',
                'kabupaten_id' => '1706',
                'nama' => 'Teras Terunjam'
            ],
            [
                'id' => '1706031',
                'kabupaten_id' => '1706',
                'nama' => 'Penarik'
            ],
            [
                'id' => '1706032',
                'kabupaten_id' => '1706',
                'nama' => 'Selagan Raya'
            ],
            [
                'id' => '1706040',
                'kabupaten_id' => '1706',
                'nama' => 'Kota Mukomuko'
            ],
            [
                'id' => '1706041',
                'kabupaten_id' => '1706',
                'nama' => 'Air Dikit'
            ],
            [
                'id' => '1706042',
                'kabupaten_id' => '1706',
                'nama' => 'Xiv Koto'
            ],
            [
                'id' => '1706050',
                'kabupaten_id' => '1706',
                'nama' => 'Lubuk Pinang'
            ],
            [
                'id' => '1706051',
                'kabupaten_id' => '1706',
                'nama' => 'Air Manjunto'
            ],
            [
                'id' => '1706052',
                'kabupaten_id' => '1706',
                'nama' => 'V Koto'
            ],
            [
                'id' => '1707010',
                'kabupaten_id' => '1707',
                'nama' => 'Rimbo Pengadang'
            ],
            [
                'id' => '1707011',
                'kabupaten_id' => '1707',
                'nama' => 'Topos'
            ],
            [
                'id' => '1707020',
                'kabupaten_id' => '1707',
                'nama' => 'Lebong Selatan'
            ],
            [
                'id' => '1707021',
                'kabupaten_id' => '1707',
                'nama' => 'Bingin Kuning'
            ],
            [
                'id' => '1707030',
                'kabupaten_id' => '1707',
                'nama' => 'Lebong Tengah'
            ],
            [
                'id' => '1707031',
                'kabupaten_id' => '1707',
                'nama' => 'Lebong Sakti'
            ],
            [
                'id' => '1707040',
                'kabupaten_id' => '1707',
                'nama' => 'Lebong Atas'
            ],
            [
                'id' => '1707041',
                'kabupaten_id' => '1707',
                'nama' => 'Padang Bano'
            ],
            [
                'id' => '1707042',
                'kabupaten_id' => '1707',
                'nama' => 'Pelabai'
            ],
            [
                'id' => '1707050',
                'kabupaten_id' => '1707',
                'nama' => 'Lebong Utara'
            ],
            [
                'id' => '1707051',
                'kabupaten_id' => '1707',
                'nama' => 'Amen'
            ],
            [
                'id' => '1707052',
                'kabupaten_id' => '1707',
                'nama' => 'Uram Jaya'
            ],
            [
                'id' => '1707053',
                'kabupaten_id' => '1707',
                'nama' => 'Pinang Belapis'
            ],
            [
                'id' => '1708010',
                'kabupaten_id' => '1708',
                'nama' => 'Muara Kemumu'
            ],
            [
                'id' => '1708020',
                'kabupaten_id' => '1708',
                'nama' => 'Bermani Ilir'
            ],
            [
                'id' => '1708030',
                'kabupaten_id' => '1708',
                'nama' => 'Seberang Musi'
            ],
            [
                'id' => '1708040',
                'kabupaten_id' => '1708',
                'nama' => 'Tebat Karai'
            ],
            [
                'id' => '1708050',
                'kabupaten_id' => '1708',
                'nama' => 'Kepahiang'
            ],
            [
                'id' => '1708060',
                'kabupaten_id' => '1708',
                'nama' => 'Kaba Wetan'
            ],
            [
                'id' => '1708070',
                'kabupaten_id' => '1708',
                'nama' => 'Ujan Mas'
            ],
            [
                'id' => '1708080',
                'kabupaten_id' => '1708',
                'nama' => 'Merigi'
            ],
            [
                'id' => '1709010',
                'kabupaten_id' => '1709',
                'nama' => 'Talang Empat'
            ],
            [
                'id' => '1709020',
                'kabupaten_id' => '1709',
                'nama' => 'Karang Tinggi'
            ],
            [
                'id' => '1709030',
                'kabupaten_id' => '1709',
                'nama' => 'Taba Penanjung'
            ],
            [
                'id' => '1709031',
                'kabupaten_id' => '1709',
                'nama' => 'Merigi Kelindang'
            ],
            [
                'id' => '1709040',
                'kabupaten_id' => '1709',
                'nama' => 'Pagar Jati'
            ],
            [
                'id' => '1709041',
                'kabupaten_id' => '1709',
                'nama' => 'Merigi Sakti'
            ],
            [
                'id' => '1709050',
                'kabupaten_id' => '1709',
                'nama' => 'Pondok Kelapa'
            ],
            [
                'id' => '1709051',
                'kabupaten_id' => '1709',
                'nama' => 'Pondok Kubang'
            ],
            [
                'id' => '1709060',
                'kabupaten_id' => '1709',
                'nama' => 'Pematang Tiga'
            ],
            [
                'id' => '1709061',
                'kabupaten_id' => '1709',
                'nama' => 'Bang Haji'
            ],
            [
                'id' => '1771010',
                'kabupaten_id' => '1771',
                'nama' => 'Selebar'
            ],
            [
                'id' => '1771011',
                'kabupaten_id' => '1771',
                'nama' => 'Kampung Melayu'
            ],
            [
                'id' => '1771020',
                'kabupaten_id' => '1771',
                'nama' => 'Gading Cempaka'
            ],
            [
                'id' => '1771021',
                'kabupaten_id' => '1771',
                'nama' => 'Ratu Agung'
            ],
            [
                'id' => '1771022',
                'kabupaten_id' => '1771',
                'nama' => 'Ratu Samban'
            ],
            [
                'id' => '1771023',
                'kabupaten_id' => '1771',
                'nama' => 'Singaran Pati'
            ],
            [
                'id' => '1771030',
                'kabupaten_id' => '1771',
                'nama' => 'Teluk Segara'
            ],
            [
                'id' => '1771031',
                'kabupaten_id' => '1771',
                'nama' => 'Sungai Serut'
            ],
            [
                'id' => '1771040',
                'kabupaten_id' => '1771',
                'nama' => 'Muara Bangka Hulu'
            ],
            [
                'id' => '1801040',
                'kabupaten_id' => '1801',
                'nama' => 'Balik Bukit'
            ],
            [
                'id' => '1801041',
                'kabupaten_id' => '1801',
                'nama' => 'Sukau'
            ],
            [
                'id' => '1801042',
                'kabupaten_id' => '1801',
                'nama' => 'Lumbok Seminung'
            ],
            [
                'id' => '1801050',
                'kabupaten_id' => '1801',
                'nama' => 'Belalau'
            ],
            [
                'id' => '1801051',
                'kabupaten_id' => '1801',
                'nama' => 'Sekincau'
            ],
            [
                'id' => '1801052',
                'kabupaten_id' => '1801',
                'nama' => 'Suoh'
            ],
            [
                'id' => '1801053',
                'kabupaten_id' => '1801',
                'nama' => 'Batu Brak'
            ],
            [
                'id' => '1801054',
                'kabupaten_id' => '1801',
                'nama' => 'Pagar Dewa'
            ],
            [
                'id' => '1801055',
                'kabupaten_id' => '1801',
                'nama' => 'Batu Ketulis'
            ],
            [
                'id' => '1801056',
                'kabupaten_id' => '1801',
                'nama' => 'Bandar Negeri Suoh'
            ],
            [
                'id' => '1801060',
                'kabupaten_id' => '1801',
                'nama' => 'Sumber Jaya'
            ],
            [
                'id' => '1801061',
                'kabupaten_id' => '1801',
                'nama' => 'Way Tenong'
            ],
            [
                'id' => '1801062',
                'kabupaten_id' => '1801',
                'nama' => 'Gedung Surian'
            ],
            [
                'id' => '1801063',
                'kabupaten_id' => '1801',
                'nama' => 'Kebun Tebu'
            ],
            [
                'id' => '1801064',
                'kabupaten_id' => '1801',
                'nama' => 'Air Hitam'
            ],
            [
                'id' => '1802010',
                'kabupaten_id' => '1802',
                'nama' => 'Wonosobo'
            ],
            [
                'id' => '1802011',
                'kabupaten_id' => '1802',
                'nama' => 'Semaka'
            ],
            [
                'id' => '1802012',
                'kabupaten_id' => '1802',
                'nama' => 'Bandar Negeri Semuong'
            ],
            [
                'id' => '1802020',
                'kabupaten_id' => '1802',
                'nama' => 'Kota Agung'
            ],
            [
                'id' => '1802021',
                'kabupaten_id' => '1802',
                'nama' => 'Pematang Sawa'
            ],
            [
                'id' => '1802022',
                'kabupaten_id' => '1802',
                'nama' => 'Kota Agung Timur'
            ],
            [
                'id' => '1802023',
                'kabupaten_id' => '1802',
                'nama' => 'Kota Agung Barat'
            ],
            [
                'id' => '1802030',
                'kabupaten_id' => '1802',
                'nama' => 'Pulau Panggung'
            ],
            [
                'id' => '1802031',
                'kabupaten_id' => '1802',
                'nama' => 'Ulubelu'
            ],
            [
                'id' => '1802032',
                'kabupaten_id' => '1802',
                'nama' => 'Air Naningan'
            ],
            [
                'id' => '1802040',
                'kabupaten_id' => '1802',
                'nama' => 'Talang Padang'
            ],
            [
                'id' => '1802041',
                'kabupaten_id' => '1802',
                'nama' => 'Sumberejo'
            ],
            [
                'id' => '1802042',
                'kabupaten_id' => '1802',
                'nama' => 'Gisting'
            ],
            [
                'id' => '1802043',
                'kabupaten_id' => '1802',
                'nama' => 'Gunung Alip'
            ],
            [
                'id' => '1802050',
                'kabupaten_id' => '1802',
                'nama' => 'Pugung'
            ],
            [
                'id' => '1802101',
                'kabupaten_id' => '1802',
                'nama' => 'Bulok'
            ],
            [
                'id' => '1802110',
                'kabupaten_id' => '1802',
                'nama' => 'Cukuh Balak'
            ],
            [
                'id' => '1802111',
                'kabupaten_id' => '1802',
                'nama' => 'Kelumbayan'
            ],
            [
                'id' => '1802112',
                'kabupaten_id' => '1802',
                'nama' => 'Limau'
            ],
            [
                'id' => '1802113',
                'kabupaten_id' => '1802',
                'nama' => 'Kelumbayan Barat'
            ],
            [
                'id' => '1803060',
                'kabupaten_id' => '1803',
                'nama' => 'Natar'
            ],
            [
                'id' => '1803070',
                'kabupaten_id' => '1803',
                'nama' => 'Jati Agung'
            ],
            [
                'id' => '1803080',
                'kabupaten_id' => '1803',
                'nama' => 'Tanjung Bintang'
            ],
            [
                'id' => '1803081',
                'kabupaten_id' => '1803',
                'nama' => 'Tanjung Sari'
            ],
            [
                'id' => '1803090',
                'kabupaten_id' => '1803',
                'nama' => 'Katibung'
            ],
            [
                'id' => '1803091',
                'kabupaten_id' => '1803',
                'nama' => 'Merbau Mataram'
            ],
            [
                'id' => '1803092',
                'kabupaten_id' => '1803',
                'nama' => 'Way Sulan'
            ],
            [
                'id' => '1803100',
                'kabupaten_id' => '1803',
                'nama' => 'Sidomulyo'
            ],
            [
                'id' => '1803101',
                'kabupaten_id' => '1803',
                'nama' => 'Candipuro'
            ],
            [
                'id' => '1803102',
                'kabupaten_id' => '1803',
                'nama' => 'Way Panji'
            ],
            [
                'id' => '1803110',
                'kabupaten_id' => '1803',
                'nama' => 'Kalianda'
            ],
            [
                'id' => '1803111',
                'kabupaten_id' => '1803',
                'nama' => 'Rajabasa'
            ],
            [
                'id' => '1803120',
                'kabupaten_id' => '1803',
                'nama' => 'Palas'
            ],
            [
                'id' => '1803121',
                'kabupaten_id' => '1803',
                'nama' => 'Sragi'
            ],
            [
                'id' => '1803130',
                'kabupaten_id' => '1803',
                'nama' => 'Penengahan'
            ],
            [
                'id' => '1803131',
                'kabupaten_id' => '1803',
                'nama' => 'Ketapang'
            ],
            [
                'id' => '1803132',
                'kabupaten_id' => '1803',
                'nama' => 'Bakauheni'
            ],
            [
                'id' => '1804010',
                'kabupaten_id' => '1804',
                'nama' => 'Metro Kibang'
            ],
            [
                'id' => '1804020',
                'kabupaten_id' => '1804',
                'nama' => 'Batanghari'
            ],
            [
                'id' => '1804030',
                'kabupaten_id' => '1804',
                'nama' => 'Sekampung'
            ],
            [
                'id' => '1804040',
                'kabupaten_id' => '1804',
                'nama' => 'Margatiga'
            ],
            [
                'id' => '1804050',
                'kabupaten_id' => '1804',
                'nama' => 'Sekampung Udik'
            ],
            [
                'id' => '1804060',
                'kabupaten_id' => '1804',
                'nama' => 'Jabung'
            ],
            [
                'id' => '1804061',
                'kabupaten_id' => '1804',
                'nama' => 'Pasir Sakti'
            ],
            [
                'id' => '1804062',
                'kabupaten_id' => '1804',
                'nama' => 'Waway Karya'
            ],
            [
                'id' => '1804063',
                'kabupaten_id' => '1804',
                'nama' => 'Marga Sekampung'
            ],
            [
                'id' => '1804070',
                'kabupaten_id' => '1804',
                'nama' => 'Labuhan Maringgai'
            ],
            [
                'id' => '1804071',
                'kabupaten_id' => '1804',
                'nama' => 'Mataram Baru'
            ],
            [
                'id' => '1804072',
                'kabupaten_id' => '1804',
                'nama' => 'Bandar Sribawono'
            ],
            [
                'id' => '1804073',
                'kabupaten_id' => '1804',
                'nama' => 'Melinting'
            ],
            [
                'id' => '1804074',
                'kabupaten_id' => '1804',
                'nama' => 'Gunung Pelindung'
            ],
            [
                'id' => '1804080',
                'kabupaten_id' => '1804',
                'nama' => 'Way Jepara'
            ],
            [
                'id' => '1804081',
                'kabupaten_id' => '1804',
                'nama' => 'Braja Slebah'
            ],
            [
                'id' => '1804082',
                'kabupaten_id' => '1804',
                'nama' => 'Labuhan Ratu'
            ],
            [
                'id' => '1804090',
                'kabupaten_id' => '1804',
                'nama' => 'Sukadana'
            ],
            [
                'id' => '1804091',
                'kabupaten_id' => '1804',
                'nama' => 'Bumi Agung'
            ],
            [
                'id' => '1804092',
                'kabupaten_id' => '1804',
                'nama' => 'Batanghari Nuban'
            ],
            [
                'id' => '1804100',
                'kabupaten_id' => '1804',
                'nama' => 'Pekalongan'
            ],
            [
                'id' => '1804110',
                'kabupaten_id' => '1804',
                'nama' => 'Raman Utara'
            ],
            [
                'id' => '1804120',
                'kabupaten_id' => '1804',
                'nama' => 'Purbolinggo'
            ],
            [
                'id' => '1804121',
                'kabupaten_id' => '1804',
                'nama' => 'Way Bungur'
            ],
            [
                'id' => '1805010',
                'kabupaten_id' => '1805',
                'nama' => 'Padang Ratu'
            ],
            [
                'id' => '1805011',
                'kabupaten_id' => '1805',
                'nama' => 'Selagai Lingga'
            ],
            [
                'id' => '1805012',
                'kabupaten_id' => '1805',
                'nama' => 'Pubian'
            ],
            [
                'id' => '1805013',
                'kabupaten_id' => '1805',
                'nama' => 'Anak Tuha'
            ],
            [
                'id' => '1805014',
                'kabupaten_id' => '1805',
                'nama' => 'Anak Ratu Aji'
            ],
            [
                'id' => '1805020',
                'kabupaten_id' => '1805',
                'nama' => 'Kalirejo'
            ],
            [
                'id' => '1805021',
                'kabupaten_id' => '1805',
                'nama' => 'Sendang Agung'
            ],
            [
                'id' => '1805030',
                'kabupaten_id' => '1805',
                'nama' => 'Bangunrejo'
            ],
            [
                'id' => '1805040',
                'kabupaten_id' => '1805',
                'nama' => 'Gunung Sugih'
            ],
            [
                'id' => '1805041',
                'kabupaten_id' => '1805',
                'nama' => 'Bekri'
            ],
            [
                'id' => '1805042',
                'kabupaten_id' => '1805',
                'nama' => 'Bumi Ratu Nuban'
            ],
            [
                'id' => '1805050',
                'kabupaten_id' => '1805',
                'nama' => 'Trimurjo'
            ],
            [
                'id' => '1805060',
                'kabupaten_id' => '1805',
                'nama' => 'Punggur'
            ],
            [
                'id' => '1805061',
                'kabupaten_id' => '1805',
                'nama' => 'Kota Gajah'
            ],
            [
                'id' => '1805070',
                'kabupaten_id' => '1805',
                'nama' => 'Seputih Raman'
            ],
            [
                'id' => '1805080',
                'kabupaten_id' => '1805',
                'nama' => 'Terbanggi Besar'
            ],
            [
                'id' => '1805081',
                'kabupaten_id' => '1805',
                'nama' => 'Seputih Agung'
            ],
            [
                'id' => '1805082',
                'kabupaten_id' => '1805',
                'nama' => 'Way Pengubuan'
            ],
            [
                'id' => '1805090',
                'kabupaten_id' => '1805',
                'nama' => 'Terusan Nunyai'
            ],
            [
                'id' => '1805100',
                'kabupaten_id' => '1805',
                'nama' => 'Seputih Mataram'
            ],
            [
                'id' => '1805101',
                'kabupaten_id' => '1805',
                'nama' => 'Bandar Mataram'
            ],
            [
                'id' => '1805110',
                'kabupaten_id' => '1805',
                'nama' => 'Seputih Banyak'
            ],
            [
                'id' => '1805111',
                'kabupaten_id' => '1805',
                'nama' => 'Way Seputih'
            ],
            [
                'id' => '1805120',
                'kabupaten_id' => '1805',
                'nama' => 'Rumbia'
            ],
            [
                'id' => '1805121',
                'kabupaten_id' => '1805',
                'nama' => 'Bumi Nabung'
            ],
            [
                'id' => '1805122',
                'kabupaten_id' => '1805',
                'nama' => 'Putra Rumbia'
            ],
            [
                'id' => '1805130',
                'kabupaten_id' => '1805',
                'nama' => 'Seputih Surabaya'
            ],
            [
                'id' => '1805131',
                'kabupaten_id' => '1805',
                'nama' => 'Bandar Surabaya'
            ],
            [
                'id' => '1806010',
                'kabupaten_id' => '1806',
                'nama' => 'Bukit Kemuning'
            ],
            [
                'id' => '1806011',
                'kabupaten_id' => '1806',
                'nama' => 'Abung Tinggi'
            ],
            [
                'id' => '1806020',
                'kabupaten_id' => '1806',
                'nama' => 'Tanjung Raja'
            ],
            [
                'id' => '1806030',
                'kabupaten_id' => '1806',
                'nama' => 'Abung Barat'
            ],
            [
                'id' => '1806031',
                'kabupaten_id' => '1806',
                'nama' => 'Abung Tengah'
            ],
            [
                'id' => '1806032',
                'kabupaten_id' => '1806',
                'nama' => 'Abung  Kunang'
            ],
            [
                'id' => '1806033',
                'kabupaten_id' => '1806',
                'nama' => 'Abung Pekurun'
            ],
            [
                'id' => '1806040',
                'kabupaten_id' => '1806',
                'nama' => 'Kotabumi'
            ],
            [
                'id' => '1806041',
                'kabupaten_id' => '1806',
                'nama' => 'Kotabumi Utara'
            ],
            [
                'id' => '1806042',
                'kabupaten_id' => '1806',
                'nama' => 'Kotabumi Selatan'
            ],
            [
                'id' => '1806050',
                'kabupaten_id' => '1806',
                'nama' => 'Abung Selatan'
            ],
            [
                'id' => '1806051',
                'kabupaten_id' => '1806',
                'nama' => 'Abung Semuli'
            ],
            [
                'id' => '1806052',
                'kabupaten_id' => '1806',
                'nama' => 'Blambangan Pagar'
            ],
            [
                'id' => '1806060',
                'kabupaten_id' => '1806',
                'nama' => 'Abung Timur'
            ],
            [
                'id' => '1806061',
                'kabupaten_id' => '1806',
                'nama' => 'Abung Surakarta'
            ],
            [
                'id' => '1806070',
                'kabupaten_id' => '1806',
                'nama' => 'Sungkai Selatan'
            ],
            [
                'id' => '1806071',
                'kabupaten_id' => '1806',
                'nama' => 'Muara Sungkai'
            ],
            [
                'id' => '1806072',
                'kabupaten_id' => '1806',
                'nama' => 'Bunga Mayang'
            ],
            [
                'id' => '1806073',
                'kabupaten_id' => '1806',
                'nama' => 'Sungkai  Barat'
            ],
            [
                'id' => '1806074',
                'kabupaten_id' => '1806',
                'nama' => 'Sungkai Jaya'
            ],
            [
                'id' => '1806080',
                'kabupaten_id' => '1806',
                'nama' => 'Sungkai Utara'
            ],
            [
                'id' => '1806081',
                'kabupaten_id' => '1806',
                'nama' => 'Hulusungkai'
            ],
            [
                'id' => '1806082',
                'kabupaten_id' => '1806',
                'nama' => 'Sungkai Tengah'
            ],
            [
                'id' => '1807010',
                'kabupaten_id' => '1807',
                'nama' => 'Banjit'
            ],
            [
                'id' => '1807020',
                'kabupaten_id' => '1807',
                'nama' => 'Baradatu'
            ],
            [
                'id' => '1807021',
                'kabupaten_id' => '1807',
                'nama' => 'Gunung Labuhan'
            ],
            [
                'id' => '1807030',
                'kabupaten_id' => '1807',
                'nama' => 'Kasui'
            ],
            [
                'id' => '1807031',
                'kabupaten_id' => '1807',
                'nama' => 'Rebang Tangkas'
            ],
            [
                'id' => '1807040',
                'kabupaten_id' => '1807',
                'nama' => 'Blambangan Umpu'
            ],
            [
                'id' => '1807041',
                'kabupaten_id' => '1807',
                'nama' => 'Way Tuba'
            ],
            [
                'id' => '1807042',
                'kabupaten_id' => '1807',
                'nama' => 'Negeri Agung'
            ],
            [
                'id' => '1807050',
                'kabupaten_id' => '1807',
                'nama' => 'Bahuga'
            ],
            [
                'id' => '1807051',
                'kabupaten_id' => '1807',
                'nama' => 'Buay  Bahuga'
            ],
            [
                'id' => '1807052',
                'kabupaten_id' => '1807',
                'nama' => 'Bumi Agung'
            ],
            [
                'id' => '1807060',
                'kabupaten_id' => '1807',
                'nama' => 'Pakuan Ratu'
            ],
            [
                'id' => '1807061',
                'kabupaten_id' => '1807',
                'nama' => 'Negara Batin'
            ],
            [
                'id' => '1807062',
                'kabupaten_id' => '1807',
                'nama' => 'Negeri Besar'
            ],
            [
                'id' => '1808030',
                'kabupaten_id' => '1808',
                'nama' => 'Banjar Agung'
            ],
            [
                'id' => '1808031',
                'kabupaten_id' => '1808',
                'nama' => 'Banjar Margo'
            ],
            [
                'id' => '1808032',
                'kabupaten_id' => '1808',
                'nama' => 'Banjar Baru'
            ],
            [
                'id' => '1808040',
                'kabupaten_id' => '1808',
                'nama' => 'Gedung Aji'
            ],
            [
                'id' => '1808041',
                'kabupaten_id' => '1808',
                'nama' => 'Penawar Aji'
            ],
            [
                'id' => '1808042',
                'kabupaten_id' => '1808',
                'nama' => 'Meraksa Aji'
            ],
            [
                'id' => '1808050',
                'kabupaten_id' => '1808',
                'nama' => 'Menggala'
            ],
            [
                'id' => '1808051',
                'kabupaten_id' => '1808',
                'nama' => 'Penawar Tama'
            ],
            [
                'id' => '1808052',
                'kabupaten_id' => '1808',
                'nama' => 'Rawajitu Selatan'
            ],
            [
                'id' => '1808053',
                'kabupaten_id' => '1808',
                'nama' => 'Gedung Meneng'
            ],
            [
                'id' => '1808054',
                'kabupaten_id' => '1808',
                'nama' => 'Rawajitu Timur'
            ],
            [
                'id' => '1808055',
                'kabupaten_id' => '1808',
                'nama' => 'Rawa Pitu'
            ],
            [
                'id' => '1808056',
                'kabupaten_id' => '1808',
                'nama' => 'Gedung Aji Baru'
            ],
            [
                'id' => '1808057',
                'kabupaten_id' => '1808',
                'nama' => 'Dente Teladas'
            ],
            [
                'id' => '1808058',
                'kabupaten_id' => '1808',
                'nama' => 'Menggala Timur'
            ],
            [
                'id' => '1809010',
                'kabupaten_id' => '1809',
                'nama' => 'Punduh Pidada'
            ],
            [
                'id' => '1809011',
                'kabupaten_id' => '1809',
                'nama' => 'Marga Punduh'
            ],
            [
                'id' => '1809020',
                'kabupaten_id' => '1809',
                'nama' => 'Padang Cermin'
            ],
            [
                'id' => '1809030',
                'kabupaten_id' => '1809',
                'nama' => 'Kedondong'
            ],
            [
                'id' => '1809031',
                'kabupaten_id' => '1809',
                'nama' => 'Way Khilau'
            ],
            [
                'id' => '1809040',
                'kabupaten_id' => '1809',
                'nama' => 'Way Lima'
            ],
            [
                'id' => '1809050',
                'kabupaten_id' => '1809',
                'nama' => 'Gedung Tataan'
            ],
            [
                'id' => '1809060',
                'kabupaten_id' => '1809',
                'nama' => 'Negeri Katon'
            ],
            [
                'id' => '1809070',
                'kabupaten_id' => '1809',
                'nama' => 'Tegineneng'
            ],
            [
                'id' => '1810010',
                'kabupaten_id' => '1810',
                'nama' => 'Pardasuka'
            ],
            [
                'id' => '1810020',
                'kabupaten_id' => '1810',
                'nama' => 'Ambarawa'
            ],
            [
                'id' => '1810030',
                'kabupaten_id' => '1810',
                'nama' => 'Pagelaran'
            ],
            [
                'id' => '1810031',
                'kabupaten_id' => '1810',
                'nama' => 'Pagelaran Utara'
            ],
            [
                'id' => '1810040',
                'kabupaten_id' => '1810',
                'nama' => 'Pringsewu'
            ],
            [
                'id' => '1810050',
                'kabupaten_id' => '1810',
                'nama' => 'Gading Rejo'
            ],
            [
                'id' => '1810060',
                'kabupaten_id' => '1810',
                'nama' => 'Sukoharjo'
            ],
            [
                'id' => '1810070',
                'kabupaten_id' => '1810',
                'nama' => 'Banyumas'
            ],
            [
                'id' => '1810080',
                'kabupaten_id' => '1810',
                'nama' => 'Adi Luwih'
            ],
            [
                'id' => '1811010',
                'kabupaten_id' => '1811',
                'nama' => 'Way Serdang'
            ],
            [
                'id' => '1811020',
                'kabupaten_id' => '1811',
                'nama' => 'Simpang Pematang'
            ],
            [
                'id' => '1811030',
                'kabupaten_id' => '1811',
                'nama' => 'Panca Jaya'
            ],
            [
                'id' => '1811040',
                'kabupaten_id' => '1811',
                'nama' => 'Tanjung Raya'
            ],
            [
                'id' => '1811050',
                'kabupaten_id' => '1811',
                'nama' => 'Mesuji'
            ],
            [
                'id' => '1811060',
                'kabupaten_id' => '1811',
                'nama' => 'Mesuji Timur'
            ],
            [
                'id' => '1811070',
                'kabupaten_id' => '1811',
                'nama' => 'Rawajitu Utara'
            ],
            [
                'id' => '1812010',
                'kabupaten_id' => '1812',
                'nama' => 'Tulang Bawang Udik'
            ],
            [
                'id' => '1812020',
                'kabupaten_id' => '1812',
                'nama' => 'Tumi Jajar'
            ],
            [
                'id' => '1812030',
                'kabupaten_id' => '1812',
                'nama' => 'Tulang Bawang Tengah'
            ],
            [
                'id' => '1812040',
                'kabupaten_id' => '1812',
                'nama' => 'Pagar Dewa'
            ],
            [
                'id' => '1812050',
                'kabupaten_id' => '1812',
                'nama' => 'Lambu Kibang'
            ],
            [
                'id' => '1812060',
                'kabupaten_id' => '1812',
                'nama' => 'Gunung Terang'
            ],
            [
                'id' => '1812070',
                'kabupaten_id' => '1812',
                'nama' => 'Gunung Agung'
            ],
            [
                'id' => '1812080',
                'kabupaten_id' => '1812',
                'nama' => 'Way Kenanga'
            ],
            [
                'id' => '1813010',
                'kabupaten_id' => '1813',
                'nama' => 'Lemong'
            ],
            [
                'id' => '1813020',
                'kabupaten_id' => '1813',
                'nama' => 'Pesisir Utara'
            ],
            [
                'id' => '1813030',
                'kabupaten_id' => '1813',
                'nama' => 'Pulau Pisang'
            ],
            [
                'id' => '1813040',
                'kabupaten_id' => '1813',
                'nama' => 'Karya Penggawa'
            ],
            [
                'id' => '1813050',
                'kabupaten_id' => '1813',
                'nama' => 'Way Krui'
            ],
            [
                'id' => '1813060',
                'kabupaten_id' => '1813',
                'nama' => 'Pesisir Tengah'
            ],
            [
                'id' => '1813070',
                'kabupaten_id' => '1813',
                'nama' => 'Krui Selatan'
            ],
            [
                'id' => '1813080',
                'kabupaten_id' => '1813',
                'nama' => 'Pesisir Selatan'
            ],
            [
                'id' => '1813090',
                'kabupaten_id' => '1813',
                'nama' => 'Ngambur'
            ],
            [
                'id' => '1813100',
                'kabupaten_id' => '1813',
                'nama' => 'Bengkunat'
            ],
            [
                'id' => '1813110',
                'kabupaten_id' => '1813',
                'nama' => 'Bengkunat Belimbing'
            ],
            [
                'id' => '1871010',
                'kabupaten_id' => '1871',
                'nama' => 'Teluk Betung Barat'
            ],
            [
                'id' => '1871011',
                'kabupaten_id' => '1871',
                'nama' => 'Telukbetung Timur'
            ],
            [
                'id' => '1871020',
                'kabupaten_id' => '1871',
                'nama' => 'Teluk Betung Selatan'
            ],
            [
                'id' => '1871021',
                'kabupaten_id' => '1871',
                'nama' => 'Bumi Waras'
            ],
            [
                'id' => '1871030',
                'kabupaten_id' => '1871',
                'nama' => 'Panjang'
            ],
            [
                'id' => '1871040',
                'kabupaten_id' => '1871',
                'nama' => 'Tanjung Karang Timur'
            ],
            [
                'id' => '1871041',
                'kabupaten_id' => '1871',
                'nama' => 'Kedamaian'
            ],
            [
                'id' => '1871050',
                'kabupaten_id' => '1871',
                'nama' => 'Teluk Betung Utara'
            ],
            [
                'id' => '1871060',
                'kabupaten_id' => '1871',
                'nama' => 'Tanjung Karang Pusat'
            ],
            [
                'id' => '1871061',
                'kabupaten_id' => '1871',
                'nama' => 'Enggal'
            ],
            [
                'id' => '1871070',
                'kabupaten_id' => '1871',
                'nama' => 'Tanjung Karang Barat'
            ],
            [
                'id' => '1871071',
                'kabupaten_id' => '1871',
                'nama' => 'Kemiling'
            ],
            [
                'id' => '1871072',
                'kabupaten_id' => '1871',
                'nama' => 'Langkapura'
            ],
            [
                'id' => '1871080',
                'kabupaten_id' => '1871',
                'nama' => 'Kedaton'
            ],
            [
                'id' => '1871081',
                'kabupaten_id' => '1871',
                'nama' => 'Rajabasa'
            ],
            [
                'id' => '1871082',
                'kabupaten_id' => '1871',
                'nama' => 'Tanjung Senang'
            ],
            [
                'id' => '1871083',
                'kabupaten_id' => '1871',
                'nama' => 'Labuhan Ratu'
            ],
            [
                'id' => '1871090',
                'kabupaten_id' => '1871',
                'nama' => 'Sukarame'
            ],
            [
                'id' => '1871091',
                'kabupaten_id' => '1871',
                'nama' => 'Sukabumi'
            ],
            [
                'id' => '1871092',
                'kabupaten_id' => '1871',
                'nama' => 'Way Halim'
            ],
            [
                'id' => '1872011',
                'kabupaten_id' => '1872',
                'nama' => 'Metro Selatan'
            ],
            [
                'id' => '1872012',
                'kabupaten_id' => '1872',
                'nama' => 'Metro Barat'
            ],
            [
                'id' => '1872021',
                'kabupaten_id' => '1872',
                'nama' => 'Metro Timur'
            ],
            [
                'id' => '1872022',
                'kabupaten_id' => '1872',
                'nama' => 'Metro Pusat'
            ],
            [
                'id' => '1872023',
                'kabupaten_id' => '1872',
                'nama' => 'Metro Utara'
            ],
            [
                'id' => '1901070',
                'kabupaten_id' => '1901',
                'nama' => 'Mendo Barat'
            ],
            [
                'id' => '1901080',
                'kabupaten_id' => '1901',
                'nama' => 'Merawang'
            ],
            [
                'id' => '1901081',
                'kabupaten_id' => '1901',
                'nama' => 'Puding Besar'
            ],
            [
                'id' => '1901090',
                'kabupaten_id' => '1901',
                'nama' => 'Sungai Liat'
            ],
            [
                'id' => '1901091',
                'kabupaten_id' => '1901',
                'nama' => 'Pemali'
            ],
            [
                'id' => '1901092',
                'kabupaten_id' => '1901',
                'nama' => 'Bakam'
            ],
            [
                'id' => '1901130',
                'kabupaten_id' => '1901',
                'nama' => 'Belinyu'
            ],
            [
                'id' => '1901131',
                'kabupaten_id' => '1901',
                'nama' => 'Riau Silip'
            ],
            [
                'id' => '1902010',
                'kabupaten_id' => '1902',
                'nama' => 'Membalong'
            ],
            [
                'id' => '1902060',
                'kabupaten_id' => '1902',
                'nama' => 'Tanjung Pandan'
            ],
            [
                'id' => '1902061',
                'kabupaten_id' => '1902',
                'nama' => 'Badau'
            ],
            [
                'id' => '1902062',
                'kabupaten_id' => '1902',
                'nama' => 'Sijuk'
            ],
            [
                'id' => '1902063',
                'kabupaten_id' => '1902',
                'nama' => 'Selat Nasik'
            ],
            [
                'id' => '1903010',
                'kabupaten_id' => '1903',
                'nama' => 'Kelapa'
            ],
            [
                'id' => '1903020',
                'kabupaten_id' => '1903',
                'nama' => 'Tempilang'
            ],
            [
                'id' => '1903030',
                'kabupaten_id' => '1903',
                'nama' => 'Mentok'
            ],
            [
                'id' => '1903040',
                'kabupaten_id' => '1903',
                'nama' => 'Simpang Teritip'
            ],
            [
                'id' => '1903050',
                'kabupaten_id' => '1903',
                'nama' => 'Jebus'
            ],
            [
                'id' => '1903051',
                'kabupaten_id' => '1903',
                'nama' => 'Parittiga'
            ],
            [
                'id' => '1904010',
                'kabupaten_id' => '1904',
                'nama' => 'Koba'
            ],
            [
                'id' => '1904011',
                'kabupaten_id' => '1904',
                'nama' => 'Lubuk Besar'
            ],
            [
                'id' => '1904020',
                'kabupaten_id' => '1904',
                'nama' => 'Pangkalan Baru'
            ],
            [
                'id' => '1904021',
                'kabupaten_id' => '1904',
                'nama' => 'Namang'
            ],
            [
                'id' => '1904030',
                'kabupaten_id' => '1904',
                'nama' => 'Sungai Selan'
            ],
            [
                'id' => '1904040',
                'kabupaten_id' => '1904',
                'nama' => 'Simpang Katis'
            ],
            [
                'id' => '1905010',
                'kabupaten_id' => '1905',
                'nama' => 'Payung'
            ],
            [
                'id' => '1905011',
                'kabupaten_id' => '1905',
                'nama' => 'Pulau Besar'
            ],
            [
                'id' => '1905020',
                'kabupaten_id' => '1905',
                'nama' => 'Simpang Rimba'
            ],
            [
                'id' => '1905030',
                'kabupaten_id' => '1905',
                'nama' => 'Toboali'
            ],
            [
                'id' => '1905031',
                'kabupaten_id' => '1905',
                'nama' => 'Tukak Sadai'
            ],
            [
                'id' => '1905040',
                'kabupaten_id' => '1905',
                'nama' => 'Air Gegas'
            ],
            [
                'id' => '1905050',
                'kabupaten_id' => '1905',
                'nama' => 'Lepar Pongok'
            ],
            [
                'id' => '1905051',
                'kabupaten_id' => '1905',
                'nama' => 'Kepulauan Pongok'
            ],
            [
                'id' => '1906010',
                'kabupaten_id' => '1906',
                'nama' => 'Dendang'
            ],
            [
                'id' => '1906011',
                'kabupaten_id' => '1906',
                'nama' => 'Simpang Pesak'
            ],
            [
                'id' => '1906020',
                'kabupaten_id' => '1906',
                'nama' => 'Gantung'
            ],
            [
                'id' => '1906021',
                'kabupaten_id' => '1906',
                'nama' => 'Simpang Renggiang'
            ],
            [
                'id' => '1906030',
                'kabupaten_id' => '1906',
                'nama' => 'Manggar'
            ],
            [
                'id' => '1906031',
                'kabupaten_id' => '1906',
                'nama' => 'Damar'
            ],
            [
                'id' => '1906040',
                'kabupaten_id' => '1906',
                'nama' => 'Kelapa Kampit'
            ],
            [
                'id' => '1971010',
                'kabupaten_id' => '1971',
                'nama' => 'Rangkui'
            ],
            [
                'id' => '1971020',
                'kabupaten_id' => '1971',
                'nama' => 'Bukit Intan'
            ],
            [
                'id' => '1971021',
                'kabupaten_id' => '1971',
                'nama' => 'Girimaya'
            ],
            [
                'id' => '1971030',
                'kabupaten_id' => '1971',
                'nama' => 'Pangkal Balam'
            ],
            [
                'id' => '1971031',
                'kabupaten_id' => '1971',
                'nama' => 'Gabek'
            ],
            [
                'id' => '1971040',
                'kabupaten_id' => '1971',
                'nama' => 'Taman Sari'
            ],
            [
                'id' => '1971041',
                'kabupaten_id' => '1971',
                'nama' => 'Gerunggang'
            ],
            [
                'id' => '2101010',
                'kabupaten_id' => '2101',
                'nama' => 'Moro'
            ],
            [
                'id' => '2101011',
                'kabupaten_id' => '2101',
                'nama' => 'Durai'
            ],
            [
                'id' => '2101020',
                'kabupaten_id' => '2101',
                'nama' => 'Kundur'
            ],
            [
                'id' => '2101021',
                'kabupaten_id' => '2101',
                'nama' => 'Kundur Utara'
            ],
            [
                'id' => '2101022',
                'kabupaten_id' => '2101',
                'nama' => 'Kundur Barat'
            ],
            [
                'id' => '2101030',
                'kabupaten_id' => '2101',
                'nama' => 'Karimun'
            ],
            [
                'id' => '2101031',
                'kabupaten_id' => '2101',
                'nama' => 'Buru'
            ],
            [
                'id' => '2101032',
                'kabupaten_id' => '2101',
                'nama' => 'Meral'
            ],
            [
                'id' => '2101033',
                'kabupaten_id' => '2101',
                'nama' => 'Tebing'
            ],
            [
                'id' => '2102040',
                'kabupaten_id' => '2102',
                'nama' => 'Teluk Bintan'
            ],
            [
                'id' => '2102050',
                'kabupaten_id' => '2102',
                'nama' => 'Bintan Utara'
            ],
            [
                'id' => '2102051',
                'kabupaten_id' => '2102',
                'nama' => 'Teluk Sebong'
            ],
            [
                'id' => '2102052',
                'kabupaten_id' => '2102',
                'nama' => 'Seri Kuala Lobam'
            ],
            [
                'id' => '2102060',
                'kabupaten_id' => '2102',
                'nama' => 'Bintan Timur'
            ],
            [
                'id' => '2102061',
                'kabupaten_id' => '2102',
                'nama' => 'Gunung Kijang'
            ],
            [
                'id' => '2102062',
                'kabupaten_id' => '2102',
                'nama' => 'Mantang'
            ],
            [
                'id' => '2102063',
                'kabupaten_id' => '2102',
                'nama' => 'Bintan Pesisir'
            ],
            [
                'id' => '2102064',
                'kabupaten_id' => '2102',
                'nama' => 'Toapaya'
            ],
            [
                'id' => '2102070',
                'kabupaten_id' => '2102',
                'nama' => 'Tambelan'
            ],
            [
                'id' => '2103030',
                'kabupaten_id' => '2103',
                'nama' => 'Midai'
            ],
            [
                'id' => '2103040',
                'kabupaten_id' => '2103',
                'nama' => 'Bunguran Barat'
            ],
            [
                'id' => '2103041',
                'kabupaten_id' => '2103',
                'nama' => 'Bunguran Utara'
            ],
            [
                'id' => '2103042',
                'kabupaten_id' => '2103',
                'nama' => 'Pulau Laut'
            ],
            [
                'id' => '2103043',
                'kabupaten_id' => '2103',
                'nama' => 'Pulau Tiga'
            ],
            [
                'id' => '2103050',
                'kabupaten_id' => '2103',
                'nama' => 'Bunguran Timur'
            ],
            [
                'id' => '2103051',
                'kabupaten_id' => '2103',
                'nama' => 'Bunguran Timur Laut'
            ],
            [
                'id' => '2103052',
                'kabupaten_id' => '2103',
                'nama' => 'Bunguran Tengah'
            ],
            [
                'id' => '2103053',
                'kabupaten_id' => '2103',
                'nama' => 'Bunguran Selatan'
            ],
            [
                'id' => '2103060',
                'kabupaten_id' => '2103',
                'nama' => 'Serasan'
            ],
            [
                'id' => '2103061',
                'kabupaten_id' => '2103',
                'nama' => 'Subi'
            ],
            [
                'id' => '2103062',
                'kabupaten_id' => '2103',
                'nama' => 'Serasan Timur'
            ],
            [
                'id' => '2104010',
                'kabupaten_id' => '2104',
                'nama' => 'Singkep Barat'
            ],
            [
                'id' => '2104020',
                'kabupaten_id' => '2104',
                'nama' => 'Singkep'
            ],
            [
                'id' => '2104021',
                'kabupaten_id' => '2104',
                'nama' => 'Singkep Selatan'
            ],
            [
                'id' => '2104022',
                'kabupaten_id' => '2104',
                'nama' => 'Singkep Pesisir'
            ],
            [
                'id' => '2104030',
                'kabupaten_id' => '2104',
                'nama' => 'Lingga'
            ],
            [
                'id' => '2104031',
                'kabupaten_id' => '2104',
                'nama' => 'Selayar'
            ],
            [
                'id' => '2104032',
                'kabupaten_id' => '2104',
                'nama' => 'Lingga Timur'
            ],
            [
                'id' => '2104040',
                'kabupaten_id' => '2104',
                'nama' => 'Lingga Utara'
            ],
            [
                'id' => '2104050',
                'kabupaten_id' => '2104',
                'nama' => 'Senayang'
            ],
            [
                'id' => '2105010',
                'kabupaten_id' => '2105',
                'nama' => 'Jemaja'
            ],
            [
                'id' => '2105020',
                'kabupaten_id' => '2105',
                'nama' => 'Jemaja Timur'
            ],
            [
                'id' => '2105030',
                'kabupaten_id' => '2105',
                'nama' => 'Siantan Selatan'
            ],
            [
                'id' => '2105040',
                'kabupaten_id' => '2105',
                'nama' => 'Siantan'
            ],
            [
                'id' => '2105050',
                'kabupaten_id' => '2105',
                'nama' => 'Siantan Timur'
            ],
            [
                'id' => '2105060',
                'kabupaten_id' => '2105',
                'nama' => 'Siantan Tengah'
            ],
            [
                'id' => '2105070',
                'kabupaten_id' => '2105',
                'nama' => 'Palmatak'
            ],
            [
                'id' => '2171010',
                'kabupaten_id' => '2171',
                'nama' => 'Belakang Padang'
            ],
            [
                'id' => '2171020',
                'kabupaten_id' => '2171',
                'nama' => 'Bulang'
            ],
            [
                'id' => '2171030',
                'kabupaten_id' => '2171',
                'nama' => 'Galang'
            ],
            [
                'id' => '2171040',
                'kabupaten_id' => '2171',
                'nama' => 'Sei Beduk'
            ],
            [
                'id' => '2171041',
                'kabupaten_id' => '2171',
                'nama' => 'Sagulung'
            ],
            [
                'id' => '2171050',
                'kabupaten_id' => '2171',
                'nama' => 'Nongsa'
            ],
            [
                'id' => '2171051',
                'kabupaten_id' => '2171',
                'nama' => 'Batam Kota'
            ],
            [
                'id' => '2171060',
                'kabupaten_id' => '2171',
                'nama' => 'Sekupang'
            ],
            [
                'id' => '2171061',
                'kabupaten_id' => '2171',
                'nama' => 'Batu Aji'
            ],
            [
                'id' => '2171070',
                'kabupaten_id' => '2171',
                'nama' => 'Lubuk Baja'
            ],
            [
                'id' => '2171080',
                'kabupaten_id' => '2171',
                'nama' => 'Batu Ampar'
            ],
            [
                'id' => '2171081',
                'kabupaten_id' => '2171',
                'nama' => 'Bengkong'
            ],
            [
                'id' => '2172010',
                'kabupaten_id' => '2172',
                'nama' => 'Bukit Bestari'
            ],
            [
                'id' => '2172020',
                'kabupaten_id' => '2172',
                'nama' => 'Tanjungpinang Timur'
            ],
            [
                'id' => '2172030',
                'kabupaten_id' => '2172',
                'nama' => 'Tanjungpinang Kota'
            ],
            [
                'id' => '2172040',
                'kabupaten_id' => '2172',
                'nama' => 'Tanjungpinang Barat'
            ],
            [
                'id' => '3101010',
                'kabupaten_id' => '3101',
                'nama' => 'Kepulauan Seribu Selatan'
            ],
            [
                'id' => '3101020',
                'kabupaten_id' => '3101',
                'nama' => 'Kepulauan Seribu Utara'
            ],
            [
                'id' => '3171010',
                'kabupaten_id' => '3171',
                'nama' => 'Jagakarsa'
            ],
            [
                'id' => '3171020',
                'kabupaten_id' => '3171',
                'nama' => 'Pasar Minggu'
            ],
            [
                'id' => '3171030',
                'kabupaten_id' => '3171',
                'nama' => 'Cilandak'
            ],
            [
                'id' => '3171040',
                'kabupaten_id' => '3171',
                'nama' => 'Pesanggrahan'
            ],
            [
                'id' => '3171050',
                'kabupaten_id' => '3171',
                'nama' => 'Kebayoran Lama'
            ],
            [
                'id' => '3171060',
                'kabupaten_id' => '3171',
                'nama' => 'Kebayoran Baru'
            ],
            [
                'id' => '3171070',
                'kabupaten_id' => '3171',
                'nama' => 'Mampang Prapatan'
            ],
            [
                'id' => '3171080',
                'kabupaten_id' => '3171',
                'nama' => 'Pancoran'
            ],
            [
                'id' => '3171090',
                'kabupaten_id' => '3171',
                'nama' => 'Tebet'
            ],
            [
                'id' => '3171100',
                'kabupaten_id' => '3171',
                'nama' => 'Setia Budi'
            ],
            [
                'id' => '3172010',
                'kabupaten_id' => '3172',
                'nama' => 'Pasar Rebo'
            ],
            [
                'id' => '3172020',
                'kabupaten_id' => '3172',
                'nama' => 'Ciracas'
            ],
            [
                'id' => '3172030',
                'kabupaten_id' => '3172',
                'nama' => 'Cipayung'
            ],
            [
                'id' => '3172040',
                'kabupaten_id' => '3172',
                'nama' => 'Makasar'
            ],
            [
                'id' => '3172050',
                'kabupaten_id' => '3172',
                'nama' => 'Kramat Jati'
            ],
            [
                'id' => '3172060',
                'kabupaten_id' => '3172',
                'nama' => 'Jatinegara'
            ],
            [
                'id' => '3172070',
                'kabupaten_id' => '3172',
                'nama' => 'Duren Sawit'
            ],
            [
                'id' => '3172080',
                'kabupaten_id' => '3172',
                'nama' => 'Cakung'
            ],
            [
                'id' => '3172090',
                'kabupaten_id' => '3172',
                'nama' => 'Pulo Gadung'
            ],
            [
                'id' => '3172100',
                'kabupaten_id' => '3172',
                'nama' => 'Matraman'
            ],
            [
                'id' => '3173010',
                'kabupaten_id' => '3173',
                'nama' => 'Tanah Abang'
            ],
            [
                'id' => '3173020',
                'kabupaten_id' => '3173',
                'nama' => 'Menteng'
            ],
            [
                'id' => '3173030',
                'kabupaten_id' => '3173',
                'nama' => 'Senen'
            ],
            [
                'id' => '3173040',
                'kabupaten_id' => '3173',
                'nama' => 'Johar Baru'
            ],
            [
                'id' => '3173050',
                'kabupaten_id' => '3173',
                'nama' => 'Cempaka Putih'
            ],
            [
                'id' => '3173060',
                'kabupaten_id' => '3173',
                'nama' => 'Kemayoran'
            ],
            [
                'id' => '3173070',
                'kabupaten_id' => '3173',
                'nama' => 'Sawah Besar'
            ],
            [
                'id' => '3173080',
                'kabupaten_id' => '3173',
                'nama' => 'Gambir'
            ],
            [
                'id' => '3174010',
                'kabupaten_id' => '3174',
                'nama' => 'Kembangan'
            ],
            [
                'id' => '3174020',
                'kabupaten_id' => '3174',
                'nama' => 'Kebon Jeruk'
            ],
            [
                'id' => '3174030',
                'kabupaten_id' => '3174',
                'nama' => 'Palmerah'
            ],
            [
                'id' => '3174040',
                'kabupaten_id' => '3174',
                'nama' => 'Grogol Petamburan'
            ],
            [
                'id' => '3174050',
                'kabupaten_id' => '3174',
                'nama' => 'Tambora'
            ],
            [
                'id' => '3174060',
                'kabupaten_id' => '3174',
                'nama' => 'Taman Sari'
            ],
            [
                'id' => '3174070',
                'kabupaten_id' => '3174',
                'nama' => 'Cengkareng'
            ],
            [
                'id' => '3174080',
                'kabupaten_id' => '3174',
                'nama' => 'Kali Deres'
            ],
            [
                'id' => '3175010',
                'kabupaten_id' => '3175',
                'nama' => 'Penjaringan'
            ],
            [
                'id' => '3175020',
                'kabupaten_id' => '3175',
                'nama' => 'Pademangan'
            ],
            [
                'id' => '3175030',
                'kabupaten_id' => '3175',
                'nama' => 'Tanjung Priok'
            ],
            [
                'id' => '3175040',
                'kabupaten_id' => '3175',
                'nama' => 'Koja'
            ],
            [
                'id' => '3175050',
                'kabupaten_id' => '3175',
                'nama' => 'Kelapa Gading'
            ],
            [
                'id' => '3175060',
                'kabupaten_id' => '3175',
                'nama' => 'Cilincing'
            ],
            [
                'id' => '3201010',
                'kabupaten_id' => '3201',
                'nama' => 'Nanggung'
            ],
            [
                'id' => '3201020',
                'kabupaten_id' => '3201',
                'nama' => 'Leuwiliang'
            ],
            [
                'id' => '3201021',
                'kabupaten_id' => '3201',
                'nama' => 'Leuwisadeng'
            ],
            [
                'id' => '3201030',
                'kabupaten_id' => '3201',
                'nama' => 'Pamijahan'
            ],
            [
                'id' => '3201040',
                'kabupaten_id' => '3201',
                'nama' => 'Cibungbulang'
            ],
            [
                'id' => '3201050',
                'kabupaten_id' => '3201',
                'nama' => 'Ciampea'
            ],
            [
                'id' => '3201051',
                'kabupaten_id' => '3201',
                'nama' => 'Tenjolaya'
            ],
            [
                'id' => '3201060',
                'kabupaten_id' => '3201',
                'nama' => 'Dramaga'
            ],
            [
                'id' => '3201070',
                'kabupaten_id' => '3201',
                'nama' => 'Ciomas'
            ],
            [
                'id' => '3201071',
                'kabupaten_id' => '3201',
                'nama' => 'Tamansari'
            ],
            [
                'id' => '3201080',
                'kabupaten_id' => '3201',
                'nama' => 'Cijeruk'
            ],
            [
                'id' => '3201081',
                'kabupaten_id' => '3201',
                'nama' => 'Cigombong'
            ],
            [
                'id' => '3201090',
                'kabupaten_id' => '3201',
                'nama' => 'Caringin'
            ],
            [
                'id' => '3201100',
                'kabupaten_id' => '3201',
                'nama' => 'Ciawi'
            ],
            [
                'id' => '3201110',
                'kabupaten_id' => '3201',
                'nama' => 'Cisarua'
            ],
            [
                'id' => '3201120',
                'kabupaten_id' => '3201',
                'nama' => 'Megamendung'
            ],
            [
                'id' => '3201130',
                'kabupaten_id' => '3201',
                'nama' => 'Sukaraja'
            ],
            [
                'id' => '3201140',
                'kabupaten_id' => '3201',
                'nama' => 'Babakan Madang'
            ],
            [
                'id' => '3201150',
                'kabupaten_id' => '3201',
                'nama' => 'Sukamakmur'
            ],
            [
                'id' => '3201160',
                'kabupaten_id' => '3201',
                'nama' => 'Cariu'
            ],
            [
                'id' => '3201161',
                'kabupaten_id' => '3201',
                'nama' => 'Tanjungsari'
            ],
            [
                'id' => '3201170',
                'kabupaten_id' => '3201',
                'nama' => 'Jonggol'
            ],
            [
                'id' => '3201180',
                'kabupaten_id' => '3201',
                'nama' => 'Cileungsi'
            ],
            [
                'id' => '3201181',
                'kabupaten_id' => '3201',
                'nama' => 'Kelapa Nunggal'
            ],
            [
                'id' => '3201190',
                'kabupaten_id' => '3201',
                'nama' => 'Gunung Putri'
            ],
            [
                'id' => '3201200',
                'kabupaten_id' => '3201',
                'nama' => 'Citeureup'
            ],
            [
                'id' => '3201210',
                'kabupaten_id' => '3201',
                'nama' => 'Cibinong'
            ],
            [
                'id' => '3201220',
                'kabupaten_id' => '3201',
                'nama' => 'Bojong Gede'
            ],
            [
                'id' => '3201221',
                'kabupaten_id' => '3201',
                'nama' => 'Tajur Halang'
            ],
            [
                'id' => '3201230',
                'kabupaten_id' => '3201',
                'nama' => 'Kemang'
            ],
            [
                'id' => '3201231',
                'kabupaten_id' => '3201',
                'nama' => 'Ranca Bungur'
            ],
            [
                'id' => '3201240',
                'kabupaten_id' => '3201',
                'nama' => 'Parung'
            ],
            [
                'id' => '3201241',
                'kabupaten_id' => '3201',
                'nama' => 'Ciseeng'
            ],
            [
                'id' => '3201250',
                'kabupaten_id' => '3201',
                'nama' => 'Gunung Sindur'
            ],
            [
                'id' => '3201260',
                'kabupaten_id' => '3201',
                'nama' => 'Rumpin'
            ],
            [
                'id' => '3201270',
                'kabupaten_id' => '3201',
                'nama' => 'Cigudeg'
            ],
            [
                'id' => '3201271',
                'kabupaten_id' => '3201',
                'nama' => 'Sukajaya'
            ],
            [
                'id' => '3201280',
                'kabupaten_id' => '3201',
                'nama' => 'Jasinga'
            ],
            [
                'id' => '3201290',
                'kabupaten_id' => '3201',
                'nama' => 'Tenjo'
            ],
            [
                'id' => '3201300',
                'kabupaten_id' => '3201',
                'nama' => 'Parung Panjang'
            ],
            [
                'id' => '3202010',
                'kabupaten_id' => '3202',
                'nama' => 'Ciemas'
            ],
            [
                'id' => '3202020',
                'kabupaten_id' => '3202',
                'nama' => 'Ciracap'
            ],
            [
                'id' => '3202021',
                'kabupaten_id' => '3202',
                'nama' => 'Waluran'
            ],
            [
                'id' => '3202030',
                'kabupaten_id' => '3202',
                'nama' => 'Surade'
            ],
            [
                'id' => '3202031',
                'kabupaten_id' => '3202',
                'nama' => 'Cibitung'
            ],
            [
                'id' => '3202040',
                'kabupaten_id' => '3202',
                'nama' => 'Jampang Kulon'
            ],
            [
                'id' => '3202041',
                'kabupaten_id' => '3202',
                'nama' => 'Cimanggu'
            ],
            [
                'id' => '3202050',
                'kabupaten_id' => '3202',
                'nama' => 'Kali Bunder'
            ],
            [
                'id' => '3202060',
                'kabupaten_id' => '3202',
                'nama' => 'Tegal Buleud'
            ],
            [
                'id' => '3202070',
                'kabupaten_id' => '3202',
                'nama' => 'Cidolog'
            ],
            [
                'id' => '3202080',
                'kabupaten_id' => '3202',
                'nama' => 'Sagaranten'
            ],
            [
                'id' => '3202081',
                'kabupaten_id' => '3202',
                'nama' => 'Cidadap'
            ],
            [
                'id' => '3202082',
                'kabupaten_id' => '3202',
                'nama' => 'Curugkembar'
            ],
            [
                'id' => '3202090',
                'kabupaten_id' => '3202',
                'nama' => 'Pabuaran'
            ],
            [
                'id' => '3202100',
                'kabupaten_id' => '3202',
                'nama' => 'Lengkong'
            ],
            [
                'id' => '3202110',
                'kabupaten_id' => '3202',
                'nama' => 'Palabuhanratu'
            ],
            [
                'id' => '3202111',
                'kabupaten_id' => '3202',
                'nama' => 'Simpenan'
            ],
            [
                'id' => '3202120',
                'kabupaten_id' => '3202',
                'nama' => 'Warung Kiara'
            ],
            [
                'id' => '3202121',
                'kabupaten_id' => '3202',
                'nama' => 'Bantargadung'
            ],
            [
                'id' => '3202130',
                'kabupaten_id' => '3202',
                'nama' => 'Jampang Tengah'
            ],
            [
                'id' => '3202131',
                'kabupaten_id' => '3202',
                'nama' => 'Purabaya'
            ],
            [
                'id' => '3202140',
                'kabupaten_id' => '3202',
                'nama' => 'Cikembar'
            ],
            [
                'id' => '3202150',
                'kabupaten_id' => '3202',
                'nama' => 'Nyalindung'
            ],
            [
                'id' => '3202160',
                'kabupaten_id' => '3202',
                'nama' => 'Geger Bitung'
            ],
            [
                'id' => '3202170',
                'kabupaten_id' => '3202',
                'nama' => 'Sukaraja'
            ],
            [
                'id' => '3202171',
                'kabupaten_id' => '3202',
                'nama' => 'Kebonpedes'
            ],
            [
                'id' => '3202172',
                'kabupaten_id' => '3202',
                'nama' => 'Cireunghas'
            ],
            [
                'id' => '3202173',
                'kabupaten_id' => '3202',
                'nama' => 'Sukalarang'
            ],
            [
                'id' => '3202180',
                'kabupaten_id' => '3202',
                'nama' => 'Sukabumi'
            ],
            [
                'id' => '3202190',
                'kabupaten_id' => '3202',
                'nama' => 'Kadudampit'
            ],
            [
                'id' => '3202200',
                'kabupaten_id' => '3202',
                'nama' => 'Cisaat'
            ],
            [
                'id' => '3202201',
                'kabupaten_id' => '3202',
                'nama' => 'Gunungguruh'
            ],
            [
                'id' => '3202210',
                'kabupaten_id' => '3202',
                'nama' => 'Cibadak'
            ],
            [
                'id' => '3202211',
                'kabupaten_id' => '3202',
                'nama' => 'Cicantayan'
            ],
            [
                'id' => '3202212',
                'kabupaten_id' => '3202',
                'nama' => 'Caringin'
            ],
            [
                'id' => '3202220',
                'kabupaten_id' => '3202',
                'nama' => 'Nagrak'
            ],
            [
                'id' => '3202221',
                'kabupaten_id' => '3202',
                'nama' => 'Ciambar'
            ],
            [
                'id' => '3202230',
                'kabupaten_id' => '3202',
                'nama' => 'Cicurug'
            ],
            [
                'id' => '3202240',
                'kabupaten_id' => '3202',
                'nama' => 'Cidahu'
            ],
            [
                'id' => '3202250',
                'kabupaten_id' => '3202',
                'nama' => 'Parakan Salak'
            ],
            [
                'id' => '3202260',
                'kabupaten_id' => '3202',
                'nama' => 'Parung Kuda'
            ],
            [
                'id' => '3202261',
                'kabupaten_id' => '3202',
                'nama' => 'Bojong Genteng'
            ],
            [
                'id' => '3202270',
                'kabupaten_id' => '3202',
                'nama' => 'Kalapa Nunggal'
            ],
            [
                'id' => '3202280',
                'kabupaten_id' => '3202',
                'nama' => 'Cikidang'
            ],
            [
                'id' => '3202290',
                'kabupaten_id' => '3202',
                'nama' => 'Cisolok'
            ],
            [
                'id' => '3202291',
                'kabupaten_id' => '3202',
                'nama' => 'Cikakak'
            ],
            [
                'id' => '3202300',
                'kabupaten_id' => '3202',
                'nama' => 'Kabandungan'
            ],
            [
                'id' => '3203010',
                'kabupaten_id' => '3203',
                'nama' => 'Agrabinta'
            ],
            [
                'id' => '3203011',
                'kabupaten_id' => '3203',
                'nama' => 'Leles'
            ],
            [
                'id' => '3203020',
                'kabupaten_id' => '3203',
                'nama' => 'Sindangbarang'
            ],
            [
                'id' => '3203030',
                'kabupaten_id' => '3203',
                'nama' => 'Cidaun'
            ],
            [
                'id' => '3203040',
                'kabupaten_id' => '3203',
                'nama' => 'Naringgul'
            ],
            [
                'id' => '3203050',
                'kabupaten_id' => '3203',
                'nama' => 'Cibinong'
            ],
            [
                'id' => '3203051',
                'kabupaten_id' => '3203',
                'nama' => 'Cikadu'
            ],
            [
                'id' => '3203060',
                'kabupaten_id' => '3203',
                'nama' => 'Tanggeung'
            ],
            [
                'id' => '3203061',
                'kabupaten_id' => '3203',
                'nama' => 'Pasirkuda'
            ],
            [
                'id' => '3203070',
                'kabupaten_id' => '3203',
                'nama' => 'Kadupandak'
            ],
            [
                'id' => '3203071',
                'kabupaten_id' => '3203',
                'nama' => 'Cijati'
            ],
            [
                'id' => '3203080',
                'kabupaten_id' => '3203',
                'nama' => 'Takokak'
            ],
            [
                'id' => '3203090',
                'kabupaten_id' => '3203',
                'nama' => 'Sukanagara'
            ],
            [
                'id' => '3203100',
                'kabupaten_id' => '3203',
                'nama' => 'Pagelaran'
            ],
            [
                'id' => '3203110',
                'kabupaten_id' => '3203',
                'nama' => 'Campaka'
            ],
            [
                'id' => '3203111',
                'kabupaten_id' => '3203',
                'nama' => 'Campaka Mulya'
            ],
            [
                'id' => '3203120',
                'kabupaten_id' => '3203',
                'nama' => 'Cibeber'
            ],
            [
                'id' => '3203130',
                'kabupaten_id' => '3203',
                'nama' => 'Warungkondang'
            ],
            [
                'id' => '3203131',
                'kabupaten_id' => '3203',
                'nama' => 'Gekbrong'
            ],
            [
                'id' => '3203140',
                'kabupaten_id' => '3203',
                'nama' => 'Cilaku'
            ],
            [
                'id' => '3203150',
                'kabupaten_id' => '3203',
                'nama' => 'Sukaluyu'
            ],
            [
                'id' => '3203160',
                'kabupaten_id' => '3203',
                'nama' => 'Bojongpicung'
            ],
            [
                'id' => '3203161',
                'kabupaten_id' => '3203',
                'nama' => 'Haurwangi'
            ],
            [
                'id' => '3203170',
                'kabupaten_id' => '3203',
                'nama' => 'Ciranjang'
            ],
            [
                'id' => '3203180',
                'kabupaten_id' => '3203',
                'nama' => 'Mande'
            ],
            [
                'id' => '3203190',
                'kabupaten_id' => '3203',
                'nama' => 'Karangtengah'
            ],
            [
                'id' => '3203200',
                'kabupaten_id' => '3203',
                'nama' => 'Cianjur'
            ],
            [
                'id' => '3203210',
                'kabupaten_id' => '3203',
                'nama' => 'Cugenang'
            ],
            [
                'id' => '3203220',
                'kabupaten_id' => '3203',
                'nama' => 'Pacet'
            ],
            [
                'id' => '3203221',
                'kabupaten_id' => '3203',
                'nama' => 'Cipanas'
            ],
            [
                'id' => '3203230',
                'kabupaten_id' => '3203',
                'nama' => 'Sukaresmi'
            ],
            [
                'id' => '3203240',
                'kabupaten_id' => '3203',
                'nama' => 'Cikalongkulon'
            ],
            [
                'id' => '3204010',
                'kabupaten_id' => '3204',
                'nama' => 'Ciwidey'
            ],
            [
                'id' => '3204011',
                'kabupaten_id' => '3204',
                'nama' => 'Rancabali'
            ],
            [
                'id' => '3204020',
                'kabupaten_id' => '3204',
                'nama' => 'Pasirjambu'
            ],
            [
                'id' => '3204030',
                'kabupaten_id' => '3204',
                'nama' => 'Cimaung'
            ],
            [
                'id' => '3204040',
                'kabupaten_id' => '3204',
                'nama' => 'Pangalengan'
            ],
            [
                'id' => '3204050',
                'kabupaten_id' => '3204',
                'nama' => 'Kertasari'
            ],
            [
                'id' => '3204060',
                'kabupaten_id' => '3204',
                'nama' => 'Pacet'
            ],
            [
                'id' => '3204070',
                'kabupaten_id' => '3204',
                'nama' => 'Ibun'
            ],
            [
                'id' => '3204080',
                'kabupaten_id' => '3204',
                'nama' => 'Paseh'
            ],
            [
                'id' => '3204090',
                'kabupaten_id' => '3204',
                'nama' => 'Cikancung'
            ],
            [
                'id' => '3204100',
                'kabupaten_id' => '3204',
                'nama' => 'Cicalengka'
            ],
            [
                'id' => '3204101',
                'kabupaten_id' => '3204',
                'nama' => 'Nagreg'
            ],
            [
                'id' => '3204110',
                'kabupaten_id' => '3204',
                'nama' => 'Rancaekek'
            ],
            [
                'id' => '3204120',
                'kabupaten_id' => '3204',
                'nama' => 'Majalaya'
            ],
            [
                'id' => '3204121',
                'kabupaten_id' => '3204',
                'nama' => 'Solokan Jeruk'
            ],
            [
                'id' => '3204130',
                'kabupaten_id' => '3204',
                'nama' => 'Ciparay'
            ],
            [
                'id' => '3204140',
                'kabupaten_id' => '3204',
                'nama' => 'Baleendah'
            ],
            [
                'id' => '3204150',
                'kabupaten_id' => '3204',
                'nama' => 'Arjasari'
            ],
            [
                'id' => '3204160',
                'kabupaten_id' => '3204',
                'nama' => 'Banjaran'
            ],
            [
                'id' => '3204161',
                'kabupaten_id' => '3204',
                'nama' => 'Cangkuang'
            ],
            [
                'id' => '3204170',
                'kabupaten_id' => '3204',
                'nama' => 'Pameungpeuk'
            ],
            [
                'id' => '3204180',
                'kabupaten_id' => '3204',
                'nama' => 'Katapang'
            ],
            [
                'id' => '3204190',
                'kabupaten_id' => '3204',
                'nama' => 'Soreang'
            ],
            [
                'id' => '3204191',
                'kabupaten_id' => '3204',
                'nama' => 'Kutawaringin'
            ],
            [
                'id' => '3204250',
                'kabupaten_id' => '3204',
                'nama' => 'Margaasih'
            ],
            [
                'id' => '3204260',
                'kabupaten_id' => '3204',
                'nama' => 'Margahayu'
            ],
            [
                'id' => '3204270',
                'kabupaten_id' => '3204',
                'nama' => 'Dayeuhkolot'
            ],
            [
                'id' => '3204280',
                'kabupaten_id' => '3204',
                'nama' => 'Bojongsoang'
            ],
            [
                'id' => '3204290',
                'kabupaten_id' => '3204',
                'nama' => 'Cileunyi'
            ],
            [
                'id' => '3204300',
                'kabupaten_id' => '3204',
                'nama' => 'Cilengkrang'
            ],
            [
                'id' => '3204310',
                'kabupaten_id' => '3204',
                'nama' => 'Cimenyan'
            ],
            [
                'id' => '3205010',
                'kabupaten_id' => '3205',
                'nama' => 'Cisewu'
            ],
            [
                'id' => '3205011',
                'kabupaten_id' => '3205',
                'nama' => 'Caringin'
            ],
            [
                'id' => '3205020',
                'kabupaten_id' => '3205',
                'nama' => 'Talegong'
            ],
            [
                'id' => '3205030',
                'kabupaten_id' => '3205',
                'nama' => 'Bungbulang'
            ],
            [
                'id' => '3205031',
                'kabupaten_id' => '3205',
                'nama' => 'Mekarmukti'
            ],
            [
                'id' => '3205040',
                'kabupaten_id' => '3205',
                'nama' => 'Pamulihan'
            ],
            [
                'id' => '3205050',
                'kabupaten_id' => '3205',
                'nama' => 'Pakenjeng'
            ],
            [
                'id' => '3205060',
                'kabupaten_id' => '3205',
                'nama' => 'Cikelet'
            ],
            [
                'id' => '3205070',
                'kabupaten_id' => '3205',
                'nama' => 'Pameungpeuk'
            ],
            [
                'id' => '3205080',
                'kabupaten_id' => '3205',
                'nama' => 'Cibalong'
            ],
            [
                'id' => '3205090',
                'kabupaten_id' => '3205',
                'nama' => 'Cisompet'
            ],
            [
                'id' => '3205100',
                'kabupaten_id' => '3205',
                'nama' => 'Peundeuy'
            ],
            [
                'id' => '3205110',
                'kabupaten_id' => '3205',
                'nama' => 'Singajaya'
            ],
            [
                'id' => '3205111',
                'kabupaten_id' => '3205',
                'nama' => 'Cihurip'
            ],
            [
                'id' => '3205120',
                'kabupaten_id' => '3205',
                'nama' => 'Cikajang'
            ],
            [
                'id' => '3205130',
                'kabupaten_id' => '3205',
                'nama' => 'Banjarwangi'
            ],
            [
                'id' => '3205140',
                'kabupaten_id' => '3205',
                'nama' => 'Cilawu'
            ],
            [
                'id' => '3205150',
                'kabupaten_id' => '3205',
                'nama' => 'Bayongbong'
            ],
            [
                'id' => '3205151',
                'kabupaten_id' => '3205',
                'nama' => 'Cigedug'
            ],
            [
                'id' => '3205160',
                'kabupaten_id' => '3205',
                'nama' => 'Cisurupan'
            ],
            [
                'id' => '3205161',
                'kabupaten_id' => '3205',
                'nama' => 'Sukaresmi'
            ],
            [
                'id' => '3205170',
                'kabupaten_id' => '3205',
                'nama' => 'Samarang'
            ],
            [
                'id' => '3205171',
                'kabupaten_id' => '3205',
                'nama' => 'Pasirwangi'
            ],
            [
                'id' => '3205181',
                'kabupaten_id' => '3205',
                'nama' => 'Tarogong Kidul'
            ],
            [
                'id' => '3205182',
                'kabupaten_id' => '3205',
                'nama' => 'Tarogong Kaler'
            ],
            [
                'id' => '3205190',
                'kabupaten_id' => '3205',
                'nama' => 'Garut Kota'
            ],
            [
                'id' => '3205200',
                'kabupaten_id' => '3205',
                'nama' => 'Karangpawitan'
            ],
            [
                'id' => '3205210',
                'kabupaten_id' => '3205',
                'nama' => 'Wanaraja'
            ],
            [
                'id' => '3205211',
                'kabupaten_id' => '3205',
                'nama' => 'Sucinaraja'
            ],
            [
                'id' => '3205212',
                'kabupaten_id' => '3205',
                'nama' => 'Pangatikan'
            ],
            [
                'id' => '3205220',
                'kabupaten_id' => '3205',
                'nama' => 'Sukawening'
            ],
            [
                'id' => '3205221',
                'kabupaten_id' => '3205',
                'nama' => 'Karangtengah'
            ],
            [
                'id' => '3205230',
                'kabupaten_id' => '3205',
                'nama' => 'Banyuresmi'
            ],
            [
                'id' => '3205240',
                'kabupaten_id' => '3205',
                'nama' => 'Leles'
            ],
            [
                'id' => '3205250',
                'kabupaten_id' => '3205',
                'nama' => 'Leuwigoong'
            ],
            [
                'id' => '3205260',
                'kabupaten_id' => '3205',
                'nama' => 'Cibatu'
            ],
            [
                'id' => '3205261',
                'kabupaten_id' => '3205',
                'nama' => 'Kersamanah'
            ],
            [
                'id' => '3205270',
                'kabupaten_id' => '3205',
                'nama' => 'Cibiuk'
            ],
            [
                'id' => '3205280',
                'kabupaten_id' => '3205',
                'nama' => 'Kadungora'
            ],
            [
                'id' => '3205290',
                'kabupaten_id' => '3205',
                'nama' => 'Blubur Limbangan'
            ],
            [
                'id' => '3205300',
                'kabupaten_id' => '3205',
                'nama' => 'Selaawi'
            ],
            [
                'id' => '3205310',
                'kabupaten_id' => '3205',
                'nama' => 'Malangbong'
            ],
            [
                'id' => '3206010',
                'kabupaten_id' => '3206',
                'nama' => 'Cipatujah'
            ],
            [
                'id' => '3206020',
                'kabupaten_id' => '3206',
                'nama' => 'Karangnunggal'
            ],
            [
                'id' => '3206030',
                'kabupaten_id' => '3206',
                'nama' => 'Cikalong'
            ],
            [
                'id' => '3206040',
                'kabupaten_id' => '3206',
                'nama' => 'Pancatengah'
            ],
            [
                'id' => '3206050',
                'kabupaten_id' => '3206',
                'nama' => 'Cikatomas'
            ],
            [
                'id' => '3206060',
                'kabupaten_id' => '3206',
                'nama' => 'Cibalong'
            ],
            [
                'id' => '3206061',
                'kabupaten_id' => '3206',
                'nama' => 'Parungponteng'
            ],
            [
                'id' => '3206070',
                'kabupaten_id' => '3206',
                'nama' => 'Bantarkalong'
            ],
            [
                'id' => '3206071',
                'kabupaten_id' => '3206',
                'nama' => 'Bojongasih'
            ],
            [
                'id' => '3206072',
                'kabupaten_id' => '3206',
                'nama' => 'Culamega'
            ],
            [
                'id' => '3206080',
                'kabupaten_id' => '3206',
                'nama' => 'Bojonggambir'
            ],
            [
                'id' => '3206090',
                'kabupaten_id' => '3206',
                'nama' => 'Sodonghilir'
            ],
            [
                'id' => '3206100',
                'kabupaten_id' => '3206',
                'nama' => 'Taraju'
            ],
            [
                'id' => '3206110',
                'kabupaten_id' => '3206',
                'nama' => 'Salawu'
            ],
            [
                'id' => '3206111',
                'kabupaten_id' => '3206',
                'nama' => 'Puspahiang'
            ],
            [
                'id' => '3206120',
                'kabupaten_id' => '3206',
                'nama' => 'Tanjungjaya'
            ],
            [
                'id' => '3206130',
                'kabupaten_id' => '3206',
                'nama' => 'Sukaraja'
            ],
            [
                'id' => '3206140',
                'kabupaten_id' => '3206',
                'nama' => 'Salopa'
            ],
            [
                'id' => '3206141',
                'kabupaten_id' => '3206',
                'nama' => 'Jatiwaras'
            ],
            [
                'id' => '3206150',
                'kabupaten_id' => '3206',
                'nama' => 'Cineam'
            ],
            [
                'id' => '3206151',
                'kabupaten_id' => '3206',
                'nama' => 'Karangjaya'
            ],
            [
                'id' => '3206160',
                'kabupaten_id' => '3206',
                'nama' => 'Manonjaya'
            ],
            [
                'id' => '3206161',
                'kabupaten_id' => '3206',
                'nama' => 'Gunungtanjung'
            ],
            [
                'id' => '3206190',
                'kabupaten_id' => '3206',
                'nama' => 'Singaparna'
            ],
            [
                'id' => '3206191',
                'kabupaten_id' => '3206',
                'nama' => 'Sukarame'
            ],
            [
                'id' => '3206192',
                'kabupaten_id' => '3206',
                'nama' => 'Mangunreja'
            ],
            [
                'id' => '3206200',
                'kabupaten_id' => '3206',
                'nama' => 'Cigalontang'
            ],
            [
                'id' => '3206210',
                'kabupaten_id' => '3206',
                'nama' => 'Leuwisari'
            ],
            [
                'id' => '3206211',
                'kabupaten_id' => '3206',
                'nama' => 'Sariwangi'
            ],
            [
                'id' => '3206212',
                'kabupaten_id' => '3206',
                'nama' => 'Padakembang'
            ],
            [
                'id' => '3206221',
                'kabupaten_id' => '3206',
                'nama' => 'Sukaratu'
            ],
            [
                'id' => '3206230',
                'kabupaten_id' => '3206',
                'nama' => 'Cisayong'
            ],
            [
                'id' => '3206231',
                'kabupaten_id' => '3206',
                'nama' => 'Sukahening'
            ],
            [
                'id' => '3206240',
                'kabupaten_id' => '3206',
                'nama' => 'Rajapolah'
            ],
            [
                'id' => '3206250',
                'kabupaten_id' => '3206',
                'nama' => 'Jamanis'
            ],
            [
                'id' => '3206260',
                'kabupaten_id' => '3206',
                'nama' => 'Ciawi'
            ],
            [
                'id' => '3206261',
                'kabupaten_id' => '3206',
                'nama' => 'Kadipaten'
            ],
            [
                'id' => '3206270',
                'kabupaten_id' => '3206',
                'nama' => 'Pagerageung'
            ],
            [
                'id' => '3206271',
                'kabupaten_id' => '3206',
                'nama' => 'Sukaresik'
            ],
            [
                'id' => '3207100',
                'kabupaten_id' => '3207',
                'nama' => 'Banjarsari'
            ],
            [
                'id' => '3207110',
                'kabupaten_id' => '3207',
                'nama' => 'Lakbok'
            ],
            [
                'id' => '3207111',
                'kabupaten_id' => '3207',
                'nama' => 'Purwadadi'
            ],
            [
                'id' => '3207120',
                'kabupaten_id' => '3207',
                'nama' => 'Pamarican'
            ],
            [
                'id' => '3207130',
                'kabupaten_id' => '3207',
                'nama' => 'Cidolog'
            ],
            [
                'id' => '3207140',
                'kabupaten_id' => '3207',
                'nama' => 'Cimaragas'
            ],
            [
                'id' => '3207150',
                'kabupaten_id' => '3207',
                'nama' => 'Cijeungjing'
            ],
            [
                'id' => '3207160',
                'kabupaten_id' => '3207',
                'nama' => 'Cisaga'
            ],
            [
                'id' => '3207170',
                'kabupaten_id' => '3207',
                'nama' => 'Tambaksari'
            ],
            [
                'id' => '3207180',
                'kabupaten_id' => '3207',
                'nama' => 'Rancah'
            ],
            [
                'id' => '3207190',
                'kabupaten_id' => '3207',
                'nama' => 'Rajadesa'
            ],
            [
                'id' => '3207200',
                'kabupaten_id' => '3207',
                'nama' => 'Sukadana'
            ],
            [
                'id' => '3207210',
                'kabupaten_id' => '3207',
                'nama' => 'Ciamis'
            ],
            [
                'id' => '3207211',
                'kabupaten_id' => '3207',
                'nama' => 'Baregbeg'
            ],
            [
                'id' => '3207220',
                'kabupaten_id' => '3207',
                'nama' => 'Cikoneng'
            ],
            [
                'id' => '3207221',
                'kabupaten_id' => '3207',
                'nama' => 'Sindangkasih'
            ],
            [
                'id' => '3207230',
                'kabupaten_id' => '3207',
                'nama' => 'Cihaurbeuti'
            ],
            [
                'id' => '3207240',
                'kabupaten_id' => '3207',
                'nama' => 'Sadananya'
            ],
            [
                'id' => '3207250',
                'kabupaten_id' => '3207',
                'nama' => 'Cipaku'
            ],
            [
                'id' => '3207260',
                'kabupaten_id' => '3207',
                'nama' => 'Jatinagara'
            ],
            [
                'id' => '3207270',
                'kabupaten_id' => '3207',
                'nama' => 'Panawangan'
            ],
            [
                'id' => '3207280',
                'kabupaten_id' => '3207',
                'nama' => 'Kawali'
            ],
            [
                'id' => '3207281',
                'kabupaten_id' => '3207',
                'nama' => 'Lumbung'
            ],
            [
                'id' => '3207290',
                'kabupaten_id' => '3207',
                'nama' => 'Panjalu'
            ],
            [
                'id' => '3207291',
                'kabupaten_id' => '3207',
                'nama' => 'Sukamantri'
            ],
            [
                'id' => '3207300',
                'kabupaten_id' => '3207',
                'nama' => 'Panumbangan'
            ],
            [
                'id' => '3208010',
                'kabupaten_id' => '3208',
                'nama' => 'Darma'
            ],
            [
                'id' => '3208020',
                'kabupaten_id' => '3208',
                'nama' => 'Kadugede'
            ],
            [
                'id' => '3208021',
                'kabupaten_id' => '3208',
                'nama' => 'Nusaherang'
            ],
            [
                'id' => '3208030',
                'kabupaten_id' => '3208',
                'nama' => 'Ciniru'
            ],
            [
                'id' => '3208031',
                'kabupaten_id' => '3208',
                'nama' => 'Hantara'
            ],
            [
                'id' => '3208040',
                'kabupaten_id' => '3208',
                'nama' => 'Selajambe'
            ],
            [
                'id' => '3208050',
                'kabupaten_id' => '3208',
                'nama' => 'Subang'
            ],
            [
                'id' => '3208051',
                'kabupaten_id' => '3208',
                'nama' => 'Cilebak'
            ],
            [
                'id' => '3208060',
                'kabupaten_id' => '3208',
                'nama' => 'Ciwaru'
            ],
            [
                'id' => '3208061',
                'kabupaten_id' => '3208',
                'nama' => 'Karangkancana'
            ],
            [
                'id' => '3208070',
                'kabupaten_id' => '3208',
                'nama' => 'Cibingbin'
            ],
            [
                'id' => '3208071',
                'kabupaten_id' => '3208',
                'nama' => 'Cibeureum'
            ],
            [
                'id' => '3208080',
                'kabupaten_id' => '3208',
                'nama' => 'Luragung'
            ],
            [
                'id' => '3208081',
                'kabupaten_id' => '3208',
                'nama' => 'Cimahi'
            ],
            [
                'id' => '3208090',
                'kabupaten_id' => '3208',
                'nama' => 'Cidahu'
            ],
            [
                'id' => '3208091',
                'kabupaten_id' => '3208',
                'nama' => 'Kalimanggis'
            ],
            [
                'id' => '3208100',
                'kabupaten_id' => '3208',
                'nama' => 'Ciawigebang'
            ],
            [
                'id' => '3208101',
                'kabupaten_id' => '3208',
                'nama' => 'Cipicung'
            ],
            [
                'id' => '3208110',
                'kabupaten_id' => '3208',
                'nama' => 'Lebakwangi'
            ],
            [
                'id' => '3208111',
                'kabupaten_id' => '3208',
                'nama' => 'Maleber'
            ],
            [
                'id' => '3208120',
                'kabupaten_id' => '3208',
                'nama' => 'Garawangi'
            ],
            [
                'id' => '3208121',
                'kabupaten_id' => '3208',
                'nama' => 'Sidangagung'
            ],
            [
                'id' => '3208130',
                'kabupaten_id' => '3208',
                'nama' => 'Kuningan'
            ],
            [
                'id' => '3208140',
                'kabupaten_id' => '3208',
                'nama' => 'Cigugur'
            ],
            [
                'id' => '3208150',
                'kabupaten_id' => '3208',
                'nama' => 'Kramatmulya'
            ],
            [
                'id' => '3208160',
                'kabupaten_id' => '3208',
                'nama' => 'Jalaksana'
            ],
            [
                'id' => '3208161',
                'kabupaten_id' => '3208',
                'nama' => 'Japara'
            ],
            [
                'id' => '3208170',
                'kabupaten_id' => '3208',
                'nama' => 'Cilimus'
            ],
            [
                'id' => '3208171',
                'kabupaten_id' => '3208',
                'nama' => 'Cigandamekar'
            ],
            [
                'id' => '3208180',
                'kabupaten_id' => '3208',
                'nama' => 'Mandirancan'
            ],
            [
                'id' => '3208181',
                'kabupaten_id' => '3208',
                'nama' => 'Pancalang'
            ],
            [
                'id' => '3208190',
                'kabupaten_id' => '3208',
                'nama' => 'Pasawahan'
            ],
            [
                'id' => '3209010',
                'kabupaten_id' => '3209',
                'nama' => 'Waled'
            ],
            [
                'id' => '3209011',
                'kabupaten_id' => '3209',
                'nama' => 'Pasaleman'
            ],
            [
                'id' => '3209020',
                'kabupaten_id' => '3209',
                'nama' => 'Ciledug'
            ],
            [
                'id' => '3209021',
                'kabupaten_id' => '3209',
                'nama' => 'Pabuaran'
            ],
            [
                'id' => '3209030',
                'kabupaten_id' => '3209',
                'nama' => 'Losari'
            ],
            [
                'id' => '3209031',
                'kabupaten_id' => '3209',
                'nama' => 'Pabedilan'
            ],
            [
                'id' => '3209040',
                'kabupaten_id' => '3209',
                'nama' => 'Babakan'
            ],
            [
                'id' => '3209041',
                'kabupaten_id' => '3209',
                'nama' => 'Gebang'
            ],
            [
                'id' => '3209050',
                'kabupaten_id' => '3209',
                'nama' => 'Karangsembung'
            ],
            [
                'id' => '3209051',
                'kabupaten_id' => '3209',
                'nama' => 'Karangwareng'
            ],
            [
                'id' => '3209060',
                'kabupaten_id' => '3209',
                'nama' => 'Lemahabang'
            ],
            [
                'id' => '3209061',
                'kabupaten_id' => '3209',
                'nama' => 'Susukanlebak'
            ],
            [
                'id' => '3209070',
                'kabupaten_id' => '3209',
                'nama' => 'Sedong'
            ],
            [
                'id' => '3209080',
                'kabupaten_id' => '3209',
                'nama' => 'Astanajapura'
            ],
            [
                'id' => '3209081',
                'kabupaten_id' => '3209',
                'nama' => 'Pangenan'
            ],
            [
                'id' => '3209090',
                'kabupaten_id' => '3209',
                'nama' => 'Mundu'
            ],
            [
                'id' => '3209100',
                'kabupaten_id' => '3209',
                'nama' => 'Beber'
            ],
            [
                'id' => '3209101',
                'kabupaten_id' => '3209',
                'nama' => 'Greged'
            ],
            [
                'id' => '3209111',
                'kabupaten_id' => '3209',
                'nama' => 'Talun'
            ],
            [
                'id' => '3209120',
                'kabupaten_id' => '3209',
                'nama' => 'Sumber'
            ],
            [
                'id' => '3209121',
                'kabupaten_id' => '3209',
                'nama' => 'Dukupuntang'
            ],
            [
                'id' => '3209130',
                'kabupaten_id' => '3209',
                'nama' => 'Palimanan'
            ],
            [
                'id' => '3209140',
                'kabupaten_id' => '3209',
                'nama' => 'Plumbon'
            ],
            [
                'id' => '3209141',
                'kabupaten_id' => '3209',
                'nama' => 'Depok'
            ],
            [
                'id' => '3209150',
                'kabupaten_id' => '3209',
                'nama' => 'Weru'
            ],
            [
                'id' => '3209151',
                'kabupaten_id' => '3209',
                'nama' => 'Plered'
            ],
            [
                'id' => '3209161',
                'kabupaten_id' => '3209',
                'nama' => 'Tengah Tani'
            ],
            [
                'id' => '3209162',
                'kabupaten_id' => '3209',
                'nama' => 'Kedawung'
            ],
            [
                'id' => '3209171',
                'kabupaten_id' => '3209',
                'nama' => 'Gunungjati'
            ],
            [
                'id' => '3209180',
                'kabupaten_id' => '3209',
                'nama' => 'Kapetakan'
            ],
            [
                'id' => '3209181',
                'kabupaten_id' => '3209',
                'nama' => 'Suranenggala'
            ],
            [
                'id' => '3209190',
                'kabupaten_id' => '3209',
                'nama' => 'Klangenan'
            ],
            [
                'id' => '3209191',
                'kabupaten_id' => '3209',
                'nama' => 'Jamblang'
            ],
            [
                'id' => '3209200',
                'kabupaten_id' => '3209',
                'nama' => 'Arjawinangun'
            ],
            [
                'id' => '3209201',
                'kabupaten_id' => '3209',
                'nama' => 'Panguragan'
            ],
            [
                'id' => '3209210',
                'kabupaten_id' => '3209',
                'nama' => 'Ciwaringin'
            ],
            [
                'id' => '3209211',
                'kabupaten_id' => '3209',
                'nama' => 'Gempol'
            ],
            [
                'id' => '3209220',
                'kabupaten_id' => '3209',
                'nama' => 'Susukan'
            ],
            [
                'id' => '3209230',
                'kabupaten_id' => '3209',
                'nama' => 'Gegesik'
            ],
            [
                'id' => '3209231',
                'kabupaten_id' => '3209',
                'nama' => 'Kaliwedi'
            ],
            [
                'id' => '3210010',
                'kabupaten_id' => '3210',
                'nama' => 'Lemahsugih'
            ],
            [
                'id' => '3210020',
                'kabupaten_id' => '3210',
                'nama' => 'Bantarujeg'
            ],
            [
                'id' => '3210021',
                'kabupaten_id' => '3210',
                'nama' => 'Malausma'
            ],
            [
                'id' => '3210030',
                'kabupaten_id' => '3210',
                'nama' => 'Cikijing'
            ],
            [
                'id' => '3210031',
                'kabupaten_id' => '3210',
                'nama' => 'Cingambul'
            ],
            [
                'id' => '3210040',
                'kabupaten_id' => '3210',
                'nama' => 'Talaga'
            ],
            [
                'id' => '3210041',
                'kabupaten_id' => '3210',
                'nama' => 'Banjaran'
            ],
            [
                'id' => '3210050',
                'kabupaten_id' => '3210',
                'nama' => 'Argapura'
            ],
            [
                'id' => '3210060',
                'kabupaten_id' => '3210',
                'nama' => 'Maja'
            ],
            [
                'id' => '3210070',
                'kabupaten_id' => '3210',
                'nama' => 'Majalengka'
            ],
            [
                'id' => '3210080',
                'kabupaten_id' => '3210',
                'nama' => 'Cigasong'
            ],
            [
                'id' => '3210090',
                'kabupaten_id' => '3210',
                'nama' => 'Sukahaji'
            ],
            [
                'id' => '3210091',
                'kabupaten_id' => '3210',
                'nama' => 'Sindang'
            ],
            [
                'id' => '3210100',
                'kabupaten_id' => '3210',
                'nama' => 'Rajagaluh'
            ],
            [
                'id' => '3210110',
                'kabupaten_id' => '3210',
                'nama' => 'Sindangwangi'
            ],
            [
                'id' => '3210120',
                'kabupaten_id' => '3210',
                'nama' => 'Leuwimunding'
            ],
            [
                'id' => '3210130',
                'kabupaten_id' => '3210',
                'nama' => 'Palasah'
            ],
            [
                'id' => '3210140',
                'kabupaten_id' => '3210',
                'nama' => 'Jatiwangi'
            ],
            [
                'id' => '3210150',
                'kabupaten_id' => '3210',
                'nama' => 'Dawuan'
            ],
            [
                'id' => '3210151',
                'kabupaten_id' => '3210',
                'nama' => 'Kasokandel'
            ],
            [
                'id' => '3210160',
                'kabupaten_id' => '3210',
                'nama' => 'Panyingkiran'
            ],
            [
                'id' => '3210170',
                'kabupaten_id' => '3210',
                'nama' => 'Kadipaten'
            ],
            [
                'id' => '3210180',
                'kabupaten_id' => '3210',
                'nama' => 'Kertajati'
            ],
            [
                'id' => '3210190',
                'kabupaten_id' => '3210',
                'nama' => 'Jatitujuh'
            ],
            [
                'id' => '3210200',
                'kabupaten_id' => '3210',
                'nama' => 'Ligung'
            ],
            [
                'id' => '3210210',
                'kabupaten_id' => '3210',
                'nama' => 'Sumberjaya'
            ],
            [
                'id' => '3211010',
                'kabupaten_id' => '3211',
                'nama' => 'Jatinangor'
            ],
            [
                'id' => '3211020',
                'kabupaten_id' => '3211',
                'nama' => 'Cimanggung'
            ],
            [
                'id' => '3211030',
                'kabupaten_id' => '3211',
                'nama' => 'Tanjungsari'
            ],
            [
                'id' => '3211031',
                'kabupaten_id' => '3211',
                'nama' => 'Sukasari'
            ],
            [
                'id' => '3211032',
                'kabupaten_id' => '3211',
                'nama' => 'Pamulihan'
            ],
            [
                'id' => '3211040',
                'kabupaten_id' => '3211',
                'nama' => 'Rancakalong'
            ],
            [
                'id' => '3211050',
                'kabupaten_id' => '3211',
                'nama' => 'Sumedang Selatan'
            ],
            [
                'id' => '3211060',
                'kabupaten_id' => '3211',
                'nama' => 'Sumedang Utara'
            ],
            [
                'id' => '3211061',
                'kabupaten_id' => '3211',
                'nama' => 'Ganeas'
            ],
            [
                'id' => '3211070',
                'kabupaten_id' => '3211',
                'nama' => 'Situraja'
            ],
            [
                'id' => '3211071',
                'kabupaten_id' => '3211',
                'nama' => 'Cisitu'
            ],
            [
                'id' => '3211080',
                'kabupaten_id' => '3211',
                'nama' => 'Darmaraja'
            ],
            [
                'id' => '3211090',
                'kabupaten_id' => '3211',
                'nama' => 'Cibugel'
            ],
            [
                'id' => '3211100',
                'kabupaten_id' => '3211',
                'nama' => 'Wado'
            ],
            [
                'id' => '3211101',
                'kabupaten_id' => '3211',
                'nama' => 'Jatinunggal'
            ],
            [
                'id' => '3211111',
                'kabupaten_id' => '3211',
                'nama' => 'Jatigede'
            ],
            [
                'id' => '3211120',
                'kabupaten_id' => '3211',
                'nama' => 'Tomo'
            ],
            [
                'id' => '3211130',
                'kabupaten_id' => '3211',
                'nama' => 'Ujung Jaya'
            ],
            [
                'id' => '3211140',
                'kabupaten_id' => '3211',
                'nama' => 'Conggeang'
            ],
            [
                'id' => '3211150',
                'kabupaten_id' => '3211',
                'nama' => 'Paseh'
            ],
            [
                'id' => '3211160',
                'kabupaten_id' => '3211',
                'nama' => 'Cimalaka'
            ],
            [
                'id' => '3211161',
                'kabupaten_id' => '3211',
                'nama' => 'Cisarua'
            ],
            [
                'id' => '3211170',
                'kabupaten_id' => '3211',
                'nama' => 'Tanjungkerta'
            ],
            [
                'id' => '3211171',
                'kabupaten_id' => '3211',
                'nama' => 'Tanjungmedar'
            ],
            [
                'id' => '3211180',
                'kabupaten_id' => '3211',
                'nama' => 'Buahdua'
            ],
            [
                'id' => '3211181',
                'kabupaten_id' => '3211',
                'nama' => 'Surian'
            ],
            [
                'id' => '3212010',
                'kabupaten_id' => '3212',
                'nama' => 'Haurgeulis'
            ],
            [
                'id' => '3212011',
                'kabupaten_id' => '3212',
                'nama' => 'Gantar'
            ],
            [
                'id' => '3212020',
                'kabupaten_id' => '3212',
                'nama' => 'Kroya'
            ],
            [
                'id' => '3212030',
                'kabupaten_id' => '3212',
                'nama' => 'Gabuswetan'
            ],
            [
                'id' => '3212040',
                'kabupaten_id' => '3212',
                'nama' => 'Cikedung'
            ],
            [
                'id' => '3212041',
                'kabupaten_id' => '3212',
                'nama' => 'Terisi'
            ],
            [
                'id' => '3212050',
                'kabupaten_id' => '3212',
                'nama' => 'Lelea'
            ],
            [
                'id' => '3212060',
                'kabupaten_id' => '3212',
                'nama' => 'Bangodua'
            ],
            [
                'id' => '3212061',
                'kabupaten_id' => '3212',
                'nama' => 'Tukdana'
            ],
            [
                'id' => '3212070',
                'kabupaten_id' => '3212',
                'nama' => 'Widasari'
            ],
            [
                'id' => '3212080',
                'kabupaten_id' => '3212',
                'nama' => 'Kertasemaya'
            ],
            [
                'id' => '3212081',
                'kabupaten_id' => '3212',
                'nama' => 'Sukagumiwang'
            ],
            [
                'id' => '3212090',
                'kabupaten_id' => '3212',
                'nama' => 'Krangkeng'
            ],
            [
                'id' => '3212100',
                'kabupaten_id' => '3212',
                'nama' => 'Karangampel'
            ],
            [
                'id' => '3212101',
                'kabupaten_id' => '3212',
                'nama' => 'Kedokan Bunder'
            ],
            [
                'id' => '3212110',
                'kabupaten_id' => '3212',
                'nama' => 'Juntinyuat'
            ],
            [
                'id' => '3212120',
                'kabupaten_id' => '3212',
                'nama' => 'Sliyeg'
            ],
            [
                'id' => '3212130',
                'kabupaten_id' => '3212',
                'nama' => 'Jatibarang'
            ],
            [
                'id' => '3212140',
                'kabupaten_id' => '3212',
                'nama' => 'Balongan'
            ],
            [
                'id' => '3212150',
                'kabupaten_id' => '3212',
                'nama' => 'Indramayu'
            ],
            [
                'id' => '3212160',
                'kabupaten_id' => '3212',
                'nama' => 'Sindang'
            ],
            [
                'id' => '3212161',
                'kabupaten_id' => '3212',
                'nama' => 'Cantigi'
            ],
            [
                'id' => '3212162',
                'kabupaten_id' => '3212',
                'nama' => 'Pasekan'
            ],
            [
                'id' => '3212170',
                'kabupaten_id' => '3212',
                'nama' => 'Lohbener'
            ],
            [
                'id' => '3212171',
                'kabupaten_id' => '3212',
                'nama' => 'Arahan'
            ],
            [
                'id' => '3212180',
                'kabupaten_id' => '3212',
                'nama' => 'Losarang'
            ],
            [
                'id' => '3212190',
                'kabupaten_id' => '3212',
                'nama' => 'Kandanghaur'
            ],
            [
                'id' => '3212200',
                'kabupaten_id' => '3212',
                'nama' => 'Bongas'
            ],
            [
                'id' => '3212210',
                'kabupaten_id' => '3212',
                'nama' => 'Anjatan'
            ],
            [
                'id' => '3212220',
                'kabupaten_id' => '3212',
                'nama' => 'Sukra'
            ],
            [
                'id' => '3212221',
                'kabupaten_id' => '3212',
                'nama' => 'Patrol'
            ],
            [
                'id' => '3213010',
                'kabupaten_id' => '3213',
                'nama' => 'Sagalaherang'
            ],
            [
                'id' => '3213011',
                'kabupaten_id' => '3213',
                'nama' => 'Serangpanjang'
            ],
            [
                'id' => '3213020',
                'kabupaten_id' => '3213',
                'nama' => 'Jalancagak'
            ],
            [
                'id' => '3213021',
                'kabupaten_id' => '3213',
                'nama' => 'Ciater'
            ],
            [
                'id' => '3213030',
                'kabupaten_id' => '3213',
                'nama' => 'Cisalak'
            ],
            [
                'id' => '3213031',
                'kabupaten_id' => '3213',
                'nama' => 'Kasomalang'
            ],
            [
                'id' => '3213040',
                'kabupaten_id' => '3213',
                'nama' => 'Tanjungsiang'
            ],
            [
                'id' => '3213050',
                'kabupaten_id' => '3213',
                'nama' => 'Cijambe'
            ],
            [
                'id' => '3213060',
                'kabupaten_id' => '3213',
                'nama' => 'Cibogo'
            ],
            [
                'id' => '3213070',
                'kabupaten_id' => '3213',
                'nama' => 'Subang'
            ],
            [
                'id' => '3213080',
                'kabupaten_id' => '3213',
                'nama' => 'Kalijati'
            ],
            [
                'id' => '3213081',
                'kabupaten_id' => '3213',
                'nama' => 'Dawuan'
            ],
            [
                'id' => '3213090',
                'kabupaten_id' => '3213',
                'nama' => 'Cipeundeuy'
            ],
            [
                'id' => '3213100',
                'kabupaten_id' => '3213',
                'nama' => 'Pabuaran'
            ],
            [
                'id' => '3213110',
                'kabupaten_id' => '3213',
                'nama' => 'Patokbeusi'
            ],
            [
                'id' => '3213120',
                'kabupaten_id' => '3213',
                'nama' => 'Purwadadi'
            ],
            [
                'id' => '3213130',
                'kabupaten_id' => '3213',
                'nama' => 'Cikaum'
            ],
            [
                'id' => '3213140',
                'kabupaten_id' => '3213',
                'nama' => 'Pagaden'
            ],
            [
                'id' => '3213141',
                'kabupaten_id' => '3213',
                'nama' => 'Pagaden Barat'
            ],
            [
                'id' => '3213150',
                'kabupaten_id' => '3213',
                'nama' => 'Cipunagara'
            ],
            [
                'id' => '3213160',
                'kabupaten_id' => '3213',
                'nama' => 'Compreng'
            ],
            [
                'id' => '3213170',
                'kabupaten_id' => '3213',
                'nama' => 'Binong'
            ],
            [
                'id' => '3213171',
                'kabupaten_id' => '3213',
                'nama' => 'Tambakdahan'
            ],
            [
                'id' => '3213180',
                'kabupaten_id' => '3213',
                'nama' => 'Ciasem'
            ],
            [
                'id' => '3213190',
                'kabupaten_id' => '3213',
                'nama' => 'Pamanukan'
            ],
            [
                'id' => '3213191',
                'kabupaten_id' => '3213',
                'nama' => 'Sukasari'
            ],
            [
                'id' => '3213200',
                'kabupaten_id' => '3213',
                'nama' => 'Pusakanagara'
            ],
            [
                'id' => '3213201',
                'kabupaten_id' => '3213',
                'nama' => 'Pusakajaya'
            ],
            [
                'id' => '3213210',
                'kabupaten_id' => '3213',
                'nama' => 'Legonkulon'
            ],
            [
                'id' => '3213220',
                'kabupaten_id' => '3213',
                'nama' => 'Blanakan'
            ],
            [
                'id' => '3214010',
                'kabupaten_id' => '3214',
                'nama' => 'Jatiluhur'
            ],
            [
                'id' => '3214011',
                'kabupaten_id' => '3214',
                'nama' => 'Sukasari'
            ],
            [
                'id' => '3214020',
                'kabupaten_id' => '3214',
                'nama' => 'Maniis'
            ],
            [
                'id' => '3214030',
                'kabupaten_id' => '3214',
                'nama' => 'Tegal Waru'
            ],
            [
                'id' => '3214040',
                'kabupaten_id' => '3214',
                'nama' => 'Plered'
            ],
            [
                'id' => '3214050',
                'kabupaten_id' => '3214',
                'nama' => 'Sukatani'
            ],
            [
                'id' => '3214060',
                'kabupaten_id' => '3214',
                'nama' => 'Darangdan'
            ],
            [
                'id' => '3214070',
                'kabupaten_id' => '3214',
                'nama' => 'Bojong'
            ],
            [
                'id' => '3214080',
                'kabupaten_id' => '3214',
                'nama' => 'Wanayasa'
            ],
            [
                'id' => '3214081',
                'kabupaten_id' => '3214',
                'nama' => 'Kiarapedes'
            ],
            [
                'id' => '3214090',
                'kabupaten_id' => '3214',
                'nama' => 'Pasawahan'
            ],
            [
                'id' => '3214091',
                'kabupaten_id' => '3214',
                'nama' => 'Pondok Salam'
            ],
            [
                'id' => '3214100',
                'kabupaten_id' => '3214',
                'nama' => 'Purwakarta'
            ],
            [
                'id' => '3214101',
                'kabupaten_id' => '3214',
                'nama' => 'Babakancikao'
            ],
            [
                'id' => '3214110',
                'kabupaten_id' => '3214',
                'nama' => 'Campaka'
            ],
            [
                'id' => '3214111',
                'kabupaten_id' => '3214',
                'nama' => 'Cibatu'
            ],
            [
                'id' => '3214112',
                'kabupaten_id' => '3214',
                'nama' => 'Bungursari'
            ],
            [
                'id' => '3215010',
                'kabupaten_id' => '3215',
                'nama' => 'Pangkalan'
            ],
            [
                'id' => '3215011',
                'kabupaten_id' => '3215',
                'nama' => 'Tegalwaru'
            ],
            [
                'id' => '3215020',
                'kabupaten_id' => '3215',
                'nama' => 'Ciampel'
            ],
            [
                'id' => '3215031',
                'kabupaten_id' => '3215',
                'nama' => 'Telukjambe Timur'
            ],
            [
                'id' => '3215032',
                'kabupaten_id' => '3215',
                'nama' => 'Telukjambe Barat'
            ],
            [
                'id' => '3215040',
                'kabupaten_id' => '3215',
                'nama' => 'Klari'
            ],
            [
                'id' => '3215050',
                'kabupaten_id' => '3215',
                'nama' => 'Cikampek'
            ],
            [
                'id' => '3215051',
                'kabupaten_id' => '3215',
                'nama' => 'Purwasari'
            ],
            [
                'id' => '3215060',
                'kabupaten_id' => '3215',
                'nama' => 'Tirtamulya'
            ],
            [
                'id' => '3215070',
                'kabupaten_id' => '3215',
                'nama' => 'Jatisari'
            ],
            [
                'id' => '3215071',
                'kabupaten_id' => '3215',
                'nama' => 'Banyusari'
            ],
            [
                'id' => '3215072',
                'kabupaten_id' => '3215',
                'nama' => 'Kotabaru'
            ],
            [
                'id' => '3215081',
                'kabupaten_id' => '3215',
                'nama' => 'Cilamaya Wetan'
            ],
            [
                'id' => '3215082',
                'kabupaten_id' => '3215',
                'nama' => 'Cilamaya Kulon'
            ],
            [
                'id' => '3215090',
                'kabupaten_id' => '3215',
                'nama' => 'Lemahabang'
            ],
            [
                'id' => '3215100',
                'kabupaten_id' => '3215',
                'nama' => 'Talagasari'
            ],
            [
                'id' => '3215111',
                'kabupaten_id' => '3215',
                'nama' => 'Majalaya'
            ],
            [
                'id' => '3215112',
                'kabupaten_id' => '3215',
                'nama' => 'Karawang Timur'
            ],
            [
                'id' => '3215113',
                'kabupaten_id' => '3215',
                'nama' => 'Karawang Barat'
            ],
            [
                'id' => '3215120',
                'kabupaten_id' => '3215',
                'nama' => 'Rawamerta'
            ],
            [
                'id' => '3215130',
                'kabupaten_id' => '3215',
                'nama' => 'Tempuran'
            ],
            [
                'id' => '3215140',
                'kabupaten_id' => '3215',
                'nama' => 'Kutawaluya'
            ],
            [
                'id' => '3215150',
                'kabupaten_id' => '3215',
                'nama' => 'Rengasdengklok'
            ],
            [
                'id' => '3215151',
                'kabupaten_id' => '3215',
                'nama' => 'Jayakerta'
            ],
            [
                'id' => '3215160',
                'kabupaten_id' => '3215',
                'nama' => 'Pedes'
            ],
            [
                'id' => '3215161',
                'kabupaten_id' => '3215',
                'nama' => 'Cilebar'
            ],
            [
                'id' => '3215170',
                'kabupaten_id' => '3215',
                'nama' => 'Cibuaya'
            ],
            [
                'id' => '3215180',
                'kabupaten_id' => '3215',
                'nama' => 'Tirtajaya'
            ],
            [
                'id' => '3215190',
                'kabupaten_id' => '3215',
                'nama' => 'Batujaya'
            ],
            [
                'id' => '3215200',
                'kabupaten_id' => '3215',
                'nama' => 'Pakisjaya'
            ],
            [
                'id' => '3216010',
                'kabupaten_id' => '3216',
                'nama' => 'Setu'
            ],
            [
                'id' => '3216021',
                'kabupaten_id' => '3216',
                'nama' => 'Serang Baru'
            ],
            [
                'id' => '3216022',
                'kabupaten_id' => '3216',
                'nama' => 'Cikarang Pusat'
            ],
            [
                'id' => '3216023',
                'kabupaten_id' => '3216',
                'nama' => 'Cikarang Selatan'
            ],
            [
                'id' => '3216030',
                'kabupaten_id' => '3216',
                'nama' => 'Cibarusah'
            ],
            [
                'id' => '3216031',
                'kabupaten_id' => '3216',
                'nama' => 'Bojongmangu'
            ],
            [
                'id' => '3216041',
                'kabupaten_id' => '3216',
                'nama' => 'Cikarang Timur'
            ],
            [
                'id' => '3216050',
                'kabupaten_id' => '3216',
                'nama' => 'Kedungwaringin'
            ],
            [
                'id' => '3216061',
                'kabupaten_id' => '3216',
                'nama' => 'Cikarang Utara'
            ],
            [
                'id' => '3216062',
                'kabupaten_id' => '3216',
                'nama' => 'Karangbahagia'
            ],
            [
                'id' => '3216070',
                'kabupaten_id' => '3216',
                'nama' => 'Cibitung'
            ],
            [
                'id' => '3216071',
                'kabupaten_id' => '3216',
                'nama' => 'Cikarang Barat'
            ],
            [
                'id' => '3216081',
                'kabupaten_id' => '3216',
                'nama' => 'Tambun Selatan'
            ],
            [
                'id' => '3216082',
                'kabupaten_id' => '3216',
                'nama' => 'Tambun Utara'
            ],
            [
                'id' => '3216090',
                'kabupaten_id' => '3216',
                'nama' => 'Babelan'
            ],
            [
                'id' => '3216100',
                'kabupaten_id' => '3216',
                'nama' => 'Tarumajaya'
            ],
            [
                'id' => '3216110',
                'kabupaten_id' => '3216',
                'nama' => 'Tambelang'
            ],
            [
                'id' => '3216111',
                'kabupaten_id' => '3216',
                'nama' => 'Sukawangi'
            ],
            [
                'id' => '3216120',
                'kabupaten_id' => '3216',
                'nama' => 'Sukatani'
            ],
            [
                'id' => '3216121',
                'kabupaten_id' => '3216',
                'nama' => 'Sukakarya'
            ],
            [
                'id' => '3216130',
                'kabupaten_id' => '3216',
                'nama' => 'Pebayuran'
            ],
            [
                'id' => '3216140',
                'kabupaten_id' => '3216',
                'nama' => 'Cabangbungin'
            ],
            [
                'id' => '3216150',
                'kabupaten_id' => '3216',
                'nama' => 'Muara Gembong'
            ],
            [
                'id' => '3217010',
                'kabupaten_id' => '3217',
                'nama' => 'Rongga'
            ],
            [
                'id' => '3217020',
                'kabupaten_id' => '3217',
                'nama' => 'Gununghalu'
            ],
            [
                'id' => '3217030',
                'kabupaten_id' => '3217',
                'nama' => 'Sindangkerta'
            ],
            [
                'id' => '3217040',
                'kabupaten_id' => '3217',
                'nama' => 'Cililin'
            ],
            [
                'id' => '3217050',
                'kabupaten_id' => '3217',
                'nama' => 'Cihampelas'
            ],
            [
                'id' => '3217060',
                'kabupaten_id' => '3217',
                'nama' => 'Cipongkor'
            ],
            [
                'id' => '3217070',
                'kabupaten_id' => '3217',
                'nama' => 'Batujajar'
            ],
            [
                'id' => '3217071',
                'kabupaten_id' => '3217',
                'nama' => 'Saguling'
            ],
            [
                'id' => '3217080',
                'kabupaten_id' => '3217',
                'nama' => 'Cipatat'
            ],
            [
                'id' => '3217090',
                'kabupaten_id' => '3217',
                'nama' => 'Padalarang'
            ],
            [
                'id' => '3217100',
                'kabupaten_id' => '3217',
                'nama' => 'Ngamprah'
            ],
            [
                'id' => '3217110',
                'kabupaten_id' => '3217',
                'nama' => 'Parongpong'
            ],
            [
                'id' => '3217120',
                'kabupaten_id' => '3217',
                'nama' => 'Lembang'
            ],
            [
                'id' => '3217130',
                'kabupaten_id' => '3217',
                'nama' => 'Cisarua'
            ],
            [
                'id' => '3217140',
                'kabupaten_id' => '3217',
                'nama' => 'Cikalong Wetan'
            ],
            [
                'id' => '3217150',
                'kabupaten_id' => '3217',
                'nama' => 'Cipeundeuy'
            ],
            [
                'id' => '3218010',
                'kabupaten_id' => '3218',
                'nama' => 'Cimerak'
            ],
            [
                'id' => '3218020',
                'kabupaten_id' => '3218',
                'nama' => 'Cijulang'
            ],
            [
                'id' => '3218030',
                'kabupaten_id' => '3218',
                'nama' => 'Cigugur'
            ],
            [
                'id' => '3218040',
                'kabupaten_id' => '3218',
                'nama' => 'Langkaplancar'
            ],
            [
                'id' => '3218050',
                'kabupaten_id' => '3218',
                'nama' => 'Parigi'
            ],
            [
                'id' => '3218060',
                'kabupaten_id' => '3218',
                'nama' => 'Sidamulih'
            ],
            [
                'id' => '3218070',
                'kabupaten_id' => '3218',
                'nama' => 'Pangandaran'
            ],
            [
                'id' => '3218080',
                'kabupaten_id' => '3218',
                'nama' => 'Kalipucang'
            ],
            [
                'id' => '3218090',
                'kabupaten_id' => '3218',
                'nama' => 'Padaherang'
            ],
            [
                'id' => '3218100',
                'kabupaten_id' => '3218',
                'nama' => 'Mangunjaya'
            ],
            [
                'id' => '3271010',
                'kabupaten_id' => '3271',
                'nama' => 'Bogor Selatan'
            ],
            [
                'id' => '3271020',
                'kabupaten_id' => '3271',
                'nama' => 'Bogor Timur'
            ],
            [
                'id' => '3271030',
                'kabupaten_id' => '3271',
                'nama' => 'Bogor Utara'
            ],
            [
                'id' => '3271040',
                'kabupaten_id' => '3271',
                'nama' => 'Bogor Tengah'
            ],
            [
                'id' => '3271050',
                'kabupaten_id' => '3271',
                'nama' => 'Bogor Barat'
            ],
            [
                'id' => '3271060',
                'kabupaten_id' => '3271',
                'nama' => 'Tanah Sereal'
            ],
            [
                'id' => '3272010',
                'kabupaten_id' => '3272',
                'nama' => 'Baros'
            ],
            [
                'id' => '3272011',
                'kabupaten_id' => '3272',
                'nama' => 'Lembursitu'
            ],
            [
                'id' => '3272012',
                'kabupaten_id' => '3272',
                'nama' => 'Cibeureum'
            ],
            [
                'id' => '3272020',
                'kabupaten_id' => '3272',
                'nama' => 'Citamiang'
            ],
            [
                'id' => '3272030',
                'kabupaten_id' => '3272',
                'nama' => 'Warudoyong'
            ],
            [
                'id' => '3272040',
                'kabupaten_id' => '3272',
                'nama' => 'Gunung Puyuh'
            ],
            [
                'id' => '3272050',
                'kabupaten_id' => '3272',
                'nama' => 'Cikole'
            ],
            [
                'id' => '3273010',
                'kabupaten_id' => '3273',
                'nama' => 'Bandung Kulon'
            ],
            [
                'id' => '3273020',
                'kabupaten_id' => '3273',
                'nama' => 'Babakan Ciparay'
            ],
            [
                'id' => '3273030',
                'kabupaten_id' => '3273',
                'nama' => 'Bojongloa Kaler'
            ],
            [
                'id' => '3273040',
                'kabupaten_id' => '3273',
                'nama' => 'Bojongloa Kidul'
            ],
            [
                'id' => '3273050',
                'kabupaten_id' => '3273',
                'nama' => 'Astanaanyar'
            ],
            [
                'id' => '3273060',
                'kabupaten_id' => '3273',
                'nama' => 'Regol'
            ],
            [
                'id' => '3273070',
                'kabupaten_id' => '3273',
                'nama' => 'Lengkong'
            ],
            [
                'id' => '3273080',
                'kabupaten_id' => '3273',
                'nama' => 'Bandung Kidul'
            ],
            [
                'id' => '3273090',
                'kabupaten_id' => '3273',
                'nama' => 'Buahbatu'
            ],
            [
                'id' => '3273100',
                'kabupaten_id' => '3273',
                'nama' => 'Rancasari'
            ],
            [
                'id' => '3273101',
                'kabupaten_id' => '3273',
                'nama' => 'Gedebage'
            ],
            [
                'id' => '3273110',
                'kabupaten_id' => '3273',
                'nama' => 'Cibiru'
            ],
            [
                'id' => '3273111',
                'kabupaten_id' => '3273',
                'nama' => 'Panyileukan'
            ],
            [
                'id' => '3273120',
                'kabupaten_id' => '3273',
                'nama' => 'Ujung Berung'
            ],
            [
                'id' => '3273121',
                'kabupaten_id' => '3273',
                'nama' => 'Cinambo'
            ],
            [
                'id' => '3273130',
                'kabupaten_id' => '3273',
                'nama' => 'Arcamanik'
            ],
            [
                'id' => '3273141',
                'kabupaten_id' => '3273',
                'nama' => 'Antapani'
            ],
            [
                'id' => '3273142',
                'kabupaten_id' => '3273',
                'nama' => 'Mandalajati'
            ],
            [
                'id' => '3273150',
                'kabupaten_id' => '3273',
                'nama' => 'Kiaracondong'
            ],
            [
                'id' => '3273160',
                'kabupaten_id' => '3273',
                'nama' => 'Batununggal'
            ],
            [
                'id' => '3273170',
                'kabupaten_id' => '3273',
                'nama' => 'Sumur Bandung'
            ],
            [
                'id' => '3273180',
                'kabupaten_id' => '3273',
                'nama' => 'Andir'
            ],
            [
                'id' => '3273190',
                'kabupaten_id' => '3273',
                'nama' => 'Cicendo'
            ],
            [
                'id' => '3273200',
                'kabupaten_id' => '3273',
                'nama' => 'Bandung Wetan'
            ],
            [
                'id' => '3273210',
                'kabupaten_id' => '3273',
                'nama' => 'Cibeunying Kidul'
            ],
            [
                'id' => '3273220',
                'kabupaten_id' => '3273',
                'nama' => 'Cibeunying Kaler'
            ],
            [
                'id' => '3273230',
                'kabupaten_id' => '3273',
                'nama' => 'Coblong'
            ],
            [
                'id' => '3273240',
                'kabupaten_id' => '3273',
                'nama' => 'Sukajadi'
            ],
            [
                'id' => '3273250',
                'kabupaten_id' => '3273',
                'nama' => 'Sukasari'
            ],
            [
                'id' => '3273260',
                'kabupaten_id' => '3273',
                'nama' => 'Cidadap'
            ],
            [
                'id' => '3274010',
                'kabupaten_id' => '3274',
                'nama' => 'Harjamukti'
            ],
            [
                'id' => '3274020',
                'kabupaten_id' => '3274',
                'nama' => 'Lemahwungkuk'
            ],
            [
                'id' => '3274030',
                'kabupaten_id' => '3274',
                'nama' => 'Pekalipan'
            ],
            [
                'id' => '3274040',
                'kabupaten_id' => '3274',
                'nama' => 'Kesambi'
            ],
            [
                'id' => '3274050',
                'kabupaten_id' => '3274',
                'nama' => 'Kejaksan'
            ],
            [
                'id' => '3275010',
                'kabupaten_id' => '3275',
                'nama' => 'Pondokgede'
            ],
            [
                'id' => '3275011',
                'kabupaten_id' => '3275',
                'nama' => 'Jatisampurna'
            ],
            [
                'id' => '3275012',
                'kabupaten_id' => '3275',
                'nama' => 'Pondokmelati'
            ],
            [
                'id' => '3275020',
                'kabupaten_id' => '3275',
                'nama' => 'Jatiasih'
            ],
            [
                'id' => '3275030',
                'kabupaten_id' => '3275',
                'nama' => 'Bantargebang'
            ],
            [
                'id' => '3275031',
                'kabupaten_id' => '3275',
                'nama' => 'Mustikajaya'
            ],
            [
                'id' => '3275040',
                'kabupaten_id' => '3275',
                'nama' => 'Bekasi Timur'
            ],
            [
                'id' => '3275041',
                'kabupaten_id' => '3275',
                'nama' => 'Rawalumbu'
            ],
            [
                'id' => '3275050',
                'kabupaten_id' => '3275',
                'nama' => 'Bekasi Selatan'
            ],
            [
                'id' => '3275060',
                'kabupaten_id' => '3275',
                'nama' => 'Bekasi Barat'
            ],
            [
                'id' => '3275061',
                'kabupaten_id' => '3275',
                'nama' => 'Medan Satria'
            ],
            [
                'id' => '3275070',
                'kabupaten_id' => '3275',
                'nama' => 'Bekasi Utara'
            ],
            [
                'id' => '3276010',
                'kabupaten_id' => '3276',
                'nama' => 'Sawangan'
            ],
            [
                'id' => '3276011',
                'kabupaten_id' => '3276',
                'nama' => 'Bojongsari'
            ],
            [
                'id' => '3276020',
                'kabupaten_id' => '3276',
                'nama' => 'Pancoran Mas'
            ],
            [
                'id' => '3276021',
                'kabupaten_id' => '3276',
                'nama' => 'Cipayung'
            ],
            [
                'id' => '3276030',
                'kabupaten_id' => '3276',
                'nama' => 'Sukma Jaya'
            ],
            [
                'id' => '3276031',
                'kabupaten_id' => '3276',
                'nama' => 'Cilodong'
            ],
            [
                'id' => '3276040',
                'kabupaten_id' => '3276',
                'nama' => 'Cimanggis'
            ],
            [
                'id' => '3276041',
                'kabupaten_id' => '3276',
                'nama' => 'Tapos'
            ],
            [
                'id' => '3276050',
                'kabupaten_id' => '3276',
                'nama' => 'Beji'
            ],
            [
                'id' => '3276060',
                'kabupaten_id' => '3276',
                'nama' => 'Limo'
            ],
            [
                'id' => '3276061',
                'kabupaten_id' => '3276',
                'nama' => 'Cinere'
            ],
            [
                'id' => '3277010',
                'kabupaten_id' => '3277',
                'nama' => 'Cimahi Selatan'
            ],
            [
                'id' => '3277020',
                'kabupaten_id' => '3277',
                'nama' => 'Cimahi Tengah'
            ],
            [
                'id' => '3277030',
                'kabupaten_id' => '3277',
                'nama' => 'Cimahi Utara'
            ],
            [
                'id' => '3278010',
                'kabupaten_id' => '3278',
                'nama' => 'Kawalu'
            ],
            [
                'id' => '3278020',
                'kabupaten_id' => '3278',
                'nama' => 'Tamansari'
            ],
            [
                'id' => '3278030',
                'kabupaten_id' => '3278',
                'nama' => 'Cibeureum'
            ],
            [
                'id' => '3278031',
                'kabupaten_id' => '3278',
                'nama' => 'Purbaratu'
            ],
            [
                'id' => '3278040',
                'kabupaten_id' => '3278',
                'nama' => 'Tawang'
            ],
            [
                'id' => '3278050',
                'kabupaten_id' => '3278',
                'nama' => 'Cihideung'
            ],
            [
                'id' => '3278060',
                'kabupaten_id' => '3278',
                'nama' => 'Mangkubumi'
            ],
            [
                'id' => '3278070',
                'kabupaten_id' => '3278',
                'nama' => 'Indihiang'
            ],
            [
                'id' => '3278071',
                'kabupaten_id' => '3278',
                'nama' => 'Bungursari'
            ],
            [
                'id' => '3278080',
                'kabupaten_id' => '3278',
                'nama' => 'Cipedes'
            ],
            [
                'id' => '3279010',
                'kabupaten_id' => '3279',
                'nama' => 'Banjar'
            ],
            [
                'id' => '3279020',
                'kabupaten_id' => '3279',
                'nama' => 'Purwaharja'
            ],
            [
                'id' => '3279030',
                'kabupaten_id' => '3279',
                'nama' => 'Pataruman'
            ],
            [
                'id' => '3279040',
                'kabupaten_id' => '3279',
                'nama' => 'Langensari'
            ],
            [
                'id' => '3301010',
                'kabupaten_id' => '3301',
                'nama' => 'Dayeuhluhur'
            ],
            [
                'id' => '3301020',
                'kabupaten_id' => '3301',
                'nama' => 'Wanareja'
            ],
            [
                'id' => '3301030',
                'kabupaten_id' => '3301',
                'nama' => 'Majenang'
            ],
            [
                'id' => '3301040',
                'kabupaten_id' => '3301',
                'nama' => 'Cimanggu'
            ],
            [
                'id' => '3301050',
                'kabupaten_id' => '3301',
                'nama' => 'Karangpucung'
            ],
            [
                'id' => '3301060',
                'kabupaten_id' => '3301',
                'nama' => 'Cipari'
            ],
            [
                'id' => '3301070',
                'kabupaten_id' => '3301',
                'nama' => 'Sidareja'
            ],
            [
                'id' => '3301080',
                'kabupaten_id' => '3301',
                'nama' => 'Kedungreja'
            ],
            [
                'id' => '3301090',
                'kabupaten_id' => '3301',
                'nama' => 'Patimuan'
            ],
            [
                'id' => '3301100',
                'kabupaten_id' => '3301',
                'nama' => 'Gandrungmangu'
            ],
            [
                'id' => '3301110',
                'kabupaten_id' => '3301',
                'nama' => 'Bantarsari'
            ],
            [
                'id' => '3301120',
                'kabupaten_id' => '3301',
                'nama' => 'Kawunganten'
            ],
            [
                'id' => '3301121',
                'kabupaten_id' => '3301',
                'nama' => 'Kampung Laut'
            ],
            [
                'id' => '3301130',
                'kabupaten_id' => '3301',
                'nama' => 'Jeruklegi'
            ],
            [
                'id' => '3301140',
                'kabupaten_id' => '3301',
                'nama' => 'Kesugihan'
            ],
            [
                'id' => '3301150',
                'kabupaten_id' => '3301',
                'nama' => 'Adipala'
            ],
            [
                'id' => '3301160',
                'kabupaten_id' => '3301',
                'nama' => 'Maos'
            ],
            [
                'id' => '3301170',
                'kabupaten_id' => '3301',
                'nama' => 'Sampang'
            ],
            [
                'id' => '3301180',
                'kabupaten_id' => '3301',
                'nama' => 'Kroya'
            ],
            [
                'id' => '3301190',
                'kabupaten_id' => '3301',
                'nama' => 'Binangun'
            ],
            [
                'id' => '3301200',
                'kabupaten_id' => '3301',
                'nama' => 'Nusawungu'
            ],
            [
                'id' => '3301710',
                'kabupaten_id' => '3301',
                'nama' => 'Cilacap Selatan'
            ],
            [
                'id' => '3301720',
                'kabupaten_id' => '3301',
                'nama' => 'Cilacap Tengah'
            ],
            [
                'id' => '3301730',
                'kabupaten_id' => '3301',
                'nama' => 'Cilacap Utara'
            ],
            [
                'id' => '3302010',
                'kabupaten_id' => '3302',
                'nama' => 'Lumbir'
            ],
            [
                'id' => '3302020',
                'kabupaten_id' => '3302',
                'nama' => 'Wangon'
            ],
            [
                'id' => '3302030',
                'kabupaten_id' => '3302',
                'nama' => 'Jatilawang'
            ],
            [
                'id' => '3302040',
                'kabupaten_id' => '3302',
                'nama' => 'Rawalo'
            ],
            [
                'id' => '3302050',
                'kabupaten_id' => '3302',
                'nama' => 'Kebasen'
            ],
            [
                'id' => '3302060',
                'kabupaten_id' => '3302',
                'nama' => 'Kemranjen'
            ],
            [
                'id' => '3302070',
                'kabupaten_id' => '3302',
                'nama' => 'Sumpiuh'
            ],
            [
                'id' => '3302080',
                'kabupaten_id' => '3302',
                'nama' => 'Tambak'
            ],
            [
                'id' => '3302090',
                'kabupaten_id' => '3302',
                'nama' => 'Somagede'
            ],
            [
                'id' => '3302100',
                'kabupaten_id' => '3302',
                'nama' => 'Kalibagor'
            ],
            [
                'id' => '3302110',
                'kabupaten_id' => '3302',
                'nama' => 'Banyumas'
            ],
            [
                'id' => '3302120',
                'kabupaten_id' => '3302',
                'nama' => 'Patikraja'
            ],
            [
                'id' => '3302130',
                'kabupaten_id' => '3302',
                'nama' => 'Purwojati'
            ],
            [
                'id' => '3302140',
                'kabupaten_id' => '3302',
                'nama' => 'Ajibarang'
            ],
            [
                'id' => '3302150',
                'kabupaten_id' => '3302',
                'nama' => 'Gumelar'
            ],
            [
                'id' => '3302160',
                'kabupaten_id' => '3302',
                'nama' => 'Pekuncen'
            ],
            [
                'id' => '3302170',
                'kabupaten_id' => '3302',
                'nama' => 'Cilongok'
            ],
            [
                'id' => '3302180',
                'kabupaten_id' => '3302',
                'nama' => 'Karanglewas'
            ],
            [
                'id' => '3302190',
                'kabupaten_id' => '3302',
                'nama' => 'Kedung Banteng'
            ],
            [
                'id' => '3302200',
                'kabupaten_id' => '3302',
                'nama' => 'Baturraden'
            ],
            [
                'id' => '3302210',
                'kabupaten_id' => '3302',
                'nama' => 'Sumbang'
            ],
            [
                'id' => '3302220',
                'kabupaten_id' => '3302',
                'nama' => 'Kembaran'
            ],
            [
                'id' => '3302230',
                'kabupaten_id' => '3302',
                'nama' => 'Sokaraja'
            ],
            [
                'id' => '3302710',
                'kabupaten_id' => '3302',
                'nama' => 'Purwokerto Selatan'
            ],
            [
                'id' => '3302720',
                'kabupaten_id' => '3302',
                'nama' => 'Purwokerto Barat'
            ],
            [
                'id' => '3302730',
                'kabupaten_id' => '3302',
                'nama' => 'Purwokerto Timur'
            ],
            [
                'id' => '3302740',
                'kabupaten_id' => '3302',
                'nama' => 'Purwokerto Utara'
            ],
            [
                'id' => '3303010',
                'kabupaten_id' => '3303',
                'nama' => 'Kemangkon'
            ],
            [
                'id' => '3303020',
                'kabupaten_id' => '3303',
                'nama' => 'Bukateja'
            ],
            [
                'id' => '3303030',
                'kabupaten_id' => '3303',
                'nama' => 'Kejobong'
            ],
            [
                'id' => '3303040',
                'kabupaten_id' => '3303',
                'nama' => 'Pengadegan'
            ],
            [
                'id' => '3303050',
                'kabupaten_id' => '3303',
                'nama' => 'Kaligondang'
            ],
            [
                'id' => '3303060',
                'kabupaten_id' => '3303',
                'nama' => 'Purbalingga'
            ],
            [
                'id' => '3303070',
                'kabupaten_id' => '3303',
                'nama' => 'Kalimanah'
            ],
            [
                'id' => '3303080',
                'kabupaten_id' => '3303',
                'nama' => 'Padamara'
            ],
            [
                'id' => '3303090',
                'kabupaten_id' => '3303',
                'nama' => 'Kutasari'
            ],
            [
                'id' => '3303100',
                'kabupaten_id' => '3303',
                'nama' => 'Bojongsari'
            ],
            [
                'id' => '3303110',
                'kabupaten_id' => '3303',
                'nama' => 'Mrebet'
            ],
            [
                'id' => '3303120',
                'kabupaten_id' => '3303',
                'nama' => 'Bobotsari'
            ],
            [
                'id' => '3303130',
                'kabupaten_id' => '3303',
                'nama' => 'Karangreja'
            ],
            [
                'id' => '3303131',
                'kabupaten_id' => '3303',
                'nama' => 'Karangjambu'
            ],
            [
                'id' => '3303140',
                'kabupaten_id' => '3303',
                'nama' => 'Karanganyar'
            ],
            [
                'id' => '3303141',
                'kabupaten_id' => '3303',
                'nama' => 'Kertanegara'
            ],
            [
                'id' => '3303150',
                'kabupaten_id' => '3303',
                'nama' => 'Karangmoncol'
            ],
            [
                'id' => '3303160',
                'kabupaten_id' => '3303',
                'nama' => 'Rembang'
            ],
            [
                'id' => '3304010',
                'kabupaten_id' => '3304',
                'nama' => 'Susukan'
            ],
            [
                'id' => '3304020',
                'kabupaten_id' => '3304',
                'nama' => 'Purwareja Klampok'
            ],
            [
                'id' => '3304030',
                'kabupaten_id' => '3304',
                'nama' => 'Mandiraja'
            ],
            [
                'id' => '3304040',
                'kabupaten_id' => '3304',
                'nama' => 'Purwanegara'
            ],
            [
                'id' => '3304050',
                'kabupaten_id' => '3304',
                'nama' => 'Bawang'
            ],
            [
                'id' => '3304060',
                'kabupaten_id' => '3304',
                'nama' => 'Banjarnegara'
            ],
            [
                'id' => '3304061',
                'kabupaten_id' => '3304',
                'nama' => 'Pagedongan'
            ],
            [
                'id' => '3304070',
                'kabupaten_id' => '3304',
                'nama' => 'Sigaluh'
            ],
            [
                'id' => '3304080',
                'kabupaten_id' => '3304',
                'nama' => 'Madukara'
            ],
            [
                'id' => '3304090',
                'kabupaten_id' => '3304',
                'nama' => 'Banjarmangu'
            ],
            [
                'id' => '3304100',
                'kabupaten_id' => '3304',
                'nama' => 'Wanadadi'
            ],
            [
                'id' => '3304110',
                'kabupaten_id' => '3304',
                'nama' => 'Rakit'
            ],
            [
                'id' => '3304120',
                'kabupaten_id' => '3304',
                'nama' => 'Punggelan'
            ],
            [
                'id' => '3304130',
                'kabupaten_id' => '3304',
                'nama' => 'Karangkobar'
            ],
            [
                'id' => '3304140',
                'kabupaten_id' => '3304',
                'nama' => 'Pagentan'
            ],
            [
                'id' => '3304150',
                'kabupaten_id' => '3304',
                'nama' => 'Pejawaran'
            ],
            [
                'id' => '3304160',
                'kabupaten_id' => '3304',
                'nama' => 'Batur'
            ],
            [
                'id' => '3304170',
                'kabupaten_id' => '3304',
                'nama' => 'Wanayasa'
            ],
            [
                'id' => '3304180',
                'kabupaten_id' => '3304',
                'nama' => 'Kalibening'
            ],
            [
                'id' => '3304181',
                'kabupaten_id' => '3304',
                'nama' => 'Pandanarum'
            ],
            [
                'id' => '3305010',
                'kabupaten_id' => '3305',
                'nama' => 'Ayah'
            ],
            [
                'id' => '3305020',
                'kabupaten_id' => '3305',
                'nama' => 'Buayan'
            ],
            [
                'id' => '3305030',
                'kabupaten_id' => '3305',
                'nama' => 'Puring'
            ],
            [
                'id' => '3305040',
                'kabupaten_id' => '3305',
                'nama' => 'Petanahan'
            ],
            [
                'id' => '3305050',
                'kabupaten_id' => '3305',
                'nama' => 'Klirong'
            ],
            [
                'id' => '3305060',
                'kabupaten_id' => '3305',
                'nama' => 'Buluspesantren'
            ],
            [
                'id' => '3305070',
                'kabupaten_id' => '3305',
                'nama' => 'Ambal'
            ],
            [
                'id' => '3305080',
                'kabupaten_id' => '3305',
                'nama' => 'Mirit'
            ],
            [
                'id' => '3305081',
                'kabupaten_id' => '3305',
                'nama' => 'Bonorowo'
            ],
            [
                'id' => '3305090',
                'kabupaten_id' => '3305',
                'nama' => 'Prembun'
            ],
            [
                'id' => '3305091',
                'kabupaten_id' => '3305',
                'nama' => 'Padureso'
            ],
            [
                'id' => '3305100',
                'kabupaten_id' => '3305',
                'nama' => 'Kutowinangun'
            ],
            [
                'id' => '3305110',
                'kabupaten_id' => '3305',
                'nama' => 'Alian'
            ],
            [
                'id' => '3305111',
                'kabupaten_id' => '3305',
                'nama' => 'Poncowarno'
            ],
            [
                'id' => '3305120',
                'kabupaten_id' => '3305',
                'nama' => 'Kebumen'
            ],
            [
                'id' => '3305130',
                'kabupaten_id' => '3305',
                'nama' => 'Pejagoan'
            ],
            [
                'id' => '3305140',
                'kabupaten_id' => '3305',
                'nama' => 'Sruweng'
            ],
            [
                'id' => '3305150',
                'kabupaten_id' => '3305',
                'nama' => 'Adimulyo'
            ],
            [
                'id' => '3305160',
                'kabupaten_id' => '3305',
                'nama' => 'Kuwarasan'
            ],
            [
                'id' => '3305170',
                'kabupaten_id' => '3305',
                'nama' => 'Rowokele'
            ],
            [
                'id' => '3305180',
                'kabupaten_id' => '3305',
                'nama' => 'Sempor'
            ],
            [
                'id' => '3305190',
                'kabupaten_id' => '3305',
                'nama' => 'Gombong'
            ],
            [
                'id' => '3305200',
                'kabupaten_id' => '3305',
                'nama' => 'Karanganyar'
            ],
            [
                'id' => '3305210',
                'kabupaten_id' => '3305',
                'nama' => 'Karanggayam'
            ],
            [
                'id' => '3305220',
                'kabupaten_id' => '3305',
                'nama' => 'Sadang'
            ],
            [
                'id' => '3305221',
                'kabupaten_id' => '3305',
                'nama' => 'Karangsambung'
            ],
            [
                'id' => '3306010',
                'kabupaten_id' => '3306',
                'nama' => 'Grabag'
            ],
            [
                'id' => '3306020',
                'kabupaten_id' => '3306',
                'nama' => 'Ngombol'
            ],
            [
                'id' => '3306030',
                'kabupaten_id' => '3306',
                'nama' => 'Purwodadi'
            ],
            [
                'id' => '3306040',
                'kabupaten_id' => '3306',
                'nama' => 'Bagelen'
            ],
            [
                'id' => '3306050',
                'kabupaten_id' => '3306',
                'nama' => 'Kaligesing'
            ],
            [
                'id' => '3306060',
                'kabupaten_id' => '3306',
                'nama' => 'Purworejo'
            ],
            [
                'id' => '3306070',
                'kabupaten_id' => '3306',
                'nama' => 'Banyu Urip'
            ],
            [
                'id' => '3306080',
                'kabupaten_id' => '3306',
                'nama' => 'Bayan'
            ],
            [
                'id' => '3306090',
                'kabupaten_id' => '3306',
                'nama' => 'Kutoarjo'
            ],
            [
                'id' => '3306100',
                'kabupaten_id' => '3306',
                'nama' => 'Butuh'
            ],
            [
                'id' => '3306110',
                'kabupaten_id' => '3306',
                'nama' => 'Pituruh'
            ],
            [
                'id' => '3306120',
                'kabupaten_id' => '3306',
                'nama' => 'Kemiri'
            ],
            [
                'id' => '3306130',
                'kabupaten_id' => '3306',
                'nama' => 'Bruno'
            ],
            [
                'id' => '3306140',
                'kabupaten_id' => '3306',
                'nama' => 'Gebang'
            ],
            [
                'id' => '3306150',
                'kabupaten_id' => '3306',
                'nama' => 'Loano'
            ],
            [
                'id' => '3306160',
                'kabupaten_id' => '3306',
                'nama' => 'Bener'
            ],
            [
                'id' => '3307010',
                'kabupaten_id' => '3307',
                'nama' => 'Wadaslintang'
            ],
            [
                'id' => '3307020',
                'kabupaten_id' => '3307',
                'nama' => 'Kepil'
            ],
            [
                'id' => '3307030',
                'kabupaten_id' => '3307',
                'nama' => 'Sapuran'
            ],
            [
                'id' => '3307031',
                'kabupaten_id' => '3307',
                'nama' => 'Kalibawang'
            ],
            [
                'id' => '3307040',
                'kabupaten_id' => '3307',
                'nama' => 'Kaliwiro'
            ],
            [
                'id' => '3307050',
                'kabupaten_id' => '3307',
                'nama' => 'Leksono'
            ],
            [
                'id' => '3307051',
                'kabupaten_id' => '3307',
                'nama' => 'Sukoharjo'
            ],
            [
                'id' => '3307060',
                'kabupaten_id' => '3307',
                'nama' => 'Selomerto'
            ],
            [
                'id' => '3307070',
                'kabupaten_id' => '3307',
                'nama' => 'Kalikajar'
            ],
            [
                'id' => '3307080',
                'kabupaten_id' => '3307',
                'nama' => 'Kertek'
            ],
            [
                'id' => '3307090',
                'kabupaten_id' => '3307',
                'nama' => 'Wonosobo'
            ],
            [
                'id' => '3307100',
                'kabupaten_id' => '3307',
                'nama' => 'Watumalang'
            ],
            [
                'id' => '3307110',
                'kabupaten_id' => '3307',
                'nama' => 'Mojotengah'
            ],
            [
                'id' => '3307120',
                'kabupaten_id' => '3307',
                'nama' => 'Garung'
            ],
            [
                'id' => '3307130',
                'kabupaten_id' => '3307',
                'nama' => 'Kejajar'
            ],
            [
                'id' => '3308010',
                'kabupaten_id' => '3308',
                'nama' => 'Salaman'
            ],
            [
                'id' => '3308020',
                'kabupaten_id' => '3308',
                'nama' => 'Borobudur'
            ],
            [
                'id' => '3308030',
                'kabupaten_id' => '3308',
                'nama' => 'Ngluwar'
            ],
            [
                'id' => '3308040',
                'kabupaten_id' => '3308',
                'nama' => 'Salam'
            ],
            [
                'id' => '3308050',
                'kabupaten_id' => '3308',
                'nama' => 'Srumbung'
            ],
            [
                'id' => '3308060',
                'kabupaten_id' => '3308',
                'nama' => 'Dukun'
            ],
            [
                'id' => '3308070',
                'kabupaten_id' => '3308',
                'nama' => 'Muntilan'
            ],
            [
                'id' => '3308080',
                'kabupaten_id' => '3308',
                'nama' => 'Mungkid'
            ],
            [
                'id' => '3308090',
                'kabupaten_id' => '3308',
                'nama' => 'Sawangan'
            ],
            [
                'id' => '3308100',
                'kabupaten_id' => '3308',
                'nama' => 'Candimulyo'
            ],
            [
                'id' => '3308110',
                'kabupaten_id' => '3308',
                'nama' => 'Mertoyudan'
            ],
            [
                'id' => '3308120',
                'kabupaten_id' => '3308',
                'nama' => 'Tempuran'
            ],
            [
                'id' => '3308130',
                'kabupaten_id' => '3308',
                'nama' => 'Kajoran'
            ],
            [
                'id' => '3308140',
                'kabupaten_id' => '3308',
                'nama' => 'Kaliangkrik'
            ],
            [
                'id' => '3308150',
                'kabupaten_id' => '3308',
                'nama' => 'Bandongan'
            ],
            [
                'id' => '3308160',
                'kabupaten_id' => '3308',
                'nama' => 'Windusari'
            ],
            [
                'id' => '3308170',
                'kabupaten_id' => '3308',
                'nama' => 'Secang'
            ],
            [
                'id' => '3308180',
                'kabupaten_id' => '3308',
                'nama' => 'Tegalrejo'
            ],
            [
                'id' => '3308190',
                'kabupaten_id' => '3308',
                'nama' => 'Pakis'
            ],
            [
                'id' => '3308200',
                'kabupaten_id' => '3308',
                'nama' => 'Grabag'
            ],
            [
                'id' => '3308210',
                'kabupaten_id' => '3308',
                'nama' => 'Ngablak'
            ],
            [
                'id' => '3309010',
                'kabupaten_id' => '3309',
                'nama' => 'Selo'
            ],
            [
                'id' => '3309020',
                'kabupaten_id' => '3309',
                'nama' => 'Ampel'
            ],
            [
                'id' => '3309030',
                'kabupaten_id' => '3309',
                'nama' => 'Cepogo'
            ],
            [
                'id' => '3309040',
                'kabupaten_id' => '3309',
                'nama' => 'Musuk'
            ],
            [
                'id' => '3309050',
                'kabupaten_id' => '3309',
                'nama' => 'Boyolali'
            ],
            [
                'id' => '3309060',
                'kabupaten_id' => '3309',
                'nama' => 'Mojosongo'
            ],
            [
                'id' => '3309070',
                'kabupaten_id' => '3309',
                'nama' => 'Teras'
            ],
            [
                'id' => '3309080',
                'kabupaten_id' => '3309',
                'nama' => 'Sawit'
            ],
            [
                'id' => '3309090',
                'kabupaten_id' => '3309',
                'nama' => 'Banyudono'
            ],
            [
                'id' => '3309100',
                'kabupaten_id' => '3309',
                'nama' => 'Sambi'
            ],
            [
                'id' => '3309110',
                'kabupaten_id' => '3309',
                'nama' => 'Ngemplak'
            ],
            [
                'id' => '3309120',
                'kabupaten_id' => '3309',
                'nama' => 'Nogosari'
            ],
            [
                'id' => '3309130',
                'kabupaten_id' => '3309',
                'nama' => 'Simo'
            ],
            [
                'id' => '3309140',
                'kabupaten_id' => '3309',
                'nama' => 'Karanggede'
            ],
            [
                'id' => '3309150',
                'kabupaten_id' => '3309',
                'nama' => 'Klego'
            ],
            [
                'id' => '3309160',
                'kabupaten_id' => '3309',
                'nama' => 'Andong'
            ],
            [
                'id' => '3309170',
                'kabupaten_id' => '3309',
                'nama' => 'Kemusu'
            ],
            [
                'id' => '3309180',
                'kabupaten_id' => '3309',
                'nama' => 'Wonosegoro'
            ],
            [
                'id' => '3309190',
                'kabupaten_id' => '3309',
                'nama' => 'Juwangi'
            ],
            [
                'id' => '3310010',
                'kabupaten_id' => '3310',
                'nama' => 'Prambanan'
            ],
            [
                'id' => '3310020',
                'kabupaten_id' => '3310',
                'nama' => 'Gantiwarno'
            ],
            [
                'id' => '3310030',
                'kabupaten_id' => '3310',
                'nama' => 'Wedi'
            ],
            [
                'id' => '3310040',
                'kabupaten_id' => '3310',
                'nama' => 'Bayat'
            ],
            [
                'id' => '3310050',
                'kabupaten_id' => '3310',
                'nama' => 'Cawas'
            ],
            [
                'id' => '3310060',
                'kabupaten_id' => '3310',
                'nama' => 'Trucuk'
            ],
            [
                'id' => '3310070',
                'kabupaten_id' => '3310',
                'nama' => 'Kalikotes'
            ],
            [
                'id' => '3310080',
                'kabupaten_id' => '3310',
                'nama' => 'Kebonarum'
            ],
            [
                'id' => '3310090',
                'kabupaten_id' => '3310',
                'nama' => 'Jogonalan'
            ],
            [
                'id' => '3310100',
                'kabupaten_id' => '3310',
                'nama' => 'Manisrenggo'
            ],
            [
                'id' => '3310110',
                'kabupaten_id' => '3310',
                'nama' => 'Karangnongko'
            ],
            [
                'id' => '3310120',
                'kabupaten_id' => '3310',
                'nama' => 'Ngawen'
            ],
            [
                'id' => '3310130',
                'kabupaten_id' => '3310',
                'nama' => 'Ceper'
            ],
            [
                'id' => '3310140',
                'kabupaten_id' => '3310',
                'nama' => 'Pedan'
            ],
            [
                'id' => '3310150',
                'kabupaten_id' => '3310',
                'nama' => 'Karangdowo'
            ],
            [
                'id' => '3310160',
                'kabupaten_id' => '3310',
                'nama' => 'Juwiring'
            ],
            [
                'id' => '3310170',
                'kabupaten_id' => '3310',
                'nama' => 'Wonosari'
            ],
            [
                'id' => '3310180',
                'kabupaten_id' => '3310',
                'nama' => 'Delanggu'
            ],
            [
                'id' => '3310190',
                'kabupaten_id' => '3310',
                'nama' => 'Polanharjo'
            ],
            [
                'id' => '3310200',
                'kabupaten_id' => '3310',
                'nama' => 'Karanganom'
            ],
            [
                'id' => '3310210',
                'kabupaten_id' => '3310',
                'nama' => 'Tulung'
            ],
            [
                'id' => '3310220',
                'kabupaten_id' => '3310',
                'nama' => 'Jatinom'
            ],
            [
                'id' => '3310230',
                'kabupaten_id' => '3310',
                'nama' => 'Kemalang'
            ],
            [
                'id' => '3310710',
                'kabupaten_id' => '3310',
                'nama' => 'Klaten Selatan'
            ],
            [
                'id' => '3310720',
                'kabupaten_id' => '3310',
                'nama' => 'Klaten Tengah'
            ],
            [
                'id' => '3310730',
                'kabupaten_id' => '3310',
                'nama' => 'Klaten Utara'
            ],
            [
                'id' => '3311010',
                'kabupaten_id' => '3311',
                'nama' => 'Weru'
            ],
            [
                'id' => '3311020',
                'kabupaten_id' => '3311',
                'nama' => 'Bulu'
            ],
            [
                'id' => '3311030',
                'kabupaten_id' => '3311',
                'nama' => 'Tawangsari'
            ],
            [
                'id' => '3311040',
                'kabupaten_id' => '3311',
                'nama' => 'Sukoharjo'
            ],
            [
                'id' => '3311050',
                'kabupaten_id' => '3311',
                'nama' => 'Nguter'
            ],
            [
                'id' => '3311060',
                'kabupaten_id' => '3311',
                'nama' => 'Bendosari'
            ],
            [
                'id' => '3311070',
                'kabupaten_id' => '3311',
                'nama' => 'Polokarto'
            ],
            [
                'id' => '3311080',
                'kabupaten_id' => '3311',
                'nama' => 'Mojolaban'
            ],
            [
                'id' => '3311090',
                'kabupaten_id' => '3311',
                'nama' => 'Grogol'
            ],
            [
                'id' => '3311100',
                'kabupaten_id' => '3311',
                'nama' => 'Baki'
            ],
            [
                'id' => '3311110',
                'kabupaten_id' => '3311',
                'nama' => 'Gatak'
            ],
            [
                'id' => '3311120',
                'kabupaten_id' => '3311',
                'nama' => 'Kartasura'
            ],
            [
                'id' => '3312010',
                'kabupaten_id' => '3312',
                'nama' => 'Pracimantoro'
            ],
            [
                'id' => '3312020',
                'kabupaten_id' => '3312',
                'nama' => 'Paranggupito'
            ],
            [
                'id' => '3312030',
                'kabupaten_id' => '3312',
                'nama' => 'Giritontro'
            ],
            [
                'id' => '3312040',
                'kabupaten_id' => '3312',
                'nama' => 'Giriwoyo'
            ],
            [
                'id' => '3312050',
                'kabupaten_id' => '3312',
                'nama' => 'Batuwarno'
            ],
            [
                'id' => '3312060',
                'kabupaten_id' => '3312',
                'nama' => 'Karangtengah'
            ],
            [
                'id' => '3312070',
                'kabupaten_id' => '3312',
                'nama' => 'Tirtomoyo'
            ],
            [
                'id' => '3312080',
                'kabupaten_id' => '3312',
                'nama' => 'Nguntoronadi'
            ],
            [
                'id' => '3312090',
                'kabupaten_id' => '3312',
                'nama' => 'Baturetno'
            ],
            [
                'id' => '3312100',
                'kabupaten_id' => '3312',
                'nama' => 'Eromoko'
            ],
            [
                'id' => '3312110',
                'kabupaten_id' => '3312',
                'nama' => 'Wuryantoro'
            ],
            [
                'id' => '3312120',
                'kabupaten_id' => '3312',
                'nama' => 'Manyaran'
            ],
            [
                'id' => '3312130',
                'kabupaten_id' => '3312',
                'nama' => 'Selogiri'
            ],
            [
                'id' => '3312140',
                'kabupaten_id' => '3312',
                'nama' => 'Wonogiri'
            ],
            [
                'id' => '3312150',
                'kabupaten_id' => '3312',
                'nama' => 'Ngadirojo'
            ],
            [
                'id' => '3312160',
                'kabupaten_id' => '3312',
                'nama' => 'Sidoharjo'
            ],
            [
                'id' => '3312170',
                'kabupaten_id' => '3312',
                'nama' => 'Jatiroto'
            ],
            [
                'id' => '3312180',
                'kabupaten_id' => '3312',
                'nama' => 'Kismantoro'
            ],
            [
                'id' => '3312190',
                'kabupaten_id' => '3312',
                'nama' => 'Purwantoro'
            ],
            [
                'id' => '3312200',
                'kabupaten_id' => '3312',
                'nama' => 'Bulukerto'
            ],
            [
                'id' => '3312201',
                'kabupaten_id' => '3312',
                'nama' => 'Puhpelem'
            ],
            [
                'id' => '3312210',
                'kabupaten_id' => '3312',
                'nama' => 'Slogohimo'
            ],
            [
                'id' => '3312220',
                'kabupaten_id' => '3312',
                'nama' => 'Jatisrono'
            ],
            [
                'id' => '3312230',
                'kabupaten_id' => '3312',
                'nama' => 'Jatipurno'
            ],
            [
                'id' => '3312240',
                'kabupaten_id' => '3312',
                'nama' => 'Girimarto'
            ],
            [
                'id' => '3313010',
                'kabupaten_id' => '3313',
                'nama' => 'Jatipuro'
            ],
            [
                'id' => '3313020',
                'kabupaten_id' => '3313',
                'nama' => 'Jatiyoso'
            ],
            [
                'id' => '3313030',
                'kabupaten_id' => '3313',
                'nama' => 'Jumapolo'
            ],
            [
                'id' => '3313040',
                'kabupaten_id' => '3313',
                'nama' => 'Jumantono'
            ],
            [
                'id' => '3313050',
                'kabupaten_id' => '3313',
                'nama' => 'Matesih'
            ],
            [
                'id' => '3313060',
                'kabupaten_id' => '3313',
                'nama' => 'Tawangmangu'
            ],
            [
                'id' => '3313070',
                'kabupaten_id' => '3313',
                'nama' => 'Ngargoyoso'
            ],
            [
                'id' => '3313080',
                'kabupaten_id' => '3313',
                'nama' => 'Karangpandan'
            ],
            [
                'id' => '3313090',
                'kabupaten_id' => '3313',
                'nama' => 'Karanganyar'
            ],
            [
                'id' => '3313100',
                'kabupaten_id' => '3313',
                'nama' => 'Tasikmadu'
            ],
            [
                'id' => '3313110',
                'kabupaten_id' => '3313',
                'nama' => 'Jaten'
            ],
            [
                'id' => '3313120',
                'kabupaten_id' => '3313',
                'nama' => 'Colomadu'
            ],
            [
                'id' => '3313130',
                'kabupaten_id' => '3313',
                'nama' => 'Gondangrejo'
            ],
            [
                'id' => '3313140',
                'kabupaten_id' => '3313',
                'nama' => 'Kebakkramat'
            ],
            [
                'id' => '3313150',
                'kabupaten_id' => '3313',
                'nama' => 'Mojogedang'
            ],
            [
                'id' => '3313160',
                'kabupaten_id' => '3313',
                'nama' => 'Kerjo'
            ],
            [
                'id' => '3313170',
                'kabupaten_id' => '3313',
                'nama' => 'Jenawi'
            ],
            [
                'id' => '3314010',
                'kabupaten_id' => '3314',
                'nama' => 'Kalijambe'
            ],
            [
                'id' => '3314020',
                'kabupaten_id' => '3314',
                'nama' => 'Plupuh'
            ],
            [
                'id' => '3314030',
                'kabupaten_id' => '3314',
                'nama' => 'Masaran'
            ],
            [
                'id' => '3314040',
                'kabupaten_id' => '3314',
                'nama' => 'Kedawung'
            ],
            [
                'id' => '3314050',
                'kabupaten_id' => '3314',
                'nama' => 'Sambirejo'
            ],
            [
                'id' => '3314060',
                'kabupaten_id' => '3314',
                'nama' => 'Gondang'
            ],
            [
                'id' => '3314070',
                'kabupaten_id' => '3314',
                'nama' => 'Sambung Macan'
            ],
            [
                'id' => '3314080',
                'kabupaten_id' => '3314',
                'nama' => 'Ngrampal'
            ],
            [
                'id' => '3314090',
                'kabupaten_id' => '3314',
                'nama' => 'Karangmalang'
            ],
            [
                'id' => '3314100',
                'kabupaten_id' => '3314',
                'nama' => 'Sragen'
            ],
            [
                'id' => '3314110',
                'kabupaten_id' => '3314',
                'nama' => 'Sidoharjo'
            ],
            [
                'id' => '3314120',
                'kabupaten_id' => '3314',
                'nama' => 'Tanon'
            ],
            [
                'id' => '3314130',
                'kabupaten_id' => '3314',
                'nama' => 'Gemolong'
            ],
            [
                'id' => '3314140',
                'kabupaten_id' => '3314',
                'nama' => 'Miri'
            ],
            [
                'id' => '3314150',
                'kabupaten_id' => '3314',
                'nama' => 'Sumberlawang'
            ],
            [
                'id' => '3314160',
                'kabupaten_id' => '3314',
                'nama' => 'Mondokan'
            ],
            [
                'id' => '3314170',
                'kabupaten_id' => '3314',
                'nama' => 'Sukodono'
            ],
            [
                'id' => '3314180',
                'kabupaten_id' => '3314',
                'nama' => 'Gesi'
            ],
            [
                'id' => '3314190',
                'kabupaten_id' => '3314',
                'nama' => 'Tangen'
            ],
            [
                'id' => '3314200',
                'kabupaten_id' => '3314',
                'nama' => 'Jenar'
            ],
            [
                'id' => '3315010',
                'kabupaten_id' => '3315',
                'nama' => 'Kedungjati'
            ],
            [
                'id' => '3315020',
                'kabupaten_id' => '3315',
                'nama' => 'Karangrayung'
            ],
            [
                'id' => '3315030',
                'kabupaten_id' => '3315',
                'nama' => 'Penawangan'
            ],
            [
                'id' => '3315040',
                'kabupaten_id' => '3315',
                'nama' => 'Toroh'
            ],
            [
                'id' => '3315050',
                'kabupaten_id' => '3315',
                'nama' => 'Geyer'
            ],
            [
                'id' => '3315060',
                'kabupaten_id' => '3315',
                'nama' => 'Pulokulon'
            ],
            [
                'id' => '3315070',
                'kabupaten_id' => '3315',
                'nama' => 'Kradenan'
            ],
            [
                'id' => '3315080',
                'kabupaten_id' => '3315',
                'nama' => 'Gabus'
            ],
            [
                'id' => '3315090',
                'kabupaten_id' => '3315',
                'nama' => 'Ngaringan'
            ],
            [
                'id' => '3315100',
                'kabupaten_id' => '3315',
                'nama' => 'Wirosari'
            ],
            [
                'id' => '3315110',
                'kabupaten_id' => '3315',
                'nama' => 'Tawangharjo'
            ],
            [
                'id' => '3315120',
                'kabupaten_id' => '3315',
                'nama' => 'Grobogan'
            ],
            [
                'id' => '3315130',
                'kabupaten_id' => '3315',
                'nama' => 'Purwodadi'
            ],
            [
                'id' => '3315140',
                'kabupaten_id' => '3315',
                'nama' => 'Brati'
            ],
            [
                'id' => '3315150',
                'kabupaten_id' => '3315',
                'nama' => 'Klambu'
            ],
            [
                'id' => '3315160',
                'kabupaten_id' => '3315',
                'nama' => 'Godong'
            ],
            [
                'id' => '3315170',
                'kabupaten_id' => '3315',
                'nama' => 'Gubug'
            ],
            [
                'id' => '3315180',
                'kabupaten_id' => '3315',
                'nama' => 'Tegowanu'
            ],
            [
                'id' => '3315190',
                'kabupaten_id' => '3315',
                'nama' => 'Tanggungharjo'
            ],
            [
                'id' => '3316010',
                'kabupaten_id' => '3316',
                'nama' => 'Jati'
            ],
            [
                'id' => '3316020',
                'kabupaten_id' => '3316',
                'nama' => 'Randublatung'
            ],
            [
                'id' => '3316030',
                'kabupaten_id' => '3316',
                'nama' => 'Kradenan'
            ],
            [
                'id' => '3316040',
                'kabupaten_id' => '3316',
                'nama' => 'Kedungtuban'
            ],
            [
                'id' => '3316050',
                'kabupaten_id' => '3316',
                'nama' => 'Cepu'
            ],
            [
                'id' => '3316060',
                'kabupaten_id' => '3316',
                'nama' => 'Sambong'
            ],
            [
                'id' => '3316070',
                'kabupaten_id' => '3316',
                'nama' => 'Jiken'
            ],
            [
                'id' => '3316080',
                'kabupaten_id' => '3316',
                'nama' => 'Bogorejo'
            ],
            [
                'id' => '3316090',
                'kabupaten_id' => '3316',
                'nama' => 'Jepon'
            ],
            [
                'id' => '3316100',
                'kabupaten_id' => '3316',
                'nama' => 'Kota Blora'
            ],
            [
                'id' => '3316110',
                'kabupaten_id' => '3316',
                'nama' => 'Banjarejo'
            ],
            [
                'id' => '3316120',
                'kabupaten_id' => '3316',
                'nama' => 'Tunjungan'
            ],
            [
                'id' => '3316130',
                'kabupaten_id' => '3316',
                'nama' => 'Japah'
            ],
            [
                'id' => '3316140',
                'kabupaten_id' => '3316',
                'nama' => 'Ngawen'
            ],
            [
                'id' => '3316150',
                'kabupaten_id' => '3316',
                'nama' => 'Kunduran'
            ],
            [
                'id' => '3316160',
                'kabupaten_id' => '3316',
                'nama' => 'Todanan'
            ],
            [
                'id' => '3317010',
                'kabupaten_id' => '3317',
                'nama' => 'Sumber'
            ],
            [
                'id' => '3317020',
                'kabupaten_id' => '3317',
                'nama' => 'Bulu'
            ],
            [
                'id' => '3317030',
                'kabupaten_id' => '3317',
                'nama' => 'Gunem'
            ],
            [
                'id' => '3317040',
                'kabupaten_id' => '3317',
                'nama' => 'Sale'
            ],
            [
                'id' => '3317050',
                'kabupaten_id' => '3317',
                'nama' => 'Sarang'
            ],
            [
                'id' => '3317060',
                'kabupaten_id' => '3317',
                'nama' => 'Sedan'
            ],
            [
                'id' => '3317070',
                'kabupaten_id' => '3317',
                'nama' => 'Pamotan'
            ],
            [
                'id' => '3317080',
                'kabupaten_id' => '3317',
                'nama' => 'Sulang'
            ],
            [
                'id' => '3317090',
                'kabupaten_id' => '3317',
                'nama' => 'Kaliori'
            ],
            [
                'id' => '3317100',
                'kabupaten_id' => '3317',
                'nama' => 'Rembang'
            ],
            [
                'id' => '3317110',
                'kabupaten_id' => '3317',
                'nama' => 'Pancur'
            ],
            [
                'id' => '3317120',
                'kabupaten_id' => '3317',
                'nama' => 'Kragan'
            ],
            [
                'id' => '3317130',
                'kabupaten_id' => '3317',
                'nama' => 'Sluke'
            ],
            [
                'id' => '3317140',
                'kabupaten_id' => '3317',
                'nama' => 'Lasem'
            ],
            [
                'id' => '3318010',
                'kabupaten_id' => '3318',
                'nama' => 'Sukolilo'
            ],
            [
                'id' => '3318020',
                'kabupaten_id' => '3318',
                'nama' => 'Kayen'
            ],
            [
                'id' => '3318030',
                'kabupaten_id' => '3318',
                'nama' => 'Tambakromo'
            ],
            [
                'id' => '3318040',
                'kabupaten_id' => '3318',
                'nama' => 'Winong'
            ],
            [
                'id' => '3318050',
                'kabupaten_id' => '3318',
                'nama' => 'Pucakwangi'
            ],
            [
                'id' => '3318060',
                'kabupaten_id' => '3318',
                'nama' => 'Jaken'
            ],
            [
                'id' => '3318070',
                'kabupaten_id' => '3318',
                'nama' => 'Batangan'
            ],
            [
                'id' => '3318080',
                'kabupaten_id' => '3318',
                'nama' => 'Juwana'
            ],
            [
                'id' => '3318090',
                'kabupaten_id' => '3318',
                'nama' => 'Jakenan'
            ],
            [
                'id' => '3318100',
                'kabupaten_id' => '3318',
                'nama' => 'Pati'
            ],
            [
                'id' => '3318110',
                'kabupaten_id' => '3318',
                'nama' => 'Gabus'
            ],
            [
                'id' => '3318120',
                'kabupaten_id' => '3318',
                'nama' => 'Margorejo'
            ],
            [
                'id' => '3318130',
                'kabupaten_id' => '3318',
                'nama' => 'Gembong'
            ],
            [
                'id' => '3318140',
                'kabupaten_id' => '3318',
                'nama' => 'Tlogowungu'
            ],
            [
                'id' => '3318150',
                'kabupaten_id' => '3318',
                'nama' => 'Wedarijaksa'
            ],
            [
                'id' => '3318160',
                'kabupaten_id' => '3318',
                'nama' => 'Trangkil'
            ],
            [
                'id' => '3318170',
                'kabupaten_id' => '3318',
                'nama' => 'Margoyoso'
            ],
            [
                'id' => '3318180',
                'kabupaten_id' => '3318',
                'nama' => 'Gunung Wungkal'
            ],
            [
                'id' => '3318190',
                'kabupaten_id' => '3318',
                'nama' => 'Cluwak'
            ],
            [
                'id' => '3318200',
                'kabupaten_id' => '3318',
                'nama' => 'Tayu'
            ],
            [
                'id' => '3318210',
                'kabupaten_id' => '3318',
                'nama' => 'Dukuhseti'
            ],
            [
                'id' => '3319010',
                'kabupaten_id' => '3319',
                'nama' => 'Kaliwungu'
            ],
            [
                'id' => '3319020',
                'kabupaten_id' => '3319',
                'nama' => 'Kota Kudus'
            ],
            [
                'id' => '3319030',
                'kabupaten_id' => '3319',
                'nama' => 'Jati'
            ],
            [
                'id' => '3319040',
                'kabupaten_id' => '3319',
                'nama' => 'Undaan'
            ],
            [
                'id' => '3319050',
                'kabupaten_id' => '3319',
                'nama' => 'Mejobo'
            ],
            [
                'id' => '3319060',
                'kabupaten_id' => '3319',
                'nama' => 'Jekulo'
            ],
            [
                'id' => '3319070',
                'kabupaten_id' => '3319',
                'nama' => 'Bae'
            ],
            [
                'id' => '3319080',
                'kabupaten_id' => '3319',
                'nama' => 'Gebog'
            ],
            [
                'id' => '3319090',
                'kabupaten_id' => '3319',
                'nama' => 'Dawe'
            ],
            [
                'id' => '3320010',
                'kabupaten_id' => '3320',
                'nama' => 'Kedung'
            ],
            [
                'id' => '3320020',
                'kabupaten_id' => '3320',
                'nama' => 'Pecangaan'
            ],
            [
                'id' => '3320021',
                'kabupaten_id' => '3320',
                'nama' => 'Kalinyamatan'
            ],
            [
                'id' => '3320030',
                'kabupaten_id' => '3320',
                'nama' => 'Welahan'
            ],
            [
                'id' => '3320040',
                'kabupaten_id' => '3320',
                'nama' => 'Mayong'
            ],
            [
                'id' => '3320050',
                'kabupaten_id' => '3320',
                'nama' => 'Nalumsari'
            ],
            [
                'id' => '3320060',
                'kabupaten_id' => '3320',
                'nama' => 'Batealit'
            ],
            [
                'id' => '3320070',
                'kabupaten_id' => '3320',
                'nama' => 'Tahunan'
            ],
            [
                'id' => '3320080',
                'kabupaten_id' => '3320',
                'nama' => 'Jepara'
            ],
            [
                'id' => '3320090',
                'kabupaten_id' => '3320',
                'nama' => 'Mlonggo'
            ],
            [
                'id' => '3320091',
                'kabupaten_id' => '3320',
                'nama' => 'Pakis Aji'
            ],
            [
                'id' => '3320100',
                'kabupaten_id' => '3320',
                'nama' => 'Bangsri'
            ],
            [
                'id' => '3320101',
                'kabupaten_id' => '3320',
                'nama' => 'Kembang'
            ],
            [
                'id' => '3320110',
                'kabupaten_id' => '3320',
                'nama' => 'Keling'
            ],
            [
                'id' => '3320111',
                'kabupaten_id' => '3320',
                'nama' => 'Donorojo'
            ],
            [
                'id' => '3320120',
                'kabupaten_id' => '3320',
                'nama' => 'Karimunjawa'
            ],
            [
                'id' => '3321010',
                'kabupaten_id' => '3321',
                'nama' => 'Mranggen'
            ],
            [
                'id' => '3321020',
                'kabupaten_id' => '3321',
                'nama' => 'Karangawen'
            ],
            [
                'id' => '3321030',
                'kabupaten_id' => '3321',
                'nama' => 'Guntur'
            ],
            [
                'id' => '3321040',
                'kabupaten_id' => '3321',
                'nama' => 'Sayung'
            ],
            [
                'id' => '3321050',
                'kabupaten_id' => '3321',
                'nama' => 'Karang Tengah'
            ],
            [
                'id' => '3321060',
                'kabupaten_id' => '3321',
                'nama' => 'Bonang'
            ],
            [
                'id' => '3321070',
                'kabupaten_id' => '3321',
                'nama' => 'Demak'
            ],
            [
                'id' => '3321080',
                'kabupaten_id' => '3321',
                'nama' => 'Wonosalam'
            ],
            [
                'id' => '3321090',
                'kabupaten_id' => '3321',
                'nama' => 'Dempet'
            ],
            [
                'id' => '3321091',
                'kabupaten_id' => '3321',
                'nama' => 'Kebonagung'
            ],
            [
                'id' => '3321100',
                'kabupaten_id' => '3321',
                'nama' => 'Gajah'
            ],
            [
                'id' => '3321110',
                'kabupaten_id' => '3321',
                'nama' => 'Karanganyar'
            ],
            [
                'id' => '3321120',
                'kabupaten_id' => '3321',
                'nama' => 'Mijen'
            ],
            [
                'id' => '3321130',
                'kabupaten_id' => '3321',
                'nama' => 'Wedung'
            ],
            [
                'id' => '3322010',
                'kabupaten_id' => '3322',
                'nama' => 'Getasan'
            ],
            [
                'id' => '3322020',
                'kabupaten_id' => '3322',
                'nama' => 'Tengaran'
            ],
            [
                'id' => '3322030',
                'kabupaten_id' => '3322',
                'nama' => 'Susukan'
            ],
            [
                'id' => '3322031',
                'kabupaten_id' => '3322',
                'nama' => 'Kaliwungu'
            ],
            [
                'id' => '3322040',
                'kabupaten_id' => '3322',
                'nama' => 'Suruh'
            ],
            [
                'id' => '3322050',
                'kabupaten_id' => '3322',
                'nama' => 'Pabelan'
            ],
            [
                'id' => '3322060',
                'kabupaten_id' => '3322',
                'nama' => 'Tuntang'
            ],
            [
                'id' => '3322070',
                'kabupaten_id' => '3322',
                'nama' => 'Banyubiru'
            ],
            [
                'id' => '3322080',
                'kabupaten_id' => '3322',
                'nama' => 'Jambu'
            ],
            [
                'id' => '3322090',
                'kabupaten_id' => '3322',
                'nama' => 'Sumowono'
            ],
            [
                'id' => '3322100',
                'kabupaten_id' => '3322',
                'nama' => 'Ambarawa'
            ],
            [
                'id' => '3322101',
                'kabupaten_id' => '3322',
                'nama' => 'Bandungan'
            ],
            [
                'id' => '3322110',
                'kabupaten_id' => '3322',
                'nama' => 'Bawen'
            ],
            [
                'id' => '3322120',
                'kabupaten_id' => '3322',
                'nama' => 'Bringin'
            ],
            [
                'id' => '3322121',
                'kabupaten_id' => '3322',
                'nama' => 'Bancak'
            ],
            [
                'id' => '3322130',
                'kabupaten_id' => '3322',
                'nama' => 'Pringapus'
            ],
            [
                'id' => '3322140',
                'kabupaten_id' => '3322',
                'nama' => 'Bergas'
            ],
            [
                'id' => '3322151',
                'kabupaten_id' => '3322',
                'nama' => 'Ungaran Barat'
            ],
            [
                'id' => '3322152',
                'kabupaten_id' => '3322',
                'nama' => 'Ungaran Timur'
            ],
            [
                'id' => '3323010',
                'kabupaten_id' => '3323',
                'nama' => 'Parakan'
            ],
            [
                'id' => '3323011',
                'kabupaten_id' => '3323',
                'nama' => 'Kledung'
            ],
            [
                'id' => '3323012',
                'kabupaten_id' => '3323',
                'nama' => 'Bansari'
            ],
            [
                'id' => '3323020',
                'kabupaten_id' => '3323',
                'nama' => 'Bulu'
            ],
            [
                'id' => '3323030',
                'kabupaten_id' => '3323',
                'nama' => 'Temanggung'
            ],
            [
                'id' => '3323031',
                'kabupaten_id' => '3323',
                'nama' => 'Tlogomulyo'
            ],
            [
                'id' => '3323040',
                'kabupaten_id' => '3323',
                'nama' => 'Tembarak'
            ],
            [
                'id' => '3323041',
                'kabupaten_id' => '3323',
                'nama' => 'Selopampang'
            ],
            [
                'id' => '3323050',
                'kabupaten_id' => '3323',
                'nama' => 'Kranggan'
            ],
            [
                'id' => '3323060',
                'kabupaten_id' => '3323',
                'nama' => 'Pringsurat'
            ],
            [
                'id' => '3323070',
                'kabupaten_id' => '3323',
                'nama' => 'Kaloran'
            ],
            [
                'id' => '3323080',
                'kabupaten_id' => '3323',
                'nama' => 'Kandangan'
            ],
            [
                'id' => '3323090',
                'kabupaten_id' => '3323',
                'nama' => 'Kedu'
            ],
            [
                'id' => '3323100',
                'kabupaten_id' => '3323',
                'nama' => 'Ngadirejo'
            ],
            [
                'id' => '3323110',
                'kabupaten_id' => '3323',
                'nama' => 'Jumo'
            ],
            [
                'id' => '3323111',
                'kabupaten_id' => '3323',
                'nama' => 'Gemawang'
            ],
            [
                'id' => '3323120',
                'kabupaten_id' => '3323',
                'nama' => 'Candiroto'
            ],
            [
                'id' => '3323121',
                'kabupaten_id' => '3323',
                'nama' => 'Bejen'
            ],
            [
                'id' => '3323130',
                'kabupaten_id' => '3323',
                'nama' => 'Tretep'
            ],
            [
                'id' => '3323131',
                'kabupaten_id' => '3323',
                'nama' => 'Wonoboyo'
            ],
            [
                'id' => '3324010',
                'kabupaten_id' => '3324',
                'nama' => 'Plantungan'
            ],
            [
                'id' => '3324020',
                'kabupaten_id' => '3324',
                'nama' => 'Sukorejo'
            ],
            [
                'id' => '3324030',
                'kabupaten_id' => '3324',
                'nama' => 'Pagerruyung'
            ],
            [
                'id' => '3324040',
                'kabupaten_id' => '3324',
                'nama' => 'Patean'
            ],
            [
                'id' => '3324050',
                'kabupaten_id' => '3324',
                'nama' => 'Singorojo'
            ],
            [
                'id' => '3324060',
                'kabupaten_id' => '3324',
                'nama' => 'Limbangan'
            ],
            [
                'id' => '3324070',
                'kabupaten_id' => '3324',
                'nama' => 'Boja'
            ],
            [
                'id' => '3324080',
                'kabupaten_id' => '3324',
                'nama' => 'Kaliwungu'
            ],
            [
                'id' => '3324081',
                'kabupaten_id' => '3324',
                'nama' => 'Kaliwungu Selatan'
            ],
            [
                'id' => '3324090',
                'kabupaten_id' => '3324',
                'nama' => 'Brangsong'
            ],
            [
                'id' => '3324100',
                'kabupaten_id' => '3324',
                'nama' => 'Pegandon'
            ],
            [
                'id' => '3324101',
                'kabupaten_id' => '3324',
                'nama' => 'Ngampel'
            ],
            [
                'id' => '3324110',
                'kabupaten_id' => '3324',
                'nama' => 'Gemuh'
            ],
            [
                'id' => '3324111',
                'kabupaten_id' => '3324',
                'nama' => 'Ringinarum'
            ],
            [
                'id' => '3324120',
                'kabupaten_id' => '3324',
                'nama' => 'Weleri'
            ],
            [
                'id' => '3324130',
                'kabupaten_id' => '3324',
                'nama' => 'Rowosari'
            ],
            [
                'id' => '3324140',
                'kabupaten_id' => '3324',
                'nama' => 'Kangkung'
            ],
            [
                'id' => '3324150',
                'kabupaten_id' => '3324',
                'nama' => 'Cepiring'
            ],
            [
                'id' => '3324160',
                'kabupaten_id' => '3324',
                'nama' => 'Patebon'
            ],
            [
                'id' => '3324170',
                'kabupaten_id' => '3324',
                'nama' => 'Kota Kendal'
            ],
            [
                'id' => '3325010',
                'kabupaten_id' => '3325',
                'nama' => 'Wonotunggal'
            ],
            [
                'id' => '3325020',
                'kabupaten_id' => '3325',
                'nama' => 'Bandar'
            ],
            [
                'id' => '3325030',
                'kabupaten_id' => '3325',
                'nama' => 'Blado'
            ],
            [
                'id' => '3325040',
                'kabupaten_id' => '3325',
                'nama' => 'Reban'
            ],
            [
                'id' => '3325050',
                'kabupaten_id' => '3325',
                'nama' => 'Bawang'
            ],
            [
                'id' => '3325060',
                'kabupaten_id' => '3325',
                'nama' => 'Tersono'
            ],
            [
                'id' => '3325070',
                'kabupaten_id' => '3325',
                'nama' => 'Gringsing'
            ],
            [
                'id' => '3325080',
                'kabupaten_id' => '3325',
                'nama' => 'Limpung'
            ],
            [
                'id' => '3325081',
                'kabupaten_id' => '3325',
                'nama' => 'Banyuputih'
            ],
            [
                'id' => '3325090',
                'kabupaten_id' => '3325',
                'nama' => 'Subah'
            ],
            [
                'id' => '3325091',
                'kabupaten_id' => '3325',
                'nama' => 'Pecalungan'
            ],
            [
                'id' => '3325100',
                'kabupaten_id' => '3325',
                'nama' => 'Tulis'
            ],
            [
                'id' => '3325101',
                'kabupaten_id' => '3325',
                'nama' => 'Kandeman'
            ],
            [
                'id' => '3325110',
                'kabupaten_id' => '3325',
                'nama' => 'Batang'
            ],
            [
                'id' => '3325120',
                'kabupaten_id' => '3325',
                'nama' => 'Warung Asem'
            ],
            [
                'id' => '3326010',
                'kabupaten_id' => '3326',
                'nama' => 'Kandangserang'
            ],
            [
                'id' => '3326020',
                'kabupaten_id' => '3326',
                'nama' => 'Paninggaran'
            ],
            [
                'id' => '3326030',
                'kabupaten_id' => '3326',
                'nama' => 'Lebakbarang'
            ],
            [
                'id' => '3326040',
                'kabupaten_id' => '3326',
                'nama' => 'Petungkriono'
            ],
            [
                'id' => '3326050',
                'kabupaten_id' => '3326',
                'nama' => 'Talun'
            ],
            [
                'id' => '3326060',
                'kabupaten_id' => '3326',
                'nama' => 'Doro'
            ],
            [
                'id' => '3326070',
                'kabupaten_id' => '3326',
                'nama' => 'Karanganyar'
            ],
            [
                'id' => '3326080',
                'kabupaten_id' => '3326',
                'nama' => 'Kajen'
            ],
            [
                'id' => '3326090',
                'kabupaten_id' => '3326',
                'nama' => 'Kesesi'
            ],
            [
                'id' => '3326100',
                'kabupaten_id' => '3326',
                'nama' => 'Sragi'
            ],
            [
                'id' => '3326101',
                'kabupaten_id' => '3326',
                'nama' => 'Siwalan'
            ],
            [
                'id' => '3326110',
                'kabupaten_id' => '3326',
                'nama' => 'Bojong'
            ],
            [
                'id' => '3326120',
                'kabupaten_id' => '3326',
                'nama' => 'Wonopringgo'
            ],
            [
                'id' => '3326130',
                'kabupaten_id' => '3326',
                'nama' => 'Kedungwuni'
            ],
            [
                'id' => '3326131',
                'kabupaten_id' => '3326',
                'nama' => 'Karangdadap'
            ],
            [
                'id' => '3326140',
                'kabupaten_id' => '3326',
                'nama' => 'Buaran'
            ],
            [
                'id' => '3326150',
                'kabupaten_id' => '3326',
                'nama' => 'Tirto'
            ],
            [
                'id' => '3326160',
                'kabupaten_id' => '3326',
                'nama' => 'Wiradesa'
            ],
            [
                'id' => '3326161',
                'kabupaten_id' => '3326',
                'nama' => 'Wonokerto'
            ],
            [
                'id' => '3327010',
                'kabupaten_id' => '3327',
                'nama' => 'Moga'
            ],
            [
                'id' => '3327011',
                'kabupaten_id' => '3327',
                'nama' => 'Warungpring'
            ],
            [
                'id' => '3327020',
                'kabupaten_id' => '3327',
                'nama' => 'Pulosari'
            ],
            [
                'id' => '3327030',
                'kabupaten_id' => '3327',
                'nama' => 'Belik'
            ],
            [
                'id' => '3327040',
                'kabupaten_id' => '3327',
                'nama' => 'Watukumpul'
            ],
            [
                'id' => '3327050',
                'kabupaten_id' => '3327',
                'nama' => 'Bodeh'
            ],
            [
                'id' => '3327060',
                'kabupaten_id' => '3327',
                'nama' => 'Bantarbolang'
            ],
            [
                'id' => '3327070',
                'kabupaten_id' => '3327',
                'nama' => 'Randudongkal'
            ],
            [
                'id' => '3327080',
                'kabupaten_id' => '3327',
                'nama' => 'Pemalang'
            ],
            [
                'id' => '3327090',
                'kabupaten_id' => '3327',
                'nama' => 'Taman'
            ],
            [
                'id' => '3327100',
                'kabupaten_id' => '3327',
                'nama' => 'Petarukan'
            ],
            [
                'id' => '3327110',
                'kabupaten_id' => '3327',
                'nama' => 'Ampelgading'
            ],
            [
                'id' => '3327120',
                'kabupaten_id' => '3327',
                'nama' => 'Comal'
            ],
            [
                'id' => '3327130',
                'kabupaten_id' => '3327',
                'nama' => 'Ulujami'
            ],
            [
                'id' => '3328010',
                'kabupaten_id' => '3328',
                'nama' => 'Margasari'
            ],
            [
                'id' => '3328020',
                'kabupaten_id' => '3328',
                'nama' => 'Bumijawa'
            ],
            [
                'id' => '3328030',
                'kabupaten_id' => '3328',
                'nama' => 'Bojong'
            ],
            [
                'id' => '3328040',
                'kabupaten_id' => '3328',
                'nama' => 'Balapulang'
            ],
            [
                'id' => '3328050',
                'kabupaten_id' => '3328',
                'nama' => 'Pagerbarang'
            ],
            [
                'id' => '3328060',
                'kabupaten_id' => '3328',
                'nama' => 'Lebaksiu'
            ],
            [
                'id' => '3328070',
                'kabupaten_id' => '3328',
                'nama' => 'Jatinegara'
            ],
            [
                'id' => '3328080',
                'kabupaten_id' => '3328',
                'nama' => 'Kedung Banteng'
            ],
            [
                'id' => '3328090',
                'kabupaten_id' => '3328',
                'nama' => 'Pangkah'
            ],
            [
                'id' => '3328100',
                'kabupaten_id' => '3328',
                'nama' => 'Slawi'
            ],
            [
                'id' => '3328110',
                'kabupaten_id' => '3328',
                'nama' => 'Dukuhwaru'
            ],
            [
                'id' => '3328120',
                'kabupaten_id' => '3328',
                'nama' => 'Adiwerna'
            ],
            [
                'id' => '3328130',
                'kabupaten_id' => '3328',
                'nama' => 'Dukuhturi'
            ],
            [
                'id' => '3328140',
                'kabupaten_id' => '3328',
                'nama' => 'Talang'
            ],
            [
                'id' => '3328150',
                'kabupaten_id' => '3328',
                'nama' => 'Tarub'
            ],
            [
                'id' => '3328160',
                'kabupaten_id' => '3328',
                'nama' => 'Kramat'
            ],
            [
                'id' => '3328170',
                'kabupaten_id' => '3328',
                'nama' => 'Suradadi'
            ],
            [
                'id' => '3328180',
                'kabupaten_id' => '3328',
                'nama' => 'Warureja'
            ],
            [
                'id' => '3329010',
                'kabupaten_id' => '3329',
                'nama' => 'Salem'
            ],
            [
                'id' => '3329020',
                'kabupaten_id' => '3329',
                'nama' => 'Bantarkawung'
            ],
            [
                'id' => '3329030',
                'kabupaten_id' => '3329',
                'nama' => 'Bumiayu'
            ],
            [
                'id' => '3329040',
                'kabupaten_id' => '3329',
                'nama' => 'Paguyangan'
            ],
            [
                'id' => '3329050',
                'kabupaten_id' => '3329',
                'nama' => 'Sirampog'
            ],
            [
                'id' => '3329060',
                'kabupaten_id' => '3329',
                'nama' => 'Tonjong'
            ],
            [
                'id' => '3329070',
                'kabupaten_id' => '3329',
                'nama' => 'Larangan'
            ],
            [
                'id' => '3329080',
                'kabupaten_id' => '3329',
                'nama' => 'Ketanggungan'
            ],
            [
                'id' => '3329090',
                'kabupaten_id' => '3329',
                'nama' => 'Banjarharjo'
            ],
            [
                'id' => '3329100',
                'kabupaten_id' => '3329',
                'nama' => 'Losari'
            ],
            [
                'id' => '3329110',
                'kabupaten_id' => '3329',
                'nama' => 'Tanjung'
            ],
            [
                'id' => '3329120',
                'kabupaten_id' => '3329',
                'nama' => 'Kersana'
            ],
            [
                'id' => '3329130',
                'kabupaten_id' => '3329',
                'nama' => 'Bulakamba'
            ],
            [
                'id' => '3329140',
                'kabupaten_id' => '3329',
                'nama' => 'Wanasari'
            ],
            [
                'id' => '3329150',
                'kabupaten_id' => '3329',
                'nama' => 'Songgom'
            ],
            [
                'id' => '3329160',
                'kabupaten_id' => '3329',
                'nama' => 'Jatibarang'
            ],
            [
                'id' => '3329170',
                'kabupaten_id' => '3329',
                'nama' => 'Brebes'
            ],
            [
                'id' => '3371010',
                'kabupaten_id' => '3371',
                'nama' => 'Magelang Selatan'
            ],
            [
                'id' => '3371011',
                'kabupaten_id' => '3371',
                'nama' => 'Magelang Tengah'
            ],
            [
                'id' => '3371020',
                'kabupaten_id' => '3371',
                'nama' => 'Magelang Utara'
            ],
            [
                'id' => '3372010',
                'kabupaten_id' => '3372',
                'nama' => 'Laweyan'
            ],
            [
                'id' => '3372020',
                'kabupaten_id' => '3372',
                'nama' => 'Serengan'
            ],
            [
                'id' => '3372030',
                'kabupaten_id' => '3372',
                'nama' => 'Pasar Kliwon'
            ],
            [
                'id' => '3372040',
                'kabupaten_id' => '3372',
                'nama' => 'Jebres'
            ],
            [
                'id' => '3372050',
                'kabupaten_id' => '3372',
                'nama' => 'Banjarsari'
            ],
            [
                'id' => '3373010',
                'kabupaten_id' => '3373',
                'nama' => 'Argomulyo'
            ],
            [
                'id' => '3373020',
                'kabupaten_id' => '3373',
                'nama' => 'Tingkir'
            ],
            [
                'id' => '3373030',
                'kabupaten_id' => '3373',
                'nama' => 'Sidomukti'
            ],
            [
                'id' => '3373040',
                'kabupaten_id' => '3373',
                'nama' => 'Sidorejo'
            ],
            [
                'id' => '3374010',
                'kabupaten_id' => '3374',
                'nama' => 'Mijen'
            ],
            [
                'id' => '3374020',
                'kabupaten_id' => '3374',
                'nama' => 'Gunung Pati'
            ],
            [
                'id' => '3374030',
                'kabupaten_id' => '3374',
                'nama' => 'Banyumanik'
            ],
            [
                'id' => '3374040',
                'kabupaten_id' => '3374',
                'nama' => 'Gajah Mungkur'
            ],
            [
                'id' => '3374050',
                'kabupaten_id' => '3374',
                'nama' => 'Semarang Selatan'
            ],
            [
                'id' => '3374060',
                'kabupaten_id' => '3374',
                'nama' => 'Candisari'
            ],
            [
                'id' => '3374070',
                'kabupaten_id' => '3374',
                'nama' => 'Tembalang'
            ],
            [
                'id' => '3374080',
                'kabupaten_id' => '3374',
                'nama' => 'Pedurungan'
            ],
            [
                'id' => '3374090',
                'kabupaten_id' => '3374',
                'nama' => 'Genuk'
            ],
            [
                'id' => '3374100',
                'kabupaten_id' => '3374',
                'nama' => 'Gayamsari'
            ],
            [
                'id' => '3374110',
                'kabupaten_id' => '3374',
                'nama' => 'Semarang Timur'
            ],
            [
                'id' => '3374120',
                'kabupaten_id' => '3374',
                'nama' => 'Semarang Utara'
            ],
            [
                'id' => '3374130',
                'kabupaten_id' => '3374',
                'nama' => 'Semarang Tengah'
            ],
            [
                'id' => '3374140',
                'kabupaten_id' => '3374',
                'nama' => 'Semarang Barat'
            ],
            [
                'id' => '3374150',
                'kabupaten_id' => '3374',
                'nama' => 'Tugu'
            ],
            [
                'id' => '3374160',
                'kabupaten_id' => '3374',
                'nama' => 'Ngaliyan'
            ],
            [
                'id' => '3375010',
                'kabupaten_id' => '3375',
                'nama' => 'Pekalongan Barat'
            ],
            [
                'id' => '3375020',
                'kabupaten_id' => '3375',
                'nama' => 'Pekalongan Timur'
            ],
            [
                'id' => '3375030',
                'kabupaten_id' => '3375',
                'nama' => 'Pekalongan Selatan'
            ],
            [
                'id' => '3375040',
                'kabupaten_id' => '3375',
                'nama' => 'Pekalongan Utara'
            ],
            [
                'id' => '3376010',
                'kabupaten_id' => '3376',
                'nama' => 'Tegal Selatan'
            ],
            [
                'id' => '3376020',
                'kabupaten_id' => '3376',
                'nama' => 'Tegal Timur'
            ],
            [
                'id' => '3376030',
                'kabupaten_id' => '3376',
                'nama' => 'Tegal Barat'
            ],
            [
                'id' => '3376040',
                'kabupaten_id' => '3376',
                'nama' => 'Margadana'
            ],
            [
                'id' => '3401010',
                'kabupaten_id' => '3401',
                'nama' => 'Temon'
            ],
            [
                'id' => '3401020',
                'kabupaten_id' => '3401',
                'nama' => 'Wates'
            ],
            [
                'id' => '3401030',
                'kabupaten_id' => '3401',
                'nama' => 'Panjatan'
            ],
            [
                'id' => '3401040',
                'kabupaten_id' => '3401',
                'nama' => 'Galur'
            ],
            [
                'id' => '3401050',
                'kabupaten_id' => '3401',
                'nama' => 'Lendah'
            ],
            [
                'id' => '3401060',
                'kabupaten_id' => '3401',
                'nama' => 'Sentolo'
            ],
            [
                'id' => '3401070',
                'kabupaten_id' => '3401',
                'nama' => 'Pengasih'
            ],
            [
                'id' => '3401080',
                'kabupaten_id' => '3401',
                'nama' => 'Kokap'
            ],
            [
                'id' => '3401090',
                'kabupaten_id' => '3401',
                'nama' => 'Girimulyo'
            ],
            [
                'id' => '3401100',
                'kabupaten_id' => '3401',
                'nama' => 'Nanggulan'
            ],
            [
                'id' => '3401110',
                'kabupaten_id' => '3401',
                'nama' => 'Kalibawang'
            ],
            [
                'id' => '3401120',
                'kabupaten_id' => '3401',
                'nama' => 'Samigaluh'
            ],
            [
                'id' => '3402010',
                'kabupaten_id' => '3402',
                'nama' => 'Srandakan'
            ],
            [
                'id' => '3402020',
                'kabupaten_id' => '3402',
                'nama' => 'Sanden'
            ],
            [
                'id' => '3402030',
                'kabupaten_id' => '3402',
                'nama' => 'Kretek'
            ],
            [
                'id' => '3402040',
                'kabupaten_id' => '3402',
                'nama' => 'Pundong'
            ],
            [
                'id' => '3402050',
                'kabupaten_id' => '3402',
                'nama' => 'Bambang Lipuro'
            ],
            [
                'id' => '3402060',
                'kabupaten_id' => '3402',
                'nama' => 'Pandak'
            ],
            [
                'id' => '3402070',
                'kabupaten_id' => '3402',
                'nama' => 'Bantul'
            ],
            [
                'id' => '3402080',
                'kabupaten_id' => '3402',
                'nama' => 'Jetis'
            ],
            [
                'id' => '3402090',
                'kabupaten_id' => '3402',
                'nama' => 'Imogiri'
            ],
            [
                'id' => '3402100',
                'kabupaten_id' => '3402',
                'nama' => 'Dlingo'
            ],
            [
                'id' => '3402110',
                'kabupaten_id' => '3402',
                'nama' => 'Pleret'
            ],
            [
                'id' => '3402120',
                'kabupaten_id' => '3402',
                'nama' => 'Piyungan'
            ],
            [
                'id' => '3402130',
                'kabupaten_id' => '3402',
                'nama' => 'Banguntapan'
            ],
            [
                'id' => '3402140',
                'kabupaten_id' => '3402',
                'nama' => 'Sewon'
            ],
            [
                'id' => '3402150',
                'kabupaten_id' => '3402',
                'nama' => 'Kasihan'
            ],
            [
                'id' => '3402160',
                'kabupaten_id' => '3402',
                'nama' => 'Pajangan'
            ],
            [
                'id' => '3402170',
                'kabupaten_id' => '3402',
                'nama' => 'Sedayu'
            ],
            [
                'id' => '3403010',
                'kabupaten_id' => '3403',
                'nama' => 'Panggang'
            ],
            [
                'id' => '3403011',
                'kabupaten_id' => '3403',
                'nama' => 'Purwosari'
            ],
            [
                'id' => '3403020',
                'kabupaten_id' => '3403',
                'nama' => 'Paliyan'
            ],
            [
                'id' => '3403030',
                'kabupaten_id' => '3403',
                'nama' => 'Sapto Sari'
            ],
            [
                'id' => '3403040',
                'kabupaten_id' => '3403',
                'nama' => 'Tepus'
            ],
            [
                'id' => '3403041',
                'kabupaten_id' => '3403',
                'nama' => 'Tanjungsari'
            ],
            [
                'id' => '3403050',
                'kabupaten_id' => '3403',
                'nama' => 'Rongkop'
            ],
            [
                'id' => '3403051',
                'kabupaten_id' => '3403',
                'nama' => 'Girisubo'
            ],
            [
                'id' => '3403060',
                'kabupaten_id' => '3403',
                'nama' => 'Semanu'
            ],
            [
                'id' => '3403070',
                'kabupaten_id' => '3403',
                'nama' => 'Ponjong'
            ],
            [
                'id' => '3403080',
                'kabupaten_id' => '3403',
                'nama' => 'Karangmojo'
            ],
            [
                'id' => '3403090',
                'kabupaten_id' => '3403',
                'nama' => 'Wonosari'
            ],
            [
                'id' => '3403100',
                'kabupaten_id' => '3403',
                'nama' => 'Playen'
            ],
            [
                'id' => '3403110',
                'kabupaten_id' => '3403',
                'nama' => 'Patuk'
            ],
            [
                'id' => '3403120',
                'kabupaten_id' => '3403',
                'nama' => 'Gedang Sari'
            ],
            [
                'id' => '3403130',
                'kabupaten_id' => '3403',
                'nama' => 'Nglipar'
            ],
            [
                'id' => '3403140',
                'kabupaten_id' => '3403',
                'nama' => 'Ngawen'
            ],
            [
                'id' => '3403150',
                'kabupaten_id' => '3403',
                'nama' => 'Semin'
            ],
            [
                'id' => '3404010',
                'kabupaten_id' => '3404',
                'nama' => 'Moyudan'
            ],
            [
                'id' => '3404020',
                'kabupaten_id' => '3404',
                'nama' => 'Minggir'
            ],
            [
                'id' => '3404030',
                'kabupaten_id' => '3404',
                'nama' => 'Seyegan'
            ],
            [
                'id' => '3404040',
                'kabupaten_id' => '3404',
                'nama' => 'Godean'
            ],
            [
                'id' => '3404050',
                'kabupaten_id' => '3404',
                'nama' => 'Gamping'
            ],
            [
                'id' => '3404060',
                'kabupaten_id' => '3404',
                'nama' => 'Mlati'
            ],
            [
                'id' => '3404070',
                'kabupaten_id' => '3404',
                'nama' => 'Depok'
            ],
            [
                'id' => '3404080',
                'kabupaten_id' => '3404',
                'nama' => 'Berbah'
            ],
            [
                'id' => '3404090',
                'kabupaten_id' => '3404',
                'nama' => 'Prambanan'
            ],
            [
                'id' => '3404100',
                'kabupaten_id' => '3404',
                'nama' => 'Kalasan'
            ],
            [
                'id' => '3404110',
                'kabupaten_id' => '3404',
                'nama' => 'Ngemplak'
            ],
            [
                'id' => '3404120',
                'kabupaten_id' => '3404',
                'nama' => 'Ngaglik'
            ],
            [
                'id' => '3404130',
                'kabupaten_id' => '3404',
                'nama' => 'Sleman'
            ],
            [
                'id' => '3404140',
                'kabupaten_id' => '3404',
                'nama' => 'Tempel'
            ],
            [
                'id' => '3404150',
                'kabupaten_id' => '3404',
                'nama' => 'Turi'
            ],
            [
                'id' => '3404160',
                'kabupaten_id' => '3404',
                'nama' => 'Pakem'
            ],
            [
                'id' => '3404170',
                'kabupaten_id' => '3404',
                'nama' => 'Cangkringan'
            ],
            [
                'id' => '3471010',
                'kabupaten_id' => '3471',
                'nama' => 'Mantrijeron'
            ],
            [
                'id' => '3471020',
                'kabupaten_id' => '3471',
                'nama' => 'Kraton'
            ],
            [
                'id' => '3471030',
                'kabupaten_id' => '3471',
                'nama' => 'Mergangsan'
            ],
            [
                'id' => '3471040',
                'kabupaten_id' => '3471',
                'nama' => 'Umbulharjo'
            ],
            [
                'id' => '3471050',
                'kabupaten_id' => '3471',
                'nama' => 'Kotagede'
            ],
            [
                'id' => '3471060',
                'kabupaten_id' => '3471',
                'nama' => 'Gondokusuman'
            ],
            [
                'id' => '3471070',
                'kabupaten_id' => '3471',
                'nama' => 'Danurejan'
            ],
            [
                'id' => '3471080',
                'kabupaten_id' => '3471',
                'nama' => 'Pakualaman'
            ],
            [
                'id' => '3471090',
                'kabupaten_id' => '3471',
                'nama' => 'Gondomanan'
            ],
            [
                'id' => '3471100',
                'kabupaten_id' => '3471',
                'nama' => 'Ngampilan'
            ],
            [
                'id' => '3471110',
                'kabupaten_id' => '3471',
                'nama' => 'Wirobrajan'
            ],
            [
                'id' => '3471120',
                'kabupaten_id' => '3471',
                'nama' => 'Gedong Tengen'
            ],
            [
                'id' => '3471130',
                'kabupaten_id' => '3471',
                'nama' => 'Jetis'
            ],
            [
                'id' => '3471140',
                'kabupaten_id' => '3471',
                'nama' => 'Tegalrejo'
            ],
            [
                'id' => '3501010',
                'kabupaten_id' => '3501',
                'nama' => 'Donorojo'
            ],
            [
                'id' => '3501020',
                'kabupaten_id' => '3501',
                'nama' => 'Punung'
            ],
            [
                'id' => '3501030',
                'kabupaten_id' => '3501',
                'nama' => 'Pringkuku'
            ],
            [
                'id' => '3501040',
                'kabupaten_id' => '3501',
                'nama' => 'Pacitan'
            ],
            [
                'id' => '3501050',
                'kabupaten_id' => '3501',
                'nama' => 'Kebonagung'
            ],
            [
                'id' => '3501060',
                'kabupaten_id' => '3501',
                'nama' => 'Arjosari'
            ],
            [
                'id' => '3501070',
                'kabupaten_id' => '3501',
                'nama' => 'Nawangan'
            ],
            [
                'id' => '3501080',
                'kabupaten_id' => '3501',
                'nama' => 'Bandar'
            ],
            [
                'id' => '3501090',
                'kabupaten_id' => '3501',
                'nama' => 'Tegalombo'
            ],
            [
                'id' => '3501100',
                'kabupaten_id' => '3501',
                'nama' => 'Tulakan'
            ],
            [
                'id' => '3501110',
                'kabupaten_id' => '3501',
                'nama' => 'Ngadirojo'
            ],
            [
                'id' => '3501120',
                'kabupaten_id' => '3501',
                'nama' => 'Sudimoro'
            ],
            [
                'id' => '3502010',
                'kabupaten_id' => '3502',
                'nama' => 'Ngrayun'
            ],
            [
                'id' => '3502020',
                'kabupaten_id' => '3502',
                'nama' => 'Slahung'
            ],
            [
                'id' => '3502030',
                'kabupaten_id' => '3502',
                'nama' => 'Bungkal'
            ],
            [
                'id' => '3502040',
                'kabupaten_id' => '3502',
                'nama' => 'Sambit'
            ],
            [
                'id' => '3502050',
                'kabupaten_id' => '3502',
                'nama' => 'Sawoo'
            ],
            [
                'id' => '3502060',
                'kabupaten_id' => '3502',
                'nama' => 'Sooko'
            ],
            [
                'id' => '3502061',
                'kabupaten_id' => '3502',
                'nama' => 'Pudak'
            ],
            [
                'id' => '3502070',
                'kabupaten_id' => '3502',
                'nama' => 'Pulung'
            ],
            [
                'id' => '3502080',
                'kabupaten_id' => '3502',
                'nama' => 'Mlarak'
            ],
            [
                'id' => '3502090',
                'kabupaten_id' => '3502',
                'nama' => 'Siman'
            ],
            [
                'id' => '3502100',
                'kabupaten_id' => '3502',
                'nama' => 'Jetis'
            ],
            [
                'id' => '3502110',
                'kabupaten_id' => '3502',
                'nama' => 'Balong'
            ],
            [
                'id' => '3502120',
                'kabupaten_id' => '3502',
                'nama' => 'Kauman'
            ],
            [
                'id' => '3502130',
                'kabupaten_id' => '3502',
                'nama' => 'Jambon'
            ],
            [
                'id' => '3502140',
                'kabupaten_id' => '3502',
                'nama' => 'Badegan'
            ],
            [
                'id' => '3502150',
                'kabupaten_id' => '3502',
                'nama' => 'Sampung'
            ],
            [
                'id' => '3502160',
                'kabupaten_id' => '3502',
                'nama' => 'Sukorejo'
            ],
            [
                'id' => '3502170',
                'kabupaten_id' => '3502',
                'nama' => 'Ponorogo'
            ],
            [
                'id' => '3502180',
                'kabupaten_id' => '3502',
                'nama' => 'Babadan'
            ],
            [
                'id' => '3502190',
                'kabupaten_id' => '3502',
                'nama' => 'Jenangan'
            ],
            [
                'id' => '3502200',
                'kabupaten_id' => '3502',
                'nama' => 'Ngebel'
            ],
            [
                'id' => '3503010',
                'kabupaten_id' => '3503',
                'nama' => 'Panggul'
            ],
            [
                'id' => '3503020',
                'kabupaten_id' => '3503',
                'nama' => 'Munjungan'
            ],
            [
                'id' => '3503030',
                'kabupaten_id' => '3503',
                'nama' => 'Watulimo'
            ],
            [
                'id' => '3503040',
                'kabupaten_id' => '3503',
                'nama' => 'Kampak'
            ],
            [
                'id' => '3503050',
                'kabupaten_id' => '3503',
                'nama' => 'Dongko'
            ],
            [
                'id' => '3503060',
                'kabupaten_id' => '3503',
                'nama' => 'Pule'
            ],
            [
                'id' => '3503070',
                'kabupaten_id' => '3503',
                'nama' => 'Karangan'
            ],
            [
                'id' => '3503071',
                'kabupaten_id' => '3503',
                'nama' => 'Suruh'
            ],
            [
                'id' => '3503080',
                'kabupaten_id' => '3503',
                'nama' => 'Gandusari'
            ],
            [
                'id' => '3503090',
                'kabupaten_id' => '3503',
                'nama' => 'Durenan'
            ],
            [
                'id' => '3503100',
                'kabupaten_id' => '3503',
                'nama' => 'Pogalan'
            ],
            [
                'id' => '3503110',
                'kabupaten_id' => '3503',
                'nama' => 'Trenggalek'
            ],
            [
                'id' => '3503120',
                'kabupaten_id' => '3503',
                'nama' => 'Tugu'
            ],
            [
                'id' => '3503130',
                'kabupaten_id' => '3503',
                'nama' => 'Bendungan'
            ],
            [
                'id' => '3504010',
                'kabupaten_id' => '3504',
                'nama' => 'Besuki'
            ],
            [
                'id' => '3504020',
                'kabupaten_id' => '3504',
                'nama' => 'Bandung'
            ],
            [
                'id' => '3504030',
                'kabupaten_id' => '3504',
                'nama' => 'Pakel'
            ],
            [
                'id' => '3504040',
                'kabupaten_id' => '3504',
                'nama' => 'Campur Darat'
            ],
            [
                'id' => '3504050',
                'kabupaten_id' => '3504',
                'nama' => 'Tanggung Gunung'
            ],
            [
                'id' => '3504060',
                'kabupaten_id' => '3504',
                'nama' => 'Kalidawir'
            ],
            [
                'id' => '3504070',
                'kabupaten_id' => '3504',
                'nama' => 'Pucang Laban'
            ],
            [
                'id' => '3504080',
                'kabupaten_id' => '3504',
                'nama' => 'Rejotangan'
            ],
            [
                'id' => '3504090',
                'kabupaten_id' => '3504',
                'nama' => 'Ngunut'
            ],
            [
                'id' => '3504100',
                'kabupaten_id' => '3504',
                'nama' => 'Sumbergempol'
            ],
            [
                'id' => '3504110',
                'kabupaten_id' => '3504',
                'nama' => 'Boyolangu'
            ],
            [
                'id' => '3504120',
                'kabupaten_id' => '3504',
                'nama' => 'Tulungagung'
            ],
            [
                'id' => '3504130',
                'kabupaten_id' => '3504',
                'nama' => 'Kedungwaru'
            ],
            [
                'id' => '3504140',
                'kabupaten_id' => '3504',
                'nama' => 'Ngantru'
            ],
            [
                'id' => '3504150',
                'kabupaten_id' => '3504',
                'nama' => 'Karangrejo'
            ],
            [
                'id' => '3504160',
                'kabupaten_id' => '3504',
                'nama' => 'Kauman'
            ],
            [
                'id' => '3504170',
                'kabupaten_id' => '3504',
                'nama' => 'Gondang'
            ],
            [
                'id' => '3504180',
                'kabupaten_id' => '3504',
                'nama' => 'Pager Wojo'
            ],
            [
                'id' => '3504190',
                'kabupaten_id' => '3504',
                'nama' => 'Sendang'
            ],
            [
                'id' => '3505010',
                'kabupaten_id' => '3505',
                'nama' => 'Bakung'
            ],
            [
                'id' => '3505020',
                'kabupaten_id' => '3505',
                'nama' => 'Wonotirto'
            ],
            [
                'id' => '3505030',
                'kabupaten_id' => '3505',
                'nama' => 'Panggungrejo'
            ],
            [
                'id' => '3505040',
                'kabupaten_id' => '3505',
                'nama' => 'Wates'
            ],
            [
                'id' => '3505050',
                'kabupaten_id' => '3505',
                'nama' => 'Binangun'
            ],
            [
                'id' => '3505060',
                'kabupaten_id' => '3505',
                'nama' => 'Sutojayan'
            ],
            [
                'id' => '3505070',
                'kabupaten_id' => '3505',
                'nama' => 'Kademangan'
            ],
            [
                'id' => '3505080',
                'kabupaten_id' => '3505',
                'nama' => 'Kanigoro'
            ],
            [
                'id' => '3505090',
                'kabupaten_id' => '3505',
                'nama' => 'Talun'
            ],
            [
                'id' => '3505100',
                'kabupaten_id' => '3505',
                'nama' => 'Selopuro'
            ],
            [
                'id' => '3505110',
                'kabupaten_id' => '3505',
                'nama' => 'Kesamben'
            ],
            [
                'id' => '3505120',
                'kabupaten_id' => '3505',
                'nama' => 'Selorejo'
            ],
            [
                'id' => '3505130',
                'kabupaten_id' => '3505',
                'nama' => 'Doko'
            ],
            [
                'id' => '3505140',
                'kabupaten_id' => '3505',
                'nama' => 'Wlingi'
            ],
            [
                'id' => '3505150',
                'kabupaten_id' => '3505',
                'nama' => 'Gandusari'
            ],
            [
                'id' => '3505160',
                'kabupaten_id' => '3505',
                'nama' => 'Garum'
            ],
            [
                'id' => '3505170',
                'kabupaten_id' => '3505',
                'nama' => 'Nglegok'
            ],
            [
                'id' => '3505180',
                'kabupaten_id' => '3505',
                'nama' => 'Sanankulon'
            ],
            [
                'id' => '3505190',
                'kabupaten_id' => '3505',
                'nama' => 'Ponggok'
            ],
            [
                'id' => '3505200',
                'kabupaten_id' => '3505',
                'nama' => 'Srengat'
            ],
            [
                'id' => '3505210',
                'kabupaten_id' => '3505',
                'nama' => 'Wonodadi'
            ],
            [
                'id' => '3505220',
                'kabupaten_id' => '3505',
                'nama' => 'Udanawu'
            ],
            [
                'id' => '3506010',
                'kabupaten_id' => '3506',
                'nama' => 'Mojo'
            ],
            [
                'id' => '3506020',
                'kabupaten_id' => '3506',
                'nama' => 'Semen'
            ],
            [
                'id' => '3506030',
                'kabupaten_id' => '3506',
                'nama' => 'Ngadiluwih'
            ],
            [
                'id' => '3506040',
                'kabupaten_id' => '3506',
                'nama' => 'Kras'
            ],
            [
                'id' => '3506050',
                'kabupaten_id' => '3506',
                'nama' => 'Ringinrejo'
            ],
            [
                'id' => '3506060',
                'kabupaten_id' => '3506',
                'nama' => 'Kandat'
            ],
            [
                'id' => '3506070',
                'kabupaten_id' => '3506',
                'nama' => 'Wates'
            ],
            [
                'id' => '3506080',
                'kabupaten_id' => '3506',
                'nama' => 'Ngancar'
            ],
            [
                'id' => '3506090',
                'kabupaten_id' => '3506',
                'nama' => 'Plosoklaten'
            ],
            [
                'id' => '3506100',
                'kabupaten_id' => '3506',
                'nama' => 'Gurah'
            ],
            [
                'id' => '3506110',
                'kabupaten_id' => '3506',
                'nama' => 'Puncu'
            ],
            [
                'id' => '3506120',
                'kabupaten_id' => '3506',
                'nama' => 'Kepung'
            ],
            [
                'id' => '3506130',
                'kabupaten_id' => '3506',
                'nama' => 'Kandangan'
            ],
            [
                'id' => '3506140',
                'kabupaten_id' => '3506',
                'nama' => 'Pare'
            ],
            [
                'id' => '3506141',
                'kabupaten_id' => '3506',
                'nama' => 'Badas'
            ],
            [
                'id' => '3506150',
                'kabupaten_id' => '3506',
                'nama' => 'Kunjang'
            ],
            [
                'id' => '3506160',
                'kabupaten_id' => '3506',
                'nama' => 'Plemahan'
            ],
            [
                'id' => '3506170',
                'kabupaten_id' => '3506',
                'nama' => 'Purwoasri'
            ],
            [
                'id' => '3506180',
                'kabupaten_id' => '3506',
                'nama' => 'Papar'
            ],
            [
                'id' => '3506190',
                'kabupaten_id' => '3506',
                'nama' => 'Pagu'
            ],
            [
                'id' => '3506191',
                'kabupaten_id' => '3506',
                'nama' => 'Kayen Kidul'
            ],
            [
                'id' => '3506200',
                'kabupaten_id' => '3506',
                'nama' => 'Gampengrejo'
            ],
            [
                'id' => '3506201',
                'kabupaten_id' => '3506',
                'nama' => 'Ngasem'
            ],
            [
                'id' => '3506210',
                'kabupaten_id' => '3506',
                'nama' => 'Banyakan'
            ],
            [
                'id' => '3506220',
                'kabupaten_id' => '3506',
                'nama' => 'Grogol'
            ],
            [
                'id' => '3506230',
                'kabupaten_id' => '3506',
                'nama' => 'Tarokan'
            ],
            [
                'id' => '3507010',
                'kabupaten_id' => '3507',
                'nama' => 'Donomulyo'
            ],
            [
                'id' => '3507020',
                'kabupaten_id' => '3507',
                'nama' => 'Kalipare'
            ],
            [
                'id' => '3507030',
                'kabupaten_id' => '3507',
                'nama' => 'Pagak'
            ],
            [
                'id' => '3507040',
                'kabupaten_id' => '3507',
                'nama' => 'Bantur'
            ],
            [
                'id' => '3507050',
                'kabupaten_id' => '3507',
                'nama' => 'Gedangan'
            ],
            [
                'id' => '3507060',
                'kabupaten_id' => '3507',
                'nama' => 'Sumbermanjing'
            ],
            [
                'id' => '3507070',
                'kabupaten_id' => '3507',
                'nama' => 'Dampit'
            ],
            [
                'id' => '3507080',
                'kabupaten_id' => '3507',
                'nama' => 'Tirto Yudo'
            ],
            [
                'id' => '3507090',
                'kabupaten_id' => '3507',
                'nama' => 'Ampelgading'
            ],
            [
                'id' => '3507100',
                'kabupaten_id' => '3507',
                'nama' => 'Poncokusumo'
            ],
            [
                'id' => '3507110',
                'kabupaten_id' => '3507',
                'nama' => 'Wajak'
            ],
            [
                'id' => '3507120',
                'kabupaten_id' => '3507',
                'nama' => 'Turen'
            ],
            [
                'id' => '3507130',
                'kabupaten_id' => '3507',
                'nama' => 'Bululawang'
            ],
            [
                'id' => '3507140',
                'kabupaten_id' => '3507',
                'nama' => 'Gondanglegi'
            ],
            [
                'id' => '3507150',
                'kabupaten_id' => '3507',
                'nama' => 'Pagelaran'
            ],
            [
                'id' => '3507160',
                'kabupaten_id' => '3507',
                'nama' => 'Kepanjen'
            ],
            [
                'id' => '3507170',
                'kabupaten_id' => '3507',
                'nama' => 'Sumber Pucung'
            ],
            [
                'id' => '3507180',
                'kabupaten_id' => '3507',
                'nama' => 'Kromengan'
            ],
            [
                'id' => '3507190',
                'kabupaten_id' => '3507',
                'nama' => 'Ngajum'
            ],
            [
                'id' => '3507200',
                'kabupaten_id' => '3507',
                'nama' => 'Wonosari'
            ],
            [
                'id' => '3507210',
                'kabupaten_id' => '3507',
                'nama' => 'Wagir'
            ],
            [
                'id' => '3507220',
                'kabupaten_id' => '3507',
                'nama' => 'Pakisaji'
            ],
            [
                'id' => '3507230',
                'kabupaten_id' => '3507',
                'nama' => 'Tajinan'
            ],
            [
                'id' => '3507240',
                'kabupaten_id' => '3507',
                'nama' => 'Tumpang'
            ],
            [
                'id' => '3507250',
                'kabupaten_id' => '3507',
                'nama' => 'Pakis'
            ],
            [
                'id' => '3507260',
                'kabupaten_id' => '3507',
                'nama' => 'Jabung'
            ],
            [
                'id' => '3507270',
                'kabupaten_id' => '3507',
                'nama' => 'Lawang'
            ],
            [
                'id' => '3507280',
                'kabupaten_id' => '3507',
                'nama' => 'Singosari'
            ],
            [
                'id' => '3507290',
                'kabupaten_id' => '3507',
                'nama' => 'Karangploso'
            ],
            [
                'id' => '3507300',
                'kabupaten_id' => '3507',
                'nama' => 'Dau'
            ],
            [
                'id' => '3507310',
                'kabupaten_id' => '3507',
                'nama' => 'Pujon'
            ],
            [
                'id' => '3507320',
                'kabupaten_id' => '3507',
                'nama' => 'Ngantang'
            ],
            [
                'id' => '3507330',
                'kabupaten_id' => '3507',
                'nama' => 'Kasembon'
            ],
            [
                'id' => '3508010',
                'kabupaten_id' => '3508',
                'nama' => 'Tempursari'
            ],
            [
                'id' => '3508020',
                'kabupaten_id' => '3508',
                'nama' => 'Pronojiwo'
            ],
            [
                'id' => '3508030',
                'kabupaten_id' => '3508',
                'nama' => 'Candipuro'
            ],
            [
                'id' => '3508040',
                'kabupaten_id' => '3508',
                'nama' => 'Pasirian'
            ],
            [
                'id' => '3508050',
                'kabupaten_id' => '3508',
                'nama' => 'Tempeh'
            ],
            [
                'id' => '3508060',
                'kabupaten_id' => '3508',
                'nama' => 'Lumajang'
            ],
            [
                'id' => '3508061',
                'kabupaten_id' => '3508',
                'nama' => 'Sumbersuko'
            ],
            [
                'id' => '3508070',
                'kabupaten_id' => '3508',
                'nama' => 'Tekung'
            ],
            [
                'id' => '3508080',
                'kabupaten_id' => '3508',
                'nama' => 'Kunir'
            ],
            [
                'id' => '3508090',
                'kabupaten_id' => '3508',
                'nama' => 'Yosowilangun'
            ],
            [
                'id' => '3508100',
                'kabupaten_id' => '3508',
                'nama' => 'Rowokangkung'
            ],
            [
                'id' => '3508110',
                'kabupaten_id' => '3508',
                'nama' => 'Jatiroto'
            ],
            [
                'id' => '3508120',
                'kabupaten_id' => '3508',
                'nama' => 'Randuagung'
            ],
            [
                'id' => '3508130',
                'kabupaten_id' => '3508',
                'nama' => 'Sukodono'
            ],
            [
                'id' => '3508140',
                'kabupaten_id' => '3508',
                'nama' => 'Padang'
            ],
            [
                'id' => '3508150',
                'kabupaten_id' => '3508',
                'nama' => 'Pasrujambe'
            ],
            [
                'id' => '3508160',
                'kabupaten_id' => '3508',
                'nama' => 'Senduro'
            ],
            [
                'id' => '3508170',
                'kabupaten_id' => '3508',
                'nama' => 'Gucialit'
            ],
            [
                'id' => '3508180',
                'kabupaten_id' => '3508',
                'nama' => 'Kedungjajang'
            ],
            [
                'id' => '3508190',
                'kabupaten_id' => '3508',
                'nama' => 'Klakah'
            ],
            [
                'id' => '3508200',
                'kabupaten_id' => '3508',
                'nama' => 'Ranuyoso'
            ],
            [
                'id' => '3509010',
                'kabupaten_id' => '3509',
                'nama' => 'Kencong'
            ],
            [
                'id' => '3509020',
                'kabupaten_id' => '3509',
                'nama' => 'Gumuk Mas'
            ],
            [
                'id' => '3509030',
                'kabupaten_id' => '3509',
                'nama' => 'Puger'
            ],
            [
                'id' => '3509040',
                'kabupaten_id' => '3509',
                'nama' => 'Wuluhan'
            ],
            [
                'id' => '3509050',
                'kabupaten_id' => '3509',
                'nama' => 'Ambulu'
            ],
            [
                'id' => '3509060',
                'kabupaten_id' => '3509',
                'nama' => 'Tempurejo'
            ],
            [
                'id' => '3509070',
                'kabupaten_id' => '3509',
                'nama' => 'Silo'
            ],
            [
                'id' => '3509080',
                'kabupaten_id' => '3509',
                'nama' => 'Mayang'
            ],
            [
                'id' => '3509090',
                'kabupaten_id' => '3509',
                'nama' => 'Mumbulsari'
            ],
            [
                'id' => '3509100',
                'kabupaten_id' => '3509',
                'nama' => 'Jenggawah'
            ],
            [
                'id' => '3509110',
                'kabupaten_id' => '3509',
                'nama' => 'Ajung'
            ],
            [
                'id' => '3509120',
                'kabupaten_id' => '3509',
                'nama' => 'Rambipuji'
            ],
            [
                'id' => '3509130',
                'kabupaten_id' => '3509',
                'nama' => 'Balung'
            ],
            [
                'id' => '3509140',
                'kabupaten_id' => '3509',
                'nama' => 'Umbulsari'
            ],
            [
                'id' => '3509150',
                'kabupaten_id' => '3509',
                'nama' => 'Semboro'
            ],
            [
                'id' => '3509160',
                'kabupaten_id' => '3509',
                'nama' => 'Jombang'
            ],
            [
                'id' => '3509170',
                'kabupaten_id' => '3509',
                'nama' => 'Sumber Baru'
            ],
            [
                'id' => '3509180',
                'kabupaten_id' => '3509',
                'nama' => 'Tanggul'
            ],
            [
                'id' => '3509190',
                'kabupaten_id' => '3509',
                'nama' => 'Bangsalsari'
            ],
            [
                'id' => '3509200',
                'kabupaten_id' => '3509',
                'nama' => 'Panti'
            ],
            [
                'id' => '3509210',
                'kabupaten_id' => '3509',
                'nama' => 'Sukorambi'
            ],
            [
                'id' => '3509220',
                'kabupaten_id' => '3509',
                'nama' => 'Arjasa'
            ],
            [
                'id' => '3509230',
                'kabupaten_id' => '3509',
                'nama' => 'Pakusari'
            ],
            [
                'id' => '3509240',
                'kabupaten_id' => '3509',
                'nama' => 'Kalisat'
            ],
            [
                'id' => '3509250',
                'kabupaten_id' => '3509',
                'nama' => 'Ledokombo'
            ],
            [
                'id' => '3509260',
                'kabupaten_id' => '3509',
                'nama' => 'Sumberjambe'
            ],
            [
                'id' => '3509270',
                'kabupaten_id' => '3509',
                'nama' => 'Sukowono'
            ],
            [
                'id' => '3509280',
                'kabupaten_id' => '3509',
                'nama' => 'Jelbuk'
            ],
            [
                'id' => '3509710',
                'kabupaten_id' => '3509',
                'nama' => 'Kaliwates'
            ],
            [
                'id' => '3509720',
                'kabupaten_id' => '3509',
                'nama' => 'Sumbersari'
            ],
            [
                'id' => '3509730',
                'kabupaten_id' => '3509',
                'nama' => 'Patrang'
            ],
            [
                'id' => '3510010',
                'kabupaten_id' => '3510',
                'nama' => 'Pesanggaran'
            ],
            [
                'id' => '3510011',
                'kabupaten_id' => '3510',
                'nama' => 'Siliragung'
            ],
            [
                'id' => '3510020',
                'kabupaten_id' => '3510',
                'nama' => 'Bangorejo'
            ],
            [
                'id' => '3510030',
                'kabupaten_id' => '3510',
                'nama' => 'Purwoharjo'
            ],
            [
                'id' => '3510040',
                'kabupaten_id' => '3510',
                'nama' => 'Tegaldlimo'
            ],
            [
                'id' => '3510050',
                'kabupaten_id' => '3510',
                'nama' => 'Muncar'
            ],
            [
                'id' => '3510060',
                'kabupaten_id' => '3510',
                'nama' => 'Cluring'
            ],
            [
                'id' => '3510070',
                'kabupaten_id' => '3510',
                'nama' => 'Gambiran'
            ],
            [
                'id' => '3510071',
                'kabupaten_id' => '3510',
                'nama' => 'Tegalsari'
            ],
            [
                'id' => '3510080',
                'kabupaten_id' => '3510',
                'nama' => 'Glenmore'
            ],
            [
                'id' => '3510090',
                'kabupaten_id' => '3510',
                'nama' => 'Kalibaru'
            ],
            [
                'id' => '3510100',
                'kabupaten_id' => '3510',
                'nama' => 'Genteng'
            ],
            [
                'id' => '3510110',
                'kabupaten_id' => '3510',
                'nama' => 'Srono'
            ],
            [
                'id' => '3510120',
                'kabupaten_id' => '3510',
                'nama' => 'Rogojampi'
            ],
            [
                'id' => '3510130',
                'kabupaten_id' => '3510',
                'nama' => 'Kabat'
            ],
            [
                'id' => '3510140',
                'kabupaten_id' => '3510',
                'nama' => 'Singojuruh'
            ],
            [
                'id' => '3510150',
                'kabupaten_id' => '3510',
                'nama' => 'Sempu'
            ],
            [
                'id' => '3510160',
                'kabupaten_id' => '3510',
                'nama' => 'Songgon'
            ],
            [
                'id' => '3510170',
                'kabupaten_id' => '3510',
                'nama' => 'Glagah'
            ],
            [
                'id' => '3510171',
                'kabupaten_id' => '3510',
                'nama' => 'Licin'
            ],
            [
                'id' => '3510180',
                'kabupaten_id' => '3510',
                'nama' => 'Banyuwangi'
            ],
            [
                'id' => '3510190',
                'kabupaten_id' => '3510',
                'nama' => 'Giri'
            ],
            [
                'id' => '3510200',
                'kabupaten_id' => '3510',
                'nama' => 'Kalipuro'
            ],
            [
                'id' => '3510210',
                'kabupaten_id' => '3510',
                'nama' => 'Wongsorejo'
            ],
            [
                'id' => '3511010',
                'kabupaten_id' => '3511',
                'nama' => 'Maesan'
            ],
            [
                'id' => '3511020',
                'kabupaten_id' => '3511',
                'nama' => 'Grujugan'
            ],
            [
                'id' => '3511030',
                'kabupaten_id' => '3511',
                'nama' => 'Tamanan'
            ],
            [
                'id' => '3511031',
                'kabupaten_id' => '3511',
                'nama' => 'Jambesari Darus Sholah'
            ],
            [
                'id' => '3511040',
                'kabupaten_id' => '3511',
                'nama' => 'Pujer'
            ],
            [
                'id' => '3511050',
                'kabupaten_id' => '3511',
                'nama' => 'Tlogosari'
            ],
            [
                'id' => '3511060',
                'kabupaten_id' => '3511',
                'nama' => 'Sukosari'
            ],
            [
                'id' => '3511061',
                'kabupaten_id' => '3511',
                'nama' => 'Sumber Wringin'
            ],
            [
                'id' => '3511070',
                'kabupaten_id' => '3511',
                'nama' => 'Tapen'
            ],
            [
                'id' => '3511080',
                'kabupaten_id' => '3511',
                'nama' => 'Wonosari'
            ],
            [
                'id' => '3511090',
                'kabupaten_id' => '3511',
                'nama' => 'Tenggarang'
            ],
            [
                'id' => '3511100',
                'kabupaten_id' => '3511',
                'nama' => 'Bondowoso'
            ],
            [
                'id' => '3511110',
                'kabupaten_id' => '3511',
                'nama' => 'Curah Dami'
            ],
            [
                'id' => '3511111',
                'kabupaten_id' => '3511',
                'nama' => 'Binakal'
            ],
            [
                'id' => '3511120',
                'kabupaten_id' => '3511',
                'nama' => 'Pakem'
            ],
            [
                'id' => '3511130',
                'kabupaten_id' => '3511',
                'nama' => 'Wringin'
            ],
            [
                'id' => '3511140',
                'kabupaten_id' => '3511',
                'nama' => 'Tegalampel'
            ],
            [
                'id' => '3511141',
                'kabupaten_id' => '3511',
                'nama' => 'Taman Krocok'
            ],
            [
                'id' => '3511150',
                'kabupaten_id' => '3511',
                'nama' => 'Klabang'
            ],
            [
                'id' => '3511151',
                'kabupaten_id' => '3511',
                'nama' => 'Sempol'
            ],
            [
                'id' => '3511152',
                'kabupaten_id' => '3511',
                'nama' => 'Botolinggo'
            ],
            [
                'id' => '3511160',
                'kabupaten_id' => '3511',
                'nama' => 'Prajekan'
            ],
            [
                'id' => '3511170',
                'kabupaten_id' => '3511',
                'nama' => 'Cermee'
            ],
            [
                'id' => '3512010',
                'kabupaten_id' => '3512',
                'nama' => 'Sumbermalang'
            ],
            [
                'id' => '3512020',
                'kabupaten_id' => '3512',
                'nama' => 'Jatibanteng'
            ],
            [
                'id' => '3512030',
                'kabupaten_id' => '3512',
                'nama' => 'Banyuglugur'
            ],
            [
                'id' => '3512040',
                'kabupaten_id' => '3512',
                'nama' => 'Besuki'
            ],
            [
                'id' => '3512050',
                'kabupaten_id' => '3512',
                'nama' => 'Suboh'
            ],
            [
                'id' => '3512060',
                'kabupaten_id' => '3512',
                'nama' => 'Mlandingan'
            ],
            [
                'id' => '3512070',
                'kabupaten_id' => '3512',
                'nama' => 'Bungatan'
            ],
            [
                'id' => '3512080',
                'kabupaten_id' => '3512',
                'nama' => 'Kendit'
            ],
            [
                'id' => '3512090',
                'kabupaten_id' => '3512',
                'nama' => 'Panarukan'
            ],
            [
                'id' => '3512100',
                'kabupaten_id' => '3512',
                'nama' => 'Situbondo'
            ],
            [
                'id' => '3512110',
                'kabupaten_id' => '3512',
                'nama' => 'Mangaran'
            ],
            [
                'id' => '3512120',
                'kabupaten_id' => '3512',
                'nama' => 'Panji'
            ],
            [
                'id' => '3512130',
                'kabupaten_id' => '3512',
                'nama' => 'Kapongan'
            ],
            [
                'id' => '3512140',
                'kabupaten_id' => '3512',
                'nama' => 'Arjasa'
            ],
            [
                'id' => '3512150',
                'kabupaten_id' => '3512',
                'nama' => 'Jangkar'
            ],
            [
                'id' => '3512160',
                'kabupaten_id' => '3512',
                'nama' => 'Asembagus'
            ],
            [
                'id' => '3512170',
                'kabupaten_id' => '3512',
                'nama' => 'Banyuputih'
            ],
            [
                'id' => '3513010',
                'kabupaten_id' => '3513',
                'nama' => 'Sukapura'
            ],
            [
                'id' => '3513020',
                'kabupaten_id' => '3513',
                'nama' => 'Sumber'
            ],
            [
                'id' => '3513030',
                'kabupaten_id' => '3513',
                'nama' => 'Kuripan'
            ],
            [
                'id' => '3513040',
                'kabupaten_id' => '3513',
                'nama' => 'Bantaran'
            ],
            [
                'id' => '3513050',
                'kabupaten_id' => '3513',
                'nama' => 'Leces'
            ],
            [
                'id' => '3513060',
                'kabupaten_id' => '3513',
                'nama' => 'Tegalsiwalan'
            ],
            [
                'id' => '3513070',
                'kabupaten_id' => '3513',
                'nama' => 'Banyuanyar'
            ],
            [
                'id' => '3513080',
                'kabupaten_id' => '3513',
                'nama' => 'Tiris'
            ],
            [
                'id' => '3513090',
                'kabupaten_id' => '3513',
                'nama' => 'Krucil'
            ],
            [
                'id' => '3513100',
                'kabupaten_id' => '3513',
                'nama' => 'Gading'
            ],
            [
                'id' => '3513110',
                'kabupaten_id' => '3513',
                'nama' => 'Pakuniran'
            ],
            [
                'id' => '3513120',
                'kabupaten_id' => '3513',
                'nama' => 'Kotaanyar'
            ],
            [
                'id' => '3513130',
                'kabupaten_id' => '3513',
                'nama' => 'Paiton'
            ],
            [
                'id' => '3513140',
                'kabupaten_id' => '3513',
                'nama' => 'Besuk'
            ],
            [
                'id' => '3513150',
                'kabupaten_id' => '3513',
                'nama' => 'Kraksaan'
            ],
            [
                'id' => '3513160',
                'kabupaten_id' => '3513',
                'nama' => 'Krejengan'
            ],
            [
                'id' => '3513170',
                'kabupaten_id' => '3513',
                'nama' => 'Pajarakan'
            ],
            [
                'id' => '3513180',
                'kabupaten_id' => '3513',
                'nama' => 'Maron'
            ],
            [
                'id' => '3513190',
                'kabupaten_id' => '3513',
                'nama' => 'Gending'
            ],
            [
                'id' => '3513200',
                'kabupaten_id' => '3513',
                'nama' => 'Dringu'
            ],
            [
                'id' => '3513210',
                'kabupaten_id' => '3513',
                'nama' => 'Wonomerto'
            ],
            [
                'id' => '3513220',
                'kabupaten_id' => '3513',
                'nama' => 'Lumbang'
            ],
            [
                'id' => '3513230',
                'kabupaten_id' => '3513',
                'nama' => 'Tongas'
            ],
            [
                'id' => '3513240',
                'kabupaten_id' => '3513',
                'nama' => 'Sumberasih'
            ],
            [
                'id' => '3514010',
                'kabupaten_id' => '3514',
                'nama' => 'Purwodadi'
            ],
            [
                'id' => '3514020',
                'kabupaten_id' => '3514',
                'nama' => 'Tutur'
            ],
            [
                'id' => '3514030',
                'kabupaten_id' => '3514',
                'nama' => 'Puspo'
            ],
            [
                'id' => '3514040',
                'kabupaten_id' => '3514',
                'nama' => 'Tosari'
            ],
            [
                'id' => '3514050',
                'kabupaten_id' => '3514',
                'nama' => 'Lumbang'
            ],
            [
                'id' => '3514060',
                'kabupaten_id' => '3514',
                'nama' => 'Pasrepan'
            ],
            [
                'id' => '3514070',
                'kabupaten_id' => '3514',
                'nama' => 'Kejayan'
            ],
            [
                'id' => '3514080',
                'kabupaten_id' => '3514',
                'nama' => 'Wonorejo'
            ],
            [
                'id' => '3514090',
                'kabupaten_id' => '3514',
                'nama' => 'Purwosari'
            ],
            [
                'id' => '3514100',
                'kabupaten_id' => '3514',
                'nama' => 'Prigen'
            ],
            [
                'id' => '3514110',
                'kabupaten_id' => '3514',
                'nama' => 'Sukorejo'
            ],
            [
                'id' => '3514120',
                'kabupaten_id' => '3514',
                'nama' => 'Pandaan'
            ],
            [
                'id' => '3514130',
                'kabupaten_id' => '3514',
                'nama' => 'Gempol'
            ],
            [
                'id' => '3514140',
                'kabupaten_id' => '3514',
                'nama' => 'Beji'
            ],
            [
                'id' => '3514150',
                'kabupaten_id' => '3514',
                'nama' => 'Bangil'
            ],
            [
                'id' => '3514160',
                'kabupaten_id' => '3514',
                'nama' => 'Rembang'
            ],
            [
                'id' => '3514170',
                'kabupaten_id' => '3514',
                'nama' => 'Kraton'
            ],
            [
                'id' => '3514180',
                'kabupaten_id' => '3514',
                'nama' => 'Pohjentrek'
            ],
            [
                'id' => '3514190',
                'kabupaten_id' => '3514',
                'nama' => 'Gondang Wetan'
            ],
            [
                'id' => '3514200',
                'kabupaten_id' => '3514',
                'nama' => 'Rejoso'
            ],
            [
                'id' => '3514210',
                'kabupaten_id' => '3514',
                'nama' => 'Winongan'
            ],
            [
                'id' => '3514220',
                'kabupaten_id' => '3514',
                'nama' => 'Grati'
            ],
            [
                'id' => '3514230',
                'kabupaten_id' => '3514',
                'nama' => 'Lekok'
            ],
            [
                'id' => '3514240',
                'kabupaten_id' => '3514',
                'nama' => 'Nguling'
            ],
            [
                'id' => '3515010',
                'kabupaten_id' => '3515',
                'nama' => 'Tarik'
            ],
            [
                'id' => '3515020',
                'kabupaten_id' => '3515',
                'nama' => 'Prambon'
            ],
            [
                'id' => '3515030',
                'kabupaten_id' => '3515',
                'nama' => 'Krembung'
            ],
            [
                'id' => '3515040',
                'kabupaten_id' => '3515',
                'nama' => 'Porong'
            ],
            [
                'id' => '3515050',
                'kabupaten_id' => '3515',
                'nama' => 'Jabon'
            ],
            [
                'id' => '3515060',
                'kabupaten_id' => '3515',
                'nama' => 'Tanggulangin'
            ],
            [
                'id' => '3515070',
                'kabupaten_id' => '3515',
                'nama' => 'Candi'
            ],
            [
                'id' => '3515080',
                'kabupaten_id' => '3515',
                'nama' => 'Tulangan'
            ],
            [
                'id' => '3515090',
                'kabupaten_id' => '3515',
                'nama' => 'Wonoayu'
            ],
            [
                'id' => '3515100',
                'kabupaten_id' => '3515',
                'nama' => 'Sukodono'
            ],
            [
                'id' => '3515110',
                'kabupaten_id' => '3515',
                'nama' => 'Sidoarjo'
            ],
            [
                'id' => '3515120',
                'kabupaten_id' => '3515',
                'nama' => 'Buduran'
            ],
            [
                'id' => '3515130',
                'kabupaten_id' => '3515',
                'nama' => 'Sedati'
            ],
            [
                'id' => '3515140',
                'kabupaten_id' => '3515',
                'nama' => 'Waru'
            ],
            [
                'id' => '3515150',
                'kabupaten_id' => '3515',
                'nama' => 'Gedangan'
            ],
            [
                'id' => '3515160',
                'kabupaten_id' => '3515',
                'nama' => 'Taman'
            ],
            [
                'id' => '3515170',
                'kabupaten_id' => '3515',
                'nama' => 'Krian'
            ],
            [
                'id' => '3515180',
                'kabupaten_id' => '3515',
                'nama' => 'Balong Bendo'
            ],
            [
                'id' => '3516010',
                'kabupaten_id' => '3516',
                'nama' => 'Jatirejo'
            ],
            [
                'id' => '3516020',
                'kabupaten_id' => '3516',
                'nama' => 'Gondang'
            ],
            [
                'id' => '3516030',
                'kabupaten_id' => '3516',
                'nama' => 'Pacet'
            ],
            [
                'id' => '3516040',
                'kabupaten_id' => '3516',
                'nama' => 'Trawas'
            ],
            [
                'id' => '3516050',
                'kabupaten_id' => '3516',
                'nama' => 'Ngoro'
            ],
            [
                'id' => '3516060',
                'kabupaten_id' => '3516',
                'nama' => 'Pungging'
            ],
            [
                'id' => '3516070',
                'kabupaten_id' => '3516',
                'nama' => 'Kutorejo'
            ],
            [
                'id' => '3516080',
                'kabupaten_id' => '3516',
                'nama' => 'Mojosari'
            ],
            [
                'id' => '3516090',
                'kabupaten_id' => '3516',
                'nama' => 'Bangsal'
            ],
            [
                'id' => '3516091',
                'kabupaten_id' => '3516',
                'nama' => 'Mojoanyar'
            ],
            [
                'id' => '3516100',
                'kabupaten_id' => '3516',
                'nama' => 'Dlanggu'
            ],
            [
                'id' => '3516110',
                'kabupaten_id' => '3516',
                'nama' => 'Puri'
            ],
            [
                'id' => '3516120',
                'kabupaten_id' => '3516',
                'nama' => 'Trowulan'
            ],
            [
                'id' => '3516130',
                'kabupaten_id' => '3516',
                'nama' => 'Sooko'
            ],
            [
                'id' => '3516140',
                'kabupaten_id' => '3516',
                'nama' => 'Gedek'
            ],
            [
                'id' => '3516150',
                'kabupaten_id' => '3516',
                'nama' => 'Kemlagi'
            ],
            [
                'id' => '3516160',
                'kabupaten_id' => '3516',
                'nama' => 'Jetis'
            ],
            [
                'id' => '3516170',
                'kabupaten_id' => '3516',
                'nama' => 'Dawar Blandong'
            ],
            [
                'id' => '3517010',
                'kabupaten_id' => '3517',
                'nama' => 'Bandar Kedung Mulyo'
            ],
            [
                'id' => '3517020',
                'kabupaten_id' => '3517',
                'nama' => 'Perak'
            ],
            [
                'id' => '3517030',
                'kabupaten_id' => '3517',
                'nama' => 'Gudo'
            ],
            [
                'id' => '3517040',
                'kabupaten_id' => '3517',
                'nama' => 'Diwek'
            ],
            [
                'id' => '3517050',
                'kabupaten_id' => '3517',
                'nama' => 'Ngoro'
            ],
            [
                'id' => '3517060',
                'kabupaten_id' => '3517',
                'nama' => 'Mojowarno'
            ],
            [
                'id' => '3517070',
                'kabupaten_id' => '3517',
                'nama' => 'Bareng'
            ],
            [
                'id' => '3517080',
                'kabupaten_id' => '3517',
                'nama' => 'Wonosalam'
            ],
            [
                'id' => '3517090',
                'kabupaten_id' => '3517',
                'nama' => 'Mojoagung'
            ],
            [
                'id' => '3517100',
                'kabupaten_id' => '3517',
                'nama' => 'Sumobito'
            ],
            [
                'id' => '3517110',
                'kabupaten_id' => '3517',
                'nama' => 'Jogo Roto'
            ],
            [
                'id' => '3517120',
                'kabupaten_id' => '3517',
                'nama' => 'Peterongan'
            ],
            [
                'id' => '3517130',
                'kabupaten_id' => '3517',
                'nama' => 'Jombang'
            ],
            [
                'id' => '3517140',
                'kabupaten_id' => '3517',
                'nama' => 'Megaluh'
            ],
            [
                'id' => '3517150',
                'kabupaten_id' => '3517',
                'nama' => 'Tembelang'
            ],
            [
                'id' => '3517160',
                'kabupaten_id' => '3517',
                'nama' => 'Kesamben'
            ],
            [
                'id' => '3517170',
                'kabupaten_id' => '3517',
                'nama' => 'Kudu'
            ],
            [
                'id' => '3517171',
                'kabupaten_id' => '3517',
                'nama' => 'Ngusikan'
            ],
            [
                'id' => '3517180',
                'kabupaten_id' => '3517',
                'nama' => 'Ploso'
            ],
            [
                'id' => '3517190',
                'kabupaten_id' => '3517',
                'nama' => 'Kabuh'
            ],
            [
                'id' => '3517200',
                'kabupaten_id' => '3517',
                'nama' => 'Plandaan'
            ],
            [
                'id' => '3518010',
                'kabupaten_id' => '3518',
                'nama' => 'Sawahan'
            ],
            [
                'id' => '3518020',
                'kabupaten_id' => '3518',
                'nama' => 'Ngetos'
            ],
            [
                'id' => '3518030',
                'kabupaten_id' => '3518',
                'nama' => 'Berbek'
            ],
            [
                'id' => '3518040',
                'kabupaten_id' => '3518',
                'nama' => 'Loceret'
            ],
            [
                'id' => '3518050',
                'kabupaten_id' => '3518',
                'nama' => 'Pace'
            ],
            [
                'id' => '3518060',
                'kabupaten_id' => '3518',
                'nama' => 'Tanjunganom'
            ],
            [
                'id' => '3518070',
                'kabupaten_id' => '3518',
                'nama' => 'Prambon'
            ],
            [
                'id' => '3518080',
                'kabupaten_id' => '3518',
                'nama' => 'Ngronggot'
            ],
            [
                'id' => '3518090',
                'kabupaten_id' => '3518',
                'nama' => 'Kertosono'
            ],
            [
                'id' => '3518100',
                'kabupaten_id' => '3518',
                'nama' => 'Patianrowo'
            ],
            [
                'id' => '3518110',
                'kabupaten_id' => '3518',
                'nama' => 'Baron'
            ],
            [
                'id' => '3518120',
                'kabupaten_id' => '3518',
                'nama' => 'Gondang'
            ],
            [
                'id' => '3518130',
                'kabupaten_id' => '3518',
                'nama' => 'Sukomoro'
            ],
            [
                'id' => '3518140',
                'kabupaten_id' => '3518',
                'nama' => 'Nganjuk'
            ],
            [
                'id' => '3518150',
                'kabupaten_id' => '3518',
                'nama' => 'Bagor'
            ],
            [
                'id' => '3518160',
                'kabupaten_id' => '3518',
                'nama' => 'Wilangan'
            ],
            [
                'id' => '3518170',
                'kabupaten_id' => '3518',
                'nama' => 'Rejoso'
            ],
            [
                'id' => '3518180',
                'kabupaten_id' => '3518',
                'nama' => 'Ngluyu'
            ],
            [
                'id' => '3518190',
                'kabupaten_id' => '3518',
                'nama' => 'Lengkong'
            ],
            [
                'id' => '3518200',
                'kabupaten_id' => '3518',
                'nama' => 'Jatikalen'
            ],
            [
                'id' => '3519010',
                'kabupaten_id' => '3519',
                'nama' => 'Kebonsari'
            ],
            [
                'id' => '3519020',
                'kabupaten_id' => '3519',
                'nama' => 'Geger'
            ],
            [
                'id' => '3519030',
                'kabupaten_id' => '3519',
                'nama' => 'Dolopo'
            ],
            [
                'id' => '3519040',
                'kabupaten_id' => '3519',
                'nama' => 'Dagangan'
            ],
            [
                'id' => '3519050',
                'kabupaten_id' => '3519',
                'nama' => 'Wungu'
            ],
            [
                'id' => '3519060',
                'kabupaten_id' => '3519',
                'nama' => 'Kare'
            ],
            [
                'id' => '3519070',
                'kabupaten_id' => '3519',
                'nama' => 'Gemarang'
            ],
            [
                'id' => '3519080',
                'kabupaten_id' => '3519',
                'nama' => 'Saradan'
            ],
            [
                'id' => '3519090',
                'kabupaten_id' => '3519',
                'nama' => 'Pilangkenceng'
            ],
            [
                'id' => '3519100',
                'kabupaten_id' => '3519',
                'nama' => 'Mejayan'
            ],
            [
                'id' => '3519110',
                'kabupaten_id' => '3519',
                'nama' => 'Wonoasri'
            ],
            [
                'id' => '3519120',
                'kabupaten_id' => '3519',
                'nama' => 'Balerejo'
            ],
            [
                'id' => '3519130',
                'kabupaten_id' => '3519',
                'nama' => 'Madiun'
            ],
            [
                'id' => '3519140',
                'kabupaten_id' => '3519',
                'nama' => 'Sawahan'
            ],
            [
                'id' => '3519150',
                'kabupaten_id' => '3519',
                'nama' => 'Jiwan'
            ],
            [
                'id' => '3520010',
                'kabupaten_id' => '3520',
                'nama' => 'Poncol'
            ],
            [
                'id' => '3520020',
                'kabupaten_id' => '3520',
                'nama' => 'Parang'
            ],
            [
                'id' => '3520030',
                'kabupaten_id' => '3520',
                'nama' => 'Lembeyan'
            ],
            [
                'id' => '3520040',
                'kabupaten_id' => '3520',
                'nama' => 'Takeran'
            ],
            [
                'id' => '3520041',
                'kabupaten_id' => '3520',
                'nama' => 'Nguntoronadi'
            ],
            [
                'id' => '3520050',
                'kabupaten_id' => '3520',
                'nama' => 'Kawedanan'
            ],
            [
                'id' => '3520060',
                'kabupaten_id' => '3520',
                'nama' => 'Magetan'
            ],
            [
                'id' => '3520061',
                'kabupaten_id' => '3520',
                'nama' => 'Ngariboyo'
            ],
            [
                'id' => '3520070',
                'kabupaten_id' => '3520',
                'nama' => 'Plaosan'
            ],
            [
                'id' => '3520071',
                'kabupaten_id' => '3520',
                'nama' => 'Sidorejo'
            ],
            [
                'id' => '3520080',
                'kabupaten_id' => '3520',
                'nama' => 'Panekan'
            ],
            [
                'id' => '3520090',
                'kabupaten_id' => '3520',
                'nama' => 'Sukomoro'
            ],
            [
                'id' => '3520100',
                'kabupaten_id' => '3520',
                'nama' => 'Bendo'
            ],
            [
                'id' => '3520110',
                'kabupaten_id' => '3520',
                'nama' => 'Maospati'
            ],
            [
                'id' => '3520120',
                'kabupaten_id' => '3520',
                'nama' => 'Karangrejo'
            ],
            [
                'id' => '3520121',
                'kabupaten_id' => '3520',
                'nama' => 'Karas'
            ],
            [
                'id' => '3520130',
                'kabupaten_id' => '3520',
                'nama' => 'Barat'
            ],
            [
                'id' => '3520131',
                'kabupaten_id' => '3520',
                'nama' => 'Kartoharjo'
            ],
            [
                'id' => '3521010',
                'kabupaten_id' => '3521',
                'nama' => 'Sine'
            ],
            [
                'id' => '3521020',
                'kabupaten_id' => '3521',
                'nama' => 'Ngrambe'
            ],
            [
                'id' => '3521030',
                'kabupaten_id' => '3521',
                'nama' => 'Jogorogo'
            ],
            [
                'id' => '3521040',
                'kabupaten_id' => '3521',
                'nama' => 'Kendal'
            ],
            [
                'id' => '3521050',
                'kabupaten_id' => '3521',
                'nama' => 'Geneng'
            ],
            [
                'id' => '3521051',
                'kabupaten_id' => '3521',
                'nama' => 'Gerih'
            ],
            [
                'id' => '3521060',
                'kabupaten_id' => '3521',
                'nama' => 'Kwadungan'
            ],
            [
                'id' => '3521070',
                'kabupaten_id' => '3521',
                'nama' => 'Pangkur'
            ],
            [
                'id' => '3521080',
                'kabupaten_id' => '3521',
                'nama' => 'Karangjati'
            ],
            [
                'id' => '3521090',
                'kabupaten_id' => '3521',
                'nama' => 'Bringin'
            ],
            [
                'id' => '3521100',
                'kabupaten_id' => '3521',
                'nama' => 'Padas'
            ],
            [
                'id' => '3521101',
                'kabupaten_id' => '3521',
                'nama' => 'Kasreman'
            ],
            [
                'id' => '3521110',
                'kabupaten_id' => '3521',
                'nama' => 'Ngawi'
            ],
            [
                'id' => '3521120',
                'kabupaten_id' => '3521',
                'nama' => 'Paron'
            ],
            [
                'id' => '3521130',
                'kabupaten_id' => '3521',
                'nama' => 'Kedunggalar'
            ],
            [
                'id' => '3521140',
                'kabupaten_id' => '3521',
                'nama' => 'Pitu'
            ],
            [
                'id' => '3521150',
                'kabupaten_id' => '3521',
                'nama' => 'Widodaren'
            ],
            [
                'id' => '3521160',
                'kabupaten_id' => '3521',
                'nama' => 'Mantingan'
            ],
            [
                'id' => '3521170',
                'kabupaten_id' => '3521',
                'nama' => 'Karanganyar'
            ],
            [
                'id' => '3522010',
                'kabupaten_id' => '3522',
                'nama' => 'Margomulyo'
            ],
            [
                'id' => '3522020',
                'kabupaten_id' => '3522',
                'nama' => 'Ngraho'
            ],
            [
                'id' => '3522030',
                'kabupaten_id' => '3522',
                'nama' => 'Tambakrejo'
            ],
            [
                'id' => '3522040',
                'kabupaten_id' => '3522',
                'nama' => 'Ngambon'
            ],
            [
                'id' => '3522041',
                'kabupaten_id' => '3522',
                'nama' => 'Sekar'
            ],
            [
                'id' => '3522050',
                'kabupaten_id' => '3522',
                'nama' => 'Bubulan'
            ],
            [
                'id' => '3522051',
                'kabupaten_id' => '3522',
                'nama' => 'Gondang'
            ],
            [
                'id' => '3522060',
                'kabupaten_id' => '3522',
                'nama' => 'Temayang'
            ],
            [
                'id' => '3522070',
                'kabupaten_id' => '3522',
                'nama' => 'Sugihwaras'
            ],
            [
                'id' => '3522080',
                'kabupaten_id' => '3522',
                'nama' => 'Kedungadem'
            ],
            [
                'id' => '3522090',
                'kabupaten_id' => '3522',
                'nama' => 'Kepoh Baru'
            ],
            [
                'id' => '3522100',
                'kabupaten_id' => '3522',
                'nama' => 'Baureno'
            ],
            [
                'id' => '3522110',
                'kabupaten_id' => '3522',
                'nama' => 'Kanor'
            ],
            [
                'id' => '3522120',
                'kabupaten_id' => '3522',
                'nama' => 'Sumberejo'
            ],
            [
                'id' => '3522130',
                'kabupaten_id' => '3522',
                'nama' => 'Balen'
            ],
            [
                'id' => '3522140',
                'kabupaten_id' => '3522',
                'nama' => 'Sukosewu'
            ],
            [
                'id' => '3522150',
                'kabupaten_id' => '3522',
                'nama' => 'Kapas'
            ],
            [
                'id' => '3522160',
                'kabupaten_id' => '3522',
                'nama' => 'Bojonegoro'
            ],
            [
                'id' => '3522170',
                'kabupaten_id' => '3522',
                'nama' => 'Trucuk'
            ],
            [
                'id' => '3522180',
                'kabupaten_id' => '3522',
                'nama' => 'Dander'
            ],
            [
                'id' => '3522190',
                'kabupaten_id' => '3522',
                'nama' => 'Ngasem'
            ],
            [
                'id' => '3522191',
                'kabupaten_id' => '3522',
                'nama' => 'Gayam'
            ],
            [
                'id' => '3522200',
                'kabupaten_id' => '3522',
                'nama' => 'Kalitidu'
            ],
            [
                'id' => '3522210',
                'kabupaten_id' => '3522',
                'nama' => 'Malo'
            ],
            [
                'id' => '3522220',
                'kabupaten_id' => '3522',
                'nama' => 'Purwosari'
            ],
            [
                'id' => '3522230',
                'kabupaten_id' => '3522',
                'nama' => 'Padangan'
            ],
            [
                'id' => '3522240',
                'kabupaten_id' => '3522',
                'nama' => 'Kasiman'
            ],
            [
                'id' => '3522241',
                'kabupaten_id' => '3522',
                'nama' => 'Kedewan'
            ],
            [
                'id' => '3523010',
                'kabupaten_id' => '3523',
                'nama' => 'Kenduruan'
            ],
            [
                'id' => '3523020',
                'kabupaten_id' => '3523',
                'nama' => 'Bangilan'
            ],
            [
                'id' => '3523030',
                'kabupaten_id' => '3523',
                'nama' => 'Senori'
            ],
            [
                'id' => '3523040',
                'kabupaten_id' => '3523',
                'nama' => 'Singgahan'
            ],
            [
                'id' => '3523050',
                'kabupaten_id' => '3523',
                'nama' => 'Montong'
            ],
            [
                'id' => '3523060',
                'kabupaten_id' => '3523',
                'nama' => 'Parengan'
            ],
            [
                'id' => '3523070',
                'kabupaten_id' => '3523',
                'nama' => 'Soko'
            ],
            [
                'id' => '3523080',
                'kabupaten_id' => '3523',
                'nama' => 'Rengel'
            ],
            [
                'id' => '3523081',
                'kabupaten_id' => '3523',
                'nama' => 'Grabagan'
            ],
            [
                'id' => '3523090',
                'kabupaten_id' => '3523',
                'nama' => 'Plumpang'
            ],
            [
                'id' => '3523100',
                'kabupaten_id' => '3523',
                'nama' => 'Widang'
            ],
            [
                'id' => '3523110',
                'kabupaten_id' => '3523',
                'nama' => 'Palang'
            ],
            [
                'id' => '3523120',
                'kabupaten_id' => '3523',
                'nama' => 'Semanding'
            ],
            [
                'id' => '3523130',
                'kabupaten_id' => '3523',
                'nama' => 'Tuban'
            ],
            [
                'id' => '3523140',
                'kabupaten_id' => '3523',
                'nama' => 'Jenu'
            ],
            [
                'id' => '3523150',
                'kabupaten_id' => '3523',
                'nama' => 'Merakurak'
            ],
            [
                'id' => '3523160',
                'kabupaten_id' => '3523',
                'nama' => 'Kerek'
            ],
            [
                'id' => '3523170',
                'kabupaten_id' => '3523',
                'nama' => 'Tambakboyo'
            ],
            [
                'id' => '3523180',
                'kabupaten_id' => '3523',
                'nama' => 'Jatirogo'
            ],
            [
                'id' => '3523190',
                'kabupaten_id' => '3523',
                'nama' => 'Bancar'
            ],
            [
                'id' => '3524010',
                'kabupaten_id' => '3524',
                'nama' => 'Sukorame'
            ],
            [
                'id' => '3524020',
                'kabupaten_id' => '3524',
                'nama' => 'Bluluk'
            ],
            [
                'id' => '3524030',
                'kabupaten_id' => '3524',
                'nama' => 'Ngimbang'
            ],
            [
                'id' => '3524040',
                'kabupaten_id' => '3524',
                'nama' => 'Sambeng'
            ],
            [
                'id' => '3524050',
                'kabupaten_id' => '3524',
                'nama' => 'Mantup'
            ],
            [
                'id' => '3524060',
                'kabupaten_id' => '3524',
                'nama' => 'Kembangbahu'
            ],
            [
                'id' => '3524070',
                'kabupaten_id' => '3524',
                'nama' => 'Sugio'
            ],
            [
                'id' => '3524080',
                'kabupaten_id' => '3524',
                'nama' => 'Kedungpring'
            ],
            [
                'id' => '3524090',
                'kabupaten_id' => '3524',
                'nama' => 'Modo'
            ],
            [
                'id' => '3524100',
                'kabupaten_id' => '3524',
                'nama' => 'Babat'
            ],
            [
                'id' => '3524110',
                'kabupaten_id' => '3524',
                'nama' => 'Pucuk'
            ],
            [
                'id' => '3524120',
                'kabupaten_id' => '3524',
                'nama' => 'Sukodadi'
            ],
            [
                'id' => '3524130',
                'kabupaten_id' => '3524',
                'nama' => 'Lamongan'
            ],
            [
                'id' => '3524140',
                'kabupaten_id' => '3524',
                'nama' => 'Tikung'
            ],
            [
                'id' => '3524141',
                'kabupaten_id' => '3524',
                'nama' => 'Sarirejo'
            ],
            [
                'id' => '3524150',
                'kabupaten_id' => '3524',
                'nama' => 'Deket'
            ],
            [
                'id' => '3524160',
                'kabupaten_id' => '3524',
                'nama' => 'Glagah'
            ],
            [
                'id' => '3524170',
                'kabupaten_id' => '3524',
                'nama' => 'Karangbinangun'
            ],
            [
                'id' => '3524180',
                'kabupaten_id' => '3524',
                'nama' => 'Turi'
            ],
            [
                'id' => '3524190',
                'kabupaten_id' => '3524',
                'nama' => 'Kalitengah'
            ],
            [
                'id' => '3524200',
                'kabupaten_id' => '3524',
                'nama' => 'Karang Geneng'
            ],
            [
                'id' => '3524210',
                'kabupaten_id' => '3524',
                'nama' => 'Sekaran'
            ],
            [
                'id' => '3524220',
                'kabupaten_id' => '3524',
                'nama' => 'Maduran'
            ],
            [
                'id' => '3524230',
                'kabupaten_id' => '3524',
                'nama' => 'Laren'
            ],
            [
                'id' => '3524240',
                'kabupaten_id' => '3524',
                'nama' => 'Solokuro'
            ],
            [
                'id' => '3524250',
                'kabupaten_id' => '3524',
                'nama' => 'Paciran'
            ],
            [
                'id' => '3524260',
                'kabupaten_id' => '3524',
                'nama' => 'Brondong'
            ],
            [
                'id' => '3525010',
                'kabupaten_id' => '3525',
                'nama' => 'Wringinanom'
            ],
            [
                'id' => '3525020',
                'kabupaten_id' => '3525',
                'nama' => 'Driyorejo'
            ],
            [
                'id' => '3525030',
                'kabupaten_id' => '3525',
                'nama' => 'Kedamean'
            ],
            [
                'id' => '3525040',
                'kabupaten_id' => '3525',
                'nama' => 'Menganti'
            ],
            [
                'id' => '3525050',
                'kabupaten_id' => '3525',
                'nama' => 'Cerme'
            ],
            [
                'id' => '3525060',
                'kabupaten_id' => '3525',
                'nama' => 'Benjeng'
            ],
            [
                'id' => '3525070',
                'kabupaten_id' => '3525',
                'nama' => 'Balongpanggang'
            ],
            [
                'id' => '3525080',
                'kabupaten_id' => '3525',
                'nama' => 'Duduksampeyan'
            ],
            [
                'id' => '3525090',
                'kabupaten_id' => '3525',
                'nama' => 'Kebomas'
            ],
            [
                'id' => '3525100',
                'kabupaten_id' => '3525',
                'nama' => 'Gresik'
            ],
            [
                'id' => '3525110',
                'kabupaten_id' => '3525',
                'nama' => 'Manyar'
            ],
            [
                'id' => '3525120',
                'kabupaten_id' => '3525',
                'nama' => 'Bungah'
            ],
            [
                'id' => '3525130',
                'kabupaten_id' => '3525',
                'nama' => 'Sidayu'
            ],
            [
                'id' => '3525140',
                'kabupaten_id' => '3525',
                'nama' => 'Dukun'
            ],
            [
                'id' => '3525150',
                'kabupaten_id' => '3525',
                'nama' => 'Panceng'
            ],
            [
                'id' => '3525160',
                'kabupaten_id' => '3525',
                'nama' => 'Ujungpangkah'
            ],
            [
                'id' => '3525170',
                'kabupaten_id' => '3525',
                'nama' => 'Sangkapura'
            ],
            [
                'id' => '3525180',
                'kabupaten_id' => '3525',
                'nama' => 'Tambak'
            ],
            [
                'id' => '3526010',
                'kabupaten_id' => '3526',
                'nama' => 'Kamal'
            ],
            [
                'id' => '3526020',
                'kabupaten_id' => '3526',
                'nama' => 'Labang'
            ],
            [
                'id' => '3526030',
                'kabupaten_id' => '3526',
                'nama' => 'Kwanyar'
            ],
            [
                'id' => '3526040',
                'kabupaten_id' => '3526',
                'nama' => 'Modung'
            ],
            [
                'id' => '3526050',
                'kabupaten_id' => '3526',
                'nama' => 'Blega'
            ],
            [
                'id' => '3526060',
                'kabupaten_id' => '3526',
                'nama' => 'Konang'
            ],
            [
                'id' => '3526070',
                'kabupaten_id' => '3526',
                'nama' => 'Galis'
            ],
            [
                'id' => '3526080',
                'kabupaten_id' => '3526',
                'nama' => 'Tanah Merah'
            ],
            [
                'id' => '3526090',
                'kabupaten_id' => '3526',
                'nama' => 'Tragah'
            ],
            [
                'id' => '3526100',
                'kabupaten_id' => '3526',
                'nama' => 'Socah'
            ],
            [
                'id' => '3526110',
                'kabupaten_id' => '3526',
                'nama' => 'Bangkalan'
            ],
            [
                'id' => '3526120',
                'kabupaten_id' => '3526',
                'nama' => 'Burneh'
            ],
            [
                'id' => '3526130',
                'kabupaten_id' => '3526',
                'nama' => 'Arosbaya'
            ],
            [
                'id' => '3526140',
                'kabupaten_id' => '3526',
                'nama' => 'Geger'
            ],
            [
                'id' => '3526150',
                'kabupaten_id' => '3526',
                'nama' => 'Kokop'
            ],
            [
                'id' => '3526160',
                'kabupaten_id' => '3526',
                'nama' => 'Tanjungbumi'
            ],
            [
                'id' => '3526170',
                'kabupaten_id' => '3526',
                'nama' => 'Sepulu'
            ],
            [
                'id' => '3526180',
                'kabupaten_id' => '3526',
                'nama' => 'Klampis'
            ],
            [
                'id' => '3527010',
                'kabupaten_id' => '3527',
                'nama' => 'Sreseh'
            ],
            [
                'id' => '3527020',
                'kabupaten_id' => '3527',
                'nama' => 'Torjun'
            ],
            [
                'id' => '3527021',
                'kabupaten_id' => '3527',
                'nama' => 'Pangarengan'
            ],
            [
                'id' => '3527030',
                'kabupaten_id' => '3527',
                'nama' => 'Sampang'
            ],
            [
                'id' => '3527040',
                'kabupaten_id' => '3527',
                'nama' => 'Camplong'
            ],
            [
                'id' => '3527050',
                'kabupaten_id' => '3527',
                'nama' => 'Omben'
            ],
            [
                'id' => '3527060',
                'kabupaten_id' => '3527',
                'nama' => 'Kedungdung'
            ],
            [
                'id' => '3527070',
                'kabupaten_id' => '3527',
                'nama' => 'Jrengik'
            ],
            [
                'id' => '3527080',
                'kabupaten_id' => '3527',
                'nama' => 'Tambelangan'
            ],
            [
                'id' => '3527090',
                'kabupaten_id' => '3527',
                'nama' => 'Banyuates'
            ],
            [
                'id' => '3527100',
                'kabupaten_id' => '3527',
                'nama' => 'Robatal'
            ],
            [
                'id' => '3527101',
                'kabupaten_id' => '3527',
                'nama' => 'Karang Penang'
            ],
            [
                'id' => '3527110',
                'kabupaten_id' => '3527',
                'nama' => 'Ketapang'
            ],
            [
                'id' => '3527120',
                'kabupaten_id' => '3527',
                'nama' => 'Sokobanah'
            ],
            [
                'id' => '3528010',
                'kabupaten_id' => '3528',
                'nama' => 'Tlanakan'
            ],
            [
                'id' => '3528020',
                'kabupaten_id' => '3528',
                'nama' => 'Pademawu'
            ],
            [
                'id' => '3528030',
                'kabupaten_id' => '3528',
                'nama' => 'Galis'
            ],
            [
                'id' => '3528040',
                'kabupaten_id' => '3528',
                'nama' => 'Larangan'
            ],
            [
                'id' => '3528050',
                'kabupaten_id' => '3528',
                'nama' => 'Pamekasan'
            ],
            [
                'id' => '3528060',
                'kabupaten_id' => '3528',
                'nama' => 'Proppo'
            ],
            [
                'id' => '3528070',
                'kabupaten_id' => '3528',
                'nama' => 'Palengaan'
            ],
            [
                'id' => '3528080',
                'kabupaten_id' => '3528',
                'nama' => 'Pegantenan'
            ],
            [
                'id' => '3528090',
                'kabupaten_id' => '3528',
                'nama' => 'Kadur'
            ],
            [
                'id' => '3528100',
                'kabupaten_id' => '3528',
                'nama' => 'Pakong'
            ],
            [
                'id' => '3528110',
                'kabupaten_id' => '3528',
                'nama' => 'Waru'
            ],
            [
                'id' => '3528120',
                'kabupaten_id' => '3528',
                'nama' => 'Batu Marmar'
            ],
            [
                'id' => '3528130',
                'kabupaten_id' => '3528',
                'nama' => 'Pasean'
            ],
            [
                'id' => '3529010',
                'kabupaten_id' => '3529',
                'nama' => 'Pragaan'
            ],
            [
                'id' => '3529020',
                'kabupaten_id' => '3529',
                'nama' => 'Bluto'
            ],
            [
                'id' => '3529030',
                'kabupaten_id' => '3529',
                'nama' => 'Saronggi'
            ],
            [
                'id' => '3529040',
                'kabupaten_id' => '3529',
                'nama' => 'Giligenteng'
            ],
            [
                'id' => '3529050',
                'kabupaten_id' => '3529',
                'nama' => 'Talango'
            ],
            [
                'id' => '3529060',
                'kabupaten_id' => '3529',
                'nama' => 'Kalianget'
            ],
            [
                'id' => '3529070',
                'kabupaten_id' => '3529',
                'nama' => 'Kota Sumenep'
            ],
            [
                'id' => '3529071',
                'kabupaten_id' => '3529',
                'nama' => 'Batuan'
            ],
            [
                'id' => '3529080',
                'kabupaten_id' => '3529',
                'nama' => 'Lenteng'
            ],
            [
                'id' => '3529090',
                'kabupaten_id' => '3529',
                'nama' => 'Ganding'
            ],
            [
                'id' => '3529100',
                'kabupaten_id' => '3529',
                'nama' => 'Guluk Guluk'
            ],
            [
                'id' => '3529110',
                'kabupaten_id' => '3529',
                'nama' => 'Pasongsongan'
            ],
            [
                'id' => '3529120',
                'kabupaten_id' => '3529',
                'nama' => 'Ambunten'
            ],
            [
                'id' => '3529130',
                'kabupaten_id' => '3529',
                'nama' => 'Rubaru'
            ],
            [
                'id' => '3529140',
                'kabupaten_id' => '3529',
                'nama' => 'Dasuk'
            ],
            [
                'id' => '3529150',
                'kabupaten_id' => '3529',
                'nama' => 'Manding'
            ],
            [
                'id' => '3529160',
                'kabupaten_id' => '3529',
                'nama' => 'Batuputih'
            ],
            [
                'id' => '3529170',
                'kabupaten_id' => '3529',
                'nama' => 'Gapura'
            ],
            [
                'id' => '3529180',
                'kabupaten_id' => '3529',
                'nama' => 'Batang Batang'
            ],
            [
                'id' => '3529190',
                'kabupaten_id' => '3529',
                'nama' => 'Dungkek'
            ],
            [
                'id' => '3529200',
                'kabupaten_id' => '3529',
                'nama' => 'Nonggunong'
            ],
            [
                'id' => '3529210',
                'kabupaten_id' => '3529',
                'nama' => 'Gayam'
            ],
            [
                'id' => '3529220',
                'kabupaten_id' => '3529',
                'nama' => 'Raas'
            ],
            [
                'id' => '3529230',
                'kabupaten_id' => '3529',
                'nama' => 'Sapeken'
            ],
            [
                'id' => '3529240',
                'kabupaten_id' => '3529',
                'nama' => 'Arjasa'
            ],
            [
                'id' => '3529241',
                'kabupaten_id' => '3529',
                'nama' => 'Kangayan'
            ],
            [
                'id' => '3529250',
                'kabupaten_id' => '3529',
                'nama' => 'Masalembu'
            ],
            [
                'id' => '3571010',
                'kabupaten_id' => '3571',
                'nama' => 'Mojoroto'
            ],
            [
                'id' => '3571020',
                'kabupaten_id' => '3571',
                'nama' => 'Kota Kediri'
            ],
            [
                'id' => '3571030',
                'kabupaten_id' => '3571',
                'nama' => 'Pesantren'
            ],
            [
                'id' => '3572010',
                'kabupaten_id' => '3572',
                'nama' => 'Sukorejo'
            ],
            [
                'id' => '3572020',
                'kabupaten_id' => '3572',
                'nama' => 'Kepanjenkidul'
            ],
            [
                'id' => '3572030',
                'kabupaten_id' => '3572',
                'nama' => 'Sananwetan'
            ],
            [
                'id' => '3573010',
                'kabupaten_id' => '3573',
                'nama' => 'Kedungkandang'
            ],
            [
                'id' => '3573020',
                'kabupaten_id' => '3573',
                'nama' => 'Sukun'
            ],
            [
                'id' => '3573030',
                'kabupaten_id' => '3573',
                'nama' => 'Klojen'
            ],
            [
                'id' => '3573040',
                'kabupaten_id' => '3573',
                'nama' => 'Blimbing'
            ],
            [
                'id' => '3573050',
                'kabupaten_id' => '3573',
                'nama' => 'Lowokwaru'
            ],
            [
                'id' => '3574010',
                'kabupaten_id' => '3574',
                'nama' => 'Kademangan'
            ],
            [
                'id' => '3574011',
                'kabupaten_id' => '3574',
                'nama' => 'Kedopok'
            ],
            [
                'id' => '3574020',
                'kabupaten_id' => '3574',
                'nama' => 'Wonoasih'
            ],
            [
                'id' => '3574030',
                'kabupaten_id' => '3574',
                'nama' => 'Mayangan'
            ],
            [
                'id' => '3574031',
                'kabupaten_id' => '3574',
                'nama' => 'Kanigaran'
            ],
            [
                'id' => '3575010',
                'kabupaten_id' => '3575',
                'nama' => 'Gadingrejo'
            ],
            [
                'id' => '3575020',
                'kabupaten_id' => '3575',
                'nama' => 'Purworejo'
            ],
            [
                'id' => '3575030',
                'kabupaten_id' => '3575',
                'nama' => 'Bugulkidul'
            ],
            [
                'id' => '3575031',
                'kabupaten_id' => '3575',
                'nama' => 'Panggungrejo'
            ],
            [
                'id' => '3576010',
                'kabupaten_id' => '3576',
                'nama' => 'Prajurit Kulon'
            ],
            [
                'id' => '3576020',
                'kabupaten_id' => '3576',
                'nama' => 'Magersari'
            ],
            [
                'id' => '3577010',
                'kabupaten_id' => '3577',
                'nama' => 'Mangu Harjo'
            ],
            [
                'id' => '3577020',
                'kabupaten_id' => '3577',
                'nama' => 'Taman'
            ],
            [
                'id' => '3577030',
                'kabupaten_id' => '3577',
                'nama' => 'Kartoharjo'
            ],
            [
                'id' => '3578010',
                'kabupaten_id' => '3578',
                'nama' => 'Karang Pilang'
            ],
            [
                'id' => '3578020',
                'kabupaten_id' => '3578',
                'nama' => 'Jambangan'
            ],
            [
                'id' => '3578030',
                'kabupaten_id' => '3578',
                'nama' => 'Gayungan'
            ],
            [
                'id' => '3578040',
                'kabupaten_id' => '3578',
                'nama' => 'Wonocolo'
            ],
            [
                'id' => '3578050',
                'kabupaten_id' => '3578',
                'nama' => 'Tenggilis Mejoyo'
            ],
            [
                'id' => '3578060',
                'kabupaten_id' => '3578',
                'nama' => 'Gunung Anyar'
            ],
            [
                'id' => '3578070',
                'kabupaten_id' => '3578',
                'nama' => 'Rungkut'
            ],
            [
                'id' => '3578080',
                'kabupaten_id' => '3578',
                'nama' => 'Sukolilo'
            ],
            [
                'id' => '3578090',
                'kabupaten_id' => '3578',
                'nama' => 'Mulyorejo'
            ],
            [
                'id' => '3578100',
                'kabupaten_id' => '3578',
                'nama' => 'Gubeng'
            ],
            [
                'id' => '3578110',
                'kabupaten_id' => '3578',
                'nama' => 'Wonokromo'
            ],
            [
                'id' => '3578120',
                'kabupaten_id' => '3578',
                'nama' => 'Dukuh Pakis'
            ],
            [
                'id' => '3578130',
                'kabupaten_id' => '3578',
                'nama' => 'Wiyung'
            ],
            [
                'id' => '3578140',
                'kabupaten_id' => '3578',
                'nama' => 'Lakarsantri'
            ],
            [
                'id' => '3578141',
                'kabupaten_id' => '3578',
                'nama' => 'Sambikerep'
            ],
            [
                'id' => '3578150',
                'kabupaten_id' => '3578',
                'nama' => 'Tandes'
            ],
            [
                'id' => '3578160',
                'kabupaten_id' => '3578',
                'nama' => 'Suko Manunggal'
            ],
            [
                'id' => '3578170',
                'kabupaten_id' => '3578',
                'nama' => 'Sawahan'
            ],
            [
                'id' => '3578180',
                'kabupaten_id' => '3578',
                'nama' => 'Tegalsari'
            ],
            [
                'id' => '3578190',
                'kabupaten_id' => '3578',
                'nama' => 'Genteng'
            ],
            [
                'id' => '3578200',
                'kabupaten_id' => '3578',
                'nama' => 'Tambaksari'
            ],
            [
                'id' => '3578210',
                'kabupaten_id' => '3578',
                'nama' => 'Kenjeran'
            ],
            [
                'id' => '3578211',
                'kabupaten_id' => '3578',
                'nama' => 'Bulak'
            ],
            [
                'id' => '3578220',
                'kabupaten_id' => '3578',
                'nama' => 'Simokerto'
            ],
            [
                'id' => '3578230',
                'kabupaten_id' => '3578',
                'nama' => 'Semampir'
            ],
            [
                'id' => '3578240',
                'kabupaten_id' => '3578',
                'nama' => 'Pabean Cantian'
            ],
            [
                'id' => '3578250',
                'kabupaten_id' => '3578',
                'nama' => 'Bubutan'
            ],
            [
                'id' => '3578260',
                'kabupaten_id' => '3578',
                'nama' => 'Krembangan'
            ],
            [
                'id' => '3578270',
                'kabupaten_id' => '3578',
                'nama' => 'Asemrowo'
            ],
            [
                'id' => '3578280',
                'kabupaten_id' => '3578',
                'nama' => 'Benowo'
            ],
            [
                'id' => '3578281',
                'kabupaten_id' => '3578',
                'nama' => 'Pakal'
            ],
            [
                'id' => '3579010',
                'kabupaten_id' => '3579',
                'nama' => 'Batu'
            ],
            [
                'id' => '3579020',
                'kabupaten_id' => '3579',
                'nama' => 'Junrejo'
            ],
            [
                'id' => '3579030',
                'kabupaten_id' => '3579',
                'nama' => 'Bumiaji'
            ],
            [
                'id' => '3601010',
                'kabupaten_id' => '3601',
                'nama' => 'Sumur'
            ],
            [
                'id' => '3601020',
                'kabupaten_id' => '3601',
                'nama' => 'Cimanggu'
            ],
            [
                'id' => '3601030',
                'kabupaten_id' => '3601',
                'nama' => 'Cibaliung'
            ],
            [
                'id' => '3601031',
                'kabupaten_id' => '3601',
                'nama' => 'Cibitung'
            ],
            [
                'id' => '3601040',
                'kabupaten_id' => '3601',
                'nama' => 'Cikeusik'
            ],
            [
                'id' => '3601050',
                'kabupaten_id' => '3601',
                'nama' => 'Cigeulis'
            ],
            [
                'id' => '3601060',
                'kabupaten_id' => '3601',
                'nama' => 'Panimbang'
            ],
            [
                'id' => '3601061',
                'kabupaten_id' => '3601',
                'nama' => 'Sobang'
            ],
            [
                'id' => '3601070',
                'kabupaten_id' => '3601',
                'nama' => 'Munjul'
            ],
            [
                'id' => '3601071',
                'kabupaten_id' => '3601',
                'nama' => 'Angsana'
            ],
            [
                'id' => '3601072',
                'kabupaten_id' => '3601',
                'nama' => 'Sindangresmi'
            ],
            [
                'id' => '3601080',
                'kabupaten_id' => '3601',
                'nama' => 'Picung'
            ],
            [
                'id' => '3601090',
                'kabupaten_id' => '3601',
                'nama' => 'Bojong'
            ],
            [
                'id' => '3601100',
                'kabupaten_id' => '3601',
                'nama' => 'Saketi'
            ],
            [
                'id' => '3601101',
                'kabupaten_id' => '3601',
                'nama' => 'Cisata'
            ],
            [
                'id' => '3601110',
                'kabupaten_id' => '3601',
                'nama' => 'Pagelaran'
            ],
            [
                'id' => '3601111',
                'kabupaten_id' => '3601',
                'nama' => 'Patia'
            ],
            [
                'id' => '3601112',
                'kabupaten_id' => '3601',
                'nama' => 'Sukaresmi'
            ],
            [
                'id' => '3601120',
                'kabupaten_id' => '3601',
                'nama' => 'Labuan'
            ],
            [
                'id' => '3601121',
                'kabupaten_id' => '3601',
                'nama' => 'Carita'
            ],
            [
                'id' => '3601130',
                'kabupaten_id' => '3601',
                'nama' => 'Jiput'
            ],
            [
                'id' => '3601131',
                'kabupaten_id' => '3601',
                'nama' => 'Cikedal'
            ],
            [
                'id' => '3601140',
                'kabupaten_id' => '3601',
                'nama' => 'Menes'
            ],
            [
                'id' => '3601141',
                'kabupaten_id' => '3601',
                'nama' => 'Pulosari'
            ],
            [
                'id' => '3601150',
                'kabupaten_id' => '3601',
                'nama' => 'Mandalawangi'
            ],
            [
                'id' => '3601160',
                'kabupaten_id' => '3601',
                'nama' => 'Cimanuk'
            ],
            [
                'id' => '3601161',
                'kabupaten_id' => '3601',
                'nama' => 'Cipeucang'
            ],
            [
                'id' => '3601170',
                'kabupaten_id' => '3601',
                'nama' => 'Banjar'
            ],
            [
                'id' => '3601171',
                'kabupaten_id' => '3601',
                'nama' => 'Kaduhejo'
            ],
            [
                'id' => '3601172',
                'kabupaten_id' => '3601',
                'nama' => 'Mekarjaya'
            ],
            [
                'id' => '3601180',
                'kabupaten_id' => '3601',
                'nama' => 'Pandeglang'
            ],
            [
                'id' => '3601181',
                'kabupaten_id' => '3601',
                'nama' => 'Majasari'
            ],
            [
                'id' => '3601190',
                'kabupaten_id' => '3601',
                'nama' => 'Cadasari'
            ],
            [
                'id' => '3601191',
                'kabupaten_id' => '3601',
                'nama' => 'Karangtanjung'
            ],
            [
                'id' => '3601192',
                'kabupaten_id' => '3601',
                'nama' => 'Koroncong'
            ],
            [
                'id' => '3602010',
                'kabupaten_id' => '3602',
                'nama' => 'Malingping'
            ],
            [
                'id' => '3602011',
                'kabupaten_id' => '3602',
                'nama' => 'Wanasalam'
            ],
            [
                'id' => '3602020',
                'kabupaten_id' => '3602',
                'nama' => 'Panggarangan'
            ],
            [
                'id' => '3602021',
                'kabupaten_id' => '3602',
                'nama' => 'Cihara'
            ],
            [
                'id' => '3602030',
                'kabupaten_id' => '3602',
                'nama' => 'Bayah'
            ],
            [
                'id' => '3602031',
                'kabupaten_id' => '3602',
                'nama' => 'Cilograng'
            ],
            [
                'id' => '3602040',
                'kabupaten_id' => '3602',
                'nama' => 'Cibeber'
            ],
            [
                'id' => '3602050',
                'kabupaten_id' => '3602',
                'nama' => 'Cijaku'
            ],
            [
                'id' => '3602051',
                'kabupaten_id' => '3602',
                'nama' => 'Cigemblong'
            ],
            [
                'id' => '3602060',
                'kabupaten_id' => '3602',
                'nama' => 'Banjarsari'
            ],
            [
                'id' => '3602070',
                'kabupaten_id' => '3602',
                'nama' => 'Cileles'
            ],
            [
                'id' => '3602080',
                'kabupaten_id' => '3602',
                'nama' => 'Gunung Kencana'
            ],
            [
                'id' => '3602090',
                'kabupaten_id' => '3602',
                'nama' => 'Bojongmanik'
            ],
            [
                'id' => '3602091',
                'kabupaten_id' => '3602',
                'nama' => 'Cirinten'
            ],
            [
                'id' => '3602100',
                'kabupaten_id' => '3602',
                'nama' => 'Leuwidamar'
            ],
            [
                'id' => '3602110',
                'kabupaten_id' => '3602',
                'nama' => 'Muncang'
            ],
            [
                'id' => '3602111',
                'kabupaten_id' => '3602',
                'nama' => 'Sobang'
            ],
            [
                'id' => '3602120',
                'kabupaten_id' => '3602',
                'nama' => 'Cipanas'
            ],
            [
                'id' => '3602121',
                'kabupaten_id' => '3602',
                'nama' => 'Lebakgedong'
            ],
            [
                'id' => '3602130',
                'kabupaten_id' => '3602',
                'nama' => 'Sajira'
            ],
            [
                'id' => '3602140',
                'kabupaten_id' => '3602',
                'nama' => 'Cimarga'
            ],
            [
                'id' => '3602150',
                'kabupaten_id' => '3602',
                'nama' => 'Cikulur'
            ],
            [
                'id' => '3602160',
                'kabupaten_id' => '3602',
                'nama' => 'Warunggunung'
            ],
            [
                'id' => '3602170',
                'kabupaten_id' => '3602',
                'nama' => 'Cibadak'
            ],
            [
                'id' => '3602180',
                'kabupaten_id' => '3602',
                'nama' => 'Rangkasbitung'
            ],
            [
                'id' => '3602181',
                'kabupaten_id' => '3602',
                'nama' => 'Kalanganyar'
            ],
            [
                'id' => '3602190',
                'kabupaten_id' => '3602',
                'nama' => 'Maja'
            ],
            [
                'id' => '3602191',
                'kabupaten_id' => '3602',
                'nama' => 'Curugbitung'
            ],
            [
                'id' => '3603010',
                'kabupaten_id' => '3603',
                'nama' => 'Cisoka'
            ],
            [
                'id' => '3603011',
                'kabupaten_id' => '3603',
                'nama' => 'Solear'
            ],
            [
                'id' => '3603020',
                'kabupaten_id' => '3603',
                'nama' => 'Tigaraksa'
            ],
            [
                'id' => '3603021',
                'kabupaten_id' => '3603',
                'nama' => 'Jambe'
            ],
            [
                'id' => '3603030',
                'kabupaten_id' => '3603',
                'nama' => 'Cikupa'
            ],
            [
                'id' => '3603040',
                'kabupaten_id' => '3603',
                'nama' => 'Panongan'
            ],
            [
                'id' => '3603050',
                'kabupaten_id' => '3603',
                'nama' => 'Curug'
            ],
            [
                'id' => '3603051',
                'kabupaten_id' => '3603',
                'nama' => 'Kelapa Dua'
            ],
            [
                'id' => '3603060',
                'kabupaten_id' => '3603',
                'nama' => 'Legok'
            ],
            [
                'id' => '3603070',
                'kabupaten_id' => '3603',
                'nama' => 'Pagedangan'
            ],
            [
                'id' => '3603081',
                'kabupaten_id' => '3603',
                'nama' => 'Cisauk'
            ],
            [
                'id' => '3603120',
                'kabupaten_id' => '3603',
                'nama' => 'Pasarkemis'
            ],
            [
                'id' => '3603121',
                'kabupaten_id' => '3603',
                'nama' => 'Sindang Jaya'
            ],
            [
                'id' => '3603130',
                'kabupaten_id' => '3603',
                'nama' => 'Balaraja'
            ],
            [
                'id' => '3603131',
                'kabupaten_id' => '3603',
                'nama' => 'Jayanti'
            ],
            [
                'id' => '3603132',
                'kabupaten_id' => '3603',
                'nama' => 'Sukamulya'
            ],
            [
                'id' => '3603140',
                'kabupaten_id' => '3603',
                'nama' => 'Kresek'
            ],
            [
                'id' => '3603141',
                'kabupaten_id' => '3603',
                'nama' => 'Gunung Kaler'
            ],
            [
                'id' => '3603150',
                'kabupaten_id' => '3603',
                'nama' => 'Kronjo'
            ],
            [
                'id' => '3603151',
                'kabupaten_id' => '3603',
                'nama' => 'Mekar Baru'
            ],
            [
                'id' => '3603160',
                'kabupaten_id' => '3603',
                'nama' => 'Mauk'
            ],
            [
                'id' => '3603161',
                'kabupaten_id' => '3603',
                'nama' => 'Kemiri'
            ],
            [
                'id' => '3603162',
                'kabupaten_id' => '3603',
                'nama' => 'Sukadiri'
            ],
            [
                'id' => '3603170',
                'kabupaten_id' => '3603',
                'nama' => 'Rajeg'
            ],
            [
                'id' => '3603180',
                'kabupaten_id' => '3603',
                'nama' => 'Sepatan'
            ],
            [
                'id' => '3603181',
                'kabupaten_id' => '3603',
                'nama' => 'Sepatan Timur'
            ],
            [
                'id' => '3603190',
                'kabupaten_id' => '3603',
                'nama' => 'Pakuhaji'
            ],
            [
                'id' => '3603200',
                'kabupaten_id' => '3603',
                'nama' => 'Teluknaga'
            ],
            [
                'id' => '3603210',
                'kabupaten_id' => '3603',
                'nama' => 'Kosambi'
            ],
            [
                'id' => '3604010',
                'kabupaten_id' => '3604',
                'nama' => 'Cinangka'
            ],
            [
                'id' => '3604020',
                'kabupaten_id' => '3604',
                'nama' => 'Padarincang'
            ],
            [
                'id' => '3604030',
                'kabupaten_id' => '3604',
                'nama' => 'Ciomas'
            ],
            [
                'id' => '3604040',
                'kabupaten_id' => '3604',
                'nama' => 'Pabuaran'
            ],
            [
                'id' => '3604041',
                'kabupaten_id' => '3604',
                'nama' => 'Gunung Sari'
            ],
            [
                'id' => '3604050',
                'kabupaten_id' => '3604',
                'nama' => 'Baros'
            ],
            [
                'id' => '3604060',
                'kabupaten_id' => '3604',
                'nama' => 'Petir'
            ],
            [
                'id' => '3604061',
                'kabupaten_id' => '3604',
                'nama' => 'Tunjung Teja'
            ],
            [
                'id' => '3604080',
                'kabupaten_id' => '3604',
                'nama' => 'Cikeusal'
            ],
            [
                'id' => '3604090',
                'kabupaten_id' => '3604',
                'nama' => 'Pamarayan'
            ],
            [
                'id' => '3604091',
                'kabupaten_id' => '3604',
                'nama' => 'Bandung'
            ],
            [
                'id' => '3604100',
                'kabupaten_id' => '3604',
                'nama' => 'Jawilan'
            ],
            [
                'id' => '3604110',
                'kabupaten_id' => '3604',
                'nama' => 'Kopo'
            ],
            [
                'id' => '3604120',
                'kabupaten_id' => '3604',
                'nama' => 'Cikande'
            ],
            [
                'id' => '3604121',
                'kabupaten_id' => '3604',
                'nama' => 'Kibin'
            ],
            [
                'id' => '3604130',
                'kabupaten_id' => '3604',
                'nama' => 'Kragilan'
            ],
            [
                'id' => '3604180',
                'kabupaten_id' => '3604',
                'nama' => 'Waringinkurung'
            ],
            [
                'id' => '3604190',
                'kabupaten_id' => '3604',
                'nama' => 'Mancak'
            ],
            [
                'id' => '3604200',
                'kabupaten_id' => '3604',
                'nama' => 'Anyar'
            ],
            [
                'id' => '3604210',
                'kabupaten_id' => '3604',
                'nama' => 'Bojonegara'
            ],
            [
                'id' => '3604211',
                'kabupaten_id' => '3604',
                'nama' => 'Pulo Ampel'
            ],
            [
                'id' => '3604220',
                'kabupaten_id' => '3604',
                'nama' => 'Kramatwatu'
            ],
            [
                'id' => '3604240',
                'kabupaten_id' => '3604',
                'nama' => 'Ciruas'
            ],
            [
                'id' => '3604250',
                'kabupaten_id' => '3604',
                'nama' => 'Pontang'
            ],
            [
                'id' => '3604251',
                'kabupaten_id' => '3604',
                'nama' => 'Lebak Wangi'
            ],
            [
                'id' => '3604260',
                'kabupaten_id' => '3604',
                'nama' => 'Carenang'
            ],
            [
                'id' => '3604261',
                'kabupaten_id' => '3604',
                'nama' => 'Binuang'
            ],
            [
                'id' => '3604270',
                'kabupaten_id' => '3604',
                'nama' => 'Tirtayasa'
            ],
            [
                'id' => '3604271',
                'kabupaten_id' => '3604',
                'nama' => 'Tanara'
            ],
            [
                'id' => '3671010',
                'kabupaten_id' => '3671',
                'nama' => 'Ciledug'
            ],
            [
                'id' => '3671011',
                'kabupaten_id' => '3671',
                'nama' => 'Larangan'
            ],
            [
                'id' => '3671012',
                'kabupaten_id' => '3671',
                'nama' => 'Karang Tengah'
            ],
            [
                'id' => '3671020',
                'kabupaten_id' => '3671',
                'nama' => 'Cipondoh'
            ],
            [
                'id' => '3671021',
                'kabupaten_id' => '3671',
                'nama' => 'Pinang'
            ],
            [
                'id' => '3671030',
                'kabupaten_id' => '3671',
                'nama' => 'Tangerang'
            ],
            [
                'id' => '3671031',
                'kabupaten_id' => '3671',
                'nama' => 'Karawaci'
            ],
            [
                'id' => '3671040',
                'kabupaten_id' => '3671',
                'nama' => 'Jati Uwung'
            ],
            [
                'id' => '3671041',
                'kabupaten_id' => '3671',
                'nama' => 'Cibodas'
            ],
            [
                'id' => '3671042',
                'kabupaten_id' => '3671',
                'nama' => 'Periuk'
            ],
            [
                'id' => '3671050',
                'kabupaten_id' => '3671',
                'nama' => 'Batuceper'
            ],
            [
                'id' => '3671051',
                'kabupaten_id' => '3671',
                'nama' => 'Neglasari'
            ],
            [
                'id' => '3671060',
                'kabupaten_id' => '3671',
                'nama' => 'Benda'
            ],
            [
                'id' => '3672010',
                'kabupaten_id' => '3672',
                'nama' => 'Ciwandan'
            ],
            [
                'id' => '3672011',
                'kabupaten_id' => '3672',
                'nama' => 'Citangkil'
            ],
            [
                'id' => '3672020',
                'kabupaten_id' => '3672',
                'nama' => 'Pulomerak'
            ],
            [
                'id' => '3672021',
                'kabupaten_id' => '3672',
                'nama' => 'Purwakarta'
            ],
            [
                'id' => '3672022',
                'kabupaten_id' => '3672',
                'nama' => 'Grogol'
            ],
            [
                'id' => '3672030',
                'kabupaten_id' => '3672',
                'nama' => 'Cilegon'
            ],
            [
                'id' => '3672031',
                'kabupaten_id' => '3672',
                'nama' => 'Jombang'
            ],
            [
                'id' => '3672040',
                'kabupaten_id' => '3672',
                'nama' => 'Cibeber'
            ],
            [
                'id' => '3673010',
                'kabupaten_id' => '3673',
                'nama' => 'Curug'
            ],
            [
                'id' => '3673020',
                'kabupaten_id' => '3673',
                'nama' => 'Walantaka'
            ],
            [
                'id' => '3673030',
                'kabupaten_id' => '3673',
                'nama' => 'Cipocok Jaya'
            ],
            [
                'id' => '3673040',
                'kabupaten_id' => '3673',
                'nama' => 'Serang'
            ],
            [
                'id' => '3673050',
                'kabupaten_id' => '3673',
                'nama' => 'Taktakan'
            ],
            [
                'id' => '3673060',
                'kabupaten_id' => '3673',
                'nama' => 'Kasemen'
            ],
            [
                'id' => '3674010',
                'kabupaten_id' => '3674',
                'nama' => 'Setu'
            ],
            [
                'id' => '3674020',
                'kabupaten_id' => '3674',
                'nama' => 'Serpong'
            ],
            [
                'id' => '3674030',
                'kabupaten_id' => '3674',
                'nama' => 'Pamulang'
            ],
            [
                'id' => '3674040',
                'kabupaten_id' => '3674',
                'nama' => 'Ciputat'
            ],
            [
                'id' => '3674050',
                'kabupaten_id' => '3674',
                'nama' => 'Ciputat Timur'
            ],
            [
                'id' => '3674060',
                'kabupaten_id' => '3674',
                'nama' => 'Pondok Aren'
            ],
            [
                'id' => '3674070',
                'kabupaten_id' => '3674',
                'nama' => 'Serpong Utara'
            ],
            [
                'id' => '5101010',
                'kabupaten_id' => '5101',
                'nama' => 'Melaya'
            ],
            [
                'id' => '5101020',
                'kabupaten_id' => '5101',
                'nama' => 'Negara'
            ],
            [
                'id' => '5101021',
                'kabupaten_id' => '5101',
                'nama' => 'Jembrana'
            ],
            [
                'id' => '5101030',
                'kabupaten_id' => '5101',
                'nama' => 'Mendoyo'
            ],
            [
                'id' => '5101040',
                'kabupaten_id' => '5101',
                'nama' => 'Pekutatan'
            ],
            [
                'id' => '5102010',
                'kabupaten_id' => '5102',
                'nama' => 'Selemadeg'
            ],
            [
                'id' => '5102011',
                'kabupaten_id' => '5102',
                'nama' => 'Selemadeg Timur'
            ],
            [
                'id' => '5102012',
                'kabupaten_id' => '5102',
                'nama' => 'Selemadeg Barat'
            ],
            [
                'id' => '5102020',
                'kabupaten_id' => '5102',
                'nama' => 'Kerambitan'
            ],
            [
                'id' => '5102030',
                'kabupaten_id' => '5102',
                'nama' => 'Tabanan'
            ],
            [
                'id' => '5102040',
                'kabupaten_id' => '5102',
                'nama' => 'Kediri'
            ],
            [
                'id' => '5102050',
                'kabupaten_id' => '5102',
                'nama' => 'Marga'
            ],
            [
                'id' => '5102060',
                'kabupaten_id' => '5102',
                'nama' => 'Baturiti'
            ],
            [
                'id' => '5102070',
                'kabupaten_id' => '5102',
                'nama' => 'Penebel'
            ],
            [
                'id' => '5102080',
                'kabupaten_id' => '5102',
                'nama' => 'Pupuan'
            ],
            [
                'id' => '5103010',
                'kabupaten_id' => '5103',
                'nama' => 'Kuta Selatan'
            ],
            [
                'id' => '5103020',
                'kabupaten_id' => '5103',
                'nama' => 'Kuta'
            ],
            [
                'id' => '5103030',
                'kabupaten_id' => '5103',
                'nama' => 'Kuta Utara'
            ],
            [
                'id' => '5103040',
                'kabupaten_id' => '5103',
                'nama' => 'Mengwi'
            ],
            [
                'id' => '5103050',
                'kabupaten_id' => '5103',
                'nama' => 'Abiansemal'
            ],
            [
                'id' => '5103060',
                'kabupaten_id' => '5103',
                'nama' => 'Petang'
            ],
            [
                'id' => '5104010',
                'kabupaten_id' => '5104',
                'nama' => 'Sukawati'
            ],
            [
                'id' => '5104020',
                'kabupaten_id' => '5104',
                'nama' => 'Blahbatuh'
            ],
            [
                'id' => '5104030',
                'kabupaten_id' => '5104',
                'nama' => 'Gianyar'
            ],
            [
                'id' => '5104040',
                'kabupaten_id' => '5104',
                'nama' => 'Tampaksiring'
            ],
            [
                'id' => '5104050',
                'kabupaten_id' => '5104',
                'nama' => 'Ubud'
            ],
            [
                'id' => '5104060',
                'kabupaten_id' => '5104',
                'nama' => 'Tegallalang'
            ],
            [
                'id' => '5104070',
                'kabupaten_id' => '5104',
                'nama' => 'Payangan'
            ],
            [
                'id' => '5105010',
                'kabupaten_id' => '5105',
                'nama' => 'Nusapenida'
            ],
            [
                'id' => '5105020',
                'kabupaten_id' => '5105',
                'nama' => 'Banjarangkan'
            ],
            [
                'id' => '5105030',
                'kabupaten_id' => '5105',
                'nama' => 'Klungkung'
            ],
            [
                'id' => '5105040',
                'kabupaten_id' => '5105',
                'nama' => 'Dawan'
            ],
            [
                'id' => '5106010',
                'kabupaten_id' => '5106',
                'nama' => 'Susut'
            ],
            [
                'id' => '5106020',
                'kabupaten_id' => '5106',
                'nama' => 'Bangli'
            ],
            [
                'id' => '5106030',
                'kabupaten_id' => '5106',
                'nama' => 'Tembuku'
            ],
            [
                'id' => '5106040',
                'kabupaten_id' => '5106',
                'nama' => 'Kintamani'
            ],
            [
                'id' => '5107010',
                'kabupaten_id' => '5107',
                'nama' => 'Rendang'
            ],
            [
                'id' => '5107020',
                'kabupaten_id' => '5107',
                'nama' => 'Sidemen'
            ],
            [
                'id' => '5107030',
                'kabupaten_id' => '5107',
                'nama' => 'Manggis'
            ],
            [
                'id' => '5107040',
                'kabupaten_id' => '5107',
                'nama' => 'Karangasem'
            ],
            [
                'id' => '5107050',
                'kabupaten_id' => '5107',
                'nama' => 'Abang'
            ],
            [
                'id' => '5107060',
                'kabupaten_id' => '5107',
                'nama' => 'Bebandem'
            ],
            [
                'id' => '5107070',
                'kabupaten_id' => '5107',
                'nama' => 'Selat'
            ],
            [
                'id' => '5107080',
                'kabupaten_id' => '5107',
                'nama' => 'Kubu'
            ],
            [
                'id' => '5108010',
                'kabupaten_id' => '5108',
                'nama' => 'Gerokgak'
            ],
            [
                'id' => '5108020',
                'kabupaten_id' => '5108',
                'nama' => 'Seririt'
            ],
            [
                'id' => '5108030',
                'kabupaten_id' => '5108',
                'nama' => 'Busungbiu'
            ],
            [
                'id' => '5108040',
                'kabupaten_id' => '5108',
                'nama' => 'Banjar'
            ],
            [
                'id' => '5108050',
                'kabupaten_id' => '5108',
                'nama' => 'Sukasada'
            ],
            [
                'id' => '5108060',
                'kabupaten_id' => '5108',
                'nama' => 'Buleleng'
            ],
            [
                'id' => '5108070',
                'kabupaten_id' => '5108',
                'nama' => 'Sawan'
            ],
            [
                'id' => '5108080',
                'kabupaten_id' => '5108',
                'nama' => 'Kubutambahan'
            ],
            [
                'id' => '5108090',
                'kabupaten_id' => '5108',
                'nama' => 'Tejakula'
            ],
            [
                'id' => '5171010',
                'kabupaten_id' => '5171',
                'nama' => 'Denpasar Selatan'
            ],
            [
                'id' => '5171020',
                'kabupaten_id' => '5171',
                'nama' => 'Denpasar Timur'
            ],
            [
                'id' => '5171030',
                'kabupaten_id' => '5171',
                'nama' => 'Denpasar Barat'
            ],
            [
                'id' => '5171031',
                'kabupaten_id' => '5171',
                'nama' => 'Denpasar Utara'
            ],
            [
                'id' => '5201010',
                'kabupaten_id' => '5201',
                'nama' => 'Sekotong'
            ],
            [
                'id' => '5201011',
                'kabupaten_id' => '5201',
                'nama' => 'Lembar'
            ],
            [
                'id' => '5201020',
                'kabupaten_id' => '5201',
                'nama' => 'Gerung'
            ],
            [
                'id' => '5201030',
                'kabupaten_id' => '5201',
                'nama' => 'Labu Api'
            ],
            [
                'id' => '5201040',
                'kabupaten_id' => '5201',
                'nama' => 'Kediri'
            ],
            [
                'id' => '5201041',
                'kabupaten_id' => '5201',
                'nama' => 'Kuripan'
            ],
            [
                'id' => '5201050',
                'kabupaten_id' => '5201',
                'nama' => 'Narmada'
            ],
            [
                'id' => '5201051',
                'kabupaten_id' => '5201',
                'nama' => 'Lingsar'
            ],
            [
                'id' => '5201060',
                'kabupaten_id' => '5201',
                'nama' => 'Gunung Sari'
            ],
            [
                'id' => '5201061',
                'kabupaten_id' => '5201',
                'nama' => 'Batu Layar'
            ],
            [
                'id' => '5202010',
                'kabupaten_id' => '5202',
                'nama' => 'Praya Barat'
            ],
            [
                'id' => '5202011',
                'kabupaten_id' => '5202',
                'nama' => 'Praya Barat Daya'
            ],
            [
                'id' => '5202020',
                'kabupaten_id' => '5202',
                'nama' => 'Pujut'
            ],
            [
                'id' => '5202030',
                'kabupaten_id' => '5202',
                'nama' => 'Praya Timur'
            ],
            [
                'id' => '5202040',
                'kabupaten_id' => '5202',
                'nama' => 'Janapria'
            ],
            [
                'id' => '5202050',
                'kabupaten_id' => '5202',
                'nama' => 'Kopang'
            ],
            [
                'id' => '5202060',
                'kabupaten_id' => '5202',
                'nama' => 'Praya'
            ],
            [
                'id' => '5202061',
                'kabupaten_id' => '5202',
                'nama' => 'Praya Tengah'
            ],
            [
                'id' => '5202070',
                'kabupaten_id' => '5202',
                'nama' => 'Jonggat'
            ],
            [
                'id' => '5202080',
                'kabupaten_id' => '5202',
                'nama' => 'Pringgarata'
            ],
            [
                'id' => '5202090',
                'kabupaten_id' => '5202',
                'nama' => 'Batukliang'
            ],
            [
                'id' => '5202091',
                'kabupaten_id' => '5202',
                'nama' => 'Batukliang Utara'
            ],
            [
                'id' => '5203010',
                'kabupaten_id' => '5203',
                'nama' => 'Keruak'
            ],
            [
                'id' => '5203011',
                'kabupaten_id' => '5203',
                'nama' => 'Jerowaru'
            ],
            [
                'id' => '5203020',
                'kabupaten_id' => '5203',
                'nama' => 'Sakra'
            ],
            [
                'id' => '5203021',
                'kabupaten_id' => '5203',
                'nama' => 'Sakra Barat'
            ],
            [
                'id' => '5203022',
                'kabupaten_id' => '5203',
                'nama' => 'Sakra Timur'
            ],
            [
                'id' => '5203030',
                'kabupaten_id' => '5203',
                'nama' => 'Terara'
            ],
            [
                'id' => '5203031',
                'kabupaten_id' => '5203',
                'nama' => 'Montong Gading'
            ],
            [
                'id' => '5203040',
                'kabupaten_id' => '5203',
                'nama' => 'Sikur'
            ],
            [
                'id' => '5203050',
                'kabupaten_id' => '5203',
                'nama' => 'Masbagik'
            ],
            [
                'id' => '5203051',
                'kabupaten_id' => '5203',
                'nama' => 'Pringgasela'
            ],
            [
                'id' => '5203060',
                'kabupaten_id' => '5203',
                'nama' => 'Sukamulia'
            ],
            [
                'id' => '5203061',
                'kabupaten_id' => '5203',
                'nama' => 'Suralaga'
            ],
            [
                'id' => '5203070',
                'kabupaten_id' => '5203',
                'nama' => 'Selong'
            ],
            [
                'id' => '5203071',
                'kabupaten_id' => '5203',
                'nama' => 'Labuhan Haji'
            ],
            [
                'id' => '5203080',
                'kabupaten_id' => '5203',
                'nama' => 'Pringgabaya'
            ],
            [
                'id' => '5203081',
                'kabupaten_id' => '5203',
                'nama' => 'Suela'
            ],
            [
                'id' => '5203090',
                'kabupaten_id' => '5203',
                'nama' => 'Aikmel'
            ],
            [
                'id' => '5203091',
                'kabupaten_id' => '5203',
                'nama' => 'Wanasaba'
            ],
            [
                'id' => '5203092',
                'kabupaten_id' => '5203',
                'nama' => 'Sembalun'
            ],
            [
                'id' => '5203100',
                'kabupaten_id' => '5203',
                'nama' => 'Sambelia'
            ],
            [
                'id' => '5204020',
                'kabupaten_id' => '5204',
                'nama' => 'Lunyuk'
            ],
            [
                'id' => '5204021',
                'kabupaten_id' => '5204',
                'nama' => 'Orong Telu'
            ],
            [
                'id' => '5204050',
                'kabupaten_id' => '5204',
                'nama' => 'Alas'
            ],
            [
                'id' => '5204051',
                'kabupaten_id' => '5204',
                'nama' => 'Alas Barat'
            ],
            [
                'id' => '5204052',
                'kabupaten_id' => '5204',
                'nama' => 'Buer'
            ],
            [
                'id' => '5204061',
                'kabupaten_id' => '5204',
                'nama' => 'Utan'
            ],
            [
                'id' => '5204062',
                'kabupaten_id' => '5204',
                'nama' => 'Rhee'
            ],
            [
                'id' => '5204070',
                'kabupaten_id' => '5204',
                'nama' => 'Batulanteh'
            ],
            [
                'id' => '5204080',
                'kabupaten_id' => '5204',
                'nama' => 'Sumbawa'
            ],
            [
                'id' => '5204081',
                'kabupaten_id' => '5204',
                'nama' => 'Labuhan Badas'
            ],
            [
                'id' => '5204082',
                'kabupaten_id' => '5204',
                'nama' => 'Unter Iwes'
            ],
            [
                'id' => '5204090',
                'kabupaten_id' => '5204',
                'nama' => 'Moyohilir'
            ],
            [
                'id' => '5204091',
                'kabupaten_id' => '5204',
                'nama' => 'Moyo Utara'
            ],
            [
                'id' => '5204100',
                'kabupaten_id' => '5204',
                'nama' => 'Moyohulu'
            ],
            [
                'id' => '5204110',
                'kabupaten_id' => '5204',
                'nama' => 'Ropang'
            ],
            [
                'id' => '5204111',
                'kabupaten_id' => '5204',
                'nama' => 'Lenangguar'
            ],
            [
                'id' => '5204112',
                'kabupaten_id' => '5204',
                'nama' => 'Lantung'
            ],
            [
                'id' => '5204121',
                'kabupaten_id' => '5204',
                'nama' => 'Lape'
            ],
            [
                'id' => '5204122',
                'kabupaten_id' => '5204',
                'nama' => 'Lopok'
            ],
            [
                'id' => '5204130',
                'kabupaten_id' => '5204',
                'nama' => 'Plampang'
            ],
            [
                'id' => '5204131',
                'kabupaten_id' => '5204',
                'nama' => 'Labangka'
            ],
            [
                'id' => '5204132',
                'kabupaten_id' => '5204',
                'nama' => 'Maronge'
            ],
            [
                'id' => '5204140',
                'kabupaten_id' => '5204',
                'nama' => 'Empang'
            ],
            [
                'id' => '5204141',
                'kabupaten_id' => '5204',
                'nama' => 'Tarano'
            ],
            [
                'id' => '5205010',
                'kabupaten_id' => '5205',
                'nama' => 'Hu\'u'
            ],
            [
                'id' => '5205011',
                'kabupaten_id' => '5205',
                'nama' => 'Pajo'
            ],
            [
                'id' => '5205020',
                'kabupaten_id' => '5205',
                'nama' => 'Dompu'
            ],
            [
                'id' => '5205030',
                'kabupaten_id' => '5205',
                'nama' => 'Woja'
            ],
            [
                'id' => '5205040',
                'kabupaten_id' => '5205',
                'nama' => 'Kilo'
            ],
            [
                'id' => '5205050',
                'kabupaten_id' => '5205',
                'nama' => 'Kempo'
            ],
            [
                'id' => '5205051',
                'kabupaten_id' => '5205',
                'nama' => 'Manggalewa'
            ],
            [
                'id' => '5205060',
                'kabupaten_id' => '5205',
                'nama' => 'Pekat'
            ],
            [
                'id' => '5206010',
                'kabupaten_id' => '5206',
                'nama' => 'Monta'
            ],
            [
                'id' => '5206011',
                'kabupaten_id' => '5206',
                'nama' => 'Parado'
            ],
            [
                'id' => '5206020',
                'kabupaten_id' => '5206',
                'nama' => 'Bolo'
            ],
            [
                'id' => '5206021',
                'kabupaten_id' => '5206',
                'nama' => 'Mada Pangga'
            ],
            [
                'id' => '5206030',
                'kabupaten_id' => '5206',
                'nama' => 'Woha'
            ],
            [
                'id' => '5206040',
                'kabupaten_id' => '5206',
                'nama' => 'Belo'
            ],
            [
                'id' => '5206041',
                'kabupaten_id' => '5206',
                'nama' => 'Palibelo'
            ],
            [
                'id' => '5206050',
                'kabupaten_id' => '5206',
                'nama' => 'Wawo'
            ],
            [
                'id' => '5206051',
                'kabupaten_id' => '5206',
                'nama' => 'Langgudu'
            ],
            [
                'id' => '5206052',
                'kabupaten_id' => '5206',
                'nama' => 'Lambitu'
            ],
            [
                'id' => '5206060',
                'kabupaten_id' => '5206',
                'nama' => 'Sape'
            ],
            [
                'id' => '5206061',
                'kabupaten_id' => '5206',
                'nama' => 'Lambu'
            ],
            [
                'id' => '5206070',
                'kabupaten_id' => '5206',
                'nama' => 'Wera'
            ],
            [
                'id' => '5206071',
                'kabupaten_id' => '5206',
                'nama' => 'Ambalawi'
            ],
            [
                'id' => '5206080',
                'kabupaten_id' => '5206',
                'nama' => 'Donggo'
            ],
            [
                'id' => '5206081',
                'kabupaten_id' => '5206',
                'nama' => 'Soromandi'
            ],
            [
                'id' => '5206090',
                'kabupaten_id' => '5206',
                'nama' => 'Sanggar'
            ],
            [
                'id' => '5206091',
                'kabupaten_id' => '5206',
                'nama' => 'Tambora'
            ],
            [
                'id' => '5207010',
                'kabupaten_id' => '5207',
                'nama' => 'Sekongkang'
            ],
            [
                'id' => '5207020',
                'kabupaten_id' => '5207',
                'nama' => 'Jereweh'
            ],
            [
                'id' => '5207021',
                'kabupaten_id' => '5207',
                'nama' => 'Maluk'
            ],
            [
                'id' => '5207030',
                'kabupaten_id' => '5207',
                'nama' => 'Taliwang'
            ],
            [
                'id' => '5207031',
                'kabupaten_id' => '5207',
                'nama' => 'Brang Ene'
            ],
            [
                'id' => '5207040',
                'kabupaten_id' => '5207',
                'nama' => 'Brang Rea'
            ],
            [
                'id' => '5207050',
                'kabupaten_id' => '5207',
                'nama' => 'Seteluk'
            ],
            [
                'id' => '5207051',
                'kabupaten_id' => '5207',
                'nama' => 'Poto Tano'
            ],
            [
                'id' => '5208010',
                'kabupaten_id' => '5208',
                'nama' => 'Pemenang'
            ],
            [
                'id' => '5208020',
                'kabupaten_id' => '5208',
                'nama' => 'Tanjung'
            ],
            [
                'id' => '5208030',
                'kabupaten_id' => '5208',
                'nama' => 'Gangga'
            ],
            [
                'id' => '5208040',
                'kabupaten_id' => '5208',
                'nama' => 'Kayangan'
            ],
            [
                'id' => '5208050',
                'kabupaten_id' => '5208',
                'nama' => 'Bayan'
            ],
            [
                'id' => '5271010',
                'kabupaten_id' => '5271',
                'nama' => 'Ampenan'
            ],
            [
                'id' => '5271011',
                'kabupaten_id' => '5271',
                'nama' => 'Sekarbela'
            ],
            [
                'id' => '5271020',
                'kabupaten_id' => '5271',
                'nama' => 'Mataram'
            ],
            [
                'id' => '5271021',
                'kabupaten_id' => '5271',
                'nama' => 'Selaparang'
            ],
            [
                'id' => '5271030',
                'kabupaten_id' => '5271',
                'nama' => 'Cakranegara'
            ],
            [
                'id' => '5271031',
                'kabupaten_id' => '5271',
                'nama' => 'Sandubaya'
            ],
            [
                'id' => '5272010',
                'kabupaten_id' => '5272',
                'nama' => 'Rasanae Barat'
            ],
            [
                'id' => '5272011',
                'kabupaten_id' => '5272',
                'nama' => 'Mpunda'
            ],
            [
                'id' => '5272020',
                'kabupaten_id' => '5272',
                'nama' => 'Rasanae Timur'
            ],
            [
                'id' => '5272021',
                'kabupaten_id' => '5272',
                'nama' => 'Raba'
            ],
            [
                'id' => '5272030',
                'kabupaten_id' => '5272',
                'nama' => 'Asakota'
            ],
            [
                'id' => '5301021',
                'kabupaten_id' => '5301',
                'nama' => 'Lamboya'
            ],
            [
                'id' => '5301022',
                'kabupaten_id' => '5301',
                'nama' => 'Wanokaka'
            ],
            [
                'id' => '5301023',
                'kabupaten_id' => '5301',
                'nama' => 'Laboya Barat'
            ],
            [
                'id' => '5301050',
                'kabupaten_id' => '5301',
                'nama' => 'Loli'
            ],
            [
                'id' => '5301060',
                'kabupaten_id' => '5301',
                'nama' => 'Kota Waikabubak'
            ],
            [
                'id' => '5301072',
                'kabupaten_id' => '5301',
                'nama' => 'Tana Righu'
            ],
            [
                'id' => '5302010',
                'kabupaten_id' => '5302',
                'nama' => 'Lewa'
            ],
            [
                'id' => '5302011',
                'kabupaten_id' => '5302',
                'nama' => 'Nggaha Oriangu'
            ],
            [
                'id' => '5302012',
                'kabupaten_id' => '5302',
                'nama' => 'Lewa Tidahu'
            ],
            [
                'id' => '5302013',
                'kabupaten_id' => '5302',
                'nama' => 'Katala Hamu Lingu'
            ],
            [
                'id' => '5302020',
                'kabupaten_id' => '5302',
                'nama' => 'Tabundung'
            ],
            [
                'id' => '5302021',
                'kabupaten_id' => '5302',
                'nama' => 'Pinupahar'
            ],
            [
                'id' => '5302030',
                'kabupaten_id' => '5302',
                'nama' => 'Paberiwai'
            ],
            [
                'id' => '5302031',
                'kabupaten_id' => '5302',
                'nama' => 'Karera'
            ],
            [
                'id' => '5302032',
                'kabupaten_id' => '5302',
                'nama' => 'Matawai La Pawu'
            ],
            [
                'id' => '5302033',
                'kabupaten_id' => '5302',
                'nama' => 'Kahaungu Eti'
            ],
            [
                'id' => '5302034',
                'kabupaten_id' => '5302',
                'nama' => 'Mahu'
            ],
            [
                'id' => '5302035',
                'kabupaten_id' => '5302',
                'nama' => 'Ngadu Ngala'
            ],
            [
                'id' => '5302040',
                'kabupaten_id' => '5302',
                'nama' => 'Pahunga Lodu'
            ],
            [
                'id' => '5302041',
                'kabupaten_id' => '5302',
                'nama' => 'Wula Waijelu'
            ],
            [
                'id' => '5302051',
                'kabupaten_id' => '5302',
                'nama' => 'Rindi'
            ],
            [
                'id' => '5302052',
                'kabupaten_id' => '5302',
                'nama' => 'Umalulu'
            ],
            [
                'id' => '5302060',
                'kabupaten_id' => '5302',
                'nama' => 'Pandawai'
            ],
            [
                'id' => '5302061',
                'kabupaten_id' => '5302',
                'nama' => 'Kambata Mapambuhang'
            ],
            [
                'id' => '5302070',
                'kabupaten_id' => '5302',
                'nama' => 'Kota Waingapu'
            ],
            [
                'id' => '5302071',
                'kabupaten_id' => '5302',
                'nama' => 'Kambera'
            ],
            [
                'id' => '5302080',
                'kabupaten_id' => '5302',
                'nama' => 'Haharu'
            ],
            [
                'id' => '5302081',
                'kabupaten_id' => '5302',
                'nama' => 'Kanatang'
            ],
            [
                'id' => '5303100',
                'kabupaten_id' => '5303',
                'nama' => 'Semau'
            ],
            [
                'id' => '5303101',
                'kabupaten_id' => '5303',
                'nama' => 'Semau Selatan'
            ],
            [
                'id' => '5303110',
                'kabupaten_id' => '5303',
                'nama' => 'Kupang Barat'
            ],
            [
                'id' => '5303111',
                'kabupaten_id' => '5303',
                'nama' => 'Nekamese'
            ],
            [
                'id' => '5303120',
                'kabupaten_id' => '5303',
                'nama' => 'Kupang Tengah'
            ],
            [
                'id' => '5303121',
                'kabupaten_id' => '5303',
                'nama' => 'Taebenu'
            ],
            [
                'id' => '5303130',
                'kabupaten_id' => '5303',
                'nama' => 'Amarasi'
            ],
            [
                'id' => '5303131',
                'kabupaten_id' => '5303',
                'nama' => 'Amarasi Barat'
            ],
            [
                'id' => '5303132',
                'kabupaten_id' => '5303',
                'nama' => 'Amarasi Selatan'
            ],
            [
                'id' => '5303133',
                'kabupaten_id' => '5303',
                'nama' => 'Amarasi Timur'
            ],
            [
                'id' => '5303140',
                'kabupaten_id' => '5303',
                'nama' => 'Kupang Timur'
            ],
            [
                'id' => '5303141',
                'kabupaten_id' => '5303',
                'nama' => 'Amabi Oefeto Timur'
            ],
            [
                'id' => '5303142',
                'kabupaten_id' => '5303',
                'nama' => 'Amabi Oefeto'
            ],
            [
                'id' => '5303150',
                'kabupaten_id' => '5303',
                'nama' => 'Sulamu'
            ],
            [
                'id' => '5303160',
                'kabupaten_id' => '5303',
                'nama' => 'Fatuleu'
            ],
            [
                'id' => '5303161',
                'kabupaten_id' => '5303',
                'nama' => 'Fatuleu Tengah'
            ],
            [
                'id' => '5303162',
                'kabupaten_id' => '5303',
                'nama' => 'Fatuleu Barat'
            ],
            [
                'id' => '5303170',
                'kabupaten_id' => '5303',
                'nama' => 'Takari'
            ],
            [
                'id' => '5303180',
                'kabupaten_id' => '5303',
                'nama' => 'Amfoang Selatan'
            ],
            [
                'id' => '5303181',
                'kabupaten_id' => '5303',
                'nama' => 'Amfoang Barat Daya'
            ],
            [
                'id' => '5303182',
                'kabupaten_id' => '5303',
                'nama' => 'Amfoang Tengah'
            ],
            [
                'id' => '5303190',
                'kabupaten_id' => '5303',
                'nama' => 'Amfoang Utara'
            ],
            [
                'id' => '5303191',
                'kabupaten_id' => '5303',
                'nama' => 'Amfoang Barat Laut'
            ],
            [
                'id' => '5303192',
                'kabupaten_id' => '5303',
                'nama' => 'Amfoang Timur'
            ],
            [
                'id' => '5304010',
                'kabupaten_id' => '5304',
                'nama' => 'Mollo Utara'
            ],
            [
                'id' => '5304011',
                'kabupaten_id' => '5304',
                'nama' => 'Fatumnasi'
            ],
            [
                'id' => '5304012',
                'kabupaten_id' => '5304',
                'nama' => 'Tobu'
            ],
            [
                'id' => '5304013',
                'kabupaten_id' => '5304',
                'nama' => 'Nunbena'
            ],
            [
                'id' => '5304020',
                'kabupaten_id' => '5304',
                'nama' => 'Mollo Selatan'
            ],
            [
                'id' => '5304021',
                'kabupaten_id' => '5304',
                'nama' => 'Polen'
            ],
            [
                'id' => '5304022',
                'kabupaten_id' => '5304',
                'nama' => 'Mollo Barat'
            ],
            [
                'id' => '5304023',
                'kabupaten_id' => '5304',
                'nama' => 'Mollo Tengah'
            ],
            [
                'id' => '5304030',
                'kabupaten_id' => '5304',
                'nama' => 'Kota Soe'
            ],
            [
                'id' => '5304040',
                'kabupaten_id' => '5304',
                'nama' => 'Amanuban Barat'
            ],
            [
                'id' => '5304041',
                'kabupaten_id' => '5304',
                'nama' => 'Batu Putih'
            ],
            [
                'id' => '5304042',
                'kabupaten_id' => '5304',
                'nama' => 'Kuatnana'
            ],
            [
                'id' => '5304050',
                'kabupaten_id' => '5304',
                'nama' => 'Amanuban Selatan'
            ],
            [
                'id' => '5304051',
                'kabupaten_id' => '5304',
                'nama' => 'Noebeba'
            ],
            [
                'id' => '5304060',
                'kabupaten_id' => '5304',
                'nama' => 'Kuan Fatu'
            ],
            [
                'id' => '5304061',
                'kabupaten_id' => '5304',
                'nama' => 'Kualin'
            ],
            [
                'id' => '5304070',
                'kabupaten_id' => '5304',
                'nama' => 'Amanuban Tengah'
            ],
            [
                'id' => '5304071',
                'kabupaten_id' => '5304',
                'nama' => 'Kolbano'
            ],
            [
                'id' => '5304072',
                'kabupaten_id' => '5304',
                'nama' => 'Oenino'
            ],
            [
                'id' => '5304080',
                'kabupaten_id' => '5304',
                'nama' => 'Amanuban Timur'
            ],
            [
                'id' => '5304081',
                'kabupaten_id' => '5304',
                'nama' => 'Fautmolo'
            ],
            [
                'id' => '5304082',
                'kabupaten_id' => '5304',
                'nama' => 'Fatukopa'
            ],
            [
                'id' => '5304090',
                'kabupaten_id' => '5304',
                'nama' => 'Kie'
            ],
            [
                'id' => '5304091',
                'kabupaten_id' => '5304',
                'nama' => 'Kot\'olin'
            ],
            [
                'id' => '5304100',
                'kabupaten_id' => '5304',
                'nama' => 'Amanatun Selatan'
            ],
            [
                'id' => '5304101',
                'kabupaten_id' => '5304',
                'nama' => 'Boking'
            ],
            [
                'id' => '5304102',
                'kabupaten_id' => '5304',
                'nama' => 'Nunkolo'
            ],
            [
                'id' => '5304103',
                'kabupaten_id' => '5304',
                'nama' => 'Noebana'
            ],
            [
                'id' => '5304104',
                'kabupaten_id' => '5304',
                'nama' => 'Santian'
            ],
            [
                'id' => '5304110',
                'kabupaten_id' => '5304',
                'nama' => 'Amanatun Utara'
            ],
            [
                'id' => '5304111',
                'kabupaten_id' => '5304',
                'nama' => 'Toianas'
            ],
            [
                'id' => '5304112',
                'kabupaten_id' => '5304',
                'nama' => 'Kokbaun'
            ],
            [
                'id' => '5305010',
                'kabupaten_id' => '5305',
                'nama' => 'Miomaffo Barat'
            ],
            [
                'id' => '5305011',
                'kabupaten_id' => '5305',
                'nama' => 'Miomaffo Tengah'
            ],
            [
                'id' => '5305012',
                'kabupaten_id' => '5305',
                'nama' => 'Musi'
            ],
            [
                'id' => '5305013',
                'kabupaten_id' => '5305',
                'nama' => 'Mutis'
            ],
            [
                'id' => '5305020',
                'kabupaten_id' => '5305',
                'nama' => 'Miomaffo Timur'
            ],
            [
                'id' => '5305021',
                'kabupaten_id' => '5305',
                'nama' => 'Noemuti'
            ],
            [
                'id' => '5305022',
                'kabupaten_id' => '5305',
                'nama' => 'Bikomi Selatan'
            ],
            [
                'id' => '5305023',
                'kabupaten_id' => '5305',
                'nama' => 'Bikomi Tengah'
            ],
            [
                'id' => '5305024',
                'kabupaten_id' => '5305',
                'nama' => 'Bikomi Nilulat'
            ],
            [
                'id' => '5305025',
                'kabupaten_id' => '5305',
                'nama' => 'Bikomi Utara'
            ],
            [
                'id' => '5305026',
                'kabupaten_id' => '5305',
                'nama' => 'Naibenu'
            ],
            [
                'id' => '5305027',
                'kabupaten_id' => '5305',
                'nama' => 'Noemuti Timur'
            ],
            [
                'id' => '5305030',
                'kabupaten_id' => '5305',
                'nama' => 'Kota Kefamenanu'
            ],
            [
                'id' => '5305040',
                'kabupaten_id' => '5305',
                'nama' => 'Insana'
            ],
            [
                'id' => '5305041',
                'kabupaten_id' => '5305',
                'nama' => 'Insana Utara'
            ],
            [
                'id' => '5305042',
                'kabupaten_id' => '5305',
                'nama' => 'Insana Barat'
            ],
            [
                'id' => '5305043',
                'kabupaten_id' => '5305',
                'nama' => 'Insana Tengah'
            ],
            [
                'id' => '5305044',
                'kabupaten_id' => '5305',
                'nama' => 'Insana Fafinesu'
            ],
            [
                'id' => '5305050',
                'kabupaten_id' => '5305',
                'nama' => 'Biboki Selatan'
            ],
            [
                'id' => '5305051',
                'kabupaten_id' => '5305',
                'nama' => 'Biboki Tanpah'
            ],
            [
                'id' => '5305052',
                'kabupaten_id' => '5305',
                'nama' => 'Biboki Moenleu'
            ],
            [
                'id' => '5305060',
                'kabupaten_id' => '5305',
                'nama' => 'Biboki Utara'
            ],
            [
                'id' => '5305061',
                'kabupaten_id' => '5305',
                'nama' => 'Biboki Anleu'
            ],
            [
                'id' => '5305062',
                'kabupaten_id' => '5305',
                'nama' => 'Biboki Feotleu'
            ],
            [
                'id' => '5306010',
                'kabupaten_id' => '5306',
                'nama' => 'Malaka Barat'
            ],
            [
                'id' => '5306011',
                'kabupaten_id' => '5306',
                'nama' => 'Rinhat'
            ],
            [
                'id' => '5306012',
                'kabupaten_id' => '5306',
                'nama' => 'Wewiku'
            ],
            [
                'id' => '5306013',
                'kabupaten_id' => '5306',
                'nama' => 'Weliman'
            ],
            [
                'id' => '5306020',
                'kabupaten_id' => '5306',
                'nama' => 'Malaka Tengah'
            ],
            [
                'id' => '5306021',
                'kabupaten_id' => '5306',
                'nama' => 'Sasita Mean'
            ],
            [
                'id' => '5306022',
                'kabupaten_id' => '5306',
                'nama' => 'Botin Leobele'
            ],
            [
                'id' => '5306023',
                'kabupaten_id' => '5306',
                'nama' => 'Io Kufeu'
            ],
            [
                'id' => '5306030',
                'kabupaten_id' => '5306',
                'nama' => 'Malaka Timur'
            ],
            [
                'id' => '5306031',
                'kabupaten_id' => '5306',
                'nama' => 'Laen Manen'
            ],
            [
                'id' => '5306032',
                'kabupaten_id' => '5306',
                'nama' => 'Rai Manuk'
            ],
            [
                'id' => '5306040',
                'kabupaten_id' => '5306',
                'nama' => 'Kobalima'
            ],
            [
                'id' => '5306041',
                'kabupaten_id' => '5306',
                'nama' => 'Kobalima Timur'
            ],
            [
                'id' => '5306050',
                'kabupaten_id' => '5306',
                'nama' => 'Tasifeto Barat'
            ],
            [
                'id' => '5306051',
                'kabupaten_id' => '5306',
                'nama' => 'Kakuluk Mesak'
            ],
            [
                'id' => '5306052',
                'kabupaten_id' => '5306',
                'nama' => 'Nanaet Dubesi'
            ],
            [
                'id' => '5306060',
                'kabupaten_id' => '5306',
                'nama' => 'Atambua'
            ],
            [
                'id' => '5306061',
                'kabupaten_id' => '5306',
                'nama' => 'Atambua Barat'
            ],
            [
                'id' => '5306062',
                'kabupaten_id' => '5306',
                'nama' => 'Atambua Selatan'
            ],
            [
                'id' => '5306070',
                'kabupaten_id' => '5306',
                'nama' => 'Tasifeto Timur'
            ],
            [
                'id' => '5306071',
                'kabupaten_id' => '5306',
                'nama' => 'Raihat'
            ],
            [
                'id' => '5306072',
                'kabupaten_id' => '5306',
                'nama' => 'Lasiolat'
            ],
            [
                'id' => '5306080',
                'kabupaten_id' => '5306',
                'nama' => 'Lamaknen'
            ],
            [
                'id' => '5306081',
                'kabupaten_id' => '5306',
                'nama' => 'Lamaknen Selatan'
            ],
            [
                'id' => '5307010',
                'kabupaten_id' => '5307',
                'nama' => 'Pantar'
            ],
            [
                'id' => '5307011',
                'kabupaten_id' => '5307',
                'nama' => 'Pantar Barat'
            ],
            [
                'id' => '5307012',
                'kabupaten_id' => '5307',
                'nama' => 'Pantar Timur'
            ],
            [
                'id' => '5307013',
                'kabupaten_id' => '5307',
                'nama' => 'Pantar Barat Laut'
            ],
            [
                'id' => '5307014',
                'kabupaten_id' => '5307',
                'nama' => 'Pantar Tengah'
            ],
            [
                'id' => '5307020',
                'kabupaten_id' => '5307',
                'nama' => 'Alor Barat Daya'
            ],
            [
                'id' => '5307021',
                'kabupaten_id' => '5307',
                'nama' => 'Mataru'
            ],
            [
                'id' => '5307030',
                'kabupaten_id' => '5307',
                'nama' => 'Alor Selatan'
            ],
            [
                'id' => '5307040',
                'kabupaten_id' => '5307',
                'nama' => 'Alor Timur'
            ],
            [
                'id' => '5307041',
                'kabupaten_id' => '5307',
                'nama' => 'Alor Timur Laut'
            ],
            [
                'id' => '5307042',
                'kabupaten_id' => '5307',
                'nama' => 'Pureman'
            ],
            [
                'id' => '5307050',
                'kabupaten_id' => '5307',
                'nama' => 'Teluk Mutiara'
            ],
            [
                'id' => '5307051',
                'kabupaten_id' => '5307',
                'nama' => 'Kabola'
            ],
            [
                'id' => '5307060',
                'kabupaten_id' => '5307',
                'nama' => 'Alor Barat Laut'
            ],
            [
                'id' => '5307061',
                'kabupaten_id' => '5307',
                'nama' => 'Alor Tengah Utara'
            ],
            [
                'id' => '5307062',
                'kabupaten_id' => '5307',
                'nama' => 'Pulau Pura'
            ],
            [
                'id' => '5307063',
                'kabupaten_id' => '5307',
                'nama' => 'Lembur'
            ],
            [
                'id' => '5308010',
                'kabupaten_id' => '5308',
                'nama' => 'Nagawutung'
            ],
            [
                'id' => '5308011',
                'kabupaten_id' => '5308',
                'nama' => 'Wulandoni'
            ],
            [
                'id' => '5308020',
                'kabupaten_id' => '5308',
                'nama' => 'Atadei'
            ],
            [
                'id' => '5308030',
                'kabupaten_id' => '5308',
                'nama' => 'Ile Ape'
            ],
            [
                'id' => '5308031',
                'kabupaten_id' => '5308',
                'nama' => 'Ile Ape Timur'
            ],
            [
                'id' => '5308040',
                'kabupaten_id' => '5308',
                'nama' => 'Lebatukan'
            ],
            [
                'id' => '5308050',
                'kabupaten_id' => '5308',
                'nama' => 'Nubatukan'
            ],
            [
                'id' => '5308060',
                'kabupaten_id' => '5308',
                'nama' => 'Omesuri'
            ],
            [
                'id' => '5308070',
                'kabupaten_id' => '5308',
                'nama' => 'Buyasari'
            ],
            [
                'id' => '5309010',
                'kabupaten_id' => '5309',
                'nama' => 'Wulanggitang'
            ],
            [
                'id' => '5309011',
                'kabupaten_id' => '5309',
                'nama' => 'Titehena'
            ],
            [
                'id' => '5309012',
                'kabupaten_id' => '5309',
                'nama' => 'Ilebura'
            ],
            [
                'id' => '5309020',
                'kabupaten_id' => '5309',
                'nama' => 'Tanjung Bunga'
            ],
            [
                'id' => '5309021',
                'kabupaten_id' => '5309',
                'nama' => 'Lewo Lema'
            ],
            [
                'id' => '5309030',
                'kabupaten_id' => '5309',
                'nama' => 'Larantuka'
            ],
            [
                'id' => '5309031',
                'kabupaten_id' => '5309',
                'nama' => 'Ile Mandiri'
            ],
            [
                'id' => '5309032',
                'kabupaten_id' => '5309',
                'nama' => 'Demon Pagong'
            ],
            [
                'id' => '5309040',
                'kabupaten_id' => '5309',
                'nama' => 'Solor Barat'
            ],
            [
                'id' => '5309041',
                'kabupaten_id' => '5309',
                'nama' => 'Solor Selatan'
            ],
            [
                'id' => '5309050',
                'kabupaten_id' => '5309',
                'nama' => 'Solor Timur'
            ],
            [
                'id' => '5309060',
                'kabupaten_id' => '5309',
                'nama' => 'Adonara Barat'
            ],
            [
                'id' => '5309061',
                'kabupaten_id' => '5309',
                'nama' => 'Wotan Ulu Mado'
            ],
            [
                'id' => '5309062',
                'kabupaten_id' => '5309',
                'nama' => 'Adonara Tengah'
            ],
            [
                'id' => '5309070',
                'kabupaten_id' => '5309',
                'nama' => 'Adonara Timur'
            ],
            [
                'id' => '5309071',
                'kabupaten_id' => '5309',
                'nama' => 'Ile Boleng'
            ],
            [
                'id' => '5309072',
                'kabupaten_id' => '5309',
                'nama' => 'Witihama'
            ],
            [
                'id' => '5309073',
                'kabupaten_id' => '5309',
                'nama' => 'Kelubagolit'
            ],
            [
                'id' => '5309074',
                'kabupaten_id' => '5309',
                'nama' => 'Adonara'
            ],
            [
                'id' => '5310010',
                'kabupaten_id' => '5310',
                'nama' => 'Paga'
            ],
            [
                'id' => '5310011',
                'kabupaten_id' => '5310',
                'nama' => 'Mego'
            ],
            [
                'id' => '5310012',
                'kabupaten_id' => '5310',
                'nama' => 'Tana Wawo'
            ],
            [
                'id' => '5310020',
                'kabupaten_id' => '5310',
                'nama' => 'Lela'
            ],
            [
                'id' => '5310030',
                'kabupaten_id' => '5310',
                'nama' => 'Bola'
            ],
            [
                'id' => '5310031',
                'kabupaten_id' => '5310',
                'nama' => 'Doreng'
            ],
            [
                'id' => '5310032',
                'kabupaten_id' => '5310',
                'nama' => 'Mapitara'
            ],
            [
                'id' => '5310040',
                'kabupaten_id' => '5310',
                'nama' => 'Talibura'
            ],
            [
                'id' => '5310041',
                'kabupaten_id' => '5310',
                'nama' => 'Waigete'
            ],
            [
                'id' => '5310042',
                'kabupaten_id' => '5310',
                'nama' => 'Waiblama'
            ],
            [
                'id' => '5310050',
                'kabupaten_id' => '5310',
                'nama' => 'Kewapante'
            ],
            [
                'id' => '5310051',
                'kabupaten_id' => '5310',
                'nama' => 'Hewokloang'
            ],
            [
                'id' => '5310052',
                'kabupaten_id' => '5310',
                'nama' => 'Kangae'
            ],
            [
                'id' => '5310061',
                'kabupaten_id' => '5310',
                'nama' => 'Palue'
            ],
            [
                'id' => '5310062',
                'kabupaten_id' => '5310',
                'nama' => 'Koting'
            ],
            [
                'id' => '5310063',
                'kabupaten_id' => '5310',
                'nama' => 'Nelle'
            ],
            [
                'id' => '5310070',
                'kabupaten_id' => '5310',
                'nama' => 'Nita'
            ],
            [
                'id' => '5310071',
                'kabupaten_id' => '5310',
                'nama' => 'Magepanda'
            ],
            [
                'id' => '5310080',
                'kabupaten_id' => '5310',
                'nama' => 'Alok'
            ],
            [
                'id' => '5310081',
                'kabupaten_id' => '5310',
                'nama' => 'Alok Barat'
            ],
            [
                'id' => '5310082',
                'kabupaten_id' => '5310',
                'nama' => 'Alok Timur'
            ],
            [
                'id' => '5311010',
                'kabupaten_id' => '5311',
                'nama' => 'Nangapanda'
            ],
            [
                'id' => '5311011',
                'kabupaten_id' => '5311',
                'nama' => 'Pulau Ende'
            ],
            [
                'id' => '5311012',
                'kabupaten_id' => '5311',
                'nama' => 'Maukaro'
            ],
            [
                'id' => '5311020',
                'kabupaten_id' => '5311',
                'nama' => 'Ende'
            ],
            [
                'id' => '5311030',
                'kabupaten_id' => '5311',
                'nama' => 'Ende Selatan'
            ],
            [
                'id' => '5311031',
                'kabupaten_id' => '5311',
                'nama' => 'Ende Timur'
            ],
            [
                'id' => '5311032',
                'kabupaten_id' => '5311',
                'nama' => 'Ende Tengah'
            ],
            [
                'id' => '5311033',
                'kabupaten_id' => '5311',
                'nama' => 'Ende Utara'
            ],
            [
                'id' => '5311040',
                'kabupaten_id' => '5311',
                'nama' => 'Ndona'
            ],
            [
                'id' => '5311041',
                'kabupaten_id' => '5311',
                'nama' => 'Ndona Timur'
            ],
            [
                'id' => '5311050',
                'kabupaten_id' => '5311',
                'nama' => 'Wolowaru'
            ],
            [
                'id' => '5311051',
                'kabupaten_id' => '5311',
                'nama' => 'Wolojita'
            ],
            [
                'id' => '5311052',
                'kabupaten_id' => '5311',
                'nama' => 'Lio Timur'
            ],
            [
                'id' => '5311053',
                'kabupaten_id' => '5311',
                'nama' => 'Kelimutu'
            ],
            [
                'id' => '5311054',
                'kabupaten_id' => '5311',
                'nama' => 'Ndori'
            ],
            [
                'id' => '5311060',
                'kabupaten_id' => '5311',
                'nama' => 'Maurole'
            ],
            [
                'id' => '5311061',
                'kabupaten_id' => '5311',
                'nama' => 'Kotabaru'
            ],
            [
                'id' => '5311062',
                'kabupaten_id' => '5311',
                'nama' => 'Detukeli'
            ],
            [
                'id' => '5311063',
                'kabupaten_id' => '5311',
                'nama' => 'Lepembusu Kelisoke'
            ],
            [
                'id' => '5311070',
                'kabupaten_id' => '5311',
                'nama' => 'Detusoko'
            ],
            [
                'id' => '5311071',
                'kabupaten_id' => '5311',
                'nama' => 'Wewaria'
            ],
            [
                'id' => '5312010',
                'kabupaten_id' => '5312',
                'nama' => 'Aimere'
            ],
            [
                'id' => '5312011',
                'kabupaten_id' => '5312',
                'nama' => 'Jerebuu'
            ],
            [
                'id' => '5312012',
                'kabupaten_id' => '5312',
                'nama' => 'Inerie'
            ],
            [
                'id' => '5312020',
                'kabupaten_id' => '5312',
                'nama' => 'Bajawa'
            ],
            [
                'id' => '5312030',
                'kabupaten_id' => '5312',
                'nama' => 'Golewa'
            ],
            [
                'id' => '5312031',
                'kabupaten_id' => '5312',
                'nama' => 'Golewa Selatan'
            ],
            [
                'id' => '5312032',
                'kabupaten_id' => '5312',
                'nama' => 'Golewa Barat'
            ],
            [
                'id' => '5312070',
                'kabupaten_id' => '5312',
                'nama' => 'Bajawa Utara'
            ],
            [
                'id' => '5312071',
                'kabupaten_id' => '5312',
                'nama' => 'Soa'
            ],
            [
                'id' => '5312080',
                'kabupaten_id' => '5312',
                'nama' => 'Riung'
            ],
            [
                'id' => '5312081',
                'kabupaten_id' => '5312',
                'nama' => 'Riung Barat'
            ],
            [
                'id' => '5312082',
                'kabupaten_id' => '5312',
                'nama' => 'Wolomeze'
            ],
            [
                'id' => '5313040',
                'kabupaten_id' => '5313',
                'nama' => 'Satar Mese'
            ],
            [
                'id' => '5313041',
                'kabupaten_id' => '5313',
                'nama' => 'Satar Mese Barat'
            ],
            [
                'id' => '5313110',
                'kabupaten_id' => '5313',
                'nama' => 'Langke Rembong'
            ],
            [
                'id' => '5313120',
                'kabupaten_id' => '5313',
                'nama' => 'Ruteng'
            ],
            [
                'id' => '5313121',
                'kabupaten_id' => '5313',
                'nama' => 'Wae Rii'
            ],
            [
                'id' => '5313122',
                'kabupaten_id' => '5313',
                'nama' => 'Lelak'
            ],
            [
                'id' => '5313123',
                'kabupaten_id' => '5313',
                'nama' => 'Rahong Utara'
            ],
            [
                'id' => '5313130',
                'kabupaten_id' => '5313',
                'nama' => 'Cibal'
            ],
            [
                'id' => '5313131',
                'kabupaten_id' => '5313',
                'nama' => 'Cibal Barat'
            ],
            [
                'id' => '5313140',
                'kabupaten_id' => '5313',
                'nama' => 'Reok'
            ],
            [
                'id' => '5313141',
                'kabupaten_id' => '5313',
                'nama' => 'Reok Barat'
            ],
            [
                'id' => '5314010',
                'kabupaten_id' => '5314',
                'nama' => 'Rote Barat Daya'
            ],
            [
                'id' => '5314020',
                'kabupaten_id' => '5314',
                'nama' => 'Rote Barat Laut'
            ],
            [
                'id' => '5314030',
                'kabupaten_id' => '5314',
                'nama' => 'Lobalain'
            ],
            [
                'id' => '5314040',
                'kabupaten_id' => '5314',
                'nama' => 'Rote Tengah'
            ],
            [
                'id' => '5314041',
                'kabupaten_id' => '5314',
                'nama' => 'Rote Selatan'
            ],
            [
                'id' => '5314050',
                'kabupaten_id' => '5314',
                'nama' => 'Pantai Baru'
            ],
            [
                'id' => '5314060',
                'kabupaten_id' => '5314',
                'nama' => 'Rote Timur'
            ],
            [
                'id' => '5314061',
                'kabupaten_id' => '5314',
                'nama' => 'Landu Leko'
            ],
            [
                'id' => '5314070',
                'kabupaten_id' => '5314',
                'nama' => 'Rote Barat'
            ],
            [
                'id' => '5314071',
                'kabupaten_id' => '5314',
                'nama' => 'Ndao Nuse'
            ],
            [
                'id' => '5315010',
                'kabupaten_id' => '5315',
                'nama' => 'Komodo'
            ],
            [
                'id' => '5315011',
                'kabupaten_id' => '5315',
                'nama' => 'Boleng'
            ],
            [
                'id' => '5315020',
                'kabupaten_id' => '5315',
                'nama' => 'Sano Nggoang'
            ],
            [
                'id' => '5315021',
                'kabupaten_id' => '5315',
                'nama' => 'Mbeliling'
            ],
            [
                'id' => '5315030',
                'kabupaten_id' => '5315',
                'nama' => 'Lembor'
            ],
            [
                'id' => '5315031',
                'kabupaten_id' => '5315',
                'nama' => 'Welak'
            ],
            [
                'id' => '5315032',
                'kabupaten_id' => '5315',
                'nama' => 'Lembor Selatan'
            ],
            [
                'id' => '5315040',
                'kabupaten_id' => '5315',
                'nama' => 'Kuwus'
            ],
            [
                'id' => '5315041',
                'kabupaten_id' => '5315',
                'nama' => 'Ndoso'
            ],
            [
                'id' => '5315050',
                'kabupaten_id' => '5315',
                'nama' => 'Macang Pacar'
            ],
            [
                'id' => '5316010',
                'kabupaten_id' => '5316',
                'nama' => 'Katikutana'
            ],
            [
                'id' => '5316011',
                'kabupaten_id' => '5316',
                'nama' => 'Katikutana Selatan'
            ],
            [
                'id' => '5316020',
                'kabupaten_id' => '5316',
                'nama' => 'Umbu Ratu Nggay Barat'
            ],
            [
                'id' => '5316030',
                'kabupaten_id' => '5316',
                'nama' => 'Umbu Ratu Nggay'
            ],
            [
                'id' => '5316040',
                'kabupaten_id' => '5316',
                'nama' => 'Mamboro'
            ],
            [
                'id' => '5317010',
                'kabupaten_id' => '5317',
                'nama' => 'Kodi Bangedo'
            ],
            [
                'id' => '5317011',
                'kabupaten_id' => '5317',
                'nama' => 'Kodi Balaghar'
            ],
            [
                'id' => '5317020',
                'kabupaten_id' => '5317',
                'nama' => 'Kodi'
            ],
            [
                'id' => '5317030',
                'kabupaten_id' => '5317',
                'nama' => 'Kodi Utara'
            ],
            [
                'id' => '5317040',
                'kabupaten_id' => '5317',
                'nama' => 'Wewewa Selatan'
            ],
            [
                'id' => '5317050',
                'kabupaten_id' => '5317',
                'nama' => 'Wewewa Barat'
            ],
            [
                'id' => '5317060',
                'kabupaten_id' => '5317',
                'nama' => 'Wewewa Timur'
            ],
            [
                'id' => '5317061',
                'kabupaten_id' => '5317',
                'nama' => 'Wewewa Tengah'
            ],
            [
                'id' => '5317070',
                'kabupaten_id' => '5317',
                'nama' => 'Wewewa Utara'
            ],
            [
                'id' => '5317080',
                'kabupaten_id' => '5317',
                'nama' => 'Loura'
            ],
            [
                'id' => '5317081',
                'kabupaten_id' => '5317',
                'nama' => 'Kota Tambolaka'
            ],
            [
                'id' => '5318010',
                'kabupaten_id' => '5318',
                'nama' => 'Mauponggo'
            ],
            [
                'id' => '5318020',
                'kabupaten_id' => '5318',
                'nama' => 'Keo Tengah'
            ],
            [
                'id' => '5318030',
                'kabupaten_id' => '5318',
                'nama' => 'Nangaroro'
            ],
            [
                'id' => '5318040',
                'kabupaten_id' => '5318',
                'nama' => 'Boawae'
            ],
            [
                'id' => '5318050',
                'kabupaten_id' => '5318',
                'nama' => 'Aesesa Selatan'
            ],
            [
                'id' => '5318060',
                'kabupaten_id' => '5318',
                'nama' => 'Aesesa'
            ],
            [
                'id' => '5318070',
                'kabupaten_id' => '5318',
                'nama' => 'Wolowae'
            ],
            [
                'id' => '5319010',
                'kabupaten_id' => '5319',
                'nama' => 'Borong'
            ],
            [
                'id' => '5319011',
                'kabupaten_id' => '5319',
                'nama' => 'Rana Mese'
            ],
            [
                'id' => '5319020',
                'kabupaten_id' => '5319',
                'nama' => 'Kota Komba'
            ],
            [
                'id' => '5319030',
                'kabupaten_id' => '5319',
                'nama' => 'Elar'
            ],
            [
                'id' => '5319031',
                'kabupaten_id' => '5319',
                'nama' => 'Elar Selatan'
            ],
            [
                'id' => '5319040',
                'kabupaten_id' => '5319',
                'nama' => 'Sambi Rampas'
            ],
            [
                'id' => '5319050',
                'kabupaten_id' => '5319',
                'nama' => 'Poco Ranaka'
            ],
            [
                'id' => '5319051',
                'kabupaten_id' => '5319',
                'nama' => 'Poco Ranaka Timur'
            ],
            [
                'id' => '5319060',
                'kabupaten_id' => '5319',
                'nama' => 'Lamba Leda'
            ],
            [
                'id' => '5320010',
                'kabupaten_id' => '5320',
                'nama' => 'Raijua'
            ],
            [
                'id' => '5320020',
                'kabupaten_id' => '5320',
                'nama' => 'Hawu Mehara'
            ],
            [
                'id' => '5320030',
                'kabupaten_id' => '5320',
                'nama' => 'Sabu Liae'
            ],
            [
                'id' => '5320040',
                'kabupaten_id' => '5320',
                'nama' => 'Sabu Barat'
            ],
            [
                'id' => '5320050',
                'kabupaten_id' => '5320',
                'nama' => 'Sabu Tengah'
            ],
            [
                'id' => '5320060',
                'kabupaten_id' => '5320',
                'nama' => 'Sabu Timur'
            ],
            [
                'id' => '5371010',
                'kabupaten_id' => '5371',
                'nama' => 'Alak'
            ],
            [
                'id' => '5371020',
                'kabupaten_id' => '5371',
                'nama' => 'Maulafa'
            ],
            [
                'id' => '5371030',
                'kabupaten_id' => '5371',
                'nama' => 'Oebobo'
            ],
            [
                'id' => '5371031',
                'kabupaten_id' => '5371',
                'nama' => 'Kota Raja'
            ],
            [
                'id' => '5371040',
                'kabupaten_id' => '5371',
                'nama' => 'Kelapa Lima'
            ],
            [
                'id' => '5371041',
                'kabupaten_id' => '5371',
                'nama' => 'Kota Lama'
            ],
            [
                'id' => '6101010',
                'kabupaten_id' => '6101',
                'nama' => 'Selakau'
            ],
            [
                'id' => '6101011',
                'kabupaten_id' => '6101',
                'nama' => 'Selakau Timur'
            ],
            [
                'id' => '6101020',
                'kabupaten_id' => '6101',
                'nama' => 'Pemangkat'
            ],
            [
                'id' => '6101021',
                'kabupaten_id' => '6101',
                'nama' => 'Semparuk'
            ],
            [
                'id' => '6101022',
                'kabupaten_id' => '6101',
                'nama' => 'Salatiga'
            ],
            [
                'id' => '6101030',
                'kabupaten_id' => '6101',
                'nama' => 'Tebas'
            ],
            [
                'id' => '6101031',
                'kabupaten_id' => '6101',
                'nama' => 'Tekarang'
            ],
            [
                'id' => '6101040',
                'kabupaten_id' => '6101',
                'nama' => 'Sambas'
            ],
            [
                'id' => '6101041',
                'kabupaten_id' => '6101',
                'nama' => 'Subah'
            ],
            [
                'id' => '6101042',
                'kabupaten_id' => '6101',
                'nama' => 'Sebawi'
            ],
            [
                'id' => '6101043',
                'kabupaten_id' => '6101',
                'nama' => 'Sajad'
            ],
            [
                'id' => '6101050',
                'kabupaten_id' => '6101',
                'nama' => 'Jawai'
            ],
            [
                'id' => '6101051',
                'kabupaten_id' => '6101',
                'nama' => 'Jawai Selatan'
            ],
            [
                'id' => '6101060',
                'kabupaten_id' => '6101',
                'nama' => 'Teluk Keramat'
            ],
            [
                'id' => '6101061',
                'kabupaten_id' => '6101',
                'nama' => 'Galing'
            ],
            [
                'id' => '6101062',
                'kabupaten_id' => '6101',
                'nama' => 'Tangaran'
            ],
            [
                'id' => '6101070',
                'kabupaten_id' => '6101',
                'nama' => 'Sejangkung'
            ],
            [
                'id' => '6101080',
                'kabupaten_id' => '6101',
                'nama' => 'Sajingan Besar'
            ],
            [
                'id' => '6101090',
                'kabupaten_id' => '6101',
                'nama' => 'Paloh'
            ],
            [
                'id' => '6102010',
                'kabupaten_id' => '6102',
                'nama' => 'Sungai Raya'
            ],
            [
                'id' => '6102011',
                'kabupaten_id' => '6102',
                'nama' => 'Capkala'
            ],
            [
                'id' => '6102012',
                'kabupaten_id' => '6102',
                'nama' => 'Sungai Raya Kepulauan'
            ],
            [
                'id' => '6102030',
                'kabupaten_id' => '6102',
                'nama' => 'Samalantan'
            ],
            [
                'id' => '6102031',
                'kabupaten_id' => '6102',
                'nama' => 'Monterado'
            ],
            [
                'id' => '6102032',
                'kabupaten_id' => '6102',
                'nama' => 'Lembah Bawang'
            ],
            [
                'id' => '6102040',
                'kabupaten_id' => '6102',
                'nama' => 'Bengkayang'
            ],
            [
                'id' => '6102041',
                'kabupaten_id' => '6102',
                'nama' => 'Teriak'
            ],
            [
                'id' => '6102042',
                'kabupaten_id' => '6102',
                'nama' => 'Sungai Betung'
            ],
            [
                'id' => '6102050',
                'kabupaten_id' => '6102',
                'nama' => 'Ledo'
            ],
            [
                'id' => '6102051',
                'kabupaten_id' => '6102',
                'nama' => 'Suti Semarang'
            ],
            [
                'id' => '6102052',
                'kabupaten_id' => '6102',
                'nama' => 'Lumar'
            ],
            [
                'id' => '6102060',
                'kabupaten_id' => '6102',
                'nama' => 'Sanggau Ledo'
            ],
            [
                'id' => '6102061',
                'kabupaten_id' => '6102',
                'nama' => 'Tujuhbelas'
            ],
            [
                'id' => '6102070',
                'kabupaten_id' => '6102',
                'nama' => 'Seluas'
            ],
            [
                'id' => '6102080',
                'kabupaten_id' => '6102',
                'nama' => 'Jagoi Babang'
            ],
            [
                'id' => '6102081',
                'kabupaten_id' => '6102',
                'nama' => 'Siding'
            ],
            [
                'id' => '6103020',
                'kabupaten_id' => '6103',
                'nama' => 'Sebangki'
            ],
            [
                'id' => '6103030',
                'kabupaten_id' => '6103',
                'nama' => 'Ngabang'
            ],
            [
                'id' => '6103031',
                'kabupaten_id' => '6103',
                'nama' => 'Jelimpo'
            ],
            [
                'id' => '6103040',
                'kabupaten_id' => '6103',
                'nama' => 'Sengah Temila'
            ],
            [
                'id' => '6103050',
                'kabupaten_id' => '6103',
                'nama' => 'Mandor'
            ],
            [
                'id' => '6103060',
                'kabupaten_id' => '6103',
                'nama' => 'Menjalin'
            ],
            [
                'id' => '6103070',
                'kabupaten_id' => '6103',
                'nama' => 'Mempawah Hulu'
            ],
            [
                'id' => '6103071',
                'kabupaten_id' => '6103',
                'nama' => 'Sompak'
            ],
            [
                'id' => '6103080',
                'kabupaten_id' => '6103',
                'nama' => 'Menyuke'
            ],
            [
                'id' => '6103081',
                'kabupaten_id' => '6103',
                'nama' => 'Banyuke Hulu'
            ],
            [
                'id' => '6103090',
                'kabupaten_id' => '6103',
                'nama' => 'Meranti'
            ],
            [
                'id' => '6103100',
                'kabupaten_id' => '6103',
                'nama' => 'Kuala Behe'
            ],
            [
                'id' => '6103110',
                'kabupaten_id' => '6103',
                'nama' => 'Air Besar'
            ],
            [
                'id' => '6104080',
                'kabupaten_id' => '6104',
                'nama' => 'Siantan'
            ],
            [
                'id' => '6104081',
                'kabupaten_id' => '6104',
                'nama' => 'Segedong'
            ],
            [
                'id' => '6104090',
                'kabupaten_id' => '6104',
                'nama' => 'Sungai Pinyuh'
            ],
            [
                'id' => '6104091',
                'kabupaten_id' => '6104',
                'nama' => 'Anjongan'
            ],
            [
                'id' => '6104100',
                'kabupaten_id' => '6104',
                'nama' => 'Mempawah Hilir'
            ],
            [
                'id' => '6104101',
                'kabupaten_id' => '6104',
                'nama' => 'Mempawah Timur'
            ],
            [
                'id' => '6104110',
                'kabupaten_id' => '6104',
                'nama' => 'Sungai Kunyit'
            ],
            [
                'id' => '6104120',
                'kabupaten_id' => '6104',
                'nama' => 'Toho'
            ],
            [
                'id' => '6104121',
                'kabupaten_id' => '6104',
                'nama' => 'Sadaniang'
            ],
            [
                'id' => '6105010',
                'kabupaten_id' => '6105',
                'nama' => 'Toba'
            ],
            [
                'id' => '6105020',
                'kabupaten_id' => '6105',
                'nama' => 'Meliau'
            ],
            [
                'id' => '6105060',
                'kabupaten_id' => '6105',
                'nama' => 'Kapuas'
            ],
            [
                'id' => '6105070',
                'kabupaten_id' => '6105',
                'nama' => 'Mukok'
            ],
            [
                'id' => '6105120',
                'kabupaten_id' => '6105',
                'nama' => 'Jangkang'
            ],
            [
                'id' => '6105130',
                'kabupaten_id' => '6105',
                'nama' => 'Bonti'
            ],
            [
                'id' => '6105140',
                'kabupaten_id' => '6105',
                'nama' => 'Parindu'
            ],
            [
                'id' => '6105150',
                'kabupaten_id' => '6105',
                'nama' => 'Tayan Hilir'
            ],
            [
                'id' => '6105160',
                'kabupaten_id' => '6105',
                'nama' => 'Balai'
            ],
            [
                'id' => '6105170',
                'kabupaten_id' => '6105',
                'nama' => 'Tayan Hulu'
            ],
            [
                'id' => '6105180',
                'kabupaten_id' => '6105',
                'nama' => 'Kembayan'
            ],
            [
                'id' => '6105190',
                'kabupaten_id' => '6105',
                'nama' => 'Beduwai'
            ],
            [
                'id' => '6105200',
                'kabupaten_id' => '6105',
                'nama' => 'Noyan'
            ],
            [
                'id' => '6105210',
                'kabupaten_id' => '6105',
                'nama' => 'Sekayam'
            ],
            [
                'id' => '6105220',
                'kabupaten_id' => '6105',
                'nama' => 'Entikong'
            ],
            [
                'id' => '6106010',
                'kabupaten_id' => '6106',
                'nama' => 'Kendawangan'
            ],
            [
                'id' => '6106020',
                'kabupaten_id' => '6106',
                'nama' => 'Manis Mata'
            ],
            [
                'id' => '6106030',
                'kabupaten_id' => '6106',
                'nama' => 'Marau'
            ],
            [
                'id' => '6106031',
                'kabupaten_id' => '6106',
                'nama' => 'Singkup'
            ],
            [
                'id' => '6106032',
                'kabupaten_id' => '6106',
                'nama' => 'Air Upas'
            ],
            [
                'id' => '6106040',
                'kabupaten_id' => '6106',
                'nama' => 'Jelai Hulu'
            ],
            [
                'id' => '6106050',
                'kabupaten_id' => '6106',
                'nama' => 'Tumbang Titi'
            ],
            [
                'id' => '6106051',
                'kabupaten_id' => '6106',
                'nama' => 'Pemahan'
            ],
            [
                'id' => '6106052',
                'kabupaten_id' => '6106',
                'nama' => 'Sungai Melayu Rayak'
            ],
            [
                'id' => '6106060',
                'kabupaten_id' => '6106',
                'nama' => 'Matan Hilir Selatan'
            ],
            [
                'id' => '6106061',
                'kabupaten_id' => '6106',
                'nama' => 'Benua Kayong'
            ],
            [
                'id' => '6106070',
                'kabupaten_id' => '6106',
                'nama' => 'Matan Hilir Utara'
            ],
            [
                'id' => '6106071',
                'kabupaten_id' => '6106',
                'nama' => 'Delta Pawan'
            ],
            [
                'id' => '6106072',
                'kabupaten_id' => '6106',
                'nama' => 'Muara Pawan'
            ],
            [
                'id' => '6106090',
                'kabupaten_id' => '6106',
                'nama' => 'Nanga Tayap'
            ],
            [
                'id' => '6106100',
                'kabupaten_id' => '6106',
                'nama' => 'Sandai'
            ],
            [
                'id' => '6106101',
                'kabupaten_id' => '6106',
                'nama' => 'Hulu Sungai'
            ],
            [
                'id' => '6106110',
                'kabupaten_id' => '6106',
                'nama' => 'Sungai Laur'
            ],
            [
                'id' => '6106120',
                'kabupaten_id' => '6106',
                'nama' => 'Simpang Hulu'
            ],
            [
                'id' => '6106121',
                'kabupaten_id' => '6106',
                'nama' => 'Simpang Dua'
            ],
            [
                'id' => '6107060',
                'kabupaten_id' => '6107',
                'nama' => 'Serawai'
            ],
            [
                'id' => '6107070',
                'kabupaten_id' => '6107',
                'nama' => 'Ambalau'
            ],
            [
                'id' => '6107080',
                'kabupaten_id' => '6107',
                'nama' => 'Kayan Hulu'
            ],
            [
                'id' => '6107110',
                'kabupaten_id' => '6107',
                'nama' => 'Sepauk'
            ],
            [
                'id' => '6107120',
                'kabupaten_id' => '6107',
                'nama' => 'Tempunak'
            ],
            [
                'id' => '6107130',
                'kabupaten_id' => '6107',
                'nama' => 'Sungai Tebelian'
            ],
            [
                'id' => '6107140',
                'kabupaten_id' => '6107',
                'nama' => 'Sintang'
            ],
            [
                'id' => '6107150',
                'kabupaten_id' => '6107',
                'nama' => 'Dedai'
            ],
            [
                'id' => '6107160',
                'kabupaten_id' => '6107',
                'nama' => 'Kayan Hilir'
            ],
            [
                'id' => '6107170',
                'kabupaten_id' => '6107',
                'nama' => 'Kelam Permai'
            ],
            [
                'id' => '6107180',
                'kabupaten_id' => '6107',
                'nama' => 'Binjai Hulu'
            ],
            [
                'id' => '6107190',
                'kabupaten_id' => '6107',
                'nama' => 'Ketungau Hilir'
            ],
            [
                'id' => '6107200',
                'kabupaten_id' => '6107',
                'nama' => 'Ketungau Tengah'
            ],
            [
                'id' => '6107210',
                'kabupaten_id' => '6107',
                'nama' => 'Ketungau Hulu'
            ],
            [
                'id' => '6108010',
                'kabupaten_id' => '6108',
                'nama' => 'Silat Hilir'
            ],
            [
                'id' => '6108020',
                'kabupaten_id' => '6108',
                'nama' => 'Silat Hulu'
            ],
            [
                'id' => '6108030',
                'kabupaten_id' => '6108',
                'nama' => 'Hulu Gurung'
            ],
            [
                'id' => '6108040',
                'kabupaten_id' => '6108',
                'nama' => 'Bunut Hulu'
            ],
            [
                'id' => '6108050',
                'kabupaten_id' => '6108',
                'nama' => 'Mentebah'
            ],
            [
                'id' => '6108060',
                'kabupaten_id' => '6108',
                'nama' => 'Bika'
            ],
            [
                'id' => '6108070',
                'kabupaten_id' => '6108',
                'nama' => 'Kalis'
            ],
            [
                'id' => '6108080',
                'kabupaten_id' => '6108',
                'nama' => 'Putussibau Selatan'
            ],
            [
                'id' => '6108081',
                'kabupaten_id' => '6108',
                'nama' => 'Hulu Kapuas'
            ],
            [
                'id' => '6108090',
                'kabupaten_id' => '6108',
                'nama' => 'Embaloh Hilir'
            ],
            [
                'id' => '6108100',
                'kabupaten_id' => '6108',
                'nama' => 'Bunut Hilir'
            ],
            [
                'id' => '6108110',
                'kabupaten_id' => '6108',
                'nama' => 'Boyan Tanjung'
            ],
            [
                'id' => '6108120',
                'kabupaten_id' => '6108',
                'nama' => 'Pengkadan'
            ],
            [
                'id' => '6108130',
                'kabupaten_id' => '6108',
                'nama' => 'Jongkong'
            ],
            [
                'id' => '6108140',
                'kabupaten_id' => '6108',
                'nama' => 'Selimbau'
            ],
            [
                'id' => '6108141',
                'kabupaten_id' => '6108',
                'nama' => 'Danau Sentarum'
            ],
            [
                'id' => '6108150',
                'kabupaten_id' => '6108',
                'nama' => 'Suhaid'
            ],
            [
                'id' => '6108160',
                'kabupaten_id' => '6108',
                'nama' => 'Seberuang'
            ],
            [
                'id' => '6108170',
                'kabupaten_id' => '6108',
                'nama' => 'Semitau'
            ],
            [
                'id' => '6108180',
                'kabupaten_id' => '6108',
                'nama' => 'Empanang'
            ],
            [
                'id' => '6108190',
                'kabupaten_id' => '6108',
                'nama' => 'Puring Kencana'
            ],
            [
                'id' => '6108200',
                'kabupaten_id' => '6108',
                'nama' => 'Badau'
            ],
            [
                'id' => '6108210',
                'kabupaten_id' => '6108',
                'nama' => 'Batang Lupar'
            ],
            [
                'id' => '6108220',
                'kabupaten_id' => '6108',
                'nama' => 'Embaloh Hulu'
            ],
            [
                'id' => '6108230',
                'kabupaten_id' => '6108',
                'nama' => 'Putussibau Utara'
            ],
            [
                'id' => '6109010',
                'kabupaten_id' => '6109',
                'nama' => 'Nanga Mahap'
            ],
            [
                'id' => '6109020',
                'kabupaten_id' => '6109',
                'nama' => 'Nanga Taman'
            ],
            [
                'id' => '6109030',
                'kabupaten_id' => '6109',
                'nama' => 'Sekadau Hulu'
            ],
            [
                'id' => '6109040',
                'kabupaten_id' => '6109',
                'nama' => 'Sekadau Hilir'
            ],
            [
                'id' => '6109050',
                'kabupaten_id' => '6109',
                'nama' => 'Belitang Hilir'
            ],
            [
                'id' => '6109060',
                'kabupaten_id' => '6109',
                'nama' => 'Belitang'
            ],
            [
                'id' => '6109070',
                'kabupaten_id' => '6109',
                'nama' => 'Belitang Hulu'
            ],
            [
                'id' => '6110010',
                'kabupaten_id' => '6110',
                'nama' => 'Sokan'
            ],
            [
                'id' => '6110020',
                'kabupaten_id' => '6110',
                'nama' => 'Tanah Pinoh'
            ],
            [
                'id' => '6110021',
                'kabupaten_id' => '6110',
                'nama' => 'Tanah Pinoh Barat'
            ],
            [
                'id' => '6110030',
                'kabupaten_id' => '6110',
                'nama' => 'Sayan'
            ],
            [
                'id' => '6110040',
                'kabupaten_id' => '6110',
                'nama' => 'Belimbing'
            ],
            [
                'id' => '6110041',
                'kabupaten_id' => '6110',
                'nama' => 'Belimbing Hulu'
            ],
            [
                'id' => '6110050',
                'kabupaten_id' => '6110',
                'nama' => 'Nanga Pinoh'
            ],
            [
                'id' => '6110051',
                'kabupaten_id' => '6110',
                'nama' => 'Pinoh Selatan'
            ],
            [
                'id' => '6110052',
                'kabupaten_id' => '6110',
                'nama' => 'Pinoh Utara'
            ],
            [
                'id' => '6110060',
                'kabupaten_id' => '6110',
                'nama' => 'Ella Hilir'
            ],
            [
                'id' => '6110070',
                'kabupaten_id' => '6110',
                'nama' => 'Menukung'
            ],
            [
                'id' => '6111010',
                'kabupaten_id' => '6111',
                'nama' => 'Pulau Maya'
            ],
            [
                'id' => '6111011',
                'kabupaten_id' => '6111',
                'nama' => 'Kepulauan Karimata'
            ],
            [
                'id' => '6111020',
                'kabupaten_id' => '6111',
                'nama' => 'Sukadana'
            ],
            [
                'id' => '6111030',
                'kabupaten_id' => '6111',
                'nama' => 'Simpang Hilir'
            ],
            [
                'id' => '6111040',
                'kabupaten_id' => '6111',
                'nama' => 'Teluk Batang'
            ],
            [
                'id' => '6111050',
                'kabupaten_id' => '6111',
                'nama' => 'Seponti'
            ],
            [
                'id' => '6112010',
                'kabupaten_id' => '6112',
                'nama' => 'Batu Ampar'
            ],
            [
                'id' => '6112020',
                'kabupaten_id' => '6112',
                'nama' => 'Terentang'
            ],
            [
                'id' => '6112030',
                'kabupaten_id' => '6112',
                'nama' => 'Kubu'
            ],
            [
                'id' => '6112040',
                'kabupaten_id' => '6112',
                'nama' => 'Telok Pa\'kedai'
            ],
            [
                'id' => '6112050',
                'kabupaten_id' => '6112',
                'nama' => 'Sungai Kakap'
            ],
            [
                'id' => '6112060',
                'kabupaten_id' => '6112',
                'nama' => 'Rasau Jaya'
            ],
            [
                'id' => '6112070',
                'kabupaten_id' => '6112',
                'nama' => 'Sungai Raya'
            ],
            [
                'id' => '6112080',
                'kabupaten_id' => '6112',
                'nama' => 'Sungai Ambawang'
            ],
            [
                'id' => '6112090',
                'kabupaten_id' => '6112',
                'nama' => 'Kuala Mandor-b'
            ],
            [
                'id' => '6171010',
                'kabupaten_id' => '6171',
                'nama' => 'Pontianak Selatan'
            ],
            [
                'id' => '6171011',
                'kabupaten_id' => '6171',
                'nama' => 'Pontianak Tenggara'
            ],
            [
                'id' => '6171020',
                'kabupaten_id' => '6171',
                'nama' => 'Pontianak Timur'
            ],
            [
                'id' => '6171030',
                'kabupaten_id' => '6171',
                'nama' => 'Pontianak Barat'
            ],
            [
                'id' => '6171031',
                'kabupaten_id' => '6171',
                'nama' => 'Pontianak Kota'
            ],
            [
                'id' => '6171040',
                'kabupaten_id' => '6171',
                'nama' => 'Pontianak Utara'
            ],
            [
                'id' => '6172010',
                'kabupaten_id' => '6172',
                'nama' => 'Singkawang Selatan'
            ],
            [
                'id' => '6172020',
                'kabupaten_id' => '6172',
                'nama' => 'Singkawang Timur'
            ],
            [
                'id' => '6172030',
                'kabupaten_id' => '6172',
                'nama' => 'Singkawang Utara'
            ],
            [
                'id' => '6172040',
                'kabupaten_id' => '6172',
                'nama' => 'Singkawang Barat'
            ],
            [
                'id' => '6172050',
                'kabupaten_id' => '6172',
                'nama' => 'Singkawang Tengah'
            ],
            [
                'id' => '6201040',
                'kabupaten_id' => '6201',
                'nama' => 'Kotawaringin Lama'
            ],
            [
                'id' => '6201050',
                'kabupaten_id' => '6201',
                'nama' => 'Arut Selatan'
            ],
            [
                'id' => '6201060',
                'kabupaten_id' => '6201',
                'nama' => 'Kumai'
            ],
            [
                'id' => '6201061',
                'kabupaten_id' => '6201',
                'nama' => 'Pangkalan Banteng'
            ],
            [
                'id' => '6201062',
                'kabupaten_id' => '6201',
                'nama' => 'Pangkalan Lada'
            ],
            [
                'id' => '6201070',
                'kabupaten_id' => '6201',
                'nama' => 'Arut Utara'
            ],
            [
                'id' => '6202020',
                'kabupaten_id' => '6202',
                'nama' => 'Mentaya Hilir Selatan'
            ],
            [
                'id' => '6202021',
                'kabupaten_id' => '6202',
                'nama' => 'Teluk Sampit'
            ],
            [
                'id' => '6202050',
                'kabupaten_id' => '6202',
                'nama' => 'Pulau Hanaut'
            ],
            [
                'id' => '6202060',
                'kabupaten_id' => '6202',
                'nama' => 'Mentawa Baru/ketapang'
            ],
            [
                'id' => '6202061',
                'kabupaten_id' => '6202',
                'nama' => 'Seranau'
            ],
            [
                'id' => '6202070',
                'kabupaten_id' => '6202',
                'nama' => 'Mentaya Hilir Utara'
            ],
            [
                'id' => '6202110',
                'kabupaten_id' => '6202',
                'nama' => 'Kota Besi'
            ],
            [
                'id' => '6202111',
                'kabupaten_id' => '6202',
                'nama' => 'Telawang'
            ],
            [
                'id' => '6202120',
                'kabupaten_id' => '6202',
                'nama' => 'Baamang'
            ],
            [
                'id' => '6202190',
                'kabupaten_id' => '6202',
                'nama' => 'Cempaga'
            ],
            [
                'id' => '6202191',
                'kabupaten_id' => '6202',
                'nama' => 'Cempaga Hulu'
            ],
            [
                'id' => '6202200',
                'kabupaten_id' => '6202',
                'nama' => 'Parenggean'
            ],
            [
                'id' => '6202201',
                'kabupaten_id' => '6202',
                'nama' => 'Tualan Hulu'
            ],
            [
                'id' => '6202210',
                'kabupaten_id' => '6202',
                'nama' => 'Mentaya Hulu'
            ],
            [
                'id' => '6202211',
                'kabupaten_id' => '6202',
                'nama' => 'Bukit Santuai'
            ],
            [
                'id' => '6202230',
                'kabupaten_id' => '6202',
                'nama' => 'Antang Kalang'
            ],
            [
                'id' => '6202231',
                'kabupaten_id' => '6202',
                'nama' => 'Telaga Antang'
            ],
            [
                'id' => '6203020',
                'kabupaten_id' => '6203',
                'nama' => 'Kapuas Kuala'
            ],
            [
                'id' => '6203021',
                'kabupaten_id' => '6203',
                'nama' => 'Tamban Catur'
            ],
            [
                'id' => '6203030',
                'kabupaten_id' => '6203',
                'nama' => 'Kapuas Timur'
            ],
            [
                'id' => '6203040',
                'kabupaten_id' => '6203',
                'nama' => 'Selat'
            ],
            [
                'id' => '6203041',
                'kabupaten_id' => '6203',
                'nama' => 'Bataguh'
            ],
            [
                'id' => '6203070',
                'kabupaten_id' => '6203',
                'nama' => 'Basarang'
            ],
            [
                'id' => '6203080',
                'kabupaten_id' => '6203',
                'nama' => 'Kapuas Hilir'
            ],
            [
                'id' => '6203090',
                'kabupaten_id' => '6203',
                'nama' => 'Pulau Petak'
            ],
            [
                'id' => '6203100',
                'kabupaten_id' => '6203',
                'nama' => 'Kapuas Murung'
            ],
            [
                'id' => '6203101',
                'kabupaten_id' => '6203',
                'nama' => 'Dadahup'
            ],
            [
                'id' => '6203110',
                'kabupaten_id' => '6203',
                'nama' => 'Kapuas Barat'
            ],
            [
                'id' => '6203150',
                'kabupaten_id' => '6203',
                'nama' => 'Mantangai'
            ],
            [
                'id' => '6203160',
                'kabupaten_id' => '6203',
                'nama' => 'Timpah'
            ],
            [
                'id' => '6203170',
                'kabupaten_id' => '6203',
                'nama' => 'Kapuas Tengah'
            ],
            [
                'id' => '6203171',
                'kabupaten_id' => '6203',
                'nama' => 'Pasak Talawang'
            ],
            [
                'id' => '6203180',
                'kabupaten_id' => '6203',
                'nama' => 'Kapuas Hulu'
            ],
            [
                'id' => '6203181',
                'kabupaten_id' => '6203',
                'nama' => 'Mandau Talawang'
            ],
            [
                'id' => '6204010',
                'kabupaten_id' => '6204',
                'nama' => 'Jenamas'
            ],
            [
                'id' => '6204020',
                'kabupaten_id' => '6204',
                'nama' => 'Dusun Hilir'
            ],
            [
                'id' => '6204030',
                'kabupaten_id' => '6204',
                'nama' => 'Karau Kuala'
            ],
            [
                'id' => '6204040',
                'kabupaten_id' => '6204',
                'nama' => 'Dusun Selatan'
            ],
            [
                'id' => '6204050',
                'kabupaten_id' => '6204',
                'nama' => 'Dusun Utara'
            ],
            [
                'id' => '6204060',
                'kabupaten_id' => '6204',
                'nama' => 'Gunung Bintang Awai'
            ],
            [
                'id' => '6205010',
                'kabupaten_id' => '6205',
                'nama' => 'Montalat'
            ],
            [
                'id' => '6205020',
                'kabupaten_id' => '6205',
                'nama' => 'Gunung Timang'
            ],
            [
                'id' => '6205030',
                'kabupaten_id' => '6205',
                'nama' => 'Gunung Purei'
            ],
            [
                'id' => '6205040',
                'kabupaten_id' => '6205',
                'nama' => 'Teweh Timur'
            ],
            [
                'id' => '6205050',
                'kabupaten_id' => '6205',
                'nama' => 'Teweh Tengah'
            ],
            [
                'id' => '6205051',
                'kabupaten_id' => '6205',
                'nama' => 'Teweh  Baru'
            ],
            [
                'id' => '6205052',
                'kabupaten_id' => '6205',
                'nama' => 'Teweh Selatan'
            ],
            [
                'id' => '6205060',
                'kabupaten_id' => '6205',
                'nama' => 'Lahei'
            ],
            [
                'id' => '6205061',
                'kabupaten_id' => '6205',
                'nama' => 'Lahei Barat'
            ],
            [
                'id' => '6206010',
                'kabupaten_id' => '6206',
                'nama' => 'Jelai'
            ],
            [
                'id' => '6206011',
                'kabupaten_id' => '6206',
                'nama' => 'Pantai Lunci'
            ],
            [
                'id' => '6206020',
                'kabupaten_id' => '6206',
                'nama' => 'Sukamara'
            ],
            [
                'id' => '6206030',
                'kabupaten_id' => '6206',
                'nama' => 'Balai Riam'
            ],
            [
                'id' => '6206031',
                'kabupaten_id' => '6206',
                'nama' => 'Permata Kecubung'
            ],
            [
                'id' => '6207010',
                'kabupaten_id' => '6207',
                'nama' => 'Bulik'
            ],
            [
                'id' => '6207011',
                'kabupaten_id' => '6207',
                'nama' => 'Sematu Jaya'
            ],
            [
                'id' => '6207012',
                'kabupaten_id' => '6207',
                'nama' => 'Menthobi Raya'
            ],
            [
                'id' => '6207013',
                'kabupaten_id' => '6207',
                'nama' => 'Bulik Timur'
            ],
            [
                'id' => '6207020',
                'kabupaten_id' => '6207',
                'nama' => 'Lamandau'
            ],
            [
                'id' => '6207021',
                'kabupaten_id' => '6207',
                'nama' => 'Belantikan Raya'
            ],
            [
                'id' => '6207030',
                'kabupaten_id' => '6207',
                'nama' => 'Delang'
            ],
            [
                'id' => '6207031',
                'kabupaten_id' => '6207',
                'nama' => 'Batangkawa'
            ],
            [
                'id' => '6208010',
                'kabupaten_id' => '6208',
                'nama' => 'Seruyan Hilir'
            ],
            [
                'id' => '6208011',
                'kabupaten_id' => '6208',
                'nama' => 'Seruyan Hilir Timur'
            ],
            [
                'id' => '6208020',
                'kabupaten_id' => '6208',
                'nama' => 'Danau Sembuluh'
            ],
            [
                'id' => '6208021',
                'kabupaten_id' => '6208',
                'nama' => 'Seruyan Raya'
            ],
            [
                'id' => '6208030',
                'kabupaten_id' => '6208',
                'nama' => 'Hanau'
            ],
            [
                'id' => '6208031',
                'kabupaten_id' => '6208',
                'nama' => 'Danau Seluluk'
            ],
            [
                'id' => '6208040',
                'kabupaten_id' => '6208',
                'nama' => 'Seruyan Tengah'
            ],
            [
                'id' => '6208041',
                'kabupaten_id' => '6208',
                'nama' => 'Batu Ampar'
            ],
            [
                'id' => '6208050',
                'kabupaten_id' => '6208',
                'nama' => 'Seruyan Hulu'
            ],
            [
                'id' => '6208051',
                'kabupaten_id' => '6208',
                'nama' => 'Suling Tambun'
            ],
            [
                'id' => '6209010',
                'kabupaten_id' => '6209',
                'nama' => 'Katingan Kuala'
            ],
            [
                'id' => '6209020',
                'kabupaten_id' => '6209',
                'nama' => 'Mendawai'
            ],
            [
                'id' => '6209030',
                'kabupaten_id' => '6209',
                'nama' => 'Kamipang'
            ],
            [
                'id' => '6209040',
                'kabupaten_id' => '6209',
                'nama' => 'Tasik Payawan'
            ],
            [
                'id' => '6209050',
                'kabupaten_id' => '6209',
                'nama' => 'Katingan Hilir'
            ],
            [
                'id' => '6209060',
                'kabupaten_id' => '6209',
                'nama' => 'Tewang Sangalang Garing'
            ],
            [
                'id' => '6209070',
                'kabupaten_id' => '6209',
                'nama' => 'Pulau Malan'
            ],
            [
                'id' => '6209080',
                'kabupaten_id' => '6209',
                'nama' => 'Katingan Tengah'
            ],
            [
                'id' => '6209090',
                'kabupaten_id' => '6209',
                'nama' => 'Sanaman Mantikei'
            ],
            [
                'id' => '6209091',
                'kabupaten_id' => '6209',
                'nama' => 'Petak Malai'
            ],
            [
                'id' => '6209100',
                'kabupaten_id' => '6209',
                'nama' => 'Marikit'
            ],
            [
                'id' => '6209110',
                'kabupaten_id' => '6209',
                'nama' => 'Katingan Hulu'
            ],
            [
                'id' => '6209111',
                'kabupaten_id' => '6209',
                'nama' => 'Bukit Raya'
            ],
            [
                'id' => '6210010',
                'kabupaten_id' => '6210',
                'nama' => 'Kahayan Kuala'
            ],
            [
                'id' => '6210011',
                'kabupaten_id' => '6210',
                'nama' => 'Sebangau Kuala'
            ],
            [
                'id' => '6210020',
                'kabupaten_id' => '6210',
                'nama' => 'Pandih Batu'
            ],
            [
                'id' => '6210030',
                'kabupaten_id' => '6210',
                'nama' => 'Maliku'
            ],
            [
                'id' => '6210040',
                'kabupaten_id' => '6210',
                'nama' => 'Kahayan Hilir'
            ],
            [
                'id' => '6210041',
                'kabupaten_id' => '6210',
                'nama' => 'Jabiren Raya'
            ],
            [
                'id' => '6210050',
                'kabupaten_id' => '6210',
                'nama' => 'Kahayan Tengah'
            ],
            [
                'id' => '6210060',
                'kabupaten_id' => '6210',
                'nama' => 'Banama Tingang'
            ],
            [
                'id' => '6211010',
                'kabupaten_id' => '6211',
                'nama' => 'Manuhing'
            ],
            [
                'id' => '6211011',
                'kabupaten_id' => '6211',
                'nama' => 'Manuhing Raya'
            ],
            [
                'id' => '6211020',
                'kabupaten_id' => '6211',
                'nama' => 'Rungan'
            ],
            [
                'id' => '6211021',
                'kabupaten_id' => '6211',
                'nama' => 'Rungan Hulu'
            ],
            [
                'id' => '6211022',
                'kabupaten_id' => '6211',
                'nama' => 'Rungan Barat'
            ],
            [
                'id' => '6211030',
                'kabupaten_id' => '6211',
                'nama' => 'Sepang'
            ],
            [
                'id' => '6211031',
                'kabupaten_id' => '6211',
                'nama' => 'Mihing Raya'
            ],
            [
                'id' => '6211040',
                'kabupaten_id' => '6211',
                'nama' => 'Kurun'
            ],
            [
                'id' => '6211050',
                'kabupaten_id' => '6211',
                'nama' => 'Tewah'
            ],
            [
                'id' => '6211060',
                'kabupaten_id' => '6211',
                'nama' => 'Kahayan Hulu Utara'
            ],
            [
                'id' => '6211061',
                'kabupaten_id' => '6211',
                'nama' => 'Damang Batu'
            ],
            [
                'id' => '6211062',
                'kabupaten_id' => '6211',
                'nama' => 'Miri Manasa'
            ],
            [
                'id' => '6212010',
                'kabupaten_id' => '6212',
                'nama' => 'Benua Lima'
            ],
            [
                'id' => '6212020',
                'kabupaten_id' => '6212',
                'nama' => 'Dusun Timur'
            ],
            [
                'id' => '6212021',
                'kabupaten_id' => '6212',
                'nama' => 'Paju Epat'
            ],
            [
                'id' => '6212030',
                'kabupaten_id' => '6212',
                'nama' => 'Awang'
            ],
            [
                'id' => '6212040',
                'kabupaten_id' => '6212',
                'nama' => 'Patangkep Tutui'
            ],
            [
                'id' => '6212050',
                'kabupaten_id' => '6212',
                'nama' => 'Dusun Tengah'
            ],
            [
                'id' => '6212051',
                'kabupaten_id' => '6212',
                'nama' => 'Raren Batuah'
            ],
            [
                'id' => '6212052',
                'kabupaten_id' => '6212',
                'nama' => 'Paku'
            ],
            [
                'id' => '6212053',
                'kabupaten_id' => '6212',
                'nama' => 'Karusen Janang'
            ],
            [
                'id' => '6212060',
                'kabupaten_id' => '6212',
                'nama' => 'Pematang Karau'
            ],
            [
                'id' => '6213010',
                'kabupaten_id' => '6213',
                'nama' => 'Permata Intan'
            ],
            [
                'id' => '6213011',
                'kabupaten_id' => '6213',
                'nama' => 'Sungai Babuat'
            ],
            [
                'id' => '6213020',
                'kabupaten_id' => '6213',
                'nama' => 'Murung'
            ],
            [
                'id' => '6213030',
                'kabupaten_id' => '6213',
                'nama' => 'Laung Tuhup'
            ],
            [
                'id' => '6213031',
                'kabupaten_id' => '6213',
                'nama' => 'Barito Tuhup Raya'
            ],
            [
                'id' => '6213040',
                'kabupaten_id' => '6213',
                'nama' => 'Tanah Siang'
            ],
            [
                'id' => '6213041',
                'kabupaten_id' => '6213',
                'nama' => 'Tanah Siang Selatan'
            ],
            [
                'id' => '6213050',
                'kabupaten_id' => '6213',
                'nama' => 'Sumber Barito'
            ],
            [
                'id' => '6213051',
                'kabupaten_id' => '6213',
                'nama' => 'Seribu Riam'
            ],
            [
                'id' => '6213052',
                'kabupaten_id' => '6213',
                'nama' => 'Uut Murung'
            ],
            [
                'id' => '6271010',
                'kabupaten_id' => '6271',
                'nama' => 'Pahandut'
            ],
            [
                'id' => '6271011',
                'kabupaten_id' => '6271',
                'nama' => 'Sebangau'
            ],
            [
                'id' => '6271012',
                'kabupaten_id' => '6271',
                'nama' => 'Jekan Raya'
            ],
            [
                'id' => '6271020',
                'kabupaten_id' => '6271',
                'nama' => 'Bukit Batu'
            ],
            [
                'id' => '6271021',
                'kabupaten_id' => '6271',
                'nama' => 'Rakumpit'
            ],
            [
                'id' => '6301010',
                'kabupaten_id' => '6301',
                'nama' => 'Panyipatan'
            ],
            [
                'id' => '6301020',
                'kabupaten_id' => '6301',
                'nama' => 'Takisung'
            ],
            [
                'id' => '6301030',
                'kabupaten_id' => '6301',
                'nama' => 'Kurau'
            ],
            [
                'id' => '6301031',
                'kabupaten_id' => '6301',
                'nama' => 'Bumi Makmur'
            ],
            [
                'id' => '6301040',
                'kabupaten_id' => '6301',
                'nama' => 'Bati - Bati'
            ],
            [
                'id' => '6301050',
                'kabupaten_id' => '6301',
                'nama' => 'Tambang Ulang'
            ],
            [
                'id' => '6301060',
                'kabupaten_id' => '6301',
                'nama' => 'Pelaihari'
            ],
            [
                'id' => '6301061',
                'kabupaten_id' => '6301',
                'nama' => 'Bajuin'
            ],
            [
                'id' => '6301070',
                'kabupaten_id' => '6301',
                'nama' => 'Batu Ampar'
            ],
            [
                'id' => '6301080',
                'kabupaten_id' => '6301',
                'nama' => 'Jorong'
            ],
            [
                'id' => '6301090',
                'kabupaten_id' => '6301',
                'nama' => 'Kintap'
            ],
            [
                'id' => '6302010',
                'kabupaten_id' => '6302',
                'nama' => 'Pulau Sembilan'
            ],
            [
                'id' => '6302020',
                'kabupaten_id' => '6302',
                'nama' => 'Pulau Laut Barat'
            ],
            [
                'id' => '6302021',
                'kabupaten_id' => '6302',
                'nama' => 'Pulau Laut Tanjung Selayar'
            ],
            [
                'id' => '6302030',
                'kabupaten_id' => '6302',
                'nama' => 'Pulau Laut Selatan'
            ],
            [
                'id' => '6302031',
                'kabupaten_id' => '6302',
                'nama' => 'Pulau Laut Kepulauan'
            ],
            [
                'id' => '6302040',
                'kabupaten_id' => '6302',
                'nama' => 'Pulau Laut Timur'
            ],
            [
                'id' => '6302050',
                'kabupaten_id' => '6302',
                'nama' => 'Pulau Sebuku'
            ],
            [
                'id' => '6302060',
                'kabupaten_id' => '6302',
                'nama' => 'Pulau Laut Utara'
            ],
            [
                'id' => '6302061',
                'kabupaten_id' => '6302',
                'nama' => 'Pulau Laut Tengah'
            ],
            [
                'id' => '6302120',
                'kabupaten_id' => '6302',
                'nama' => 'Kelumpang Selatan'
            ],
            [
                'id' => '6302121',
                'kabupaten_id' => '6302',
                'nama' => 'Kelumpang Hilir'
            ],
            [
                'id' => '6302130',
                'kabupaten_id' => '6302',
                'nama' => 'Kelumpang Hulu'
            ],
            [
                'id' => '6302140',
                'kabupaten_id' => '6302',
                'nama' => 'Hampang'
            ],
            [
                'id' => '6302150',
                'kabupaten_id' => '6302',
                'nama' => 'Sungai Durian'
            ],
            [
                'id' => '6302160',
                'kabupaten_id' => '6302',
                'nama' => 'Kelumpang Tengah'
            ],
            [
                'id' => '6302161',
                'kabupaten_id' => '6302',
                'nama' => 'Kelumpang Barat'
            ],
            [
                'id' => '6302170',
                'kabupaten_id' => '6302',
                'nama' => 'Kelumpang Utara'
            ],
            [
                'id' => '6302180',
                'kabupaten_id' => '6302',
                'nama' => 'Pamukan Selatan'
            ],
            [
                'id' => '6302190',
                'kabupaten_id' => '6302',
                'nama' => 'Sampanahan'
            ],
            [
                'id' => '6302200',
                'kabupaten_id' => '6302',
                'nama' => 'Pamukan Utara'
            ],
            [
                'id' => '6302201',
                'kabupaten_id' => '6302',
                'nama' => 'Pamukan Barat'
            ],
            [
                'id' => '6303010',
                'kabupaten_id' => '6303',
                'nama' => 'Aluh - Aluh'
            ],
            [
                'id' => '6303011',
                'kabupaten_id' => '6303',
                'nama' => 'Beruntung Baru'
            ],
            [
                'id' => '6303020',
                'kabupaten_id' => '6303',
                'nama' => 'Gambut'
            ],
            [
                'id' => '6303030',
                'kabupaten_id' => '6303',
                'nama' => 'Kertak Hanyar'
            ],
            [
                'id' => '6303031',
                'kabupaten_id' => '6303',
                'nama' => 'Tatah Makmur'
            ],
            [
                'id' => '6303040',
                'kabupaten_id' => '6303',
                'nama' => 'Sungai Tabuk'
            ],
            [
                'id' => '6303050',
                'kabupaten_id' => '6303',
                'nama' => 'Martapura'
            ],
            [
                'id' => '6303051',
                'kabupaten_id' => '6303',
                'nama' => 'Martapura Timur'
            ],
            [
                'id' => '6303052',
                'kabupaten_id' => '6303',
                'nama' => 'Martapura Barat'
            ],
            [
                'id' => '6303060',
                'kabupaten_id' => '6303',
                'nama' => 'Astambul'
            ],
            [
                'id' => '6303070',
                'kabupaten_id' => '6303',
                'nama' => 'Karang Intan'
            ],
            [
                'id' => '6303080',
                'kabupaten_id' => '6303',
                'nama' => 'Aranio'
            ],
            [
                'id' => '6303090',
                'kabupaten_id' => '6303',
                'nama' => 'Sungai Pinang'
            ],
            [
                'id' => '6303091',
                'kabupaten_id' => '6303',
                'nama' => 'Paramasan'
            ],
            [
                'id' => '6303100',
                'kabupaten_id' => '6303',
                'nama' => 'Pengaron'
            ],
            [
                'id' => '6303101',
                'kabupaten_id' => '6303',
                'nama' => 'Sambung Makmur'
            ],
            [
                'id' => '6303110',
                'kabupaten_id' => '6303',
                'nama' => 'Mataraman'
            ],
            [
                'id' => '6303120',
                'kabupaten_id' => '6303',
                'nama' => 'Simpang Empat'
            ],
            [
                'id' => '6303121',
                'kabupaten_id' => '6303',
                'nama' => 'Telaga Bauntung'
            ],
            [
                'id' => '6304010',
                'kabupaten_id' => '6304',
                'nama' => 'Tabunganen'
            ],
            [
                'id' => '6304020',
                'kabupaten_id' => '6304',
                'nama' => 'Tamban'
            ],
            [
                'id' => '6304030',
                'kabupaten_id' => '6304',
                'nama' => 'Mekar Sari'
            ],
            [
                'id' => '6304040',
                'kabupaten_id' => '6304',
                'nama' => 'Anjir Pasar'
            ],
            [
                'id' => '6304050',
                'kabupaten_id' => '6304',
                'nama' => 'Anjir Muara'
            ],
            [
                'id' => '6304060',
                'kabupaten_id' => '6304',
                'nama' => 'Alalak'
            ],
            [
                'id' => '6304070',
                'kabupaten_id' => '6304',
                'nama' => 'Mandastana'
            ],
            [
                'id' => '6304071',
                'kabupaten_id' => '6304',
                'nama' => 'Jejangkit'
            ],
            [
                'id' => '6304080',
                'kabupaten_id' => '6304',
                'nama' => 'Belawang'
            ],
            [
                'id' => '6304090',
                'kabupaten_id' => '6304',
                'nama' => 'Wanaraya'
            ],
            [
                'id' => '6304100',
                'kabupaten_id' => '6304',
                'nama' => 'Barambai'
            ],
            [
                'id' => '6304110',
                'kabupaten_id' => '6304',
                'nama' => 'Rantau Badauh'
            ],
            [
                'id' => '6304120',
                'kabupaten_id' => '6304',
                'nama' => 'Cerbon'
            ],
            [
                'id' => '6304130',
                'kabupaten_id' => '6304',
                'nama' => 'Bakumpai'
            ],
            [
                'id' => '6304140',
                'kabupaten_id' => '6304',
                'nama' => 'Marabahan'
            ],
            [
                'id' => '6304150',
                'kabupaten_id' => '6304',
                'nama' => 'Tabukan'
            ],
            [
                'id' => '6304160',
                'kabupaten_id' => '6304',
                'nama' => 'Kuripan'
            ],
            [
                'id' => '6305010',
                'kabupaten_id' => '6305',
                'nama' => 'Binuang'
            ],
            [
                'id' => '6305011',
                'kabupaten_id' => '6305',
                'nama' => 'Hatungun'
            ],
            [
                'id' => '6305020',
                'kabupaten_id' => '6305',
                'nama' => 'Tapin Selatan'
            ],
            [
                'id' => '6305021',
                'kabupaten_id' => '6305',
                'nama' => 'Salam Babaris'
            ],
            [
                'id' => '6305030',
                'kabupaten_id' => '6305',
                'nama' => 'Tapin Tengah'
            ],
            [
                'id' => '6305040',
                'kabupaten_id' => '6305',
                'nama' => 'Bungur'
            ],
            [
                'id' => '6305050',
                'kabupaten_id' => '6305',
                'nama' => 'Piani'
            ],
            [
                'id' => '6305060',
                'kabupaten_id' => '6305',
                'nama' => 'Lokpaikat'
            ],
            [
                'id' => '6305070',
                'kabupaten_id' => '6305',
                'nama' => 'Tapin Utara'
            ],
            [
                'id' => '6305080',
                'kabupaten_id' => '6305',
                'nama' => 'Bakarangan'
            ],
            [
                'id' => '6305090',
                'kabupaten_id' => '6305',
                'nama' => 'Candi Laras Selatan'
            ],
            [
                'id' => '6305100',
                'kabupaten_id' => '6305',
                'nama' => 'Candi Laras Utara'
            ],
            [
                'id' => '6306010',
                'kabupaten_id' => '6306',
                'nama' => 'Padang Batung'
            ],
            [
                'id' => '6306020',
                'kabupaten_id' => '6306',
                'nama' => 'Loksado'
            ],
            [
                'id' => '6306030',
                'kabupaten_id' => '6306',
                'nama' => 'Telaga Langsat'
            ],
            [
                'id' => '6306040',
                'kabupaten_id' => '6306',
                'nama' => 'Angkinang'
            ],
            [
                'id' => '6306050',
                'kabupaten_id' => '6306',
                'nama' => 'Kandangan'
            ],
            [
                'id' => '6306060',
                'kabupaten_id' => '6306',
                'nama' => 'Sungai Raya'
            ],
            [
                'id' => '6306070',
                'kabupaten_id' => '6306',
                'nama' => 'Simpur'
            ],
            [
                'id' => '6306080',
                'kabupaten_id' => '6306',
                'nama' => 'Kalumpang'
            ],
            [
                'id' => '6306090',
                'kabupaten_id' => '6306',
                'nama' => 'Daha Selatan'
            ],
            [
                'id' => '6306091',
                'kabupaten_id' => '6306',
                'nama' => 'Daha Barat'
            ],
            [
                'id' => '6306100',
                'kabupaten_id' => '6306',
                'nama' => 'Daha Utara'
            ],
            [
                'id' => '6307010',
                'kabupaten_id' => '6307',
                'nama' => 'Haruyan'
            ],
            [
                'id' => '6307020',
                'kabupaten_id' => '6307',
                'nama' => 'Batu Benawa'
            ],
            [
                'id' => '6307030',
                'kabupaten_id' => '6307',
                'nama' => 'Hantakan'
            ],
            [
                'id' => '6307040',
                'kabupaten_id' => '6307',
                'nama' => 'Batang Alai Selatan'
            ],
            [
                'id' => '6307041',
                'kabupaten_id' => '6307',
                'nama' => 'Batang Alai Timur'
            ],
            [
                'id' => '6307050',
                'kabupaten_id' => '6307',
                'nama' => 'Barabai'
            ],
            [
                'id' => '6307060',
                'kabupaten_id' => '6307',
                'nama' => 'Labuan Amas Selatan'
            ],
            [
                'id' => '6307070',
                'kabupaten_id' => '6307',
                'nama' => 'Labuan Amas Utara'
            ],
            [
                'id' => '6307080',
                'kabupaten_id' => '6307',
                'nama' => 'Pandawan'
            ],
            [
                'id' => '6307090',
                'kabupaten_id' => '6307',
                'nama' => 'Batang Alai Utara'
            ],
            [
                'id' => '6307091',
                'kabupaten_id' => '6307',
                'nama' => 'Limpasu'
            ],
            [
                'id' => '6308010',
                'kabupaten_id' => '6308',
                'nama' => 'Danau Panggang'
            ],
            [
                'id' => '6308011',
                'kabupaten_id' => '6308',
                'nama' => 'Paminggir'
            ],
            [
                'id' => '6308020',
                'kabupaten_id' => '6308',
                'nama' => 'Babirik'
            ],
            [
                'id' => '6308030',
                'kabupaten_id' => '6308',
                'nama' => 'Sungai Pandan'
            ],
            [
                'id' => '6308031',
                'kabupaten_id' => '6308',
                'nama' => 'Sungai Tabukan'
            ],
            [
                'id' => '6308040',
                'kabupaten_id' => '6308',
                'nama' => 'Amuntai Selatan'
            ],
            [
                'id' => '6308050',
                'kabupaten_id' => '6308',
                'nama' => 'Amuntai Tengah'
            ],
            [
                'id' => '6308060',
                'kabupaten_id' => '6308',
                'nama' => 'Banjang'
            ],
            [
                'id' => '6308070',
                'kabupaten_id' => '6308',
                'nama' => 'Amuntai Utara'
            ],
            [
                'id' => '6308071',
                'kabupaten_id' => '6308',
                'nama' => 'Haur Gading'
            ],
            [
                'id' => '6309010',
                'kabupaten_id' => '6309',
                'nama' => 'Banua Lawas'
            ],
            [
                'id' => '6309020',
                'kabupaten_id' => '6309',
                'nama' => 'Pugaan'
            ],
            [
                'id' => '6309030',
                'kabupaten_id' => '6309',
                'nama' => 'Kelua'
            ],
            [
                'id' => '6309040',
                'kabupaten_id' => '6309',
                'nama' => 'Muara Harus'
            ],
            [
                'id' => '6309050',
                'kabupaten_id' => '6309',
                'nama' => 'Tanta'
            ],
            [
                'id' => '6309060',
                'kabupaten_id' => '6309',
                'nama' => 'Tanjung'
            ],
            [
                'id' => '6309070',
                'kabupaten_id' => '6309',
                'nama' => 'Murung Pudak'
            ],
            [
                'id' => '6309080',
                'kabupaten_id' => '6309',
                'nama' => 'Haruai'
            ],
            [
                'id' => '6309081',
                'kabupaten_id' => '6309',
                'nama' => 'Bintang Ara'
            ],
            [
                'id' => '6309090',
                'kabupaten_id' => '6309',
                'nama' => 'Upau'
            ],
            [
                'id' => '6309100',
                'kabupaten_id' => '6309',
                'nama' => 'Muara Uya'
            ],
            [
                'id' => '6309110',
                'kabupaten_id' => '6309',
                'nama' => 'Jaro'
            ],
            [
                'id' => '6310010',
                'kabupaten_id' => '6310',
                'nama' => 'Kusan Hilir'
            ],
            [
                'id' => '6310020',
                'kabupaten_id' => '6310',
                'nama' => 'Sungai Loban'
            ],
            [
                'id' => '6310030',
                'kabupaten_id' => '6310',
                'nama' => 'Satui'
            ],
            [
                'id' => '6310031',
                'kabupaten_id' => '6310',
                'nama' => 'Angsana'
            ],
            [
                'id' => '6310040',
                'kabupaten_id' => '6310',
                'nama' => 'Kusan Hulu'
            ],
            [
                'id' => '6310041',
                'kabupaten_id' => '6310',
                'nama' => 'Kuranji'
            ],
            [
                'id' => '6310050',
                'kabupaten_id' => '6310',
                'nama' => 'Batu Licin'
            ],
            [
                'id' => '6310051',
                'kabupaten_id' => '6310',
                'nama' => 'Karang Bintang'
            ],
            [
                'id' => '6310052',
                'kabupaten_id' => '6310',
                'nama' => 'Simpang Empat'
            ],
            [
                'id' => '6310053',
                'kabupaten_id' => '6310',
                'nama' => 'Mantewe'
            ],
            [
                'id' => '6311010',
                'kabupaten_id' => '6311',
                'nama' => 'Lampihong'
            ],
            [
                'id' => '6311020',
                'kabupaten_id' => '6311',
                'nama' => 'Batu Mandi'
            ],
            [
                'id' => '6311030',
                'kabupaten_id' => '6311',
                'nama' => 'Awayan'
            ],
            [
                'id' => '6311031',
                'kabupaten_id' => '6311',
                'nama' => 'Tebing Tinggi'
            ],
            [
                'id' => '6311040',
                'kabupaten_id' => '6311',
                'nama' => 'Paringin'
            ],
            [
                'id' => '6311041',
                'kabupaten_id' => '6311',
                'nama' => 'Paringin Selatan'
            ],
            [
                'id' => '6311050',
                'kabupaten_id' => '6311',
                'nama' => 'Juai'
            ],
            [
                'id' => '6311060',
                'kabupaten_id' => '6311',
                'nama' => 'Halong'
            ],
            [
                'id' => '6371010',
                'kabupaten_id' => '6371',
                'nama' => 'Banjarmasin Selatan'
            ],
            [
                'id' => '6371020',
                'kabupaten_id' => '6371',
                'nama' => 'Banjarmasin Timur'
            ],
            [
                'id' => '6371030',
                'kabupaten_id' => '6371',
                'nama' => 'Banjarmasin Barat'
            ],
            [
                'id' => '6371031',
                'kabupaten_id' => '6371',
                'nama' => 'Banjarmasin Tengah'
            ],
            [
                'id' => '6371040',
                'kabupaten_id' => '6371',
                'nama' => 'Banjarmasin Utara'
            ],
            [
                'id' => '6372010',
                'kabupaten_id' => '6372',
                'nama' => 'Landasan Ulin'
            ],
            [
                'id' => '6372011',
                'kabupaten_id' => '6372',
                'nama' => 'Liang Anggang'
            ],
            [
                'id' => '6372020',
                'kabupaten_id' => '6372',
                'nama' => 'Cempaka'
            ],
            [
                'id' => '6372031',
                'kabupaten_id' => '6372',
                'nama' => 'Banjar Baru Utara'
            ],
            [
                'id' => '6372032',
                'kabupaten_id' => '6372',
                'nama' => 'Banjar Baru Selatan'
            ],
            [
                'id' => '6401010',
                'kabupaten_id' => '6401',
                'nama' => 'Batu Sopang'
            ],
            [
                'id' => '6401011',
                'kabupaten_id' => '6401',
                'nama' => 'Muara Samu'
            ],
            [
                'id' => '6401021',
                'kabupaten_id' => '6401',
                'nama' => 'Batu Engau'
            ],
            [
                'id' => '6401022',
                'kabupaten_id' => '6401',
                'nama' => 'Tanjung Harapan'
            ],
            [
                'id' => '6401030',
                'kabupaten_id' => '6401',
                'nama' => 'Pasir Belengkong'
            ],
            [
                'id' => '6401040',
                'kabupaten_id' => '6401',
                'nama' => 'Tanah Grogot'
            ],
            [
                'id' => '6401050',
                'kabupaten_id' => '6401',
                'nama' => 'Kuaro'
            ],
            [
                'id' => '6401060',
                'kabupaten_id' => '6401',
                'nama' => 'Long Ikis'
            ],
            [
                'id' => '6401070',
                'kabupaten_id' => '6401',
                'nama' => 'Muara Komam'
            ],
            [
                'id' => '6401080',
                'kabupaten_id' => '6401',
                'nama' => 'Long Kali'
            ],
            [
                'id' => '6402010',
                'kabupaten_id' => '6402',
                'nama' => 'Bongan'
            ],
            [
                'id' => '6402020',
                'kabupaten_id' => '6402',
                'nama' => 'Jempang'
            ],
            [
                'id' => '6402030',
                'kabupaten_id' => '6402',
                'nama' => 'Penyinggahan'
            ],
            [
                'id' => '6402040',
                'kabupaten_id' => '6402',
                'nama' => 'Muara Pahu'
            ],
            [
                'id' => '6402041',
                'kabupaten_id' => '6402',
                'nama' => 'Siluq Ngurai'
            ],
            [
                'id' => '6402050',
                'kabupaten_id' => '6402',
                'nama' => 'Muara Lawa'
            ],
            [
                'id' => '6402051',
                'kabupaten_id' => '6402',
                'nama' => 'Bentian Besar'
            ],
            [
                'id' => '6402060',
                'kabupaten_id' => '6402',
                'nama' => 'Damai'
            ],
            [
                'id' => '6402061',
                'kabupaten_id' => '6402',
                'nama' => 'Nyuatan'
            ],
            [
                'id' => '6402070',
                'kabupaten_id' => '6402',
                'nama' => 'Barong Tongkok'
            ],
            [
                'id' => '6402071',
                'kabupaten_id' => '6402',
                'nama' => 'Linggang Bigung'
            ],
            [
                'id' => '6402080',
                'kabupaten_id' => '6402',
                'nama' => 'Melak'
            ],
            [
                'id' => '6402081',
                'kabupaten_id' => '6402',
                'nama' => 'Sekolaq Darat'
            ],
            [
                'id' => '6402082',
                'kabupaten_id' => '6402',
                'nama' => 'Manor Bulatn'
            ],
            [
                'id' => '6402090',
                'kabupaten_id' => '6402',
                'nama' => 'Long Iram'
            ],
            [
                'id' => '6402091',
                'kabupaten_id' => '6402',
                'nama' => 'Tering'
            ],
            [
                'id' => '6402100',
                'kabupaten_id' => '6402',
                'nama' => 'Long Hubung'
            ],
            [
                'id' => '6402101',
                'kabupaten_id' => '6402',
                'nama' => 'Laham'
            ],
            [
                'id' => '6402110',
                'kabupaten_id' => '6402',
                'nama' => 'Long Bagun'
            ],
            [
                'id' => '6402120',
                'kabupaten_id' => '6402',
                'nama' => 'Long Pahangai'
            ],
            [
                'id' => '6402130',
                'kabupaten_id' => '6402',
                'nama' => 'Long Apari'
            ],
            [
                'id' => '6403010',
                'kabupaten_id' => '6403',
                'nama' => 'Semboja'
            ],
            [
                'id' => '6403020',
                'kabupaten_id' => '6403',
                'nama' => 'Muara Jawa'
            ],
            [
                'id' => '6403030',
                'kabupaten_id' => '6403',
                'nama' => 'Sanga-sanga'
            ],
            [
                'id' => '6403040',
                'kabupaten_id' => '6403',
                'nama' => 'Loa Janan'
            ],
            [
                'id' => '6403050',
                'kabupaten_id' => '6403',
                'nama' => 'Loa Kulu'
            ],
            [
                'id' => '6403060',
                'kabupaten_id' => '6403',
                'nama' => 'Muara Muntai'
            ],
            [
                'id' => '6403070',
                'kabupaten_id' => '6403',
                'nama' => 'Muara Wis'
            ],
            [
                'id' => '6403080',
                'kabupaten_id' => '6403',
                'nama' => 'Kotabangun'
            ],
            [
                'id' => '6403090',
                'kabupaten_id' => '6403',
                'nama' => 'Tenggarong'
            ],
            [
                'id' => '6403100',
                'kabupaten_id' => '6403',
                'nama' => 'Sebulu'
            ],
            [
                'id' => '6403110',
                'kabupaten_id' => '6403',
                'nama' => 'Tenggarong Seberang'
            ],
            [
                'id' => '6403120',
                'kabupaten_id' => '6403',
                'nama' => 'Anggana'
            ],
            [
                'id' => '6403130',
                'kabupaten_id' => '6403',
                'nama' => 'Muara Badak'
            ],
            [
                'id' => '6403140',
                'kabupaten_id' => '6403',
                'nama' => 'Marang Kayu'
            ],
            [
                'id' => '6403150',
                'kabupaten_id' => '6403',
                'nama' => 'Muara Kaman'
            ],
            [
                'id' => '6403160',
                'kabupaten_id' => '6403',
                'nama' => 'Kenohan'
            ],
            [
                'id' => '6403170',
                'kabupaten_id' => '6403',
                'nama' => 'Kembang Janggut'
            ],
            [
                'id' => '6403180',
                'kabupaten_id' => '6403',
                'nama' => 'Tabang'
            ],
            [
                'id' => '6404010',
                'kabupaten_id' => '6404',
                'nama' => 'Muara Ancalong'
            ],
            [
                'id' => '6404011',
                'kabupaten_id' => '6404',
                'nama' => 'Busang'
            ],
            [
                'id' => '6404012',
                'kabupaten_id' => '6404',
                'nama' => 'Long Mesangat'
            ],
            [
                'id' => '6404020',
                'kabupaten_id' => '6404',
                'nama' => 'Muara Wahau'
            ],
            [
                'id' => '6404021',
                'kabupaten_id' => '6404',
                'nama' => 'Telen'
            ],
            [
                'id' => '6404022',
                'kabupaten_id' => '6404',
                'nama' => 'Kongbeng'
            ],
            [
                'id' => '6404030',
                'kabupaten_id' => '6404',
                'nama' => 'Muara Bengkal'
            ],
            [
                'id' => '6404031',
                'kabupaten_id' => '6404',
                'nama' => 'Batu Ampar'
            ],
            [
                'id' => '6404040',
                'kabupaten_id' => '6404',
                'nama' => 'Sangatta Utara'
            ],
            [
                'id' => '6404041',
                'kabupaten_id' => '6404',
                'nama' => 'Bengalon'
            ],
            [
                'id' => '6404042',
                'kabupaten_id' => '6404',
                'nama' => 'Teluk Pandan'
            ],
            [
                'id' => '6404043',
                'kabupaten_id' => '6404',
                'nama' => 'Sangatta Selatan'
            ],
            [
                'id' => '6404044',
                'kabupaten_id' => '6404',
                'nama' => 'Rantau Pulung'
            ],
            [
                'id' => '6404050',
                'kabupaten_id' => '6404',
                'nama' => 'Sangkulirang'
            ],
            [
                'id' => '6404051',
                'kabupaten_id' => '6404',
                'nama' => 'Kaliorang'
            ],
            [
                'id' => '6404052',
                'kabupaten_id' => '6404',
                'nama' => 'Sandaran'
            ],
            [
                'id' => '6404053',
                'kabupaten_id' => '6404',
                'nama' => 'Kaubun'
            ],
            [
                'id' => '6404054',
                'kabupaten_id' => '6404',
                'nama' => 'Karangan'
            ],
            [
                'id' => '6405010',
                'kabupaten_id' => '6405',
                'nama' => 'Kelay'
            ],
            [
                'id' => '6405020',
                'kabupaten_id' => '6405',
                'nama' => 'Talisayan'
            ],
            [
                'id' => '6405021',
                'kabupaten_id' => '6405',
                'nama' => 'Tabalar'
            ],
            [
                'id' => '6405030',
                'kabupaten_id' => '6405',
                'nama' => 'Biduk Biduk'
            ],
            [
                'id' => '6405040',
                'kabupaten_id' => '6405',
                'nama' => 'Pulau Derawan'
            ],
            [
                'id' => '6405041',
                'kabupaten_id' => '6405',
                'nama' => 'Maratua'
            ],
            [
                'id' => '6405050',
                'kabupaten_id' => '6405',
                'nama' => 'Sambaliung'
            ],
            [
                'id' => '6405060',
                'kabupaten_id' => '6405',
                'nama' => 'Tanjung Redeb'
            ],
            [
                'id' => '6405070',
                'kabupaten_id' => '6405',
                'nama' => 'Gunung Tabur'
            ],
            [
                'id' => '6405080',
                'kabupaten_id' => '6405',
                'nama' => 'Segah'
            ],
            [
                'id' => '6405090',
                'kabupaten_id' => '6405',
                'nama' => 'Teluk Bayur'
            ],
            [
                'id' => '6405100',
                'kabupaten_id' => '6405',
                'nama' => 'Batu Putih'
            ],
            [
                'id' => '6405110',
                'kabupaten_id' => '6405',
                'nama' => 'Biatan'
            ],
            [
                'id' => '6409010',
                'kabupaten_id' => '6409',
                'nama' => 'Babulu'
            ],
            [
                'id' => '6409020',
                'kabupaten_id' => '6409',
                'nama' => 'Waru'
            ],
            [
                'id' => '6409030',
                'kabupaten_id' => '6409',
                'nama' => 'Penajam'
            ],
            [
                'id' => '6409040',
                'kabupaten_id' => '6409',
                'nama' => 'Sepaku'
            ],
            [
                'id' => '6471010',
                'kabupaten_id' => '6471',
                'nama' => 'Balikpapan Selatan'
            ],
            [
                'id' => '6471020',
                'kabupaten_id' => '6471',
                'nama' => 'Balikpapan Timur'
            ],
            [
                'id' => '6471030',
                'kabupaten_id' => '6471',
                'nama' => 'Balikpapan Utara'
            ],
            [
                'id' => '6471040',
                'kabupaten_id' => '6471',
                'nama' => 'Balikpapan Tengah'
            ],
            [
                'id' => '6471050',
                'kabupaten_id' => '6471',
                'nama' => 'Balikpapan Barat'
            ],
            [
                'id' => '6472010',
                'kabupaten_id' => '6472',
                'nama' => 'Palaran'
            ],
            [
                'id' => '6472020',
                'kabupaten_id' => '6472',
                'nama' => 'Samarinda Ilir'
            ],
            [
                'id' => '6472021',
                'kabupaten_id' => '6472',
                'nama' => 'Samarinda Kota'
            ],
            [
                'id' => '6472022',
                'kabupaten_id' => '6472',
                'nama' => 'Sambutan'
            ],
            [
                'id' => '6472030',
                'kabupaten_id' => '6472',
                'nama' => 'Samarinda Seberang'
            ],
            [
                'id' => '6472031',
                'kabupaten_id' => '6472',
                'nama' => 'Loa Janan Ilir'
            ],
            [
                'id' => '6472040',
                'kabupaten_id' => '6472',
                'nama' => 'Sungai Kunjang'
            ],
            [
                'id' => '6472050',
                'kabupaten_id' => '6472',
                'nama' => 'Samarinda Ulu'
            ],
            [
                'id' => '6472060',
                'kabupaten_id' => '6472',
                'nama' => 'Samarinda Utara'
            ],
            [
                'id' => '6472061',
                'kabupaten_id' => '6472',
                'nama' => 'Sungai Pinang'
            ],
            [
                'id' => '6474010',
                'kabupaten_id' => '6474',
                'nama' => 'Bontang Selatan'
            ],
            [
                'id' => '6474020',
                'kabupaten_id' => '6474',
                'nama' => 'Bontang Utara'
            ],
            [
                'id' => '6474030',
                'kabupaten_id' => '6474',
                'nama' => 'Bontang Barat'
            ],
            [
                'id' => '6501010',
                'kabupaten_id' => '6501',
                'nama' => 'Kayan Hulu'
            ],
            [
                'id' => '6501011',
                'kabupaten_id' => '6501',
                'nama' => 'Sungai Boh'
            ],
            [
                'id' => '6501012',
                'kabupaten_id' => '6501',
                'nama' => 'Kayan Selatan'
            ],
            [
                'id' => '6501020',
                'kabupaten_id' => '6501',
                'nama' => 'Kayan Hilir'
            ],
            [
                'id' => '6501030',
                'kabupaten_id' => '6501',
                'nama' => 'Pujungan'
            ],
            [
                'id' => '6501031',
                'kabupaten_id' => '6501',
                'nama' => 'Bahau Hulu'
            ],
            [
                'id' => '6501040',
                'kabupaten_id' => '6501',
                'nama' => 'Malinau Kota'
            ],
            [
                'id' => '6501041',
                'kabupaten_id' => '6501',
                'nama' => 'Malinau Selatan'
            ],
            [
                'id' => '6501042',
                'kabupaten_id' => '6501',
                'nama' => 'Malinau Barat'
            ],
            [
                'id' => '6501043',
                'kabupaten_id' => '6501',
                'nama' => 'Malinau Utara'
            ],
            [
                'id' => '6501044',
                'kabupaten_id' => '6501',
                'nama' => 'Malinau Selatan Hilir'
            ],
            [
                'id' => '6501045',
                'kabupaten_id' => '6501',
                'nama' => 'Malinau Selatan Hulu'
            ],
            [
                'id' => '6501050',
                'kabupaten_id' => '6501',
                'nama' => 'Mentarang'
            ],
            [
                'id' => '6501051',
                'kabupaten_id' => '6501',
                'nama' => 'Mentarang Hulu'
            ],
            [
                'id' => '6501052',
                'kabupaten_id' => '6501',
                'nama' => 'Sungai Tubu'
            ],
            [
                'id' => '6502010',
                'kabupaten_id' => '6502',
                'nama' => 'Peso'
            ],
            [
                'id' => '6502020',
                'kabupaten_id' => '6502',
                'nama' => 'Peso Hilir'
            ],
            [
                'id' => '6502030',
                'kabupaten_id' => '6502',
                'nama' => 'Tanjung Palas Barat'
            ],
            [
                'id' => '6502040',
                'kabupaten_id' => '6502',
                'nama' => 'Tanjung Palas'
            ],
            [
                'id' => '6502050',
                'kabupaten_id' => '6502',
                'nama' => 'Tanjung Selor'
            ],
            [
                'id' => '6502060',
                'kabupaten_id' => '6502',
                'nama' => 'Tanjung Palas Timur'
            ],
            [
                'id' => '6502070',
                'kabupaten_id' => '6502',
                'nama' => 'Tanjung Palas Tengah'
            ],
            [
                'id' => '6502080',
                'kabupaten_id' => '6502',
                'nama' => 'Tanjung Palas Utara'
            ],
            [
                'id' => '6502090',
                'kabupaten_id' => '6502',
                'nama' => 'Sekatak'
            ],
            [
                'id' => '6502100',
                'kabupaten_id' => '6502',
                'nama' => 'Bunyu'
            ],
            [
                'id' => '6503010',
                'kabupaten_id' => '6503',
                'nama' => 'Sesayap'
            ],
            [
                'id' => '6503020',
                'kabupaten_id' => '6503',
                'nama' => 'Sesayap Hilir'
            ],
            [
                'id' => '6503030',
                'kabupaten_id' => '6503',
                'nama' => 'Tana Lia'
            ],
            [
                'id' => '6504010',
                'kabupaten_id' => '6504',
                'nama' => 'Krayan'
            ],
            [
                'id' => '6504011',
                'kabupaten_id' => '6504',
                'nama' => 'Krayan Selatan'
            ],
            [
                'id' => '6504020',
                'kabupaten_id' => '6504',
                'nama' => 'Lumbis'
            ],
            [
                'id' => '6504021',
                'kabupaten_id' => '6504',
                'nama' => 'Lumbis Ogong'
            ],
            [
                'id' => '6504030',
                'kabupaten_id' => '6504',
                'nama' => 'Sembakung'
            ],
            [
                'id' => '6504031',
                'kabupaten_id' => '6504',
                'nama' => 'Sembakung Atulai'
            ],
            [
                'id' => '6504040',
                'kabupaten_id' => '6504',
                'nama' => 'Nunukan'
            ],
            [
                'id' => '6504041',
                'kabupaten_id' => '6504',
                'nama' => 'Sebuku'
            ],
            [
                'id' => '6504042',
                'kabupaten_id' => '6504',
                'nama' => 'Nunukan Selatan'
            ],
            [
                'id' => '6504043',
                'kabupaten_id' => '6504',
                'nama' => 'Sei Menggaris'
            ],
            [
                'id' => '6504044',
                'kabupaten_id' => '6504',
                'nama' => 'Tulin Onsoi'
            ],
            [
                'id' => '6504050',
                'kabupaten_id' => '6504',
                'nama' => 'Sebatik'
            ],
            [
                'id' => '6504051',
                'kabupaten_id' => '6504',
                'nama' => 'Sebatik Barat'
            ],
            [
                'id' => '6504052',
                'kabupaten_id' => '6504',
                'nama' => 'Sebatik Tengah'
            ],
            [
                'id' => '6504053',
                'kabupaten_id' => '6504',
                'nama' => 'Sebatik Utara'
            ],
            [
                'id' => '6504054',
                'kabupaten_id' => '6504',
                'nama' => 'Sebatik Timur'
            ],
            [
                'id' => '6571010',
                'kabupaten_id' => '6571',
                'nama' => 'Tarakan Timur'
            ],
            [
                'id' => '6571020',
                'kabupaten_id' => '6571',
                'nama' => 'Tarakan Tengah'
            ],
            [
                'id' => '6571030',
                'kabupaten_id' => '6571',
                'nama' => 'Tarakan Barat'
            ],
            [
                'id' => '6571040',
                'kabupaten_id' => '6571',
                'nama' => 'Tarakan Utara'
            ],
            [
                'id' => '7101021',
                'kabupaten_id' => '7101',
                'nama' => 'Dumoga Barat'
            ],
            [
                'id' => '7101022',
                'kabupaten_id' => '7101',
                'nama' => 'Dumoga Utara'
            ],
            [
                'id' => '7101023',
                'kabupaten_id' => '7101',
                'nama' => 'Dumoga Timur'
            ],
            [
                'id' => '7101060',
                'kabupaten_id' => '7101',
                'nama' => 'Lolayan'
            ],
            [
                'id' => '7101081',
                'kabupaten_id' => '7101',
                'nama' => 'Passi Barat'
            ],
            [
                'id' => '7101082',
                'kabupaten_id' => '7101',
                'nama' => 'Passi Timur'
            ],
            [
                'id' => '7101083',
                'kabupaten_id' => '7101',
                'nama' => 'Bilalang'
            ],
            [
                'id' => '7101090',
                'kabupaten_id' => '7101',
                'nama' => 'Poigar'
            ],
            [
                'id' => '7101100',
                'kabupaten_id' => '7101',
                'nama' => 'Bolaang'
            ],
            [
                'id' => '7101101',
                'kabupaten_id' => '7101',
                'nama' => 'Bolaang Timur'
            ],
            [
                'id' => '7101110',
                'kabupaten_id' => '7101',
                'nama' => 'Lolak'
            ],
            [
                'id' => '7101120',
                'kabupaten_id' => '7101',
                'nama' => 'Sangtombolang'
            ],
            [
                'id' => '7102091',
                'kabupaten_id' => '7102',
                'nama' => 'Langowan Timur'
            ],
            [
                'id' => '7102092',
                'kabupaten_id' => '7102',
                'nama' => 'Langowan Barat'
            ],
            [
                'id' => '7102093',
                'kabupaten_id' => '7102',
                'nama' => 'Langowan Selatan'
            ],
            [
                'id' => '7102094',
                'kabupaten_id' => '7102',
                'nama' => 'Langowan Utara'
            ],
            [
                'id' => '7102110',
                'kabupaten_id' => '7102',
                'nama' => 'Tompaso'
            ],
            [
                'id' => '7102111',
                'kabupaten_id' => '7102',
                'nama' => 'Tompaso Barat'
            ],
            [
                'id' => '7102120',
                'kabupaten_id' => '7102',
                'nama' => 'Kawangkoan'
            ],
            [
                'id' => '7102121',
                'kabupaten_id' => '7102',
                'nama' => 'Kawangkoan Barat'
            ],
            [
                'id' => '7102122',
                'kabupaten_id' => '7102',
                'nama' => 'Kawangkoan Utara'
            ],
            [
                'id' => '7102130',
                'kabupaten_id' => '7102',
                'nama' => 'Sonder'
            ],
            [
                'id' => '7102160',
                'kabupaten_id' => '7102',
                'nama' => 'Tombariri'
            ],
            [
                'id' => '7102161',
                'kabupaten_id' => '7102',
                'nama' => 'Tombariri Timur'
            ],
            [
                'id' => '7102170',
                'kabupaten_id' => '7102',
                'nama' => 'Pineleng'
            ],
            [
                'id' => '7102171',
                'kabupaten_id' => '7102',
                'nama' => 'Tombulu'
            ],
            [
                'id' => '7102172',
                'kabupaten_id' => '7102',
                'nama' => 'Mandolang'
            ],
            [
                'id' => '7102190',
                'kabupaten_id' => '7102',
                'nama' => 'Tondano Barat'
            ],
            [
                'id' => '7102191',
                'kabupaten_id' => '7102',
                'nama' => 'Tondano Selatan'
            ],
            [
                'id' => '7102200',
                'kabupaten_id' => '7102',
                'nama' => 'Remboken'
            ],
            [
                'id' => '7102210',
                'kabupaten_id' => '7102',
                'nama' => 'Kakas'
            ],
            [
                'id' => '7102211',
                'kabupaten_id' => '7102',
                'nama' => 'Kakas Barat'
            ],
            [
                'id' => '7102220',
                'kabupaten_id' => '7102',
                'nama' => 'Lembean Timur'
            ],
            [
                'id' => '7102230',
                'kabupaten_id' => '7102',
                'nama' => 'Eris'
            ],
            [
                'id' => '7102240',
                'kabupaten_id' => '7102',
                'nama' => 'Kombi'
            ],
            [
                'id' => '7102250',
                'kabupaten_id' => '7102',
                'nama' => 'Tondano Timur'
            ],
            [
                'id' => '7102251',
                'kabupaten_id' => '7102',
                'nama' => 'Tondano Utara'
            ],
            [
                'id' => '7103040',
                'kabupaten_id' => '7103',
                'nama' => 'Manganitu Selatan'
            ],
            [
                'id' => '7103041',
                'kabupaten_id' => '7103',
                'nama' => 'Tatoareng'
            ],
            [
                'id' => '7103050',
                'kabupaten_id' => '7103',
                'nama' => 'Tamako'
            ],
            [
                'id' => '7103060',
                'kabupaten_id' => '7103',
                'nama' => 'Tabukan Selatan'
            ],
            [
                'id' => '7103061',
                'kabupaten_id' => '7103',
                'nama' => 'Tabukan Selatan Tengah'
            ],
            [
                'id' => '7103062',
                'kabupaten_id' => '7103',
                'nama' => 'Tabukan Selatan Tenggara'
            ],
            [
                'id' => '7103070',
                'kabupaten_id' => '7103',
                'nama' => 'Tabukan Tengah'
            ],
            [
                'id' => '7103080',
                'kabupaten_id' => '7103',
                'nama' => 'Manganitu'
            ],
            [
                'id' => '7103090',
                'kabupaten_id' => '7103',
                'nama' => 'Tahuna'
            ],
            [
                'id' => '7103091',
                'kabupaten_id' => '7103',
                'nama' => 'Tahuna Timur'
            ],
            [
                'id' => '7103092',
                'kabupaten_id' => '7103',
                'nama' => 'Tahuna Barat'
            ],
            [
                'id' => '7103100',
                'kabupaten_id' => '7103',
                'nama' => 'Tabukan Utara'
            ],
            [
                'id' => '7103101',
                'kabupaten_id' => '7103',
                'nama' => 'Nusa Tabukan'
            ],
            [
                'id' => '7103102',
                'kabupaten_id' => '7103',
                'nama' => 'Kepulauan Marore'
            ],
            [
                'id' => '7103110',
                'kabupaten_id' => '7103',
                'nama' => 'Kendahe'
            ],
            [
                'id' => '7104010',
                'kabupaten_id' => '7104',
                'nama' => 'Kabaruan'
            ],
            [
                'id' => '7104011',
                'kabupaten_id' => '7104',
                'nama' => 'Damau'
            ],
            [
                'id' => '7104020',
                'kabupaten_id' => '7104',
                'nama' => 'Lirung'
            ],
            [
                'id' => '7104021',
                'kabupaten_id' => '7104',
                'nama' => 'Salibabu'
            ],
            [
                'id' => '7104022',
                'kabupaten_id' => '7104',
                'nama' => 'Kalongan'
            ],
            [
                'id' => '7104023',
                'kabupaten_id' => '7104',
                'nama' => 'Moronge'
            ],
            [
                'id' => '7104030',
                'kabupaten_id' => '7104',
                'nama' => 'Melonguane'
            ],
            [
                'id' => '7104031',
                'kabupaten_id' => '7104',
                'nama' => 'Melonguane Timur'
            ],
            [
                'id' => '7104040',
                'kabupaten_id' => '7104',
                'nama' => 'Beo'
            ],
            [
                'id' => '7104041',
                'kabupaten_id' => '7104',
                'nama' => 'Beo Utara'
            ],
            [
                'id' => '7104042',
                'kabupaten_id' => '7104',
                'nama' => 'Beo Selatan'
            ],
            [
                'id' => '7104050',
                'kabupaten_id' => '7104',
                'nama' => 'Rainis'
            ],
            [
                'id' => '7104051',
                'kabupaten_id' => '7104',
                'nama' => 'Tampa Na\'mma'
            ],
            [
                'id' => '7104052',
                'kabupaten_id' => '7104',
                'nama' => 'Pulutan'
            ],
            [
                'id' => '7104060',
                'kabupaten_id' => '7104',
                'nama' => 'Essang'
            ],
            [
                'id' => '7104061',
                'kabupaten_id' => '7104',
                'nama' => 'Essang Selatan'
            ],
            [
                'id' => '7104070',
                'kabupaten_id' => '7104',
                'nama' => 'Gemeh'
            ],
            [
                'id' => '7104080',
                'kabupaten_id' => '7104',
                'nama' => 'Nanusa'
            ],
            [
                'id' => '7104081',
                'kabupaten_id' => '7104',
                'nama' => 'Miangas'
            ],
            [
                'id' => '7105010',
                'kabupaten_id' => '7105',
                'nama' => 'Modoinding'
            ],
            [
                'id' => '7105020',
                'kabupaten_id' => '7105',
                'nama' => 'Tompaso Baru'
            ],
            [
                'id' => '7105021',
                'kabupaten_id' => '7105',
                'nama' => 'Maesaan'
            ],
            [
                'id' => '7105070',
                'kabupaten_id' => '7105',
                'nama' => 'Ranoyapo'
            ],
            [
                'id' => '7105080',
                'kabupaten_id' => '7105',
                'nama' => 'Motoling'
            ],
            [
                'id' => '7105081',
                'kabupaten_id' => '7105',
                'nama' => 'Kumelembuai'
            ],
            [
                'id' => '7105082',
                'kabupaten_id' => '7105',
                'nama' => 'Motoling Barat'
            ],
            [
                'id' => '7105083',
                'kabupaten_id' => '7105',
                'nama' => 'Motoling Timur'
            ],
            [
                'id' => '7105090',
                'kabupaten_id' => '7105',
                'nama' => 'Sinonsayang'
            ],
            [
                'id' => '7105100',
                'kabupaten_id' => '7105',
                'nama' => 'Tenga'
            ],
            [
                'id' => '7105111',
                'kabupaten_id' => '7105',
                'nama' => 'Amurang'
            ],
            [
                'id' => '7105112',
                'kabupaten_id' => '7105',
                'nama' => 'Amurang Barat'
            ],
            [
                'id' => '7105113',
                'kabupaten_id' => '7105',
                'nama' => 'Amurang Timur'
            ],
            [
                'id' => '7105120',
                'kabupaten_id' => '7105',
                'nama' => 'Tareran'
            ],
            [
                'id' => '7105121',
                'kabupaten_id' => '7105',
                'nama' => 'Sulta'
            ],
            [
                'id' => '7105130',
                'kabupaten_id' => '7105',
                'nama' => 'Tumpaan'
            ],
            [
                'id' => '7105131',
                'kabupaten_id' => '7105',
                'nama' => 'Tatapaan'
            ],
            [
                'id' => '7106010',
                'kabupaten_id' => '7106',
                'nama' => 'Kema'
            ],
            [
                'id' => '7106020',
                'kabupaten_id' => '7106',
                'nama' => 'Kauditan'
            ],
            [
                'id' => '7106030',
                'kabupaten_id' => '7106',
                'nama' => 'Airmadidi'
            ],
            [
                'id' => '7106040',
                'kabupaten_id' => '7106',
                'nama' => 'Kalawat'
            ],
            [
                'id' => '7106050',
                'kabupaten_id' => '7106',
                'nama' => 'Dimembe'
            ],
            [
                'id' => '7106051',
                'kabupaten_id' => '7106',
                'nama' => 'Talawaan'
            ],
            [
                'id' => '7106060',
                'kabupaten_id' => '7106',
                'nama' => 'Wori'
            ],
            [
                'id' => '7106070',
                'kabupaten_id' => '7106',
                'nama' => 'Likupang Barat'
            ],
            [
                'id' => '7106080',
                'kabupaten_id' => '7106',
                'nama' => 'Likupang Timur'
            ],
            [
                'id' => '7106081',
                'kabupaten_id' => '7106',
                'nama' => 'Likupang Selatan'
            ],
            [
                'id' => '7107010',
                'kabupaten_id' => '7107',
                'nama' => 'Sangkub'
            ],
            [
                'id' => '7107020',
                'kabupaten_id' => '7107',
                'nama' => 'Bintauna'
            ],
            [
                'id' => '7107030',
                'kabupaten_id' => '7107',
                'nama' => 'Bolang Itang Timur'
            ],
            [
                'id' => '7107040',
                'kabupaten_id' => '7107',
                'nama' => 'Bolang Itang Barat'
            ],
            [
                'id' => '7107050',
                'kabupaten_id' => '7107',
                'nama' => 'Kaidipang'
            ],
            [
                'id' => '7107060',
                'kabupaten_id' => '7107',
                'nama' => 'Pinogaluman'
            ],
            [
                'id' => '7108010',
                'kabupaten_id' => '7108',
                'nama' => 'Biaro'
            ],
            [
                'id' => '7108020',
                'kabupaten_id' => '7108',
                'nama' => 'Tagulandang Selatan'
            ],
            [
                'id' => '7108030',
                'kabupaten_id' => '7108',
                'nama' => 'Tagulandang'
            ],
            [
                'id' => '7108040',
                'kabupaten_id' => '7108',
                'nama' => 'Tagulandang Utara'
            ],
            [
                'id' => '7108050',
                'kabupaten_id' => '7108',
                'nama' => 'Siau Barat Selatan'
            ],
            [
                'id' => '7108060',
                'kabupaten_id' => '7108',
                'nama' => 'Siau Timur Selatan'
            ],
            [
                'id' => '7108070',
                'kabupaten_id' => '7108',
                'nama' => 'Siau Barat'
            ],
            [
                'id' => '7108080',
                'kabupaten_id' => '7108',
                'nama' => 'Siau Tengah'
            ],
            [
                'id' => '7108090',
                'kabupaten_id' => '7108',
                'nama' => 'Siau Timur'
            ],
            [
                'id' => '7108100',
                'kabupaten_id' => '7108',
                'nama' => 'Siau Barat Utara'
            ],
            [
                'id' => '7109010',
                'kabupaten_id' => '7109',
                'nama' => 'Ratatotok'
            ],
            [
                'id' => '7109020',
                'kabupaten_id' => '7109',
                'nama' => 'Pusomaen'
            ],
            [
                'id' => '7109030',
                'kabupaten_id' => '7109',
                'nama' => 'Belang'
            ],
            [
                'id' => '7109040',
                'kabupaten_id' => '7109',
                'nama' => 'Ratahan'
            ],
            [
                'id' => '7109041',
                'kabupaten_id' => '7109',
                'nama' => 'Pasan'
            ],
            [
                'id' => '7109042',
                'kabupaten_id' => '7109',
                'nama' => 'Ratahan Timur'
            ],
            [
                'id' => '7109050',
                'kabupaten_id' => '7109',
                'nama' => 'Tombatu'
            ],
            [
                'id' => '7109051',
                'kabupaten_id' => '7109',
                'nama' => 'Tombatu Timur'
            ],
            [
                'id' => '7109052',
                'kabupaten_id' => '7109',
                'nama' => 'Tombatu Utara'
            ],
            [
                'id' => '7109060',
                'kabupaten_id' => '7109',
                'nama' => 'Touluaan'
            ],
            [
                'id' => '7109061',
                'kabupaten_id' => '7109',
                'nama' => 'Touluaan Selatan'
            ],
            [
                'id' => '7109062',
                'kabupaten_id' => '7109',
                'nama' => 'Silian Raya'
            ],
            [
                'id' => '7110010',
                'kabupaten_id' => '7110',
                'nama' => 'Posigadan'
            ],
            [
                'id' => '7110020',
                'kabupaten_id' => '7110',
                'nama' => 'Bolang Uki'
            ],
            [
                'id' => '7110030',
                'kabupaten_id' => '7110',
                'nama' => 'Pinolosian'
            ],
            [
                'id' => '7110040',
                'kabupaten_id' => '7110',
                'nama' => 'Pinolosian Tengah'
            ],
            [
                'id' => '7110050',
                'kabupaten_id' => '7110',
                'nama' => 'Pinolosian Timur'
            ],
            [
                'id' => '7111010',
                'kabupaten_id' => '7111',
                'nama' => 'Nuangan'
            ],
            [
                'id' => '7111020',
                'kabupaten_id' => '7111',
                'nama' => 'Tutuyan'
            ],
            [
                'id' => '7111030',
                'kabupaten_id' => '7111',
                'nama' => 'Kotabunan'
            ],
            [
                'id' => '7111040',
                'kabupaten_id' => '7111',
                'nama' => 'Modayag'
            ],
            [
                'id' => '7111050',
                'kabupaten_id' => '7111',
                'nama' => 'Modayag Barat'
            ],
            [
                'id' => '7171010',
                'kabupaten_id' => '7171',
                'nama' => 'Malalayang'
            ],
            [
                'id' => '7171020',
                'kabupaten_id' => '7171',
                'nama' => 'Sario'
            ],
            [
                'id' => '7171021',
                'kabupaten_id' => '7171',
                'nama' => 'Wanea'
            ],
            [
                'id' => '7171030',
                'kabupaten_id' => '7171',
                'nama' => 'Wenang'
            ],
            [
                'id' => '7171031',
                'kabupaten_id' => '7171',
                'nama' => 'Tikala'
            ],
            [
                'id' => '7171032',
                'kabupaten_id' => '7171',
                'nama' => 'Paal Dua'
            ],
            [
                'id' => '7171040',
                'kabupaten_id' => '7171',
                'nama' => 'Mapanget'
            ],
            [
                'id' => '7171051',
                'kabupaten_id' => '7171',
                'nama' => 'Singkil'
            ],
            [
                'id' => '7171052',
                'kabupaten_id' => '7171',
                'nama' => 'Tuminting'
            ],
            [
                'id' => '7171053',
                'kabupaten_id' => '7171',
                'nama' => 'Bunaken'
            ],
            [
                'id' => '7171054',
                'kabupaten_id' => '7171',
                'nama' => 'Bunaken Kepulauan'
            ],
            [
                'id' => '7172010',
                'kabupaten_id' => '7172',
                'nama' => 'Madidir'
            ],
            [
                'id' => '7172011',
                'kabupaten_id' => '7172',
                'nama' => 'Matuari'
            ],
            [
                'id' => '7172012',
                'kabupaten_id' => '7172',
                'nama' => 'Girian'
            ],
            [
                'id' => '7172021',
                'kabupaten_id' => '7172',
                'nama' => 'Lembeh Selatan'
            ],
            [
                'id' => '7172022',
                'kabupaten_id' => '7172',
                'nama' => 'Lembeh Utara'
            ],
            [
                'id' => '7172030',
                'kabupaten_id' => '7172',
                'nama' => 'Aertembaga'
            ],
            [
                'id' => '7172031',
                'kabupaten_id' => '7172',
                'nama' => 'Maesa'
            ],
            [
                'id' => '7172040',
                'kabupaten_id' => '7172',
                'nama' => 'Ranowulu'
            ],
            [
                'id' => '7173010',
                'kabupaten_id' => '7173',
                'nama' => 'Tomohon Selatan'
            ],
            [
                'id' => '7173020',
                'kabupaten_id' => '7173',
                'nama' => 'Tomohon Tengah'
            ],
            [
                'id' => '7173021',
                'kabupaten_id' => '7173',
                'nama' => 'Tomohon Timur'
            ],
            [
                'id' => '7173022',
                'kabupaten_id' => '7173',
                'nama' => 'Tomohon Barat'
            ],
            [
                'id' => '7173030',
                'kabupaten_id' => '7173',
                'nama' => 'Tomohon Utara'
            ],
            [
                'id' => '7174010',
                'kabupaten_id' => '7174',
                'nama' => 'Kotamobagu Selatan'
            ],
            [
                'id' => '7174020',
                'kabupaten_id' => '7174',
                'nama' => 'Kotamobagu Timur'
            ],
            [
                'id' => '7174030',
                'kabupaten_id' => '7174',
                'nama' => 'Kotamobagu Barat'
            ],
            [
                'id' => '7174040',
                'kabupaten_id' => '7174',
                'nama' => 'Kotamobagu Utara'
            ],
            [
                'id' => '7201010',
                'kabupaten_id' => '7201',
                'nama' => 'Labobo'
            ],
            [
                'id' => '7201011',
                'kabupaten_id' => '7201',
                'nama' => 'Bokan Kepulauan'
            ],
            [
                'id' => '7201012',
                'kabupaten_id' => '7201',
                'nama' => 'Bangkurung'
            ],
            [
                'id' => '7201020',
                'kabupaten_id' => '7201',
                'nama' => 'Banggai'
            ],
            [
                'id' => '7201021',
                'kabupaten_id' => '7201',
                'nama' => 'Banggai Utara'
            ],
            [
                'id' => '7201022',
                'kabupaten_id' => '7201',
                'nama' => 'Banggai Tengah'
            ],
            [
                'id' => '7201023',
                'kabupaten_id' => '7201',
                'nama' => 'Banggai Selatan'
            ],
            [
                'id' => '7201030',
                'kabupaten_id' => '7201',
                'nama' => 'Totikum'
            ],
            [
                'id' => '7201031',
                'kabupaten_id' => '7201',
                'nama' => 'Totikum Selatan'
            ],
            [
                'id' => '7201040',
                'kabupaten_id' => '7201',
                'nama' => 'Tinangkung'
            ],
            [
                'id' => '7201041',
                'kabupaten_id' => '7201',
                'nama' => 'Tinangkung Selatan'
            ],
            [
                'id' => '7201042',
                'kabupaten_id' => '7201',
                'nama' => 'Tinangkung Utara'
            ],
            [
                'id' => '7201050',
                'kabupaten_id' => '7201',
                'nama' => 'Liang'
            ],
            [
                'id' => '7201051',
                'kabupaten_id' => '7201',
                'nama' => 'Peling Tengah'
            ],
            [
                'id' => '7201060',
                'kabupaten_id' => '7201',
                'nama' => 'Bulagi'
            ],
            [
                'id' => '7201061',
                'kabupaten_id' => '7201',
                'nama' => 'Bulagi Selatan'
            ],
            [
                'id' => '7201062',
                'kabupaten_id' => '7201',
                'nama' => 'Bulagi Utara'
            ],
            [
                'id' => '7201070',
                'kabupaten_id' => '7201',
                'nama' => 'Buko'
            ],
            [
                'id' => '7201071',
                'kabupaten_id' => '7201',
                'nama' => 'Buko Selatan'
            ],
            [
                'id' => '7202010',
                'kabupaten_id' => '7202',
                'nama' => 'Toili'
            ],
            [
                'id' => '7202011',
                'kabupaten_id' => '7202',
                'nama' => 'Toili Barat'
            ],
            [
                'id' => '7202012',
                'kabupaten_id' => '7202',
                'nama' => 'Moilong'
            ],
            [
                'id' => '7202020',
                'kabupaten_id' => '7202',
                'nama' => 'Batui'
            ],
            [
                'id' => '7202021',
                'kabupaten_id' => '7202',
                'nama' => 'Batui Selatan'
            ],
            [
                'id' => '7202030',
                'kabupaten_id' => '7202',
                'nama' => 'Bunta'
            ],
            [
                'id' => '7202031',
                'kabupaten_id' => '7202',
                'nama' => 'Nuhon'
            ],
            [
                'id' => '7202032',
                'kabupaten_id' => '7202',
                'nama' => 'Simpang Raya'
            ],
            [
                'id' => '7202040',
                'kabupaten_id' => '7202',
                'nama' => 'Kintom'
            ],
            [
                'id' => '7202050',
                'kabupaten_id' => '7202',
                'nama' => 'Luwuk'
            ],
            [
                'id' => '7202051',
                'kabupaten_id' => '7202',
                'nama' => 'Luwuk Timur'
            ],
            [
                'id' => '7202052',
                'kabupaten_id' => '7202',
                'nama' => 'Luwuk Utara'
            ],
            [
                'id' => '7202053',
                'kabupaten_id' => '7202',
                'nama' => 'Luwuk Selatan'
            ],
            [
                'id' => '7202054',
                'kabupaten_id' => '7202',
                'nama' => 'Nambo'
            ],
            [
                'id' => '7202060',
                'kabupaten_id' => '7202',
                'nama' => 'Pagimana'
            ],
            [
                'id' => '7202061',
                'kabupaten_id' => '7202',
                'nama' => 'Bualemo'
            ],
            [
                'id' => '7202062',
                'kabupaten_id' => '7202',
                'nama' => 'Lobu'
            ],
            [
                'id' => '7202070',
                'kabupaten_id' => '7202',
                'nama' => 'Lamala'
            ],
            [
                'id' => '7202071',
                'kabupaten_id' => '7202',
                'nama' => 'Masama'
            ],
            [
                'id' => '7202072',
                'kabupaten_id' => '7202',
                'nama' => 'Mantoh'
            ],
            [
                'id' => '7202080',
                'kabupaten_id' => '7202',
                'nama' => 'Balantak'
            ],
            [
                'id' => '7202081',
                'kabupaten_id' => '7202',
                'nama' => 'Balantak Selatan'
            ],
            [
                'id' => '7202082',
                'kabupaten_id' => '7202',
                'nama' => 'Balantak Utara'
            ],
            [
                'id' => '7203010',
                'kabupaten_id' => '7203',
                'nama' => 'Menui Kepulauan'
            ],
            [
                'id' => '7203020',
                'kabupaten_id' => '7203',
                'nama' => 'Bungku Selatan'
            ],
            [
                'id' => '7203021',
                'kabupaten_id' => '7203',
                'nama' => 'Bahodopi'
            ],
            [
                'id' => '7203022',
                'kabupaten_id' => '7203',
                'nama' => 'Bungku Pesisir'
            ],
            [
                'id' => '7203030',
                'kabupaten_id' => '7203',
                'nama' => 'Bungku Tengah'
            ],
            [
                'id' => '7203031',
                'kabupaten_id' => '7203',
                'nama' => 'Bungku Timur'
            ],
            [
                'id' => '7203040',
                'kabupaten_id' => '7203',
                'nama' => 'Bungku Barat'
            ],
            [
                'id' => '7203041',
                'kabupaten_id' => '7203',
                'nama' => 'Bumi Raya'
            ],
            [
                'id' => '7203042',
                'kabupaten_id' => '7203',
                'nama' => 'Wita Ponda'
            ],
            [
                'id' => '7203050',
                'kabupaten_id' => '7203',
                'nama' => 'Lembo'
            ],
            [
                'id' => '7203051',
                'kabupaten_id' => '7203',
                'nama' => 'Lembo Raya'
            ],
            [
                'id' => '7203060',
                'kabupaten_id' => '7203',
                'nama' => 'Mori Atas'
            ],
            [
                'id' => '7203061',
                'kabupaten_id' => '7203',
                'nama' => 'Mori Utara'
            ],
            [
                'id' => '7203070',
                'kabupaten_id' => '7203',
                'nama' => 'Petasia'
            ],
            [
                'id' => '7203071',
                'kabupaten_id' => '7203',
                'nama' => 'Soyo Jaya'
            ],
            [
                'id' => '7203072',
                'kabupaten_id' => '7203',
                'nama' => 'Petasia Timur'
            ],
            [
                'id' => '7203080',
                'kabupaten_id' => '7203',
                'nama' => 'Bungku Utara'
            ],
            [
                'id' => '7203081',
                'kabupaten_id' => '7203',
                'nama' => 'Mamosalato'
            ],
            [
                'id' => '7204010',
                'kabupaten_id' => '7204',
                'nama' => 'Pamona Selatan'
            ],
            [
                'id' => '7204011',
                'kabupaten_id' => '7204',
                'nama' => 'Pamona Barat'
            ],
            [
                'id' => '7204012',
                'kabupaten_id' => '7204',
                'nama' => 'Pamona Tenggara'
            ],
            [
                'id' => '7204020',
                'kabupaten_id' => '7204',
                'nama' => 'Lore Selatan'
            ],
            [
                'id' => '7204021',
                'kabupaten_id' => '7204',
                'nama' => 'Lore Barat'
            ],
            [
                'id' => '7204030',
                'kabupaten_id' => '7204',
                'nama' => 'Pamona Pusalemba'
            ],
            [
                'id' => '7204031',
                'kabupaten_id' => '7204',
                'nama' => 'Pamona Timur'
            ],
            [
                'id' => '7204032',
                'kabupaten_id' => '7204',
                'nama' => 'Pamona Utara'
            ],
            [
                'id' => '7204040',
                'kabupaten_id' => '7204',
                'nama' => 'Lore Utara'
            ],
            [
                'id' => '7204041',
                'kabupaten_id' => '7204',
                'nama' => 'Lore Tengah'
            ],
            [
                'id' => '7204042',
                'kabupaten_id' => '7204',
                'nama' => 'Lore Timur'
            ],
            [
                'id' => '7204043',
                'kabupaten_id' => '7204',
                'nama' => 'Lore Peore'
            ],
            [
                'id' => '7204050',
                'kabupaten_id' => '7204',
                'nama' => 'Poso Pesisir'
            ],
            [
                'id' => '7204051',
                'kabupaten_id' => '7204',
                'nama' => 'Poso Pesisir Selatan'
            ],
            [
                'id' => '7204052',
                'kabupaten_id' => '7204',
                'nama' => 'Poso Pesisir Utara'
            ],
            [
                'id' => '7204060',
                'kabupaten_id' => '7204',
                'nama' => 'Lage'
            ],
            [
                'id' => '7204070',
                'kabupaten_id' => '7204',
                'nama' => 'Poso Kota'
            ],
            [
                'id' => '7204071',
                'kabupaten_id' => '7204',
                'nama' => 'Poso Kota Utara'
            ],
            [
                'id' => '7204072',
                'kabupaten_id' => '7204',
                'nama' => 'Poso Kota Selatan'
            ],
            [
                'id' => '7205041',
                'kabupaten_id' => '7205',
                'nama' => 'Rio Pakava'
            ],
            [
                'id' => '7205051',
                'kabupaten_id' => '7205',
                'nama' => 'Pinembani'
            ],
            [
                'id' => '7205080',
                'kabupaten_id' => '7205',
                'nama' => 'Banawa'
            ],
            [
                'id' => '7205081',
                'kabupaten_id' => '7205',
                'nama' => 'Banawa Selatan'
            ],
            [
                'id' => '7205082',
                'kabupaten_id' => '7205',
                'nama' => 'Banawa Tengah'
            ],
            [
                'id' => '7205090',
                'kabupaten_id' => '7205',
                'nama' => 'Labuan'
            ],
            [
                'id' => '7205091',
                'kabupaten_id' => '7205',
                'nama' => 'Tanantovea'
            ],
            [
                'id' => '7205100',
                'kabupaten_id' => '7205',
                'nama' => 'Sindue'
            ],
            [
                'id' => '7205101',
                'kabupaten_id' => '7205',
                'nama' => 'Sindue Tombusabora'
            ],
            [
                'id' => '7205102',
                'kabupaten_id' => '7205',
                'nama' => 'Sindue Tobata'
            ],
            [
                'id' => '7205120',
                'kabupaten_id' => '7205',
                'nama' => 'Sirenja'
            ],
            [
                'id' => '7205130',
                'kabupaten_id' => '7205',
                'nama' => 'Balaesang'
            ],
            [
                'id' => '7205131',
                'kabupaten_id' => '7205',
                'nama' => 'Balaesang Tanjung'
            ],
            [
                'id' => '7205140',
                'kabupaten_id' => '7205',
                'nama' => 'Damsol'
            ],
            [
                'id' => '7205160',
                'kabupaten_id' => '7205',
                'nama' => 'Sojol'
            ],
            [
                'id' => '7205161',
                'kabupaten_id' => '7205',
                'nama' => 'Sojol Utara'
            ],
            [
                'id' => '7206010',
                'kabupaten_id' => '7206',
                'nama' => 'Dampal Selatan'
            ],
            [
                'id' => '7206020',
                'kabupaten_id' => '7206',
                'nama' => 'Dampal Utara'
            ],
            [
                'id' => '7206030',
                'kabupaten_id' => '7206',
                'nama' => 'Dondo'
            ],
            [
                'id' => '7206031',
                'kabupaten_id' => '7206',
                'nama' => 'Ogodeide'
            ],
            [
                'id' => '7206032',
                'kabupaten_id' => '7206',
                'nama' => 'Basidondo'
            ],
            [
                'id' => '7206040',
                'kabupaten_id' => '7206',
                'nama' => 'Baolan'
            ],
            [
                'id' => '7206041',
                'kabupaten_id' => '7206',
                'nama' => 'Lampasio'
            ],
            [
                'id' => '7206050',
                'kabupaten_id' => '7206',
                'nama' => 'Galang'
            ],
            [
                'id' => '7206060',
                'kabupaten_id' => '7206',
                'nama' => 'Tolitoli Utara'
            ],
            [
                'id' => '7206061',
                'kabupaten_id' => '7206',
                'nama' => 'Dako Pamean'
            ],
            [
                'id' => '7207010',
                'kabupaten_id' => '7207',
                'nama' => 'Lakea'
            ],
            [
                'id' => '7207011',
                'kabupaten_id' => '7207',
                'nama' => 'Biau'
            ],
            [
                'id' => '7207012',
                'kabupaten_id' => '7207',
                'nama' => 'Karamat'
            ],
            [
                'id' => '7207020',
                'kabupaten_id' => '7207',
                'nama' => 'Momunu'
            ],
            [
                'id' => '7207021',
                'kabupaten_id' => '7207',
                'nama' => 'Tiloan'
            ],
            [
                'id' => '7207030',
                'kabupaten_id' => '7207',
                'nama' => 'Bokat'
            ],
            [
                'id' => '7207031',
                'kabupaten_id' => '7207',
                'nama' => 'Bukal'
            ],
            [
                'id' => '7207040',
                'kabupaten_id' => '7207',
                'nama' => 'Bunobogu'
            ],
            [
                'id' => '7207041',
                'kabupaten_id' => '7207',
                'nama' => 'Gadung'
            ],
            [
                'id' => '7207050',
                'kabupaten_id' => '7207',
                'nama' => 'Paleleh'
            ],
            [
                'id' => '7207051',
                'kabupaten_id' => '7207',
                'nama' => 'Paleleh Barat'
            ],
            [
                'id' => '7208010',
                'kabupaten_id' => '7208',
                'nama' => 'Sausu'
            ],
            [
                'id' => '7208011',
                'kabupaten_id' => '7208',
                'nama' => 'Torue'
            ],
            [
                'id' => '7208012',
                'kabupaten_id' => '7208',
                'nama' => 'Balinggi'
            ],
            [
                'id' => '7208020',
                'kabupaten_id' => '7208',
                'nama' => 'Parigi'
            ],
            [
                'id' => '7208021',
                'kabupaten_id' => '7208',
                'nama' => 'Parigi Selatan'
            ],
            [
                'id' => '7208022',
                'kabupaten_id' => '7208',
                'nama' => 'Parigi Barat'
            ],
            [
                'id' => '7208023',
                'kabupaten_id' => '7208',
                'nama' => 'Parigi Utara'
            ],
            [
                'id' => '7208024',
                'kabupaten_id' => '7208',
                'nama' => 'Parigi Tengah'
            ],
            [
                'id' => '7208030',
                'kabupaten_id' => '7208',
                'nama' => 'Ampibabo'
            ],
            [
                'id' => '7208031',
                'kabupaten_id' => '7208',
                'nama' => 'Kasimbar'
            ],
            [
                'id' => '7208032',
                'kabupaten_id' => '7208',
                'nama' => 'Toribulu'
            ],
            [
                'id' => '7208033',
                'kabupaten_id' => '7208',
                'nama' => 'Siniu'
            ],
            [
                'id' => '7208040',
                'kabupaten_id' => '7208',
                'nama' => 'Tinombo'
            ],
            [
                'id' => '7208041',
                'kabupaten_id' => '7208',
                'nama' => 'Tinombo Selatan'
            ],
            [
                'id' => '7208050',
                'kabupaten_id' => '7208',
                'nama' => 'Tomini'
            ],
            [
                'id' => '7208051',
                'kabupaten_id' => '7208',
                'nama' => 'Mepanga'
            ],
            [
                'id' => '7208052',
                'kabupaten_id' => '7208',
                'nama' => 'Palasa'
            ],
            [
                'id' => '7208060',
                'kabupaten_id' => '7208',
                'nama' => 'Moutong'
            ],
            [
                'id' => '7208061',
                'kabupaten_id' => '7208',
                'nama' => 'Bolano Lambunu'
            ],
            [
                'id' => '7208062',
                'kabupaten_id' => '7208',
                'nama' => 'Taopa'
            ],
            [
                'id' => '7208063',
                'kabupaten_id' => '7208',
                'nama' => 'Bolano'
            ],
            [
                'id' => '7208064',
                'kabupaten_id' => '7208',
                'nama' => 'Ongka Malino'
            ],
            [
                'id' => '7209010',
                'kabupaten_id' => '7209',
                'nama' => 'Tojo Barat'
            ],
            [
                'id' => '7209020',
                'kabupaten_id' => '7209',
                'nama' => 'Tojo'
            ],
            [
                'id' => '7209030',
                'kabupaten_id' => '7209',
                'nama' => 'Ulubongka'
            ],
            [
                'id' => '7209040',
                'kabupaten_id' => '7209',
                'nama' => 'Ampana Tete'
            ],
            [
                'id' => '7209050',
                'kabupaten_id' => '7209',
                'nama' => 'Ampana Kota'
            ],
            [
                'id' => '7209060',
                'kabupaten_id' => '7209',
                'nama' => 'Una - Una'
            ],
            [
                'id' => '7209070',
                'kabupaten_id' => '7209',
                'nama' => 'Togean'
            ],
            [
                'id' => '7209080',
                'kabupaten_id' => '7209',
                'nama' => 'Walea Kepulauan'
            ],
            [
                'id' => '7209081',
                'kabupaten_id' => '7209',
                'nama' => 'Walea Besar'
            ],
            [
                'id' => '7210010',
                'kabupaten_id' => '7210',
                'nama' => 'Pipikoro'
            ],
            [
                'id' => '7210020',
                'kabupaten_id' => '7210',
                'nama' => 'Kulawi Selatan'
            ],
            [
                'id' => '7210030',
                'kabupaten_id' => '7210',
                'nama' => 'Kulawi'
            ],
            [
                'id' => '7210040',
                'kabupaten_id' => '7210',
                'nama' => 'Lindu'
            ],
            [
                'id' => '7210050',
                'kabupaten_id' => '7210',
                'nama' => 'Nokilalaki'
            ],
            [
                'id' => '7210060',
                'kabupaten_id' => '7210',
                'nama' => 'Palolo'
            ],
            [
                'id' => '7210070',
                'kabupaten_id' => '7210',
                'nama' => 'Gumbasa'
            ],
            [
                'id' => '7210080',
                'kabupaten_id' => '7210',
                'nama' => 'Dolo Selatan'
            ],
            [
                'id' => '7210090',
                'kabupaten_id' => '7210',
                'nama' => 'Dolo Barat'
            ],
            [
                'id' => '7210100',
                'kabupaten_id' => '7210',
                'nama' => 'Tanambulava'
            ],
            [
                'id' => '7210110',
                'kabupaten_id' => '7210',
                'nama' => 'Dolo'
            ],
            [
                'id' => '7210120',
                'kabupaten_id' => '7210',
                'nama' => 'Sigi Biromaru'
            ],
            [
                'id' => '7210130',
                'kabupaten_id' => '7210',
                'nama' => 'Marawola'
            ],
            [
                'id' => '7210140',
                'kabupaten_id' => '7210',
                'nama' => 'Marawola Barat'
            ],
            [
                'id' => '7210150',
                'kabupaten_id' => '7210',
                'nama' => 'Kinovaro'
            ],
            [
                'id' => '7271010',
                'kabupaten_id' => '7271',
                'nama' => 'Palu Barat'
            ],
            [
                'id' => '7271011',
                'kabupaten_id' => '7271',
                'nama' => 'Tatanga'
            ],
            [
                'id' => '7271012',
                'kabupaten_id' => '7271',
                'nama' => 'Ulujadi'
            ],
            [
                'id' => '7271020',
                'kabupaten_id' => '7271',
                'nama' => 'Palu Selatan'
            ],
            [
                'id' => '7271030',
                'kabupaten_id' => '7271',
                'nama' => 'Palu Timur'
            ],
            [
                'id' => '7271031',
                'kabupaten_id' => '7271',
                'nama' => 'Mantikulore'
            ],
            [
                'id' => '7271040',
                'kabupaten_id' => '7271',
                'nama' => 'Palu Utara'
            ],
            [
                'id' => '7271041',
                'kabupaten_id' => '7271',
                'nama' => 'Tawaeli'
            ],
            [
                'id' => '7301010',
                'kabupaten_id' => '7301',
                'nama' => 'Pasimarannu'
            ],
            [
                'id' => '7301011',
                'kabupaten_id' => '7301',
                'nama' => 'Pasilambena'
            ],
            [
                'id' => '7301020',
                'kabupaten_id' => '7301',
                'nama' => 'Pasimassunggu'
            ],
            [
                'id' => '7301021',
                'kabupaten_id' => '7301',
                'nama' => 'Takabonerate'
            ],
            [
                'id' => '7301022',
                'kabupaten_id' => '7301',
                'nama' => 'Pasimassunggu Timur'
            ],
            [
                'id' => '7301030',
                'kabupaten_id' => '7301',
                'nama' => 'Bontosikuyu'
            ],
            [
                'id' => '7301040',
                'kabupaten_id' => '7301',
                'nama' => 'Bontoharu'
            ],
            [
                'id' => '7301041',
                'kabupaten_id' => '7301',
                'nama' => 'Benteng'
            ],
            [
                'id' => '7301042',
                'kabupaten_id' => '7301',
                'nama' => 'Bontomanai'
            ],
            [
                'id' => '7301050',
                'kabupaten_id' => '7301',
                'nama' => 'Bontomatene'
            ],
            [
                'id' => '7301051',
                'kabupaten_id' => '7301',
                'nama' => 'Buki'
            ],
            [
                'id' => '7302010',
                'kabupaten_id' => '7302',
                'nama' => 'Gantarang'
            ],
            [
                'id' => '7302020',
                'kabupaten_id' => '7302',
                'nama' => 'Ujung Bulu'
            ],
            [
                'id' => '7302021',
                'kabupaten_id' => '7302',
                'nama' => 'Ujung Loe'
            ],
            [
                'id' => '7302030',
                'kabupaten_id' => '7302',
                'nama' => 'Bonto Bahari'
            ],
            [
                'id' => '7302040',
                'kabupaten_id' => '7302',
                'nama' => 'Bontotiro'
            ],
            [
                'id' => '7302050',
                'kabupaten_id' => '7302',
                'nama' => 'Hero Lange-lange'
            ],
            [
                'id' => '7302060',
                'kabupaten_id' => '7302',
                'nama' => 'Kajang'
            ],
            [
                'id' => '7302070',
                'kabupaten_id' => '7302',
                'nama' => 'Bulukumpa'
            ],
            [
                'id' => '7302080',
                'kabupaten_id' => '7302',
                'nama' => 'Rilau Ale'
            ],
            [
                'id' => '7302090',
                'kabupaten_id' => '7302',
                'nama' => 'Kindang'
            ],
            [
                'id' => '7303010',
                'kabupaten_id' => '7303',
                'nama' => 'Bissappu'
            ],
            [
                'id' => '7303011',
                'kabupaten_id' => '7303',
                'nama' => 'Uluere'
            ],
            [
                'id' => '7303012',
                'kabupaten_id' => '7303',
                'nama' => 'Sinoa'
            ],
            [
                'id' => '7303020',
                'kabupaten_id' => '7303',
                'nama' => 'Bantaeng'
            ],
            [
                'id' => '7303021',
                'kabupaten_id' => '7303',
                'nama' => 'Eremerasa'
            ],
            [
                'id' => '7303030',
                'kabupaten_id' => '7303',
                'nama' => 'Tompobulu'
            ],
            [
                'id' => '7303031',
                'kabupaten_id' => '7303',
                'nama' => 'Pa\'jukukang'
            ],
            [
                'id' => '7303032',
                'kabupaten_id' => '7303',
                'nama' => 'Gantarangkeke'
            ],
            [
                'id' => '7304010',
                'kabupaten_id' => '7304',
                'nama' => 'Bangkala'
            ],
            [
                'id' => '7304011',
                'kabupaten_id' => '7304',
                'nama' => 'Bangkala Barat'
            ],
            [
                'id' => '7304020',
                'kabupaten_id' => '7304',
                'nama' => 'Tamalatea'
            ],
            [
                'id' => '7304021',
                'kabupaten_id' => '7304',
                'nama' => 'Bontoramba'
            ],
            [
                'id' => '7304030',
                'kabupaten_id' => '7304',
                'nama' => 'Binamu'
            ],
            [
                'id' => '7304031',
                'kabupaten_id' => '7304',
                'nama' => 'Turatea'
            ],
            [
                'id' => '7304040',
                'kabupaten_id' => '7304',
                'nama' => 'Batang'
            ],
            [
                'id' => '7304041',
                'kabupaten_id' => '7304',
                'nama' => 'Arungkeke'
            ],
            [
                'id' => '7304042',
                'kabupaten_id' => '7304',
                'nama' => 'Tarowang'
            ],
            [
                'id' => '7304050',
                'kabupaten_id' => '7304',
                'nama' => 'Kelara'
            ],
            [
                'id' => '7304051',
                'kabupaten_id' => '7304',
                'nama' => 'Rumbia'
            ],
            [
                'id' => '7305010',
                'kabupaten_id' => '7305',
                'nama' => 'Mangara Bombang'
            ],
            [
                'id' => '7305020',
                'kabupaten_id' => '7305',
                'nama' => 'Mappakasunggu'
            ],
            [
                'id' => '7305021',
                'kabupaten_id' => '7305',
                'nama' => 'Sanrobone'
            ],
            [
                'id' => '7305030',
                'kabupaten_id' => '7305',
                'nama' => 'Polombangkeng Selatan'
            ],
            [
                'id' => '7305031',
                'kabupaten_id' => '7305',
                'nama' => 'Pattallassang'
            ],
            [
                'id' => '7305040',
                'kabupaten_id' => '7305',
                'nama' => 'Polombangkeng Utara'
            ],
            [
                'id' => '7305050',
                'kabupaten_id' => '7305',
                'nama' => 'Galesong Selatan'
            ],
            [
                'id' => '7305051',
                'kabupaten_id' => '7305',
                'nama' => 'Galesong'
            ],
            [
                'id' => '7305060',
                'kabupaten_id' => '7305',
                'nama' => 'Galesong Utara'
            ],
            [
                'id' => '7306010',
                'kabupaten_id' => '7306',
                'nama' => 'Bontonompo'
            ],
            [
                'id' => '7306011',
                'kabupaten_id' => '7306',
                'nama' => 'Bontonompo Selatan'
            ],
            [
                'id' => '7306020',
                'kabupaten_id' => '7306',
                'nama' => 'Bajeng'
            ],
            [
                'id' => '7306021',
                'kabupaten_id' => '7306',
                'nama' => 'Bajeng Barat'
            ],
            [
                'id' => '7306030',
                'kabupaten_id' => '7306',
                'nama' => 'Pallangga'
            ],
            [
                'id' => '7306031',
                'kabupaten_id' => '7306',
                'nama' => 'Barombong'
            ],
            [
                'id' => '7306040',
                'kabupaten_id' => '7306',
                'nama' => 'Somba Opu'
            ],
            [
                'id' => '7306050',
                'kabupaten_id' => '7306',
                'nama' => 'Bontomarannu'
            ],
            [
                'id' => '7306051',
                'kabupaten_id' => '7306',
                'nama' => 'Pattallassang'
            ],
            [
                'id' => '7306060',
                'kabupaten_id' => '7306',
                'nama' => 'Parangloe'
            ],
            [
                'id' => '7306061',
                'kabupaten_id' => '7306',
                'nama' => 'Manuju'
            ],
            [
                'id' => '7306070',
                'kabupaten_id' => '7306',
                'nama' => 'Tinggimoncong'
            ],
            [
                'id' => '7306071',
                'kabupaten_id' => '7306',
                'nama' => 'Tombolo Pao'
            ],
            [
                'id' => '7306072',
                'kabupaten_id' => '7306',
                'nama' => 'Parigi'
            ],
            [
                'id' => '7306080',
                'kabupaten_id' => '7306',
                'nama' => 'Bungaya'
            ],
            [
                'id' => '7306081',
                'kabupaten_id' => '7306',
                'nama' => 'Bontolempangan'
            ],
            [
                'id' => '7306090',
                'kabupaten_id' => '7306',
                'nama' => 'Tompobulu'
            ],
            [
                'id' => '7306091',
                'kabupaten_id' => '7306',
                'nama' => 'Biringbulu'
            ],
            [
                'id' => '7307010',
                'kabupaten_id' => '7307',
                'nama' => 'Sinjai Barat'
            ],
            [
                'id' => '7307020',
                'kabupaten_id' => '7307',
                'nama' => 'Sinjai Borong'
            ],
            [
                'id' => '7307030',
                'kabupaten_id' => '7307',
                'nama' => 'Sinjai Selatan'
            ],
            [
                'id' => '7307040',
                'kabupaten_id' => '7307',
                'nama' => 'Tellu Limpoe'
            ],
            [
                'id' => '7307050',
                'kabupaten_id' => '7307',
                'nama' => 'Sinjai Timur'
            ],
            [
                'id' => '7307060',
                'kabupaten_id' => '7307',
                'nama' => 'Sinjai Tengah'
            ],
            [
                'id' => '7307070',
                'kabupaten_id' => '7307',
                'nama' => 'Sinjai Utara'
            ],
            [
                'id' => '7307080',
                'kabupaten_id' => '7307',
                'nama' => 'Bulupoddo'
            ],
            [
                'id' => '7307090',
                'kabupaten_id' => '7307',
                'nama' => 'Pulau Sembilan'
            ],
            [
                'id' => '7308010',
                'kabupaten_id' => '7308',
                'nama' => 'Mandai'
            ],
            [
                'id' => '7308011',
                'kabupaten_id' => '7308',
                'nama' => 'Moncongloe'
            ],
            [
                'id' => '7308020',
                'kabupaten_id' => '7308',
                'nama' => 'Maros Baru'
            ],
            [
                'id' => '7308021',
                'kabupaten_id' => '7308',
                'nama' => 'Marusu'
            ],
            [
                'id' => '7308022',
                'kabupaten_id' => '7308',
                'nama' => 'Turikale'
            ],
            [
                'id' => '7308023',
                'kabupaten_id' => '7308',
                'nama' => 'Lau'
            ],
            [
                'id' => '7308030',
                'kabupaten_id' => '7308',
                'nama' => 'Bontoa'
            ],
            [
                'id' => '7308040',
                'kabupaten_id' => '7308',
                'nama' => 'Bantimurung'
            ],
            [
                'id' => '7308041',
                'kabupaten_id' => '7308',
                'nama' => 'Simbang'
            ],
            [
                'id' => '7308050',
                'kabupaten_id' => '7308',
                'nama' => 'Tanralili'
            ],
            [
                'id' => '7308051',
                'kabupaten_id' => '7308',
                'nama' => 'Tompu Bulu'
            ],
            [
                'id' => '7308060',
                'kabupaten_id' => '7308',
                'nama' => 'Camba'
            ],
            [
                'id' => '7308061',
                'kabupaten_id' => '7308',
                'nama' => 'Cenrana'
            ],
            [
                'id' => '7308070',
                'kabupaten_id' => '7308',
                'nama' => 'Mallawa'
            ],
            [
                'id' => '7309010',
                'kabupaten_id' => '7309',
                'nama' => 'Liukang Tangaya'
            ],
            [
                'id' => '7309020',
                'kabupaten_id' => '7309',
                'nama' => 'Liukang Kalmas'
            ],
            [
                'id' => '7309030',
                'kabupaten_id' => '7309',
                'nama' => 'Liukang Tupabbiring'
            ],
            [
                'id' => '7309031',
                'kabupaten_id' => '7309',
                'nama' => 'Liukang Tupabbiring Utara'
            ],
            [
                'id' => '7309040',
                'kabupaten_id' => '7309',
                'nama' => 'Pangkajene'
            ],
            [
                'id' => '7309041',
                'kabupaten_id' => '7309',
                'nama' => 'Minasatene'
            ],
            [
                'id' => '7309050',
                'kabupaten_id' => '7309',
                'nama' => 'Balocci'
            ],
            [
                'id' => '7309051',
                'kabupaten_id' => '7309',
                'nama' => 'Tondong Tallasa'
            ],
            [
                'id' => '7309060',
                'kabupaten_id' => '7309',
                'nama' => 'Bungoro'
            ],
            [
                'id' => '7309070',
                'kabupaten_id' => '7309',
                'nama' => 'Labakkang'
            ],
            [
                'id' => '7309080',
                'kabupaten_id' => '7309',
                'nama' => 'Ma\'rang'
            ],
            [
                'id' => '7309091',
                'kabupaten_id' => '7309',
                'nama' => 'Segeri'
            ],
            [
                'id' => '7309092',
                'kabupaten_id' => '7309',
                'nama' => 'Mandalle'
            ],
            [
                'id' => '7310010',
                'kabupaten_id' => '7310',
                'nama' => 'Tanete Riaja'
            ],
            [
                'id' => '7310011',
                'kabupaten_id' => '7310',
                'nama' => 'Pujananting'
            ],
            [
                'id' => '7310020',
                'kabupaten_id' => '7310',
                'nama' => 'Tanete Rilau'
            ],
            [
                'id' => '7310030',
                'kabupaten_id' => '7310',
                'nama' => 'Barru'
            ],
            [
                'id' => '7310040',
                'kabupaten_id' => '7310',
                'nama' => 'Soppeng Riaja'
            ],
            [
                'id' => '7310041',
                'kabupaten_id' => '7310',
                'nama' => 'Balusu'
            ],
            [
                'id' => '7310050',
                'kabupaten_id' => '7310',
                'nama' => 'Mallusetasi'
            ],
            [
                'id' => '7311010',
                'kabupaten_id' => '7311',
                'nama' => 'Bontocani'
            ],
            [
                'id' => '7311020',
                'kabupaten_id' => '7311',
                'nama' => 'Kahu'
            ],
            [
                'id' => '7311030',
                'kabupaten_id' => '7311',
                'nama' => 'Kajuara'
            ],
            [
                'id' => '7311040',
                'kabupaten_id' => '7311',
                'nama' => 'Salomekko'
            ],
            [
                'id' => '7311050',
                'kabupaten_id' => '7311',
                'nama' => 'Tonra'
            ],
            [
                'id' => '7311060',
                'kabupaten_id' => '7311',
                'nama' => 'Patimpeng'
            ],
            [
                'id' => '7311070',
                'kabupaten_id' => '7311',
                'nama' => 'Libureng'
            ],
            [
                'id' => '7311080',
                'kabupaten_id' => '7311',
                'nama' => 'Mare'
            ],
            [
                'id' => '7311090',
                'kabupaten_id' => '7311',
                'nama' => 'Sibulue'
            ],
            [
                'id' => '7311100',
                'kabupaten_id' => '7311',
                'nama' => 'Cina'
            ],
            [
                'id' => '7311110',
                'kabupaten_id' => '7311',
                'nama' => 'Barebbo'
            ],
            [
                'id' => '7311120',
                'kabupaten_id' => '7311',
                'nama' => 'Ponre'
            ],
            [
                'id' => '7311130',
                'kabupaten_id' => '7311',
                'nama' => 'Lappariaja'
            ],
            [
                'id' => '7311140',
                'kabupaten_id' => '7311',
                'nama' => 'Lamuru'
            ],
            [
                'id' => '7311141',
                'kabupaten_id' => '7311',
                'nama' => 'Tellu Limpoe'
            ],
            [
                'id' => '7311150',
                'kabupaten_id' => '7311',
                'nama' => 'Bengo'
            ],
            [
                'id' => '7311160',
                'kabupaten_id' => '7311',
                'nama' => 'Ulaweng'
            ],
            [
                'id' => '7311170',
                'kabupaten_id' => '7311',
                'nama' => 'Palakka'
            ],
            [
                'id' => '7311180',
                'kabupaten_id' => '7311',
                'nama' => 'Awangpone'
            ],
            [
                'id' => '7311190',
                'kabupaten_id' => '7311',
                'nama' => 'Tellu Siattinge'
            ],
            [
                'id' => '7311200',
                'kabupaten_id' => '7311',
                'nama' => 'Amali'
            ],
            [
                'id' => '7311210',
                'kabupaten_id' => '7311',
                'nama' => 'Ajangale'
            ],
            [
                'id' => '7311220',
                'kabupaten_id' => '7311',
                'nama' => 'Dua Boccoe'
            ],
            [
                'id' => '7311230',
                'kabupaten_id' => '7311',
                'nama' => 'Cenrana'
            ],
            [
                'id' => '7311710',
                'kabupaten_id' => '7311',
                'nama' => 'Tanete Riattang Barat'
            ],
            [
                'id' => '7311720',
                'kabupaten_id' => '7311',
                'nama' => 'Tanete Riattang'
            ],
            [
                'id' => '7311730',
                'kabupaten_id' => '7311',
                'nama' => 'Tanete Riattang Timur'
            ],
            [
                'id' => '7312010',
                'kabupaten_id' => '7312',
                'nama' => 'Mario Riwawo'
            ],
            [
                'id' => '7312020',
                'kabupaten_id' => '7312',
                'nama' => 'Lalabata'
            ],
            [
                'id' => '7312030',
                'kabupaten_id' => '7312',
                'nama' => 'Lili Riaja'
            ],
            [
                'id' => '7312031',
                'kabupaten_id' => '7312',
                'nama' => 'Ganra'
            ],
            [
                'id' => '7312032',
                'kabupaten_id' => '7312',
                'nama' => 'Citta'
            ],
            [
                'id' => '7312040',
                'kabupaten_id' => '7312',
                'nama' => 'Lili Rilau'
            ],
            [
                'id' => '7312050',
                'kabupaten_id' => '7312',
                'nama' => 'Donri Donri'
            ],
            [
                'id' => '7312060',
                'kabupaten_id' => '7312',
                'nama' => 'Mario Riawa'
            ],
            [
                'id' => '7313010',
                'kabupaten_id' => '7313',
                'nama' => 'Sabbang Paru'
            ],
            [
                'id' => '7313020',
                'kabupaten_id' => '7313',
                'nama' => 'Tempe'
            ],
            [
                'id' => '7313030',
                'kabupaten_id' => '7313',
                'nama' => 'Pammana'
            ],
            [
                'id' => '7313040',
                'kabupaten_id' => '7313',
                'nama' => 'Bola'
            ],
            [
                'id' => '7313050',
                'kabupaten_id' => '7313',
                'nama' => 'Takkalalla'
            ],
            [
                'id' => '7313060',
                'kabupaten_id' => '7313',
                'nama' => 'Sajoanging'
            ],
            [
                'id' => '7313061',
                'kabupaten_id' => '7313',
                'nama' => 'Penrang'
            ],
            [
                'id' => '7313070',
                'kabupaten_id' => '7313',
                'nama' => 'Majauleng'
            ],
            [
                'id' => '7313080',
                'kabupaten_id' => '7313',
                'nama' => 'Tana Sitolo'
            ],
            [
                'id' => '7313090',
                'kabupaten_id' => '7313',
                'nama' => 'Belawa'
            ],
            [
                'id' => '7313100',
                'kabupaten_id' => '7313',
                'nama' => 'Maniang Pajo'
            ],
            [
                'id' => '7313101',
                'kabupaten_id' => '7313',
                'nama' => 'Gilireng'
            ],
            [
                'id' => '7313110',
                'kabupaten_id' => '7313',
                'nama' => 'Keera'
            ],
            [
                'id' => '7313120',
                'kabupaten_id' => '7313',
                'nama' => 'Pitumpanua'
            ],
            [
                'id' => '7314010',
                'kabupaten_id' => '7314',
                'nama' => 'Panca Lautang'
            ],
            [
                'id' => '7314020',
                'kabupaten_id' => '7314',
                'nama' => 'Tellulimpo E'
            ],
            [
                'id' => '7314030',
                'kabupaten_id' => '7314',
                'nama' => 'Watang Pulu'
            ],
            [
                'id' => '7314040',
                'kabupaten_id' => '7314',
                'nama' => 'Baranti'
            ],
            [
                'id' => '7314050',
                'kabupaten_id' => '7314',
                'nama' => 'Panca Rijang'
            ],
            [
                'id' => '7314051',
                'kabupaten_id' => '7314',
                'nama' => 'Kulo'
            ],
            [
                'id' => '7314060',
                'kabupaten_id' => '7314',
                'nama' => 'Maritengngae'
            ],
            [
                'id' => '7314061',
                'kabupaten_id' => '7314',
                'nama' => 'Watang Sidenreng'
            ],
            [
                'id' => '7314070',
                'kabupaten_id' => '7314',
                'nama' => 'Pitu Riawa'
            ],
            [
                'id' => '7314080',
                'kabupaten_id' => '7314',
                'nama' => 'Duapitue'
            ],
            [
                'id' => '7314081',
                'kabupaten_id' => '7314',
                'nama' => 'Pitu Riase'
            ],
            [
                'id' => '7315010',
                'kabupaten_id' => '7315',
                'nama' => 'Suppa'
            ],
            [
                'id' => '7315020',
                'kabupaten_id' => '7315',
                'nama' => 'Mattirosompe'
            ],
            [
                'id' => '7315021',
                'kabupaten_id' => '7315',
                'nama' => 'Lanrisang'
            ],
            [
                'id' => '7315030',
                'kabupaten_id' => '7315',
                'nama' => 'Mattiro Bulu'
            ],
            [
                'id' => '7315040',
                'kabupaten_id' => '7315',
                'nama' => 'Watang Sawitto'
            ],
            [
                'id' => '7315041',
                'kabupaten_id' => '7315',
                'nama' => 'Paleteang'
            ],
            [
                'id' => '7315042',
                'kabupaten_id' => '7315',
                'nama' => 'Tiroang'
            ],
            [
                'id' => '7315050',
                'kabupaten_id' => '7315',
                'nama' => 'Patampanua'
            ],
            [
                'id' => '7315060',
                'kabupaten_id' => '7315',
                'nama' => 'Cempa'
            ],
            [
                'id' => '7315070',
                'kabupaten_id' => '7315',
                'nama' => 'Duampanua'
            ],
            [
                'id' => '7315071',
                'kabupaten_id' => '7315',
                'nama' => 'Batulappa'
            ],
            [
                'id' => '7315080',
                'kabupaten_id' => '7315',
                'nama' => 'Lembang'
            ],
            [
                'id' => '7316010',
                'kabupaten_id' => '7316',
                'nama' => 'Maiwa'
            ],
            [
                'id' => '7316011',
                'kabupaten_id' => '7316',
                'nama' => 'Bungin'
            ],
            [
                'id' => '7316020',
                'kabupaten_id' => '7316',
                'nama' => 'Enrekang'
            ],
            [
                'id' => '7316021',
                'kabupaten_id' => '7316',
                'nama' => 'Cendana'
            ],
            [
                'id' => '7316030',
                'kabupaten_id' => '7316',
                'nama' => 'Baraka'
            ],
            [
                'id' => '7316031',
                'kabupaten_id' => '7316',
                'nama' => 'Buntu Batu'
            ],
            [
                'id' => '7316040',
                'kabupaten_id' => '7316',
                'nama' => 'Anggeraja'
            ],
            [
                'id' => '7316041',
                'kabupaten_id' => '7316',
                'nama' => 'Malua'
            ],
            [
                'id' => '7316050',
                'kabupaten_id' => '7316',
                'nama' => 'Alla'
            ],
            [
                'id' => '7316051',
                'kabupaten_id' => '7316',
                'nama' => 'Curio'
            ],
            [
                'id' => '7316052',
                'kabupaten_id' => '7316',
                'nama' => 'Masalle'
            ],
            [
                'id' => '7316053',
                'kabupaten_id' => '7316',
                'nama' => 'Baroko'
            ],
            [
                'id' => '7317010',
                'kabupaten_id' => '7317',
                'nama' => 'Larompong'
            ],
            [
                'id' => '7317011',
                'kabupaten_id' => '7317',
                'nama' => 'Larompong Selatan'
            ],
            [
                'id' => '7317020',
                'kabupaten_id' => '7317',
                'nama' => 'Suli'
            ],
            [
                'id' => '7317021',
                'kabupaten_id' => '7317',
                'nama' => 'Suli Barat'
            ],
            [
                'id' => '7317030',
                'kabupaten_id' => '7317',
                'nama' => 'Belopa'
            ],
            [
                'id' => '7317031',
                'kabupaten_id' => '7317',
                'nama' => 'Kamanre'
            ],
            [
                'id' => '7317032',
                'kabupaten_id' => '7317',
                'nama' => 'Belopa Utara'
            ],
            [
                'id' => '7317040',
                'kabupaten_id' => '7317',
                'nama' => 'Bajo'
            ],
            [
                'id' => '7317041',
                'kabupaten_id' => '7317',
                'nama' => 'Bajo Barat'
            ],
            [
                'id' => '7317050',
                'kabupaten_id' => '7317',
                'nama' => 'Bassesangtempe'
            ],
            [
                'id' => '7317051',
                'kabupaten_id' => '7317',
                'nama' => 'Latimojong'
            ],
            [
                'id' => '7317052',
                'kabupaten_id' => '7317',
                'nama' => 'Bassesangtempe Utara'
            ],
            [
                'id' => '7317060',
                'kabupaten_id' => '7317',
                'nama' => 'Bupon'
            ],
            [
                'id' => '7317061',
                'kabupaten_id' => '7317',
                'nama' => 'Ponrang'
            ],
            [
                'id' => '7317062',
                'kabupaten_id' => '7317',
                'nama' => 'Ponrang Selatan'
            ],
            [
                'id' => '7317070',
                'kabupaten_id' => '7317',
                'nama' => 'Bua'
            ],
            [
                'id' => '7317080',
                'kabupaten_id' => '7317',
                'nama' => 'Walenrang'
            ],
            [
                'id' => '7317081',
                'kabupaten_id' => '7317',
                'nama' => 'Walenrang Timur'
            ],
            [
                'id' => '7317090',
                'kabupaten_id' => '7317',
                'nama' => 'Lamasi'
            ],
            [
                'id' => '7317091',
                'kabupaten_id' => '7317',
                'nama' => 'Walenrang Utara'
            ],
            [
                'id' => '7317092',
                'kabupaten_id' => '7317',
                'nama' => 'Walenrang Barat'
            ],
            [
                'id' => '7317093',
                'kabupaten_id' => '7317',
                'nama' => 'Lamasi Timur'
            ],
            [
                'id' => '7318010',
                'kabupaten_id' => '7318',
                'nama' => 'Bonggakaradeng'
            ],
            [
                'id' => '7318011',
                'kabupaten_id' => '7318',
                'nama' => 'Simbuang'
            ],
            [
                'id' => '7318012',
                'kabupaten_id' => '7318',
                'nama' => 'Rano'
            ],
            [
                'id' => '7318013',
                'kabupaten_id' => '7318',
                'nama' => 'Mappak'
            ],
            [
                'id' => '7318020',
                'kabupaten_id' => '7318',
                'nama' => 'Mengkendek'
            ],
            [
                'id' => '7318021',
                'kabupaten_id' => '7318',
                'nama' => 'Gandang Batu Silanan'
            ],
            [
                'id' => '7318030',
                'kabupaten_id' => '7318',
                'nama' => 'Sangalla'
            ],
            [
                'id' => '7318031',
                'kabupaten_id' => '7318',
                'nama' => 'Sangala Selatan'
            ],
            [
                'id' => '7318032',
                'kabupaten_id' => '7318',
                'nama' => 'Sangalla Utara'
            ],
            [
                'id' => '7318040',
                'kabupaten_id' => '7318',
                'nama' => 'Makale'
            ],
            [
                'id' => '7318041',
                'kabupaten_id' => '7318',
                'nama' => 'Makale Selatan'
            ],
            [
                'id' => '7318042',
                'kabupaten_id' => '7318',
                'nama' => 'Makale Utara'
            ],
            [
                'id' => '7318050',
                'kabupaten_id' => '7318',
                'nama' => 'Saluputti'
            ],
            [
                'id' => '7318051',
                'kabupaten_id' => '7318',
                'nama' => 'Bittuang'
            ],
            [
                'id' => '7318052',
                'kabupaten_id' => '7318',
                'nama' => 'Rembon'
            ],
            [
                'id' => '7318053',
                'kabupaten_id' => '7318',
                'nama' => 'Masanda'
            ],
            [
                'id' => '7318054',
                'kabupaten_id' => '7318',
                'nama' => 'Malimbong Balepe'
            ],
            [
                'id' => '7318061',
                'kabupaten_id' => '7318',
                'nama' => 'Rantetayo'
            ],
            [
                'id' => '7318067',
                'kabupaten_id' => '7318',
                'nama' => 'Kurra'
            ],
            [
                'id' => '7322010',
                'kabupaten_id' => '7322',
                'nama' => 'Sabbang'
            ],
            [
                'id' => '7322020',
                'kabupaten_id' => '7322',
                'nama' => 'Baebunta'
            ],
            [
                'id' => '7322030',
                'kabupaten_id' => '7322',
                'nama' => 'Malangke'
            ],
            [
                'id' => '7322031',
                'kabupaten_id' => '7322',
                'nama' => 'Malangke Barat'
            ],
            [
                'id' => '7322040',
                'kabupaten_id' => '7322',
                'nama' => 'Sukamaju'
            ],
            [
                'id' => '7322050',
                'kabupaten_id' => '7322',
                'nama' => 'Bone-bone'
            ],
            [
                'id' => '7322051',
                'kabupaten_id' => '7322',
                'nama' => 'Tana Lili'
            ],
            [
                'id' => '7322120',
                'kabupaten_id' => '7322',
                'nama' => 'Masamba'
            ],
            [
                'id' => '7322121',
                'kabupaten_id' => '7322',
                'nama' => 'Mappedeceng'
            ],
            [
                'id' => '7322122',
                'kabupaten_id' => '7322',
                'nama' => 'Rampi'
            ],
            [
                'id' => '7322130',
                'kabupaten_id' => '7322',
                'nama' => 'Limbong'
            ],
            [
                'id' => '7322131',
                'kabupaten_id' => '7322',
                'nama' => 'Seko'
            ],
            [
                'id' => '7325010',
                'kabupaten_id' => '7325',
                'nama' => 'Burau'
            ],
            [
                'id' => '7325020',
                'kabupaten_id' => '7325',
                'nama' => 'Wotu'
            ],
            [
                'id' => '7325030',
                'kabupaten_id' => '7325',
                'nama' => 'Tomoni'
            ],
            [
                'id' => '7325031',
                'kabupaten_id' => '7325',
                'nama' => 'Tomoni Timur'
            ],
            [
                'id' => '7325040',
                'kabupaten_id' => '7325',
                'nama' => 'Angkona'
            ],
            [
                'id' => '7325050',
                'kabupaten_id' => '7325',
                'nama' => 'Malili'
            ],
            [
                'id' => '7325060',
                'kabupaten_id' => '7325',
                'nama' => 'Towuti'
            ],
            [
                'id' => '7325070',
                'kabupaten_id' => '7325',
                'nama' => 'Nuha'
            ],
            [
                'id' => '7325071',
                'kabupaten_id' => '7325',
                'nama' => 'Wasuponda'
            ],
            [
                'id' => '7325080',
                'kabupaten_id' => '7325',
                'nama' => 'Mangkutana'
            ],
            [
                'id' => '7325081',
                'kabupaten_id' => '7325',
                'nama' => 'Kalaena'
            ],
            [
                'id' => '7326010',
                'kabupaten_id' => '7326',
                'nama' => 'Sopai'
            ],
            [
                'id' => '7326020',
                'kabupaten_id' => '7326',
                'nama' => 'Kesu'
            ],
            [
                'id' => '7326030',
                'kabupaten_id' => '7326',
                'nama' => 'Sanggalangi'
            ],
            [
                'id' => '7326040',
                'kabupaten_id' => '7326',
                'nama' => 'Buntao'
            ],
            [
                'id' => '7326050',
                'kabupaten_id' => '7326',
                'nama' => 'Rantebua'
            ],
            [
                'id' => '7326060',
                'kabupaten_id' => '7326',
                'nama' => 'Nanggala'
            ],
            [
                'id' => '7326070',
                'kabupaten_id' => '7326',
                'nama' => 'Tondon'
            ],
            [
                'id' => '7326080',
                'kabupaten_id' => '7326',
                'nama' => 'Tallunglipu'
            ],
            [
                'id' => '7326090',
                'kabupaten_id' => '7326',
                'nama' => 'Rantepao'
            ],
            [
                'id' => '7326100',
                'kabupaten_id' => '7326',
                'nama' => 'Tikala'
            ],
            [
                'id' => '7326110',
                'kabupaten_id' => '7326',
                'nama' => 'Sesean'
            ],
            [
                'id' => '7326120',
                'kabupaten_id' => '7326',
                'nama' => 'Balusu'
            ],
            [
                'id' => '7326130',
                'kabupaten_id' => '7326',
                'nama' => 'Sa\'dan'
            ],
            [
                'id' => '7326140',
                'kabupaten_id' => '7326',
                'nama' => 'Bengkelekila'
            ],
            [
                'id' => '7326150',
                'kabupaten_id' => '7326',
                'nama' => 'Sesean Suloara'
            ],
            [
                'id' => '7326160',
                'kabupaten_id' => '7326',
                'nama' => 'Kapala Pitu'
            ],
            [
                'id' => '7326170',
                'kabupaten_id' => '7326',
                'nama' => 'Dende Piongan Napo'
            ],
            [
                'id' => '7326180',
                'kabupaten_id' => '7326',
                'nama' => 'Awan Rante Karua'
            ],
            [
                'id' => '7326190',
                'kabupaten_id' => '7326',
                'nama' => 'Rindingalo'
            ],
            [
                'id' => '7326200',
                'kabupaten_id' => '7326',
                'nama' => 'Buntu Pepasan'
            ],
            [
                'id' => '7326210',
                'kabupaten_id' => '7326',
                'nama' => 'Baruppu'
            ],
            [
                'id' => '7371010',
                'kabupaten_id' => '7371',
                'nama' => 'Mariso'
            ],
            [
                'id' => '7371020',
                'kabupaten_id' => '7371',
                'nama' => 'Mamajang'
            ],
            [
                'id' => '7371030',
                'kabupaten_id' => '7371',
                'nama' => 'Tamalate'
            ],
            [
                'id' => '7371031',
                'kabupaten_id' => '7371',
                'nama' => 'Rappocini'
            ],
            [
                'id' => '7371040',
                'kabupaten_id' => '7371',
                'nama' => 'Makassar'
            ],
            [
                'id' => '7371050',
                'kabupaten_id' => '7371',
                'nama' => 'Ujung Pandang'
            ],
            [
                'id' => '7371060',
                'kabupaten_id' => '7371',
                'nama' => 'Wajo'
            ],
            [
                'id' => '7371070',
                'kabupaten_id' => '7371',
                'nama' => 'Bontoala'
            ],
            [
                'id' => '7371080',
                'kabupaten_id' => '7371',
                'nama' => 'Ujung Tanah'
            ],
            [
                'id' => '7371090',
                'kabupaten_id' => '7371',
                'nama' => 'Tallo'
            ],
            [
                'id' => '7371100',
                'kabupaten_id' => '7371',
                'nama' => 'Panakkukang'
            ],
            [
                'id' => '7371101',
                'kabupaten_id' => '7371',
                'nama' => 'Manggala'
            ],
            [
                'id' => '7371110',
                'kabupaten_id' => '7371',
                'nama' => 'Biring Kanaya'
            ],
            [
                'id' => '7371111',
                'kabupaten_id' => '7371',
                'nama' => 'Tamalanrea'
            ],
            [
                'id' => '7372010',
                'kabupaten_id' => '7372',
                'nama' => 'Bacukiki'
            ],
            [
                'id' => '7372011',
                'kabupaten_id' => '7372',
                'nama' => 'Bacukiki Barat'
            ],
            [
                'id' => '7372020',
                'kabupaten_id' => '7372',
                'nama' => 'Ujung'
            ],
            [
                'id' => '7372030',
                'kabupaten_id' => '7372',
                'nama' => 'Soreang'
            ],
            [
                'id' => '7373010',
                'kabupaten_id' => '7373',
                'nama' => 'Wara Selatan'
            ],
            [
                'id' => '7373011',
                'kabupaten_id' => '7373',
                'nama' => 'Sendana'
            ],
            [
                'id' => '7373020',
                'kabupaten_id' => '7373',
                'nama' => 'Wara'
            ],
            [
                'id' => '7373021',
                'kabupaten_id' => '7373',
                'nama' => 'Wara Timur'
            ],
            [
                'id' => '7373022',
                'kabupaten_id' => '7373',
                'nama' => 'Mungkajang'
            ],
            [
                'id' => '7373030',
                'kabupaten_id' => '7373',
                'nama' => 'Wara Utara'
            ],
            [
                'id' => '7373031',
                'kabupaten_id' => '7373',
                'nama' => 'Bara'
            ],
            [
                'id' => '7373040',
                'kabupaten_id' => '7373',
                'nama' => 'Telluwanua'
            ],
            [
                'id' => '7373041',
                'kabupaten_id' => '7373',
                'nama' => 'Wara Barat'
            ],
            [
                'id' => '7401050',
                'kabupaten_id' => '7401',
                'nama' => 'Lasalimu'
            ],
            [
                'id' => '7401051',
                'kabupaten_id' => '7401',
                'nama' => 'Lasalimu Selatan'
            ],
            [
                'id' => '7401052',
                'kabupaten_id' => '7401',
                'nama' => 'Siontapina'
            ],
            [
                'id' => '7401060',
                'kabupaten_id' => '7401',
                'nama' => 'Pasar Wajo'
            ],
            [
                'id' => '7401061',
                'kabupaten_id' => '7401',
                'nama' => 'Wolowa'
            ],
            [
                'id' => '7401062',
                'kabupaten_id' => '7401',
                'nama' => 'Wabula'
            ],
            [
                'id' => '7401070',
                'kabupaten_id' => '7401',
                'nama' => 'Sampolawa'
            ],
            [
                'id' => '7401071',
                'kabupaten_id' => '7401',
                'nama' => 'Batu Atas'
            ],
            [
                'id' => '7401072',
                'kabupaten_id' => '7401',
                'nama' => 'Lapandewa'
            ],
            [
                'id' => '7401080',
                'kabupaten_id' => '7401',
                'nama' => 'Batauga'
            ],
            [
                'id' => '7401081',
                'kabupaten_id' => '7401',
                'nama' => 'Siompu'
            ],
            [
                'id' => '7401082',
                'kabupaten_id' => '7401',
                'nama' => 'Kadatua'
            ],
            [
                'id' => '7401083',
                'kabupaten_id' => '7401',
                'nama' => 'Siompu Barat'
            ],
            [
                'id' => '7401110',
                'kabupaten_id' => '7401',
                'nama' => 'Kapontori'
            ],
            [
                'id' => '7401120',
                'kabupaten_id' => '7401',
                'nama' => 'Gu'
            ],
            [
                'id' => '7401121',
                'kabupaten_id' => '7401',
                'nama' => 'Sangia Wambulu'
            ],
            [
                'id' => '7401130',
                'kabupaten_id' => '7401',
                'nama' => 'Lakudo'
            ],
            [
                'id' => '7401140',
                'kabupaten_id' => '7401',
                'nama' => 'Mawasangka'
            ],
            [
                'id' => '7401141',
                'kabupaten_id' => '7401',
                'nama' => 'Mawasangka Timur'
            ],
            [
                'id' => '7401142',
                'kabupaten_id' => '7401',
                'nama' => 'Mawasangka Tengah'
            ],
            [
                'id' => '7401151',
                'kabupaten_id' => '7401',
                'nama' => 'Talaga Raya'
            ],
            [
                'id' => '7402010',
                'kabupaten_id' => '7402',
                'nama' => 'Tongkuno'
            ],
            [
                'id' => '7402011',
                'kabupaten_id' => '7402',
                'nama' => 'Tongkuno Selatan'
            ],
            [
                'id' => '7402020',
                'kabupaten_id' => '7402',
                'nama' => 'Parigi'
            ],
            [
                'id' => '7402021',
                'kabupaten_id' => '7402',
                'nama' => 'Bone'
            ],
            [
                'id' => '7402022',
                'kabupaten_id' => '7402',
                'nama' => 'Marobo'
            ],
            [
                'id' => '7402030',
                'kabupaten_id' => '7402',
                'nama' => 'Kabawo'
            ],
            [
                'id' => '7402031',
                'kabupaten_id' => '7402',
                'nama' => 'Kabangka'
            ],
            [
                'id' => '7402032',
                'kabupaten_id' => '7402',
                'nama' => 'Kontukowuna'
            ],
            [
                'id' => '7402040',
                'kabupaten_id' => '7402',
                'nama' => 'Tiworo Kepulauan'
            ],
            [
                'id' => '7402041',
                'kabupaten_id' => '7402',
                'nama' => 'Maginti'
            ],
            [
                'id' => '7402042',
                'kabupaten_id' => '7402',
                'nama' => 'Tiworo Tengah'
            ],
            [
                'id' => '7402043',
                'kabupaten_id' => '7402',
                'nama' => 'Tiworo Selatan'
            ],
            [
                'id' => '7402044',
                'kabupaten_id' => '7402',
                'nama' => 'Tiworo Utara'
            ],
            [
                'id' => '7402050',
                'kabupaten_id' => '7402',
                'nama' => 'Lawa'
            ],
            [
                'id' => '7402051',
                'kabupaten_id' => '7402',
                'nama' => 'Sawerigadi'
            ],
            [
                'id' => '7402052',
                'kabupaten_id' => '7402',
                'nama' => 'Barangka'
            ],
            [
                'id' => '7402053',
                'kabupaten_id' => '7402',
                'nama' => 'Wa Daga'
            ],
            [
                'id' => '7402060',
                'kabupaten_id' => '7402',
                'nama' => 'Kusambi'
            ],
            [
                'id' => '7402061',
                'kabupaten_id' => '7402',
                'nama' => 'Kontunaga'
            ],
            [
                'id' => '7402062',
                'kabupaten_id' => '7402',
                'nama' => 'Watopute'
            ],
            [
                'id' => '7402070',
                'kabupaten_id' => '7402',
                'nama' => 'Katobu'
            ],
            [
                'id' => '7402071',
                'kabupaten_id' => '7402',
                'nama' => 'Lohia'
            ],
            [
                'id' => '7402072',
                'kabupaten_id' => '7402',
                'nama' => 'Duruka'
            ],
            [
                'id' => '7402073',
                'kabupaten_id' => '7402',
                'nama' => 'Batalaiworu'
            ],
            [
                'id' => '7402080',
                'kabupaten_id' => '7402',
                'nama' => 'Napabalano'
            ],
            [
                'id' => '7402081',
                'kabupaten_id' => '7402',
                'nama' => 'Lasalepa'
            ],
            [
                'id' => '7402082',
                'kabupaten_id' => '7402',
                'nama' => 'Napano Kusambi'
            ],
            [
                'id' => '7402083',
                'kabupaten_id' => '7402',
                'nama' => 'Towea'
            ],
            [
                'id' => '7402090',
                'kabupaten_id' => '7402',
                'nama' => 'Wakorumba Selatan'
            ],
            [
                'id' => '7402091',
                'kabupaten_id' => '7402',
                'nama' => 'Pasir Putih'
            ],
            [
                'id' => '7402092',
                'kabupaten_id' => '7402',
                'nama' => 'Pasi Kolaga'
            ],
            [
                'id' => '7402111',
                'kabupaten_id' => '7402',
                'nama' => 'Maligano'
            ],
            [
                'id' => '7402112',
                'kabupaten_id' => '7402',
                'nama' => 'Batukara'
            ],
            [
                'id' => '7403071',
                'kabupaten_id' => '7403',
                'nama' => 'Wawonii Selatan'
            ],
            [
                'id' => '7403072',
                'kabupaten_id' => '7403',
                'nama' => 'Wawonii Barat'
            ],
            [
                'id' => '7403073',
                'kabupaten_id' => '7403',
                'nama' => 'Wawonii Tengah'
            ],
            [
                'id' => '7403074',
                'kabupaten_id' => '7403',
                'nama' => 'Wawonii Tenggara'
            ],
            [
                'id' => '7403081',
                'kabupaten_id' => '7403',
                'nama' => 'Wawonii Timur'
            ],
            [
                'id' => '7403082',
                'kabupaten_id' => '7403',
                'nama' => 'Wawonii Utara'
            ],
            [
                'id' => '7403083',
                'kabupaten_id' => '7403',
                'nama' => 'Wawonii Timur Laut'
            ],
            [
                'id' => '7403090',
                'kabupaten_id' => '7403',
                'nama' => 'Soropia'
            ],
            [
                'id' => '7403091',
                'kabupaten_id' => '7403',
                'nama' => 'Lalonggasumeeto'
            ],
            [
                'id' => '7403100',
                'kabupaten_id' => '7403',
                'nama' => 'Sampara'
            ],
            [
                'id' => '7403101',
                'kabupaten_id' => '7403',
                'nama' => 'Bondoala'
            ],
            [
                'id' => '7403102',
                'kabupaten_id' => '7403',
                'nama' => 'Besulutu'
            ],
            [
                'id' => '7403103',
                'kabupaten_id' => '7403',
                'nama' => 'Kapoiala'
            ],
            [
                'id' => '7403130',
                'kabupaten_id' => '7403',
                'nama' => 'Lambuya'
            ],
            [
                'id' => '7403131',
                'kabupaten_id' => '7403',
                'nama' => 'Uepai'
            ],
            [
                'id' => '7403132',
                'kabupaten_id' => '7403',
                'nama' => 'Puriala'
            ],
            [
                'id' => '7403133',
                'kabupaten_id' => '7403',
                'nama' => 'Onembute'
            ],
            [
                'id' => '7403140',
                'kabupaten_id' => '7403',
                'nama' => 'Pondidaha'
            ],
            [
                'id' => '7403141',
                'kabupaten_id' => '7403',
                'nama' => 'Wonggeduku'
            ],
            [
                'id' => '7403142',
                'kabupaten_id' => '7403',
                'nama' => 'Amonggedo'
            ],
            [
                'id' => '7403150',
                'kabupaten_id' => '7403',
                'nama' => 'Wawotobi'
            ],
            [
                'id' => '7403151',
                'kabupaten_id' => '7403',
                'nama' => 'Meluhu'
            ],
            [
                'id' => '7403152',
                'kabupaten_id' => '7403',
                'nama' => 'Konawe'
            ],
            [
                'id' => '7403170',
                'kabupaten_id' => '7403',
                'nama' => 'Unaaha'
            ],
            [
                'id' => '7403171',
                'kabupaten_id' => '7403',
                'nama' => 'Anggaberi'
            ],
            [
                'id' => '7403180',
                'kabupaten_id' => '7403',
                'nama' => 'Abuki'
            ],
            [
                'id' => '7403181',
                'kabupaten_id' => '7403',
                'nama' => 'Latoma'
            ],
            [
                'id' => '7403182',
                'kabupaten_id' => '7403',
                'nama' => 'Tongauna'
            ],
            [
                'id' => '7403183',
                'kabupaten_id' => '7403',
                'nama' => 'Asinua'
            ],
            [
                'id' => '7403193',
                'kabupaten_id' => '7403',
                'nama' => 'Routa'
            ],
            [
                'id' => '7404010',
                'kabupaten_id' => '7404',
                'nama' => 'Watubangga'
            ],
            [
                'id' => '7404011',
                'kabupaten_id' => '7404',
                'nama' => 'Tanggetada'
            ],
            [
                'id' => '7404012',
                'kabupaten_id' => '7404',
                'nama' => 'Toari'
            ],
            [
                'id' => '7404013',
                'kabupaten_id' => '7404',
                'nama' => 'Polinggona'
            ],
            [
                'id' => '7404020',
                'kabupaten_id' => '7404',
                'nama' => 'Pomalaa'
            ],
            [
                'id' => '7404030',
                'kabupaten_id' => '7404',
                'nama' => 'Wundulako'
            ],
            [
                'id' => '7404031',
                'kabupaten_id' => '7404',
                'nama' => 'Baula'
            ],
            [
                'id' => '7404040',
                'kabupaten_id' => '7404',
                'nama' => 'Ladongi'
            ],
            [
                'id' => '7404041',
                'kabupaten_id' => '7404',
                'nama' => 'Lambandia'
            ],
            [
                'id' => '7404042',
                'kabupaten_id' => '7404',
                'nama' => 'Poli-polia'
            ],
            [
                'id' => '7404043',
                'kabupaten_id' => '7404',
                'nama' => 'Dangia'
            ],
            [
                'id' => '7404044',
                'kabupaten_id' => '7404',
                'nama' => 'Aere'
            ],
            [
                'id' => '7404050',
                'kabupaten_id' => '7404',
                'nama' => 'Tirawuta'
            ],
            [
                'id' => '7404051',
                'kabupaten_id' => '7404',
                'nama' => 'Lalolae'
            ],
            [
                'id' => '7404052',
                'kabupaten_id' => '7404',
                'nama' => 'Loea'
            ],
            [
                'id' => '7404060',
                'kabupaten_id' => '7404',
                'nama' => 'Kolaka'
            ],
            [
                'id' => '7404061',
                'kabupaten_id' => '7404',
                'nama' => 'Latambaga'
            ],
            [
                'id' => '7404070',
                'kabupaten_id' => '7404',
                'nama' => 'Wolo'
            ],
            [
                'id' => '7404071',
                'kabupaten_id' => '7404',
                'nama' => 'Samaturu'
            ],
            [
                'id' => '7404072',
                'kabupaten_id' => '7404',
                'nama' => 'Iwoimendaa'
            ],
            [
                'id' => '7404080',
                'kabupaten_id' => '7404',
                'nama' => 'Mowewe'
            ],
            [
                'id' => '7404081',
                'kabupaten_id' => '7404',
                'nama' => 'Uluiwoi'
            ],
            [
                'id' => '7404082',
                'kabupaten_id' => '7404',
                'nama' => 'Tinondo'
            ],
            [
                'id' => '7404083',
                'kabupaten_id' => '7404',
                'nama' => 'Ueesi'
            ],
            [
                'id' => '7405010',
                'kabupaten_id' => '7405',
                'nama' => 'Tinanggea'
            ],
            [
                'id' => '7405011',
                'kabupaten_id' => '7405',
                'nama' => 'Lalembuu'
            ],
            [
                'id' => '7405020',
                'kabupaten_id' => '7405',
                'nama' => 'Andoolo'
            ],
            [
                'id' => '7405021',
                'kabupaten_id' => '7405',
                'nama' => 'Buke'
            ],
            [
                'id' => '7405030',
                'kabupaten_id' => '7405',
                'nama' => 'Palangga'
            ],
            [
                'id' => '7405031',
                'kabupaten_id' => '7405',
                'nama' => 'Palangga Selatan'
            ],
            [
                'id' => '7405032',
                'kabupaten_id' => '7405',
                'nama' => 'Baito'
            ],
            [
                'id' => '7405040',
                'kabupaten_id' => '7405',
                'nama' => 'Lainea'
            ],
            [
                'id' => '7405041',
                'kabupaten_id' => '7405',
                'nama' => 'Laeya'
            ],
            [
                'id' => '7405050',
                'kabupaten_id' => '7405',
                'nama' => 'Kolono'
            ],
            [
                'id' => '7405060',
                'kabupaten_id' => '7405',
                'nama' => 'Laonti'
            ],
            [
                'id' => '7405070',
                'kabupaten_id' => '7405',
                'nama' => 'Moramo'
            ],
            [
                'id' => '7405071',
                'kabupaten_id' => '7405',
                'nama' => 'Moramo Utara'
            ],
            [
                'id' => '7405080',
                'kabupaten_id' => '7405',
                'nama' => 'Konda'
            ],
            [
                'id' => '7405081',
                'kabupaten_id' => '7405',
                'nama' => 'Wolasi'
            ],
            [
                'id' => '7405090',
                'kabupaten_id' => '7405',
                'nama' => 'Ranomeeto'
            ],
            [
                'id' => '7405091',
                'kabupaten_id' => '7405',
                'nama' => 'Ranomeeto Barat'
            ],
            [
                'id' => '7405100',
                'kabupaten_id' => '7405',
                'nama' => 'Landono'
            ],
            [
                'id' => '7405101',
                'kabupaten_id' => '7405',
                'nama' => 'Mowila'
            ],
            [
                'id' => '7405110',
                'kabupaten_id' => '7405',
                'nama' => 'Angata'
            ],
            [
                'id' => '7405111',
                'kabupaten_id' => '7405',
                'nama' => 'Benua'
            ],
            [
                'id' => '7405112',
                'kabupaten_id' => '7405',
                'nama' => 'Basala'
            ],
            [
                'id' => '7406010',
                'kabupaten_id' => '7406',
                'nama' => 'Kabaena'
            ],
            [
                'id' => '7406011',
                'kabupaten_id' => '7406',
                'nama' => 'Kabaena Utara'
            ],
            [
                'id' => '7406012',
                'kabupaten_id' => '7406',
                'nama' => 'Kabaena Selatan'
            ],
            [
                'id' => '7406013',
                'kabupaten_id' => '7406',
                'nama' => 'Kabaena Barat'
            ],
            [
                'id' => '7406020',
                'kabupaten_id' => '7406',
                'nama' => 'Kabaena Timur'
            ],
            [
                'id' => '7406021',
                'kabupaten_id' => '7406',
                'nama' => 'Kabaena Tengah'
            ],
            [
                'id' => '7406030',
                'kabupaten_id' => '7406',
                'nama' => 'Rumbia'
            ],
            [
                'id' => '7406031',
                'kabupaten_id' => '7406',
                'nama' => 'Mata Oleo'
            ],
            [
                'id' => '7406032',
                'kabupaten_id' => '7406',
                'nama' => 'Kep. Masaloka Raya'
            ],
            [
                'id' => '7406033',
                'kabupaten_id' => '7406',
                'nama' => 'Rumbia Tengah'
            ],
            [
                'id' => '7406040',
                'kabupaten_id' => '7406',
                'nama' => 'Rarowatu'
            ],
            [
                'id' => '7406041',
                'kabupaten_id' => '7406',
                'nama' => 'Rarowatu Utara'
            ],
            [
                'id' => '7406042',
                'kabupaten_id' => '7406',
                'nama' => 'Mata Usu'
            ],
            [
                'id' => '7406043',
                'kabupaten_id' => '7406',
                'nama' => 'Lantari Jaya'
            ],
            [
                'id' => '7406050',
                'kabupaten_id' => '7406',
                'nama' => 'Poleang Timur'
            ],
            [
                'id' => '7406051',
                'kabupaten_id' => '7406',
                'nama' => 'Poleang Utara'
            ],
            [
                'id' => '7406052',
                'kabupaten_id' => '7406',
                'nama' => 'Poleang Selatan'
            ],
            [
                'id' => '7406053',
                'kabupaten_id' => '7406',
                'nama' => 'Poleang Tenggara'
            ],
            [
                'id' => '7406060',
                'kabupaten_id' => '7406',
                'nama' => 'Poleang'
            ],
            [
                'id' => '7406061',
                'kabupaten_id' => '7406',
                'nama' => 'Poleang Barat'
            ],
            [
                'id' => '7406062',
                'kabupaten_id' => '7406',
                'nama' => 'Tontonunu'
            ],
            [
                'id' => '7406063',
                'kabupaten_id' => '7406',
                'nama' => 'Poleang Tengah'
            ],
            [
                'id' => '7407010',
                'kabupaten_id' => '7407',
                'nama' => 'Binongko'
            ],
            [
                'id' => '7407011',
                'kabupaten_id' => '7407',
                'nama' => 'Togo Binongko'
            ],
            [
                'id' => '7407020',
                'kabupaten_id' => '7407',
                'nama' => 'Tomia'
            ],
            [
                'id' => '7407021',
                'kabupaten_id' => '7407',
                'nama' => 'Tomia Timur'
            ],
            [
                'id' => '7407030',
                'kabupaten_id' => '7407',
                'nama' => 'Kaledupa'
            ],
            [
                'id' => '7407031',
                'kabupaten_id' => '7407',
                'nama' => 'Kaledupa Selatan'
            ],
            [
                'id' => '7407040',
                'kabupaten_id' => '7407',
                'nama' => 'Wangi-wangi'
            ],
            [
                'id' => '7407050',
                'kabupaten_id' => '7407',
                'nama' => 'Wangi-wangi Selatan'
            ],
            [
                'id' => '7408010',
                'kabupaten_id' => '7408',
                'nama' => 'Ranteangin'
            ],
            [
                'id' => '7408011',
                'kabupaten_id' => '7408',
                'nama' => 'Lambai'
            ],
            [
                'id' => '7408012',
                'kabupaten_id' => '7408',
                'nama' => 'Wawo'
            ],
            [
                'id' => '7408020',
                'kabupaten_id' => '7408',
                'nama' => 'Lasusua'
            ],
            [
                'id' => '7408021',
                'kabupaten_id' => '7408',
                'nama' => 'Katoi'
            ],
            [
                'id' => '7408030',
                'kabupaten_id' => '7408',
                'nama' => 'Kodeoha'
            ],
            [
                'id' => '7408031',
                'kabupaten_id' => '7408',
                'nama' => 'Tiwu'
            ],
            [
                'id' => '7408040',
                'kabupaten_id' => '7408',
                'nama' => 'Ngapa'
            ],
            [
                'id' => '7408041',
                'kabupaten_id' => '7408',
                'nama' => 'Watunohu'
            ],
            [
                'id' => '7408050',
                'kabupaten_id' => '7408',
                'nama' => 'Pakue'
            ],
            [
                'id' => '7408051',
                'kabupaten_id' => '7408',
                'nama' => 'Pakue Utara'
            ],
            [
                'id' => '7408052',
                'kabupaten_id' => '7408',
                'nama' => 'Pakue Tengah'
            ],
            [
                'id' => '7408060',
                'kabupaten_id' => '7408',
                'nama' => 'Batu Putih'
            ],
            [
                'id' => '7408061',
                'kabupaten_id' => '7408',
                'nama' => 'Porehu'
            ],
            [
                'id' => '7408062',
                'kabupaten_id' => '7408',
                'nama' => 'Tolala'
            ],
            [
                'id' => '7409100',
                'kabupaten_id' => '7409',
                'nama' => 'Bonegunu'
            ],
            [
                'id' => '7409101',
                'kabupaten_id' => '7409',
                'nama' => 'Kambowa'
            ],
            [
                'id' => '7409110',
                'kabupaten_id' => '7409',
                'nama' => 'Wakorumba'
            ],
            [
                'id' => '7409120',
                'kabupaten_id' => '7409',
                'nama' => 'Kulisusu'
            ],
            [
                'id' => '7409121',
                'kabupaten_id' => '7409',
                'nama' => 'Kulisusu Barat'
            ],
            [
                'id' => '7409122',
                'kabupaten_id' => '7409',
                'nama' => 'Kulisusu Utara'
            ],
            [
                'id' => '7410010',
                'kabupaten_id' => '7410',
                'nama' => 'Sawa'
            ],
            [
                'id' => '7410011',
                'kabupaten_id' => '7410',
                'nama' => 'Motui'
            ],
            [
                'id' => '7410020',
                'kabupaten_id' => '7410',
                'nama' => 'Lembo'
            ],
            [
                'id' => '7410030',
                'kabupaten_id' => '7410',
                'nama' => 'Lasolo'
            ],
            [
                'id' => '7410040',
                'kabupaten_id' => '7410',
                'nama' => 'Molawe'
            ],
            [
                'id' => '7410050',
                'kabupaten_id' => '7410',
                'nama' => 'Asera'
            ],
            [
                'id' => '7410051',
                'kabupaten_id' => '7410',
                'nama' => 'Andowia'
            ],
            [
                'id' => '7410052',
                'kabupaten_id' => '7410',
                'nama' => 'Oheo'
            ],
            [
                'id' => '7410060',
                'kabupaten_id' => '7410',
                'nama' => 'Langgikima'
            ],
            [
                'id' => '7410070',
                'kabupaten_id' => '7410',
                'nama' => 'Wiwirano'
            ],
            [
                'id' => '7471010',
                'kabupaten_id' => '7471',
                'nama' => 'Mandonga'
            ],
            [
                'id' => '7471011',
                'kabupaten_id' => '7471',
                'nama' => 'Baruga'
            ],
            [
                'id' => '7471012',
                'kabupaten_id' => '7471',
                'nama' => 'Puuwatu'
            ],
            [
                'id' => '7471013',
                'kabupaten_id' => '7471',
                'nama' => 'Kadia'
            ],
            [
                'id' => '7471014',
                'kabupaten_id' => '7471',
                'nama' => 'Wua-wua'
            ],
            [
                'id' => '7471020',
                'kabupaten_id' => '7471',
                'nama' => 'Poasia'
            ],
            [
                'id' => '7471021',
                'kabupaten_id' => '7471',
                'nama' => 'Abeli'
            ],
            [
                'id' => '7471022',
                'kabupaten_id' => '7471',
                'nama' => 'Kambu'
            ],
            [
                'id' => '7471030',
                'kabupaten_id' => '7471',
                'nama' => 'Kendari'
            ],
            [
                'id' => '7471031',
                'kabupaten_id' => '7471',
                'nama' => 'Kendari Barat'
            ],
            [
                'id' => '7472010',
                'kabupaten_id' => '7472',
                'nama' => 'Betoambari'
            ],
            [
                'id' => '7472011',
                'kabupaten_id' => '7472',
                'nama' => 'Murhum'
            ],
            [
                'id' => '7472012',
                'kabupaten_id' => '7472',
                'nama' => 'Batupoaro'
            ],
            [
                'id' => '7472020',
                'kabupaten_id' => '7472',
                'nama' => 'Wolio'
            ],
            [
                'id' => '7472021',
                'kabupaten_id' => '7472',
                'nama' => 'Kokalukuna'
            ],
            [
                'id' => '7472030',
                'kabupaten_id' => '7472',
                'nama' => 'Sorawolio'
            ],
            [
                'id' => '7472040',
                'kabupaten_id' => '7472',
                'nama' => 'Bungi'
            ],
            [
                'id' => '7472041',
                'kabupaten_id' => '7472',
                'nama' => 'Lea-lea'
            ],
            [
                'id' => '7501031',
                'kabupaten_id' => '7501',
                'nama' => 'Mananggu'
            ],
            [
                'id' => '7501040',
                'kabupaten_id' => '7501',
                'nama' => 'Tilamuta'
            ],
            [
                'id' => '7501041',
                'kabupaten_id' => '7501',
                'nama' => 'Dulupi'
            ],
            [
                'id' => '7501042',
                'kabupaten_id' => '7501',
                'nama' => 'Botumoito'
            ],
            [
                'id' => '7501050',
                'kabupaten_id' => '7501',
                'nama' => 'Paguyaman'
            ],
            [
                'id' => '7501051',
                'kabupaten_id' => '7501',
                'nama' => 'Wonosari'
            ],
            [
                'id' => '7501052',
                'kabupaten_id' => '7501',
                'nama' => 'Paguyaman Pantai'
            ],
            [
                'id' => '7502010',
                'kabupaten_id' => '7502',
                'nama' => 'Batudaa Pantai'
            ],
            [
                'id' => '7502011',
                'kabupaten_id' => '7502',
                'nama' => 'Biluhu'
            ],
            [
                'id' => '7502020',
                'kabupaten_id' => '7502',
                'nama' => 'Batudaa'
            ],
            [
                'id' => '7502021',
                'kabupaten_id' => '7502',
                'nama' => 'Bongomeme'
            ],
            [
                'id' => '7502022',
                'kabupaten_id' => '7502',
                'nama' => 'Tabongo'
            ],
            [
                'id' => '7502023',
                'kabupaten_id' => '7502',
                'nama' => 'Dungaliyo'
            ],
            [
                'id' => '7502030',
                'kabupaten_id' => '7502',
                'nama' => 'Tibawa'
            ],
            [
                'id' => '7502031',
                'kabupaten_id' => '7502',
                'nama' => 'Pulubala'
            ],
            [
                'id' => '7502040',
                'kabupaten_id' => '7502',
                'nama' => 'Boliyohuto'
            ],
            [
                'id' => '7502041',
                'kabupaten_id' => '7502',
                'nama' => 'Mootilango'
            ],
            [
                'id' => '7502042',
                'kabupaten_id' => '7502',
                'nama' => 'Tolangohula'
            ],
            [
                'id' => '7502043',
                'kabupaten_id' => '7502',
                'nama' => 'Asparaga'
            ],
            [
                'id' => '7502044',
                'kabupaten_id' => '7502',
                'nama' => 'Bilato'
            ],
            [
                'id' => '7502070',
                'kabupaten_id' => '7502',
                'nama' => 'Limboto'
            ],
            [
                'id' => '7502071',
                'kabupaten_id' => '7502',
                'nama' => 'Limboto Barat'
            ],
            [
                'id' => '7502080',
                'kabupaten_id' => '7502',
                'nama' => 'Telaga'
            ],
            [
                'id' => '7502081',
                'kabupaten_id' => '7502',
                'nama' => 'Telaga Biru'
            ],
            [
                'id' => '7502082',
                'kabupaten_id' => '7502',
                'nama' => 'Tilango'
            ],
            [
                'id' => '7502083',
                'kabupaten_id' => '7502',
                'nama' => 'Telaga Jaya'
            ],
            [
                'id' => '7503010',
                'kabupaten_id' => '7503',
                'nama' => 'Popayato'
            ],
            [
                'id' => '7503011',
                'kabupaten_id' => '7503',
                'nama' => 'Popayato Barat'
            ],
            [
                'id' => '7503012',
                'kabupaten_id' => '7503',
                'nama' => 'Popayato Timur'
            ],
            [
                'id' => '7503020',
                'kabupaten_id' => '7503',
                'nama' => 'Lemito'
            ],
            [
                'id' => '7503021',
                'kabupaten_id' => '7503',
                'nama' => 'Wanggarasi'
            ],
            [
                'id' => '7503030',
                'kabupaten_id' => '7503',
                'nama' => 'Marisa'
            ],
            [
                'id' => '7503031',
                'kabupaten_id' => '7503',
                'nama' => 'Patilanggio'
            ],
            [
                'id' => '7503032',
                'kabupaten_id' => '7503',
                'nama' => 'Buntulia'
            ],
            [
                'id' => '7503033',
                'kabupaten_id' => '7503',
                'nama' => 'Duhiadaa'
            ],
            [
                'id' => '7503040',
                'kabupaten_id' => '7503',
                'nama' => 'Randangan'
            ],
            [
                'id' => '7503041',
                'kabupaten_id' => '7503',
                'nama' => 'Taluditi'
            ],
            [
                'id' => '7503050',
                'kabupaten_id' => '7503',
                'nama' => 'Paguat'
            ],
            [
                'id' => '7503051',
                'kabupaten_id' => '7503',
                'nama' => 'Dengilo'
            ],
            [
                'id' => '7504010',
                'kabupaten_id' => '7504',
                'nama' => 'Tapa'
            ],
            [
                'id' => '7504011',
                'kabupaten_id' => '7504',
                'nama' => 'Bulango Utara'
            ],
            [
                'id' => '7504012',
                'kabupaten_id' => '7504',
                'nama' => 'Bulango Selatan'
            ],
            [
                'id' => '7504013',
                'kabupaten_id' => '7504',
                'nama' => 'Bulango Timur'
            ],
            [
                'id' => '7504014',
                'kabupaten_id' => '7504',
                'nama' => 'Bulango Ulu'
            ],
            [
                'id' => '7504020',
                'kabupaten_id' => '7504',
                'nama' => 'Kabila'
            ],
            [
                'id' => '7504021',
                'kabupaten_id' => '7504',
                'nama' => 'Botu Pingge'
            ],
            [
                'id' => '7504022',
                'kabupaten_id' => '7504',
                'nama' => 'Tilongkabila'
            ],
            [
                'id' => '7504030',
                'kabupaten_id' => '7504',
                'nama' => 'Suwawa'
            ],
            [
                'id' => '7504031',
                'kabupaten_id' => '7504',
                'nama' => 'Suwawa Selatan'
            ],
            [
                'id' => '7504032',
                'kabupaten_id' => '7504',
                'nama' => 'Suwawa Timur'
            ],
            [
                'id' => '7504033',
                'kabupaten_id' => '7504',
                'nama' => 'Suwawa Tengah'
            ],
            [
                'id' => '7504034',
                'kabupaten_id' => '7504',
                'nama' => 'Pinogu'
            ],
            [
                'id' => '7504040',
                'kabupaten_id' => '7504',
                'nama' => 'Bonepantai'
            ],
            [
                'id' => '7504041',
                'kabupaten_id' => '7504',
                'nama' => 'Kabila Bone'
            ],
            [
                'id' => '7504042',
                'kabupaten_id' => '7504',
                'nama' => 'Bone Raya'
            ],
            [
                'id' => '7504043',
                'kabupaten_id' => '7504',
                'nama' => 'Bone'
            ],
            [
                'id' => '7504044',
                'kabupaten_id' => '7504',
                'nama' => 'Bulawa'
            ],
            [
                'id' => '7505010',
                'kabupaten_id' => '7505',
                'nama' => 'Atinggola'
            ],
            [
                'id' => '7505011',
                'kabupaten_id' => '7505',
                'nama' => 'Gentuma Raya'
            ],
            [
                'id' => '7505020',
                'kabupaten_id' => '7505',
                'nama' => 'Kwandang'
            ],
            [
                'id' => '7505021',
                'kabupaten_id' => '7505',
                'nama' => 'Tomilito'
            ],
            [
                'id' => '7505022',
                'kabupaten_id' => '7505',
                'nama' => 'Ponelo Kepulauan'
            ],
            [
                'id' => '7505030',
                'kabupaten_id' => '7505',
                'nama' => 'Anggrek'
            ],
            [
                'id' => '7505031',
                'kabupaten_id' => '7505',
                'nama' => 'Monano'
            ],
            [
                'id' => '7505040',
                'kabupaten_id' => '7505',
                'nama' => 'Sumalata'
            ],
            [
                'id' => '7505041',
                'kabupaten_id' => '7505',
                'nama' => 'Sumalata Timur'
            ],
            [
                'id' => '7505050',
                'kabupaten_id' => '7505',
                'nama' => 'Tolinggula'
            ],
            [
                'id' => '7505051',
                'kabupaten_id' => '7505',
                'nama' => 'Biau'
            ],
            [
                'id' => '7571010',
                'kabupaten_id' => '7571',
                'nama' => 'Kota Barat'
            ],
            [
                'id' => '7571011',
                'kabupaten_id' => '7571',
                'nama' => 'Dungingi'
            ],
            [
                'id' => '7571020',
                'kabupaten_id' => '7571',
                'nama' => 'Kota Selatan'
            ],
            [
                'id' => '7571021',
                'kabupaten_id' => '7571',
                'nama' => 'Kota Timur'
            ],
            [
                'id' => '7571022',
                'kabupaten_id' => '7571',
                'nama' => 'Hulonthalangi'
            ],
            [
                'id' => '7571023',
                'kabupaten_id' => '7571',
                'nama' => 'Dumbo Raya'
            ],
            [
                'id' => '7571030',
                'kabupaten_id' => '7571',
                'nama' => 'Kota Utara'
            ],
            [
                'id' => '7571031',
                'kabupaten_id' => '7571',
                'nama' => 'Kota Tengah'
            ],
            [
                'id' => '7571032',
                'kabupaten_id' => '7571',
                'nama' => 'Sipatana'
            ],
            [
                'id' => '7601010',
                'kabupaten_id' => '7601',
                'nama' => 'Banggae'
            ],
            [
                'id' => '7601011',
                'kabupaten_id' => '7601',
                'nama' => 'Banggae Timur'
            ],
            [
                'id' => '7601020',
                'kabupaten_id' => '7601',
                'nama' => 'Pamboang'
            ],
            [
                'id' => '7601030',
                'kabupaten_id' => '7601',
                'nama' => 'Sendana'
            ],
            [
                'id' => '7601031',
                'kabupaten_id' => '7601',
                'nama' => 'Tammerodo'
            ],
            [
                'id' => '7601033',
                'kabupaten_id' => '7601',
                'nama' => 'Tubo Sendana'
            ],
            [
                'id' => '7601040',
                'kabupaten_id' => '7601',
                'nama' => 'Malunda'
            ],
            [
                'id' => '7601041',
                'kabupaten_id' => '7601',
                'nama' => 'Ulumanda'
            ],
            [
                'id' => '7602010',
                'kabupaten_id' => '7602',
                'nama' => 'Tinambung'
            ],
            [
                'id' => '7602011',
                'kabupaten_id' => '7602',
                'nama' => 'Balanipa'
            ],
            [
                'id' => '7602012',
                'kabupaten_id' => '7602',
                'nama' => 'Limboro'
            ],
            [
                'id' => '7602020',
                'kabupaten_id' => '7602',
                'nama' => 'Tubbi Taramanu'
            ],
            [
                'id' => '7602021',
                'kabupaten_id' => '7602',
                'nama' => 'Alu'
            ],
            [
                'id' => '7602030',
                'kabupaten_id' => '7602',
                'nama' => 'Campalagian'
            ],
            [
                'id' => '7602031',
                'kabupaten_id' => '7602',
                'nama' => 'Luyo'
            ],
            [
                'id' => '7602040',
                'kabupaten_id' => '7602',
                'nama' => 'Wonomulyo'
            ],
            [
                'id' => '7602041',
                'kabupaten_id' => '7602',
                'nama' => 'Mapilli'
            ],
            [
                'id' => '7602042',
                'kabupaten_id' => '7602',
                'nama' => 'Tapango'
            ],
            [
                'id' => '7602043',
                'kabupaten_id' => '7602',
                'nama' => 'Matakali'
            ],
            [
                'id' => '7602044',
                'kabupaten_id' => '7602',
                'nama' => 'B U L O'
            ],
            [
                'id' => '7602050',
                'kabupaten_id' => '7602',
                'nama' => 'Polewali'
            ],
            [
                'id' => '7602051',
                'kabupaten_id' => '7602',
                'nama' => 'Binuang'
            ],
            [
                'id' => '7602052',
                'kabupaten_id' => '7602',
                'nama' => 'Anreapi'
            ],
            [
                'id' => '7602061',
                'kabupaten_id' => '7602',
                'nama' => 'Matangnga'
            ],
            [
                'id' => '7603010',
                'kabupaten_id' => '7603',
                'nama' => 'Sumarorong'
            ],
            [
                'id' => '7603020',
                'kabupaten_id' => '7603',
                'nama' => 'Messawa'
            ],
            [
                'id' => '7603030',
                'kabupaten_id' => '7603',
                'nama' => 'Pana'
            ],
            [
                'id' => '7603031',
                'kabupaten_id' => '7603',
                'nama' => 'Nosu'
            ],
            [
                'id' => '7603040',
                'kabupaten_id' => '7603',
                'nama' => 'Tabang'
            ],
            [
                'id' => '7603050',
                'kabupaten_id' => '7603',
                'nama' => 'Mamasa'
            ],
            [
                'id' => '7603060',
                'kabupaten_id' => '7603',
                'nama' => 'Tanduk Kalua'
            ],
            [
                'id' => '7603061',
                'kabupaten_id' => '7603',
                'nama' => 'Balla'
            ],
            [
                'id' => '7603070',
                'kabupaten_id' => '7603',
                'nama' => 'Sesenapadang'
            ],
            [
                'id' => '7603071',
                'kabupaten_id' => '7603',
                'nama' => 'Tawalian'
            ],
            [
                'id' => '7603080',
                'kabupaten_id' => '7603',
                'nama' => 'Mambi'
            ],
            [
                'id' => '7603081',
                'kabupaten_id' => '7603',
                'nama' => 'Bambang'
            ],
            [
                'id' => '7603082',
                'kabupaten_id' => '7603',
                'nama' => 'Rantebulahan Timur'
            ],
            [
                'id' => '7603083',
                'kabupaten_id' => '7603',
                'nama' => 'Mehalaan'
            ],
            [
                'id' => '7603090',
                'kabupaten_id' => '7603',
                'nama' => 'Aralle'
            ],
            [
                'id' => '7603091',
                'kabupaten_id' => '7603',
                'nama' => 'Buntu Malangka'
            ],
            [
                'id' => '7603100',
                'kabupaten_id' => '7603',
                'nama' => 'Tabulahan'
            ],
            [
                'id' => '7604010',
                'kabupaten_id' => '7604',
                'nama' => 'Tapalang'
            ],
            [
                'id' => '7604011',
                'kabupaten_id' => '7604',
                'nama' => 'Tapalang Barat'
            ],
            [
                'id' => '7604020',
                'kabupaten_id' => '7604',
                'nama' => 'Mamuju'
            ],
            [
                'id' => '7604022',
                'kabupaten_id' => '7604',
                'nama' => 'Simboro'
            ],
            [
                'id' => '7604023',
                'kabupaten_id' => '7604',
                'nama' => 'Balabalakang'
            ],
            [
                'id' => '7604030',
                'kabupaten_id' => '7604',
                'nama' => 'Kalukku'
            ],
            [
                'id' => '7604031',
                'kabupaten_id' => '7604',
                'nama' => 'Papalang'
            ],
            [
                'id' => '7604032',
                'kabupaten_id' => '7604',
                'nama' => 'Sampaga'
            ],
            [
                'id' => '7604033',
                'kabupaten_id' => '7604',
                'nama' => 'Tommo'
            ],
            [
                'id' => '7604040',
                'kabupaten_id' => '7604',
                'nama' => 'Kalumpang'
            ],
            [
                'id' => '7604041',
                'kabupaten_id' => '7604',
                'nama' => 'Bonehau'
            ],
            [
                'id' => '7604050',
                'kabupaten_id' => '7604',
                'nama' => 'Budong-budong'
            ],
            [
                'id' => '7604051',
                'kabupaten_id' => '7604',
                'nama' => 'Pangale'
            ],
            [
                'id' => '7604052',
                'kabupaten_id' => '7604',
                'nama' => 'Topoyo'
            ],
            [
                'id' => '7604053',
                'kabupaten_id' => '7604',
                'nama' => 'Karossa'
            ],
            [
                'id' => '7604054',
                'kabupaten_id' => '7604',
                'nama' => 'Tobadak'
            ],
            [
                'id' => '7605010',
                'kabupaten_id' => '7605',
                'nama' => 'Sarudu'
            ],
            [
                'id' => '7605011',
                'kabupaten_id' => '7605',
                'nama' => 'Dapurang'
            ],
            [
                'id' => '7605012',
                'kabupaten_id' => '7605',
                'nama' => 'Duripoku'
            ],
            [
                'id' => '7605020',
                'kabupaten_id' => '7605',
                'nama' => 'Baras'
            ],
            [
                'id' => '7605021',
                'kabupaten_id' => '7605',
                'nama' => 'Bulu Taba'
            ],
            [
                'id' => '7605022',
                'kabupaten_id' => '7605',
                'nama' => 'Lariang'
            ],
            [
                'id' => '7605030',
                'kabupaten_id' => '7605',
                'nama' => 'Pasangkayu'
            ],
            [
                'id' => '7605031',
                'kabupaten_id' => '7605',
                'nama' => 'Tikke Raya'
            ],
            [
                'id' => '7605032',
                'kabupaten_id' => '7605',
                'nama' => 'Pedongga'
            ],
            [
                'id' => '7605040',
                'kabupaten_id' => '7605',
                'nama' => 'Bambalamotu'
            ],
            [
                'id' => '7605041',
                'kabupaten_id' => '7605',
                'nama' => 'Bambaira'
            ],
            [
                'id' => '7605042',
                'kabupaten_id' => '7605',
                'nama' => 'Sarjo'
            ],
            [
                'id' => '8101040',
                'kabupaten_id' => '8101',
                'nama' => 'Tanimbar Selatan'
            ],
            [
                'id' => '8101041',
                'kabupaten_id' => '8101',
                'nama' => 'Wer Tamrian'
            ],
            [
                'id' => '8101042',
                'kabupaten_id' => '8101',
                'nama' => 'Wer Maktian'
            ],
            [
                'id' => '8101043',
                'kabupaten_id' => '8101',
                'nama' => 'Selaru'
            ],
            [
                'id' => '8101050',
                'kabupaten_id' => '8101',
                'nama' => 'Tanimbar Utara'
            ],
            [
                'id' => '8101051',
                'kabupaten_id' => '8101',
                'nama' => 'Yaru'
            ],
            [
                'id' => '8101052',
                'kabupaten_id' => '8101',
                'nama' => 'Wuar Labobar'
            ],
            [
                'id' => '8101053',
                'kabupaten_id' => '8101',
                'nama' => 'Nirunmas'
            ],
            [
                'id' => '8101054',
                'kabupaten_id' => '8101',
                'nama' => 'Kormomolin'
            ],
            [
                'id' => '8101055',
                'kabupaten_id' => '8101',
                'nama' => 'Molu Maru'
            ],
            [
                'id' => '8102010',
                'kabupaten_id' => '8102',
                'nama' => 'Kei Kecil'
            ],
            [
                'id' => '8102012',
                'kabupaten_id' => '8102',
                'nama' => 'Kei Kecil Barat'
            ],
            [
                'id' => '8102013',
                'kabupaten_id' => '8102',
                'nama' => 'Kei Kecil Timur'
            ],
            [
                'id' => '8102020',
                'kabupaten_id' => '8102',
                'nama' => 'Kei Besar'
            ],
            [
                'id' => '8102021',
                'kabupaten_id' => '8102',
                'nama' => 'Kei Besar Utara Timur'
            ],
            [
                'id' => '8102022',
                'kabupaten_id' => '8102',
                'nama' => 'Kei Besar Selatan'
            ],
            [
                'id' => '8103010',
                'kabupaten_id' => '8103',
                'nama' => 'Banda'
            ],
            [
                'id' => '8103040',
                'kabupaten_id' => '8103',
                'nama' => 'Tehoru'
            ],
            [
                'id' => '8103041',
                'kabupaten_id' => '8103',
                'nama' => 'Telutih'
            ],
            [
                'id' => '8103050',
                'kabupaten_id' => '8103',
                'nama' => 'Amahai'
            ],
            [
                'id' => '8103051',
                'kabupaten_id' => '8103',
                'nama' => 'Kota Masohi'
            ],
            [
                'id' => '8103052',
                'kabupaten_id' => '8103',
                'nama' => 'Teluk Elpaputih'
            ],
            [
                'id' => '8103060',
                'kabupaten_id' => '8103',
                'nama' => 'Teon Nila Serua'
            ],
            [
                'id' => '8103080',
                'kabupaten_id' => '8103',
                'nama' => 'Saparua'
            ],
            [
                'id' => '8103081',
                'kabupaten_id' => '8103',
                'nama' => 'Nusalaut'
            ],
            [
                'id' => '8103090',
                'kabupaten_id' => '8103',
                'nama' => 'P. Haruku'
            ],
            [
                'id' => '8103100',
                'kabupaten_id' => '8103',
                'nama' => 'Salahutu'
            ],
            [
                'id' => '8103110',
                'kabupaten_id' => '8103',
                'nama' => 'Leihitu'
            ],
            [
                'id' => '8103111',
                'kabupaten_id' => '8103',
                'nama' => 'Leihitu Barat'
            ],
            [
                'id' => '8103140',
                'kabupaten_id' => '8103',
                'nama' => 'Seram Utara'
            ],
            [
                'id' => '8103141',
                'kabupaten_id' => '8103',
                'nama' => 'Seram Utara Barat'
            ],
            [
                'id' => '8103142',
                'kabupaten_id' => '8103',
                'nama' => 'Seram Utara Timur Kobi'
            ],
            [
                'id' => '8103143',
                'kabupaten_id' => '8103',
                'nama' => 'Seram Utara Timur Seti'
            ],
            [
                'id' => '8104020',
                'kabupaten_id' => '8104',
                'nama' => 'Namlea'
            ],
            [
                'id' => '8104021',
                'kabupaten_id' => '8104',
                'nama' => 'Waeapo'
            ],
            [
                'id' => '8104022',
                'kabupaten_id' => '8104',
                'nama' => 'Waplau'
            ],
            [
                'id' => '8104023',
                'kabupaten_id' => '8104',
                'nama' => 'Bata Bual'
            ],
            [
                'id' => '8104024',
                'kabupaten_id' => '8104',
                'nama' => 'Teluk Kaiely'
            ],
            [
                'id' => '8104025',
                'kabupaten_id' => '8104',
                'nama' => 'Waelata'
            ],
            [
                'id' => '8104026',
                'kabupaten_id' => '8104',
                'nama' => 'Lolong Guba'
            ],
            [
                'id' => '8104027',
                'kabupaten_id' => '8104',
                'nama' => 'Lilialy'
            ],
            [
                'id' => '8104030',
                'kabupaten_id' => '8104',
                'nama' => 'Air Buaya'
            ],
            [
                'id' => '8104031',
                'kabupaten_id' => '8104',
                'nama' => 'Fena Leisela'
            ],
            [
                'id' => '8105010',
                'kabupaten_id' => '8105',
                'nama' => 'Aru Selatan'
            ],
            [
                'id' => '8105011',
                'kabupaten_id' => '8105',
                'nama' => 'Aru Selatan Timur'
            ],
            [
                'id' => '8105020',
                'kabupaten_id' => '8105',
                'nama' => 'Aru Tengah'
            ],
            [
                'id' => '8105021',
                'kabupaten_id' => '8105',
                'nama' => 'Aru Tengah Timur'
            ],
            [
                'id' => '8105022',
                'kabupaten_id' => '8105',
                'nama' => 'Aru Tengah Selatan'
            ],
            [
                'id' => '8105030',
                'kabupaten_id' => '8105',
                'nama' => 'Pulau-pulau Aru'
            ],
            [
                'id' => '8105031',
                'kabupaten_id' => '8105',
                'nama' => 'Aru Utara'
            ],
            [
                'id' => '8106010',
                'kabupaten_id' => '8106',
                'nama' => 'Huamual Belakang'
            ],
            [
                'id' => '8106011',
                'kabupaten_id' => '8106',
                'nama' => 'Kepulauan Manipa'
            ],
            [
                'id' => '8106020',
                'kabupaten_id' => '8106',
                'nama' => 'Seram Barat'
            ],
            [
                'id' => '8106021',
                'kabupaten_id' => '8106',
                'nama' => 'Huamual'
            ],
            [
                'id' => '8106030',
                'kabupaten_id' => '8106',
                'nama' => 'Kairatu'
            ],
            [
                'id' => '8106031',
                'kabupaten_id' => '8106',
                'nama' => 'Kairatu Barat'
            ],
            [
                'id' => '8106032',
                'kabupaten_id' => '8106',
                'nama' => 'Inamosol'
            ],
            [
                'id' => '8106033',
                'kabupaten_id' => '8106',
                'nama' => 'Amalatu'
            ],
            [
                'id' => '8106034',
                'kabupaten_id' => '8106',
                'nama' => 'Elpaputih'
            ],
            [
                'id' => '8106040',
                'kabupaten_id' => '8106',
                'nama' => 'Taniwel'
            ],
            [
                'id' => '8106041',
                'kabupaten_id' => '8106',
                'nama' => 'Taniwel Timur'
            ],
            [
                'id' => '8107010',
                'kabupaten_id' => '8107',
                'nama' => 'Pulau Gorom'
            ],
            [
                'id' => '8107011',
                'kabupaten_id' => '8107',
                'nama' => 'Wakate'
            ],
            [
                'id' => '8107012',
                'kabupaten_id' => '8107',
                'nama' => 'Teor'
            ],
            [
                'id' => '8107013',
                'kabupaten_id' => '8107',
                'nama' => 'Gorom Timur'
            ],
            [
                'id' => '8107014',
                'kabupaten_id' => '8107',
                'nama' => 'Pulau Panjang'
            ],
            [
                'id' => '8107020',
                'kabupaten_id' => '8107',
                'nama' => 'Seram Timur'
            ],
            [
                'id' => '8107021',
                'kabupaten_id' => '8107',
                'nama' => 'Tutuk Tolu'
            ],
            [
                'id' => '8107022',
                'kabupaten_id' => '8107',
                'nama' => 'Kilmury'
            ],
            [
                'id' => '8107030',
                'kabupaten_id' => '8107',
                'nama' => 'Werinama'
            ],
            [
                'id' => '8107031',
                'kabupaten_id' => '8107',
                'nama' => 'Siwalalat'
            ],
            [
                'id' => '8107040',
                'kabupaten_id' => '8107',
                'nama' => 'Bula'
            ],
            [
                'id' => '8107041',
                'kabupaten_id' => '8107',
                'nama' => 'Bula Barat'
            ],
            [
                'id' => '8108010',
                'kabupaten_id' => '8108',
                'nama' => 'Pp. Wetar'
            ],
            [
                'id' => '8108020',
                'kabupaten_id' => '8108',
                'nama' => 'Pp. Terselatan'
            ],
            [
                'id' => '8108030',
                'kabupaten_id' => '8108',
                'nama' => 'Leti Moa Lakor'
            ],
            [
                'id' => '8108040',
                'kabupaten_id' => '8108',
                'nama' => 'Moa Lakor'
            ],
            [
                'id' => '8108050',
                'kabupaten_id' => '8108',
                'nama' => 'Damer'
            ],
            [
                'id' => '8108060',
                'kabupaten_id' => '8108',
                'nama' => 'Mdona Hiera'
            ],
            [
                'id' => '8108070',
                'kabupaten_id' => '8108',
                'nama' => 'Pp. Babar'
            ],
            [
                'id' => '8108080',
                'kabupaten_id' => '8108',
                'nama' => 'Babar Timur'
            ],
            [
                'id' => '8109010',
                'kabupaten_id' => '8109',
                'nama' => 'Kepala Madan'
            ],
            [
                'id' => '8109020',
                'kabupaten_id' => '8109',
                'nama' => 'Leksula'
            ],
            [
                'id' => '8109030',
                'kabupaten_id' => '8109',
                'nama' => 'Namrole'
            ],
            [
                'id' => '8109040',
                'kabupaten_id' => '8109',
                'nama' => 'Waisama'
            ],
            [
                'id' => '8109050',
                'kabupaten_id' => '8109',
                'nama' => 'Ambalau'
            ],
            [
                'id' => '8171010',
                'kabupaten_id' => '8171',
                'nama' => 'Nusaniwe'
            ],
            [
                'id' => '8171020',
                'kabupaten_id' => '8171',
                'nama' => 'Sirimau'
            ],
            [
                'id' => '8171021',
                'kabupaten_id' => '8171',
                'nama' => 'Leitimur Selatan'
            ],
            [
                'id' => '8171030',
                'kabupaten_id' => '8171',
                'nama' => 'Teluk Ambon Baguala'
            ],
            [
                'id' => '8171031',
                'kabupaten_id' => '8171',
                'nama' => 'Teluk Ambon'
            ],
            [
                'id' => '8172010',
                'kabupaten_id' => '8172',
                'nama' => 'Pp. Kur'
            ],
            [
                'id' => '8172020',
                'kabupaten_id' => '8172',
                'nama' => 'Tayando Tam'
            ],
            [
                'id' => '8172030',
                'kabupaten_id' => '8172',
                'nama' => 'Pulau Dullah Utara'
            ],
            [
                'id' => '8172040',
                'kabupaten_id' => '8172',
                'nama' => 'Pulau Dullah Selatan'
            ],
            [
                'id' => '8201090',
                'kabupaten_id' => '8201',
                'nama' => 'Jailolo'
            ],
            [
                'id' => '8201091',
                'kabupaten_id' => '8201',
                'nama' => 'Jailolo Selatan'
            ],
            [
                'id' => '8201100',
                'kabupaten_id' => '8201',
                'nama' => 'Sahu'
            ],
            [
                'id' => '8201101',
                'kabupaten_id' => '8201',
                'nama' => 'Sahu Timur'
            ],
            [
                'id' => '8201130',
                'kabupaten_id' => '8201',
                'nama' => 'Ibu'
            ],
            [
                'id' => '8201131',
                'kabupaten_id' => '8201',
                'nama' => 'Ibu Selatan'
            ],
            [
                'id' => '8201132',
                'kabupaten_id' => '8201',
                'nama' => 'Ibu Utara'
            ],
            [
                'id' => '8201140',
                'kabupaten_id' => '8201',
                'nama' => 'Loloda'
            ],
            [
                'id' => '8202030',
                'kabupaten_id' => '8202',
                'nama' => 'Weda'
            ],
            [
                'id' => '8202031',
                'kabupaten_id' => '8202',
                'nama' => 'Weda Selatan'
            ],
            [
                'id' => '8202032',
                'kabupaten_id' => '8202',
                'nama' => 'Weda Utara'
            ],
            [
                'id' => '8202033',
                'kabupaten_id' => '8202',
                'nama' => 'Weda Tengah'
            ],
            [
                'id' => '8202041',
                'kabupaten_id' => '8202',
                'nama' => 'Pulau Gebe'
            ],
            [
                'id' => '8202042',
                'kabupaten_id' => '8202',
                'nama' => 'Patani'
            ],
            [
                'id' => '8202043',
                'kabupaten_id' => '8202',
                'nama' => 'Patani Utara'
            ],
            [
                'id' => '8202044',
                'kabupaten_id' => '8202',
                'nama' => 'Patani Barat'
            ],
            [
                'id' => '8203010',
                'kabupaten_id' => '8203',
                'nama' => 'Sula Besi Barat'
            ],
            [
                'id' => '8203011',
                'kabupaten_id' => '8203',
                'nama' => 'Sulabesi Selatan'
            ],
            [
                'id' => '8203020',
                'kabupaten_id' => '8203',
                'nama' => 'Sanana'
            ],
            [
                'id' => '8203021',
                'kabupaten_id' => '8203',
                'nama' => 'Sula Besi Tengah'
            ],
            [
                'id' => '8203022',
                'kabupaten_id' => '8203',
                'nama' => 'Sulabesi Timur'
            ],
            [
                'id' => '8203023',
                'kabupaten_id' => '8203',
                'nama' => 'Sanana Utara'
            ],
            [
                'id' => '8203030',
                'kabupaten_id' => '8203',
                'nama' => 'Mangoli Timur'
            ],
            [
                'id' => '8203031',
                'kabupaten_id' => '8203',
                'nama' => 'Mangoli Tengah'
            ],
            [
                'id' => '8203032',
                'kabupaten_id' => '8203',
                'nama' => 'Mangoli Utara Timur'
            ],
            [
                'id' => '8203040',
                'kabupaten_id' => '8203',
                'nama' => 'Mangoli Barat'
            ],
            [
                'id' => '8203041',
                'kabupaten_id' => '8203',
                'nama' => 'Mangoli Utara'
            ],
            [
                'id' => '8203042',
                'kabupaten_id' => '8203',
                'nama' => 'Mangoli Selatan'
            ],
            [
                'id' => '8203050',
                'kabupaten_id' => '8203',
                'nama' => 'Taliabu Timur'
            ],
            [
                'id' => '8203051',
                'kabupaten_id' => '8203',
                'nama' => 'Taliabu Timur Selatan'
            ],
            [
                'id' => '8203060',
                'kabupaten_id' => '8203',
                'nama' => 'Taliabu Barat'
            ],
            [
                'id' => '8203061',
                'kabupaten_id' => '8203',
                'nama' => 'Taliabu Utara'
            ],
            [
                'id' => '8203062',
                'kabupaten_id' => '8203',
                'nama' => 'Taliabu Barat Laut'
            ],
            [
                'id' => '8203063',
                'kabupaten_id' => '8203',
                'nama' => 'Lede'
            ],
            [
                'id' => '8203064',
                'kabupaten_id' => '8203',
                'nama' => 'Taliabu Selatan'
            ],
            [
                'id' => '8204010',
                'kabupaten_id' => '8204',
                'nama' => 'Obi Selatan'
            ],
            [
                'id' => '8204020',
                'kabupaten_id' => '8204',
                'nama' => 'Obi'
            ],
            [
                'id' => '8204021',
                'kabupaten_id' => '8204',
                'nama' => 'Obi Barat'
            ],
            [
                'id' => '8204022',
                'kabupaten_id' => '8204',
                'nama' => 'Obi Timur'
            ],
            [
                'id' => '8204023',
                'kabupaten_id' => '8204',
                'nama' => 'Obi Utara'
            ],
            [
                'id' => '8204030',
                'kabupaten_id' => '8204',
                'nama' => 'Bacan'
            ],
            [
                'id' => '8204031',
                'kabupaten_id' => '8204',
                'nama' => 'Mandioli Selatan'
            ],
            [
                'id' => '8204032',
                'kabupaten_id' => '8204',
                'nama' => 'Mandioli Utara'
            ],
            [
                'id' => '8204033',
                'kabupaten_id' => '8204',
                'nama' => 'Bacan Selatan'
            ],
            [
                'id' => '8204034',
                'kabupaten_id' => '8204',
                'nama' => 'Batang Lomang'
            ],
            [
                'id' => '8204040',
                'kabupaten_id' => '8204',
                'nama' => 'Bacan Timur'
            ],
            [
                'id' => '8204041',
                'kabupaten_id' => '8204',
                'nama' => 'Bacan Timur Selatan'
            ],
            [
                'id' => '8204042',
                'kabupaten_id' => '8204',
                'nama' => 'Bacan Timur Tengah'
            ],
            [
                'id' => '8204050',
                'kabupaten_id' => '8204',
                'nama' => 'Bacan Barat'
            ],
            [
                'id' => '8204051',
                'kabupaten_id' => '8204',
                'nama' => 'Kasiruta Barat'
            ],
            [
                'id' => '8204052',
                'kabupaten_id' => '8204',
                'nama' => 'Kasiruta Timur'
            ],
            [
                'id' => '8204053',
                'kabupaten_id' => '8204',
                'nama' => 'Bacan Barat Utara'
            ],
            [
                'id' => '8204060',
                'kabupaten_id' => '8204',
                'nama' => 'Kayoa'
            ],
            [
                'id' => '8204061',
                'kabupaten_id' => '8204',
                'nama' => 'Kayoa Barat'
            ],
            [
                'id' => '8204062',
                'kabupaten_id' => '8204',
                'nama' => 'Kayoa Selatan'
            ],
            [
                'id' => '8204063',
                'kabupaten_id' => '8204',
                'nama' => 'Kayoa Utara'
            ],
            [
                'id' => '8204070',
                'kabupaten_id' => '8204',
                'nama' => 'Pulau Makian'
            ],
            [
                'id' => '8204071',
                'kabupaten_id' => '8204',
                'nama' => 'Makian Barat'
            ],
            [
                'id' => '8204080',
                'kabupaten_id' => '8204',
                'nama' => 'Gane Barat'
            ],
            [
                'id' => '8204081',
                'kabupaten_id' => '8204',
                'nama' => 'Gane Barat Selatan'
            ],
            [
                'id' => '8204082',
                'kabupaten_id' => '8204',
                'nama' => 'Gane Barat Utara'
            ],
            [
                'id' => '8204083',
                'kabupaten_id' => '8204',
                'nama' => 'Kepulauan Joronga'
            ],
            [
                'id' => '8204090',
                'kabupaten_id' => '8204',
                'nama' => 'Gane Timur'
            ],
            [
                'id' => '8204091',
                'kabupaten_id' => '8204',
                'nama' => 'Gane Timur Tengah'
            ],
            [
                'id' => '8204092',
                'kabupaten_id' => '8204',
                'nama' => 'Gane Timur Selatan'
            ],
            [
                'id' => '8205010',
                'kabupaten_id' => '8205',
                'nama' => 'Malifut'
            ],
            [
                'id' => '8205011',
                'kabupaten_id' => '8205',
                'nama' => 'Kao Teluk'
            ],
            [
                'id' => '8205020',
                'kabupaten_id' => '8205',
                'nama' => 'Kao'
            ],
            [
                'id' => '8205021',
                'kabupaten_id' => '8205',
                'nama' => 'Kao Barat'
            ],
            [
                'id' => '8205022',
                'kabupaten_id' => '8205',
                'nama' => 'Kao Utara'
            ],
            [
                'id' => '8205030',
                'kabupaten_id' => '8205',
                'nama' => 'Tobelo Selatan'
            ],
            [
                'id' => '8205031',
                'kabupaten_id' => '8205',
                'nama' => 'Tobelo Barat'
            ],
            [
                'id' => '8205032',
                'kabupaten_id' => '8205',
                'nama' => 'Tobelo Timur'
            ],
            [
                'id' => '8205040',
                'kabupaten_id' => '8205',
                'nama' => 'Tobelo'
            ],
            [
                'id' => '8205041',
                'kabupaten_id' => '8205',
                'nama' => 'Tobelo Tengah'
            ],
            [
                'id' => '8205042',
                'kabupaten_id' => '8205',
                'nama' => 'Tobelo Utara'
            ],
            [
                'id' => '8205050',
                'kabupaten_id' => '8205',
                'nama' => 'Galela'
            ],
            [
                'id' => '8205051',
                'kabupaten_id' => '8205',
                'nama' => 'Galela Selatan'
            ],
            [
                'id' => '8205052',
                'kabupaten_id' => '8205',
                'nama' => 'Galela Barat'
            ],
            [
                'id' => '8205053',
                'kabupaten_id' => '8205',
                'nama' => 'Galela Utara'
            ],
            [
                'id' => '8205060',
                'kabupaten_id' => '8205',
                'nama' => 'Loloda Utara'
            ],
            [
                'id' => '8205061',
                'kabupaten_id' => '8205',
                'nama' => 'Loloda Kepulauan'
            ],
            [
                'id' => '8206010',
                'kabupaten_id' => '8206',
                'nama' => 'Maba Selatan'
            ],
            [
                'id' => '8206011',
                'kabupaten_id' => '8206',
                'nama' => 'Kota Maba'
            ],
            [
                'id' => '8206020',
                'kabupaten_id' => '8206',
                'nama' => 'Wasile Selatan'
            ],
            [
                'id' => '8206030',
                'kabupaten_id' => '8206',
                'nama' => 'Wasile'
            ],
            [
                'id' => '8206031',
                'kabupaten_id' => '8206',
                'nama' => 'Wasile Timur'
            ],
            [
                'id' => '8206032',
                'kabupaten_id' => '8206',
                'nama' => 'Wasile Tengah'
            ],
            [
                'id' => '8206033',
                'kabupaten_id' => '8206',
                'nama' => 'Wasile Utara'
            ],
            [
                'id' => '8206040',
                'kabupaten_id' => '8206',
                'nama' => 'Maba'
            ],
            [
                'id' => '8206041',
                'kabupaten_id' => '8206',
                'nama' => 'Maba Tengah'
            ],
            [
                'id' => '8206042',
                'kabupaten_id' => '8206',
                'nama' => 'Maba Utara'
            ],
            [
                'id' => '8207010',
                'kabupaten_id' => '8207',
                'nama' => 'Morotai Selatan'
            ],
            [
                'id' => '8207020',
                'kabupaten_id' => '8207',
                'nama' => 'Morotai Timur'
            ],
            [
                'id' => '8207030',
                'kabupaten_id' => '8207',
                'nama' => 'Morotai Selatan Barat'
            ],
            [
                'id' => '8207040',
                'kabupaten_id' => '8207',
                'nama' => 'Morotai Jaya'
            ],
            [
                'id' => '8207050',
                'kabupaten_id' => '8207',
                'nama' => 'Morotai Utara'
            ],
            [
                'id' => '8271010',
                'kabupaten_id' => '8271',
                'nama' => 'Pulau Ternate'
            ],
            [
                'id' => '8271011',
                'kabupaten_id' => '8271',
                'nama' => 'Moti'
            ],
            [
                'id' => '8271012',
                'kabupaten_id' => '8271',
                'nama' => 'Pulau Batang Dua'
            ],
            [
                'id' => '8271013',
                'kabupaten_id' => '8271',
                'nama' => 'Pulau Hiri'
            ],
            [
                'id' => '8271020',
                'kabupaten_id' => '8271',
                'nama' => 'Ternate Selatan'
            ],
            [
                'id' => '8271021',
                'kabupaten_id' => '8271',
                'nama' => 'Ternate Tengah'
            ],
            [
                'id' => '8271030',
                'kabupaten_id' => '8271',
                'nama' => 'Ternate Utara'
            ],
            [
                'id' => '8272010',
                'kabupaten_id' => '8272',
                'nama' => 'Tidore Selatan'
            ],
            [
                'id' => '8272020',
                'kabupaten_id' => '8272',
                'nama' => 'Tidore Utara'
            ],
            [
                'id' => '8272030',
                'kabupaten_id' => '8272',
                'nama' => 'Tidore'
            ],
            [
                'id' => '8272031',
                'kabupaten_id' => '8272',
                'nama' => 'Tidore Timur'
            ],
            [
                'id' => '8272040',
                'kabupaten_id' => '8272',
                'nama' => 'Oba'
            ],
            [
                'id' => '8272041',
                'kabupaten_id' => '8272',
                'nama' => 'Oba Selatan'
            ],
            [
                'id' => '8272050',
                'kabupaten_id' => '8272',
                'nama' => 'Oba Utara'
            ],
            [
                'id' => '8272051',
                'kabupaten_id' => '8272',
                'nama' => 'Oba Tengah'
            ],
            [
                'id' => '9101050',
                'kabupaten_id' => '9101',
                'nama' => 'Fakfak Timur'
            ],
            [
                'id' => '9101051',
                'kabupaten_id' => '9101',
                'nama' => 'Karas'
            ],
            [
                'id' => '9101060',
                'kabupaten_id' => '9101',
                'nama' => 'Fakfak'
            ],
            [
                'id' => '9101061',
                'kabupaten_id' => '9101',
                'nama' => 'Fakfak Tengah'
            ],
            [
                'id' => '9101070',
                'kabupaten_id' => '9101',
                'nama' => 'Fakfak Barat'
            ],
            [
                'id' => '9101080',
                'kabupaten_id' => '9101',
                'nama' => 'Kokas'
            ],
            [
                'id' => '9101081',
                'kabupaten_id' => '9101',
                'nama' => 'Teluk Patipi'
            ],
            [
                'id' => '9101082',
                'kabupaten_id' => '9101',
                'nama' => 'Kramongmongga'
            ],
            [
                'id' => '9101083',
                'kabupaten_id' => '9101',
                'nama' => 'Bomberay'
            ],
            [
                'id' => '9102010',
                'kabupaten_id' => '9102',
                'nama' => 'Buruway'
            ],
            [
                'id' => '9102020',
                'kabupaten_id' => '9102',
                'nama' => 'Teluk Arguni'
            ],
            [
                'id' => '9102021',
                'kabupaten_id' => '9102',
                'nama' => 'Teluk Arguni Bawah'
            ],
            [
                'id' => '9102030',
                'kabupaten_id' => '9102',
                'nama' => 'Kaimana'
            ],
            [
                'id' => '9102031',
                'kabupaten_id' => '9102',
                'nama' => 'Kambrau'
            ],
            [
                'id' => '9102040',
                'kabupaten_id' => '9102',
                'nama' => 'Teluk Etna'
            ],
            [
                'id' => '9102041',
                'kabupaten_id' => '9102',
                'nama' => 'Yamor'
            ],
            [
                'id' => '9103010',
                'kabupaten_id' => '9103',
                'nama' => 'Naikere'
            ],
            [
                'id' => '9103020',
                'kabupaten_id' => '9103',
                'nama' => 'Wondiboy'
            ],
            [
                'id' => '9103021',
                'kabupaten_id' => '9103',
                'nama' => 'Rasiey'
            ],
            [
                'id' => '9103022',
                'kabupaten_id' => '9103',
                'nama' => 'Kuri Wamesa'
            ],
            [
                'id' => '9103030',
                'kabupaten_id' => '9103',
                'nama' => 'Wasior'
            ],
            [
                'id' => '9103040',
                'kabupaten_id' => '9103',
                'nama' => 'Duairi'
            ],
            [
                'id' => '9103041',
                'kabupaten_id' => '9103',
                'nama' => 'Roon'
            ],
            [
                'id' => '9103050',
                'kabupaten_id' => '9103',
                'nama' => 'Windesi'
            ],
            [
                'id' => '9103051',
                'kabupaten_id' => '9103',
                'nama' => 'Nikiwar'
            ],
            [
                'id' => '9103060',
                'kabupaten_id' => '9103',
                'nama' => 'Wamesa'
            ],
            [
                'id' => '9103061',
                'kabupaten_id' => '9103',
                'nama' => 'Roswar'
            ],
            [
                'id' => '9103070',
                'kabupaten_id' => '9103',
                'nama' => 'Rumberpon'
            ],
            [
                'id' => '9103071',
                'kabupaten_id' => '9103',
                'nama' => 'Soug Jaya'
            ],
            [
                'id' => '9104010',
                'kabupaten_id' => '9104',
                'nama' => 'Fafurwar'
            ],
            [
                'id' => '9104020',
                'kabupaten_id' => '9104',
                'nama' => 'Babo'
            ],
            [
                'id' => '9104021',
                'kabupaten_id' => '9104',
                'nama' => 'Sumuri'
            ],
            [
                'id' => '9104022',
                'kabupaten_id' => '9104',
                'nama' => 'Aroba'
            ],
            [
                'id' => '9104023',
                'kabupaten_id' => '9104',
                'nama' => 'Kaitaro'
            ],
            [
                'id' => '9104030',
                'kabupaten_id' => '9104',
                'nama' => 'Kuri'
            ],
            [
                'id' => '9104040',
                'kabupaten_id' => '9104',
                'nama' => 'Wamesa'
            ],
            [
                'id' => '9104050',
                'kabupaten_id' => '9104',
                'nama' => 'Bintuni'
            ],
            [
                'id' => '9104051',
                'kabupaten_id' => '9104',
                'nama' => 'Manimeri'
            ],
            [
                'id' => '9104052',
                'kabupaten_id' => '9104',
                'nama' => 'Tuhiba'
            ],
            [
                'id' => '9104053',
                'kabupaten_id' => '9104',
                'nama' => 'Dataran Beimes'
            ],
            [
                'id' => '9104060',
                'kabupaten_id' => '9104',
                'nama' => 'Tembuni'
            ],
            [
                'id' => '9104070',
                'kabupaten_id' => '9104',
                'nama' => 'Aranday'
            ],
            [
                'id' => '9104071',
                'kabupaten_id' => '9104',
                'nama' => 'Kamundan'
            ],
            [
                'id' => '9104072',
                'kabupaten_id' => '9104',
                'nama' => 'Tomu'
            ],
            [
                'id' => '9104073',
                'kabupaten_id' => '9104',
                'nama' => 'Weriagar'
            ],
            [
                'id' => '9104080',
                'kabupaten_id' => '9104',
                'nama' => 'Moskona Selatan'
            ],
            [
                'id' => '9104081',
                'kabupaten_id' => '9104',
                'nama' => 'Meyado'
            ],
            [
                'id' => '9104082',
                'kabupaten_id' => '9104',
                'nama' => 'Moskona Barat'
            ],
            [
                'id' => '9104090',
                'kabupaten_id' => '9104',
                'nama' => 'Merdey'
            ],
            [
                'id' => '9104091',
                'kabupaten_id' => '9104',
                'nama' => 'Biscoop'
            ],
            [
                'id' => '9104092',
                'kabupaten_id' => '9104',
                'nama' => 'Masyeta'
            ],
            [
                'id' => '9104100',
                'kabupaten_id' => '9104',
                'nama' => 'Moskona Utara'
            ],
            [
                'id' => '9104101',
                'kabupaten_id' => '9104',
                'nama' => 'Moskona Timur'
            ],
            [
                'id' => '9105040',
                'kabupaten_id' => '9105',
                'nama' => 'Ransiki'
            ],
            [
                'id' => '9105041',
                'kabupaten_id' => '9105',
                'nama' => 'Momi Waren'
            ],
            [
                'id' => '9105042',
                'kabupaten_id' => '9105',
                'nama' => 'Nenei'
            ],
            [
                'id' => '9105080',
                'kabupaten_id' => '9105',
                'nama' => 'Sururey'
            ],
            [
                'id' => '9105090',
                'kabupaten_id' => '9105',
                'nama' => 'Anggi'
            ],
            [
                'id' => '9105091',
                'kabupaten_id' => '9105',
                'nama' => 'Taige'
            ],
            [
                'id' => '9105092',
                'kabupaten_id' => '9105',
                'nama' => 'Membey'
            ],
            [
                'id' => '9105100',
                'kabupaten_id' => '9105',
                'nama' => 'Oransbari'
            ],
            [
                'id' => '9105110',
                'kabupaten_id' => '9105',
                'nama' => 'Warmare'
            ],
            [
                'id' => '9105120',
                'kabupaten_id' => '9105',
                'nama' => 'Prafi'
            ],
            [
                'id' => '9105130',
                'kabupaten_id' => '9105',
                'nama' => 'Menyambouw'
            ],
            [
                'id' => '9105131',
                'kabupaten_id' => '9105',
                'nama' => 'Catubouw'
            ],
            [
                'id' => '9105141',
                'kabupaten_id' => '9105',
                'nama' => 'Manokwari Barat'
            ],
            [
                'id' => '9105142',
                'kabupaten_id' => '9105',
                'nama' => 'Manokwari Timur'
            ],
            [
                'id' => '9105143',
                'kabupaten_id' => '9105',
                'nama' => 'Manokwari Utara'
            ],
            [
                'id' => '9105144',
                'kabupaten_id' => '9105',
                'nama' => 'Manokwari Selatan'
            ],
            [
                'id' => '9105145',
                'kabupaten_id' => '9105',
                'nama' => 'Testega'
            ],
            [
                'id' => '9105146',
                'kabupaten_id' => '9105',
                'nama' => 'Tanah Rubu'
            ],
            [
                'id' => '9105150',
                'kabupaten_id' => '9105',
                'nama' => 'Kebar'
            ],
            [
                'id' => '9105151',
                'kabupaten_id' => '9105',
                'nama' => 'Senopi'
            ],
            [
                'id' => '9105160',
                'kabupaten_id' => '9105',
                'nama' => 'Amberbaken'
            ],
            [
                'id' => '9105161',
                'kabupaten_id' => '9105',
                'nama' => 'Mubarni / Arfu'
            ],
            [
                'id' => '9105170',
                'kabupaten_id' => '9105',
                'nama' => 'Masni'
            ],
            [
                'id' => '9105171',
                'kabupaten_id' => '9105',
                'nama' => 'Sidey'
            ],
            [
                'id' => '9105180',
                'kabupaten_id' => '9105',
                'nama' => 'Tahosta'
            ],
            [
                'id' => '9105190',
                'kabupaten_id' => '9105',
                'nama' => 'Didohu'
            ],
            [
                'id' => '9105200',
                'kabupaten_id' => '9105',
                'nama' => 'Dataran Isim'
            ],
            [
                'id' => '9105210',
                'kabupaten_id' => '9105',
                'nama' => 'Anggi Gida'
            ],
            [
                'id' => '9105220',
                'kabupaten_id' => '9105',
                'nama' => 'Hingk'
            ],
            [
                'id' => '9106010',
                'kabupaten_id' => '9106',
                'nama' => 'Inanwatan'
            ],
            [
                'id' => '9106011',
                'kabupaten_id' => '9106',
                'nama' => 'Metemani'
            ],
            [
                'id' => '9106020',
                'kabupaten_id' => '9106',
                'nama' => 'Kokoda'
            ],
            [
                'id' => '9106021',
                'kabupaten_id' => '9106',
                'nama' => 'Kais'
            ],
            [
                'id' => '9106022',
                'kabupaten_id' => '9106',
                'nama' => 'Kokoda Utara'
            ],
            [
                'id' => '9106060',
                'kabupaten_id' => '9106',
                'nama' => 'Moswaren'
            ],
            [
                'id' => '9106070',
                'kabupaten_id' => '9106',
                'nama' => 'Teminabuan'
            ],
            [
                'id' => '9106071',
                'kabupaten_id' => '9106',
                'nama' => 'Seremuk'
            ],
            [
                'id' => '9106072',
                'kabupaten_id' => '9106',
                'nama' => 'Wayer'
            ],
            [
                'id' => '9106073',
                'kabupaten_id' => '9106',
                'nama' => 'Konda'
            ],
            [
                'id' => '9106074',
                'kabupaten_id' => '9106',
                'nama' => 'Saifi'
            ],
            [
                'id' => '9106080',
                'kabupaten_id' => '9106',
                'nama' => 'Sawiat'
            ],
            [
                'id' => '9106081',
                'kabupaten_id' => '9106',
                'nama' => 'Fokour'
            ],
            [
                'id' => '9107060',
                'kabupaten_id' => '9107',
                'nama' => 'Moraid'
            ],
            [
                'id' => '9107061',
                'kabupaten_id' => '9107',
                'nama' => 'Klaso'
            ],
            [
                'id' => '9107100',
                'kabupaten_id' => '9107',
                'nama' => 'Makbon'
            ],
            [
                'id' => '9107101',
                'kabupaten_id' => '9107',
                'nama' => 'Klayili'
            ],
            [
                'id' => '9107110',
                'kabupaten_id' => '9107',
                'nama' => 'Beraur'
            ],
            [
                'id' => '9107111',
                'kabupaten_id' => '9107',
                'nama' => 'Klamono'
            ],
            [
                'id' => '9107112',
                'kabupaten_id' => '9107',
                'nama' => 'Klabot'
            ],
            [
                'id' => '9107113',
                'kabupaten_id' => '9107',
                'nama' => 'Klawak'
            ],
            [
                'id' => '9107120',
                'kabupaten_id' => '9107',
                'nama' => 'Salawati'
            ],
            [
                'id' => '9107121',
                'kabupaten_id' => '9107',
                'nama' => 'Mayamuk'
            ],
            [
                'id' => '9107122',
                'kabupaten_id' => '9107',
                'nama' => 'Salawati Timur'
            ],
            [
                'id' => '9107130',
                'kabupaten_id' => '9107',
                'nama' => 'Seget'
            ],
            [
                'id' => '9107131',
                'kabupaten_id' => '9107',
                'nama' => 'Segun'
            ],
            [
                'id' => '9107132',
                'kabupaten_id' => '9107',
                'nama' => 'Salawati Selatan'
            ],
            [
                'id' => '9107170',
                'kabupaten_id' => '9107',
                'nama' => 'Aimas'
            ],
            [
                'id' => '9107171',
                'kabupaten_id' => '9107',
                'nama' => 'Mariat'
            ],
            [
                'id' => '9107172',
                'kabupaten_id' => '9107',
                'nama' => 'Sorong'
            ],
            [
                'id' => '9107180',
                'kabupaten_id' => '9107',
                'nama' => 'Sayosa'
            ],
            [
                'id' => '9107181',
                'kabupaten_id' => '9107',
                'nama' => 'Maudus'
            ],
            [
                'id' => '9108011',
                'kabupaten_id' => '9108',
                'nama' => 'Misool Selatan'
            ],
            [
                'id' => '9108012',
                'kabupaten_id' => '9108',
                'nama' => 'Misool Barat'
            ],
            [
                'id' => '9108020',
                'kabupaten_id' => '9108',
                'nama' => 'Misool'
            ],
            [
                'id' => '9108021',
                'kabupaten_id' => '9108',
                'nama' => 'Kofiau'
            ],
            [
                'id' => '9108022',
                'kabupaten_id' => '9108',
                'nama' => 'Misool Timur'
            ],
            [
                'id' => '9108023',
                'kabupaten_id' => '9108',
                'nama' => 'Kepulauan Sembilan'
            ],
            [
                'id' => '9108031',
                'kabupaten_id' => '9108',
                'nama' => 'Salawati Utara'
            ],
            [
                'id' => '9108033',
                'kabupaten_id' => '9108',
                'nama' => 'Salawati Tengah'
            ],
            [
                'id' => '9108034',
                'kabupaten_id' => '9108',
                'nama' => 'Salawati Barat'
            ],
            [
                'id' => '9108035',
                'kabupaten_id' => '9108',
                'nama' => 'Batanta Selatan'
            ],
            [
                'id' => '9108036',
                'kabupaten_id' => '9108',
                'nama' => 'Batanta Utara'
            ],
            [
                'id' => '9108040',
                'kabupaten_id' => '9108',
                'nama' => 'Waigeo Selatan'
            ],
            [
                'id' => '9108041',
                'kabupaten_id' => '9108',
                'nama' => 'Teluk Mayalibit'
            ],
            [
                'id' => '9108042',
                'kabupaten_id' => '9108',
                'nama' => 'Meos Mansar'
            ],
            [
                'id' => '9108043',
                'kabupaten_id' => '9108',
                'nama' => 'Kota Waisai'
            ],
            [
                'id' => '9108044',
                'kabupaten_id' => '9108',
                'nama' => 'Tiplol Mayalibit'
            ],
            [
                'id' => '9108050',
                'kabupaten_id' => '9108',
                'nama' => 'Waigeo Barat'
            ],
            [
                'id' => '9108051',
                'kabupaten_id' => '9108',
                'nama' => 'Waigeo Barat Kepulauan'
            ],
            [
                'id' => '9108060',
                'kabupaten_id' => '9108',
                'nama' => 'Waigeo Utara'
            ],
            [
                'id' => '9108061',
                'kabupaten_id' => '9108',
                'nama' => 'Warwarbomi'
            ],
            [
                'id' => '9108062',
                'kabupaten_id' => '9108',
                'nama' => 'Supnin'
            ],
            [
                'id' => '9108070',
                'kabupaten_id' => '9108',
                'nama' => 'Kepulauan Ayau'
            ],
            [
                'id' => '9108071',
                'kabupaten_id' => '9108',
                'nama' => 'Ayau'
            ],
            [
                'id' => '9108080',
                'kabupaten_id' => '9108',
                'nama' => 'Waigeo Timur'
            ],
            [
                'id' => '9109010',
                'kabupaten_id' => '9109',
                'nama' => 'Fef'
            ],
            [
                'id' => '9109011',
                'kabupaten_id' => '9109',
                'nama' => 'Syujak'
            ],
            [
                'id' => '9109020',
                'kabupaten_id' => '9109',
                'nama' => 'Miyah'
            ],
            [
                'id' => '9109030',
                'kabupaten_id' => '9109',
                'nama' => 'Abun'
            ],
            [
                'id' => '9109040',
                'kabupaten_id' => '9109',
                'nama' => 'Kwoor'
            ],
            [
                'id' => '9109050',
                'kabupaten_id' => '9109',
                'nama' => 'Sausapor'
            ],
            [
                'id' => '9109060',
                'kabupaten_id' => '9109',
                'nama' => 'Yembun'
            ],
            [
                'id' => '9110010',
                'kabupaten_id' => '9110',
                'nama' => 'Aitinyo Barat/athabu'
            ],
            [
                'id' => '9110011',
                'kabupaten_id' => '9110',
                'nama' => 'Ayamaru Selatan Jaya'
            ],
            [
                'id' => '9110020',
                'kabupaten_id' => '9110',
                'nama' => 'Aitinyo'
            ],
            [
                'id' => '9110021',
                'kabupaten_id' => '9110',
                'nama' => 'Aitinyo Tengah'
            ],
            [
                'id' => '9110030',
                'kabupaten_id' => '9110',
                'nama' => 'Aifat Selatan'
            ],
            [
                'id' => '9110031',
                'kabupaten_id' => '9110',
                'nama' => 'Aifat Timur Selatan'
            ],
            [
                'id' => '9110040',
                'kabupaten_id' => '9110',
                'nama' => 'Aifat'
            ],
            [
                'id' => '9110050',
                'kabupaten_id' => '9110',
                'nama' => 'Aitinyo Utara'
            ],
            [
                'id' => '9110051',
                'kabupaten_id' => '9110',
                'nama' => 'Aitinyo Raya'
            ],
            [
                'id' => '9110060',
                'kabupaten_id' => '9110',
                'nama' => 'Ayamaru Timur'
            ],
            [
                'id' => '9110061',
                'kabupaten_id' => '9110',
                'nama' => 'Ayamaru Timur Selatan'
            ],
            [
                'id' => '9110070',
                'kabupaten_id' => '9110',
                'nama' => 'Ayamaru'
            ],
            [
                'id' => '9110071',
                'kabupaten_id' => '9110',
                'nama' => 'Ayamaru Selatan'
            ],
            [
                'id' => '9110072',
                'kabupaten_id' => '9110',
                'nama' => 'Ayamaru Jaya'
            ],
            [
                'id' => '9110073',
                'kabupaten_id' => '9110',
                'nama' => 'Ayamaru Tengah'
            ],
            [
                'id' => '9110074',
                'kabupaten_id' => '9110',
                'nama' => 'Ayamaru Barat'
            ],
            [
                'id' => '9110080',
                'kabupaten_id' => '9110',
                'nama' => 'Ayamaru Utara'
            ],
            [
                'id' => '9110081',
                'kabupaten_id' => '9110',
                'nama' => 'Ayamaru Utara Timur'
            ],
            [
                'id' => '9110090',
                'kabupaten_id' => '9110',
                'nama' => 'Mare'
            ],
            [
                'id' => '9110091',
                'kabupaten_id' => '9110',
                'nama' => 'Mare Selatan'
            ],
            [
                'id' => '9110100',
                'kabupaten_id' => '9110',
                'nama' => 'Aifat Utara'
            ],
            [
                'id' => '9110110',
                'kabupaten_id' => '9110',
                'nama' => 'Aifat Timur'
            ],
            [
                'id' => '9110111',
                'kabupaten_id' => '9110',
                'nama' => 'Aifat Timur Tengah'
            ],
            [
                'id' => '9110112',
                'kabupaten_id' => '9110',
                'nama' => 'Aifat Timur Jauh'
            ],
            [
                'id' => '9171010',
                'kabupaten_id' => '9171',
                'nama' => 'Sorong Barat'
            ],
            [
                'id' => '9171011',
                'kabupaten_id' => '9171',
                'nama' => 'Sorong Kepulauan'
            ],
            [
                'id' => '9171020',
                'kabupaten_id' => '9171',
                'nama' => 'Sorong Timur'
            ],
            [
                'id' => '9171021',
                'kabupaten_id' => '9171',
                'nama' => 'Sorong Utara'
            ],
            [
                'id' => '9171022',
                'kabupaten_id' => '9171',
                'nama' => 'Sorong'
            ],
            [
                'id' => '9171023',
                'kabupaten_id' => '9171',
                'nama' => 'Sorong Manoi'
            ],
            [
                'id' => '9401010',
                'kabupaten_id' => '9401',
                'nama' => 'Kimaam'
            ],
            [
                'id' => '9401011',
                'kabupaten_id' => '9401',
                'nama' => 'Waan'
            ],
            [
                'id' => '9401012',
                'kabupaten_id' => '9401',
                'nama' => 'Tabonji'
            ],
            [
                'id' => '9401013',
                'kabupaten_id' => '9401',
                'nama' => 'Ilwayab'
            ],
            [
                'id' => '9401020',
                'kabupaten_id' => '9401',
                'nama' => 'Okaba'
            ],
            [
                'id' => '9401021',
                'kabupaten_id' => '9401',
                'nama' => 'Tubang'
            ],
            [
                'id' => '9401022',
                'kabupaten_id' => '9401',
                'nama' => 'Ngguti'
            ],
            [
                'id' => '9401023',
                'kabupaten_id' => '9401',
                'nama' => 'Kaptel'
            ],
            [
                'id' => '9401030',
                'kabupaten_id' => '9401',
                'nama' => 'Kurik'
            ],
            [
                'id' => '9401031',
                'kabupaten_id' => '9401',
                'nama' => 'Malind'
            ],
            [
                'id' => '9401032',
                'kabupaten_id' => '9401',
                'nama' => 'Animha'
            ],
            [
                'id' => '9401040',
                'kabupaten_id' => '9401',
                'nama' => 'Merauke'
            ],
            [
                'id' => '9401041',
                'kabupaten_id' => '9401',
                'nama' => 'Semangga'
            ],
            [
                'id' => '9401042',
                'kabupaten_id' => '9401',
                'nama' => 'Tanah Miring'
            ],
            [
                'id' => '9401043',
                'kabupaten_id' => '9401',
                'nama' => 'Jagebob'
            ],
            [
                'id' => '9401044',
                'kabupaten_id' => '9401',
                'nama' => 'Sota'
            ],
            [
                'id' => '9401045',
                'kabupaten_id' => '9401',
                'nama' => 'Naukenjerai'
            ],
            [
                'id' => '9401050',
                'kabupaten_id' => '9401',
                'nama' => 'Muting'
            ],
            [
                'id' => '9401051',
                'kabupaten_id' => '9401',
                'nama' => 'Eligobel'
            ],
            [
                'id' => '9401052',
                'kabupaten_id' => '9401',
                'nama' => 'Ulilin'
            ],
            [
                'id' => '9402110',
                'kabupaten_id' => '9402',
                'nama' => 'Wamena'
            ],
            [
                'id' => '9402111',
                'kabupaten_id' => '9402',
                'nama' => 'Asolokobal'
            ],
            [
                'id' => '9402112',
                'kabupaten_id' => '9402',
                'nama' => 'Walelagama'
            ],
            [
                'id' => '9402120',
                'kabupaten_id' => '9402',
                'nama' => 'Hubikosi'
            ],
            [
                'id' => '9402121',
                'kabupaten_id' => '9402',
                'nama' => 'Pelebaga'
            ],
            [
                'id' => '9402180',
                'kabupaten_id' => '9402',
                'nama' => 'Asologaima'
            ],
            [
                'id' => '9402181',
                'kabupaten_id' => '9402',
                'nama' => 'Musatfak'
            ],
            [
                'id' => '9402190',
                'kabupaten_id' => '9402',
                'nama' => 'Kurulu'
            ],
            [
                'id' => '9402220',
                'kabupaten_id' => '9402',
                'nama' => 'Bolakme'
            ],
            [
                'id' => '9402221',
                'kabupaten_id' => '9402',
                'nama' => 'Wollo'
            ],
            [
                'id' => '9402222',
                'kabupaten_id' => '9402',
                'nama' => 'Yalengga'
            ],
            [
                'id' => '9403080',
                'kabupaten_id' => '9403',
                'nama' => 'Kaureh'
            ],
            [
                'id' => '9403081',
                'kabupaten_id' => '9403',
                'nama' => 'Airu'
            ],
            [
                'id' => '9403082',
                'kabupaten_id' => '9403',
                'nama' => 'Yapsi'
            ],
            [
                'id' => '9403140',
                'kabupaten_id' => '9403',
                'nama' => 'Kemtuk'
            ],
            [
                'id' => '9403150',
                'kabupaten_id' => '9403',
                'nama' => 'Kemtuk Gresi'
            ],
            [
                'id' => '9403151',
                'kabupaten_id' => '9403',
                'nama' => 'Gresi Selatan'
            ],
            [
                'id' => '9403160',
                'kabupaten_id' => '9403',
                'nama' => 'Nimboran'
            ],
            [
                'id' => '9403161',
                'kabupaten_id' => '9403',
                'nama' => 'Nimboran Timur / Namblong'
            ],
            [
                'id' => '9403170',
                'kabupaten_id' => '9403',
                'nama' => 'Nimbokrang'
            ],
            [
                'id' => '9403180',
                'kabupaten_id' => '9403',
                'nama' => 'Unurum Guay'
            ],
            [
                'id' => '9403200',
                'kabupaten_id' => '9403',
                'nama' => 'Demta'
            ],
            [
                'id' => '9403201',
                'kabupaten_id' => '9403',
                'nama' => 'Yokari'
            ],
            [
                'id' => '9403210',
                'kabupaten_id' => '9403',
                'nama' => 'Depapre'
            ],
            [
                'id' => '9403211',
                'kabupaten_id' => '9403',
                'nama' => 'Ravenirara'
            ],
            [
                'id' => '9403220',
                'kabupaten_id' => '9403',
                'nama' => 'Sentani Barat'
            ],
            [
                'id' => '9403221',
                'kabupaten_id' => '9403',
                'nama' => 'Waibu'
            ],
            [
                'id' => '9403230',
                'kabupaten_id' => '9403',
                'nama' => 'Sentani'
            ],
            [
                'id' => '9403231',
                'kabupaten_id' => '9403',
                'nama' => 'Ebungfau'
            ],
            [
                'id' => '9403240',
                'kabupaten_id' => '9403',
                'nama' => 'Sentani Timur'
            ],
            [
                'id' => '9404050',
                'kabupaten_id' => '9404',
                'nama' => 'Uwapa'
            ],
            [
                'id' => '9404051',
                'kabupaten_id' => '9404',
                'nama' => 'Menou'
            ],
            [
                'id' => '9404052',
                'kabupaten_id' => '9404',
                'nama' => 'Dipa'
            ],
            [
                'id' => '9404060',
                'kabupaten_id' => '9404',
                'nama' => 'Yaur'
            ],
            [
                'id' => '9404061',
                'kabupaten_id' => '9404',
                'nama' => 'Teluk Umar'
            ],
            [
                'id' => '9404070',
                'kabupaten_id' => '9404',
                'nama' => 'Wanggar'
            ],
            [
                'id' => '9404071',
                'kabupaten_id' => '9404',
                'nama' => 'Nabire Barat'
            ],
            [
                'id' => '9404080',
                'kabupaten_id' => '9404',
                'nama' => 'Nabire'
            ],
            [
                'id' => '9404081',
                'kabupaten_id' => '9404',
                'nama' => 'Teluk Kimi'
            ],
            [
                'id' => '9404090',
                'kabupaten_id' => '9404',
                'nama' => 'Napan'
            ],
            [
                'id' => '9404091',
                'kabupaten_id' => '9404',
                'nama' => 'Makimi'
            ],
            [
                'id' => '9404092',
                'kabupaten_id' => '9404',
                'nama' => 'Wapoga'
            ],
            [
                'id' => '9404100',
                'kabupaten_id' => '9404',
                'nama' => 'Siriwo'
            ],
            [
                'id' => '9404110',
                'kabupaten_id' => '9404',
                'nama' => 'Yaro'
            ],
            [
                'id' => '9408040',
                'kabupaten_id' => '9408',
                'nama' => 'Yapen Timur'
            ],
            [
                'id' => '9408041',
                'kabupaten_id' => '9408',
                'nama' => 'Pantura Yapen'
            ],
            [
                'id' => '9408042',
                'kabupaten_id' => '9408',
                'nama' => 'Teluk Ampimoi'
            ],
            [
                'id' => '9408043',
                'kabupaten_id' => '9408',
                'nama' => 'Raimbawi'
            ],
            [
                'id' => '9408044',
                'kabupaten_id' => '9408',
                'nama' => 'Pulau Kurudu'
            ],
            [
                'id' => '9408050',
                'kabupaten_id' => '9408',
                'nama' => 'Angkaisera'
            ],
            [
                'id' => '9408051',
                'kabupaten_id' => '9408',
                'nama' => 'Kep. Ambai'
            ],
            [
                'id' => '9408060',
                'kabupaten_id' => '9408',
                'nama' => 'Yapen Selatan'
            ],
            [
                'id' => '9408061',
                'kabupaten_id' => '9408',
                'nama' => 'Kosiwo'
            ],
            [
                'id' => '9408070',
                'kabupaten_id' => '9408',
                'nama' => 'Yapen Barat'
            ],
            [
                'id' => '9408071',
                'kabupaten_id' => '9408',
                'nama' => 'Wonawa'
            ],
            [
                'id' => '9408072',
                'kabupaten_id' => '9408',
                'nama' => 'Pulau Yerui'
            ],
            [
                'id' => '9408080',
                'kabupaten_id' => '9408',
                'nama' => 'Poom'
            ],
            [
                'id' => '9408081',
                'kabupaten_id' => '9408',
                'nama' => 'Windesi'
            ],
            [
                'id' => '9409010',
                'kabupaten_id' => '9409',
                'nama' => 'Numfor Barat'
            ],
            [
                'id' => '9409011',
                'kabupaten_id' => '9409',
                'nama' => 'Orkeri'
            ],
            [
                'id' => '9409020',
                'kabupaten_id' => '9409',
                'nama' => 'Numfor Timur'
            ],
            [
                'id' => '9409021',
                'kabupaten_id' => '9409',
                'nama' => 'Bruyadori'
            ],
            [
                'id' => '9409022',
                'kabupaten_id' => '9409',
                'nama' => 'Poiru'
            ],
            [
                'id' => '9409030',
                'kabupaten_id' => '9409',
                'nama' => 'Padaido'
            ],
            [
                'id' => '9409031',
                'kabupaten_id' => '9409',
                'nama' => 'Aimando Padaido'
            ],
            [
                'id' => '9409040',
                'kabupaten_id' => '9409',
                'nama' => 'Biak Timur'
            ],
            [
                'id' => '9409041',
                'kabupaten_id' => '9409',
                'nama' => 'Oridek'
            ],
            [
                'id' => '9409050',
                'kabupaten_id' => '9409',
                'nama' => 'Biak Kota'
            ],
            [
                'id' => '9409060',
                'kabupaten_id' => '9409',
                'nama' => 'Samofa'
            ],
            [
                'id' => '9409070',
                'kabupaten_id' => '9409',
                'nama' => 'Yendidori'
            ],
            [
                'id' => '9409080',
                'kabupaten_id' => '9409',
                'nama' => 'Biak Utara'
            ],
            [
                'id' => '9409081',
                'kabupaten_id' => '9409',
                'nama' => 'Andey'
            ],
            [
                'id' => '9409090',
                'kabupaten_id' => '9409',
                'nama' => 'Warsa'
            ],
            [
                'id' => '9409091',
                'kabupaten_id' => '9409',
                'nama' => 'Yawosi'
            ],
            [
                'id' => '9409092',
                'kabupaten_id' => '9409',
                'nama' => 'Bondifuar'
            ],
            [
                'id' => '9409100',
                'kabupaten_id' => '9409',
                'nama' => 'Biak Barat'
            ],
            [
                'id' => '9409101',
                'kabupaten_id' => '9409',
                'nama' => 'Swandiwe'
            ],
            [
                'id' => '9410030',
                'kabupaten_id' => '9410',
                'nama' => 'Paniai Timur'
            ],
            [
                'id' => '9410031',
                'kabupaten_id' => '9410',
                'nama' => 'Yatamo'
            ],
            [
                'id' => '9410032',
                'kabupaten_id' => '9410',
                'nama' => 'Kebo'
            ],
            [
                'id' => '9410040',
                'kabupaten_id' => '9410',
                'nama' => 'Bibida'
            ],
            [
                'id' => '9410041',
                'kabupaten_id' => '9410',
                'nama' => 'Dumadama'
            ],
            [
                'id' => '9410070',
                'kabupaten_id' => '9410',
                'nama' => 'Aradide'
            ],
            [
                'id' => '9410071',
                'kabupaten_id' => '9410',
                'nama' => 'Ekadide'
            ],
            [
                'id' => '9410080',
                'kabupaten_id' => '9410',
                'nama' => 'Paniai Barat'
            ],
            [
                'id' => '9410081',
                'kabupaten_id' => '9410',
                'nama' => 'Siriwo'
            ],
            [
                'id' => '9410090',
                'kabupaten_id' => '9410',
                'nama' => 'Bogobaida'
            ],
            [
                'id' => '9411040',
                'kabupaten_id' => '9411',
                'nama' => 'Fawi'
            ],
            [
                'id' => '9411050',
                'kabupaten_id' => '9411',
                'nama' => 'Mulia'
            ],
            [
                'id' => '9411051',
                'kabupaten_id' => '9411',
                'nama' => 'Mewoluk'
            ],
            [
                'id' => '9411052',
                'kabupaten_id' => '9411',
                'nama' => 'Yamo'
            ],
            [
                'id' => '9411060',
                'kabupaten_id' => '9411',
                'nama' => 'Ilu'
            ],
            [
                'id' => '9411061',
                'kabupaten_id' => '9411',
                'nama' => 'Torere'
            ],
            [
                'id' => '9411062',
                'kabupaten_id' => '9411',
                'nama' => 'Jigonikme'
            ],
            [
                'id' => '9411070',
                'kabupaten_id' => '9411',
                'nama' => 'Tingginambut'
            ],
            [
                'id' => '9412010',
                'kabupaten_id' => '9412',
                'nama' => 'Mimika Barat'
            ],
            [
                'id' => '9412011',
                'kabupaten_id' => '9412',
                'nama' => 'Mimika Barat Jauh'
            ],
            [
                'id' => '9412012',
                'kabupaten_id' => '9412',
                'nama' => 'Mimika Barat Tengah'
            ],
            [
                'id' => '9412020',
                'kabupaten_id' => '9412',
                'nama' => 'Mimika Timur'
            ],
            [
                'id' => '9412021',
                'kabupaten_id' => '9412',
                'nama' => 'Mimika Tengah'
            ],
            [
                'id' => '9412022',
                'kabupaten_id' => '9412',
                'nama' => 'Mimika Timur Jauh'
            ],
            [
                'id' => '9412030',
                'kabupaten_id' => '9412',
                'nama' => 'Mimika Baru'
            ],
            [
                'id' => '9412031',
                'kabupaten_id' => '9412',
                'nama' => 'Kuala Kencana'
            ],
            [
                'id' => '9412032',
                'kabupaten_id' => '9412',
                'nama' => 'Tembagapura'
            ],
            [
                'id' => '9412040',
                'kabupaten_id' => '9412',
                'nama' => 'Agimuga'
            ],
            [
                'id' => '9412041',
                'kabupaten_id' => '9412',
                'nama' => 'Jila'
            ],
            [
                'id' => '9412042',
                'kabupaten_id' => '9412',
                'nama' => 'Jita'
            ],
            [
                'id' => '9413010',
                'kabupaten_id' => '9413',
                'nama' => 'Jair'
            ],
            [
                'id' => '9413011',
                'kabupaten_id' => '9413',
                'nama' => 'Subur'
            ],
            [
                'id' => '9413013',
                'kabupaten_id' => '9413',
                'nama' => 'Kia'
            ],
            [
                'id' => '9413020',
                'kabupaten_id' => '9413',
                'nama' => 'Mindiptana'
            ],
            [
                'id' => '9413021',
                'kabupaten_id' => '9413',
                'nama' => 'Iniyandit'
            ],
            [
                'id' => '9413022',
                'kabupaten_id' => '9413',
                'nama' => 'Kombut'
            ],
            [
                'id' => '9413023',
                'kabupaten_id' => '9413',
                'nama' => 'Sesnuk'
            ],
            [
                'id' => '9413030',
                'kabupaten_id' => '9413',
                'nama' => 'Mandobo'
            ],
            [
                'id' => '9413031',
                'kabupaten_id' => '9413',
                'nama' => 'Fofi'
            ],
            [
                'id' => '9413032',
                'kabupaten_id' => '9413',
                'nama' => 'Arimop'
            ],
            [
                'id' => '9413040',
                'kabupaten_id' => '9413',
                'nama' => 'Kouh'
            ],
            [
                'id' => '9413041',
                'kabupaten_id' => '9413',
                'nama' => 'Bomakia'
            ],
            [
                'id' => '9413042',
                'kabupaten_id' => '9413',
                'nama' => 'Firiwage'
            ],
            [
                'id' => '9413043',
                'kabupaten_id' => '9413',
                'nama' => 'Manggelum'
            ],
            [
                'id' => '9413044',
                'kabupaten_id' => '9413',
                'nama' => 'Yaniruma'
            ],
            [
                'id' => '9413045',
                'kabupaten_id' => '9413',
                'nama' => 'Kawagit'
            ],
            [
                'id' => '9413046',
                'kabupaten_id' => '9413',
                'nama' => 'Kombay'
            ],
            [
                'id' => '9413050',
                'kabupaten_id' => '9413',
                'nama' => 'Waropko'
            ],
            [
                'id' => '9413051',
                'kabupaten_id' => '9413',
                'nama' => 'Ambatkwi'
            ],
            [
                'id' => '9413052',
                'kabupaten_id' => '9413',
                'nama' => 'Ninati'
            ],
            [
                'id' => '9414010',
                'kabupaten_id' => '9414',
                'nama' => 'Nambioman Bapai'
            ],
            [
                'id' => '9414011',
                'kabupaten_id' => '9414',
                'nama' => 'Minyamur'
            ],
            [
                'id' => '9414020',
                'kabupaten_id' => '9414',
                'nama' => 'Edera'
            ],
            [
                'id' => '9414021',
                'kabupaten_id' => '9414',
                'nama' => 'Venaha'
            ],
            [
                'id' => '9414030',
                'kabupaten_id' => '9414',
                'nama' => 'Obaa'
            ],
            [
                'id' => '9414031',
                'kabupaten_id' => '9414',
                'nama' => 'Passue'
            ],
            [
                'id' => '9414040',
                'kabupaten_id' => '9414',
                'nama' => 'Haju'
            ],
            [
                'id' => '9414050',
                'kabupaten_id' => '9414',
                'nama' => 'Assue'
            ],
            [
                'id' => '9414060',
                'kabupaten_id' => '9414',
                'nama' => 'Citakmitak'
            ],
            [
                'id' => '9414061',
                'kabupaten_id' => '9414',
                'nama' => 'Kaibar'
            ],
            [
                'id' => '9415010',
                'kabupaten_id' => '9415',
                'nama' => 'Pantai Kasuari'
            ],
            [
                'id' => '9415020',
                'kabupaten_id' => '9415',
                'nama' => 'Fayit'
            ],
            [
                'id' => '9415030',
                'kabupaten_id' => '9415',
                'nama' => 'Atsy'
            ],
            [
                'id' => '9415040',
                'kabupaten_id' => '9415',
                'nama' => 'Suator'
            ],
            [
                'id' => '9415041',
                'kabupaten_id' => '9415',
                'nama' => 'Kolf Braza'
            ],
            [
                'id' => '9415050',
                'kabupaten_id' => '9415',
                'nama' => 'Akat'
            ],
            [
                'id' => '9415060',
                'kabupaten_id' => '9415',
                'nama' => 'Agats'
            ],
            [
                'id' => '9415070',
                'kabupaten_id' => '9415',
                'nama' => 'Sawa Erma'
            ],
            [
                'id' => '9415071',
                'kabupaten_id' => '9415',
                'nama' => 'Suru-suru'
            ],
            [
                'id' => '9415072',
                'kabupaten_id' => '9415',
                'nama' => 'Unir Sirau'
            ],
            [
                'id' => '9416010',
                'kabupaten_id' => '9416',
                'nama' => 'Kurima'
            ],
            [
                'id' => '9416011',
                'kabupaten_id' => '9416',
                'nama' => 'Musaik'
            ],
            [
                'id' => '9416013',
                'kabupaten_id' => '9416',
                'nama' => 'Dekai'
            ],
            [
                'id' => '9416014',
                'kabupaten_id' => '9416',
                'nama' => 'Obio'
            ],
            [
                'id' => '9416015',
                'kabupaten_id' => '9416',
                'nama' => 'Pasema'
            ],
            [
                'id' => '9416016',
                'kabupaten_id' => '9416',
                'nama' => 'Amuma'
            ],
            [
                'id' => '9416017',
                'kabupaten_id' => '9416',
                'nama' => 'Suru-suru'
            ],
            [
                'id' => '9416018',
                'kabupaten_id' => '9416',
                'nama' => 'Wusama'
            ],
            [
                'id' => '9416019',
                'kabupaten_id' => '9416',
                'nama' => 'Silimo'
            ],
            [
                'id' => '9416020',
                'kabupaten_id' => '9416',
                'nama' => 'Ninia'
            ],
            [
                'id' => '9416021',
                'kabupaten_id' => '9416',
                'nama' => 'Holuwon'
            ],
            [
                'id' => '9416022',
                'kabupaten_id' => '9416',
                'nama' => 'Lolat'
            ],
            [
                'id' => '9416023',
                'kabupaten_id' => '9416',
                'nama' => 'Langda'
            ],
            [
                'id' => '9416024',
                'kabupaten_id' => '9416',
                'nama' => 'Bomela'
            ],
            [
                'id' => '9416025',
                'kabupaten_id' => '9416',
                'nama' => 'Suntamon'
            ],
            [
                'id' => '9416026',
                'kabupaten_id' => '9416',
                'nama' => 'Sobaham'
            ],
            [
                'id' => '9416027',
                'kabupaten_id' => '9416',
                'nama' => 'Korupun'
            ],
            [
                'id' => '9416028',
                'kabupaten_id' => '9416',
                'nama' => 'Sela'
            ],
            [
                'id' => '9416029',
                'kabupaten_id' => '9416',
                'nama' => 'Kwelamdua'
            ],
            [
                'id' => '9416030',
                'kabupaten_id' => '9416',
                'nama' => 'Anggruk'
            ],
            [
                'id' => '9416031',
                'kabupaten_id' => '9416',
                'nama' => 'Panggema'
            ],
            [
                'id' => '9416032',
                'kabupaten_id' => '9416',
                'nama' => 'Walma'
            ],
            [
                'id' => '9416033',
                'kabupaten_id' => '9416',
                'nama' => 'Kosarek'
            ],
            [
                'id' => '9416034',
                'kabupaten_id' => '9416',
                'nama' => 'Ubahak'
            ],
            [
                'id' => '9416035',
                'kabupaten_id' => '9416',
                'nama' => 'Nalca'
            ],
            [
                'id' => '9416036',
                'kabupaten_id' => '9416',
                'nama' => 'Puldama'
            ],
            [
                'id' => '9416037',
                'kabupaten_id' => '9416',
                'nama' => 'Nipsan'
            ],
            [
                'id' => '9416041',
                'kabupaten_id' => '9416',
                'nama' => 'Samenage'
            ],
            [
                'id' => '9416042',
                'kabupaten_id' => '9416',
                'nama' => 'Tangma'
            ],
            [
                'id' => '9416043',
                'kabupaten_id' => '9416',
                'nama' => 'Soba'
            ],
            [
                'id' => '9416044',
                'kabupaten_id' => '9416',
                'nama' => 'Mugi'
            ],
            [
                'id' => '9416045',
                'kabupaten_id' => '9416',
                'nama' => 'Yogosem'
            ],
            [
                'id' => '9416046',
                'kabupaten_id' => '9416',
                'nama' => 'Kayo'
            ],
            [
                'id' => '9416047',
                'kabupaten_id' => '9416',
                'nama' => 'Sumo'
            ],
            [
                'id' => '9416048',
                'kabupaten_id' => '9416',
                'nama' => 'Hogio'
            ],
            [
                'id' => '9416049',
                'kabupaten_id' => '9416',
                'nama' => 'Ukha'
            ],
            [
                'id' => '9416051',
                'kabupaten_id' => '9416',
                'nama' => 'Werima'
            ],
            [
                'id' => '9416052',
                'kabupaten_id' => '9416',
                'nama' => 'Soloikma'
            ],
            [
                'id' => '9416053',
                'kabupaten_id' => '9416',
                'nama' => 'Seradala'
            ],
            [
                'id' => '9416054',
                'kabupaten_id' => '9416',
                'nama' => 'Kabianggama'
            ],
            [
                'id' => '9416055',
                'kabupaten_id' => '9416',
                'nama' => 'Kwikma'
            ],
            [
                'id' => '9416056',
                'kabupaten_id' => '9416',
                'nama' => 'Hilipuk'
            ],
            [
                'id' => '9416057',
                'kabupaten_id' => '9416',
                'nama' => 'Yahuliambut'
            ],
            [
                'id' => '9416058',
                'kabupaten_id' => '9416',
                'nama' => 'Hereapini'
            ],
            [
                'id' => '9416059',
                'kabupaten_id' => '9416',
                'nama' => 'Ubalihi'
            ],
            [
                'id' => '9416061',
                'kabupaten_id' => '9416',
                'nama' => 'Talambo'
            ],
            [
                'id' => '9416062',
                'kabupaten_id' => '9416',
                'nama' => 'Pronggoli'
            ],
            [
                'id' => '9416063',
                'kabupaten_id' => '9416',
                'nama' => 'Endomen'
            ],
            [
                'id' => '9416065',
                'kabupaten_id' => '9416',
                'nama' => 'Kona'
            ],
            [
                'id' => '9416066',
                'kabupaten_id' => '9416',
                'nama' => 'Duram'
            ],
            [
                'id' => '9416067',
                'kabupaten_id' => '9416',
                'nama' => 'Dirwemna'
            ],
            [
                'id' => '9417010',
                'kabupaten_id' => '9417',
                'nama' => 'Iwur'
            ],
            [
                'id' => '9417011',
                'kabupaten_id' => '9417',
                'nama' => 'Kawor'
            ],
            [
                'id' => '9417012',
                'kabupaten_id' => '9417',
                'nama' => 'Tarup'
            ],
            [
                'id' => '9417013',
                'kabupaten_id' => '9417',
                'nama' => 'Awinbon'
            ],
            [
                'id' => '9417020',
                'kabupaten_id' => '9417',
                'nama' => 'Oksibil'
            ],
            [
                'id' => '9417021',
                'kabupaten_id' => '9417',
                'nama' => 'Pepera'
            ],
            [
                'id' => '9417022',
                'kabupaten_id' => '9417',
                'nama' => 'Alemsom'
            ],
            [
                'id' => '9417023',
                'kabupaten_id' => '9417',
                'nama' => 'Serambakon'
            ],
            [
                'id' => '9417024',
                'kabupaten_id' => '9417',
                'nama' => 'Kolomdol'
            ],
            [
                'id' => '9417025',
                'kabupaten_id' => '9417',
                'nama' => 'Oksop'
            ],
            [
                'id' => '9417026',
                'kabupaten_id' => '9417',
                'nama' => 'Ok Bape'
            ],
            [
                'id' => '9417027',
                'kabupaten_id' => '9417',
                'nama' => 'Ok Aon'
            ],
            [
                'id' => '9417030',
                'kabupaten_id' => '9417',
                'nama' => 'Borme'
            ],
            [
                'id' => '9417031',
                'kabupaten_id' => '9417',
                'nama' => 'Bime'
            ],
            [
                'id' => '9417032',
                'kabupaten_id' => '9417',
                'nama' => 'Epumek'
            ],
            [
                'id' => '9417033',
                'kabupaten_id' => '9417',
                'nama' => 'Weime'
            ],
            [
                'id' => '9417034',
                'kabupaten_id' => '9417',
                'nama' => 'Pamek'
            ],
            [
                'id' => '9417035',
                'kabupaten_id' => '9417',
                'nama' => 'Nongme'
            ],
            [
                'id' => '9417036',
                'kabupaten_id' => '9417',
                'nama' => 'Batani'
            ],
            [
                'id' => '9417040',
                'kabupaten_id' => '9417',
                'nama' => 'Okbi'
            ],
            [
                'id' => '9417041',
                'kabupaten_id' => '9417',
                'nama' => 'Aboy'
            ],
            [
                'id' => '9417042',
                'kabupaten_id' => '9417',
                'nama' => 'Okbab'
            ],
            [
                'id' => '9417043',
                'kabupaten_id' => '9417',
                'nama' => 'Teiraplu'
            ],
            [
                'id' => '9417044',
                'kabupaten_id' => '9417',
                'nama' => 'Yefta'
            ],
            [
                'id' => '9417050',
                'kabupaten_id' => '9417',
                'nama' => 'Kiwirok'
            ],
            [
                'id' => '9417051',
                'kabupaten_id' => '9417',
                'nama' => 'Kiwirok Timur'
            ],
            [
                'id' => '9417052',
                'kabupaten_id' => '9417',
                'nama' => 'Oksebang'
            ],
            [
                'id' => '9417053',
                'kabupaten_id' => '9417',
                'nama' => 'Okhika'
            ],
            [
                'id' => '9417054',
                'kabupaten_id' => '9417',
                'nama' => 'Oklip'
            ],
            [
                'id' => '9417055',
                'kabupaten_id' => '9417',
                'nama' => 'Oksamol'
            ],
            [
                'id' => '9417056',
                'kabupaten_id' => '9417',
                'nama' => 'Okbemta'
            ],
            [
                'id' => '9417060',
                'kabupaten_id' => '9417',
                'nama' => 'Batom'
            ],
            [
                'id' => '9417061',
                'kabupaten_id' => '9417',
                'nama' => 'Murkim'
            ],
            [
                'id' => '9417062',
                'kabupaten_id' => '9417',
                'nama' => 'Mofinop'
            ],
            [
                'id' => '9418010',
                'kabupaten_id' => '9418',
                'nama' => 'Kanggime'
            ],
            [
                'id' => '9418011',
                'kabupaten_id' => '9418',
                'nama' => 'Woniki'
            ],
            [
                'id' => '9418012',
                'kabupaten_id' => '9418',
                'nama' => 'Nabunage'
            ],
            [
                'id' => '9418013',
                'kabupaten_id' => '9418',
                'nama' => 'Gilubandu'
            ],
            [
                'id' => '9418014',
                'kabupaten_id' => '9418',
                'nama' => 'Wakuo'
            ],
            [
                'id' => '9418020',
                'kabupaten_id' => '9418',
                'nama' => 'Karubaga'
            ],
            [
                'id' => '9418021',
                'kabupaten_id' => '9418',
                'nama' => 'Goyage'
            ],
            [
                'id' => '9418022',
                'kabupaten_id' => '9418',
                'nama' => 'Wunin'
            ],
            [
                'id' => '9418023',
                'kabupaten_id' => '9418',
                'nama' => 'Kondaga'
            ],
            [
                'id' => '9418024',
                'kabupaten_id' => '9418',
                'nama' => 'Nelawi'
            ],
            [
                'id' => '9418025',
                'kabupaten_id' => '9418',
                'nama' => 'Kuari'
            ],
            [
                'id' => '9418030',
                'kabupaten_id' => '9418',
                'nama' => 'Bokondini'
            ],
            [
                'id' => '9418031',
                'kabupaten_id' => '9418',
                'nama' => 'Bokoneri'
            ],
            [
                'id' => '9418032',
                'kabupaten_id' => '9418',
                'nama' => 'Bewani'
            ],
            [
                'id' => '9418040',
                'kabupaten_id' => '9418',
                'nama' => 'Kembu'
            ],
            [
                'id' => '9418041',
                'kabupaten_id' => '9418',
                'nama' => 'Wina'
            ],
            [
                'id' => '9418042',
                'kabupaten_id' => '9418',
                'nama' => 'Umagi'
            ],
            [
                'id' => '9418043',
                'kabupaten_id' => '9418',
                'nama' => 'Panaga'
            ],
            [
                'id' => '9418044',
                'kabupaten_id' => '9418',
                'nama' => 'Poganeri'
            ],
            [
                'id' => '9418045',
                'kabupaten_id' => '9418',
                'nama' => 'Kamboneri'
            ],
            [
                'id' => '9418046',
                'kabupaten_id' => '9418',
                'nama' => 'Air Garam'
            ],
            [
                'id' => '9418047',
                'kabupaten_id' => '9418',
                'nama' => 'Dow'
            ],
            [
                'id' => '9418048',
                'kabupaten_id' => '9418',
                'nama' => 'Wari / Taiyeve'
            ],
            [
                'id' => '9418049',
                'kabupaten_id' => '9418',
                'nama' => 'Egiam'
            ],
            [
                'id' => '9418051',
                'kabupaten_id' => '9418',
                'nama' => 'Nunggawi'
            ],
            [
                'id' => '9418060',
                'kabupaten_id' => '9418',
                'nama' => 'Kubu'
            ],
            [
                'id' => '9418070',
                'kabupaten_id' => '9418',
                'nama' => 'Geya'
            ],
            [
                'id' => '9418080',
                'kabupaten_id' => '9418',
                'nama' => 'Numba'
            ],
            [
                'id' => '9418090',
                'kabupaten_id' => '9418',
                'nama' => 'Dundu'
            ],
            [
                'id' => '9418100',
                'kabupaten_id' => '9418',
                'nama' => 'Gundagi'
            ],
            [
                'id' => '9418110',
                'kabupaten_id' => '9418',
                'nama' => 'Timori'
            ],
            [
                'id' => '9418121',
                'kabupaten_id' => '9418',
                'nama' => 'Yuneri'
            ],
            [
                'id' => '9418122',
                'kabupaten_id' => '9418',
                'nama' => 'Tagineri'
            ],
            [
                'id' => '9418123',
                'kabupaten_id' => '9418',
                'nama' => 'Dorman'
            ],
            [
                'id' => '9418124',
                'kabupaten_id' => '9418',
                'nama' => 'Sbey'
            ],
            [
                'id' => '9419021',
                'kabupaten_id' => '9419',
                'nama' => 'Pantai Timur Bagian Barat'
            ],
            [
                'id' => '9419022',
                'kabupaten_id' => '9419',
                'nama' => 'Pantai Timur'
            ],
            [
                'id' => '9419031',
                'kabupaten_id' => '9419',
                'nama' => 'Bonggo'
            ],
            [
                'id' => '9419032',
                'kabupaten_id' => '9419',
                'nama' => 'Bonggo Timur'
            ],
            [
                'id' => '9419040',
                'kabupaten_id' => '9419',
                'nama' => 'Tor Atas'
            ],
            [
                'id' => '9419050',
                'kabupaten_id' => '9419',
                'nama' => 'Sarmi'
            ],
            [
                'id' => '9419051',
                'kabupaten_id' => '9419',
                'nama' => 'Sarmi Timur'
            ],
            [
                'id' => '9419052',
                'kabupaten_id' => '9419',
                'nama' => 'Sarmi Selatan'
            ],
            [
                'id' => '9419060',
                'kabupaten_id' => '9419',
                'nama' => 'Pantai Barat'
            ],
            [
                'id' => '9419061',
                'kabupaten_id' => '9419',
                'nama' => 'Apawer Hulu'
            ],
            [
                'id' => '9420010',
                'kabupaten_id' => '9420',
                'nama' => 'Web'
            ],
            [
                'id' => '9420011',
                'kabupaten_id' => '9420',
                'nama' => 'Towe Hitam'
            ],
            [
                'id' => '9420020',
                'kabupaten_id' => '9420',
                'nama' => 'Senggi'
            ],
            [
                'id' => '9420030',
                'kabupaten_id' => '9420',
                'nama' => 'Waris'
            ],
            [
                'id' => '9420040',
                'kabupaten_id' => '9420',
                'nama' => 'Arso'
            ],
            [
                'id' => '9420041',
                'kabupaten_id' => '9420',
                'nama' => 'Arso Timur'
            ],
            [
                'id' => '9420050',
                'kabupaten_id' => '9420',
                'nama' => 'Skanto'
            ],
            [
                'id' => '9426010',
                'kabupaten_id' => '9426',
                'nama' => 'Waropen Bawah'
            ],
            [
                'id' => '9426011',
                'kabupaten_id' => '9426',
                'nama' => 'Inggerus'
            ],
            [
                'id' => '9426012',
                'kabupaten_id' => '9426',
                'nama' => 'Urei Faisei'
            ],
            [
                'id' => '9426013',
                'kabupaten_id' => '9426',
                'nama' => 'Oudate'
            ],
            [
                'id' => '9426014',
                'kabupaten_id' => '9426',
                'nama' => 'Wapoga'
            ],
            [
                'id' => '9426020',
                'kabupaten_id' => '9426',
                'nama' => 'Masirei'
            ],
            [
                'id' => '9426021',
                'kabupaten_id' => '9426',
                'nama' => 'Risei Sayati'
            ],
            [
                'id' => '9426022',
                'kabupaten_id' => '9426',
                'nama' => 'Demba'
            ],
            [
                'id' => '9426030',
                'kabupaten_id' => '9426',
                'nama' => 'Walani'
            ],
            [
                'id' => '9426040',
                'kabupaten_id' => '9426',
                'nama' => 'Kirihi'
            ],
            [
                'id' => '9427010',
                'kabupaten_id' => '9427',
                'nama' => 'Supiori Selatan'
            ],
            [
                'id' => '9427011',
                'kabupaten_id' => '9427',
                'nama' => 'Kepulauan Aruri'
            ],
            [
                'id' => '9427020',
                'kabupaten_id' => '9427',
                'nama' => 'Supiori Utara'
            ],
            [
                'id' => '9427021',
                'kabupaten_id' => '9427',
                'nama' => 'Supiori Barat'
            ],
            [
                'id' => '9427030',
                'kabupaten_id' => '9427',
                'nama' => 'Supiori Timur'
            ],
            [
                'id' => '9428030',
                'kabupaten_id' => '9428',
                'nama' => 'Waropen Atas'
            ],
            [
                'id' => '9428031',
                'kabupaten_id' => '9428',
                'nama' => 'Benuki'
            ],
            [
                'id' => '9428032',
                'kabupaten_id' => '9428',
                'nama' => 'Sawai'
            ],
            [
                'id' => '9428040',
                'kabupaten_id' => '9428',
                'nama' => 'Mamberamo Ilir'
            ],
            [
                'id' => '9428050',
                'kabupaten_id' => '9428',
                'nama' => 'Mamberamo Tengah'
            ],
            [
                'id' => '9428060',
                'kabupaten_id' => '9428',
                'nama' => 'Mamberamo Tengah Timur'
            ],
            [
                'id' => '9428070',
                'kabupaten_id' => '9428',
                'nama' => 'Rofaer'
            ],
            [
                'id' => '9428080',
                'kabupaten_id' => '9428',
                'nama' => 'Mamberamo Ulu'
            ],
            [
                'id' => '9429010',
                'kabupaten_id' => '9429',
                'nama' => 'Wosak'
            ],
            [
                'id' => '9429020',
                'kabupaten_id' => '9429',
                'nama' => 'Kenyam'
            ],
            [
                'id' => '9429030',
                'kabupaten_id' => '9429',
                'nama' => 'Geselma'
            ],
            [
                'id' => '9429040',
                'kabupaten_id' => '9429',
                'nama' => 'Mapenduma'
            ],
            [
                'id' => '9429050',
                'kabupaten_id' => '9429',
                'nama' => 'Mugi'
            ],
            [
                'id' => '9429060',
                'kabupaten_id' => '9429',
                'nama' => 'Yigi'
            ],
            [
                'id' => '9429070',
                'kabupaten_id' => '9429',
                'nama' => 'Mbuwa'
            ],
            [
                'id' => '9429080',
                'kabupaten_id' => '9429',
                'nama' => 'Gearek'
            ],
            [
                'id' => '9430010',
                'kabupaten_id' => '9430',
                'nama' => 'Makki'
            ],
            [
                'id' => '9430020',
                'kabupaten_id' => '9430',
                'nama' => 'Pirime'
            ],
            [
                'id' => '9430030',
                'kabupaten_id' => '9430',
                'nama' => 'Tiom'
            ],
            [
                'id' => '9430040',
                'kabupaten_id' => '9430',
                'nama' => 'Balingga'
            ],
            [
                'id' => '9430050',
                'kabupaten_id' => '9430',
                'nama' => 'Kuyawage'
            ],
            [
                'id' => '9430060',
                'kabupaten_id' => '9430',
                'nama' => 'Malagaineri'
            ],
            [
                'id' => '9430070',
                'kabupaten_id' => '9430',
                'nama' => 'Tiomneri'
            ],
            [
                'id' => '9430080',
                'kabupaten_id' => '9430',
                'nama' => 'Dimba'
            ],
            [
                'id' => '9430090',
                'kabupaten_id' => '9430',
                'nama' => 'Gamelia'
            ],
            [
                'id' => '9430100',
                'kabupaten_id' => '9430',
                'nama' => 'Poga'
            ],
            [
                'id' => '9431010',
                'kabupaten_id' => '9431',
                'nama' => 'Kobakma'
            ],
            [
                'id' => '9431020',
                'kabupaten_id' => '9431',
                'nama' => 'Ilugwa'
            ],
            [
                'id' => '9431030',
                'kabupaten_id' => '9431',
                'nama' => 'Kelila'
            ],
            [
                'id' => '9431040',
                'kabupaten_id' => '9431',
                'nama' => 'Eragayam'
            ],
            [
                'id' => '9431050',
                'kabupaten_id' => '9431',
                'nama' => 'Megambilis'
            ],
            [
                'id' => '9432010',
                'kabupaten_id' => '9432',
                'nama' => 'Welarek'
            ],
            [
                'id' => '9432020',
                'kabupaten_id' => '9432',
                'nama' => 'Apalapsili'
            ],
            [
                'id' => '9432030',
                'kabupaten_id' => '9432',
                'nama' => 'Abenaho'
            ],
            [
                'id' => '9432040',
                'kabupaten_id' => '9432',
                'nama' => 'Elelim'
            ],
            [
                'id' => '9432050',
                'kabupaten_id' => '9432',
                'nama' => 'Benawa'
            ],
            [
                'id' => '9433010',
                'kabupaten_id' => '9433',
                'nama' => 'Agadugume'
            ],
            [
                'id' => '9433020',
                'kabupaten_id' => '9433',
                'nama' => 'Gome'
            ],
            [
                'id' => '9433030',
                'kabupaten_id' => '9433',
                'nama' => 'Ilaga'
            ],
            [
                'id' => '9433040',
                'kabupaten_id' => '9433',
                'nama' => 'Sinak'
            ],
            [
                'id' => '9433050',
                'kabupaten_id' => '9433',
                'nama' => 'Pogoma'
            ],
            [
                'id' => '9433060',
                'kabupaten_id' => '9433',
                'nama' => 'Wangbe'
            ],
            [
                'id' => '9433070',
                'kabupaten_id' => '9433',
                'nama' => 'Beoga'
            ],
            [
                'id' => '9433080',
                'kabupaten_id' => '9433',
                'nama' => 'Doufo'
            ],
            [
                'id' => '9434010',
                'kabupaten_id' => '9434',
                'nama' => 'Sukikai Selatan'
            ],
            [
                'id' => '9434020',
                'kabupaten_id' => '9434',
                'nama' => 'Piyaiye'
            ],
            [
                'id' => '9434030',
                'kabupaten_id' => '9434',
                'nama' => 'Mapia Barat'
            ],
            [
                'id' => '9434040',
                'kabupaten_id' => '9434',
                'nama' => 'Mapia Tengah'
            ],
            [
                'id' => '9434050',
                'kabupaten_id' => '9434',
                'nama' => 'Mapia'
            ],
            [
                'id' => '9434060',
                'kabupaten_id' => '9434',
                'nama' => 'Dogiyai'
            ],
            [
                'id' => '9434070',
                'kabupaten_id' => '9434',
                'nama' => 'Kamu Selatan'
            ],
            [
                'id' => '9434080',
                'kabupaten_id' => '9434',
                'nama' => 'Kamu'
            ],
            [
                'id' => '9434090',
                'kabupaten_id' => '9434',
                'nama' => 'Kamu Timur'
            ],
            [
                'id' => '9434100',
                'kabupaten_id' => '9434',
                'nama' => 'Kamu Utara'
            ],
            [
                'id' => '9435010',
                'kabupaten_id' => '9435',
                'nama' => 'Homeyo'
            ],
            [
                'id' => '9435020',
                'kabupaten_id' => '9435',
                'nama' => 'Sugapa'
            ],
            [
                'id' => '9435030',
                'kabupaten_id' => '9435',
                'nama' => 'Hitadipa'
            ],
            [
                'id' => '9435040',
                'kabupaten_id' => '9435',
                'nama' => 'Agisiga'
            ],
            [
                'id' => '9435050',
                'kabupaten_id' => '9435',
                'nama' => 'Biandoga'
            ],
            [
                'id' => '9435060',
                'kabupaten_id' => '9435',
                'nama' => 'Wandai'
            ],
            [
                'id' => '9436010',
                'kabupaten_id' => '9436',
                'nama' => 'Kapiraya'
            ],
            [
                'id' => '9436020',
                'kabupaten_id' => '9436',
                'nama' => 'Tigi Barat'
            ],
            [
                'id' => '9436030',
                'kabupaten_id' => '9436',
                'nama' => 'Tigi'
            ],
            [
                'id' => '9436040',
                'kabupaten_id' => '9436',
                'nama' => 'Tigi Timur'
            ],
            [
                'id' => '9436050',
                'kabupaten_id' => '9436',
                'nama' => 'Bowobado'
            ],
            [
                'id' => '9471010',
                'kabupaten_id' => '9471',
                'nama' => 'Muara Tami'
            ],
            [
                'id' => '9471020',
                'kabupaten_id' => '9471',
                'nama' => 'Abepura'
            ],
            [
                'id' => '9471021',
                'kabupaten_id' => '9471',
                'nama' => 'Heram'
            ],
            [
                'id' => '9471030',
                'kabupaten_id' => '9471',
                'nama' => 'Jayapura Selatan'
            ],
            [
                'id' => '9471040',
                'kabupaten_id' => '9471',
                'nama' => 'Jayapura Utara'
            ]
        ]);
    }
}
