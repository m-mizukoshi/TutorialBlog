<?php

use Illuminate\Database\Seeder;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
                'title' => 'ここにタイトルが入ります',
                'content' => 'ここに本文が入ります',
                'created_at' => '2017-05-05 10:10:10'
        ]);
    }
}
