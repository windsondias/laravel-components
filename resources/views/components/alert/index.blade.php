@props([
    'message' => '',
    'icon' => '<i class="ri-error-warning-line ri-xl"></i>',
    'variant' => ''
])

<div
    {{ $attributes->class([
        'flex items-center gap-3 p-4 my-2 rounded-lg text-sm bg-' . $variant . '-100/50 dark:bg-' . $variant . '-500/10 border border-' . $variant . '-300 dark:border-' . $variant . '-500 text-' . $variant . '-500 dark:text-' . $variant . '-300',
    ]) }}
>
    {!! $icon !!}
    <div class="w-full px-3">
        {{$slot}}
    </div>
</div>
