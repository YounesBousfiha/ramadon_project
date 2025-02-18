<?php

namespace Database\Seeders;

use App\Models\Categorie;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = ['salade', 'entree', 'desert'];
        foreach ($data as $entry ) {
            Categorie::create([
                'categorie_nom' => $entry,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
