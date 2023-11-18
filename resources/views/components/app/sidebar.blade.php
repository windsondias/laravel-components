<x-components::sidebar>
    <x-slot:items>
        <x-components::sidebar.item href="#" route-is="*">
            <i class="ri-building-4-line ri-lg"></i>
            <span>Menu 1</span>
        </x-components::sidebar.item>
        <x-components::sidebar.dropdown route-is="*">
            <i class="ri-settings-2-line ri-lg"></i>
            <span>Menu 2</span>
            <x-slot:items>
                <x-components::sidebar.dropdown.item href="#" route-is="*">
                    <span>Submenu 1</span>
                </x-components::sidebar.dropdown.item>
            </x-slot:items>
        </x-components::sidebar.dropdown>
    </x-slot:items>
</x-components::sidebar>
