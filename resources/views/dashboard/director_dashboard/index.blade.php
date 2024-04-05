@extends('layouts.directorLayout')
@section('title')
Responsables
@endsection
@section('content')

@if ($errors->any())
    <div class="alert alert-danger" role="alert">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@if (session('success'))
    <div class="alert alert-success" role="alert">
        <p>{{ session('success') }}</p>
    </div>
@endif

@if (session('edit'))
    <div class="alert alert-info" role="alert">
        <p>The employee <span class="text text-primary">{{ session('edit') }}</span> has been updated successfully </p>
    </div>
@endif

<div class="container mt-4">
    <div class="row justify-content-between mb-3">
        <div class="col-lg-2">
            <a class="btn btn-success" href="{{ route('addGeneralGuard') }}">Ajouter</a>
        </div>
        <div class="col-lg-3">
            <form action="{{ route('filterGeneralGuards') }}" method="GET" class="form-inline">
                <div class="form-group">
                    <label for="role" class="mr-2">Filtrer par rôle:</label>
                    <select class="form-control mr-2" id="role" name="role">
                        <option value="">Tous les rôles</option>
                        <option value="director">Directeur</option>
                        <option value="teacher">Enseignant</option>
                        <option value="general_guard">Garde général</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Filtrer</button>
            </form>
        </div>
    </div>

    <table class="table table-bordered">
        <tr>
            <th>Numéro</th>
            <th>Nom</th>
            <th>Adresse e-mail</th>
            <th>Le rôle</th>
            <th>Action</th>
        </tr>
        @foreach ($generalGuards as $index => $generalGuard)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $generalGuard->name }}</td>
                <td>{{ $generalGuard->email }}</td>
                <td>{{ $generalGuard->role }}</td>
                <td>
                    <form action="{{ route('deleteGeneral_guard', $generalGuard->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <a class="btn btn-primary" href="{{ route('updateGeneral_guard', $generalGuard->id) }}">Modifier</a>
                        <button type="submit" class="btn btn-danger">Supprimer</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
</div>


@endsection
