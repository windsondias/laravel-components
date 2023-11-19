<div
    {{ $attributes->merge([
        'class' => 'w-full p-4 shadow-xl dark:shadow-none dark:bg-gray-800 dark:text-white rounded-lg shadow relative overflow',
    ]) }}
>
    {{$slot}}
</div>
