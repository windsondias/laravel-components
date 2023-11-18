@props([
    'label' => '',
    'variant' => 'default'
])

<button
        type="button"
        @click="open =! open"
        {{ $attributes->class([
            'block w-full h-10 py-1 px-2 rounded-lg text-sm font-medium text-gray-900',
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
