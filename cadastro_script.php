<!doctype html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TSEND</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="shortcut icon" type="imagex/png" href="./img/LogoMarca.png">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <br>
    <div class="container">
        <div class="row">
            <?php
            include "conexao.php";

            $nome = $_POST['nome'];
            $movimentacao = $_POST['movimentacao'];
            $telefone = $_POST['telefone'];
            $email = $_POST['email'];
            $numero_processo = $_POST['numero_processo'];

            $sql = "INSERT INTO `pessoas`(`nome`, `movimentacao`, `telefone`, `email`, `numero_processo`) VALUES ('$nome','$movimentacao','$telefone','$email','$numero_processo')";

            if (mysqli_query($conn, $sql)) {
                mensagem("$nome Cadastrado com sucesso!", 'success');
            } else
                mensagem("$nome Não foi cadastrado!", 'danger');

            ?>
            <a href="index.php" class="botao">Voltar</a>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>