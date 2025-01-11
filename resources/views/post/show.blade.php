@extends('layouts.main_layout')

@section('content')
    @include('include/navbar')

    <div class="container mt-5 pt-4">
        <div class="card custom-card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h2 class="card-title mb-0 text-white">{{ $post->title }}</h2>
                @if($user->id == $post->user_id)
                <div class="dropdown">
                    <button class="btn btn-sm btn-outline-light" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
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
            <h3 class="mb-3 text-dark">Comentários</h3>
            <div class="row">
                @foreach ($comments as $comment)
                    <div class="col-md-6 col-lg-4 col-xl-3 mb-4">
                        <div class="card shadow-sm rounded-lg">
                            <div class="card-body">
                                <strong class="text-primary text-white">{{ $comment->user->name }}</strong>
                                <p>{{ $comment->body }}</p>
                            </div>
                            <div class="dropdown">
                                <button class="btn btn-sm btn-outline-primary" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                    Opções
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <li><a class="dropdown-item" href="#">Editar</a></li>
                                    <li><a class="dropdown-item" href="#">Excluir</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="mt-3 d-flex justify-content-center">
                {{ $comments->links('pagination::bootstrap-4') }}
            </div>

            

            <form action="{{ route('comment.store') }}" method="POST" class="mt-4">
                @csrf
                <input type="hidden" name="post_id" value="{{ Crypt::encrypt($post->id) }}">
            
                <div class="mb-3">
                    <textarea class="form-control @error('body') is-invalid @enderror" name="body" rows="4" placeholder="Escreva seu comentário..." style="resize: none;"></textarea>
                    @error('body')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                    @enderror
                    @if(session('success' ?? 'error'))
                        <div class="alert alert-success mt-3">
                            {{ session('success' ?? 'error') }}
                        </div>
                    @endif
                </div>
            
                <button type="submit" class="btn btn-success btn-gradient w-100 mt-3">Comentar</button>
            </form>
            
        </div>
    </div>
@endsection

@include('include/post_show')