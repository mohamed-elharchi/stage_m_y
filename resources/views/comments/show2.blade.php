@extends('layouts.dashboard1')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Détails du commentaire</div>

                <form action="{{ route('commentss.store') }}" method="POST">
                @csrf
                    <!-- Utilisez la méthode POST au lieu de PUT -->
                    <div class="card-body">
                        <div class="form-group">
                            <label for="name">Nom</label>
                            <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $comment->name) }}" required>
                        </div>
                        <div class="form-group">
                            <label for="date">Date</label>
                            <input type="date" class="form-control" id="date" name="date" value="{{ old('date', $comment->date) }}" required>
                        </div>
                        <div class="form-group">
                            <label for="comment">Commentaire</label>
                            <textarea class="form-control" id="comment" name="comment" rows="3" required>{{ old('comment', $comment->comment) }}</textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Soumettre</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
