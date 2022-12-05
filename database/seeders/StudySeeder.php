<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Study;

class StudySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
	Study::create([
            'title' => 'PHP勉強会',
            'body' => 'PHPで掲示板を作ろう！',
            'instructor_id' => '1'
        ]);
	Study::create([
            'title' => 'Laravel勉強会',
            'body' => 'ECサイトを作ってみよう',
            'instructor_id' => '3'
        ]);
	Study::create([
            'title' => 'リモートでデザインの仕事を目指してみよう!',
            'body' => 'HTML/CSSの基本から実際に作成してみる',
            'instructor_id' => '2'
        ]);
    }
}
