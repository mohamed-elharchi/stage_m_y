
@extends('layouts.dashboard1')

@section('content')
    <div>
        <h2>Ajouter un étudiant</h2>
        <form method="POST" action="{{ route('students.store') }}">
            @csrf
            <input type="text" name="nom" placeholder="Nom">
            <input type="text" name="scolaire" placeholder="Scolaire">
            <input type="date" name="date" placeholder="Date">
            <input type="text" name="téléphone" placeholder="Téléphone">
            <input type="text" name="statut" placeholder="Statut">
            <button type="submit">Ajouter</button>
        </form>
    </div>
@endsection
