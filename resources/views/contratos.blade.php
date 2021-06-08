@extends('layoult.main')

@section('title', 'Contratos')

@section('content')

<div class="create">

    <h3 id="h3">Adicionar um Contrato:</h3>
    <a id="a" href="/Contratos/contratos"> + Adicionar</a>

</div>

<div class="search">

    <form action="/Contratos" method="GET">

        <h3 class="h3">Pesquise um Contrato:</h3>

        <input type="text" id="search" name="search" placeholder="Cliente...">

        <a href="/Contratos" class="a">Ver todos</a>

    </form>

</div>

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Imóvel</th>
            <th>Cliente</th>
            <th>Data Início</th>
            <th>Data Final</th>
            <th>Taxa</th>
            <th>Aluguel</th>
            <th>Condomínio</th>
            <th>IPTU</th>
            <th>Pagar</th>
            <th>Editar</th>
            <th>Deletar</th>
        </tr>
    </thead>
@foreach($contratos as $contrato)
    <tbody>
        <tr>
            <td>{{ $contrato->id }}</td>
            <td>{{ $contrato->id_imovel }}</td>
            <td>{{ $contrato->cliente }}</td>
            <td>{{ $contrato->data_inicio }}</td>
            <td>{{ $contrato->data_final }}</td>
            <td>{{ $contrato->taxa }}</td>
            <td>{{ $contrato->aluguel }}</td>
            <td>{{ $contrato->condominio }}</td>
            <td>{{ $contrato->iptu }}</td>
            <td>
                <button class="pagar">
                    <a href="/Contratos/Pagamentos/{{ $contrato->id }}">Pagar</a>
                </button>
            </td>
            <td>
                <form action="/Contratos/{{ $contrato->id }}">
                    @csrf
                    @method('PUT')

                    <button type="submit" class="editar">Editar</button>
                </form>
            </td>
            <td>
                <form action="/Contrato/{{ $contrato->id }}" method="POST">
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
