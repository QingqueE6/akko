<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://kit.fontawesome.com/cd3fa29262.js" crossorigin="anonymous"></script>
    @vite('resources/css/app.css')
    <link rel="icon" type="image/x-icon" href="{{ asset("favicon.svg") }}">
    <title>Akko</title>
</head>
<body class="h-full">
    {{-- <nav>
        <a href="/">Home</a>
        <a href="/anime">Anime</a>
        <a href="/games">Games</a>
        <a href="/movies">Movies</a>
        <a href="/about">About</a>
    </nav> --}}
    <div class="min-h-full">
        <nav class="bg-gray-700">
          <div class="mx-auto max-w-8xl px-4 sm:px-6 lg:px-12">
            <div class="flex h-16 items-center justify-between">
              <div class="flex items-center">
                <div class="flex-shrink-0">
                  <img class="h-16 w-16 hover:opacity-50" src="{{ asset("homeicon.jpg") }}" alt="Akko Media">
                </div>
                <div class="hidden md:block">
                  <div class="ml-10 flex items-baseline space-x-4">
                    {{-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" --}}
                    {{-- Adding a prefix to a property (:active in this case) makes the data after the = dynamic, it can be a boolean now for example --}}
                    <x-nav-link href="/" :active="request()->is('/')">Home</x-nav-link>
                    <x-nav-link href="/movies" :active="request()->is('movies')">Movies & Series</x-nav-link>
                    <x-nav-link href="/anime" :active="request()->is('anime')">Anime & Manga</x-nav-link> 
                    <x-nav-link href="/games"{{--type="button"--}}  :active="request()->is('games')">Games</x-nav-link>
                    <x-nav-link href="/latin" :active="request()->is('latin')">Latin</x-nav-link>
                  </div>
                </div>
              </div>


                  <div class="relative ml-3">
                  </div>
              <div class="-mr-2 flex md:hidden">
                <!-- Mobile menu button -->
              </div>
            </div>
          </div>
      
          <!-- Mobile menu, show/hide based on menu state. -->
          <div class="md:hidden" id="mobile-menu">
            <div class="space-y-1 px-2 pb-3 pt-2 sm:px-3">
              <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
              <a href="/" class="bg-gray-900 text-white block rounded-md px-3 py-2 text-base font-medium" aria-current="page">Home</a>
              <a href="/movies" class="text-gray-300 hover:bg-gray-700 hover:text-white block rounded-md px-3 py-2 text-base font-medium">Movies</a>
              <a href="/anime" class="text-gray-300 hover:bg-gray-700 hover:text-white block rounded-md px-3 py-2 text-base font-medium">Anime & Manga</a>
              <a href="/games" class="text-gray-300 hover:bg-gray-700 hover:text-white block rounded-md px-3 py-2 text-base font-medium">Games</a>
              <a href="/latin" class="text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium">Latin</a>
            </div>
          </div>
        </nav>
      
        <header class="bg-white shadow">
          <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
            <h1 class="text-3xl font-bold tracking-tight text-gray-900">{{ $heading }}</h1>
          </div>
        </header>
        <main>
          <div class="mx-auto py-6 sm:px-6 lg:px-8">
            {{$slot}}
          </div>
        </main>
      </div>
</body>
</html>