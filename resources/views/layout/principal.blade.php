<html>
<head>
    <link href="/css/app.css" rel="stylesheet">
    <link href="/css/custom.css" rel="stylesheet">
    <title>Controle de estoque</title>
</head>
<body>
<div class="container">

    <nav class="navbar navbar-expand-sm navbar-dark bg-primary">
        <a href="/produtos" class="navbar-brand">Estoque Laravel</a>

        <div class="collapse navbar-collapse justify-content-end">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="/produtos" class="nav-link">Listagem</a>
                </li>
                <li class="nav-item">
                    <a href="/produtos/novo" class="nav-link" href="/produtos/novo">Novo</a>
                </li>
            </ul>
        </div>
    </nav>

    @yield('conteudo')

    <footer class="footer">
        <div class="container">
            <span class="text-muted">© Curso de Laravel do Alura.</span>
        </div>
    </footer>
</div>
</body>
</html>