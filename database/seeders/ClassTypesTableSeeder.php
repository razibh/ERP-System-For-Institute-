<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClassTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('class_types')->delete();

        $data = [
            ['name' => 'CSE 5th Semester', 'code' => 'C'],
            ['name' => 'CSE 6th Semester', 'code' => 'PN'],
            ['name' => 'CSE 7th Semester', 'code' => 'N'],
            ['name' => 'CSE 8th Semester', 'code' => 'P'],
            ['name' => 'BBA ', 'code' => 'J'],
            ['name' => 'THM ', 'code' => 'S'],
        ];

        DB::table('class_types')->insert($data);

    }
}
