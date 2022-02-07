<?php

use Illuminate\Database\Seeder;

class CommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('comments')->insert([
            'body' => '命名はデータを基準に考える',
            'post_id' => 1,
        ]);
        DB::table('comments')->insert([
            'body' => '読めるようになれば怖くない',
            'post_id' => 1,
        ]);
    }
}
