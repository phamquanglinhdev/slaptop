<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('users')->insert([
            'name' => 'khanh',
            'email' => 'khanhdang@gmail.com',
            'password' => Hash::make('password'),
            'role' => 0,
            'created_at' => now(),
        ]);
    }
}
