@props([
    'compact' => false,
    'hover' => true,
])

<div class="overflow-x-auto">
    <table
        {{ $attributes->class([
            'w-full'
        ]) }}
    >
        {{$slot}}
    </table>
</div>
