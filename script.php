<?php

$categoria = [];
$categoria[] = 'Infantil';
$categoria[] = 'Adolescentes';
$categoria[] = 'Adultos';
//print_r($categoria);

$nome = $_POST['nome'];
$idade = $_POST['idade'];

if(empty($nome)){
    echo "O nome não pode ser vazio!";
    return;
}
if(strlen($nome) < 3){
    echo " O nome é muito curto! Deve conter a partir de 3 caracteres. Tente novamente.";
    return;
}
if(strlen($nome) > 40){
    echo "O nome é muito extenso!";
    return;
}

if ($idade >= 6 && $idade <= 12) {
    for ($i = 0; $i <= count($categoria); $i++)
    {
        if($categoria[$i] == 'Infantil')
        echo "O nadador ".$nome." compete na categoria infantil";
    }
} else if ($idade >= 13 && $idade <= 18) {
    for ($i = 0; $i <= count($categoria); $i++)
    {
        if($categoria[$i] == 'Adolescentes')
        echo "O nadador ".$nome." compete na categoria adolescentes";
    }
} else {
    for ($i = 0; $i <= count($categoria); $i++)
    {
        if($categoria[$i] == 'Adultos')
        echo "O nadador ".$nome." compete na categoria adultos";
    }
}
