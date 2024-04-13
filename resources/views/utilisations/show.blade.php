@extends('layouts.dashboard1')

@section('content')
    <div class="container">
        <div class="main-content">
            <div class="row">
                <div class="col-md-12">
                    <div class="table-wrapper">
                        <div class="table-title">
                            <div class="row">
                                <div class="col-sm-6 p-0 flex justify-content-lg-start justify-content-center">
                                    <h4 class="ml-lg-4">Détails de l'utilisation du temps</h4>
                                </div>
                                <div class="col-sm-6 p-0 d-flex justify-content-end">
                                    <a href="{{ route('utilisations.index') }}" class="btn" style="background-color:#db751b; color: #fff;">
                                        <ion-icon name="arrow-undo-outline"></ion-icon> <span>Retour</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div>
                            <p><strong>Classe:</strong> {{ $utilisation->classe }}</p>

                            <p><strong>Image:</strong> <img src="{{ asset('imagess/' . $utilisation->image) }}" width="100px"></p>
                        </div>
                        <div class="mt-3">
                            <a href="{{ route('utilisations.edit', $utilisation->id) }}" class="btn btn-primary">Modifier</a>
                            <form action="{{ route('utilisations.destroy', $utilisation->id) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Supprimer</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
