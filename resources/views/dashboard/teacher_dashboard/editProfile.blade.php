@extends('layouts.teacherLayout')

@section('title', 'Edit Password')

@section('content')
    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h3>Edit info</h3>
                    </div>
                    <div class="card-body">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <form action="{{ route('saveNew') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="email">Email:</label>
                                <input type="email" class="form-control" id="email" name="email"
                                    value="{{ $user->email }}" required>
                                
                            </div>
                            <div class="form-group">
                                <label for="name">Full Name:</label>
                                <input type="text" class="form-control" id="name" name="name"
                                    value="{{ $user->name }}" required>

                            </div>
                            <div class="form-group">
                                <label for="current_password">Current Password:</label>
                                <input type="password" class="form-control" id="current_password" name="current_password"
                                    required>

                            </div>
                            <div class="form-group">
                                <label for="new_password">New Password:</label>
                                <input type="password" class="form-control" id="new_password" name="new_password" required>

                            </div>
                            <div class="form-group">
                                <label for="confirm_password">Confirm New Password:</label>
                                <input type="password" class="form-control" id="confirm_password"
                                    name="new_password_confirmation" required>

                            </div>
                            <button type="submit" class="btn btn-primary">Save</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
