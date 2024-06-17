<x-layout>
    <x-slot:heading>
        Edit: {{$game->title}}
        <a href="/archive/games/{{$game->id}}"><x-btn.back-button></x-btn.back-button></a>
    </x-slot:heading>

<form method="POST" action="/archive/games/{{$game->id}}">
  @csrf
  @method('PATCH')
    <div class="space-y-12">
      <div class="border-b border-gray-900/10 pb-12">
        <h2 class="text-base font-semibold leading-7 text-gray-900">Games</h2>
        <p class="mt-1 text-sm leading-6 text-gray-600">Edit a entry:</p>
  
        <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-4">

          <div class="sm:col-span-4">
            <x-label-form for="title">Title</x-label-form>
                <x-input-form type="text" name="title" id="title" value="{{$game->title}}"/>
                <x-input-error name="title"/>
            </div>

          <div class="sm:col-span-4">
            <x-label-form for="year_played">year played</x-label-form>
                <x-input-form type="text" name="year_played" id="year_played" value="{{$game->year_played}}"/>
            </div>

          <div class="sm:col-span-4">
            <x-label-form for="additional_info">Additional Info</x-label-form>
                <x-input-form type="text" name="additional_info" id="additional_info" value="{{$game->additional_info}}"/>
            </div>

          <div class="sm:col-span-1">
            <x-label-form for="form">Status</x-label-form>
              <div class="rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset  sm:max-w-md">
                <input type="radio" name="status" id="currently playing" value="currently playing" class="" @checked($game->status == "currently playing")>
                <x-label-form for="currently playing">currently playing</x-label-form>
                <input type="radio" name="status" id="done" value="done" class="" @checked($game->status == "done")>
                <x-label-form for="done">done</x-label-form>
                <input type="radio" name="status" id="Backlog" value="Backlog" class="" @checked($game->status == "Backlog")>
                <x-label-form for="Backlog">Backlog</x-label-form>
                <input type="radio" name="status" id="completed" value="completed" class="" @checked($game->status == "completed")>
                <x-label-form for="completed">completed</x-label-form>
              </div>
            </div>

      </div>
      </div>
      </div>

    <div class="mt-6 flex items-center justify-between">
      <div class="flex items-center">
        <x-btn.delete-button></x-btn.delete-button>
      </div>

      <div class="flex items-center gap-x-6">
        <a href="/archive/games/{{$game->id}}"><x-btn.cancel-button></x-btn.cancel-button></a>
        <x-btn.save-button>Update</x-btn.save-button>      
      </div>
    </div>
  </form>

  <form method="POST" action="/archive/games/{{$game->id}}" id="delete-form" class="hidden">
  @csrf
  @method('DELETE')
  </form>
</x-layout>