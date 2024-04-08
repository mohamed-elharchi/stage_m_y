@extends('layouts.dashboard1')



@section('content')
<div class="container">
    <form action="{{ route('comments.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Nom</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="form-group">
            <label for="date">Date</label>
            <input type="date" class="form-control" id="date" name="date" required>
        </div>
        <div class="form-group">
            <label for="comment">Commentaire</label>
            <textarea class="form-control" id="comment" name="comment" rows="3" required></textarea>
        </div>
        <div class="form-group form-check">
            <input type="checkbox" class="form-check-input" id="visible" name="visible">
            <label class="form-check-label" for="visible">Visible</label>
        </div>
        <button type="submit" class="btn btn-primary">Soumettre</button>
    </form>
</div>
@endsection

