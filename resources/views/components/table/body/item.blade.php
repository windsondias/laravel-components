@props([
    'class_tr' => 'border-b dark:border-gray-700'
])
<tr
    {{ $attributes->merge([
        'class' => 'border-b dark:border-gray-700',
    ]) }}
>
    {{$slot}}
</tr>
