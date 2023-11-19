@props([
    'disabled' => false,
])

<div>
    <div x-data="{show: false}" class="relative">
        <input
            {{ $attributes }}
            {{ $disabled ? 'disabled' : '' }}
            {{ $attributes->class([
                'block w-full rounded-lg p-2.5 bg-gray-50 dark:bg-gray-700 border border-gray-300 dark:border-gray-600 focus:outline-none focus:ring-0 focus:border-primary-500 focus:dark:border-primary-500 text-sm text-gray-900 dark:text-gray-50',
                'ps-10' => !empty($prepend),
                'pe-10' => !empty($append),
                'p-0.5 h-10' => $attributes->get('type') == 'color',
                'cursor-not-allowed text-gray-600 dark:text-gray-300 bg-gray-200 dark:bg-gray-600' => $disabled,
                'border-red-300 dark:border-red-600' => $errors->has($attributes->whereStartsWith('wire:model')->first()),
            ]) }}
            :type="show ? 'text' : 'password'"
            type="password"
        >
        <div class="absolute inset-y-0 end-0 flex items-center pe-3.5 text-gray-500 dark:text-gray-400 hover:text-gray-600 hover:dark:text-gray-500 cursor-pointer">
            <i @click="show = true" :class="!show ? 'block' : 'hidden'" class="ri-eye-fill ri-lg "></i>
            <i @click="show = false" :class="show ? 'block' : 'hidden'" class="ri-eye-off-fill ri-lg "></i>
        </div>
    </div>
</div>
