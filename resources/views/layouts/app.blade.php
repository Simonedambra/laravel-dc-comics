<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    @vite('resources/scss/app.scss')
    @vite('resources/js/app.js')

<body>
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
    @yield('main')
    @yield('footer')
</body>

</html>
