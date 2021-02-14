@extends('layouts.app')

@section('content')
<div class="container">

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left mb-2">
                <h2>Détail de l'annonce</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('annoncesimmo.index') }}">
                    <em class="fa fa-backward" aria-hidden="true"></em> 
                    Retour
                </a>
            </div>
        </div>
    </div>

         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Référence:</strong>
                    {{$annonceImmo->ref_annonce}}
                </div>
                <div class="form-group">
                    <strong>Prix (en €):</strong>
                    {{$annonceImmo->prix_annonce}}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Surface habitable (en m<sup>2</sup>):</strong>
                    {{$annonceImmo->surface_habitable}}
                </div>
                <div class="form-group">
                    <strong>Nombre de pièces:</strong>
                    {{$annonceImmo->nombre_de_piece}}
                </div>
            </div>

        </div>
</div>
@endsection