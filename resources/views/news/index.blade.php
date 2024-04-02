@extends('layouts.app')

@section('content')

    <div class="container">
        <h1>Liste des Nouvelles</h1>
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">Image</th>
                        <th scope="col">Titre</th>
                        <th scope="col">Paragraphe</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($newsList as $news)
                    <tr>
                        <td><img src="{{ asset('storage/news_images/' . $news->image) }}" alt="Image" width="100px"></td>
                        <td>{{ $news->title }}</td>
                        <td>{{ $news->paragraph }}</td>
                        <td>
                            <a href="{{ route('news.edit', $news->id) }}" class="btn btn-sm btn-primary">Editer</a>
                            <form action="{{ route('news.destroy', $news->id) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger">Supprimer</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
