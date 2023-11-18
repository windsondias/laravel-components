@props([
    'icon' => ''
])
<div class="w-full text-center">
    @if(!empty($icon))
        {!! $icon !!}
    @endif
    <p class="text-lg text-gray-500 dark:text-gray-300">
        {{$slot}}
    </p>
</div>
