<x-layout>
    <x-slot:heading>
      Login
      <a href="/archive/anime"><x-btn.back-button></x-btn.back-button></a>
    </x-slot:heading>
  
  <form method="POST" action="/login">
  @csrf
    <div class="space-y-12">
  
        <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-4">
  
          <div class="sm:col-span-4">
            <x-label-form for="name">Username</x-label-form>       
                <x-input-form type="text" name="name" id="name" placeholder="your preferred username" :value="old('name') " required />
                <x-input-error name="name"/>
            </div>    
  
          <div class="sm:col-span-4">
            <x-label-form for="password">Password</x-label-form>
                <x-input-form type="text" name="password" id="password" placeholder="******" required />
                <x-input-error name="password"/>
            </div>
  
        </div>
        </div>
  
    <div class="mt-6 flex items-center justify-end gap-x-6">
      <a href="/"><x-btn.cancel-button></x-btn.cancel-button></a>
      <x-btn.save-button>Login</x-btn.save-button>
    </div>
  </form>
  </x-layout>