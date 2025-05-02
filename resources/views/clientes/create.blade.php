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

    .alert-success {
        background-color: #d1e7dd;
        border: 1px solid #badbcc;
        color: #0f5132;
        border-left: 6px solid #198754;
        padding: 12px 20px;
        border-radius: 8px;
        margin-bottom: 20px;
        font-weight: 500;
    }

    .table {
        width: 100%;
        border-collapse: collapse;
        margin-bottom: 20px;
    }

    .table th, .table td {
        padding: 12px 10px;
        text-align: left;
        border-bottom: 1px solid #dee2e6;
    }

    .table th {
        background-color: #f8f9fa;
        font-weight: 600;
    }

    .cliente-avatar {
        width: 50px;
        height: 50px;
        object-fit: cover;
        border-radius: 50%;
        border: 2px solid #e0e0e0;
    }

    .btn-actions {
        display: flex;
        flex-wrap: wrap;
        gap: 10px;
        justify-content: center;
    }

    .btn-actions form {
        display: inline;
    }

    .btn {
        padding: 6px 12px;
        font-size: 0.875rem;
        border-radius: 6px;
        text-decoration: none;
    }

    .btn-outline-primary {
        color: #0d6efd;
        border: 1px solid #0d6efd;
        background-color: white;
    }

    .btn-outline-warning {
        color: #ffc107;
        border: 1px solid #ffc107;
        background-color: white;
    }

    .btn-outline-danger {
        color: #dc3545;
        border: 1px solid #dc3545;
        background-color: white;
    }

    .btn:hover {
        opacity: 0.85;
    }
</style>
@section('content')
    <div class="container">
        <div class="header" style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px;">
            <h2 style="margin: 0;">Cadastro de Cliente</h2>
            <a href="{{ route('clientes.index') }}" style="
                background-color: #ccc;
                padding: 8px 16px;
                border-radius: 6px;
                text-decoration: none;
                color: #333;
                font-weight: bold;
                transition: background-color 0.3s;
            " onmouseover="this.style.backgroundColor='#aaa'" onmouseout="this.style.backgroundColor='#ccc'">
                ← Voltar
            </a>
        </div>

        @if ($errors->any())
            <div class="alert alert-danger" style="margin-bottom: 20px;">
                <ul style="margin: 0; padding-left: 20px;">
                    @foreach ($errors->all() as $erro)
                        <li>{{ $erro }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('clientes.store') }}" method="POST" enctype="multipart/form-data" style="background: #f9f9f9; padding: 20px; border-radius: 8px;">
            @csrf

            <div style="margin-bottom: 15px;">
                <label for="nome">Nome:</label><br>
                <input type="text" name="nome" id="nome" value="{{ old('nome') }}" required
                    style="width: 100%; padding: 10px; border-radius: 6px; border: 1px solid #ccc;">
            </div>

            <div style="margin-bottom: 15px;">
                <label for="email">Email:</label><br>
                <input type="email" name="email" id="email" value="{{ old('email') }}" required
                    style="width: 100%; padding: 10px; border-radius: 6px; border: 1px solid #ccc;">
            </div>

            <div style="margin-bottom: 15px;">
                <label for="telefone">Telefone:</label><br>
                <input type="text" name="telefone" id="telefone" value="{{ old('telefone') }}" required
                    style="width: 100%; padding: 10px; border-radius: 6px; border: 1px solid #ccc;">
            </div>

            <div style="margin-bottom: 20px;">
                <label for="foto">Foto:</label><br>
                <input type="file" name="foto" id="foto"
                    style="padding: 10px; border-radius: 6px; border: 1px solid #ccc; width: 100%;">
            </div>

            <div style="text-align: right;">
                <button type="submit" style="
                    background-color: #4CAF50;
                    color: white;
                    padding: 10px 20px;
                    border: none;
                    border-radius: 6px;
                    font-weight: bold;
                    cursor: pointer;
                    transition: background-color 0.3s;
                " onmouseover="this.style.backgroundColor='#45a049'" onmouseout="this.style.backgroundColor='#4CAF50'">
                    Cadastrar Cliente
                </button>
            </div>
        </form>
    </div>
@endsection