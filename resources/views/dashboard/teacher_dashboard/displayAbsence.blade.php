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
                    @if (session('success'))
                        <div class="alert alert-primary" role="alert">
                            <p>{{ session('success') }}</p>
                        </div>
                    @endif
                    <div class="card-header"><h4>l'absence du la classe que vous avez sélectionné</h4><span>{{ $departementName }}</span></div>
                    <div class="card-body">
                        @if (!empty($absence))
                            <ul>
                                <li>Date: {{ $absence->date }}</li>
                                <li>Période: {{ $absence->period }}</li>
                                <li>Absence: {{ $absence->absence }}</li>
                                <li>Signature: {{ $absence->signature }}</li>
                            </ul>
                            @if (auth()->id() === $absence->teacher_id)
                            <p class="text-danger">si vous voulez changer l'absence de séance en cours</p>
                                <a href="{{ route('editAbsence', $absence->id) }}" class="btn btn-primary">Editer l'absence</a>
                            @endif
                        @elseif (empty($absence) && !session('error'))
                            <p>Aucun enregistrement d'absence trouvé pour la classe sélectionné.</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-5 mb-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div >
                    <p class="text-danger">si vous avez la même classe pour la séance suivante . tapez l'absence ici</p>
                </div>
                <div class="card">
                    <div class="card-header">Insérer un nouvel enregistrement d'absence</div>
                    <div class="card-body">
                        <form action="{{ route('saveAbsence') }}" method="POST">
                            @csrf
                            <input type="hidden" name="department" value="{{ $departmentId }}">
                            <div class="form-group">
                                <label for="date">Date:</label>
                                <input type="date" class="form-control" id="date" name="date"
                                    value="{{ date('Y-m-d') }}" readonly>
                            </div>
                            <div class="form-group">
                                <label for="period">Période:</label>
                                <select class="form-control" id="period" name="period">
                                    <option value="8.30/9.30">08:00/09:00</option>
                                    <option value="9.30/10.30">09:00/10:00</option>
                                    <option value="10.30/11.30">10:00/11:00</option>
                                    <option value="11.30/12.30">11:00/12:00</option>
                                    <option value="2.30/3.30">14:00/15:00</option>
                                    <option value="3.30/4.30">15:00/16:00</option>
                                    <option value="4.30/5.30">16:00/17:00</option>
                                    <option value="5.30/6.30">17:00/18:00</option>
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
                                <input type="text" class="form-control" id="signature" name="signature">
                            </div>
                            <button type="submit" class="btn btn-primary">Confirmer</button>
                        </form>
                    </div>
                    <div class="card-footer text-center">
                        <img src="{{ asset('imagess/'. $studentsList) }}" alt="Image" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
