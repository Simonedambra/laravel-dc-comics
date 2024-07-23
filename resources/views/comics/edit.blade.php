@extends('layouts.app')
@section('main')
    <main>
        <h1>Modifica fumetto</h1>
        <div class="container img-jumbo-index-SD">

            <form action="{{ route('comics.update', $comic) }}" method="POST">
                @csrf
                @method('PUT')
                {{-- NOME --}}
                <div class="mb-3">
                    <label for="title" class="form-label">title:</label>
                    <input type="text" class="form-control" id="title" name="title"
                        value="{{ old('title', $comic->title) }}">
                </div>
                {{-- INGREDIENTI --}}
                <div class="mb-3">
                    <label for="description" class="form-label">description:</label>
                    <input type="text" class="form-control" id="description" name="description"
                        value="{{ old('description', $comic->description) }}">
                </div>


                <button type="submit" class="btn btn-success">modifica Fumetto</button>
            </form>
        </div>
    </main>
@endsection
