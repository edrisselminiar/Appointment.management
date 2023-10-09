<?php

namespace Database\Seeders;

use App\Models\User;
use GuzzleHttp\Promise\Create;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        User::create([

            'name' => 'admin',
            'prenom' => 'admin',
            'téléphone' => '0600000000',
            'cin' => 'admin',
            'email' => 'admin@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('password'),   //password is password
            'is_admin' => true,
            

        ]);

        //test user

        User::create([

            'name' => 'test',
            'prenom' => 'test',
            'téléphone' => '0600000000',
            'cin' => 'test',
            'email' => 'test@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('password'),   //password is password
            'is_admin' => false,
            

        ]);
    }
}


