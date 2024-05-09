@extends('layouts.dashboard1')

@section('content')
@section('title', 'Certificates')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Détails du Certificat Interrompu</div>

                    <div class="card-body">
                        <table class="table">
                            <tbody>
                                <tr>
                                    <th>ID:</th>
                                    <td>{{ $certificatInterrompu->id }}</td>
                                </tr>
                                <tr>
                                    <th>Nom Complet:</th>
                                    <td>{{ $certificatInterrompu->nom_complet }}</td>
                                </tr>
                                <tr>
                                    <th>Dernière Année Scolaire:</th>
                                    <td>{{ $certificatInterrompu->derniere_annee_scolaire }}</td>
                                </tr>
                                <tr>
                                    <th>Date de Naissance:</th>
                                    <td>{{ $certificatInterrompu->date_de_naissance }}</td>
                                </tr>
                                <tr>
                                    <th>Numéro de Téléphone:</th>
                                    <td>{{ $certificatInterrompu->numero_telephone }}</td>
                                </tr>
                                <tr>
                                    <th>Statut:</th>
                                    <td>{{ $certificatInterrompu->statut }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
