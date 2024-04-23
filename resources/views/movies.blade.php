<x-layout class="">

    <x-slot:heading>
        Movies and Series
    </x-slot:heading>
    <h1>Movies:</h1><br>

      <div class="text-white grid grid-cols-4">
        @foreach ($movies as $movie)
    
        @if ($movie->form == "Movie")
            <div class="m-1 pl-1 bg-gradient-to-r from-sky-200 to-indigo-200 hover:opacity-50 shadow-md">
                <ul class="font-bold custom-text-shadow">{{$movie->title}}</ul>
                <ul class="custom-text-shadow">Watched in: {{$movie->year_watched}}</ul>
            </div>
        @endif
        @endforeach
        </div> 

    @include("styling/divider")

    <h1>Series:</h1><br>

    <div class="text-white grid grid-cols-2">
    @foreach ($movies as $series)

    @if ($series->form == "Series")
        <div class="m-1 bg-gradient-to-r from-sky-200 to-indigo-200 hover:opacity-50 shadow-md">
            <ul class="font-bold custom-text-shadow">{{$series->title}}</ul>
            <ul class="custom-text-shadow">Watched in: {{$series->year_watched}}</ul>
        </div>
    @endif
    @endforeach
    </div> 

    @include("styling/divider")

</x-layout>