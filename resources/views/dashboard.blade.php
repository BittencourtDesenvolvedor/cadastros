<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('HOME') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <p class="mb-4">Bem-vindo {{Auth::user()->name }}</p>
                </div>
            </div>

            <div class=" overflow-hidden shadow-sm sm:rounded-lg mt-4 grid grid-cols-2 gap-4">

                <div class=" bg-white p-6 text-gray-900">
                    <p class="mb-4 mt-4">Clientes Cadastrados: <strong><b>{{count($clientes)}}</b></strong></p>
                </div>

                <div class=" bg-white p-6 text-gray-900">
                    <p class="mb-4 mt-4">Usuários Cadastrados: <strong><b>{{count($usuarios)}}</b></strong></p>
                </div>


            </div>
        </div>
    </div>
</x-app-layout>
