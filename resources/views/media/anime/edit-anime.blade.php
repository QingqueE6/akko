<x-layout>
    <x-slot:heading>
        Edit: {{$anime->title}}
        <a href="/archive/anime/{{$anime->id}}"><button class=" text-white bg-blue-400 hover:bg-blue-600  font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2">go back</button></a>
    </x-slot:heading>

<form method="POST" action="/archive/anime/{{$anime->id}}">
  @csrf
  @method('PATCH')
    <div class="space-y-12">
      <div class="border-b border-gray-900/10 pb-12">
        <h2 class="text-base font-semibold leading-7 text-gray-900">anime</h2>
        <p class="mt-1 text-sm leading-6 text-gray-600">Edit a entry:</p>
  
        <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-4">
          <div class="sm:col-span-4">
            <x-label-form for="title">Title</x-label-form>       
              <div class="mt-2">
                <x-input-form type="text" name="title" id="title" value="{{$anime->title}}"/>
              </div>
            </div>
          </div>

          <div class="sm:col-span-4">
            <x-label-form for="year_watched">year watched</x-label-form>       
            <div class="mt-2">
                <x-input-form type="text" name="year_watched" id="year_watched" autocomplete="2024" value="{{$anime->year_watched}}"/>
              </div>
            </div>
          </div>

          <div class="sm:col-span-4">
            <x-label-form for="status">Additional Info</x-label-form>
            <div class="mt-2">
                <x-input-form type="text" name="status" id="status" value="{{$anime->status}}"/>
              </div>
            </div>
          </div>

          <div class="sm:col-span-1">
            <x-label-form for="form">Form</x-label-form>
            <div class="mt-2">
                <input type="radio" name="form" id="Anime" value="Anime" class="" @checked($anime->form == "Anime")>
                <x-label-form for="" for="Anime">Anime</x-label-form><br>
                <input type="radio" name="form" id="Manga" value="Manga" class="" @checked($anime->form == "Manga")>
                <x-label-form for="" for="Manga">Manga</x-label-form><br>
              </div>
            </div>
          </div>
  
          
  
          
  
          
        </div>
      </div>

    </div>

    <div class="mt-6 flex items-center justify-between">

      <div class="flex items-center">
        <button form="delete-form" class="text-white bg-red-400 hover:bg-red-600 rounded-lg text-sm px-3 py-2 font-semibold ">Delete</button>
      </div>

      <div class="flex items-center gap-x-6">
        <a href="/archive/anime/{{$anime->id}}"><button type="button" class="text-sm font-semibold leading-6 text-gray-900">Cancel</button></a>
        <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Update</button>
      </div>
    </div>
  </form>

  <form method="POST" action="/archive/anime/{{$anime->id}}" id="delete-form" class="hidden">
  @csrf
  @method('DELETE')
  </form>
</x-layout>