@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-6">
    <h2 class="text-2xl font-bold mb-4">Detalhes do Cliente</h2>

    <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
        <div class="mb-4">
            <strong class="text-gray-700">Nome:</strong>
            <p class="text-gray-900">{{ $cliente->nome }}</p>
        </div>

        <div class="mb-4">
            <strong class="text-gray-700">E-mail:</strong>
            <p class="text-gray-900">{{ $cliente->email }}</p>
        </div>

        <div class="mb-4">
            <strong class="text-gray-700">Telefone:</strong>
            <p class="text-gray-900">{{ $cliente->telefone }}</p>
        </div>

        @if ($cliente->foto)
            <div class="mb-4">
                <strong class="text-gray-700">Foto:</strong>
                <img src="{{ asset('storage/' . $cliente->foto) }}" alt="Foto de {{ $cliente->nome }}" class="w-32 h-32 object-cover rounded-full mt-2">
            </div>
        @endif

        <div class="flex items-center justify-start mt-6">
            <a href="{{ route('clientes.edit', $cliente->id) }}" class="bg-yellow-500 hover:bg-yellow-600 text-white font-bold py-2 px-4 rounded mr-2">
                Editar
            </a>
            <a href="{{ route('clientes.index') }}" class="text-gray-500 hover:underline">Voltar para a lista</a>
        </div>
    </div>
</div>
@endsection