<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
             'name' => 'Kauã',
             'email' => 'admin1@gmail.com',
             'role' => 'admin',
             'password' => Hash::make('abc123456'),
             'created_at' => date('Y-m-d H:m:s')
            ],
            [
             'name' => 'Garro',
             'role' => 'admin',
             'email' => 'admin2@gmail.com',
             'password' => Hash::make('abc123456'),
             'created_at' => date('Y-m-d H:m:s')
            ],
            [
             'name' => 'João',
             'email' => 'admin3@gmail.com',
             'role' => 'admin',
             'password' => Hash::make('abc123456'),
             'created_at' => date('Y-m-d H:m:s')
            ],
         ]);
    }
}
