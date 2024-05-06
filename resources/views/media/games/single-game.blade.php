<x-layout>
    <x-slot:heading>
        Games
        <a href="/archive">
            <button class=" text-white bg-blue-400 hover:bg-blue-600  font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2">go back</button>
            </a>
    </x-slot:heading>
    <h1>{{$game->title}}</h1><br>
    @include("styling/divider")
    <div class=" grid grid-cols-2">
          <div class="">
              <ul class="">year played: {{$game->year_played}}</ul>
              <ul class="">Status: {{$game->status}}</ul>
              <ul class="">Additional Info: {{$game->additional_info}}</ul>
          </div>
      </div> 

  @include("styling/divider")

</x-layout>