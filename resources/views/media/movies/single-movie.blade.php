<x-layout>
    <x-slot:heading>
        Movies & Series
        <a href="/archive/movies"><button class=" text-white bg-blue-400 hover:bg-blue-600  font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2">go back</button></a>
        <a href="/archive/movies/{{$movie->id}}/edit"><button class=" text-white bg-green-400 hover:bg-blue-600  font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2">edit</button></a>
    </x-slot:heading>

    <div class="allcontent">
    <div class="title grid grid-cols-3 mb-1">
        <h1 class="bg-white m-1 pl-1 pt-1 pb-1 shadow-md ">{{$movie->title}}</h1><br>
    </div>

    <div class="grid grid-cols-3">
          <div class="bg-white m-1 pl-1 pt-1 pb-1 shadow-md">
              <ul class="">year watched: {{$movie->year_watched}}</ul>
              <ul class="">Form: {{$movie->form}}</ul>
              {{-- To be added as a migration still --}}
              {{-- <ul class="">Additional Info: {{$anime->additional_info}}</ul> --}}
          </div>
    </div> 
    </div>
  @include("styling/divider")

</x-layout>