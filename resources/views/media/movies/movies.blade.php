<x-layout class="">

    <x-slot:heading>
        Movies & Series
        <a href="/archive">
            <button class=" text-white bg-blue-400 hover:bg-blue-600  font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2">go back</button>
            <a href="/archive/movies/create"><button class=" text-white bg-red-400 hover:bg-red-600  font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2">create</button></a>

            </a>
    </x-slot:heading>
    <h1>Movies:</h1><br>
      <div class="text-white grid grid-cols-4 mb-2">
        @foreach ($movies as $movie)
        @if ($movie->form == "Movie")
        <a href="/archive/movies/{{$movie->id}}">

            <div class="m-1 pl-1 bg-gradient-to-r from-sky-200 to-indigo-200 shadow-md hover:opacity-50">
                <ul class="text-sm font-bold custom-text-shadow">{{$movie->title}} @if ($loop->index <= 2) <span class="text-amber-200">Newest!</span> @endif </ul>
                <ul class="custom-text-shadow">Watched in: {{$movie->year_watched}}</ul>
            </div>
        </a>
        @endif
        @endforeach
        </div> 
        
        <div>
            {{-- {{$movies->links()}} --}}
        </div>

        @include("styling/divider")

        <h1>Series:</h1><br>
        <div class="text-white grid grid-cols-2">
            @foreach ($series as $serie)
        
            @if ($serie->form == "Series")
            <a href="/archive/movies/{{$serie->id}}">
                <div class="m-1 bg-gradient-to-r from-sky-200 to-indigo-200 hover:opacity-50 shadow-md">
                    <ul class="font-bold custom-text-shadow">{{$serie->title}} @if ($loop->index <= 2) <span class="text-amber-200">Newest!</span> @endif </ul>
                    <ul class="custom-text-shadow">Watched in: {{$serie->year_watched}}</ul>
                </div>
            </a>
            @endif
            @endforeach
            </div> 
</x-layout>