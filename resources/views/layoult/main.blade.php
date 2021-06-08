<!DOCTYPE html>
<html lang="pt_BR">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500&display=swap"
        rel="stylesheet">

        <link rel="stylesheet" href="css/style.css">

        <title>@yield('title')</title>
    </head>
<body>

<div class="container">
    <header>
        <nav>
            <ul>
                <a href="/"><li>Clientes</li></a>
                <a href="Proprietarios"><li>Proprietários</li></a>
                <a href="Imoveis"><li>Imóveis</li></a>
                <a href="Contratos"><li>Contratos</li></a>
            </ul>
        </nav>
    </header>
</div>

<div class="tabelas">

    @yield('content')

</div>

    <footer>
        <p>AlugaImóveis &copy; 2020 -- Todos os direitos reservados</p>
    </footer>

</body>
</html>
