@extends('layoult.main')

@section('title', 'Imóveis')

@section('content')

<div class="create">

    <h3 id="h3">Adicionar um Imóvel:</h3>
    <a id="a" href="/Imoveis/imoveis"> + Adicionar</a>

</div>

<div class="search">

    <form action="/Imoveis" method="GET">

        <h3 class="h3">Pesquise um Imóvel:</h3>

        <input type="text" id="search" name="search" placeholder="Endereço...">

        <a href="/Imoveis" class="a">Ver todos</a>

    </form>

</div>

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Endereço</th>
            <th>Proprietário</th>
            <th>Editar</th>
            <th>Deletar</th>
        </tr>
    </thead>
@foreach($imoveis as $imovel)
    <tbody>
        <tr>
            <td>{{ $imovel->id }}</td>
            <td>{{ $imovel->endereco }}</td>
            <td>{{ $imovel->proprietario }}</td>
            <td>
                <form action="/Imoveis/{{ $imovel->id }}">
                    @csrf
                    @method('PUT')

                    <button type="submit" class="editar">Editar</button>
                </form>
            </td>
            <td>
                <form action="/Imovel/{{ $imovel->id }}" method="POST">
                    @csrf
                    @method('DELETE')

                    <button type="submit" class="delete">Deletar</button>
                </form>
            </td>
        </tr>
    </tbody>
@endforeach
</table>

@endsection
