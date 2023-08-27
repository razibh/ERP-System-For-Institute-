<?php
namespace Database\Seeders;

use App\Models\ClassType;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class MyClassesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('my_classes')->delete();
        $ct = ClassType::pluck('id')->all();

        $data = [
            ['name' => 'CSE 1st Semester', 'class_type_id' => $ct[2]],
            ['name' => 'CSE 2nd Semester', 'class_type_id' => $ct[2]],
            ['name' => 'CSE 3rd Semester', 'class_type_id' => $ct[2]],
            ['name' => 'CSE 4th Semester', 'class_type_id' => $ct[3]],
            ['name' => 'CSE 5th Semester', 'class_type_id' => $ct[3]],
            ['name' => 'CSE 6th Semeste', 'class_type_id' => $ct[4]],
            ['name' => 'CSE 7th Semeste', 'class_type_id' => $ct[4]],
            ['name' => 'CSE 8th Semeste', 'class_type_id' => $ct[5]],
            ['name' => 'BBA', 'class_type_id' => $ct[5]],
            ['name' => 'THM', 'class_type_id' => $ct[5]],
            ];

        DB::table('my_classes')->insert($data);

    }
}
