@extends('layouts.main_layout')
@section('content')
    <div class="container d-flex flex-column justify-content-center align-items-center" style="height: 100vh;">
        <h1 class="mb-4">Login</h1>
        
        <form action="{{ route('check-login') }}" method="post" class="w-50 p-4 shadow-lg rounded" style="background-color: #f9f9f9; border: 1px solid #ddd;">
            @csrf
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control form-control-lg" name="email" id="email" value="{{ old('email') }}">
                @error('email')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control form-control-lg" name="password" id="password">
                @error('password')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary btn-lg w-100">Login</button>
        </form>
    </div>
@endsection
