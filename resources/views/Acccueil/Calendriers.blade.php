@extends('layouts.Acceuill')
@section('content')
<div class="total_cal">





<div class="z">
        <div><h2>Cherchez votre département</h2></div>
        <form class="d-flex" name="form2">
            <select class="form-control" onchange="form2.submit()" name="search2" id="search2">
                @foreach ($utilisations as $utilisation)

                <option>{{ $utilisation->classe }}</option>
                @endforeach
            </select>
        </form>
    </div>



@foreach ($utilisations as $key => $utilisation)
<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="{{ route('utilisations.show', $utilisation->id) }}">
    <img src="{{ asset('imagess/' . $utilisation->image) }}" >
    </a>
    <div class="desc"><h2>class:{{ $utilisation->classe }}</h2></div>
  </div>
</div>
@endforeach





</div>
@endsection
<link rel="stylesheet" href="{{ asset('css/pages.css') }}">



