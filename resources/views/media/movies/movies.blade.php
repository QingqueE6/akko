<x-layout class="">

    <x-slot:heading>
        Movies
        <a href="/archive">
            <button class=" text-white bg-blue-400 hover:bg-blue-600  font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2">go back</button>
            </a>
    </x-slot:heading>

      <div class="text-white grid grid-cols-4">
        @foreach ($movies as $movie)
    
        @if ($movie->form == "Movie")
        <a href="/archive/movies/{{$movie->id}}">

            <div class="m-1 pl-1 bg-gradient-to-r from-sky-200 to-indigo-200 hover:opacity-50 shadow-md">
                <ul class="font-bold custom-text-shadow">{{$movie->title}}</ul>
                <ul class="custom-text-shadow">Watched in: {{$movie->year_watched}}</ul>
            </div>
        </a>
        @endif
        @endforeach
        </div> 
</x-layout>