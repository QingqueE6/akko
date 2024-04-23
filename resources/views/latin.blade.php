<x-layout>
<x-slot:heading>
    Latein Vokabular

    <a href="https://www.frag-caesar.de/" target="_blank">
    <button class=" text-white bg-red-600 hover:bg-red-800  font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2">if in doubt</button>
    </a>
</x-slot:heading>

    <h1>MiR 1:</h1><br>
    <div class="grid grid-cols-5">
    @foreach ($data as $item)

    @if ($item->lesson == 1)
        <div class="m-2 border-solid border-8 rounded-md border-orange-100 bg-orange-100 hover:bg-orange-200 hover:border-orange-200 shadow-lg">
            <ul class="font-bold">{{$item->latin}}</ul>
            <ul>{{$item->additional}}</ul>
            @include("styling/kartei-divider")
            <ul class="">{{$item->german}}</ul>
        </div>
    @endif
    @endforeach
    </div> 

    @include("styling/divider")

    <h1>MiR 2:</h1><br>
    <div class="grid grid-cols-5">
    @foreach ($data as $item)

    @if ($item->lesson == 2)
        <div class="m-2 border-solid border-8 rounded-md border-orange-100 bg-orange-100 hover:bg-orange-200 hover:border-orange-200 shadow-lg">
            <ul class="font-bold">{{$item->latin}}</ul>
            <ul>{{$item->additional}}</ul>
            @include("styling/kartei-divider")
            <ul class="">{{$item->german}}</ul>
        </div>
    @endif
    @endforeach
    </div>

    @include("styling/divider")

     <h1>MiR 3:</h1><br>
    <div class="grid grid-cols-5">
    @foreach ($data as $item)

    @if ($item->lesson == 3)
        <div class="m-2 border-solid border-8 rounded-md border-orange-100 bg-orange-100 hover:bg-orange-200 hover:border-orange-200 shadow-lg">
            <ul class="font-bold">{{$item->latin}}</ul>
            <ul>{{$item->additional}}</ul>
            @include("styling/kartei-divider")
            <ul class="">{{$item->german}}</ul>
        </div>
    @endif

    @endforeach
    </div>
    @include("styling/divider")

    <h1>MiR 4:</h1><br>
    <div class="grid grid-cols-5">
    @foreach ($data as $item)

    @if ($item->lesson == 4)
        <div class="m-2 border-solid border-8 rounded-md border-orange-100 bg-orange-100 hover:bg-orange-200 hover:border-orange-200 shadow-lg">
            <ul class="font-bold">{{$item->latin}}</ul>
            <ul>{{$item->additional}}</ul>
            @include("styling/kartei-divider")
            <ul class="">{{$item->german}}</ul>
        </div>
    @endif

    @endforeach
    </div>
    @include("styling/divider")

    </x-layout>