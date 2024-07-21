@extends('layouts.app')

@section('title')
    home - page
@endsection

@section('header')
    <header>
        <div class="container-fluid header-index-SD">
            <div class="container d-flex align-items-center justify-content-between">
                <div class="w-25">
                    <img class="object-fit-cover w-50"src="https://comicvine.gamespot.com/a/uploads/scale_medium/0/40/5213245-dc_logo_blue_final.jpg"
                        alt="logo">
                </div>
                <div class="h-100">
                    <ul class="d-flex">
                        <li class="mx-3"><a href="{{ route('comics.index') }}"
                                class="{{ request()->routeIs('comics.index') ? 'active' : 'border-SD-blue' }}">CHARACTERS</a>
                        </li>
                        <li class="mx-3"><a href="/comics">COMICS</a></li>
                        <li class="mx-3"><a href="/comics">MOVIES</a></li>
                        <li class="mx-3"><a href="/comics">TV</a></li>
                        <li class="mx-3"><a href="/comics">GAMES</a></li>
                        <li class="mx-3"><a href="/comics">COLLECTIBLES</a></li>
                        <li class="mx-3"><a href="/comics">VIDEOS</a></li>
                        <li class="mx-3"><a href="/comics">FANS</a></li>
                        <li class="mx-3"><a href="/comics">NEWS</a></li>
                        <li class="mx-3"><a href="/comics">SHOP</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
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
                <div class="card-SD rounded-4 overflow-hidden">
                    <div class="img-card">
                        <img class="w-100 h-100 object-fit-cover " src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
                    </div>
                    <h3 class=" m-3">{{ $comic->title }}</h3>
                    <form action="{{ route('comics.destroy', $comic->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="SD-butt">delete</button>
                    </form>

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
