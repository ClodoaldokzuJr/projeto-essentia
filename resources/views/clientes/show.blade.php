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
        width: 220px;
        height: 220px;
        object-fit: cover;
        border-radius: 12px;
        border: 3px solid #ccc;
        margin-bottom: 20px;
    }

    .info-label {
        font-weight: bold;
        margin-top: 10px;
        display: block;
        color: #555;
    }

    .btn-back {
        margin-top: 20px;
        display: inline-block;
        padding: 10px 16px;
        background-color: #0d6efd;
        color: white;
        border-radius: 8px;
        text-decoration: none;
    }

    .btn-back:hover {
        background-color: #0b5ed7;
    }
</style>

@section('content')
<div class="container text-center">
    <h2>Detalhes do Cliente</h2>

    @if($cliente->foto)
        <img src="{{ $cliente->foto_url }}" alt="Foto de {{ $cliente->nome }}" class="cliente-foto">
    @else
        <p class="text-muted">Sem foto</p>
    @endif

    <p><span class="info-label">Nome:</span> {{ $cliente->nome }}</p>
    <p><span class="info-label">Email:</span> {{ $cliente->email }}</p>
    <p><span class="info-label">Telefone:</span> {{ $cliente->telefone }}</p>

    <a href="{{ route('clientes.index') }}" class="btn-back">← Voltar para a Lista</a>
</div>
@endsection