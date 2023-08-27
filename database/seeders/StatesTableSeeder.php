<?php
namespace Database\Seeders;

use App\Models\State;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StatesTableSeeder extends Seeder
{

    public function run()
    {
        DB::table('states')->delete();

        $states =  ["Dhanmondi", "Panthpath", "Kalabagan", "Arong", "Noakhali", "Banani", "Uttara", "Abdullahpur", "Mohammadpur", "Chatkhil", "Chadpur", "Sukrabad", "Malibagh", "Gulsan", "Mohakhali", "Badda", "Diyabari", "Airport", "Basundhara Resiential", "Mirpur", "Mirpur-1", "Mirpur-2", "Mirpur-10", "Mirpur-11", "Mirpur-12", "Mirpur-13", "Mirpur-14", "Mirpur-6", "Pallobi", "Baridhara", "Jatrabari", "Narayganj", "Gulistan", "Shabagh", "Paltan", "Turag", "Tongi", "Khilgaon", "Rampura", "Mochak", "Framgate", "Bangla Motor", "Kakrail", "Tejgaon", "Dhamondi-27", "Dhamondi-32", "Dhamondi-9", "Dhamondi-10", "Dhamondi-15", "Jigatola", "New Market", "Nilkhet", "Azimpur", "Lalbagh", "Sadarghat", "Ahsan Monjil", "Babu Bazar", "Khilkhet", "Nikunja", "Kuril", "Josim Uddin", "Kakoli", "Amtoli", "Noddda", "Progoti Saroni", "Shazadpur", "Bosila", "Kafrul", "Sonaimuni", "Majgdhi", "Company Bazar", "Feni", "Sonagasa", "Begumganj", "Chowhomuni", "Ramganj", "Joyag", "Townhall", "Asad Gate", "Symoli", "Kallanpur", "Technical", "Gabtoli", "Rayer Bazar", "SignBoard", "puran Dhaka", "Belly Road", "Love Road", "Bangshal", "SheikherTag", "Adabor", "Arambagh", "Golapbag", "TT Para", "KamalaPur", "Pressclub", "Shantinagar", "Kodomtoli", "Janata", "Fokirapull", "Motijhill", "Hatirpull", "Elepent Road", "Bata Signal", "Science Lab", "City college", "pillkhana", "Mohakhali DOHS", "Mirpur DOHS", "Matikata", "Sagupta", "emg", "Ibrahimpur", "Agargon", "Taltola", "Sherapara", "Kazipara",
    ];

        foreach ($states as $state) {
            State::create(['name' => $state]);
        }
    }

}
