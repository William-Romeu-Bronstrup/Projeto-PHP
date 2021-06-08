@extends('layoult.createProprietario')

@section('title', 'Proprietário | Edit')

@section('content')

<div class="container">
    <div class="form">

        <form action="/Proprietarios/{{ $proprietarios->id }}" method="POST">
            @csrf
            @method('PUT')

            <label for="name">Nome:</label>
            <input type="text" id="name" name="name" value="{{ $proprietarios->name }}">

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" value="{{ $proprietarios->email }}">

            <label for="telefone">Telefone:</label>
            <input type="text" id="telefone" name="telefone" maxlength="9" value="{{ $proprietarios->telefone }}">

            <button type="submit" value="Editar Proprietario"> + Editar Proprietário</button>
        </form>

    </div>
</div>

@endsection
