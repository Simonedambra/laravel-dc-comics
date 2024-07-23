@extends('layouts.app')

@section('main')
    <main>
        <h1>Creazione nuovo comics</h1>
        <div class="img-jumbo-index-SD container">
            <form action="{{ route('comics.store') }}" method="POST">
                @csrf
                {{-- NOME --}}

                <div class="mb-3">
                    <label for="title" class="form-label">titolo:</label>
                    <input type="text" class="form-control" id="title" name="title"value="{{ old('title') }}"
                        class="@error('title') is-invalid @enderror">
                </div>
                @error('title')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                {{-- INGREDIENTI --}}
                <div class="mb-3">
                    <label for="description" class="form-label">description:</label>
                    <input type="text" class="form-control" id="description" name="description"
                        value="{{ old('description') }}" class="@error('description') is-invalid @enderror">
                </div>
                @error('description')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                <button type="submit" class="btn btn-success">Crea nuovo Fumetto</button>
            </form>
        </div>
    </main>
@endsection
