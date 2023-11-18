@props([
    'items' => '',
    'align' => 'left'
])

<div x-data="{open: false}" class="relative">
    {{$slot}}
    <div
        x-cloak
        x-show="open"
        @click.outside="open = false"
        {{ $attributes->class([
            'absolute flex flex-col w-56 py-2 z-20 mt-1 bg-gray-300 dark:bg-gray-700 text-gray-800 dark:text-gray-100 rounded-lg',
            'left-0' => $align === 'left',
            'right-0' => $align === 'right',
        ]) }}>
        {{$items}}
    </div>
</div>
