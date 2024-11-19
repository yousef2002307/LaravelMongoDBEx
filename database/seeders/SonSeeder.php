<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Son;
class SonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Son::create([
            'user_id' => 1,
            'name' => "magad",
        ]);

        Son::create([
            'user_id' => 2,
            'name' => "yousef",
        ]);
    }
}
