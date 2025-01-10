<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('comments')->insert([
            [
             'body' => 'comentario 1',
             'user_id' => 1,
             'post_id' => 1,
             'created_at' => date('Y-m-d H:m:s')
            ],
            [
             'body' => 'comentario 2',
             'user_id' => 2,
             'post_id' => 1,
             'created_at' => date('Y-m-d H:m:s')
            ],
            [
             'body' => 'comentario 3',
             'user_id' => 2,
             'post_id' => 1,
             'created_at' => date('Y-m-d H:m:s')
            ],
         ]);
    }
}
