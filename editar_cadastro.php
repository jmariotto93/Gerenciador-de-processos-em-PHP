<!doctype html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TSEND</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="shortcut icon" type="imagex/png" href="./img/LogoMarca.png">
</head>

<body>

    <?php
    include "conexao.php";
    $id = $_GET['id'] ?? '';

    $sql = "SELECT * FROM pessoas WHERE cod_pessoa = $id";

    $dados = mysqli_query($conn, $sql);
    $linhaDeDados = mysqli_fetch_assoc($dados);


    ?>


    <nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">TSEND</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
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
                    <li class="nav-item">
                        <a class="nav-link" href="clientes.php">Seus Clientes</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        <div class="row">
            <div class="col">
                <h1>Editar Cadastro</h1>
                <form action="edit_script.php" method="POST">
                    <div class="form-group">
                        <label for="nome" class="form-label"><b>Nome Completo</b> </label>
                        <input type="text" class="form-control" name="nome" required value="<?php echo $linhaDeDados['nome']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="telefone" class="form-label"><b>Telefone</b></label>
                        <input type="text" class="form-control" name="telefone" required value="<?php echo $linhaDeDados['telefone']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="email" class="form-label"><b>E-Mail</b></label>
                        <input type="email" class="form-control" name="email" required value="<?php echo $linhaDeDados['email']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="numeroProcesso" class="form-label"><b>Numero de Processo</b></label>
                        <input type="text" class="form-control" name="numero_processo" required value="<?php echo $linhaDeDados['numero_processo']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="movimentacao" class="form-label"><b>Movimentações</b></label>
                        <input type="text" class="form-control" name="movimentacao" required value="<?php echo $linhaDeDados['movimentacao']; ?>">
                    </div>
                    <br>
                    <div class="form-group">
                        <input type="submit" class="btn btn-outline-primary" value="Salvar Alterações">
                        <input type="hidden" name="id" value="<?php echo $linhaDeDados['cod_pessoa']; ?>">
                        <a class="btn btn-outline-primary" href="clientes.php" role="button">Voltar</a>

                    </div>



                </form>

            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>