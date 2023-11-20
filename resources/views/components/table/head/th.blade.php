@aware([
    'compact' => false
])

<th
    {{ $attributes->class([
        'text-left',
       'p-2' => $compact,
       'p-4' => !$compact,
    ]) }}
>
    {{$slot}}
</th>
