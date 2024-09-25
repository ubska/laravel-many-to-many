@extends('layouts.app')

@section('content')
    <h1>Elenco post per categoria</h1>
    @foreach ($types as $type)
        <h2 class="mt-5">{{ $type->name }}</h2>
        <ul class="list-group ">
            @foreach ($type->posts as $post)
                <li class="list-group-item d-flex justify-content-between">
                    <span>{{ $post->title }}</span>
                    <a href="{{ route('admin.posts.show', $post) }}" class="btn btn-warning">Show</a>
                </li>
            @endforeach

        </ul>
    @endforeach
@endsection
