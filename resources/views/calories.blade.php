<x-layout>
     <x-slot:heading> {{-- siehe $heading in layout.blade.php --}}
        Calorie Counter
        {{-- <a href="/archive">
            <button class=" text-white bg-blue-400 hover:bg-blue-600  font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2">go back</button>
            </a> --}}
    </x-slot:heading>
    @livewire('calories')
</x-layout>