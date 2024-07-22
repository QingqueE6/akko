<x-layout>
    <x-slot:heading>
        Create: Anime & Manga
        <a href="/archive/anime"><x-btn.back-button></x-btn.back-button></a>
    </x-slot:heading>

<form method="POST" action="/archive/anime">
  @csrf
    <div class="space-y-12">
      <div class="border-b border-gray-900/10 pb-12">
        <h2 class="text-base font-semibold leading-7 text-gray-900">Anime & Manga</h2>
        <p class="mt-1 text-sm leading-6 text-gray-600">Create a new entry:</p>
  
        <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-4">

          <div class="sm:col-span-4">
            <x-label-form for="title">Title</x-label-form>       
                <x-input-form type="text" name="title" id="title" placeholder="Title of the anime/manga"/>
                <x-input-error name="title"/>
            </div>    

          <div class="sm:col-span-4">
            <x-label-form for="year_watched">year watched/read</x-label-form>
                <x-input-form type="text" name="year_watched" id="year_watched" autocomplete="2024" placeholder="2024"/>
                <x-input-error name="year_watched"/>
            </div>

          <div class="sm:col-span-4">
            <x-label-form for="status">Additional Info</x-label-form>
                <x-input-form type="text" name="status" id="status"/>
            </div>

          <div class="sm:col-span-4">
            <x-label-form for="form">Form</x-label-form>
            <div class="rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset  sm:max-w-md">
                <input type="radio" name="form" id="Anime" value="Anime"/>
                <label for="Anime">Anime</label><br>
                <input type="radio" name="form" id="Manga" value="Manga"/>
                <label for="Manga">Manga</label><br>
              </div>
            </div>
        </div>
        </div>
        </div>
  
    <div class="mt-6 flex items-center justify-end gap-x-6">
      <a href="/archive/anime"><x-btn.cancel-button></x-btn.cancel-button></a>
      <x-btn.save-button>Create</x-btn.save-button>
    </div>
  </form>
</x-layout>