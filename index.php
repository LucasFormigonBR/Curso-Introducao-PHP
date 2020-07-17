<?php
session_start();
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
    <?php
    $mensagemDeSucesso = isset($_SESSION['mensagem-de-sucesso']) ? $_SESSION['mensagem-de-sucesso'] : '';
    if (!empty($mensagemDeSucesso)) {
        echo $mensagemDeSucesso;
    }

    $mensagemDeErro = isset($_SESSION['mensagem-de-erro']) ? $_SESSION['mensagem-de-erro'] : '';
    if (!empty($mensagemDeErro)) {
        echo $mensagemDeErro;
    }
    ?>
    <form action="script.php" method="post">
        <p>Nome: <input type="text" name="nome"></p>
        <p>Idade: <input type="text" name="idade"></p>
        <input type="submit" value="Cadastrar">
    </form>
</body>

</html>