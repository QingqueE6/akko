<x-layout>
    <x-slot:heading>
        Anime & Manga
        <a href="/archive">
            <button class=" text-white bg-blue-400 hover:bg-blue-600  font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2">go back</button>
            </a>
    </x-slot:heading>
    <h1>{{$anime->title}}</h1><br>
    @include("styling/divider")
    <div class=" grid grid-cols-2">
          <div class="">
              <ul class="">year watched/read: {{$anime->year_watched}}</ul>
              <ul class="">Form: {{$anime->form}}</ul>
              <ul class="">Status: {{$anime->status}}</ul>
              {{-- To be added as a migration still --}}
              {{-- <ul class="">Additional Info: {{$anime->additional_info}}</ul> --}}
          </div>
      </div> 

  @include("styling/divider")

</x-layout>