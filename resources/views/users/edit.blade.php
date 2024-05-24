<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Editar') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 ">
                    <p class="mb-4">Editando o nível de acesso do usuário <strong>{{$user->name}}</strong></p>
                    <p>O nível atual é: <strong>{{$user->level}}</strong></p>
                </div>
                <div class="p-6 text-gray-900 ">
                    <form action="{{route('user-update', $user->id)}}" method="post">
                        @csrf
                        @method('PUT')
                        <label for="level">Selcione o nível</label><br>
                        <select name="level" id="level" required class="py-1 px-10 rounded">
                            <option selected disabled value="">Selecione uma opção</option>
                            <option value="user">Usuário</option>
                            <option value="admin">Administrador</option>
                        </select>
                        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white py-2 px-4 rounded"><i class="fa-solid fa-floppy-disk mr-2"></i> Atualizar</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
