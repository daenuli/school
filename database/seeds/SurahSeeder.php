<?php

use App\Models\Surah;
use Illuminate\Database\Seeder;

class SurahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Surah::truncate();
        Surah::insert([
          [
            "name" => "Al-Fatihah",
            "juz" => 1,
            "ayat" => 7
          ],
          [
            "name" => "Al-Baqarah",
            "juz" => null,
            "ayat" => 286
          ],
          [
            "name" => "Ali 'Imran",
            "juz" => null,
            "ayat" => 200
          ],
          [
            "name" => "An-Nisa",
            "juz" => null,
            "ayat" => 176
          ],
          [
            "name" => "Al-Ma'idah",
            "juz" => null,
            "ayat" => 120
          ],
          [
            "name" => "Al-An'am",
            "juz" => null,
            "ayat" => 165
          ],
          [
            "name" => "Al-A'raf",
            "juz" => null,
            "ayat" => 206
          ],
          [
            "name" => "Al-Anfal",
            "juz" => null,
            "ayat" => 75
          ],
          [
            "name" => "At-Taubah",
            "juz" => null,
            "ayat" => 129
          ],
          [
            "name" => "Yunus",
            "juz" => 11,
            "ayat" => 109
          ],
          [
            "name" => "Hud",
            "juz" => null,
            "ayat" => 123
          ],
          [
            "name" => "Yusuf",
            "juz" => null,
            "ayat" => 111
          ],
          [
            "name" => "Ar-Ra'd",
            "juz" => 13,
            "ayat" => 43
          ],
          [
            "name" => "Ibrahim",
            "juz" => 13,
            "ayat" => 52
          ],
          [
            "name" => "Al-Hijr",
            "juz" => 14,
            "ayat" => 99
          ],
          [
            "name" => "An-Nahl",
            "juz" => 14,
            "ayat" => 128
          ],
          [
            "name" => "Al-Isra",
            "juz" => 15,
            "ayat" => 111
          ],
          [
            "name" => "Al-Kahfi",
            "juz" => null,
            "ayat" => 110
          ],
          [
            "name" => "Maryam",
            "juz" => 16,
            "ayat" => 98
          ],
          [
            "name" => "Thaha",
            "juz" => 16,
            "ayat" => 135
          ],
          [
            "name" => "Al-Anbiya",
            "juz" => 17,
            "ayat" => 112
          ],
          [
            "name" => "Al-Hajj",
            "juz" => 17,
            "ayat" => 78
          ],
          [
            "name" => "Al-Mu'minun",
            "juz" => 18,
            "ayat" => 118
          ],
          [
            "name" => "An-Nur",
            "juz" => 18,
            "ayat" => 64
          ],
          [
            "name" => "Al-Furqan",
            "juz" => null,
            "ayat" => 77
          ],
          [
            "name" => "Asy-Syu'ara",
            "juz" => 19,
            "ayat" => 227
          ],
          [
            "name" => "An-Naml",
            "juz" => null,
            "ayat" => 93
          ],
          [
            "name" => "Al-Qasas",
            "juz" => 20,
            "ayat" => 88
          ],
          [
            "name" => "Al-'Ankabut",
            "juz" => null,
            "ayat" => 69
          ],
          [
            "name" => "Ar-Rum",
            "juz" => 21,
            "ayat" => 60
          ],
          [
            "name" => "Luqman",
            "juz" => 21,
            "ayat" => 34
          ],
          [
            "name" => "As-Sajdah",
            "juz" => 21,
            "ayat" => 30
          ],
          [
            "name" => "Al-Ahzab",
            "juz" => null,
            "ayat" => 73
          ],
          [
            "name" => "Saba",
            "juz" => 22,
            "ayat" => 54
          ],
          [
            "name" => "Fathir",
            "juz" => 22,
            "ayat" => 45
          ],
          [
            "name" => "Yasin",
            "juz" => null,
            "ayat" => 83
          ],
          [
            "name" => "Ash-Shaffat",
            "juz" => 23,
            "ayat" => 182
          ],
          [
            "name" => "Shad",
            "juz" => 23,
            "ayat" => 88
          ],
          [
            "name" => "Az-Zumar",
            "juz" => null,
            "ayat" => 75
          ],
          [
            "name" => "Ghafir",
            "juz" => 24,
            "ayat" => 85
          ],
          [
            "name" => "Fushshilat",
            "juz" => null,
            "ayat" => 54
          ],
          [
            "name" => "Asy-Syura",
            "juz" => 25,
            "ayat" => 53
          ],
          [
            "name" => "Az-Zukhruf",
            "juz" => 25,
            "ayat" => 89
          ],
          [
            "name" => "Ad-Dukhan",
            "juz" => 25,
            "ayat" => 59
          ],
          [
            "name" => "Al-Jatsiyah",
            "juz" => 25,
            "ayat" => 37
          ],
          [
            "name" => "Al-Ahqaf",
            "juz" => 26,
            "ayat" => 35
          ],
          [
            "name" => "Muhammad",
            "juz" => 26,
            "ayat" => 38
          ],
          [
            "name" => "Al-Fath",
            "juz" => 26,
            "ayat" => 29
          ],
          [
            "name" => "Al-Hujurat",
            "juz" => 26,
            "ayat" => 18
          ],
          [
            "name" => "Qaf",
            "juz" => 26,
            "ayat" => 45
          ],
          [
            "name" => "Adz-Dzariyat",
            "juz" => null,
            "ayat" => 60
          ],
          [
            "name" => "Ath-Thur",
            "juz" => 27,
            "ayat" => 49
          ],
          [
            "name" => "An-Najm",
            "juz" => 27,
            "ayat" => 62
          ],
          [
            "name" => "Al-Qamar",
            "juz" => 27,
            "ayat" => 55
          ],
          [
            "name" => "Ar-Rahman",
            "juz" => 27,
            "ayat" => 78
          ],
          [
            "name" => "Al-Waqi'ah",
            "juz" => 27,
            "ayat" => 96
          ],
          [
            "name" => "Al-Hadid",
            "juz" => 27,
            "ayat" => 29
          ],
          [
            "name" => "Al-Mujadilah",
            "juz" => 28,
            "ayat" => 22
          ],
          [
            "name" => "Al-Hasyr",
            "juz" => 28,
            "ayat" => 24
          ],
          [
            "name" => "Al-Mumtahanah",
            "juz" => 28,
            "ayat" => 13
          ],
          [
            "name" => "Ash-Shaff",
            "juz" => 28,
            "ayat" => 14
          ],
          [
            "name" => "Al-Jumu'ah",
            "juz" => 28,
            "ayat" => 11
          ],
          [
            "name" => "Al-Munafiqun",
            "juz" => 28,
            "ayat" => 11
          ],
          [
            "name" => "At-Taghabun",
            "juz" => 28,
            "ayat" => 18
          ],
          [
            "name" => "Ath-Thalaq",
            "juz" => 28,
            "ayat" => 12
          ],
          [
            "name" => "At-Tahrim",
            "juz" => 28,
            "ayat" => 12
          ],
          [
            "name" => "Al-Mulk",
            "juz" => 29,
            "ayat" => 30
          ],
          [
            "name" => "Al-Qalam",
            "juz" => 29,
            "ayat" => 52
          ],
          [
            "name" => "Al-Haqqah",
            "juz" => 29,
            "ayat" => 52
          ],
          [
            "name" => "Al-Ma'arij",
            "juz" => 29,
            "ayat" => 44
          ],
          [
            "name" => "Nuh",
            "juz" => 29,
            "ayat" => 28
          ],
          [
            "name" => "Al-Jinn",
            "juz" => 29,
            "ayat" => 28
          ],
          [
            "name" => "Al-Muzzammil",
            "juz" => 29,
            "ayat" => 20
          ],
          [
            "name" => "Al-Muddatstsir",
            "juz" => 29,
            "ayat" => 56
          ],
          [
            "name" => "Al-Qiyamah",
            "juz" => 29,
            "ayat" => 40
          ],
          [
            "name" => "Al-Insan",
            "juz" => 29,
            "ayat" => 31
          ],
          [
            "name" => "Al-Mursalat",
            "juz" => 29,
            "ayat" => 50
          ],
          [
            "name" => "An-Naba'",
            "juz" => 30,
            "ayat" => 40
          ],
          [
            "name" => "An-Nazi'at",
            "juz" => 30,
            "ayat" => 46
          ],
          [
            "name" => "'Abasa",
            "juz" => 30,
            "ayat" => 42
          ],
          [
            "name" => "At-Takwir",
            "juz" => 30,
            "ayat" => 29
          ],
          [
            "name" => "Al-Infithar",
            "juz" => 30,
            "ayat" => 19
          ],
          [
            "name" => "Al-Muthaffifin",
            "juz" => 30,
            "ayat" => 36
          ],
          [
            "name" => "Al-Insyiqaq",
            "juz" => 30,
            "ayat" => 25
          ],
          [
            "name" => "Al-Buruj",
            "juz" => 30,
            "ayat" => 22
          ],
          [
            "name" => "Ath-Thariq",
            "juz" => 30,
            "ayat" => 17
          ],
          [
            "name" => "Al-A'la",
            "juz" => 30,
            "ayat" => 19
          ],
          [
            "name" => "Al-Ghasyiyah",
            "juz" => 30,
            "ayat" => 26
          ],
          [
            "name" => "Al-Fajr",
            "juz" => 30,
            "ayat" => 30
          ],
          [
            "name" => "Al-Balad",
            "juz" => 30,
            "ayat" => 20
          ],
          [
            "name" => "Asy-Syams",
            "juz" => 30,
            "ayat" => 15
          ],
          [
            "name" => "Al-Lail",
            "juz" => 30,
            "ayat" => 21
          ],
          [
            "name" => "Adh-Dhuha",
            "juz" => 30,
            "ayat" => 11
          ],
          [
            "name" => "Asy-Syarh",
            "juz" => 30,
            "ayat" => 8
          ],
          [
            "name" => "At-Tin",
            "juz" => 30,
            "ayat" => 8
          ],
          [
            "name" => "Al-Alaq",
            "juz" => 30,
            "ayat" => 19
          ],
          [
            "name" => "Al-Qadr",
            "juz" => 30,
            "ayat" => 5
          ],
          [
            "name" => "Al-Bayyinah",
            "juz" => 30,
            "ayat" => 8
          ],
          [
            "name" => "Al-Zalzalah",
            "juz" => 30,
            "ayat" => 8
          ],
          [
            "name" => "Al-'Adiyat",
            "juz" => 30,
            "ayat" => 11
          ],
          [
            "name" => "Al-Qari'ah",
            "juz" => 30,
            "ayat" => 11
          ],
          [
            "name" => "At-Takatsur",
            "juz" => 30,
            "ayat" => 8
          ],
          [
            "name" => "Al-'Ashr",
            "juz" => 30,
            "ayat" => 3
          ],
          [
            "name" => "Al-Humazah",
            "juz" => 30,
            "ayat" => 9
          ],
          [
            "name" => "Al-Fil",
            "juz" => 30,
            "ayat" => 5
          ],
          [
            "name" => "Quraisy",
            "juz" => 30,
            "ayat" => 4
          ],
          [
            "name" => "Al-Ma'un",
            "juz" => 30,
            "ayat" => 7
          ],
          [
            "name" => "Al-Kautsar",
            "juz" => 30,
            "ayat" => 3
          ],
          [
            "name" => "Al-Kafirun",
            "juz" => 30,
            "ayat" => 6
          ],
          [
            "name" => "Al-Nashr",
            "juz" => 30,
            "ayat" => 3
          ],
          [
            "name" => "Al-Lahab",
            "juz" => 30,
            "ayat" => 5
          ],
          [
            "name" => "Al-Ikhlas",
            "juz" => 30,
            "ayat" => 4
          ],
          [
            "name" => "Al-Falaq",
            "juz" => 30,
            "ayat" => 5
          ],
          [
            "name" => "An-Nas",
            "juz" => 30,
            "ayat" => 6
          ]
        ]);
    }
}
