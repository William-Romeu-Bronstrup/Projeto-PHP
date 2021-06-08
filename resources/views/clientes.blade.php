@extends('layoult.main')

@section('title', 'Clientes')

@section('content')

<div class="create">

    <h3 id="h3">Adicionar um Cliente:</h3>
    <a id="a" href="Clientes/clientes"> + Adicionar</a>

</div>

<div class="search">

    <form action="/" method="GET">

        <h3 class="h3">Pesquise um Cliente:</h3>

        <input type="text" id="search" name="search" placeholder="Nome...">

        <a href="/" class="a">Ver todos</a>

    </form>

</div>

<table>
    <thead>
        <tr>
            <th>Nome</th>
            <th>Email</th>
            <th>Telefone</th>
            <th>Editar</th>
            <th>Deletar</th>
        </tr>
    </thead>
@foreach($clientes as $cliente)
    <tbody>
        <tr>
            <td>{{ $cliente->name }}</td>
            <td>{{ $cliente->email }}</td>
            <td>{{ $cliente->telefone }}</td>

            <td>
                <form action="/Clientes/{{ $cliente->id }}">
                    @csrf
                    @method('PUT')

                    <button type="submit" class="editar">Editar</button>
                </form>
            </td>

            <td>
                <form action="/{{ $cliente->id }}" method="post">
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
