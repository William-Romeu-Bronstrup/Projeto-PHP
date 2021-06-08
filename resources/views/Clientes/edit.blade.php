@extends('layoult.createCliente')

@section('title', 'Cliente | Edit')

@section('content')

<div class="container">

    <div class="form">
        <form action="/Clientes/{{ $clientes->id }}" method="POST">
            @csrf
            @method('PUT')
            <label for="name">Nome:</label>
            <input type="text" id="name" name="name" maxlength="60" value="{{ $clientes->name }}">

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" value="{{ $clientes->email }}">

            <label for="telefone">Telefone:</label>
        <input type="text" id="telefone" name="telefone" maxlength="9" value="{{ $clientes->telefone }}">

            <button type="submit" value="Editar Cliente"> + Editar Cliente</button>
        </form>
    </div>
</div>

@endsection
