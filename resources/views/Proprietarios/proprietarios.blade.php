@extends('layoult.createProprietario')

@section('title', 'Proprietário | Create')

@section('content')

<div class="container">
    <div class="form">

        <form action="/Proprietarios" method="POST">
            @csrf

            <label for="name">Nome:</label>
            <input type="text" id="name" name="name">

            <label for="email">Email:</label>
            <input type="email" id="email" name="email">

            <label for="telefone">Telefone:</label>
            <input type="text" id="telefone" name="telefone" maxlength="9">

            <button type="submit" value="Adicionar Proprietario"> + Adicionar Proprietário</button>
        </form>

    </div>
</div>

@endsection
