<x-components::card class="space-y-4 sm:px-8">
    <x-components::loading />
    <h1 class="text-2xl font-bold">Faça login na sua conta</h1>
    <x-components::form wire:submit="submit">
        <div>
            <x-components::form.label for="email">E-mail</x-components::form.label>
            <x-components::form.input wire:model="email" type="text" id="email" autofocus/>
            <x-components::form.error input="email"/>
        </div>
        <div>
            <x-components::form.label for="password">Senha</x-components::form.label>
            <x-components::form.input-password wire:model="password" id="password" />
            <x-components::form.error input="password"/>
        </div>
        <div class="flex items-center justify-between">
            <x-components::form.checkbox wire:model="remember" label="Lembrar de mim" />
            <x-components::link href="#" class="text-sm font-medium">
                Esqueceu a senha?
            </x-components::link>
        </div>
        <x-components::button variant="primary" type="submit">
            Acessar
        </x-components::button>
    </x-components::form>
</x-components::card>
