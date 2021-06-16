<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'Luka Rakocevic',
                'username' => 'rakoc',
                'email' => 'rakocevic.luka@gmail.com',
                'password' => '$2y$12$MctmhA3P9fe7wtjiYCcFpOGTttlOYYCT27mMTPBChNkUAyfysuh9.',
            ],
            [
                'name' => 'Bogdan Kalpacina',
                'username' => 'blerobliznar',
                'email' => 'Bogdan@gmail.com',
                'password' => '$2y$12$rZwGI0mxIJa1bE5fGFvM2urpJt1C4t0mm2R7CECT4y99yn/SZkN9S'
            ],
            [
                'name' => 'Sasa Basanovic',
                'username' => 'baso',
                'email' => 'baso@gmail.com',
                'password' => '$2y$12$4ecqxDufA38maDkw9LJB3.bIoynjhgi72gFNeKUzEVnqTxf2vKus6'
            ],
            [
                'name' => 'Matija Vukotic',
                'username' => 'gazda',
                'email' => 'matovukotic@gmail.com',
                'password' => '$2y$12$cqTkEA6IihZEETryLVnAW.M/dbvbZOzPsxXf4PBTWiRKjsnANTcye'
            ]

        ]);
    }
}
