@props([
    'items' => '',
    'routeIs' => '',
])

<div x-data="{show: @js(request()->routeIs($routeIs))}">
    <button
        @click="show =! show "
        type="button"
        class="flex items-center justify-between h-10 p-2 w-60 text-base font-medium text-gray-900 rounded-lg transition duration-75 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700"
    >
        <div class="flex items-center gap-4">
            {{$slot}}
        </div>
        <div>
            <i @if(!request()->routeIs($routeIs)) x-cloak @endif x-show="show" class="ri-arrow-up-s-line ri-lg"></i>
            <i @if(request()->routeIs($routeIs)) x-cloak @endif x-show="!show" class="ri-arrow-down-s-line ri-lg"></i>
        </div>
    </button>
    <div
        @if(!request()->routeIs($routeIs)) x-cloak @endif
        x-show="show"
        x-transition
        :class="{'hidden' : !show}"
    >
        {{$items}}
    </div>
</div>
