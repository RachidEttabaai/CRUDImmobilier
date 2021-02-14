<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnnonceImmo extends Model
{
    use HasFactory;

    protected $fillable = [
        "ref_annonce",
        "prix_annonce",
        "surface_habitable",
        "nombre_de_piece"
    ];
}
