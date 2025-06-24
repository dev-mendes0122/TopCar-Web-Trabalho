@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detalhes do Cliente</h1>

    <ul class="list-group mb-3">
        <li class="list-group-item"><strong>Nome:</strong> {{ $cliente->nome }}</li>
        <li class="list-group-item"><strong>Email:</strong> {{ $cliente->email }}</li>
        <li class="list-group-item"><strong>Telefone:</strong> {{ $cliente->telefone }}</li>
    </ul>

    <a href="{{ route('clientes.edit', $cliente) }}" class="btn btn-warning">Editar</a>
    <a href="{{ route('clientes.index') }}" class="btn btn-secondary">Voltar</a>
</div>
@endsection
