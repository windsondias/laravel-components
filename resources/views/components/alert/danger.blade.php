@props([
    'message' => '',
    'icon' => '<i class="ri-error-warning-line ri-xl"></i>',
])

<div
    {{ $attributes->class([
        'flex items-center gap-3 p-4 my-2 text-sm text-red-800 border border-red-300 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400 dark:border-red-800',
    ]) }}
    role="alert"
>
    {!! $icon !!}
    <div>
        <span>{{$message}}</span>
    </div>
</div>
