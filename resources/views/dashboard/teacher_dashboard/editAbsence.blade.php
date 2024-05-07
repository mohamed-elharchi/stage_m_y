@extends('layouts.teacherLayout')
@section('title', 'Edit Absence')
@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"><h4>Modifier l'enregistrement d'absence</h4></div>
                    <div class="card-body">
                        <form action="{{ route('updateAbsence', $absence->id) }}" method="POST">
                            @csrf
                            @method('PUT')

                            <div class="form-group">
                                <label for="period">Période:</label>
                                <select class="form-control" id="period" name="period">
                                    <option value="8.30/9.30" {{ $absence->period === '8.30/9.30' ? 'selected' : '' }}>08:00/09:00</option>
                                    <option value="9.30/10.30" {{ $absence->period === '9.30/10.30' ? 'selected' : '' }}>09:00/10:00</option>
                                    <option value="10.30/11.30" {{ $absence->period === '10.30/11.30' ? 'selected' : '' }}>10:00/11:00</option>
                                    <option value="11.30/12.30" {{ $absence->period === '11.30/12.30' ? 'selected' : '' }}>11:00/12:00</option>
                                    <option value="2.30/3.30" {{ $absence->period === '2.30/3.30' ? 'selected' : '' }}>14:00/15:00</option>
                                    <option value="3.30/4.30" {{ $absence->period === '3.30/4.30' ? 'selected' : '' }}>15:00/16:00</option>
                                    <option value="4.30/5.30" {{ $absence->period === '4.30/5.30' ? 'selected' : '' }}>16:00/17:00</option>
                                    <option value="5.30/6.30" {{ $absence->period === '5.30/6.30' ? 'selected' : '' }}>17:00/18:00</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="absence">Absence:</label>
                                <select multiple class="form-control" id="absence" name="absence[]">
                                    @for ($i = 1; $i <= 40; $i++)
                                        <option value="{{ $i }}">{{ $i }}</option>
                                    @endfor
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="signature">Signature:</label>
                                <input type="text" class="form-control" id="signature" name="signature" value="{{ $absence->signature }}">
                            </div>
                            <button type="submit" class="btn btn-primary">mettre à jour</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
