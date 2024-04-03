@extends('layouts.login')
@section('title')
    dashboard
@endsection
@section('content')
{{-- <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="#">Dashboard</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#">Profile</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Settings</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Logout</a>
                </li>
            </ul>
        </div>
    </div>

</nav> --}}



<h2>director dashboard</h2>
<ul class="navbar-nav ml-auto">


        <li class="nav-item">
            <a class="nav-link text-white btn btn-success" href="{{ route('generalGuard_dashboard') }}">general guard dashboard</a>
        </li>


</ul>
<div class="container mt-4">
    <div class="row">
        <div class="col-md-3">
            <div class="list-group">
                <a href="#" class="list-group-item list-group-item-action">Dashboard</a>
                <a href="#" class="list-group-item list-group-item-action">Analytics</a>
                <a href="#" class="list-group-item list-group-item-action">Reports</a>
                <a href="#" class="list-group-item list-group-item-action">Tasks</a>
                <a href="#" class="list-group-item list-group-item-action">Settings</a>
            </div>
        </div>
        <div class="col-md-9">
            <!-- Main content goes here -->
            <h2>Welcome to the Dashboard</h2>
        </div>
    </div>
</div>
@endsection
