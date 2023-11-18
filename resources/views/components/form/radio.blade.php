@props([
    'label' => '',
    'id' => 'radio'
])

<div class="flex items-center">
    <input
        type="radio"
        id="{{$id}}"
        {{ $attributes->class([
            'w-4 h-4 bg-gray-50 bg-gray-50 dark:bg-gray-700 border border-gray-300 dark:border-gray-600 outline-none focus:ring-0 accent-primary-500 text-primary-500',
        ]) }}
    >
    <label for="{{$id}}" class="ms-2 text-sm font-medium text-gray-900 dark:text-white">{{$label}}</label>
</div>


