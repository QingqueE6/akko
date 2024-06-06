<x-layout>
    <x-slot:heading>
        Media Archive
    </x-slot:heading>

    <div class="text-white grid grid-cols-1">

        <a href="/archive/movies" class="m-1 pl-1 bg-gradient-to-r from-rose-400  via-rose-200 to-white hover:opacity-50 shadow-md font-bold custom-text-shadow">
            Movies
        </a>

         {{-- from-emerald-400 via-emerald-200 to-white --}}

        <a href="/archive/anime" class="m-1 pl-1 bg-gradient-to-r from-cyan-400 via-cyan-200 to-white hover:opacity-50 shadow-md font-bold custom-text-shadow">
            Anime & Manga
        </a>

        <a href="/archive/games" class="m-1 pl-1 bg-gradient-to-r from-fuchsia-400 via-fuchsia-200 to-white hover:opacity-50 shadow-md font-bold custom-text-shadow">
            Games
        </a>
    </div>


</x-layout>