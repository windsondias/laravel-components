@props([
    'prepend' => '',
    'append' => '',
    'disabled' => false,
])

<div>
    <div class="relative">
        @if(!empty($prepend))
            <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none text-gray-500 dark:text-gray-400">
                {!! $prepend !!}
            </div>
        @endif

        <input
            {{ $attributes }}
            {{ $disabled ? 'disabled' : '' }}
            {{ $attributes->class([
                'block w-full rounded-lg p-2.5 bg-gray-50 dark:bg-gray-700 border border-gray-300 dark:border-gray-600 focus:outline-none focus:ring-0 focus:border-primary-500 focus:dark:border-primary-500 text-sm text-gray-900 dark:text-gray-50',
                'ps-12' => !empty($prepend),
                'pe-12' => !empty($append),
                'p-0.5 h-10' => $attributes->get('type') == 'color',
                'cursor-not-allowed text-gray-600 dark:text-gray-300 bg-gray-200 dark:bg-gray-600' => $disabled,
                'border-red-300 dark:border-red-600' => $errors->has($attributes->whereStartsWith('wire:model')->first()),
            ])->merge([
                'type' => 'text'
            ]) }}
        >

        @if(!empty($append))
            <div class="absolute inset-y-0 end-0 flex items-center pe-3.5 pointer-events-none text-gray-500 dark:text-gray-400">
                {!! $append !!}
            </div>
        @endif
    </div>
</div>
