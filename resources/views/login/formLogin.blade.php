@extends('layouts.main_layout')
@section('content')
    <div class="container d-flex flex-column justify-content-center align-items-center" style="height: 100vh;">
        <h1 class="mb-4">Login</h1>
        
        <form action="#" method="post" class="w-50 p-4 shadow-lg rounded" style="background-color: #f9f9f9; border: 1px solid #ddd;">
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control form-control-lg" name="email" id="email">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control form-control-lg" name="password" id="password">
            </div>
        </form>
    </div>
@endsection
