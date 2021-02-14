@extends("layouts.app")

@section("content")
<div class="container">
    <div class="row text-center">
        <div class="col-lg-12">
            <div class="pull-left">
                <h2>Liste de vos annonces immobilières</h2>
            </div>
            <div class="pull-right mb-2">
                <a class="btn btn-success" href="{{ route('annoncesimmo.create') }}">
                    <em class="fa fa-plus" aria-hidden="true"></em>
                    Ajouter une nouvelle annonce
                </a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>Référence annonce</th>
            <th>Prix (en €)</th>
            <th>Surface habitable (en m<sup>2</sup>)</th>
            <th>Nombre de pièces</th>
            <th>Action</th>
        </tr>
        @foreach ($annoncesimmos as $annoncesimmo)
            <tr>
                <td>{{ $annoncesimmo->ref_annonce }}</td>
                <td>{{ $annoncesimmo->prix_annonce }}</td>
                <td>{{ $annoncesimmo->surface_habitable }}</td>
                <td>{{ $annoncesimmo->nombre_de_piece }}</td>
                <td>
                    <form action="{{ route('annoncesimmo.destroy',$annoncesimmo->id) }}" method="POST">

                        <a class="btn btn-info" href="{{ route('annoncesimmo.show',$annoncesimmo->id) }}">
                            <em class="fa fa-eye" aria-hidden="true"></em>
                            Voir
                        </a>

                        <a class="btn btn-primary" href="{{ route('annoncesimmo.edit',$annoncesimmo->id) }}">
                            <em class="fa fa-pencil-square-o" aria-hidden="true"></em>
                            Modifier
                        </a>

                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger" onclick="return confirm('Êtes-vous vraiment sûr de supprimer cette annonce {{ $annoncesimmo->ref_annonce }} ?')">
                            <em class="fa fa-trash" aria-hidden="true"></em>
                            Supprimer
                        </button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
</div>
@endsection
