@extends('layouts.dashboard1')

@section('content')
@section('title', 'Certificates')


    <div class="container mt-4">
        <h2>Détails du Certificat</h2>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">ID : {{ $certificat->id }}</h5>
                <p class="card-text"><strong>Nom Complet :</strong> {{ $certificat->nom_complet }}</p>
                <p class="card-text"><strong>Date de Naissance :</strong> {{ $certificat->date_naissance }}</p>
                <p class="card-text"><strong>Code MSSAR :</strong> {{ $certificat->code_mssar }}</p>
                <p class="card-text"><strong>Numéro de Téléphone :</strong> {{ $certificat->numero_telephone }}</p>
                <p class="card-text"><strong>Statut :</strong> {{ $certificat->statut }}</p>
                <a href="{{ route('certificats.index') }}" class="btn btn-primary">Retour à la liste des certificats</a>
            </div>
        </div>
    </div>
@endsection

