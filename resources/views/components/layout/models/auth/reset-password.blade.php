<x-components::card class="space-y-4 sm:px-8 pb-8">
    <x-components::loading />
    <h1 class="text-2xl font-bold">Altere sua senha</h1>
    <x-components::form wire:submit="submit">
        <div>
            <x-components::form.label for="email">E-mail</x-components::form.label>
            <x-components::form.input wire:model="email" type="email" id="email"/>
            <x-components::form.error input="email"/>
        </div>
        <div>
            <x-components::form.label for="password">Senha</x-components::form.label>
            <x-components::form.input-password wire:model="password" type="password" id="password" autofocus/>
            <x-components::form.error input="password" />
        </div>
        <div>
            <x-components::form.label for="password_confirmation">Confirme sua senha</x-components::form.label>
            <x-components::form.input-password wire:model="passwordConfirmation" type="password" id="password_confirmation"/>
            <x-components::form.error input="passwordConfirmation" />
        </div>
        <x-components::button variant="primary" type="submit">
            Alterar Senha
        </x-components::button>
        <div class="text-center">
            <x-components::link wire:navigate href="#">
                Voltar para o login
            </x-components::link>
        </div>
    </x-components::form>
</x-components::card>
