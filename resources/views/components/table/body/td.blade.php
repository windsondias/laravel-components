@aware([
    'compact' => false
])

<td
    {{ $attributes->class([
       'p-2' => $compact,
       'p-4' => !$compact,
    ]) }}
>
    {{$slot}}
</td>
