@props([
    'message' => '',
    'icon' => '<i class="ri-error-warning-line ri-xl"></i>',
])

<div
    {{ $attributes->class([
        'flex items-center gap-3 p-4 my-2 text-sm text-blue-800 border border-blue-300 rounded-lg bg-blue-50 dark:bg-gray-800 dark:text-blue-400 dark:border-blue-800',
    ]) }}
    role="alert"
>
    {!! $icon !!}
    <div>
        <span>{{$message}}</span>
    </div>
</div>
