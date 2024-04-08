@extends('layouts.directorLayout')
@section('title')
    Ajouter matieres
@endsection
@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center align-items-center">
            <div class="col-md-6">
                <form method="POST" action="{{ route('saveMatiere') }}">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">matiere</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}"
                            placeholder="Entrez le nom" autofocus>
                        @error('name')
                            <span class="text text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Enregistrer</button>
                </form>
            </div>
        </div>
    </div>
@endsection
