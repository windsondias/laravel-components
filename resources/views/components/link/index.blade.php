@props([
    'href' => '#'
])

<a
    href="{{$href}}"
    {{ $attributes->class([
        '',
    ]) }}
>
    {{$slot}}
</a>
