<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      collect([
        [
            'name' => 'Adhy Wiranto S',
            'nrp' => '173040038',
            'email' => 'adhy@gmail.com',
            'major' => 'Informatics Engineering',
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
          'name' => 'Dicky Ardianto',
          'nrp' => '173040046',
          'email' => 'dicky@gmail.com',
          'major' => 'Industrial Engineering',
          'created_at' => now(),
          'updated_at' => now(),
        ],
        [
          'name' => 'Rafly Yunandi',
          'nrp' => '173040028',
          'email' => 'rafly@gmail.com',
          'major' => 'Architecture',
          'created_at' => now(),
          'updated_at' => now(),
        ]
    ])->each(function($student) {
        DB::table('students')->insert($student);
    });
    }
}
