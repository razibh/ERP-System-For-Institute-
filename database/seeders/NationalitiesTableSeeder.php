<?php
namespace Database\Seeders;

use App\Models\Nationality;
use Illuminate\Database\Seeder;


class NationalitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $nationals = array(
            'Dhaka', 'Chittaong', 'Khulna', 'Rajshahi', 'Barishal', 'Rangpur', 'Syhlet', 'Mymensigh', 'Gazipur', 'Narayanjang', 'Noakhali', 'Feni', 'Chadpur', 'Cumilla', 'Bhola', 'Faridpur', 'Golamganj', 'Magura', 'Natore', 'Dinajpur', 'B.Baria', 'MoluviBazar', 'Thakurgaon', 'Joypurhat', 'Madaripur', 'Bogura'
           
        );

        foreach ($nationals as $n) {
            Nationality::create(['name' => $n]);
        }
    }
}
