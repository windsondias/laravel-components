@aware([
    'hover' => true
])

<tr
    {{ $attributes->class([
        'border-b border-gray-100 dark:border-gray-700',
        'hover:bg-gray-300/20 hover:dark:bg-gray-600/40' => $hover
    ]) }}
>
    {{$slot}}
</tr>
