@extends('layouts.app')

@section('content')

<div class="container">

    <div class="main-content">
        <div class="row">
            <div class="col-md-12">
                <div class="table-wrapper">

                    <div class="table-title">
                        <div class="row">
                            <div class="col-sm-6 p-0 flex justify-content-lg-start justify-content-center">
                                <h2 class="ml-lg-2">Gérer la Liste Des Nouvelles</h2>
                            </div>
                            <div class="col-sm-6 p-0 flex justify-content-lg-end justify-content-center">
                                <a href="{{ route('news.create') }}" class="btn  btn-danger">
                                    <i class="material-icons">&#xE147;</i>
                                    <span>Ajouter des nouvelles</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
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
                                <td><img src="{{ asset($news->photo) }}" alt="Image" width="100px"></td>
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
        </div>
    </div>
</div>
@endsection
