@extends("layouts.app")

@section("content")
<div class="container">
    <div class="row text-center">
        <div class="col-lg-12">
            <div class="pull-left">
                <h2>Liste de vos annonces immobilières</h2>
            </div>
            <div class="pull-right mb-2">
                <a class="btn btn-success" href="#">
                    <em class="fa fa-plus" aria-hidden="true"></em>
                    Ajouter une nouvelle annonce
                </a>
            </div>
        </div>
    </div>

    <table class="table table-bordered">
        <tr>
            <th>Référence annonce</th>
            <th>Prix (en €)</th>
            <th>Surface habitable (en m<sup>2</sup>)</th>
            <th>Action</th>
        </tr>

    </table>
</div>
@endsection
