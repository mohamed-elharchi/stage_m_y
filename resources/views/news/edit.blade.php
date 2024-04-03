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
                                <h2 class="ml-lg-2">Editer la Nouvelle</h2>
                            </div>
                            <div class="col-sm-6 p-0 flex justify-content-lg-end justify-content-center">
                                    <a href="{{ url('/news') }}" class="btn btn-danger">
                                        <span>Retour</span>
                                    </a>
                                </div>
                        </div>
                    </div>
                </div>
        <form action="{{ route('news.update', $news->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="title">Titre :</label>
                <input type="text" class="form-control" name="title" id="title" value="{{ $news->title }}">
            </div>
            <div class="form-group">
                <label for="paragraph">Paragraphe :</label>
                <textarea class="form-control" name="paragraph" id="paragraph" cols="30" rows="10">{{ $news->paragraph }}</textarea>
            </div>
            <div class="form-group">
                <label for="photo">Image :</label>
                <input type="file" class="form-control-file" name="photo" id="photo">
                <img src="{{ asset($news->photo) }}" alt="Current Image" class="mt-2" style="max-width: 100px;">
            </div>
            <button type="submit" class="btn btn-primary">Mettre à jour</button>
        </form>
    </div>
@endsection
