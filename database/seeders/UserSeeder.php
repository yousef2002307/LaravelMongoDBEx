<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => "samy",
            'email' => "mmnwat6@gmail.com",
            'email_verified_at' => now(),
            'password' => bcrypt('password'),
       
        ]);

        User::create([
            'name' => "walledd",
            'email' => "waled@gmail.com",
            'email_verified_at' => now(),
            'password' => bcrypt('password'),
       
        ]);
    }
}
