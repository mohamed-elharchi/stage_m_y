@extends('layouts.dashboard1')

@section('content')
@section('title', 'Certificates')

    <div class="container">
        <div class="row justify-content-center">

                <div class="card">
                    <div class="card-header text-black" style="background-color: #db751b;"><div class="col-sm-6 p-0 flex justify-content-lg-start justify-content-center">
                                <h4 class="ml-lg-4">Liste des Certificats</h4>
                            </div></div>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Nom Complet</th>
                                        <th>Dernière Année Scolaire</th>
                                        <th>Date de Naissance</th>
                                        <th>Numéro de Téléphone</th>
                                        <th>Statut</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($certificats as $certificat)
                                        <tr>
                                            <td>{{ $certificat->id }}</td>
                                            <td>{{ $certificat->nom_complet }}</td>
                                            <td>{{ $certificat->derniere_annee_scolaire }}</td>
                                            <td>{{ $certificat->date_de_naissance }}</td>
                                            <td>{{ $certificat->numero_telephone }}</td>
                                            <td>{{ $certificat->statut }}</td>
                                            <td>
                                                <a href="{{ route('certificats2.show', $certificat->id) }}" class="btn btn-info btn-sm">Voir</a>
                                                <form action="{{ route('certificats2.destroy', $certificat->id) }}" method="POST" style="display: inline;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce certificat?')">Supprimer</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

@endsection
