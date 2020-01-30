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
    }
  }
