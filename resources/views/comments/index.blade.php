@extends('layouts.dashboard1')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Commentaires</div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nom</th>
                                <th scope="col">Date</th>
                                <th scope="col">Commentaire</th>
                                <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($comments as $comment)
                            <tr>
                                <th scope="row">{{ $comment->id }}</th>
                                <td>{{ $comment->name }}</td>
                                <td>{{ $comment->date }}</td>
                                <td>{{ $comment->comment }}</td>
                                <td>
                                    <a href="{{ route('comments.show2', $comment->id) }}" class="btn btn-primary">Afficher</a>
                                    <form action="{{ route('comments.destroy', $comment->id) }}" method="POST" style="display: inline;">
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
            </div>
        </div>
    </div>
</div>
@endsection
