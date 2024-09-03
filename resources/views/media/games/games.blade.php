<x-layout>
    <x-slot:heading>
        Games
        <a href="/archive"><x-btn.back-button></x-btn.back-button></a>
        <a href="/archive/games/create"><x-btn.save-button>Create</x-btn.save-button></a>
    </x-slot:heading>
    <h1>currently playing:</h1><br>

    <div class="text-white grid grid-cols-3">
      @foreach ($games as $game)
      
  
      @if ($game->status == "currently playing")
      <a href="/archive/games/{{$game->id}}">
          <div class="m-1 pl-1 bg-gradient-to-r from-sky-200 to-indigo-200 hover:opacity-50 shadow-md">
              <ul class="font-bold custom-text-shadow">{{$game->title}}</ul>
          </div>
        </a>
      @endif
    
      @endforeach
      </div> 

  @include("styling/divider")

  <h1>Games done:</h1><br>

    <div class="text-white grid grid-cols-2">
    @foreach ($games as $game)
    

    @if ($game->status == "done" || $game->status == "completed")
    <a href="/archive/games/{{$game->id}}">
        <div class="m-1 pl-1 bg-gradient-to-r from-sky-200 to-indigo-200 hover:opacity-50 shadow-md">
            <ul class="font-bold custom-text-shadow">{{$game->title}}@if ($loop->index <= 2) <span class="text-amber-200">Newest!</span> @endif</ul>
            <ul class="custom-text-shadow">played in: {{$game->year_played}}</ul>
        </div>
    </a>
    @endif
        
    @endforeach
    </div> 

    @include("styling/divider")

    <h1>Backlog:</h1><br>

        <div class="text-white grid grid-cols-3">
        @foreach ($games as $game)
        @if ($game->status == "Backlog")
        <a href="/archive/games/{{$game->id}}">
            <div class="m-1 pl-1 bg-gradient-to-r from-sky-200 to-indigo-200 hover:opacity-50 shadow-md">
                <ul class="font-bold custom-text-shadow">{{$game->title}}</ul>
            </div>
        </a> 
        @endif
        @endforeach
        </div> 

        @include("styling/divider")

</x-layout>