@props([
    'disabled' => false,
])

<input
    {{ $attributes }}
    {{ $disabled ? 'disabled' : '' }}
    {{ $attributes->class([
        'block w-full rounded-lg p-2.5 bg-gray-50 dark:bg-gray-700 border border-gray-300 dark:border-gray-600 focus:outline-none focus:ring-0 focus:border-primary-500 focus:dark:border-primary-500 text-sm text-gray-900 dark:text-gray-50',
        'ps-10' => !empty($prepend),
        'pe-10' => !empty($append),
        'p-0.5 h-10' => $attributes->get('type') == 'color',
        'cursor-not-allowed text-gray-600 dark:text-gray-300 bg-gray-200 dark:bg-gray-600' => $disabled,
        'border-red-300 dark:border-red-600' => $errors->has($attributes->whereStartsWith('wire:model')->first()),
    ])->merge([
        'type' => 'text'
    ]) }}
>
