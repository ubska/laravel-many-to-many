@extends('layouts.app')

@section('content')
    @if ($post->type)
        <p>Categoria: {{ $post->type->name }}</p>
    @else
        <p><em>Nessuna categoria</em></p>
    @endif
    <p><strong>Tempo di lettura:</strong> {{ $post->reading_time }} minuti</p>
    <p><strong>Contenuto:</strong></p>
    <div>
        {{ $post->text }}
    </div>
    <div>
        <<p><strong>Tag associati:</strong></p>
            <ul>
                @foreach ($post->tags as $tag)
                    <li>{{ $tag->name }}</li>
                @endforeach
            </ul>
    </div>
    @if ($post->path_image)
        <img src="{{ asset('storage/' . $post->path_image) }}" alt="{{ $post->title }}" class="img-fluid">
    @endif

    <a href="{{ route('admin.posts.index') }}" class="btn btn-secondary mt-3">Torna all'elenco</a>
@endsection
