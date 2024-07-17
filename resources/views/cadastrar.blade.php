<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Cadastro') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form action="/cadastrar" method="post">
                        @csrf <!-- token de formulario -->
                        <div>
                            <x-input-label for="nome" :value="__('Nome')" />
                            <x-text-input id="nome" class="block mt-1 w-full" type="text" name="nome" :value="old('nome')" required autofocus />
                            <x-input-error :messages="$errors->get('nome')" class="mt-2" />
                        </div>
                        <div class="mt-4">
                            <x-input-label for="nascimento" :value="__('Data de Nascimento')" />
                            <x-text-input id="nascimento" class="block mt-1 w-full" type="date" name="nascimento" :value="old('nascimento')" required />
                            <x-input-error :messages="$errors->get('nascimento')" class="mt-2" />
                        </div>
                        <div class="mt-4">
                            <x-input-label for="nacionalidade" :value="__('Nacionalidade')" />
                            <x-text-input id="nacionalidade" class="block mt-1 w-full" type="text" name="nacionalidade" :value="old('nacionalidade')" required />
                            <x-input-error :messages="$errors->get('nacionalidade')" class="mt-2" />
                        </div>
                        <div class="mt-4">
                            <x-input-label for="peso" :value="__('Peso')" />
                            <x-text-input id="peso" class="block mt-1 w-full" type="number" name="peso" :value="old('peso')" required step="0.01" />
                            <x-input-error :messages="$errors->get('peso')" class="mt-2" />
                        </div>
                        <div class="mt-4">
                            <x-input-label for="arte_marcial" :value="__('Arte Marcial')" />
                            <x-text-input id="arte_marcial" class="block mt-1 w-full" type="text" name="arte_marcial" :value="old('arte_marcial')" required />
                            <x-input-error :messages="$errors->get('arte_marcial')" class="mt-2" />
                        </div>

                        <div class="flex items-center justify-end mt-4">
                            <x-primary-button class="ms-4">
                                {{ __('Confirmar') }}
                            </x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
