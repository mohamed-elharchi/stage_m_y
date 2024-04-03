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
                                    <h2 class="ml-lg-2">Créer une Nouvelle</h2>
                                </div>
                                <div class="col-sm-6 p-0 flex justify-content-lg-end justify-content-center">
                                    <a href="{{ url('/news') }}" class="btn btn-danger">
                                        <span>Retour</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <form action="{{ url('news') }}" method="POST" enctype="multipart/form-data">
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
            </div>
        </div>
    </div>

@endsection
