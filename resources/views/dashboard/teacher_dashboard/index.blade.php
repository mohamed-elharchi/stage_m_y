@extends('layouts.teacherLayout')
@section('title', 'Absence')
@section('content')
    <div class="container mt-5">

        <div class="row justify-content-center">

            <div class="col-md-8">
                <div class="card">
                 
                    <div class="card-header">Welcome, {{ $teacher->name }}</div>
                    <div class="card-body">
                        <h2>Your Departments:</h2>
                        <form action="{{ route('displayAbsence') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="department">Select Department:</label>
                                <select class="form-control" id="department" name="department">
                                    <option value="" selected disabled>Select Department</option>
                                    @foreach ($departements as $departement)
                                        <option value="{{ $departement->id }}">{{ $departement->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
