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
                   <p class="mb-4">
                    Exibindo detalhes do cliente {{$cliente->nome}}
                   </p>
                   <p>
                      <a href="{{Route('meus.clientes', Auth::user()->id)}}" class="bg-blue-500 text-white rounded p-2">Meus Clientes</a>
                      <a href="{{Route('cliente.edit', $cliente->id )}}" class="bg-gray-500 text-white rounded p-2">Editar</a>
                      <a href="{{Route('cliente.delete', $cliente->id)}}" class="bg-red-500 text-white rounded p-2">Excluir</a>
                   </p>
                </div>

                <div class="p-6 text-gray-900">
                    <p>Id: <strong>{{$cliente->id}}</strong></p>
                    <p>Nome: <strong>{{$cliente->nome}}</strong></p>
                    <p>Telefone: <strong>{{$cliente->telefone}}</strong></p>
                    <p>E-mail: <strong>{{$cliente->email}}</strong></p>
                    <p>Empresa: <strong>{{$cliente->empresa}}</strong></p>
                    <p>Telefone Comercial: <strong>{{$cliente->tel_comercial}}</strong></p>
                    <p>Data de cadastro: <strong>{{ date('d/m/Y', strtotime($cliente->created_at))  }}</strong></p>
                    <p>Atualização: <strong>{{ date('d/m/Y', strtotime($cliente->updated_at))  }}</strong></p>
                 </div>
            </div>
        </div>
    </div>
</x-app-layout>
