<x-layout>
    <x-slot:heading>
        Create: Anime & Manga
        <a href="/archive/anime"><button class=" text-white bg-blue-400 hover:bg-blue-600  font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2">go back</button></a>
    </x-slot:heading>

    <!-- 
    - title
    - year_watched
    form
    status
    -->
<form method="POST" action="/archive/anime">
  @csrf
    <div class="space-y-12">
      <div class="border-b border-gray-900/10 pb-12">
        <h2 class="text-base font-semibold leading-7 text-gray-900">Anime & Manga</h2>
        <p class="mt-1 text-sm leading-6 text-gray-600">Create a new entry:</p>
  
        <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-4">
          <div class="sm:col-span-4">
            <label for="title" class="block text-sm font-medium leading-6 text-gray-900">Title</label>
            <div class="mt-2">
              <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                <input type="text" name="title" id="title" class="block flex-1 border-0 bg-transparent py-1.5 px-3 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" placeholder="Title of the anime/manga">
              </div>
            </div>
          </div>

          <div class="sm:col-span-4">
            <label for="year_watched" class="block text-sm font-medium leading-6 text-gray-900">year watched</label>
            <div class="mt-2">
              <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                <input type="text" name="year_watched" id="year_watched" autocomplete="2024"   class="block flex-1 border-0 bg-transparent py-1.5 px-3 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" placeholder="2024">
              </div>
            </div>
          </div>

          {{-- <div class="sm:col-span-1">
            <label for="form" class="block text-sm font-medium  text-gray-900">Form</label>
            <div class="mt-2">
              <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                <input type="radio" name="form" id="Anime" value="Anime" class="">
                <label for="Anime">Anime</label><br>
                <input type="radio" name="form" id="Manga" value="Manga" class="">
                <label for="Manga">Manga</label><br>
              </div>
            </div>
          </div> --}}
  
          
  
          
  
          
        </div>
      </div>
  
  
      
    </div>
  
    <div class="mt-6 flex items-center justify-end gap-x-6">
      <button type="button" class="text-sm font-semibold leading-6 text-gray-900">Cancel</button>
      <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
    </div>
  </form>
  
</x-layout>