<!doctype html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TSEND</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="shortcut icon" type="imagex/png" href="./img/LogoMarca.png">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">TSEND</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">

                    <li class="nav-item">
                        <a class="nav-link" href="cadastro.php">Cadastro</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="clientes.php">Processos</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>
    <br>
    <br>
    <div class="container">
        <div class="row">
            <div class="jumbotron">
                <h1 class="display-4">Gerenciador de Processo</h1>
                <p class="lead">Este é um sistema de gerenciamento de processo criado pela equipe TSEND.</p>
                <hr class="my-4">
                <p>Acesse as funções </p>
                <a class="btn btn-outline-primary" href="cadastro.php" role="button">Cadastro</a>
                <a class="btn btn-outline-primary" href="clientes.php" role="button">Meus Processos</a>
            </div>
        </div>
    </div>
    <br>
    <footer class="footer">
        <div class="left">
            <h4 class="title-footer">TSEND <span>Suporte</span></h4>
            <p class="links">

                <a href="cadastro.php" title="Html">Cadastrar</a>
                <a href="clientes.php" title="Css">Processos</a>
            </p>

            <p class="Copyright">Copyright TSEND 2023 &copy; Developed by José Mariotto Neto.</p>
        </div>
        <div class="right">
            <h4 class="title-footer">Contato</h4>
            <form action="https://api.staticforms.xyz/submit" method="POST">
                <input type="hidden" name="accessKey" value="8b78a1ad-e83b-4ad7-9f91-79ab10a208b7">
                <input type="text" name="name" placeholder="Nome" required />
                <input type="text" name="email" placeholder="E-mail" required />
                <input type="text" name="subject" placeholder="assunto" required />
                <textarea name="messagem" placeholder="Messagem" required=""></textarea>
                <input type="hidden" name="redirectTo" value="http://localhost:8080/Tsend/index.php">
                <button id="botaoEnviar" class="btn">Enviar</button>
            </form>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <script type="text/javascript">
    (
        function(n, r, l, d) {
            try {
                var h = r.head || r.getElementsByTagName("head")[0],
                    s = r.createElement("script");
                s.defer = true;
                s.setAttribute("type", "text/javascript");
                s.setAttribute("src", l);
                n.neuroleadId = d;
                h.appendChild(s);
            } catch (e) {}
        })(window, document, "https://cdn.leadster.com.br/neurolead/neurolead.min.js", "VRL7D6e8fRtE9i7d5EgTZy9Eg");
    </script>
    <script src="./js/script.js"></script>
</body>

</html>