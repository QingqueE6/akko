<x-layout>
    <x-slot:heading>
        Edit: {{$movie->title}}
        <a href="/archive/movies/{{$movie->id}}"><button class=" text-white bg-blue-400 hover:bg-blue-600  font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2">go back</button></a>
    </x-slot:heading>

<form method="POST" action="/archive/movies/{{$movie->id}}">
  @csrf
  @method('PATCH')
    <div class="space-y-12">
      <div class="border-b border-gray-900/10 pb-12">
        <h2 class="text-base font-semibold leading-7 text-gray-900">Movies & Series</h2>
        <p class="mt-1 text-sm leading-6 text-gray-600">Edit a entry:</p>
  
        <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-4">

          <div class="sm:col-span-4">
            <x-label-form for="title">Title</x-label-form>       
                <x-input-form type="text" name="title" id="title" value="{{$movie->title}}"/>
                  <x-input-error name="title"/>
            </div>

          <div class="sm:col-span-4">
            <x-label-form for="year_watched">year watched</x-label-form>       
                <x-input-form type="text" name="year_watched" id="year_watched" autocomplete="2024" value="{{$movie->year_watched}}"/>
                  <x-input-error name="year_watched"/>
            </div>

          <div class="sm:col-span-4">
            <x-label-form for="status">Additional Info</x-label-form>
                <x-input-form type="text" name="status" id="status" value="{{$movie->status}}"/>
            </div>

          <div class="sm:col-span-1">
            <x-label-form for="form">Form</x-label-form>
              <div class="rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset  sm:max-w-md">
                <input type="radio" name="form" id="Movie" value="Movie" class="" @checked($movie->form == "Movie")>
                <x-label-form for="" for="Movie">Movie</x-label-form>
                <input type="radio" name="form" id="Series" value="Series" class="" @checked($movie->form == "Series")>
                <x-label-form for="" for="Series">Series</x-label-form>
            </div>
   
    </div>
    </div>
    </div>

    <div class="mt-6 flex items-center justify-between">
      <div class="flex items-center">
        <button form="delete-form" class="text-white bg-red-400 hover:bg-red-600 rounded-lg text-sm px-3 py-2 font-semibold ">Delete</button>
      </div>

      <div class="flex items-center gap-x-6">
        <a href="/archive/movies/{{$movie->id}}"><button type="button" class="text-sm font-semibold leading-6 text-gray-900">Cancel</button></a>
        <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Update</button>
      </div>
    </div>
  </form>

  <form method="POST" action="/archive/movies/{{$movie->id}}" id="delete-form" class="hidden">
  @csrf
  @method('DELETE')
  </form>
</x-layout>