@props(['active' => false])
@props(['type' => 'a'])

@if ($type == 'a')
    <a class="{{ $active ? 'bg-gray-900 text-white' : 'text-gray-200 hover:bg-gray-900 hover:text-white' }} rounded-md px-3 py-2 text-sm font-medium"
    aria-current="{{ $active ? 'page' : 'false' }}" {{ $attributes }}>
        {{ $slot }}
    </a>

@else
    <button class="{{ $active ? 'bg-gray-900 text-white' : 'text-gray-200 hover:bg-gray-900 hover:text-white' }} rounded-md px-3 py-2 text-sm font-medium"
    aria-current="{{ $active ? 'page': 'false' }}" {{ $attributes }}>
        {{ $slot }}
    </button>
@endif
