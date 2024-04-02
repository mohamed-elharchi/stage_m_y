@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Créer une Nouvelle</h1>
        <div class="row">
            <div class="col-md-6">
                <form action="{{ route('news.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="image">Image :</label>
                        <input type="file" class="form-control" name="image" id="image">
                    </div>
                    <div class="form-group">
                        <label for="title">Titre :</label>
                        <input type="text" class="form-control" name="title" id="title">
                    </div>
                    <div class="form-group">
                        <label for="paragraph">Paragraphe :</label>
                        <textarea class="form-control" name="paragraph" id="paragraph" cols="30" rows="10"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Créer</button>
                </form>
            </div>
        </div>
    </div>
@endsection
