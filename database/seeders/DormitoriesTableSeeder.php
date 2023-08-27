<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DormitoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('dormitories')->delete();
        $data = [
            ['name' => 'DIIT Hostel'],
            ['name' => 'Daffodil Hostel'],
            ['name' => 'DIU Hostel'],
            ['name' => 'DIIT Hostel2'],
            ['name' => 'Trust Hostel'],
        ];
        DB::table('dormitories')->insert($data);
    }
}
