@extends('layouts.app')

<style>
    body {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        background-color: #f4f6f8;
        padding: 20px;
    }

    .container {
        max-width: 960px;
        margin: auto;
        background: white;
        padding: 20px;
        border-radius: 12px;
        box-shadow: 0 0 10px rgba(0,0,0,0.05);
    }

    .cliente-foto {
        width: 280px;
        height: 280px;
        object-fit: cover;
        border-radius: 12px;
        border: 3px solid #ccc;
        margin-bottom: 20px;
    }

    .form-group {
        margin-bottom: 15px;
        text-align: left;
    }

    .form-label {
        font-weight: bold;
        margin-bottom: 5px;
        display: block;
    }

    .form-control {
        width: 100%;
        padding: 10px;
        border-radius: 6px;
        border: 1px solid #ccc;
    }

    .btn-primary {
        background-color: #0d6efd;
        border: none;
        padding: 10px 20px;
        border-radius: 8px;
        color: white;
    }

    .btn-primary:hover {
        background-color: #0b5ed7;
    }
</style>

@section('content')
<div class="container">
    <h2 class="text-center mb-4">Editar Cliente</h2>

    @if($cliente->foto)
        <div class="text-center">
            <img src="{{ $cliente->foto_url }}" alt="Foto atual de {{ $cliente->nome }}" class="cliente-foto">
        </div>
    @endif

    <form action="{{ route('clientes.update', $cliente) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label class="form-label">Nome</label>
            <input type="text" name="nome" class="form-control" value="{{ old('nome', $cliente->nome) }}" required>
        </div>

        <div class="form-group">
            <label class="form-label">Email</label>
            <input type="email" name="email" class="form-control" value="{{ old('email', $cliente->email) }}" required>
        </div>

        <div class="form-group">
            <label class="form-label">Telefone</label>
            <input type="text" name="telefone" class="form-control" value="{{ old('telefone', $cliente->telefone) }}" required>
        </div>

        <div class="form-group">
            <label class="form-label">Nova Foto (opcional)</label>
            <input type="file" name="foto" class="form-control">
        </div>

        <div class="text-center">
            <button type="submit" class="btn btn-primary">Salvar Alterações</button>
        </div>
    </form>
</div>
@endsection