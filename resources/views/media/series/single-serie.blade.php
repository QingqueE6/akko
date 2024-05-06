<x-layout>
    <x-slot:heading>
        Series
        <a href="/archive/series">
            <button class=" text-white bg-blue-400 hover:bg-blue-600  font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2">go back</button>
            </a>
    </x-slot:heading>
    <h1>{{$serie->title}}</h1><br>
    @include("styling/divider")
    <div class=" grid grid-cols-2">
          <div class="">
              <ul class="">year watched/read: {{$serie->year_watched}}</ul>
              {{-- To be added as a migration still --}}
              {{-- <ul class="">Additional Info: {{$serie->additional_info}}</ul> --}}
          </div>
      </div> 

  @include("styling/divider")

</x-layout>