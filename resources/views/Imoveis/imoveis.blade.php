@extends('layoult.createImovel')

@section('title', 'Imóvel | Create')

@section('content')

<div class="container">
    <div class="form">

        <form action="/Imoveis" method="POST">
            @csrf

            <label for="endereco">Endereço:</label>
            <input type="text" id="endereco" name="endereco" maxlength="100">

            <label for="proprietario">Proprietário:</label>
            <input list="propri" id="proprietario" name="proprietario" autocomplete="off">

            <datalist id="propri">
                @foreach($proprietarios as $proprietario)

                <option value="{{ $proprietario->name }}">{{ $proprietario->name }}</option>

                @endforeach
            </datalist>

            <button type="submit" value="Adicionar Imóvel"> + Adicionar Imóvel</button>
        </form>

    </div>
</div>

@endsection
