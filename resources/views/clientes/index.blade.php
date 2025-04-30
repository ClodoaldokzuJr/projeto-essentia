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
<div class="container py-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="mb-0">Lista de Clientes</h2>
        <a href="{{ route('clientes.create') }}" class="btn btn-success">+ Novo Cliente</a>
    </div>

    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show shadow-sm" role="alert">
            <strong>Pronto!</strong> {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Fechar"></button>
        </div>
    @endif

    @if($clientes->isEmpty())
        <div class="alert alert-warning text-center py-3 shadow-sm">
            Nenhum cliente cadastrado ainda.
        </div>
    @else
        <div class="table-responsive shadow-sm rounded bg-white p-3">
            <table class="table table-striped align-middle mb-0">
                <thead class="table-light">
                    <tr>
                        <th>Foto</th>
                        <th>Nome</th>
                        <th>Email</th>
                        <th>Telefone</th>
                        <th class="text-center">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($clientes as $cliente)
                        <tr>
                            <td style="width: 70px;">
                                @if($cliente->foto)
                                    <img src="{{ $cliente->foto_url }}" alt="Foto de {{ $cliente->nome }}" class="rounded-circle" width="50" height="50" style="object-fit: cover; border: 2px solid #dee2e6;">
                                @else
                                    <span class="text-muted">Sem foto</span>
                                @endif
                            </td>
                            <td>{{ $cliente->nome }}</td>
                            <td>{{ $cliente->email }}</td>
                            <td>{{ $cliente->telefone }}</td>
                            <td class="text-center">
                                <div class="d-flex justify-content-center gap-2 flex-wrap">
                                    <a href="{{ route('clientes.show', $cliente) }}" class="btn btn-sm btn-outline-primary">Ver</a>
                                    <a href="{{ route('clientes.edit', $cliente) }}" class="btn btn-sm btn-outline-warning">Editar</a>
                                    <form action="{{ route('clientes.destroy', $cliente) }}" method="POST" onsubmit="return confirm('Tem certeza que deseja excluir este cliente?');">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-sm btn-outline-danger">Excluir</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @endif
</div>
@endsection