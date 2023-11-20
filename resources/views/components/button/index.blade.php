@props([
    'variant' => ''
])

<button
        {{ $attributes->class([
            'block w-full gap-2 h-10 px-3 focus:outline-none text-sm font-medium rounded-lg flex items-center justify-center bg-' . $variant . '-500',
            'cursor-not-allowed opacity-50' => $attributes->has('disabled'),
            'hover:bg-' . $variant . '-400' => !$attributes->has('disabled'),
            'text-white' => !empty($variant),
        ])->merge([
            'type' => 'button'
        ]) }}
>
    {{$slot}}
</button>
