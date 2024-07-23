@extends('layouts.app')

@section('title')
    home - page
@endsection


@section('main')
    <div class="container-fluid img-jumbo-index-SD p-0">
        <div class="img-jum d-flex justify-content-center align-items-center">
            <img class="w-25" src="https://upload.wikimedia.org/wikipedia/commons/3/3d/DC_Comics_logo.svg" alt="dc">
        </div>
    </div>
    <div class="SD-base">
        <div class="SD-main container-fluid d-flex flex-wrap justify-content-center">


            @foreach ($comics as $comic)
                <div class="card-SD rounded-4 overflow-hidden ">

                    <div class="img-card">
                        <img class="w-100 h-100 object-fit-cover " src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
                    </div>
                    <h3 class=" m-3">{{ $comic->title }}</h3>
                    <form action="{{ route('comics.destroy', $comic->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="SD-butt">delete</button>
                    </form>
                    <a class="rounded-3 d-flex justify-content-center align-items-center"
                        href="{{ route('comics.show', $comic->id) }}"> info</a>
                    <a class="rounded-3 d-flex justify-content-center align-items-center mb-5"
                        href="{{ route('comics.create', $comic->id) }}"> crea</a>
                </div>
            @endforeach
        </div>
    </div>
    </div>
@endsection

@section('footer')
    <div class="SD-footer d-flex justify-content-between align-items-center">
        <div>description</div>
        <img src="https://upload.wikimedia.org/wikipedia/commons/3/3d/DC_Comics_logo.svg" alt="dc-footer">
        <div>contatti</div>
    </div>
@endsection
