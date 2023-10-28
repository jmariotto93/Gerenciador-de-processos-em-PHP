<!doctype html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TSEND</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="shortcut icon" type="imagex/png" href="./img/LogoMarca.png">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="import" href="./projeto-gti/main.py">
</head>

<body>
    <?php
    include "conexao.php";

    $pesquisa = $_POST['busca'] ?? '';


    $sql = "SELECT * FROM pessoas WHERE nome LIKE '%$pesquisa%'";

    $dados = mysqli_query($conn, $sql);

    ?>


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
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="cadastro.php">Cadastro</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>
    <br>


    <div class="marginProcessos">
        <div class="row">
            <div class="col">
                <h1>Gerenciamento de Processos</h1>

                <nav class="navbar bg-body-tertiary gap-2">

                    <form class="d-flex gap-1" role="search" action="clientes.php" method="POST">
                        <input class="form-control me-2" type="search" placeholder="Nome" aria-label="Search"
                            name="busca" autofocus>
                        <button class="btn btn-outline-primary" type="submit">Pesquisar</button>

                    </form>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <a class="btn btn-outline-primary" href="cadastro.php" role="button">Novo Cliente</a>


                    </div>

                </nav>

                <hr color="black" size="5" width="100%">

                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr class="table table-dark">
                                <th scope="col">Nome</th>
                                <th scope="col">Telefone</th>
                                <th scope="col">Email</th>
                                <th scope="col">Número do Processo</th>
                                <th scope="col">Movimentações</th>
                                <th scope="col">Funções</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            while ($linhaDeDados = mysqli_fetch_assoc($dados)) {
                                $cod_pessoa = $linhaDeDados['cod_pessoa'];
                                $nome = $linhaDeDados['nome'];
                                $movimentacao = $linhaDeDados['movimentacao'];
                                $telefone = $linhaDeDados['telefone'];
                                $email = $linhaDeDados['email'];
                                $numero_processo = $linhaDeDados['numero_processo'];

                                echo "
                                <tr>
                                    <th scope='row'>$nome</th>
                                    <td>$telefone</td>
                                    <td>$email</td>
                                    <td>$numero_processo</td>
                                    <td>$movimentacao</td>
                                    <td><a class='btn btn-outline-warning btn-sm' href='editar_cadastro.php?id=$cod_pessoa' role='button'>Editar</a>
                                    <a class='btn btn-outline-danger btn-sm' href='#' role='button' data-bs-toggle='modal'
                                    data-bs-target='#confirma'
                                    onClick=" . '"' . "pegarDados($cod_pessoa, '$nome')" . '"' . ">Excluir</a>
            
                                    </td>
                                </tr>
                            ";
                            }
                            ?>
                            <!-- onClick="pegarDados($id, '$nome')" -->


                        </tbody>
                    </table>
                </div>



                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <button class="btn btn-outline-primary" type="button" onclick="fazerScraping()">Fazer
                        Scraping</button>
                    <button class="btn btn-outline-primary" type="button" onclick="enviarEmail()">Enviar</button>
                </div>

                <hr color="black" size="5" width="100%">

                <div class="form-group">

                    <a class="btn btn-outline-primary" href="index.php" role="button">Voltar</a>

                </div>


            </div>
        </div>
    </div>


    <!-- Modal -->
    <div class="modal fade" id="confirma" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Confirmação de exclusão</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="excluir_script.php" method="POST">

                        <p>Deseja excluir <b id="nome_pessoa">Nome da pessoa</b>?</p>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-primary" data-bs-dismiss="modal">Não</button>
                    <input type="hidden" name="nome" id="nomeDaPessoa" value="">
                    <input type="hidden" name="id" id="cod_pessoa" value="">
                    <input type="submit" class="btn btn-outline-danger" value="Excluir">
                    </form>
                </div>
            </div>
        </div>
    </div>



    <script type="text/javascript">
    function pegarDados(id, nome) {
        document.getElementById('nome_pessoa').innerHTML = nome;
        document.getElementById('cod_pessoa').value = id;
        document.getElementById('nomeDaPessoa').value = nome;
    }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>

</body>

</html>