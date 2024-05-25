<?php

namespace Database\Seeders;

use App\Models\Moteur;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MoteurSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Moteur::factory()->count(10)->create();
    }
}
