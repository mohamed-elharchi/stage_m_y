@extends('layouts.dashboard1')

@section('content')
    <div class="container">
        <h1>Liste des utilisations du temps</h1>

        <div class="mb-3">
            <a href="{{ route('utilisations.create') }}" class="btn btn-success">Ajouter</a>
        </div>

        <table class="table">
            <thead>
                <tr>
                    <th>Classe</th>
                    <th>Filière</th>
                    <th>Image</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($utilisations as $utilisation)
                <tr>
                    <td>{{ $utilisation->classe }}</td>
                    <td>{{ $utilisation->filiere }}</td>
                    <td>
                        <img src="{{ asset('images/' . $utilisation->image) }}" width="100px">
                    </td>
                    <td>
                        <a href="{{ route('utilisations.show', $utilisation->id) }}" class="btn btn-primary">Voir</a>
                        <a href="{{ route('utilisations.edit', $utilisation->id) }}" class="btn btn-primary">Modifier</a>
                        <form action="{{ route('utilisations.destroy', $utilisation->id) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Supprimer</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
