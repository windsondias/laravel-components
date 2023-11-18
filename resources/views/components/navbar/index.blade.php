@props([
    'left' => '',
    'right' => '',
])

<nav class="fixed bg-white border-b border-gray-200 px-2 py-2.5 dark:bg-gray-800 dark:border-gray-700 left-0 right-0 top-0 z-50">
    <div class="flex flex-wrap justify-between items-center">
        <div class="flex justify-start items-center">
            {{$left}}
        </div>
        <div class="flex items-center lg:order-2">
            {{$right}}
        </div>
    </div>
</nav>
