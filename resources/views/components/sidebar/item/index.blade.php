@props([
    'href' => '#',
    'routeIs' => ''
])

<a
    href="{{$href}}"
    {{ $attributes->class([
        'flex items-center gap-4 w-60 h-10 p-2 text-base font-medium rounded-lg group hover:bg-gray-100 dark:hover:bg-gray-700',
        'text-gray-900 dark:text-white' => !request()->routeIs($routeIs),
        'text-purple-500 dark:text-purple-500' => request()->routeIs($routeIs),
    ]) }}
>
    {{$slot}}
</a>
