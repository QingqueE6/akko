<x-layout>
    <x-slot:heading>
        Anime & Manga
    </x-slot:heading>

    <h1>Anime:</h1><br>

      <div class="text-white grid grid-cols-3">
        @foreach ($animes as $anime)
    
        @if ($anime->form == "Anime")
            <div class="m-1 pl-1 bg-gradient-to-r from-sky-200 to-indigo-200 hover:opacity-50 shadow-md">
                <ul class="font-bold custom-text-shadow">{{$anime->title}}</ul>
                <ul class="custom-text-shadow">Watched in: {{$anime->year_watched}}</ul>
            </div>
        @endif
        @endforeach
        </div> 

    @include("styling/divider")

    <h1>Manga:</h1><br>

    <div class="text-white grid grid-cols-2">
    @foreach ($animes as $manga)

    @if ($manga->form == "Manga")
        <div class="m-1 bg-gradient-to-r from-sky-200 to-indigo-200 hover:opacity-50 shadow-md">
            <ul class="font-bold custom-text-shadow">{{$manga->title}}</ul>
            <ul class="custom-text-shadow">Read in: {{$manga->year_watched}}</ul>
            <ul class="custom-text-shadow">Status: {{$manga->status}}</ul>
        </div>
    @endif
    @endforeach
    </div> 

    @include("styling/divider")

</x-layout>