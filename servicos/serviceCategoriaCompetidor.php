<?php


function defineCategoriaCompetidor(string $nome, string $idade): ?string
{

    $categoria = [];
    $categoria[] = 'Infantil';
    $categoria[] = 'Adolescentes';
    $categoria[] = 'Adultos';

    if (validaNome($nome) && validadeIdade($idade)) {

        removerMensagemErro();

        if ($idade >= 6 && $idade <= 12) {
            for ($i = 0; $i <= count($categoria); $i++) {
                if ($categoria[$i] == 'Infantil') {
                    setarMensagemSucesso("O nadador " . $nome . " compete na categoria " . $categoria[$i]);
                    return null;
                }
            }
        } else if ($idade >= 13 && $idade <= 18) {
            for ($i = 0; $i <= count($categoria); $i++) {
                if ($categoria[$i] == 'Adolescentes') {
                    setarMensagemSucesso("O nadador " . $nome . " compete na categoria " . $categoria[$i]);
                    return null;
                }
            }
        } else {
            for ($i = 0; $i <= count($categoria); $i++) {
                if ($categoria[$i] == 'Adultos') {
                    setarMensagemSucesso("O nadador " . $nome .  " compete na categoria " . $categoria[$i]);
                    return null;
                }
            }
        }
    } else {
        removerMensagemSucesso();
        return obterMensagemErro();
    }
}
