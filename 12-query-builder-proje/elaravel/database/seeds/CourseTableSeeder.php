<?php

use Illuminate\Database\Seeder;

class CourseTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('course')->insert([
            [
                'course_title' => 'Php',
                'course_content' => 'Php kurs içeriği',
                'course_must' => 1
            ],
            [
                'course_title' => 'Bootstrap',
                'course_content' => 'Bootstrap kurs içeriği',
                'course_must' => 2
            ],
            [
                'course_title' => 'JS',
                'course_content' => 'JS kurs içeriği',
                'course_must' => 3
            ],
            [
                'course_title' => 'Laravel 6',
                'course_content' => 'Laravel 6 kurs içeriği',
                'course_must' => 4
            ]
        ]);
    }
}
