<?php

namespace App\Http\Controllers;

use App\Models\AnnonceImmo;
use Illuminate\Http\Request;

class AnnonceImmoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("index");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AnnonceImmo  $annonceImmo
     * @return \Illuminate\Http\Response
     */
    public function show(AnnonceImmo $annonceImmo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AnnonceImmo  $annonceImmo
     * @return \Illuminate\Http\Response
     */
    public function edit(AnnonceImmo $annonceImmo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AnnonceImmo  $annonceImmo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AnnonceImmo $annonceImmo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AnnonceImmo  $annonceImmo
     * @return \Illuminate\Http\Response
     */
    public function destroy(AnnonceImmo $annonceImmo)
    {
        //
    }
}
