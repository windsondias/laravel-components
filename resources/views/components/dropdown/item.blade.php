@props([
    'navigate' => false
])

<a
    {{$navigate ? 'wire:navigate' : ''}}
    {{ $attributes->class([
        'px-2 py-1 text-sm font-medium hover:bg-gray-200 dark:hover:bg-gray-600 hover:text-gray-700 dark:hover:text-gray-50'
    ])->merge([
        'href' => '#'
    ]) }}
>
    {{$slot}}
</a>
