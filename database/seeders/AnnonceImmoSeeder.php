<?php

namespace Database\Seeders;

use App\Models\AnnonceImmo;
use Illuminate\Database\Seeder;

class AnnonceImmoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        AnnonceImmo::create([
            "ref_annonce" => "128555AN",
            "prix_annonce" => 150.34,
            "surface_habitable" => 35.38,
            "nombre_de_piece" => 7
        ]);
        AnnonceImmo::create([
            "ref_annonce" => "129955AN",
            "prix_annonce" => 170.34,
            "surface_habitable" => 26.38,
            "nombre_de_piece" => 6
        ]);
        AnnonceImmo::create([
            "ref_annonce" => "120955AN",
            "prix_annonce" => 100.34,
            "surface_habitable" => 40.38,
            "nombre_de_piece" => 5
        ]);
        AnnonceImmo::create([
            "ref_annonce" => "120900AN",
            "prix_annonce" => 99.34,
            "surface_habitable" => 25.00,
            "nombre_de_piece" => 5
        ]);
    }
}
