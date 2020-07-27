<?php
include "servicos/serviceMensagemSessao.php";
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Introdução ao PHP</title>
</head>

<body>
    <h2>Formulario</h2>
    <form action="script.php" method="post">
        <?php
        $mensagemDeSucesso = obterMensagemSucesso();
        if (!empty($mensagemDeSucesso)) {
            echo $mensagemDeSucesso;
        }

        $mensagemDeErro = obterMensagemErro();
        if (!empty($mensagemDeErro)) {
            echo $mensagemDeErro;
        }
        ?>
        <p>Nome: <input type="text" name="nome"></p>
        <p>Idade: <input type="text" name="idade"></p>
        <input type="submit" value="Cadastrar">
    </form>
</body>

</html>