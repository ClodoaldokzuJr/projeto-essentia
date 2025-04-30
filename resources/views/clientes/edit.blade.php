@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-6">
    <h2 class="text-2xl font-bold mb-4">Editar Cliente</h2>

    @if ($errors->any())
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
            <ul class="list-disc pl-5">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('clientes.update', $cliente->id) }}" method="POST" enctype="multipart/form-data" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
        @csrf
        @method('PUT')

        <div class="mb-4">
            <label for="nome" class="block text-gray-700 text-sm font-bold mb-2">Nome</label>
            <input type="text" name="nome" id="nome" value="{{ old('nome', $cliente->nome) }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
        </div>

        <div class="mb-4">
            <label for="email" class="block text-gray-700 text-sm font-bold mb-2">E-mail</label>
            <input type="email" name="email" id="email" value="{{ old('email', $cliente->email) }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
        </div>

        <div class="mb-4">
            <label for="telefone" class="block text-gray-700 text-sm font-bold mb-2">Telefone</label>
            <input type="text" name="telefone" id="telefone" value="{{ old('telefone', $cliente->telefone) }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
        </div>

        <div class="mb-4">
            <label for="foto" class="block text-gray-700 text-sm font-bold mb-2">Foto</label>
            <input type="file" name="foto" id="foto" class="block w-full text-sm text-gray-700">
            @if ($cliente->foto)
                <div class="mt-2">
                    <p class="text-gray-600 text-sm">Foto atual:</p>
                    <img src="{{ asset('storage/' . $cliente->foto) }}" alt="Foto atual" class="w-24 h-24 object-cover rounded-full mt-1">
                </div>
            @endif
        </div>

        <div class="flex items-center justify-between">
            <button type="submit" class="bg-yellow-500 hover:bg-yellow-600 text-white font-bold py-2 px-4 rounded">
                Atualizar
            </button>
            <a href="{{ route('clientes.index') }}" class="text-gray-500 hover:underline">Cancelar</a>
        </div>
    </form>
</div>
@endsection