@extends('layoult.createImovel')

@section('title', 'Imóvel | Edit')

@section('content')

<div class="container">
    <div class="form">

        <form action="/Imoveis/{{ $imoveis->id }}" method="POST">
            @csrf
            @method('PUT')

            <label for="endereco">Endereço:</label>
            <input type="text" id="endereco" name="endereco" maxlength="100" value="{{ $imoveis->endereco }}">

            <label for="proprietario">Proprietário:</label>
            <input list="propri" id="proprietario" name="proprietario" autocomplete="off">

        <datalist id="propri">
            @foreach($proprietarios as $proprietario)

                <option value="{{ $proprietario->name }}">{{ $proprietario->name }}</option>

            @endforeach
        </datalist>

            <button type="submit" value="Editar Imóvel"> + Editar Imóvel</button>
        </form>

    </div>
</div>

@endsection
