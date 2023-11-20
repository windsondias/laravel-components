<tfoot
    {{ $attributes->merge([
        'class' => 'text-xs uppercase bg-gray-200 dark:bg-gray-700',
    ]) }}
>
<tr>
    {{$slot}}
</tr>
</tfoot>
