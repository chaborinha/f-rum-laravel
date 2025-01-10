@extends('layouts.main_layout')

@section('content')
    @include('include/navbar')

    <div class="container mt-5 pt-4">
        <h2 class="mb-4">Posts</h2>

        <div class="row">
            @foreach ($posts as $post)
                <div class="col-md-4 mb-4">
                    <div class="card custom-card">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h5 class="card-title mb-0">{{ $post->title }}</h5>
                            @if($user->id == $post->user_id)
                            <div class="dropdown">
                                <button class="btn btn-sm btn-outline-primary" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                    Opções
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <li><a class="dropdown-item" href="#">Editar</a></li>
                                    <li><a class="dropdown-item" href="#">Excluir</a></li>
                                </ul>
                            </div>
                            @endif
                        </div>
                        <div class="card-body">
                            <p class="card-text">{{ Str::limit($post->body, 150) }}</p>
                        </div>
                        <div class="card-footer text-center">
                            <a href="{{route('post.show', $post->id)}}" class="btn btn-info btn-sm">Ver comentarios</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

@endsection

@section('styles')
    <style>
        .custom-card {
            background: linear-gradient(145deg, #00bcd4, #0097a7);
            border-radius: 10px; 
            border: 1px solid #0097a7; 
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1); 
            transition: transform 0.3s ease, box-shadow 0.3s ease; 
        }

        .custom-card:hover {
            transform: translateY(-5px); 
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.15); 
        }

        .custom-card .card-header {
            background-color: #0097a7;
            color: white;
            font-weight: bold;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
        }

        .custom-card .dropdown {
            position: absolute;
            top: 10px;
            right: 10px;
        }

        .custom-card .card-header .card-title {
            margin-bottom: 0;
        }

        .custom-card .card-footer {
            text-align: center;
        }

        .custom-card .btn-info {
            background-color: #00bcd4; 
            border-color: #00bcd4;
        }

        .custom-card .btn-info:hover {
            background-color: #00838f; 
            border-color: #00838f;
        }
    </style>
@endsection
