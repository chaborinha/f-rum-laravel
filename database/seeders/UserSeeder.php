<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
           [
            'name' => 'Kauã Hernandes',
            'email' => 'user1@gmail.com',
            'password' => Hash::make('abc123456'),
            'created_at' => date('Y-m-d H:m:s')
           ],
           [
            'name' => 'Jhon Doe',
            'email' => 'user2@gmail.com',
            'password' => Hash::make('abc123456'),
            'created_at' => date('Y-m-d H:m:s')
           ],
           [
            'name' => 'João Lucas Hernandes',
            'email' => 'user3@gmail.com',
            'password' => Hash::make('abc123456'),
            'created_at' => date('Y-m-d H:m:s')
           ],
        ]);
    }
}
