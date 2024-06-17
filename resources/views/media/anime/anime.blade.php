<x-layout>
    <x-slot:heading>
        Anime & Manga
        <a href="/archive"><x-btn.back-button></x-btn.back-button></a>
        <a href="/archive/anime/create"><x-btn.save-button>Create</x-btn.save-button></a>
    </x-slot:heading>

    <h1>Anime:</h1><br>
      <div class="text-white grid grid-cols-3">
        @foreach ($animes as $anime)
    
        @if ($anime->form == "Anime")
        <a href="/archive/anime/{{$anime->id}}">
            <div class="m-1 pl-1 bg-gradient-to-r from-sky-200 to-indigo-200 hover:opacity-50 shadow-md">
                <ul class="font-bold custom-text-shadow">{{$anime->title}}@if ($loop->index <= 2) <span class="text-amber-200">Newest!</span> @endif</ul>
                <ul class="custom-text-shadow">Watched in: {{$anime->year_watched}}</ul>
            </div>
        </a>
        @endif
        @endforeach
        </div> 

    @include("styling/divider")

    <h1>Manga:</h1><br>

    <div class="text-white grid grid-cols-2">
    @foreach ($mangas as $manga)

    @if ($manga->form == "Manga")
    <a href="/archive/anime/{{$manga->id}}">

        <div class="m-1 bg-gradient-to-r from-sky-200 to-indigo-200 hover:opacity-50 shadow-md">
            <ul class="font-bold custom-text-shadow">{{$manga->title}}@if ($loop->index <= 2) <span class="text-amber-200">Newest!</span> @endif</ul>
            <ul class="custom-text-shadow">Read in: {{$manga->year_watched}}</ul>
            <ul class="custom-text-shadow">Status: {{$manga->status}}</ul>
        </div>
    </a>
    @endif
    @endforeach
    </div> 

    @include("styling/divider")

</x-layout>