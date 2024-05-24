<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Clientes') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">

               <div class="p-6 text-gray-900">
                    <a href="{{Route('meus.clientes', Auth::user()->id)}}" class="bg-blue-500 text-white rounded py-2 px-6">Meus Clientes</a>
               </div>

                <div class="p-6 text-gray-900">
                    @can('level')
                    <a href="{{Route('cliente.create')}}" class="bg-blue-500 text-white rounded py-2 px-6">Novo Cliente</a>
                    @endcan
                </div>

                <div class="p-6 text-gray-900">

                    <table class="table-auto w-full">
                        <thead class="text-left bg-gray-100 ">
                            <tr>
                                <th class="text-center">ID</th>
                                <th class="p-4">Nome</th>
                                <th>E-mail</th>
                                <th>Telefone</th>
                                <th>Usuário</th>
                                @can('level')
                                    <th class="text-center">Ações</th>
                                @endcan

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($clientes as $cliente )
                            <tr class="hover:bg-gray-200">
                                <td class="text-center">{{$cliente->id}}</td>
                               <td class="p-1">{{$cliente->nome}}</td>
                               <td>{{$cliente->email}}</td>
                               <td>{{$cliente->telefone}}</td>
                               <td>{{$cliente->user->name }}</td>
                               @can('level')
                                   <td class="text-center">
                                       <a href="{{route('cliente.edit', $cliente->id)}}" title="Ver o cadastro do cliente">Ver</a>
                                   </td>
                               @endcan

                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="p-3 bg-gray-100 rounded-lg mt-1">
                        {{ $clientes->links() }}
                    </div>
             </div>
            </div>
        </div>
    </div>
</x-app-layout>
