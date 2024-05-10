
@extends('layouts.dashboard1')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Détails de l'étudiant</div>

                    <div class="card-body">
                        <p><strong>Nom :</strong> {{ $student->nom }}</p>
                        <p><strong>Dernier année scolaire :</strong> {{ $student->scolaire }}</p>
                        <p><strong>Date de naissance :</strong> {{ $student->date }}</p>
                        <p><strong>Téléphone :</strong> {{ $student->téléphone }}</p>
                        <p><strong>Statut :</strong> {{ $student->statut }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

