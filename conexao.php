<?php
$server = "localhost";
$user = "root";
$password = "";
$banco_dados = "empresa";

if ($conn = mysqli_connect($server, $user, $password, $banco_dados)) {
    echo ""; // Tirei a palavra conectado poq estava bugando
} else
    echo "Erro";

function mensagem($texto, $tipo)
{
    echo "<div class='alert alert-$tipo' role='alert'> $texto </div>";
}
?>

<?php

?>