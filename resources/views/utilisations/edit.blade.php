@extends('layouts.dashboard1')

@section('content')
    <div class="container">
        <h1>Modifier l'utilisation du temps</h1>

        <form action="{{ route('utilisations.update', $utilisation->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="classe">Classe</label>
                <input type="text" class="form-control" id="classe" name="classe" value="{{ $utilisation->classe }}">
            </div>
            <div class="form-group">
                <label for="filiere">Filière</label>
                <input type="text" class="form-control" id="filiere" name="filiere" value="{{ $utilisation->filiere }}">
            </div>
            <div class="form-group">
                <label for="image">Image :</label>
                <input type="file" class="form-control" id="image" name="image">
                @if($utilisation->image)
                    <img src="/images/{{ $utilisation->image }}" alt="Current Image" class="mt-2" style="max-width: 100px;">
                @endif
            </div>
            <button type="submit" class="btn btn-primary">Enregistrer</button>
        </form>
    </div>
@endsection
