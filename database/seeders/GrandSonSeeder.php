<?php

namespace Database\Seeders;

use App\Models\GrandSon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GrandSonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        GrandSon::create([
           "son_id" => 1,
           "name" => "yousef"
        ]);
    }
}
