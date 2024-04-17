<x-layout>
    <x-slot:heading>
        Latein Vokabular
    </x-slot:heading>
    <h1>MiR 1:</h1>

    @foreach ($data as $item)
        <li>Latein: {{$item->latin}}</li>
        <li>Deutsch: {{$item->german}}</li>
        <ul>From lesson Nr. {{$item->lesson}}</ul>
        
    @endforeach

</x-layout>