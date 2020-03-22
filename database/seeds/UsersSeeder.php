<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        User::insert([
            [
                'name' => 'Administrator',
                'email' => 'admin@admin.com',
                'password' => bcrypt(111111),
                'role' => 1
            ],
            [
                'name' => 'Abu Fulan',
                'email' => 'abu@musyrif.com',
                'password' => bcrypt(111111),
                'role' => 2
            ],
            [
                'name' => 'Ibnu Fulan',
                'email' => 'ibnu@asatidz.com',
                'password' => bcrypt(111111),
                'role' => 3
            ],
            [
                'name' => 'Fulus',
                'email' => 'fulus@keuangan.com',
                'password' => bcrypt(111111),
                'role' => 4
            ],
        ]);
    }
}
