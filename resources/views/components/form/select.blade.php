<select
    {{$attributes}}
    {{ $attributes->merge([
        'class' => 'block w-full rounded-lg p-2.5 bg-gray-50 dark:bg-gray-700 border border-gray-300 dark:border-gray-600 focus:outline-none focus:ring-0 focus:border-primary-500 focus:dark:border-primary-500 text-sm text-gray-900 dark:text-gray-50'
    ]) }}
>
    {{$slot}}
</select>
