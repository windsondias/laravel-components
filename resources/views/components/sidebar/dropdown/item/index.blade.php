@props([
    'href' => '#',
    'routeIs' => ''
])

<a
    wire:navigate
    href="{{$href}}"
    {{ $attributes->class([
        'flex items-center gap-3 p-2 pl-14 w-60 text-base font-medium  rounded-lg transition duration-75 group hover:bg-gray-100 dark:hover:bg-gray-700',
        'text-gray-900 dark:text-white' => !request()->routeIs($routeIs),
        'text-primary-500 dark:text-primary-200' => request()->routeIs($routeIs),
    ]) }}
>
    {{$slot}}
</a>
