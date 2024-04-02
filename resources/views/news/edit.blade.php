
@extends('layouts.app')

@section('content')
    <h1>Editer la Nouvelle</h1>
    <form action="{{ route('news.update', $news->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label for="title">Titre :</label>
            <input type="text" name="title" id="title" value="{{ $news->title }}">
        </div>
        <div>
            <label for="paragraph">Paragraphe :</label>
            <textarea name="paragraph" id="paragraph" cols="30" rows="10">{{ $news->paragraph }}</textarea>
        </div>
        <button type="submit">Mettre à jour</button>
    </form>
@endsection
