@extends('layouts.teacherLayout')
@section('title', 'Absence')
@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    @if (session('error'))
                        <div class="alert alert-primary" role="alert">
                            <p>{{ session('error') }}</p>
                        </div>
                    @endif
                    <div class="card-header">Absences for Selected Department</div>
                    <div class="card-body">
                        @if (!empty($absence))
                            <ul>
                                <li>Date: {{ $absence->date }}</li>
                                <li>Period: {{ $absence->period }}</li>
                                <li>Absence: {{ $absence->absence }}</li>
                                <li>Signature: {{ $absence->signature }}</li>
                            </ul>
                        @elseif (empty($absence) && !session('error'))
                            <p>No absence record found for the selected department.</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Form for inserting new absence records -->
    <div class="container mt-5 mb-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Insert New Absence Record</div>
                    <div class="card-body">
                        <form action="" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="date">Date:</label>
                                <input type="date" class="form-control" id="date" name="date" value="{{ date('Y-m-d') }}" readonly>
                            </div>
                            <div class="form-group">
                                <label for="period">Period:</label>
                                <select class="form-control" id="period" name="period">
                                    <option value="8.30/9.30">8.30/9.30</option>
                                    <option value="9.30/10.30">9.30/10.30</option>
                                    <option value="10.30/11.30">10.30/11.30</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="absence">Absence:</label>
                                <input type="text" class="form-control" id="absence" name="absence">
                            </div>
                            <div class="form-group">
                                <label for="signature">Signature:</label>
                                <input type="text" class="form-control" id="signature" name="signature">
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
