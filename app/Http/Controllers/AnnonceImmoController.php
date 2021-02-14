<?php

namespace App\Http\Controllers;

use App\Models\AnnonceImmo;
use Illuminate\Http\Request;

class AnnonceImmoController extends Controller
{
    /**
     * Display a listing of the resource (annonces immobilières).
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $annoncesimmos = AnnonceImmo::all();
        //dd($annoncesimmos);
        return view("index",compact("annoncesimmos"));
    }

    /**
     * Show the form for creating a new resource (annonce immobilière).
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("create");
    }

    /**
     * Store a newly created resource (annonce immobilière) in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Validation of datas when the form is submitting
        $request->validate([
            "ref_annonce" => "required|max:10",
            "prix_annonce" => "required|numeric",
            "surface_habitable" => "required|numeric",
            "nombre_de_piece" => "required|numeric"
        ]);

        $annonceimmo = new AnnonceImmo();

        $annonceimmo->ref_annonce = $request->ref_annonce;
        $annonceimmo->prix_annonce = $request->prix_annonce;
        $annonceimmo->surface_habitable = $request->surface_habitable;
        $annonceimmo->nombre_de_piece = $request->nombre_de_piece;

        //Save the data in the table
        $annonceimmo->save();
        
        //redirect with a success message
        return redirect()->route("annoncesimmo.index")
                         ->with("success","Annonce créée avec succès.");

    }

    /**
     * Display the specified resource (annonce immobilière).
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show(int $id)
    {
        $annonceImmo = AnnonceImmo::find($id);
        return view("show",compact("annonceImmo"));
    }

    /**
     * Show the form for editing the specified resource (annonce immobilière).
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit(int $id)
    {
        $annonceImmo = AnnonceImmo::find($id);
        return view("edit",compact("annonceImmo"));
    }

    /**
     * Update the specified resource (annonce immobilière) in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, int $id)
    {
        //Validation of datas when the form is submitting
        $request->validate([
            "ref_annonce" => "required|max:10",
            "prix_annonce" => "required|numeric",
            "surface_habitable" => "required|numeric",
            "nombre_de_piece" => "required|numeric"
        ]);

        $annonceImmo = AnnonceImmo::find($id);

        $annonceImmo->ref_annonce = $request->ref_annonce;
        $annonceImmo->prix_annonce = $request->prix_annonce;
        $annonceImmo->surface_habitable = $request->surface_habitable;
        $annonceImmo->nombre_de_piece = $request->nombre_de_piece;

        //Save the data in the table
        $annonceImmo->save();
        
        //redirect with a success message
        return redirect()->route("annoncesimmo.index")
                         ->with("success","Annonce modifiée avec succès.");


    }

    /**
     * Remove the specified resource (annonce immobilière) from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(int $id)
    {
        $annonceImmo = AnnonceImmo::find($id);
        $annonceImmo->delete();

        return redirect()->route("annoncesimmo.index")
                        ->with("success","Annonce supprimée avec succès");
    }
}
