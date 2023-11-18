@props([
    'message' => '',
    'icon' => '<i class="ri-error-warning-line ri-xl"></i>',
])

<div
    {{ $attributes->class([
        'flex items-center gap-3 p-4 my-2 text-sm text-yellow-800 border border-yellow-300 rounded-lg bg-yellow-50 dark:bg-gray-800 dark:text-yellow-300 dark:border-yellow-800',
    ]) }}
    role="alert"
>
    {!! $icon !!}
    <div>
        <span>{{$message}}</span>
    </div>
</div>
