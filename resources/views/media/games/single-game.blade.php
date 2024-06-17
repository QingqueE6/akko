<x-layout>
    <x-slot:heading>
        Games
        <a href="/archive/movies"><x-btn.back-button></x-btn.back-button></a>
        <a href="/archive/movies/{{$game->id}}/edit"><x-btn.save-button>Edit</x-btn.save-button></a>
    </x-slot:heading>

      <div class="allcontent">
        <div class="title grid grid-cols-3 mb-1">
            <h1 class="bg-white m-1 pl-1 pt-1 pb-1 shadow-md ">{{$game->title}}</h1><br>
        </div>
    
        <div class="grid grid-cols-3">
              <div class="bg-white m-1 pl-1 pt-1 pb-1 shadow-md">
                  <ul class="">year played: {{$game->year_played}}</ul>
                  <ul class="">Status: {{$game->status}}</ul>
                  <ul class="">Additional Info: {{$game->additional_info}}</ul>
              </div>
        </div> 
        </div>
  @include("styling/divider")
</x-layout>