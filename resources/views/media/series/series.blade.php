<x-layout>
    <x-slot:heading>
        Series
        <a href="/archive">
            <button class=" text-white bg-blue-400 hover:bg-blue-600  font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2">go back</button>
            </a>
    </x-slot:heading>

    <div class="text-white grid grid-cols-2">
    @foreach ($series as $serie)

    @if ($serie->form == "Series")
    <a href="/archive/series/{{$serie->id}}">
        <div class="m-1 bg-gradient-to-r from-sky-200 to-indigo-200 hover:opacity-50 shadow-md">
            <ul class="font-bold custom-text-shadow">{{$serie->title}}</ul>
            <ul class="custom-text-shadow">Watched in: {{$serie->year_watched}}</ul>
        </div>
    </a>
    @endif
    @endforeach
    </div> 
</x-layout>