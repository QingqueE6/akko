<x-layout class="">

    <x-slot:heading>
        Movies
    </x-slot:heading>

      <div class="text-white grid grid-cols-4">
        @foreach ($movies as $movie)
    
        @if ($movie->form == "Movie")
            <div class="m-1 pl-1 bg-gradient-to-r from-rose-400  via-white via-75% to-white hover:opacity-50 shadow-md">
                <ul class="font-bold custom-text-shadow">{{$movie->title}}</ul>
                <ul class="custom-text-shadow">Watched in: {{$movie->year_watched}}</ul>
            </div>
        @endif
        @endforeach
        </div> 
    
    @include("styling/divider")

</x-layout>