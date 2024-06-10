<x-layout>
    <x-slot:heading>
        Home (WIP)
    </x-slot:heading>

    <h1>Newest Movies</h1>
    @foreach ($movies as $movie)
    @if ($movie->form == "Movie" && $loop->index <= 2)
    <a href="/archive/movies/{{$movie->id}}">

        <div class="m-1 pl-1 bg-gradient-to-r from-sky-200 to-indigo-200 shadow-md hover:opacity-50">
            <ul class="">{{$movie->title}}</ul>
        </div>
    </a>
    @endif
    @endforeach

    @include("styling/divider")

    <h1>Newest Series:</h1>
    @foreach ($series as $serie)
    @if ($serie->form == "Series" && $loop->index <= 2)
    <a href="/archive/movies/{{$serie->id}}">
        <div class="m-1 bg-gradient-to-r from-sky-200 to-indigo-200 hover:opacity-50 shadow-md">
            <ul class="">{{$serie->title}}</ul>
        </div>
    </a>
    @endif
    @endforeach

    @include("styling/divider")

    <h1>Newest Anime:</h1>
    @foreach ($animes as $anime)
    @if ($anime->form == "Anime" && $loop->index <= 2)
    <a href="/archive/anime/{{$anime->id}}">
        <div class="m-1 bg-gradient-to-r from-sky-200 to-indigo-200 hover:opacity-50 shadow-md">
            <ul class="">{{$anime->title}}</ul>
        </div>
    </a>
    @endif
    @endforeach

    @include("styling/divider")

    <h1>Newest Manga:</h1>
    @foreach ($mangas as $manga)
    @if ($manga->form == "Manga" && $loop->index <= 2)
    <a href="/archive/anime/{{$manga->id}}">
        <div class="m-1 bg-gradient-to-r from-sky-200 to-indigo-200 hover:opacity-50 shadow-md">
            <ul class="">{{$manga->title}}</ul>
        </div>
    </a>
    @endif
    @endforeach
    @include("styling/divider")

    <h1>Newest Games:</h1>
    @foreach ($games as $games)
    @if ($loop->index <= 2)
    <a href="/archive/games/{{$games->id}}">
        <div class="m-1 bg-gradient-to-r from-sky-200 to-indigo-200 hover:opacity-50 shadow-md">
            <ul class="">{{$games->title}}</ul>
        </div>
    </a>
    @endif
    @endforeach
</x-layout>