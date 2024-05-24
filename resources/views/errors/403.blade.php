<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Erro') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                        <p class="text-center bg-red-500 text-white p-4 rounded-lg">
                            Página autorizada somente para administradores! <br><br>
                            <a href="{{Route('dashboard')}}" class="bg-blue-500 text-white rounded py-2 px-6">Voltar</a>
                        </p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
