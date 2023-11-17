@props([
    'name' => '',
])

<input
    {{ $attributes->class([
        'border border-gray-300 dark:border-gray-600 focus:border-gray-600 dark:focus:border-gray-500 text-gray-900 sm:text-sm rounded-lg focus:ring-gray-600 block w-full dark:bg-gray-700 dark:placeholder-gray-400 dark:text-white dark:focus:ring-gray-500',
        'p-2.5' => $attributes->get('type') != 'color',
        'p-0.5 h-10' => $attributes->get('type') == 'color',
        'cursor-not-allowed text-gray-700 bg-gray-200 dark:text-gray-50 dark:bg-gray-800' => $attributes->has('disabled'),
        'border-red-300 dark:border-red-600 focus:border-gray-600 dark:focus:border-gray-500' => $errors->has($name) || $errors->has($attributes->whereStartsWith('wire:model')->first()),
    ]) }}
>
