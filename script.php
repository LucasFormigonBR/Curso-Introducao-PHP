<?php

session_start();

$categoria = [];
$categoria[] = 'Infantil';
$categoria[] = 'Adolescentes';
$categoria[] = 'Adultos';
//print_r($categoria);

$nome = $_POST['nome'];
$idade = $_POST['idade'];

if (empty($nome)) {
    $_SESSION['mensagem-de-erro'] = 'O nome não pode ser vazio! Tente novamente.';
    header('location: index.php');
    return;
} else if (strlen($nome) < 3) {
    $_SESSION['mensagem-de-erro'] = 'O nome está muito curto! Tente novamente.';
    header('location: index.php');
    return;
} else if (strlen($nome) > 40) {
    $_SESSION['mensagem-de-erro'] = 'O nome está longo demais! Tente novamente.';
    header('location: index.php');
    return;
}  if (!is_numeric($idade)) {
    $_SESSION['mensagem-de-erro'] = 'A idade não está em forma numérica! Tente novamente.';
    header('location: index.php');
    return;
}

if ($idade >= 6 && $idade <= 12) {
    for ($i = 0; $i <= count($categoria); $i++) {
        if ($categoria[$i] == 'Infantil') {
            $_SESSION['mensagem-de-sucesso'] = "O nadador " . $nome . " compete na categoria infantil";
            header('location: index.php');
            return;
        }
    }
} else if ($idade >= 13 && $idade <= 18) {
    for ($i = 0; $i <= count($categoria); $i++) {
        if ($categoria[$i] == 'Adolescentes') {
            $_SESSION['mensagem-de-sucesso'] = "O nadador " . $nome . " compete na categoria adolescentes";
            header('location: index.php');
            return;
        }
    }
} else {
    for ($i = 0; $i <= count($categoria); $i++) {
        if ($categoria[$i] == 'Adultos')
            $_SESSION['mensagem-de-sucesso'] = "O nadador " . $nome .  "compete na categoria adultos";
        header('location: index.php');
        return;
    }
}
