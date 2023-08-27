<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GradesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('grades')->delete();

        $this->createGrades();
    }

    protected function createGrades()
    {

        $d = [

            ['name' => 'A+', 'mark_from' => 80, 'mark_to' => 100, 'remark' => 'Excellent'],
            ['name' => 'A', 'mark_from' => 70, 'mark_to' => 79, 'remark' => 'Very Good'],
            ['name' => 'A-', 'mark_from' => 65, 'mark_to' => 69, 'remark' => 'Good'],
            ['name' => 'B+', 'mark_from' => 60, 'mark_to' => 64, 'remark' => 'Pass'],
            ['name' => 'B', 'mark_from' => 55, 'mark_to' => 59, 'remark' => 'pass'],
            ['name' => 'F', 'mark_from' => 0, 'mark_to' => 39, 'remark' => 'Fail'],


        ];
        DB::table('grades')->insert($d);
    }
}
