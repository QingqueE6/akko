<x-layout>
    <x-slot:heading>
        Anime & Manga
        <a href="/archive/anime"><x-btn.back-button></x-btn.back-button></a>
        <a href="/archive/anime/{{$anime->id}}/edit"><x-btn.save-button>Edit</x-btn.save-button></a>
    </x-slot:heading>

        <div class="allcontent">
        <div class="title grid grid-cols-3 mb-1">
            <h1 class="bg-white m-1 pl-1 pt-1 pb-1 shadow-md ">{{$anime->title}}</h1><br>
        </div>

        <div class="grid grid-cols-3">
                <div class="bg-white m-1 pl-1 pt-1 pb-1 shadow-md">
                    <ul class="">year watched/read: {{$anime->year_watched}}</ul>
                    <ul class="">Form: {{$anime->form}}</ul>
                    <ul class="">Status: {{$anime->status}}</ul>
                </div>
        </div> 
        </div>


  @include("styling/divider")
</x-layout>