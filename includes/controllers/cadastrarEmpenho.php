<?php

session_start();
require_once '../models/ManipulateData.php';

$idCidade = addslashes($_POST["inputCidadeEmpenho"]);
$idPipeiroEmpenho = addslashes($_POST["inputPipeiroEmpenho"]);
$nc = addslashes($_POST["inputNC"]);
$ne = addslashes($_POST["inputNE"]);
$valorEmpenho = addslashes($_POST["inputValorEmpenho"]);
$mesEmpenho = addslashes($_POST["selectMesEmpenho"]);
$milLancou = $_SESSION["login"];
$statusEmpenho = 0;
$ipMaquina = $_SERVER["REMOTE_ADDR"];
$dataCadastro = date("Y-m-d");
$saldoAnterior = addslashes($_POST["inputSaldoEmpenho"]);


if ($_SESSION["nivel"] != "user") {

    /*
     *  se houver saldo anterior, o sistema irá pegar o 
     * saldo que está sendo passado pelo usuário e somar os valores
     */
    if (!empty($saldoAnterior)) {

        $valorEmp = $valorEmpenho;
        $valorEmp = str_replace(".", "", $valorEmp);
        $valorEmp = str_replace(",", ".", $valorEmp);

        $saldoAnt = $saldoAnterior;
        $saldoAnt = str_replace(".", "", $saldoAnt);
        $saldoAnt = str_replace(",", ".", $saldoAnt);

        $valorEmpenho = $saldoAnt + $valorEmp;
        
        $valorEmpenho = number_format($valorEmpenho, 2, ",", ".");
    }

    /*
     * Cadastrando o empenho no banco de dados.
     */
    $addEmpenho = new ManipulateData();
    $addEmpenho->setTable("empenho");
    $addEmpenho->setCamposBanco("nc_empenho, ne_empenho, valor_empenho, mes_pgto_empenho, militar_lancou_empenho, data_cadastro_empenho, status_empenho, ip_maquina_empenho");
    $addEmpenho->setDados("'$nc', '$ne', '$valorEmpenho', '$mesEmpenho', '$milLancou', '$dataCadastro', '$statusEmpenho', '$ipMaquina'");
    $addEmpenho->insert();

    /*
     * Buscando o id do ultimo registro inserido no banco para registrar a liquidação
     */
    $idEmpenho = mysql_insert_id();

    /*
     * Cadastrando no banco de dados a liquidação 
     */
    $addLiquidacao = new ManipulateData();
    $addLiquidacao->setTable("liquidacao_empenho");
    $addLiquidacao->setCamposBanco("pipeiro_id_pipeiro, empenho_id_empenho");
    $addLiquidacao->setDados("'$idPipeiroEmpenho', '$idEmpenho'");
    $addLiquidacao->insert();


    $_SESSION["empenho"] = "OK";
    header("Location: ../../lancarEmpenho.php?id=" . $idCidade);
} else {

    header("location: ../../accessDanied.php");
} 
 
