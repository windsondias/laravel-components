@props([
    'variant' => '',
    'size' => 'md'
])

<button
        {{ $attributes->class([
            'block w-full gap-2 focus:outline-none font-medium flex rounded items-center justify-center bg-' . $variant . '-500',
            'cursor-not-allowed opacity-50' => $attributes->has('disabled'),
            'hover:bg-' . $variant . '-400' => !$attributes->has('disabled'),
            'text-white' => !empty($variant),
            'h-8 p-2 text-sm' => $size == 'sm',
            'h-10 p-3 text-sm' => $size == 'md',
            'h-12 p-4' => $size == 'lg',
            'h-14 p-5' => $size == 'xl',
        ])->merge([
            'type' => 'button'
        ]) }}
>
    {{$slot}}
</button>
