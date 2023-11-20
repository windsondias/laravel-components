@props([
    'href' => null,
    'active' => false,
    'icon' => true,
])

<li class="inline-flex items-center p-0">
    <{{!empty($href) ? 'a' : 'span'}}
        href="{{$href}}"
        {{ $attributes->class([
            'inline-flex items-center justify-center',
            'text-gray-400 dark:text-gray-600' => !$active,
            'text-gray-600 dark:text-gray-200' => $active,
        ]) }}
    >
        <i
            {{ $attributes->class([
                'ri-arrow-right-s-line ri-lg',
                'hidden' => !$icon,
            ]) }}
        ></i>
        <span>
            {{$slot}}
        </span>
    </{{!empty($href) ? 'a' : 'span'}}>
</li>
