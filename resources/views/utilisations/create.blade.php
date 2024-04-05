@extends('layouts.dashboard1')

@section('content')
    <div class="container">
        <h1>Créer une nouvelle utilisation du temps</h1>

        <form action="{{ url('utilisations') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="classe">Classe</label>
                <input type="text" class="form-control" id="classe" name="classe" placeholder="Entrez la classe">
            </div>
            <div class="form-group">
                <label for="filiere">Filière</label>
                <input type="text" class="form-control" id="filiere" name="filiere" placeholder="Entrez la filière">
            </div>
            <div class="form-group">
                <label for="image">Image</label>
                <input type="file" class="form-control" id="image" name="image"  placeholder="Entrez le chemin de l'image">
            </div>
            <button type="submit" class="btn btn-primary">Enregistrer</button>
        </form>
    </div>
@endsection
