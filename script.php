<?php

include "servicos/serviceMensagemSessao.php";
include "servicos/serviceValidacao.php";
include "servicos/serviceCategoriaCompetidor.php";

$nome = $_POST['nome'];
$idade = $_POST['idade'];

defineCategoriaCompetidor($nome, $idade);

header('location: index.php');