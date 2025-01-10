@extends('layouts.main_layout')

@section('content')
<div class="container mt-5">
    <h2>Criar Novo Post</h2>

    <form action="{{ route('post.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="title" class="form-label">Título</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Digite o título do post" value="{{ old('title') }}" required>
            @error('title')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="body" class="form-label">Corpo</label>
            <textarea class="form-control" id="body" name="body" rows="6" placeholder="Escreva o conteúdo do post..." required>{{ old('body') }}</textarea>
            @error('body')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Publicar</button>
    </form>
</div>
@endsection
