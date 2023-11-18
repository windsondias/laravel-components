@props([
    'disabled' => false,
    'variant' => 'default'
])

<button
    {{ $disabled ? 'disabled' : '' }}
    {{ $attributes->class([
        'block w-full h-10 px-3 focus:outline-none text-sm font-medium rounded-lg flex items-center justify-center',
        'cursor-not-allowed opacity-90' => $attributes->has('disabled'),
        'text-white bg-blue-600 hover:bg-blue-700' => $variant == 'primary',
        'text-gray-900 bg-gray-300 hover:bg-gray-400' => $variant == 'secondary',
        'text-white bg-red-600 hover:bg-red-700' => $variant == 'danger',
        'text-gray-500 dark:text-gray-400' => $variant == 'default',
    ])->merge([
        'type' => 'button'
    ]) }}
>
    {{$slot}}
</button>
