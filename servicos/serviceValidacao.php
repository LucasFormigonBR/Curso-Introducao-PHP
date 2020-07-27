<?php

function validaNome(string $nome): bool
{

    if (empty($nome)) {
        setarMensagemErro('O nome não pode ser vazio! Tente novamente.');
        return false;
    } else if (strlen($nome) < 3) {
        setarMensagemErro('O nome está muito curto! Tente novamente.');
        return false;
    } else if (strlen($nome) > 40) {
        setarMensagemErro('O nome está longo demais! Tente novamente.');
        return false;
    }
    return true;
}

function validadeIdade(string $idade): bool
{

    if (!is_numeric($idade)) {
        setarMensagemErro('A idade não está em forma numérica! Tente novamente.');
        return false;
    }
    return true;
}
