<x-components::navbar>
    <x-slot:left>
        <div>
            <x-components::button id="sidebar_toggle">
                <i class="ri-menu-line ri-2x"></i>
            </x-components::button>
        </div>
        <a href="#" class="flex items-center justify-between mr-4 gap-3">
            <img class="h-10" src="#" alt="">
            <span class="font-bold text-lg">Software</span>
        </a>
    </x-slot:left>

    <x-slot:right>
        <x-components::button id="theme-toggle">
            <i id="theme-toggle-dark-icon" class="hidden ri-moon-fill ri-lg"></i>
            <i id="theme-toggle-light-icon" class="hidden ri-sun-fill ri-lg"></i>
        </x-components::button>
        <x-components::dropdown align="right">
            <x-components::dropdown.button>
                <span class="sr-only">Open user menu</span>
                @if(!empty(auth()->user()))
                    <img src="{{ asset(auth()->user()->avatar) }}" class="rounded-full w-8 h-8" alt="avatar">
                @else
                    <div class="flex items-center justify-center w-8 h-8 overflow-hidden bg-gray-100 rounded-full dark:bg-gray-600">
                        <i class="ri-user-fill ri-lg"></i>
                    </div>
                @endif
            </x-components::dropdown.button>
            <x-slot:items>
                <x-components::dropdown.header>
                    <span class="block text-sm font-semibold text-gray-900 dark:text-white">
                        Name
                    </span>
                    <span class="block text-sm text-gray-900 truncate dark:text-white">
                        E-mail
                    </span>
                </x-components::dropdown.header>
                <x-components::dropdown.divider/>
                <x-components::dropdown.item :navigate="true" href="#">
                    Conta
                </x-components::dropdown.item>
            </x-slot:items>
        </x-components::dropdown>
    </x-slot:right>
</x-components::navbar>
