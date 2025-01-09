@extends('layouts.main_layout')
@section('content')
    <div class="container d-flex flex-column justify-content-center align-items-center" style="height: 100vh;">
        <h1 class="mb-4">Registrar</h1>

        <form action="{{ route('user.store') }}" method="POST" class="w-50 p-4 shadow-lg rounded" style="background-color: #f9f9f9; border: 1px solid #ddd;">
            @csrf

            <div class="form-group mb-3">
                <label for="name">Nome</label>
                <input type="text" class="form-control form-control-lg" name="name" id="name" value="{{ old('name') }}">
                @error('name')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group mb-3">
                <label for="email">E-mail</label>
                <input type="email" class="form-control form-control-lg" name="email" id="email" value="{{ old('email') }}">
                @error('email')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group mb-3">
                <label for="password">Senha</label>
                <input type="password" class="form-control form-control-lg" name="password" id="password">
                @error('password')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary btn-lg w-100 mt-3">Registrar</button>
        </form>

        <div class="mt-3">
            <a href="{{ route('login') }}" class="text-dark">Já tem uma conta? Faça login</a>
        </div>
    </div>
@endsection
