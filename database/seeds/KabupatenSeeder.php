<?php

use App\Models\Kabupaten;
use Illuminate\Database\Seeder;

class KabupatenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Kabupaten::truncate();
        Kabupaten::insert([
            [
               'id' => '1101',
               'provinsi_id' => '11',
               'nama' => 'Kab. Simeulue'
            ],
            [
               'id' => '1102',
               'provinsi_id' => '11',
               'nama' => 'Kab. Aceh Singkil'
            ],
            [
               'id' => '1103',
               'provinsi_id' => '11',
               'nama' => 'Kab. Aceh Selatan'
            ],
            [
               'id' => '1104',
               'provinsi_id' => '11',
               'nama' => 'Kab. Aceh Tenggara'
            ],
            [
               'id' => '1105',
               'provinsi_id' => '11',
               'nama' => 'Kab. Aceh Timur'
            ],
            [
               'id' => '1106',
               'provinsi_id' => '11',
               'nama' => 'Kab. Aceh Tengah'
            ],
            [
               'id' => '1107',
               'provinsi_id' => '11',
               'nama' => 'Kab. Aceh Barat'
            ],
            [
               'id' => '1108',
               'provinsi_id' => '11',
               'nama' => 'Kab. Aceh Besar'
            ],
            [
               'id' => '1109',
               'provinsi_id' => '11',
               'nama' => 'Kab. Pidie'
            ],
            [
               'id' => '1110',
               'provinsi_id' => '11',
               'nama' => 'Kab. Bireuen'
            ],
            [
               'id' => '1111',
               'provinsi_id' => '11',
               'nama' => 'Kab. Aceh Utara'
            ],
            [
               'id' => '1112',
               'provinsi_id' => '11',
               'nama' => 'Kab. Aceh Barat Daya'
            ],
            [
               'id' => '1113',
               'provinsi_id' => '11',
               'nama' => 'Kab. Gayo Lues'
            ],
            [
               'id' => '1114',
               'provinsi_id' => '11',
               'nama' => 'Kab. Aceh Tamiang'
            ],
            [
               'id' => '1115',
               'provinsi_id' => '11',
               'nama' => 'Kab. Nagan Raya'
            ],
            [
               'id' => '1116',
               'provinsi_id' => '11',
               'nama' => 'Kab. Aceh Jaya'
            ],
            [
               'id' => '1117',
               'provinsi_id' => '11',
               'nama' => 'Kab. Bener Meriah'
            ],
            [
               'id' => '1118',
               'provinsi_id' => '11',
               'nama' => 'Kab. Pidie Jaya'
            ],
            [
               'id' => '1171',
               'provinsi_id' => '11',
               'nama' => 'Kota Banda Aceh'
            ],
            [
               'id' => '1172',
               'provinsi_id' => '11',
               'nama' => 'Kota Sabang'
            ],
            [
               'id' => '1173',
               'provinsi_id' => '11',
               'nama' => 'Kota Langsa'
            ],
            [
               'id' => '1174',
               'provinsi_id' => '11',
               'nama' => 'Kota Lhokseumawe'
            ],
            [
               'id' => '1175',
               'provinsi_id' => '11',
               'nama' => 'Kota Subulussalam'
            ],
            [
               'id' => '1201',
               'provinsi_id' => '12',
               'nama' => 'Kab. Nias'
            ],
            [
               'id' => '1202',
               'provinsi_id' => '12',
               'nama' => 'Kab. Mandailing Natal'
            ],
            [
               'id' => '1203',
               'provinsi_id' => '12',
               'nama' => 'Kab. Tapanuli Selatan'
            ],
            [
               'id' => '1204',
               'provinsi_id' => '12',
               'nama' => 'Kab. Tapanuli Tengah'
            ],
            [
               'id' => '1205',
               'provinsi_id' => '12',
               'nama' => 'Kab. Tapanuli Utara'
            ],
            [
               'id' => '1206',
               'provinsi_id' => '12',
               'nama' => 'Kab. Toba Samosir'
            ],
            [
               'id' => '1207',
               'provinsi_id' => '12',
               'nama' => 'Kab. Labuhan Batu'
            ],
            [
               'id' => '1208',
               'provinsi_id' => '12',
               'nama' => 'Kab. Asahan'
            ],
            [
               'id' => '1209',
               'provinsi_id' => '12',
               'nama' => 'Kab. Simalungun'
            ],
            [
               'id' => '1210',
               'provinsi_id' => '12',
               'nama' => 'Kab. Dairi'
            ],
            [
               'id' => '1211',
               'provinsi_id' => '12',
               'nama' => 'Kab. Karo'
            ],
            [
               'id' => '1212',
               'provinsi_id' => '12',
               'nama' => 'Kab. Deli Serdang'
            ],
            [
               'id' => '1213',
               'provinsi_id' => '12',
               'nama' => 'Kab. Langkat'
            ],
            [
               'id' => '1214',
               'provinsi_id' => '12',
               'nama' => 'Kab. Nias Selatan'
            ],
            [
               'id' => '1215',
               'provinsi_id' => '12',
               'nama' => 'Kab. Humbang Hasundutan'
            ],
            [
               'id' => '1216',
               'provinsi_id' => '12',
               'nama' => 'Kab. Pakpak Bharat'
            ],
            [
               'id' => '1217',
               'provinsi_id' => '12',
               'nama' => 'Kab. Samosir'
            ],
            [
               'id' => '1218',
               'provinsi_id' => '12',
               'nama' => 'Kab. Serdang Bedagai'
            ],
            [
               'id' => '1219',
               'provinsi_id' => '12',
               'nama' => 'Kab. Batu Bara'
            ],
            [
               'id' => '1220',
               'provinsi_id' => '12',
               'nama' => 'Kab. Padang Lawas Utara'
            ],
            [
               'id' => '1221',
               'provinsi_id' => '12',
               'nama' => 'Kab. Padang Lawas'
            ],
            [
               'id' => '1222',
               'provinsi_id' => '12',
               'nama' => 'Kab. Labuhan Batu Selatan'
            ],
            [
               'id' => '1223',
               'provinsi_id' => '12',
               'nama' => 'Kab. Labuhan Batu Utara'
            ],
            [
               'id' => '1224',
               'provinsi_id' => '12',
               'nama' => 'Kab. Nias Utara'
            ],
            [
               'id' => '1225',
               'provinsi_id' => '12',
               'nama' => 'Kab. Nias Barat'
            ],
            [
               'id' => '1271',
               'provinsi_id' => '12',
               'nama' => 'Kota Sibolga'
            ],
            [
               'id' => '1272',
               'provinsi_id' => '12',
               'nama' => 'Kota Tanjung Balai'
            ],
            [
               'id' => '1273',
               'provinsi_id' => '12',
               'nama' => 'Kota Pematang Siantar'
            ],
            [
               'id' => '1274',
               'provinsi_id' => '12',
               'nama' => 'Kota Tebing Tinggi'
            ],
            [
               'id' => '1275',
               'provinsi_id' => '12',
               'nama' => 'Kota Medan'
            ],
            [
               'id' => '1276',
               'provinsi_id' => '12',
               'nama' => 'Kota Binjai'
            ],
            [
               'id' => '1277',
               'provinsi_id' => '12',
               'nama' => 'Kota Padangsidimpuan'
            ],
            [
               'id' => '1278',
               'provinsi_id' => '12',
               'nama' => 'Kota Gunungsitoli'
            ],
            [
               'id' => '1301',
               'provinsi_id' => '13',
               'nama' => 'Kab. Kepulauan Mentawai'
            ],
            [
               'id' => '1302',
               'provinsi_id' => '13',
               'nama' => 'Kab. Pesisir Selatan'
            ],
            [
               'id' => '1303',
               'provinsi_id' => '13',
               'nama' => 'Kab. Solok'
            ],
            [
               'id' => '1304',
               'provinsi_id' => '13',
               'nama' => 'Kab. Sijunjung'
            ],
            [
               'id' => '1305',
               'provinsi_id' => '13',
               'nama' => 'Kab. Tanah Datar'
            ],
            [
               'id' => '1306',
               'provinsi_id' => '13',
               'nama' => 'Kab. Padang Pariaman'
            ],
            [
               'id' => '1307',
               'provinsi_id' => '13',
               'nama' => 'Kab. Agam'
            ],
            [
               'id' => '1308',
               'provinsi_id' => '13',
               'nama' => 'Kab. Lima Puluh Kota'
            ],
            [
               'id' => '1309',
               'provinsi_id' => '13',
               'nama' => 'Kab. Pasaman'
            ],
            [
               'id' => '1310',
               'provinsi_id' => '13',
               'nama' => 'Kab. Solok Selatan'
            ],
            [
               'id' => '1311',
               'provinsi_id' => '13',
               'nama' => 'Kab. Dharmasraya'
            ],
            [
               'id' => '1312',
               'provinsi_id' => '13',
               'nama' => 'Kab. Pasaman Barat'
            ],
            [
               'id' => '1371',
               'provinsi_id' => '13',
               'nama' => 'Kota Padang'
            ],
            [
               'id' => '1372',
               'provinsi_id' => '13',
               'nama' => 'Kota Solok'
            ],
            [
               'id' => '1373',
               'provinsi_id' => '13',
               'nama' => 'Kota Sawah Lunto'
            ],
            [
               'id' => '1374',
               'provinsi_id' => '13',
               'nama' => 'Kota Padang Panjang'
            ],
            [
               'id' => '1375',
               'provinsi_id' => '13',
               'nama' => 'Kota Bukittinggi'
            ],
            [
               'id' => '1376',
               'provinsi_id' => '13',
               'nama' => 'Kota Payakumbuh'
            ],
            [
               'id' => '1377',
               'provinsi_id' => '13',
               'nama' => 'Kota Pariaman'
            ],
            [
               'id' => '1401',
               'provinsi_id' => '14',
               'nama' => 'Kab. Kuantan Singingi'
            ],
            [
               'id' => '1402',
               'provinsi_id' => '14',
               'nama' => 'Kab. Indragiri Hulu'
            ],
            [
               'id' => '1403',
               'provinsi_id' => '14',
               'nama' => 'Kab. Indragiri Hilir'
            ],
            [
               'id' => '1404',
               'provinsi_id' => '14',
               'nama' => 'Kab. Pelalawan'
            ],
            [
               'id' => '1405',
               'provinsi_id' => '14',
               'nama' => 'Kab. Siak'
            ],
            [
               'id' => '1406',
               'provinsi_id' => '14',
               'nama' => 'Kab. Kampar'
            ],
            [
               'id' => '1407',
               'provinsi_id' => '14',
               'nama' => 'Kab. Rokan Hulu'
            ],
            [
               'id' => '1408',
               'provinsi_id' => '14',
               'nama' => 'Kab. Bengkalis'
            ],
            [
               'id' => '1409',
               'provinsi_id' => '14',
               'nama' => 'Kab. Rokan Hilir'
            ],
            [
               'id' => '1410',
               'provinsi_id' => '14',
               'nama' => 'Kab. Kepulauan Meranti'
            ],
            [
               'id' => '1471',
               'provinsi_id' => '14',
               'nama' => 'Kota Pekanbaru'
            ],
            [
               'id' => '1473',
               'provinsi_id' => '14',
               'nama' => 'Kota Dumai'
            ],
            [
               'id' => '1501',
               'provinsi_id' => '15',
               'nama' => 'Kab. Kerinci'
            ],
            [
               'id' => '1502',
               'provinsi_id' => '15',
               'nama' => 'Kab. Merangin'
            ],
            [
               'id' => '1503',
               'provinsi_id' => '15',
               'nama' => 'Kab. Sarolangun'
            ],
            [
               'id' => '1504',
               'provinsi_id' => '15',
               'nama' => 'Kab. Batang Hari'
            ],
            [
               'id' => '1505',
               'provinsi_id' => '15',
               'nama' => 'Kab. Muaro Jambi'
            ],
            [
               'id' => '1506',
               'provinsi_id' => '15',
               'nama' => 'Kab. Tanjung Jabung Timur'
            ],
            [
               'id' => '1507',
               'provinsi_id' => '15',
               'nama' => 'Kab. Tanjung Jabung Barat'
            ],
            [
               'id' => '1508',
               'provinsi_id' => '15',
               'nama' => 'Kab. Tebo'
            ],
            [
               'id' => '1509',
               'provinsi_id' => '15',
               'nama' => 'Kab. Bungo'
            ],
            [
               'id' => '1571',
               'provinsi_id' => '15',
               'nama' => 'Kota Jambi'
            ],
            [
               'id' => '1572',
               'provinsi_id' => '15',
               'nama' => 'Kota Sungai Penuh'
            ],
            [
               'id' => '1601',
               'provinsi_id' => '16',
               'nama' => 'Kab. Ogan Komering Ulu'
            ],
            [
               'id' => '1602',
               'provinsi_id' => '16',
               'nama' => 'Kab. Ogan Komering Ilir'
            ],
            [
               'id' => '1603',
               'provinsi_id' => '16',
               'nama' => 'Kab. Muara Enim'
            ],
            [
               'id' => '1604',
               'provinsi_id' => '16',
               'nama' => 'Kab. Lahat'
            ],
            [
               'id' => '1605',
               'provinsi_id' => '16',
               'nama' => 'Kab. Musi Rawas'
            ],
            [
               'id' => '1606',
               'provinsi_id' => '16',
               'nama' => 'Kab. Musi Banyuasin'
            ],
            [
               'id' => '1607',
               'provinsi_id' => '16',
               'nama' => 'Kab. Banyu Asin'
            ],
            [
               'id' => '1608',
               'provinsi_id' => '16',
               'nama' => 'Kab. Ogan Komering Ulu Selatan'
            ],
            [
               'id' => '1609',
               'provinsi_id' => '16',
               'nama' => 'Kab. Ogan Komering Ulu Timur'
            ],
            [
               'id' => '1610',
               'provinsi_id' => '16',
               'nama' => 'Kab. Ogan Ilir'
            ],
            [
               'id' => '1611',
               'provinsi_id' => '16',
               'nama' => 'Kab. Empat Lawang'
            ],
            [
               'id' => '1671',
               'provinsi_id' => '16',
               'nama' => 'Kota Palembang'
            ],
            [
               'id' => '1672',
               'provinsi_id' => '16',
               'nama' => 'Kota Prabumulih'
            ],
            [
               'id' => '1673',
               'provinsi_id' => '16',
               'nama' => 'Kota Pagar Alam'
            ],
            [
               'id' => '1674',
               'provinsi_id' => '16',
               'nama' => 'Kota Lubuklinggau'
            ],
            [
               'id' => '1701',
               'provinsi_id' => '17',
               'nama' => 'Kab. Bengkulu Selatan'
            ],
            [
               'id' => '1702',
               'provinsi_id' => '17',
               'nama' => 'Kab. Rejang Lebong'
            ],
            [
               'id' => '1703',
               'provinsi_id' => '17',
               'nama' => 'Kab. Bengkulu Utara'
            ],
            [
               'id' => '1704',
               'provinsi_id' => '17',
               'nama' => 'Kab. Kaur'
            ],
            [
               'id' => '1705',
               'provinsi_id' => '17',
               'nama' => 'Kab. Seluma'
            ],
            [
               'id' => '1706',
               'provinsi_id' => '17',
               'nama' => 'Kab. Mukomuko'
            ],
            [
               'id' => '1707',
               'provinsi_id' => '17',
               'nama' => 'Kab. Lebong'
            ],
            [
               'id' => '1708',
               'provinsi_id' => '17',
               'nama' => 'Kab. Kepahiang'
            ],
            [
               'id' => '1709',
               'provinsi_id' => '17',
               'nama' => 'Kab. Bengkulu Tengah'
            ],
            [
               'id' => '1771',
               'provinsi_id' => '17',
               'nama' => 'Kota Bengkulu'
            ],
            [
               'id' => '1801',
               'provinsi_id' => '18',
               'nama' => 'Kab. Lampung Barat'
            ],
            [
               'id' => '1802',
               'provinsi_id' => '18',
               'nama' => 'Kab. Tanggamus'
            ],
            [
               'id' => '1803',
               'provinsi_id' => '18',
               'nama' => 'Kab. Lampung Selatan'
            ],
            [
               'id' => '1804',
               'provinsi_id' => '18',
               'nama' => 'Kab. Lampung Timur'
            ],
            [
               'id' => '1805',
               'provinsi_id' => '18',
               'nama' => 'Kab. Lampung Tengah'
            ],
            [
               'id' => '1806',
               'provinsi_id' => '18',
               'nama' => 'Kab. Lampung Utara'
            ],
            [
               'id' => '1807',
               'provinsi_id' => '18',
               'nama' => 'Kab. Way Kanan'
            ],
            [
               'id' => '1808',
               'provinsi_id' => '18',
               'nama' => 'Kab. Tulangbawang'
            ],
            [
               'id' => '1809',
               'provinsi_id' => '18',
               'nama' => 'Kab. Pesawaran'
            ],
            [
               'id' => '1810',
               'provinsi_id' => '18',
               'nama' => 'Kab. Pringsewu'
            ],
            [
               'id' => '1811',
               'provinsi_id' => '18',
               'nama' => 'Kab. Mesuji'
            ],
            [
               'id' => '1812',
               'provinsi_id' => '18',
               'nama' => 'Kab. Tulang Bawang Barat'
            ],
            [
               'id' => '1813',
               'provinsi_id' => '18',
               'nama' => 'Kab. Pesisir Barat'
            ],
            [
               'id' => '1871',
               'provinsi_id' => '18',
               'nama' => 'Kota Bandar Lampung'
            ],
            [
               'id' => '1872',
               'provinsi_id' => '18',
               'nama' => 'Kota Metro'
            ],
            [
               'id' => '1901',
               'provinsi_id' => '19',
               'nama' => 'Kab. Bangka'
            ],
            [
               'id' => '1902',
               'provinsi_id' => '19',
               'nama' => 'Kab. Belitung'
            ],
            [
               'id' => '1903',
               'provinsi_id' => '19',
               'nama' => 'Kab. Bangka Barat'
            ],
            [
               'id' => '1904',
               'provinsi_id' => '19',
               'nama' => 'Kab. Bangka Tengah'
            ],
            [
               'id' => '1905',
               'provinsi_id' => '19',
               'nama' => 'Kab. Bangka Selatan'
            ],
            [
               'id' => '1906',
               'provinsi_id' => '19',
               'nama' => 'Kab. Belitung Timur'
            ],
            [
               'id' => '1971',
               'provinsi_id' => '19',
               'nama' => 'Kota Pangkal Pinang'
            ],
            [
               'id' => '2101',
               'provinsi_id' => '21',
               'nama' => 'Kab. Karimun'
            ],
            [
               'id' => '2102',
               'provinsi_id' => '21',
               'nama' => 'Kab. Bintan'
            ],
            [
               'id' => '2103',
               'provinsi_id' => '21',
               'nama' => 'Kab. Natuna'
            ],
            [
               'id' => '2104',
               'provinsi_id' => '21',
               'nama' => 'Kab. Lingga'
            ],
            [
               'id' => '2105',
               'provinsi_id' => '21',
               'nama' => 'Kab. Kepulauan Anambas'
            ],
            [
               'id' => '2171',
               'provinsi_id' => '21',
               'nama' => 'Kota Batam'
            ],
            [
               'id' => '2172',
               'provinsi_id' => '21',
               'nama' => 'Kota Tanjung Pinang'
            ],
            [
               'id' => '3101',
               'provinsi_id' => '31',
               'nama' => 'Kab. Kepulauan Seribu'
            ],
            [
               'id' => '3171',
               'provinsi_id' => '31',
               'nama' => 'Kota Jakarta Selatan'
            ],
            [
               'id' => '3172',
               'provinsi_id' => '31',
               'nama' => 'Kota Jakarta Timur'
            ],
            [
               'id' => '3173',
               'provinsi_id' => '31',
               'nama' => 'Kota Jakarta Pusat'
            ],
            [
               'id' => '3174',
               'provinsi_id' => '31',
               'nama' => 'Kota Jakarta Barat'
            ],
            [
               'id' => '3175',
               'provinsi_id' => '31',
               'nama' => 'Kota Jakarta Utara'
            ],
            [
               'id' => '3201',
               'provinsi_id' => '32',
               'nama' => 'Kab. Bogor'
            ],
            [
               'id' => '3202',
               'provinsi_id' => '32',
               'nama' => 'Kab. Sukabumi'
            ],
            [
               'id' => '3203',
               'provinsi_id' => '32',
               'nama' => 'Kab. Cianjur'
            ],
            [
               'id' => '3204',
               'provinsi_id' => '32',
               'nama' => 'Kab. Bandung'
            ],
            [
               'id' => '3205',
               'provinsi_id' => '32',
               'nama' => 'Kab. Garut'
            ],
            [
               'id' => '3206',
               'provinsi_id' => '32',
               'nama' => 'Kab. Tasikmalaya'
            ],
            [
               'id' => '3207',
               'provinsi_id' => '32',
               'nama' => 'Kab. Ciamis'
            ],
            [
               'id' => '3208',
               'provinsi_id' => '32',
               'nama' => 'Kab. Kuningan'
            ],
            [
               'id' => '3209',
               'provinsi_id' => '32',
               'nama' => 'Kab. Cirebon'
            ],
            [
               'id' => '3210',
               'provinsi_id' => '32',
               'nama' => 'Kab. Majalengka'
            ],
            [
               'id' => '3211',
               'provinsi_id' => '32',
               'nama' => 'Kab. Sumedang'
            ],
            [
               'id' => '3212',
               'provinsi_id' => '32',
               'nama' => 'Kab. Indramayu'
            ],
            [
               'id' => '3213',
               'provinsi_id' => '32',
               'nama' => 'Kab. Subang'
            ],
            [
               'id' => '3214',
               'provinsi_id' => '32',
               'nama' => 'Kab. Purwakarta'
            ],
            [
               'id' => '3215',
               'provinsi_id' => '32',
               'nama' => 'Kab. Karawang'
            ],
            [
               'id' => '3216',
               'provinsi_id' => '32',
               'nama' => 'Kab. Bekasi'
            ],
            [
               'id' => '3217',
               'provinsi_id' => '32',
               'nama' => 'Kab. Bandung Barat'
            ],
            [
               'id' => '3218',
               'provinsi_id' => '32',
               'nama' => 'Kab. Pangandaran'
            ],
            [
               'id' => '3271',
               'provinsi_id' => '32',
               'nama' => 'Kota Bogor'
            ],
            [
               'id' => '3272',
               'provinsi_id' => '32',
               'nama' => 'Kota Sukabumi'
            ],
            [
               'id' => '3273',
               'provinsi_id' => '32',
               'nama' => 'Kota Bandung'
            ],
            [
               'id' => '3274',
               'provinsi_id' => '32',
               'nama' => 'Kota Cirebon'
            ],
            [
               'id' => '3275',
               'provinsi_id' => '32',
               'nama' => 'Kota Bekasi'
            ],
            [
               'id' => '3276',
               'provinsi_id' => '32',
               'nama' => 'Kota Depok'
            ],
            [
               'id' => '3277',
               'provinsi_id' => '32',
               'nama' => 'Kota Cimahi'
            ],
            [
               'id' => '3278',
               'provinsi_id' => '32',
               'nama' => 'Kota Tasikmalaya'
            ],
            [
               'id' => '3279',
               'provinsi_id' => '32',
               'nama' => 'Kota Banjar'
            ],
            [
               'id' => '3301',
               'provinsi_id' => '33',
               'nama' => 'Kab. Cilacap'
            ],
            [
               'id' => '3302',
               'provinsi_id' => '33',
               'nama' => 'Kab. Banyumas'
            ],
            [
               'id' => '3303',
               'provinsi_id' => '33',
               'nama' => 'Kab. Purbalingga'
            ],
            [
               'id' => '3304',
               'provinsi_id' => '33',
               'nama' => 'Kab. Banjarnegara'
            ],
            [
               'id' => '3305',
               'provinsi_id' => '33',
               'nama' => 'Kab. Kebumen'
            ],
            [
               'id' => '3306',
               'provinsi_id' => '33',
               'nama' => 'Kab. Purworejo'
            ],
            [
               'id' => '3307',
               'provinsi_id' => '33',
               'nama' => 'Kab. Wonosobo'
            ],
            [
               'id' => '3308',
               'provinsi_id' => '33',
               'nama' => 'Kab. Magelang'
            ],
            [
               'id' => '3309',
               'provinsi_id' => '33',
               'nama' => 'Kab. Boyolali'
            ],
            [
               'id' => '3310',
               'provinsi_id' => '33',
               'nama' => 'Kab. Klaten'
            ],
            [
               'id' => '3311',
               'provinsi_id' => '33',
               'nama' => 'Kab. Sukoharjo'
            ],
            [
               'id' => '3312',
               'provinsi_id' => '33',
               'nama' => 'Kab. Wonogiri'
            ],
            [
               'id' => '3313',
               'provinsi_id' => '33',
               'nama' => 'Kab. Karanganyar'
            ],
            [
               'id' => '3314',
               'provinsi_id' => '33',
               'nama' => 'Kab. Sragen'
            ],
            [
               'id' => '3315',
               'provinsi_id' => '33',
               'nama' => 'Kab. Grobogan'
            ],
            [
               'id' => '3316',
               'provinsi_id' => '33',
               'nama' => 'Kab. Blora'
            ],
            [
               'id' => '3317',
               'provinsi_id' => '33',
               'nama' => 'Kab. Rembang'
            ],
            [
               'id' => '3318',
               'provinsi_id' => '33',
               'nama' => 'Kab. Pati'
            ],
            [
               'id' => '3319',
               'provinsi_id' => '33',
               'nama' => 'Kab. Kudus'
            ],
            [
               'id' => '3320',
               'provinsi_id' => '33',
               'nama' => 'Kab. Jepara'
            ],
            [
               'id' => '3321',
               'provinsi_id' => '33',
               'nama' => 'Kab. Demak'
            ],
            [
               'id' => '3322',
               'provinsi_id' => '33',
               'nama' => 'Kab. Semarang'
            ],
            [
               'id' => '3323',
               'provinsi_id' => '33',
               'nama' => 'Kab. Temanggung'
            ],
            [
               'id' => '3324',
               'provinsi_id' => '33',
               'nama' => 'Kab. Kendal'
            ],
            [
               'id' => '3325',
               'provinsi_id' => '33',
               'nama' => 'Kab. Batang'
            ],
            [
               'id' => '3326',
               'provinsi_id' => '33',
               'nama' => 'Kab. Pekalongan'
            ],
            [
               'id' => '3327',
               'provinsi_id' => '33',
               'nama' => 'Kab. Pemalang'
            ],
            [
               'id' => '3328',
               'provinsi_id' => '33',
               'nama' => 'Kab. Tegal'
            ],
            [
               'id' => '3329',
               'provinsi_id' => '33',
               'nama' => 'Kab. Brebes'
            ],
            [
               'id' => '3371',
               'provinsi_id' => '33',
               'nama' => 'Kota Magelang'
            ],
            [
               'id' => '3372',
               'provinsi_id' => '33',
               'nama' => 'Kota Surakarta'
            ],
            [
               'id' => '3373',
               'provinsi_id' => '33',
               'nama' => 'Kota Salatiga'
            ],
            [
               'id' => '3374',
               'provinsi_id' => '33',
               'nama' => 'Kota Semarang'
            ],
            [
               'id' => '3375',
               'provinsi_id' => '33',
               'nama' => 'Kota Pekalongan'
            ],
            [
               'id' => '3376',
               'provinsi_id' => '33',
               'nama' => 'Kota Tegal'
            ],
            [
               'id' => '3401',
               'provinsi_id' => '34',
               'nama' => 'Kab. Kulon Progo'
            ],
            [
               'id' => '3402',
               'provinsi_id' => '34',
               'nama' => 'Kab. Bantul'
            ],
            [
               'id' => '3403',
               'provinsi_id' => '34',
               'nama' => 'Kab. Gunung Kidul'
            ],
            [
               'id' => '3404',
               'provinsi_id' => '34',
               'nama' => 'Kab. Sleman'
            ],
            [
               'id' => '3471',
               'provinsi_id' => '34',
               'nama' => 'Kota Yogyakarta'
            ],
            [
               'id' => '3501',
               'provinsi_id' => '35',
               'nama' => 'Kab. Pacitan'
            ],
            [
               'id' => '3502',
               'provinsi_id' => '35',
               'nama' => 'Kab. Ponorogo'
            ],
            [
               'id' => '3503',
               'provinsi_id' => '35',
               'nama' => 'Kab. Trenggalek'
            ],
            [
               'id' => '3504',
               'provinsi_id' => '35',
               'nama' => 'Kab. Tulungagung'
            ],
            [
               'id' => '3505',
               'provinsi_id' => '35',
               'nama' => 'Kab. Blitar'
            ],
            [
               'id' => '3506',
               'provinsi_id' => '35',
               'nama' => 'Kab. Kediri'
            ],
            [
               'id' => '3507',
               'provinsi_id' => '35',
               'nama' => 'Kab. Malang'
            ],
            [
               'id' => '3508',
               'provinsi_id' => '35',
               'nama' => 'Kab. Lumajang'
            ],
            [
               'id' => '3509',
               'provinsi_id' => '35',
               'nama' => 'Kab. Jember'
            ],
            [
               'id' => '3510',
               'provinsi_id' => '35',
               'nama' => 'Kab. Banyuwangi'
            ],
            [
               'id' => '3511',
               'provinsi_id' => '35',
               'nama' => 'Kab. Bondowoso'
            ],
            [
               'id' => '3512',
               'provinsi_id' => '35',
               'nama' => 'Kab. Situbondo'
            ],
            [
               'id' => '3513',
               'provinsi_id' => '35',
               'nama' => 'Kab. Probolinggo'
            ],
            [
               'id' => '3514',
               'provinsi_id' => '35',
               'nama' => 'Kab. Pasuruan'
            ],
            [
               'id' => '3515',
               'provinsi_id' => '35',
               'nama' => 'Kab. Sidoarjo'
            ],
            [
               'id' => '3516',
               'provinsi_id' => '35',
               'nama' => 'Kab. Mojokerto'
            ],
            [
               'id' => '3517',
               'provinsi_id' => '35',
               'nama' => 'Kab. Jombang'
            ],
            [
               'id' => '3518',
               'provinsi_id' => '35',
               'nama' => 'Kab. Nganjuk'
            ],
            [
               'id' => '3519',
               'provinsi_id' => '35',
               'nama' => 'Kab. Madiun'
            ],
            [
               'id' => '3520',
               'provinsi_id' => '35',
               'nama' => 'Kab. Magetan'
            ],
            [
               'id' => '3521',
               'provinsi_id' => '35',
               'nama' => 'Kab. Ngawi'
            ],
            [
               'id' => '3522',
               'provinsi_id' => '35',
               'nama' => 'Kab. Bojonegoro'
            ],
            [
               'id' => '3523',
               'provinsi_id' => '35',
               'nama' => 'Kab. Tuban'
            ],
            [
               'id' => '3524',
               'provinsi_id' => '35',
               'nama' => 'Kab. Lamongan'
            ],
            [
               'id' => '3525',
               'provinsi_id' => '35',
               'nama' => 'Kab. Gresik'
            ],
            [
               'id' => '3526',
               'provinsi_id' => '35',
               'nama' => 'Kab. Bangkalan'
            ],
            [
               'id' => '3527',
               'provinsi_id' => '35',
               'nama' => 'Kab. Sampang'
            ],
            [
               'id' => '3528',
               'provinsi_id' => '35',
               'nama' => 'Kab. Pamekasan'
            ],
            [
               'id' => '3529',
               'provinsi_id' => '35',
               'nama' => 'Kab. Sumenep'
            ],
            [
               'id' => '3571',
               'provinsi_id' => '35',
               'nama' => 'Kota Kediri'
            ],
            [
               'id' => '3572',
               'provinsi_id' => '35',
               'nama' => 'Kota Blitar'
            ],
            [
               'id' => '3573',
               'provinsi_id' => '35',
               'nama' => 'Kota Malang'
            ],
            [
               'id' => '3574',
               'provinsi_id' => '35',
               'nama' => 'Kota Probolinggo'
            ],
            [
               'id' => '3575',
               'provinsi_id' => '35',
               'nama' => 'Kota Pasuruan'
            ],
            [
               'id' => '3576',
               'provinsi_id' => '35',
               'nama' => 'Kota Mojokerto'
            ],
            [
               'id' => '3577',
               'provinsi_id' => '35',
               'nama' => 'Kota Madiun'
            ],
            [
               'id' => '3578',
               'provinsi_id' => '35',
               'nama' => 'Kota Surabaya'
            ],
            [
               'id' => '3579',
               'provinsi_id' => '35',
               'nama' => 'Kota Batu'
            ],
            [
               'id' => '3601',
               'provinsi_id' => '36',
               'nama' => 'Kab. Pandeglang'
            ],
            [
               'id' => '3602',
               'provinsi_id' => '36',
               'nama' => 'Kab. Lebak'
            ],
            [
               'id' => '3603',
               'provinsi_id' => '36',
               'nama' => 'Kab. Tangerang'
            ],
            [
               'id' => '3604',
               'provinsi_id' => '36',
               'nama' => 'Kab. Serang'
            ],
            [
               'id' => '3671',
               'provinsi_id' => '36',
               'nama' => 'Kota Tangerang'
            ],
            [
               'id' => '3672',
               'provinsi_id' => '36',
               'nama' => 'Kota Cilegon'
            ],
            [
               'id' => '3673',
               'provinsi_id' => '36',
               'nama' => 'Kota Serang'
            ],
            [
               'id' => '3674',
               'provinsi_id' => '36',
               'nama' => 'Kota Tangerang Selatan'
            ],
            [
               'id' => '5101',
               'provinsi_id' => '51',
               'nama' => 'Kab. Jembrana'
            ],
            [
               'id' => '5102',
               'provinsi_id' => '51',
               'nama' => 'Kab. Tabanan'
            ],
            [
               'id' => '5103',
               'provinsi_id' => '51',
               'nama' => 'Kab. Badung'
            ],
            [
               'id' => '5104',
               'provinsi_id' => '51',
               'nama' => 'Kab. Gianyar'
            ],
            [
               'id' => '5105',
               'provinsi_id' => '51',
               'nama' => 'Kab. Klungkung'
            ],
            [
               'id' => '5106',
               'provinsi_id' => '51',
               'nama' => 'Kab. Bangli'
            ],
            [
               'id' => '5107',
               'provinsi_id' => '51',
               'nama' => 'Kab. Karang Asem'
            ],
            [
               'id' => '5108',
               'provinsi_id' => '51',
               'nama' => 'Kab. Buleleng'
            ],
            [
               'id' => '5171',
               'provinsi_id' => '51',
               'nama' => 'Kota Denpasar'
            ],
            [
               'id' => '5201',
               'provinsi_id' => '52',
               'nama' => 'Kab. Lombok Barat'
            ],
            [
               'id' => '5202',
               'provinsi_id' => '52',
               'nama' => 'Kab. Lombok Tengah'
            ],
            [
               'id' => '5203',
               'provinsi_id' => '52',
               'nama' => 'Kab. Lombok Timur'
            ],
            [
               'id' => '5204',
               'provinsi_id' => '52',
               'nama' => 'Kab. Sumbawa'
            ],
            [
               'id' => '5205',
               'provinsi_id' => '52',
               'nama' => 'Kab. Dompu'
            ],
            [
               'id' => '5206',
               'provinsi_id' => '52',
               'nama' => 'Kab. Bima'
            ],
            [
               'id' => '5207',
               'provinsi_id' => '52',
               'nama' => 'Kab. Sumbawa Barat'
            ],
            [
               'id' => '5208',
               'provinsi_id' => '52',
               'nama' => 'Kab. Lombok Utara'
            ],
            [
               'id' => '5271',
               'provinsi_id' => '52',
               'nama' => 'Kota Mataram'
            ],
            [
               'id' => '5272',
               'provinsi_id' => '52',
               'nama' => 'Kota Bima'
            ],
            [
               'id' => '5301',
               'provinsi_id' => '53',
               'nama' => 'Kab. Sumba Barat'
            ],
            [
               'id' => '5302',
               'provinsi_id' => '53',
               'nama' => 'Kab. Sumba Timur'
            ],
            [
               'id' => '5303',
               'provinsi_id' => '53',
               'nama' => 'Kab. Kupang'
            ],
            [
               'id' => '5304',
               'provinsi_id' => '53',
               'nama' => 'Kab. Timor Tengah Selatan'
            ],
            [
               'id' => '5305',
               'provinsi_id' => '53',
               'nama' => 'Kab. Timor Tengah Utara'
            ],
            [
               'id' => '5306',
               'provinsi_id' => '53',
               'nama' => 'Kab. Belu'
            ],
            [
               'id' => '5307',
               'provinsi_id' => '53',
               'nama' => 'Kab. Alor'
            ],
            [
               'id' => '5308',
               'provinsi_id' => '53',
               'nama' => 'Kab. Lembata'
            ],
            [
               'id' => '5309',
               'provinsi_id' => '53',
               'nama' => 'Kab. Flores Timur'
            ],
            [
               'id' => '5310',
               'provinsi_id' => '53',
               'nama' => 'Kab. Sikka'
            ],
            [
               'id' => '5311',
               'provinsi_id' => '53',
               'nama' => 'Kab. Ende'
            ],
            [
               'id' => '5312',
               'provinsi_id' => '53',
               'nama' => 'Kab. Ngada'
            ],
            [
               'id' => '5313',
               'provinsi_id' => '53',
               'nama' => 'Kab. Manggarai'
            ],
            [
               'id' => '5314',
               'provinsi_id' => '53',
               'nama' => 'Kab. Rote Ndao'
            ],
            [
               'id' => '5315',
               'provinsi_id' => '53',
               'nama' => 'Kab. Manggarai Barat'
            ],
            [
               'id' => '5316',
               'provinsi_id' => '53',
               'nama' => 'Kab. Sumba Tengah'
            ],
            [
               'id' => '5317',
               'provinsi_id' => '53',
               'nama' => 'Kab. Sumba Barat Daya'
            ],
            [
               'id' => '5318',
               'provinsi_id' => '53',
               'nama' => 'Kab. Nagekeo'
            ],
            [
               'id' => '5319',
               'provinsi_id' => '53',
               'nama' => 'Kab. Manggarai Timur'
            ],
            [
               'id' => '5320',
               'provinsi_id' => '53',
               'nama' => 'Kab. Sabu Raijua'
            ],
            [
               'id' => '5371',
               'provinsi_id' => '53',
               'nama' => 'Kota Kupang'
            ],
            [
               'id' => '6101',
               'provinsi_id' => '61',
               'nama' => 'Kab. Sambas'
            ],
            [
               'id' => '6102',
               'provinsi_id' => '61',
               'nama' => 'Kab. Bengkayang'
            ],
            [
               'id' => '6103',
               'provinsi_id' => '61',
               'nama' => 'Kab. Landak'
            ],
            [
               'id' => '6104',
               'provinsi_id' => '61',
               'nama' => 'Kab. Pontianak'
            ],
            [
               'id' => '6105',
               'provinsi_id' => '61',
               'nama' => 'Kab. Sanggau'
            ],
            [
               'id' => '6106',
               'provinsi_id' => '61',
               'nama' => 'Kab. Ketapang'
            ],
            [
               'id' => '6107',
               'provinsi_id' => '61',
               'nama' => 'Kab. Sintang'
            ],
            [
               'id' => '6108',
               'provinsi_id' => '61',
               'nama' => 'Kab. Kapuas Hulu'
            ],
            [
               'id' => '6109',
               'provinsi_id' => '61',
               'nama' => 'Kab. Sekadau'
            ],
            [
               'id' => '6110',
               'provinsi_id' => '61',
               'nama' => 'Kab. Melawi'
            ],
            [
               'id' => '6111',
               'provinsi_id' => '61',
               'nama' => 'Kab. Kayong Utara'
            ],
            [
               'id' => '6112',
               'provinsi_id' => '61',
               'nama' => 'Kab. Kubu Raya'
            ],
            [
               'id' => '6171',
               'provinsi_id' => '61',
               'nama' => 'Kota Pontianak'
            ],
            [
               'id' => '6172',
               'provinsi_id' => '61',
               'nama' => 'Kota Singkawang'
            ],
            [
               'id' => '6201',
               'provinsi_id' => '62',
               'nama' => 'Kab. Kotawaringin Barat'
            ],
            [
               'id' => '6202',
               'provinsi_id' => '62',
               'nama' => 'Kab. Kotawaringin Timur'
            ],
            [
               'id' => '6203',
               'provinsi_id' => '62',
               'nama' => 'Kab. Kapuas'
            ],
            [
               'id' => '6204',
               'provinsi_id' => '62',
               'nama' => 'Kab. Barito Selatan'
            ],
            [
               'id' => '6205',
               'provinsi_id' => '62',
               'nama' => 'Kab. Barito Utara'
            ],
            [
               'id' => '6206',
               'provinsi_id' => '62',
               'nama' => 'Kab. Sukamara'
            ],
            [
               'id' => '6207',
               'provinsi_id' => '62',
               'nama' => 'Kab. Lamandau'
            ],
            [
               'id' => '6208',
               'provinsi_id' => '62',
               'nama' => 'Kab. Seruyan'
            ],
            [
               'id' => '6209',
               'provinsi_id' => '62',
               'nama' => 'Kab. Katingan'
            ],
            [
               'id' => '6210',
               'provinsi_id' => '62',
               'nama' => 'Kab. Pulang Pisau'
            ],
            [
               'id' => '6211',
               'provinsi_id' => '62',
               'nama' => 'Kab. Gunung Mas'
            ],
            [
               'id' => '6212',
               'provinsi_id' => '62',
               'nama' => 'Kab. Barito Timur'
            ],
            [
               'id' => '6213',
               'provinsi_id' => '62',
               'nama' => 'Kab. Murung Raya'
            ],
            [
               'id' => '6271',
               'provinsi_id' => '62',
               'nama' => 'Kota Palangka Raya'
            ],
            [
               'id' => '6301',
               'provinsi_id' => '63',
               'nama' => 'Kab. Tanah Laut'
            ],
            [
               'id' => '6302',
               'provinsi_id' => '63',
               'nama' => 'Kab. Kota Baru'
            ],
            [
               'id' => '6303',
               'provinsi_id' => '63',
               'nama' => 'Kab. Banjar'
            ],
            [
               'id' => '6304',
               'provinsi_id' => '63',
               'nama' => 'Kab. Barito Kuala'
            ],
            [
               'id' => '6305',
               'provinsi_id' => '63',
               'nama' => 'Kab. Tapin'
            ],
            [
               'id' => '6306',
               'provinsi_id' => '63',
               'nama' => 'Kab. Hulu Sungai Selatan'
            ],
            [
               'id' => '6307',
               'provinsi_id' => '63',
               'nama' => 'Kab. Hulu Sungai Tengah'
            ],
            [
               'id' => '6308',
               'provinsi_id' => '63',
               'nama' => 'Kab. Hulu Sungai Utara'
            ],
            [
               'id' => '6309',
               'provinsi_id' => '63',
               'nama' => 'Kab. Tabalong'
            ],
            [
               'id' => '6310',
               'provinsi_id' => '63',
               'nama' => 'Kab. Tanah Bumbu'
            ],
            [
               'id' => '6311',
               'provinsi_id' => '63',
               'nama' => 'Kab. Balangan'
            ],
            [
               'id' => '6371',
               'provinsi_id' => '63',
               'nama' => 'Kota Banjarmasin'
            ],
            [
               'id' => '6372',
               'provinsi_id' => '63',
               'nama' => 'Kota Banjar Baru'
            ],
            [
               'id' => '6401',
               'provinsi_id' => '64',
               'nama' => 'Kab. Paser'
            ],
            [
               'id' => '6402',
               'provinsi_id' => '64',
               'nama' => 'Kab. Kutai Barat'
            ],
            [
               'id' => '6403',
               'provinsi_id' => '64',
               'nama' => 'Kab. Kutai Kartanegara'
            ],
            [
               'id' => '6404',
               'provinsi_id' => '64',
               'nama' => 'Kab. Kutai Timur'
            ],
            [
               'id' => '6405',
               'provinsi_id' => '64',
               'nama' => 'Kab. Berau'
            ],
            [
               'id' => '6409',
               'provinsi_id' => '64',
               'nama' => 'Kab. Penajam Paser Utara'
            ],
            [
               'id' => '6471',
               'provinsi_id' => '64',
               'nama' => 'Kota Balikpapan'
            ],
            [
               'id' => '6472',
               'provinsi_id' => '64',
               'nama' => 'Kota Samarinda'
            ],
            [
               'id' => '6474',
               'provinsi_id' => '64',
               'nama' => 'Kota Bontang'
            ],
            [
               'id' => '6501',
               'provinsi_id' => '65',
               'nama' => 'Kab. Malinau'
            ],
            [
               'id' => '6502',
               'provinsi_id' => '65',
               'nama' => 'Kab. Bulungan'
            ],
            [
               'id' => '6503',
               'provinsi_id' => '65',
               'nama' => 'Kab. Tana Tidung'
            ],
            [
               'id' => '6504',
               'provinsi_id' => '65',
               'nama' => 'Kab. Nunukan'
            ],
            [
               'id' => '6571',
               'provinsi_id' => '65',
               'nama' => 'Kota Tarakan'
            ],
            [
               'id' => '7101',
               'provinsi_id' => '71',
               'nama' => 'Kab. Bolaang Mongondow'
            ],
            [
               'id' => '7102',
               'provinsi_id' => '71',
               'nama' => 'Kab. Minahasa'
            ],
            [
               'id' => '7103',
               'provinsi_id' => '71',
               'nama' => 'Kab. Kepulauan Sangihe'
            ],
            [
               'id' => '7104',
               'provinsi_id' => '71',
               'nama' => 'Kab. Kepulauan Talaud'
            ],
            [
               'id' => '7105',
               'provinsi_id' => '71',
               'nama' => 'Kab. Minahasa Selatan'
            ],
            [
               'id' => '7106',
               'provinsi_id' => '71',
               'nama' => 'Kab. Minahasa Utara'
            ],
            [
               'id' => '7107',
               'provinsi_id' => '71',
               'nama' => 'Kab. Bolaang Mongondow Utara'
            ],
            [
               'id' => '7108',
               'provinsi_id' => '71',
               'nama' => 'Kab. Siau Tagulandang Biaro'
            ],
            [
               'id' => '7109',
               'provinsi_id' => '71',
               'nama' => 'Kab. Minahasa Tenggara'
            ],
            [
               'id' => '7110',
               'provinsi_id' => '71',
               'nama' => 'Kab. Bolaang Mongondow Selatan'
            ],
            [
               'id' => '7111',
               'provinsi_id' => '71',
               'nama' => 'Kab. Bolaang Mongondow Timur'
            ],
            [
               'id' => '7171',
               'provinsi_id' => '71',
               'nama' => 'Kota Manado'
            ],
            [
               'id' => '7172',
               'provinsi_id' => '71',
               'nama' => 'Kota Bitung'
            ],
            [
               'id' => '7173',
               'provinsi_id' => '71',
               'nama' => 'Kota Tomohon'
            ],
            [
               'id' => '7174',
               'provinsi_id' => '71',
               'nama' => 'Kota Kotamobagu'
            ],
            [
               'id' => '7201',
               'provinsi_id' => '72',
               'nama' => 'Kab. Banggai Kepulauan'
            ],
            [
               'id' => '7202',
               'provinsi_id' => '72',
               'nama' => 'Kab. Banggai'
            ],
            [
               'id' => '7203',
               'provinsi_id' => '72',
               'nama' => 'Kab. Morowali'
            ],
            [
               'id' => '7204',
               'provinsi_id' => '72',
               'nama' => 'Kab. Poso'
            ],
            [
               'id' => '7205',
               'provinsi_id' => '72',
               'nama' => 'Kab. Donggala'
            ],
            [
               'id' => '7206',
               'provinsi_id' => '72',
               'nama' => 'Kab. Toli-toli'
            ],
            [
               'id' => '7207',
               'provinsi_id' => '72',
               'nama' => 'Kab. Buol'
            ],
            [
               'id' => '7208',
               'provinsi_id' => '72',
               'nama' => 'Kab. Parigi Moutong'
            ],
            [
               'id' => '7209',
               'provinsi_id' => '72',
               'nama' => 'Kab. Tojo Una-una'
            ],
            [
               'id' => '7210',
               'provinsi_id' => '72',
               'nama' => 'Kab. Sigi'
            ],
            [
               'id' => '7271',
               'provinsi_id' => '72',
               'nama' => 'Kota Palu'
            ],
            [
               'id' => '7301',
               'provinsi_id' => '73',
               'nama' => 'Kab. Kepulauan Selayar'
            ],
            [
               'id' => '7302',
               'provinsi_id' => '73',
               'nama' => 'Kab. Bulukumba'
            ],
            [
               'id' => '7303',
               'provinsi_id' => '73',
               'nama' => 'Kab. Bantaeng'
            ],
            [
               'id' => '7304',
               'provinsi_id' => '73',
               'nama' => 'Kab. Jeneponto'
            ],
            [
               'id' => '7305',
               'provinsi_id' => '73',
               'nama' => 'Kab. Takalar'
            ],
            [
               'id' => '7306',
               'provinsi_id' => '73',
               'nama' => 'Kab. Gowa'
            ],
            [
               'id' => '7307',
               'provinsi_id' => '73',
               'nama' => 'Kab. Sinjai'
            ],
            [
               'id' => '7308',
               'provinsi_id' => '73',
               'nama' => 'Kab. Maros'
            ],
            [
               'id' => '7309',
               'provinsi_id' => '73',
               'nama' => 'Kab. Pangkajene Dan Kepulauan'
            ],
            [
               'id' => '7310',
               'provinsi_id' => '73',
               'nama' => 'Kab. Barru'
            ],
            [
               'id' => '7311',
               'provinsi_id' => '73',
               'nama' => 'Kab. Bone'
            ],
            [
               'id' => '7312',
               'provinsi_id' => '73',
               'nama' => 'Kab. Soppeng'
            ],
            [
               'id' => '7313',
               'provinsi_id' => '73',
               'nama' => 'Kab. Wajo'
            ],
            [
               'id' => '7314',
               'provinsi_id' => '73',
               'nama' => 'Kab. Sidenreng Rappang'
            ],
            [
               'id' => '7315',
               'provinsi_id' => '73',
               'nama' => 'Kab. Pinrang'
            ],
            [
               'id' => '7316',
               'provinsi_id' => '73',
               'nama' => 'Kab. Enrekang'
            ],
            [
               'id' => '7317',
               'provinsi_id' => '73',
               'nama' => 'Kab. Luwu'
            ],
            [
               'id' => '7318',
               'provinsi_id' => '73',
               'nama' => 'Kab. Tana Toraja'
            ],
            [
               'id' => '7322',
               'provinsi_id' => '73',
               'nama' => 'Kab. Luwu Utara'
            ],
            [
               'id' => '7325',
               'provinsi_id' => '73',
               'nama' => 'Kab. Luwu Timur'
            ],
            [
               'id' => '7326',
               'provinsi_id' => '73',
               'nama' => 'Kab. Toraja Utara'
            ],
            [
               'id' => '7371',
               'provinsi_id' => '73',
               'nama' => 'Kota Makassar'
            ],
            [
               'id' => '7372',
               'provinsi_id' => '73',
               'nama' => 'Kota Parepare'
            ],
            [
               'id' => '7373',
               'provinsi_id' => '73',
               'nama' => 'Kota Palopo'
            ],
            [
               'id' => '7401',
               'provinsi_id' => '74',
               'nama' => 'Kab. Buton'
            ],
            [
               'id' => '7402',
               'provinsi_id' => '74',
               'nama' => 'Kab. Muna'
            ],
            [
               'id' => '7403',
               'provinsi_id' => '74',
               'nama' => 'Kab. Konawe'
            ],
            [
               'id' => '7404',
               'provinsi_id' => '74',
               'nama' => 'Kab. Kolaka'
            ],
            [
               'id' => '7405',
               'provinsi_id' => '74',
               'nama' => 'Kab. Konawe Selatan'
            ],
            [
               'id' => '7406',
               'provinsi_id' => '74',
               'nama' => 'Kab. Bombana'
            ],
            [
               'id' => '7407',
               'provinsi_id' => '74',
               'nama' => 'Kab. Wakatobi'
            ],
            [
               'id' => '7408',
               'provinsi_id' => '74',
               'nama' => 'Kab. Kolaka Utara'
            ],
            [
               'id' => '7409',
               'provinsi_id' => '74',
               'nama' => 'Kab. Buton Utara'
            ],
            [
               'id' => '7410',
               'provinsi_id' => '74',
               'nama' => 'Kab. Konawe Utara'
            ],
            [
               'id' => '7471',
               'provinsi_id' => '74',
               'nama' => 'Kota Kendari'
            ],
            [
               'id' => '7472',
               'provinsi_id' => '74',
               'nama' => 'Kota Baubau'
            ],
            [
               'id' => '7501',
               'provinsi_id' => '75',
               'nama' => 'Kab. Boalemo'
            ],
            [
               'id' => '7502',
               'provinsi_id' => '75',
               'nama' => 'Kab. Gorontalo'
            ],
            [
               'id' => '7503',
               'provinsi_id' => '75',
               'nama' => 'Kab. Pohuwato'
            ],
            [
               'id' => '7504',
               'provinsi_id' => '75',
               'nama' => 'Kab. Bone Bolango'
            ],
            [
               'id' => '7505',
               'provinsi_id' => '75',
               'nama' => 'Kab. Gorontalo Utara'
            ],
            [
               'id' => '7571',
               'provinsi_id' => '75',
               'nama' => 'Kota Gorontalo'
            ],
            [
               'id' => '7601',
               'provinsi_id' => '76',
               'nama' => 'Kab. Majene'
            ],
            [
               'id' => '7602',
               'provinsi_id' => '76',
               'nama' => 'Kab. Polewali Mandar'
            ],
            [
               'id' => '7603',
               'provinsi_id' => '76',
               'nama' => 'Kab. Mamasa'
            ],
            [
               'id' => '7604',
               'provinsi_id' => '76',
               'nama' => 'Kab. Mamuju'
            ],
            [
               'id' => '7605',
               'provinsi_id' => '76',
               'nama' => 'Kab. Mamuju Utara'
            ],
            [
               'id' => '8101',
               'provinsi_id' => '81',
               'nama' => 'Kab. Maluku Tenggara Barat'
            ],
            [
               'id' => '8102',
               'provinsi_id' => '81',
               'nama' => 'Kab. Maluku Tenggara'
            ],
            [
               'id' => '8103',
               'provinsi_id' => '81',
               'nama' => 'Kab. Maluku Tengah'
            ],
            [
               'id' => '8104',
               'provinsi_id' => '81',
               'nama' => 'Kab. Buru'
            ],
            [
               'id' => '8105',
               'provinsi_id' => '81',
               'nama' => 'Kab. Kepulauan Aru'
            ],
            [
               'id' => '8106',
               'provinsi_id' => '81',
               'nama' => 'Kab. Seram Bagian Barat'
            ],
            [
               'id' => '8107',
               'provinsi_id' => '81',
               'nama' => 'Kab. Seram Bagian Timur'
            ],
            [
               'id' => '8108',
               'provinsi_id' => '81',
               'nama' => 'Kab. Maluku Barat Daya'
            ],
            [
               'id' => '8109',
               'provinsi_id' => '81',
               'nama' => 'Kab. Buru Selatan'
            ],
            [
               'id' => '8171',
               'provinsi_id' => '81',
               'nama' => 'Kota Ambon'
            ],
            [
               'id' => '8172',
               'provinsi_id' => '81',
               'nama' => 'Kota Tual'
            ],
            [
               'id' => '8201',
               'provinsi_id' => '82',
               'nama' => 'Kab. Halmahera Barat'
            ],
            [
               'id' => '8202',
               'provinsi_id' => '82',
               'nama' => 'Kab. Halmahera Tengah'
            ],
            [
               'id' => '8203',
               'provinsi_id' => '82',
               'nama' => 'Kab. Kepulauan Sula'
            ],
            [
               'id' => '8204',
               'provinsi_id' => '82',
               'nama' => 'Kab. Halmahera Selatan'
            ],
            [
               'id' => '8205',
               'provinsi_id' => '82',
               'nama' => 'Kab. Halmahera Utara'
            ],
            [
               'id' => '8206',
               'provinsi_id' => '82',
               'nama' => 'Kab. Halmahera Timur'
            ],
            [
               'id' => '8207',
               'provinsi_id' => '82',
               'nama' => 'Kab. Pulau Morotai'
            ],
            [
               'id' => '8271',
               'provinsi_id' => '82',
               'nama' => 'Kota Ternate'
            ],
            [
               'id' => '8272',
               'provinsi_id' => '82',
               'nama' => 'Kota Tidore Kepulauan'
            ],
            [
               'id' => '9101',
               'provinsi_id' => '91',
               'nama' => 'Kab. Fakfak'
            ],
            [
               'id' => '9102',
               'provinsi_id' => '91',
               'nama' => 'Kab. Kaimana'
            ],
            [
               'id' => '9103',
               'provinsi_id' => '91',
               'nama' => 'Kab. Teluk Wondama'
            ],
            [
               'id' => '9104',
               'provinsi_id' => '91',
               'nama' => 'Kab. Teluk Bintuni'
            ],
            [
               'id' => '9105',
               'provinsi_id' => '91',
               'nama' => 'Kab. Manokwari'
            ],
            [
               'id' => '9106',
               'provinsi_id' => '91',
               'nama' => 'Kab. Sorong Selatan'
            ],
            [
               'id' => '9107',
               'provinsi_id' => '91',
               'nama' => 'Kab. Sorong'
            ],
            [
               'id' => '9108',
               'provinsi_id' => '91',
               'nama' => 'Kab. Raja Ampat'
            ],
            [
               'id' => '9109',
               'provinsi_id' => '91',
               'nama' => 'Kab. Tambrauw'
            ],
            [
               'id' => '9110',
               'provinsi_id' => '91',
               'nama' => 'Kab. Maybrat'
            ],
            [
               'id' => '9171',
               'provinsi_id' => '91',
               'nama' => 'Kota Sorong'
            ],
            [
               'id' => '9401',
               'provinsi_id' => '94',
               'nama' => 'Kab. Merauke'
            ],
            [
               'id' => '9402',
               'provinsi_id' => '94',
               'nama' => 'Kab. Jayawijaya'
            ],
            [
               'id' => '9403',
               'provinsi_id' => '94',
               'nama' => 'Kab. Jayapura'
            ],
            [
               'id' => '9404',
               'provinsi_id' => '94',
               'nama' => 'Kab. Nabire'
            ],
            [
               'id' => '9408',
               'provinsi_id' => '94',
               'nama' => 'Kab. Kepulauan Yapen'
            ],
            [
               'id' => '9409',
               'provinsi_id' => '94',
               'nama' => 'Kab. Biak Numfor'
            ],
            [
               'id' => '9410',
               'provinsi_id' => '94',
               'nama' => 'Kab. Paniai'
            ],
            [
               'id' => '9411',
               'provinsi_id' => '94',
               'nama' => 'Kab. Puncak Jaya'
            ],
            [
               'id' => '9412',
               'provinsi_id' => '94',
               'nama' => 'Kab. Mimika'
            ],
            [
               'id' => '9413',
               'provinsi_id' => '94',
               'nama' => 'Kab. Boven Digoel'
            ],
            [
               'id' => '9414',
               'provinsi_id' => '94',
               'nama' => 'Kab. Mappi'
            ],
            [
               'id' => '9415',
               'provinsi_id' => '94',
               'nama' => 'Kab. Asmat'
            ],
            [
               'id' => '9416',
               'provinsi_id' => '94',
               'nama' => 'Kab. Yahukimo'
            ],
            [
               'id' => '9417',
               'provinsi_id' => '94',
               'nama' => 'Kab. Pegunungan Bintang'
            ],
            [
               'id' => '9418',
               'provinsi_id' => '94',
               'nama' => 'Kab. Tolikara'
            ],
            [
               'id' => '9419',
               'provinsi_id' => '94',
               'nama' => 'Kab. Sarmi'
            ],
            [
               'id' => '9420',
               'provinsi_id' => '94',
               'nama' => 'Kab. Keerom'
            ],
            [
               'id' => '9426',
               'provinsi_id' => '94',
               'nama' => 'Kab. Waropen'
            ],
            [
               'id' => '9427',
               'provinsi_id' => '94',
               'nama' => 'Kab. Supiori'
            ],
            [
               'id' => '9428',
               'provinsi_id' => '94',
               'nama' => 'Kab. Mamberamo Raya'
            ],
            [
               'id' => '9429',
               'provinsi_id' => '94',
               'nama' => 'Kab. Nduga'
            ],
            [
               'id' => '9430',
               'provinsi_id' => '94',
               'nama' => 'Kab. Lanny Jaya'
            ],
            [
               'id' => '9431',
               'provinsi_id' => '94',
               'nama' => 'Kab. Mamberamo Tengah'
            ],
            [
               'id' => '9432',
               'provinsi_id' => '94',
               'nama' => 'Kab. Yalimo'
            ],
            [
               'id' => '9433',
               'provinsi_id' => '94',
               'nama' => 'Kab. Puncak'
            ],
            [
               'id' => '9434',
               'provinsi_id' => '94',
               'nama' => 'Kab. Dogiyai'
            ],
            [
               'id' => '9435',
               'provinsi_id' => '94',
               'nama' => 'Kab. Intan Jaya'
            ],
            [
               'id' => '9436',
               'provinsi_id' => '94',
               'nama' => 'Kab. Deiyai'
            ],
            [
               'id' => '9471',
               'provinsi_id' => '94',
               'nama' => 'Kota Jayapura'
            ]
        ]);
    }
}
