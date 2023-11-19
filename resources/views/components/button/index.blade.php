@props([
    'variant' => ''
])

<button
    {{ $attributes->class([
        'block w-full h-10 px-3 focus:outline-none text-sm font-medium rounded-lg flex items-center justify-center text-white bg-' . $variant . '-500',
        'cursor-not-allowed opacity-50' => $attributes->has('disabled'),
        'hover:bg-' . $variant . '-400' => !$attributes->has('disabled'),
    ])->merge([
        'type' => 'button'
    ]) }}
>
    {{$slot}}
</button>
