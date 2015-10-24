<?php

require_once '../classes/dadosExternos.php';

$dados = new DadosExcel();
$dados->setArquivoExcel("../../dadosExcel/cidadesTeste.csv");
$dados->insereDadosCidade();

echo 'Dados inseridos';

