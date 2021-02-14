@extends('layouts.app')

@section('content')
<div class="container">

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left mb-2">
                <h2>Ajouter une nouvelle annonce</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('annoncesimmo.index') }}">
                    <em class="fa fa-backward" aria-hidden="true"></em> 
                    Retour
                </a>
            </div>
        </div>
    </div>

      @if(session('status'))
        <div class="alert alert-success mb-1 mt-1">
            {{ session('status') }}
        </div>
      @endif

    <form action="{{ route('annoncesimmo.store') }}" method="POST">
        @csrf

         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Référence:</strong>
                    <input type="text" name="ref_annonce" class="form-control" placeholder="Référence de l'annonce">
                   @error('ref_annonce')
                      <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                   @enderror
                </div>
                <div class="form-group">
                    <strong>Prix (en €):</strong>
                    <input type="number" name="prix_annonce" class="form-control" placeholder="Prix de l'annonce">
                   @error('prix_annonce')
                      <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                   @enderror
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Surface habitable (en m<sup>2</sup>):</strong>
                    <input type="text" name="surface_habitable" class="form-control" placeholder="Surface habitable">
                   @error('surface_habitable')
                      <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                   @enderror
                </div>
                <div class="form-group">
                    <strong>Nombre de pièces:</strong>
                    <input type="number" name="nombre_de_piece" class="form-control" placeholder="Nombre de pièces">
                   @error('nombre_de_piece')
                      <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                   @enderror
                </div>
            </div>
            <button type="submit" class="btn btn-primary ml-3">Valider</button>
        </div>
    </form>
</div>
@endsection