@props([
    'active' => false,
])
{{-- <a {{ $attributes }}
    class="{{ request()->is('/') ? 'rounded-md bg-gray-900 px-3 py-2 text-sm font-medium text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }}"
    aria-current="{{ request()->is('/') ? 'page' : false }}">{{ $slot }}</a> --}}

<a {{ $attributes }}
    class="{{ $active ? 'rounded-md bg-cyan-700 px-3 py-2 text-sm font-medium text-white' : 'text-black hover:text-sky-900 transition' }}"
    aria-current="{{ $active ? 'page' : false }}">{{ $slot }}</a>
