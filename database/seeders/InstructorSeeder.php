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
    }
}
