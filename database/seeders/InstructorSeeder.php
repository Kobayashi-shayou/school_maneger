<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Instructor;

class InstructorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
	  Instructor::create([
            'name' => '田中太郎',
            'introduction' => 'PHP強強です'
        ]);
 	Instructor::create([
            'name' => '中山千歳',
            'introduction' => 'HTML/CSSが得意です'
        ]);
	Instructor::create([
            'name' => '松田優作',
            'introduction' => 'Laravelマスターです'
        ]);
    }
}
