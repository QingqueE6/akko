<x-layout>
    <x-slot:heading>
        Movies
        <a href="/archive/movies">
            <button class=" text-white bg-blue-400 hover:bg-blue-600  font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2">go back</button>
            </a>
    </x-slot:heading>

    <div class="allcontent">
    <div class="title grid grid-cols-2 mb-1">
        <h1 class="bg-white m-1 pl-1 pt-1 pb-1 shadow-md ">{{$movie->title}}</h1><br>
    </div>

    <div class="grid grid-cols-2">
          <div class="bg-white m-1 pl-1 pt-1 pb-1 shadow-md">
              <ul class="">year watched: {{$movie->year_watched}}</ul>
              <ul class="">Status: {{$movie->status}}</ul>
              {{-- To be added as a migration still --}}
              {{-- <ul class="">Additional Info: {{$anime->additional_info}}</ul> --}}
          </div>
    </div> 
    </div>
  @include("styling/divider")

</x-layout>