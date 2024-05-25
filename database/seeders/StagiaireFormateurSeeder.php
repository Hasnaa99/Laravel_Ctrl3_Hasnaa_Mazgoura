<?php

namespace Database\Seeders;

use App\Models\Formateur;
use App\Models\Stagiaire;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StagiaireFormateurSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $stagiaires = Stagiaire::all();
        $formateurs = Formateur::all();

        // Associer plusieurs formateurs aléatoires à chaque stagiaire
        foreach ($stagiaires as $stagiaire) {
            // Choisir un nombre aléatoire de formateurs (par exemple, entre 1 et 3 formateurs)
            $randomFormateurs = $formateurs->random(rand(1, 3));
            
            // Attacher les formateurs au stagiaire
            foreach ($randomFormateurs as $formateur) {
                $stagiaire->formateurs()->attach($formateur);
            }
        }
    }
}
