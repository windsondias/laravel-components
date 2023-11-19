@props([
    'src' => '',
    'size' => 'sm'
])

@if(!empty($src))
    <img
            src="{{ $src }}"
            {{ $attributes->class([
                'rounded-full',
                'w-8 h-8' => $size == 'sm',
                'w-16 h-16' => $size == 'md',
                'w-32 h-32' => $size == 'lg',
                'w-40 h-40' => $size == 'xl',
            ]) }}
            alt="avatar"
    />
@else
    <div
            {{ $attributes->class([
                'flex items-center justify-center overflow-hidden bg-gray-100 rounded-full dark:bg-gray-600',
                'w-8 h-8' => $size == 'sm',
                'w-16 h-16' => $size == 'md',
                'w-32 h-32' => $size == 'lg',
                'w-40 h-40' => $size == 'xl',
            ]) }}
    >
        <i
                {{ $attributes->class([
                    'ri-user-fill',
                    'ri-lg' => $size == 'sm',
                    'ri-3x' => $size == 'md',
                    'ri-6x' => $size == 'lg',
                    'ri-8x' => $size == 'xl',
                ]) }}
        ></i>
    </div>
@endif
