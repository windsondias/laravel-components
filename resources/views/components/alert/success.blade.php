@props([
    'message' => '',
    'icon' => '<i class="ri-error-warning-line ri-xl"></i>',
])

<div
    {{ $attributes->class([
        'flex items-center gap-3 p-4 my-2 text-sm text-green-800 border border-green-300 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400 dark:border-green-800',
    ]) }}
    role="alert"
>
    {!! $icon !!}
    <div>
        <span>{{$message}}</span>
    </div>
</div>
