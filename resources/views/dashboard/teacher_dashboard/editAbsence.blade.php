@extends('layouts.teacherLayout')
@section('title', 'Edit Absence')
@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Edit Absence Record</div>
                    <div class="card-body">
                        <form action="{{ route('updateAbsence', $absence->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                        
                            <div class="form-group">
                                <label for="period">Period:</label>
                                <select class="form-control" id="period" name="period">
                                    <option value="8.30/9.30">8.30/9.30</option>
                                    <option value="9.30/10.30">9.30/10.30</option>
                                    <option value="10.30/11.30">10.30/11.30</option>
                                    <option value="10.30/11.30">11.30/12.30</option>
                                    <option value="10.30/11.30">2.30/3.30</option>
                                    <option value="10.30/11.30">3.30/4.30</option>
                                    <option value="10.30/11.30">4.30/5.30</option>
                                    <option value="10.30/11.30">5.30/5.30</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="absence">Absence:</label>
                                <input type="text" class="form-control" id="absence" name="absence" value="{{ $absence->absence }}">
                            </div>
                            <div class="form-group">
                                <label for="signature">Signature:</label>
                                <input type="text" class="form-control" id="signature" name="signature" value="{{ $absence->signature }}">
                            </div>
                            <button type="submit" class="btn btn-primary">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
