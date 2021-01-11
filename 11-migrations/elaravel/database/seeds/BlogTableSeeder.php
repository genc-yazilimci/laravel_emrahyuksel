<?php

use Illuminate\Database\Seeder;
class BlogTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('blogs')->insert([
           [
               'blog_title' => Str::random(10).'@gmail.com',
               'blog_content' => 'Blog Content 01'
           ],
           [
               'blog_title' => Str::random(10),
               'blog_content' => 'Blog Content 02'
           ]
       ]);
    }
}
