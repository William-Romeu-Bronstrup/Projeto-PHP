@extends('layoult.createContratos')

@section('title', 'Contrato | Edit')

@section('content')

<div class="container">
    <div class="form">

        <form action="/Contratos/{{ $contratos->id }}" method="POST">
            @csrf
            @method('PUT')

            <label for="imov">Imóvel:</label>
            <input list="imoveis" type="text" id="imov" name="id_imovel" autocomplete="off">

            <datalist id="imoveis">
                @foreach($imoveis as $imovel)

                <option value="{{ $imovel->id }}">{{ $imovel->id}}</option>

                @endforeach
            </datalist>

            <label for="cli">Cliente:</label>
            <input list="clientes" type="text" id="cli" name="cliente" autocomplete="off">

            <datalist id="clientes">
                @foreach($clientes as $cliente)

                    <option value="{{ $cliente->name }}">{{ $cliente->name }}</option>

                @endforeach
            </datalist>

            <label for="date">Data Início:</label>
            <input type="date" id="date" name="data_inicio">

            <label for="data">Data Final:</label>
            <input type="date" id="data" name="data_final">

            <label for="taxa">Taxa de Adiministração:</label>
            <input type="text" id="taxa" name="taxa" autocomplete="off" value="{{ $contratos->taxa }}">

            <label for="aluguel">Aluguel:</label>
            <input type="text" id="aluguel" name="aluguel" autocomplete="off" value="{{ $contratos->aluguel }}">

            <label for="condominio">condomínio:</label>
            <input type="text" id="condominio" name="condominio" autocomplete="off" value="{{ $contratos->condominio }}">

            <label for="iptu">IPTU:</label>
            <input type="text" id="iptu" name="iptu" autocomplete="off" value="{{ $contratos->iptu }}">

            <button type="submit" value="Editar Contrato"> + Editar Contrato</button>
        </form>

    </div>
</div>

@endsection
