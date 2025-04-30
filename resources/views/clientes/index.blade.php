@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Lista de Clientes</h1>
    <a href="{{ route('clientes.create') }}" class="btn btn-primary">Adicionar Cliente</a>
    <table class="table mt-3">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Email</th>
                <th>Telefone</th>
                <th>Foto</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($clientes as $cliente)
                <tr>
                    <td>{{ $cliente->nome }}</td>
                    <td>{{ $cliente->email }}</td>
                    <td>{{ $cliente->telefone }}</td>
                    <td>
                        @if($cliente->foto)
                            <img src="{{ asset('storage/' . $cliente->foto) }}" alt="Foto do Cliente" style="width: 50px; height: 50px;">
                        @else
                            <span>Sem foto</span>
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('clientes.edit', $cliente->id) }}" class="btn btn-warning">Editar</a>
                        <form action="{{ route('clientes.destroy', $cliente->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Excluir</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection