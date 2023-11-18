@props([

])

<form
        {{ $attributes->class([
            'space-y-4 md:space-y-6'
        ]) }}
>
    {{ $slot }}
</form>
