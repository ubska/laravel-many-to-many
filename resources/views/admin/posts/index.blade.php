@extends('layouts.app')

@section('content')
    <h1>Elenco Post</h1>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nome</th>
                <th scope="col">Data</th>
                <th scope="col">Type</th>
                <th scope="col">Tags</th>
                <th scope="col">Azioni</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)
                <tr>
                    <td>{{ $post->id }}</td>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->created_at }}</td>
                    <td>
                        @if ($post->type)
                            <span class="badge text-bg-primary">{{ $post->type->name }}</span>
                        @else
                            <span class="badge text-bg-secondary">Nessun type</span>
                        @endif
                    </td>
                    <td>
                        @if ($post->tags->isEmpty())
                            <span>Nessun tag</span>
                        @else
                            @foreach ($post->tags as $tag)
                                <span class="list-inline-item">{{ $tag->name }}</span>
                            @endforeach
                        @endif
                    </td>

                    <td>
                        <a href="{{ route('admin.posts.show', $post->id) }}" class="btn btn-info btn-sm">Show</a>
                        <a href="{{ route('admin.posts.edit', $post->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('admin.posts.destroy', $post->id) }}" method="POST" style="display:inline;"
                            onsubmit="return confirm('Sei sicuro di voler eliminare questo post?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>

                    </td>


                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
