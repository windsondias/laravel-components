<a
        href="{{$href}}"
        {{ $attributes->class([
            '',
        ])->merge([
            'type' => '#'
        ]) }}
>
    {{$slot}}
</a>
