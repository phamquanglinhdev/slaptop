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
            'name' => 'admin1',
            'email' => 'admin1@gmail.com',
            'password' => Hash::make('password'),
            'role' => 0,
            'created_at' => now(),
        ]);
        DB::table('users')->insert([
            'name' => 'admin2',
            'email' => 'admin2@gmail.com',
            'password' => Hash::make('password'),
            'role' => 0,
            'created_at' => now(),
        ]);
        DB::table('users')->insert([
            'name' => 'admin3',
            'email' => 'admin3@gmail.com',
            'password' => Hash::make('password'),
            'role' => 0,
            'created_at' => now(),
        ]);
        DB::table('users')->insert([
            'name' => 'admin4',
            'email' => 'admin4@gmail.com',
            'password' => Hash::make('password'),
            'role' => 0,
            'created_at' => now(),
        ]);
        DB::table('users')->insert([
            'name' => 'admin5',
            'email' => 'admin5@gmail.com',
            'password' => Hash::make('password'),
            'role' => 0,
            'created_at' => now(),
        ]);
    }
}
