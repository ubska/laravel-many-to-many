@extends('layouts.app')

@section('content')
    <h1>Gestione Categorie</h1>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if (session('delete'))
        <div class="alert alert-danger">
            {{ session('delete') }}
        </div>
    @endif

    <div class="container-fluid">
        <div class="row">
            <div class="col-4">

                <form action="{{ route('admin.types.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Nome Categoria</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                        @error('name')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Aggiungi</button>
                </form>
            </div>

            <div class="col-8">
                <h2>Categorie Esistenti</h2>

                <ul class="list-group">
                    @foreach ($types as $type)
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            {{ $type->name }}
                            <form action="{{ route('admin.types.destroy', $type->id) }}" method="POST"
                                style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm"
                                    onclick="return confirm('Sei sicuro di voler eliminare questa categoria?');">Elimina</button>
                            </form>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@endsection
