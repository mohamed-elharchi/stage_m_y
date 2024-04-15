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
                                <h4 class="ml-lg-4">Liste des utilisations du temps</h4>
                            </div>
                            <div class="col-sm-6 p-0 d-flex justify-content-end">
                                <a href="{{ route('utilisations.create') }}" class="btn" style="background-color: #db751b; color: #fff;">
                                    <ion-icon name="add-outline"></ion-icon>
                                    <span>Ajouter des temps</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <form class="d-flex" name="form2">
                  <select class="form-control" onchange="form2.submit()" name="search2" id="search2">
                           @foreach ($utilisations as $utilisation)
                               <option>{{ $utilisation->classe }}</option>
                             @endforeach
                </select>
                      </form>

<!-- Add Bootstrap JS -->

                    <table class="table">
                        <thead>
                            <tr>
                                <th>Classe</th>
                                <th>Image</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($utilisations as $utilisation)
                            <tr>
                                <td>{{ $utilisation->classe }}</td>
                                <td>
                                    <img src="{{ asset('imagess/' . $utilisation->image) }}" width="100px">
                                </td>
                                <td>
                                    <a href="{{ route('utilisations.show', $utilisation->id) }}" class="btn btn-primary">Voir</a>
                                    <a href="{{ route('utilisations.edit', $utilisation->id) }}" class="btn btn-primary">Modifier</a>
                                    <form action="{{ route('utilisations.destroy', $utilisation->id) }}" method="POST" style="display: inline;">
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
