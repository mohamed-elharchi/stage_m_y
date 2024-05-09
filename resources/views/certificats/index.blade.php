@extends('layouts.dashboard1')

@section('content')
@section('title', 'Certificates')


    <div class="container">
        <h2>Liste des Certificats</h2>
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nom Complet</th>
                    <th>Date de Naissance</th>
                    <th>Code MSSAR</th>
                    <th>Numéro de Téléphone</th>
                    <th>Statut</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($certificats as $certificat)
                    <tr>
                        <td>{{ $certificat->id }}</td>
                        <td>{{ $certificat->nom_complet }}</td>
                        <td>{{ $certificat->date_naissance }}</td>
                        <td>{{ $certificat->code_mssar }}</td>
                        <td>{{ $certificat->numero_telephone }}</td>
                        <td>{{ $certificat->statut }}</td>
                        <td>
                            <a href="{{ route('certificats.show', $certificat->id) }}" class="btn btn-info">Voir</a>
                            <form action="{{ route('certificats.destroy', $certificat->id) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce certificat ?')">Supprimer</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

