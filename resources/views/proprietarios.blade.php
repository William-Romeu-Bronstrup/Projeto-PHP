@extends('layoult.main')

@section('title', 'Proprietários')

@section('content')

<div class="create">

    <h3 id="h3">Adicionar um Proprietário:</h3>
    <a id="a" href="/Proprietarios/proprietarios"> + Adicionar</a>

</div>

<div class="search">

    <form action="/Proprietarios" method="GET">

        <h3 class="h3">Pesquise um Proprietário:</h3>

        <input type="text" id="search" name="search" placeholder="Nome...">

        <a href="/Proprietarios" class="a">Ver todos</a>

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
@foreach($proprietarios as $proprietario)
    <tbody>
        <tr>
            <td>{{ $proprietario->name }}</td>
            <td>{{ $proprietario->email }}</td>
            <td>{{ $proprietario->telefone }}</td>
            <td>
                <form action="/Proprietarios/{{ $proprietario->id }}">
                    @csrf
                    @method('PUT')

                    <button type="submit" class="editar">Editar</button>
                </form>
            </td>

            <td>
                <form action="/Proprietario/{{ $proprietario->id }}" method="POST">
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
