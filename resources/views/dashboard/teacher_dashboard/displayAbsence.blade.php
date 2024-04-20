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
                    <div class="card-header">Absences for Selected Department</div>
                    <div class="card-body">
                        @if (!empty($absence))
                            <ul>
                                <li>Date: {{ $absence->date }}</li>
                                <li>Period: {{ $absence->period }}</li>
                                <li>Absence: {{ $absence->absence }}</li>
                                <li>Signature: {{ $absence->signature }}</li>
                            </ul>
                            @if (auth()->id() === $absence->teacher_id)
                                <a href="{{ route('editAbsence', $absence->id) }}" class="btn btn-primary">Edit Absence</a>
                            @endif
                        @elseif (empty($absence) && !session('error'))
                            <p>No absence record found for the selected department.</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-5 mb-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Insert New Absence Record</div>
                    <div class="card-body">
                        <form action="{{ route('saveAbsence') }}" method="POST">
                            @csrf
                            <input type="hidden" name="department" value="{{ $departmentId }}">
                            <div class="form-group">
                                <label for="date">Date:</label>
                                <input type="date" class="form-control" id="date" name="date"
                                    value="{{ date('Y-m-d') }}" >
                            </div>
                            <div class="form-group">
                                <label for="period">Period:</label>
                                <select class="form-control" id="period" name="period">
                                    <option value="8.30/9.30">08/09</option>
                                    <option value="9.30/10.30">09/10</option>
                                    <option value="10.30/11.30">10/11</option>
                                    <option value="11.30/12.30">11/12</option>
                                    <option value="2.30/3.30">02/03</option>
                                    <option value="3.30/4.30">03/04</option>
                                    <option value="4.30/5.30">04/05</option>
                                    <option value="5.30/6.30">05/06</option>
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
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- <script>
function formatAbsenceInput(input) {
    let sanitizedInput = input.value.replace(/[^\d]/g, '');

    let formattedInput = sanitizedInput.replace(/(\d{2})(?=\d)/g, '$1-');

    formattedInput = formattedInput.replace(/^0+(?=[1-9])/, '');

    input.value = formattedInput;
}
</script> --}}



@endsection
