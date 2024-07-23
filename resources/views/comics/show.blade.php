@extends('layouts.app')
@section('title')
    page - show
@endsection
@section('main')
    <div class="container img-jumbo-index-SD">
        <div class="card-SD rounded-4 d-flex">
            <div class="img-card w-50">
                <img class="w-75 h-100 object-fit-cover " src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
            </div>
            <div class="w-50">
                <h1 class=" m-3">{{ $comic->title }}</h1 class=>
                <h3>{{ $comic->id }}</h3>
                <h4>{{ $comic->description }}</h4>
                <a href="{{ route('comics.edit', $comic) }}">Modifica fumetto</a>
            </div>
        </div>
    </div>
@endsection
