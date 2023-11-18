<label
    {{ $attributes->merge([
        'class' => 'block mb-1 text-sm font-medium text-gray-900 dark:text-white'
    ]) }}
>
    {{$slot}}
</label>
