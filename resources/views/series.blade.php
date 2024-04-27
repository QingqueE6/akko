<x-layout>
    <x-slot:heading>
        Series
    </x-slot:heading>

    <div class="text-white grid grid-cols-2">
    @foreach ($series as $serie)

    @if ($serie->form == "Series")
        <div class="m-1 bg-gradient-to-r from-emerald-400  via-emerald-200 to-emerald-50 hover:opacity-50 shadow-md">
            <ul class="font-bold custom-text-shadow">{{$serie->title}}</ul>
            <ul class="custom-text-shadow">Watched in: {{$serie->year_watched}}</ul>
        </div>
    @endif
    @endforeach
    </div> 
</x-layout>