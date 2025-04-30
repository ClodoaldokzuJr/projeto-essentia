@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-6">
    <div class="flex justify-between items-center mb-4">
        <h2 class="text-2xl font-bold">Lista de Clientes</h2>
        <a href="{{ route('clientes.create') }}" class="bg-green-500 hover:bg-green-600 text-white font-bold py-2 px-4 rounded">
            Novo Cliente
        </a>
    </div>

    @if(session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
            {{ session('success') }}
        </div>
    @endif

    <table class="min-w-full bg-white border border-gray-200 rounded-lg overflow-hidden">
        <thead class="bg-gray-100 text-left text-gray-700">
            <tr>
                <th class="px-4 py-2">Foto</th>
                <th class="px-4 py-2">Nome</th>
                <th class="px-4 py-2">E-mail</th>
                <th class="px-4 py-2">Telefone</th>
                <th class="px-4 py-2 text-center">Ações</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($clientes as $cliente)
                <tr class="border-t">
                    <td class="px-4 py-2">
                        @if ($cliente->foto)
                            <img src="{{ asset('storage/' . $cliente->foto) }}" alt="Foto de {{ $cliente->nome }}" class="w-12 h-12 rounded-full object-cover">
                        @else
                            <span class="text-gray-400 italic">Sem foto</span>
                        @endif
                    </td>
                    <td class="px-4 py-2">{{ $cliente->nome }}</td>
                    <td class="px-4 py-2">{{ $cliente->email }}</td>
                    <td class="px-4 py-2">{{ $cliente->telefone }}</td>
                    <td class="px-4 py-2 text-center">
                        <a href="{{ route('clientes.show', $cliente->id) }}" class="text-blue-500 hover:underline mr-2">Ver</a>
                        <a href="{{ route('clientes.edit', $cliente->id) }}" class="text-yellow-500 hover:underline mr-2">Editar</a>
                        <form action="{{ route('clientes.destroy', $cliente->id) }}" method="POST" class="inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-500 hover:underline" onclick="return confirm('Tem certeza que deseja excluir este cliente?')">Excluir</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5" class="text-center text-gray-500 py-4">Nenhum cliente encontrado.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection