@props([
    'size' => 'sm'
])

<div
        {{$attributes}}
        x-data="{open: false}"
        x-on:open-modal.window="$event.detail == $el.id ? open = true : null"
        x-on:close-modal.window="$event.detail == $el.id ? open = false : null"
        x-cloak
        x-show="open"
        x-transition
        tabindex="-1"
        aria-hidden="true"
        class="fixed overflow-y-auto overflow-x-hidden w-screen h-full top-0 flex items-center justify-center left-0 z-50 bg-gray-950/20 backdrop-blur-sm"
>
    <div
            {{ $attributes->class([
                'relative max-h-full',
                'w-[30rem]' => $size == 'sm',
                'w-[40rem]' => $size == 'md',
                'w-[50rem]' => $size == 'lg',
                'w-[60rem]' => $size == 'xl',
            ]) }}
    >
        <div class="relative w-full my-3 py-4 px-6 bg-white dark:bg-gray-700 rounded-lg">
            <div class="p-0 absolute top-2 right-2">
                <x-components::button class="items-center justify-center" @click="open = false">
                    <i class="ri-close-line ri-2x"></i>
                </x-components::button>
            </div>
            {{$slot}}
        </div>
    </div>
</div>
