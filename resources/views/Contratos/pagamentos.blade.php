@extends('layoult.createContratosPay')

@section('title', 'Contrato | Pay')

@section('content')

<div class="container">

    <div class="clientes">

            @foreach($contratos as $contrato)
                <div class="box">
                <h3>{{ $contrato->cliente }}</h3>
                </div>
            @endforeach

    </div>

        <div class="content">

    @foreach($pagar as $pay)

    <h1>{{ $pay->diff }}</h1>

<div class="box1">
</div>

        <form action="/Contratos/Pagamentos/{{ $pay->id }}" method="POST">
            @csrf
            @method('PUT')

                <input type="hidden" name="diff" value="{{ $pay->diff - 1}}">

            <button type="submit">Pagar</button>
        </form>

<div class="box2">
</div>

    @endforeach

        </div>
</div>

<footer>
    <p>AlugaImóveis &copy; 2020 -- Todos os direitos reservados</p>
</footer>

@endsection
