<x-components::card class="space-y-4 sm:px-8">
    <x-components::loading />
    <h1 class="text-2xl font-bold">Esqueceu a senha?</h1>
    <small>Digite seu e-mail e enviaremos instruções para redefinir sua senha</small>
    <x-components::form wire:submit="submit">
        <div>
            <x-components::form.label for="email">E-mail</x-components::form.label>
            <x-components::form.input wire:model="email" type="email" id="email" autofocus/>
            <x-components::form.error input="email"/>
        </div>
        <x-components::button variant="primary" type="submit">
            Redefinir Senha
        </x-components::button>
        <div class="text-center">
            <x-components::link wire:navigate href="#">
                Voltar para o login
            </x-components::link>
        </div>
    </x-components::form>
</x-components::card>
