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
                'password' => bcrypt(123),
                'role' => 1
            ],
            [
                'name' => 'Abu Fulan',
                'email' => 'fulan@ortu.com',
                'password' => bcrypt(123),
                'role' => 2
            ],
            [
                'name' => 'PT Donatur',
                'email' => 'donatur@donasi.com',
                'password' => bcrypt(123),
                'role' => 3
            ],
        ]);
    }
}
