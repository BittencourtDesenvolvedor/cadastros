<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edição de Clientes') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    @if (session('msg'))
                        <p class="bg-gray-500 p-2 rounded text-center text-white mb-4">{{ session('msg') }}</p>
                    @endif

                    <form action="{{Route('cliente.update', $cliente->id)}}" method="POST">
                         @csrf
                         @method('PUT')

                         <fieldset class="border-2 rounded p-6">
                            <legend>Preencha todos os campos</legend>

                             <input type="hidden" name="user_id" value="{{Auth::user()->id }}">

                            <div class="bg-gray-100 p-4 rounded overflow-hidden">
                                <label for="nome">Nome</label>
                                <input type="text" value="{{ $cliente->nome }}" name="nome" id="nome" class="w-full rounded" required autofocus>
                            </div>
                            <div class="bg-gray-100 p-4 rounded overflow-hidden">
                                <label for="email">E-mail</label>
                                <input type="email" value="{{ $cliente->email }}"  name="email" id="email" class="w-full rounded" required >
                            </div>
                            <div class="bg-gray-100 p-4 rounded overflow-hidden">
                                <label for="telefone">Telefone</label>
                                <input type="tel" value="{{ $cliente->telefone }}"  name="telefone" id="telefone" class="w-full rounded" required >
                            </div>
                            <div class="bg-gray-100 p-4 rounded overflow-hidden">
                                <label for="empresa">Empresa</label>
                                <input type="text" value="{{ $cliente->empresa }}"  name="empresa" id="empresa" class="w-full rounded" required >
                            </div>
                            <div class="bg-gray-100 p-4 rounded overflow-hidden">
                                <label for="tel_comercial">Telefone Comercial</label>
                                <input type="tel" value="{{ $cliente->tel_comercial }}"  name="tel_comercial" id="tel_comercial" class="w-full rounded" required >
                            </div>

                            <div class="bg-gray p-4 rounded overflow-hidden">
                                <input type="submit" value="Atualizar" class="bg-blue-500 text-white rounded py-2 px-6">
                            </div>

                         </fieldset>
                    </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
