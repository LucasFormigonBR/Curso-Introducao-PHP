<?php

$categoria = [];
$categoria[] = 'Infantil';
$categoria[] = 'Adolescentes';
$categoria[] = 'Adultos';
//print_r($categoria);

$nome = 'Lucas';
$idade = '7';

//var_dump($nome);
//var_dump($idade);

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
