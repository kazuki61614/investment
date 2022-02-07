<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            'body' => '命名はデータを基準に考える',
            'user_id' => 1,
        ]);
        DB::table('posts')->insert([
            'body' => '読めるようになれば怖くない',
            'user_id' => 1,
        ]);
    }
}