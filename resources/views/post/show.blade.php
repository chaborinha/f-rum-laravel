@extends('layouts.main_layout')

@section('content')
    @include('include/navbar')

    <div class="container mt-5 pt-4">
        <div class="card custom-card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h2 class="card-title mb-0">{{ $post->title }}</h2>
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
                <p class="card-text">{{ $post->body }}</p>
            </div>
        </div>

        <div class="mt-4">
            <h3>Comentários</h3>
            @foreach ($comments as $comment)
                <div class="card mt-3">
                    <div class="card-body">
                        <strong>{{ $comment->user->name }}</strong>
                        <p>{{ $comment->body }}</p>
                    </div>
                </div>
            @endforeach

            @if(session('success'))
                <div class="alert alert-success mt-3">
                    {{ session('success') }}
                </div>
            @endif

            <form action="{{ route('comment.store') }}" method="POST">
                @csrf
                <input type="hidden" name="post_id" value="{{ Crypt::encrypt($post->id) }}">
            
                <div class="mb-3">
                    <textarea class="form-control @error('body') is-invalid @enderror" name="body" rows="4" placeholder="Escreva seu comentário...">{{ old('body') }}</textarea>
                    @error('body')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            
                <button type="submit" class="btn btn-primary">Comentar</button>
            </form>
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

        .custom-card .card-footer {
            text-align: center;
        }
    </style>
@endsection
