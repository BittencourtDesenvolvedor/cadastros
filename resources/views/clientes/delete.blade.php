<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Deletar Cliente') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 ">
                     <p class="mb-4">Você tem certeza que deseja excluir o cliente {{ $id->nome }}? <br>
                            Essa ação será irreversível!
                    </p>
                    <p>
                        <form action="{{Route('cliente.destroy', $id->id)}}" method="post">
                            @csrf
                            @method('DELETE')

                            <button type="submit" class="bg-red-500 hover:bg-red-600 text-white py-2 px-6 rounded">Deletar</button>
                            <a href="{{Route('cliente.show', $id->id)}}" class="bg-gray-500 hover:bg-gray-900 text-white py-2.5 px-7 rounded">Cancelar</a>

                        </form>
                    </p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
