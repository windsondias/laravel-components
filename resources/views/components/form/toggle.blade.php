@props([
    'label' => ''
])

<label class="relative inline-flex items-center cursor-pointer">
    <input {{ $attributes }} type="checkbox" class="sr-only peer">
    <div class="w-11 h-6 bg-gray-400 dark:bg-gray-700 peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-primary-500"></div>
    <span class="ml-2 text-sm font-medium text-gray-900 dark:text-white">
        {{$label}}
    </span>
</label>


