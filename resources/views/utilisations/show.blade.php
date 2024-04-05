@extends('layouts.dashboard1')

@section('content')
    <div class="container">
        <h1>Détails de l'utilisation du temps</h1>

        <div>
            <p><strong>Classe:</strong> {{ $utilisation->classe }}</p>
            <p><strong>Filière:</strong> {{ $utilisation->filiere }}</p>
            <p><strong>Image:</strong> <img src="{{ asset('images/' . $utilisation->image) }}" width="100px"></p>
        </div>

        <div class="mt-3">
            <a href="{{ route('utilisations.edit', $utilisation->id) }}" class="btn btn-primary">Modifier</a>
            <form action="{{ route('utilisations.destroy', $utilisation->id) }}" method="POST" style="display: inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Supprimer</button>
            </form>
        </div>
    </div>
@endsection
