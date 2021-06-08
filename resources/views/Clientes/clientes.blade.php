@extends('layoult.createCliente')

@section('title', 'Cliente | Create')

@section('content')

<div class="container">

    <div class="form">
        <form action="/Clientes" method="POST">
            @csrf
            <label for="name">Nome:</label>
            <input type="text" id="name" name="name" maxlength="60">

            <label for="email">Email:</label>
            <input type="email" id="email" name="email">

            <label for="telefone">Telefone:</label>
            <input type="text" id="telefone" name="telefone" maxlength="9">

            <button type="submit" value="Adicionar Cliente"> + Adicionar Cliente</button>
        </form>
    </div>

</div>

@endsection
